<?php

/* FenchyAdminBundle:Default:notices.html.twig */
class __TwigTemplate_509b19db7d8564310b03cb51f3e1147b extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_admin_notices"), "html", null, true);
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
            <tr><th>ID</th><th>Title</th><th>Type</th><th>Created at</th><th>Draft</th><th>Owner</th><th>Stickers</th><th>On dashboard</th><th>actions</th></tr>
        </thead>
        <tbody>
            ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notices"]) ? $context["notices"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["notice"]) {
            // line 15
            echo "                <tr class=\"has-subrow\">
                    <td>#";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "id"), "html", null, true);
            echo "</td>
                    <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "title"), "html", null, true);
            echo "</td>
                    <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "type"), "html", null, true);
            echo "</td>
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "createdAt"), "Y-m-d H:i"), "html", null, true);
            echo "</td>
                    <td>";
            // line 20
            echo (($this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "draft")) ? ("Yes") : ("No"));
            echo "</td>
                    <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fenchy_admin_user", array("id" => $this->getAttribute($this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "user"), "id"))), "html", null, true);
            echo "\" style=\"color:black\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "user"), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "stickers"), "count"), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            if ($this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "onDashboard")) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                    <td>
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fenchy_admin_notice", array("id" => $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "id"))), "html", null, true);
            echo "\" style=\"color:black\">Edit</a>
                        ";
            // line 26
            if ((!$this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "onDashboard"))) {
                // line 27
                echo "                            | <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fenchy_admin_notice_add_to_dashboard", array("id" => $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "id"))), "html", null, true);
                echo "\" style=\"color:black\" class=\"confirm\">Add to dashboard</a>
                        ";
            } else {
                // line 29
                echo "                            | <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fenchy_admin_notice_remove_from_dashboard", array("id" => $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "id"))), "html", null, true);
                echo "\" style=\"color:black\" class=\"confirm\">Dashboard-Remove</a>
                        ";
            }
            // line 31
            echo "                            | <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fenchy_admin_notice_delete", array("id" => $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "id"))), "html", null, true);
            echo "\" onclick=\"return confirm('Are you sure you want to delete this Listing?');\" style=\"color:black\">Delete</a>
                    </td>
                </tr>
                <tr class=\"subrow displayNone\">
                    <td>&nbsp;</td>
                    <td colspan=\"8\">
                        <table>
                            <tbody>
                                <tr class=\"has-subrow\"><td>Details</td></tr>
                                <tr class=\"subrow displayNone\">
                                    <td>
                                        <table>
                                            <tr>
                                                <td>Link:</td>
                                                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "link"), "html", null, true);
            echo "</td>
                                            </tr>
                                            <tr>
                                                <td>Content:</td>
                                                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "content"), "html", null, true);
            echo "</td>
                                            </tr>
                                            <tr>
                                                <td>Location:</td>
                                                <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "location"), "html", null, true);
            echo "</td>
                                            </tr>
                                            <tr>
                                                <td>Values:</td>
                                                <td>
                                                    ";
            // line 58
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "valuesList"));
            foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                // line 59
                echo "                                                        | ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(("schema." . (isset($context["val"]) ? $context["val"] : null))), "html", null, true);
                echo "
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 61
            echo "                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr class=\"has-subrow\"><td>Stickers</td></tr>
                                <tr class=\"subrow displayNone\">
                                    <td>
                                        <table>
                                            <thead>
                                                <tr><th>Reporter</th><th>Reasons</th><th>Description</th><th>Created at</th></tr>
                                            </thead>
                                            <tbody>
                                                ";
            // line 74
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "stickers"));
            foreach ($context['_seq'] as $context["_key"] => $context["sticker"]) {
                // line 75
                echo "                                                    <tr>
                                                        <td>";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sticker"]) ? $context["sticker"] : null), "reportedBy"), "html", null, true);
                echo "</td>
                                                        <td><ul class=\"reasons\">
                                                            ";
                // line 78
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["sticker"]) ? $context["sticker"] : null), "reason"));
                foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
                    // line 79
                    echo "                                                                <li>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["sticker"]) ? $context["sticker"] : null), "reasonName", array(0 => (isset($context["reason"]) ? $context["reason"] : null)), "method")), "html", null, true);
                    echo "</li>
                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reason'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 81
                echo "                                                        </ul></td>
                                                        <td>";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sticker"]) ? $context["sticker"] : null), "description"), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 83
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["sticker"]) ? $context["sticker"] : null), "createdAt"), "y-m-d H:i"), "html", null, true);
                echo "</td>
                                                    </tr>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sticker'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 86
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 95
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "FenchyAdminBundle:Default:notices.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 95,  225 => 86,  216 => 83,  212 => 82,  209 => 81,  200 => 79,  196 => 78,  191 => 76,  188 => 75,  184 => 74,  169 => 61,  160 => 59,  156 => 58,  148 => 53,  141 => 49,  134 => 45,  116 => 31,  110 => 29,  104 => 27,  102 => 26,  98 => 25,  89 => 23,  85 => 22,  79 => 21,  75 => 20,  71 => 19,  67 => 18,  63 => 17,  59 => 16,  56 => 15,  52 => 14,  40 => 5,  33 => 4,  30 => 3,  25 => 2,);
    }
}
