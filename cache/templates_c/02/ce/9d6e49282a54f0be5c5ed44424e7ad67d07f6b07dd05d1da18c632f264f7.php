<?php

/* pages/signup.tpl */
class __TwigTemplate_02ce9d6e49282a54f0be5c5ed44424e7ad67d07f6b07dd05d1da18c632f264f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("./common/header.tpl")->display($context);
        // line 2
        echo "
<!--Signup Page-->


<header class=\"signup\">
        <div class=\"background-image-holder parallax-background\">
                <img src=\"/img/hero5.jpg\" class=\"background-image\" alt=\"Background Image\">
        </div>\t\t\t
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-1 col-sm-12 text-center\">
                        <h1 class=\"text-white\">You can sign up here <br>in order to find good deliciousness</h1>
                        <div style=\"display: none\" </div> </div>
                        
                </div>
            </div>

            <div class=\"row text-center\">
                <div class=\"col-sm-12 text-center\">
                    <div class=\"photo-form-wrapper clearfix\">
                        <div class=\"row\">
                            <form method=\"post\" action=\"/signup2\">
                                <div class=\"col-md-3 col-sm-4\">
                                        <input id=\"email\" name=\"email\" value=\"abc@d.com\" class  placeholder=\"Your Email\" type=\"text\">
                                              <div style=\"display:none\" class=\"alert alert-success\" role=\"alert\" id=\"error1\"> </div>
                                </div>

                                <div class=\"col-md-3 col-sm-4\">
                                        <input id=\"password\" name=\"pass\" class=\"form-password\" placeholder=\"Password\" type=\"password\">
                                        <div style=\"display:none\" class=\"alert alert-success\" role=\"alert\" id=\"error2\"> </div>

                                </div>

                                <div class=\"col-md-3 col-sm-4\">
                                        <input id=\"password2\" name=\"passConf\" class=\"form-password2\" placeholder=\"Confirm Password\" type=\"password\">
                                        <div style=\"display:none\" class=\"alert alert-success\" role=\"alert\" id=\"error3\"> </div>
                                </div>

                                <div class=\"col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-4 text-center\">
                                        <input id=\"submit\"  class=\"btn btn-primary btn-filled\" value=\"Continue\" type=\"submit\">

                                </div>
                            </form>
                        </div>
                    </div>
                    <span class=\"text-white\">You can sign up,for free</span>
                </div>
            </div>
        </div>
</header>
\t\t\t\t
";
        // line 53
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "pages/signup.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 53,  21 => 2,  19 => 1,);
    }
}
