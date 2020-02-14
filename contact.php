<!DOCTYPE html>
<html lang="en">
 <head>
     <title>(Your Name Here): Responsive Website</title>
  <meta charset="utf-8" />
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/forms.css" />
 </head>
 <body>
     <header>
     <h1>FIRFIR</h1>
        <nav class="topnav" id="myTopnav">
            <a href="index.html" class="active">Home</a>
            <a href="http://web-students.net/site50/web150/timeofday/" target="_blank">Time Of Day</a>
            <a href="http://web-students.net/site50/web150/daily/" target="_blank">Daily Grind</a>
            <a href="http://web-students.net/site50/web150/domplay/" target="_blank">DOM Play</a>
            <a href="#" target="_blank">GitHub</a>
            <a href="#" target="_blank">LinkedIn</a>
            <a href="contact.php">Contact</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </nav>
     </header>
     
   <main class="wrapper">
     <!--
     <img class="desktop" src="images/desktop.jpg" alt="Photo of an adorable GSD puppy" />
       
     <img class="tablet" src="images/tablet.jpg" alt="Photo of an adorable GSD puppy" />
       
     <img class="phone" src="images/phone.png" alt="Photo of an adorable but large GSD in the lap of his best buddy" />
     -->  
        
       <h2 class="subheader">contact me</h2>
       
       
       
       
       <?php
       if(isset($_POST['Name'])){//show dat
           /*
           echo '<pre>';
            var_dump($_POST);
            echo '</pre>';
            */
           
           
           
$to  = 'sel.zwd@gmail.com';//put your email here
$today = date("F j, Y, g:i a");
$subject = 'WEB150 Portal Contact ' . $today;//you build this too
$message = '';//you build this
$email = '';//will come from form

$message .= 'Name: ' . $_POST['Name']  .PHP_EOL;        
$message .= 'Email: ' . $_POST['Email']  .PHP_EOL;         
$message .= 'Comments: ' . $_POST['Comments']  .PHP_EOL;         
$email = $_POST['Emil'];           
           
            
$headers = 'From: noreply@web-students.net' .  PHP_EOL .
'Reply-To: ' . $email . PHP_EOL .
'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

           
           
           
           
           echo '<h2>thanks for the feedback!</h2>';
        }else{//show form
           echo '
           <form action="" method="post">
                <div>
                    <label>
                        Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" size="44" autofocus />
                    </label>
                </div>
                <div>	
                    <label>
                        Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
                    </label>
                </div>

                <div>	
                    <label>
                        Comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Your comments are important to us!"></textarea>
                    </label>
                </div>	
                <div>
                    <input type="submit" value="submit" />
                </div>
                </form>
           '; 
        }
       ?>
 
       
       
       
       

     <footer>
      <p><small>&copy; 2019 by <a href="contact.php">Contact (Your Name Here) </a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
  </main>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
  </script>
     
 </body>
</html>