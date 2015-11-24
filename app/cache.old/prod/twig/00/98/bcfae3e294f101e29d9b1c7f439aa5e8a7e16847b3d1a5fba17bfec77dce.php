<?php

/* RMCARGODashboardAdminBundle:Admin:clean_monitoring.html.twig */
class __TwigTemplate_0098bcfae3e294f101e29d9b1c7f439aa5e8a7e16847b3d1a5fba17bfec77dce extends Twig_Template
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
        echo "    <script type=\"text/javascript\">
\t\$(function() {
\t\tsetInterval(function() {
    \t\t\$('#w1').load(location.href+' #w1');
    \t\t\$('#w2').load(location.href+' #w2')
  \t\t}, 15000); //refresh every 15s
\t});
\t</script>

    <div class=\"row\">
\t\t<div class=\"col-lg-12 main-chart\">
\t\t\t<h1>Purge Monitoring</h1>
\t\t\t<div class=\"row mtbox\">
\t\t\t
\t\t\t\t<div class=\"col-md-6 col-sm-6\">
\t\t\t\t\t<div id=\"w1\">
\t\t\t\t\t\t";
        // line 21
        $context["status"] = "Requested";
        // line 22
        echo "                  \t\t";
        echo twig_include($this->env, $context, "GeneralWidgetBundle:Admin:DB_status_purge.html.twig");
        echo "
                  \t</div>
                </div>
                
\t\t\t\t<div class=\"col-md-6 col-sm-6\">
\t\t\t\t\t<div id=\"w2\">
\t\t\t\t\t\t";
        // line 28
        $context["status"] = "Processing";
        // line 29
        echo "                  \t\t";
        echo twig_include($this->env, $context, "GeneralWidgetBundle:Admin:DB_status_purge.html.twig");
        echo "
                  \t</div>
                </div>
                
\t\t\t</div>
\t\t</div>
\t</div>
\t
";
    }

    public function getTemplateName()
    {
        return "RMCARGODashboardAdminBundle:Admin:clean_monitoring.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 29,  68 => 28,  58 => 22,  56 => 21,  38 => 5,  35 => 4,  29 => 2,);
    }
}
