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

/* bank_operations/show.html.twig */
class __TwigTemplate_950ce81ce8783a8a9cf01250a05faf5570f71d5d134802c33eb08709dffe547c extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "bank_operations/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"operation jumbotron\">

        <div class=\"operation_date\">";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["operation"] ?? null), "date", [], "any", false, false, false, 6), "d/m/Y"), "html", null, true);
        echo "</div>
        <div class=\"operation_montant\">\$";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["operation"] ?? null), "amount", [], "any", false, false, false, 7), "html", null, true);
        echo "</div>
        <div class=\"operation_type\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["operation"] ?? null), "type", [], "any", false, false, false, 8), "nameType", [], "any", false, false, false, 8), "html", null, true);
        echo "</div>
        <div class=\"operation_content\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["operation"] ?? null), "content", [], "any", false, false, false, 9), "html", null, true);
        echo "</div>
        <div class=\"operation_category\">";
        // line 10
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["operation"] ?? null), "category", [], "any", false, false, false, 10), "image", [], "any", false, false, false, 10);
        echo "</div>
        <div class=\"operation_payementMethod\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["operation"] ?? null), "payementMethod", [], "any", false, false, false, 11), "namePayement", [], "any", false, false, false, 11), "html", null, true);
        echo "</div>
        <a class=\"btn btn-primary mt-4\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("operation_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["operation"] ?? null), "id", [], "any", false, false, false, 12)]), "html", null, true);
        echo "\">Edit</a>
        <a class=\"btn btn-danger mt-4\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("operation_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["operation"] ?? null), "id", [], "any", false, false, false, 13)]), "html", null, true);
        echo "\">Delete</a>
        <hr>

    </div>
";
    }

    public function getTemplateName()
    {
        return "bank_operations/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 13,  78 => 12,  74 => 11,  70 => 10,  66 => 9,  62 => 8,  58 => 7,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bank_operations/show.html.twig", "/home/dev-mickael/www/templates/bank_operations/show.html.twig");
    }
}
