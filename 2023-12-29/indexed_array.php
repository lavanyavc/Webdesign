<DOCKTYPE html>
      <head>
            <body>
                  <?php
                        // indexed array
                        $a = ["Advith",10,15.5,"June"];
                        echo $a[0];
                        echo"<br>";
                        echo $a[1];
                        echo"<br>";
                        echo $a[2];
                        echo"<br>";
                        echo $a[3];
                        echo"<br>";
                        print_r ($a);
                        echo"<br>";
                       var_dump($a);
                       echo"<br>";

                       $name = ["Advith","Arav","Arnav","Advik","Amar","Achyuth"];
                       echo count($name);
                       echo"<br>";
                       echo"<br>";
                       $car=["BMW","Audi","Benz"];
                       $car[3]="Ford";
                       $car[0]="Honda";

                       print_r($car);
                       echo"<br>";
                       echo"<br>";
                       $color=["Red","Blue","White","Yellow"];
                       foreach($color as $x){
                        echo "$x<br>";
                       }
                       echo"<br>";

                       $car[2]="BMW";
                       $car[5]="Audi";
                       $car[8]="Honda";
                        array_push($car,"Ford");
                        var_dump($car);


                  ?>
            </body>
      </head>