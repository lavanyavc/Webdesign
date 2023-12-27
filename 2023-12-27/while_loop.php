<DOCKTYPE html>
      <html>
            <body>
                  <?php

                  $i=0;
                  while($i<5){
                        echo"Advith <br>";
                        $i++;
                  }

                  echo"<br>";

                  $i=0;
                  while($i<6){
                        if($i==3) break;
                        echo"$i<br>";
                        $i++;
                  }

                  echo"<br>";

                  $i=0;
                  while($i<6){
                        $i++;
                        if($i==3)continue;
                        echo"$i<br>";
                  }

                  echo"<br>";

                  $i=0;
                  while($i<=15){
                        $i++;
                        if($i %2==0)continue;
                        echo"$i<br>";
                  }

                  echo"<br>";

                  $i=0;
                  while($i<100){
                        $i+=20;
                        echo"$i<br>";
                  }
                  echo"<br>";
                  
                  $i=-1;
                  while($i>-6){
                        echo"$i<br>";
                        --$i;
                  }








                  ?>
            </body>
      </html>