<DOCKTYPE html>
      <html>
            <body>
                  <?php
                  // arithmatic operator
                  $a=10;
                  $b=25;
                  echo($a+$b);
                  echo"<br>";
                  echo($a-$b);
                  echo"<br>";
                  echo($a*$b);
                  echo"<br>";
                  echo($a/$b);
                  echo"<br>";
                  $a=2;
                  $b=4;
                  echo($a**$b);
                  echo"<br>";

                  // Assignment operator
                  $x=20;
                  $x +=150;
                  echo($x);
                  echo"<br>";
                  $x=20;
                  $x -=150;
                  echo($x);
                  echo"<br>";
                  $x=5;
                  $x *=10;
                  echo($x);
                  echo"<br>";
                  $x=50;
                  $x /=10;
                  echo($x);
                  echo"<br>";

                  // Comparision operator
                  $x=5;
                  $y=5;
                  var_dump($x==$y);
                  echo"<br>";
                  $x=5;
                  $y="5";
                  var_dump($x===$y);
                  echo"<br>";
                  $x=10;
                  $y=25;
                  var_dump($x!=$y);
                  echo"<br>";
                  $x=10;
                  $y=10;
                  var_dump($x!==$y);
                  echo"<br>";
                  $x=100;
                  $y=50;
                  var_dump($x>$y);
                  echo"<br>";
                  $x=100;
                  $y=50;
                  var_dump($x<$y);
                  echo"<br>";
                  $x=100;
                  $y=100;
                  var_dump($x>=$y);
                  echo"<br>";
                  $x=200;
                  $y=100;
                  var_dump($x<=$y);
                  echo"<br>";
                  $x=200;
                  $y=100;
                  var_dump($x<=>$y);
                  echo"<br>";
                  $x=100;
                  $y=100;
                  var_dump($x<=>$y);
                  echo"<br>";
                  $x=100;
                  $y=200;
                  var_dump($x<=>$y);
                  echo"<br>";

                  // increment/decrement operator
                  $a=10;
                  echo(++$a);
                  echo"<br>";
                  $a=10;
                  echo($a++);
                  echo"<br>";
                  $a=10;
                  echo(--$a);
                  echo"<br>";
                  $a=10;
                  echo($a--);
                  echo"<br>";

                  // logical operator
                        // and operator
                        $x=10;
                     var_dump($x>5&&$x<15);   
                     echo"<br>";

                     $x=25;
                     $y=99;
                     if($x>0 && $y<100) {
                        echo("Welcome World");
                     }
                     echo"<br>";

                        // or operator
                        $x=15;
                        $y=45;
                        if($x>18 ||$y<50) {
                              echo("Eligible for vote");
                        }
                        echo"<br>";

                        // not operator
                        $x=100;
                        if(!($x>=25)) {
                              echo("Happy New Year 2024");
                        }







                  ?>
            </body>
      </html>