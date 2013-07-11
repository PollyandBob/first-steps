<?php

/* FenchyRegularUserBundle:Partials:userProfileLeftMenuV2.html.twig */
class __TwigTemplate_9281e5fcb5a9e398947bdeb66632eaa4 extends Twig_Template
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
        // line 2
        echo "<div class=\"wrapper\">
    <section class=\"user-profile-group\">
        <figure class=\"avatar\">
            <span class=\"image-container large-avatar bordered\"><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["displayUser"]) ? $context["displayUser"] : null), "regularuser"), "avatar", array(0 => false), "method"), "html", null, true);
        echo "\" alt=\"\"/></span>
            <div class=\"ranking-flag status-flag\">
                <strong>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["displayUser"]) ? $context["displayUser"] : null), "activity"), "html", null, true);
        echo "</strong>
            </div>
            <figcaption class=\"profile-master\">
                <strong class=\"info-by-line\"><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_user_profilev2", array("userId" => $this->getAttribute((isset($context["displayUser"]) ? $context["displayUser"] : null), "id"))), "html", null, true);
        echo "\" class=\"name\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["displayUser"]) ? $context["displayUser"] : null), "userregular"), "firstname"), "html", null, true);
        echo "</a></strong>
                <strong class=\"info-by-line\"><span class=\"location\"><i class=\"icon-map-marker\"></i>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["displayUser"]) ? $context["displayUser"] : null), "location"), "html", null, true);
        echo "</span></strong>
                ";
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "id") != $this->getAttribute((isset($context["displayUser"]) ? $context["displayUser"] : null), "id")))) {
            // line 13
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fenchy_create_user_sticker", array("id" => $this->getAttribute((isset($context["displayUser"]) ? $context["displayUser"] : null), "id"))), "html", null, true);
            echo "\" class=\"add-sticker icon-flag-alt\"></a>
                ";
        }
        // line 15
        echo "            </figcaption>
        </figure>
        ";
        // line 17
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "id") != $this->getAttribute((isset($context["displayUser"]) ? $context["displayUser"] : null), "id")))) {
            // line 18
            echo "        <div class=\"button green-button\">
            <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_messages_new", array("id" => $this->getAttribute((isset($context["displayUser"]) ? $context["displayUser"] : null), "id"))), "html", null, true);
            echo "\" class=\"wrapper\">                                            
                <i class=\"icon-envelope-alt\"></i>
                <strong>";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn.send_message"), "html", null, true);
            echo "</strong>
            </a>
        </div>
        ";
        }
        // line 25
        echo "        ";
        if (((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "id") != $this->getAttribute((isset($context["displayUser"]) ? $context["displayUser"] : null), "id"))) && (!$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "regularUser"), "myFriend", array(0 => $this->getAttribute((isset($context["displayUser"]) ? $context["displayUser"] : null), "regularUser")), "method"))) && (!$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "regularUser"), "isInvited", array(0 => $this->getAttribute((isset($context["displayUser"]) ? $context["displayUser"] : null), "regularUser")), "method")))) {
            // line 26
            echo "            <div class=\"button green-button button-margin\">
                <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_friend_invite", array("id" => $this->getAttribute($this->getAttribute((isset($context["displayUser"]) ? $context["displayUser"] : null), "regularuser"), "id"))), "html", null, true);
            echo "\" class=\"wrapper\">                                            
                    <i class=\"icon-user\"></i>
                    <strong>";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.friends.invite"), "html", null, true);
            echo "</strong>
                </a>
            </div>          
        ";
        }
        // line 33
        echo "    </section>
        
    ";
        // line 35
        echo $this->env->getExtension('actions')->renderAction("FenchyRegularUserBundle:Profile:repBreakdownWidget", array("displayUserId" => $this->getAttribute((isset($context["displayUser"]) ? $context["displayUser"] : null), "id")), array());
        // line 36
        echo "
    <section class=\"user-profile-group\">
       <h4>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.additional_info"), "html", null, true);
        echo "</h4>
       <ul class=\"additional-user-info profile-summary-list\">
           <li><p id=\"languages-container\">
                   <strong class=\"info-by-line\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.languages"), "html", null, true);
        echo "</strong>                                            
                   <input id=\"spoken-languages\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["displayUser"]) ? $context["displayUser"] : null), "regularuser"), "languages"), "html", null, true);
        echo "\"/>
               </p>
            </li>
           <li><p>
                   <strong class=\"info-by-line\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("member_since"), "html", null, true);
        echo ":</strong>                                            
                   <strong class=\"info-by-line\">";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["displayUser"]) ? $context["displayUser"] : null), "createdAt"), "F jS, Y"), "html", null, true);
        echo "</strong>
               </p>                                           
            </li>
        </ul>
    </section>                                
</div>
";
    }

    public function getTemplateName()
    {
        return "FenchyRegularUserBundle:Partials:userProfileLeftMenuV2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 47,  119 => 46,  112 => 42,  102 => 38,  98 => 36,  80 => 27,  77 => 26,  67 => 21,  62 => 19,  59 => 18,  47 => 13,  35 => 10,  24 => 5,  19 => 2,  40 => 8,  37 => 7,  32 => 4,  29 => 7,  297 => 138,  295 => 137,  292 => 136,  290 => 135,  285 => 132,  283 => 131,  273 => 125,  271 => 124,  268 => 123,  258 => 114,  252 => 112,  245 => 110,  239 => 108,  237 => 107,  223 => 96,  185 => 61,  179 => 58,  175 => 57,  171 => 56,  167 => 55,  161 => 52,  157 => 51,  152 => 50,  148 => 48,  142 => 46,  140 => 45,  136 => 44,  132 => 43,  128 => 42,  108 => 41,  104 => 24,  100 => 23,  96 => 35,  92 => 33,  88 => 20,  85 => 29,  83 => 18,  79 => 17,  74 => 25,  71 => 15,  65 => 12,  61 => 11,  57 => 17,  53 => 15,  49 => 8,  45 => 12,  41 => 11,  38 => 5,  33 => 4,  30 => 3,);
    }
}
