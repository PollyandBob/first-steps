<?php

/* FenchyRegularUserBundle:Widgets:repBreakdown.html.twig */
class __TwigTemplate_e7d450536955a0083fa493326122ca87 extends Twig_Template
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
        echo "<section class=\"user-profile-group\">
    <h4>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("reputation.title"), "html", null, true);
        echo "</h4>
    <ul class=\"home-side-nav profile-summary-list\">
        <li><a href=\"#user-listings\" rel=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["profileUrl"]) ? $context["profileUrl"] : null), "html", null, true);
        echo "\">
            <i class=\"icon-list-alt\"></i>
            <strong>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("reputation.listings"), "html", null, true);
        echo "</strong>
            <strong class=\"count\">(";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repBreakdown"]) ? $context["repBreakdown"] : null), "listingCount"), "html", null, true);
        echo ")</strong>
            <div class=\"pull-right\">
                <div class=\"points-flag status-flag\">
                    <strong>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reputationPoints"]) ? $context["reputationPoints"] : null), "notice"), "html", null, true);
        echo "</strong>
                </div>
            </div>
            </a>                                            
        </li>
        <li><a href=\"#user-reviews\" rel=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["profileUrl"]) ? $context["profileUrl"] : null), "html", null, true);
        echo "\">
            <i class=\"icon-plus-sign\"></i>
            <strong>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("reputation.positive_reviews"), "html", null, true);
        echo "</strong>
            <strong class=\"count\">(";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repBreakdown"]) ? $context["repBreakdown"] : null), "positiveRevCount"), "html", null, true);
        echo ")</strong>
            <div class=\"pull-right\">
                <div class=\"points-flag status-flag\">
                    <strong>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reputationPoints"]) ? $context["reputationPoints"] : null), "reviews"), "html", null, true);
        echo "</strong>
                </div>
            </div>
            </a>                                            
        </li>
        <li><a href=\"#user-wrote-reviews\" rel=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["profileUrl"]) ? $context["profileUrl"] : null), "html", null, true);
        echo "\">
            <i class=\"icon-pencil\"></i>
            <strong>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("reputation.written_reviews"), "html", null, true);
        echo "</strong>
            <strong class=\"count\">(";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repBreakdown"]) ? $context["repBreakdown"] : null), "revsOOCount"), "html", null, true);
        echo ")</strong>
            <div class=\"pull-right\">
                <div class=\"points-flag status-flag\">
                    <strong>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reputationPoints"]) ? $context["reputationPoints"] : null), "ownReviews"), "html", null, true);
        echo "</strong>
                </div>
            </div>
            </a>                                            
        </li>
        <li>
            ";
        // line 38
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "id") == $this->getAttribute((isset($context["displayUser"]) ? $context["displayUser"] : null), "id")))) {
            // line 39
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_settings_socialnetworks"), "html", null, true);
            echo "\">
            ";
        } else {
            // line 41
            echo "            <a href=\"#\" class=\"cursor-default\">        
            ";
        }
        // line 43
        echo "            <i class=\"icon-facebook-sign\"></i>
            <strong>";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("reputation.facebook"), "html", null, true);
        echo "</strong>
            ";
        // line 45
        if ($this->getAttribute((isset($context["repBreakdown"]) ? $context["repBreakdown"] : null), "fbConnect")) {
            // line 46
            echo "                <i class=\"count icon-ok\"></i>
            ";
        }
        // line 48
        echo "            <div class=\"pull-right\">
                <div class=\"points-flag status-flag\">
                    <strong>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reputationPoints"]) ? $context["reputationPoints"] : null), "facebook"), "html", null, true);
        echo "</strong>
                </div>
            </div>
            </a>                                            
        </li>
        <li>
                ";
        // line 56
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "id") != $this->getAttribute((isset($context["displayUser"]) ? $context["displayUser"] : null), "id")))) {
            // line 57
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_friend_index", array("id" => $this->getAttribute($this->getAttribute((isset($context["displayUser"]) ? $context["displayUser"] : null), "regularuser"), "id"))), "html", null, true);
            echo "\">
                    <i class=\"icon-user\"></i>
                ";
        } elseif ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true)) {
            // line 60
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_friend_invitations"), "html", null, true);
            echo "\">
                    ";
            // line 61
            $context["countInv"] = $this->env->getExtension('fenchy_regularuser_extension')->countInvitations();
            // line 62
            echo "                    <i class=\"icon-user";
            if ((isset($context["countInv"]) ? $context["countInv"] : null)) {
                echo " font-decorated";
            }
            echo "\"></i>                        
                ";
        } else {
            // line 64
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_friend_index", array("id" => $this->getAttribute($this->getAttribute((isset($context["displayUser"]) ? $context["displayUser"] : null), "regularuser"), "id"))), "html", null, true);
            echo "\">
                    <i class=\"icon-user\"></i>
                ";
        }
        // line 67
        echo "
                <strong>";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("reputation.contacts"), "html", null, true);
        echo "</strong>
                <strong class=\"count\">(";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repBreakdown"]) ? $context["repBreakdown"] : null), "contactsCount"), "html", null, true);
        echo ")</strong>
                <div class=\"pull-right\">
                    <div class=\"points-flag status-flag\">
                        <strong>";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reputationPoints"]) ? $context["reputationPoints"] : null), "contacts"), "html", null, true);
        echo "</strong>
                    </div>
                </div>
                </a>              
        </li>
        <li>
            ";
        // line 78
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "id") == $this->getAttribute((isset($context["displayUser"]) ? $context["displayUser"] : null), "id")))) {
            // line 79
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_settings_basic"), "html", null, true);
            echo "\">
            ";
        } else {
            // line 81
            echo "            <a href=\"#\" class=\"cursor-default\">
            ";
        }
        // line 83
        echo "            <i class=\"icon-user\"></i>
            <strong>";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("reputation.profile"), "html", null, true);
        echo "</strong>
            <strong class=\"count\">(";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reputationPoints"]) ? $context["reputationPoints"] : null), "profilePercent"), "html", null, true);
        echo ")</strong>
            <div class=\"pull-right\">
                <div class=\"points-flag status-flag\">
                    <strong>";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reputationPoints"]) ? $context["reputationPoints"] : null), "profile"), "html", null, true);
        echo "</strong>
                </div>
            </div>
            </a>                                            
        </li>
    </ul>
