<?php

/* FenchyRegularUserBundle:Settings:location.html.twig */
class __TwigTemplate_4f9eae7b7dbdfd723042b63e9273650c extends Twig_Template
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
        // line 2
        $this->env->getExtension('form')->renderer->setTheme($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "location"), array(0 => "::noLabelForm.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/app/settings-v2.css"), "html", null, true);
        echo "\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/app/main-container-v2.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        // line 11
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/regular_user/listing/create.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/ko/knockout-2.2.1.debug.js"), "html", null, true);
        echo "\"></script>
";
        // line 14
        $this->env->loadTemplate("::gmapsApiAsset.html.twig")->display($context);
        // line 15
        echo "
<script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ko-extensions/jquery-autocomplete.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/mvvm/user-settings-view-model.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/lib/gapi-autocomplete.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\">

    userSettingsViewModel = null;

    \$(document).ready(function() {
        geocoder = new google.maps.Geocoder();
        var baseSearchViewUri = '";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_notice_indexv2"), "html", null, true);
        echo "';

        userSettingsViewModel = new UserSettingsViewModel(geocoder, baseSearchViewUri);

        ko.applyBindings(userSettingsViewModel, document.getElementsByTagName('body')[0]);

        autocomplete = new GApiAutocomplete(
                document.getElementById('fenchy_userbundle_user_locationtype_location_location'),
                userSettingsViewModel);


    });
    function hasCoordinates()
    {
            ";
        // line 40
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "hasRequiredLocation")) {
            // line 41
            echo "        return true;
            ";
        }
        // line 43
        echo "
        return false;
    }

    function getLatitude()
    {
        return '";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "location"), "latitude"), "html", null, true);
        echo "'
    }

    function getLongitude()
    {
        return '";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "location"), "longitude"), "html", null, true);
        echo "';
    }
    </script>
    
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/geolocalization.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
    \$(document).ready(function() {
        initialize();
    });
        </script>
        <script type=\"text/javascript\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/regular_user/settings/form.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 67
    public function block_settings_content($context, array $blocks = array())
    {
        // line 68
        echo "
            <section id=\"profile_left_menu\" class=\"sidebar pull-left\">
                <div class=\"wrapper\">
                    ";
        // line 71
        $this->env->loadTemplate("FenchyRegularUserBundle:Settings:menuV2.html.twig")->display($context);
        // line 72
        echo "                </div>                
            </section>
            <section class=\"content pull-right\">
                <div class=\"profile_right_content inner-content\">
                    <header><h1>";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.settings"), "html", null, true);
        echo "</h1></header>
                    <form action=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_settings_location"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " class=\"form-settings location\">
                        
                        <div class=\"form-box-wrapper\">
                            <h2>";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("settings.location.name"), "html", null, true);
        echo "</h2>
                            <div id=\"printable-wrapper\" class=\"row input-wrapper\">
                                <div class=\"input-element\">
                                    ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "location"), "printable"), 'row');
        echo "
                                </div>
                                <p class='form-description'>";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.printable_location_description"), "html", null, true);
        echo "</p>
                            </div>
                            <div class=\"row input-wrapper\">
                                <div class=\"input-element\">
                                    ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "location"), "location"), 'row');
        echo "
                                </div>
                            </div>
                            <div class=\"map_wrapper\">
                                <div id=\"map_loc\">
                                    <div id=\"map_canvas\"></div>
                                    <div class=\"pin_button\">
                                        <a class=\"button\" href=\"#\" onclick=\"putPin()\">";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.put_pin"), "html", null, true);
        echo "</a>
                                    </div>
                                </div>
                                <div class=\"clear\"></div>
                            </div>
                            <div style=\"display: none\">
                                ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
                            </div>
                            <footer class=\"clearfix\">
                                <div class=\"button grey-button pull-left\" id=\"buttons\">
                                    <a id=\"back\" class=\"wrapper\" href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_frontend_indexv2"), "html", null, true);
        echo "\">
                                        <strong>";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn.cancel"), "html", null, true);
        echo "</strong>
                                    </a>                            
                                </div>
                                <div class=\"button submit pull-right\">
                                    <div>
                                        <input type=\"submit\" id=\"continue\" value=\"";
        // line 112
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
        return "FenchyRegularUserBundle:Settings:location.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 112,  226 => 107,  222 => 106,  215 => 102,  206 => 96,  196 => 89,  189 => 85,  184 => 83,  178 => 80,  170 => 77,  166 => 76,  160 => 72,  158 => 71,  153 => 68,  150 => 67,  144 => 64,  135 => 58,  128 => 54,  120 => 49,  112 => 43,  108 => 41,  106 => 40,  89 => 26,  78 => 18,  74 => 17,  70 => 16,  67 => 15,  65 => 14,  61 => 13,  57 => 12,  53 => 11,  50 => 10,  44 => 7,  40 => 6,  35 => 5,  32 => 4,  27 => 2,);
    }
}
