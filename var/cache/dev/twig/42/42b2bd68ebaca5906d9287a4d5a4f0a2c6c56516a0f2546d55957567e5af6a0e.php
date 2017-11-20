<?php

/* base.html.twig */
class __TwigTemplate_a04947d5009d507072a9ba6506ebae3c79fdd03aece5081d3ae329be8551f7d0 extends Twig_Template
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
        $__internal_9044910463ed957708ebb4579ea749414784d5e9c23c9e87ca8eb8d587aa65d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9044910463ed957708ebb4579ea749414784d5e9c23c9e87ca8eb8d587aa65d7->enter($__internal_9044910463ed957708ebb4579ea749414784d5e9c23c9e87ca8eb8d587aa65d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_fc155b04b013c14d669437f4339affb17867cf217e617e5c3620c53105f9b2d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc155b04b013c14d669437f4339affb17867cf217e617e5c3620c53105f9b2d3->enter($__internal_fc155b04b013c14d669437f4339affb17867cf217e617e5c3620c53105f9b2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_9044910463ed957708ebb4579ea749414784d5e9c23c9e87ca8eb8d587aa65d7->leave($__internal_9044910463ed957708ebb4579ea749414784d5e9c23c9e87ca8eb8d587aa65d7_prof);

        
        $__internal_fc155b04b013c14d669437f4339affb17867cf217e617e5c3620c53105f9b2d3->leave($__internal_fc155b04b013c14d669437f4339affb17867cf217e617e5c3620c53105f9b2d3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa9992d29b765244e2464869ab2296b9c21003b589740c9b18fa01fa11a2b9a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa9992d29b765244e2464869ab2296b9c21003b589740c9b18fa01fa11a2b9a4->enter($__internal_aa9992d29b765244e2464869ab2296b9c21003b589740c9b18fa01fa11a2b9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_19e315756798591e30135119181165fa0529721a8a792a3c6a561f63431b6153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19e315756798591e30135119181165fa0529721a8a792a3c6a561f63431b6153->enter($__internal_19e315756798591e30135119181165fa0529721a8a792a3c6a561f63431b6153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_19e315756798591e30135119181165fa0529721a8a792a3c6a561f63431b6153->leave($__internal_19e315756798591e30135119181165fa0529721a8a792a3c6a561f63431b6153_prof);

        
        $__internal_aa9992d29b765244e2464869ab2296b9c21003b589740c9b18fa01fa11a2b9a4->leave($__internal_aa9992d29b765244e2464869ab2296b9c21003b589740c9b18fa01fa11a2b9a4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9b5b9d58a4b5f5e3ada4999aa0cc9d7a3b55968ea5b809cb4ea4931f54079067 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b5b9d58a4b5f5e3ada4999aa0cc9d7a3b55968ea5b809cb4ea4931f54079067->enter($__internal_9b5b9d58a4b5f5e3ada4999aa0cc9d7a3b55968ea5b809cb4ea4931f54079067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c23318e7e1dbc5f9a92e79b659edce8259f005c7dc13a5dbdbb6b5a2af40431c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c23318e7e1dbc5f9a92e79b659edce8259f005c7dc13a5dbdbb6b5a2af40431c->enter($__internal_c23318e7e1dbc5f9a92e79b659edce8259f005c7dc13a5dbdbb6b5a2af40431c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c23318e7e1dbc5f9a92e79b659edce8259f005c7dc13a5dbdbb6b5a2af40431c->leave($__internal_c23318e7e1dbc5f9a92e79b659edce8259f005c7dc13a5dbdbb6b5a2af40431c_prof);

        
        $__internal_9b5b9d58a4b5f5e3ada4999aa0cc9d7a3b55968ea5b809cb4ea4931f54079067->leave($__internal_9b5b9d58a4b5f5e3ada4999aa0cc9d7a3b55968ea5b809cb4ea4931f54079067_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c69b078c0de7dfbd5c4533748a5a88085c0ef47d9867dbc25b4e1542c09d875 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c69b078c0de7dfbd5c4533748a5a88085c0ef47d9867dbc25b4e1542c09d875->enter($__internal_9c69b078c0de7dfbd5c4533748a5a88085c0ef47d9867dbc25b4e1542c09d875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d75855de77e2874848b75b4b81bca32949e15de134ca3fea8d0cdab6cb30a766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d75855de77e2874848b75b4b81bca32949e15de134ca3fea8d0cdab6cb30a766->enter($__internal_d75855de77e2874848b75b4b81bca32949e15de134ca3fea8d0cdab6cb30a766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d75855de77e2874848b75b4b81bca32949e15de134ca3fea8d0cdab6cb30a766->leave($__internal_d75855de77e2874848b75b4b81bca32949e15de134ca3fea8d0cdab6cb30a766_prof);

        
        $__internal_9c69b078c0de7dfbd5c4533748a5a88085c0ef47d9867dbc25b4e1542c09d875->leave($__internal_9c69b078c0de7dfbd5c4533748a5a88085c0ef47d9867dbc25b4e1542c09d875_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e8c649036daa4a355073539be248667947ba949bd13a20dd06ce988c180ff8ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8c649036daa4a355073539be248667947ba949bd13a20dd06ce988c180ff8ee->enter($__internal_e8c649036daa4a355073539be248667947ba949bd13a20dd06ce988c180ff8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e5851ec8f629c543d9f967aea7bbd3b6ff45af79484a803003bb44983f5e72c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5851ec8f629c543d9f967aea7bbd3b6ff45af79484a803003bb44983f5e72c9->enter($__internal_e5851ec8f629c543d9f967aea7bbd3b6ff45af79484a803003bb44983f5e72c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e5851ec8f629c543d9f967aea7bbd3b6ff45af79484a803003bb44983f5e72c9->leave($__internal_e5851ec8f629c543d9f967aea7bbd3b6ff45af79484a803003bb44983f5e72c9_prof);

        
        $__internal_e8c649036daa4a355073539be248667947ba949bd13a20dd06ce988c180ff8ee->leave($__internal_e8c649036daa4a355073539be248667947ba949bd13a20dd06ce988c180ff8ee_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/base.html.twig");
    }
}
