<?php

/* FenchyRegularUserBundle:Settings:basic.html.twig */
class __TwigTemplate_bfaaad1c617ec31efb18e56a6c08a259 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FenchyRegularUserBundle::settings.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'settings_content' => array($this, 'block_settings_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FenchyRegularUserBundle::settings.html.twig";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fancybox/jquery.fancybox-1.3.4.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/tapmodo-Jcrop-1902fbc/css/jquery.Jcrop.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/aehlke-tag/css/jquery.tagit.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/aehlke-tag/css/tagit.ui-zendesk.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jquery-ui-1.9.1.custom/css/custom-theme/jquery-ui-1.9.1.fenchy.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/app/settings-v2.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/app/main-container-v2.css"), "html", null, true);
        echo "\" type=\"text/css\" />    
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/gallery/punkave/galleryEdit-V2.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/gallery/punkave/editSmall.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/underscore-min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.fileupload.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.iframe-transport.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/gallery/punkave/FileUploaderSmall.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.fileupload.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fancybox/jquery.fancybox-1.3.4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/tapmodo-Jcrop-1902fbc/js/jquery.Jcrop.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/gallery/punkave/editSmall.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/aehlke-tag/js/tag-it.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 29
    public function block_settings_content($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        // line 31
        echo "    ";
        $this->env->loadTemplate("PunkAveFileUploaderBundle:Default:templates.html.twig")->display($context);
        // line 32
        echo "<script type=\"text/javascript\">
    // Enable the file uploader
    \$(function() {
        

        gallery_edit.crop.init({
            url     : '";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_gallery_crop"), "html", null, true);
        echo "',
            punkAve : new PunkAveFileUploader({ 
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
        echo ",
                'onImgClick' : gallery_edit.crop.takeImageToCrop
            })
        });
        
        \$('#fenchy_regularuserbundle_userbasicsettingstype_languages').tagit({
            availableTags: ";
        // line 51
        echo twig_jsonencode_filter((isset($context["languages"]) ? $context["languages"] : null));
        echo ",
            allowSpaces: true
        });

    });
    </script>
    <section id=\"profile_left_menu\" class=\"sidebar pull-left\">
        <div class=\"wrapper\">
            ";
        // line 59
        $this->env->loadTemplate("FenchyRegularUserBundle:Settings:menuV2.html.twig")->display($context);
        // line 60
        echo "        </div>        
    </section>
    <section class=\"content pull-right\">
        <div class=\"profile_right_content inner-content\">
            <header><h1>";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.settings"), "html", null, true);
        echo "</h1></header>
            <form action=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_settings_basic"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " class=\"form-settings general\">

                <div class=\"form-box-wrapper\">
                    <h2>";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("settings.general.name"), "html", null, true);
        echo "</h2>

                    <div class=\"row allinone grid_5\">
                        <div class=\"input-wrapper\">
                            <div class=\"input-element\">
                                ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstname"), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"input-wrapper\">
                            <div class=\"input-element\">
                                ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastname"), 'widget');
        echo "
                            </div>
                        </div> 
                    </div>                                   
                    <div class=\"row allinone grid_2\">
                        <div class=\"custom-checkbox\">
                            ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "gender"), 'row');
        echo "
                        </div>
                        <div class=\"input-wrapper\">
                            <div class=\"input-element\">
                                ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "age"), 'widget');
        echo "
                            </div>
                        </div>
                    </div>                                                
                    <div class=\"row input-wrapper pre-tags-container\">
                        ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "languages"), 'row');
        echo "
                    </div>
                    <div class=\"row profile_picture\">
                        <label>";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("settings.general.profile_photo"), "html", null, true);
        echo "</label>
                        ";
        // line 97
        $this->displayBlock("galleryContainer", $context, $blocks);
        echo "
                    </div>
                    <div class=\"row input-wrapper textarea_content\">
                        <div class=\"input-element\">
                            ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "aboutMe"), 'widget');
        echo "
                        </div>
                    </div>                
                    <div style=\"display:none;\">";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "</div>
                    <footer class=\"clearfix\">
                        <div class=\"button grey-button pull-left\" id=\"buttons\">
                            <a id=\"back\" class=\"wrapper\" href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_frontend_indexv2"), "html", null, true);
        echo "\">
                                <strong>";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn.cancel"), "html", null, true);
        echo "</strong>
                            </a>                            
                        </div>
                        <div class=\"button submit pull-right\">
                            <div>
                                <input type=\"submit\" id=\"continue\" value=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn.save"), "html", null, true);
        echo "\"/>                                
                            </div>
                        </div>
                    </footer>
                </div>                                
            </form>
        </div>
    </section>
    
";
    }

    public function getTemplateName()
    {
        return "FenchyRegularUserBundle:Settings:basic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 113,  270 => 108,  266 => 107,  260 => 104,  254 => 101,  247 => 97,  243 => 96,  237 => 93,  229 => 88,  222 => 84,  213 => 78,  205 => 73,  197 => 68,  189 => 65,  185 => 64,  179 => 60,  177 => 59,  166 => 51,  157 => 45,  152 => 43,  147 => 41,  143 => 40,  138 => 38,  130 => 32,  127 => 31,  125 => 30,  122 => 29,  116 => 26,  112 => 25,  108 => 24,  104 => 23,  100 => 22,  96 => 21,  92 => 20,  88 => 19,  84 => 18,  79 => 17,  76 => 16,  70 => 13,  66 => 12,  62 => 11,  58 => 10,  54 => 9,  50 => 8,  46 => 7,  42 => 6,  38 => 5,  33 => 4,  30 => 3,);
    }
}
