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
class __TwigTemplate_48460ad55031b9efb001b658e47bc5709d00bdab9fdc519faf375ba55e672a67 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "bank_operations/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Home | MyBankApp";
    }

    // line 5
    public function block_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "<section class=\"operations  pb-0\">

    <div class=\"jumbotron text-center rounded p-3\">
        <span>current sold:</span>
        <div class=\"amount-global h2\">\$";
        // line 14
        echo twig_escape_filter($this->env, ($context["totalSumAmount"] ?? null), "html", null, true);
        echo "</div>
    </div>

    <div class=\"row\">
        <div class=\"col-3 border-right\">
            ";
        // line 19
        $this->loadTemplate("bank_operations/_filter.html.twig", "bank_operations/index.html.twig", 19)->display(twig_to_array(["form" => ($context["form"] ?? null)]));
        // line 20
        echo "        </div>

        <div class=\"col-9 operation mx-auto pl-5\">
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["operations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["operation"]) {
            // line 24
            echo "                    <a class=\"nav-link p-0\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("operation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["operation"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\">
                        <div class=\"date text-muted small pb-2 \">
                            <div class=\"operation_date\">";
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
                                    <div class=\"operation_category text-muted\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["operation"], "category", [], "any", false, false, false, 36), "title", [], "any", false, false, false, 36), "html", null, true);
            echo "</div>
                                    <div class=\"operation_montant font-weight-bold\">\$";
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
        // line 44
        echo "        </div>
    </div>

</section>
";
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
        return array (  132 => 44,  119 => 37,  115 => 36,  110 => 34,  104 => 31,  96 => 26,  90 => 24,  86 => 23,  81 => 20,  79 => 19,  71 => 14,  65 => 10,  61 => 9,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bank_operations/index.html.twig", "/home/dev-mickael/www/templates/bank_operations/index.html.twig");
    }
}
