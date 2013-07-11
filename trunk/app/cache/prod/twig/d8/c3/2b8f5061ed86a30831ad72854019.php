<?php

/* FenchyNoticeBundle:PartialsV2:rightFilterResultsListV2.html.twig */
class __TwigTemplate_d8c32b8f5061ed86a30831ad72854019 extends Twig_Template
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



<div class=\"inner-content\">                                
    <header class=\"command-bar clearfix\">
        <div class=\"listing-count\">
            <span data-bind=\"text: noticesCount\"></span>
            ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("notice.x_listings"), "html", null, true);
        echo "
        </div>
        <div class=\"pull-right\">
            <div class=\"toolbar-item button select-button grey-button\">
                <strong>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("notice.sort_by"), "html", null, true);
        echo ":</strong>
                <span class=\"replacement\">
                    <strong class=\"select-value\" data-bind=\"text: displayFcSortBy\"></strong>
                    <i id=\"sortby-dropdown-icon\" class=\"icon-caret-down\" ></i>
                    <div class=\"drop-down\" data-bind=\"foreach: availableSorts\">
                        <div>
                        <!-- ko if: \$parent.fcSortBy() == optValue -->
                        <i class=\"icon-ok\"></i>
                        <!-- /ko -->
                        <span data-bind=\"text: optText,
                                         click: \$parent.selectSort\"></span>
                        </div>
                    </div>
                </span>
            </div>
            <div class=\"toolbar-item switch-button button grey-button\">
                <span data-bind=\"attr: { 'class': listModeList() ? 'switch-off' : 'switch-on' }, click: switchListModeList\" >
                    <span class=\"wrapper\">
                        <i class=\"icon-align-justify\"></i>
                    </span>                    
                </span>
                <span data-bind=\"attr: { 'class': listModeTiles() ? 'switch-off' : 'switch-on' }, click: switchListModeTiles\">
                    <span class=\"wrapper\">
                        <i class=\"icon-th-large\"></i>
                    </span>                    
                </span>
                <input class=\"custom-form\" type=\"checkbox\" />
            </div>
        </div>
    </header>
        <div id=\"scrollable\" class=\"scrollable onhover\">
        <div class=\"scrollbar\"  ><div class=\"track\"><div class=\"thumb\"><div class=\"end\"></div></div></div></div>
        <div class=\"viewport\">
            <div class=\"overview\" data-bind=\"template: {name: listingTemplate() }\">

            </div>
        </div>
    </div>
    
</div>

<script type=\"text/html\" id=\"list-template\">
    <div class=\"article-list-wrapper clearfix\">
    <!-- ko foreach: notices -->
        <article data-bind=\"attr: { 'class': 'box smallbox'+' '+owner.business }\">
            <div class=\"clearfix\">
                <figure class=\"pull-left\" data-bind=\"click: function(data,event) { \$parent.loadListing(url) }\">
                    <div class=\"pull-left img\"><img data-bind=\"attr: { src: image }\" alt=\"\"/></div>
                    <figcaption class=\"pull-left\">
                        <div>
                            <h3><a href=\"#\" data-bind=\"{text: title, attr: {href: url}}\" class=\"listing-details\"></a></h3>
                            ";
        // line 66
        echo "                            <p  data-bind=\"text: content\"></p>
                        </div>                                        
                    </figcaption>
                </figure>
                <div class=\"pull-left event-master clearfix listing-user-details\" data-bind=\"click: function(data,event) { \$parent.loadProfile(owner.url) }\">
                    <div class=\"img\"><span class=\"image-container small-avatar  bordered\"><img data-bind=\"attr: { src: owner.image, alt: owner.title}\"/><span></div>
                    <div class=\"event-master-info\">
                        <strong class=\"info-by-line\"><a href=\"#\" class=\"name\" data-bind=\"{text: owner.title, attr: {href: owner.url}}\"></a></strong>                                                    
                        <strong class=\"info-by-line\"><a href=\"#\" class=\"location\"><i class=\"icon-map-marker\"></i><span data-bind=\"text: owner.location\"></span></a></strong>                                                    
                    </div>
                </div>
                <div class=\"activity\">
                    <a href=\"#\" class=\"event\"><i class=\"icon-calendar\" data-bind=\"attr: { 'class': icon }\"></i></a>
                </div>
            </div>
        </article>
    <!-- /ko -->
    <!-- ko if: noticesLoadMore -->
    <div class=\"load-more-button has-more-items stream-loading grey-button button\"
         data-bind=\"click: loadMoreNotices\">
        <a href=\"#\" class=\"wrapper\" data-bind=\"click: anchorNoOp\">
            <i class=\"icon-spinner icon-spin\"></i>
            <strong>";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.load_more"), "html", null, true);
        echo "</strong></a>
    </div>
    <!-- /ko -->
    </div>
