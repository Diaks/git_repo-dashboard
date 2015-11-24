<?php

/* RMCARGODashboardAdminBundle:Admin:robot_pc_monitoring.html.twig */
class __TwigTemplate_11b15d12a7bd4104071cad7c3040a0859ad46d66ccb1ec8081b742ed2110223b extends Twig_Template
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
\t\t\t<h1>Robot Pc Monitoring</h1>
\t\t\t
\t\t\t<div class='row mt'>
\t\t\t\t<div class=\"col-md-12 col-sm-12\" style=\"margin-top: 55px\">
\t\t\t\t\t";
        // line 12
        echo twig_include($this->env, $context, "GeneralWidgetBundle:Admin:robot_pc_status.html.twig ");
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>
\t</div>
\t
";
    }

    public function getTemplateName()
    {
        return "RMCARGODashboardAdminBundle:Admin:robot_pc_monitoring.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 12,  38 => 5,  35 => 4,  29 => 2,);
    }
}
