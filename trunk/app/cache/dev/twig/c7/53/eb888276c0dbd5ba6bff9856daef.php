<?php

/* FenchyFrontendBundle:Frontend/Foot:privacy.html.twig */
class __TwigTemplate_c753eb888276c0dbd5ba6bff9856daef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FenchyFrontendBundle::static.html.twig");

        $this->blocks = array(
            'content_static' => array($this, 'block_content_static'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FenchyFrontendBundle::static.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_static($context, array $blocks = array())
    {
        // line 4
        echo "    
        <h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontend.privacy.title"), "html", null, true);
        echo "</h1>
        ";
        // line 6
        if (((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")) == "de")) {
            // line 7
            echo "            ";
            $this->env->loadTemplate("FenchyFrontendBundle:Frontend:privacy-content-de.html.twig")->display($context);
            // line 8
            echo "        ";
        } elseif (((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")) == "en")) {
            // line 9
            echo "            ";
            $this->env->loadTemplate("FenchyFrontendBundle:Frontend:privacy-content-en.html.twig")->display($context);
            // line 10
            echo "        ";
        } else {
            // line 11
            echo "            ";
            $this->env->loadTemplate("FenchyFrontendBundle:Frontend:privacy-content-en.html.twig")->display($context);
            // line 12
            echo "        ";
        }
        // line 13
        echo "    
";
    }

    public function getTemplateName()
    {
        return "FenchyFrontendBundle:Frontend/Foot:privacy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 13,  55 => 12,  52 => 11,  49 => 10,  46 => 9,  43 => 8,  40 => 7,  38 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
