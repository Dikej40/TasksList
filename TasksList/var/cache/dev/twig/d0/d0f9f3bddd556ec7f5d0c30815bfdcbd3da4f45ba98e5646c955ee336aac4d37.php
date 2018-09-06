<?php

/* tasksList/index.html.twig */
class __TwigTemplate_7da574482a0aa9029a4aafb644380a5552a49e9c2668029e8b52a02e11d0a74a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tasksList/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tasksList/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Symfony to do list ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1> <center> To Do Tasks List </center> </h1>
    ";
        // line 7
        if ((isset($context["Tasks"]) || array_key_exists("Tasks", $context) ? $context["Tasks"] : (function () { throw new Twig_Error_Runtime('Variable "Tasks" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Tasks title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Tasks"]) || array_key_exists("Tasks", $context) ? $context["Tasks"] : (function () { throw new Twig_Error_Runtime('Variable "Tasks" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["Task"]) {
                // line 17
                echo "                    <tr>
                        <td>
                            ";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Task"], "title", array()), "html", null, true);
                echo "
                        </td>
                        <td>
                            <a href=\"/task/";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Task"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-dark\">Show</a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "            </tbody>
        </table>
      ";
        } else {
            // line 29
            echo "        <p>No tasks to display </p>
      ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "tasksList/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 29,  96 => 26,  86 => 22,  80 => 19,  76 => 17,  72 => 16,  62 => 8,  60 => 7,  57 => 6,  51 => 5,  39 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %} Symfony to do list {% endblock %}

{% block body %}
    <h1> <center> To Do Tasks List </center> </h1>
    {% if Tasks %}
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Tasks title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for Task in Tasks %}
                    <tr>
                        <td>
                            {{ Task.title }}
                        </td>
                        <td>
                            <a href=\"/task/{{ Task.id }}\" class=\"btn btn-dark\">Show</a>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
      {% else %}
        <p>No tasks to display </p>
      {% endif %}
{% endblock %}
", "tasksList/index.html.twig", "C:\\xampp\\htdocs\\TasksList\\templates\\tasksList\\index.html.twig");
    }
}
