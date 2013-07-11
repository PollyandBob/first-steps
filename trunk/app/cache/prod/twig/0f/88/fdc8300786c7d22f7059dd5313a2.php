<?php

/* FenchyAdminBundle:Default:reviews.html.twig */
class __TwigTemplate_0f88fdc8300786c7d22f7059dd5313a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FenchyAdminBundle::layout.html.twig");

        $this->blocks = array(
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
    public function block_admincontent($context, array $blocks = array())
    {
        // line 4
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_admin_reviews"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter"]) ? $context["filter"] : null), 'enctype');
        echo ">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter"]) ? $context["filter"] : null), 'widget');
        echo "
        <br/>
        <input type=\"submit\" value=\"Search\"/>
    </form>
    <table class=\"admin-table\">
        <thead>
            <tr><th>ID</th><th>Tex</th><th>Type</th><th>Stickers</th><th>Created at</th><th>Author</th><th>actions</th></tr>
        </thead>
        <tbody>
            ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 15
            echo "                <tr class=\"has-subrow\">
                    <td>#";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["review"]) ? $context["review"] : null), "id"), "html", null, true);
            echo "</td>
                    <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["review"]) ? $context["review"] : null), "text"), "html", null, true);
            echo "</td>
                    <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["review"]) ? $context["review"] : null), "typeName"), "html", null, true);
            echo "</td>
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["review"]) ? $context["review"] : null), "stickers"), "count"), "html", null, true);
            echo "</td>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["review"]) ? $context["review"] : null), "createdAt"), "Y-m-d H:i"), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fenchy_admin_user", array("id" => $this->getAttribute($this->getAttribute((isset($context["review"]) ? $context["review"] : null), "author"), "id"))), "html", null, true);
            echo "\" style=\"color:black\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["review"]) ? $context["review"] : null), "author"), "html", null, true);
            echo "</a></td>
                    <td>
                        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fenchy_admin_review", array("id" => $this->getAttribute((isset($context["review"]) ? $context["review"] : null), "id"))), "html", null, true);
            echo "\" style=\"color:black\">Edit</a>
                    </td>
                </tr>
                <tr class=\"subrow displayNone\">
                    <td>&nbsp;</td>
                    <td colspan=\"7\">
                        <table>
                            <tbody>
                                <tr class=\"has-subrow\"><td>Target</td></tr>
                                <tr class=\"subrow displayNone\">
                                    <td>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        ";
            // line 38
            if ($this->getAttribute((isset($context["review"]) ? $context["review"] : null), "aboutUser")) {
                // line 39
                echo "                                                            USER: ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["review"]) ? $context["review"] : null), "aboutUser"), "html", null, true);
                echo "
                                                            ";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["review"]) ? $context["review"] : null), "aboutUser"), "userRegular"), "html", null, true);
                echo "
                                                        ";
            } else {
                // line 42
                echo "                                                            Notice: #";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["review"]) ? $context["review"] : null), "aboutNotice"), "id"), "html", null, true);
                echo "
                                                            ";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["review"]) ? $context["review"] : null), "aboutNotice"), "title"), "html", null, true);
                echo "<br/>
                                                            <p>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["review"]) ? $context["review"] : null), "aboutNotice"), "content"), "html", null, true);
                echo "</p>
                                                        ";
            }
            // line 46
            echo "                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr class=\"has-subrow\"><td>Stickers</td></tr>
                                <tr class=\"subrow displayNone\">
                                    <td>
                                        <table>
                                            <thead>
                                                <tr><th>Reporter</th><th>Reason</th><th>Description</th><th>Created at</th></tr>
                                            </thead>
                                            <tbody>
                                                ";
            // line 60
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["review"]) ? $context["review"] : null), "stickers"));
            foreach ($context['_seq'] as $context["_key"] => $context["sticker"]) {
                // line 61
                echo "                                                    <tr>
                                                        <td>";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sticker"]) ? $context["sticker"] : null), "reportedBy"), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sticker"]) ? $context["sticker"] : null), "reasonName"), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sticker"]) ? $context["sticker"] : null), "description"), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 65
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["sticker"]) ? $context["sticker"] : null), "createdAt"), "y-m-d H:i"), "html", null, true);
                echo "</td>
                                                    </tr>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sticker'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 68
            echo "                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 77
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "FenchyAdminBundle:Default:reviews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 77,  174 => 68,  165 => 65,  161 => 64,  157 => 63,  153 => 62,  150 => 61,  146 => 60,  130 => 46,  125 => 44,  121 => 43,  116 => 42,  111 => 40,  106 => 39,  104 => 38,  86 => 23,  79 => 21,  75 => 20,  71 => 19,  67 => 18,  63 => 17,  59 => 16,  56 => 15,  52 => 14,  40 => 5,  33 => 4,  30 => 3,  25 => 2,);
    }
}
