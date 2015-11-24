<?php

/* GeneralWidgetBundle:Admin:users_research.html.twig */
class __TwigTemplate_b83311532e07efb1094bd92c51db1756fa1fae76d717aa8fc5c5a89e139b2186 extends Twig_Template
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
        echo "<div class=\"white-panel pn donut-chart auto-scale\">
      <div class=\"white-header\">
\t\t\t<h5>Users research</h5>
      </div>
\t\t<div class=\"row\" id=\"userSearch\" style =\"margin:auto; margin-top:0px;\">
\t\t\t<div class=\"col-sm-12 col-xs-12 boxContent\"  style=\"height: auto; width:98%\">
\t\t\t<br/>
\t\t\t
\t\t\t<form id=\"form_full_page\" class=\"FormBar\">
\t\t\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Matricule", array()), 'label');
        echo "
          \t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Matricule", array()), 'errors');
        echo "
          \t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Matricule", array()), 'widget');
        echo "

          \t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "FirstName", array()), 'label');
        echo "
          \t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "FirstName", array()), 'errors');
        echo "
          \t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "FirstName", array()), 'widget');
        echo "

          \t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "LastName", array()), 'label');
        echo "
          \t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "LastName", array()), 'errors');
        echo "
          \t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "LastName", array()), 'widget');
        echo "

          \t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "TypeProfil", array()), 'label');
        echo "
          \t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "TypeProfil", array()), 'errors');
        echo "
          \t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "TypeProfil", array()), 'widget');
        echo "

          \t\t<div class=\"submit\">
\t\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Search", array()), 'widget', array("attr" => array("class" => "btn btnT1")));
        echo "
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
\t\t\t\t</form>
\t\t\t\t
\t\t\t\t<br/>
\t\t\t\t
\t\t\t\t<table>
    \t\t\t\t<tr>
    \t\t\t\t\t<th> Matricule </th><th> FirstName </th><th> LastName </th><th> Departement </th><th> User Start Date</th><th> Sector </th><th> Type Profil </th><th> Action </th>
    \t\t\t\t\t";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user_array"]) ? $context["user_array"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 39
            echo "        \t\t\t\t\t<tr>
        \t\t\t\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "Matricule", array()), "html", null, true);
            echo "</td>
        \t\t\t\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "FirstName", array()), "html", null, true);
            echo "</td>
        \t\t\t\t\t\t<td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "LastName", array()), "html", null, true);
            echo "</td>
        \t\t\t\t\t\t<td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "Departement", array()), "html", null, true);
            echo "</td>
        \t\t\t\t\t\t<td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "UserStartDate", array()), "html", null, true);
            echo "</td>
        \t\t\t\t\t\t<td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "FK_Sector_id", array()), "html", null, true);
            echo "</td>
        \t\t\t\t\t\t<td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "FK_TypeProfil_id", array()), "html", null, true);
            echo "</td>
        \t\t\t\t\t\t<td>
        \t\t\t\t\t\t\t<a class = \"btn btnT1\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "delete", array()), "html", null, true);
            echo "\" onclick=\"return confirm('Delete ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "Matricule", array()), "html", null, true);
            echo " ?')\"> Delete </a>
        \t\t\t\t\t\t\t<a class = \"btn btnT1\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "edit", array()), "html", null, true);
            echo "\"> Edit </a>
        \t\t\t\t\t\t</td>
        \t\t\t\t\t</tr>
    \t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "    \t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t
\t\t\t</div>
\t    </div>
</div>

\t\t\t\t
\t\t\t
";
    }

    public function getTemplateName()
    {
        return "GeneralWidgetBundle:Admin:users_research.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 53,  142 => 49,  136 => 48,  131 => 46,  127 => 45,  123 => 44,  119 => 43,  115 => 42,  111 => 41,  107 => 40,  104 => 39,  100 => 38,  89 => 30,  83 => 27,  77 => 24,  73 => 23,  69 => 22,  64 => 20,  60 => 19,  56 => 18,  51 => 16,  47 => 15,  43 => 14,  38 => 12,  34 => 11,  30 => 10,  19 => 1,);
    }
}
