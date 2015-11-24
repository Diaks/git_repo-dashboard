<?php

/* GeneralWidgetBundle:Admin:day_data_status.html.twig */
class __TwigTemplate_bc694b1d67e71ce64ad28e37aeea8fcafd16719f486adbd64ff47a2994300a03 extends Twig_Template
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
    \t\t\$('#day_activity').load(location.href+' #day_activity');
  \t\t}, 8000); //refresh every 15s
\t});
</script>

<div class=\"white-panel pn donut-chart\">
      <div class=\"white-header\">
\t\t\t<h5>General Day Status</h5>
      </div>
\t\t<div class=\"row\" id=\"day_activity\" style =\" margin:auto; margin-top:0px;\">
\t\t\t<div class=\"col-sm-12 col-xs-12 boxContent\">
\t\t\t";
        // line 15
        $context["nb_done"] = $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("RMCARGODashboardAdminBundle:Admin:getNbDayDone"));
        // line 16
        echo "\t\t\t";
        $context["nb_fpterror"] = $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("RMCARGODashboardAdminBundle:Admin:getNbDayError"));
        // line 17
        echo "\t\t\t";
        $context["nb_dberror"] = $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("RMCARGODashboardAdminBundle:Admin:getNbCritError"));
        // line 18
        echo "\t\t\t\t<h3 id =\"published\" > ";
        echo twig_escape_filter($this->env, (isset($context["nb_done"]) ? $context["nb_done"] : null), "html", null, true);
        echo " Well Passed </h3>
\t\t\t\t<h3 id =\"toDo\" > ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["nb_fpterror"]) ? $context["nb_fpterror"] : null), "html", null, true);
        echo " Flight Planning Error </h3>
\t\t\t\t<h3 id =\"error\" > ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["nb_dberror"]) ? $context["nb_dberror"] : null), "html", null, true);
        echo " Database error </h3>
\t\t\t</div>
\t    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "GeneralWidgetBundle:Admin:day_data_status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 20,  48 => 19,  43 => 18,  40 => 17,  37 => 16,  35 => 15,  19 => 1,);
    }
}
