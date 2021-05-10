<?php include('includes/patientheader.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	
    <title>Patient Login</title>
    <style>
        .cont1{
            text-align: center;
            margin-left: 50px;
        }
        .cont2{
            margin-left: 70px;
        }
        
        ol {
  counter-reset: li; 
  list-style: none; 
  padding: 0;
            margin-left: 300px;
            margin-right: 200px;
  text-shadow: 0 1px 0 rgba(255,255,255,.5);
}

ol a {
  position: relative;
  display: block;
  padding: .4em .4em .4em 2em;
  margin: .5em 0;
  background: #def29e;
  color: #444;
    font-size: 20px;
  text-decoration: none;
  border-radius: .3em;
  transition: .3s ease-out;
}

ol a:hover { background: #efe7af; }
ol a:hover:before { transform: rotate(360deg); }
ol a:before {
  content: counter(li);
  counter-increment: li;
  position: absolute;
  left: -1.3em;
  top: 50%;
  margin-top: -1.3em;
  background: #f8b9a6;
  height: 2em;
  width: 2em;
  line-height: 2em;
  border: .3em solid #fff;
  text-align: center;
  font-weight: bold;
  border-radius: 2em;
  transition: all .3s ease-out;
}
        .sidebar-container {
  position: fixed;
  width: 250px;
  height: 100%;
  left: 0;
  overflow-x: hidden;
  overflow-y: auto;
  background: #1a1a1a;
  color: #fff;
            margin-top: 71px;
}

.content-container {
  padding-top: 20px;
}


.sidebar-navigation {
  padding: 0;
  margin: 0;
  list-style-type: none;
  position: relative;
}

.sidebar-navigation li {
  background-color: transparent;
  position: relative;
  display: inline-block;
  width: 100%;
  line-height: 40px;
}

.sidebar-navigation li a {
  padding: 10px 15px 10px 30px;
  display: block;
  color: #fff;
    font-size: 17px;
}

.sidebar-navigation li .fa {
  margin-right: 10px;
}

.sidebar-navigation li a:active,
.sidebar-navigation li a:hover,
.sidebar-navigation li a:focus {
  text-decoration: none;
  outline: none;
}

.sidebar-navigation li::before {
  background-color: #2574A9;
  position: absolute;
  content: '';
  height: 100%;
  left: 0;
  top: 0;
  -webkit-transition: width 0.2s ease-in;
  transition: width 0.2s ease-in;
  width: 3px;
  z-index: -1;
}

.sidebar-navigation li:hover::before {
  width: 100%;
}

.sidebar-navigation .header {
  font-size: 20px;
  text-transform: uppercase;
  background-color: #151515;
  padding: 10px 10px 10px 10px;
    color: #aca8a8;
    text-align: center;
}

.sidebar-navigation .header::before {
  background-color: transparent;
}

    </style>
</head>
<body>

			<div class="sidebar-container">
  <ul class="sidebar-navigation">
    <li class="header">Navigation</li>
    <li>
      <a href="patientwelcome.php">
        <i class="fa fa-home" aria-hidden="true"></i> Homepage
      </a>
    </li>
    <li>
      <a href="patientrequest.php">
        <i class="fa fa-tachometer" aria-hidden="true"></i> Make a Request
      </a>
    </li> 
   
    
  </ul>
</div>

    <br><br><br><br>
    <div class="cont1">
        <div class="cont2">
    
    <h2>Doctors' Details:</h2><hr>
        </div>
    <ol>
    <li><a href="mailto:ankit@gmail.com" target="_blank">Dr. Ankit Aggarwal</a></li>
    <li><a href="mailto:sunaina@gmail.com" target="_blank">Dr. Sunaina Sharma</a></li>
    <li><a href="mailto:raghav@gmail.com" target="_blank">Dr. Raghavendra Biswal</a></li>
    <li><a href="mailto:amruta@gmail.com" target="_blank">Dr. Amruta Singh</a></li>
    <li><a href="mailto:neil@gmail.com" target="_blank">Dr. Neil Mehta</a></li>
    <li><a href="mailto:ankush@gmail.com" target="_blank">Dr. Ankush Tripathi</a></li>
    <li><a href="mailto:dhvani@gmail.com" target="_blank">Dr. Dhvani Lokhande</a></li>
    <li><a href="mailto:sushmi@gmail.com" target="_blank">Dr. Sushmita Reddy</a></li>
    <li><a href="mailto:shweta@gmail.com" target="_blank">Dr. Shweta Shetty</a></li>
    <li><a href="mailto:ashish@gmail.com" target="_blank">Dr. Ashish Bansal</a></li>
        </ol>
    </div>
    
   
        </body>
</html>
