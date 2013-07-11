<?php

/* FenchyAdminBundle::layout.html.twig */
class __TwigTemplate_5c5873a4413c4c2fe154ffde4834829b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::baseAdmin.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'admincontent' => array($this, 'block_admincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jquery-ui-1.9.1.custom/css/custom-theme/jquery-ui-1.9.1.fenchy.css"), "html", null, true);
        echo "\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/admin/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/regular_user/profile/userprofile-v2.css"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/admin.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        // line 15
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "<section class=\"main\">
    <div class=\"container admin\">
        <div class=\"clearfix\">
            <ul id=\"admin-menu\">
                <li>";
        // line 23
        echo $this->env->getExtension('fenchy_extension')->getLink("Notices", "fenchy_admin_notices", array(), array("class" => "dark"));
        echo "</li>
                <li>";
        // line 24
        echo $this->env->getExtension('fenchy_extension')->getLink("Reviews", "fenchy_admin_reviews", array(), array("class" => "dark"));
        echo "</li>
                <li>";
        // line 25
        echo $this->env->getExtension('fenchy_extension')->getLink("Search", "fenchy_admin_search", array(), array("class" => "dark"));
        echo "</li>
                <li>";
        // line 26
        echo $this->env->getExtension('fenchy_extension')->getLink("Users", "fenchy_admin_users", array(), array("class" => "dark"));
        echo "</li>
            </ul>
            <div id=\"admin-content\">
                ";
        // line 29
        $this->displayBlock('admincontent', $context, $blocks);
        // line 30
        echo "            </div>
            </div>
        </div>
    </section>
";
    }

    // line 29
    public function block_admincontent($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FenchyAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 29,  109 => 30,  107 => 29,  101 => 26,  97 => 25,  93 => 24,  83 => 19,  80 => 18,  73 => 15,  68 => 13,  62 => 10,  57 => 9,  54 => 8,  48 => 6,  44 => 5,  35 => 3,  32 => 2,  239 => 95,  225 => 86,  216 => 83,  212 => 82,  209 => 81,  200 => 79,  196 => 78,  191 => 76,  188 => 75,  184 => 74,  169 => 61,  160 => 59,  156 => 58,  148 => 53,  141 => 49,  134 => 45,  116 => 31,  110 => 29,  104 => 27,  102 => 26,  98 => 25,  89 => 23,  85 => 22,  79 => 21,  75 => 20,  71 => 14,  67 => 18,  63 => 17,  59 => 16,  56 => 15,  52 => 14,  40 => 4,  33 => 4,  30 => 3,  25 => 2,);
    }
}
