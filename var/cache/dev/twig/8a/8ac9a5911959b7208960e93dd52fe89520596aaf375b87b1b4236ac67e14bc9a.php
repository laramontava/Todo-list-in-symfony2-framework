<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_12f738d54aff3bf3f6a56dc81f2505fdcba5d762d3d028c6a50f1a44ad74da5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_43e3bb679f57b5e921623c614f12ba84e2fa26386893cfa935c6f5385d1c4024 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43e3bb679f57b5e921623c614f12ba84e2fa26386893cfa935c6f5385d1c4024->enter($__internal_43e3bb679f57b5e921623c614f12ba84e2fa26386893cfa935c6f5385d1c4024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_567ab7d4badc1b4a582bd4800e32b02cce3e654a927afbbb4fd6f7831e82b1e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_567ab7d4badc1b4a582bd4800e32b02cce3e654a927afbbb4fd6f7831e82b1e8->enter($__internal_567ab7d4badc1b4a582bd4800e32b02cce3e654a927afbbb4fd6f7831e82b1e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43e3bb679f57b5e921623c614f12ba84e2fa26386893cfa935c6f5385d1c4024->leave($__internal_43e3bb679f57b5e921623c614f12ba84e2fa26386893cfa935c6f5385d1c4024_prof);

        
        $__internal_567ab7d4badc1b4a582bd4800e32b02cce3e654a927afbbb4fd6f7831e82b1e8->leave($__internal_567ab7d4badc1b4a582bd4800e32b02cce3e654a927afbbb4fd6f7831e82b1e8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_db22635b585c72f3741602464c9fa88b8121503d19c6bad19a1925b62dd60628 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db22635b585c72f3741602464c9fa88b8121503d19c6bad19a1925b62dd60628->enter($__internal_db22635b585c72f3741602464c9fa88b8121503d19c6bad19a1925b62dd60628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_af31423000f24f8a60258a5edc8157314c865347d8bbbaca7fc5589a25ac798c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af31423000f24f8a60258a5edc8157314c865347d8bbbaca7fc5589a25ac798c->enter($__internal_af31423000f24f8a60258a5edc8157314c865347d8bbbaca7fc5589a25ac798c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_af31423000f24f8a60258a5edc8157314c865347d8bbbaca7fc5589a25ac798c->leave($__internal_af31423000f24f8a60258a5edc8157314c865347d8bbbaca7fc5589a25ac798c_prof);

        
        $__internal_db22635b585c72f3741602464c9fa88b8121503d19c6bad19a1925b62dd60628->leave($__internal_db22635b585c72f3741602464c9fa88b8121503d19c6bad19a1925b62dd60628_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ada61d00b8b3c921d4d5721cc6f8f5876ef64628c1b2a0d70bd95b5a9b90802d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ada61d00b8b3c921d4d5721cc6f8f5876ef64628c1b2a0d70bd95b5a9b90802d->enter($__internal_ada61d00b8b3c921d4d5721cc6f8f5876ef64628c1b2a0d70bd95b5a9b90802d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8de77616c954fc9222f1b3ac1de2af35837ed1e1213d860131da7a66be7a2f49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de77616c954fc9222f1b3ac1de2af35837ed1e1213d860131da7a66be7a2f49->enter($__internal_8de77616c954fc9222f1b3ac1de2af35837ed1e1213d860131da7a66be7a2f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8de77616c954fc9222f1b3ac1de2af35837ed1e1213d860131da7a66be7a2f49->leave($__internal_8de77616c954fc9222f1b3ac1de2af35837ed1e1213d860131da7a66be7a2f49_prof);

        
        $__internal_ada61d00b8b3c921d4d5721cc6f8f5876ef64628c1b2a0d70bd95b5a9b90802d->leave($__internal_ada61d00b8b3c921d4d5721cc6f8f5876ef64628c1b2a0d70bd95b5a9b90802d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f045b5578cfa608d65b1c26d31c668a233ef24dd9467483af6d39136d16c9e3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f045b5578cfa608d65b1c26d31c668a233ef24dd9467483af6d39136d16c9e3f->enter($__internal_f045b5578cfa608d65b1c26d31c668a233ef24dd9467483af6d39136d16c9e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2976a8fc270afd874d745f37c6f9c107575c2a312f6bb6622935880b70bcf100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2976a8fc270afd874d745f37c6f9c107575c2a312f6bb6622935880b70bcf100->enter($__internal_2976a8fc270afd874d745f37c6f9c107575c2a312f6bb6622935880b70bcf100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_2976a8fc270afd874d745f37c6f9c107575c2a312f6bb6622935880b70bcf100->leave($__internal_2976a8fc270afd874d745f37c6f9c107575c2a312f6bb6622935880b70bcf100_prof);

        
        $__internal_f045b5578cfa608d65b1c26d31c668a233ef24dd9467483af6d39136d16c9e3f->leave($__internal_f045b5578cfa608d65b1c26d31c668a233ef24dd9467483af6d39136d16c9e3f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/lara/todo-symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
