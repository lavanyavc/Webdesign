<?php
      // $cookieId = md5(time());
      // $cookieValue = isset($_GET['name']) ? $_GET['name'] : "Lavanya VC";
      // setcookie($cookieId, $cookieValue, time() + (15), "/");
      // echo $cookieId


      // $cookieId=123;
      // $f_name=isset($_GET["f_name"]) ? ($_GET["f_name"]):"";
      // $l_name=isset($_GET["l_name"]) ? ($_GET["l_name"]):"";
      // $name=$f_name." ".$l_name;
      // setcookie($cookieId."_fname", $f_name, time() + (15), "/");
      // setcookie($cookieId."_lname", $l_name, time() + (15), "/");
      // setcookie($cookieId."_name", $name, time() + (15), "/");

      // echo $cookieId;

      // $cookieId="MyOTP";
      // $otp= random_int(100000, 999999);
      // setcookie($cookieId,$otp,time()+(3600),"/");
      // echo $otp;

     $cookieName="name";
     $cookieValue="Advith Kishan";
     setcookie($cookieName,$cookieValue,time()+(15),"/");

     if(isset($_COOKIE[$cookieName])){
      echo "welcome"." ".($_COOKIE[$cookieName]);
     }else{
      echo "User is not find";
     }


    
 
 


     
?>