<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/hotel_detail.css">
  <link rel="stylesheet" href="./IncludeItem/Header.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;1,700&display=swap"
    rel="stylesheet">
  <title>tìm kiếm</title>
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
 
  <header>
    <?php include "IncludeItem/Header.php" ?>
  </header>
  <main class="main bg-light">
    <div class="container-sm bg-light">
      <div class="row">
        <div class="left col-sm-3">

          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  Accordion Item #1
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">


                  <div class=" col-md-4 col-sm-12 well pull-right-lg" style="border:0px solid">
                    <p class="well" style="padding:10px; margin-bottom:2px;">
                      <span class="glyphicon glyphicon-calendar"></span>  Calendar
                    </p>
                    <div class="col-md-12" style="padding:0px;">
                      <br>
                      <table class="table table-bordered table-style table-responsive">
                        <tr>
                          <th colspan="2"><a href="?ym=<?php echo $prev; ?>"><span
                                class="glyphicon glyphicon-chevron-left"></span></a></th>
                          <th colspan="3"> Jan - 2017
                            <!--?php echo $html_title; ?-->
                          </th>
                          <th colspan="2"><a href="?ym=<?php echo $next; ?>"><span
                                class="glyphicon glyphicon-chevron-right"></span></a></th>
                        </tr>
                        <tr>
                          <th>S</th>
                          <th>M</th>
                          <th>T</th>
                          <th>W</th>
                          <th>T</th>
                          <th>F</th>
                          <th>S</th>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                          <td>4</td>
                          <td>5</td>
                          <td>6</td>
                          <td>7</td>
                        </tr>
                        <tr>
                          <td>8</td>
                          <td>9</td>
                          <td>10</td>
                          <td>11</td>
                          <td class="today">12</td>
                          <td>13</td>
                          <td>14</td>
                        </tr>
                        <tr>
                          <td>15</td>
                          <td>16</td>
                          <td>17</td>
                          <td>18</td>
                          <td>19</td>
                          <td>20</td>
                          <td>21</td>
                        </tr>
                        <tr>
                          <td>22</td>
                          <td>23</td>
                          <td>24</td>
                          <td>25</td>
                          <td>26</td>
                          <td>27</td>
                          <td>28</td>
                        </tr>
                        <tr>
                          <td>29</td>
                          <td>30</td>
                          <td>31</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>

                        <!--?php
                              foreach ($weeks as $week) {
                                echo $week;
                              };
                            ?-->
                      </table>

                    </div>
                  </div>













                  <!-- <?php
                  // Set your timezone!!
                  date_default_timezone_set('Asia/Dhaka');
                  
                  // Get prev & next month
                  if (isset($_GET['ym'])) {
                    $ym = $_GET['ym'];
                  } else {
                    // This month
                    $ym = date('Y-m');
                  }
                  
                  // Check format
                  $timestamp = strtotime($ym,"-01");
                  if ($timestamp === false) {
                    $timestamp = time();
                  }
                  
                  // Today
                  $today = date('Y-m-j', time());
                  
                  // For H3 title
                  $html_title = date('M - Y', $timestamp);
                  
                  // Create prev & next month link     mktime(hour,minute,second,month,day,year)
                  $prev = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)-1, 1, date('Y', $timestamp)));
                  $next = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));
                  
                  // Number of days in the month
                  $day_count = date('t', $timestamp);
                  
                  // 0:Sun 1:Mon 2:Tue ...
                  $str = date('w', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp)));
                  
                  
                  // Create Calendar!!
                  $weeks = array();
                  $week = '';
                  
                  // Add empty cell
                  $week .= str_repeat('<td></td>', $str);
                  
                  for ( $day = 1; $day <= $day_count; $day++, $str++) {
                  
                    $date = $ym.'-'.$day;
                  
                    if ($today == $date) {
                      $week .= '<td class="today">'.$day;
                    } else {
                      $week .= '<td>'.$day;
                    }
                    $week .= '</td>';
                  
                    // End of the week OR End of the month
                    if ($str % 7 == 6 || $day == $day_count) {
                  
                      if($day == $day_count) {
                        // Add empty cell
                        $week .= str_repeat('<td></td>', 6 - ($str % 7));
                      }
                  
                      $weeks[] = '<tr>'.$week.'</tr>';
                  
                      // Prepare for new week
                      $week = '';
                  
                    }
                  
                  }
                  
                  ?>-->


                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  Accordion Item #2
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                  <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this
                  being filled with some actual content.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  Accordion Item #3
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                  <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting
                  happening here in terms of content, but just filling up the space to make it look, at least at first
                  glance, a bit more representative of how this would look in a real-world application.</div>
              </div>
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

          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</body>

</html>