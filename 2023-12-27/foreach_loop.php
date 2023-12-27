<DOCKTYPE html>
      <html>
            <body>
                  <?php
            $cars = array("BMW","Benz","Volvo","Audi","Skoda");

            foreach($cars as $x){
                  echo"$x<br>";
            }

            echo"<br>";

            $person= array("John"=>"25","Peter"=>"30","Suhan"=>"35","Aryan"=>"37");

            foreach($person as $x=>$y){
                  echo("$x:$y<br>");
            }
            echo"<br>";

            $color=array("red","blue","yellow","white","grey","black");

            foreach($color as $x){
                  if($x=="white")break;
                  echo"$x<br>";
            }
            echo"<br>";

            $cars = array("BMW","Benz","Volvo","Audi","Skoda","Hyundai","Honda");

            foreach($cars as $x){
                  if($x=="Volvo")continue;
                  echo"$x<br>";
            }

            echo"<br>";


                  ?>
            </body>
      <html>