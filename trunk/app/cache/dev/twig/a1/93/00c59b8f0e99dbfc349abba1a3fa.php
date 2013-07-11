<?php

/* FenchyFrontendBundle:Frontend:indexV2.html.twig */
class __TwigTemplate_a19300c59b8f0e99dbfc349abba1a3fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FenchyFrontendBundle::layoutV2.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'tagline_content' => array($this, 'block_tagline_content'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FenchyFrontendBundle::layoutV2.html.twig";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/app/article-box-v2.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/app/search-bar-v2.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/app/search-bar-big-v2.css"), "html", null, true);
        echo "\" type=\"text/css\" />    
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->absolute($this->env->getExtension('assets')->getAssetUrl("css/frontend/frontend/index-v2.css")), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/ko/knockout-2.2.1.debug.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 15
        $this->env->loadTemplate("::gmapsApiAsset.html.twig")->display($context);
        echo " 
    
    <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ko-extensions/jquery-autocomplete.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/mvvm/landing-page-view-model.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/lib/gapi-autocomplete.js"), "html", null, true);
        echo "\"></script>
    
    <script type=\"text/javascript\">

        var landingPageViewModel;

        \$(document).ready(function() {
            geocoder = new google.maps.Geocoder();
            var baseSearchViewUri = '";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_notice_indexv2"), "html", null, true);
        echo "';            
            
            landingPageViewModel = new LandingPageViewModel(geocoder, baseSearchViewUri);
            
            ko.applyBindings( landingPageViewModel, document.getElementsByTagName('body')[0] );
            
            autocomplete = new GApiAutocomplete(
                document.getElementById('location'),
                landingPageViewModel );
                
                var _default_location = '';
                
                ";
        // line 39
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user") && (!$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "location"), "location")))) {
            // line 40
            echo "                    _default_location = '";
            echo twig_escape_filter($this->env, (isset($context["default_location"]) ? $context["default_location"] : $this->getContext($context, "default_location")), "html", null, true);
            echo "';
                ";
        } elseif (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "location"), "location"))) {
            // line 42
            echo "                    _default_location = '";
            echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "location"), "location"), array("
" => "")), "html", null, true);
            echo "';
                ";
        } else {
            // line 44
            echo "                    _default_location = '";
            echo twig_escape_filter($this->env, (isset($context["default_location"]) ? $context["default_location"] : $this->getContext($context, "default_location")), "html", null, true);
            echo "';     
                ";
        }
        // line 46
        echo "                    
                \$('input#location').val(_default_location);
                
        });
        
        
        
    </script>
    

    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = \"//connect.facebook.net/en_US/all.js#xfbml=1\";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>        
    
    
";
    }

    // line 67
    public function block_tagline_content($context, array $blocks = array())
    {
        // line 68
        echo "    <section id=\"tagline\">
        <div class=\"tagline-banner\"></div>
        <div class=\"tagline-wrapper\">
            <div class=\"container\">
                <h2>";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontend.header.slogan"), "html", null, true);
        echo "</h2>
                    ";
        // line 73
        $this->env->loadTemplate("::searchBarV2.html.twig")->display($context);
        echo "                          
            </div>
        </div>
    </section>
