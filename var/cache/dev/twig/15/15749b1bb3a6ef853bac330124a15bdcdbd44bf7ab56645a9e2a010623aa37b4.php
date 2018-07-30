<?php

/* lift/index.html.twig */
class __TwigTemplate_712a9b2e35e7a628b3501cdf370cd61d331528f73e654926757d9a8d52f35f9b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "lift/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lift/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-7\">
            <h2>
                Lift History
                <a href=\"#list-stuff-form\" class=\"btn btn-md btn-success pull-right\">
                    <span class=\"fa fa-plus\"></span> Add
                </a>
            </h2>

            <table class=\"table table-striped js-rep-log-table\">
                <thead>
                <tr>
                    <th>What</th>
                    <th>How many times?</th>
                    <th>Weight</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["repLogs"]) || array_key_exists("repLogs", $context) ? $context["repLogs"] : (function () { throw new Twig_Error_Runtime('Variable "repLogs" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["repLog"]) {
            // line 24
            echo "                    <tr>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["repLog"], "itemLabel", array())), "html", null, true);
            echo "</td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["repLog"], "reps", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["repLog"], "totalWeightLifted", array()), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"#\" class=\"js-delete-rep-log\">
                                <span class=\"fa fa-trash\"></span>
                            </a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "                    <tr>
                        <td colspan=\"4\">Get liftin'!</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repLog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                </tbody>
                <tfoot>
                    <tr>
                        <td>&nbsp;</td>
                        <th>Total</th>
                        <th>";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["totalWeight"]) || array_key_exists("totalWeight", $context) ? $context["totalWeight"] : (function () { throw new Twig_Error_Runtime('Variable "totalWeight" does not exist.', 44, $this->source); })()), "html", null, true);
        echo "</th>
                        <td>&nbsp;</td>
                    </tr>
                </tfoot>
            </table>

            ";
        // line 50
        echo twig_include($this->env, $context, "lift/_form.html.twig");
        echo "

        </div>
        <div class=\"col-md-5\">
            <div class=\"leaderboard\">
                <h2 class=\"text-center\">
                    <img class=\"dumbbell\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/dumbbell.png"), "html", null, true);
        echo "\" />
                    Leaderboard
                </h2>

                ";
        // line 60
        echo twig_include($this->env, $context, "lift/_leaderboard.html.twig");
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        \$(document).ready(function () {
            var \$table = \$('.js-rep-log-table');

            \$table.find('.js-delete-rep-log').on('click', function () {
                console.log('todo delete!');
            });

            \$table.find('.js-rep-log-table tbody tr').on('click', function () {
                console.log('row clicked');
            })
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "lift/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 67,  148 => 66,  136 => 60,  129 => 56,  120 => 50,  111 => 44,  104 => 39,  95 => 35,  82 => 27,  78 => 26,  74 => 25,  71 => 24,  66 => 23,  45 => 4,  39 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-md-7\">
            <h2>
                Lift History
                <a href=\"#list-stuff-form\" class=\"btn btn-md btn-success pull-right\">
                    <span class=\"fa fa-plus\"></span> Add
                </a>
            </h2>

            <table class=\"table table-striped js-rep-log-table\">
                <thead>
                <tr>
                    <th>What</th>
                    <th>How many times?</th>
                    <th>Weight</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                {% for repLog in repLogs %}
                    <tr>
                        <td>{{ repLog.itemLabel|trans }}</td>
                        <td>{{ repLog.reps }}</td>
                        <td>{{ repLog.totalWeightLifted }}</td>
                        <td>
                            <a href=\"#\" class=\"js-delete-rep-log\">
                                <span class=\"fa fa-trash\"></span>
                            </a>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"4\">Get liftin'!</td>
                    </tr>
                {% endfor %}
                </tbody>
                <tfoot>
                    <tr>
                        <td>&nbsp;</td>
                        <th>Total</th>
                        <th>{{ totalWeight }}</th>
                        <td>&nbsp;</td>
                    </tr>
                </tfoot>
            </table>

            {{ include('lift/_form.html.twig') }}

        </div>
        <div class=\"col-md-5\">
            <div class=\"leaderboard\">
                <h2 class=\"text-center\">
                    <img class=\"dumbbell\" src=\"{{ asset('assets/images/dumbbell.png') }}\" />
                    Leaderboard
                </h2>

                {{ include('lift/_leaderboard.html.twig') }}
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script>
        \$(document).ready(function () {
            var \$table = \$('.js-rep-log-table');

            \$table.find('.js-delete-rep-log').on('click', function () {
                console.log('todo delete!');
            });

            \$table.find('.js-rep-log-table tbody tr').on('click', function () {
                console.log('row clicked');
            })
        });
    </script>
{% endblock %}", "lift/index.html.twig", "/home/romariololz/www-dev/LAB/code-javascript/app/Resources/views/lift/index.html.twig");
    }
}
