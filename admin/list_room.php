<?php
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <title>Document</title>
</head>

<body>

    <nav class="navbar navbar-light bg-dark text-light">
        <div class="container-fluid">
            <div class="left-pannel">
                Xin chao <span>admin</span>
            </div>
            <div class="nav justify-content-end">
                <i class="fas fa-home"></i>
                <a href="index.php">Trang chu</a>
                <i class="fas fa-sign-out-alt"></i>
                <a href="logout">Dang xuat</a>


            </div>
        </div>
    </nav>
    <div class="container-fluid row m-0">
        <div class="left col-md-2">
            <div id="content-wrapper ">
                <div class="card">
                    <div class="card-header">Admin Menu</div>
                    <div class="card-body">
                        <ul class="li"><a href="">Cau hinh</a></ul>
                        <ul class="li"><a href="">tin tuc</a></ul>
                        <ul class="li"><a href="list_room.php">Danh sach phong</a></ul>
                        <ul class="li"><a href="">dat phong</a></ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="right col-md-10">
            <div class="products">
                <div class="nav row bg-secondary">
                    <div class="col-md-4 col-md-offset-2">
                        <div class="left-action text-left clearfix">
                            <h2>Danh sách Phòng</h2>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="right-action text-right">
                            <div class="btn-groups d-md-flex justify-content-md-end">
                                <button type="button" class="btn btn-primary"onclick="window.location.href='/Hahalolo/admin/add-room.php'"><i class="fa fa-plus" ></i> Tạo sản phẩm
                                </button>
                                <button type="button" class="btn btn-success"><i class="fa fa-download"></i> Xuất Excel</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-space orders-space"></div>

                <div class="products-content">
                    <div class="product-sear panel-sear">
                        <div action="" class="row padding-top-12">
                            <div class="form-group col-md-5 p-8">
                                <input type="text" class="form-control" placeholder="Nhập mã sản phẩm hoặc tên sản phẩm" id="product-search">
                            </div>
                            <div class="form-group col-md-7 ">
                                <div class="listitem row">
                                    <div class="col-md-3 p-8">
                                        <select class="form-control" id="search-option-1">
                                            <option value="0">Đang trống</option>
                                            <option value="1">Đã được đặt</option>
                                            <option value="2">Đã xóa</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 p-8">
                                        <select class="form-control search-option-2" id="prd_group_id">
                                            <option value="-1" selected="selected">Danh mục</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 p-8">
                                        <select class="form-control search-option-3" id="prd_manufacture_id">
                                            <option value="-1" selected="selected">Nhà sản xuất</option>
                                            <optgroup label="Chọn nhà sản xuất">
                                                <?php if (isset($data['_prd_manufacture']) && count($data['_prd_manufacture'])) :
                                                    foreach ($data['_prd_manufacture'] as $key => $val) :
                                                ?>
                                                        <option value="<?php echo $val['ID']; ?>"><?php echo $val['prd_manuf_name']; ?></option>
                                                <?php
                                                    endforeach;
                                                endif;
                                                ?>
                                            </optgroup>
                                            <optgroup label="------------------------">
                                                <option value="product_manufacture" data-toggle="modal" data-target="#list-prd-manufacture">Tạo mới Nhà sản xuất
                                                </option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-md-3 p-8 w-auto">
                                        <button type="button" class="btn btn-primary btn-large btn-ssup" onclick="cms_paging_product(1)"><i class="fa fa-search"></i> Tìm kiếm
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="room-main-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Mã khách sạn</th>
                                    <th scope="col">Tên khách sạn</th>
                                    <th scope="col">Mã phòng</th>
                                    <th scope="col">Tên phòng</th>
                                    <th scope="col">Số người</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Địa chỉ</th>
                                    <th scope="col">Sửa</th>
                                    <th scope="col">Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Vùng này là Dữ liệu cần lặp lại hiển thị từ CSDL -->
                                <?php
                                // Bước 01: Kết nối Database Server
                                $conn = mysqli_connect('localhost', 'root', '', 'db_hahalolo');
                                if (!$conn) {
                                    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                                }
                                // Bước 02: Thực hiện truy vấn
                                $sql = "SELECT khachsan.makhachsan, khachsan.tenkhachsan, phong.maphong, phong.tenphong, phong.songuoi, phong.gia, khachsan.diachi FROM khachsan, phong WHERE khachsan.makhachsan = phong.makhachsan";
                                $result = mysqli_query($conn, $sql);
                                // Bước 03: Xử lý kết quả truy vấn
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                        <tr>
                                            <th scope="row"><?php echo $row['makhachsan']; ?></th>
                                            <td><?php echo $row['tenkhachsan']; ?></td>
                                            <td><?php echo $row['maphong']; ?></td>
                                            <td><?php echo $row['tenphong']; ?></td>
                                            <td><?php echo $row['songuoi']; ?></td>
                                            <td><?php echo $row['gia']; ?></td>
                                            <td><?php echo $row['diachi']; ?></td>
                                            <td><a href="edit-room.php?maphong=<?php echo $row['maphong']; ?>"><i class="fas fa-pencil-alt"></i></a></td>
                                            <td><a href="delete-room.php?maphong=<?php echo $row['maphong']; ?>"><i class="fas fa-trash-alt"></i></a></td>
                                        </tr>
                                <?php
                                    }
                                }
                                // Bước 04: Đóng kết nối Database Server
                                mysqli_close($conn);
                                ?>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>