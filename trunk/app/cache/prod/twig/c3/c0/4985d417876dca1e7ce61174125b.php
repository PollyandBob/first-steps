<?php

/* FenchyRegularUserBundle:Listing:show.html.twig */
class __TwigTemplate_c3c04985d417876dca1e7ce61174125b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FenchyGalleryBundle::galleryShowBase.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FenchyGalleryBundle::galleryShowBase.html.twig";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/aehlke-tag/css/jquery.tagit.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/aehlke-tag/css/tagit.ui-zendesk.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->absolute($this->env->getExtension('assets')->getAssetUrl("css/app/sidebar-v2.css")), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->absolute($this->env->getExtension('assets')->getAssetUrl("css/app/search-bar-v2.css")), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->absolute($this->env->getExtension('assets')->getAssetUrl("css/app/inner-content-v2.css")), "html", null, true);
        echo "\" type=\"text/css\" />    
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->absolute($this->env->getExtension('assets')->getAssetUrl("css/app/article-box-v2.css")), "html", null, true);
        echo "\" type=\"text/css\" />    
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->absolute($this->env->getExtension('assets')->getAssetUrl("css/app/tabs-v2.css")), "html", null, true);
        echo "\" type=\"text/css\" />    
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->absolute($this->env->getExtension('assets')->getAssetUrl("css/app/listing-view-v2.css")), "html", null, true);
        echo "\" type=\"text/css\" /> 
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/gallery/punkave/galleryEdit-V2.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->absolute($this->env->getExtension('assets')->getAssetUrl("css/app/custom-form.css")), "html", null, true);
        echo "\" type=\"text/css\" /> 
