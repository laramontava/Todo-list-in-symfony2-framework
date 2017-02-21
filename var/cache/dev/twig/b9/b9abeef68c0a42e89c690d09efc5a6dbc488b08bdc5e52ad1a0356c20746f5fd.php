<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_150ca7d995468e02789c19d70f5a82365301ecebc21b38fde8bc2214e9f04740 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_202d91d8d532ff2ccded254d922bde14e31f2f5a05e96fac15ea8ce58c3f7a45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_202d91d8d532ff2ccded254d922bde14e31f2f5a05e96fac15ea8ce58c3f7a45->enter($__internal_202d91d8d532ff2ccded254d922bde14e31f2f5a05e96fac15ea8ce58c3f7a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_70d2ee7479fa7a1123058314ec6fd8a798ba0576c512d0c52a4dfdb3b4e74978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70d2ee7479fa7a1123058314ec6fd8a798ba0576c512d0c52a4dfdb3b4e74978->enter($__internal_70d2ee7479fa7a1123058314ec6fd8a798ba0576c512d0c52a4dfdb3b4e74978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_202d91d8d532ff2ccded254d922bde14e31f2f5a05e96fac15ea8ce58c3f7a45->leave($__internal_202d91d8d532ff2ccded254d922bde14e31f2f5a05e96fac15ea8ce58c3f7a45_prof);

        
        $__internal_70d2ee7479fa7a1123058314ec6fd8a798ba0576c512d0c52a4dfdb3b4e74978->leave($__internal_70d2ee7479fa7a1123058314ec6fd8a798ba0576c512d0c52a4dfdb3b4e74978_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_00f8a283d0e32889dc90ea2bab22ca56e3cf9d65f2e31f73c22d2c8bf401a123 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00f8a283d0e32889dc90ea2bab22ca56e3cf9d65f2e31f73c22d2c8bf401a123->enter($__internal_00f8a283d0e32889dc90ea2bab22ca56e3cf9d65f2e31f73c22d2c8bf401a123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a818f2d450b1759029deea426bd0385e04cffc5536fee1da62986c01267a3459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a818f2d450b1759029deea426bd0385e04cffc5536fee1da62986c01267a3459->enter($__internal_a818f2d450b1759029deea426bd0385e04cffc5536fee1da62986c01267a3459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_a818f2d450b1759029deea426bd0385e04cffc5536fee1da62986c01267a3459->leave($__internal_a818f2d450b1759029deea426bd0385e04cffc5536fee1da62986c01267a3459_prof);

        
        $__internal_00f8a283d0e32889dc90ea2bab22ca56e3cf9d65f2e31f73c22d2c8bf401a123->leave($__internal_00f8a283d0e32889dc90ea2bab22ca56e3cf9d65f2e31f73c22d2c8bf401a123_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb3f3c4d98a21f80dd25aed6b5b049948f67cd761a8776ac41c324537a72d141 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb3f3c4d98a21f80dd25aed6b5b049948f67cd761a8776ac41c324537a72d141->enter($__internal_bb3f3c4d98a21f80dd25aed6b5b049948f67cd761a8776ac41c324537a72d141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_42fba2b38f5b6b4ed02fd2993173393133f91ba176598df973b1646a4ba2c885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42fba2b38f5b6b4ed02fd2993173393133f91ba176598df973b1646a4ba2c885->enter($__internal_42fba2b38f5b6b4ed02fd2993173393133f91ba176598df973b1646a4ba2c885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_42fba2b38f5b6b4ed02fd2993173393133f91ba176598df973b1646a4ba2c885->leave($__internal_42fba2b38f5b6b4ed02fd2993173393133f91ba176598df973b1646a4ba2c885_prof);

        
        $__internal_bb3f3c4d98a21f80dd25aed6b5b049948f67cd761a8776ac41c324537a72d141->leave($__internal_bb3f3c4d98a21f80dd25aed6b5b049948f67cd761a8776ac41c324537a72d141_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/home/lara/todo-symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
