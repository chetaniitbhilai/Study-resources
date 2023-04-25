<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <!--<form action="login.php" method="post">
        Enter Username:<input type="text" name="username" required>
        <br>
        Enter Password:<input type="password" name="pass" required>
        <br>
        <input type="submit" >
      </form>-->

      <?php
        $id=$_POST["email"];
        $password=$_POST["psw"];

        $file=fopen("student.txt","a+");
        $found=0;
        while(!feof($file)){
          $t=fgets($file);
          $y=explode(",",$t);

          if($y[0]==$id and $y[1]==$password){
            // header('location:drop1try2.html');
            // echo http-equiv="refresh" content="7; url='http://localhost/www/project/drop1try2.html'";
            // $URL="http://localhost/www/project/drop1try2.html";
            // echo "<script>  Object.assign(document.createElement('a'), { target: '_blank', href: '{$URL}'}).click(); </script>" ;
            // echo "<script type="text/javascript"> window.location.rel="noopener" target="_blank" href = 'http://localhost/www/project/drop1try2.html'>";
            $found=1;
            echo $password;
            echo $id;
            break;
          }
          else{
            $found=0;
          }
        }
        fclose($file);
        if($found==0){
          echo "no such username or password";
          exit(0);
          // fclose($file);
        }
        else{
          header('location:drop1try2.html');
        }
        fclose($file);
        ?>
      </body>
</html>
