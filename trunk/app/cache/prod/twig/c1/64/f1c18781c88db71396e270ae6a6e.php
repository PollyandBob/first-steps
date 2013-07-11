<?php

/* ::helpers.html.twig */
class __TwigTemplate_c164f1c18781c88db71396e270ae6a6e extends Twig_Template
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
        // line 15
        echo "
";
        // line 32
        echo "
";
        // line 41
        echo "
";
        // line 56
        echo "
";
        // line 220
        echo "    
        
        
";
    }

    // line 1
    public function getbutton($_uri = null, $_label = null, $_attrs = null)
    {
        $context = $this->env->mergeGlobals(array(
            "uri" => $_uri,
            "label" => $_label,
            "attrs" => $_attrs,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["class"] = "button";
            // line 3
            echo "    ";
            $context["attr_string"] = "";
            // line 4
            echo "    ";
            if (array_key_exists("attrs", $context)) {
                // line 5
                echo "        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["attrs"]) ? $context["attrs"] : null));
                foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                    // line 6
                    echo "            ";
                    if (("class" == (isset($context["name"]) ? $context["name"] : null))) {
                        // line 7
                        echo "                ";
                        $context["class"] = (((isset($context["class"]) ? $context["class"] : null) . " ") . (isset($context["value"]) ? $context["value"] : null));
                        // line 8
                        echo "            ";
                    } else {
                        // line 9
                        echo "                ";
                        $context["attr_string"] = ((((((isset($context["attr_string"]) ? $context["attr_string"] : null) . " ") . (isset($context["name"]) ? $context["name"] : null)) . "\"") . (isset($context["value"]) ? $context["value"] : null)) . "\"");
                        // line 10
                        echo "            ";
                    }
                    // line 11
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 12
                echo "    ";
            }
            // line 13
            echo "    <a class=\"";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, (isset($context["attr_string"]) ? $context["attr_string"] : null), "html", null, true);
            echo " href=\"";
            echo twig_escape_filter($this->env, (isset($context["uri"]) ? $context["uri"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null)), "html", null, true);
            echo "</a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 16
    public function getimage($_src = null, $_attrs = null)
    {
        $context = $this->env->mergeGlobals(array(
            "src" => $_src,
            "attrs" => $_attrs,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 17
            echo "    ";
            if (((null === (isset($context["src"]) ? $context["src"] : null)) || ("/" == (isset($context["src"]) ? $context["src"] : null)))) {
                // line 18
                echo "        ";
                $context["src"] = (isset($context["default_picture"]) ? $context["default_picture"] : null);
                // line 19
                echo "    ";
            }
            // line 20
            echo "    ";
            $context["attr_string"] = " ";
            // line 21
            echo "    ";
            if (array_key_exists("attrs", $context)) {
                // line 22
                echo "        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["attrs"]) ? $context["attrs"] : null));
                foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                    // line 23
                    echo "            ";
                    if (("size" == (isset($context["name"]) ? $context["name"] : null))) {
                        // line 24
                        echo "                ";
                        $context["attr_string"] = (((((isset($context["attr_string"]) ? $context["attr_string"] : null) . " width=") . (isset($context["value"]) ? $context["value"] : null)) . " height=") . (isset($context["value"]) ? $context["value"] : null));
                        // line 25
                        echo "            ";
                    } else {
                        // line 26
                        echo "                ";
                        $context["attr_string"] = (((((isset($context["attr_string"]) ? $context["attr_string"] : null) . " ") . (isset($context["name"]) ? $context["name"] : null)) . "=") . (isset($context["value"]) ? $context["value"] : null));
                        // line 27
                        echo "            ";
                    }
                    // line 28
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 29
                echo "    ";
            }
            // line 30
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["src"]) ? $context["src"] : null)), "html", null, true);
            echo "\"";
            echo twig_escape_filter($this->env, (isset($context["attr_string"]) ? $context["attr_string"] : null), "html", null, true);
            echo " />
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 33
    public function getprofile_image($_src = null, $_attrs = null)
    {
        $context = $this->env->mergeGlobals(array(
            "src" => $_src,
            "attrs" => $_attrs,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 34
            echo "    ";
            $context["helper"] = $this;
            // line 35
            echo "
    ";
            // line 36
            if (((null === (isset($context["src"]) ? $context["src"] : null)) || ("/" == (isset($context["src"]) ? $context["src"] : null)))) {
                // line 37
                echo "        ";
                $context["src"] = (isset($context["default_profile_picture"]) ? $context["default_profile_picture"] : null);
                // line 38
                echo "    ";
            }
            // line 39
            echo "    ";
            echo $context["helper"]->getimage((isset($context["src"]) ? $context["src"] : null), (isset($context["attrs"]) ? $context["attrs"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 42
    public function geticon($_type = null, $_uri = null, $_attrs = null)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $_type,
            "uri" => $_uri,
            "attrs" => $_attrs,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 43
            echo "    ";
            $context["text"] = ("main.icons." . (isset($context["type"]) ? $context["type"] : null));
            // line 44
            echo "    ";
            $context["class"] = "";
            // line 45
            echo "    ";
            if (array_key_exists("attrs", $context)) {
                // line 46
                echo "        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["attrs"]) ? $context["attrs"] : null));
                foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                    // line 47
                    echo "            ";
                    if (("class" == (isset($context["name"]) ? $context["name"] : null))) {
                        // line 48
                        echo "                ";
                        $context["class"] = (((isset($context["class"]) ? $context["class"] : null) . " ") . (isset($context["value"]) ? $context["value"] : null));
                        // line 49
                        echo "            ";
                    } elseif (("text" == (isset($context["name"]) ? $context["name"] : null))) {
                        // line 50
                        echo "                ";
                        $context["text"] = (isset($context["value"]) ? $context["value"] : null);
                        // line 51
                        echo "            ";
                    }
                    // line 52
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 53
                echo "    ";
            }
            // line 54
            echo "    <a class=\"icon ";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["uri"]) ? $context["uri"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('translator')->trans((isset($context["text"]) ? $context["text"] : null)), ""), "html", null, true);
            echo "</a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 57
    public function gettriangles_buttons($_id = null, $_content = null, $_color = null, $_bgcolor = null, $_bordercolor = null, $_padding = null, $_width = null, $_height = null, $_fontsize = null, $_direction = null, $_link = null, $_display = null)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $_id,
            "content" => $_content,
            "color" => $_color,
            "bgcolor" => $_bgcolor,
            "bordercolor" => $_bordercolor,
            "padding" => $_padding,
            "width" => $_width,
            "height" => $_height,
            "fontsize" => $_fontsize,
            "direction" => $_direction,
            "link" => $_link,
            "display" => $_display,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 58
            echo "    <style>
        
        .triangle_button_";
            // line 60
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "{
            ";
            // line 61
            if (((isset($context["width"]) ? $context["width"] : null) == "auto")) {
                // line 62
                echo "            width:width;
            ";
            } else {
                // line 64
                echo "            width:";
                echo twig_escape_filter($this->env, ((((isset($context["width"]) ? $context["width"] : null) + ((isset($context["padding"]) ? $context["padding"] : null) * 2)) + (((isset($context["height"]) ? $context["height"] : null) + (2 * (isset($context["padding"]) ? $context["padding"] : null))) + 4)) + 1), "html", null, true);
                echo "px;
            ";
            }
            // line 66
            echo "            font-family:MYRIADPRO-SEMIBOLD,serif;
            
        }
        
        .triangle_button_";
            // line 70
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo " a{
            color:";
            // line 71
            echo twig_escape_filter($this->env, (isset($context["color"]) ? $context["color"] : null), "html", null, true);
            echo ";
        }
        
        .triangle_button_content_";
            // line 74
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "{
            background:";
            // line 75
            echo twig_escape_filter($this->env, (isset($context["bgcolor"]) ? $context["bgcolor"] : null), "html", null, true);
            echo ";
            ";
            // line 76
            if (((isset($context["width"]) ? $context["width"] : null) == "auto")) {
                // line 77
                echo "            width:width;
            ";
            } else {
                // line 79
                echo "            width:";
                echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true);
                echo "px;
            ";
            }
            // line 81
            echo "            height:";
            echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true);
            echo "px;
            border:1px solid ";
            // line 82
            echo twig_escape_filter($this->env, (isset($context["bordercolor"]) ? $context["bordercolor"] : null), "html", null, true);
            echo ";
            float:left;
            -ms-word-break: break-all;
            word-wrap: break-word;
            padding:";
            // line 86
            echo twig_escape_filter($this->env, (isset($context["padding"]) ? $context["padding"] : null), "html", null, true);
            echo "px;
            font-size:";
            // line 87
            echo twig_escape_filter($this->env, (isset($context["fontsize"]) ? $context["fontsize"] : null), "html", null, true);
            echo "px;
        }
        
        .no_triangle_button_content_";
            // line 90
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "
        {
            margin-right:10px;
            background:";
            // line 93
            echo twig_escape_filter($this->env, (isset($context["bgcolor"]) ? $context["bgcolor"] : null), "html", null, true);
            echo ";
            ";
            // line 94
            if (((isset($context["width"]) ? $context["width"] : null) == "auto")) {
                // line 95
                echo "            width:width;
            ";
            } else {
                // line 97
                echo "            width:";
                echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true);
                echo "px;
            ";
            }
            // line 99
            echo "            height:";
            echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true);
            echo "px;
            border:1px solid ";
            // line 100
            echo twig_escape_filter($this->env, (isset($context["bordercolor"]) ? $context["bordercolor"] : null), "html", null, true);
            echo ";
            float:left;
            -ms-word-break: break-all;
            word-wrap: break-word;
            border-radius: 5px;
            padding:";
            // line 105
            echo twig_escape_filter($this->env, (isset($context["padding"]) ? $context["padding"] : null), "html", null, true);
            echo "px;
            font-size:";
            // line 106
            echo twig_escape_filter($this->env, (isset($context["fontsize"]) ? $context["fontsize"] : null), "html", null, true);
            echo "px;
        }
        
        .triangle_button_content_rdir_";
            // line 109
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "{
            border-right:0;
            border-bottom-left-radius: 5px;
            border-top-left-radius: 5px;
            margin-left:10px;
        }
        
        .triangle_button_content_ldir_";
            // line 116
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "{
            border-left:0;
            border-bottom-right-radius: 5px;
            border-top-right-radius: 5px;
            margin-right:10px;
        }
        
        .triangle_button_right_";
            // line 123
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo " {
            width: 0;
            height: 0;
            float:left;
            border-top: ";
            // line 127
            echo twig_escape_filter($this->env, ((((isset($context["height"]) ? $context["height"] : null) + (2 * (isset($context["padding"]) ? $context["padding"] : null))) + 3) / 2), "html", null, true);
            echo "px solid transparent;
            border-left: ";
            // line 128
            echo twig_escape_filter($this->env, ((((isset($context["height"]) ? $context["height"] : null) + (2 * (isset($context["padding"]) ? $context["padding"] : null))) + 4) / 2), "html", null, true);
            echo "px solid ";
            echo twig_escape_filter($this->env, (isset($context["bordercolor"]) ? $context["bordercolor"] : null), "html", null, true);
            echo ";
            border-bottom: ";
            // line 129
            echo twig_escape_filter($this->env, ((((isset($context["height"]) ? $context["height"] : null) + (2 * (isset($context["padding"]) ? $context["padding"] : null))) + 3) / 2), "html", null, true);
            echo "px solid transparent;
        }

        .triangle_button_right_inside_";
            // line 132
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "{
            width: 0;
            height: 0;
            position:relative;
            left:-";
            // line 136
            echo twig_escape_filter($this->env, ((((isset($context["height"]) ? $context["height"] : null) + (2 * (isset($context["padding"]) ? $context["padding"] : null))) + 4) / 2), "html", null, true);
            echo "px;
            top:-";
            // line 137
            echo twig_escape_filter($this->env, ((((isset($context["height"]) ? $context["height"] : null) + (2 * (isset($context["padding"]) ? $context["padding"] : null))) + 1) / 2), "html", null, true);
            echo "px;
            border-top: ";
            // line 138
            echo twig_escape_filter($this->env, ((((isset($context["height"]) ? $context["height"] : null) + (2 * (isset($context["padding"]) ? $context["padding"] : null))) + 1) / 2), "html", null, true);
            echo "px solid transparent;
            border-left: ";
            // line 139
            echo twig_escape_filter($this->env, (((((isset($context["height"]) ? $context["height"] : null) + (2 * (isset($context["padding"]) ? $context["padding"] : null))) + 3) - 1) / 2), "html", null, true);
            echo "px solid ";
            echo twig_escape_filter($this->env, (isset($context["bgcolor"]) ? $context["bgcolor"] : null), "html", null, true);
            echo ";
            border-bottom: ";
            // line 140
            echo twig_escape_filter($this->env, ((((isset($context["height"]) ? $context["height"] : null) + (2 * (isset($context["padding"]) ? $context["padding"] : null))) + 1) / 2), "html", null, true);
            echo "px solid transparent;
        }
        
        
        .triangle_button_left_";
            // line 144
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo " {
            width: 0;
            height: 0;
            float:left;
            border-top: ";
            // line 148
            echo twig_escape_filter($this->env, ((((isset($context["height"]) ? $context["height"] : null) + (2 * (isset($context["padding"]) ? $context["padding"] : null))) + 3) / 2), "html", null, true);
            echo "px solid transparent;
            border-right: ";
            // line 149
            echo twig_escape_filter($this->env, ((((isset($context["height"]) ? $context["height"] : null) + (2 * (isset($context["padding"]) ? $context["padding"] : null))) + 2) / 2), "html", null, true);
            echo "px solid ";
            echo twig_escape_filter($this->env, (isset($context["bordercolor"]) ? $context["bordercolor"] : null), "html", null, true);
            echo ";
            border-bottom: ";
            // line 150
            echo twig_escape_filter($this->env, ((((isset($context["height"]) ? $context["height"] : null) + (2 * (isset($context["padding"]) ? $context["padding"] : null))) + 3) / 2), "html", null, true);
            echo "px solid transparent;
        }

        .triangle_button_left_inside_";
            // line 153
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "{
            width: 0;
            height: 0;
            position:relative;
            left:1;
            top:-";
            // line 158
            echo twig_escape_filter($this->env, ((((isset($context["height"]) ? $context["height"] : null) + (2 * (isset($context["padding"]) ? $context["padding"] : null))) + 1) / 2), "html", null, true);
            echo "px;
            border-top: ";
            // line 159
            echo twig_escape_filter($this->env, ((((isset($context["height"]) ? $context["height"] : null) + (2 * (isset($context["padding"]) ? $context["padding"] : null))) + 1) / 2), "html", null, true);
            echo "px solid transparent;
            border-right: ";
            // line 160
            echo twig_escape_filter($this->env, (((isset($context["height"]) ? $context["height"] : null) + (2 * (isset($context["padding"]) ? $context["padding"] : null))) / 2), "html", null, true);
            echo "px solid ";
            echo twig_escape_filter($this->env, (isset($context["bgcolor"]) ? $context["bgcolor"] : null), "html", null, true);
            echo ";
            border-bottom: ";
            // line 161
            echo twig_escape_filter($this->env, ((((isset($context["height"]) ? $context["height"] : null) + (2 * (isset($context["padding"]) ? $context["padding"] : null))) + 1) / 2), "html", null, true);
            echo "px solid transparent;
        }
        
    </style>
    <div class=\"triangle_button_";
            // line 165
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
        ";
            // line 166
            if (((isset($context["direction"]) ? $context["direction"] : null) == "right")) {
                // line 167
                echo "        <div class=\"triangle_button_content_";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo " triangle_button_content_rdir_";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\">
            ";
                // line 168
                if (((isset($context["link"]) ? $context["link"] : null) != "")) {
                    // line 169
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["link"]) ? $context["link"] : null), array("id" => (isset($context["id"]) ? $context["id"] : null))), "html", null, true);
                    echo "\">
                    ";
                    // line 170
                    echo twig_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
                    echo "
                </a>                    
            ";
                } else {
                    // line 173
                    echo "                <div>
                    ";
                    // line 174
                    echo twig_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
                    echo "
                </div>
            ";
                }
                // line 177
                echo "        </div>
        <div class=\"triangle_button_right_";
                // line 178
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\">
            <div class=\"triangle_button_right_inside_";
                // line 179
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\" >

            </div>
        </div>
        ";
            } elseif (((isset($context["direction"]) ? $context["direction"] : null) == "left")) {
                // line 184
                echo "        <div class=\"triangle_button_left_";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\">
            <div class=\"triangle_button_left_inside_";
                // line 185
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\" >

            </div>
        </div>  
        <div class=\"triangle_button_content_";
                // line 189
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo " triangle_button_content_ldir_";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\">
            ";
                // line 190
                if (((isset($context["link"]) ? $context["link"] : null) != "")) {
                    // line 191
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["link"]) ? $context["link"] : null), array("id" => (isset($context["id"]) ? $context["id"] : null))), "html", null, true);
                    echo "\">
                ";
                    // line 192
                    echo twig_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
                    echo "
            </a>                    
            ";
                } else {
                    // line 195
                    echo "                <div>
                    ";
                    // line 196
                    echo twig_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
                    echo "
                </div>
            ";
                }
                // line 199
                echo "        </div>
        ";
            } else {
                // line 200
                echo "    
        <div class=\" no_triangle_button_content_";
                // line 201
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\">
            ";
                // line 202
                if (((isset($context["link"]) ? $context["link"] : null) != "")) {
                    // line 203
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["link"]) ? $context["link"] : null), array("id" => (isset($context["id"]) ? $context["id"] : null))), "html", null, true);
                    echo "\">
                    ";
                    // line 204
                    echo twig_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
                    echo "
                </a>                    
            ";
                } else {
                    // line 207
                    echo "                <div>
                    ";
                    // line 208
                    echo twig_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
                    echo "
                </div>
            ";
                }
                // line 211
                echo "        </div>
        ";
            }
            // line 213
            echo "        ";
            if (((isset($context["display"]) ? $context["display"] : null) != "float")) {
                // line 214
                echo "            <div style=\"clear:both;\"></div>
        ";
            }
            // line 216
            echo "    </div>
    ";
            // line 217
            if (((isset($context["display"]) ? $context["display"] : null) != "float")) {
                // line 218
                echo "        <div style=\"clear:both;\"></div>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 223
    public function gettrust_points($_id = null)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $_id,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 224
            echo "    ";
            $context["count"] = $this->env->getExtension('fenchy_regularuser_extension')->trustPoints((isset($context["id"]) ? $context["id"] : null));
            // line 225
            echo "    ";
            if (((isset($context["count"]) ? $context["count"] : null) < 100)) {
                // line 226
                echo "        ";
                echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true);
                echo "
    ";
            } else {
                // line 228
                echo "        99+
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "::helpers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  738 => 228,  732 => 226,  729 => 225,  726 => 224,  715 => 223,  702 => 218,  700 => 217,  697 => 216,  693 => 214,  690 => 213,  686 => 211,  680 => 208,  677 => 207,  671 => 204,  666 => 203,  664 => 202,  660 => 201,  657 => 200,  653 => 199,  647 => 196,  644 => 195,  638 => 192,  633 => 191,  631 => 190,  625 => 189,  618 => 185,  613 => 184,  605 => 179,  601 => 178,  598 => 177,  592 => 174,  589 => 173,  583 => 170,  578 => 169,  576 => 168,  569 => 167,  567 => 166,  563 => 165,  556 => 161,  550 => 160,  546 => 159,  542 => 158,  534 => 153,  528 => 150,  522 => 149,  518 => 148,  511 => 144,  504 => 140,  498 => 139,  494 => 138,  490 => 137,  486 => 136,  479 => 132,  473 => 129,  467 => 128,  463 => 127,  456 => 123,  446 => 116,  436 => 109,  430 => 106,  426 => 105,  418 => 100,  413 => 99,  407 => 97,  403 => 95,  401 => 94,  397 => 93,  391 => 90,  385 => 87,  381 => 86,  374 => 82,  369 => 81,  363 => 79,  359 => 77,  357 => 76,  353 => 75,  349 => 74,  343 => 71,  339 => 70,  333 => 66,  327 => 64,  323 => 62,  321 => 61,  317 => 60,  313 => 58,  291 => 57,  263 => 52,  260 => 51,  257 => 50,  251 => 48,  243 => 46,  240 => 45,  237 => 44,  234 => 43,  221 => 42,  204 => 38,  201 => 37,  199 => 36,  193 => 34,  181 => 33,  165 => 30,  162 => 29,  153 => 27,  150 => 26,  147 => 25,  144 => 24,  133 => 21,  130 => 20,  127 => 19,  121 => 17,  86 => 12,  77 => 10,  65 => 6,  60 => 5,  51 => 2,  38 => 1,  28 => 56,  22 => 32,  19 => 15,  272 => 54,  269 => 53,  266 => 86,  261 => 80,  258 => 79,  254 => 49,  248 => 47,  245 => 73,  242 => 72,  235 => 69,  229 => 67,  226 => 66,  223 => 65,  220 => 64,  213 => 82,  211 => 79,  207 => 39,  205 => 71,  202 => 70,  197 => 63,  194 => 62,  190 => 60,  187 => 59,  178 => 53,  174 => 52,  171 => 51,  159 => 42,  140 => 29,  136 => 22,  132 => 27,  128 => 26,  124 => 18,  119 => 23,  113 => 20,  106 => 18,  100 => 16,  96 => 15,  92 => 14,  88 => 13,  74 => 9,  69 => 62,  66 => 61,  64 => 58,  55 => 53,  53 => 51,  50 => 50,  47 => 18,  45 => 11,  41 => 10,  31 => 220,  29 => 1,  117 => 29,  109 => 16,  107 => 29,  101 => 26,  97 => 25,  93 => 24,  83 => 12,  80 => 11,  73 => 15,  68 => 7,  62 => 10,  57 => 4,  54 => 3,  48 => 6,  44 => 5,  35 => 3,  32 => 2,  239 => 71,  225 => 86,  216 => 83,  212 => 82,  209 => 81,  200 => 64,  196 => 35,  191 => 76,  188 => 75,  184 => 58,  169 => 61,  160 => 59,  156 => 28,  148 => 34,  141 => 23,  134 => 45,  116 => 31,  110 => 29,  104 => 27,  102 => 26,  98 => 25,  89 => 13,  85 => 22,  79 => 21,  75 => 20,  71 => 8,  67 => 18,  63 => 17,  59 => 16,  56 => 15,  52 => 14,  40 => 4,  33 => 4,  30 => 3,  25 => 41,);
    }
}
