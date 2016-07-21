{% include "./common/header.tpl" %}

<!--Signup Page-->


<header class="signup">
        <div class="background-image-holder parallax-background">
                <img src="/img/hero5.jpg" class="background-image" alt="Background Image">
        </div>			
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
                        <h1 class="text-white">You can sign up here <br>in order to find good deliciousness</h1>
                        <div style="display: none" </div> </div>
                        
                </div>
            </div>

            <div class="row text-center">
                <div class="col-sm-12 text-center">
                    <div class="photo-form-wrapper clearfix">
                        <div class="row">
                            <form method="post" action="/signup2">
                                <div class="col-md-3 col-sm-4">
                                        <input id="email" name="email" value="" class  placeholder="Your Email" type="text">
                                              <div style="display:none" class="alert alert-success" role="alert" id="error1"> </div>
                                </div>

                                <div class="col-md-3 col-sm-4">
                                        <input id="password" name="pass" class="form-password" placeholder="Password" type="password">
                                        <div style="display:none" class="alert alert-success" role="alert" id="error2"> </div>

                                </div>

                                <div class="col-md-3 col-sm-4">
                                        <input id="password2" name="passConf" class="form-password2" placeholder="Confirm Password" type="password">
                                        <div style="display:none" class="alert alert-success" role="alert" id="error3"> </div>
                                </div>

                                <div class="col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-4 text-center">
                                        <input id="submit"  class="btn btn-primary btn-filled" value="Continue" type="submit">

                                </div>
                            </form>
                        </div>
                    </div>
                    <span class="text-white">You can sign up,for free</span>
                </div>
            </div>
        </div>
</header>
				
{% include "./common/footer.tpl" %}
