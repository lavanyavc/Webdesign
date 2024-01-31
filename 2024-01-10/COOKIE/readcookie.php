<?php
      $input=isset($_GET["otp"]) ? $_GET["otp"] : "";
      if($input == ""){
            echo "Please Enter OTP";
      } else {
            $cookieId = "MyOTP";
            $otp = isset($_COOKIE[$cookieId]) ? $_COOKIE[$cookieId] :"";
       if($input==$otp){
            setcookie($cookieId,$otp,time()-1,"/");
                  echo "OTP is verified";
            } else{
                  echo "OTP is invalid";
            }
      }


       
?>


<!-- Approach 1:
      set 123_f a
      set 123_l b
      set 123_n ab

      read 123_f a 
      read 123_l b 
      read 123_n ab
 -->

