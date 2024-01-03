<DOCKTYPE html>
      <html>
            <body>
                  <?php

                  // // array_change_key_case() function
                 $name=array(
                  "advith"=>"10",
                  "kishan"=>"20",
                  "lavanya"=>"30"
                 );
                 $newArray=array_change_key_case($name,CASE_UPPER);
                 echo"<pre>";
                 print_r($newArray);
                 echo"</pre>";
                 echo"<br>";

                 $fruits=array(
                  "APPLE"=>"5",
                  "BANANA"=>"2",
                  "GRAPES"=>"3",
                  "MANGO"=>"4"
                 );
                $newFruits=array_change_key_case($fruits,CASE_LOWER);
                echo"<pre>";
                print_r($newFruits);
                echo"</pre>";
                echo"<br>";

                $cars=array(
                  "a"=>"Audi",
                  "b"=>"BMW",
                  "k"=>"Kia"
                );
                $newCars=array_change_key_case($cars,CASE_UPPER);
                echo"<pre>";
                print_r($newCars);
                echo"</pre>";
                echo"<br>";

            //    array_chunk_case() function
                  $pets=array("Dog","Cat","Rat","Parrot","Cow");
                  $newPets=array_chunk($pets,2);
                  echo"<pre>";
                  print_r($newPets);
                  echo"</pre>";
                  echo"<br>";

                  $flower=array("Rose","Sunflower","Lily","Marigold","Tulip","Jasmine");
                  $newFlower=array_chunk($flower,4);
                  echo"<pre>";
                  print_r($newFlower);
                  echo"</pre>";
                  echo"<br>";

                  // array count_values() function

                  $place=array("India","USA","Rassia","UK","Canada","Rassia","UK","Canada","India","USA","Rassia",);
                  $newPlace=array_count_values($place);
                  echo"<pre>";
                  print_r($newPlace);
                  echo"</pre>";
                  echo"<br>";
                  $flower=array("Rose","Sunflower","Lily","Marigold","Tulip","Jasmine","Lily","Marigold","Tulip",);
                  $newFlower=array_count_values($flower);
                  echo"<pre>";
                  print_r($newFlower);
                  echo"</pre>";
                  echo"<br>";

                  // array pop() function

                  $colors=array("Red","Yellow","Blue","White");
                  array_pop($colors);
                  echo"<pre>";
                  print_r($colors);
                  echo"</pre>";
                  echo"<br>";

                  $days=array("Sunday","Monday","Tuesday");
                  $newDays=array_pop($days);
                  echo"<pre>";
                  print_r($newDays);
                  echo"</pre>";
                  echo"<br>";

                  // array push() function
                  $bike=array("R15","Activa","Access125");
                  array_push($bike,"Pulser250");
                  echo"<pre>";
                  print_r($bike);
                  echo"</pre>";
                  echo"<br>";

                  $mobile=array("One+","Poco","Redmi","iphone");
                  array_push($mobile,"Samsung");
                  echo"<pre>";
                  print_r($mobile);
                  echo"</pre>";
                  echo"<br>";

                  // array merge() function
                  $a1=array("lemon","potato","Tomato");
                  $a2=array("onion","chilli");
                  $a3=array_merge($a1,$a2);
                  echo"<pre>";
                  print_r($a3);
                  echo"</pre>";
                  echo"<br>";

                  $b1=array("Red","White","Blue");
                  $b2=array("Pink","Black","Yellow");
                  $b3=array_merge($b1,$b2);
                  echo"<pre>";
                  print_r($b3);
                  echo"</pre>";
                  echo"<br>";

                  // array column() function
                  
                  $employe =array(
                  array (
                        "Name"=>"Arnav",
                        "Salary"=>"1000",
                        "Place"=>"Bengaluru"

                  ),
                  array(
                        "Name"=>"Arun",
                        "Salary"=>"2000",
                        "Place"=>"Mysuru"
                  ),
                  array(
                        "Name"=>"Bhavna",
                        "Salary"=>"3000",
                        "Place"=>"Kolar"
                  ),
                  array(
                        "Name"=>"Bhoomika",
                        "Salary"=>"4000",
                        "Place"=>"Coorg"
                  )

                  );
                  $a=array_column($employe,"Place");
                  echo"<pre>";
                  print_r($a);
                  echo"</pre>";
                  echo"<br>";

                  // array combine() function
                  $name=array("Vishal","Vikranth","Vedanth");
                  $age=array("25","35","45");
                  $a=array_combine($name,$age);
                  echo"<pre>";
                  print_r($a);
                  echo"</pre>";
                  echo"<br>";

                  // array diff() function
                  $chats1=array("P=>Panipuri","S=>Sevpuri","M=>Masalpuri");
                  $chats2=array("A=>Panipuri","B=>Sevpuri","B=>Belpuri","M=>Masalpuri");
                  $c=array_diff($chats1,$chats2);
                  echo"<pre>";
                  print_r($c);
                  echo"</pre>";
                  echo"<br>";

                  // array flip() function
                  $color=array("Red"=>"R","Blue"=>"B","Yellow"=>"Y");
                  $a=array_flip($color);
                  echo"<pre>";
                  print_r($a);
                  echo"</pre>";
                  echo"<br>";


                  ?>
            </body>
      </html>