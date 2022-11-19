<!DOCTYPE html>
<html lang="en-US">
  
<head> 
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1"> 
      
      <title>Contact Page</title>
       
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="CSS-files/styles.css">

<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
	
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
       
                  
</head>

<body>

<!-- Error Section -->
    <?php
        $logosErr = $busCardsErr = $webDesignErr = $fnameErr = $lnameErr = $emailErr = $contBackErr = "";
        $logos = $busCards = $webDesign = $fname = $lname = $phone = $email = $contBack = $comment = "";
        $formErr = false;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

         
          
          if (empty($_POST["fname"])) {
                    $fnameErr = "First name is required.";
                    $formErr = true;
          } else {
                $fname = cleanInput($_POST["fname"]);
     //Use REGEX to only accept letters and spaces
                    if (!preg_match("/^[a-zA-Z ]*$/", $fname)) {
                        $fnameErr = "Only letters and standard spaces allowed.";
                        $formErr = true;
                    }
          }

          if (empty($_POST["lname"])) {
            $lnameErr = "Last name is required.";
            $formErr = true;
            } else {
                $lname = cleanInput($_POST["lname"]);
                //Use REGEX to only accept letters and spaces
                    if (!preg_match("/^[a-zA-Z ]*$/", $lname)) {
                        $lnameErr = "Only letters and spaces allowed.";
                        $formErr = true;
                    }
            }
          
          if (empty($_POST["email"])) {
                        $emailErr = "Your email is required for correspondence.";
                        $formErr = true;
          } else {
                $email = cleanInput($_POST["email"]);
                //Check if e-mail address is formatted correctly
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $emailErr = "Please enter a valid email address.";
                        $formErr = true;
                    }
          }
          
          if (empty($_POST["contact-back"])) {
                        $contBackErr = "Please let us know.";
                        $formErr = true;
          } else {
                $contBack = cleanInput($_POST["contact-back"]);
          }
          
          $comment = cleanInput($_POST["comments"]);
        }

        function cleanInput($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
    ?> 



  <div id="topofpage"></div>
  
    <table width="100%">
        <tr>
            <td width="200px">
                <img id="Stacey" src="images/Stacey1.jpg" alt="Stacey" style="width:100%">
            </td>
            <td>
                <h2 style="text-align: center;"> STACEY LAMONT</h2>
                <h3 style="text-align: center; color:#ae49f1"> Graphic Designer</h3>
            </td>
        </tr>
    </table>

<!-- Nav bar -->
    <nav style="color:#ae49f1; padding-left: 20px;">
        <a href="Index.php" style="color:#ae49f1;"> HOME</a> | 
        <a href="portfolio.php" style="color:#ae49f1;"> PORTFOLIO</a> |
        <a href="about.php" style="color:#ae49f1;"> ABOUT</a> |
        <a href="contact-wk3.php" style="color:#ae49f1;"> CONTACT</a>
        
       
    </nav>

    <hr/>
    
  
<!-- Contact Form Section -->

    <section id="contact">
		<div class="container py-3" style="background-color: white" >

<!-- Section Title  -->  
			<div class="row justify-content-center text-center">
				<div class="col-6">
					<h2 class="display-5" style="color:#ae49f1;">Contact Me</h2>
					<br>
				</div>
			</div>   
            
            
<!-- Form Start  -->     

    <div class="row justify-content-center">
				<div class="col-6">
                    
    <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="POST" novalidate>

          
          <p><em>What are you most interested in?</em></p>

            <input type="checkbox" id="logos" name="logos" 
                value="<?php if(isset($_POST['checkbox'])) {
                    $checkbox = $_POST['checkbox'];
                        }else{ $checkbox = false;} ?>" />
            <label for="logos">Logos</label>
            
            <input type="checkbox" id="busCards" name="busCards" 
                value="<?php if(isset($_POST['checkbox'])) {
                    $checkbox = $_POST['checkbox'];
                        }else{ $checkbox = false;} ?>" />
            <label for="busCards">Business Cards</label>

            <input type="checkbox" id="webDesign" name="webDesign" 
                 value="<?php if(isset($_POST['checkbox'])) {
                    $checkbox = $_POST['checkbox'];
                        }else{ $checkbox = false;} ?>" />
            <label for="webDesign">Web Design</label>


            <br><br>


<!-- First Name field -->

                    <div class="form-group">
						<label for="fname">First Name:</label>
                        <span class="text-danger">*<?php echo $fnameErr; ?></span>
						<input type="text" class="form-control" id="fname" placeholder="First Name" name="fname" value="<?php if (isset($fname)) {echo $fname;} ?>" />
					</div>


<!-- Last Name field -->

                    <div class="form-group">
						<label for="lname">Last Name:</label>
                        <span class="text-danger">*<?php echo $lnameErr; ?></span>
						<input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname" value="<?php if (isset($lname)) {echo $lname;} ?>" />
					</div>


