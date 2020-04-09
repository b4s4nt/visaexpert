
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Uk Visa Expert-Login</title>

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
        <style> 
            body{
                background-image: url("images/download.jpg");
                background-color: #9d9d9d;

            }
            
            img {
                    opacity: 0.4;
                   filter: alpha(opacity=40); /* For IE8 and earlier */
            }





        </style>




    </head>

    <body>







        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        LogIn Uk Visa Expert
                    </h1>

                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-3">

                    <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                        <div class="form-group">
                            <label>Username</label>
                            <input class="form-control" type="text" name="name">

                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="password" name="password">

                        </div>
                        <button type="submit" class="btn btn-default" name="login">Login </button>
                    </form>

                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->


        <!-- /#page-wrapper -->


        <!-- /#wrapper -->

        <!-- jQuery Version 1.11.0 -->
        <script src="js/jquery-1.11.0.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <div class="container form-signin">
        </div>
</body>

</html>


    
<?php



session_start();

$msg='';
if ($_SERVER["REQUEST_METHOD"] == "POST")
{


$name=$_POST["name"];
$passw=$_POST["password"];




include 'dbconnection.php'; 






$sql = "SELECT id FROM adduser WHERE password='$passw' AND name = '$name'";
//$sql="SELECT * FROM adduser";


$result = $conn->query($sql);
$count=$result->num_rows;

 

if($count==1){

    
    $_SESSION['valid']=true;
    $_SESSION['timeout']=time();
    $_SESSION['name']=$name;
    $_SESSION['password']=$passw;
    $_SESSION['dbname']=$row['name'];
    





   header('location:contactmessage.php');

}
$conn->close();

}

?>