</section>";
    }

    public function getTemplateName()
    {
        return "FenchyRegularUserBundle:Widgets:repBreakdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 88,  207 => 85,  203 => 84,  200 => 83,  196 => 81,  190 => 79,  188 => 78,  173 => 69,  169 => 68,  166 => 67,  159 => 64,  151 => 62,  149 => 61,  144 => 60,  137 => 57,  135 => 56,  126 => 50,  122 => 48,  118 => 46,  116 => 45,  109 => 43,  105 => 41,  99 => 39,  97 => 38,  82 => 29,  78 => 28,  73 => 26,  55 => 17,  50 => 15,  42 => 10,  36 => 7,  27 => 4,  22 => 2,  123 => 47,  119 => 46,  112 => 44,  102 => 38,  98 => 36,  80 => 27,  77 => 26,  67 => 21,  62 => 19,  59 => 18,  47 => 13,  35 => 10,  24 => 5,  19 => 1,  40 => 8,  37 => 7,  32 => 6,  29 => 7,  297 => 138,  295 => 137,  292 => 136,  290 => 135,  285 => 132,  283 => 131,  273 => 125,  271 => 124,  268 => 123,  258 => 114,  252 => 112,  245 => 110,  239 => 108,  237 => 107,  223 => 96,  185 => 61,  179 => 72,  175 => 57,  171 => 56,  167 => 55,  161 => 52,  157 => 51,  152 => 50,  148 => 48,  142 => 46,  140 => 45,  136 => 44,  132 => 43,  128 => 42,  108 => 41,  104 => 24,  100 => 23,  96 => 35,  92 => 33,  88 => 32,  85 => 29,  83 => 18,  79 => 17,  74 => 25,  71 => 15,  65 => 21,  61 => 11,  57 => 17,  53 => 15,  49 => 8,  45 => 12,  41 => 11,  38 => 5,  33 => 4,  30 => 3,);
    }
}
