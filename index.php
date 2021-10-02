<!DOCTYPE html>
<html>
<head>

	<title>FetemashNLeeshContractors</title>

    <!-- bootstrap -->
	<link rel="stylesheet" href="assests/bootstrap/css/bootstrap.min.css">
	<!-- bootstrap theme-->
	<link rel="stylesheet" href="assests/bootstrap/css/bootstrap-theme.min.css">
	<!-- font awesome -->
	<link rel="stylesheet" href="assests/font-awesome/css/font-awesome.min.css">

  <!-- custom css -->
  <link rel="stylesheet" href="custom/css/custom.css">

	<!-- DataTables -->
  <link rel="stylesheet" href="assests/plugins/datatables/jquery.dataTables.min.css">

  <!-- file input -->
  <link rel="stylesheet" href="assests/plugins/fileinput/css/fileinput.min.css">

  <!-- jquery -->
	<script src="assests/jquery/jquery.min.js"></script>
  <!-- jquery ui -->  
  <link rel="stylesheet" href="assests/jquery-ui/jquery-ui.min.css">
  <script src="assests/jquery-ui/jquery-ui.min.js"></script>

  <!-- bootstrap js -->
	<script src="assests/bootstrap/js/bootstrap.min.js"></script>


</head>
<body>


<!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href=""><b>FETEMASH AND LEESH CONTRACTORS</b></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-nav navbar-right">
                 <li class="dropdown" id="navOrder">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-registration-mark"></i> Create Account <span class="caret"></span></a>
                 <ul class="dropdown-menu">            
                    <li id="topNavAddOrder"><a href="adminreg.php"> <i class="glyphicon glyphicon-th"></i> As Admin</a></li>            
                    <li id="topNavManageOrder"><a href="accreg.php"> <i class="glyphicon glyphicon-briefcase"></i> As Accountant</a></li>
                    <li id="topNavSetting"><a href="secreg.php"> <i class="glyphicon glyphicon-folder-open"></i> As Secretary</a></li> 
                    <li id="topNavSetting"><a href="foremanreg.php"> <i class="glyphicon glyphicon-wrench"></i> As Foreman</a></li>             
                    <li id="topNavLogout"><a href="sitemngreg.php"> <i class="glyphicon glyphicon-screenshot"></i> As Site Manager</a></li>                       
                 </ul>
                 </li>

                 <li class="dropdown" id="navSetting">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-log-in"></i> Login <span class="caret"></span></a>
                 <ul class="dropdown-menu"> 
                    <li id="topNavAddOrder"><a href="admlogin.php"> <i class="glyphicon glyphicon-th"></i> As Admin</a></li>             
                    <li id="topNavAddOrder"><a href="acclogin.php"> <i class="glyphicon glyphicon-briefcase"></i> As Accountant</a></li> 
                    <li id="topNavSetting"><a href="secretarylogin.php"> <i class="glyphicon glyphicon-folder-open"></i> As Secretary</a></li>            
                    <li id="topNavSetting"><a href="foremanlogin.php"> <i class="glyphicon glyphicon-wrench"></i> As Foreman</a></li>            
                    <li id="topNavLogout"><a href="sitemnglogin.php"> <i class="glyphicon glyphicon-screenshot"></i> As Site Manager</a></li>            
                 </ul>
                 </li>    
          
  
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
          
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div class="image">
          <img src="assests/images/fetemash small.jpg">

        </div>


</body>

</html>