<?php

/* FenchyRegularUserBundle:Friend:invitations.html.twig */
class __TwigTemplate_2fea7a1cfb78da95431a1e5d488de1f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FenchyRegularUserBundle::layoutV2.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FenchyRegularUserBundle::layoutV2.html.twig";
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
    ";
        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jquery-ui-1.9.1.custom/css/custom-theme/jquery-ui-1.9.1.fenchy.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->absolute($this->env->getExtension('assets')->getAssetUrl("css/app/sidebar-v2.css")), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->absolute($this->env->getExtension('assets')->getAssetUrl("css/app/search-bar-v2.css")), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->absolute($this->env->getExtension('assets')->getAssetUrl("css/app/inner-content-v2.css")), "html", null, true);
        echo "\" type=\"text/css\" />    
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->absolute($this->env->getExtension('assets')->getAssetUrl("css/app/article-box-v2.css")), "html", null, true);
        echo "\" type=\"text/css\" />    
";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/ko/knockout-2.2.1.debug.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 16
        $this->env->loadTemplate("::gmapsApiAsset.html.twig")->display($context);
        // line 17
        echo "    
    <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ko-extensions/jquery-autocomplete.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/mvvm/user-contacts-view-model.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/lib/gapi-autocomplete.js"), "html", null, true);
        echo "\"></script>        
    
    <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://connect.facebook.net/en_US/all.js"), "html", null, true);
        echo "\"></script>    
    <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/aehlke-tag/js/tag-it.js"), "html", null, true);
        echo "\"></script> 
    <script type=\"text/javascript\">
    \$(function(){

        \$('a.facebook-invite-button').click(function(){
            sendInvitationsFacebook();
        });

        function sendInvitationsFacebook() {
          FB.ui({method: 'apprequests',
            message: '";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.social.invite_facebook"), "html", null, true);
        echo "'
          }, requestCallback);
        }    


        function requestCallback(response) {

        }    
        
        \$('#spoken-languages').tagit({
            readOnly: true
        });        
        
    });
    </script>
    <script type=\"text/javascript\">
        var userContactsViewModel;
        
        \$(document).ready(function() {
            
            var baseSearchViewUri = '";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_notice_indexv2"), "html", null, true);
        echo "';
            var geocoder = new google.maps.Geocoder();
            
            userContactsViewModel = new UserContactsViewModel(geocoder, baseSearchViewUri);
            
            ko.applyBindings( userContactsViewModel, document.getElementsByTagName('body')[0] );
            
            autocomplete = new GApiAutocomplete(
                document.getElementById('location'), userContactsViewModel );
            
            var _default_location = '';

            ";
        // line 65
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user") && (!$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "location"), "location")))) {
            // line 66
            echo "                _default_location = '";
            echo twig_escape_filter($this->env, (isset($context["default_location"]) ? $context["default_location"] : null), "html", null, true);
            echo "';
            ";
        } elseif (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "location"), "location"))) {
            // line 68
            echo "                _default_location = '";
            echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "location"), "location"), array("
" => "")), "html", null, true);
            echo "';
            ";
        } else {
            // line 70
            echo "                _default_location = '";
            echo twig_escape_filter($this->env, (isset($context["default_location"]) ? $context["default_location"] : null), "html", null, true);
            echo "';     
            ";
        }
        // line 72
        echo "
            \$('input#location').val(_default_location);                        
            
        });
    </script>
    
