<?php

/* FenchyFrontendBundle:Partials:topSearchBar.html.twig */
class __TwigTemplate_4e07a6de46a79542aba3dc26e0bda20b extends Twig_Template
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
        // line 1
        echo "<div class=\"comboSearch comboSearchWide\">
    <form id=\"sb-form\">
        <fieldset>
            <div class=\"fieldInput searchInput\">
                <input type=\"text\" data-bind=\"jqAutocomplete: { autoFocus: false }, 
                       jqAutocompleteSource: fenSuggestionsArr, 
                       jqAutocompleteQuery: fenRetrieveSuggestions,
                       jqAutocompleteValue: fcPhrase,
                       jqAutocompleteAppendTo: '#sb-form'\" placeholder=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontend.placeholder_what"), "html", null, true);
        echo "\" autocomplete=\"off\" id=\"search\" class=\"ui-autocomplete-input\"><span role=\"status\" aria-live=\"polite\" class=\"ui-helper-hidden-accessible\"></span>
            </div>
            <div class=\"fieldInput locationInput\">
                <i class=\"icon-map-marker\"></i>
                <input type=\"text\" data-bind=\"value: fcGFormattedAddress\" id=\"location\">
            </div>                                        
            <div class=\"submit\">
                <div data-bind=\"click: doSearch\">
                    <i class=\"icon-search\"></i>
                    <button type=\"button\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontend.search"), "html", null, true);
        echo "</button>
                </div>                       
            </div>
        </fieldset>
        <ul class=\"ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all\" id=\"ui-id-1\" tabindex=\"0\" style=\"z-index: 1; display: none;\"></ul>
    </form>
</div>";
    }

    public function getTemplateName()
    {
        return "FenchyFrontendBundle:Partials:topSearchBar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 18,  29 => 9,  19 => 1,  152 => 56,  144 => 57,  142 => 56,  139 => 55,  137 => 54,  133 => 52,  130 => 51,  119 => 42,  113 => 40,  106 => 38,  100 => 36,  98 => 35,  83 => 23,  72 => 15,  68 => 14,  63 => 13,  61 => 12,  57 => 11,  39 => 5,  58 => 13,  55 => 12,  52 => 10,  49 => 9,  46 => 9,  43 => 6,  40 => 7,  38 => 6,  34 => 4,  31 => 3,  28 => 3,);
    }
}
