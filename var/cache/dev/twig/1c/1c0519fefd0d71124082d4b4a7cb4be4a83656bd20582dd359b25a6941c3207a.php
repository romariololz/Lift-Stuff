<?php

/* lift/_leaderboard.html.twig */
class __TwigTemplate_c02b400b57a4d9f6a64f1c1d099aa6709e3e6487e5ec454b5f33b8b2a6c7228a extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lift/_leaderboard.html.twig"));

        // line 1
        echo "<table class=\"table leaderboard-table-striped leaderboard-table-hover leaderboard-table\">
    <thead>
    <tr>
        <th class=\"text-center\">Username</th>
        <th class=\"text-center\">Weight Lifted</th>
        <th class=\"text-center\">Cat Equivalent</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["leaderboard"]) || array_key_exists("leaderboard", $context) ? $context["leaderboard"] : (function () { throw new Twig_Error_Runtime('Variable "leaderboard" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["leader"]) {
            // line 11
            echo "        <tr>
            <td class=\"text-center\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leader"], "username", array()), "html", null, true);
            echo "</td>
            <td class=\"text-center\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leader"], "weight", array()), "html", null, true);
            echo "lbs</td>
            <td class=\"text-center\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leader"], "in_cats", array()), "html", null, true);
            echo " fat cats</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leader'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </tbody>
</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "lift/_leaderboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 17,  52 => 14,  48 => 13,  44 => 12,  41 => 11,  37 => 10,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"table leaderboard-table-striped leaderboard-table-hover leaderboard-table\">
    <thead>
    <tr>
        <th class=\"text-center\">Username</th>
        <th class=\"text-center\">Weight Lifted</th>
        <th class=\"text-center\">Cat Equivalent</th>
    </tr>
    </thead>
    <tbody>
    {% for leader in leaderboard %}
        <tr>
            <td class=\"text-center\">{{ leader.username }}</td>
            <td class=\"text-center\">{{ leader.weight }}lbs</td>
            <td class=\"text-center\">{{ leader.in_cats }} fat cats</td>
        </tr>
    {% endfor %}
    </tbody>
</table>
", "lift/_leaderboard.html.twig", "/home/romariololz/www-dev/LAB/code-javascript/app/Resources/views/lift/_leaderboard.html.twig");
    }
}
