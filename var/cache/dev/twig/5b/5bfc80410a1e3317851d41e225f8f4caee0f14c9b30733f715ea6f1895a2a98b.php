<?php

/* lift/_form.html.twig */
class __TwigTemplate_12b463f33276bd4472db71e4d06169c7006d0e8a156a8075d7ef4c4bf0bfd06c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lift/_form.html.twig"));

        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', array("attr" => array("class" => "form-inline", "novalidate" => "novalidate")));
        // line 6
        echo "
    ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->source); })()), 'errors');
        echo "

    ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->source); })()), "item", array()), 'row', array("label" => "What did you lift?", "label_attr" => array("class" => "sr-only")));
        // line 12
        echo "

    ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), "reps", array()), 'row', array("label" => "How many times?", "label_attr" => array("class" => "sr-only"), "attr" => array("placeholder" => "How many times?")));
        // line 18
        echo "

    <button type=\"submit\" class=\"btn btn-primary\">I Lifted it!</button>
";
        // line 21
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "lift/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 21,  44 => 18,  42 => 14,  38 => 12,  36 => 9,  31 => 7,  28 => 6,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form, {
    'attr': {
        'class': 'form-inline',
        'novalidate': 'novalidate'
    }
}) }}
    {{ form_errors(form) }}

    {{ form_row(form.item, {
        'label': 'What did you lift?',
        'label_attr': {'class': 'sr-only'}
    }) }}

    {{ form_row(form.reps, {
        'label': 'How many times?',
        'label_attr': {'class': 'sr-only'},
        'attr': {'placeholder': 'How many times?'}
    }) }}

    <button type=\"submit\" class=\"btn btn-primary\">I Lifted it!</button>
{{ form_end(form) }}
", "lift/_form.html.twig", "/home/romariololz/www-dev/LAB/code-javascript/app/Resources/views/lift/_form.html.twig");
    }
}