";
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/ko/knockout-2.2.1.debug.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 22
        $this->env->loadTemplate("::gmapsApiAsset.html.twig")->display($context);
        // line 23
        echo "    
    <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ko-extensions/jquery-autocomplete.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/mvvm/user-profile-view-model.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/lib/gapi-autocomplete.js"), "html", null, true);
        echo "\"></script>    
    <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/mvvm/listing-show-view-model.js"), "html", null, true);
        echo "\"></script>    
    <script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/aehlke-tag/js/tag-it.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.tinyscrollbar.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fenchydropdown.js"), "html", null, true);
        echo "\"></script> 
    <script type=\"text/javascript\">
        
        var userProfileViewModel;
        var spinnerHTML = '<div id=\"spinner-div\"><i class=\"icon-spinner icon-spin\"></i></div>';
        var tabsJQ;

        \$(document).ready(function() {
            \$('#description-area').tinyscrollbar();
            \$('.add-sticker').fancybox({type:'iframe'});
            \$('#tags').tagit({
                readOnly: true
            });
            var geocoder = new google.maps.Geocoder();
            var baseSearchViewUri = '";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_notice_indexv2"), "html", null, true);
        echo "';
            var pagination = ";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "html", null, true);
        echo ";
            var usersOwnListing = ";
        // line 46
        echo (((isset($context["usersOwnListing"]) ? $context["usersOwnListing"] : null)) ? ("true") : ("false"));
        echo ";
            ";
        // line 47
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "security", array(), "any", false, true), "token", array(), "any", false, true), "user", array(), "any", false, true), "id", array(), "any", true, true)) {
            // line 48
            echo "                var loggedInUserId = ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "security"), "token"), "user"), "id"), "html", null, true);
            echo ";
            ";
        } else {
            // line 50
            echo "                var loggedInUserId = null;
            ";
        }
        // line 52
        echo "            var initialReviewsP = ";
        echo twig_jsonencode_filter((isset($context["initialReviewsP"]) ? $context["initialReviewsP"] : null));
        echo ";
            var initialReviewsN = ";
        // line 53
        echo twig_jsonencode_filter((isset($context["initialReviewsN"]) ? $context["initialReviewsN"] : null));
        echo ";
            
            var translations = {
            
            }
            
            var routes = {
                fenchy_regular_user_reviewseditform: '";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_reviewseditform"), "html", null, true);
        echo "',
                fenchy_regular_user_reviewssave: '";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_reviewssave"), "html", null, true);
        echo "',
                fenchy_regular_user_reviewslist:'";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_reviewslist"), "html", null, true);
        echo "',
                fenchy_regular_user_listingslist: '";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_listingslist"), "html", null, true);
        echo "'
            }
            
            var displayUserId = ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["displayUser"]) ? $context["displayUser"] : null), "id"), "html", null, true);
        echo ";
            
            var listingId = ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "id"), "html", null, true);
        echo ";
            
            listingShowViewModel = new ListingShowViewModel(
                geocoder,
                baseSearchViewUri,
                pagination,
                usersOwnListing,
                displayUserId,
                loggedInUserId,
                initialReviewsP,
                initialReviewsN,
                routes,
                listingId
            );
            
            
            ko.applyBindings( listingShowViewModel, window.document.getElementsByTagName('body')[0] );
            
            autocomplete = new GApiAutocomplete(
                document.getElementById('location'),
                listingShowViewModel );

            tabsJQ = \$('.container .inner-content #reviews-tabs', document);
            tabsJQ.tabs();
            
            
            
            
        });
        
    </script>
    ";
    }

    // line 102
    public function block_content($context, array $blocks = array())
    {
        // line 103
        echo "
    ";
        // line 104
        echo $this->env->getExtension('facebook')->renderInitialize(array("frictionlessRequests" => true));
        echo "
    <section class=\"main content-ltr\" data-role=\"main\">
        <div class=\"wrapper-inner-content\">
            <div class=\"clearfix\">
                <section class=\"sidebar pull-right large-padding-top\">
                    ";
        // line 109
        $this->env->loadTemplate("FenchyRegularUserBundle:Partials:listingSidebar.html.twig")->display($context);
        // line 110
        echo "                </section>                
                
                <section class=\"content pull-left listing-view\">
                    ";
        // line 113
        $this->env->loadTemplate("::searchBarV2.html.twig")->display($context);
        echo "                        
                        <div id=\"post\" class=\"inner-content\">                                                               
                            <article class=\"main\">
                                <header>
                                    <div class=\"activity\">
                                        <a href=\"#\"><i class=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "icon"), "html", null, true);
        echo "\"></i></a>
                                    </div>  
                                    <hgroup>
                                        <h1>
                                            ";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "title"), "html", null, true);
        echo "
                                            ";
        // line 123
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "id") != $this->getAttribute($this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "user"), "id")))) {
            // line 124
            echo "                                            <a style=\"float: right;\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fenchy_create_notice_sticker", array("id" => $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "id"))), "html", null, true);
            echo "\" class=\"add-sticker icon-flag-alt\"></a>
                                            ";
        }
        // line 126
        echo "                                        </h1>
                                        <h2>";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "location"), "html", null, true);
        echo "<span class=\"pending-time\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "startDate"), "M d H:m"), "html", null, true);
        echo " to ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "endDate"), "M d H:m"), "html", null, true);
        echo "</span></h2>
                                    </hgroup>                                        
                                </header>
                                <div class=\"post-content\">

                                    ";
        // line 132
        if ($this->getAttribute($this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "gallery"), "hasImages")) {
            // line 133
            echo "                                        <figure>
                                        ";
            // line 134
            $context["gallery"] = $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "gallery");
            // line 135
            echo "                                        ";
            $this->displayBlock("galleryContainer", $context, $blocks);
            echo "
                                        </figure>
                                    ";
        } else {
            // line 138
            echo "                                        <div class=\"listing-spacer\"></div>
                                    ";
        }
        // line 140
        echo "

                                    <div class=\"post-meta clearfix\">
                                        <div class=\"tags\">
                                            <strong>";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("listing.show.tags"), "html", null, true);
        echo ":</strong>
                                            <input type=\"text\" id=\"tags\" value=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "tags"), "html", null, true);
        echo "\"/>
                                        </div>

                                        <div class=\"social\">
                                            <!-- AddThis Button BEGIN -->
                                            <div class=\"addthis_toolbox addthis_default_style \">
                                            <a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a>
                                            <a class=\"addthis_button_tweet\"></a>
                                            <a class=\"addthis_button_pinterest_pinit\"></a>
                                            <a class=\"addthis_counter addthis_pill_style\"></a>
                                            </div>
                                            <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-519a2041126afff1\"></script>
                                            <!-- AddThis Button END -->                                                
                                        </div>                                    

                                    </div>
                                    <div class=\"post-description\">
                                        <h3>";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("listing.show.description"), "html", null, true);
        echo "</h3>
                                        <div id=\"description-area\" class=\"scrollable\">
                                            <div class=\"scrollbar\">
                                                <div class=\"track\">
                                                    <div class=\"thumb\">
                                                        <div class=\"end\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"viewport\">
                                                <div class=\"overview\">
                                                    <p>";
        // line 173
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "content"), "html", null, true);
        echo "</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            ";
        // line 180
        $this->env->loadTemplate("FenchyRegularUserBundle:Partials:listingReviews.html.twig")->display($context);
        echo " 
                        </div> 
                </section>                
            </div>
        </div>
    </section>

";
    }

    public function getTemplateName()
    {
        return "FenchyRegularUserBundle:Listing:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 180,  368 => 173,  354 => 162,  334 => 145,  330 => 144,  324 => 140,  320 => 138,  313 => 135,  311 => 134,  308 => 133,  306 => 132,  294 => 127,  291 => 126,  285 => 124,  283 => 123,  279 => 122,  272 => 118,  264 => 113,  259 => 110,  257 => 109,  249 => 104,  246 => 103,  243 => 102,  207 => 68,  202 => 66,  196 => 63,  192 => 62,  188 => 61,  184 => 60,  174 => 53,  169 => 52,  165 => 50,  159 => 48,  157 => 47,  153 => 46,  149 => 45,  145 => 44,  128 => 30,  124 => 29,  120 => 28,  116 => 27,  112 => 26,  108 => 25,  104 => 24,  101 => 23,  99 => 22,  95 => 21,  90 => 20,  87 => 19,  81 => 16,  77 => 15,  73 => 14,  69 => 13,  65 => 12,  61 => 11,  57 => 10,  53 => 9,  49 => 8,  45 => 7,  41 => 6,  38 => 5,  33 => 4,  30 => 3,);
    }
}
