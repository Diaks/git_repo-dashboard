<?php

/* GeneralWidgetBundle:Admin:robot_pc_status_mini.html.twig */
class __TwigTemplate_2c638c8717e5d7cd901185a38d3cef75accdfd7e532387da6ac279a302aa296d extends Twig_Template
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
    \t\t\$('#robotStatus').load(location.href+' #robotStatus');
  \t\t}, 15000);
\t});
</script>

<div class=\"white-panel pn donut-chart\">
      <div class=\"white-header\">
\t\t\t<h5>Robot Pc Status</h5>
      </div>
\t\t<div class=\"row\" id=\"robotStatus\" style =\"margin:auto; margin-top:0px;\">
\t\t\t<div class=\"col-sm-12 col-xs-12 boxContent\"  style=\"overflow-y:scroll; height:190px; width:98%\">
\t\t\t\t<table>
    \t\t\t\t<tr>
    \t\t\t\t\t<th> AFR </th><th> Last Time Alive </th>
    \t\t\t\t\t";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["robot_pc_status"]) ? $context["robot_pc_status"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["robot_pc"]) {
            // line 19
            echo "        \t\t\t\t\t<tr id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["robot_pc"], "status", array()), "html", null, true);
            echo "\">
        \t\t\t\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["robot_pc"], "afr", array()), "html", null, true);
            echo "</td>
        \t\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["robot_pc"], "last_time", array()), "html", null, true);
            echo "</td>
        \t\t\t\t\t</tr>
    \t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['robot_pc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    \t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>
\t    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "GeneralWidgetBundle:Admin:robot_pc_status_mini.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 24,  51 => 21,  47 => 20,  42 => 19,  38 => 18,  19 => 1,);
    }
}
