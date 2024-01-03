<DOCKTYPE html>
      <html>
            <body>
                  <?php
                  // string length 
                  $a=("Happy New Year");
                  echo"<pre>";
                  print_r(strlen($a));
                  echo"</pre>";
                  echo"<br>";

                  // Word Count
                  $b=("Hello World,Happy New year!");
                  echo"<pre>";
                  print_r(str_word_count($b));
                  echo"</pre>";
                  echo"<br>";

                  // Search For Text Within a String
                  $b=("Hello World,Happy New year!");
                  echo"<pre>";
                  print_r(strpos($b,"New"));
                  echo"</pre>";
                  echo"<br>";

                  // uppercase
                  $c=("Happy World!");
                  echo"<pre>";
                  print_r(strtoupper($c));
                  echo"</pre>";
                  echo"<br>";

                  // lowercase
                  $c=("happy world!");
                  echo"<pre>";
                  print_r(strtolower($c));
                  echo"</pre>";
                  echo"<br>";

                  // Replace String
                  $c=("Happy World!");
                  echo"<pre>";
                  print_r(str_replace("Happy","Hello",$c));
                  echo"</pre>";
                  echo"<br>";

                  // Reverse a String
                  $c=("Happy World!");
                  echo"<pre>";
                  print_r(strrev($c));
                  echo"</pre>";
                  echo"<br>";

                  // Remove Whitespace
                  $c=("Happy World!");
                  echo"<pre>";
                  print_r(trim($c));
                  echo"</pre>";
                  echo"<br>";

                  // Convert String into Array
                  $c=("Happy World!");
                  echo"<pre>";
                  print_r(explode(" ",$c));
                  echo"</pre>";
                  echo"<br>";



                  ?>
            </body>
       </html>