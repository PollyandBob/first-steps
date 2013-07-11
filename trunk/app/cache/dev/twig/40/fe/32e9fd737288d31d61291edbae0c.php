<?php

/* ::footV2.html.twig */
class __TwigTemplate_40fe32e9fd737288d31d61291edbae0c extends Twig_Template
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
        echo "
    <footer class=\"main\" data-role=\"footer\">
        <div class=\"container clearfix\">
            <nav class=\"main clearfix\">
                <ul>
                    <li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_frontend_about"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("main.about_us"), "html", null, true);
        echo "</a></li>
                    <li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_frontend_jobs"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("main.jobs"), "html", null, true);
        echo "</a></li>
                    <li><a href=";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_frontend_advertising"), "html", null, true);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("main.advertising"), "html", null, true);
        echo "</a></li>
                    <li><a href=";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_frontend_terms"), "html", null, true);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("main.terms"), "html", null, true);
        echo "</a></li>
                    <li><a href=";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_frontend_privacy"), "html", null, true);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("main.privacy"), "html", null, true);
        echo "</a></li>
                    <li class=\"last\"><a href=";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_frontend_imprint"), "html", null, true);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("main.imprint"), "html", null, true);
        echo "</a></li>
                </ul>
            </nav>
            <div class=\"social-lang\">
                <ul>
                    <li class=\"soc_btn fb\"><a href=\"#\"><i>f</i></a></li>
                    <li class=\"soc_btn tt\"><a href=\"#\"><i>t</i></a></li>                                    
                    <li id=\"lang-menu\" class=\"lang\">                
                        <ul class=\"clearfix\">
                            <li id=\"lang-menu-chosen\">
                                <a href=\"#\" id=\"choose-lang\"><strong>
                                            ";
        // line 23
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale") == "pl")) {
            // line 24
            echo "                                                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontend.polski"), "html", null, true);
            echo "
                                            ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale") == "en")) {
            // line 26
            echo "                                                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontend.english"), "html", null, true);
            echo "
                                            ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale") == "de")) {
            // line 28
            echo "                                                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontend.deutsch"), "html", null, true);
            echo "
                                            ";
        }
        // line 30
        echo "                                                
                                            </strong>                                        
                                    </a>
                                    <i class=\"icon-caret-down\"></i>
                                    <i class=\"icon-caret-up\"></i>
                            </li>
                        </ul>
                    </li>                                    
                </ul>
                    
                <div id=\"lang-menu-wrapper\">
                    <ul>
                        ";
        // line 42
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale") != "en")) {
            // line 43
            echo "                            <li class=\"en-flag\">
                                <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_chooselang", array("locale" => "en")), "html", null, true);
            echo "\"><strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontend.english"), "html", null, true);
            echo "</strong></a>
                            </li>
                        ";
        }
        // line 47
        echo "                            
                        ";
        // line 48
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale") != "de")) {
            echo "                            
                        <li class=\"de-flag\">
                            <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_chooselang", array("locale" => "de")), "html", null, true);
            echo "\"><strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontend.deutsch"), "html", null, true);
            echo "</strong></a>
                        </li>
                        ";
        }
        // line 53
        echo "                        
                        ";
        // line 54
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale") != "pl")) {
            echo "                        
                        <li class=\"pl-flag\">
                            <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_chooselang", array("locale" => "pl")), "html", null, true);
            echo "\"><strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontend.polski"), "html", null, true);
            echo "</strong></a>
                        </li>
                        ";
        }
        // line 58
        echo "                        
                        
                    </ul>
                </div>                    
                    
            </div>
        </div>
        <!-- container -->
    </footer>
    <!-- main -->
    
    ";
        // line 69
        if ((!$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"))) {
            // line 70
            echo "    <div id=\"signup-wrapper\" class=\"loginform\">
        
        ";
            // line 72
            echo $this->env->getExtension('actions')->renderAction("UserBundle:Registration:register", array(), array());
            // line 73
            echo "        
    </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "::footV2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 73,  151 => 58,  143 => 56,  138 => 54,  135 => 53,  86 => 28,  80 => 26,  74 => 24,  44 => 10,  38 => 9,  45 => 23,  27 => 8,  47 => 12,  26 => 7,  112 => 51,  106 => 42,  95 => 44,  90 => 42,  83 => 38,  73 => 31,  64 => 27,  61 => 26,  58 => 25,  37 => 10,  32 => 8,  23 => 4,  24 => 4,  22 => 2,  19 => 2,  444 => 170,  438 => 168,  435 => 167,  432 => 166,  429 => 165,  424 => 159,  421 => 158,  416 => 155,  409 => 152,  405 => 150,  402 => 149,  399 => 148,  392 => 144,  388 => 142,  385 => 141,  382 => 140,  379 => 139,  374 => 136,  367 => 133,  363 => 131,  360 => 130,  357 => 129,  350 => 125,  346 => 123,  343 => 122,  340 => 121,  337 => 120,  332 => 117,  329 => 116,  324 => 161,  322 => 158,  317 => 139,  314 => 138,  312 => 120,  309 => 119,  306 => 116,  303 => 115,  296 => 112,  293 => 111,  287 => 106,  283 => 105,  274 => 100,  261 => 90,  257 => 88,  255 => 87,  250 => 84,  234 => 71,  225 => 65,  216 => 59,  204 => 50,  201 => 49,  195 => 48,  190 => 46,  186 => 45,  182 => 44,  178 => 43,  174 => 42,  170 => 72,  166 => 70,  162 => 39,  154 => 37,  146 => 32,  140 => 29,  134 => 26,  130 => 25,  127 => 50,  122 => 48,  116 => 21,  110 => 19,  108 => 43,  104 => 17,  100 => 46,  92 => 30,  87 => 13,  84 => 12,  78 => 171,  76 => 165,  70 => 115,  67 => 114,  65 => 111,  56 => 12,  51 => 21,  48 => 24,  30 => 6,  319 => 157,  311 => 135,  305 => 134,  299 => 113,  291 => 130,  280 => 104,  276 => 121,  269 => 119,  265 => 117,  262 => 116,  252 => 112,  245 => 108,  239 => 107,  228 => 103,  220 => 97,  214 => 95,  212 => 94,  206 => 51,  200 => 90,  196 => 88,  191 => 87,  189 => 86,  177 => 78,  168 => 73,  164 => 69,  158 => 38,  155 => 67,  132 => 46,  126 => 44,  119 => 47,  113 => 40,  111 => 44,  96 => 15,  85 => 39,  81 => 18,  77 => 17,  72 => 23,  68 => 29,  63 => 13,  60 => 12,  54 => 16,  50 => 11,  46 => 12,  42 => 11,  39 => 9,  34 => 7,  31 => 3,);
    }
}
