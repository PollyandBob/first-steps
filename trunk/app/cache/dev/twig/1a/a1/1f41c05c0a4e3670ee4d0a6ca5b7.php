<?php

/* ::baseV2.html.twig */
class __TwigTemplate_1aa11f41c05c0a4e3670ee4d0a6ca5b7 extends Twig_Template
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
            'tagline_content' => array($this, 'block_tagline_content'),
            'positive_msg' => array($this, 'block_positive_msg'),
            'negative_msg' => array($this, 'block_negative_msg'),
            'content' => array($this, 'block_content'),
            'foot' => array($this, 'block_foot'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>\t\t\t\t<html lang=\"en\" class=\"ie ie6 lte9 lte8 lte7\">\t<![endif]-->
<!--[if IE 7]>\t\t\t\t\t<html lang=\"en\" class=\"ie ie7 lte9 lte8 lte7\">\t<![endif]-->
<!--[if IE 8]>\t\t\t\t\t<html lang=\"en\" class=\"ie ie8 lte9 lte8\">\t\t<![endif]-->
<!--[if IE 9]>\t\t\t\t\t<html lang=\"en\" class=\"ie ie9 lte9\">\t\t\t<![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->\t<html lang=\"en\">\t\t\t\t\t\t\t\t<!--<![endif]-->
        <head>
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
            <meta charset=\"UTF-8\">
            <link rel=\"icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
            ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 103
        echo "                
            ";
        // line 104
        $this->displayBlock('plugins', $context, $blocks);
        // line 106
        echo "            <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
            
    </head>
    <body>
        <div id=\"page\">            
                ";
        // line 111
        $this->displayBlock('header', $context, $blocks);
        // line 114
        echo "                <div id=\"page-spacer\"></div>
                ";
        // line 115
        $this->displayBlock('body', $context, $blocks);
        // line 163
        echo "                   <div class=\"footer-push\"></div>
               </div>
            ";
        // line 165
        $this->displayBlock('foot', $context, $blocks);
        // line 171
        echo "        </div>
    </body>
</html>";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "                <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->absolute($this->env->getExtension('assets')->getAssetUrl("css/frontend/font-awesome.css")), "html", null, true);
        echo "\" type=\"text/css\" />                
                <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->absolute($this->env->getExtension('assets')->getAssetUrl("css/app/base-v2.css")), "html", null, true);
        echo "\" type=\"text/css\" />
                <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/app/header-v2.css"), "html", null, true);
        echo "\" type=\"text/css\" />
                <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/app/foot-v2.css"), "html", null, true);
        echo "\" type=\"text/css\" />
                <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fancybox/jquery.fancybox-1.3.4.css"), "html", null, true);
        echo "\" type=\"text/css\" /> 
                ";
        // line 18
        if ((!$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"))) {
            // line 19
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/regular_user/registration/login-v2.css"), "html", null, true);
            echo "\" type=\"text/css\" />
                ";
        } else {
            // line 21
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/regular_user/profile/userprofile-v2.css"), "html", null, true);
            echo "\" type=\"text/css\" />
                ";
        }
        // line 22
        echo "  
            ";
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        // line 25
        echo "                ";
        echo "                
                <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
                <!--[if lt IE 9]>
                    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->absolute($this->env->getExtension('assets')->getAssetUrl("js/respond.min.js")), "html", null, true);
        echo "\"></script>\t
                <![endif]-->
                <!--[if lte IE 9]>
                    <script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.placeholder.min.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\">                
                        \$(document).ready(function(){\$('input, textarea').placeholder();});
                    </script>
                <![endif]-->
                <script type=\"text/javascript\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jquery-ui-1.9.1.custom/js/jquery-ui-1.9.1.custom.min.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jquery-blockui/jquery.blockui.js"), "html", null, true);
        echo "\" ></script>
                <script type=\"text/javascript\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->absolute($this->env->getExtension('assets')->getAssetUrl("js/sript-action-v2.js")), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->absolute($this->env->getExtension('assets')->getAssetUrl("js/regular_user/profile/footer-lang-dialogv2.js")), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fancybox/jquery.fancybox-1.3.4.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fancybox/jquery.mousewheel-3.0.4.pack.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("js/i18n/jquery.ui.datepicker-" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale")) . ".js")), "html", null, true);
        echo "\"></script>
                ";
        // line 44
        if ((!$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"))) {
            echo "                
                <script type=\"text/javascript\" src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/regular_user/login/form.js"), "html", null, true);
            echo "\"></script>
                <script type=\"text/javascript\" src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/regular_user/registration/form.js"), "html", null, true);
            echo "\"></script>
                ";
        } else {
            // line 48
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/regular_user/profile/userprofile-v2.js"), "html", null, true);
            echo "\"></script>
                ";
        }
        // line 49
        echo "                
                ";
        // line 50
        if ((!$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"))) {
            // line 51
            echo "                <script type=\"text/javascript\">
                function onFbInit() {
                    \$('.login-with-facebook').click(function(){
                        FB.login(function(response) {

                            if (response.authResponse) {
                                \$.ajax({
                                    type: \"POST\",
                                    url: \"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_login_facebook"), "html", null, true);
            echo "\",
                                    data: { token: response.authResponse.accessToken, facebookId: response.authResponse.userID }
                                }).done(function( data ) {
                                    if (null != data.url) {
                                        window.location.replace( data.url );
                                    } else {
                                        alert( '";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.unexpected_problem_facebook"), "html", null, true);
            echo "');
                                    }
                                }).fail(function( data ) {
                                    if (null != data.responseText) {
                                        alert( data.responseText );
                                    } else {
                                        alert( '";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.unexpected_problem_facebook"), "html", null, true);
            echo "');
                                    }
                                });
                            }
                        }, {
                            scope: 'email, user_birthday, user_location'
                        });
                        return false;
                    });
                }
                
                </script>  
                ";
        }
        // line 84
        echo "                
                <script type=\"text/javascript\">
                    \$(document).ready(function(){
                    ";
        // line 87
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user") && (!$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "location"), "location")))) {
            // line 88
            echo "                        \$(\"input#location\").fancybox({
                            type: 'iframe',
                            href: '";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_settings_filllocationpopup"), "html", null, true);
            echo "?'+Math.random(),
                            width: 900,
                            height: 550,
                            centerOnScroll: true,
                            onClosed: function(){
                                window.location.reload();
                            }
                        });                        
                        
                    ";
        }
        // line 100
        echo "                    });
                    </script>
            ";
    }

    // line 104
    public function block_plugins($context, array $blocks = array())
    {
        // line 105
        echo "            ";
    }

    // line 106
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("main.title_suffix"), "html", null, true);
    }

    // line 111
    public function block_header($context, array $blocks = array())
    {
        // line 112
        echo "                    ";
        $this->env->loadTemplate("::headerV2.html.twig")->display($context);
        // line 113
        echo "                ";
    }

    // line 115
    public function block_body($context, array $blocks = array())
    {
        // line 116
        echo "                    ";
        $this->displayBlock('tagline_content', $context, $blocks);
        // line 119
        echo "                <div id=\"page-wrapper\" class=\"container\">                      
                   ";
        // line 120
        $this->displayBlock('positive_msg', $context, $blocks);
        // line 138
        echo "
                   ";
        // line 139
        $this->displayBlock('negative_msg', $context, $blocks);
        // line 157
        echo "
                       ";
        // line 158
        $this->displayBlock('content', $context, $blocks);
        // line 161
        echo "
                   ";
    }

    // line 116
    public function block_tagline_content($context, array $blocks = array())
    {
        // line 117
        echo "
                    ";
    }

    // line 120
    public function block_positive_msg($context, array $blocks = array())
    {
        // line 121
        echo "                       ";
        $context["flash"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flash", array(0 => "positive"), "method");
        // line 122
        echo "                       ";
        if ((twig_length_filter($this->env, (isset($context["flash"]) ? $context["flash"] : $this->getContext($context, "flash"))) > 0)) {
            // line 123
            echo "                           <div class=\"flash-message\">
                               <div class=\"flash-message-inner\">
                                   <p id=\"account-resume\" class=\"alert-success\"><i class=\"icon-ok\"></i>";
            // line 125
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["flash"]) ? $context["flash"] : $this->getContext($context, "flash"))), "html", null, true);
            echo "</p>
                               </div>
                           </div>
                       ";
        }
        // line 129
        echo "                       ";
        $context["flash"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flash", array(0 => "positive-overlayer"), "method");
        // line 130
        echo "                       ";
        if ((twig_length_filter($this->env, (isset($context["flash"]) ? $context["flash"] : $this->getContext($context, "flash"))) > 0)) {
            // line 131
            echo "                           <div class=\"flash-message flash-message-overlayer\">
                               <div class=\"flash-message-inner\">
                                   <p id=\"account-resume\" class=\"alert-success\"><i class=\"icon-ok\"></i>";
            // line 133
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["flash"]) ? $context["flash"] : $this->getContext($context, "flash"))), "html", null, true);
            echo "</p>
                               </div>
                           </div>
                       ";
        }
        // line 136
        echo "                        
                   ";
    }

    // line 139
    public function block_negative_msg($context, array $blocks = array())
    {
        // line 140
        echo "                       ";
        $context["flash"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flash", array(0 => "negative"), "method");
        // line 141
        echo "                       ";
        if ((twig_length_filter($this->env, (isset($context["flash"]) ? $context["flash"] : $this->getContext($context, "flash"))) > 0)) {
            // line 142
            echo "                           <div class=\"flash-message\">
                               <div class=\"flash-message-inner\">
                                   <p id=\"account-resume\" class=\"alert-error\"><i class=\"icon-remove\"></i>";
            // line 144
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["flash"]) ? $context["flash"] : $this->getContext($context, "flash"))), "html", null, true);
            echo "</p>
                               </div>
                           </div>
                       ";
        }
        // line 148
        echo "                       ";
        $context["flash"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flash", array(0 => "negative-overlayer"), "method");
        // line 149
        echo "                       ";
        if ((twig_length_filter($this->env, (isset($context["flash"]) ? $context["flash"] : $this->getContext($context, "flash"))) > 0)) {
            // line 150
            echo "                           <div class=\"flash-message flash-message-overlayer\">
                               <div class=\"flash-message-inner\">
                                   <p id=\"account-resume\" class=\"alert-error\"><i class=\"icon-remove\"></i>";
            // line 152
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["flash"]) ? $context["flash"] : $this->getContext($context, "flash"))), "html", null, true);
            echo "</p>
                               </div>
                           </div>
                       ";
        }
        // line 155
        echo "                        
                   ";
    }

    // line 158
    public function block_content($context, array $blocks = array())
    {
        // line 159
        echo "
                       ";
    }

    // line 165
    public function block_foot($context, array $blocks = array())
    {
        // line 166
        echo "                ";
        $this->env->loadTemplate("::footV2.html.twig")->display($context);
        // line 167
        echo "                ";
        if ((!$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"))) {
            // line 168
            echo "                ";
            echo $this->env->getExtension('facebook')->renderInitialize(array("xfbml" => true, "fbAsyncInit" => "onFbInit();"));
            echo "
                ";
        }
        // line 170
        echo "            ";
    }

    public function getTemplateName()
    {
        return "::baseV2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  444 => 170,  438 => 168,  435 => 167,  432 => 166,  429 => 165,  424 => 159,  421 => 158,  416 => 155,  409 => 152,  405 => 150,  402 => 149,  399 => 148,  392 => 144,  388 => 142,  385 => 141,  382 => 140,  379 => 139,  374 => 136,  367 => 133,  363 => 131,  360 => 130,  357 => 129,  350 => 125,  346 => 123,  343 => 122,  340 => 121,  337 => 120,  332 => 117,  329 => 116,  324 => 161,  322 => 158,  317 => 139,  314 => 138,  312 => 120,  309 => 119,  306 => 116,  303 => 115,  296 => 112,  293 => 111,  287 => 106,  283 => 105,  274 => 100,  261 => 90,  257 => 88,  255 => 87,  250 => 84,  234 => 71,  225 => 65,  216 => 59,  204 => 50,  201 => 49,  195 => 48,  190 => 46,  186 => 45,  182 => 44,  178 => 43,  174 => 42,  170 => 41,  166 => 40,  162 => 39,  154 => 37,  146 => 32,  140 => 29,  134 => 26,  130 => 25,  127 => 24,  122 => 22,  116 => 21,  110 => 19,  108 => 18,  104 => 17,  100 => 16,  92 => 14,  87 => 13,  84 => 12,  78 => 171,  76 => 165,  70 => 115,  67 => 114,  65 => 111,  56 => 106,  51 => 103,  48 => 24,  30 => 1,  319 => 157,  311 => 135,  305 => 134,  299 => 113,  291 => 130,  280 => 104,  276 => 121,  269 => 119,  265 => 117,  262 => 116,  252 => 112,  245 => 108,  239 => 107,  228 => 103,  220 => 97,  214 => 95,  212 => 94,  206 => 51,  200 => 90,  196 => 88,  191 => 87,  189 => 86,  177 => 78,  168 => 73,  164 => 72,  158 => 38,  155 => 67,  132 => 46,  126 => 44,  119 => 42,  113 => 40,  111 => 39,  96 => 15,  85 => 19,  81 => 18,  77 => 17,  72 => 163,  68 => 14,  63 => 13,  60 => 12,  54 => 104,  50 => 8,  46 => 12,  42 => 11,  39 => 5,  34 => 4,  31 => 3,);
    }
}
