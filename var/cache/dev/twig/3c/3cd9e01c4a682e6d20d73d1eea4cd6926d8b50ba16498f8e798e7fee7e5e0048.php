<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_490088ef8c2d536ba9aa3e4da532e3c9d5d6875dde7bb492995d7d77f4e311f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c70f58b0e940bcc99f275b28df81b336940ff92cc62759af7d9c901ef9d3d639 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c70f58b0e940bcc99f275b28df81b336940ff92cc62759af7d9c901ef9d3d639->enter($__internal_c70f58b0e940bcc99f275b28df81b336940ff92cc62759af7d9c901ef9d3d639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2e052cabd080557c51f09e18b42f11bd3f4bacab52625a59aab1d0fa53944163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e052cabd080557c51f09e18b42f11bd3f4bacab52625a59aab1d0fa53944163->enter($__internal_2e052cabd080557c51f09e18b42f11bd3f4bacab52625a59aab1d0fa53944163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c70f58b0e940bcc99f275b28df81b336940ff92cc62759af7d9c901ef9d3d639->leave($__internal_c70f58b0e940bcc99f275b28df81b336940ff92cc62759af7d9c901ef9d3d639_prof);

        
        $__internal_2e052cabd080557c51f09e18b42f11bd3f4bacab52625a59aab1d0fa53944163->leave($__internal_2e052cabd080557c51f09e18b42f11bd3f4bacab52625a59aab1d0fa53944163_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1da5ef3b2557aaa8d34892e9ad63f3996e38b06fc033066948f59491173e57ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1da5ef3b2557aaa8d34892e9ad63f3996e38b06fc033066948f59491173e57ed->enter($__internal_1da5ef3b2557aaa8d34892e9ad63f3996e38b06fc033066948f59491173e57ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5a5ad6d57e3d43ef88c9fdb4c5a10fff543c444d4ebe1015215ca74b5dcc7fb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a5ad6d57e3d43ef88c9fdb4c5a10fff543c444d4ebe1015215ca74b5dcc7fb9->enter($__internal_5a5ad6d57e3d43ef88c9fdb4c5a10fff543c444d4ebe1015215ca74b5dcc7fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5a5ad6d57e3d43ef88c9fdb4c5a10fff543c444d4ebe1015215ca74b5dcc7fb9->leave($__internal_5a5ad6d57e3d43ef88c9fdb4c5a10fff543c444d4ebe1015215ca74b5dcc7fb9_prof);

        
        $__internal_1da5ef3b2557aaa8d34892e9ad63f3996e38b06fc033066948f59491173e57ed->leave($__internal_1da5ef3b2557aaa8d34892e9ad63f3996e38b06fc033066948f59491173e57ed_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_10317dcdd1fe49d550e14ef1d2b8013457564a9c7689a6892fe8db7f4ee10962 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10317dcdd1fe49d550e14ef1d2b8013457564a9c7689a6892fe8db7f4ee10962->enter($__internal_10317dcdd1fe49d550e14ef1d2b8013457564a9c7689a6892fe8db7f4ee10962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8e98a7e725b46916c919af58d1f82e1d70f64297c3466a02937e2206be73643d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e98a7e725b46916c919af58d1f82e1d70f64297c3466a02937e2206be73643d->enter($__internal_8e98a7e725b46916c919af58d1f82e1d70f64297c3466a02937e2206be73643d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8e98a7e725b46916c919af58d1f82e1d70f64297c3466a02937e2206be73643d->leave($__internal_8e98a7e725b46916c919af58d1f82e1d70f64297c3466a02937e2206be73643d_prof);

        
        $__internal_10317dcdd1fe49d550e14ef1d2b8013457564a9c7689a6892fe8db7f4ee10962->leave($__internal_10317dcdd1fe49d550e14ef1d2b8013457564a9c7689a6892fe8db7f4ee10962_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_813c226c15429b37a364cde26fe92ead68cd46267794c0dfcca632d3aeff6f44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_813c226c15429b37a364cde26fe92ead68cd46267794c0dfcca632d3aeff6f44->enter($__internal_813c226c15429b37a364cde26fe92ead68cd46267794c0dfcca632d3aeff6f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_62e7eece738a7bf05b4fd8c0109d30cf2ec185e50583cda1486288525af42952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62e7eece738a7bf05b4fd8c0109d30cf2ec185e50583cda1486288525af42952->enter($__internal_62e7eece738a7bf05b4fd8c0109d30cf2ec185e50583cda1486288525af42952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_62e7eece738a7bf05b4fd8c0109d30cf2ec185e50583cda1486288525af42952->leave($__internal_62e7eece738a7bf05b4fd8c0109d30cf2ec185e50583cda1486288525af42952_prof);

        
        $__internal_813c226c15429b37a364cde26fe92ead68cd46267794c0dfcca632d3aeff6f44->leave($__internal_813c226c15429b37a364cde26fe92ead68cd46267794c0dfcca632d3aeff6f44_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/lara/todo-symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
