<?php
// Include config file
include_once(__DIR__ . '/db/db.php');

$id = $_GET['maphong'];
$sql = "SELECT * FROM phong WHERE maphong='$id'";
$result = $conn->query($sql);
$room = null;

if ($result->num_rows > 0) {
  $room = $result->fetch_object();
}


$sql = "SELECT * FROM khachsan WHERE makhachsan='$room->makhachsan'";
$result = $conn->query($sql);

$hotel = null;

if ($result->num_rows > 0) {
  $hotel = $result->fetch_object();
}


if (isset($_POST['create-order']) &&  $_POST['create-order']) {


  $email = $_POST['email'];
  $ho = $_POST['ho'];
  $ten = $_POST['ten'];
  $quocgia = $_POST['quocgia'];
  $makh = null;

  // them khach hang

  $sql = "SELECT id FROM khachhang order by id desc limit 1";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $lastCustomer = $result->fetch_object();
    $makh = "KH000" . ($lastCustomer->id + 1);
  } else {
    $makh = "KH0001";
  }

  $sql = "INSERT INTO khachhang
  (email, ho,ten,quocgia,makh) 
  VALUES('$email', '$ho','$ten','$quocgia','$makh');";

  if (!mysqli_query($conn, $sql)) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    die();
  }

  // them hoa don 

  $email = $_POST['email'];
  $mahd = null;

  $sql = "SELECT id FROM hoadon order by id desc limit 1";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $lastCustomer = $result->fetch_object();
    $mahd = "KH000" . ($lastCustomer->id + 1);
  } else {
    $mahd = "KH0001";
  }

  $sql = "INSERT INTO hoadon
  (mahd,makh,gia,maphong,tongtien, trangthai) 
  VALUES('$mahd', '$makh','$room->gia','$id','$room->gia', 'cho-xac-nhan');";

  if (!mysqli_query($conn, $sql)) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    die();
  }




  $sql = "INSERT INTO chitiethoadon
  (mahd,ngaynhanphong,ngaytraphong,songuoi) 
  VALUES('$mahd', '$room->ngaynhanphong','$room->ngaytraphong','$room->songuoi');";

  if (!mysqli_query($conn, $sql)) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    die();
  }



  $message = "Đặt phòng thành công, chúng tôi sẽ liên hệ lại cho bạn";

  // them chi tiet hoa don

}




?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Đặt phòng</title>
  <link rel="stylesheet" href="css/BookHotelRoom.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/Header.css">
</head>

