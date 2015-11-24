<?php

/* RMCARGODashboardAdminBundle:Admin:data_details.html.twig */
class __TwigTemplate_d237f2a0228c1a98ad6a962e0d4b6ba91321b7eb75c78ae5e092a9f35b374600 extends Twig_Template
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
\t\t\t<h1>Data details</h1>
\t\t\t
\t\t\t<div class='row mt'>
\t\t\t\t<div class=\"col-md-12 col-sm-12\">
\t\t\t\t\t";
        // line 12
        echo twig_include($this->env, $context, "GeneralWidgetBundle:Admin:data_inbond_histo_week.html.twig ");
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t";
        // line 17
        echo twig_include($this->env, $context, "GeneralWidgetBundle:Admin:error_panel_report_week.html.twig ");
        echo "

\t\t\t
\t\t</div>
\t</div>
\t
";
    }

    public function getTemplateName()
    {
        return "RMCARGODashboardAdminBundle:Admin:data_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 17,  48 => 12,  38 => 5,  35 => 4,  29 => 2,);
    }
}
