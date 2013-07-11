<?php

/* PunkAveFileUploaderBundle:Default:templates.html.twig */
class __TwigTemplate_da61fb3913e134eb3c3cb063f5160d78 extends Twig_Template
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
        // line 5
        echo "
";
        // line 10
        echo "
<script type=\"text/template\" id=\"file-uploader-template\">
    <!--[if IE]>
        <label for=\"gallery-file\" style=\"display:block;\">
    <![endif]-->
    <div class=\"uploader\" data-dropzone=\"1\">
      <div class=\"controls\">
        ";
        // line 18
        echo "        <input id=\"gallery-file\" type=\"file\" data-files=\"1\" multiple style=\"visibility:hidden;\"/>
        <div class=\"spinner\" data-spinner=\"1\" style=\"display: none\">
          <span>Uploading...</span><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/punkavefileuploader/images/spinner.gif"), "html", null, true);
        echo "\" />         
        </div>
      </div>
      <ul id=\"gallery-edit-images-container\" class=\"thumbnails\" data-thumbnails=\"1\">
          ";
        // line 25
        echo "      </ul>

    </div>
    <!--[if IE]>
        </label>
    <![endif]-->
</script>

";
        // line 34
        echo "<script type=\"text/template\" id=\"file-uploader-file-template\">
    <li data-name=\"<%- name %>\" class=\"thumbnail\">
        ";
        // line 37
        echo "        ";
        // line 38
        echo "        
            <img src=\"<%- thumbnail_url %>\" class=\"thumbnail-image\" rel=\"<%- name %>\" />
            <img src=\"<%- medium_url %>\" class=\"medium-image\" rel=\"<%- name %>\" />
            <input type=\"hidden\" name=\"original\" value=\"<%- url %>\" />
       
        <div class=\"caption\">
            <a rel=\"tooltip\" title=\"Delete\" data-action=\"delete\" class=\"delete thumbnail-action btn\" href=\"#delete\"><i class=\"icon-remove-sign\"></i></a>
        </div>            
    </li>
</script>

<script type=\"text/template\" id=\"file-uploader-file-template-original\">
    <li data-name=\"<%- name %>\" class=\"thumbnail\">
        ";
        // line 52
        echo "        ";
        // line 53
        echo "        
            <img src=\"<%- thumbnail_url %>\" class=\"thumbnail-image\" rel=\"<%- name %>\" />
            <img src=\"<%- url %>\" class=\"medium-image\" rel=\"<%- name %>\" />
            <input type=\"hidden\" name=\"original\" value=\"<%- url %>\" />
       
        <div class=\"caption\">
            <a rel=\"tooltip\" title=\"Delete\" data-action=\"delete\" class=\"delete thumbnail-action btn\" href=\"#delete\"><i class=\"icon-remove-sign\"></i></a>
        </div>            
    </li>
</script>

<script type=\"text/template\" id=\"file-uploader-empty-file-template\">
    <li class=\"thumbnail empty\">
        <div class=\"caption\">
        </div>
        <div class=\"add-center\">
            <i class=\"icon-camera\"></i>
            <strong class=\"info-by-line\"><i class=\"icon-plus\"></i>Add</strong>
        </div>        
    </li>
</script>
";
    }

    public function getTemplateName()
    {
        return "PunkAveFileUploaderBundle:Default:templates.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 52,  58 => 38,  42 => 25,  22 => 10,  19 => 5,  217 => 75,  213 => 74,  205 => 68,  203 => 67,  200 => 66,  197 => 65,  191 => 61,  183 => 56,  173 => 52,  164 => 49,  161 => 48,  155 => 45,  150 => 43,  145 => 41,  141 => 40,  138 => 39,  136 => 38,  130 => 34,  127 => 33,  125 => 32,  122 => 31,  117 => 28,  112 => 26,  108 => 25,  104 => 24,  94 => 21,  89 => 20,  83 => 18,  79 => 17,  75 => 53,  70 => 15,  67 => 14,  51 => 9,  45 => 7,  43 => 6,  39 => 5,  34 => 4,  31 => 18,  374 => 177,  358 => 164,  350 => 159,  346 => 158,  337 => 152,  331 => 149,  328 => 148,  322 => 145,  319 => 144,  316 => 143,  308 => 140,  304 => 138,  302 => 137,  297 => 135,  290 => 131,  283 => 127,  276 => 123,  273 => 122,  265 => 117,  259 => 114,  247 => 104,  244 => 103,  242 => 102,  237 => 100,  231 => 97,  224 => 95,  219 => 93,  214 => 91,  208 => 90,  199 => 84,  190 => 78,  178 => 54,  174 => 68,  169 => 51,  160 => 61,  157 => 60,  147 => 53,  142 => 50,  129 => 40,  126 => 39,  124 => 38,  111 => 28,  107 => 27,  103 => 26,  99 => 23,  95 => 24,  90 => 23,  87 => 19,  84 => 21,  82 => 20,  78 => 19,  74 => 18,  69 => 17,  66 => 16,  60 => 11,  56 => 37,  52 => 34,  48 => 8,  44 => 7,  40 => 6,  35 => 20,  32 => 4,  27 => 2,);
    }
}
