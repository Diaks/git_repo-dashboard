<?php

/* GeneralWidgetBundle:User:user_info.html.twig */
class __TwigTemplate_20c0fb193207eada4d9b54480a5fe047525e862423e3e4a66874e808dc474a41 extends Twig_Template
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
\t\t\t<h5>User info</h5>
      </div>
\t\t<div class=\"row\" id=\"userID\" style =\" margin:auto; margin-top:0px; width:98%;\">
\t\t\t<div class=\"col-sm-12 col-xs-12 boxContent\">
\t\t\t\t<p>Welcome</p>
\t\t\t\t<h3> ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "matricule"), "method"), "html", null, true);
        echo " </h3> 
\t\t\t\t<h3> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "firstname"), "method"), "html", null, true);
        echo " </h3> 
\t\t\t\t<h3> ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "lastname"), "method"), "html", null, true);
        echo " </h3> 
\t\t\t\t";
        // line 11
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "sector"), "method") != "Unknown")) {
            // line 12
            echo "\t\t\t\t\t<p> ";
            echo "Today you handle:";
            echo " </p>
\t\t\t\t\t<h3> ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "sector"), "method"), "html", null, true);
            echo " </h3>
\t\t\t\t";
        }
        // line 15
        echo "\t\t\t\t<br />
\t\t\t\t<a class = \"btn btnT1\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["home_url"]) ? $context["home_url"] : null), "html", null, true);
        echo "\"> Edit </a>
\t\t\t</div>
\t    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "GeneralWidgetBundle:User:user_info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 16,  52 => 15,  47 => 13,  42 => 12,  40 => 11,  36 => 10,  32 => 9,  28 => 8,  19 => 1,);
    }
}
