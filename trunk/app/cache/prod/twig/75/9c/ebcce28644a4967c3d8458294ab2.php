<?php

/* ::labelForm.html.twig */
class __TwigTemplate_759cebcce28644a4967c3d8458294ab2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_row' => array($this, 'block_form_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 8
        echo "    
";
        // line 9
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('form_errors', $context, $blocks);
        // line 31
        echo "    
";
        // line 32
        $this->displayBlock('form_row', $context, $blocks);
    }

    // line 1
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 4
        echo "    ";
        $context["placeholder"] = ((array_key_exists("placeholder", $context)) ? (_twig_default_filter((isset($context["placeholder"]) ? $context["placeholder"] : null), (isset($context["label"]) ? $context["label"] : null))) : ((isset($context["label"]) ? $context["label"] : null)));
        // line 5
        echo "    <input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, trim(twig_lower_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["placeholder"]) ? $context["placeholder"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null))), ":"), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ((!twig_test_empty((isset($context["value"]) ? $context["value"] : null)))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" ";
        }
        echo "/>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 9
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        echo "    ";
        $context["placeholder"] = ((array_key_exists("placeholder", $context)) ? (_twig_default_filter((isset($context["placeholder"]) ? $context["placeholder"] : null), (isset($context["label"]) ? $context["label"] : null))) : ((isset($context["label"]) ? $context["label"] : null)));
        // line 12
        echo "    <textarea placeholder=\"";
        echo twig_escape_filter($this->env, trim(twig_lower_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["placeholder"]) ? $context["placeholder"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null))), ":"), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " />";
        if ((!twig_test_empty((isset($context["value"]) ? $context["value"] : null)))) {
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo " ";
        }
        echo "</textarea>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 16
    public function block_form_errors($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        ob_start();
        // line 18
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 19
            echo "        <ul class=\"input-element-errors\">
            ";
            // line 20
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 21
                echo "                <li>";
                echo twig_escape_filter($this->env, (((null === $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messagePluralization"))) ? ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageParameters"), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messagePluralization"), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageParameters"), "validators"))), "html", null, true);
                // line 25
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 27
            echo "        </ul>
        ";
        }
        // line 29
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 32
    public function block_form_row($context, array $blocks = array())
    {
        // line 33
        ob_start();
        // line 34
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
        echo "
    <div class=\"input-element\">
    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "::labelForm.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  144 => 37,  139 => 35,  134 => 34,  132 => 33,  129 => 32,  124 => 29,  120 => 27,  113 => 25,  110 => 21,  106 => 20,  103 => 19,  97 => 17,  94 => 16,  74 => 10,  71 => 9,  53 => 5,  45 => 2,  25 => 8,  23 => 1,  81 => 16,  75 => 15,  68 => 13,  49 => 9,  35 => 31,  22 => 2,  19 => 1,  86 => 31,  82 => 30,  72 => 22,  69 => 21,  55 => 10,  47 => 3,  41 => 6,  36 => 5,  28 => 9,  278 => 113,  270 => 108,  266 => 107,  260 => 104,  254 => 101,  247 => 97,  243 => 96,  237 => 93,  229 => 88,  222 => 84,  213 => 78,  205 => 73,  197 => 68,  189 => 65,  185 => 64,  179 => 60,  177 => 59,  166 => 51,  157 => 45,  152 => 43,  147 => 41,  143 => 40,  138 => 38,  130 => 32,  127 => 31,  125 => 30,  122 => 29,  116 => 26,  112 => 25,  108 => 24,  104 => 23,  100 => 18,  96 => 21,  92 => 20,  88 => 19,  84 => 18,  79 => 12,  76 => 11,  70 => 13,  66 => 12,  62 => 12,  58 => 10,  54 => 9,  50 => 4,  46 => 7,  42 => 1,  38 => 32,  33 => 16,  30 => 15,);
    }
}
