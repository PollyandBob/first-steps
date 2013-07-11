<?php

/* FenchyRegularUserBundle:Message:index.json.twig */
class __TwigTemplate_7a7f2b61140e839f0204f4ce891129e1 extends Twig_Template
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
        echo twig_jsonencode_filter((isset($context["messages"]) ? $context["messages"] : null));
    }

    public function getTemplateName()
    {
        return "FenchyRegularUserBundle:Message:index.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
