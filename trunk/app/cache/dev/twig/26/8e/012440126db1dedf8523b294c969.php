<?php

/* FenchyRegularUserBundle:Partials:listingReviews.html.twig */
class __TwigTemplate_268e012440126db1dedf8523b294c969 extends Twig_Template
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
            <li><a href=\"#tabs-1\"><strong class=\"count\">(<span data-bind=\"text: reviewsPCount\"></span>)</strong>
                <strong>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.positives"), "html", null, true);
        echo "</strong></a></li>
            <li><a href=\"#tabs-2\"><strong class=\"count\">(<span data-bind=\"text: reviewsNCount\"></span>)</strong>
                <strong>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.negatives"), "html", null, true);
        echo "</strong></a></li>
        </ul>
        ";
        // line 13
        if ((((!(isset($context["usersOwnListing"]) ? $context["usersOwnListing"] : $this->getContext($context, "usersOwnListing"))) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "security", array(), "any", false, true), "token", array(), "any", false, true), "user", array(), "any", false, true), "id", array(), "any", true, true)) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "token"), "user"), "id") != null))) {
            // line 14
            echo "        <div id=\"leave-review-button\" class=\"button grey-button pull-right edit-btn\" data-bind=\"click: loadLeaveReviewFrom\">
            <a href=\"#\" class=\"wrapper\" data-bind=\"click: anchorNoOp\">
                <i class=\"icon-pencil\"></i>
                <strong>";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.leave_a_review"), "html", null, true);
            echo "</strong>
            </a>
        </div>
        ";
        }
        // line 21
        echo "    </header>                                    
    <div id=\"tabs-1\" class=\"tabs-reviews\">
        <!-- ko template: {name: 'review-list-template', foreach: reviewsP} -->
        <!-- /ko -->
        
        <!-- ko if: reviewsPLoadMore -->
        <div class=\"load-more-button has-more-items stream-loading grey-button button\"
             data-bind=\"click: loadMorePReviews\">
            <a href=\"#\" class=\"wrapper\" data-bind=\"click: anchorNoOp\">
                <i class=\"icon-spinner icon-spin\"></i>
                <strong>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.load_more"), "html", null, true);
        echo "</strong>
            </a>
        </div>
        <!-- /ko -->  
    </div>
        
    <div id=\"tabs-2\" class=\"tabs-reviews\">
        <!-- ko template: {name: 'review-list-template', foreach: reviewsN} -->
        <!-- /ko -->
        
        <!-- ko if: reviewsNLoadMore -->
        <div class=\"load-more-button has-more-items stream-loading grey-button button\"
             data-bind=\"click: loadMoreNReviews\">
            <a href=\"#\" class=\"wrapper\" data-bind=\"click:  anchorNoOp\">
                <i class=\"icon-spinner icon-spin\"></i>
                <strong>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.load_more"), "html", null, true);
        echo "</strong>
            </a>
        </div>
        <!-- /ko -->
    </div>                                 
</div> 



<script type=\"text/html\" id=\"review-list-template\">
    <article class=\"clearfix\">
        <div class=\"pull-left img\">
            <span class=\"image-container medium-avatar bordered\">
                <img data-bind=\"attr: { src: author.image, alt: author.name }\" />
            </span>
            <strong class=\"name info-by-line\">
                <a data-bind=\"attr: { href: author.profileUrl,}, text: author.name\"></a>
            </strong>
        </div>
        <div class=\"pull-left post\">
            <p data-bind=\"text: text\"></p>
        </div>        
        <footer>
            <!-- ko if: author.id==\$parent.loggedInUserId -->
                <a href=\"#\" data-bind=\"click: function(data,event) { \$parent.loadEditReview(data, event, \$parent) }\">";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.edit_review"), "html", null, true);
        echo "</a>
            <!-- /ko -->
            <a href=\"#\">
                
                <!-- ko if: type==1 -->
                    <i class=\"summary-icon positive-icon\"></i><strong>";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.positive"), "html", null, true);
        echo "</strong>
                <!-- /ko -->
                
                <!-- ko if: type==0 -->
                    <i class=\"summary-icon negative-icon\"></i><strong>";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.negative"), "html", null, true);
        echo "</strong>
                <!-- /ko -->
            </a>
        </footer>
    </article>
</script>

";
    }

    public function getTemplateName()
    {
        return "FenchyRegularUserBundle:Partials:listingReviews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 79,  118 => 75,  110 => 70,  34 => 11,  62 => 18,  51 => 14,  39 => 13,  29 => 9,  54 => 13,  48 => 12,  37 => 6,  100 => 34,  97 => 33,  91 => 30,  84 => 27,  79 => 25,  76 => 24,  67 => 20,  44 => 13,  27 => 5,  24 => 3,  22 => 3,  19 => 1,  83 => 46,  74 => 23,  68 => 13,  64 => 12,  60 => 11,  55 => 18,  52 => 9,  46 => 17,  42 => 9,  378 => 180,  368 => 173,  354 => 162,  334 => 145,  330 => 144,  324 => 140,  320 => 138,  313 => 135,  311 => 134,  308 => 133,  306 => 132,  294 => 127,  291 => 126,  285 => 124,  283 => 123,  279 => 122,  272 => 118,  264 => 113,  259 => 110,  257 => 109,  249 => 104,  246 => 103,  243 => 102,  207 => 68,  202 => 66,  196 => 63,  192 => 62,  188 => 61,  184 => 60,  174 => 53,  169 => 52,  165 => 50,  159 => 48,  157 => 47,  153 => 46,  149 => 45,  145 => 44,  128 => 30,  124 => 29,  120 => 28,  116 => 45,  112 => 26,  108 => 40,  104 => 24,  101 => 23,  99 => 22,  95 => 32,  90 => 20,  87 => 19,  81 => 16,  77 => 17,  73 => 14,  69 => 13,  65 => 31,  61 => 19,  57 => 10,  53 => 21,  49 => 15,  45 => 13,  41 => 14,  38 => 9,  33 => 6,  30 => 6,);
    }
}
