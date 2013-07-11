<?php

/* FenchyRegularUserBundle::messages.html.twig */
class __TwigTemplate_e803a3c09f04811dbac6fc8455915780 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::baseV2.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'message_content' => array($this, 'block_message_content'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/message/index-v2.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/app/custom-form.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/regular_user/messages/scripts.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "<section data-role=\"main\" class=\"main\">
        <div id=\"main-container\" class=\"wrapper-inner-content no-search\">
            <div class=\"inner-content\">                
                <header>
                    <h1><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_messages_index"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.message.message_center"), "html", null, true);
        echo "</a></h1>
                </header>
                <div id=\"message-center-wrapper\">
                        ";
        // line 24
        $this->displayBlock('message_content', $context, $blocks);
        // line 25
        echo "                </div>                
            </div>
        </div>
</section>
";
    }

    // line 24
    public function block_message_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FenchyRegularUserBundle::messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 25,  84 => 24,  76 => 21,  70 => 17,  61 => 12,  56 => 11,  53 => 10,  47 => 7,  43 => 6,  39 => 5,  34 => 4,  31 => 3,  218 => 92,  213 => 90,  208 => 88,  200 => 83,  178 => 63,  172 => 60,  169 => 59,  166 => 58,  157 => 55,  146 => 53,  142 => 52,  138 => 51,  131 => 49,  124 => 48,  119 => 47,  117 => 46,  111 => 43,  102 => 37,  98 => 36,  94 => 24,  90 => 34,  73 => 20,  67 => 16,  59 => 14,  54 => 11,  51 => 10,  45 => 7,  41 => 6,  37 => 5,  32 => 4,  29 => 3,);
    }
}
