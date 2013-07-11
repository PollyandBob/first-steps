<?php

/* FenchyRegularUserBundle:Profile:userProfileV2.html.twig */
class __TwigTemplate_542108e6a909a2417b81305d19e34e7a extends Twig_Template
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
        // line 5
        echo "       
    <link rel=\"stylesheet\" href=\"";
        // line 6
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
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->absolute($this->env->getExtension('assets')->getAssetUrl("css/app/tabs-v2.css")), "html", null, true);
        echo "\" type=\"text/css\" /> 
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->absolute($this->env->getExtension('assets')->getAssetUrl("css/app/custom-form.css")), "html", null, true);
        echo "\" type=\"text/css\" /> 
";
    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/ko/knockout-2.2.1.debug.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 18
        $this->env->loadTemplate("::gmapsApiAsset.html.twig")->display($context);
        // line 19
        echo "    
    <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ko-extensions/jquery-autocomplete.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/mvvm/user-profile-view-model.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/lib/gapi-autocomplete.js"), "html", null, true);
        echo "\"></script>    
    <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://connect.facebook.net/en_US/all.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/aehlke-tag/js/tag-it.js"), "html", null, true);
        echo "\"></script> 
    <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fenchydropdown.js"), "html", null, true);
        echo "\"></script> 
    <script type=\"text/javascript\">
        
        var userProfileViewModel;
        var spinnerHTML = '<div id=\"spinner-div\"><i class=\"icon-spinner icon-spin\"></i></div>';
        var tabsJQ;
        var profileHome = 1;

        \$(document).ready(function() {
            
            \$('#spoken-languages').tagit({
                readOnly: true
            });
        
            \$('.add-sticker').fancybox({type:'iframe'});

            geocoder = new google.maps.Geocoder();
            var baseSearchViewUri = '";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_notice_indexv2"), "html", null, true);
        echo "';
            var pagination = ";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "html", null, true);
        echo ";
            var usersOwnProfile = ";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["usersOwnProfile"]) ? $context["usersOwnProfile"] : null), "html", null, true);
        echo ";
            ";
        // line 45
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "security", array(), "any", false, true), "token", array(), "any", false, true), "user", array(), "any", false, true), "id", array(), "any", true, true)) {
            // line 46
            echo "                var loggedInUserId = ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "security"), "token"), "user"), "id"), "html", null, true);
            echo ";
            ";
        } else {
            // line 48
            echo "                var loggedInUserId = null;
            ";
        }
        // line 50
        echo "            var initialReviews = ";
        echo twig_jsonencode_filter((isset($context["initialReviews"]) ? $context["initialReviews"] : null));
        echo ";
            var initialListings = ";
        // line 51
        echo twig_jsonencode_filter((isset($context["initialListings"]) ? $context["initialListings"] : null));
        echo ";
            var initialReviewsOO = ";
        // line 52
        echo twig_jsonencode_filter((isset($context["initialReviewsOO"]) ? $context["initialReviewsOO"] : null));
        echo ";
 
            var routes = {
                fenchy_regular_user_reviewseditform: '";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_reviewseditform"), "html", null, true);
        echo "',
                fenchy_regular_user_reviewssave: '";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_reviewssave"), "html", null, true);
        echo "',
                fenchy_regular_user_reviewslist:'";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_reviewslist"), "html", null, true);
        echo "',
                fenchy_regular_user_listingslist: '";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_listingslist"), "html", null, true);
        echo "'
            }
            
            var displayUserId = ";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["displayUser"]) ? $context["displayUser"] : null), "id"), "html", null, true);
        echo ";
 
 
            tabsJQ = \$(\"section.content .inner-content #reviews-tabs\");
            
            userProfileViewModel = new UserProfileViewModel(
                geocoder, 
                baseSearchViewUri,
                routes,
                pagination,
                usersOwnProfile,
                displayUserId,
                loggedInUserId,
                initialReviews,
                initialListings,
                initialReviewsOO );
            
            ko.applyBindings( userProfileViewModel, document.getElementsByTagName('body')[0] );
            
            autocomplete = new GApiAutocomplete(
                document.getElementById('location'),
                userProfileViewModel );
                
            tabsJQ.tabs();
            
            if(typeof activateTabsJQ != 'undefined') {
                tabsJQ.tabs(\"select\", activateTabsJQ);
            }
            
            \$('a.facebook-invite-button').click(function(){
                sendInvitationsFacebook();
            });
            
            function sendInvitationsFacebook() {
              FB.ui({method: 'apprequests',
                message: '";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.social.invite_facebook"), "html", null, true);
        echo "'
              }, requestCallback);
            }    
            
 
            function requestCallback(response) {
                
            }     
            
            var _default_location = '';

            ";
        // line 107
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user") && (!$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "location"), "location")))) {
            // line 108
            echo "                _default_location = '";
            echo twig_escape_filter($this->env, (isset($context["default_location"]) ? $context["default_location"] : null), "html", null, true);
            echo "';
            ";
        } elseif (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "location"), "location"))) {
            // line 110
            echo "                _default_location = '";
            echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "location"), "location"), array("
" => "")), "html", null, true);
            echo "';
            ";
        } else {
            // line 112
            echo "                _default_location = '";
            echo twig_escape_filter($this->env, (isset($context["default_location"]) ? $context["default_location"] : null), "html", null, true);
            echo "';     
            ";
        }
        // line 114
        echo "
            \$('input#location').val(_default_location);            
            
        });
        
    </script>
    ";
    }

    // line 123
    public function block_content($context, array $blocks = array())
    {
        // line 124
        echo "    ";
        // line 125
        echo "    ";
        echo $this->env->getExtension('facebook')->renderInitialize(array("frictionlessRequests" => true));
        echo "
    <section class=\"main content-rtl\" data-role=\"main\">
        <div class=\"wrapper-inner-content\">
            <div class=\"clearfix\">
                
                <section class=\"sidebar pull-left large-padding-top\">
                    ";
        // line 131
        $this->env->loadTemplate("FenchyRegularUserBundle:Partials:userProfileLeftMenuV2.html.twig")->display($context);
        // line 132
        echo "                </section>
                
                <section class=\"content pull-right\">
                    ";
        // line 135
        $this->env->loadTemplate("::searchBarV2.html.twig")->display($context);
        // line 136
        echo "                        
                    ";
        // line 137
        $this->env->loadTemplate("FenchyRegularUserBundle:Partials:userProfileRightV2.html.twig")->display($context);
        // line 138
        echo "                </section>
                
            </div>
        </div>
    </section>

    

    

";
    }

    public function getTemplateName()
    {
        return "FenchyRegularUserBundle:Profile:userProfileV2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 138,  295 => 137,  292 => 136,  290 => 135,  285 => 132,  283 => 131,  273 => 125,  271 => 124,  268 => 123,  258 => 114,  252 => 112,  245 => 110,  239 => 108,  237 => 107,  223 => 96,  185 => 61,  179 => 58,  175 => 57,  171 => 56,  167 => 55,  161 => 52,  157 => 51,  152 => 50,  148 => 48,  142 => 46,  140 => 45,  136 => 44,  132 => 43,  128 => 42,  108 => 25,  104 => 24,  100 => 23,  96 => 22,  92 => 21,  88 => 20,  85 => 19,  83 => 18,  79 => 17,  74 => 16,  71 => 15,  65 => 12,  61 => 11,  57 => 10,  53 => 9,  49 => 8,  45 => 7,  41 => 6,  38 => 5,  33 => 4,  30 => 3,);
    }
}
