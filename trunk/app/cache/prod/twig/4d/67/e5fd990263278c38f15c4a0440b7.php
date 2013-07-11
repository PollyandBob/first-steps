<?php

/* FenchyFrontendBundle::layoutV2.html.twig */
class __TwigTemplate_4d67e5fd990263278c38f15c4a0440b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::baseV2.html.twig");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseV2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "FenchyFrontendBundle::layoutV2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 138,  311 => 135,  305 => 134,  299 => 133,  291 => 130,  280 => 122,  276 => 121,  269 => 119,  265 => 117,  262 => 116,  252 => 112,  245 => 108,  239 => 107,  228 => 103,  220 => 97,  214 => 95,  212 => 94,  206 => 93,  200 => 90,  196 => 88,  191 => 87,  189 => 86,  177 => 78,  168 => 73,  164 => 72,  158 => 68,  155 => 67,  132 => 46,  126 => 44,  119 => 42,  113 => 40,  111 => 39,  96 => 27,  85 => 19,  81 => 18,  77 => 17,  72 => 15,  68 => 14,  63 => 13,  60 => 12,  54 => 9,  50 => 8,  46 => 7,  42 => 6,  39 => 5,  34 => 4,  31 => 3,);
    }
}
