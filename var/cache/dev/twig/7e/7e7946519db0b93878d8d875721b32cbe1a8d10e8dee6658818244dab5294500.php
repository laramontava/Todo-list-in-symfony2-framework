<?php

/* todos/index.html.twig */
class __TwigTemplate_b965c84141bc874cdd72e24488e1cd9a8061d488c8439d47e619d5bf44737eb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "todos/index.html.twig", 1);
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
        $__internal_391aa522164e8437fe93b28b7c9f792e11e525dd868ebe3484649204b36dfab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_391aa522164e8437fe93b28b7c9f792e11e525dd868ebe3484649204b36dfab2->enter($__internal_391aa522164e8437fe93b28b7c9f792e11e525dd868ebe3484649204b36dfab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todos/index.html.twig"));

        $__internal_ccec1890dac51bada639c30a5ba7f21e2acb6481dfd54b0b65ccca37a1220926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccec1890dac51bada639c30a5ba7f21e2acb6481dfd54b0b65ccca37a1220926->enter($__internal_ccec1890dac51bada639c30a5ba7f21e2acb6481dfd54b0b65ccca37a1220926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todos/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_391aa522164e8437fe93b28b7c9f792e11e525dd868ebe3484649204b36dfab2->leave($__internal_391aa522164e8437fe93b28b7c9f792e11e525dd868ebe3484649204b36dfab2_prof);

        
        $__internal_ccec1890dac51bada639c30a5ba7f21e2acb6481dfd54b0b65ccca37a1220926->leave($__internal_ccec1890dac51bada639c30a5ba7f21e2acb6481dfd54b0b65ccca37a1220926_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_431c21bf0d4cc6c037016af49d055d27d67bb6ab29ad656795e75024946d4f43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_431c21bf0d4cc6c037016af49d055d27d67bb6ab29ad656795e75024946d4f43->enter($__internal_431c21bf0d4cc6c037016af49d055d27d67bb6ab29ad656795e75024946d4f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9d27797975a013133d027cd92b69a14624df604f54fbbbab941fecb594e8f6ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d27797975a013133d027cd92b69a14624df604f54fbbbab941fecb594e8f6ce->enter($__internal_9d27797975a013133d027cd92b69a14624df604f54fbbbab941fecb594e8f6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "</br></br></br></br>
   <table class=table table-bordered>
    <thead>
      <tr>
        <th>#</th>
        <th>Todo</th>
         <th>Assigned Date</th>
        <th>Due Date</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["todos"] ?? $this->getContext($context, "todos")));
        foreach ($context['_seq'] as $context["_key"] => $context["todo"]) {
            // line 17
            echo "      <tr>
        <td scope=row>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "name", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["todo"], "createDate", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</td>
        <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["todo"], "duedate", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</td>
        <td>
        <a href=todos/details/";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo " class=btn btn-success>View</a>
        <a href=todos/edit/";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo " class=btn btn-default>Edit</a>
        <a href=todos/delete/";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo " class=btn btn-danger>Delete</a>
        </td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['todo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </tbody>
  </table>
";
        
        $__internal_9d27797975a013133d027cd92b69a14624df604f54fbbbab941fecb594e8f6ce->leave($__internal_9d27797975a013133d027cd92b69a14624df604f54fbbbab941fecb594e8f6ce_prof);

        
        $__internal_431c21bf0d4cc6c037016af49d055d27d67bb6ab29ad656795e75024946d4f43->leave($__internal_431c21bf0d4cc6c037016af49d055d27d67bb6ab29ad656795e75024946d4f43_prof);

    }

    public function getTemplateName()
    {
        return "todos/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 29,  95 => 25,  91 => 24,  87 => 23,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
</br></br></br></br>
   <table class=table table-bordered>
    <thead>
      <tr>
        <th>#</th>
        <th>Todo</th>
         <th>Assigned Date</th>
        <th>Due Date</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    {% for todo in todos %}
      <tr>
        <td scope=row>{{todo.id}}</td>
        <td>{{todo.name}}</td>
        <td>{{todo.createDate | date('F j, Y, g:i a')}}</td>
        <td>{{todo.duedate | date('F j, Y, g:i a')}}</td>
        <td>
        <a href=todos/details/{{todo.id}} class=btn btn-success>View</a>
        <a href=todos/edit/{{todo.id}} class=btn btn-default>Edit</a>
        <a href=todos/delete/{{todo.id}} class=btn btn-danger>Delete</a>
        </td>
      </tr>
      {% endfor %}
    </tbody>
  </table>
{% endblock %}", "todos/index.html.twig", "/home/lara/todo-symfony/app/Resources/views/todos/index.html.twig");
    }
}
