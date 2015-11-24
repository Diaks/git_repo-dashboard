<?php

/* GeneralWidgetBundle:Admin:error_panel_report.html.twig */
class __TwigTemplate_6f75810ed4da7f8be2a3a6095fd4de81de7d6d904e410cf2589525b033543681 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
\t\$(function() {
\t\tsetInterval(function() {
    \t\t\$('#errorReport').load(location.href+' #errorReport');
  \t\t}, 15000); //refresh every 15s
\t});
</script>

<div class=\"white-panel pn donut-chart\">
      <div class=\"white-header\">
\t\t\t<h5>Error Panel Messages</h5>
      </div>
\t\t<div class=\"row\" id=\"errorReport\" style =\"margin:auto; margin-top:0px;\">
\t\t\t<div class=\"col-sm-12 col-xs-12 boxContent\"  style=\"overflow-y:scroll; height:240px; width:98%\">
\t\t\t\t<table>
    \t\t\t\t<tr>
    \t\t\t\t\t<th> Flight </th><th> Event date </th><th> Error Msg </th>
    \t\t\t\t\t";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["error_tab"]) ? $context["error_tab"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 19
            echo "        \t\t\t\t\t<tr>
        \t\t\t\t\t\t<td id = ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "alert_color", array()), "html", null, true);
            echo " >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "flight", array()), "html", null, true);
            echo "</td>
        \t\t\t\t\t\t<td id = ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "alert_color", array()), "html", null, true);
            echo " >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "evtdate", array()), "html", null, true);
            echo "</td>
        \t\t\t\t\t\t<td id = ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "alert_color", array()), "html", null, true);
            echo " >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "formatError", array()), "html", null, true);
            echo "</td>
        \t\t\t\t\t</tr>
    \t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    \t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>
\t    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "GeneralWidgetBundle:Admin:error_panel_report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 25,  57 => 22,  51 => 21,  45 => 20,  42 => 19,  38 => 18,  19 => 1,);
    }
}
