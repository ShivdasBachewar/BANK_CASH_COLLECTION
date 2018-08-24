<html>
<head>
	<title>BCC - Administrator Dashboard</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <style type="text/css">
  </style>

</head>
<body style="font-family:'Arial, Helvetica, sans-serif'"> 
  <nav class="navbar navbar-default" style="height:100px;background-color:#3374ff; border-bottom-color: gray; border-bottom-width: 5px;">
    <div class="container-fluid" >
        <div class="navbar-header"">
            <a class="navbar-brand" href="#" style="margin-top:10px; color: white; margin-left: 120px;"><h1><strong>Bank Cash Collection</strong></h1></a>
        </div>
        
    </div>
  </nav>


    <img src="Images/rs.jpg" style="width: 44%; height: 60%; margin-left: 5%; margin-top:2%; float: left;">

    <form action="LogIn.php" method="POST">
    <div class="well" style="width: 44%; height: 60%; margin-right:5%; margin-top:2%; float: right; text-align: center; background-color: lightcyan; ">

        <img src="Images/admin1.png" style="width:30%; height:40%; margin-top: 20px;"><br><br>
        <br>
      <h5>
       <div style="width: 25%; height:50px; float: left;">
            Username <span class="glyphicon glyphicon-user" style="color:green; "></span>
        </div>
        <div style="width: 70%; height:50px; float: right; margin-right: 5%;">
            <input type="email" name="uname" style="width:80%;" required autocomplete="off" autofocus>
        </div>

        <div style="width: 25%; height:50px; float: left;">
            Password <span class="glyphicon glyphicon-lock" style="color:green;"></span> 
        </div>
        <div style="width: 70%; height:50px; float: right; margin-right: 5%;">
            <input type="password" name="pass" style="width:80%;" required>
        </div>
      </h5>

        <button class="" style=" width: 20%; margin-top: 1%;  border-radius: 10px">
        <img src="Images/lg1.png" style="height: 10%; width: 100%; margin-bottom: 0.1%;"></button>
    </div>
    </form>
</body>
</html>