<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/Home.css">
  <link rel="stylesheet" href="./IncludeItem/Header.css">

  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;1,700&display=swap"
    rel="stylesheet">

  <title>Trang chủ|Tìm kiếm khách sạn</title>

</head>

<body>

 <header>
   <?php include "./IncludeItem/Header.html" ?>
 </header>
 <main class="bg-light">
    <div class="container_fluid">
      <div class="text">
        <h4 style="font-family: 'Roboto', sans-serif">Tìm nơi dừng chân hoàn hảo cùng Hahalolo!</h4>
        <h6>Từ những khu nghỉ dưỡng thanh bình đến những căn hộ sang trọng hiện đại</h6>
      </div>
      <!-- tìm kiếm -->
      <div class="container-Card-root jss116 " >
        <div class="Grid-justify-xs-center d-flex">
            <div class="container-item-check">
                <div class="Grid-root ">                   
                    <div class="Grid-root Grid-item Grid-grid-xs-true">                  
                            <div class="Box-root jss218 jss122">                               
                                    <div class="TextField-root jss125 jss124">
                                        <label class="FormLabel-root " data-shrink="true"><span>Bạn muốn ở đâu?</span></label>
                                        <div class="Input-root ">                                       >                                         
                                            <input aria-invalid="false" placeholder="Nhập nơi bạn muốn đến" type="text" class="InputBase-input" value="" />                                           
                                        </div>
                                    </div>                               
                            </div>                     
                    </div>
                </div>
            </div>
            <div class="container-item-check">
                <div class="Grid-root ">
                    <div class="Grid-root jss117"></div>
                    <div class="Grid-grid-xs-true">
                        <div class="TextField-root jss125 jss124 " format="EEE, dd/MM/yyyy">
                            <label class="InputLabel-root "><span>Ngày nhận phòng</span></label>
                            <div class="InputBase-root ">                           
                                <input aria-invalid="false" readonly="" type="text" class="InputBase-inputAdornedStart" value="Thứ 5, 23/12/2021" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-item-check">
                <div class="b">
                    <div class="c jss117 "></div>
                    <div class="f">
                        <div class="g" format="EEE, dd/MM/yyyy">
                            <label class="j" data-shrink="true"><span>Ngày trả phòng</span></label>
                            <div class="jj">
                                <div class="aa-icon">
                                </div>
                                <input aria-invalid="false" readonly="" type="text" class="date_item" value="Thứ 6, 24/12/2021" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-item-check">
               <div class="row">
                <div class="left col-grid-xs-12 col-sm-6">
                   <button class="Button-root jss109" type="button">
                    <span class="Button-label"><span>Tìm kiếm</span></span>

                   </button>
                <div class="Box-root jss220">
                  <button class="Button-root jss109"  type="button">
                    <span class="Button-label">Tra cứu đặt phòng</span>
                  
                </button>
            </div>
        </div>




          
        
    </div>



      <h5 class="mt-5 mb-3">Chỗ nghỉ nổi bật</h5>

      <div class="row">
        <div class="content_item col-grid-xs-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card">
            <img src="./img/hampton_inn.jpg" alt="...">
            <div class="card-body">
              <b class="card_titler">HAMPTON INN UTICA NY</b>
              <form action="">
                <i class="fas fa-map-marker-alt"></i>
                <a
                  href="https://www.google.com/maps/place/172-180+N+Genesee+St,+Utica,+NY+13502,+Hoa+K%E1%BB%B3/@43.10939,-75.2193966,17z/data=!3m1!4b1!4m5!3m4!1s0x89d94713de3c298d:0x4bf524ca0cc367ca!8m2!3d43.1093114!4d-75.2170935">172-180
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
                <a
                  href="https://www.google.com/maps/place/172-180+N+Genesee+St,+Utica,+NY+13502,+Hoa+K%E1%BB%B3/@43.10939,-75.2193966,17z/data=!3m1!4b1!4m5!3m4!1s0x89d94713de3c298d:0x4bf524ca0cc367ca!8m2!3d43.1093114!4d-75.2170935">172-180
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
                <a
                  href="https://www.google.com/maps/place/172-180+N+Genesee+St,+Utica,+NY+13502,+Hoa+K%E1%BB%B3/@43.10939,-75.2193966,17z/data=!3m1!4b1!4m5!3m4!1s0x89d94713de3c298d:0x4bf524ca0cc367ca!8m2!3d43.1093114!4d-75.2170935">172-180
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
                <a
                  href="https://www.google.com/maps/place/172-180+N+Genesee+St,+Utica,+NY+13502,+Hoa+K%E1%BB%B3/@43.10939,-75.2193966,17z/data=!3m1!4b1!4m5!3m4!1s0x89d94713de3c298d:0x4bf524ca0cc367ca!8m2!3d43.1093114!4d-75.2170935">172-180
                  N Genesee St, Utica, NY 13502, Hoa Kỳ</a>
              </form>
              <h7 class="card-text">Giá mỗi đêm</h7>
              <h6 style="color: red;">1.920.000 ₫ </h6>
            </div>
          </div>
        </div>



      </div>
      <div class="row">
        <div class="content_item col-grid-xs-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card">
            <img src="./img/ARTS-SAIGONjpg.jpg" alt="...">
            <div class="card-body">
              <b class="card_titler">HOTEL DES ARTS SAIGON</b>
              <form action="">
                <i class="fas fa-map-marker-alt"></i>
                <a
                  href="https://www.google.com/maps/place/172-180+N+Genesee+St,+Utica,+NY+13502,+Hoa+K%E1%BB%B3/@43.10939,-75.2193966,17z/data=!3m1!4b1!4m5!3m4!1s0x89d94713de3c298d:0x4bf524ca0cc367ca!8m2!3d43.1093114!4d-75.2170935">172-180
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
                <a
                  href="https://www.google.com/maps/place/172-180+N+Genesee+St,+Utica,+NY+13502,+Hoa+K%E1%BB%B3/@43.10939,-75.2193966,17z/data=!3m1!4b1!4m5!3m4!1s0x89d94713de3c298d:0x4bf524ca0cc367ca!8m2!3d43.1093114!4d-75.2170935">172-180
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
                <a
                  href="https://www.google.com/maps/place/172-180+N+Genesee+St,+Utica,+NY+13502,+Hoa+K%E1%BB%B3/@43.10939,-75.2193966,17z/data=!3m1!4b1!4m5!3m4!1s0x89d94713de3c298d:0x4bf524ca0cc367ca!8m2!3d43.1093114!4d-75.2170935">172-180
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
                <a
                  href="https://www.google.com/maps/place/172-180+N+Genesee+St,+Utica,+NY+13502,+Hoa+K%E1%BB%B3/@43.10939,-75.2193966,17z/data=!3m1!4b1!4m5!3m4!1s0x89d94713de3c298d:0x4bf524ca0cc367ca!8m2!3d43.1093114!4d-75.2170935">172-180
                  N Genesee St, Utica, NY 13502, Hoa Kỳ</a>
              </form>
              <h7 class="card-text">Giá mỗi đêm</h7>
              <h6 style="color: red;">2.714.971 ₫ </h6>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="content_item col-grid-xs-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card">
            <img src="./img/hampton_inn.jpg" alt="...">
            <div class="card-body">
              <b class="card_titler">HAMPTON INN UTICA NY</b>
              <form action="">
                <i class="fas fa-map-marker-alt"></i>
                <a
                  href="https://www.google.com/maps/place/172-180+N+Genesee+St,+Utica,+NY+13502,+Hoa+K%E1%BB%B3/@43.10939,-75.2193966,17z/data=!3m1!4b1!4m5!3m4!1s0x89d94713de3c298d:0x4bf524ca0cc367ca!8m2!3d43.1093114!4d-75.2170935">172-180
                  N Genesee St, Utica, NY 13502, Hoa Kỳ</a>
              </form>
              <h7 class="card-text">Giá mỗi đêm</h7>
              <h6 style="color: red;">3.215.711 ₫ </h6>
            </div>
          </div>
        </div>
        <div class="content_item col-grid-xs-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card">
            <img src="./img/hampton_inn.jpg" alt="...">
            <div class="card-body">
              <b class="card_titler">HAMPTON INN UTICA NY</b>
              <form action="">
                <i class="fas fa-map-marker-alt"></i>
                <a
                  href="https://www.google.com/maps/place/172-180+N+Genesee+St,+Utica,+NY+13502,+Hoa+K%E1%BB%B3/@43.10939,-75.2193966,17z/data=!3m1!4b1!4m5!3m4!1s0x89d94713de3c298d:0x4bf524ca0cc367ca!8m2!3d43.1093114!4d-75.2170935">172-180
                  N Genesee St, Utica, NY 13502, Hoa Kỳ</a>
              </form>
              <h7 class="card-text">Giá mỗi đêm</h7>
              <h6 style="color: red;">3.215.711 ₫ </h6>
            </div>
          </div>
        </div>
        <div class="content_item col-grid-xs-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card">
            <img src="./img/hampton_inn.jpg" alt="...">
            <div class="card-body">
              <b class="card_titler">HAMPTON INN UTICA NY</b>
              <form action="">
                <i class="fas fa-map-marker-alt"></i>
                <a
                  href="https://www.google.com/maps/place/172-180+N+Genesee+St,+Utica,+NY+13502,+Hoa+K%E1%BB%B3/@43.10939,-75.2193966,17z/data=!3m1!4b1!4m5!3m4!1s0x89d94713de3c298d:0x4bf524ca0cc367ca!8m2!3d43.1093114!4d-75.2170935">172-180
                  N Genesee St, Utica, NY 13502, Hoa Kỳ</a>
              </form>
              <h7 class="card-text">Giá mỗi đêm</h7>
              <h6 style="color: red;">3.215.711 ₫ </h6>
            </div>
          </div>
        </div>
        <div class="content_item col-grid-xs-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card">
            <img src="./img/hampton_inn.jpg" alt="...">
            <div class="card-body">
              <b class="card_titler">HAMPTON INN UTICA NY</b>
              <form action="">
                <i class="fas fa-map-marker-alt"></i>
                <a
                  href="https://www.google.com/maps/place/172-180+N+Genesee+St,+Utica,+NY+13502,+Hoa+K%E1%BB%B3/@43.10939,-75.2193966,17z/data=!3m1!4b1!4m5!3m4!1s0x89d94713de3c298d:0x4bf524ca0cc367ca!8m2!3d43.1093114!4d-75.2170935">172-180
                  N Genesee St, Utica, NY 13502, Hoa Kỳ</a>
              </form>
              <h7 class="card-text">Giá mỗi đêm</h7>
              <h6 style="color: red;">3.215.711 ₫ </h6>
            </div>
          </div>
        </div>


      </div>
    </div>
      
  </main>


  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 right">
        <img style="width: 100%;" src="./img/cườn cam.jpg" alt="">
        <h3>Mới lạ địa điểm check in vườn cam Mộc Châu đẹp ‘hút hồn’ team mê sống ảo</h3>
        <p>Những mô hình vườn cây trải nghiệm không chỉ mang lại nguồn thu nhập cho hộ gia đình mà nó còn góp phần vào việc phát triển ngành du lịch của địa phương. Nắm bắt được xu hướng này thì vườn cam Mộc Châu cũng đã xuất hiện và thu hút rất đông lượng du khách hàng năm.... </p>
        <a href="">Xem thêm</a>
      </div>

      <div class="col-md-6 left">
        <div class="row">
          <div class="col-md-6"><img class="image" style="width: 100% ;" src="./img/cà phê.jpg" alt=""></div>
          <div class="col-md-6">
            <h3>Mới lạ địa điểm check in vườn cam Mộc Châu đẹp ‘hút hồn’ team mê sống ảo</h3>
            <p>Những mô hình vườn cây trải nghiệm không chỉ mang lại nguồn thu nhập cho hộ gia đình mà nó còn góp phần
              vào việc phát triển ngành du lịch của địa phương. Nắm bắt được xu hướng này thì vườn cam Mộc Châu cũng
              đã xuất hiện và thu hút rất đông lượng du khách hàng năm....</p>
            <a href="">Xem thêm</a>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6"><img class="image" style="width:100% ;" src="./img/bikini.jpg" alt=""></div>
          <div class="col-md-6">
            <h3>Đóng Giáng sinh tại quán cà phê kiểu Âu ở Đà Lạt</h3>
            <p>🎅Với tiết trời se lạnh và khung cảnh lãng mạn, Đà Lạt là nơi hẹn hò lý tưởng cho các cặp đôi vào dịp lễ
              cuối năm. Đà Lạt (Lâm Đồng) níu chân du khách...</p>
            <a href="">Xem thêm</a>
          </div>


        </div>
        <div class="row">
          <div class="col-md-6"><img class="image" style="width:100% ;" src="./img/đà lạt.jpg" alt=""></div>
          <div class="col-md-6">
            <h3>Amiana Ưu đãi Đặc biệt – Vịnh Thiên Đường Mời Gọi Giá chỉ từ 1,750,000 VND</h3>
            <p>Trải nghiệm vẻ đẹp bình yên mang đến những phút giây thật sự thư giãn dành riêng cho bạn trong tiết trời
              sang thu đang dần trải dài trên nền cát trắng...</p>
            <a href="">Xem thêm</a>
          </div>
        </div>

</body>

<div class="wrapper">
  <button class="button">Thêm nhiều trải nghiệm thú vị khác ở đây</button>
</div>

</html>