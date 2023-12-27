<DOCKTYPE html>
      <htlm>
            <body>
                  <?php
                  $time=5;
                  if($time>18){
                        echo"Good Evening";
                  }else {
                        echo "Good Morning";
                  }
                  echo"<br>";

                  $age=18;
                  if($age>=18){
                        echo"Eligible for voting";
                  }else {
                        echo "Not eligible for voting";
                  }
                  echo"<br>";

                  $marks=101;
                  if($marks>=90 && $marks<=100){
                        echo"Destinction";
                  }elseif($marks>=80 && $marks<90){
                        echo"First Rank";
                  }elseif($marks>=70 && $marks<80){
                        echo"Second Rank";
                  }elseif($marks>=50 && $marks<70){
                        echo"Third Rank";
                  }elseif($marks>=35 && $marks<50){
                        echo"Pass";
                  }elseif($marks<35){
                        echo"Fail";
                  }else{
                        echo"Enter valid marks";
                  }
                  echo"<br>";

                  $gender="female";
                  $name="Lavanya";
                  if($gender=="female"){
                        echo"Hello Miss.$name";
                  }else{
                        echo"Hello Mr.$name";
                  }

                  ?>
            </body>
</html>