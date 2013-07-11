<?php

/* FenchyRegularUserBundle:Partials:userReviewsV2.html.twig */
class __TwigTemplate_1e0ba44e9a06daf71f3f14c38fc5d649 extends Twig_Template
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
        echo "



<div id=\"reviews-tabs\">
    <header class=\"clearfix\">
        <ul>
            <li><a href=\"#tabs-1\"><strong class=\"count\">(<span data-bind=\"text: listingsCount\"></span>)</strong><strong>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.listings_tab"), "html", null, true);
        echo "</strong></a></li>
            <li><a href=\"#tabs-2\"><strong class=\"count\">(<span data-bind=\"text: reviewsCount\"></span>)</strong><strong>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.reviews_tab"), "html", null, true);
        echo "</strong></a></li>
            <li><a href=\"#tabs-3\"><strong class=\"count\">(<span data-bind=\"text: reviewsOOCount\"></span>)</strong><strong>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.reviews_of_others_tab"), "html", null, true);
        echo "</strong></a></li>
        </ul>
        ";
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "id") != $this->getAttribute((isset($context["displayUser"]) ? $context["displayUser"] : null), "id")))) {
            // line 13
            echo "        <div id=\"leave-review-button\" class=\"button grey-button pull-right edit-btn\" data-bind=\"click: loadLeaveReviewFrom\">
            <a href=\"#\" class=\"wrapper\" data-bind=\"click: anchorNoOp\">
                <i class=\"icon-pencil\"></i>
                <strong>";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.leave_a_review"), "html", null, true);
            echo "</strong>
            </a>
        </div>
        ";
        }
        // line 19
        echo "        
    </header>                                    
    <div id=\"tabs-1\">
        <!-- ko template: {name: 'list-template'} -->
        <!-- /ko -->
        
        <!-- ko if: listingsLoadMore -->
        <div class=\"load-more-button has-more-items stream-loading grey-button button\"
             data-bind=\"click: loadMoreListings\">
            <a href=\"#\" class=\"wrapper\">
                <i class=\"icon-spinner icon-spin\"></i>
                <strong>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("load_more"), "html", null, true);
        echo "</strong>
            </a>
        </div>
        <!-- /ko -->
    </div>                                   
    <div id=\"tabs-2\" class=\"tabs-reviews\">
        <!-- ko template: {name: 'review-list-template', foreach: reviews} -->
        <!-- /ko -->
        
        <!-- ko if: reviewsLoadMore -->
        <div class=\"load-more-button has-more-items stream-loading grey-button button\"
             data-bind=\"click: loadMoreReviews\">
            <a href=\"#\" class=\"wrapper\" data-bind=\"click: anchorNoOp\">
                <i class=\"icon-spinner icon-spin\"></i>
                <strong>";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("load_more"), "html", null, true);
        echo "</strong>
            </a>
        </div>
        <!-- /ko -->
    </div>                                   
    <div id=\"tabs-3\" class=\"tabs-reviews\">
        <!-- ko template: {name: 'reviewoo-list-template', foreach: reviewsOO} -->
        <!-- /ko -->
 
        <!-- ko if: reviewsOOLoadMore -->      
        <div class=\"load-more-button has-more-items stream-loading grey-button button\"
             data-bind=\"click: loadMoreReviewsOO\">
            <a href=\"#\" class=\"wrapper\" data-bind=\"click: anchorNoOp\">
                <i class=\"icon-spinner icon-spin\"></i>
                <strong>";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("load_more"), "html", null, true);
        echo "</strong>
            </a>
        </div>
        <!-- /ko -->
    </div>                                   
</div> 



<script type=\"text/html\" id=\"review-list-template\">
    <article class=\"clearfix\">
        <div class=\"pull-left img\">
            <span class=\"image-container medium-avatar bordered\"><img data-bind=\"attr: { src: author.image, alt: author.name }\" /></span>
            <strong class=\"name info-by-line\">
                <a data-bind=\"attr: { href: author.profileUrl,}, text: author.name\"></a>
            </strong>
        </div>
        <div class=\"pull-left post\">
           <!-- ko if: aboutnotice && aboutnotice.id -->
          <h3><a data-bind=\"attr: { href: aboutnotice.noticeUrl }\"><strong data-bind=\"text: aboutnotice.title\"></strong></a></h3>
           <!-- /ko -->
   
           <!-- ko if: !aboutnotice && title -->
          <h3><strong data-bind=\"text: title\"></strong></h3>
           <!-- /ko -->   
           <p data-bind=\"text: text\"></p>
        </div>
        <footer>
            <!-- ko if: author.id==\$parent.loggedInUserId -->
                <a href=\"#\" data-bind=\"click: function(data,event) { \$parent.loadEditReview(data, event, \$parent) }\">";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.edit_review"), "html", null, true);
        echo "</a>
            <!-- /ko -->
            <a href=\"#\">                
                <!-- ko if: type==1 -->
                    <i class=\"summary-icon positive-icon\"></i><strong>";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.positive"), "html", null, true);
        echo "</strong>
                <!-- /ko -->
                
                <!-- ko if: type==0 -->
                    <i class=\"summary-icon negative-icon\"></i><strong>";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.negative"), "html", null, true);
        echo "</strong>
                <!-- /ko -->
            </a>
        </footer>
    </article>
</script>


