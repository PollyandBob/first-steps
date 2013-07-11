<?php

/* FenchyRegularUserBundle:Message:new.html.twig */
class __TwigTemplate_e5853d9a71adf223ef9e8b66bc2053cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FenchyRegularUserBundle::messages.html.twig");

        $this->blocks = array(
            'message_content' => array($this, 'block_message_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FenchyRegularUserBundle::messages.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "::labelForm.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_message_content($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"new-reply-message-box\">
    <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_messages_send"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
        <div class=\"form-box-wrapper\">
            <h2>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.message.new_message"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.message.to"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "regularuser"), "firstname"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "regularuser"), "lastname"), "html", null, true);
        echo "</h2>
            
            <div class=\"row input-wrapper\">
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title"), 'row');
        echo "
            </div>

            <div class=\"row input-wrapper\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content"), 'row');
        echo "
            </div>                                    

            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
        </div>

        <footer class=\"clearfix\">
            <div class=\"button grey-button pull-left\" id=\"buttons\">
                <a id=\"back\" class=\"wrapper\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_user_profilev2", array("userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id"))), "html", null, true);
        echo "\">
                    <strong>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn.cancel"), "html", null, true);
        echo "</strong>
                </a>                            
            </div>
            <div class=\"button submit pull-right\">
                <div>
                    <input type=\"submit\" id=\"continue\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn.send"), "html", null, true);
        echo "\"/>                                
                </div>
            </div>
        </footer> 
    </form>                                
        </div>
";
    }

    public function getTemplateName()
    {
        return "FenchyRegularUserBundle:Message:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 29,  80 => 24,  76 => 23,  68 => 18,  62 => 15,  55 => 11,  43 => 8,  36 => 6,  33 => 5,  30 => 4,  25 => 2,);
    }
}
