<?php

/* FenchyRegularUserBundle::settings.html.twig */
class __TwigTemplate_ff72bd5cd7c9a66c3f774e90446d69a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::baseV2.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'settings_content' => array($this, 'block_settings_content'),
            'galleryContainer' => array($this, 'block_galleryContainer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseV2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "::labelForm.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "    
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/app/sidebar-v2.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "<section class=\"main content-rtl\">
    <div id=\"main-container\" class=\"wrapper-inner-content\">
        <div class=\"clearfix\">            
            ";
        // line 13
        $this->displayBlock('settings_content', $context, $blocks);
        echo "            
        </div>
    </div>    
</section>
        
";
    }

    public function block_settings_content($context, array $blocks = array())
    {
    }

    // line 21
    public function block_galleryContainer($context, array $blocks = array())
    {
        // line 22
        echo "    <div id=\"gallery-edit-container\" class=\"file-uploader\"></div>
    
    <div style=\"display:none\">
        <div id=\"crop-area\">
            <img src=\"\" id=\"target\" alt=\"\" />
            <table class=\"buttons-panel\">
                <tbody>
                    <tr>
                        <td><button id=\"crop-cancel\" class=\"button gray\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn.cancel"), "html", null, true);
        echo "</button></td>
                        <td><button id=\"crop-submit\" class=\"button green\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn.ok"), "html", null, true);
        echo "</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
";
    }

    public function getTemplateName()
    {
        return "FenchyRegularUserBundle::settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 31,  82 => 30,  72 => 22,  69 => 21,  55 => 13,  47 => 9,  41 => 6,  36 => 5,  28 => 2,  278 => 113,  270 => 108,  266 => 107,  260 => 104,  254 => 101,  247 => 97,  243 => 96,  237 => 93,  229 => 88,  222 => 84,  213 => 78,  205 => 73,  197 => 68,  189 => 65,  185 => 64,  179 => 60,  177 => 59,  166 => 51,  157 => 45,  152 => 43,  147 => 41,  143 => 40,  138 => 38,  130 => 32,  127 => 31,  125 => 30,  122 => 29,  116 => 26,  112 => 25,  108 => 24,  104 => 23,  100 => 22,  96 => 21,  92 => 20,  88 => 19,  84 => 18,  79 => 17,  76 => 16,  70 => 13,  66 => 12,  62 => 11,  58 => 10,  54 => 9,  50 => 10,  46 => 7,  42 => 6,  38 => 5,  33 => 4,  30 => 3,);
    }
}
