<?php

/* ::noLabelForm.html.twig */
class __TwigTemplate_7616016f7516777e4a72dcce41e2218d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_label' => array($this, 'block_form_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
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
        $this->displayBlock('form_label', $context, $blocks);
        // line 10
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 11
        echo "    
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 18
        echo "    
";
        // line 19
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
    public function block_form_label($context, array $blocks = array())
    {
    }

    // line 10
    public function block_checkbox_label($context, array $blocks = array())
    {
        echo "<label>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null)), "html", null, true);
        echo "</label>";
    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["placeholder"] = ((array_key_exists("placeholder", $context)) ? (_twig_default_filter((isset($context["placeholder"]) ? $context["placeholder"] : null), (isset($context["label"]) ? $context["label"] : null))) : ((isset($context["label"]) ? $context["label"] : null)));
        // line 15
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

    // line 19
    public function block_form_row($context, array $blocks = array())
    {
        // line 20
        ob_start();
        // line 21
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
        echo "
    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "::noLabelForm.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  120 => 22,  115 => 21,  113 => 20,  110 => 19,  92 => 14,  53 => 4,  50 => 3,  41 => 19,  38 => 18,  36 => 12,  33 => 11,  29 => 9,  26 => 8,  24 => 1,  73 => 52,  58 => 38,  42 => 25,  22 => 10,  19 => 5,  217 => 75,  213 => 74,  205 => 68,  203 => 67,  200 => 66,  197 => 65,  191 => 61,  183 => 56,  173 => 52,  164 => 49,  161 => 48,  155 => 45,  150 => 43,  145 => 41,  141 => 40,  138 => 39,  136 => 38,  130 => 34,  127 => 33,  125 => 32,  122 => 31,  117 => 28,  112 => 26,  108 => 25,  104 => 24,  94 => 21,  89 => 20,  83 => 18,  79 => 10,  75 => 53,  70 => 15,  67 => 14,  51 => 9,  45 => 1,  43 => 6,  39 => 5,  34 => 4,  31 => 10,  374 => 177,  358 => 164,  350 => 159,  346 => 158,  337 => 152,  331 => 149,  328 => 148,  322 => 145,  319 => 144,  316 => 143,  308 => 140,  304 => 138,  302 => 137,  297 => 135,  290 => 131,  283 => 127,  276 => 123,  273 => 122,  265 => 117,  259 => 114,  247 => 104,  244 => 103,  242 => 102,  237 => 100,  231 => 97,  224 => 95,  219 => 93,  214 => 91,  208 => 90,  199 => 84,  190 => 78,  178 => 54,  174 => 68,  169 => 51,  160 => 61,  157 => 60,  147 => 53,  142 => 50,  129 => 40,  126 => 39,  124 => 23,  111 => 28,  107 => 27,  103 => 26,  99 => 23,  95 => 15,  90 => 13,  87 => 12,  84 => 21,  82 => 20,  78 => 19,  74 => 9,  69 => 17,  66 => 16,  60 => 11,  56 => 5,  52 => 34,  48 => 2,  44 => 7,  40 => 6,  35 => 20,  32 => 4,  27 => 2,);
    }
}
