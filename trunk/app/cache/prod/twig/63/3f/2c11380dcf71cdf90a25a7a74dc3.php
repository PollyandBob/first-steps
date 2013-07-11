<?php

/* FenchyRegularUserBundle:Settings:account.html.twig */
class __TwigTemplate_633f2c11380dcf71cdf90a25a7a74dc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FenchyRegularUserBundle::settings.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'settings_content' => array($this, 'block_settings_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FenchyRegularUserBundle::settings.html.twig";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/app/settings-v2.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/app/main-container-v2.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 9
    public function block_settings_content($context, array $blocks = array())
    {
        // line 10
        echo "
    <section id=\"profile_left_menu\" class=\"sidebar pull-left\">
        <div class=\"wrapper\">
            ";
        // line 13
        $this->env->loadTemplate("FenchyRegularUserBundle:Settings:menuV2.html.twig")->display($context);
        // line 14
        echo "        </div>   
    </section>
    <section class=\"content pull-right\">
        <div class=\"profile_right_content inner-content\">
            <header><h1>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.settings"), "html", null, true);
        echo "</h1></header>
            <form action=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_settings_account"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " class=\"form-settings general\">

                <div class=\"form-box-wrapper\">
                    <h2>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("settings.account.name"), "html", null, true);
        echo "</h2>

                    <div class=\"row input-wrapper\">
                            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'row');
        echo "
                        </div>

                    <div class=\"row input-wrapper\">
                            <label>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.change_password"), "html", null, true);
        echo "</label>

                                <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_change_password"), "html", null, true);
        echo "\" class=\"button\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.change_your_password"), "html", null, true);
        echo "</a>

                        </div>                

                    <div class=\"row input-wrapper\">
                            <label>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.delete_account"), "html", null, true);
        echo "</label>

                                <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_settings_deleteaccount"), "html", null, true);
        echo "\" class=\"button\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.delete_your_account"), "html", null, true);
        echo "</a>

                        </div>                                

                        <div style=\"display:none;\">";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "</div>                                        
                    <footer class=\"clearfix\">
                        <div class=\"button grey-button pull-left\" id=\"buttons\">
                            <a id=\"back\" class=\"wrapper\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_frontend_indexv2"), "html", null, true);
        echo "\">
                                <strong>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn.cancel"), "html", null, true);
        echo "</strong>
                            </a>                            
                        </div>
                        <div class=\"button submit pull-right\">
                            <div>
                                <input type=\"submit\" id=\"continue\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn.save"), "html", null, true);
        echo "\"/>                                
                            </div>
                        </div>
                    </footer>
                </div>   
            </form>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "FenchyRegularUserBundle:Settings:account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 51,  127 => 46,  123 => 45,  117 => 42,  108 => 38,  103 => 36,  93 => 31,  88 => 29,  81 => 25,  75 => 22,  67 => 19,  63 => 18,  57 => 14,  55 => 13,  50 => 10,  47 => 9,  41 => 6,  37 => 5,  32 => 4,  29 => 3,);
    }
}