<script type=\"text/html\" id=\"reviewoo-list-template\">
    <article class=\"clearfix\">
        <div class=\"pull-left img\">
            <span class=\"image-container medium-avatar bordered\"><img data-bind=\"attr: { src: aboutuser.image, alt: aboutuser.name }\" /></span>
            <strong class=\"name info-by-line\">
                <a data-bind=\"attr: { href: aboutuser.profileUrl,}, text: aboutuser.name\"></a>
            </strong>
        </div>
         <div class=\"pull-left post\">
            <!-- ko if: aboutnotice && aboutnotice.id -->
            <h3><a data-bind=\"attr: { href: aboutnotice.noticeUrl }\"><strong data-bind=\"text: aboutnotice.title\"></strong></a></h3>
            <!-- /ko -->
            <p data-bind=\"text: text\"></p>
        </div>
        <footer>
            <!-- ko if: author.id==\$parent.loggedInUserId -->
                <a href=\"#\" data-bind=\"click: function(data,event) { \$parent.loadEditReviewOO(data, event, \$parent) }\">";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.edit_review"), "html", null, true);
        echo "</a>
            <!-- /ko -->
            <a href=\"#\">                
                <!-- ko if: type==1 -->
                    <i class=\"summary-icon positive-icon\"></i><strong>";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.positive"), "html", null, true);
        echo "</strong>
                <!-- /ko -->
                
                <!-- ko if: type==0 -->
                    <i class=\"summary-icon negative-icon\"></i><strong>";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.negative"), "html", null, true);
        echo "</strong>
                <!-- /ko -->
            </a>
        </footer>
    </article>
</script>



<script type=\"text/html\" id=\"list-template\">
    <div class=\"article-list-wrapper clearfix\">
    <!-- ko foreach: listings -->
        <article data-bind=\"attr: { 'class': 'box smallbox'+' '+owner.business }\">
            <div class=\"clearfix\">
                <figure class=\"pull-left\" data-bind=\"click: function(data,event) { \$parent.loadListing(url) }\">
                    <div class=\"pull-left img\"><img data-bind=\"attr: { src: image }\" alt=\"\"/></div>
                    <figcaption class=\"pull-left\">
                        <div>
                            <h3><a href=\"#\" data-bind=\"{text: title, attr: {href: url}}\"></a></h3>
                            <strong data-bind=\"text: location\"></strong>
                            <p  data-bind=\"text: content\"></p>
                        </div>                                        
                    </figcaption>
                </figure>
                <div class=\"pull-left event-master clearfix listing-user-details\" data-bind=\"click: function(data,event) { \$parent.loadProfile(ownerUrl) }\">
                    <div class=\"img\">
                        <span class=\"image-container small-avatar bordered\"><img data-bind=\"attr: { src: owner.image, alt: owner.title}\"/></span>
                    </div>
                    <div class=\"event-master-info\">
                        <strong class=\"info-by-line\"><a class=\"name\" data-bind=\"{text: owner.title, attr: {href: ownerUrl}}\"></a></strong>                                                    
                        <strong class=\"info-by-line\"><a href=\"#\" class=\"location\"><i class=\"icon-map-marker\"></i><span data-bind=\"text: owner.location\"></span></a></strong>                                                    
                    </div>
                </div>
                <div class=\"activity\">
                    <a href=\"#\" class=\"event\"><i class=\"icon-calendar\" data-bind=\"attr: { 'class': icon }\"></i></a>
                </div>
            </div>
        </article>
    <!-- /ko -->
    </div>
</script>
";
    }

    public function getTemplateName()
    {
        return "FenchyRegularUserBundle:Partials:userReviewsV2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 127,  182 => 123,  141 => 91,  134 => 87,  68 => 30,  48 => 16,  43 => 13,  28 => 8,  213 => 88,  207 => 85,  203 => 84,  200 => 83,  196 => 81,  190 => 79,  188 => 78,  173 => 69,  169 => 68,  166 => 67,  159 => 64,  151 => 62,  149 => 61,  144 => 60,  137 => 57,  135 => 56,  126 => 50,  122 => 48,  118 => 46,  116 => 45,  109 => 43,  105 => 41,  99 => 39,  97 => 38,  82 => 29,  78 => 28,  73 => 26,  55 => 19,  50 => 15,  42 => 10,  36 => 10,  27 => 4,  22 => 2,  123 => 47,  119 => 46,  112 => 44,  102 => 58,  98 => 36,  80 => 27,  77 => 26,  67 => 21,  62 => 19,  59 => 18,  47 => 13,  35 => 10,  24 => 5,  19 => 1,  40 => 8,  37 => 7,  32 => 9,  29 => 7,  297 => 138,  295 => 137,  292 => 136,  290 => 135,  285 => 132,  283 => 131,  273 => 125,  271 => 124,  268 => 123,  258 => 114,  252 => 112,  245 => 110,  239 => 108,  237 => 107,  223 => 96,  185 => 61,  179 => 72,  175 => 119,  171 => 56,  167 => 55,  161 => 52,  157 => 51,  152 => 50,  148 => 95,  142 => 46,  140 => 45,  136 => 44,  132 => 43,  128 => 42,  108 => 41,  104 => 24,  100 => 23,  96 => 35,  92 => 33,  88 => 32,  85 => 44,  83 => 18,  79 => 17,  74 => 25,  71 => 15,  65 => 21,  61 => 11,  57 => 17,  53 => 15,  49 => 8,  45 => 12,  41 => 12,  38 => 5,  33 => 4,  30 => 8,);
    }
}
