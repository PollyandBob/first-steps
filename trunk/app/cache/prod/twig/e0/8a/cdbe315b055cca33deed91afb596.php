<?php

/* FenchyRegularUserBundle:Settings:menuV2.html.twig */
class __TwigTemplate_e08acdbe315b055cca33deed91afb596 extends Twig_Template
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
        echo "<ul>
    <li ";
        // line 2
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "requestUri") == $this->env->getExtension('routing')->getPath("fenchy_regular_user_settings_basic"))) {
            echo "class=\"active\"";
        }
        echo " >
        <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_settings_basic"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("settings.general.name"), "html", null, true);
        echo "</a>
    </li>
    <li ";
        // line 5
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "requestUri") == $this->env->getExtension('routing')->getPath("fenchy_regular_user_settings_location"))) {
            echo "class=\"active\"";
        }
        echo " >
        <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_settings_location"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("settings.location.name"), "html", null, true);
        echo "</a>
    </li>    
    
    <li ";
        // line 9
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "requestUri") == $this->env->getExtension('routing')->getPath("fenchy_regular_user_settings_notifications"))) {
            echo "class=\"active\"";
        }
        echo " >
        <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_settings_notifications"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("settings.emailnotifications.name"), "html", null, true);
        echo "</a>
    </li>     
    <li ";
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "requestUri") == $this->env->getExtension('routing')->getPath("fenchy_regular_user_settings_socialnetworks"))) {
            echo "class=\"active\"";
        }
        echo " >
        <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_settings_socialnetworks"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("settings.socialnetworks.name"), "html", null, true);
        echo "</a>
    </li>     
    <li ";
        // line 15
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "requestUri") == $this->env->getExtension('routing')->getPath("fenchy_regular_user_settings_account"))) {
            echo "class=\"active\"";
        }
        echo " >
        <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_settings_account"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("settings.account.name"), "html", null, true);
        echo "</a>
    </li>      
</ul>";
    }

    public function getTemplateName()
    {
        return "FenchyRegularUserBundle:Settings:menuV2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 16,  75 => 15,  68 => 13,  49 => 9,  35 => 5,  22 => 2,  19 => 1,  86 => 31,  82 => 30,  72 => 22,  69 => 21,  55 => 10,  47 => 9,  41 => 6,  36 => 5,  28 => 3,  278 => 113,  270 => 108,  266 => 107,  260 => 104,  254 => 101,  247 => 97,  243 => 96,  237 => 93,  229 => 88,  222 => 84,  213 => 78,  205 => 73,  197 => 68,  189 => 65,  185 => 64,  179 => 60,  177 => 59,  166 => 51,  157 => 45,  152 => 43,  147 => 41,  143 => 40,  138 => 38,  130 => 32,  127 => 31,  125 => 30,  122 => 29,  116 => 26,  112 => 25,  108 => 24,  104 => 23,  100 => 22,  96 => 21,  92 => 20,  88 => 19,  84 => 18,  79 => 17,  76 => 16,  70 => 13,  66 => 12,  62 => 12,  58 => 10,  54 => 9,  50 => 10,  46 => 7,  42 => 6,  38 => 5,  33 => 4,  30 => 3,);
    }
}
