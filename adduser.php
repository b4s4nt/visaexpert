  
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

        <title>Uk Visa Expert Users table </title>

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
                    <a class="navbar-brand" href="#">Uk Visa Expert</a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                        <ul class="dropdown-menu alert-dropdown">
                           
                            <li class="divider"></li>
                            <li>
                                <a href="#">View All</a>
                            </li>
                        </ul>
                    </li>
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
                   
                   
                </div>
                <!-- /.navbar-collapse -->
            </nav>
            <div class="col-sm-11" style="height: 100%">

            <div id="page-wrapper" >

            

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Add User
                            </h1>
                            <ol class="breadcrumb" >
                                <li>
                                    <i class="fa fa-user"></i>  <a href="#"></a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-lg-6">
                        <form  role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                            

                                <div class="form-group">
                                    <label> User Name</label>
                                    <input class="form-control" name="name">
                                    <p class="help-block">Enter the your name.</p>
                                </div>
                                <div class="form-group" >
                                    <label>Password</label>
                                    <input class="form-control" type="password" name="password">
                                    <p class="help-block">Enter your password.</p>
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input class="form-control" type="password" name="confirmpassword">
                                    <p class="help-block">Enter password to confirm.</p>

                                </div>

                                

                              


                                <button type="submit" name="insert" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button><br>
                                </form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST" && !empty($_POST['name']) && !empty($_POST['password']) ){
        $count=0;
        include 'dbconnection.php';
        $name=$_POST["name"];
        $passw=$_POST["password"];
        $confirmpassw=$_POST["confirmpassword"];
        

        $sql = "SELECT id FROM adduser WHERE password='$passw'";
        
        $result = $conn->query($sql);
        $count=$result->num_rows;
        
        if($count==1 ){
            echo "Password is already used so select unique password";
        }else{

           // if($password==$confirmpassw){
              $sql="INSERT INTO adduser(name,password)VALUES('$name','$passw')";
                 if ($conn->query($sql) === TRUE) {
                  echo "New record created successfully";
                  } else {
                     echo "Error: " . $sql . "<br>" . $conn->error;
                  }
            //} else{
          // echo "Password does not match the confirm password. ";
           // }



        }
  }
?>


                        </div>

                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container-fluid -->

            </div>
            </div>


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











                            