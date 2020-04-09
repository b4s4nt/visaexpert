<?php

 include 'check.php';


?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UK VISA EXPERT</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Uk Visa Expert</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp;&nbsp;<?php  echo($_SESSION['name']);    ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="clientinfo.php"><i class="fa fa-fw fa-user"></i> New Client</a>
                            </li>
                            <li>
                                <a href="contactmessage.php"><i class="fa fa-fw fa-envelope"></i>Message</a>
                            </li>
                            
                            <li class="divider"></li>
                            <li>
                                <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    
                    <?php 
                          include 'menu.php';

                         ?>
                   
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            
                            <small>Welcome to  Uk Visa Expert</small>
                        </h1>
                        
                    </div>
                </div>
                
                <!-- /.row -->
                <div id="page-wrapper">

                <div class="container-fluid">

                    <!-- Page Heading -->
                    
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <h2>Display  Table</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" >
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>DOB</th>
                                            <th>Dependents'Name</th>
                                            <th>Dependents'DOB</th>
                                            <th>Address</th>
                                            <th>Mobile</th>
                                            <th>Phone </th>
                                            <th>Email</th>
                                            <th>Gender</th>

                                            
                                        </tr>
                                           
                                            
                                    </thead>
<?php                                     
$servername = "localhost";
$username = "root";
$password = "";
$dbname="contact";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
$sql="SELECT * FROM  clientinfo ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

   echo "<tbody>";
 while($row = $result->fetch_assoc()) {
  
  echo "<tr>";
  echo "<td>".$row['id']."</td>";
  echo "<td>".$row['name']."</td>";
  echo "<td>".$row['dob1']."</td>";
  echo "<td>".$row['depname']."</td>";
  echo "<td>".$row['dob2']."</td>";
  echo "<td>".$row['address']."</td>";
  echo "<td>".$row['mobile']."</td>";
  echo "<td>".$row['phone']."</td>";
  echo "<td>".$row['email']."</td>";
  echo"<td>".$row['gender']."</td>";
  
  

  echo "</tr>";
  //<td><a href="CourseController?cid=${course.cid}&action=delete">D</a></td>
  

}
echo "</tbody>";

}

$conn->close();
?>
                                    




                                </table>
                            </div>
                        </div>

                    </div>
                    <!-- /.row -->


                    <!-- /.row -->


                    <!-- /.row -->

                </div>
                <!-- /.container-fluid -->

            </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
