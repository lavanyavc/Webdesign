<?php
// define variables and set to empty;
$nameErr=$emailErr=$websiteErr=$commentErr=$genderErr=" ";
$name=$email=$website=$comment=$gender=" ";

 if($_SERVER["REQUEST_METHOD"]=="POST"){
      if(empty($_POST[$name])){
            $nameErr="Please submit your Name";
      }else{
            $name=test_input($_POST[$name]);
      }
      if(empty($_POST[$email])){
            $emailErr="Please submit proper E-mail";
      }else{
            $email=test_input($_POST[$email]);
      }
      if(empty($_POST[$website])){
            $websiteErr="";
      }else{
            $website=test_input($_POST[$website]);
      }
      if(empty($_POST[$comment])){
            $commentErr="";
      }else{
            $comment=test_input($_POST[$comment]);
      }
      if(empty($_POST[$gender])){
            $genderErr="Please select gender";
      }else{
            $gender=test_input($_POST[$gender]);
      }

      function test_input($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
      }
 }

 echo "<h3>Your values are giver below</h3>";
 echo $name;
 echo "<br>";
 echo $email;
 echo "<br>";
 echo $website;
 echo "<br>";
 echo $comment;
 echo "<br>";
 echo $gender;

?>
