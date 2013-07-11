<?php

/* FenchyRegularUserBundle:Partials:bareLeaveReviewForm.html.twig */
class __TwigTemplate_8a010221eb6e2c11f696ea254dece184 extends Twig_Template
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
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array(), "any", true, true)) {
            // line 2
            $this->env->getExtension('form')->renderer->setTheme($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title"), array(0 => "::noLabelForm.html.twig"));
        }
        // line 4
        $this->env->getExtension('form')->renderer->setTheme($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "text"), array(0 => "::noLabelForm.html.twig"));
        // line 5
        echo "<form id=\"leave-review\" class=\"clearfix simple-form\" action=\"\" method=\"post\"  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">    
    <div id=\"fenchy_regularuserbundle_leavereviewprofiletype\">
        ";
        // line 7
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array(), "any", true, true)) {
            // line 8
            echo "            <div class=\"title\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title"), 'row');
            echo "</div>
        ";
        }
        // line 10
        echo "        <div class=\"content\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "text"), 'row');
        echo "</div>
        <div>
            <div id=\"review-type-selector\" class=\"toolbar-item button select-button grey-button pull-right\">
                <strong class=\"selector-title\"></strong>
                <span class=\"replacement\">
                    <strong class=\"select-value\"></strong>
                    <i id=\"sortby-dropdown-icon\" class=\"icon-caret-down\" ></i>
                    <div class=\"drop-down\">

                    </div>
                </span>
                <div class=\"dd-element\" style=\"display:none\">
                    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type"), 'widget');
        echo "
                </div>
                <div class=\"dd-label\" style=\"display:none\">
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type"), 'label');
        echo "
                </div>                             
            </div> 
        </div>
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
    </div>
    <div class=\"action-buttons pull-right\">
        <div class=\"button green-button button-margin\">
            <a class=\"wrapper leave-review-submit\" href=\"/app_dev.php/user/contact/invite/1\">
                <strong>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn.save"), "html", null, true);
        echo "</strong>
            </a>
        </div>
        <div class=\"button green-button button-margin\">
            <a class=\"wrapper leave-review-cancel\" href=\"/app_dev.php/user/contact/invite/1\">
                <strong>";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn.cancel"), "html", null, true);
        echo "</strong>
            </a>
        </div>
    </div>
</form>
<script type=\"text/javascript\">
    new fenchyDropdown(\$('#review-type-selector'));
</script>";
    }

    public function getTemplateName()
    {
        return "FenchyRegularUserBundle:Partials:bareLeaveReviewForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 39,  77 => 34,  69 => 29,  62 => 25,  56 => 22,  40 => 10,  34 => 8,  32 => 7,  26 => 5,  24 => 4,  21 => 2,  19 => 1,);
    }
}
