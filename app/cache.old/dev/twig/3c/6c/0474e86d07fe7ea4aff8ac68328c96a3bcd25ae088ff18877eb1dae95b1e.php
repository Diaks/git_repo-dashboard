<?php

/* GeneralWidgetBundle:Admin:robot_pc_status.html.twig */
class __TwigTemplate_3c6c0474e86d07fe7ea4aff8ac68328c96a3bcd25ae088ff18877eb1dae95b1e extends Twig_Template
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
  \t\t}, 60000);
\t});
</script>

<div class=\"white-panel pn donut-chart\">
      <div class=\"white-header\">
\t\t\t<h5>Robot Pc Status</h5>
      </div>
\t\t<div class=\"row\" id=\"robotStatus\" style =\"margin:auto; margin-top:0px;\">
\t\t\t<div class=\"col-sm-12 col-xs-12 boxContent\"  style=\"overflow-y:scroll; height: 345px; width:98%\">
\t\t\t
\t\t\t\t<table>
    \t\t\t\t<tr>
    \t\t\t\t\t<th> AFR </th><th> TID </th><th> Last Time Alive </th><th> Delete </th>
    \t\t\t\t\t";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["robot_pc_status"]) ? $context["robot_pc_status"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["robot_pc"]) {
            // line 20
            echo "        \t\t\t\t\t<tr id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["robot_pc"], "status", array()), "html", null, true);
            echo "\">
        \t\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["robot_pc"], "afr", array()), "html", null, true);
            echo "</td>
        \t\t\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["robot_pc"], "tid", array()), "html", null, true);
            echo "</td>
        \t\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["robot_pc"], "last_time", array()), "html", null, true);
            echo "</td>
        \t\t\t\t\t\t<td><a class = \"btn btnT1\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["robot_pc"], "link", array()), "html", null, true);
            echo "\" onclick=\"return confirm('Delete ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["robot_pc"], "afr", array()), "html", null, true);
            echo " ?')\"> Delete </a></td>
        \t\t\t\t\t</tr>
    \t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['robot_pc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    \t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t
\t\t\t</div>
\t    </div>
</div>

<div class=\"white-panel pn donut-chart\" style =\"margin-top:30px; height: 200px;\">
      <div class=\"white-header\">
\t\t\t<h5>Add a Robot PC</h5>
      </div>
\t\t<div class=\"row\" id=\"addRobot\" style =\"margin:auto;\">
\t\t\t<div class=\"col-sm-12 col-xs-12 boxContent\"  style=\"margin-top:30px; width:98%\">
\t\t\t
\t\t\t\t<form id=\"form_full_page\" class=\"FormAlign\">
\t\t\t\t";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "AFR", array()), 'label');
        echo "
          \t\t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "AFR", array()), 'errors');
        echo "
          \t\t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "AFR", array()), 'widget');
        echo "
          \t\t
          \t\t";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tid", array()), 'label');
        echo "
          \t\t";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tid", array()), 'errors');
        echo "
          \t\t";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tid", array()), 'widget');
        echo "
          \t\t
          \t\t<div class=\"submit\">
\t\t\t\t\t\t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Add", array()), 'widget', array("attr" => array("class" => "btn btnT1")));
        echo "
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
\t\t\t\t</form>
          \t
\t\t\t</div>
\t    </div>
</div>
\t\t\t\t
\t\t\t
";
    }

    public function getTemplateName()
    {
        return "GeneralWidgetBundle:Admin:robot_pc_status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 54,  115 => 51,  109 => 48,  105 => 47,  101 => 46,  96 => 44,  92 => 43,  88 => 42,  71 => 27,  60 => 24,  56 => 23,  52 => 22,  48 => 21,  43 => 20,  39 => 19,  19 => 1,);
    }
}
