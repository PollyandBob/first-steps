<?php

/* FenchyRegularUserBundle:Listing:create2.html.twig */
class __TwigTemplate_e6661c927123f3ef49e4c5d025d65c4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FenchyGalleryBundle::galleryBase.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FenchyGalleryBundle::galleryBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "::noLabelForm.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "        
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/aehlke-tag/css/jquery.tagit.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/aehlke-tag/css/tagit.ui-zendesk.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jquery-ui-1.9.1.custom/css/custom-theme/jquery-ui-1.9.1.fenchy.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/app/main-container-v2.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/gallery/punkave/galleryEdit-V2.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/regular_user/listing/create.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/regular_user/listing/create.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/ko/knockout-2.2.1.debug.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 20
        if ($this->getAttribute((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "locationChangeAvailable")) {
            // line 21
            echo "        ";
            $this->env->loadTemplate("::gmapsApiAsset.html.twig")->display($context);
            // line 22
            echo "    ";
        }
        // line 23
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ko-extensions/jquery-autocomplete.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/mvvm/landing-page-view-model.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/lib/gapi-autocomplete.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/aehlke-tag/js/tag-it.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.timepicker.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fenchydropdown.js"), "html", null, true);
        echo "\"></script> 
    
    <script type=\"text/javascript\">

        var landingPageViewModel;

        \$(document).ready(function() {
            
            createListing.step2.init();
        
            ";
        // line 38
        if ($this->getAttribute((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "locationChangeAvailable")) {
            // line 39
            echo "                geocoder = new google.maps.Geocoder();
                var baseSearchViewUri = '";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_notice_indexv2"), "html", null, true);
            echo "';            

                landingPageViewModel = new LandingPageViewModel(geocoder, baseSearchViewUri);

                ko.applyBindings( landingPageViewModel, document.getElementsByTagName('body')[0] );

                autocomplete = new GApiAutocomplete(
                    document.getElementById('location_gapi'),
                    landingPageViewModel );
            ";
        }
        // line 50
        echo "        });
        
    </script>
    <script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/regular_user/listing/form.js"), "html", null, true);
        echo "\"></script>
    
    
    
    
";
    }

    // line 60
    public function block_content($context, array $blocks = array())
    {
        // line 61
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    <section data-role=\"main\" class=\"main\">
        <div id=\"main-container\">
            <div class=\"inner-content\">
                <header class=\"clearfix\">
                    <h1>";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("listing.create.title"), "html", null, true);
        echo "</h1>
                    <div class=\"button grey-button pull-right\">
                        <a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_listing_manage"), "html", null, true);
        echo "\" class=\"wrapper\">
                            <strong>";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("listing.manage_listings"), "html", null, true);
        echo "</strong>
                        </a>
                    </div>
                </header>
                <div id=\"reviews-tabs\">
                    <ul id=\"tabs\" class=\"clearfix\">
                        <li>
                            <a href=\"#\">
                                <strong class=\"circle-count\">1</strong>
                                <strong>";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("listing.create.tab_title.1"), "html", null, true);
        echo "</strong>
                            </a>
                        </li>
                        <li class=\"tabs-active\">
                            <a href=\"#\">
                                <strong class=\"circle-count\">2</strong>
                                <strong>";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("listing.create.tab_title.2"), "html", null, true);
        echo "</strong>
                            </a>
                        </li>
                    </ul>
                    <div class=\"tabs-panel\">
                        <div id=\"tip\">
                            <h2>";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("listing.create.2.subtitle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(($this->getAttribute((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "name") . "_prefix")), "html", null, true);
        echo "
                                <span>";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "name")), "html", null, true);
        echo "</span>
                            </h2>
                            <p>";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("listing.create.2.description"), "html", null, true);
        echo "</p>
                        </div>                   
                        <form class=\"form-wrapper listing-form\" action=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_notice_create2", array("typename" => $this->getAttribute((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "name"), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                            <div id=\"form-container\" class=\"clearfix\">
                                ";
        // line 97
        $this->displayBlock("galleryContainer", $context, $blocks);
        echo "
                                <div id=\"form-fields\">
                                    <div class=\"row fieldInput grid_6\">
                                        ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'row');
        echo "
                                    </div>                                        
                                    ";
        // line 102
        $context["subId"] = $this->getAttribute((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "subcategoryId");
        // line 103
        echo "                                    ";
        if ((isset($context["subId"]) ? $context["subId"] : $this->getContext($context, "subId"))) {
            // line 104
            echo "                                    <div class=\"row grid_4\">
                                        <div id=\"review-type-selector\" class=\"toolbar-item button select-button grey-button pull-right\">
                                            <strong class=\"selector-title\"></strong>
                                            <span class=\"replacement\">
                                                <strong class=\"select-value\"></strong>
                                                <i id=\"sortby-dropdown-icon\" class=\"icon-caret-down\" ></i>
                                                <div class=\"drop-down\">
                                                </div>
                                            </span>
                                            <div class=\"dd-element\" style=\"display:none\">
                                                ";
            // line 114
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), ("value_" . (isset($context["subId"]) ? $context["subId"] : $this->getContext($context, "subId"))), array(), "array"), 'widget');
            echo "
                                            </div>
                                            <div class=\"dd-label\" style=\"display:none\">
                                                ";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("listing.category"), "html", null, true);
            echo "
                                            </div>                             
                                        </div> 
                                    </div> 
                                    ";
        }
        // line 122
        echo "                                    <div class=\"row fieldInput textarea_content grid_10\">
                                        ";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content"), 'row');
        echo "
                                    </div>
                                    <div class=\"row fieldInput with_icon grid_6 tags-container\">
                                        <i class=\"icon-tag\"></i>
                                        ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tags"), 'row');
        echo "
                                    </div>
                                    <div class=\"row fieldInput with_icon grid_2\">
                                        <i class=\"icon-calendar\"></i>
                                        ";
        // line 131
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "start_date"), 'row');
        echo "
                                    </div>                                        
                                    <div class=\"row fieldInput with_icon grid_2\">
                                        <i class=\"icon-calendar\"></i>
                                        ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "end_date"), 'row');
        echo "
                                    </div>                                                                                                                        
                                    ";
        // line 137
        if ($this->getAttribute((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "locationChangeAvailable")) {
            // line 138
            echo "                                        <div class=\"row fieldInput with_icon grid_4\">
                                            <i class=\"icon-map-marker\"></i>
                                            <input type=\"text\" value=\"";
            // line 140
            if ((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location"))) {
                echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
            }
            echo "\" id=\"location_gapi\" required=\"required\" />
                                        </div>
                                    ";
        }
        // line 143
        echo "                                    ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "put_on_fb", array(), "any", true, true)) {
            // line 144
            echo "                                        <div class=\"row grid_6\">
                                            ";
            // line 145
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "put_on_fb"), 'row');
            echo "
                                        </div>
                                    ";
        }
        // line 148
        echo "                                    <div class=\"form-type-fields-container\">
                                        ";
        // line 149
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'widget');
        echo "
                                    </div>
                                    <div class=\"row fieldInput noticebundle grid_2\" style=\"display:none;\">
                                        ";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                                    </div>                                        
                                </div>
                            </div>
                            <footer class=\"clearfix\">
                                <div class=\"button grey-button pull-left\" id=\"buttons\">
                                    <a id=\"back\" class=\"wrapper\" href=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_notice_create1"), "html", null, true);
        echo "\">
                                        <strong>";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn.back"), "html", null, true);
        echo "</strong>
                                    </a>
                                </div>
                                <div class=\"button submit pull-right\">
                                    <div>
                                        <input type=\"submit\" id=\"continue\" value=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn.continue"), "html", null, true);
        echo "\"/>                                
                                    </div>
                                </div>
                            </footer>   
                        </form>
                    </div>
                </div>
            </div>                
        </div>                    
    </section>
    
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            var sampleTags = ";
        // line 177
        echo twig_jsonencode_filter((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")));
        echo ";
        
            createListing.step2.init();
            
            \$('#fenchy_noticebundle_noticetype_tags').tagit({
                availableTags: sampleTags,
                allowSpaces: true
            });
            
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "FenchyRegularUserBundle:Listing:create2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 177,  358 => 164,  350 => 159,  346 => 158,  337 => 152,  331 => 149,  328 => 148,  322 => 145,  319 => 144,  316 => 143,  308 => 140,  304 => 138,  302 => 137,  297 => 135,  290 => 131,  283 => 127,  276 => 123,  273 => 122,  265 => 117,  259 => 114,  247 => 104,  244 => 103,  242 => 102,  237 => 100,  231 => 97,  224 => 95,  219 => 93,  214 => 91,  208 => 90,  199 => 84,  190 => 78,  178 => 69,  174 => 68,  169 => 66,  160 => 61,  157 => 60,  147 => 53,  142 => 50,  129 => 40,  126 => 39,  124 => 38,  111 => 28,  107 => 27,  103 => 26,  99 => 25,  95 => 24,  90 => 23,  87 => 22,  84 => 21,  82 => 20,  78 => 19,  74 => 18,  69 => 17,  66 => 16,  60 => 11,  56 => 10,  52 => 9,  48 => 8,  44 => 7,  40 => 6,  35 => 5,  32 => 4,  27 => 2,);
    }
}
