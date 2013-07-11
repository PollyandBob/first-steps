<?php

/* FenchyGalleryBundle::galleryBase.html.twig */
class __TwigTemplate_eace2d1f5c70738400c3766c16f1123e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::baseV2.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/app/custom-form.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
        // line 6
        if (((isset($context["galleryType"]) ? $context["galleryType"] : null) == "big")) {
            // line 7
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/gallery/punkave/editBig.css"), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        } else {
            // line 9
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/gallery/punkave/editSmall.css"), "html", null, true);
            echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fancybox/jquery.fancybox-1.3.4.css"), "html", null, true);
            echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/tapmodo-Jcrop-1902fbc/css/jquery.Jcrop.css"), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        }
    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/underscore-min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.fileupload.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.iframe-transport.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 19
        if (((isset($context["galleryType"]) ? $context["galleryType"] : null) == "big")) {
            // line 20
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/gallery/punkave/FileUploaderBig.js"), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/gallery/punkave/editBig.js"), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // line 23
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/gallery/punkave/FileUploaderSmall.js"), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fancybox/jquery.fancybox-1.3.4.js"), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/tapmodo-Jcrop-1902fbc/js/jquery.Jcrop.min.js"), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/gallery/punkave/editSmall.js"), "html", null, true);
            echo "\"></script>
    ";
        }
        // line 28
        echo "    
";
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        // line 32
        echo "    ";
        // line 33
        echo "    ";
        $this->env->loadTemplate("PunkAveFileUploaderBundle:Default:templates.html.twig")->display($context);
        // line 34
        echo "    <script type=\"text/javascript\">
    // Enable the file uploader
    \$(function() {
        
        ";
        // line 38
        if ((((isset($context["galleryType"]) ? $context["galleryType"] : null) == "big") || true)) {
            // line 39
            echo "        new PunkAveFileUploader({ 
            'uploadUrl': '";
            // line 40
            echo $this->env->getExtension('routing')->getPath("fenchy_gallery_upload", array("tmpGalleryId" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id")));
            echo "',
            'viewUrl': '";
            // line 41
            echo ("/uploads/" . $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "folder"));
            echo "',
            'el': '.file-uploader',
            'existingFiles': ";
            // line 43
            echo twig_jsonencode_filter($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "existingFiles"));
            echo ",
            'delaySubmitWhileUploading': '.edit-form',
            'max' : ";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["max"]) ? $context["max"] : null), "html", null, true);
            echo "
        });
        ";
        } else {
            // line 48
            echo "        gallery_edit.crop.init({
            url     : '";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_gallery_crop"), "html", null, true);
            echo "',
            punkAve : new PunkAveFileUploader({ 
                'uploadUrl': '";
            // line 51
            echo $this->env->getExtension('routing')->getPath("fenchy_gallery_upload", array("tmpGalleryId" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id")));
            echo "',
                'viewUrl': '";
            // line 52
            echo ("/uploads/" . $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "folder"));
            echo "',
                'el': '.file-uploader',
                'existingFiles': ";
            // line 54
            echo twig_jsonencode_filter($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "existingFiles"));
            echo ",
                'delaySubmitWhileUploading': '.edit-form',
                'max' : ";
            // line 56
            echo twig_escape_filter($this->env, (isset($context["max"]) ? $context["max"] : null), "html", null, true);
            echo ",
                'onImgClick' : gallery_edit.crop.takeImageToCrop
            })
        });
        ";
        }
        // line 61
        echo "    });
    </script>
";
    }

    // line 65
    public function block_galleryContainer($context, array $blocks = array())
    {
        // line 66
        echo "    <div id=\"gallery-edit-container\" class=\"file-uploader\"></div>
    ";
        // line 67
        if (((isset($context["galleryType"]) ? $context["galleryType"] : null) == "small")) {
            // line 68
            echo "    <div style=\"display:none\">
        <div id=\"crop-area\">
            <img src=\"\" id=\"target\" alt=\"\" />
            <table class=\"buttons-panel\">
                <tbody>
                    <tr>
                        <td><button id=\"crop-cancel\" class=\"button gray\">";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn.cancel"), "html", null, true);
            echo "</button></td>
                        <td><button id=\"crop-submit\" class=\"button green\">";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn.ok"), "html", null, true);
            echo "</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "FenchyGalleryBundle::galleryBase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 75,  213 => 74,  205 => 68,  203 => 67,  200 => 66,  197 => 65,  191 => 61,  183 => 56,  173 => 52,  164 => 49,  161 => 48,  155 => 45,  150 => 43,  145 => 41,  141 => 40,  138 => 39,  136 => 38,  130 => 34,  127 => 33,  125 => 32,  122 => 31,  117 => 28,  112 => 26,  108 => 25,  104 => 24,  94 => 21,  89 => 20,  83 => 18,  79 => 17,  75 => 16,  70 => 15,  67 => 14,  51 => 9,  45 => 7,  43 => 6,  39 => 5,  34 => 4,  31 => 3,  374 => 177,  358 => 164,  350 => 159,  346 => 158,  337 => 152,  331 => 149,  328 => 148,  322 => 145,  319 => 144,  316 => 143,  308 => 140,  304 => 138,  302 => 137,  297 => 135,  290 => 131,  283 => 127,  276 => 123,  273 => 122,  265 => 117,  259 => 114,  247 => 104,  244 => 103,  242 => 102,  237 => 100,  231 => 97,  224 => 95,  219 => 93,  214 => 91,  208 => 90,  199 => 84,  190 => 78,  178 => 54,  174 => 68,  169 => 51,  160 => 61,  157 => 60,  147 => 53,  142 => 50,  129 => 40,  126 => 39,  124 => 38,  111 => 28,  107 => 27,  103 => 26,  99 => 23,  95 => 24,  90 => 23,  87 => 19,  84 => 21,  82 => 20,  78 => 19,  74 => 18,  69 => 17,  66 => 16,  60 => 11,  56 => 10,  52 => 9,  48 => 8,  44 => 7,  40 => 6,  35 => 5,  32 => 4,  27 => 2,);
    }
}