";
    }

    // line 78
    public function block_content($context, array $blocks = array())
    {
        echo "  
    <div id=\"fb-root\"></div>
    <section class=\"main landingpage\" data-role=\"main\">
        <div class=\"content-ltr\">
            <div class=\"clearfix\">
                <section class=\"content pull-left\">
                    <div class=\"article-list-wrapper clearfix\">
                            
                        ";
        // line 86
        if ((isset($context["notices"]) ? $context["notices"] : $this->getContext($context, "notices"))) {
            // line 87
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["notices"]) ? $context["notices"] : $this->getContext($context, "notices")));
            foreach ($context['_seq'] as $context["_key"] => $context["notice"]) {
                // line 88
                echo "                                <article class=\"box mediumbox\">
                                    <figure>
                                        <img src=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["notice"]) ? $context["notice"] : $this->getContext($context, "notice")), "avatar", array(0 => false), "method")), "html", null, true);
                echo "\" alt=\"\"/>
                                        <figcaption>
                                            <div>
                                                <h3><a href=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_notice_show_slug", array("slug" => $this->getAttribute((isset($context["notice"]) ? $context["notice"] : $this->getContext($context, "notice")), "slug"), "year" => twig_date_format_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : $this->getContext($context, "notice")), "createdAt"), "Y"), "month" => twig_date_format_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : $this->getContext($context, "notice")), "createdAt"), "m"), "day" => twig_date_format_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : $this->getContext($context, "notice")), "createdAt"), "d"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : $this->getContext($context, "notice")), "title"), "html", null, true);
                echo "</a></h3>
                                                ";
                // line 94
                if (($this->getAttribute($this->getAttribute((isset($context["notice"]) ? $context["notice"] : $this->getContext($context, "notice")), "type"), "name") == "events")) {
                    // line 95
                    echo "                                                    <strong>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : $this->getContext($context, "notice")), "location"), "html", null, true);
                    echo "</strong>
                                                ";
                }
                // line 97
                echo "                                            </div>                                        
                                        </figcaption>
                                    </figure>
                                    <div class=\"event-master clearfix\">
                                        <div class=\"img\">
                                            <span class=\"image-container small-avatar bordered\">
                                                <img src=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["notice"]) ? $context["notice"] : $this->getContext($context, "notice")), "user"), "regularUser"), "avatar")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["notice"]) ? $context["notice"] : $this->getContext($context, "notice")), "user"), "userRegular"), "firstName"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["notice"]) ? $context["notice"] : $this->getContext($context, "notice")), "user"), "userRegular"), "lastName"), "html", null, true);
                echo "\"/>
                                            </span>
                                        </div>
                                        <div class=\"event-master-info\">
                                            <strong class=\"info-by-line\"><a href=\"#\" class=\"name\">";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["notice"]) ? $context["notice"] : $this->getContext($context, "notice")), "user"), "userRegular"), "firstName"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["notice"]) ? $context["notice"] : $this->getContext($context, "notice")), "user"), "userRegular"), "lastName"), "html", null, true);
                echo "</a></strong>                                                    
                                            <strong class=\"info-by-line\"><a href=\"#\" class=\"location\"><i class=\"icon-map-marker\"></i><span>";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notice"]) ? $context["notice"] : $this->getContext($context, "notice")), "user"), "location"), "html", null, true);
                echo "</span></a></strong>                                                    
                                        </div>
                                    </div>
                                    <div class=\"activity\">
                                        <a href=\"#\" class=\"event\"><i class=\"";
                // line 112
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : $this->getContext($context, "notice")), "icon"), "html", null, true);
                echo "\"></i></a>
                                    </div>
                                </article>                                
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 116
            echo "                        ";
        }
        // line 117
        echo "                    </div>
                    <aside class=\"main clearfix\" data-role=\"complementary\">
                        <p>";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontend.foot.slogan1"), "html", null, true);
        echo "<br/>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontend.foot.slogan2"), "html", null, true);
        echo "</p>
                        <div class=\"button green-button create-listing\">
                            <a href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_notice_create1"), "html", null, true);
        echo "\" class=\"wrapper\">
                                <i class=\"icon-list-alt\"></i><strong>";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontend.create_listing_now"), "html", null, true);
        echo "</strong>
                            </a>
                        </div>
                    </aside>
                    <!-- main -->
                </section>
                <section class=\"sidebar pull-right\">
                    <header>
                        <h3>";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontend.so_what_is"), "html", null, true);
        echo " <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->absolute($this->env->getExtension('assets')->getAssetUrl("images/site/fenchy_logo_green.png")), "html", null, true);
        echo "\" alt=\"Fenchy\"/><strong>?</strong></h3>
                    </header>
                    <ul>
                        <li><img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->absolute($this->env->getExtension('assets')->getAssetUrl("images/site/location_icon.png")), "html", null, true);
        echo "\" alt=\"\"/><p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontend.right_sidebar.what_we_do1"), "html", null, true);
        echo "</p></li>
                        <li><img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->absolute($this->env->getExtension('assets')->getAssetUrl("images/site/group_icon.png")), "html", null, true);
        echo "\" alt=\"\"/><p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontend.right_sidebar.what_we_do2"), "html", null, true);
        echo "</p></li>
                        <li><img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->absolute($this->env->getExtension('assets')->getAssetUrl("images/site/infinite_icon.png")), "html", null, true);
        echo "\" alt=\"\"/><p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontend.right_sidebar.what_we_do3"), "html", null, true);
        echo "</p></li>
                    </ul>
                    <footer>
                        <p>";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontend.right_sidebar.summary.1"), "html", null, true);
        echo " <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontend.right_sidebar.summary.2"), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontend.right_sidebar.summary.3"), "html", null, true);
        echo "</p>
                        <div class=\"facebook-like-box\">
                            <div class=\"fb-like\" data-href=\"http://fenchy.com\" data-send=\"false\" data-layout=\"button_count\" data-width=\"220\" data-show-faces=\"false\"></div>
                        </div>
                    </footer>
                </section>
            </div>            
        </div>
        <!-- container -->
    </section>
    <!-- main -->
";
    }

    public function getTemplateName()
    {
        return "FenchyFrontendBundle:Frontend:indexV2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 138,  311 => 135,  305 => 134,  299 => 133,  291 => 130,  280 => 122,  276 => 121,  269 => 119,  265 => 117,  262 => 116,  252 => 112,  245 => 108,  239 => 107,  228 => 103,  220 => 97,  214 => 95,  212 => 94,  206 => 93,  200 => 90,  196 => 88,  191 => 87,  189 => 86,  177 => 78,  168 => 73,  164 => 72,  158 => 68,  155 => 67,  132 => 46,  126 => 44,  119 => 42,  113 => 40,  111 => 39,  96 => 27,  85 => 19,  81 => 18,  77 => 17,  72 => 15,  68 => 14,  63 => 13,  60 => 12,  54 => 9,  50 => 8,  46 => 7,  42 => 6,  39 => 5,  34 => 4,  31 => 3,);
    }
}
