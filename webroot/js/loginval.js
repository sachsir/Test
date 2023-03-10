$(document).ready(function() {
 
  $('form').validate({
    rules:{
       
        email: {
        required: true,
        },
       
        password: {
            required: true,
        },
    },
    
    messages:{
        
        email: "**Please enter Email-id**",
        password: 
        {                
        required: "**Please enter Password**",
        },

  }
})
}); 
    