<?php

/* GeneralWidgetBundle:Admin:error_panel_report_week.html.twig */
class __TwigTemplate_3eb92d4537e6d2d6e9838420164837a5d629f4a0661fde0cf1b05096751b28db extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["histo_day_tab_error_msg"]) ? $context["histo_day_tab_error_msg"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 2
            echo "<div class='row mt t1'>
\t<div class=\"col-md-12 col-sm-12\">
\t\t<div class=\"white-panel pn donut-chart\">
      \t\t<div class=\"white-header\">
\t\t\t\t<h5>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["day"], "date", array()), "html", null, true);
            echo "</h5>
     \t\t </div>
\t\t\t<div class=\"row\" id=\"errorReport\" style =\"margin:auto; margin-top:0px;\">
\t\t\t\t<div class=\"col-sm-12 col-xs-12 boxContent\"  style=\"overflow-y:scroll; height:240px; width:98%\">
\t\t\t\t\t<table>
    \t\t\t\t\t<tr>
    \t\t\t\t\t\t<th> Flight </th><th> Event date </th><th> Error Msg </th>
    \t\t\t\t\t\t";
            // line 13
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["day"], "errors", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 14
                echo "        \t\t\t\t\t\t<tr>
        \t\t\t\t\t\t\t<td id = ";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "alert_color", array()), "html", null, true);
                echo " >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "flight", array()), "html", null, true);
                echo "</td>
        \t\t\t\t\t\t\t<td id = ";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "alert_color", array()), "html", null, true);
                echo " >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "evtdate", array()), "html", null, true);
                echo "</td>
        \t\t\t\t\t\t\t<td id = ";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "alert_color", array()), "html", null, true);
                echo " >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "formatError", array()), "html", null, true);
                echo "</td>
        \t\t\t\t\t\t</tr>
    \t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "    \t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t   \t\t</div>
\t\t</div>
\t</div>
</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "GeneralWidgetBundle:Admin:error_panel_report_week.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 20,  58 => 17,  52 => 16,  46 => 15,  43 => 14,  39 => 13,  29 => 6,  23 => 2,  19 => 1,);
    }
}
