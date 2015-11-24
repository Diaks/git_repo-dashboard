<?php

/* RMCARGODashboardAdminBundle:Admin:prio_monitoring.html.twig */
class __TwigTemplate_d1c284cc78b4aafef4c254f5fc0a39ed5b753c83ddd8ed46205089f7053ed592 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Admin home page";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <!-- ";
        echo "-->
    <div class=\"row\">
\t\t<div class=\"col-lg-12 main-chart\">
\t\t\t<h1>Prio Monitoring</h1>
\t\t\t
\t\t\t<div class='row mt'>
\t\t\t<form>
\t\t\t\t<div class=\"col-md-12 col-sm-12\">
\t\t\t\t\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prio_array"]) ? $context["prio_array"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["type_array"]) {
            // line 14
            echo "\t\t\t\t\t\t<div class=\"white-panel pn donut-chart\" style=\"height: auto; margin-top: 30px;\">
      \t\t\t\t\t\t<div class=\"white-header\">
\t\t\t\t\t\t\t\t<h5>Editing Table: ";
            // line 16
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</h5>
      \t\t\t\t\t\t</div>
      \t\t\t\t\t\t<div class=\"row\" style =\"margin:auto; margin-top:0px;\">
\t\t\t\t\t\t\t<div class=\"col-sm-12 col-xs-12 boxContent\"  style=\"width:98%\">
\t\t\t\t\t\t\t\t<table>
    \t\t\t\t\t\t\t\t<tr>
    \t\t\t\t\t\t\t\t\t<th> Name </th><th> Value </th><th> New Value </th>
    \t\t\t\t\t\t\t\t\t";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["type_array"]);
            foreach ($context['_seq'] as $context["_key"] => $context["prio"]) {
                // line 24
                echo "        \t\t\t\t\t\t\t\t\t<tr>
        \t\t\t\t\t\t\t\t\t\t<td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["prio"], "uld", array()), "html", null, true);
                echo "</td>
        \t\t\t\t\t\t\t\t\t\t<td>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["prio"], "priority", array()), "html", null, true);
                echo "</td>
        \t\t\t\t\t\t\t\t\t\t
        \t\t\t\t\t\t\t\t\t\t<td style=\"width:30%;\">";
                // line 28
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (($context["key"] . "_") . $this->getAttribute($context["prio"], "uld", array()))), 'errors');
                echo "
        \t\t\t\t\t\t\t\t\t\t";
                // line 29
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (($context["key"] . "_") . $this->getAttribute($context["prio"], "uld", array()))), 'widget');
                echo "</td>
        \t\t\t\t\t\t\t\t\t</tr>
        \t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "\t    \t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['type_array'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"submit\" style=\"text-align:center;\">
\t\t\t\t\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Update", array()), 'widget', array("attr" => array("class" => "btn btnT1", "style" => "margin-top:20px; width:135px;")));
        echo "
\t\t\t\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'row');
        echo "
\t\t\t\t\t
\t\t\t\t\t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t\t\t
\t</div>
\t
";
    }

    public function getTemplateName()
    {
        return "RMCARGODashboardAdminBundle:Admin:prio_monitoring.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 43,  115 => 41,  111 => 40,  107 => 38,  96 => 32,  87 => 29,  83 => 28,  78 => 26,  74 => 25,  71 => 24,  67 => 23,  57 => 16,  53 => 14,  49 => 13,  38 => 5,  35 => 4,  29 => 2,);
    }
}
