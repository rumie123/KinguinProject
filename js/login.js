$("#loginform").submit(function(e){
    
     var url = "/ajax/login";
     
     $.ajax({
         type: "POST",
         url: url,
         data: $("#loginform").serialize(),
         dataType: "json",
         success: function(data)
         {
             if( data.error == true)
             {
                
                $('#error').html(data.errorMessage).fadeTo(1,1000);
                 
             } else {
                 window.location.replace("/account");
             }
             
         }
       });
e.preventDefault();
});
