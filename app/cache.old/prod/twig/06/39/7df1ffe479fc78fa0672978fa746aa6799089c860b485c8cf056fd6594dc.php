<?php

/* :layout/common:side_Admin.html.twig */
class __TwigTemplate_06397df1ffe479fc78fa0672978fa746aa6799089c860b485c8cf056fd6594dc extends Twig_Template
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
        echo "<!-- **********************************************************************************************************************************************************
MAIN SIDEBAR MENU
*********************************************************************************************************************************************************** -->
<!--sidebar start-->
<aside>
<div id=\"sidebar\"  class=\"nav-collapse \">
<!-- sidebar menu start-->
<ul class=\"sidebar-menu\" id=\"nav-accordion\">

<!-- <p class=\"centered\"><a href=\"profile.html\"><img src=\"assets/img/ui-sam.jpg\" class=\"img-circle\" width=\"60\"></a></p>
\t\t<h5 class=\"centered\">Marcel Newman</h5> -->

\t<li class=\"mt\">
\t\t<a class=\"active\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("rmcargo_dashboard_admin_homepage");
        echo "\">
\t\t\t<i class=\"fa fa-dashboard\"></i>
\t\t\t<span>Home page</span>
\t\t</a>
\t</li>
\t
\t<li class=\"sub-menu mt\">
\t\t<a href=\"javascript:;\" >
\t\t\t<i class=\"fa fa-desktop\"></i>
\t\t\t<span>Data Management</span>
\t\t</a>
\t\t<ul class=\"sub\">
\t\t\t<li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("rmcargo_dashboard_admin_data_details");
        echo "\">Data details</a></li>
\t\t\t<li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("rmcargo_dashboard_admin_purge_monitoring");
        echo "\">Clean</a></li>
\t\t</ul>
\t</li>
\t
\t<li class=\"mt\">
\t\t<a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("rmcargo_dashboard_admin_robot_pc_monitoring");
        echo "\">
\t\t\t<i class=\"fa fa-dashboard\"></i>
\t\t\t<span>Robot Pc Management</span>
\t\t</a>
\t</li>
\t
\t<li class=\"mt\">
\t\t<a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("rmcargo_dashboard_admin_prio_monitoring");
        echo "\">
\t\t\t<i class=\"fa fa-dashboard\"></i>
\t\t\t<span>Priority Management</span>
\t\t</a>
\t</li>
\t
\t<li class=\"sub-menu mt\">
\t\t<a href=\"javascript:;\" >
\t\t\t<i class=\"fa fa-desktop\"></i>
\t\t\t<span>Users Management</span>
\t\t</a>
\t\t<ul class=\"sub\">
\t\t\t<li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("rmcargo_dashboard_admin_users_monitoring");
        echo "\">Users</a></li>
\t\t\t<li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("rmcargo_dashboard_admin_users_search");
        echo "\">Search</a></li>
\t\t\t<li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("rmcargo_dashboard_admin_group_monitoring");
        echo "\">Groups</a></li>
\t\t\t<!-- <li><a href=\"buttons.html\">Search</a></li>
\t\t\t<li><a href=\"panels.html\"> Groups</a></li> -->
\t\t</ul>
\t</li>
</ul>
<!-- sidebar menu end-->
</div>
</aside>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--sidebar end-->
";
    }

    public function getTemplateName()
    {
        return ":layout/common:side_Admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 53,  90 => 52,  86 => 51,  71 => 39,  61 => 32,  53 => 27,  49 => 26,  34 => 14,  19 => 1,);
    }
}
