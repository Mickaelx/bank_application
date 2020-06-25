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

/* bank_operations/index.html.twig */
class __TwigTemplate_1e9cf1f96f7ea975a680234dd950eddb86de9b3db643a91cdafb2925269d05f6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'alert' => [$this, 'block_alert'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bank_operations/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bank_operations/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "bank_operations/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Home | MyBankApp";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "alert"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "alert"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<section class=\"operations  pb-0\">

    <div class=\"jumbotron text-center rounded p-3\">
        <span>current sold:</span>
        <div class=\"amount-global h2\">\$";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["totalSumAmount"]) || array_key_exists("totalSumAmount", $context) ? $context["totalSumAmount"] : (function () { throw new RuntimeError('Variable "totalSumAmount" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "</div>
    </div>

    <div class=\"row\">
        <div class=\"col-3 border-right\">
            ";
        // line 19
        $this->loadTemplate("bank_operations/_filter.html.twig", "bank_operations/index.html.twig", 19)->display(twig_to_array(["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })())]));
        // line 20
        echo "        </div>

        <div class=\"col-9 operation mx-auto pl-5\">
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["operations"]) || array_key_exists("operations", $context) ? $context["operations"] : (function () { throw new RuntimeError('Variable "operations" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["operation"]) {
            // line 24
            echo "                    <a class=\"nav-link p-0\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("operation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["operation"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\">
                        <div class=\"date text-muted small pb-2 \">
                            <div id=\"operation__date\"class=\"operation_date\">";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "date", [], "any", false, false, false, 26), "d/m/Y"), "html", null, true);
            echo "</div>
                        </div>

                        <div class=\"row bg-dark shadow-sm text-white p-3 rounded\">
                            <div class=\"col-1 d-flex align-items-center\">
                                <div class=\"operation_category\">";
            // line 31
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["operation"], "category", [], "any", false, false, false, 31), "image", [], "any", false, false, false, 31);
            echo "</div>
                            </div>
                            <div class=\"col\">
                                <div class=\"operation_content\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "content", [], "any", false, false, false, 34), "html", null, true);
            echo "</div>
                                <div class=\"d-flex justify-content-between\">
                                    <div id=\"operation__title\" class=\"operation_category text-muted\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["operation"], "category", [], "any", false, false, false, 36), "title", [], "any", false, false, false, 36), "html", null, true);
            echo "</div>
                                    <div id=\"operation__amount\" class=\"operation_montant font-weight-bold\">\$";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "amount", [], "any", false, false, false, 37), "html", null, true);
            echo "</div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </a>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </div>
    </div>

</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "bank_operations/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 45,  161 => 37,  157 => 36,  152 => 34,  146 => 31,  138 => 26,  132 => 24,  128 => 23,  123 => 20,  121 => 19,  113 => 14,  107 => 10,  97 => 9,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home | MyBankApp{% endblock %}

{% block alert %}
{% endblock %}


{% block body %}
<section class=\"operations  pb-0\">

    <div class=\"jumbotron text-center rounded p-3\">
        <span>current sold:</span>
        <div class=\"amount-global h2\">\${{ totalSumAmount }}</div>
    </div>

    <div class=\"row\">
        <div class=\"col-3 border-right\">
            {% include 'bank_operations/_filter.html.twig' with {form: form} only %}
        </div>

        <div class=\"col-9 operation mx-auto pl-5\">
                {% for operation in operations %}
                    <a class=\"nav-link p-0\" href=\"{{ path('operation_show', {'id': operation.id}) }}\">
                        <div class=\"date text-muted small pb-2 \">
                            <div id=\"operation__date\"class=\"operation_date\">{{ operation.date | date('d/m/Y') }}</div>
                        </div>

                        <div class=\"row bg-dark shadow-sm text-white p-3 rounded\">
                            <div class=\"col-1 d-flex align-items-center\">
                                <div class=\"operation_category\">{{ operation.category.image | raw }}</div>
                            </div>
                            <div class=\"col\">
                                <div class=\"operation_content\">{{ operation.content }}</div>
                                <div class=\"d-flex justify-content-between\">
                                    <div id=\"operation__title\" class=\"operation_category text-muted\">{{ operation.category.title }}</div>
                                    <div id=\"operation__amount\" class=\"operation_montant font-weight-bold\">\${{ operation.amount }}</div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </a>

                {% endfor %}
        </div>
    </div>

</section>
{% endblock %}
", "bank_operations/index.html.twig", "/Users/mgrass/sites/dev/bank_application/templates/bank_operations/index.html.twig");
    }
}
