<!DOCTYPE html>
<html lang="en-US">
  
<head> 
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1"> 
      
      <title>Contact Page</title>
       
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        <link rel="stylesheet" href="CSS-files/styles.css">
       
                  
</head>

<body>
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

    <nav style="color:#ae49f1; padding-left: 20px;">
        <a href="Index.php" style="color:#ae49f1;"> HOME</a> | 
        <a href="portfolio.php" style="color:#ae49f1;"> PORTFOLIO</a> |
        <a href="about.php" style="color:#ae49f1;"> ABOUT</a> |
        <a href="contactphp" style="color:#ae49f1;"> CONTACT</a>
        
       
    </nav>

    <hr/>
  
    
       <form action="http://form-test.slccwebdev.com/form-success.php"  method="get" target="_blank">

          
          <p><em>What are you most interested in?</em></p>

            <input type="checkbox" id="logo" name="logos" value="Logo">
            <label for="logo">Logos</label>

            <input type="checkbox" id="Businesscards" name="business-cards" value="Business Cards">
            <label for="Businesscards">Business Cards</label>

            <input type="checkbox" id="Web Design" name="web-design" value="Web Design">
            <label for="Web Design">Web Design</label>


            <br><br><br>  
        <div>   
          <label for="fname"> First Name:</label>
          <input type="text" id="fname" name="fname">
        </div> 

        <div>
          <label for="Lname"> Last Name:</label>
          <input type="text" id="lname" name="lname">
        </div>

        <div>
          <label for="phone"> Phone:</label>
          <input type="text" id="phone" name="phone">
        </div>
      
        <div>
          <label for="email"> Email:</label>
          <input type="text" id="email" name="email" required>
        </div>

          <br><br>
        
          <label for="comments"> Comments:</label><br>

            <textarea 
                id="comments" 
                name="comments"
                cols="75"
                rows="8"
                maxlength="350">
            </textarea>

          <br>

          <p>Favorite flying creature?</p>
          <input type="radio"
            id="Dragons"
            name="Favorite-Creature"
            value="Dragons">
          <label for="dragons">Dragons</label>

          <input type="radio"
            id="butterflies"
            name="Favorite-Creature"
            value="Butterflies">
        <label for="butterflies">Butterflies</label>

        <br><br>

        
        <button style="font-family: montserrat, sans-serif; font-weight: 400;font-style: normal;font-size: 18px;" onclick="tryIt()">Submit</button>
        <p id="results"></p>

        <script>
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

        </script>

     <!--     <button style="font-family: montserrat, sans-serif; font-weight: 400;font-style: normal;font-size: 18px;">Submit</button> 
      -->
        

      </form>

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


</body>
</html>