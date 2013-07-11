<?php

/* FOSUserBundle:Security:login_extended.html.twig */
class __TwigTemplate_39331b4990ccfcd7d952e84bf681df68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::baseV2.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<section class=\"main\">
    <div id=\"login-wrapper-wide\" class=\"loginform loginform-ext\">
        <a href=\"#\" class=\"sign-btn fb_btn clearfix login-with-facebook\">
            <span><i>facebook</i></span>
            <span><strong>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontend.sign_in_facebook"), "html", null, true);
        echo "</strong></span>
        </a>
        <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("connect_twitter"), "html", null, true);
        echo "\" class=\"sign-btn tt_btn clearfix login-with-twitter\">
            <span><i>twitter</i></span>
            <span><strong>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontend.sign_in_twitter"), "html", null, true);
        echo "</strong></span>
        </a>
        <p><strong>or</strong></p>

        <form action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_check"), "html", null, true);
        echo "\" method=\"post\">
            <fieldset>
                <div class=\"fieldInput\">
                    <input id=\"user-login-email-ext\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" type=\"text\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                </div>
                <div class=\"fieldInput\">
                    <input id=\"user-login-pass-ext\" type=\"password\" name=\"_password\" required=\"required\" placeholder=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                </div>                
                <p><a class=\"forgot_pass\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_user_reset_password"), "html", null, true);
        echo "\"><strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.forgot_your_password"), "html", null, true);
        echo "</strong></a></p>
                <div class=\"submit\">
                    <div>
                        <input type=\"submit\" id=\"_submit-ext\" name=\"_submit\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </div>                                        
                </div>
            </fieldset>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
        </form>       
    </div>
</section>                
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_extended.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 31,  81 => 27,  73 => 24,  68 => 22,  60 => 19,  54 => 16,  47 => 12,  42 => 10,  37 => 8,  31 => 4,  28 => 3,);
    }
}
