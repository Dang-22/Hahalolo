

<body>

<?php
    $conn = mysqli_connect('localhost','root','','db_hahalolo');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    
?>
<div class="slide-banner bg-img  ">

    <div class="container add_flim-form" id="post_film">
        <div class="row">
            <div id="edit-film" class="table_box">
                <div class="text-center">
                    <h2>Thêm phòng </h2>
                </div>
                <form method="post" id="form-insert-film" name="form-insert-film" class="form-horizontal"
                    enctype="multipart/form-data" action="" role="form">
                    <!-- <div>
                        <label for="film-name" class="container">
                            Mã khách sạn
                        </label>
                        <div class="container">
                            <input type="text" class="form-control" id="makhachsan" name="makhachsan">
                        </div>
                    </div> -->
                    <div>
                        <label for="film-name" class="container">
                            Tên phòng
                        </label>
                        <div class="container">
                            <input type="text" class="form-control" id="tenphong" name="tenphong">
                        </div>
                    </div>
                    <div>
                        <label for="diachi" class="diachi">
                            Số người
                        </label>
                        <div class="container">
                            <input type="text" class="form-control" id="diachi" name="songuoi">
                        </div>
                    </div>
                    <div>
                        <label for="status" class="container">
                            Giá phòng
                        </label>
                        <div class="container">
                            <input type="text" class="form-control" id="gia" name="gia">
                        </div>
                    </div>
                    <div>
                    <div>
                        <label for="trailer-link" class="container">
                            File ảnh
                        </label>
                        <div class="container">
                            <input type="file" class="form-control" id="anh" name="anh">
                        </div>
                    </div>
                    
                        <label for="director" class="container">
                            Mô tả
                        </label>
                        <div class="container">
                            <input type="text" class="form-control" id="mota" name="mota">
                        </div>
                    </div>                        
                    <button type = "submit" name = "button_post">Them</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
if(isset($_POST["button_post"])){
    // $makhachsan = $_POST['makhachsan'] ;    
    $tenphong = $_POST["tenphong"];
    $songuoi = $_POST["songuoi"];
    $gia = $_POST["gia"];
    $anh = $_FILES["anh"]["name"];
    $mota = $_POST["mota"];
    $targetimg = "photo/".basename($anh);
    if (move_uploaded_file($_FILES['anh']['tmp_name'], $targetimg) ) {
        $sql = "INSERT INTO phong( tenphong, songuoi, gia,anh,mota)            
        VALUES ('$tenphong','$songuoi', '$gia','$anh','$mota)";
        $result = mysqli_query($conn,$sql);
        var_dump($result);
        if($result){?>
<script>
alert("Insert film sucessfully!");
location.href = "hotel_detail.php";
</script>
<?php
        }
    }
    else{
        echo '<script language="javascript">alert("Đã upload thất bại!");</script>';

        }
}

?>
</body>

</html>