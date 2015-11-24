<?php

/* RMCARGODashboardAdminBundle:Admin:index.html.twig */
class __TwigTemplate_8fd782319c7b15c6c1c9cb08ad2cad21e090de36e7b7bef1e46f8eb8b67d43eb extends Twig_Template
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
\t\t\t<h1>Admin Dashboard</h1>
\t\t\t
\t\t\t<div class=\"row mtbox\">
\t\t\t\t<div class=\"col-md-4 col-sm-4\">
                  \t";
        // line 12
        echo twig_include($this->env, $context, "GeneralWidgetBundle:User:user_info.html.twig");
        echo "
                </div>
\t\t\t\t<div class=\"col-md-4 col-sm-4\">
                  \t";
        // line 15
        echo twig_include($this->env, $context, "GeneralWidgetBundle:Admin:day_data_status.html.twig");
        echo "
                </div>
\t\t\t\t<div class=\"col-md-4 col-sm-4\">
                  \t";
        // line 18
        echo twig_include($this->env, $context, "GeneralWidgetBundle:Admin:robot_pc_status_mini.html.twig");
        echo "
                </div>
\t\t\t</div>
\t\t\t
\t\t\t<div class='row mt'>
\t\t\t\t<div class=\"col-md-12 col-sm-12\">
\t\t\t\t\t";
        // line 24
        echo twig_include($this->env, $context, "GeneralWidgetBundle:Admin:data_inbond_histo_day.html.twig ");
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"row mt\">
\t\t\t\t<div class=\"col-md-12 col-sm-12 t1\">
                  \t";
        // line 30
        echo twig_include($this->env, $context, "GeneralWidgetBundle:Admin:error_panel_report.html.twig");
        echo "
                </div>
\t\t\t</div>
\t\t\t
\t\t</div>
\t</div>
\t
";
    }

    public function getTemplateName()
    {
        return "RMCARGODashboardAdminBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 30,  69 => 24,  60 => 18,  54 => 15,  48 => 12,  38 => 5,  35 => 4,  29 => 2,);
    }
}
