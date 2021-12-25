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

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <header>
    <?php include "./Header.php" ?>
  </header>
  <main class="main bg-light">
    <div class="container-sm bg-light">
      <div class="row">
        <div class="left col-sm-3">
          <div class="card">
            <div class="carditem">
              Bạn muốn ở đâu?
              <div class="select-option">
                <i class="fas fa-map-marker-alt"></i>

                <select class="form-select-01 border-0 " aria-label="Default select example">
                  <option selected>

                  </option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
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
                <option selected></option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
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
          <h1>HAMPTON INN UTICA</h1>
          <h9 style="color: #0066ff;">172 - 180 North Genesee Str. Utica NY 13502. US.</h6>
            <button>
              xem trên bản đồ
            </button>
            <div class="button_right">
              <button>Tổng quan</button>
              <button>Thông tin phòng và giá</button>
              <button>tiện nghi</button>
              <button>Quy tắc chung</button>
            </div>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./img/ARTS-SAIGONjpg.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./img/EXTENDED.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./img/FAIRFIELD.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>

        </div>
      </div>
    </div>
    </div>
  </main>

  <div class="footer container-sm">
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