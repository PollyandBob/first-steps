<?php

/* WebProfilerBundle:Profiler:toolbar_item.html.twig */
class __TwigTemplate_a8693d919dc567ebd23b9873f9aaf9df extends Twig_Template
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
        if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
            // line 2
            echo "    ";
            ob_start();
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "html", null, true);
            echo "</a>
    ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 6
        echo "<div class=\"sf-toolbar-block\">
     <div class=\"sf-toolbar-icon\">";
        // line 7
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "")) : ("")), "html", null, true);
        echo "</div>
     <div class=\"sf-toolbar-info\">";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  21 => 2,  276 => 248,  262 => 236,  260 => 235,  257 => 234,  24 => 3,  19 => 1,  407 => 145,  401 => 144,  396 => 141,  384 => 136,  380 => 134,  371 => 132,  367 => 131,  364 => 130,  350 => 125,  336 => 115,  334 => 114,  329 => 113,  249 => 84,  241 => 82,  239 => 81,  230 => 78,  223 => 75,  213 => 71,  179 => 66,  168 => 60,  146 => 58,  142 => 56,  141 => 51,  114 => 42,  78 => 21,  157 => 56,  136 => 44,  133 => 43,  85 => 25,  45 => 8,  57 => 11,  34 => 5,  31 => 6,  788 => 468,  785 => 467,  774 => 465,  770 => 464,  766 => 462,  753 => 461,  727 => 456,  724 => 455,  705 => 453,  688 => 452,  684 => 450,  680 => 449,  676 => 448,  672 => 447,  668 => 446,  664 => 445,  661 => 444,  659 => 443,  642 => 442,  631 => 441,  616 => 436,  611 => 434,  607 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  181 => 87,  173 => 85,  166 => 82,  161 => 80,  156 => 77,  150 => 75,  144 => 53,  126 => 45,  112 => 52,  109 => 41,  28 => 3,  205 => 71,  178 => 66,  176 => 65,  170 => 61,  160 => 59,  132 => 47,  102 => 30,  90 => 41,  81 => 22,  204 => 70,  191 => 70,  185 => 68,  167 => 64,  164 => 63,  153 => 54,  147 => 55,  138 => 45,  134 => 54,  127 => 52,  122 => 43,  95 => 34,  91 => 35,  87 => 40,  84 => 28,  49 => 17,  27 => 4,  77 => 24,  71 => 17,  68 => 30,  62 => 25,  58 => 25,  56 => 13,  44 => 10,  388 => 138,  385 => 159,  379 => 158,  377 => 157,  370 => 156,  366 => 155,  362 => 129,  360 => 152,  357 => 127,  354 => 126,  352 => 149,  344 => 147,  342 => 146,  339 => 145,  330 => 140,  327 => 139,  320 => 109,  314 => 105,  311 => 104,  308 => 103,  306 => 102,  301 => 99,  292 => 94,  289 => 93,  287 => 92,  282 => 89,  280 => 114,  275 => 111,  273 => 110,  268 => 88,  264 => 86,  258 => 103,  254 => 101,  247 => 97,  240 => 219,  234 => 79,  231 => 88,  226 => 86,  221 => 83,  215 => 79,  212 => 78,  209 => 73,  207 => 95,  202 => 69,  196 => 67,  193 => 68,  190 => 89,  188 => 67,  183 => 63,  177 => 59,  174 => 67,  171 => 62,  169 => 56,  162 => 57,  143 => 48,  130 => 42,  107 => 36,  103 => 37,  97 => 23,  88 => 20,  82 => 19,  79 => 35,  76 => 34,  73 => 19,  67 => 15,  61 => 13,  47 => 9,  36 => 7,  70 => 20,  63 => 16,  46 => 7,  39 => 9,  22 => 2,  163 => 59,  155 => 58,  152 => 49,  149 => 48,  145 => 57,  139 => 55,  123 => 35,  120 => 50,  115 => 44,  111 => 37,  108 => 31,  106 => 36,  101 => 32,  98 => 31,  96 => 31,  92 => 33,  80 => 32,  74 => 21,  64 => 14,  55 => 24,  52 => 18,  50 => 10,  43 => 9,  41 => 8,  37 => 8,  32 => 4,  29 => 3,  356 => 163,  347 => 160,  343 => 159,  340 => 117,  335 => 157,  333 => 141,  325 => 112,  323 => 149,  316 => 145,  309 => 141,  302 => 137,  295 => 95,  288 => 129,  281 => 125,  274 => 121,  259 => 109,  252 => 138,  245 => 96,  238 => 218,  228 => 87,  225 => 88,  217 => 72,  214 => 82,  211 => 81,  206 => 78,  203 => 77,  198 => 69,  192 => 72,  184 => 70,  182 => 64,  172 => 64,  165 => 58,  158 => 56,  154 => 48,  151 => 53,  148 => 74,  140 => 42,  135 => 47,  131 => 51,  128 => 50,  125 => 44,  119 => 42,  116 => 35,  113 => 40,  110 => 42,  104 => 35,  100 => 24,  93 => 28,  89 => 26,  86 => 29,  83 => 28,  75 => 23,  72 => 22,  69 => 20,  66 => 20,  60 => 13,  54 => 19,  51 => 10,  48 => 8,  42 => 15,  38 => 6,  35 => 8,  33 => 6,  30 => 3,);
    }
}
