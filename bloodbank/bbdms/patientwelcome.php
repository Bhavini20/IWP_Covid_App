<?php 
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: patientlogin.php");
}

include('includes/patientheader.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Login</title>
    <style>
         .cont1{
            text-align: center;
            margin-left: 50px;
        }
        .cont1 ul{
            margin-left: 600px;
            text-align: left;
        }
        .ts-sidebar
        {
            
            width:250px;
            padding-top: 50px;
        }
    </style>
</head>
<body>
    <nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">

<li><a href="patientwelcome.php"><i class="fa fa-files-o"></i>Home</a>
<li><a href="patientrequest.php"><i class="fa fa-edit"></i> Make a Request</a></li>
			


			</ul>
		</nav>
    <br><br><br><br>
    <div class="cont1">
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?><hr>
    </div>
    
    <h2>Important Covid Resources and Links:</h2><hr>
    <ul>
    <li><a href="https://www.cowin.gov.in/home" target="_blank">Get Vaccinated</a></li>
    <li><a href="https://covid.icmr.org.in/index.php/testing-facilities#30.8432782/66.6476503/4" target="_blank">Covid Testing Centres</a></li>
    <li><a href="https://api.whatsapp.com/send/?phone=919013151515&text=Hi&app_absent=0" target="_blank">WhatsApp Helpdesk</a></li>
    <li><a href="https://drive.google.com/file/d/1J5W2PFrNRTvDV-H3owf4CBrP9Q99aJS6/view" target="_blank">Statewise Helplines</a></li>
    <li><a href="https://vaccineindia.org/new/admin-master/public/ckeditor/kcfinder/upload/files/Remdesivir-Distributor-List.pdf" target="_blank">Nationwide Ramdesivir Supplies</a></li>
    <li><a href="https://linktr.ee/COVID19support.India" target="_blank">COVID Support</a></li>
        </ul>
    </div>
    
        </body>
</html>
