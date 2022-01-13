

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
                        <h2>Thêm khách sạn </h2>
                    </div>
                    <form method="post" id="form-insert-film" name="form-insert-film" class="form-horizontal"
                        enctype="multipart/form-data" action="" role="form">
                        <div>
                            <label for="film-name" class="container">
                                Tên khách sạn
                            </label>
                            <div class="container">
                                <input type="text" class="form-control" id="tenkhachsan" name="tenkhachsan">
                            </div>
                        </div>
                        <div>
                            <label for="diachi" class="diachi">
                                Địa chỉ
                            </label>
                            <div class="container">
                                <input type="text" class="form-control" id="diachi" name="diachi">
                            </div>
                        </div>
                        <div>
                            <label for="trailer-link" class="container">
                                File ảnh
                            </label>
                            <div class="container">
                                <input type="file" class="form-control" id="anh" name="anh">
                            </div>
                        </div>
                        <div>
                            <label for="status" class="container">
                                Giá 
                            </label>
                            <div class="container">
                                <input type="text" class="form-control" id="gia" name="gia">
                            </div>
                        </div>
                        <div>
                            <label for="director" class="container">
                                Tiên ích
                            </label>
                            <div class="container">
                                <input type="text" class="form-control" id="tienich" name="tienich">
                            </div>
                        </div>
                        <div>
                            <label for="actor" class="container">
                               Ngày mở cửa
                            </label>
                            <div class="container">
                                <input type="date" class="form-control" id="ngaymocua" name="ngaymocua">
                            </div>
                        </div>
                        <div>
                            <label for="actor" class="container">
                               Ngày đóng cửa
                            </label>
                            <div class="container">
                                <input type="date" class="form-control" id="ngaydongcua" name="ngaydongcua">
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
        $tenkhachsan = $_POST["tenkhachsan"];
        $diachi = $_POST["diachi"];
        $gia = $_POST["gia"];
        $anh = $_FILES["anh"]["name"];
        $tienich = $_POST["tienich"];
        $ngaymocua = $_POST["ngaymocua"];
        $ngaydongcua = $_POST["ngaydongcua"];
        $targetimg = "photo/".basename($anh);
        if (move_uploaded_file($_FILES['anh']['tmp_name'], $targetimg) ) {
            $sql = "INSERT INTO khach_san(tenkhachsan, diachi, gia,anh,tienich, ngaymocua, ngaydongcua)            
            VALUES ('$tenkhachsan','$diachi', '$gia','$anh','$tienich','$ngaymocua','$ngaydongcua')";
            $result = mysqli_query($conn,$sql);
            var_dump($result);
            if($result){?>
    <script>
    alert("Insert film sucessfully!");
    location.href = "hotel.php";
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