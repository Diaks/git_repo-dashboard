<?php

/* RMCARGODashboardAdminBundle:Admin:users_update.html.twig */
class __TwigTemplate_b9d74824d20e29393e03a2bced810aa4d7efa03225544b10c56365a693084ef2 extends Twig_Template
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
        echo "
<div class=\"white-panel pn donut-chart\" style =\"margin-top:30px; height: 360px;\">
      <div class=\"white-header\">
\t\t\t<h5>Edit a User</h5>
      </div>
\t\t<div class=\"row\" id=\"addRobot\" style =\"margin:auto;\">
\t\t\t<div class=\"col-sm-12 col-xs-12 boxContent\"  style=\"margin-top:30px; width:98%\">
\t\t\t\t
\t\t\t\t<form id=\"form_full_page\" class=\"FormAlign\">
          \t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Matricule", array()), 'errors');
        echo "
          \t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Matricule", array()), 'widget');
        echo "
          \t\t<br />
          \t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "FirstName", array()), 'label');
        echo "
          \t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "FirstName", array()), 'errors');
        echo "
          \t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "FirstName", array()), 'widget');
        echo "
          \t\t<br />
          \t\t";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "LastName", array()), 'label');
        echo "
          \t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "LastName", array()), 'errors');
        echo "
          \t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "LastName", array()), 'widget');
        echo "
          \t\t<br />
          \t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Password", array()), 'label');
        echo "
          \t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Password", array()), 'errors');
        echo "
          \t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Password", array()), 'widget');
        echo "
          \t\t<br />
          \t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Departement", array()), 'label');
        echo "
          \t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Departement", array()), 'errors');
        echo "
          \t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Departement", array()), 'widget');
        echo "
          \t\t<br />
          \t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Sector", array()), 'label');
        echo "
          \t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Sector", array()), 'errors');
        echo "
          \t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Sector", array()), 'widget');
        echo "
          \t\t<br />
          \t\t";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "TypeProfil", array()), 'label');
        echo "
          \t\t";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "TypeProfil", array()), 'errors');
        echo "
          \t\t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "TypeProfil", array()), 'widget');
        echo "
          \t\t<br /><br />
          \t\t<div class=\"submit\">
\t\t\t\t\t\t";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Save", array()), 'widget', array("attr" => array("class" => "btn btnT1")));
        echo "
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
\t\t\t\t</form>
          \t
\t\t\t</div>
\t    </div>
</div>
\t\t\t\t
";
    }

    public function getTemplateName()
    {
        return "RMCARGODashboardAdminBundle:Admin:users_update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 45,  137 => 42,  131 => 39,  127 => 38,  123 => 37,  118 => 35,  114 => 34,  110 => 33,  105 => 31,  101 => 30,  97 => 29,  92 => 27,  88 => 26,  84 => 25,  79 => 23,  75 => 22,  71 => 21,  66 => 19,  62 => 18,  58 => 17,  53 => 15,  49 => 14,  38 => 5,  35 => 4,  29 => 2,);
    }
}
