<?php

/* :layout/common:headerBar.html.twig */
class __TwigTemplate_88fc56af962fd73131c8c8c48824b560abcfe359ce03e318caa89bf5132a98e0 extends Twig_Template
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
        echo "<header class=\"header black-bg\">
              <div class=\"sidebar-toggle-box\">
                  <!-- <div class=\"fa fa-bars tooltips\" id=\"bottonSide\" ></div> -->
                  <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/template/img/buttonside.png"), "html", null, true);
        echo "\" 
                  \t\tclass=\"fa fa-bars tooltips\" 
                  \t\tid= \"bottonSide\" 
                  \t\tdata-placement = \"right\"
                  \t\tdata-original-title = \"Toggle Navigation\"
                  />
                  
              </div>

            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/template/img/air-france-klm-logo_e5eaf9_.png"), "html", null, true);
        echo "\" class=\"logo\" />
            <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("general_logout");
        echo "\" 
                class='btn logout'
             >Logout</a>
            <div class=\"top-menu\">
            \t<ul class=\"nav pull-right top-menu\">
                    <li><a class=\"logout\" href=\"login.html\">Logout</a></li>
            \t</ul>
            </div>
        </header>
      <!--header end-->
      ";
    }

    public function getTemplateName()
    {
        return ":layout/common:headerBar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 14,  36 => 13,  24 => 4,  19 => 1,);
    }
}
