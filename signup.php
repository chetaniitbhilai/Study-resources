<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
  background-color: rgb(233, 214, 214);
}

* {
  box-sizing: border-box;

}

.bg-img {
  background-image: url("https://www.iitbhilai.ac.in/index.php?pid=img_study_in_india_1");

  min-height: 380px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 20px 550px 5px 500px;
  width: 340px;

  padding: 16px;
  background-color: lavender;
  border-radius: 20px;

}

/* Full-width input fields */
input[type=email], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=email]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
/* a{
            margin : 0 5px 2px 1400px;
        }
        .new{
            margin: 0 5px 2px 1360px;
        } */
.heads{
  display: flex;
  flex-direction:row ;
  /* align-items: stretch; */
  justify-content: space-between;
}
.new{
  margin: 0px;
}
h2
{
   text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #231557 0%,
    #44107a 29%,
    #ff1361 67%,
    #fff800 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  display: inline-block;
      font-size: 40px;
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
}

</style>
</head>
<body>

<div class="heads" >

<h2>WELCOME TO IIT BHILAI  </h2>
<div class="right-section">
  <h5 class="new">Already have an account?</h5>
  <a href="http://localhost/www/project/trial.php">Login</a>

</div>



</div>

<div class="bg-img">
  <form action="sgup.php" class="container" method="post">
    <h1>SignUp</h1>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn">Login</button>
  </form>
</div>
<br>
<br>
<br>
<br>
<hr>
<footer>
    Email : ayushpatel@iitbhilai.ac.in
Contact No. : 8081612319
© 2023 | All rights have been reserved by Ayush Patel
<br>
Email : chetan@iitbhilai.ac.in
Contact No. : 9355844091
© 2023 | All rights have been reserved by Chetan
</footer>


</body>
</html>
