<?php

/* GeneralWidgetBundle:Admin:data_inbond_histo_day.html.twig */
class __TwigTemplate_11e841f60e790b75b90d6bf052afc49c04cf74a89f6f19464856883df555b06f extends Twig_Template
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
    \t\t\$('#data_inbond_day').load(location.href+' #data_inbond_day')
  \t\t}, 300000); //every 5min
\t});
</script>

<div class=\"white-panel pn\">
\t<div class=\"white-header\">
\t\t<h5>Data Inbound (24 hours)</h5>
\t</div>
    <div class=\"custom-bar-chart\" id=\"data_inbond_day\">
        <ul class=\"y-axis\">
        \t<li><span>150</span></li>
        \t<li><span>120</span></li>
        \t<li><span>90</span></li>
        \t<li><span>60</span></li>
        \t<li><span>30</span></li>
        \t<li><span>0</span></li>
        </ul>
        \t";
        // line 22
        $context["i"] = 1;
        // line 23
        echo "        \t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["histo_day_tab_success"]) ? $context["histo_day_tab_success"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["hour"]) {
            // line 24
            echo "\t\t\t\t<div class=\"bar2\">
\t\t\t\t\t<div class=\"title\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["hour"], "hour", array()), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"succes_bar\" data-original-title = \"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["hour"], "nb_vols", array()), "html", null, true);
            echo "\"
                 \t\t data-toggle=\"tooltip\" data-placement=\"top\" style=\"height:";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["hour"], "percent", array()), "html", null, true);
            echo "%\"></div>
                 \t<div class=\"fail_bar\" data-original-title = \"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["histo_day_tab_error"]) ? $context["histo_day_tab_error"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "nb_vols", array()), "html", null, true);
            echo "\"
                 \t \tdata-toggle=\"tooltip\" data-placement=\"top\" style=\"height:";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["histo_day_tab_error"]) ? $context["histo_day_tab_error"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "percent", array()), "html", null, true);
            echo "%\"></div>\t\t
        \t\t</div>
        \t\t";
            // line 31
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 32
            echo "        \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "GeneralWidgetBundle:Admin:data_inbond_histo_day.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 33,  75 => 32,  73 => 31,  68 => 29,  64 => 28,  60 => 27,  56 => 26,  52 => 25,  49 => 24,  44 => 23,  42 => 22,  19 => 1,);
    }
}
