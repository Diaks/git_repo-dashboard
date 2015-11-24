<?php

/* GeneralWidgetBundle:Admin:DB_status_purge.html.twig */
class __TwigTemplate_e91d24a9861869b606d9a4f28967f19734023ebbcba64830b46edae53ae98cb3 extends Twig_Template
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
    \t\t\$('#requested_status').load(location.href+' #requested_status');
  \t\t}, 15000); //refresh every 15s
\t});
</script>

<div class=\"white-panel pn donut-chart\">
      <div class=\"white-header\">
\t\t\t<h5>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : null), "html", null, true);
        echo " Status</h5>
      </div>
\t\t<div class=\"row\" id=\"requested_status\" style =\" margin:auto; margin-top:0px;\">
\t\t\t<div class=\"col-sm-12 col-xs-12 boxContent\">
\t\t\t";
        // line 15
        $context["nb_status"] = $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("RMCARGODashboardAdminBundle:Admin:getNbStatus", array("status" => (isset($context["status"]) ? $context["status"] : null))));
        // line 16
        echo "\t\t\t\t<h3 id =\"toDo\" > ";
        echo twig_escape_filter($this->env, (isset($context["nb_status"]) ? $context["nb_status"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : null), "html", null, true);
        echo " </h3>
\t\t\t\t<p><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rmcargo_dashboard_db_purge_stat", array("status" => (isset($context["status"]) ? $context["status"] : null))), "html", null, true);
        echo "\" 
                class='btn' onclick=\"return confirm('Delete all ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : null), "html", null, true);
        echo "?')\"
             >Purge</a></p>
\t\t\t</div>
\t    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "GeneralWidgetBundle:Admin:DB_status_purge.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 18,  47 => 17,  40 => 16,  38 => 15,  31 => 11,  19 => 1,);
    }
}
