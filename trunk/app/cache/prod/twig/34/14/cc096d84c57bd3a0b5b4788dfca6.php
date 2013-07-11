<?php

/* ::baseAdmin.html.twig */
class __TwigTemplate_3414cc096d84c57bd3a0b5b4788dfca6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'plugins' => array($this, 'block_plugins'),
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'positive_msg' => array($this, 'block_positive_msg'),
            'negative_msg' => array($this, 'block_negative_msg'),
            'content' => array($this, 'block_content'),
            'foot' => array($this, 'block_foot'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["helper"] = $this->env->loadTemplate("::helpers.html.twig");
        // line 2
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>\t\t\t\t<html lang=\"en\" class=\"ie ie6 lte9 lte8 lte7\">\t<![endif]-->
<!--[if IE 7]>\t\t\t\t\t<html lang=\"en\" class=\"ie ie7 lte9 lte8 lte7\">\t<![endif]-->
<!--[if IE 8]>\t\t\t\t\t<html lang=\"en\" class=\"ie ie8 lte9 lte8\">\t\t<![endif]-->
<!--[if IE 9]>\t\t\t\t\t<html lang=\"en\" class=\"ie ie9 lte9\">\t\t\t<![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->\t<html lang=\"en\">\t\t\t\t\t\t\t\t<!--<![endif]-->
        <head>
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
            <link rel=\"icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
            ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 50
        echo "                
            ";
        // line 51
        $this->displayBlock('plugins', $context, $blocks);
        // line 53
        echo "            <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
            
    </head>
    <body>
        <div id=\"page\">            
                ";
        // line 58
        $this->displayBlock('header', $context, $blocks);
        // line 61
        echo "                <div id=\"page-spacer\"></div>
                ";
        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 86
        echo "            ";
        $this->displayBlock('foot', $context, $blocks);
        // line 89
        echo "        </div>
    </body>
</html>";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "                <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->absolute($this->env->getExtension('assets')->getAssetUrl("css/frontend/font-awesome.css")), "html", null, true);
        echo "\" type=\"text/css\" />                
                <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->absolute($this->env->getExtension('assets')->getAssetUrl("css/app/base-v2.css")), "html", null, true);
        echo "\" type=\"text/css\" />
                <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/app/header-v2.css"), "html", null, true);
        echo "\" type=\"text/css\" />
                <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/app/foot-v2.css"), "html", null, true);
        echo "\" type=\"text/css\" />
                <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fancybox/jquery.fancybox-1.3.4.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            ";
    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        // line 19
        echo "                ";
        echo "                
                <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
                <!--[if lt IE 9]>
                    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->absolute($this->env->getExtension('assets')->getAssetUrl("js/respond.min.js")), "html", null, true);
        echo "\"></script>\t\t
                <![endif]-->
                <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jquery-ui-1.9.1.custom/js/jquery-ui-1.9.1.custom.min.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jquery-blockui/jquery.blockui.js"), "html", null, true);
        echo "\" ></script>
                <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->absolute($this->env->getExtension('assets')->getAssetUrl("js/footer-lang-dialog2.js")), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fancybox/jquery.fancybox-1.3.4.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fancybox/jquery.mousewheel-3.0.4.pack.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\">
                \$(document).ready(function() {
                    \$(\"a#foot-terms\").fancybox({
                        type: 'iframe',
                        href: '";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_frontend_terms_popup"), "html", null, true);
        echo "',
                        width: 900,
                        height: 550,
                        centerOnScroll: true
                    });
                        
                    \$(\"a#foot-privacy\").fancybox({
                        type: 'iframe',
                        href: '";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_frontend_privacy_popup"), "html", null, true);
        echo "',
                        width: 900,
                        height: 550,
                        centerOnScroll: true
                    });                    
                });
                </script>                
            ";
    }

    // line 51
    public function block_plugins($context, array $blocks = array())
    {
        // line 52
        echo "            ";
    }

    // line 53
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("main.title_suffix"), "html", null, true);
    }

    // line 58
    public function block_header($context, array $blocks = array())
    {
        // line 59
        echo "                    ";
        $this->env->loadTemplate("::headerV2.html.twig")->display($context);
        // line 60
        echo "                ";
    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
        // line 63
        echo "                <div id=\"page-wrapper\" class=\"container\">                    
                    ";
        // line 64
        $this->displayBlock('positive_msg', $context, $blocks);
        // line 70
        echo "
                    ";
        // line 71
        $this->displayBlock('negative_msg', $context, $blocks);
        // line 77
        echo "

                    ";
        // line 79
        $this->displayBlock('content', $context, $blocks);
        // line 82
        echo "                
                    <div class=\"footer-push\"></div>
                </div>
            ";
    }

    // line 64
    public function block_positive_msg($context, array $blocks = array())
    {
        // line 65
        echo "                        ";
        $context["flash"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flash", array(0 => "positive"), "method");
        // line 66
        echo "                        ";
        if ((twig_length_filter($this->env, (isset($context["flash"]) ? $context["flash"] : null)) > 0)) {
            // line 67
            echo "                            <span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["flash"]) ? $context["flash"] : null)), "html", null, true);
            echo "</span>
                        ";
        }
        // line 69
        echo "                    ";
    }

    // line 71
    public function block_negative_msg($context, array $blocks = array())
    {
        // line 72
        echo "                        ";
        $context["flash"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flash", array(0 => "negative"), "method");
        // line 73
        echo "                        ";
        if ((twig_length_filter($this->env, (isset($context["flash"]) ? $context["flash"] : null)) > 0)) {
            // line 74
            echo "                            <span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["flash"]) ? $context["flash"] : null)), "html", null, true);
            echo "</span>
                        ";
        }
        // line 76
        echo "                    ";
    }

    // line 79
    public function block_content($context, array $blocks = array())
    {
        // line 80
        echo "
                    ";
    }

    // line 86
    public function block_foot($context, array $blocks = array())
    {
        // line 87
        echo "                ";
        $this->env->loadTemplate("::footV2.html.twig")->display($context);
        // line 88
        echo "            ";
    }

    public function getTemplateName()
    {
        return "::baseAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 88,  269 => 87,  266 => 86,  261 => 80,  258 => 79,  254 => 76,  248 => 74,  245 => 73,  242 => 72,  235 => 69,  229 => 67,  226 => 66,  223 => 65,  220 => 64,  213 => 82,  211 => 79,  207 => 77,  205 => 71,  202 => 70,  197 => 63,  194 => 62,  190 => 60,  187 => 59,  178 => 53,  174 => 52,  171 => 51,  159 => 42,  140 => 29,  136 => 28,  132 => 27,  128 => 26,  124 => 25,  119 => 23,  113 => 20,  106 => 18,  100 => 16,  96 => 15,  92 => 14,  88 => 13,  74 => 89,  69 => 62,  66 => 61,  64 => 58,  55 => 53,  53 => 51,  50 => 50,  47 => 18,  45 => 11,  41 => 10,  31 => 2,  29 => 1,  117 => 29,  109 => 19,  107 => 29,  101 => 26,  97 => 25,  93 => 24,  83 => 12,  80 => 11,  73 => 15,  68 => 13,  62 => 10,  57 => 9,  54 => 8,  48 => 6,  44 => 5,  35 => 3,  32 => 2,  239 => 71,  225 => 86,  216 => 83,  212 => 82,  209 => 81,  200 => 64,  196 => 78,  191 => 76,  188 => 75,  184 => 58,  169 => 61,  160 => 59,  156 => 58,  148 => 34,  141 => 49,  134 => 45,  116 => 31,  110 => 29,  104 => 27,  102 => 26,  98 => 25,  89 => 23,  85 => 22,  79 => 21,  75 => 20,  71 => 86,  67 => 18,  63 => 17,  59 => 16,  56 => 15,  52 => 14,  40 => 4,  33 => 4,  30 => 3,  25 => 2,);
    }
}
