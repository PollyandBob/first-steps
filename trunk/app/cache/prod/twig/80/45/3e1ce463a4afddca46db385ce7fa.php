<?php

/* FenchyNoticeBundle::layoutV2.html.twig */
class __TwigTemplate_80453e1ce463a4afddca46db385ce7fa extends Twig_Template
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
        return "FenchyNoticeBundle::layoutV2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  37 => 7,  32 => 4,  29 => 3,  288 => 121,  286 => 120,  284 => 119,  280 => 116,  278 => 115,  275 => 114,  273 => 113,  269 => 111,  267 => 110,  261 => 106,  259 => 105,  256 => 104,  246 => 95,  240 => 93,  233 => 91,  227 => 89,  225 => 88,  208 => 74,  202 => 71,  198 => 70,  174 => 49,  170 => 48,  166 => 47,  162 => 46,  154 => 41,  150 => 40,  146 => 39,  142 => 38,  137 => 36,  133 => 35,  129 => 34,  125 => 33,  116 => 27,  112 => 26,  108 => 25,  104 => 24,  100 => 23,  96 => 22,  91 => 21,  89 => 20,  85 => 19,  81 => 18,  77 => 17,  72 => 16,  69 => 15,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  47 => 8,  43 => 7,  38 => 6,  33 => 4,  30 => 3,);
    }
}
