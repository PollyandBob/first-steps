<?php

/* FenchyRegularUserBundle:Settings:notifications.html.twig */
class __TwigTemplate_41da85a06a90d875e8a44370c7843b01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FenchyRegularUserBundle::settingsWithoutFormTheme.html.twig");

        $this->blocks = array(
            'form_label' => array($this, 'block_form_label'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'settings_content' => array($this, 'block_settings_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FenchyRegularUserBundle::settingsWithoutFormTheme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => $this));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_form_label($context, array $blocks = array())
    {
        // line 7
        ob_start();
        // line 8
        echo "    ";
        if ((!(isset($context["compound"]) ? $context["compound"] : null))) {
            // line 9
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("for" => (isset($context["id"]) ? $context["id"] : null)));
            // line 10
            echo "    ";
        }
        // line 11
        echo "    ";
        if ((isset($context["required"]) ? $context["required"] : null)) {
            // line 12
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " required"))));
            // line 13
            echo "    ";
        }
        // line 14
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
            // line 15
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->renderer->humanize((isset($context["name"]) ? $context["name"] : null));
            // line 16
            echo "    ";
        }
        // line 17
        echo "<label";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : null), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : null), "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(("schema." . (isset($context["label"]) ? $context["label"] : null))), "html", null, true);
        echo "</label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/app/settings-v2.css"), "html", null, true);
        echo "\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/app/main-container-v2.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 29
    public function block_settings_content($context, array $blocks = array())
    {
        // line 30
        echo "    <section id=\"profile_left_menu\" class=\"sidebar pull-left\">
        <div class=\"wrapper\">
            ";
        // line 32
        $this->env->loadTemplate("FenchyRegularUserBundle:Settings:menuV2.html.twig")->display($context);
        // line 33
        echo "        </div>        
    </section>
    <section class=\"content pull-right\">
        <div class=\"profile_right_content inner-content\">
            <header><h1>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.settings"), "html", null, true);
        echo "</h1></header>
            <form action=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_settings_notifications"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " class=\"course-form\">
                <div class=\"form-box-wrapper\">
                    <h2>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("settings.emailnotifications.name"), "html", null, true);
        echo "</h2>
                    <ul class=\"list-form\">
                        <div>
                            ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "notification_group_intervals"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 44
            echo "                            <li class=\"row options\"><label>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(("regularuser." . $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "vars"), "value"))), "html", null, true);
            echo "</label> 
                                <div class=\"input-element\">
                                    <div>
                                    ";
            // line 47
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["child"]) ? $context["child"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                echo " 
                                        ";
                // line 48
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["child"]) ? $context["child"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 49
                    echo "                                            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["option"]) ? $context["option"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
                        echo " ";
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["o"]) ? $context["o"] : null), 'widget');
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["o"]) ? $context["o"] : null), 'label');
                        echo " ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['o'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    echo " 
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 51
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 52
            echo "                                    </div>
                                </div>
                            </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 56
        echo "                                </div>
                                <div class=\"row list-row\">


                ";
        // line 60
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "notifications"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 61
            echo "                                    <li>
                        ";
            // line 62
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'widget');
            echo " ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'label');
            echo "
                                        </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 65
        echo "                                    </div>
                                    
                                </ul>
            ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
                    
                    <footer class=\"clearfix\">
                        <div class=\"button grey-button pull-left\" id=\"buttons\">
                            <a id=\"back\" class=\"wrapper\" href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_frontend_indexv2"), "html", null, true);
        echo "\">
                                <strong>";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn.cancel"), "html", null, true);
        echo "</strong>
                            </a>                            
                        </div>
                        <div class=\"button submit pull-right\">
                            <div>
                                <input type=\"submit\" id=\"continue\" value=\"";
        // line 78
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
        return "FenchyRegularUserBundle:Settings:notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 78,  230 => 73,  226 => 72,  219 => 68,  214 => 65,  203 => 62,  200 => 61,  196 => 60,  190 => 56,  181 => 52,  175 => 51,  156 => 49,  152 => 48,  146 => 47,  139 => 44,  135 => 43,  129 => 40,  122 => 38,  118 => 37,  112 => 33,  110 => 32,  106 => 30,  103 => 29,  97 => 25,  93 => 24,  88 => 23,  85 => 22,  64 => 17,  61 => 16,  58 => 15,  55 => 14,  52 => 13,  49 => 12,  46 => 11,  43 => 10,  40 => 9,  37 => 8,  35 => 7,  32 => 6,  27 => 3,);
    }
}