<body class="pb-4">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <header>
    <?php include "./Header.php" ?>
  </header>
  <div class='main bg-light'>
    <div class="row-container-sm bg-light">
      <div class='main_header'>
        <h3 class="p-3 pb-1">Thông tin đặt phòng</h3>
      </div>
      <div class="container">
        <div class="row">
          <?php if (isset($_POST['create-order']) &&  $_POST['create-order']) : ?>
            <div class="alert alert-primary"><?= $message ?></div>
          <?php endif ?>
          <div class="left col-sm-8">
            <div class="row card mt-3 pe-3 pb-4 thongtinkhach">
              <h5 class="p-2">Thông tin người liên hệ</h5>
              <form class="row g-4" method="post">
                <div class="d-flex me-1">
                  <div class="form-body-item col-md-6">
                    <label for="validationServerUsername" class="form-label">Họ*</label>
                    <div class="input-group has-validation">
                      <input name="ho" type="text" class="form-control is-invalid border border-1" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                      <div id="validationServerUsernameFeedback " class="invalid-feedback text-black-50">
                        Họ tên như trên CMND/CCCD/Hộ chiếu (không dấu).
                      </div>
                    </div>
                  </div>
                  <div class="form-body-item col-md-6 ms-3 ">
                    <label for="validationServer02" class="form-label">Tên đệm & tên*</label>
                    <input name="ten" type="text" class="form-control " id="validationServer02" value="" required>
                  </div>
                </div>

                <div class="d-flex me-1 mt-6">
                  <div class="form-body-item col-md-6 ">
                    <label for="validationServer02" class="form-label">Số điện thoại*</label>
                    <input name="sdt" type="text" class="form-control " id="validationServer02" value="" required>
                  </div>
                  <div class="form-body-item col-md-6 ms-3">
                    <label for="validationServer03" class="form-label">Email*</label>
                    <input name="email" type="text" class="form-control " id="validationServer03" aria-describedby="validationServer03Feedback" required>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                    </div>
                  </div>
                </div>
                <div class="form-body-item col-md-6 mt-6">
                  <label for="validationServer04" class="form-label">Quốc gia</label>
                  <select name="quocgia" class="form-select " aria-label="Default select example">
                    <option selected>Việt Nam</option>
                    <option value="1">Trung quốc</option>
                    <option value="2">Thái Lan</option>
                    <option value="3">Hàn Quốc</option>
                </div>
                <div class="form-body-item col-mb-6 mt-3 form-check ">

                  <input style="display:none" type="checkbox" class="form-check-input" id="exampleCheck1">

                  <!-- <label class="form-check-label" for="exampleCheck1">Tôi là người lưu trú</label> -->               
                </div>
              </form>
              
              
            </div>
            <div class="row card mt-3  payment">
            <h5 class="mt-3">Phương thức thanh toán</h5>
              <div class="form-check">
               <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                <label class="form-check-label" for="flexRadioDefault1">
                 Thanh toán sau
                </label>
                <p class=" fw-lighter">Chỗ nghỉ sẽ xử lý thanh toán. Tùy vào điều kiện đặt phòng mà bạn có thể thanh toán 1 phần hoặc toàn bộ tại chỗ nghỉ.</p>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked />
                <label class="form-check-label" for="flexRadioDefault2">
                  Thanh toán ngay
                </label>
                <p class=" fw-lighter">Hahalolo sẽ hỗ trợ xử lý thanh toán của bạn. Bạn sẽ thanh toán toàn bộ hôm nay khi hoàn tất đặt phòng</p>
              </div>
          </div>
          <!-- <div class="row card mt-3 pe-3 pb-4 payment1">
            <h5 class="mt-3">Thông tin thanh toán</h5>
            <form>
              <form class="row g-4 ">
                <div class="form-body-item col-mb-6 mt-3 form-check ">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Sử dụng thông tin người liên hệ</label>
                </div>
                <div class="d-flex me-1">
                  <div class="form-body-item col-md-6">
                    <label for="validationServerUsername" class="form-label">Họ*</label>
                    <div class="input-group has-validation">
                      <input type="text" class="form-control is-invalid border border-1" id="validationServerUsername"
                        aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                      <div id="validationServerUsernameFeedback " class="invalid-feedback text-black-50">
                        Họ tên như trên CMND/CCCD/Hộ chiếu (không dấu).
                      </div>
                    </div>
                  </div>
                  <div class="form-body-item col-md-6 ms-3 ">
                    <label for="validationServer02" class="form-label">Tên đệm & tên*</label>
                    <input type="text" class="form-control " id="validationServer02" value="" required>
                  </div>
                </div>

                <div class="d-flex me-1 mt-6">
                  <div class="form-body-item col-md-6 ">
                    <label for="validationServer02" class="form-label">Số điện thoại*</label>
                    <input type="text" class="form-control " id="validationServer02" value="" required>
                  </div>
                  <div class="form-body-item col-md-6 ms-3">
                    <label for="validationServer03" class="form-label">Email*</label>
                    <input type="text" class="form-control " id="validationServer03"
                      aria-describedby="validationServer03Feedback" required>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                    </div>
                  </div>
                </div>
                <div class="form-body-item col-md-12 pe-3 ">
                  <label for="validationServer02" class="form-label">Địa chỉ*</label>
                  <input type="text" class="form-control " id="validationServer02" value="" required>
                </div>
                <div class="d-flex me-1">
                  <div class="form-body-item col-md-6">
                    <label for="validationServerUsername" class="form-label">Quốc gia*</label>
                    <select class="form-select" aria-label="Default select example">
                      <option selected>Việt Nam</option>
                      <option value="1">Trung quốc</option>
                      <option value="2">Thái Lan</option>
                      <option value="3">Hàn Quốc</option>
                    </select>
                  </div>
                  <div class="form-body-item col-md-6 ms-3 ">
                    <label for="validationServer02" class="form-label">Bang/Thành phố*</label>
                    <input type="text" class="form-control " id="validationServer02" value="" required>
                  </div>
                </div>


              </form>
            </form>
          </div> -->
          <div class="row card mt-3 pe-3 pb-4 payment2">
            <h5 class="mt-3">Hình thức thanh toán</h5>
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Thẻ ATM hoặc iBanking của các ngân hàng trong nước
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <label for="validationServer02" class="form-label fw-lighter">Hỗ trợ các cổng thanh toán</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                      <img src="./img/payme.png" style=" height: 30px; width: 80px" alt="" srcset="">

                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                      <img src="./img/alepay.png" style=" height: 30px; width: 70px" alt="" srcset="">

                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Thẻ thanh toán quốc tế (Visa/Master)
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                  <label for="validationServer02" class="form-label fw-lighter">Hỗ trợ các cổng thanh toán</label>
                  <div class="images_item_payment d-flex">
                    <img src="./img/images.jpg" alt="" srcset="" style = "height: 30px; width: 70px" class = "images_item_payment_body">
                    <img src="./img/visa.jpg" alt="" srcset="" style = "height: 30px; width: 70px" class = "images_item_payment_body">
                    <img src="./img/american_express.jpg" alt="" srcset="" style = "height: 30px; width: 70px" class = "images_item_payment_body">
                    <img src="./img/UnionPay.jpg" alt="" srcset="" style = "height: 30px; width: 70px" class = "images_item_payment_body">
                    <img src="./img/discoverk.jpg" alt="" srcset="" style = "height: 30px; width: 70px" class = "images_item_payment_body">
                    <img src="./img/JCB.jpg" alt="" srcset="" style = "height: 30px; width: 70px" class = "images_item_payment_body">
                  </div>
                  <form>
              <form class="row g-4">
                <div class="d-flex me-1">
                <div class="form-body-item col-md-6 ms-3 ">
                    <label for="validationServer02" class="form-label">Số thẻ</label>
                    <input type="text" class="form-control " id="validationServer02" value="" required>
                  </div>
                  <div class="form-body-item col-md-6 ms-3 ">
                    <label for="validationServer02" class="form-label">Tên chủ thẻ</label>
                    <input type="text" class="form-control " id="validationServer02" value="" required>
                  </div>
                </div>

                <div class="d-flex me-1 mt-6">
               
                <div class="form-body-item col-md-3 ms-3">
                    <label for="validationServer02" class="form-label">Ngày hết hạn</label>
                    <input type="text" class="form-control " id="validationServer02" value="" required>
                    
                  </div>

                  <div class="form-body-item col-md-3 ms-3 ">
                    <label for="validationServer02" class="form-label">Mã CVC</label>
                    <input type="text" class="form-control " id="validationServer02" value="" required>
                  </div>
                  
                </div>
              </form>
            </form>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="row card mt-3 pe-3 pb-4 note">
            <h5 class="mt-3">Bạn cần thêm gì không?</h5>
            <form>
              <form class="row g-4">
                <p>Chúng tôi sẽ thông báo cho nơi lưu trú biết rằng bạn đang quan tâm đến các dịch vụ này, để họ có
                  thể cungcấp thông tin chi tiết và gửi cho bạn.</p>
                <div class="form-body-item col-md-11 ms-3 ">
                  <label for="validationServer02" class="form-label fw-lighter">Yêu cầu của bạn có thể không được đảm
                    bảo. Đừng lo! Chỗ nghỉ sẽ cố gắng sắp xếp cho bạn.</label>
                  <input type="text" class="form-control " id="validationServer02" value="Yêu cầu của bạn" required>
                </div>
              </form>
            </form>
          </div>
          <div class="row card mt-3 pe-3 pb-4 note1">
            <h5 class="mt-3">Lưu ý quan trọng cho thông tin đặt chỗ</h5>
            <form>
              <form class="row g-4">
                <div class="row card">
                  <p>- Nếu dự tính đến nơi sau 3PM 08/01/2022, vui lòng thông báo cho nhà cung cấp dịch vụ lưu trú về
                    thời gian nhận phòng dự kiến của bạn: Thứ Bảy, ngày 8 tháng 01 năm 2022.</p>
                  <div class="form-body-item form-floating col-md-3">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                      <option selected>Tôi chưa biết</option>
                      <option value="1">00:00-01:00</option>
                      <option value="2">01:00-02:00</option>
                      <option value="2">02:00-03:00</option>
                      <option value="2">03:00-04:00</option>
                      <option value="2">04:00-05:00</option>
                      <option value="2">05:00-06:00</option>
                      <option value="2">06:00-07:00</option>
                      <option value="2">07:00-08:00</option>
                      <option value="2">08:00-09:00</option>
                      <option value="2">09:00-10:00</option>
                      <option value="2">10:00-11:00</option>
                      <option value="2">11:00-12:00</option>
                      <option value="2">12:00-13:00</option>
                      <option value="2">13:00-14:00</option>
                    </select>
                    <label for="floatingSelect">Thời gian</label>
                  </div>
                  <p>- Các dịch vụ khác có thể sẽ tính phí. Vui lòng liên hệ trước với nơi lưu trú để biết thêm thông
                    tin.</p>
                </div>
              </form>
            </form>
          </div>
          <div class="row card mt-2 note">
            <p>Tiếp tục thực hiện bước tiếp theo, tôi xác nhận đã xem và chấp thuận các <a href=""
                class="text-info">Điều khoản - Chính sách</a> và <a href="" class="text-info">Chính sách riêng tư</a>
              của Hahalolo </p>

          </div>
          <input name="create-order" type="submit" class="btn_payment btn btn-info mt-3 mx-0" value="Thanh toán" />
          </div>
          <div class="right col-sm-4 mt-3">
            <div class="card">
              <h5 class="p-3 card_titler">Thông tin phòng</h5>
              <img src="<?= strlen($room->anh) < 1 ? "https://vnpi-hcm.vn/wp-content/uploads/2018/01/no-image-800x600.png" : $room->anh ?>" class="mt-3" alt="...">
              <div class="card-body">
                <b class="card_titler"> <?= $hotel->tenkhachsan ?></b>
                <i class="d-block">
                  <?= $hotel->diachi ?></a>
                </i>
                <div class="text_item d-flex">
                  <p style="width:70% ">Bạn đã chọn</p>
                  <div>
                    <p> <?= $room->tenphong ?> </p>
                    <a href="/hotel_detail.php?makhachsan=<?= $hotel->makhachsan ?>" style="font-size: 12px " class="text-info">Thay đổi lựa chọn</a>
                  </div>

                </div>
                <div class="text_item d-flex">
                  <p style="width:30% ">Nhận phòng</p>
                  <p><?= date("d-m-Y", strtotime($room->ngaynhanphong)) ?></p>
                </div>
                <div class="text_item d-flex">
                  <p style="width:30% ">Trả phòng </p>
                  <p><?= $room->ngaytraphong ? date("d-m-Y", strtotime($room->ngaytraphong)) : "Chưa xác định" ?></p>
                </div>
                <div class="text_item d-flex">
                  <p style="width:30% ">Khách lưu trú</p>
                  <p> <?= $room->songuoi ?> người </p>
                </div>
              </div>
            </div>
            <div class="card mt-3">
              <h5 class="p-3 mt-3 card_titler">Chi tiết giá phòng của bạn</h5>
              <div class="card-body">
                <div class="text_bodẻ_item border rounded-3 d-flex mb-2">
                  <div class="text_item_price p-2">
                    <p style="font-size: 12px"> (Giá 1 phòng, 1 đêm)</p>
                    <p><?= number_format($room->gia) ?> đ</p>
                  </div>
                </div>
                <div class="text_item d-flex text-info">
                  <p style="width:80% ">Thuế và phí</p>
                  <?= number_format($room->gia) ?> đ
                </div>
                <div class="text_item d-flex">
                  <p style="width:80% ">Phí thanh toán</p>
                  <p>0đ</p>
                </div>
                <div class="text_item d-flex">
                  <p style="width:80% ">Tổng thanh toán</p>
                  <?= number_format($room->gia) ?> đ
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  </div>

</body>

</html>

