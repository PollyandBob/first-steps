<?php

/* FenchyRegularUserBundle::layoutV2.html.twig */
class __TwigTemplate_c51f04e40e8bb7ebffd92bdbd8b13ac2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::baseV2.html.twig");

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'foot' => array($this, 'block_foot'),
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

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->env->loadTemplate("::headerV2.html.twig")->display($context);
    }

    // line 7
    public function block_foot($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->env->loadTemplate("::footV2.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FenchyRegularUserBundle::layoutV2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  37 => 7,  32 => 4,  29 => 3,  297 => 138,  295 => 137,  292 => 136,  290 => 135,  285 => 132,  283 => 131,  273 => 125,  271 => 124,  268 => 123,  258 => 114,  252 => 112,  245 => 110,  239 => 108,  237 => 107,  223 => 96,  185 => 61,  179 => 58,  175 => 57,  171 => 56,  167 => 55,  161 => 52,  157 => 51,  152 => 50,  148 => 48,  142 => 46,  140 => 45,  136 => 44,  132 => 43,  128 => 42,  108 => 25,  104 => 24,  100 => 23,  96 => 22,  92 => 21,  88 => 20,  85 => 19,  83 => 18,  79 => 17,  74 => 16,  71 => 15,  65 => 12,  61 => 11,  57 => 10,  53 => 9,  49 => 8,  45 => 7,  41 => 6,  38 => 5,  33 => 4,  30 => 3,);
    }
}
