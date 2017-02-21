<?php

/* todos/details.html.twig */
class __TwigTemplate_74b2d13458158139fd33dbdd42863a3fe9148db09365e35f6add7e9ec0a707e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "todos/details.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c01c2ff6a0e8651db3a726ba497788540d1854d30eb0998d75492e734f326cb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c01c2ff6a0e8651db3a726ba497788540d1854d30eb0998d75492e734f326cb5->enter($__internal_c01c2ff6a0e8651db3a726ba497788540d1854d30eb0998d75492e734f326cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todos/details.html.twig"));

        $__internal_610b9eba5ac4a9ebffd758a6e719a2cc915dffa7e1f833d670ec20f60f61c153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_610b9eba5ac4a9ebffd758a6e719a2cc915dffa7e1f833d670ec20f60f61c153->enter($__internal_610b9eba5ac4a9ebffd758a6e719a2cc915dffa7e1f833d670ec20f60f61c153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todos/details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c01c2ff6a0e8651db3a726ba497788540d1854d30eb0998d75492e734f326cb5->leave($__internal_c01c2ff6a0e8651db3a726ba497788540d1854d30eb0998d75492e734f326cb5_prof);

        
        $__internal_610b9eba5ac4a9ebffd758a6e719a2cc915dffa7e1f833d670ec20f60f61c153->leave($__internal_610b9eba5ac4a9ebffd758a6e719a2cc915dffa7e1f833d670ec20f60f61c153_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b74548c964bd8173d97b6eeedc5dd5e40235999e94421e6302f45dbec187c73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b74548c964bd8173d97b6eeedc5dd5e40235999e94421e6302f45dbec187c73->enter($__internal_6b74548c964bd8173d97b6eeedc5dd5e40235999e94421e6302f45dbec187c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_432f5153dbaedb4ac6038ae2fc07d60e0848e761a6c6ce1bd780234b472e97ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_432f5153dbaedb4ac6038ae2fc07d60e0848e761a6c6ce1bd780234b472e97ed->enter($__internal_432f5153dbaedb4ac6038ae2fc07d60e0848e761a6c6ce1bd780234b472e97ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "</br></br></br>
<a href=/ class=btn btn-default>Back to Todos</a>
<h2 class=page-header>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["todo"] ?? $this->getContext($context, "todo")), "name", array()), "html", null, true);
        echo "</h2>
<ul class=list-group>
<li class=list-group-item>Category : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["todo"] ?? $this->getContext($context, "todo")), "category", array()), "html", null, true);
        echo "</li>
<li class=list-group-item>Description : ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["todo"] ?? $this->getContext($context, "todo")), "description", array()), "html", null, true);
        echo "</li>
<li class=list-group-item>Due: ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["todo"] ?? $this->getContext($context, "todo")), "duedate", array()), "F j, Y, g:i a"), "html", null, true);
        echo "</li>
</ul>

";
        
        $__internal_432f5153dbaedb4ac6038ae2fc07d60e0848e761a6c6ce1bd780234b472e97ed->leave($__internal_432f5153dbaedb4ac6038ae2fc07d60e0848e761a6c6ce1bd780234b472e97ed_prof);

        
        $__internal_6b74548c964bd8173d97b6eeedc5dd5e40235999e94421e6302f45dbec187c73->leave($__internal_6b74548c964bd8173d97b6eeedc5dd5e40235999e94421e6302f45dbec187c73_prof);

    }

    public function getTemplateName()
    {
        return "todos/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 10,  62 => 9,  58 => 8,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
</br></br></br>
<a href=/ class=btn btn-default>Back to Todos</a>
<h2 class=page-header>{{todo.name}}</h2>
<ul class=list-group>
<li class=list-group-item>Category : {{todo.category}}</li>
<li class=list-group-item>Description : {{todo.description}}</li>
<li class=list-group-item>Due: {{todo.duedate | date('F j, Y, g:i a')}}</li>
</ul>

{% endblock %}", "todos/details.html.twig", "/home/lara/todo-symfony/app/Resources/views/todos/details.html.twig");
    }
}
