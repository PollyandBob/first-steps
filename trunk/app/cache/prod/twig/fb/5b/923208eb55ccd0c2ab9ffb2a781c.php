<?php

/* UserBundle:Widgets:userPanel.html.twig */
class __TwigTemplate_fb5b923208eb55ccd0c2ab9ffb2a781c extends Twig_Template
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
        echo "<ul id=\"user-account-item\" class=\"pull-right\">
    <li class=\"top-icons home\">
        <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_user_profilev2"), "html", null, true);
        echo "\">
            ";
        // line 4
        $context["countInv"] = $this->env->getExtension('fenchy_regularuser_extension')->countInvitations();
        // line 5
        echo "            ";
        if (((isset($context["rev_unread_count"]) ? $context["rev_unread_count"] : null) || (isset($context["countInv"]) ? $context["countInv"] : null))) {
            // line 6
            echo "                <span class=\"badge\">";
            echo twig_escape_filter($this->env, ((isset($context["rev_unread_count"]) ? $context["rev_unread_count"] : null) + (isset($context["countInv"]) ? $context["countInv"] : null)), "html", null, true);
            echo "</span>
            ";
        }
        // line 8
        echo "            <i class=\"icon-home\"></i>                                        
        </a>
    </li>
    <li class=\"top-icons\">
        <a href=\"#\" class=\"wrapper-badge\">
            ";
        // line 13
        $context["count"] = $this->env->getExtension('fenchy_messenger_extension')->countUnread();
        // line 14
        echo "            ";
        if (((isset($context["count"]) ? $context["count"] : null) > 0)) {
            // line 15
            echo "                <span class=\"badge\">";
            echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true);
            echo "</span>
            ";
        }
        // line 17
        echo "        </a>
        <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_messages_index"), "html", null, true);
        echo "\">
            <i class=\"icon-envelope\"></i>                                        
        </a>

    </li>
    <li id=\"user-account-login-menu\">
        <div>
            <a href=\"#\">
                <span class=\"image-container vsmall-avatar\">
                    <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->absolute($this->env->getExtension('assets')->getAssetUrl((isset($context["thumb"]) ? $context["thumb"] : null))), "html", null, true);
        echo "\" alt=\"\"/>                        
                </span>                            
                <strong>";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</strong>
                <i class=\"icon-caret-down\"></i>
                <i class=\"icon-caret-up\"></i>
            </a>
            <ul id=\"user-account-login-menu-wrapper\">
                ";
        // line 34
        if ($this->env->getExtension('security')->isGranted("ROLE_FULL_USER")) {
            // line 35
            echo "                <li>
                    <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_listing_manage"), "html", null, true);
            echo "\">
                        <strong>";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontend.manage_listings"), "html", null, true);
            echo "</strong>
                    </a>
                </li>
                ";
        }
        // line 41
        echo "                <li>
                    <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_user_profilev2"), "html", null, true);
        echo "\">
                        <strong>";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontend.my_profile"), "html", null, true);
        echo "</strong>
                    </a>
                </li>            
                <li>
                    <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_settings_basic"), "html", null, true);
        echo "\">
                        <strong>";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontend.settings"), "html", null, true);
        echo "</strong>
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
        echo "\">
                        <strong>";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontend.log_out"), "html", null, true);
        echo "</strong>
                    </a>
                </li>
                ";
        // line 56
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 57
            echo "                <li>
                    <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_admin_notices"), "html", null, true);
            echo "\">
                        <strong>";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontend.admin"), "html", null, true);
            echo "</strong>
                    </a>
                </li>
                ";
        }
        // line 63
        echo "            </ul>
        </div>                
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:Widgets:userPanel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 63,  140 => 58,  137 => 57,  135 => 56,  129 => 53,  118 => 48,  107 => 43,  103 => 42,  86 => 35,  84 => 34,  59 => 18,  50 => 15,  47 => 14,  45 => 13,  32 => 6,  29 => 5,  27 => 4,  23 => 3,  19 => 1,  187 => 60,  181 => 59,  174 => 55,  167 => 53,  162 => 51,  159 => 50,  156 => 49,  144 => 59,  133 => 43,  128 => 41,  125 => 52,  120 => 39,  117 => 38,  114 => 47,  110 => 36,  104 => 33,  100 => 41,  93 => 37,  89 => 36,  80 => 21,  76 => 29,  71 => 27,  65 => 14,  62 => 13,  56 => 17,  51 => 9,  48 => 8,  42 => 6,  38 => 8,  33 => 4,  30 => 3,);
    }
}
