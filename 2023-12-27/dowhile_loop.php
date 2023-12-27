<DOCKTYPE html>
      <head>
            <body>
                  <?php  

                  $i=1;
                  do{
                        echo$i;
                        $i++;
                  } while($i<6);

                  echo"<br>";

                  $i=0;
                  do{
                        echo("Happy new year<br>");
                        $i++;
                  }while($i<6);
                  echo"<br>";

                  $i=0;
                  do{
                        if($i==5)break;
                        echo("$i<br>");
                        $i++;
                  }while($i<10);
                  echo"<br>";

                  $i=0;
                  do{
                        $i++;
                        if($i%2==1)continue;
                        echo("$i<br>");
                  }while($i<25);
                  echo"<br>";

                  $i=-1;
                  do{
                        echo"$i<br>";
                        --$i;
                  }while($i>-6);



              



                  ?>
            </body>
      </head>