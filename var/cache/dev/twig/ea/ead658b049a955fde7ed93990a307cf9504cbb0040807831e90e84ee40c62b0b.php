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
        $__internal_914c7e9ea1d32c7998b14847afff3540e5a0bed802bfeb418d3f5469adbd312a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_914c7e9ea1d32c7998b14847afff3540e5a0bed802bfeb418d3f5469adbd312a->enter($__internal_914c7e9ea1d32c7998b14847afff3540e5a0bed802bfeb418d3f5469adbd312a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todos/create.html.twig"));

        $__internal_88cd784c8b0c990a47dd549e356d5b0a3ab9bffab4265a72bf948c785bc8f06e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88cd784c8b0c990a47dd549e356d5b0a3ab9bffab4265a72bf948c785bc8f06e->enter($__internal_88cd784c8b0c990a47dd549e356d5b0a3ab9bffab4265a72bf948c785bc8f06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todos/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_914c7e9ea1d32c7998b14847afff3540e5a0bed802bfeb418d3f5469adbd312a->leave($__internal_914c7e9ea1d32c7998b14847afff3540e5a0bed802bfeb418d3f5469adbd312a_prof);

        
        $__internal_88cd784c8b0c990a47dd549e356d5b0a3ab9bffab4265a72bf948c785bc8f06e->leave($__internal_88cd784c8b0c990a47dd549e356d5b0a3ab9bffab4265a72bf948c785bc8f06e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f0f61f4b63a0e30f0749093b7d95ee5e99c7864140963bed48ef1d8df5e722a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f0f61f4b63a0e30f0749093b7d95ee5e99c7864140963bed48ef1d8df5e722a->enter($__internal_6f0f61f4b63a0e30f0749093b7d95ee5e99c7864140963bed48ef1d8df5e722a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4777e974baa76247b67ceb070b5ef91e91aba1744f7f2705bcaafb3f1bcbe464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4777e974baa76247b67ceb070b5ef91e91aba1744f7f2705bcaafb3f1bcbe464->enter($__internal_4777e974baa76247b67ceb070b5ef91e91aba1744f7f2705bcaafb3f1bcbe464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h2 class=page-header>Create Todos</h2>
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
        
        $__internal_4777e974baa76247b67ceb070b5ef91e91aba1744f7f2705bcaafb3f1bcbe464->leave($__internal_4777e974baa76247b67ceb070b5ef91e91aba1744f7f2705bcaafb3f1bcbe464_prof);

        
        $__internal_6f0f61f4b63a0e30f0749093b7d95ee5e99c7864140963bed48ef1d8df5e722a->leave($__internal_6f0f61f4b63a0e30f0749093b7d95ee5e99c7864140963bed48ef1d8df5e722a_prof);

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
<h2 class=page-header>Create Todos</h2>
{{form_start(form)}}
{{form_widget(form)}}
{{form_end(form)}}
{% endblock %}", "todos/create.html.twig", "/home/lara/Todo-list-in-symfony2-framework/app/Resources/views/todos/create.html.twig");
    }
}
