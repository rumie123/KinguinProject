<?php

/* pages/signup_error.tpl */
class __TwigTemplate_087b54dce3c8dbd43b25e85742218ea4c9335678db912480eb6e067832fcb283 extends Twig_Template
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
         ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
        echo "
    </div>
</section>
    ";
        // line 7
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
        // line 8
        echo "    ";
    }

    public function getTemplateName()
    {
        return "pages/signup_error.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 8,  31 => 7,  25 => 4,  21 => 2,  19 => 1,);
    }
}
