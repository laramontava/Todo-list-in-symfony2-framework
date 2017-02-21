<?php

/* base.html.twig */
class __TwigTemplate_d81bae7d5325a7f23ba92e849144467ab8ed2421c201cbf1d70c17582ad76de7 extends Twig_Template
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
        $__internal_9f19be4d04fe093000b20306ecfa429f6ea6e6c95640ec25db8653185af140e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f19be4d04fe093000b20306ecfa429f6ea6e6c95640ec25db8653185af140e1->enter($__internal_9f19be4d04fe093000b20306ecfa429f6ea6e6c95640ec25db8653185af140e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3a573242e73be7a06d2ed7b09fe1c2d79a356065909f89e4a722a08f47a236e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a573242e73be7a06d2ed7b09fe1c2d79a356065909f89e4a722a08f47a236e6->enter($__internal_3a573242e73be7a06d2ed7b09fe1c2d79a356065909f89e4a722a08f47a236e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\">
      ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
  </head>

  <body>

    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">Todolist</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"/\">Home</a></li>
            <li><a href=\"/todos/create\">Create</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class=\"container\">
    <div class=\"row\">
    <div class=\"col-md-12\">
    <br><br><br>
    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 47
            echo "    <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo " 
     
       ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 51
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "     ";
        $this->displayBlock('body', $context, $blocks);
        echo "   
    </div>   
    </div>
    </div><!-- /.container -->
  ";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "  </body>
</html>";
        
        $__internal_9f19be4d04fe093000b20306ecfa429f6ea6e6c95640ec25db8653185af140e1->leave($__internal_9f19be4d04fe093000b20306ecfa429f6ea6e6c95640ec25db8653185af140e1_prof);

        
        $__internal_3a573242e73be7a06d2ed7b09fe1c2d79a356065909f89e4a722a08f47a236e6->leave($__internal_3a573242e73be7a06d2ed7b09fe1c2d79a356065909f89e4a722a08f47a236e6_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_4070ecb367aa0688bc4ce8fe68e1d7e208c342c24a7624b915948517458a9236 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4070ecb367aa0688bc4ce8fe68e1d7e208c342c24a7624b915948517458a9236->enter($__internal_4070ecb367aa0688bc4ce8fe68e1d7e208c342c24a7624b915948517458a9236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0c516b615ca58705efaf22f260781406d256cbf7e0b77d41d0f4adb5b6b33616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c516b615ca58705efaf22f260781406d256cbf7e0b77d41d0f4adb5b6b33616->enter($__internal_0c516b615ca58705efaf22f260781406d256cbf7e0b77d41d0f4adb5b6b33616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0c516b615ca58705efaf22f260781406d256cbf7e0b77d41d0f4adb5b6b33616->leave($__internal_0c516b615ca58705efaf22f260781406d256cbf7e0b77d41d0f4adb5b6b33616_prof);

        
        $__internal_4070ecb367aa0688bc4ce8fe68e1d7e208c342c24a7624b915948517458a9236->leave($__internal_4070ecb367aa0688bc4ce8fe68e1d7e208c342c24a7624b915948517458a9236_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fc3c548db84c5b1b03b7d10d78eab0d10e2c88867c5bcc59709eccebf9dcb28d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc3c548db84c5b1b03b7d10d78eab0d10e2c88867c5bcc59709eccebf9dcb28d->enter($__internal_fc3c548db84c5b1b03b7d10d78eab0d10e2c88867c5bcc59709eccebf9dcb28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_eaee28074d0e8a408d8f1ca6500c25ef77ac67cb0b418f13cb575737cc2f1003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaee28074d0e8a408d8f1ca6500c25ef77ac67cb0b418f13cb575737cc2f1003->enter($__internal_eaee28074d0e8a408d8f1ca6500c25ef77ac67cb0b418f13cb575737cc2f1003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_eaee28074d0e8a408d8f1ca6500c25ef77ac67cb0b418f13cb575737cc2f1003->leave($__internal_eaee28074d0e8a408d8f1ca6500c25ef77ac67cb0b418f13cb575737cc2f1003_prof);

        
        $__internal_fc3c548db84c5b1b03b7d10d78eab0d10e2c88867c5bcc59709eccebf9dcb28d->leave($__internal_fc3c548db84c5b1b03b7d10d78eab0d10e2c88867c5bcc59709eccebf9dcb28d_prof);

    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        $__internal_46a8f1dd767409a4835ff8af04f609defe30d35d4b212d3db51ee757afe64ad2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46a8f1dd767409a4835ff8af04f609defe30d35d4b212d3db51ee757afe64ad2->enter($__internal_46a8f1dd767409a4835ff8af04f609defe30d35d4b212d3db51ee757afe64ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_43c8a1a2931973d1cabce4c6b11876e1fc20673774b32379303dbe64a586fab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43c8a1a2931973d1cabce4c6b11876e1fc20673774b32379303dbe64a586fab2->enter($__internal_43c8a1a2931973d1cabce4c6b11876e1fc20673774b32379303dbe64a586fab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_43c8a1a2931973d1cabce4c6b11876e1fc20673774b32379303dbe64a586fab2->leave($__internal_43c8a1a2931973d1cabce4c6b11876e1fc20673774b32379303dbe64a586fab2_prof);

        
        $__internal_46a8f1dd767409a4835ff8af04f609defe30d35d4b212d3db51ee757afe64ad2->leave($__internal_46a8f1dd767409a4835ff8af04f609defe30d35d4b212d3db51ee757afe64ad2_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d40d6ee503bc431558639313cafee6f315b279035e9b7871f5908734c1b9d709 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d40d6ee503bc431558639313cafee6f315b279035e9b7871f5908734c1b9d709->enter($__internal_d40d6ee503bc431558639313cafee6f315b279035e9b7871f5908734c1b9d709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ba73d1c339309c2322d9f5fcbbe9d0bd4ebed889181a7794af8956cdce2f678b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba73d1c339309c2322d9f5fcbbe9d0bd4ebed889181a7794af8956cdce2f678b->enter($__internal_ba73d1c339309c2322d9f5fcbbe9d0bd4ebed889181a7794af8956cdce2f678b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ba73d1c339309c2322d9f5fcbbe9d0bd4ebed889181a7794af8956cdce2f678b->leave($__internal_ba73d1c339309c2322d9f5fcbbe9d0bd4ebed889181a7794af8956cdce2f678b_prof);

        
        $__internal_d40d6ee503bc431558639313cafee6f315b279035e9b7871f5908734c1b9d709->leave($__internal_d40d6ee503bc431558639313cafee6f315b279035e9b7871f5908734c1b9d709_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 57,  170 => 53,  153 => 16,  135 => 12,  124 => 58,  122 => 57,  114 => 53,  105 => 51,  101 => 50,  97 => 48,  88 => 47,  84 => 46,  51 => 17,  49 => 16,  42 => 12,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>{% block title %}Welcome!{% endblock %}</title>

    <!-- Bootstrap core CSS -->
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\">
      {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
  </head>

  <body>

    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">Todolist</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"/\">Home</a></li>
            <li><a href=\"/todos/create\">Create</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class=\"container\">
    <div class=\"row\">
    <div class=\"col-md-12\">
    <br><br><br>
    {% for flash_message in app.session.flashbag.get('notice') %}
    <div class=\"alert alert-success\">{{flash_message}}</div>
    {% endfor %} 
     
       {% for flash_message in app.session.flashbag.get('error') %}
    <div class=\"alert alert-danger\">{{flash_message}}</div>
    {% endfor %}
     {% block body %}{% endblock %}   
    </div>   
    </div>
    </div><!-- /.container -->
  {% block javascripts %}{% endblock %}
  </body>
</html>", "base.html.twig", "/home/lara/todo-symfony/app/Resources/views/base.html.twig");
    }
}
