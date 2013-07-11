<?php

/* FenchyAdminBundle:Default:edit.html.twig */
class __TwigTemplate_9bcc4adf7146d74a33f47b5d1fb1a308 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FenchyAdminBundle::layout.html.twig");

        $this->blocks = array(
            'admincontent' => array($this, 'block_admincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FenchyAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_admincontent($context, array $blocks = array())
    {
        // line 3
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(("fenchy_admin_" . (isset($context["type"]) ? $context["type"] : null)), array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " class=\"student-form\">
        ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        Remove all stickers: <input type=\"checkbox\" checked=\"checked\" value=\"1\" name=\"removeStickers\"/><br/>
        <input type=\"submit\" value=\"Update\"/>
    </form>
";
    }

    public function getTemplateName()
    {
        return "FenchyAdminBundle:Default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  31 => 3,  28 => 2,);
    }
}
