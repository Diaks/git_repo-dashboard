<?php

/* GeneralLoginBundle:Login:index.html.twig */
class __TwigTemplate_09cc9ad30904e9c487ffd864f0be0b53dbeb165ef7225bfb4562003de9574c2f extends Twig_Template
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
        echo "Login";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
<style>
#main-content{
\tmargin-left:0px;
}
#content, #container{
\tpadding:1px;
\tbackground-color:transparent;
}
body{
\tbackground-color:#424a5d !important;
}
.boxContentLogin{
\tbackground-color:#e5eaf9;
}
</style>\"

<div class=\"row\" id=\"login-font\">
   <div class=\"col-sm-6 col-xs-8 boxContentLogin\" style=\"float:none; margin:auto; margin-top: 10.5vh; padding-top:15px; padding-bottom:15px;text-align:center\">
        <div class=\"col-sm-8 col-xs-8 boxLogin\" style=\"float:none; margin:auto;\">
        \t<form id=\"LoginIndexForm\" class=\"FormAlign\">
\t\t\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Matricule", array()), 'label');
        echo "
          \t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Matricule", array()), 'errors');
        echo "
          \t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Matricule", array()), 'widget');
        echo "
          \t\t
          \t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Password", array()), 'label');
        echo "
          \t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Password", array()), 'errors');
        echo "
          \t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Password", array()), 'widget');
        echo "
          \t\t
          \t\t<div class=\"submit\">
\t\t\t\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Login", array()), 'widget', array("attr" => array("class" => "btn btnT1")));
        echo "
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
\t\t\t\t
          \t</form>
\t\t</div>
\t</div> 
</div><!-- /.row -->
";
    }

    public function getTemplateName()
    {
        return "GeneralLoginBundle:Login:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 37,  88 => 34,  82 => 31,  78 => 30,  74 => 29,  69 => 27,  65 => 26,  61 => 25,  38 => 4,  35 => 3,  29 => 2,);
    }
}
