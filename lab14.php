<?php session_start();
global $tong;
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Tinh tong</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <div class="container">
        <h2>Tong hieu tich thuong</h2>
        <form action="" method="post">
            <div class="form-group">
            <label for="">So hang 1</label>
            <input type="text"
                class="form-control" name="txtSo1" id="txtSo1" aria-describedby="helpId" placeholder=""
                value="<?php echo isset($_POST["txtSo1"]) ? $_POST["txtSo1"] : ''; ?>"
                >
            <br> 
            <label for="">So hang 2</label>
            <input type="text"
                class="form-control" name="txtSo2" id="txtSo2" aria-describedby="helpId" placeholder="">
            <br> 
            <button type="submit" name="btnTong" id="btnTong" class="btn btn-primary" btn-lg btn-block">Tong</button>
                <button type="submit" name="btnHieu" id="btnHieu" class="btn btn-primary" btn-lg btn-block">Hieu</button>
                <button type="submit" name="btnTich" id="btnTich" class="btn btn-primary" btn-lg btn-block">Tich</button>
                <button type="submit" name="btnThuong" id="btnThuong" class="btn btn-primary" btn-lg btn-block">Thuong</button>
            </div>
        </form>
        <i class="fa fa-text-height" aria-hidden="true">
            <label for="">Ket qua:</label>
            <label for="" id="lblKQ"><?php echo $tong; ?></label>
        </i>
    </div>
    <?php
        
        if(isset($_POST['btnTong']))
        {
            $so1 = $_POST['txtSo1'];
            $so2 = $_POST['txtSo2'];
            $tong = $so1+$so2;
            echo ' <div class="container">';
            echo 'Tong duoc xu ly: '.$tong."<br>";
            echo '</div>';
            //dien du liệu vào thành phần sau khi post
           echo '<script type="text/javascript"> document.getElementById("lblKQ").innerHTML='.$tong.' </script>';
           
        }
        else if (isset($_POST['btnHieu']))
        {
            echo 'Hieu duoc xu ly';
        }
        else if (isset($_POST['btnTich']))
        {
            echo 'Tich duoc xu ly';
        }
        else if (isset($_POST['btnThuong']))
        {
            echo 'Thuong duoc xu ly';
        }
    ?>
  </body>
</html>