<?php

/* FenchyNoticeBundle:PartialsV2:leftFilterMenuV2.html.twig */
class __TwigTemplate_3580aced212bfedda753fd07bac36c59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<section class=\"sidebar pull-left\">
    <div class=\"wrapper\">
        <section id=\"sidebar-filters\" class=\"group clearfix\">
            <header>
                <h3>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("notice.filter.filters"), "html", null, true);
        echo "</h3>
                <strong class=\"clear-all\" data-bind=\"click: xBoxAll\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("notice.filter.clear"), "html", null, true);
        echo "</strong>
            </header>
            <div class=\"wrapper\">

                <!-- ko if: boxUserId -->
                <div class=\"tag-button\">
                    <stron>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("notice.filter.user"), "html", null, true);
        echo "</stron>
                    <i class=\"icon-remove\" data-bind=\"click: xBoxUserId\"></i>
                </div>
                <!-- /ko -->
                
                <!-- ko if: boxCategory -->           
                <div class=\"tag-button\">
                    <strong>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("notice.filter.categories"), "html", null, true);
        echo "</strong>
                    <i class=\"icon-remove\" data-bind=\"click: xBoxCategory\"></i>
                </div>
                <!-- /ko -->

                <!-- ko if: boxDistance -->
                <div class=\"tag-button\">
                    <strong>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("notice.filter.distance"), "html", null, true);
        echo "</strong>
                    <i class=\"icon-remove\" data-bind=\"click: xBoxDistance\"></i>
                </div>
                <!-- /ko -->

                <!-- ko if: boxPostDate -->
                <div class=\"tag-button\">
                    <strong>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("notice.filter.post_date"), "html", null, true);
        echo "</strong>
                    <i class=\"icon-remove\" data-bind=\"click: xBoxPostDate\"></i>
                </div>
                <!-- /ko -->

                <!-- ko if: boxWhere -->
                <div class=\"tag-button\">
                    <strong>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("notice.filter.location"), "html", null, true);
        echo "</strong>
                    <i class=\"icon-remove\" data-bind=\"click: xBoxWhere\"></i>
                </div>
                <!-- /ko -->

                <!-- ko if: boxWhat -->
                <div class=\"tag-button\">
                    <strong>";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("notice.filter.phrase"), "html", null, true);
        echo "</strong>
                    <i class=\"icon-remove\" data-bind=\"click: xBoxWhat\"></i>
                </div>
                <!-- /ko -->


            </div>
        </section>
        <section class=\"group clearfix\">
            <header><h3>";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("notice.filter.categories"), "html", null, true);
        echo "</h3>
                <div class=\"pull-right with-arrow\">
                    <i class=\"icon-caret-down\"></i>
                    <i class=\"icon-caret-up\"></i>
                </div>            
            </header>
            <div class=\"wrapper\">
                <div class=\"checkbox-button\">

                    <div class=\"bord\" data-bind=\"template: {name: categoriesTemplate()}\" ></div>  

                </div>
            </div>
        </section>
            
            
        <section class=\"group clearfix\">
            <header><h3>";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("notice.filter.post_date"), "html", null, true);
        echo "</h3>
                <div class=\"pull-right with-arrow\">
                    <i class=\"icon-caret-down\"></i>
                    <i class=\"icon-caret-up\"></i>
                </div>            
            </header>
            <div class=\"wrapper\">
                <div id=\"filter-datepicker\" data-bind=\"jqDatepicker: {}, jqDatepickerValue: fcPostDatePick, jqDatepickerOnPick: selectDatePick\" ></div>    
            </div> 
        </section>            
            
            
        <section class=\"group clearfix\">
            <header><h3>";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("notice.filter.post_date"), "html", null, true);
        echo "</h3>
                <div class=\"pull-right with-arrow\">
                    <i class=\"icon-caret-down\"></i>
                    <i class=\"icon-caret-up\"></i>
                </div>
            </header>
            <div class=\"wrapper\">
                <div class=\"select-button\">
                    <ul class=\"replacement side-summary-list\" data-bind=\"foreach: availablePostDates\">
                        <li data-bind=\"attr: { 'class': \$parent.fcPostDateBar()==id ? 'select-value' : '' },
                                       click: \$parent.selectDateBar\">
                            <strong data-bind=\"text: name\"></strong><div class=\"counter\"><strong data-bind=\"text: count\"></strong></div>
                        </li>
                    </ul>
                </div>
            </div>                                
        </section>

        <section class=\"group clearfix\">
            <header><h3>";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("notice.filter.distance"), "html", null, true);
        echo "</h3>
                <div class=\"with-arrow pull-right\">
                    <i class=\"icon-caret-down\"></i>
                    <i class=\"icon-caret-up\"></i>  
                </div>
            </header>
            <div class=\"wrapper\" style=\"text-align: center\">
                <div id=\"filter-distance-slider\" 
                data-bind=\"jqSlider: {
                    value: ";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["filterDistanceSliderDefault"]) ? $context["filterDistanceSliderDefault"] : $this->getContext($context, "filterDistanceSliderDefault")), "html", null, true);
        echo ", 
                    min: ";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["filterDistanceSliderMin"]) ? $context["filterDistanceSliderMin"] : $this->getContext($context, "filterDistanceSliderMin")), "html", null, true);
        echo ", 
                    max: ";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["filterDistanceSliderMax"]) ? $context["filterDistanceSliderMax"] : $this->getContext($context, "filterDistanceSliderMax")), "html", null, true);
        echo ", 
                    step: ";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["filterDistanceSliderSnap"]) ? $context["filterDistanceSliderSnap"] : $this->getContext($context, "filterDistanceSliderSnap")), "html", null, true);
        echo "
                },
                jqSliderValue: fcDistance\" class=\"bord ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all jq-slider\">
                    <a href=\"#\" class=\"ui-slider-handle ui-state-default ui-corner-all\">
                        <i class=\"icon-align-justify\"></i>
                        <span class=\"inner-tooltip\">
                            <strong class=\"tooltip-value\" data-bind=\"text: fcDistanceText\"></strong>
                            <span class=\"tooltip-arrow\">
                            </span>
                        </span>                                            
                    </a>
                </div>
                <div class=\"slider-value\">
                    <strong class=\"pull-left\">&lt; 2km</strong>
                    <strong class=\"pull-right\">&gt; 5km</strong>
                </div>                                            
            </div>
        </section>
    </div>
