<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f7f48e9288be6a28fee69ed82a35f0bc5754356f4548f95c5a6dffbf5b3b59cf extends Twig_Template
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
        $__internal_7012c2c2992302458eb44efca498f5fd0fa217eae0cef6f0dc6afff13948b748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7012c2c2992302458eb44efca498f5fd0fa217eae0cef6f0dc6afff13948b748->enter($__internal_7012c2c2992302458eb44efca498f5fd0fa217eae0cef6f0dc6afff13948b748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_7012c2c2992302458eb44efca498f5fd0fa217eae0cef6f0dc6afff13948b748->leave($__internal_7012c2c2992302458eb44efca498f5fd0fa217eae0cef6f0dc6afff13948b748_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_192cc39974abbf5529a8ee73c53b11d802eca5194f8cd1606a9ceb83424585b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_192cc39974abbf5529a8ee73c53b11d802eca5194f8cd1606a9ceb83424585b0->enter($__internal_192cc39974abbf5529a8ee73c53b11d802eca5194f8cd1606a9ceb83424585b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));


        $__internal_192cc39974abbf5529a8ee73c53b11d802eca5194f8cd1606a9ceb83424585b0->leave($__internal_192cc39974abbf5529a8ee73c53b11d802eca5194f8cd1606a9ceb83424585b0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a12a07407ae5d2a0fa75da3b10fc1941d4105c015ea7eac4fafa50efc1237039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a12a07407ae5d2a0fa75da3b10fc1941d4105c015ea7eac4fafa50efc1237039->enter($__internal_a12a07407ae5d2a0fa75da3b10fc1941d4105c015ea7eac4fafa50efc1237039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";

        $__internal_a12a07407ae5d2a0fa75da3b10fc1941d4105c015ea7eac4fafa50efc1237039->leave($__internal_a12a07407ae5d2a0fa75da3b10fc1941d4105c015ea7eac4fafa50efc1237039_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4fc0e1e859b6ddfabe6cc18a40d39297e736c83977d99b5d105a80f497386701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fc0e1e859b6ddfabe6cc18a40d39297e736c83977d99b5d105a80f497386701->enter($__internal_4fc0e1e859b6ddfabe6cc18a40d39297e736c83977d99b5d105a80f497386701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";

        $__internal_4fc0e1e859b6ddfabe6cc18a40d39297e736c83977d99b5d105a80f497386701->leave($__internal_4fc0e1e859b6ddfabe6cc18a40d39297e736c83977d99b5d105a80f497386701_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "/Users/mace/Box Sync/Bluemix/demos/phpsymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
