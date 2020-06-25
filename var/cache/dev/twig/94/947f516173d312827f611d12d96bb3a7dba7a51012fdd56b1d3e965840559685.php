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

/* bank_operations/showCategories.html.twig */
class __TwigTemplate_3d72af6a88e3034fd9f126704a597ef93d52681dffe23bef82835d4d000bc19b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bank_operations/showCategories.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bank_operations/showCategories.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "bank_operations/showCategories.html.twig", 1);
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
        echo "    <div class=\"categories pt-2\">
        <a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_logged");
        echo "\"><i class=\"lni lni-shift-left\"></i> Return to homepage</a>
        <div class=\"jumbotron mt-4\">
            <h2 class=\"h2\">Manage your categories here</h2>
            <p class=\"lead\">Quickly, you can edit or delete any category</p>
            <a class=\"btn btn-primary d-flex align-items-center justify-content-center w-50\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_add");
        echo "\"><i class=\"lni lni-plus mr-2\"></i> Add category</a>
        </div>
        <div class=\"pb-5 px-3 row\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categories"]) {
            // line 13
            echo "                    <div class=\"category mx-auto shadow-sm border jumbotron rounded col-6 \">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"category_image mr-2\">";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["categories"], "image", [], "any", false, false, false, 15);
            echo "</div>
                            <h3 class=\"category_title\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categories"], "title", [], "any", false, false, false, 16), "html", null, true);
            echo "</h3>
                        </div>
                        <a class=\"btn btn-outline-primary mt-4 d-flex align-items-center justify-content-center\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["categories"], "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\"><i class=\"lni lni-pencil-alt mr-2\"></i> Edit</a>
                        <a class=\"btn btn-danger mt-4 d-flex align-items-center justify-content-center\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["categories"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\"><i class=\"lni lni-cross-circle mr-2\"></i> Delete</a>
                    </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categories'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "bank_operations/showCategories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 23,  105 => 19,  101 => 18,  96 => 16,  92 => 15,  88 => 13,  84 => 12,  78 => 9,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"categories pt-2\">
        <a href=\"{{ path(\"home_logged\") }}\"><i class=\"lni lni-shift-left\"></i> Return to homepage</a>
        <div class=\"jumbotron mt-4\">
            <h2 class=\"h2\">Manage your categories here</h2>
            <p class=\"lead\">Quickly, you can edit or delete any category</p>
            <a class=\"btn btn-primary d-flex align-items-center justify-content-center w-50\" href=\"{{ path(\"category_add\") }}\"><i class=\"lni lni-plus mr-2\"></i> Add category</a>
        </div>
        <div class=\"pb-5 px-3 row\">
            {% for categories in category %}
                    <div class=\"category mx-auto shadow-sm border jumbotron rounded col-6 \">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"category_image mr-2\">{{ categories.image | raw }}</div>
                            <h3 class=\"category_title\">{{ categories.title }}</h3>
                        </div>
                        <a class=\"btn btn-outline-primary mt-4 d-flex align-items-center justify-content-center\" href=\"{{ path('category_edit', {'id': categories.id}) }}\"><i class=\"lni lni-pencil-alt mr-2\"></i> Edit</a>
                        <a class=\"btn btn-danger mt-4 d-flex align-items-center justify-content-center\" href=\"{{ path('category_delete', {'id': categories.id}) }}\"><i class=\"lni lni-cross-circle mr-2\"></i> Delete</a>
                    </div>

            {% endfor %}

        </div>
    </div>
{% endblock %}", "bank_operations/showCategories.html.twig", "/Users/mgrass/sites/dev/bank_application/templates/bank_operations/showCategories.html.twig");
    }
}
