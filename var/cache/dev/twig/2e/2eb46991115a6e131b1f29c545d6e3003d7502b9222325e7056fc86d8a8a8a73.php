<?php

/* JEUPlatformBundle:Default:index.html.twig */
class __TwigTemplate_abd5176568a31a78f031e0e90bd1dd0e11ba37e222a76344770e8cb5cba1a627 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b065cfddb94bb40a78cab375357a4bb8e9ef7770aa15c4ffbf2bc62f4da7d99a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b065cfddb94bb40a78cab375357a4bb8e9ef7770aa15c4ffbf2bc62f4da7d99a->enter($__internal_b065cfddb94bb40a78cab375357a4bb8e9ef7770aa15c4ffbf2bc62f4da7d99a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JEUPlatformBundle:Default:index.html.twig"));

        $__internal_f1c3dfba9124c59c093b09c63935be5a544416d9a8790c36d34fceadbc7b93e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c3dfba9124c59c093b09c63935be5a544416d9a8790c36d34fceadbc7b93e8->enter($__internal_f1c3dfba9124c59c093b09c63935be5a544416d9a8790c36d34fceadbc7b93e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JEUPlatformBundle:Default:index.html.twig"));

        // line 1
        echo "<html>
  <body>
    Hello World!
  </body>
</html>";
        
        $__internal_b065cfddb94bb40a78cab375357a4bb8e9ef7770aa15c4ffbf2bc62f4da7d99a->leave($__internal_b065cfddb94bb40a78cab375357a4bb8e9ef7770aa15c4ffbf2bc62f4da7d99a_prof);

        
        $__internal_f1c3dfba9124c59c093b09c63935be5a544416d9a8790c36d34fceadbc7b93e8->leave($__internal_f1c3dfba9124c59c093b09c63935be5a544416d9a8790c36d34fceadbc7b93e8_prof);

    }

    public function getTemplateName()
    {
        return "JEUPlatformBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
  <body>
    Hello World!
  </body>
</html>", "JEUPlatformBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/Symfony/src/JEU/PlatformBundle/Resources/views/Default/index.html.twig");
    }
}
