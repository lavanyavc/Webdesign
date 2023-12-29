<DOCKTYPE html>
      <html>
            <body>
                  <?php
                  $person = array("name"=>"Advith","age"=>18,"place"=>"Bengaluru","color"=>"White");
                  print_r($person);
                  echo"<br>";

                  $car = array("Company"=>"Honda","Model"=>"Amaze","Fuel"=>"Petrol","Milage"=>20);
                  print_r($car);
                  echo"<br>";
                  var_dump($car);
                  echo"<br>";
                  echo$car["Fuel"];
                  echo"<br>";
                  echo$car["Company"];
                  echo"<br>";
                  echo$car["Model"];
                  echo"<br>";
                  $car["Year"]=2023;
                  print_r($car);
                  echo"<br>";
                  echo"<br>";


                  $person = array("Name"=>"Advith","age"=>18,"place"=>"Bengaluru","color"=>"White");
                  foreach($person as $x=>$y){
                        print_r("$x:$y<br>");
                  }
                  echo"<br>";



                  ?>
            </body>
      </html>