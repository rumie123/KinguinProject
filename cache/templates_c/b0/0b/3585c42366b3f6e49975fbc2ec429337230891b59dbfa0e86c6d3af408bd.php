<?php

/* pages/my_account.tpl */
class __TwigTemplate_b00b3585c42366b3f6e49975fbc2ec429337230891b59dbfa0e86c6d3af408bd extends Twig_Template
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
        echo "<section>
    <div class=\"container\">
        <div class=\"row\"></div>
    <div class=\"col-sm-12 text-center\">
        <h1>My Account</h1>
    </div>
    <div class=\"row text-center\">
        <div class=\"col-sm-12 col-lg-4 col-md-3\">
            
            
        </div>
        <div class=\"col-sm-12 col-lg-4 col-md-3\"> 
            <div class=\"photo-form-wrapper\">
                <form id=\"myAccountForm\">
                    <input name=\"\" type=\"text\" name=\"username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetail"]) ? $context["userDetail"] : null), "username"), "html", null, true);
        echo "\" disabled=\"\">
                    <input type=\"textbox\" name=\"firstName\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetail"]) ? $context["userDetail"] : null), "first_name"), "html", null, true);
        echo "\" placeholder=\"First Name\">
                    <input type=\"textbox\" name=\"lastName\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetail"]) ? $context["userDetail"] : null), "last_name"), "html", null, true);
        echo "\" placeholder=\"Last Name\">
                    <input type=\"password\" name=\"password\" value=\"\" placeholder=\"Password\">
                    <input type=\"password\" name=\"confirmPassword\" value=\"\" placeholder=\"Repeat Password\">
                    <input class=\"btn-filled\" value=\"Submit\" type=\"submit\">
                </form>  
            </div>
        </div>
        <div class=\"col-sm-12 col-lg-4 col-md-6\">
        </div>    
    </div>   
    </div>     
</section>
";
        // line 30
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "pages/my_account.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 30,  45 => 18,  41 => 17,  37 => 16,  21 => 2,  19 => 1,);
    }
}
