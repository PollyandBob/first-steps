<?php

/* FenchyRegularUserBundle:Listing:create1.html.twig */
class __TwigTemplate_8e242991277669925836d2eb969bcc6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::baseV2.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseV2.html.twig";
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
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/app/main-container-v2.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/regular_user/listing/create.css"), "html", null, true);
        echo "\" type=\"text/css\" />    
";
    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/regular_user/listing/create.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "     <section data-role=\"main\" class=\"main\">
        <div id=\"main-container\">
            <div class=\"inner-content\">
                <header class=\"clearfix\">
                    <h1>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("listing.create.title"), "html", null, true);
        echo "</h1>
                    <div class=\"button grey-button pull-right\">
                        <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_listing_manage"), "html", null, true);
        echo "\" class=\"wrapper\">
                            <strong>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("listing.manage_listings"), "html", null, true);
        echo "</strong>
                        </a>
                    </div>
                </header>
                <div id=\"reviews-tabs\">
                    <ul id=\"tabs\" class=\"clearfix\">
                        <li class=\"tabs-active\"><a href=\"#\"><strong class=\"circle-count\">1</strong><strong>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("listing.create.tab_title.1"), "html", null, true);
        echo "</strong></a></li>
                        <li><a href=\"#\"><strong class=\"circle-count\">2</strong><strong>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("listing.create.tab_title.2"), "html", null, true);
        echo "</strong></a></li>
                    </ul>
                    <div class=\"tabs-panel\">
                        <div id=\"tip\">
                            <h2>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("listing.create.1.subtitle"), "html", null, true);
        echo "</h2>
                            <p>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("listing.create.1.description"), "html", null, true);
        echo "</p>
                        </div>
                        <ul id=\"type-choices\">
                        ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 37
            echo "                            ";
            $context["dirProp"] = $this->getAttribute((isset($context["type"]) ? $context["type"] : null), "hasProperty", array(0 => (isset($context["direction"]) ? $context["direction"] : null)), "method");
            // line 38
            echo "                            ";
            if ((isset($context["dirProp"]) ? $context["dirProp"] : null)) {
                // line 39
                echo "                                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["dirProp"]) ? $context["dirProp"] : null), "options"));
                foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
                    // line 40
                    echo "                                <li class=\"action-element\">
                                    <a href=\"";
                    // line 41
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_notice_create2", array("typename" => $this->getAttribute((isset($context["type"]) ? $context["type"] : null), "name"), "direction" => (isset($context["opt"]) ? $context["opt"] : null))), "html", null, true);
                    echo "\">
                                        <span class=\"category-btn\">
                                            <img src=\"/images/types/";
                    // line 43
                    echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, (isset($context["opt"]) ? $context["opt"] : null), "html", null, true);
                    echo "_big.png\" alt=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["type"]) ? $context["type"] : null)), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["opt"]) ? $context["opt"] : null)), "html", null, true);
                    echo "\"/>
                                        </span>
                                        <strong class=\"info-by-line\">";
                    // line 45
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["type"]) ? $context["type"] : null)), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["opt"]) ? $context["opt"] : null)), "html", null, true);
                    echo "</strong>
                                    </a>
                                </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 49
                echo "                            ";
            } else {
                // line 50
                echo "                                <li class=\"action-element\">
                                    <a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_notice_create2", array("typename" => $this->getAttribute((isset($context["type"]) ? $context["type"] : null), "name"), "direction" => null)), "html", null, true);
                echo "\">
                                        <span class=\"category-btn\">
                                            <img src=\"/images/types/";
                // line 53
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
                echo "_big.png\" alt=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["type"]) ? $context["type"] : null)), "html", null, true);
                echo "\"/>
                                        </span>
                                        <strong class=\"info-by-line\">";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["type"]) ? $context["type"] : null)), "html", null, true);
                echo "</strong>
                                    </a>
                                </li>
                            ";
            }
            // line 59
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 60
        echo "                        </ul>                         
                    </div>    
                </div>
            </div>                                    
        </div>
    </section>
    
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            createListing.step1.init();
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "FenchyRegularUserBundle:Listing:create1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 60,  181 => 59,  174 => 55,  167 => 53,  162 => 51,  159 => 50,  156 => 49,  144 => 45,  133 => 43,  128 => 41,  125 => 40,  120 => 39,  117 => 38,  114 => 37,  110 => 36,  104 => 33,  100 => 32,  93 => 28,  89 => 27,  80 => 21,  76 => 20,  71 => 18,  65 => 14,  62 => 13,  56 => 10,  51 => 9,  48 => 8,  42 => 6,  38 => 5,  33 => 4,  30 => 3,);
    }
}
