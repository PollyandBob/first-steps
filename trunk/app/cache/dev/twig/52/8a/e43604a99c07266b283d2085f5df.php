<?php

/* FenchyGalleryBundle::galleryShowBase.html.twig */
class __TwigTemplate_528ae43604a99c07266b283d2085f5df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::baseV2.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'galleryContainer' => array($this, 'block_galleryContainer'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/Agile-Carousel/agile_carousel.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/gallery/punkave/show.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/pretty_photo/css/prettyPhoto.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/Agile-Carousel/agile_carousel.alpha.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/pretty_photo/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/gallery/punkave/show.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 16
    public function block_galleryContainer($context, array $blocks = array())
    {
        // line 17
        echo "    
    <div id=\"gallery-show\"></div>
    <script tpe=\"text/javascript\">
        \$(document).ready(function () {
            gallery_show.init(";
        // line 21
        echo twig_jsonencode_filter($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : $this->getContext($context, "gallery")), "JQCarouselData"));
        echo ");
            \$('.photo_link').prettyPhoto({
                social_tools : false,
                theme : 'facebook'
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "FenchyGalleryBundle::galleryShowBase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 21,  74 => 16,  68 => 13,  64 => 12,  60 => 11,  55 => 10,  52 => 9,  46 => 7,  42 => 6,  378 => 180,  368 => 173,  354 => 162,  334 => 145,  330 => 144,  324 => 140,  320 => 138,  313 => 135,  311 => 134,  308 => 133,  306 => 132,  294 => 127,  291 => 126,  285 => 124,  283 => 123,  279 => 122,  272 => 118,  264 => 113,  259 => 110,  257 => 109,  249 => 104,  246 => 103,  243 => 102,  207 => 68,  202 => 66,  196 => 63,  192 => 62,  188 => 61,  184 => 60,  174 => 53,  169 => 52,  165 => 50,  159 => 48,  157 => 47,  153 => 46,  149 => 45,  145 => 44,  128 => 30,  124 => 29,  120 => 28,  116 => 27,  112 => 26,  108 => 25,  104 => 24,  101 => 23,  99 => 22,  95 => 21,  90 => 20,  87 => 19,  81 => 16,  77 => 17,  73 => 14,  69 => 13,  65 => 12,  61 => 11,  57 => 10,  53 => 9,  49 => 8,  45 => 7,  41 => 6,  38 => 5,  33 => 4,  30 => 3,);
    }
}
