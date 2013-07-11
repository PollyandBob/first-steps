<?php

/* FenchyAdminBundle:Default:search.html.twig */
class __TwigTemplate_0eeb92b4d6c8ef9254f96a31f8965171 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FenchyAdminBundle::layout.html.twig");

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'admincontent' => array($this, 'block_admincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FenchyAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["filter"]) ? $context["filter"] : null), array(0 => "::filterForm.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        \$().ready(function () {
            \$('.search-activated').click(function() {
                var id = \$(this).attr('rel');
                \$.ajax({
                    type:     'POST',
                    dataType: 'json',
                    data:     { 'id' : id, type: 'SearchActivated' },
                    url: \"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_admin_dictionary_switch"), "html", null, true);
        echo "\",
                    success: function (result) {
                        if (result !== false) {
                            if (result.status === 1) {
                                \$('td.search-activated[rel=\"'+result.id+'\"]').text('Yes');
                            } else if (result.status === 0) {
                                \$('td.search-activated[rel=\"'+result.id+'\"]').text('No');
                            }
                        } else {
                            alert(result);
                        }
                    },
                    errors: function (result) {
                        alert(result);
                    }
                });
            });
            \$('.tag-activated').click(function() {
                var id = \$(this).attr('rel');
                \$.ajax({
                    type:     'POST',
                    dataType: 'json',
                    data:     { 'id' : id, type: 'TagActivated' },
                    url: \"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_admin_dictionary_switch"), "html", null, true);
        echo "\",
                    success: function (result) {
                        if (result !== false) {
                            if (result.status === 1) {
                                \$('td.tag-activated[rel=\"'+result.id+'\"]').text('Yes');
                            } else if (result.status === 0) {
                                \$('td.tag-activated[rel=\"'+result.id+'\"]').text('No');
                            }
                        } else {
                            alert(result);
                        }
                    },
                    errors: function (result) {
                        alert(result);
                    }
                });
            });
            \$('.disabled').click(function() {
                var id = \$(this).attr('rel');
                \$.ajax({
                    type:     'POST',
                    dataType: 'json',
                    data:     { 'id' : id, type: 'Disabled' },
                    url: \"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_admin_dictionary_switch"), "html", null, true);
        echo "\",
                    success: function (result) {
                        if (result !== false) {
                            if (result.status === 1) {
                                \$('td.disabled[rel=\"'+result.id+'\"]').text('Yes');
                            } else if (result.status === 0) {
                                \$('td.disabled[rel=\"'+result.id+'\"]').text('No');
                            }
                        } else {
                            alert(result);
                        }
                    },
                    errors: function (result) {
                        alert(result);
                    }
                });
            });
            \$('.is-tag').click(function() {
                var id = \$(this).attr('rel');
                \$.ajax({
                    type:     'POST',
                    dataType: 'json',
                    data:     { 'id' : id, type: 'Tag' },
                    url: \"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_admin_dictionary_switch"), "html", null, true);
        echo "\",
                    success: function (result) {
                        if (result !== false) {
                            if (result.status === 1) {
                                \$('td.is-tag[rel=\"'+result.id+'\"]').text('Yes');
                            } else if (result.status === 0) {
                                \$('td.is-tag[rel=\"'+result.id+'\"]').text('No');
                            }
                        } else {
                            alert(result);
                        }
                    },
                    errors: function (result) {
                        alert(result);
                    }
                });
            });
        });
    </script>
";
    }

    // line 103
    public function block_admincontent($context, array $blocks = array())
    {
        // line 104
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_admin_search"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter"]) ? $context["filter"] : null), 'enctype');
        echo ">
        ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter"]) ? $context["filter"] : null), 'widget');
        echo "
        <br/>
        <input type=\"submit\" value=\"Search\"/>
    </form>
    <table class=\"admin-table\">
        <thead>
            <tr><th>ID</th><th>Text</th><th>Search Q.</th><th>Tag Q.</th><th>Is Tag</th><th>Search Act.</th><th>Tag Act.</th><th>Disabled</th></tr>
        </thead>
        <tbody>
            ";
        // line 114
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dictionary"]) ? $context["dictionary"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["word"]) {
            // line 115
            echo "                <tr>
                    <td>";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["word"]) ? $context["word"] : null), "id"), "html", null, true);
            echo "</td>
                    <td>";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["word"]) ? $context["word"] : null), "text"), "html", null, true);
            echo "</td>
                    <td>";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["word"]) ? $context["word"] : null), "quantitySearch"), "html", null, true);
            echo "</td>
                    <td>";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["word"]) ? $context["word"] : null), "quantityTag"), "html", null, true);
            echo "</td>
                    <td class=\"is-tag switch\" rel=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["word"]) ? $context["word"] : null), "id"), "html", null, true);
            echo "\">";
            echo (($this->getAttribute((isset($context["word"]) ? $context["word"] : null), "tag")) ? ("Yes") : ("No"));
            echo "</td>
                    <td class=\"search-activated switch\" rel=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["word"]) ? $context["word"] : null), "id"), "html", null, true);
            echo "\">";
            echo (($this->getAttribute((isset($context["word"]) ? $context["word"] : null), "searchActivated")) ? ("Yes") : ("No"));
            echo "</td>
                    <td class=\"tag-activated switch\" rel=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["word"]) ? $context["word"] : null), "id"), "html", null, true);
            echo "\">";
            echo (($this->getAttribute((isset($context["word"]) ? $context["word"] : null), "tagActivated")) ? ("Yes") : ("No"));
            echo "</td>
                    <td class=\"disabled switch\" rel=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["word"]) ? $context["word"] : null), "id"), "html", null, true);
            echo "\">";
            echo (($this->getAttribute((isset($context["word"]) ? $context["word"] : null), "disabled")) ? ("Yes") : ("No"));
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['word'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 126
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "FenchyAdminBundle:Default:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 126,  212 => 123,  206 => 122,  200 => 121,  194 => 120,  190 => 119,  186 => 118,  182 => 117,  178 => 116,  175 => 115,  171 => 114,  159 => 105,  152 => 104,  149 => 103,  125 => 82,  99 => 59,  73 => 36,  47 => 13,  34 => 4,  31 => 3,  26 => 2,);
    }
}
