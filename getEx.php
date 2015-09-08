<?php
   if( $_GET["name"] || $_GET["age"] )
   {
      echo "Hello There ". $_GET['name']. "<br />";
      echo "You're ". $_GET['age']. " years of age.";
      
      exit();
   }
?>
<html>
   <body>
   
      <form action="<?php $_PHP_SELF ?>" method="GET">
         Name: <input type="text" name="name" />
         Age: <input type="text" name="age" />
         <input type="submit" />
      </form>
      
   </body>
</html>