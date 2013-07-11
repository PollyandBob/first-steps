<?php

/* FenchyRegularUserBundle::settingsWithoutFormTheme.html.twig */
class __TwigTemplate_d6a9e88591147e70d935d779f8072ad7 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/app/sidebar-v2.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "<section class=\"main content-rtl\">
    <div id=\"main-container\" class=\"wrapper-inner-content\">
        <div class=\"clearfix\">
            ";
        // line 12
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

    // line 19
    public function block_galleryContainer($context, array $blocks = array())
    {
        // line 20
        echo "    <div id=\"gallery-edit-container\" class=\"file-uploader\"></div>
    
    <div style=\"display:none\">
        <div id=\"crop-area\">
            <img src=\"\" id=\"target\" alt=\"\" />
            <table class=\"buttons-panel\">
                <tbody>
                    <tr>
                        <td><button id=\"crop-cancel\" class=\"button gray\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn.cancel"), "html", null, true);
        echo "</button></td>
                        <td><button id=\"crop-submit\" class=\"button green\">";
        // line 29
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
        return "FenchyRegularUserBundle::settingsWithoutFormTheme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 29,  79 => 28,  69 => 20,  66 => 19,  53 => 12,  45 => 8,  39 => 5,  34 => 4,  31 => 3,  258 => 135,  248 => 133,  238 => 131,  236 => 130,  222 => 123,  219 => 122,  211 => 120,  201 => 118,  199 => 117,  191 => 112,  186 => 110,  180 => 106,  178 => 105,  170 => 100,  166 => 98,  163 => 97,  143 => 80,  132 => 72,  123 => 66,  114 => 60,  89 => 38,  80 => 32,  71 => 26,  51 => 10,  48 => 9,  42 => 6,  38 => 5,  33 => 4,  30 => 3,);
    }
}
