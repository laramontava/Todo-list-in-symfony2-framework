<?php

/* todos/create.html.twig */
class __TwigTemplate_1d86ac678fd725af76590f6a3b1ef889be0aeeca3203fcf9c2f33c6dca4c0baa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "todos/create.html.twig", 1);
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
        $__internal_1eb1a0858119a403cb71145c2febd48d29f9541011ef8db9025bb03022775bd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eb1a0858119a403cb71145c2febd48d29f9541011ef8db9025bb03022775bd4->enter($__internal_1eb1a0858119a403cb71145c2febd48d29f9541011ef8db9025bb03022775bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todos/create.html.twig"));

        $__internal_bd411c9d44f0866c1de5d989e08a02c07ebe913bf83df19686a1e0f576a8d58e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd411c9d44f0866c1de5d989e08a02c07ebe913bf83df19686a1e0f576a8d58e->enter($__internal_bd411c9d44f0866c1de5d989e08a02c07ebe913bf83df19686a1e0f576a8d58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todos/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1eb1a0858119a403cb71145c2febd48d29f9541011ef8db9025bb03022775bd4->leave($__internal_1eb1a0858119a403cb71145c2febd48d29f9541011ef8db9025bb03022775bd4_prof);

        
        $__internal_bd411c9d44f0866c1de5d989e08a02c07ebe913bf83df19686a1e0f576a8d58e->leave($__internal_bd411c9d44f0866c1de5d989e08a02c07ebe913bf83df19686a1e0f576a8d58e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5e1bc78b6859ad5a340fc3af6d4fc56ab54893d5ce517d071f15dce5e08ba82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5e1bc78b6859ad5a340fc3af6d4fc56ab54893d5ce517d071f15dce5e08ba82->enter($__internal_e5e1bc78b6859ad5a340fc3af6d4fc56ab54893d5ce517d071f15dce5e08ba82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4547121623471fc66543d0b4f32cfcb734fcdf8c8e26bb4c90440b8db35053e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4547121623471fc66543d0b4f32cfcb734fcdf8c8e26bb4c90440b8db35053e1->enter($__internal_4547121623471fc66543d0b4f32cfcb734fcdf8c8e26bb4c90440b8db35053e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h2 class=page-header>Edit Todos</h2>
";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_4547121623471fc66543d0b4f32cfcb734fcdf8c8e26bb4c90440b8db35053e1->leave($__internal_4547121623471fc66543d0b4f32cfcb734fcdf8c8e26bb4c90440b8db35053e1_prof);

        
        $__internal_e5e1bc78b6859ad5a340fc3af6d4fc56ab54893d5ce517d071f15dce5e08ba82->leave($__internal_e5e1bc78b6859ad5a340fc3af6d4fc56ab54893d5ce517d071f15dce5e08ba82_prof);

    }

    public function getTemplateName()
    {
        return "todos/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 7,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
<h2 class=page-header>Edit Todos</h2>
{{form_start(form)}}
{{form_widget(form)}}
{{form_end(form)}}
{% endblock %}", "todos/create.html.twig", "/home/lara/todo-symfony/app/Resources/views/todos/create.html.twig");
    }
}
