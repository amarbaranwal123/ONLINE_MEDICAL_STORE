<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/release/v5.7.2/css/all.css" crossorigin="anonymous">
    
    <ink rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="swiper.min.css">
    <link rel="stylesheet" href="jquery.datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <header>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-12">
                <div class="logo">
            </div>
            </div>
            <div class="col-md-4 col-12 text-center">
                <h2 class="my-md-3 site-title text-white">Online Medical Store</h2>
            </div>
            
        </div>
    </div>
    
           
</header>
    	<h1>Patient's Details</h1>
    	<div class="register">
    		
    		<form method="post" id="register" action="lucky.php" name="myForm">
    		
    				<input type="text" name="FirstName" id="fname" placeholder="First Name" required><br><b><span class="formerror" id="firstname"></span></b><br>
    		
    				<input type="text" name="LastName" id="lname" placeholder="Last Name"><br><b><span class="formerror" id="lastname"></span></b><br>
    		          
    				<select id="Gender1" name="Gender">
                            <option>Gender</option>
                            <option>Male</option>
                            <option>Female</option>
                    </select><br><br>
    		      
                    
    				<input type="text" name="DOB" id="datetime" placeholder="D.O.B">
                    
                <br><br>
    		
    				<select id="ph">
    						<option>+91</option>
    						<option>+92</option>
    						<option>+93</option>
    						<option>+94</option>
    						<option>+95</option>
    						<option>+96</option>
    				</select>
    				<input type="number" name="MobNo" id="num" placeholder="Enter Mobile Number"><br><b><span class="formerror" id="mobile"></span></b><br>
    		
    				<input type="email" name="Email" id="emails" placeholder="Enter E-mail Id"><br><b><span class="formerror" id="email"></span></b><br>
    		
    				<input type="password" name="Password" id="password" placeholder="Enter your Password"><br><b><span class="formerror" id="pass"></span></b><br>
    		
    				<input type="password" name="Cpassword" id="cpassword" placeholder="Re-enter your Password"><br><b><span class="formerror" id="cpass"></span></b><br>
    				
    				<input type="submit" value="Create an Account" id="sub">
    		</form>
    	</div>
      <div class="footer-wrapper">
        <div class="container-fluid">
            <div class="footer-social-icons">
                <ul>
                    <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-skype"></i></a></li>
                </ul>
            </div>

            <div class="footer-mid-part">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="footer-section-one">
                            <div class="footer-heading"><h2>Contact Us</h2></div>
                                <div class="footer-contact-box">
                            <div class="footer-contact-icon"><i class="fa fa-map-marker"></i></div>
                            <div class="footer-contact-text">
                                <p>Address: Room No.3 Navpurush Chhatrawas Ravindrapuri, Ghazipur</p>
                            </div>
                            <div class="clr"></div>
                        </div>
                                <div class="footer-contact-box">
                            <div class="footer-contact-icon"><i class="fa fa-phone"></i></div>
                            <div class="footer-contact-text">
                                <p><a href="tel: +91 7238981464">+91 7238981464</a></p>
                            </div>
                            <div class="clr"></div>
                        </div>
                                <div class="footer-contact-box">
                            <div class="footer-contact-icon"><i class="fa fa-fax"></i></div>
                            <div class="footer-contact-text">
                                <p><a href="fax: +91 7238981464">+91 7238981464</a></p>
                            </div>
                            <div class="clr"></div>
                        </div>
                                <div class="footer-contact-box">
                            <div class="footer-contact-icon"><i class="fa fa-envelope"></i></div>
                            <div class="footer-contact-text">
                                <p><a href="mailto: himanshubaranwak01@gmail.com">himanshubaranwal01@gmail.com</a></p>
                            </div>
                            <div class="clr"></div>
                        </div>
                                <div class="footer-contact-box">
                            <div class="footer-contact-icon"><i class="fa fa-globe"></i></div>
                            <div class="footer-contact-text">
                                <p><a href="http://Online_Medical_Store.com">http://Online_Medical_Store.com</a></p>
                            </div>
                            <div class="clr"></div>
                        </div>
                        </div>
                    
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="footer-section-two">
                            <div class="footer-heading"><h2>Quick Links</h2></div>
                            <div class="footer-link">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="category.php">Categories</a></li>
                                    
                                    <li><a href="contact.php">Contact Us</a></li>
                                    <li><a href="feedback.php">Feedback</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="footer-section-two">
                            <div class="footer-heading"><h2>Sources</h2></div>
                            <div class="footer-link">
                                <ul>
                                    <li><a href="#">Netmeds</a></li>
                                    <li><a href="#">Medlife</a></li>
                                    <li><a href="#">MedlinePlus</a></li>
                                    <li><a href="#">Mayo Clinic</a></li>
                                    <li><a href="#">WebMd</a></li>
                                    <li><a href="#">E-Patients</a></li>
                                </ul>
                        </div>
                    </div>
                </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="footer-section-three">
                            <div class="footer-heading"><h2>Get in touch</h2></div>
                            <div class="footer-form">
                                <form method="post" action="#">
                                    <div class="footer-form-box">
                                        <input type="text" class="footer-form-style" placeholder="Name">
                                    </div>
                                    <div class="footer-form-box">
                                        <input type="text" class="footer-form-style" placeholder="Email">
                                    </div>
                                    <div class="footer-form-box">
                                        <input type="text" class="footer-form-style" placeholder="Phone No.">
                                    </div>
                                    <div class="footer-form-box">
                                        <input type="submit" class="footer-form-submit-style" value="SUBMIT">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="footer-bottom">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p>
                                Copyright © 2020 Online Medical Store All Rights Reserved
                            </p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
   
