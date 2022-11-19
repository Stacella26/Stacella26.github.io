


document.addEventListener('DOMContentLoaded', () => {


  
    function nameInput() 
    {
      let person = prompt("Please enter your name");
      var Greetings;
      var date = new Date();
      var hour = date.getHours();

      if (hour >5 && hour < 12) 
      {
          Greetings = "Good Morning, ";
      }

      else if (hour >= 12 && hour < 18) 
      {
          Greetings = "Good Afternoon, ";
      }

      else if (hour >=18 && hour < 22) 
      {
          Greetings = "Good Evening, ";
      }

      else 
      {
          Greetings = "Hello Darkness, my old friend ";
      }

      window.alert(Greetings + person + "!" + "\nThank you for visiting my site!");

      }

        
    const buttons = document.querySelectorAll('button');
        
    for (const button of buttons) {
            button.addEventListener('click', nameInput);
        }
    
  }); 
  