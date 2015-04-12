<?php
$servername = "sql1.njit.edu";
$username = "bar25_proj";
$password = "bindi123";
$dbname = "bar25_proj";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">

    <title>HomePage</title>
    <link href="../jquery.mobile-1.4.5.css" rel="stylesheet">
    <script src="../jquery-1.11.0.js" type="text/javascript"></script>
    <script src="../jquery.mobile-1.4.5.js" type="text/javascript"></script>
    <meta content="width=device-width" name="viewport">
 <style type="text/css">
    	  .bindi {
    width: 40px;
    float:right;
   vertical-align: middle;
    } 
    .ui-header .ui-title
    {
    	margin:0px;
    	
    }
 
    </style>  
</head>

<body>
   <div data-role="header" style="background-color:#8d0904;color:#FFFFFF;">
        <h1 style="font-weight: normal;">NJIT EVENTS<img class="bindi" src="../images/icons-png/logout.png"></h1>
       
 		<a href="loginhome.html" data-rel="home" data-icon="home" data-iconpos="notext">Home</a>
     
    </div><!-- /header -->
    <div class="ui-content jqm-content jqm-fullwidth">
    	<div style="float: right;"><h5>Hello,Bindiya</h5></div>
        <form action="addtodb.php" method="post" />
            <div class="ui-field-contain" >
                <label for="textinput-1" >Event Name:</label> <input  placeholder="Name" name="name" >
            </div>
            <span>Event Name :<input type="text" name="name" placeholder="Name"/></span>

            <div class="ui-field-contain">
                <label for="textinput-1">Event Detail:</label> <input placeholder="Event Detail" >
            </div>

            <div class="ui-field-contain">
                <label for="date">Date:</label> <input id="date" name="date" type="date" value="">
            </div>

            <div class="ui-field-contain">
                <label for="time-1">Time :</label> <input data-clear-btn=
                "false" id="time-1" name="time-1" type="time" value="">
            </div>

            <div class="ui-field-contain">
                <label for="textinput-1">Location :</label> <input  placeholder="Location" type="text" value="">
            </div>

            <div class="ui-field-contain">
                <span>Category</span><br>
                     <div>
                      <!-- <div style="margin-left:90px; "> -->
               <!-- <div class="ui-radio" style="margin-bottom: 200px ;width: 200px;margin-left: 290px;"> -->
                    <label><input id="radio-choice-0a" name="radio-choice-0" type="radio">Academics</label>
                    <label><input id="radio-choice-0a" name="radio-choice-0" type="radio">Athletics</label>
                    <label><input id="radio-choice-0a" name="radio-choice-0" type="radio">General</label>
            
            		<label><input id="radio-choice-0a" name="radio-choice-0" type="radio">Tutoring Center</label>
            
            
            
                </div>
                
                
                
                
                
            </div>
           <button data-role="none" style="margin-left: 50px">Create</button>
           <button data-role="none" style="margin-left: 65px">Cancel</button>
           
        </form>
    </div>

       <div data-role="footer" style="background-color:#8d0904;color:#FFFFFF;"> 
	<h1 style="font-weight: normal;" >events added successfully<img class="bindi" src="../images/icons-png/plus-white.png"></h1> 
	</h1> 
	 
</div>   
         
</body>
</html>