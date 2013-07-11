<?php

/* FenchyRegularUserBundle:Partials:userProfileRightV2.html.twig */
class __TwigTemplate_8e7a0ce3382c3108b854002c6e0dd28e extends Twig_Template
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
        // line 2
        echo "<div class=\"inner-content\">
    <blockquote class=\"intro\">
        <i class=\"icon-quote-left\"></i>
        <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["displayUser"]) ? $context["displayUser"] : null), "regularuser"), "aboutMe"), "html", null, true);
        echo "</p>
        <i class=\"icon-quote-right\"></i>
    </blockquote>
    ";
        // line 8
        $this->env->loadTemplate("FenchyRegularUserBundle:Partials:userReviewsV2.html.twig")->display($context);
        echo "        
</div>
";
    }

    public function getTemplateName()
    {
        return "FenchyRegularUserBundle:Partials:userProfileRightV2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 88,  207 => 85,  203 => 84,  200 => 83,  196 => 81,  190 => 79,  188 => 78,  173 => 69,  169 => 68,  166 => 67,  159 => 64,  151 => 62,  149 => 61,  144 => 60,  137 => 57,  135 => 56,  126 => 50,  122 => 48,  118 => 46,  116 => 45,  109 => 43,  105 => 41,  99 => 39,  97 => 38,  82 => 29,  78 => 28,  73 => 26,  55 => 17,  50 => 15,  42 => 10,  36 => 7,  27 => 4,  22 => 2,  123 => 47,  119 => 46,  112 => 44,  102 => 38,  98 => 36,  80 => 27,  77 => 26,  67 => 21,  62 => 19,  59 => 18,  47 => 13,  35 => 10,  24 => 5,  19 => 2,  40 => 8,  37 => 7,  32 => 6,  29 => 7,  297 => 138,  295 => 137,  292 => 136,  290 => 135,  285 => 132,  283 => 131,  273 => 125,  271 => 124,  268 => 123,  258 => 114,  252 => 112,  245 => 110,  239 => 108,  237 => 107,  223 => 96,  185 => 61,  179 => 72,  175 => 57,  171 => 56,  167 => 55,  161 => 52,  157 => 51,  152 => 50,  148 => 48,  142 => 46,  140 => 45,  136 => 44,  132 => 43,  128 => 42,  108 => 41,  104 => 24,  100 => 23,  96 => 35,  92 => 33,  88 => 32,  85 => 29,  83 => 18,  79 => 17,  74 => 25,  71 => 15,  65 => 21,  61 => 11,  57 => 17,  53 => 15,  49 => 8,  45 => 12,  41 => 11,  38 => 5,  33 => 4,  30 => 8,);
    }
}
