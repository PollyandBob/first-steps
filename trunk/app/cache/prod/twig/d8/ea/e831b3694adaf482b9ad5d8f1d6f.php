<?php

/* ::headerV2.html.twig */
class __TwigTemplate_d8eae831b3694adaf482b9ad5d8f1d6f extends Twig_Template
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
        echo "    <header class=\"main\" data-role=\"header\">
        <div id=\"top-menu-container\" class=\"container clearfix\">
            <h1><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_notice_indexv2"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->absolute($this->env->getExtension('assets')->getAssetUrl("images/site/fenchy_logo.png")), "html", null, true);
        echo "\" alt=\"Fenchy\"/></a></h1>
            <div id=\"user-account-nav\" class=\"pull-right\">
                ";
        // line 6
        if ((!$this->env->getExtension('security')->isGranted("ROLE_USER"))) {
            // line 7
            echo "                <ul id=\"user-account-login\">                    
                    <li id=\"user-account-login-login\">
                        <a href=\"#\">
                            <span>";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontend.sign_in"), "html", null, true);
            echo "
                                <i class=\"icon-caret-down\"></i>
                                <i class=\"icon-caret-up\"></i>
                            </span>
                            <!--[if IE 8]>
                                <div class=\"before\"></div>
                                <div class=\"after\"></div>
                            <![endif]-->
                        </a>                        
                    </li>
                    <li id=\"user-account-login-signup\">
                        <a href=\"#\"><span>";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontend.sign_up"), "html", null, true);
            echo "</span></a>
                    </li>
                </ul>
                ";
        } else {
            // line 25
            echo "                    ";
            echo $this->env->getExtension('actions')->renderAction("UserBundle:Widgets:userPanel", array(), array());
            // line 26
            echo "                ";
        }
        // line 27
        echo "                <aside>
                    <div class=\"button green-button create-listing\">
                        <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_notice_create1"), "html", null, true);
        echo "\" class=\"wrapper\">
                            <i class=\"icon-list-alt\"></i>
                            <strong>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontend.create_listing"), "html", null, true);
        echo "</strong>
                        </a>
                    </div>
                </aside>                
            </div>
                    
                    
            ";
        // line 38
        if ((!$this->env->getExtension('security')->isGranted("ROLE_USER"))) {
            // line 39
            echo "                <div id=\"login-wrapper\" class=\"loginform\">
                     <a href=\"#\" class=\"sign-btn fb_btn clearfix login-with-facebook\">
                        <span><i>facebook</i></span>
                        <span><strong>";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontend.sign_in_facebook"), "html", null, true);
            echo "</strong></span>
                    </a>
                    <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("connect_twitter"), "html", null, true);
            echo "\" class=\"sign-btn tt_btn clearfix login-with-twitter\">
                        <span><i>twitter</i></span>
                        <span><strong>";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontend.sign_in_twitter"), "html", null, true);
            echo "</strong></span>
                    </a>
                    <p><strong>or</strong></p>
                    ";
            // line 49
            echo $this->env->getExtension('actions')->renderAction("UserBundle:Security:login", array(), array());
            // line 50
            echo "                </div>                    
            ";
        }
        // line 51
        echo "      
        </div>
        <!--[if IE 8]>
            <div class=\"after\"></div>
        <![endif]-->
    </header>
    <!-- main -->
";
    }

    public function getTemplateName()
    {
        return "::headerV2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 51,  106 => 49,  95 => 44,  90 => 42,  83 => 38,  73 => 31,  64 => 27,  61 => 26,  58 => 25,  37 => 10,  32 => 7,  23 => 4,  24 => 4,  22 => 2,  19 => 2,  444 => 170,  438 => 168,  435 => 167,  432 => 166,  429 => 165,  424 => 159,  421 => 158,  416 => 155,  409 => 152,  405 => 150,  402 => 149,  399 => 148,  392 => 144,  388 => 142,  385 => 141,  382 => 140,  379 => 139,  374 => 136,  367 => 133,  363 => 131,  360 => 130,  357 => 129,  350 => 125,  346 => 123,  343 => 122,  340 => 121,  337 => 120,  332 => 117,  329 => 116,  324 => 161,  322 => 158,  317 => 139,  314 => 138,  312 => 120,  309 => 119,  306 => 116,  303 => 115,  296 => 112,  293 => 111,  287 => 106,  283 => 105,  274 => 100,  261 => 90,  257 => 88,  255 => 87,  250 => 84,  234 => 71,  225 => 65,  216 => 59,  204 => 50,  201 => 49,  195 => 48,  190 => 46,  186 => 45,  182 => 44,  178 => 43,  174 => 42,  170 => 41,  166 => 40,  162 => 39,  154 => 37,  146 => 32,  140 => 29,  134 => 26,  130 => 25,  127 => 24,  122 => 22,  116 => 21,  110 => 19,  108 => 50,  104 => 17,  100 => 46,  92 => 14,  87 => 13,  84 => 12,  78 => 171,  76 => 165,  70 => 115,  67 => 114,  65 => 111,  56 => 106,  51 => 21,  48 => 24,  30 => 6,  319 => 157,  311 => 135,  305 => 134,  299 => 113,  291 => 130,  280 => 104,  276 => 121,  269 => 119,  265 => 117,  262 => 116,  252 => 112,  245 => 108,  239 => 107,  228 => 103,  220 => 97,  214 => 95,  212 => 94,  206 => 51,  200 => 90,  196 => 88,  191 => 87,  189 => 86,  177 => 78,  168 => 73,  164 => 72,  158 => 38,  155 => 67,  132 => 46,  126 => 44,  119 => 42,  113 => 40,  111 => 39,  96 => 15,  85 => 39,  81 => 18,  77 => 17,  72 => 163,  68 => 29,  63 => 13,  60 => 12,  54 => 104,  50 => 8,  46 => 12,  42 => 11,  39 => 5,  34 => 4,  31 => 3,);
    }
}
