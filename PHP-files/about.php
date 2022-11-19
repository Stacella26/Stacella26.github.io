<!DOCTYPE html>
<html lang="en-US">
    
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 

    <title>About Page</title>

    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

    <link rel="stylesheet" href="https://use.typekit.net/aep6edr.css">  
    <link rel="stylesheet" href="CSS-files/styles.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
 
    <script src="time.js" defer></script>
    <style>
        /* { box-sizing: border-box; }*/


        .myDiv {
              border: 3px outset #ae49f1;
              background-color: rgb(179, 176, 180);    
              text-align: center;}
   
        body {font-family: 'Montserrat';font-size: 22px;}

      /*  .container {
         width: 40%; height: 10px;
         background-color: #ddd;}*/

        

        .tableHead { 
                box-sizing: border-box;
                background-color: rgb(179, 176, 180);  
                color:#ae49f1;
                font-family: 'Montserrat';
                font-size: 18px;
                text-align: left;
             
             }

        .myTable { 
                font-family: montserrat, sans-serif;
                font-weight: 400;
                font-style: normal;
                font-size: 16px;
                padding-top: 10px;
                padding-left: 10px;
             }

        th {
                border-collapse: collapse;
                font-family: montserrat, sans-serif;
                font-weight: 600;
                font-style: normal;
                font-size: 18px;
                text-align: left;
                padding-left: 10px;
                padding-top: 4px;
                padding-bottom: 4px;
             }
   

        
    </style> 


        

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
              <h3 style="text-align: center; color:#ae49f1;"> Graphic Designer</h3>
              <h4 style="text-align: center; font-style: italic;">About</h4>
            </td>
        </tr>
    </table>



<!--Navigation Bar-->
    <nav style="color:#ae49f1; padding-left: 20px;">
        <a href="Index.php" style="color:#ae49f1;"> HOME</a> | 
        <a href="portfolio.php" style="color:#ae49f1;"> PORTFOLIO</a> |
        <a href="about.php" style="color:#ae49f1;"> ABOUT</a> |
        <a href="contact.php" style="color:#ae49f1;"> CONTACT</a>

        <button type="button" id="SayHi" style="color:#ae49f1; margin-left: 15px; font-family: montserrat, sans-serif; font-weight: 400;font-style: normal;font-size: 18px;" class="mx-3 btn">Say Hi!</button> 

    </nav>

        <hr/>
        <br>


        <div class="myDiv">
                <h3 style="color: #ae49f1; font-family: montserrat, sans-serif;font-weight: 700;font-style: normal; font-size: 26px;">MY SKILLS</h3>
    </div>
    

     <?php

        function mySkills() {
            $skills = ["InDesign", "Illustrator", "Photoshop", "Ninja Moves", "Master Baker"];

            echo '<ul>';

            foreach ($skills as $stacey) {
                echo "<li>" . $stacey . "</li>";
            }

            echo "</ul>";

        }

    // This tells the function to run

    mySkills(); 

    ?> 

<!--References Box-->        
            <div class="myDiv">
                <h3 style="color: #ae49f1; font-family: montserrat, sans-serif;font-weight: 700;font-style: normal; font-size: 26px;">REFERENCES</h3>
            </div>

          <br>

<!--Table headers-->          
          <table style="width: 100%;" class="table table-striped">        
            <tr class="tableHead">
                <th>NAME</th>
                <th>POSITION</th>
                <th>COMPANY</th>
                <th>ADDRESS</th>
                <th>PHONE</th>
                <th>EMAIL</th>
            </tr>
        
            <tbody id="myTable"></tbody>

        </table>

        
            <script>
                var references = [
                
                {'name':'Jack Skellington', 'position' : 'Living Dead Trickster', 'company' : 'City of Halloweenland','address':'Graveyard', 'phone':'(000) 000 0000', 'email':'jskellington@thedead.com'},

                {'name':'Caduceus Clay', 'position' : 'Firbolg Cleric', 'company' : 'Self-employed','address':'Graveyard of the Blooming Grove', 'phone':'None','email':'cclay@d&dforever.com'},

                {'name':'Ash Williams', 'position' : 'Deadite Remover', 'company' : 'Self-employed','address':'Log Cabin in the Woods', 'phone':'Unknown','email':'ash@bookofthedead.com'},
                
            ]
	
	buildTable(references)

	function buildTable(data){
		var table = document.getElementById('myTable')

		for (var i = 0; i < data.length; i++){
			var row = `<tr>
							<td>${data[i].name}</td>
                            <td>${data[i].position}</td>
                            <td>${data[i].company}</td>
							<td>${data[i].address}</td>
							<td>${data[i].phone}</td>
                            <td>${data[i].email}</td>
					  </tr>`
			table.innerHTML += row


		}
	}
    </script>





  <!--  <table>
    <div class="myDiv">
        <h3 style="color: #ae49f1; font-family: montserrat, sans-serif;font-weight: 700;font-style: normal; font-size: 26px;">REFERENCES</h3>
    </div>
  <br>

<tr>
    <th>Dana Page</th>
    <th>Colleen Hoyt</th>
</tr>
<tr>
    <td style="font-style: italic;">Owner</td>
    <td style="font-style: italic;">Owner/Master Esthetician</td>
</tr>
<tr>
    <td>DPA Advertising</td>
    <td>Brow Goddess</td>
</tr>
<tr>
    <td>P.O. Box 711760</td>
    <td>P.O. Box 4473</td>
</tr>
<tr>
    <td>Salt Lake City, UT 84121-1760</td>
    <td>Salt Lake City, UT 84119</td>
</tr>
<tr>
    <td>(801) 573 0884</td>
    <td>(801) 573 0903</td>
</tr>
<tr>
    <td style="font-style: italic;">danapage@dpaadvertising.com</td>
    <td style="font-style: italic;">colleen@browgoddess.com</td>
</tr>

</table>-->

<br><br>
    
        <p><a style="color: #ae49f1; font-size: 14pt;" href="images/StaceyLaMontresume.pdf" download="StaceyLaMontresume">Download My Resume</a> </p>  
    
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
      
      
    <footer>
        <p>       
         <a style="color: #ae49f1; font-size: 14pt;" href="#topofpage">Back to Top</a>
       </p>
    </footer>
          
</body>

</html>


          