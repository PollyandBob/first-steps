<?php

/* FenchyNoticeBundle:GlobalFilter:indexV2.html.twig */
class __TwigTemplate_4692e81d6d15862381b8f01b3b133e52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FenchyNoticeBundle::layoutV2.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FenchyNoticeBundle::layoutV2.html.twig";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->absolute($this->env->getExtension('assets')->getAssetUrl("plugins/jquery-ui-1.9.1.custom/css/custom-theme/jquery-ui-1.9.1.fenchy.css")), "html", null, true);
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->absolute($this->env->getExtension('assets')->getAssetUrl("css/app/inner-content-v2.css")), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->absolute($this->env->getExtension('assets')->getAssetUrl("css/app/article-box-v2.css")), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->absolute($this->env->getExtension('assets')->getAssetUrl("css/app/custom-form.css")), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->absolute($this->env->getExtension('assets')->getAssetUrl("css/app/search-bar-v2.css")), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->absolute($this->env->getExtension('assets')->getAssetUrl("css/app/sidebar-v2.css")), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->absolute($this->env->getExtension('assets')->getAssetUrl("css/notice/globalfilter/global-filter-v2.css")), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jquery-ui-1.9.1.custom/js/jquery-ui-1.9.1.custom.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/ko/knockout-2.2.1.debug.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/moment-js/moment.min.js"), "html", null, true);
        echo "\"> </script>
    ";
        // line 20
        $this->env->loadTemplate("::gmapsApiAsset.html.twig")->display($context);
        // line 21
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ko-extensions/jquery-autocomplete.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ko-extensions/jquery-slider.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ko-extensions/jquery-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/mvvm/global-filter-view-model.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/lib/gapi-autocomplete.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->absolute($this->env->getExtension('assets')->getAssetUrl("js/global-filter-widgets.js")), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.tinyscrollbar.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        // model object instantination here
        var globalFilterViewModel;
        var autocomplete;
        var geocoder;
        var emptyCategories = ";
        // line 33
        echo twig_jsonencode_filter((isset($context["filterEmptyCat"]) ? $context["filterEmptyCat"] : null));
        echo ";
        var emptyPostDates = ";
        // line 34
        echo twig_jsonencode_filter((isset($context["filterEmptyPD"]) ? $context["filterEmptyPD"] : null));
        echo ";
        var baseViewUri = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "attributes"), "get", array(0 => "_route"), "method")), "html", null, true);
        echo "';
        var pagination = ";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["listingsPagination"]) ? $context["listingsPagination"] : null), "html", null, true);
        echo ";
        var paramDistDefaults = {
            'distanceSliderMin': ";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["filterDistanceSliderMin"]) ? $context["filterDistanceSliderMin"] : null), "html", null, true);
        echo ",
            'distanceSliderMax': ";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["filterDistanceSliderMax"]) ? $context["filterDistanceSliderMax"] : null), "html", null, true);
        echo ",
            'distanceSliderDefault': ";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["filterDistanceSliderDefault"]) ? $context["filterDistanceSliderDefault"] : null), "html", null, true);
        echo ",
            'distanceSliderSnap': ";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["filterDistanceSliderSnap"]) ? $context["filterDistanceSliderSnap"] : null), "html", null, true);
        echo "
        };
        var notice_tinyscroll;
        
        window.translations = {
            'no_limit': '";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("notice.no_limit"), "html", null, true);
        echo "',
            'sort_rel': '";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("notice.filter.sort.rel"), "html", null, true);
        echo "',
            'sort_dist': '";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("notice.filter.sort.dist"), "html", null, true);
        echo "',
            'sort_time': '";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("notice.filter.sort.time"), "html", null, true);
        echo "'
        };


        \$(document).ready(function() {
            
            notice_tinyscroll = \$('#scrollable').tinyscrollbar();
            ko.bindingHandlers['class'] = {
                'update': function(element, valueAccessor) {
                    if (element['__ko__previousClassValue__']) {
                        \$(element).removeClass(element['__ko__previousClassValue__']);
                    }
                    var value = ko.utils.unwrapObservable(valueAccessor());
                    \$(element).addClass(value);
                    element['__ko__previousClassValue__'] = value;
                }
            };
            
            geocoder = new google.maps.Geocoder();
            
            var routes = {
                fenchy_filter_content: '";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_filter_content"), "html", null, true);
        echo "',
                fenchy_what_autocomplete_suggestions: '";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_what_autocomplete_suggestions"), "html", null, true);
        echo "',
            };
            
            var filterLastUrl = '";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["filterLastUrl"]) ? $context["filterLastUrl"] : null), "html", null, true);
        echo "';
            
            globalFilterViewModel = new GlobalFilterViewModel(geocoder, baseViewUri, routes, pagination, emptyCategories, emptyPostDates, paramDistDefaults, translations, filterLastUrl);
            
                  
            ko.applyBindings( globalFilterViewModel, document.getElementById('globalFilter'));
            globalFilterViewModel.retrieveFilterContent( true );
            
            autocomplete = new GApiAutocomplete(
                document.getElementById('location'),
                globalFilterViewModel );
            
                var _default_location = '';
                
                ";
        // line 88
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user") && (!$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "location"), "location")))) {
            // line 89
            echo "                    _default_location = '";
            echo twig_escape_filter($this->env, (isset($context["default_location"]) ? $context["default_location"] : null), "html", null, true);
            echo "';
                ";
        } elseif (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "location"), "location"))) {
            // line 91
            echo "                    _default_location = '";
            echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "location"), "location"), array("
" => "")), "html", null, true);
            echo "';
                ";
        } else {
            // line 93
            echo "                    _default_location = '";
            echo twig_escape_filter($this->env, (isset($context["default_location"]) ? $context["default_location"] : null), "html", null, true);
            echo "';     
                ";
        }
        // line 95
        echo "                    
                \$('input#location').val(_default_location);            
            
        });
        // apply binding here
    </script>
    ";
    }

    // line 104
    public function block_content($context, array $blocks = array())
    {
        // line 105
        echo "    ";
        // line 106
        echo "<section class=\"main content-rtl\" data-role=\"main\">
    <div id=\"globalFilter\" class=\"wrapper-inner-content\"> 
        <div class=\"clearfix\">

            ";
        // line 110
        $this->env->loadTemplate("FenchyNoticeBundle:PartialsV2:leftFilterMenuV2.html.twig")->display($context);
        // line 111
        echo "
            <section class=\"content pull-right\">
                ";
        // line 113
        $this->env->loadTemplate("::searchBarV2.html.twig")->display($context);
        // line 114
        echo "
                ";
        // line 115
        $this->env->loadTemplate("FenchyNoticeBundle:PartialsV2:rightFilterResultsListV2.html.twig")->display($context);
        // line 116
        echo "            </section>

            ";
        // line 119
        echo "            ";
        // line 120
        echo "            ";
        // line 121
        echo "
        </div>
    </div>
</section>    
";
    }

    public function getTemplateName()
    {
        return "FenchyNoticeBundle:GlobalFilter:indexV2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 121,  286 => 120,  284 => 119,  280 => 116,  278 => 115,  275 => 114,  273 => 113,  269 => 111,  267 => 110,  261 => 106,  259 => 105,  256 => 104,  246 => 95,  240 => 93,  233 => 91,  227 => 89,  225 => 88,  208 => 74,  202 => 71,  198 => 70,  174 => 49,  170 => 48,  166 => 47,  162 => 46,  154 => 41,  150 => 40,  146 => 39,  142 => 38,  137 => 36,  133 => 35,  129 => 34,  125 => 33,  116 => 27,  112 => 26,  108 => 25,  104 => 24,  100 => 23,  96 => 22,  91 => 21,  89 => 20,  85 => 19,  81 => 18,  77 => 17,  72 => 16,  69 => 15,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  47 => 8,  43 => 7,  38 => 6,  33 => 4,  30 => 3,);
    }
}
