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
class __TwigTemplate_200814013be9ceb6faa36b95de2c30473171b0c05042ab35760eebb7048ed5be extends Template
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
        // line 6
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["formOperation"] ?? null), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "bank_operations/create.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " New operation | MyBankApp";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "
    <section class=\"form w-50 m-auto pt-5\">
        <h1 class=\"text-center h2 pb-5\">Add operation</h1>

        ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formOperation"] ?? null), 'form_start');
        echo "

        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formOperation"] ?? null), "type", [], "any", false, false, false, 15), 'row');
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formOperation"] ?? null), "category", [], "any", false, false, false, 16), 'row');
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formOperation"] ?? null), "amount", [], "any", false, false, false, 17), 'row', ["attr" => ["placeholder" => "Amount"]]);
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formOperation"] ?? null), "content", [], "any", false, false, false, 18), 'row', ["attr" => ["placeholder" => "Transaction description"]]);
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formOperation"] ?? null), "payementMethod", [], "any", false, false, false, 19), 'row');
        echo "

        <button type=\"submit\" class=\"btn btn-success w-100\">
            ";
        // line 22
        if (($context["editMode"] ?? null)) {
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formOperation"] ?? null), 'form_end');
        echo "
    </section>

";
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
        return array (  108 => 29,  104 => 27,  100 => 25,  96 => 23,  94 => 22,  88 => 19,  84 => 18,  80 => 17,  76 => 16,  72 => 15,  67 => 13,  61 => 9,  57 => 8,  50 => 4,  45 => 2,  43 => 6,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "bank_operations/create.html.twig", "/home/dev-mickael/www/templates/bank_operations/create.html.twig");
    }
}
