<?php
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    //session_start();
   // if(!isset($_SESSION['isLoginOK'])){
    //    header("location:login.php");
    //}
    //include("template/header.php");
?>
    <main>
    <div class="container">
        <h5 class="text-center text-primary mt-5">Thêm mới khách sạn và phòng</h5>
        <!-- Form thêm Dữ liệu nhân viên -->
        <form action="add-room-process.php" method="post">
        <div class="form-group">
                <label for="exampleFormControlSelect2">Mã khách sạn</label>
                <select class="form-control" name="makhachsan">
                    <!-- Truy vấn dữ liệu để Hiển thị lựa chọn KS -->
                    <?php 
                        // Bước 01: Kết nối Database Server
                        $conn = mysqli_connect('localhost','root','','db_hahalolo');
                        if(!$conn){
                            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                        }
                        // Bước 02: Thực hiện truy vấn
                        $sql = "SELECT * FROM khachsan";

                        $result = mysqli_query($conn,$sql);

                        // Bước 03: Xử lý kết quả truy vấn
                        if(mysqli_num_rows($result)){
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                                <option value="<?php echo $row['makhachsan']; ?>"><?php echo $row['makhachsan']; ?></option>
                    <?php
                            }
                        }

                        // Bước 03: Đóng kết nối
                        mysqli_close($conn);
                    ?>
               
                </select>
            </div>
            <div class="form-group">
                <label for="txtMap">Mã phòng</label>
                <input type="text" class="form-control" name="maphong" placeholder="Nhập Mã phòng">
            </div>
            
            <div class="form-group">
                <label for="txtTenp">Tên phòng</label>
                <input type="text" class="form-control" name="tenphong" placeholder="Nhập Tên phòng">
               
            </div>
            <div class="form-group">
                <label for="txtSonguoi">Số người</label>
                <input type="int" class="form-control" name="songuoi" placeholder="Số người">
                
            </div>
            <div class="form-group">
                <label for="txtGia">Giá</label>
                <input type="int" class="form-control" name="gia" placeholder="Nhập Giá">
               
            </div>
            
            <button type="submit" class="btn btn-primary mt-3">Lưu lại</button>
        </form>
    </div>    
    </main>