</script>


<script type=\"text/html\" id=\"tiles-template\">
    <div class=\"article-list-wrapper clearfix\">
    <!-- ko foreach: notices -->
        <article class=\"box mediumbox\">
            <figure>
                <img data-bind=\"attr: { src: image }\" alt=\"\"/>
                <figcaption>
                    <div>
                        <h3><a href=\"#\" data-bind=\"{text: title, attr: {href: url}}\"></a></h3>
                        ";
        // line 105
        echo "                    </div>                                        
                </figcaption>
            </figure>
            <div class=\"event-master\">
                <div class=\"img\"><span class=\"image-container small-avatar\"><img data-bind=\"attr: { src: owner.image, alt: owner.title}\"/><span></div>
                <div class=\"event-master-info\">
                    <strong class=\"info-by-line\"><a href=\"#\" class=\"name\" data-bind=\"{text: owner.title, attr: {href: owner.url}}\"></a></strong>                                                    
                    <strong class=\"info-by-line\"><a href=\"#\" class=\"location\"><i class=\"icon-map-marker\"></i><span data-bind=\"text: owner.location\"></span></a></strong>                                                    
                </div>
            </div>
            <div class=\"activity\">
                <a href=\"#\" class=\"event\"><i class=\"icon-calendar\" data-bind=\"attr: { 'class': icon }\"></i></a>
            </div>
        </article>
    <!-- /ko -->
    <!-- ko if: noticesLoadMore -->
    <div class=\"load-more-button has-more-items stream-loading grey-button button\"
         data-bind=\"click: loadMoreNotices\">
        <a href=\"#\" class=\"wrapper\" data-bind=\"click: anchorNoOp\">
            <i class=\"icon-spinner icon-spin\"></i>
            <strong>";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.load_more"), "html", null, true);
        echo "</strong></a>
    </div>
    <!-- /ko -->    
    </div>
</script>
";
    }

    public function getTemplateName()
    {
        return "FenchyNoticeBundle:PartialsV2:rightFilterResultsListV2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 125,  114 => 88,  90 => 66,  36 => 14,  183 => 119,  179 => 118,  175 => 117,  171 => 116,  159 => 107,  121 => 75,  101 => 58,  79 => 42,  49 => 21,  39 => 14,  26 => 7,  19 => 2,  40 => 8,  37 => 7,  32 => 4,  29 => 10,  288 => 121,  286 => 120,  284 => 119,  280 => 116,  278 => 115,  275 => 114,  273 => 113,  269 => 111,  267 => 110,  261 => 106,  259 => 105,  256 => 104,  246 => 95,  240 => 93,  233 => 91,  227 => 89,  225 => 88,  208 => 74,  202 => 71,  198 => 70,  174 => 49,  170 => 48,  166 => 47,  162 => 46,  154 => 41,  150 => 40,  146 => 39,  142 => 38,  137 => 88,  133 => 105,  129 => 34,  125 => 33,  116 => 27,  112 => 26,  108 => 25,  104 => 24,  100 => 23,  96 => 22,  91 => 21,  89 => 49,  85 => 19,  81 => 18,  77 => 17,  72 => 16,  69 => 35,  63 => 12,  59 => 28,  55 => 10,  51 => 9,  47 => 8,  43 => 7,  38 => 6,  33 => 4,  30 => 8,);
    }
}
