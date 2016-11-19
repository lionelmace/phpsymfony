<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_781bf0b6225082c5302511a42a35d3b7d086c0e2aa956e6f71a0df1bfd1e75df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e3f00b68e62e7912955bae69ddf51781eda86e30d11a6e9a8b49df9abe5ae56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e3f00b68e62e7912955bae69ddf51781eda86e30d11a6e9a8b49df9abe5ae56->enter($__internal_5e3f00b68e62e7912955bae69ddf51781eda86e30d11a6e9a8b49df9abe5ae56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_5e3f00b68e62e7912955bae69ddf51781eda86e30d11a6e9a8b49df9abe5ae56->leave($__internal_5e3f00b68e62e7912955bae69ddf51781eda86e30d11a6e9a8b49df9abe5ae56_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1d7d9c7c5be456849a74e3b73124d256eb301ef215502f505d8ef4ed3d50e202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d7d9c7c5be456849a74e3b73124d256eb301ef215502f505d8ef4ed3d50e202->enter($__internal_1d7d9c7c5be456849a74e3b73124d256eb301ef215502f505d8ef4ed3d50e202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/ajax.html.twig"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 28
        echo "
    ";
        // line 29
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";

        $__internal_1d7d9c7c5be456849a74e3b73124d256eb301ef215502f505d8ef4ed3d50e202->leave($__internal_1d7d9c7c5be456849a74e3b73124d256eb301ef215502f505d8ef4ed3d50e202_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 29,  72 => 28,  53 => 9,  50 => 8,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/mace/Box Sync/Bluemix/demos/phpsymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
