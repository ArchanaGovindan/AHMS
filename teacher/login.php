<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
<?php session_start();
session_destroy();
?>

<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway"><link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
      <style>

    @import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);
body,h1,h2{font-family: "Pacifico",sans-serif}
body{
	margin: 0;
	padding: 0;
	background: #fff;

	color: #fff;

	font-size: 12px;
}

.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-image: url(img/1.jpg);
	background-size: cover;
	-webkit-filter: blur(5px);
	z-index: 0;
}

.grad{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.7;
}

.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(50% - 255px);
	z-index: 2;
}

.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: #5379fa !important;
}

.login{
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login input[type=button]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=button]:hover{
	opacity: 0.8;
}

.login input[type=button]:active{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=button]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
    </style>

  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>-->

</head>

<body>
<div>

  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Login<span>Here</span></div>
		</div>
		<br>

		<div class="login">
      <div class="login">
        <form action="a.php" method="post">
        <table>
          <tr>
            <td>  Name:</td>
            <td><input type="text" name="name"></td>
          </tr>
          <tr>
            <td>Password:</td>
            <td><input type="password" name="pass"></td>
          </tr>
          <tr>
            <td><br></td>
            <td><br></td>
          </tr>
          <tr>
            <td></td>
            <td >  <center><button type="submit" style="color:black" class="btn btn-default btn-lg">Submit</button></td>
          </tr>
        </table>
        </form>
  		</div>

  <!--<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>-->
</div>
<div class="w3-bottom w3-hide-small">
  <div class="w3-bar w3-white w3-center w3-padding-8 w3-opacity-min w3-hover-opacity-off">
    <a href="/AHMS/index.html" style="width:100%" class="w3-bar-item w3-center w3-padding-8 w3-button">HOME</a>

  </div>
</div>

</body>
</html>
