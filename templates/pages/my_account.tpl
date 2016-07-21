{% include "./common/header.tpl" %}
<section>
    <div class="container">
        <div class="row"></div>
    <div class="col-sm-12 text-center">
        <h1>My Account</h1>
    </div>
    <div class="row text-center">
        <div class="col-sm-12 col-lg-4 col-md-3">
            
            
        </div>
        <div class="col-sm-12 col-lg-4 col-md-3"> 
            <div class="photo-form-wrapper">
                <form id="myAccountForm">
                    <input name="" type="text" name="username" value="{{userDetail.username}}" disabled="">
                    <input type="textbox" name="firstName" value="{{userDetail.first_name}}" placeholder="First Name">
                    <input type="textbox" name="lastName" value="{{userDetail.last_name}}" placeholder="Last Name">
                    <input type="password" name="password" value="" placeholder="Password">
                    <input type="password" name="confirmPassword" value="" placeholder="Repeat Password">
                    <input class="btn-filled" value="Submit" type="submit">
                </form>  
            </div>
        </div>
        <div class="col-sm-12 col-lg-4 col-md-6">
        </div>    
    </div>   
    </div>     
</section>
{% include "./common/footer.tpl" %}
