<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b0972ea85d093d38911027a775a817705c22243169e9b5875e4b3eceefab67c5 extends Twig_Template
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
        $__internal_bc0ac8a38914906a953d90de922cf836789148b5c90797e352869c8d1c7a1627 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc0ac8a38914906a953d90de922cf836789148b5c90797e352869c8d1c7a1627->enter($__internal_bc0ac8a38914906a953d90de922cf836789148b5c90797e352869c8d1c7a1627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_83a28602ac416af72b8bf86ef560750bf2600b9dbbd729ed702b1d2e30d56f6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83a28602ac416af72b8bf86ef560750bf2600b9dbbd729ed702b1d2e30d56f6c->enter($__internal_83a28602ac416af72b8bf86ef560750bf2600b9dbbd729ed702b1d2e30d56f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc0ac8a38914906a953d90de922cf836789148b5c90797e352869c8d1c7a1627->leave($__internal_bc0ac8a38914906a953d90de922cf836789148b5c90797e352869c8d1c7a1627_prof);

        
        $__internal_83a28602ac416af72b8bf86ef560750bf2600b9dbbd729ed702b1d2e30d56f6c->leave($__internal_83a28602ac416af72b8bf86ef560750bf2600b9dbbd729ed702b1d2e30d56f6c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_719c4d117b8800fbb68eb7e90e3c14bf77efe59d2ae32f18068e5943fc86c8be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_719c4d117b8800fbb68eb7e90e3c14bf77efe59d2ae32f18068e5943fc86c8be->enter($__internal_719c4d117b8800fbb68eb7e90e3c14bf77efe59d2ae32f18068e5943fc86c8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_71113b365edb735fa06cd5f496fc9e3063cb19d5fdc0470d62e2c9e7d4e84067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71113b365edb735fa06cd5f496fc9e3063cb19d5fdc0470d62e2c9e7d4e84067->enter($__internal_71113b365edb735fa06cd5f496fc9e3063cb19d5fdc0470d62e2c9e7d4e84067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_71113b365edb735fa06cd5f496fc9e3063cb19d5fdc0470d62e2c9e7d4e84067->leave($__internal_71113b365edb735fa06cd5f496fc9e3063cb19d5fdc0470d62e2c9e7d4e84067_prof);

        
        $__internal_719c4d117b8800fbb68eb7e90e3c14bf77efe59d2ae32f18068e5943fc86c8be->leave($__internal_719c4d117b8800fbb68eb7e90e3c14bf77efe59d2ae32f18068e5943fc86c8be_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d0346c429e461a286f65b6787d0f94e8de556dac8c0241e34f054d6f6cb9e00b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0346c429e461a286f65b6787d0f94e8de556dac8c0241e34f054d6f6cb9e00b->enter($__internal_d0346c429e461a286f65b6787d0f94e8de556dac8c0241e34f054d6f6cb9e00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3127e2552ae9f6ab823a3ce091433198be2c9d2d14bea12648afc9aaa610d0c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3127e2552ae9f6ab823a3ce091433198be2c9d2d14bea12648afc9aaa610d0c6->enter($__internal_3127e2552ae9f6ab823a3ce091433198be2c9d2d14bea12648afc9aaa610d0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3127e2552ae9f6ab823a3ce091433198be2c9d2d14bea12648afc9aaa610d0c6->leave($__internal_3127e2552ae9f6ab823a3ce091433198be2c9d2d14bea12648afc9aaa610d0c6_prof);

        
        $__internal_d0346c429e461a286f65b6787d0f94e8de556dac8c0241e34f054d6f6cb9e00b->leave($__internal_d0346c429e461a286f65b6787d0f94e8de556dac8c0241e34f054d6f6cb9e00b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5dd8258afcbb92517f6ea9b6c1d8344e92f4cfcef03c225b330b328b15939464 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dd8258afcbb92517f6ea9b6c1d8344e92f4cfcef03c225b330b328b15939464->enter($__internal_5dd8258afcbb92517f6ea9b6c1d8344e92f4cfcef03c225b330b328b15939464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9264fe4674b2200094df3f30af2f6126acd4d859a32c1c9394ca286374031a83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9264fe4674b2200094df3f30af2f6126acd4d859a32c1c9394ca286374031a83->enter($__internal_9264fe4674b2200094df3f30af2f6126acd4d859a32c1c9394ca286374031a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9264fe4674b2200094df3f30af2f6126acd4d859a32c1c9394ca286374031a83->leave($__internal_9264fe4674b2200094df3f30af2f6126acd4d859a32c1c9394ca286374031a83_prof);

        
        $__internal_5dd8258afcbb92517f6ea9b6c1d8344e92f4cfcef03c225b330b328b15939464->leave($__internal_5dd8258afcbb92517f6ea9b6c1d8344e92f4cfcef03c225b330b328b15939464_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