<!--<script>
    
    function validation(){
        
        var fname= document.getElementById('fname').value;
        var zname= document.myFrom.FirstName.value;
        var lname= document.getElementById('lname').value;
        var gender= document.getElementById('Gender').value;
        var dob= document.getElementById('dob').value;
        var num= document.getElementById('num').value;
        var emails= document.getElementById('emails').value;
        var password= document.getElementById('password').value;
        var cpassword= document.getElementById('cpassword').value;

        alert(zname);

         if(fname == ""){
            document.getElementById('firstname').innerHTML = "** Please fill the First Name field";
            return false;
        }

         if((fname.length <= 2) || (fname.length > 10)){
            document.getElementById('firstname').innerHTML = "** Please enter the valid First Name";
            return false;
        }

         if(!isNaN(fname)){
            document.getElementById('firstname').innerHTML = "** Only Characters are allowed";
            return false;
        }

         if(lname == ""){
            document.getElementById('lastname').innerHTML = "** Please fill the Last Name field";
            return false;
        }

         if((lname.length <= 2) || (lname.length > 10)){
            document.getElementById('lastname').innerHTML = "** Please enter the valid Last Name";
            return false;
        }

         if(!isNaN(lname)){
            document.getElementById('lastname').innerHTML = "** Only Characters are allowed";
            return false;
        }

         if (dob == ""){
            document.getElementById('birth').innerHTML = "** Please fill your Date of Birth";
            return false;
        }

         if (num == ""){
            document.getElementById('mobile').innerHTML = "** Please fill the Mobile no.";
            return false;
        }

         if(isNaN(num)){
            document.getElementById('mobile').innerHTML = "** Only Numbers are allowed";
            return false;
         }

         if(num.length!=10){
            document.getElementById('mobile').innerHTML = "** mobile no. must be 10 digits";
            return false;
         }

         if (emails == ""){
            document.getElementById('email').innerHTML = "** Please enter your E-mail id";
            return false;
        }

         if(emails.indexOf('@') <= 0){
            document.getElementById('email').innerHTML = "** Invalid '@' Position";
            return false;
         }

         if((emails.charAt(emails.length-4)!='.') && (emails.charAt(emails.length-3)!='.')){
            document.getElementById('email').innerHTML = "** Invalid '.' Position";
            return false;
         }

         if (password == ""){
            document.getElementById('pass').innerHTML = "** Please fill the Password field";
            return false;
        }

         if((password.length <= 7) || (password.length > 10)){
            document.getElementById('pass').innerHTML = "** Password must be of 8 length";
            return false;
        }

         if (cpassword == ""){
            document.getElementById('cpass').innerHTML = "** Password and confirm password does not match";
            return false;
        }

         if(password!=cpassword){
            document.getElementById('cpass').innerHTML = "** Password and Confirm Password can not matched";
            return false;
        }
    }
</script>-->
       
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
         <script type="jquery.js"></script>
        <script type="jquery.datetimepicker.full.js"></script>
         <script>
             $('#datetime').datetimepicker({
                 timepicker: false,
                 datepicker: true,
                 format: 'Y-m-d',
                 value: '1980-01-01',
                 weeks: true
              });
        </script>
</body>
</html>