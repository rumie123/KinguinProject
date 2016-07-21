{% include "./common/header.tpl" %}
<section class="no-pad login-page fullscreen-element">
 <div class="background-image-holder">
  <img src="/img/hero6.jpg" class="background-image" alt="Poster Image For Mobiles">
 </div>
    <div class="container align-vertical">
     <div class="row">
	<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
	  <h1 class="text-white">Login to continue</h1>
          <div style="display:none" class="alert alert-success" role="alert" id="error"> </div>
	  <div class="photo-form-wrapper clearfix">
           <form id="loginform">  
	    <input name="username" id="username" class="form-email" placeholder="Email Address" type="text">
	    <input name="password" id="password" class="form-password" placeholder="Password" type="password">
	    <input class="login-btn btn-filled" value="Login" type="submit">
	   </form>
	   </div>
	   <a href="#" class="text-white">Create an account ➞</a><br>
	   <a href="#" class="text-white">I've forgotten my password</a>
	</div>
     </div>
    </div>
</section>
{% include "./common/footer.tpl" %}