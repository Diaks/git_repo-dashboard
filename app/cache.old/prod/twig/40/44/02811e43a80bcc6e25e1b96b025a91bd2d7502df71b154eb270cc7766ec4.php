<?php

/* GeneralWidgetBundle:Admin:users_monitoring.html.twig */
class __TwigTemplate_404402811e43a80bcc6e25e1b96b025a91bd2d7502df71b154eb270cc7766ec4 extends Twig_Template
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
        echo "<div class=\"white-panel pn donut-chart\">
      <div class=\"white-header\">
\t\t\t<h5>Users</h5>
      </div>
\t\t<div class=\"row\" id=\"robotStatus\" style =\"margin:auto; margin-top:0px;\">
\t\t\t<div class=\"col-sm-12 col-xs-12 boxContent\"  style=\"overflow-y:scroll; height: 345px; width:98%\">
\t\t\t
\t\t\t\t<table>
    \t\t\t\t<tr>
    \t\t\t\t\t<th> Matricule </th><th> FirstName </th><th> LastName </th><th> Departement </th><th> User Start Date</th><th> Sector </th><th> Type Profil </th><th> Action </th>
    \t\t\t\t\t";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user_array"]) ? $context["user_array"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 12
            echo "        \t\t\t\t\t<tr>
        \t\t\t\t\t\t<td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "Matricule", array()), "html", null, true);
            echo "</td>
        \t\t\t\t\t\t<td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "FirstName", array()), "html", null, true);
            echo "</td>
        \t\t\t\t\t\t<td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "LastName", array()), "html", null, true);
            echo "</td>
        \t\t\t\t\t\t<td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "Departement", array()), "html", null, true);
            echo "</td>
        \t\t\t\t\t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "UserStartDate", array()), "html", null, true);
            echo "</td>
        \t\t\t\t\t\t<td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "FK_Sector_id", array()), "html", null, true);
            echo "</td>
        \t\t\t\t\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "FK_TypeProfil_id", array()), "html", null, true);
            echo "</td>
        \t\t\t\t\t\t<td>
        \t\t\t\t\t\t\t<a class = \"btn btnT1\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "delete", array()), "html", null, true);
            echo "\" onclick=\"return confirm('Delete ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "Matricule", array()), "html", null, true);
            echo " ?')\"> Delete </a>
        \t\t\t\t\t\t\t<a class = \"btn btnT1\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "edit", array()), "html", null, true);
            echo "\"> Edit </a>
        \t\t\t\t\t\t</td>
        \t\t\t\t\t</tr>
    \t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    \t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t
\t\t\t</div>
\t    </div>
</div>

<div class=\"white-panel pn donut-chart\" style =\"margin-top:30px; height: 330px;\">
      <div class=\"white-header\">
\t\t\t<h5>Add a User</h5>
      </div>
\t\t<div class=\"row\" id=\"addRobot\" style =\"margin:auto;\">
\t\t\t<div class=\"col-sm-12 col-xs-12 boxContent\"  style=\"margin-top:30px; width:98%\">
\t\t\t
\t\t\t\t<form id=\"form_full_page\" class=\"FormAlign\">
\t\t\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Matricule", array()), 'label');
        echo "
          \t\t";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Matricule", array()), 'errors');
        echo "
          \t\t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Matricule", array()), 'widget');
        echo "
          \t\t<br />
          \t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "FirstName", array()), 'label');
        echo "
          \t\t";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "FirstName", array()), 'errors');
        echo "
          \t\t";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "FirstName", array()), 'widget');
        echo "
          \t\t<br />
          \t\t";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "LastName", array()), 'label');
        echo "
          \t\t";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "LastName", array()), 'errors');
        echo "
          \t\t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "LastName", array()), 'widget');
        echo "
          \t\t<br />
          \t\t";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Password", array()), 'label');
        echo "
          \t\t";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Password", array()), 'errors');
        echo "
          \t\t";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Password", array()), 'widget');
        echo "
          \t\t<br />
          \t\t";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "TypeProfil", array()), 'label');
        echo "
          \t\t";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "TypeProfil", array()), 'errors');
        echo "
          \t\t";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "TypeProfil", array()), 'widget');
        echo "
          \t\t<br /><br />
          \t\t<div class=\"submit\">
\t\t\t\t\t\t";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Register", array()), 'widget', array("attr" => array("class" => "btn btnT1")));
        echo "
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
\t\t\t\t</form>
          \t
\t\t\t</div>
\t    </div>
</div>
\t\t\t\t
\t\t\t
";
    }

    public function getTemplateName()
    {
        return "GeneralWidgetBundle:Admin:users_monitoring.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 65,  166 => 62,  160 => 59,  156 => 58,  152 => 57,  147 => 55,  143 => 54,  139 => 53,  134 => 51,  130 => 50,  126 => 49,  121 => 47,  117 => 46,  113 => 45,  108 => 43,  104 => 42,  100 => 41,  83 => 26,  73 => 22,  67 => 21,  62 => 19,  58 => 18,  54 => 17,  50 => 16,  46 => 15,  42 => 14,  38 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }
}
