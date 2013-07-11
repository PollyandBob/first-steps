<?php

/* ::searchBarV2.html.twig */
class __TwigTemplate_8c2775a9705a3d7d7de3457998fd2b1c extends Twig_Template
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

        <div class=\"comboSearch\">
            <form id=\"sb-form\">
                <fieldset>
                    <div class=\"fieldInput searchInput\">
                        <input id=\"search\" type=\"text\" autocomplete=\"off\" placeholder=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontend.placeholder_what"), "html", null, true);
        echo "\"
                   data-bind=\"jqAutocomplete: { autoFocus: false }, 
                              jqAutocompleteSource: fenSuggestionsArr, 
                              jqAutocompleteQuery: fenRetrieveSuggestions,
                              jqAutocompleteValue: fcPhrase,
                              jqAutocompleteAppendTo: '#sb-form',
                              event: {'keypress': inputPressEnter },    value: fcPhrase, valueUpdate:'afterkeydown'       \" />
                    </div>
                    <div class=\"fieldInput locationInput\">
                        <i class=\"icon-map-marker\"></i>
                        <input id=\"location\" type=\"text\" data-bind=\"value: fcGFormattedAddress\" />
                    </div>                                        
                    <div class=\"submit\">
                        <div data-bind=\"click: function(data,event) { doSearch(false);  }\">
                             <i class=\"icon-search\"></i>
                            <button type=\"button\" >";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontend.search"), "html", null, true);
        echo "</button>
                        </div>                       
                    </div>
                </fieldset>
            </form>
        </div>";
    }

    public function getTemplateName()
    {
        return "::searchBarV2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 23,  27 => 8,  47 => 12,  26 => 4,  112 => 51,  106 => 49,  95 => 44,  90 => 42,  83 => 38,  73 => 31,  64 => 27,  61 => 26,  58 => 25,  37 => 10,  32 => 7,  23 => 4,  24 => 4,  22 => 2,  19 => 2,  444 => 170,  438 => 168,  435 => 167,  432 => 166,  429 => 165,  424 => 159,  421 => 158,  416 => 155,  409 => 152,  405 => 150,  402 => 149,  399 => 148,  392 => 144,  388 => 142,  385 => 141,  382 => 140,  379 => 139,  374 => 136,  367 => 133,  363 => 131,  360 => 130,  357 => 129,  350 => 125,  346 => 123,  343 => 122,  340 => 121,  337 => 120,  332 => 117,  329 => 116,  324 => 161,  322 => 158,  317 => 139,  314 => 138,  312 => 120,  309 => 119,  306 => 116,  303 => 115,  296 => 112,  293 => 111,  287 => 106,  283 => 105,  274 => 100,  261 => 90,  257 => 88,  255 => 87,  250 => 84,  234 => 71,  225 => 65,  216 => 59,  204 => 50,  201 => 49,  195 => 48,  190 => 46,  186 => 45,  182 => 44,  178 => 43,  174 => 42,  170 => 41,  166 => 40,  162 => 39,  154 => 37,  146 => 32,  140 => 29,  134 => 26,  130 => 25,  127 => 24,  122 => 22,  116 => 21,  110 => 19,  108 => 50,  104 => 17,  100 => 46,  92 => 14,  87 => 13,  84 => 12,  78 => 171,  76 => 165,  70 => 115,  67 => 114,  65 => 111,  56 => 106,  51 => 21,  48 => 24,  30 => 6,  319 => 157,  311 => 135,  305 => 134,  299 => 113,  291 => 130,  280 => 104,  276 => 121,  269 => 119,  265 => 117,  262 => 116,  252 => 112,  245 => 108,  239 => 107,  228 => 103,  220 => 97,  214 => 95,  212 => 94,  206 => 51,  200 => 90,  196 => 88,  191 => 87,  189 => 86,  177 => 78,  168 => 73,  164 => 72,  158 => 38,  155 => 67,  132 => 46,  126 => 44,  119 => 42,  113 => 40,  111 => 39,  96 => 15,  85 => 39,  81 => 18,  77 => 17,  72 => 163,  68 => 29,  63 => 13,  60 => 12,  54 => 16,  50 => 8,  46 => 12,  42 => 11,  39 => 9,  34 => 7,  31 => 3,);
    }
}
