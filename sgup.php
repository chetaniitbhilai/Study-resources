
<?php
  $id=$_POST["email"];
  $password=$_POST["psw"];
  $t=$id.",".$password.",\n";
  $file=fopen("student.txt","a+");
  fwrite($file,$t);
  header('location:drop1try2.html');
  fclose($file);
  ?>
