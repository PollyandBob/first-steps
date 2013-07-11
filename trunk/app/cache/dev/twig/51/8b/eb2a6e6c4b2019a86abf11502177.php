<?php

/* FOSUserBundle:Registration:registerV2.html.twig */
class __TwigTemplate_518beb2a6e6c4b2019a86abf11502177 extends Twig_Template
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
        echo "<header>
    <h2>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("register.title"), "html", null, true);
        echo "</h2>
</header>
<div class=\"register-layer\">
    <a href=# class=\"sign-btn fb_btn clearfix\">
        <span><i>f</i></span>
        <span><strong>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("register.with_fb"), "html", null, true);
        echo "</strong></span>
    </a>
    <a href=# class=\"sign-btn tt_btn clearfix\">
        <span><i>t</i></span>
        <span><strong>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("register.with_twitter"), "html", null, true);
        echo "</strong></span>
    </a>
    <p><strong>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("or"), "html", null, true);
        echo "</strong></p>
    <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"post\" autocomplete=\"off\" class=\"register-form\">
        
        <div class=\"form-error\">
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user_regular"), "firstname"), 'errors');
        echo "
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
        echo "
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "first"), 'errors');
        echo "
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "second"), 'errors');
        echo "
        </div>        
        
        <fieldset>
            <div class=\"fieldInput\">
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user_regular"), "firstname"), 'widget');
        echo "
            </div>
            <div class=\"fieldInput\">
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget');
        echo "
            </div>
            <div class=\"fieldInput\">
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "first"), 'widget');
        echo "
            </div>
            <div class=\"fieldInput\">
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "second"), 'widget');
        echo "
            </div>                        
                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
            <p>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("register.footer_message.1"), "html", null, true);
        echo " <a href=\"#terms\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("register.footer_message.2"), "html", null, true);
        echo "</a> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("register.footer_message.3"), "html", null, true);
        echo " <a href=\"#privacy\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("register.footer_message.4"), "html", null, true);
        echo "</a></p>
            <div class=\"submit\">
                <div>                                                        
                    <button type=\"button\" class=\"submit-form\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("register.save_button"), "html", null, true);
        echo "</button>
                </div>                                        
            </div>
        </fieldset>
    </form>
</div> ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:registerV2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 41,  105 => 38,  101 => 37,  66 => 20,  62 => 19,  172 => 73,  151 => 58,  143 => 56,  138 => 54,  135 => 53,  86 => 28,  80 => 26,  74 => 24,  44 => 10,  38 => 9,  45 => 23,  27 => 8,  47 => 12,  26 => 7,  112 => 51,  106 => 42,  95 => 44,  90 => 32,  83 => 38,  73 => 31,  64 => 27,  61 => 26,  58 => 18,  37 => 11,  32 => 8,  23 => 4,  24 => 4,  22 => 2,  19 => 1,  444 => 170,  438 => 168,  435 => 167,  432 => 166,  429 => 165,  424 => 159,  421 => 158,  416 => 155,  409 => 152,  405 => 150,  402 => 149,  399 => 148,  392 => 144,  388 => 142,  385 => 141,  382 => 140,  379 => 139,  374 => 136,  367 => 133,  363 => 131,  360 => 130,  357 => 129,  350 => 125,  346 => 123,  343 => 122,  340 => 121,  337 => 120,  332 => 117,  329 => 116,  324 => 161,  322 => 158,  317 => 139,  314 => 138,  312 => 120,  309 => 119,  306 => 116,  303 => 115,  296 => 112,  293 => 111,  287 => 106,  283 => 105,  274 => 100,  261 => 90,  257 => 88,  255 => 87,  250 => 84,  234 => 71,  225 => 65,  216 => 59,  204 => 50,  201 => 49,  195 => 48,  190 => 46,  186 => 45,  182 => 44,  178 => 43,  174 => 42,  170 => 72,  166 => 70,  162 => 39,  154 => 37,  146 => 32,  140 => 29,  134 => 26,  130 => 25,  127 => 50,  122 => 48,  116 => 21,  110 => 19,  108 => 43,  104 => 17,  100 => 46,  92 => 30,  87 => 13,  84 => 29,  78 => 26,  76 => 165,  70 => 21,  67 => 114,  65 => 111,  56 => 12,  51 => 21,  48 => 24,  30 => 7,  319 => 157,  311 => 135,  305 => 134,  299 => 113,  291 => 130,  280 => 104,  276 => 121,  269 => 119,  265 => 117,  262 => 116,  252 => 112,  245 => 108,  239 => 107,  228 => 103,  220 => 97,  214 => 95,  212 => 94,  206 => 51,  200 => 90,  196 => 88,  191 => 87,  189 => 86,  177 => 78,  168 => 73,  164 => 69,  158 => 38,  155 => 67,  132 => 46,  126 => 44,  119 => 47,  113 => 40,  111 => 44,  96 => 35,  85 => 39,  81 => 18,  77 => 17,  72 => 23,  68 => 29,  63 => 13,  60 => 12,  54 => 17,  50 => 11,  46 => 14,  42 => 13,  39 => 9,  34 => 7,  31 => 3,);
    }
}
