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

/* bank_operations/showPayementMethod.html.twig */
class __TwigTemplate_500accf74fe739dc34892db15bca371ca7f88b737a6da61312e5dcf74c9b711d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bank_operations/showPayementMethod.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bank_operations/showPayementMethod.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "bank_operations/showPayementMethod.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"payementMethod pt-2\">
        <a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_logged");
        echo "\"><i class=\"lni lni-shift-left\"></i> Return to homepage</a>
        <div class=\"jumbotron mt-4\">
            <h2 class=\"h2\">Manage your payement method here</h2>
            <p class=\"lead\">Quickly, you can edit or delete any payement method</p>
            <a class=\"btn btn-primary d-flex align-items-center justify-content-center w-50\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payementMethod_add");
        echo "\"><i class=\"lni lni-plus mr-2\"></i> Add category</a>
        </div>
        <div class=\"pb-5 px-3 row\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["payementMethod"]) || array_key_exists("payementMethod", $context) ? $context["payementMethod"] : (function () { throw new RuntimeError('Variable "payementMethod" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["payementMethods"]) {
            // line 13
            echo "                <div class=\"category mx-auto shadow-sm border jumbotron rounded col-4 \">
                        <div class=\"category_image mr-2\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payementMethods"], "namePayement", [], "any", false, false, false, 14), "html", null, true);
            echo "</div>

                    <a class=\"btn btn-outline-primary mt-4 d-flex align-items-center justify-content-center\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payementMethod_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["payementMethods"], "id", [], "any", false, false, false, 16)]), "html", null, true);
            echo "\"><i class=\"lni lni-pencil-alt mr-2\"></i> Edit</a>
                    <a class=\"btn btn-danger mt-4 d-flex align-items-center justify-content-center\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payementMethod_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["payementMethods"], "id", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\"><i class=\"lni lni-cross-circle mr-2\"></i> Delete</a>
                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payementMethods'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "bank_operations/showPayementMethod.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 21,  100 => 17,  96 => 16,  91 => 14,  88 => 13,  84 => 12,  78 => 9,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"payementMethod pt-2\">
        <a href=\"{{ path(\"home_logged\") }}\"><i class=\"lni lni-shift-left\"></i> Return to homepage</a>
        <div class=\"jumbotron mt-4\">
            <h2 class=\"h2\">Manage your payement method here</h2>
            <p class=\"lead\">Quickly, you can edit or delete any payement method</p>
            <a class=\"btn btn-primary d-flex align-items-center justify-content-center w-50\" href=\"{{ path(\"payementMethod_add\") }}\"><i class=\"lni lni-plus mr-2\"></i> Add category</a>
        </div>
        <div class=\"pb-5 px-3 row\">
            {% for payementMethods in payementMethod %}
                <div class=\"category mx-auto shadow-sm border jumbotron rounded col-4 \">
                        <div class=\"category_image mr-2\">{{ payementMethods.namePayement }}</div>

                    <a class=\"btn btn-outline-primary mt-4 d-flex align-items-center justify-content-center\" href=\"{{ path('payementMethod_edit', {'id': payementMethods.id}) }}\"><i class=\"lni lni-pencil-alt mr-2\"></i> Edit</a>
                    <a class=\"btn btn-danger mt-4 d-flex align-items-center justify-content-center\" href=\"{{ path('payementMethod_delete', {'id': payementMethods.id}) }}\"><i class=\"lni lni-cross-circle mr-2\"></i> Delete</a>
                </div>

            {% endfor %}

        </div>
    </div>
{% endblock %}", "bank_operations/showPayementMethod.html.twig", "/Users/mgrass/sites/dev/bank_application/templates/bank_operations/showPayementMethod.html.twig");
    }
}
