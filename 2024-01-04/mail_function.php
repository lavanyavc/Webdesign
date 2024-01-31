<?php

// $to="advith@gmail.com";
// $subject="Promotion Letter";
// $message="<b>Congratulation</b>";
// $message="<h2>Here you got promotion</h2>";
// $header="From=kishan@gmail.com \r\n";
// $header="Cc=lavanya@gmail.com \r\n";
// $result=mail($to,$subject,$message,$header);
// if($result==true){
//     echo "Mail sent successfully";
// }else {
//     echo "Mail couldnot sent";
// }

// $abc="Happy New Year 2024";
// echo htmlspecialchars($abc,ENT_QUOTES);
// echo "<br>";
// $bca="This is 'PHP' & 'JAVA' Program";
// echo htmlspecialchars($bca,ENT_COMPAT);

$nameErr=$emailErr=$websiteErr=$commentErr=$genderErr=" ";
$name=$email=$website=$comment=$gender=" ";





?>
<DOCKTYPE html>
    <html>
        <head>
          <style>
            .error{
                color:red;
            }
            input[type="range"]{
            accent-color:orange;
            }
          </style>
        </head>
        <body>
            <span class="error"></span>
            <form method="post" action="formvalidation.php">
            Name:<input type="text" name="fname">
            <span class="error">*<?php echo $nameErr ?></span><br><br>
            E-mail:<input type="email" name="mail">
            <span class="error">*<?php echo $emailErr?></span><br><br>
            Website:<input type="text" name="website">
            <span class="error">*<?php echo $websiteErr ?></span><br><br>
            Comment:<textarea name="comment" rows="5" cols="30"></textarea><br><br>
            Gender:
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender" value="Other">Other
            <span class="error">*<?php echo $genderErr?></span><br><br>
            <input type="submit" name="submit" value="submit"><br><br>
            <input type="range" name="range"><br><br>
            <input type="date" name="date"><br><br>
            <input type="button" name="button"><br><br>
            </form>
        </body>
    </html>