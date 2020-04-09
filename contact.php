
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
      
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body >
    <div class="container">
					<header>
						<div class="col-sm-6 logo">
							<p class="h2">Uk Visa Expert</p>
						</div>
						<div class="col-sm-6">
						<p class="text-right"><span class="glyphicon glyphicon-earphone"></span> Phone: 02085726386</p>
						</div>
						<div class="clearfix"></div>
					</header>
					
					<nav class="navbar navbar-inverse">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!--<a class="navbar-brand" href="#">Brand</a>-->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="aboutus.php">About us</a></li>
        <li class="dropdown">
          <a href="services.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="services.php">OneDayVisa</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="services.php">NormalVisa</a></li>
          </ul>
        </li>
							<!--	<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Portfolio <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">web design</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">web development</a></li>
          </ul>
        </li>  -->                 <li><a href="testo.php">Testimonial</a></li>
								<li><a href="resources.php">Resources</a></li>
                <li class="active"><a href="#">Contact</a></li>
								
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    <div class="container">
    <div class="col-lg-4">
                        <div class="container-fluid">
                        <form  role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                               

                               <input class="form-control" name="mess" value="usermessage" type="hidden">
                            <div class="form-group" >
                                <label>Full Name</label>
                                <input class="form-control" placeholder=" Enter Yor Name" name="fname">
                                </div>
                                 <div class="form-group">
                                 <label for="email ">Email Address</label>

                                <input  type ="email"class="form-control" placeholder="Enter Email" name="email">
                                <p class="form-control-static">email@example.com</p>

                                </div>

                            

                            <div class="form-group">
                                <label>Send Your Message</label>
                                <textarea class="form-control" rows="3" name="message"></textarea>
                            </div>

                            
                        
    
      
                            
                             
     

                            <button type="submit" class="btn btn-default">Submit Button</button>
                            <button type="reset" class="btn btn-default">Reset Button</button>
                            <div class="checkbox">
                             <label>
                             <input type="checkbox"> Remember me
                               </label>
                              </div>
                                </div>
  

                             </form>
                             
                               </div>
                               </div>

                               <div class="well" ><h5>
                               
                               If you would like to process your visa application through premium service (Same Day Service), You need to send your following details 
                               
                               </h5>
                               
                               </div>
                               <br>



                        <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

               

                            <div class="form-group">

                                <div class="col-md-3">
                                <label>FulName</label>
                                <input class="form-control" placeholder="Enter your full name" name="name">
                                </div>
                                 <div class="col-md-1"></div>
                           
                                <div class="col-md-3">
                                <label>DOB</label>
                                <input class="form-control" placeholder=" Enter your date of birth " name="dob1" >
                                </div>
                                  <div class="col-md-1"></div>

                                 <div class="col-md-3">
                                <label>Dependants' Name</label>
                                <input class="form-control" placeholder=" Enter your Dependants' Name "  name="depname" >
                                </div>
                                 <div class="col-md-1"></div>
                               
                                <div class="clearfix"></div>
                                 <div class="col-md-3">
                                <label>DOB</label>
                                <input class="form-control" placeholder=" Date of birth of Depandants' " name="dob2" >
                                </div>
                                 <div class="col-md-1"></div>
                         
                                 <div class="col-md-3">
                                <label>Address</label>
                                <input class="form-control" placeholder=" Enter your address"  name="address">
                                </div>
                                 <div class="col-md-1"></div>
                                  
                            

                                 <div class="col-md-3">
                                <label>Mobile No.</label>
                                <input class="form-control" placeholder=" Enter your mobile number" name="mobile" >
                                </div>
                                 <div class="col-md-1"></div>
                                 
                          
                                 <div class="col-md-3">
                                <label>Landline Phone No.</label>
                                <input class="form-control" placeholder=" Enter your phone number"  name="phone">
                                </div>
                                 <div class="col-md-1"></div>
                                <div class="col-md-3">
                                 <label for="email ">Email Address</label>

                                <input  type ="email"class="form-control" placeholder="Enter Email" name="email" name="email">
                               

                                 </div>  <div class="col-md-1"></div>



                                 <div class="col-md-3">
                                
                                  <div>
                                  <label>Gender</label>
                                  </div>

                                  <div class="col-md-3">

                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" id="optionsRadios1" value="m" checked>Male
                                    </label>
                               </div>
                               </div>
                               <div class="col-md-3">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" id="optionsRadios2" value="f">Female
                                    </label>
                                </div>
                                </div>
                                 </div>
                                <div class="clearfix"></div>

                                
                           


                            
                             
                              <div class="container-fluid">
                            <button type="submit" class="btn btn-default">Submit Button</button>
                            <button type="reset" class="btn btn-default">Reset Button</button>
                            
                          
                        </form>

                    </div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{


include 'dbconnection.php';

if($_POST["mess"]=="usermessage"){ 
   if (!empty($_POST['fname']) && !empty($_POST['message'])) {

  $fname=$_POST["fname"];
$email=$_POST["email"];
$message=$_POST["message"];
$sql="INSERT INTO contactinfo (fname, email, message)
VALUES ('$fname', '$email', '$message')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}
}else{
   if (!empty($_POST['name']) && !empty($_POST['mobile']) && !empty($_POST['address']) && !empty($_POST['depname'])) {
$name=$_POST["name"];
$dob1=$_POST["dob1"];
$depname=$_POST["depname"];
$dob2=$_POST["dob2"];
$address=$_POST["address"];
$mobile=$_POST["mobile"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$gender=$_POST["gender"];
$sql="INSERT INTO clientinfo (name, dob1,depname,dob2,address,mobile,phone,email,gender)
VALUES ('$name', '$dob1','$depname','$dob2','$address','$mobile','$phone','$email','$gender' )";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}




}

}

$conn->close();
}
?>












          
				 
					
		
          <footer class="footer"  >
  <div class="container foot">
    <div class="row">
      <div class="col-md-4" >
        <h3 style="color: black">Contact</h3>
        <p style="color: black" >
        UK Visa Expert<br>
        1000 Great West Road, Brentford<br>
        London UK<br>
        kamal.kandel@gmail.com<br>
        info@ukvisa.com<br>
        07772641180(cell)<br>
        0208576386(tel)
        </p>
      </div>
      <div class="col-md-4">
      <div class="row">
      <div class="col-md-6">  
      <img src="images/oisc-logo.jpg" alt="OISC approved">
      <p class="text-muted" style="color: black">OISC Registration No.: F200700150</p>
      </div>
      <div class="col-md-6">  
      <img src="images/ilpa.png" alt="ILPA Member">
      <p class="text-muted" style="color: black">ILPA Membership No.: 7374</p>
      </div>
      
      </div>
      </div>
      <div class="col-md-4">
        <div class="footer_social">
          <strong style="color: black">FOLLOW US ON:</strong>
          <a href="#" class="link-fb" hidefocus="true" style="outline: none;">Facebook</a>    
          <a href="#" class="link-twitter" hidefocus="true" style="outline: none;">Twitter</a> 
        </div>
      </div>
     </div>
    </div>
    <p class="text-muted last-line">Copyright 2016 Asterisk<br>Registered with the Information Commissioner's Office (ICO) under Data Protection Act, 1998. Registration No.: Z2329611</p>
  




</footer>
					
					

					
				</div><!--end of container-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.12.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>
