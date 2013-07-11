<?php

/* FenchyFrontendBundle::static.html.twig */
class __TwigTemplate_a2b9c5411e3a03e50cd64324da970361 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::baseV2.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'content_static' => array($this, 'block_content_static'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseV2.html.twig";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/app/static-page-v2.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/app/search-bar-v2.css"), "html", null, true);
        echo "\" type=\"text/css\">
";
    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/ko/knockout-2.2.1.debug.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 12
        $this->env->loadTemplate("::gmapsApiAsset.html.twig")->display($context);
        // line 13
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ko-extensions/jquery-autocomplete.js"), "html", null, true);
        echo "\"></script>    
    <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/mvvm/landing-page-view-model.js"), "html", null, true);
        echo "\"></script>    
    <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/lib/gapi-autocomplete.js"), "html", null, true);
        echo "\"></script>    
    
    <script type=\"text/javascript\">

        var landingPageViewModel;

        \$(document).ready(function() {
            geocoder = new google.maps.Geocoder();
            var baseSearchViewUri = '";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_notice_indexv2"), "html", null, true);
        echo "';            
            
            landingPageViewModel = new LandingPageViewModel(geocoder, baseSearchViewUri);
            
            ko.applyBindings( landingPageViewModel, document.getElementsByTagName('body')[0] );
            
            autocomplete = new GApiAutocomplete(
                document.getElementById('location'),
                landingPageViewModel );
                
                var _default_location = '';
                
                ";
        // line 35
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user") && (!$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "location"), "location")))) {
            // line 36
            echo "                    _default_location = '";
            echo twig_escape_filter($this->env, (isset($context["default_location"]) ? $context["default_location"] : $this->getContext($context, "default_location")), "html", null, true);
            echo "';
                ";
        } elseif (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "location"), "location"))) {
            // line 38
            echo "                    _default_location = '";
            echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "location"), "location"), array("
" => "")), "html", null, true);
            echo "';
                ";
        } else {
            // line 40
            echo "                    _default_location = '";
            echo twig_escape_filter($this->env, (isset($context["default_location"]) ? $context["default_location"] : $this->getContext($context, "default_location")), "html", null, true);
            echo "';     
                ";
        }
        // line 42
        echo "                    
                \$('input#location').val(_default_location);                
        });
        
        
        
    </script>
";
    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
        // line 52
        echo "    <section class=\"main\" data-role=\"main\">
        <div class=\"container clearfix\">
            ";
        // line 54
        $this->env->loadTemplate("FenchyFrontendBundle:Partials:topSearchBar.html.twig")->display($context);
        // line 55
        echo "                <div class=\"inner-content\">
                    ";
        // line 56
        $this->displayBlock('content_static', $context, $blocks);
        // line 57
        echo "                </div>
        </div>
        <!-- container -->
    </section> 
";
    }

    // line 56
    public function block_content_static($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FenchyFrontendBundle::static.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 56,  144 => 57,  142 => 56,  139 => 55,  137 => 54,  133 => 52,  130 => 51,  119 => 42,  113 => 40,  106 => 38,  100 => 36,  98 => 35,  83 => 23,  72 => 15,  68 => 14,  63 => 13,  61 => 12,  57 => 11,  39 => 5,  58 => 13,  55 => 12,  52 => 10,  49 => 9,  46 => 9,  43 => 6,  40 => 7,  38 => 6,  34 => 4,  31 => 3,  28 => 3,);
    }
}
