<?php

/* GeneralWidgetBundle:Admin:data_inbond_histo_week.html.twig */
class __TwigTemplate_07cfa6c8462b4bce4cb1f46afe9425a16d927ae9168f4c332b645036e16c4c9c extends Twig_Template
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
        // line 1
        echo "<div class=\"white-panel pn\">
\t<div class=\"white-header\">
\t\t<h5>Data Inbound (2 Weeks)</h5>
\t</div>
    <div class=\"custom-bar-chart\" id=\"data_inbond_week\">
        <ul class=\"y-axis\">
        \t<li><span>1000</span></li>
        \t<li><span>800</span></li>
        \t<li><span>600</span></li>
        \t<li><span>400</span></li>
        \t<li><span>200</span></li>
        \t<li><span>0</span></li>
        </ul>
        \t";
        // line 14
        $context["i"] = 0;
        // line 15
        echo "        \t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["histo_day_tab_success"]) ? $context["histo_day_tab_success"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 16
            echo "\t\t\t\t<div class=\"bar\">
\t\t\t\t\t<div class=\"title\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["day"], 0, array(), "array"), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"succes_bar\" data-original-title = \"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["day"], 1, array(), "array"), "html", null, true);
            echo "\"
                 \t\t data-toggle=\"tooltip\" data-placement=\"top\" style=\"height:";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["day"], 2, array(), "array"), "html", null, true);
            echo "%\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["day"], 1, array(), "array"), "html", null, true);
            echo "</div>
                 \t<div class=\"fail_bar\" data-original-title = \"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["histo_day_tab_error"]) ? $context["histo_day_tab_error"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), 1, array(), "array"), "html", null, true);
            echo "\"
                 \t \tdata-toggle=\"tooltip\" data-placement=\"top\" style=\"height:";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["histo_day_tab_error"]) ? $context["histo_day_tab_error"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), 2, array(), "array"), "html", null, true);
            echo "%\"></div>\t\t
        \t\t</div>
        \t\t";
            // line 23
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 24
            echo "        \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        \t
        \t<!-- 
        \t";
        // line 27
        $context["i"] = 0;
        // line 28
        echo "        \t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["histo_day_tab_success"]) ? $context["histo_day_tab_success"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 29
            echo "\t\t\t\t<div class=\"bar\">
\t\t\t\t\t<div class=\"title\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["day"], 0, array(), "array"), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"value tooltips succes_bar\" data-original-title = \"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["day"], 1, array(), "array"), "html", null, true);
            echo "\"
                 \t\t data-toggle=\"tooltip\" data-placement=\"top\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["day"], 2, array(), "array"), "html", null, true);
            echo "%</div>
                 \t<div class=\"value tooltips fail_bar\" data-original-title = \"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["histo_day_tab_error"]) ? $context["histo_day_tab_error"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), 1, array(), "array"), "html", null, true);
            echo "\"
                 \t \tdata-toggle=\"tooltip\" data-placement=\"top\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["histo_day_tab_error"]) ? $context["histo_day_tab_error"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), 2, array(), "array"), "html", null, true);
            echo "%</div>\t\t
        \t\t</div>
        \t\t";
            // line 36
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 37
            echo "        \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
        \t-->
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "GeneralWidgetBundle:Admin:data_inbond_histo_week.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 37,  110 => 36,  105 => 34,  101 => 33,  97 => 32,  93 => 31,  89 => 30,  86 => 29,  81 => 28,  79 => 27,  75 => 25,  69 => 24,  67 => 23,  62 => 21,  58 => 20,  52 => 19,  48 => 18,  44 => 17,  41 => 16,  36 => 15,  34 => 14,  19 => 1,);
    }
}
