<?php

/* FenchyRegularUserBundle:Partials:listingSidebar.html.twig */
class __TwigTemplate_54a93ab2b14d6e969c4d830274c6a3e7 extends Twig_Template
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
        echo "<div class=\"wrapper\">
    ";
        // line 3
        $context["price"] = $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "get", array(0 => "price"), "method");
        // line 4
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["price"]) ? $context["price"] : null)) > 0)) {
            // line 5
            echo "    <p id=\"listing-price\">
        <span>";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["price"]) ? $context["price"] : null), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("notice.per_person"), "html", null, true);
            echo "
    </p>
    ";
        }
        // line 9
        echo "    <div id=\"static-calendar\">
    </div>
    <section class=\"user-profile-group\">
        <figure class=\"avatar\">
            <span class=\"image-container large-avatar bordered\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["displayUser"]) ? $context["displayUser"] : null), "regularuser"), "avatar", array(0 => false), "method"), "html", null, true);
        echo "\" alt=\"\"/></span>
            <div class=\"ranking-flag status-flag\">
                <strong>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["displayUser"]) ? $context["displayUser"] : null), "activity"), "html", null, true);
        echo "</strong>
            </div>
            <figcaption class=\"profile-master\">
                <strong class=\"info-by-line\"><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_user_profilev2", array("userId" => $this->getAttribute((isset($context["displayUser"]) ? $context["displayUser"] : null), "id"))), "html", null, true);
        echo "\" class=\"name\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["displayUser"]) ? $context["displayUser"] : null), "name"), "html", null, true);
        echo "</a></strong>
                ";
        // line 19
        if ($this->getAttribute((isset($context["displayUser"]) ? $context["displayUser"] : null), "location")) {
            echo "<strong class=\"info-by-line\"><span class=\"location\"><i class=\"icon-map-marker\"></i>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["displayUser"]) ? $context["displayUser"] : null), "location"), "html", null, true);
            echo "</span></strong>";
        }
        // line 20
        echo "                <p>";
        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["displayUser"]) ? $context["displayUser"] : null), "regularuser"), "aboutMe"), 200), "html", null, true);
        echo "</p>
            </figcaption>
        </figure>
        ";
        // line 23
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "id") != $this->getAttribute((isset($context["displayUser"]) ? $context["displayUser"] : null), "id")))) {
            // line 24
            echo "        <div class=\"button green-button\">
            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_messages_new", array("id" => $this->getAttribute((isset($context["displayUser"]) ? $context["displayUser"] : null), "id"))), "html", null, true);
            echo "\" class=\"wrapper\">                                            
                <i class=\"icon-envelope-alt\"></i>
                <strong>";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn.send_message"), "html", null, true);
            echo "</strong>
            </a>
        </div>
        ";
        }
        // line 30
        echo "            
    </section>
    ";
        // line 32
        echo $this->env->getExtension('actions')->renderAction("FenchyNoticeBundle:Widgets:userListings", array("notice_id" => $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "id")), array());
        // line 33
        echo "    ";
        echo $this->env->getExtension('actions')->renderAction("FenchyNoticeBundle:Widgets:similarListings", array("notice_id" => $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "id")), array());
        // line 34
        echo "</div>
<script type=\"text/javascript\">
    \$(document).ready(function () {
        \$('#static-calendar').datepicker({
            beforeShowDay : function (date) {

                var listingStarts = new Date('";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "startDate"), "Y-m-d"), "html", null, true);
        echo "');
                listingStarts.setHours(0);
                listingStarts.setMinutes(0);
                listingStarts.setSeconds(0);
                listingStarts.setMilliseconds(0);
                var listingEnds = new Date('";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "endDate"), "Y-m-d"), "html", null, true);
        echo "');
                listingEnds.setHours(23);
                listingEnds.setMinutes(59);
                listingEnds.setSeconds(59);
                listingEnds.setMilliseconds(99);
                if (date - listingStarts >= 0 && listingEnds - date > 0) {
                    return [true, 'highlight'];
                }

                return [true, ''];
             },
             defaultDate : ''
        });
        
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "FenchyRegularUserBundle:Partials:listingSidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 34,  97 => 33,  91 => 30,  84 => 27,  79 => 25,  76 => 24,  67 => 20,  44 => 13,  27 => 5,  24 => 4,  22 => 3,  19 => 2,  83 => 21,  74 => 23,  68 => 13,  64 => 12,  60 => 11,  55 => 18,  52 => 9,  46 => 7,  42 => 6,  378 => 180,  368 => 173,  354 => 162,  334 => 145,  330 => 144,  324 => 140,  320 => 138,  313 => 135,  311 => 134,  308 => 133,  306 => 132,  294 => 127,  291 => 126,  285 => 124,  283 => 123,  279 => 122,  272 => 118,  264 => 113,  259 => 110,  257 => 109,  249 => 104,  246 => 103,  243 => 102,  207 => 68,  202 => 66,  196 => 63,  192 => 62,  188 => 61,  184 => 60,  174 => 53,  169 => 52,  165 => 50,  159 => 48,  157 => 47,  153 => 46,  149 => 45,  145 => 44,  128 => 30,  124 => 29,  120 => 28,  116 => 45,  112 => 26,  108 => 40,  104 => 24,  101 => 23,  99 => 22,  95 => 32,  90 => 20,  87 => 19,  81 => 16,  77 => 17,  73 => 14,  69 => 13,  65 => 12,  61 => 19,  57 => 10,  53 => 9,  49 => 15,  45 => 7,  41 => 6,  38 => 9,  33 => 4,  30 => 6,);
    }
}
