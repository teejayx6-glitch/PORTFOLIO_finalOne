<html lang="en"><head>

    <meta charset="UTF-8">
    
  <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">
  <meta name="apple-mobile-web-app-title" content="CodePen">
  
  <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">
  
  <link rel="mask-icon" type="" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">
  
  
    <title>Thank You Page </title>
    <script src="https://bootstrapcreative.com/wp-bc/wp-content/themes/wp-bootstrap/codepen/bootstrapcreative.js?v=7"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    
  <style>
 body{
     background-color: #e9ecef;
 }
  </style>
  
    <script>
    window.console = window.console || function(t) {};
  </script>
  
    
    
    <script>
    if (document.location.search.match(/type=embed/gi)) {
      window.parent.postMessage("resize", "*");
    }
  </script>
  
  
  </head>
  
  <body translate="no" data-new-gr-c-s-loaded="9.33.0">
    <div class="jumbotron text-center mt-5 mb-5">
    <h1 class="display-3">Thank You!</h1>
    <p class="lead"><strong>Please check your email</strong> for further instructions </p>
    <hr>
    <p>
      Having trouble? <a href="/contact/contact2.html">Contact us</a>
    </p>
    <p class="lead">
      <a class="btn btn-secondary btn-sm" href="index.html" role="button">Continue to homepage</a>
    </p>
  </div>
    <?php  error_reporting(0);
        $indcomp = $_POST['customRadioInline1'];
        $fname = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['phno'];
        $password = $_POST['password'];

              $conn = mysqli_connect('localhost','root','','hire_me');
              $insert = "insert into registration(customRadioInline1,name,email,phno,password) 
             values('$indcomp','$fname','$email','$mobile','$password')";

            if(!$conn){
                echo "Failed to connect to the server";
            }
       
             $sql = mysqli_query($conn,$insert);
         
            if($sql){
                echo "" ;
                   }

            else{
                 echo "Something went wrong, ensure all the data is filled correctly and try again";
                }    ?>  
 
  
  
  
   
  </body></html>
