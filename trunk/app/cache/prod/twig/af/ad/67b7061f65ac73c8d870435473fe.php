<?php

/* FenchyRegularUserBundle:Message:index.html.twig */
class __TwigTemplate_afad67b7061f65ac73c8d870435473fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FenchyRegularUserBundle::messages.html.twig");

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'message_content' => array($this, 'block_message_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FenchyRegularUserBundle::messages.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/underscore-min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/underscore-min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/regular_user/messages/loader.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 10
    public function block_message_content($context, array $blocks = array())
    {
        // line 11
        echo "
                        <div class=\"highlight-toolbar clearfix\">
                            <div class=\"msg-links\">                                                                
                                <a href=\"#\" id=\"messages-delete\" style=\"text-decoration: underline; color:#000;\" title=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.message.delete_selected"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.delete"), "html", null, true);
        echo "</span></a>
                            </div>
                            <div class=\"toolbar-item button select-button grey-button pull-right\">
                                <strong>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.message.show_dd"), "html", null, true);
        echo ":</strong>
                                <div class=\"select-wrapper\">
                                    <span class=\"replacement\">
                                        <strong class=\"select-value\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(("regularuser." . (isset($context["type"]) ? $context["type"] : null))), "html", null, true);
        echo "</strong>
                                        <i id=\"sortby-dropdown-icon\" class=\"icon-caret-down\" ></i>
                                        <div class=\"drop-down\">
                                            <div>                                                                
                                                <i class=\"icon-ok\"></i>                                                                
                                                <span>1</span>
                                            </div>
                                            <div>                                                                
                                                <i class=\"icon-ok\"></i>                                                                
                                                <span>2</span>
                                            </div>
                                        </div>
                                    </span>
                                    <select class=\"custom-form message_type\" id=\"messageType\">
                                        <option value=\"all\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.all"), "html", null, true);
        echo "</option>
                                        <option value=\"unread\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.unread"), "html", null, true);
        echo "</option>
                                        <option value=\"unreplied\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.unreplied"), "html", null, true);
        echo "</option>
                                        <option value=\"sent\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.sent"), "html", null, true);
        echo "</option>
                                    </select>
                                </div>                                
                            </div>                                                            
                        </div>
                        <div class=\"message-center-content clearfix\">
                            <form action=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_messages_delete_selected"), "html", null, true);
        echo "\" method=\"POST\" id=\"messages-list-form\">
                                <table id=\"messages-list\">
                                    <tbody>
                                        ";
        // line 46
        if ((isset($context["messages"]) ? $context["messages"] : null)) {
            // line 47
            echo "                                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 48
                echo "                                                <tr ";
                if ((!$this->getAttribute((isset($context["message"]) ? $context["message"] : null), "read"))) {
                    echo "class=\"new\"";
                }
                echo ">
                                                    <td><input class='message-check' rel='";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "id"), "html", null, true);
                echo "' type=\"checkbox\" name=\"message[";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "id"), "html", null, true);
                echo "]\"/></td>
                                                    <td><a href=\"#\"><i class=\"\"></i></a></td>
                                                    <td><span class=\"image-container vsmall-avatar\"><img src=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "sender"), "regularuser"), "avatar")), "html", null, true);
                echo "\" /></span></td>
                                                    <td class=\"table-sender\">";
                // line 52
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "system")) ? ("Fenchy") : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "sender"), "userregular"), "firstname"))), "html", null, true);
                echo "</td>
                                                    <td class=\"table-subject\"><a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_messages_view", array("id" => $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "id"))), "html", null, true);
                echo "\"";
                if (($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "unread") && ($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "receiver") == $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user")))) {
                    echo " class=\"unread\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "title"), "html", null, true);
                echo "</a></td>
                                                    <td><i class=\"\"></i></td>
                                                    <td>";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('fenchy_extension')->relativeDateTime($this->env, "", $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "createdAt")), "html", null, true);
                echo "</td>
                                                </tr>                                            
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 58
            echo "                                        ";
        } else {
            // line 59
            echo "                                        <tr id=\"no-messages\">
                                            <td colspan=\"6\">";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("regularuser.message.no_messages"), "html", null, true);
            echo "</td>
                                        </tr>
                                        ";
        }
        // line 63
        echo "                                    </tbody>
                                </table>
                            </form>                           
                        </div>
                    

<script id=\"msg-row\" type=\"text/template\">
<tr class=\"new\">
    <td><input class=\"message-check\" rel=\"<%- id %>\" type=\"checkbox\" name=\"message[<%- id %>]\"/></td>
    <td><a href=\"#\"><i class=\"\"></i></a></td>
    <td><span class=\"image-container vsmall-avatar\"><img src=\"<%- avatar %>\" /></span></td>
    <td class=\"table-sender\"><%- sender %></td>
    <td class=\"table-subject\"><a href=\"<%- url %>\"class=\"<%- red %>\"><%- title %></a></td>
    <td><i class=\"\"></i></td>
    <td><%- date %></td>
</tr>
</script>
<script type=\"text/javascript\">
    \$(document).ready(function() {
        //set right selection
        \$('#messageType').val('";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "');

        \$('#messageType').change(function(){
            var selected = \$(this).val();
            if (selected == 'all')
                window.location.replace(\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_messages_index"), "html", null, true);
        echo "\");
            else
                window.location.replace(\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_messages_index"), "html", null, true);
        echo "/\" + selected);
        });
        new messageLoader(\$('#messages-list tbody'), '";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fenchy_regular_user_messages_index", array("_format" => "json", "type" => "unread")), "html", null, true);
        echo "');
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "FenchyRegularUserBundle:Message:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 92,  213 => 90,  208 => 88,  200 => 83,  178 => 63,  172 => 60,  169 => 59,  166 => 58,  157 => 55,  146 => 53,  142 => 52,  138 => 51,  131 => 49,  124 => 48,  119 => 47,  117 => 46,  111 => 43,  102 => 37,  98 => 36,  94 => 35,  90 => 34,  73 => 20,  67 => 17,  59 => 14,  54 => 11,  51 => 10,  45 => 7,  41 => 6,  37 => 5,  32 => 4,  29 => 3,);
    }
}