</section>


<script type=\"text/html\" id=\"categories-template\">
    <ul data-bind=\"foreach: fcCategories \" class=\"replacement\">
        <li>
            <div class=\"checkbox-wrapper noactive\">
                <span class=\"checkbox\" data-bind=\"click: \$parent.categoryCheck\">
                    <!-- ko if: checked -->
                        <span class=\"check-knob\">
                            <i class=\"icon-ok\"></i>
                        </span>
                    <!-- /ko -->
                    <!--<input type=\"checkbox\" data-bind=\"checked: checked\" />-->
                </span>
                <label><strong data-bind=\"text: name\">Help</strong></label>
                <div class=\"counter\">
                    <strong data-bind=\"text: count\">0</strong>
                </div>
                <!-- ko if: subcategoriesObs[0] -->
                <div class=\"with-arrow pull-right\">
                    <i class=\"icon-caret-down\"></i>
                    <i class=\"icon-caret-up\"></i>  
                </div>
                <!-- /ko -->
            </div>
            <ul data-bind=\"foreach: subcategoriesObs\">
                <li class=\"bord\">
                    <ul data-bind=\"foreach: subcategoriesObs\"> 
                        <li class=\"clearfix\">
                            <span class=\"checkbox\" data-bind=\"click: \$parents[2].categoryCheck\">
                                <!-- ko if: checked -->
                                    <span class=\"check-knob\">
                                        <i class=\"icon-ok\"></i>
                                    </span>
                                <!-- /ko -->
                                <!--<input type=\"checkbox\" data-bind=\"checked: checked\" />-->
                            </span>                                                                
                            <label for=\"checkbox-1-1\"><strong data-bind=\"text: name\"></strong></label>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</script>";
    }

    public function getTemplateName()
    {
        return "FenchyNoticeBundle:PartialsV2:leftFilterMenuV2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 119,  179 => 118,  175 => 117,  171 => 116,  159 => 107,  121 => 75,  101 => 58,  79 => 42,  49 => 21,  39 => 14,  26 => 7,  151 => 63,  144 => 59,  140 => 58,  135 => 56,  118 => 48,  114 => 47,  107 => 43,  103 => 42,  93 => 37,  86 => 35,  84 => 34,  76 => 29,  71 => 27,  56 => 17,  50 => 15,  45 => 13,  27 => 4,  23 => 3,  19 => 2,  40 => 8,  37 => 7,  32 => 6,  29 => 5,  288 => 121,  286 => 120,  284 => 119,  280 => 116,  278 => 115,  275 => 114,  273 => 113,  269 => 111,  267 => 110,  261 => 106,  259 => 105,  256 => 104,  246 => 95,  240 => 93,  233 => 91,  227 => 89,  225 => 88,  208 => 74,  202 => 71,  198 => 70,  174 => 49,  170 => 48,  166 => 47,  162 => 46,  154 => 41,  150 => 40,  146 => 39,  142 => 38,  137 => 88,  133 => 35,  129 => 53,  125 => 52,  116 => 27,  112 => 26,  108 => 25,  104 => 24,  100 => 41,  96 => 22,  91 => 21,  89 => 49,  85 => 19,  81 => 18,  77 => 17,  72 => 16,  69 => 35,  63 => 12,  59 => 28,  55 => 10,  51 => 9,  47 => 14,  43 => 7,  38 => 8,  33 => 4,  30 => 8,);
    }
}
