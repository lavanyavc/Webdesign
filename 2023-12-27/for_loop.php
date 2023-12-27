<DOCKTYPE html>
      <html>
            <body>
                  <?php
                  for( $i=0;$i<5;$i++){
                  echo"$i<br>";
                  }
                  echo"<br>";

                  for($i=0;$i>-10;$i--){
                        echo"Number is $i<br>";
                  }
                  echo"<br>";

                  for($i=0;$i<20;$i++){
                        if($i%2==0)continue;
                        echo"$i<br>";
                  }
                  echo"<br>";

                  for($i=0;$i<10;$i++){
                        if($i==5)break;
                        echo"$i<br>";

                  }
                  echo"<br>";

                  for($i=0;$i<=100;$i+=20){
                        echo"$i<br>";
                  }
                  echo"<br>";

                  
                  for($i=1;$i<25;$i*=2){
                        echo"$i<br>";
                  }



                  ?>
            </body>
      </html>