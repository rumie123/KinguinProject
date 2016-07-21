$("#myAccountForm").submit(function(e) {
    var url = "/ajax/updateMyAccount";
    
    $.ajax({
        type: "POST",
        url: url,
        data: $("#myAccountForm").serialize(),
        dataType: "json",
        success: function(data) {
            alert(data.message);
        }
    });
    
    e.preventDefault();
});
