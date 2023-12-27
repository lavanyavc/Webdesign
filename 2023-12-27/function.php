<DOCKTYPE html>
      <html>
            <body>
                  <?php

                  function myFunction($a,$b){
                  echo $a*$b;
                  }
                  myFunction(5,5);
                  echo"<br>";
                  echo"<br>";


                  function myWish(){
                        echo"Happy New Year 2024";
                  }
                  myWish();
                  echo"<br>";
                  echo"<br>";


                  function familyName($fname){
                        echo"$fname Bhat<br>";
                  }
                  familyName("Pooja");
                  familyName("Asha");
                  familyName("Harsh");
                  familyName("Govind");
                  echo"<br>";
                  echo"<br>";

                  function familyDetails($fname,$age){
                        echo"$fname is $age old<br>";
                  }
                  familyDetails("Depthi","10years");
                  familyDetails("Harshitha","15years");
                  familyDetails("Akshay","20years");
                  familyDetails("Ashok","25years");
                  familyDetails("Amrutha","26years");
                  echo"<br>";
                  echo"<br>";

                  function checkAdult($minage=18){
                  echo"Age is $minage<br>";
                  }
                  checkAdult(20);
                  checkAdult(25);
                  checkAdult();
                  checkAdult(30);
                  echo"<br>";
                  echo"<br>";


                  function myProduct($a,$b){
                        return $a*$b;
                  }
                  echo "8*5=".myProduct(8,5)."<br>";
                  echo "6*5=".myProduct(6,5)."<br>";
                  echo "7*5=".myProduct(7,5)."<br>";
                  echo "9*5=".myProduct(9,5)."<br>";
                  echo"<br>";
                  echo"<br>";

                  function myAction($a,$b){
                        return $a**$b;
                  }

                  echo"2^3=".myAction(2,3)."<br>";
                  echo"3^3=".myAction(3,3)."<br>";
                  echo"4^4=".myAction(4,4)."<br>";
                  echo"5^5=".myAction(5,5)."<br>";
                  echo"<br>";
                  echo"<br>";

                  function addMynumber(....$x){
                        $sum=0;
                        $y=count($x);
                        for($i=0;$i<$y;$i++){
                             $sum+=$x[$i];
                        }
                        return $sum;
                  }
                  $z = addMynumber(2,4,6,3,10);
                  echo($z);


        


         
      

                  ?>
            </body>
      </html