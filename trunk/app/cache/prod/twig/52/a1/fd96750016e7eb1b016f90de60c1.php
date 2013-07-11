<?php

/* FenchyRegularUserBundle:Listing:manage.html.twig */
class __TwigTemplate_52a1fd96750016e7eb1b016f90de60c1 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/mvvm/landing-page-view-model.js"), "html", null, true);
        echo "\"></script>    
    <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/lib/gapi-autocomplete.js"), "html", null, true);
        echo "\"></script>    
    <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://connect.facebook.net/en_US/all.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/aehlke-tag/js/tag-it.js"), "html", null, true);
        echo "\"></script> 

    <script type=\"text/javascript\">
        
        var userProfileViewModel;
        var spinnerHTML = '<div id=\"spinner-div\"><i class=\"icon-spinner icon-spin\"></i></div>';
        var tabsJQ;

        \$(document).ready(function() {
            
            \$('.add-sticker').fancybox({type:'iframe'});

            geocoder = new google.maps.Geocoder();
            var baseSearchViewUri = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_notice_indexv2"), "html", null, true);
        echo "';

            landingPageViewModel = new LandingPageViewModel(geocoder, baseSearchViewUri);
            
            ko.applyBindings( landingPageViewModel, document.getElementsByTagName('body')[0] );
            
            autocomplete = new GApiAutocomplete(
                document.getElementById('location'),
                landingPageViewModel );
 
   
            autocomplete = new GApiAutocomplete(
                document.getElementById('location'),
                userProfileViewModel );
                   
            \$('a.facebook-invite-button').click(function(){
                sendInvitationsFacebook();
            });
            
            function sendInvitationsFacebook() {
              FB.ui({method: 'apprequests',
                message: '";
        // line 56
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
    ";
    }

    // line 75
    public function block_content($context, array $blocks = array())
    {
        // line 76
        echo "    ";
        // line 77
        echo "    ";
        echo $this->env->getExtension('facebook')->renderInitialize(array("frictionlessRequests" => true));
        echo "
    <section class=\"main content-rtl\" data-role=\"main\">
        <div class=\"wrapper-inner-content\">
            <div class=\"clearfix\">
                
                <section class=\"sidebar pull-left large-padding-top\">
                    ";
        // line 83
        $this->env->loadTemplate("FenchyRegularUserBundle:Partials:userProfileLeftMenuV2.html.twig")->display($context);
        // line 84
        echo "                </section>
                
                <section class=\"content pull-right\">
                    ";
        // line 87
        $this->env->loadTemplate("::searchBarV2.html.twig")->display($context);
        // line 88
        echo "                    
                    <div class=\"inner-content\">
                        <div class=\"article-list-wrapper clearfix\">
                            ";
        // line 91
        if ((isset($context["listings"]) ? $context["listings"] : null)) {
            // line 92
            echo "                                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listings"]) ? $context["listings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["notice"]) {
                // line 93
                echo "                                    <article class=\"box smallbox \">
                                        <div class=\"clearfix\">
                                            <figure class=\"pull-left\">
                                                <div class=\"pull-left img\"><img alt=\"\" src=\"";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "avatar"), "html", null, true);
                echo "\"></div>
                                                <figcaption class=\"pull-left\">
                                                    <div>
                                                        <h3>
                                                            <a href=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_notice_show_slug", array("slug" => $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "slug"), "year" => twig_date_format_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "createdAt"), "Y"), "month" => twig_date_format_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "createdAt"), "m"), "day" => twig_date_format_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "createdAt"), "d"))), "html", null, true);
                echo "\">
                                                                ";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "title"), "html", null, true);
                echo "
                                                            </a>
                                                        </h3>
                                                        <strong>";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "location"), "location"), "html", null, true);
                echo "</strong>
                                                        <p>";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "content"), "html", null, true);
                echo "</p>
                                                    </div>                                        
                                                </figcaption>
                                            </figure>
                                            <div class=\"pull-left event-master\">
                                                <div class=\"button green-button\">
                                                    <a href=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_notice_edit", array("id" => $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "id"))), "html", null, true);
                echo "\" class=\"wrapper manage-button\">
                                                        <i class=\"icon-edit\"></i>
                                                        <strong>";
                // line 113
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn.edit"), "html", null, true);
                echo "</strong>
                                                    </a>
                                                </div>
                                                <div class=\"button green-button clear button-top-margin\">
                                                    <a href=\"";
                // line 117
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_listing_delete", array("id" => $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "id"))), "html", null, true);
                echo "\" class=\"wrapper manage-button\">
                                                        <i class=\"icon-remove\"></i>
                                                        <strong>";
                // line 119
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn.delete"), "html", null, true);
                echo "</strong>
                                                    </a>
                                                </div>                                                    
                                                    
                                            </div>
                                            <div class=\"activity\">
                                                <a href=\"#\" class=\"event\"><i class=\"";
                // line 125
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "getIcon"), "html", null, true);
                echo "\"></i></a>
                                            </div>
                                        </div>
                                    </article>                        
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 130
            echo "                            ";
        } else {
            // line 131
            echo "                                <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("listing.no"), "html", null, true);
            echo "</p>
                            ";
        }
        // line 133
        echo "                        </div>
                    </div>
                </section>
                
            </div>
        </div>
    </section>

    

    

";
    }

    public function getTemplateName()
    {
        return "FenchyRegularUserBundle:Listing:manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 133,  266 => 131,  263 => 130,  252 => 125,  243 => 119,  238 => 117,  231 => 113,  226 => 111,  217 => 105,  213 => 104,  207 => 101,  203 => 100,  196 => 96,  191 => 93,  186 => 92,  184 => 91,  179 => 88,  177 => 87,  172 => 84,  170 => 83,  160 => 77,  158 => 76,  155 => 75,  134 => 56,  110 => 35,  94 => 22,  90 => 21,  86 => 20,  82 => 19,  78 => 18,  75 => 17,  73 => 16,  69 => 15,  64 => 14,  61 => 13,  55 => 10,  51 => 9,  47 => 8,  43 => 7,  38 => 6,  33 => 4,  30 => 3,);
    }
}
