<?php

/* GeneralWidgetBundle:Admin:group_monitoring.html.twig */
class __TwigTemplate_28ea481450d30d4601c9b3a348f05003e4f29547b7973601ca21f6c1231a8ab3 extends Twig_Template
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
        echo "<div class=\"col-sm-7 col-xs-7 boxContent\">
\t<div class=\"white-panel pn donut-chart auto-scale\">
\t\t<div class=\"white-header\">
\t\t\t<h5>Groups</h5>
      \t</div>
\t\t<div class=\"row\" id=\"robotStatus\" style =\"margin:auto; margin-top:0px;\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<th> Label </th><th> Users </th><th> Action </th>
\t\t\t\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["type_array"]) ? $context["type_array"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 11
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "label", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "nb_users", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a class = \"btn btnT1\" href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "delete", array()), "html", null, true);
            echo "\" onclick=\"return confirm('Delete ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "label", array()), "html", null, true);
            echo " ?')\"> Delete </a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t\t\t</tr>
\t\t\t</table>
\t\t</div>
\t</div>
</div>

<div class=\"col-sm-5 col-xs-5 boxContent\">
\t<div class=\"white-panel pn donut-chart\" style =\"margin-top:30px; height: 330px;\">
\t\t<div class=\"white-header\">
\t\t\t<h5>Add a Group</h5>
      \t</div>
\t\t<div class=\"row\" id=\"addRobot\" style =\"margin:auto;\">
\t\t\t<form id=\"form_full_page\" class=\"FormAlign\">
\t\t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "TypeProfil", array()), 'label');
        echo "
          \t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "TypeProfil", array()), 'errors');
        echo "
          \t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "TypeProfil", array()), 'widget');
        echo "
          \t\t<br /><br />
          \t\t
          \t\t<div class=\"submit\">
\t\t\t\t\t\t";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Add", array()), 'widget', array("attr" => array("class" => "btn btnT1")));
        echo "
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
\t\t\t</form>
\t\t</div>
\t</div>
</div>
\t\t\t\t
\t\t\t
";
    }

    public function getTemplateName()
    {
        return "GeneralWidgetBundle:Admin:group_monitoring.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 41,  88 => 38,  81 => 34,  77 => 33,  73 => 32,  58 => 19,  46 => 15,  41 => 13,  37 => 12,  34 => 11,  30 => 10,  19 => 1,);
    }
}
