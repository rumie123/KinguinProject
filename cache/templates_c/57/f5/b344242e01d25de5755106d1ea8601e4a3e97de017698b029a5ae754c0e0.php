<?php

/* Mailer/activation_email.tpl */
class __TwigTemplate_57f5b344242e01d25de5755106d1ea8601e4a3e97de017698b029a5ae754c0e0 extends Twig_Template
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
        $this->env->loadTemplate("./Mailer/header.tpl")->display($context);
        // line 2
        echo "


      <!-- 600px container (white background) -->
      <table border=\"0\" width=\"600\" cellpadding=\"0\" cellspacing=\"0\" class=\"container\" style=\"width:600px;max-width:600px\">
        <tr>
          <td class=\"container-padding header\" align=\"left\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:24px;font-weight:bold;padding-bottom:12px;color:#DF4726;padding-left:24px;padding-right:24px\">
            Antwort v1.0
          </td>
        </tr>
        <tr>
          <td class=\"container-padding content\" align=\"left\" style=\"padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff\">
            <br>

<div class=\"title\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:600;color:#374550\">Single Column Fluid Layout</div>
<br>

<div class=\"body-text\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333\">
  This is an example of a single column fluid layout. There are no columns. Because the container table width is set to 100%, it automatically resizes itself to all devices. The magic of good old fashioned HTML.
  <br><br>

  The media query change we make is to decrease the content margin from 24px to 12px for devices up to max width of 400px.
  <br><br>
</div>

          </td>
        </tr>
        <tr>
          <td class=\"container-padding footer-text\" align=\"left\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:16px;color:#aaaaaa;padding-left:24px;padding-right:24px\">
            <br><br>
            Sample Footer text: © 2015 Acme, Inc.
            <br><br>

            You are receiving this email because you opted in on our website. Update your <a href=\"#\" style=\"color:#aaaaaa\">email preferences</a> or <a href=\"#\" style=\"color:#aaaaaa\">unsubscribe</a>.
            <br><br>

            <strong>Acme, Inc.</strong><br>
            <span class=\"ios-footer\">
              123 Main St.<br>
              Springfield, MA 12345<br>
            </span>
            <a href=\"http://www.acme-inc.com\" style=\"color:#aaaaaa\">www.acme-inc.com</a><br>

            <br><br>

          </td>
        </tr>
      </table>
<!--/600px container -->



";
        // line 54
        $this->env->loadTemplate("./Mailer/footer.tpl")->display($context);
        // line 55
        echo "
";
    }

    public function getTemplateName()
    {
        return "Mailer/activation_email.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 55,  75 => 54,  21 => 2,  19 => 1,);
    }
}