<!-- Phone field -->
               
                    <div class="form-group">
						<label for="phone">Phone:</label>
                        <input type="text" class="form-control" id="phone" placeholder="000-111-2222" name="phone" value="<?php if (isset($phone)) {echo $phone;} ?>" />
					</div>

<!-- Email Field -->
                    <div class="form-group">
                        <label for="email">Email:</label>
                            <span class="text-danger">*<?php echo $emailErr; ?></span>
                            <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" value="<?php if (isset($email)) {echo $email;} ?>"  />
                    </div>


<!-- Radio Button Field -->
				<div class="form-group">
					<label class="control-label">Would you like us to get back to you?</label>
                        <span class="text-danger">*<?php echo $contBackErr; ?></span>
							<div class="form-check">
								<input type="radio" class="form-check-input" name="contact-back" id="yes" value="We are excited to get in touch with you!" <?php if (isset(($contBack)) && ($contBack == "Yes")) {echo "checked";} ?> />
								<label class="form-check-label" for="yes">Yes</label>
							</div>
							<div class="form-check">
								<input type="radio" class="form-check-input" name="contact-back" id="no" value="We are sad that you don't want to hear from us, but no hard feelings." <?php if (isset(($contBack)) && ($contBack == "No")) {echo "checked";} ?> />
								<label class="form-check-label" for="no">No</label>
							</div>
                            <div class="form-check">
								<input type="radio" class="form-check-input" name="contact-back" id="maybe" value="I will contemplate whether or not I want to hear from you." <?php if (isset(($contBack)) && ($contBack == "Maybe")) {echo "checked";} ?> />
								<label class="form-check-label" for="maybe">Maybe So</label>
							</div>
				</div>

            
<!-- Comments Field -->
                        <div class="form-group">
							<label for="comments">Comments:</label>
							<textarea id="comments" class="form-control" rows="3" name="comments"><?php if (isset($comment)) {echo $comment;} ?></textarea>
						</div>
          

<!-- Required Fields Note -->
             <div class="text-danger text-right">* Indicates required fields</div>
             

<!-- Submit button -->                
            <button style="font-family: montserrat, sans-serif; font-weight: 400; font-style: normal; font-size: 16px; color: #ae49f1;">Submit</button>

        <br><br>

    <!--     <script>
          function tryIt() {
            try {
              var newText = document.getElementById("email").value;
              if (newText === "") {
                throw "Field cannot be empty.";
              }
              document.getElementById("results").innerHTML = "You entered: <b>" + newText + "</b>";
            } 
            catch (error) {
              document.getElementById("results").innerHTML = "I can't reply if you don't give me your email! <b>" + error + "</b>";
            }
          }

        </script> -->

<!-- Info entered section -->

    <?php if (($_SERVER["REQUEST_METHOD"] == "POST") && (!($formErr))) { ?> 

        <section id="results" style="background-color: lightsteelblue;">
            <div class="container py-2" >
                <div class="row ">
                    <p style="font-family: montserrat, sans-serif; font-weight: 400;font-style: normal;font-size: 20px; padding-left: 20px">This is the information you entered:</p>
                </div>
                <div class="row">				
                    <ul>
                        <?php
                        
                        if ($logos !== "") { echo "<li>Logos $logos</li>"; }
                        if ($logos !== "") { echo "<li>Business Cards $busCards</li>"; }
                        if ($logos !== "") { echo "<li>Web Design $webDesign</li>"; }
                    
                        if ($fname !== "") { echo "<li>First Name: $fname</li>"; }
                        if ($lname !== "") { echo "<li>Last Name: $lname</li>"; }
                        if ($phone !== "") { echo "<li>Phone: $phone</li>"; }
                        if ($email !== "") { echo "<li>Email: $email</li>"; }
                        if ($contBack !== "") { echo "<li>Contact Back: $contBack</li>"; }
                        if ($comment !== "") { echo "<li>Comment: $comment</li>"; }
                        ?>
                    </ul>		
                </div>
            </div>
        </section>

 <!--    <section id="info" style="background-color: #ae49f1;">
        <div class="container py-2">
            <div class="row ">
                <p style="font-family: montserrat, sans-serif; font-weight: 400;font-style: normal;font-size: 20px; padding-left">This is the information you entered:</p>
            </div>    
            <div class="row">  -->
  
    <?php } ?>
    
</form>
    <!--   <button style="font-family: montserrat, sans-serif; font-weight: 400;font-style: normal;font-size: 18px;">Submit</button> 
      -->
        

      

      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <hr/>
      <br>
  
      <footer>
          
                <a style="color: #ae49f1;" href="#topofpage">Back to Top</a>
          </p>
      </footer>
      <br>
      <br>

</body>
</html>