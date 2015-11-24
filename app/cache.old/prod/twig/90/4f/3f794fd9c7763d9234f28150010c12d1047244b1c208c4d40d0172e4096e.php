<?php

/* RMCARGODashboardFABundle:Home:index.html.twig */
class __TwigTemplate_904f3f794fd9c7763d9234f28150010c12d1047244b1c208c4d40d0172e4096e extends Twig_Template
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
        echo "Flight analyst home page";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <!-- ";
        echo "-->
    <div class=\"row\">
\t\t<div class=\"col-lg-12 main-chart\">
\t\t\t<h1>Flight analyst Dashboard</h1>
\t\t\t<br />
\t\t\t
\t\t\t<div class='row mt' style=\"margin-bottom: -10px;\">
\t\t\t\t<div class=\"col-md-12 col-sm-12 t2\">
\t\t\t\t\t<div class=\"ui-accordion ui-widget ui-helper-reset accordion\" role=\"tablist\">
\t\t\t\t\t\t";
        // line 14
        echo twig_include($this->env, $context, "GeneralWidgetBundle:User:empty_panel.html.twig");
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t<div class='row mt' style=\"margin-bottom: -10px;\">
\t\t\t\t<div class=\"col-md-12 col-sm-12 t2\">
\t\t\t\t\t<div class=\"ui-accordion ui-widget ui-helper-reset accordion\" role=\"tablist\">
\t\t\t\t\t\t";
        // line 23
        echo twig_include($this->env, $context, "GeneralWidgetBundle:User:empty_panel.html.twig");
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class='row mt b1'>
\t\t\t\t<div class=\"col-md-12 col-sm-12 t1\">
\t\t\t\t\t";
        // line 30
        echo twig_include($this->env, $context, "GeneralWidgetBundle:User:empty_module.html.twig");
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"row mtbox b1\">
\t\t\t\t<div class=\"col-md-3 col-sm-3 t1\">
                  \t";
        // line 36
        echo twig_include($this->env, $context, "GeneralWidgetBundle:User:empty_module.html.twig");
        echo "
                </div>
\t\t\t\t<div class=\"col-md-3 col-sm-3 t1\">
                  \t";
        // line 39
        echo twig_include($this->env, $context, "GeneralWidgetBundle:User:empty_module.html.twig");
        echo "
                </div>
\t\t\t\t<div class=\"col-md-3 col-sm-3 t1\">
                  \t";
        // line 42
        echo twig_include($this->env, $context, "GeneralWidgetBundle:User:empty_module.html.twig");
        echo "
                </div>
                <div class=\"col-md-3 col-sm-3 t1\">
                  \t";
        // line 45
        echo twig_include($this->env, $context, "GeneralWidgetBundle:User:empty_module.html.twig");
        echo "
                </div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"row mt b1\">
\t\t\t\t<div class=\"col-md-6 col-sm-6 t1\">
                  \t";
        // line 51
        echo twig_include($this->env, $context, "GeneralWidgetBundle:User:empty_module.html.twig");
        echo "
                </div>
                <div class=\"col-md-6 col-sm-6 t1\">
                  \t";
        // line 54
        echo twig_include($this->env, $context, "GeneralWidgetBundle:User:empty_module.html.twig");
        echo "
                </div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"row mt b1\">
\t\t\t\t<div class=\"col-md-6 col-sm-6 t1\">
                  \t";
        // line 60
        echo twig_include($this->env, $context, "GeneralWidgetBundle:User:empty_module.html.twig");
        echo "
                </div>
                <div class=\"col-md-6 col-sm-6 t1\">
                  \t";
        // line 63
        echo twig_include($this->env, $context, "GeneralWidgetBundle:User:empty_module.html.twig");
        echo "
                </div>
\t\t\t</div>
\t\t\t
\t\t\t<div class='row mt b1'>
\t\t\t\t<div class=\"col-md-12 col-sm-12 t1\">
\t\t\t\t\t";
        // line 69
        echo twig_include($this->env, $context, "GeneralWidgetBundle:User:empty_module.html.twig");
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
        return "RMCARGODashboardFABundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 69,  129 => 63,  123 => 60,  114 => 54,  108 => 51,  99 => 45,  93 => 42,  87 => 39,  81 => 36,  72 => 30,  62 => 23,  50 => 14,  38 => 5,  35 => 4,  29 => 2,);
    }
}
