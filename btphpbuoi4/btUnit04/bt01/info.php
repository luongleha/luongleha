<?php 
    $error = array();
    if (empty($_POST['id'])) {
        $error['id'] = "Nhap ma sinh vien";
    }
    else{
        $id = $_POST['id'];
    }
    if (empty($_POST['name'])) {
        $error['name'] = "Nhap ho ten";
    }
    else{
        $id = $_POST['name'];
    }
    if (empty($_POST['phone'])) {
        $error['phone'] = "Nhap so dien thoai";
    }
    else{
        $id = $_POST['phone'];
    }
    if (empty($_POST['email'])) {
        $error['email'] = "Nhap email";
    }
    else{
        $id = $_POST['eamil'];
    }
    if (empty($_POST['address'])) {
        $error['address'] = "Nhap dia chi";
    }
    else{
        $id = $_POST['address'];
    }

    if (empty($error)) {
        echo "{$id} <br> {$name} <br> {$phone} <br> {$email} <br> {$address}";
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="info_post.php" method="POST" role="form">
            <h2 align="center">ZENT GROUP - PHP - Gui du lieu nguoi dung POST</h2>
            <div class="form-group">
                <label for="">Ma sinh vien</label>
                <input type="text" class="form-control" id="id" placeholder="Nhap ma sinh vien" name="id">
                <?php 
                if (isset($error['id'])) {
                    ?>
                    <span style="color: red;"><?php echo $error['id']; ?></span><br>
                <?php } ?>
            </div>
            
            <div class="form-group">
                <label for="">Ha va ten</label>
                <input type="text" class="form-control" id="name" placeholder="Nhap ho ten" name="name">
                <?php 
                if (isset($error['name'])) {
                    ?>
                    <span style="color: red;"><?php echo $error['name']; ?></span><br>
                <?php } ?>
            </div>  
            
            <div class="form-group">
                <label for="">So dien thoai</label>
                <input type="text" class="form-control" id="phone" placeholder="Nhap so dien thoai" name="phone">
                <?php 
                if (isset($error['phone'])) {
                    ?>
                    <span style="color: red;"><?php echo $error['phone']; ?></span><br>
                <?php } ?>
            </div>  

            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Nhap email" name="email">
                <?php 
                if (isset($error['email'])) {
                    ?>
                    <span style="color: red;"><?php echo $error['email']; ?></span><br>
                <?php } ?>
            </div>  
            <div class="form-group">
                <label>Gioi tinh: </label>
                <input type="radio" name="gioiTinh" value="Nam" placeholder="" checked="">Nam
                <input type="radio" name="gioiTinh" value="Nữ" placeholder="">Nu
                <input type="radio" name="gioiTinh" value="Unisex" placeholder="">Unisex
            </div>
            <div class="form-group">
                <label for="">Dia chi</label>
                <input type="text" class="form-control" id="address" placeholder="Nhap dia chi" name="address">
                <?php 
                if (isset($error['address'])) {
                    ?>
                    <span style="color: red;"><?php echo $error['address']; ?></span><br>
                <?php } ?>
            </div>  
            <button type="submit" class="btn btn-primary">Luu thong tin</button>
        </form>
    </div>
</body>
</html>