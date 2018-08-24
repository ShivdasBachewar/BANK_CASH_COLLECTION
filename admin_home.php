<html>
<head>
	<title>BCC - Administrator Dashboard</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script type="text/javascript" src="charts/loader.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<script src="js/BCC.js"></script>
    <script src="js/BCC_client.js"></script>
    <script src="js/send_email.js"></script>
    <script src="js/report.js"></script>
    <script src="js/javascript_subscriber.js"></script>
    <script src="js/Javascript1.js"></script>
  	<script src="js/new_User_Validation.js"></script>
    <link rel="stylesheet" type="text/css" href="css/dropdown_menu.css">
    <link rel="stylesheet" type="text/css" href="css/snackbar.css">
    <style type="text/css">
  	</style>
</head>

<body style="font-family:'Tahoma'; font-size: 120%;"> 
	<nav class="navbar navbar-default" style="height:100px;background-color:#3374ff; border-bottom-color: gray; border-bottom-width: 5px;">
		<div class="container-fluid" >
    		<div class="navbar-header">
      			<a class="navbar-brand" href="admin_home.php" style="margin-top:10px; color: white; margin-left: 120px;"><h1><strong>Bank Cash Collection</strong></h1></a>
    		</div>
            <ul class="nav navbar-nav" style="margin-left: 40%;">
    		   	<li><img src="Images/admin.png" height="40px" width="40px" style="margin-top:30px;"></li>
      			<li><h3 style=" color: white; margin-left:10%; margin-top:35px;"> Admin </h3></li>
      			<li><button onclick="logout()" class="btn btn-danger" style="margin-left:14%; margin-top: 35px;"><h6 style="color: white; margin-top: -1px; margin-bottom: -1px;"><span class="glyphicon glyphicon-log-out" ></span> Logout </h6></button></li>
    		</ul>
            
		</div>
	</nav><br>

	<div class="container-fluid">
	<div class="w3-container well " style="margin-top: -48px; padding-top: 20px;">
		<button class="w3-bar-item w3-button w3-border-white w3-bottombar w3-hover-border-black w3-hover-red " style="margin-left: 5%;" id="home" onclick="show_home()"> HOME </button>
        
        <div class="dropdown">
        <button class="dropbtn w3-bar-item w3-button w3-border-white w3-bottombar w3-hover-border-black w3-hover-red "  id="agent">MANAGE AGENTS </button>
		  <div class="dropdown-content">
              <a href="#" onclick="show_All_Agents()"> VIEW ALL AGENTS </a>
              <a href="#" onclick="add_new_agent()"> ADD NEW AGENT </a>
              <a href="#" onclick="edit_delete_agent()"> EDIT-DELETE AGENT </a>
              <a href="#" onclick="active_deactive_agent('all')"> ACTIVE-DEACTIVE AGENT</a>
          </div>
        </div>
    <div class="dropdown" >
    <button class="dropbtn w3-bar-item w3-button w3-border-white w3-bottombar w3-hover-border-black w3-hover-red " style="" id="report" onclick="show_all_agent" > REPORT </button>
    <div class="dropdown-content">
        <a href="#" onclick="sinle_agent_report()">SINGLE AGENT REPORT</a>        
        <a href="#" onclick="sinle_subscriber_report()">SINGLE SUBSCRIBER REPORT</a>        
        <a href="#" onclick="all_agent_report()">ALL AGENT REPORT</a>                 
        <a href="#" onclick="all_subscriber_report()">ALL SUBSCRIBER REPORT </a>
        <a href="#" onclick="act_dct_agent()">ACTIVE-DEACTIVE AGENT REPORT</a>        
        <a href="#" onclick="act_dct_subscriber()">ACTIVE-DEACTIVE SUBSCRIBER REPORT</a>   
    </div>
    </div>

    <div class="dropdown">
    <button class="dropbtn w3-bar-item w3-button w3-border-white w3-bottombar w3-hover-border-black w3-hover-red" style="" id="client"> MANAGE AGENT SUBSCRIBERS </button>
     <div class="dropdown-content">
              <a href="#" onclick="show_All_Clients()"> VIEW ALL SUBSCRIBERS </a>
              <a href="#" onclick="add_new_client()"> ADD NEW SUBSCRIBER </a>
              <a href="#" onclick="edit_delete_client()"> EDIT SUBSCRIBER DETAIL </a>
              <a href="#" onclick="active_deactive_client('all')"> ACTIVE-DEACTIVE SUBSCRIBER </a>
          </div>
    </div>
        <div id='submenu'></div>
	</div>
	
	<div style="margin-top: -13px; font-family: Arial"  id='show_Me'> </div>
  <div id="snackbar">This is a test string</div>
	</div>
<script type="text/javascript">
    show_home(); 
</script>
</body>
</html>