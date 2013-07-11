<?php

/* ::filterForm.html.twig */
class __TwigTemplate_603f4b992716fc9f8e27fd8ff315b234 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::fieldsForm.html.twig");

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'hidden_row' => array($this, 'block_hidden_row'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::fieldsForm.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "    <ul class=\"filter-element\">
        <li>";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
        echo "</li>
        <li>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "</li>
    </ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 12
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 15
        echo "    <input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ((!twig_test_empty((isset($context["value"]) ? $context["value"] : null)))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" ";
        }
        echo "/>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 19
    public function block_hidden_row($context, array $blocks = array())
    {
        // line 20
        ob_start();
        // line 21
        echo "    <div style=\"display: none\">
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "::filterForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 22,  58 => 15,  42 => 7,  738 => 228,  732 => 226,  729 => 225,  726 => 224,  715 => 223,  702 => 218,  700 => 217,  697 => 216,  693 => 214,  690 => 213,  686 => 211,  680 => 208,  677 => 207,  671 => 204,  666 => 203,  664 => 202,  660 => 201,  657 => 200,  653 => 199,  647 => 196,  644 => 195,  638 => 192,  633 => 191,  631 => 190,  625 => 189,  618 => 185,  613 => 184,  605 => 179,  601 => 178,  598 => 177,  592 => 174,  589 => 173,  583 => 170,  578 => 169,  576 => 168,  569 => 167,  567 => 166,  563 => 165,  556 => 161,  550 => 160,  546 => 159,  542 => 158,  534 => 153,  528 => 150,  522 => 149,  518 => 148,  511 => 144,  504 => 140,  498 => 139,  494 => 138,  490 => 137,  486 => 136,  479 => 132,  473 => 129,  467 => 128,  463 => 127,  456 => 123,  446 => 116,  436 => 109,  430 => 106,  426 => 105,  418 => 100,  413 => 99,  407 => 97,  403 => 95,  401 => 94,  397 => 93,  391 => 90,  385 => 87,  381 => 86,  374 => 82,  369 => 81,  363 => 79,  359 => 77,  357 => 76,  353 => 75,  349 => 74,  343 => 71,  339 => 70,  333 => 66,  327 => 64,  323 => 62,  321 => 61,  317 => 60,  313 => 58,  291 => 57,  263 => 52,  260 => 51,  257 => 50,  251 => 48,  243 => 46,  240 => 45,  237 => 44,  234 => 43,  221 => 42,  204 => 38,  201 => 37,  199 => 36,  193 => 34,  181 => 33,  165 => 30,  162 => 29,  153 => 27,  150 => 26,  147 => 25,  144 => 24,  133 => 21,  130 => 20,  127 => 19,  121 => 17,  86 => 12,  77 => 20,  65 => 6,  60 => 5,  51 => 2,  38 => 6,  28 => 56,  22 => 32,  19 => 15,  272 => 54,  269 => 53,  266 => 86,  261 => 80,  258 => 79,  254 => 49,  248 => 47,  245 => 73,  242 => 72,  235 => 69,  229 => 67,  226 => 66,  223 => 65,  220 => 64,  213 => 82,  211 => 79,  207 => 39,  205 => 71,  202 => 70,  197 => 63,  194 => 62,  190 => 60,  187 => 59,  178 => 53,  174 => 52,  171 => 51,  159 => 42,  140 => 29,  136 => 22,  132 => 27,  128 => 26,  124 => 18,  119 => 23,  113 => 20,  106 => 18,  100 => 16,  96 => 15,  92 => 14,  88 => 13,  74 => 19,  69 => 62,  66 => 61,  64 => 58,  55 => 14,  53 => 13,  50 => 12,  47 => 18,  45 => 11,  41 => 10,  31 => 220,  29 => 1,  117 => 29,  109 => 16,  107 => 29,  101 => 26,  97 => 25,  93 => 24,  83 => 12,  80 => 11,  73 => 15,  68 => 7,  62 => 10,  57 => 4,  54 => 3,  48 => 6,  44 => 5,  35 => 5,  32 => 2,  239 => 71,  225 => 86,  216 => 83,  212 => 82,  209 => 81,  200 => 64,  196 => 35,  191 => 76,  188 => 75,  184 => 58,  169 => 61,  160 => 59,  156 => 28,  148 => 34,  141 => 23,  134 => 45,  116 => 31,  110 => 29,  104 => 27,  102 => 26,  98 => 25,  89 => 13,  85 => 22,  79 => 21,  75 => 20,  71 => 8,  67 => 18,  63 => 17,  59 => 16,  56 => 15,  52 => 14,  40 => 4,  33 => 4,  30 => 3,  25 => 41,);
    }
}
