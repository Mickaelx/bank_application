<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* bank_operations/create.html.twig */
class __TwigTemplate_d24991659802a4301957063e614b2cdbf3ebabb3a20e8154f9615c75e1962d3b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bank_operations/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bank_operations/create.html.twig"));

        // line 6
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formOperation"]) || array_key_exists("formOperation", $context) ? $context["formOperation"] : (function () { throw new RuntimeError('Variable "formOperation" does not exist.', 6, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "bank_operations/create.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " New operation | MyBankApp";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
    <section class=\"form w-50 m-auto pt-5\">
        <h1 class=\"text-center h2 pb-5\">Add operation</h1>

        ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formOperation"]) || array_key_exists("formOperation", $context) ? $context["formOperation"] : (function () { throw new RuntimeError('Variable "formOperation" does not exist.', 13, $this->source); })()), 'form_start');
        echo "

        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formOperation"]) || array_key_exists("formOperation", $context) ? $context["formOperation"] : (function () { throw new RuntimeError('Variable "formOperation" does not exist.', 15, $this->source); })()), "type", [], "any", false, false, false, 15), 'row');
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formOperation"]) || array_key_exists("formOperation", $context) ? $context["formOperation"] : (function () { throw new RuntimeError('Variable "formOperation" does not exist.', 16, $this->source); })()), "category", [], "any", false, false, false, 16), 'row');
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formOperation"]) || array_key_exists("formOperation", $context) ? $context["formOperation"] : (function () { throw new RuntimeError('Variable "formOperation" does not exist.', 17, $this->source); })()), "amount", [], "any", false, false, false, 17), 'row', ["attr" => ["placeholder" => "Amount"]]);
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formOperation"]) || array_key_exists("formOperation", $context) ? $context["formOperation"] : (function () { throw new RuntimeError('Variable "formOperation" does not exist.', 18, $this->source); })()), "content", [], "any", false, false, false, 18), 'row', ["attr" => ["placeholder" => "Transaction description"]]);
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formOperation"]) || array_key_exists("formOperation", $context) ? $context["formOperation"] : (function () { throw new RuntimeError('Variable "formOperation" does not exist.', 19, $this->source); })()), "payementMethod", [], "any", false, false, false, 19), 'row');
        echo "

        <button type=\"submit\" class=\"btn btn-success w-100\">
            ";
        // line 22
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 22, $this->source); })())) {
            // line 23
            echo "                Edit
            ";
        } else {
            // line 25
            echo "                Add
            ";
        }
        // line 27
        echo "        </button>

        ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formOperation"]) || array_key_exists("formOperation", $context) ? $context["formOperation"] : (function () { throw new RuntimeError('Variable "formOperation" does not exist.', 29, $this->source); })()), 'form_end');
        echo "
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "bank_operations/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 29,  134 => 27,  130 => 25,  126 => 23,  124 => 22,  118 => 19,  114 => 18,  110 => 17,  106 => 16,  102 => 15,  97 => 13,  91 => 9,  81 => 8,  62 => 4,  51 => 2,  49 => 6,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %} New operation | MyBankApp{% endblock %}

{% form_theme formOperation 'bootstrap_4_layout.html.twig' %}

{% block body %}

    <section class=\"form w-50 m-auto pt-5\">
        <h1 class=\"text-center h2 pb-5\">Add operation</h1>

        {{ form_start(formOperation) }}

        {{ form_row(formOperation.type) }}
        {{ form_row(formOperation.category) }}
        {{ form_row(formOperation.amount, {'attr': {'placeholder': 'Amount'}}) }}
        {{ form_row(formOperation.content, {'attr': {'placeholder': 'Transaction description'}}) }}
        {{ form_row(formOperation.payementMethod) }}

        <button type=\"submit\" class=\"btn btn-success w-100\">
            {% if editMode %}
                Edit
            {% else %}
                Add
            {% endif %}
        </button>

        {{ form_end(formOperation) }}
    </section>

{% endblock %}", "bank_operations/create.html.twig", "/Users/mgrass/sites/dev/bank_application/templates/bank_operations/create.html.twig");
    }
}
