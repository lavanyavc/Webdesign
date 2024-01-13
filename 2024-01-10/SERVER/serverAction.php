<html>
      <body>
            <?php
      if($_POST["fname"]==""){
            echo "Please enter valid name";;
      }else{
            echo $_POST["fname"];
      }
            ?>
      </body>
</html>