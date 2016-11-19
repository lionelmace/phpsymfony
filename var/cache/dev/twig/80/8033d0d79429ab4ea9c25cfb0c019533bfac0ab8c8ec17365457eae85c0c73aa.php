<?php

/* base.html.twig */
class __TwigTemplate_17ae0058489d4b1e573d963ce2ec9a52e632f589c86fae3f27288acaced34666 extends Twig_Template
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
        $__internal_66e121a60ca9fc58b6f84979249f815eeb8e380383483e0d6c75f797f8513715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e121a60ca9fc58b6f84979249f815eeb8e380383483e0d6c75f797f8513715->enter($__internal_66e121a60ca9fc58b6f84979249f815eeb8e380383483e0d6c75f797f8513715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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

        $__internal_66e121a60ca9fc58b6f84979249f815eeb8e380383483e0d6c75f797f8513715->leave($__internal_66e121a60ca9fc58b6f84979249f815eeb8e380383483e0d6c75f797f8513715_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_30d9ccea9d514a7dae61bca7d3d686aee5584854cf84c7720f1153ea4ce5cf43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30d9ccea9d514a7dae61bca7d3d686aee5584854cf84c7720f1153ea4ce5cf43->enter($__internal_30d9ccea9d514a7dae61bca7d3d686aee5584854cf84c7720f1153ea4ce5cf43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";

        $__internal_30d9ccea9d514a7dae61bca7d3d686aee5584854cf84c7720f1153ea4ce5cf43->leave($__internal_30d9ccea9d514a7dae61bca7d3d686aee5584854cf84c7720f1153ea4ce5cf43_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_33c7b3a72c042e9a1818e10bbb48ce9275abb5707914c41558b49b4043353e5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33c7b3a72c042e9a1818e10bbb48ce9275abb5707914c41558b49b4043353e5a->enter($__internal_33c7b3a72c042e9a1818e10bbb48ce9275abb5707914c41558b49b4043353e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));


        $__internal_33c7b3a72c042e9a1818e10bbb48ce9275abb5707914c41558b49b4043353e5a->leave($__internal_33c7b3a72c042e9a1818e10bbb48ce9275abb5707914c41558b49b4043353e5a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6442bb60406666614fd284f0cf2c31d5ac5fa904b53896bc698541569e01f556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6442bb60406666614fd284f0cf2c31d5ac5fa904b53896bc698541569e01f556->enter($__internal_6442bb60406666614fd284f0cf2c31d5ac5fa904b53896bc698541569e01f556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));


        $__internal_6442bb60406666614fd284f0cf2c31d5ac5fa904b53896bc698541569e01f556->leave($__internal_6442bb60406666614fd284f0cf2c31d5ac5fa904b53896bc698541569e01f556_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_81c346c322f6061d19dc6bdee093393498a093d994e93a3338fd9f7cbf26bd9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c346c322f6061d19dc6bdee093393498a093d994e93a3338fd9f7cbf26bd9b->enter($__internal_81c346c322f6061d19dc6bdee093393498a093d994e93a3338fd9f7cbf26bd9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));


        $__internal_81c346c322f6061d19dc6bdee093393498a093d994e93a3338fd9f7cbf26bd9b->leave($__internal_81c346c322f6061d19dc6bdee093393498a093d994e93a3338fd9f7cbf26bd9b_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
", "base.html.twig", "/Users/mace/Box Sync/Bluemix/demos/phpsymfony/app/Resources/views/base.html.twig");
    }
}
