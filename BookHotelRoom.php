<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Đặt phòng</title>
  <link rel="stylesheet" href="css/BookHotelRoom.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <header>
    <?php include "./Header.php" ?>
  </header>
  <main class='main bg-light'>
    <div class="row-container-sm bg-light">
      <div class='main_header'>
        <a href="./hotel_detail.php">Quay lại</a>
        <h3>Thông tin đặt phòng</h3>
      </div>
      <div class="row">
        <div class="left col-sm-8">
          <div class="row-container card mt-3 pe-3 pb-4 thongtinkhach">
            <h5>Thông tin người liên hệ</h4>
              <form>
                <h6 class="mt-3">Nhập thông tin của bạn hoặc người chịu trách nhiệm giữ liên lạc với nhà cung cấp dịch
                  vụ lưu trú.</h6>
                <form class="row g-4">
                  <div class="d-flex me-1">
                    <div class="form-body-item col-md-6">
                      <label for="validationServerUsername" class="form-label">Họ*</label>
                      <div class="input-group has-validation">
                        <input type="text" class="form-control is-invalid" id="validationServerUsername"
                          aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                          Họ tên như trên CMND/CCCD/Hộ chiếu (không dấu).
                        </div>
                      </div>
                    </div>
                    <div class="form-body-item col-md-6 ms-3">
                      <label for="validationServer02" class="form-label">Tên đệm & tên*</label>
                      <input type="text" class="form-control " id="validationServer02" value="" required>
                    </div>
                  </div>

                  <div class="d-flex me-1">
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

                  <div class="form-body-item col-md-6">
                    <label for="validationServer04" class="form-label">Quốc gia</label>
                    <select class="form-select" aria-label="Default select example">
                      <option selected>Việt Nam</option>
                      <option value="1">Trung quốc</option>
                      <option value="2">Thái Lan</option>
                      <option value="3">Hàn Quốc</option>
                  </div>
                  <div class="form-body-item col-mb-6 mt-2 form-check ">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Tôi là người lưu trú</label>
                  </div>
                </form>
              </form>
          </div>
          <div class="row-container card mt-3 pe-3 pb-4 thongtinkhach">
            <h5>Thông tin người liên hệ</h4>
              <form>
                <form class="row g-4">
                  <div class="d-flex me-1">
                    <div class="form-body-item col-md-6">
                      <label for="validationServerUsername" class="form-label">Họ*</label>
                      <div class="input-group has-validation">
                        <input type="text" class="form-control is-invalid" id="validationServerUsername"
                          aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                          Họ tên như trên CMND/CCCD/Hộ chiếu (không dấu).
                        </div>
                      </div>
                    </div>
                    <div class="form-body-item col-md-6 ms-3">
                      <label for="validationServer02" class="form-label">Tên đệm & tên*</label>
                      <input type="text" class="form-control " id="validationServer02" value="" required>
                    </div>
                  </div>

                  <div class="d-flex me-1">
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
                </form>
              </form>

          </div>

          <div class="row-container card mt-3 pe-3 pb-4 payment">
            <h5>Phương thức thanh toán</h4>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                <label class="form-check-label" for="flexRadioDefault1">
                  Thanh toán sau
                </label>
                <p>Chỗ nghỉ sẽ xử lý thanh toán. Tùy vào điều kiện đặt phòng mà bạn có thể thanh toán 1
                  phần hoặc toàn bộ tại chỗ nghỉ.</p>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked />
                <label class="form-check-label" for="flexRadioDefault2">
                  Thanh toán ngay
                </label>
                <p>Hahalolo sẽ hỗ trợ xử lý thanh toán của bạn. Bạn sẽ thanh toán toàn bộ hôm nay khi
                  hoàn tất đặt phòng</p>
              </div>
          </div>
          <div class="row-container card mt-3 pe-3 pb-4 note1">
            <h5>Bạn cần thêm gì không?</h4>
              <form>
                <form class="row g-4">

                  <p>Chúng tôi sẽ thông báo cho nơi lưu trú biết rằng bạn đang quan tâm đến các dịch vụ này, để họ có
                    thể cungcấp thông tin chi tiết và gửi cho bạn.</p>
                  <div class="form-body-item col-md-11 ms-3">
                    <label for="validationServer02 " class="form-label">
                      <h6 class="text_h6">Yêu cầu của bạn có thể không được đảm bảo.Đừnglo! Chỗ nghỉ sẽ cố gắng sắp xếp
                        cho bạn.</h6>
                    </label>
                    <input type="text" class="form-control " id="validationServer02" value="Yêu cầu của bạn" required>
                  </div>

                </form>
              </form>
          </div>
          <div class="row-container card mt-3 pe-3 pb-4 note">
            <h5>Lưu ý quan trọng cho thông tin đặt chỗ</h4>
              <form>
                <form class="row g-4">
                  <div class="card">
                    <p>- Nếu dự tính đến nơi sau 3PM 08/01/2022, vui lòng thông báo cho nhà cung cấp dịch vụ lưu trú về
                      thời gian nhận phòng dự kiến của bạn: Thứ Bảy, ngày 8 tháng 01 năm 2022</p>
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
                      tin.
                    </p>
                  </div>
                </form>
              </form>
          </div>
        </div>
      </div>
    </div>

  </main>
  <div class="right col-sm-4 mt-4">
    fhdguysdfguyf
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod similique deleniti labore ex
    excepturi omnis impedit, facilis quidem blanditiis sequi officia, inventore dolorem. Esse
    voluptatibus sit architecto, expedita corrupti numquam.
  </div>
</body>

</html>