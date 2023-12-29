<DOCKTYPE html>
      <html>
            <body>
                  <?php
                  $emp=array(
                        array(" Arav","Manager",10000),
                        array("Arnav","Senior Eng",8000),
                        array("Amar","junior Eng",5000),
                        array("Akshay","Admin",3000),
                  );
                  print_r($emp);
                  echo"<br>";
                  echo("Employe Name-".$emp[0][0].", Designation-".$emp[0][1].", Salary-".$emp[0][2]."<br>");
                  echo("Employe Name-".$emp[1][0].", Designation-".$emp[1][1].", Salary-".$emp[1][2]."<br>");
                  echo("Employe Name-".$emp[2][0].", Designation-".$emp[2][1].", Salary-".$emp[2][2]."<br>");
                  echo("Employe Name-".$emp[3][0].", Designation-".$emp[3][1].", Salary-".$emp[3][2]."<br>");
                  echo"<br>";
                  echo"<br>";
                  echo("Employe Name". " Designation"." Salary"."<br>");
                  echo($emp[0][0]." ".$emp[0][1]." ".$emp[0][2]."<br>");
                  echo($emp[1][0]." ".$emp[1][1]." ".$emp[1][2]."<br>");
                  echo($emp[2][0]." " .$emp[2][1]." ".$emp[2][2]."<br>");
                  echo($emp[3][0]." " .$emp[3][1]." ". $emp[3][2]."<br>");
                  echo"<br>";
                  echo"<br>";
                  for($row=0;$row<4;$row++){
                        echo"<h4>Row Number $row</h><br>";
                  
                  echo"<ol>";
                  for($col=0;$col<3;$col++){
                        echo"<li>".$emp[$row][$col]."</li>";
                  }
                  echo"</ol>";
            }
            echo"<br>";
            echo"<br>";

            $age = [10,35,50,15,60,40];
            sort($age);
            $x=count($age);
            for($i=0;$i<$x;$i++){
                  echo"$age[$i]<br>";
            }


            $i=0;
            while($i<10){
                  $i++;
                  if($i%2==1){
                        continue;
                  }
                  echo("$i<br>");

            }
            echo("<br>");

            $i=0;
            while($i<10){
                  $i++;
                  if($i%2==0){
                        continue;
                  }
                  echo("$i<br>");

            }



                  ?>

            </body>
      </html>