";
    }

    // line 80
    public function block_content($context, array $blocks = array())
    {
        // line 81
        echo "    ";
        echo $this->env->getExtension('facebook')->renderInitialize(array("frictionlessRequests" => true));
        echo "
    <section class=\"main content-rtl\" data-role=\"main\">
        <div class=\"wrapper-inner-content\">
            <div class=\"clearfix\">

                
                <section class=\"sidebar pull-left large-padding-top\">
                    ";
        // line 88
        $this->env->loadTemplate("FenchyRegularUserBundle:Partials:userProfileLeftMenuV2.html.twig")->display($context);
        // line 89
        echo "                </section>
                

                <section class=\"content pull-right\">                
                    ";
        // line 93
        $this->env->loadTemplate("::searchBarV2.html.twig")->display($context);
        // line 94
        echo "                        
                        <div class=\"inner-content\">
                        <div class=\"article-list-wrapper clearfix\">
                            
        ";
        // line 98
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "id") == $this->getAttribute((isset($context["displayUser"]) ? $context["displayUser"] : null), "id")))) {
            // line 99
            echo "        <div class=\"button green-button facebook-invite\">
            <a href=\"#\" class=\"wrapper facebook-invite-button\">                                            
                <i class=\"icon-facebook\"></i>
                <strong>";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.friends.invitation.invitefb"), "html", null, true);
            echo "</strong>
            </a>
        </div>            
        ";
        }
        // line 105
        echo "                            
                            
            <h2>";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.friends.invitation.title"), "html", null, true);
        echo "</h2>
            ";
        // line 108
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["invitations"]) ? $context["invitations"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["invitation"]) {
            // line 109
            echo "                ";
            $context["contact"] = $this->getAttribute((isset($context["invitation"]) ? $context["invitation"] : null), "invitationBy");
            // line 110
            echo "                                
                    <article class=\"box smallbox \">
                        <div class=\"clearfix\">
                            <figure class=\"pull-left\">
                                <div class=\"pull-left img\"><img alt=\"\" src=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "avatar")), "html", null, true);
            echo "\"></div>
                                <figcaption class=\"pull-left\">
                                    <div>
                                        <h3><a href=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_user_profilev2", array("userId" => $this->getAttribute($this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "user"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "firstname"), "html", null, true);
            echo "</a></h3>
                                        <strong>";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "user"), "location"), "html", null, true);
            echo "</strong>
                                        <p>";
            // line 119
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "aboutMe"), 150), "html", null, true);
            echo "</p>
                                    </div>                                        
                                </figcaption>
                            </figure>
                            <div class=\"pull-left event-master\">
                                <div class=\"button green-button\">
                                    <a href=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_friend_invitation_response", array("id" => $this->getAttribute((isset($context["invitation"]) ? $context["invitation"] : null), "id"), "response" => "accept")), "html", null, true);
            echo "\" class=\"wrapper manage-button\">
                                        <i class=\"icon-ok\"></i>
                                        <strong>";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("invitations.buttons.accept"), "html", null, true);
            echo "</strong>
                                    </a>
                                </div>
                                <div class=\"button green-button clear button-top-margin\">
                                    <a href=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_friend_invitation_response", array("id" => $this->getAttribute((isset($context["invitation"]) ? $context["invitation"] : null), "id"), "response" => "reject")), "html", null, true);
            echo "\" class=\"wrapper manage-button\">
                                        <i class=\"icon-remove\"></i>
                                        <strong>";
            // line 133
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("invitations.buttons.reject"), "html", null, true);
            echo "</strong>
                                    </a>
                                </div>                                                            
                            </div>
                            <div class=\"activity\">
                                <a href=\"#\" class=\"event\"><i class=\"icon-user\"></i></a>
                            </div>
                        </div>
                    </article>                                  
                                
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 144
            echo "                <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.friends.invitation.no"), "html", null, true);
            echo "</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invitation'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 146
        echo "                            
            <h2>";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.friends.contacts.title"), "html", null, true);
        echo "</h2>
            
            ";
        // line 149
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) ? $context["contacts"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 150
            echo "                    <article class=\"box smallbox \">
                       <div class=\"clearfix\">
                           <figure class=\"pull-left\">
                               <div class=\"pull-left img\"><img alt=\"\" src=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "avatar")), "html", null, true);
            echo "\"></div>
                               <figcaption class=\"pull-left\">
                                   <div>
                                       <h3><a href=\"";
            // line 156
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_user_profilev2", array("userId" => $this->getAttribute($this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "user"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "firstname"), "html", null, true);
            echo "</a></h3>
                                       <strong>";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "user"), "location"), "html", null, true);
            echo "</strong>
                                       <p>";
            // line 158
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "aboutMe"), 150), "html", null, true);
            echo "</p>
                                   </div>                                        
                               </figcaption>
                           </figure>
                           <div class=\"pull-left event-master\">
                               <div class=\"button green-button\">
                                   <a href=\"";
            // line 164
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_friend_delete", array("friendId" => $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "id"))), "html", null, true);
            echo "\" class=\"wrapper manage-button\">
                                       <i class=\"icon-remove\"></i>
                                       <strong>";
            // line 166
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn.delete"), "html", null, true);
            echo "</strong>
                                   </a>
                               </div>
                           </div>
                           <div class=\"activity\">
                               <a href=\"#\" class=\"event\"><i class=\"icon-user\"></i></a>
                           </div>
                       </div>
                   </article>            
             ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 176
            echo "                <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.friends.contacts.no"), "html", null, true);
            echo "</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 178
        echo "                                 </div>
                    </div>
        </section>
            </div>
        </div>
    </section>

    

    
";
    }

    public function getTemplateName()
    {
        return "FenchyRegularUserBundle:Friend:invitations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 178,  373 => 176,  358 => 166,  353 => 164,  344 => 158,  340 => 157,  334 => 156,  328 => 153,  323 => 150,  318 => 149,  313 => 147,  310 => 146,  301 => 144,  285 => 133,  280 => 131,  273 => 127,  268 => 125,  259 => 119,  255 => 118,  249 => 117,  243 => 114,  237 => 110,  234 => 109,  229 => 108,  225 => 107,  221 => 105,  214 => 102,  209 => 99,  207 => 98,  201 => 94,  199 => 93,  193 => 89,  191 => 88,  180 => 81,  177 => 80,  167 => 72,  161 => 70,  154 => 68,  148 => 66,  146 => 65,  131 => 53,  108 => 33,  95 => 23,  91 => 22,  86 => 20,  82 => 19,  78 => 18,  75 => 17,  73 => 16,  69 => 15,  64 => 14,  61 => 13,  55 => 10,  51 => 9,  47 => 8,  43 => 7,  38 => 6,  33 => 4,  30 => 3,);
    }
}
