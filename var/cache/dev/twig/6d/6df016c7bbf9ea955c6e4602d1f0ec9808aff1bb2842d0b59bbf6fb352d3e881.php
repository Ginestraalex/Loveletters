<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5de615a0208f2685a1eb05868ee35ffcca2bd97cf086fb0fe3f060e0bbbff1de extends Twig_Template
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
        $__internal_4c73867dc435fbe8f75dc7f3522cda8e35b9b345e47aa62d51d16801c88d64aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c73867dc435fbe8f75dc7f3522cda8e35b9b345e47aa62d51d16801c88d64aa->enter($__internal_4c73867dc435fbe8f75dc7f3522cda8e35b9b345e47aa62d51d16801c88d64aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_17360718f5f48ff477f1979fe05c51f9ace2ee51042067dab61df86c8c40b007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17360718f5f48ff477f1979fe05c51f9ace2ee51042067dab61df86c8c40b007->enter($__internal_17360718f5f48ff477f1979fe05c51f9ace2ee51042067dab61df86c8c40b007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c73867dc435fbe8f75dc7f3522cda8e35b9b345e47aa62d51d16801c88d64aa->leave($__internal_4c73867dc435fbe8f75dc7f3522cda8e35b9b345e47aa62d51d16801c88d64aa_prof);

        
        $__internal_17360718f5f48ff477f1979fe05c51f9ace2ee51042067dab61df86c8c40b007->leave($__internal_17360718f5f48ff477f1979fe05c51f9ace2ee51042067dab61df86c8c40b007_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6f2345598e87dd7ac22290cb2d49dd32e700406f5be2d443cf4aea246b8e8fe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f2345598e87dd7ac22290cb2d49dd32e700406f5be2d443cf4aea246b8e8fe5->enter($__internal_6f2345598e87dd7ac22290cb2d49dd32e700406f5be2d443cf4aea246b8e8fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d584b2a8b08a200b78a96521f793872c745db93fcfcbf0037c656869045370dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d584b2a8b08a200b78a96521f793872c745db93fcfcbf0037c656869045370dd->enter($__internal_d584b2a8b08a200b78a96521f793872c745db93fcfcbf0037c656869045370dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d584b2a8b08a200b78a96521f793872c745db93fcfcbf0037c656869045370dd->leave($__internal_d584b2a8b08a200b78a96521f793872c745db93fcfcbf0037c656869045370dd_prof);

        
        $__internal_6f2345598e87dd7ac22290cb2d49dd32e700406f5be2d443cf4aea246b8e8fe5->leave($__internal_6f2345598e87dd7ac22290cb2d49dd32e700406f5be2d443cf4aea246b8e8fe5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c6a195c829e8ed10bd255ed7357037c718676941661c5ea38c6f55f6535e9898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6a195c829e8ed10bd255ed7357037c718676941661c5ea38c6f55f6535e9898->enter($__internal_c6a195c829e8ed10bd255ed7357037c718676941661c5ea38c6f55f6535e9898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1fa3cec95d0e092b2deb0a26f8eac1735c17dca1f2d8f1b9db345070c1e14528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa3cec95d0e092b2deb0a26f8eac1735c17dca1f2d8f1b9db345070c1e14528->enter($__internal_1fa3cec95d0e092b2deb0a26f8eac1735c17dca1f2d8f1b9db345070c1e14528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1fa3cec95d0e092b2deb0a26f8eac1735c17dca1f2d8f1b9db345070c1e14528->leave($__internal_1fa3cec95d0e092b2deb0a26f8eac1735c17dca1f2d8f1b9db345070c1e14528_prof);

        
        $__internal_c6a195c829e8ed10bd255ed7357037c718676941661c5ea38c6f55f6535e9898->leave($__internal_c6a195c829e8ed10bd255ed7357037c718676941661c5ea38c6f55f6535e9898_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8304d56a6517b33884489adfffe9e59785c0af23e779456ef1830df85e87333c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8304d56a6517b33884489adfffe9e59785c0af23e779456ef1830df85e87333c->enter($__internal_8304d56a6517b33884489adfffe9e59785c0af23e779456ef1830df85e87333c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_01d05dae5c93c09af700a78c14880f1fce935bcdf92640ba9e0e6b3b3605ed57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01d05dae5c93c09af700a78c14880f1fce935bcdf92640ba9e0e6b3b3605ed57->enter($__internal_01d05dae5c93c09af700a78c14880f1fce935bcdf92640ba9e0e6b3b3605ed57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_01d05dae5c93c09af700a78c14880f1fce935bcdf92640ba9e0e6b3b3605ed57->leave($__internal_01d05dae5c93c09af700a78c14880f1fce935bcdf92640ba9e0e6b3b3605ed57_prof);

        
        $__internal_8304d56a6517b33884489adfffe9e59785c0af23e779456ef1830df85e87333c->leave($__internal_8304d56a6517b33884489adfffe9e59785c0af23e779456ef1830df85e87333c_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
