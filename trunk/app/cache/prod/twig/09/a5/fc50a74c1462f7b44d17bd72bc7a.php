<?php

/* FenchyRegularUserBundle:Settings:social.html.twig */
class __TwigTemplate_09a5fc50a74c1462f7b44d17bd72bc7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FenchyRegularUserBundle::settingsWithoutFormTheme.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'settings_content' => array($this, 'block_settings_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FenchyRegularUserBundle::settingsWithoutFormTheme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/app/main-container-v2.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/app/settings-v2.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    
        <script type=\"text/javascript\">
        
        var blocked_action = false;
        
        function onFbInit() {
        
            
        
            \$('#connect-facebook').click(function(){
                FB.login(function(response) {
                    if (response.authResponse) {
                        \$.ajax({
                            type: \"POST\",
                            url: \"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_connect_facebook"), "html", null, true);
        echo "\",
                            data: { token: response.authResponse.accessToken, facebookId: response.authResponse.userID }
                        }).done(function( data ) {
                            if (null != data.url) {
                                window.location.replace( data.url );
                            } else {
                                alert( '";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.unexpected_problem_facebook"), "html", null, true);
        echo "');
                            }
                        }).fail(function( data ) {
                            if (null != data.responseText) {
                                alert( data.responseText );
                            } else {
                                alert( '";
        // line 38
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
        
        
            \$('#facebook_publish').click(function(){
                if(!blocked_action) {
                    
                    blocked_action = true;
                
                    if(\$(this).is(':checked')) {

                        FB.login(function(response) {
                            if (response.authResponse) {
                                \$.ajax({
                                    type: \"POST\",
                                    url: \"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_addtimeline_facebook"), "html", null, true);
        echo "\",
                                    data: { token: response.authResponse.accessToken, facebookId: response.authResponse.userID }
                                }).done(function( data ) {
                                    if (null != data.url) {
                                        window.location.replace( data.url );
                                    } else {
                                        alert( '";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.unexpected_problem_facebook"), "html", null, true);
        echo "');
                                    }
                                }).fail(function( data ) {
                                    if (null != data.responseText) {
                                        alert( data.responseText );
                                    } else {
                                        alert( '";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.unexpected_problem_facebook"), "html", null, true);
        echo "');
                                    }
                                });
                            }
                        }, {
                            scope: 'email, user_birthday, user_location, publish_stream'
                        });
                    } else {
                        var url = '";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_disconnect_timeline_facebook"), "html", null, true);
        echo "';
                        window.location.replace(url);
                    }
                    
                    return true;
                    
                } else {
                    return false;
                }
                
            });
        
        }
        </script>
    
";
    }

    // line 97
    public function block_settings_content($context, array $blocks = array())
    {
        // line 98
        echo "

    ";
        // line 100
        echo $this->env->getExtension('facebook')->renderInitialize(array("xfbml" => true, "fbAsyncInit" => "onFbInit();"));
        echo "

        
    <section id=\"profile_left_menu\" class=\"sidebar pull-left\">
        <div class=\"wrapper\">
            ";
        // line 105
        $this->env->loadTemplate("FenchyRegularUserBundle:Settings:menuV2.html.twig")->display($context);
        // line 106
        echo "        </div>    
    </section>
    <section class=\"content pull-right\">
        <div class=\"profile_right_content inner-content\">
            <header><h1>";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.settings"), "html", null, true);
        echo "</h1></header>
            <div class=\"form-box-wrapper\">
                <h2>";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("settings.socialnetworks.name"), "html", null, true);
        echo "</h2>

                <div class=\"row fieldInput social-network social-network-facebook\">
                        <label>Facebook</label>
                        <div class=\"input-element\">
                            ";
        // line 117
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "facebookid")) {
            // line 118
            echo "                                <div class=\"row-inner\"><span class=\"social-network-state facebook-connected\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.social.connected"), "html", null, true);
            echo "</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_disconnect_facebook"), "html", null, true);
            echo "\" class=\"facebook\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.social.disconnect"), "html", null, true);
            echo ")</a></div>
                            ";
        } else {
            // line 120
            echo "                                <div class=\"row-inner\"><span class=\"social-network-state facebook-disconnected\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.social.notconnected"), "html", null, true);
            echo "</span> <a href=\"#\" id=\"connect-facebook\" class=\"facebook\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.social.connect"), "html", null, true);
            echo ")</a></div>
                            ";
        }
        // line 122
        echo "                                
                                <div class=\"row-inner row-inner-input\"><input type=\"checkbox\" id=\"facebook_publish\" name=\"facebook_publish\" value=\"1\" ";
        // line 123
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "userregular"), "facebookpublish")) {
            echo "checked=\"checked\"";
        }
        echo " /> <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.social.publish_facebook"), "html", null, true);
        echo "</span></div>
                        </div>
                    </div>

                <div class=\"row fieldInput social-network social-network-twitter\">
                    <label>Twitter</label>
                    <div class=\"input-element\">
                        ";
        // line 130
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "twitterid")) {
            // line 131
            echo "                            <div class=\"row-inner\"><span class=\"social-network-state twitter-connected\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.social.connected"), "html", null, true);
            echo "</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "twitterID")) ? ("disconnect_twitter") : ("connect_twitter"))), "html", null, true);
            echo "\" class=\"twitter\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.social.disconnect"), "html", null, true);
            echo ")</a></div>
                        ";
        } else {
            // line 133
            echo "                            <div class=\"row-inner\"><span class=\"social-network-state twitter-disconnected\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.social.notconnected"), "html", null, true);
            echo "</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "twitterID")) ? ("disconnect_twitter") : ("connect_twitter"))), "html", null, true);
            echo "\" class=\"twitter\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.social.connect"), "html", null, true);
            echo ")</a></div>
                        ";
        }
        // line 135
        echo "                    </div>
                </div>                
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "FenchyRegularUserBundle:Settings:social.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 135,  248 => 133,  238 => 131,  236 => 130,  222 => 123,  219 => 122,  211 => 120,  201 => 118,  199 => 117,  191 => 112,  186 => 110,  180 => 106,  178 => 105,  170 => 100,  166 => 98,  163 => 97,  143 => 80,  132 => 72,  123 => 66,  114 => 60,  89 => 38,  80 => 32,  71 => 26,  51 => 10,  48 => 9,  42 => 6,  38 => 5,  33 => 4,  30 => 3,);
    }
}
