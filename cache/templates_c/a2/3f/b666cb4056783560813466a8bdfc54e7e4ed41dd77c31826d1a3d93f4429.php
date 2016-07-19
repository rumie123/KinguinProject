<?php

/* ./common/footer.tpl */
class __TwigTemplate_a23fb666cb4056783560813466a8bdfc54e7e4ed41dd77c31826d1a3d93f4429 extends Twig_Template
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
        echo "</div>
\t\t
\t\t<div class=\"footer-container\">
\t\t\t\t\t
\t\t\t<footer class=\"social bg-secondary-1\">
\t\t\t
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12 text-center\">
\t\t\t\t\t\t\t<h1 class=\"text-white\">Follow us</h1>
\t\t\t\t\t\t\t<a href=\"https://mail.google.com\" class=\"text-white\"><strong>rumie@gmail.com</strong></a><br>
\t\t\t\t\t\t\t<ul class=\"social-icons\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon social_twitter\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon social_facebook\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon social_instagram\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul><br>
\t\t\t\t\t\t\t<span class=\"sub\">© Copright 2014 <a href=\"https://www.facebook.com/sin.a.sin.5\">AlphaYavor</a> - All Rights Reserved</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t\t</footer>
\t\t</div>
\t\t\t\t
        <script src=\"https://www.youtube.com/iframe_api\"></script>
        <script src=\"/js/jquery.min.js\"></script>
        <script src=\"/js/jquery.plugin.min.js\"></script>
        <script src=\"/js/bootstrap.min.js\"></script>
        <script src=\"/js/jquery.flexslider-min.js\"></script>
        <script src=\"/js/smooth-scroll.min.js\"></script>
        <script src=\"/js/skrollr.min.js\"></script>
        <script src=\"/js/spectragram.min.js\"></script>
        <script src=\"/js/scrollReveal.min.js\"></script>
        <script src=\"/js/isotope.min.js\"></script>
        <script src=\"/js/twitterFetcher_v10_min.js\"></script>
        <script src=\"/js/lightbox.min.js\"></script>
        <script src=\"/js/jquery.countdown.min.js\"></script>
        <script src=\"/js/scripts.js\"></script>
        ";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["javascript"]) ? $context["javascript"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
            // line 55
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["js"]) ? $context["js"] : null), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "./common/footer.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 57,  78 => 55,  74 => 54,  21 => 2,  19 => 1,);
    }
}
