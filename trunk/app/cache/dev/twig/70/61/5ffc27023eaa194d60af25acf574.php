<?php

/* FenchyNoticeBundle:Widgets:similarListings.html.twig */
class __TwigTemplate_70615ffc27023eaa194d60af25acf574 extends Twig_Template
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
        if ((isset($context["listings"]) ? $context["listings"] : $this->getContext($context, "listings"))) {
            echo "                                
<section class=\"user-profile-group\">
    <h4>";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("notice.similar_title"), "html", null, true);
            echo "</h4>
    <ul class=\"profile-summary-list additional-user-info\">
            ";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listings"]) ? $context["listings"] : $this->getContext($context, "listings")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 6
                echo "            <li>
                <div class=\"event-master clearfix\">
                    
                    <div class=\"widget-image-recent\">
                        <img src=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "avatar")), "html", null, true);
                echo "\" alt=\"\"/>
                    </div>                    
                    <div>
                        <strong class=\"info-by-line\"><a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_notice_show_slug", array("slug" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "slug"), "year" => twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "createdAt"), "Y"), "month" => twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "createdAt"), "m"), "day" => twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "createdAt"), "d"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "title"), 15), "html", null, true);
                echo "</a></strong>
                        <strong class=\"info-by-line\"><a href=\"#\" class=\"location\"><i class=\"icon-map-marker\"></i><span>";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "location"), "html", null, true);
                echo "</span></a></strong>                                                    
                    </div>
                </div>
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 18
            echo "     

        </ul>
    </section>
";
        }
    }

    public function getTemplateName()
    {
        return "FenchyNoticeBundle:Widgets:similarListings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 18,  51 => 14,  39 => 10,  29 => 5,  54 => 13,  48 => 12,  37 => 6,  100 => 34,  97 => 33,  91 => 30,  84 => 27,  79 => 25,  76 => 24,  67 => 20,  44 => 13,  27 => 5,  24 => 3,  22 => 3,  19 => 1,  83 => 21,  74 => 23,  68 => 13,  64 => 12,  60 => 11,  55 => 18,  52 => 9,  46 => 7,  42 => 9,  378 => 180,  368 => 173,  354 => 162,  334 => 145,  330 => 144,  324 => 140,  320 => 138,  313 => 135,  311 => 134,  308 => 133,  306 => 132,  294 => 127,  291 => 126,  285 => 124,  283 => 123,  279 => 122,  272 => 118,  264 => 113,  259 => 110,  257 => 109,  249 => 104,  246 => 103,  243 => 102,  207 => 68,  202 => 66,  196 => 63,  192 => 62,  188 => 61,  184 => 60,  174 => 53,  169 => 52,  165 => 50,  159 => 48,  157 => 47,  153 => 46,  149 => 45,  145 => 44,  128 => 30,  124 => 29,  120 => 28,  116 => 45,  112 => 26,  108 => 40,  104 => 24,  101 => 23,  99 => 22,  95 => 32,  90 => 20,  87 => 19,  81 => 16,  77 => 17,  73 => 14,  69 => 13,  65 => 17,  61 => 19,  57 => 10,  53 => 9,  49 => 15,  45 => 13,  41 => 6,  38 => 9,  33 => 6,  30 => 6,);
    }
}
