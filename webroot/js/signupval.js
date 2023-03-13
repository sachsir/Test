$(document).ready(function() {
    
    jQuery.validator.addMethod("regex", function(value, element, param) { return value.match(new RegExp("^" + param + "$")); });
    var ALPHA_REGEX = "[a-zA-Z]*";
   
    jQuery.validator.addMethod(
        'Uppercase',
        function (value) { 
            return /[A-Z]/.test(value); 
        },  
        'Your password must contain at least one Uppercase Character.'
    );
    jQuery.validator.addMethod(
        'Lowercase',
        function (value) { 
            return /[a-z]/.test(value); 
        },  
        'Your password must contain at least one Lowercase Character.'
    );
    jQuery.validator.addMethod(
        'Specialcharacter',
        function (value) { 
            return /[!@#$%^&*()_-]/.test(value); 
        },  
        'Your password must contain at least one Special Character.'
    );
    jQuery.validator.addMethod(
        'Onedigit',
        function (value) { 
            return /[0-9]/.test(value); 
        },  
        'Your password must contain at least one digit.'
    ); 

  
   

  $('form').validate({
    rules:{
        first_name: {
            required: true,
            regex: ALPHA_REGEX,
            minlength:3,
            
        },
        last_name: {
            required: true,
            regex: ALPHA_REGEX,
            minlength:3,
        },
        email: {
            required: true,
        },
        phone: {
            required: true,
            digits: true,
            maxlength: 12,
            minlength:10,  
        },

        address: {
            required: true,
            regex: ALPHA_REGEX,
            minlength:3,
           
        },
        // country: {
        //     required: true,
           
        // },
        // state: {
        //     required: true,
            
           
        // },
        // city: {
        //     required: true,
           
           
        // },
        zip_code: {
            required: true,
            digits: true,
            minlength:5,
           
        },
       
        password: {
            
            required: true,
            Uppercase:true,
            Lowercase:true,
            Specialcharacter:true,
            Onedigit:true,
            minlength:8,
            maxlength: 18,
        
           
        },
        confirmpassword: {
            required: true,
            equalTo: "#password",
        },
       
        
        
    },
    
    messages:{
        first_name: 
        {
        required: "**Please enter First Name**",
        regex : "**Please enter characters only**",
        minlength: "**Minimum length of Firstname should be 3**",
    
    
    },
        last_name: 
        {
        required: "**Please enter Last Name**",
        regex : "**Please enter characters only**",
        minlength: "**Minimum length of Lastname should be 3**",
    
    
    },
        email: "**Please enter Email-id including . and @**",

        phone: {
          required: "**Please enter Phone Number**",
          digits: "**Please enter Digits Only**",
          minlength: "**Minimum length of Phone Number should be 10 digits**",
          maxlength: "**Maximum length of Phone Number should be 12 digits**",
           
        },
        address: {
            required: "**Please enter your Address**",
            regex : "**Please enter characters only**",
            minlength:"**Minimum length of Address should be 3**",
           
        },
       
        // country: {
        //     required: "**Please enter your Country**",
            
           
           
        // },
        // state: {
        //     required: "**Please enter your State**",
          
            
           
        // },
        // city: {
        //     required: "**Please enter your City**",
          
           
        // },
        zip_code: {
            required: "**Please enter your Zip Code**",
            digits: "**Please enter Digits Only**",
            minlength:5,
           
        },

        password: 
        {                
        required: "**Please enter Password**",
        Uppercase: "**Password must contain atleast one UpperCase**",
        Lowercase: "**Password must contain atleast one LowerCase**",
        Specialcharacter: "**Password must contain atleast 1 Special Character**",
        Onedigit: "**Password must contain atleast 1 digit**",
        minlength: "**Minimum length of Password should be 8 digits**",
        maxlength: "**Maximum length of Password should be 18 digits**",
        },

        confirmpassword: 
        {
        required: "**Please Re-enter Password to Confirm**",
        equalTo: "**Passwords do not match**",
    },
 
    
  }
})
}); 