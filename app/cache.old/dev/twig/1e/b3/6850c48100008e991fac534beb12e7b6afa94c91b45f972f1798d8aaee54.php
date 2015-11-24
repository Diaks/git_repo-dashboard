<?php

/* ::base.html.twig */
class __TwigTemplate_1eb36850c48100008e991fac534beb12e7b6afa94c91b45f972f1798d8aaee54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "\t\t
\t\t<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js\"></script>
\t\t<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/template/js/jquery-ui-1.9/jquery-ui.js"), "html", null, true);
        echo "\"></script>
\t\t
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    \t<div id=\"container\">
    \t
    \t\t";
        // line 33
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "type_profil"), "method") != null)) {
            // line 34
            echo "    \t\t\t<div id=\"header\" class=\"header black-bg\">
\t\t\t\t \t";
            // line 35
            echo twig_include($this->env, $context, "::layout/common/headerBar.html.twig");
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 38
        echo "\t\t\t\t
\t\t\t<div id=\"content\">
\t\t\t\t";
        // line 40
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "type_profil"), "method") != null)) {
            // line 41
            echo "\t\t\t\t<div id=\"header\" class=\"header black-bg\">
\t\t\t\t \t";
            // line 42
            echo twig_include($this->env, $context, "::layout/common/headerBar.html.twig");
            echo "
\t\t\t\t</div>
\t\t\t\t\t";
            // line 44
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "type_profil"), "method") == "1")) {
                // line 45
                echo "\t\t\t\t\t\t";
                echo twig_include($this->env, $context, "::layout/common/side_Analyst.html.twig");
                echo "
\t\t\t\t\t";
            } elseif (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "type_profil"), "method") == "2")) {
                // line 47
                echo "\t\t\t\t\t\t";
                echo twig_include($this->env, $context, "::layout/common/side_Admin.html.twig");
                echo "
\t\t\t\t\t";
            } else {
                // line 49
                echo "\t\t\t\t\t\t";
                echo twig_include($this->env, $context, "::layout/common/side_Analyst.html.twig");
                echo "
\t\t\t\t\t";
            }
            // line 51
            echo "\t\t\t\t";
        }
        // line 52
        echo "\t\t\t\t<div id=\"main\">
\t\t\t\t\t<section id=\"container\">
\t\t\t\t\t\t<section id = \"main-content\">
\t\t\t\t\t\t\t<section class=\"wrapper\">
        \t\t\t\t\t\t";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "        \t\t\t\t\t</section>
        \t\t\t\t</section>
        \t\t\t</section>
        \t\t</div>
        \t</div>
        </div>
        
        ";
        // line 66
        $this->displayBlock('javascripts', $context, $blocks);
        // line 77
        echo "\t\t
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "DashBoard Tool";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "        
        \t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/template/css/body.css"), "html", null, true);
        echo "\" />
        \t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/template/css/local.css"), "html", null, true);
        echo "\" />
        \t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/template/css/exception.css"), "html", null, true);
        echo "\" />
        \t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/template/css/cake.generic.css"), "html", null, true);
        echo "\" />
        \t<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/template/css/bootstrap.css"), "html", null, true);
        echo "\" />
        \t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/template/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" />
        \t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/template/css/jquery.gritter.css"), "html", null, true);
        echo "\" />
        \t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/template/css/style.css"), "html", null, true);
        echo "\" />
        \t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/template/css/style-responsive.css"), "html", null, true);
        echo "\" />
        \t<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/template/css/jquery-ui.css"), "html", null, true);
        echo "\" />
        \t<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/template/css/jquery-ui.structure.css"), "html", null, true);
        echo "\" />
        \t<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/template/css/jquery-ui.theme.css"), "html", null, true);
        echo "\" />
       \t\t<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/template/css/custom.css"), "html", null, true);
        echo "\" />
        
\t\t";
    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        // line 57
        echo "        
        \t\t\t\t\t\t";
    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        // line 67
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/template/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/template/js/jquery.dcjqaccordion.2.7.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/template/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/template/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/template/js/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/template/js/custom/custom.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/template/js/common-scripts.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/template/js/sparkline-chart.js"), "html", null, true);
        echo "\"></script>
        
\t\t";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 74,  230 => 73,  226 => 72,  222 => 71,  218 => 70,  214 => 69,  210 => 68,  205 => 67,  202 => 66,  197 => 57,  194 => 56,  187 => 21,  183 => 20,  179 => 19,  175 => 18,  171 => 17,  167 => 16,  163 => 15,  159 => 14,  155 => 13,  151 => 12,  147 => 11,  143 => 10,  139 => 9,  136 => 8,  133 => 7,  127 => 5,  120 => 77,  118 => 66,  109 => 59,  107 => 56,  101 => 52,  98 => 51,  92 => 49,  86 => 47,  80 => 45,  78 => 44,  73 => 42,  70 => 41,  68 => 40,  64 => 38,  58 => 35,  55 => 34,  53 => 33,  45 => 28,  40 => 26,  36 => 24,  34 => 7,  29 => 5,  23 => 1,);
    }
}
