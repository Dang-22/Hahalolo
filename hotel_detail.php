<?php
$conn = mysqli_connect('localhost','root','','db_hahalolo');
if(!$conn){
    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
;

$id = $_GET['makhachsan'];
$sql = "SELECT * FROM khachsan WHERE makhachsan='$id'";
$result = $conn->query($sql);

$hotel = null;

if ($result->num_rows > 0) {
  $hotel = $result->fetch_object();
}

$sql = "SELECT * FROM phong WHERE makhachsan='$id'";
$result = $conn->query($sql);

$rooms = [];

if ($result->num_rows > 0) {
  while ($row = $result->fetch_object()) {
    $rooms[] = $row;
  }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/hotel_detail.css">
  <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;1,700&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  <title>tìm kiếm</title>
</head>
<body class="pb-4">
  <header>
    <?php include "./Header.php" ?>
  </header>
  <main class="main bg-light pt-5">
    <div class="container-sm bg-light">
      <div class="row">
        <div class="left col-sm-3">
          <div class="card">
            <div class="carditem">
              Bạn muốn ở đâu?
              <div class="select-option">
                <i class="fas fa-map-marker-alt"></i>
                <select class="form-select-01 border-0 " aria-label="Default select example">
                  <option selected>Chọn nơi bạn muốn đến</option>
                  <option value="1">Fairfield Inn and Stes Marriott</option>
                  <option value="2">Hampton Inn Utica</option>
                  <option value="3">Vissai SAIGON Hottel</option>
                </select>
              </div>
              <hr>
              Ngày nhận phòng
              <div class="search_box_date search_box_item">
                <div class="input-group date datepicker">
                  <span class="input-group-append">
                    <span class="input-group-text bg-white d-block">
                      <i class="fa fa-calendar"></i>
                    </span>
                  </span>
                  <input type="text" class="form-control">
                </div>
              </div>
              Ngày trả phòng
              <div class="search_box_date search_box_item">
                <div class="input-group date datepicker">
                  <span class="input-group-append">
                    <span class="input-group-text bg-white d-block">
                      <i class="fa fa-calendar"></i>
                    </span>
                  </span>
                  <input type="text" class="form-control">
                </div>
              </div>
              Số người
              <div class="select-option">
                <i class="fas fa-users"></i>
                <select class="form-select-01 border-0" aria-label="Default select example">
                  <option selected>1 người lớn - 0 trẻ em - 1 phòng</option>
                  <option value="1">2 người lớn - 0 trẻ em - 1 phòng</option>
                  <option value="2">2 người lớn - 1 trẻ em - 1 phòng</option>
                </select>
              </div>
              <hr>
              <button class="btnSearch">
                Tìm kiếm
              </button>
            </div>
          </div>
        </div>
        <div class="right col-sm-9 mt-9">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h1><?= $hotel->tenkhachsan ?></h1>
              <h6 style="color: #3d91d6;"><i class="fas fa-map-marker-alt"></i> <?= $hotel->diachi ?></h6>
            </div>
            <a class="btn btn-primary" href="#">
              Xem trên bản đồ
            </a>
          </div>
          <div class="button_right">
            <ul class="nav nav-pills nav-fill mb-2">
              <li class="nav-item ml-0">
                <a class="nav-link text-primary border border-primary " href="#">Tổng quan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark border border-dark " href="#">Thông tin phòng và giá</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark border border-dark" href="">Tiện nghi</a>
              </li>
              <li class="nav-item mr-0">
                <a class="nav-link text-dark border border-dark" href="#">Quy tắc chung</a>
              </li>
            </ul>
          </div>
          <div class="row mb-4">
            <div class="col-md-12 bg-white text-secondary p-3">
              <?= $hotel->tongquan ?>
            </div>
          </div>
          <div class="row bg-primary" style="border-radius: 10px;">
            <div class="col-md-3 text-white mt-3">
              <p>Ngày nhận phòng</p>
              <div class="search_box_date search_box_item">
                <div class="input-group date datepicker">
                  <span class="input-group-append">
                    <span class="input-group-text bg-white d-block">
                      <i class="fa fa-calendar"></i>
                    </span>
                  </span>
                  <input type="text" class="form-control">
                </div>
              </div>
              <hr class="text-white">
            </div>
            <div class="col-md-3 text-white mt-3">
              <p>Ngày trả phòng</p>
              <div class="search_box_date search_box_item">
                <div class="input-group date datepicker">
                  <span class="input-group-append">
                    <span class="input-group-text bg-white d-block">
                      <i class="fa fa-calendar"></i>
                    </span>
                  </span>
                  <input type="text" class="form-control">
                </div>
              </div>
              <hr class="text-white">
            </div>
            <div class="col-md-3 text-white mt-3">
              <p>Số người</p>
              <div class="search_box_item search_box_people">
                <input placeholder="Nhập số lượng người" type="text" class="form-control">
              </div>
              <hr class="text-white">
            </div>
            <div class="col-md-3">
              <button class="btn btn-warning text-white btntimkiem">Thay đổi tìm kiếm</button>
            </div>
          </div>

          <?php foreach ($rooms as $room) : ?>
            <div class="row my-3 khungdatphongbenduoi">
              <div class="col-md-4 anhphong">
                <h5 class="text-black mt-2 ms-2"><?= $room->tenphong ?></h5>
                <img class="img-fluid  ps-2 pe-2 mb-2 mt-2" src="<?= strlen($room->anh) < 1 ? "https://vnpi-hcm.vn/wp-content/uploads/2018/01/no-image-800x600.png" : $room->anh ?>" alt="">
                <a href="" class="text-primary ms-2" style="text-decoration: none; font-weight: 700;">Chi tiết phòng</a>
                <p class="text-secondary mt-2 ms-2"> 1 King size </p>
              </div>
              <div class="col-md-1 anhphong">
                <p class="ps-2 pe-2 mb-2 mt-2">X1</p>
              </div>
              <div class="col-md-2 anhphong">
                <h5 class="ps-2 pe-2 mb-2 mt-2 text-black">Tiện ích</h5>
                <p class="ps-2 pe-2 mb-2 mt-2 text-success" style="font-size:12px">
                  <?= $room->tienich ?>
                </p>

              </div>
              <div class="col-md-2 anhphong">
                <p class="ps-2 pe-2 mb-2 mt-2 text-secondary text-end" style="font-size:12px">Giá mỗi đêm</p>
                <h4 class="ps-2 pe-2 mb-2 mt-2 text-danger text-end"><?= number_format($hotel->gia) ?>đ</h4>
              </div>
              <div class="col-md-3 ">
                <button class="btn text-white ms-5 mb-2 mt-5 " style="border-radius:25px ; background-color: rgb(5, 140, 158); ">Đặt 1 phòng</button>
                <br>
                <a href="" style="font-size : 12px;text-decoration: none;" class=" mb-2 mt-2 ms-5 ;color: rgb(5, 140, 158);   ">Điều kiện và chính sách</a>
                <p class=" mb-2 mt-5 text-secondary text-center">1 phòng/1 đêm</p>
                <h4 class=" mb-2 mt-3 text-center text-danger"><?= number_format($hotel->gia) ?>đ</h4>
                <a class=" mb-2 mt-5 ms-5" href="" style="font-size: 12px ; text-decoration: none ;color: rgb(5, 140, 158);">Thay đổi số lượng phòng</a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </main>

  <div class="footer container-sm mt-2">
    <div class="footer_container mt-4">
      <h4>Những chỗ nghỉ phổ biến và tương tự với khách sạn HAMPTON INN UTICA</h4>
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="content_item col-grid-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                  <img src="./img/ARTS-SAIGONjpg.jpg" alt="...">
                  <div class="card-body">
                    <b class="card_titler">HOTEL DES ARTS SAIGON</b>
                    <form action="">
                      <i class="fas fa-map-marker-alt"></i>
                      <a href="https://www.google.com/maps/place/172-180+N+Genesee+St,+Utica,+NY+13502,+Hoa+K%E1%BB%B3/@43.10939,-75.2193966,17z/data=!3m1!4b1!4m5!3m4!1s0x89d94713de3c298d:0x4bf524ca0cc367ca!8m2!3d43.1093114!4d-75.2170935">172-180
                        N Genesee St, Utica, NY 13502, Hoa Kỳ</a>
                    </form>
                    <h7 class="card-text">Giá mỗi đêm</h7>
                    <h6 style="color: red;">2.090.000 ₫ </h6>
                  </div>
                </div>
              </div>
              <div class="content_item col-grid-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                  <img src="./img/SILVERLAND-SPA.jpg" alt="...">
                  <div class="card-body">
                    <b class="card_titler">SILVERLAND JOLIE HOTEL AND SPA</b>
                    <form action="">
                      <i class="fas fa-map-marker-alt"></i>
                      <a href="https://www.google.com/maps/place/172-180+N+Genesee+St,+Utica,+NY+13502,+Hoa+K%E1%BB%B3/@43.10939,-75.2193966,17z/data=!3m1!4b1!4m5!3m4!1s0x89d94713de3c298d:0x4bf524ca0cc367ca!8m2!3d43.1093114!4d-75.2170935">172-180
                        N Genesee St, Utica, NY 13502, Hoa Kỳ</a>
                    </form>
                    <h7 class="card-text">Giá mỗi đêm</h7>
                    <h6 style="color: red;">840.431 ₫ </h6>
                  </div>
                </div>
              </div>
              <div class="content_item col-grid-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                  <img src="./img/WINDSOR-PLAZA.jpg" alt="...">
                  <div class="card-body">
                    <b class="card_titler">WINDSOR PLAZA HOTEL CON</b>
                    <form action="">
                      <i class="fas fa-map-marker-alt"></i>
                      <a href="https://www.google.com/maps/place/172-180+N+Genesee+St,+Utica,+NY+13502,+Hoa+K%E1%BB%B3/@43.10939,-75.2193966,17z/data=!3m1!4b1!4m5!3m4!1s0x89d94713de3c298d:0x4bf524ca0cc367ca!8m2!3d43.1093114!4d-75.2170935">172-180
                        N Genesee St, Utica, NY 13502, Hoa Kỳ</a>
                    </form>
                    <h7 class="card-text">Giá mỗi đêm</h7>
                    <h6 style="color: red;">1.993.119 ₫ </h6>
                  </div>
                </div>
              </div>
              <div class="content_item col-grid-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                  <img src="./img/SHERWOOD-RESIDENCE.jpg" alt="...">
                  <div class="card-body">
                    <b class="card_titler">SHERWOOD RESIDENCE</b>
                    <form action="">
                      <i class="fas fa-map-marker-alt"></i>
                      <a href="https://www.google.com/maps/place/172-180+N+Genesee+St,+Utica,+NY+13502,+Hoa+K%E1%BB%B3/@43.10939,-75.2193966,17z/data=!3m1!4b1!4m5!3m4!1s0x89d94713de3c298d:0x4bf524ca0cc367ca!8m2!3d43.1093114!4d-75.2170935">172-180
                        N Genesee St, Utica, NY 13502, Hoa Kỳ</a>
                    </form>
                    <h7 class="card-text">Giá mỗi đêm</h7>
                    <h6 style="color: red;">2.714.971 ₫ </h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="content_item col-grid-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                  <img src="./img/hampton_inn.jpg" alt="...">
                  <div class="card-body">
                    <b class="card_titler">HAMPTON INN UTICA NY</b>
                    <form action="">
                      <i class="fas fa-map-marker-alt"></i>
                      <a href="https://www.google.com/maps/place/172-180+N+Genesee+St,+Utica,+NY+13502,+Hoa+K%E1%BB%B3/@43.10939,-75.2193966,17z/data=!3m1!4b1!4m5!3m4!1s0x89d94713de3c298d:0x4bf524ca0cc367ca!8m2!3d43.1093114!4d-75.2170935">172-180
                        N Genesee St, Utica, NY 13502, Hoa Kỳ</a>
                    </form>
                    <h7 class="card-text">Giá mỗi đêm</h7>
                    <h6 style="color: red;">3.215.711 ₫ </h6>
                  </div>
                </div>
              </div>
              <div class="content_item col-grid-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                  <img src="./img/EXTENDED.jpg" alt="...">
                  <div class="card-body">
                    <b class="card_titler">EXTENDED STAY AMERICA SYRACUSE</b>
                    <form action="">
                      <i class="fas fa-map-marker-alt"></i>
                      <a href="https://www.google.com/maps/place/172-180+N+Genesee+St,+Utica,+NY+13502,+Hoa+K%E1%BB%B3/@43.10939,-75.2193966,17z/data=!3m1!4b1!4m5!3m4!1s0x89d94713de3c298d:0x4bf524ca0cc367ca!8m2!3d43.1093114!4d-75.2170935">172-180
                        N Genesee St, Utica, NY 13502, Hoa Kỳ</a>
                    </form>
                    <h7 class="card-text">Giá mỗi đêm</h7>
                    <h6 style="color: red;">5.445.764 ₫ </h6>
                  </div>
                </div>
              </div>
              <div class="content_item col-grid-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                  <img src="./img/FAIRFIELD.jpg" alt="...">
                  <div class="card-body">
                    <b class="card_titler">FAIRFIELD INN N STES MARRIOTT</b>
                    <form action="">
                      <i class="fas fa-map-marker-alt"></i>
                      <a href="https://www.google.com/maps/place/172-180+N+Genesee+St,+Utica,+NY+13502,+Hoa+K%E1%BB%B3/@43.10939,-75.2193966,17z/data=!3m1!4b1!4m5!3m4!1s0x89d94713de3c298d:0x4bf524ca0cc367ca!8m2!3d43.1093114!4d-75.2170935">172-180
                        N Genesee St, Utica, NY 13502, Hoa Kỳ</a>
                    </form>
                    <h7 class="card-text">Giá mỗi đêm</h7>
                    <h6 style="color: red;">3.462.505 ₫ </h6>
                  </div>
                </div>
              </div>
              <div class="content_item col-grid-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                  <img src="./img/SOFITELjpg.jpg" alt="...">
                  <div class="card-body">
                    <b class="card_titler">SOFITEL SAIGON PLAZA</b>
                    <form action="">
                      <i class="fas fa-map-marker-alt"></i>
                      <a href="https://www.google.com/maps/place/172-180+N+Genesee+St,+Utica,+NY+13502,+Hoa+K%E1%BB%B3/@43.10939,-75.2193966,17z/data=!3m1!4b1!4m5!3m4!1s0x89d94713de3c298d:0x4bf524ca0cc367ca!8m2!3d43.1093114!4d-75.2170935">172-180
                        N Genesee St, Utica, NY 13502, Hoa Kỳ</a>
                    </form>
                    <h7 class="card-text">Giá mỗi đêm</h7>
                    <h6 style="color: red;">1.920.000 ₫ </h6>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
