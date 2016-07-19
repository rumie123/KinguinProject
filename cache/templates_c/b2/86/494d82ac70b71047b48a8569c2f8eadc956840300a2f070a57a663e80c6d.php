<?php

/* pages/signup_succes.tpl */
class __TwigTemplate_b286494d82ac70b71047b48a8569c2f8eadc956840300a2f070a57a663e80c6d extends Twig_Template
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
    <div class =\"col-sm-12 text-center\">
        Thank u 4 signing up, please check your email for an activation code!<br>
        It might take up to 20 minutes for the activation mail to arrive :)<br>
        We live back in times where  mail was delivered by turtles!
    </div>
</section>
    ";
        // line 9
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "pages/signup_succes.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 9,  21 => 2,  19 => 1,);
    }
}
