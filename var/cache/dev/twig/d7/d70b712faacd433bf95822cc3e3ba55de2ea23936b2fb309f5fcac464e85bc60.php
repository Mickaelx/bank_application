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

/* bank_operations/category.html.twig */
class __TwigTemplate_041d58ff3ae520df46cc83e38679668524fef4316144e11bd03574a5843fa603 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascript' => [$this, 'block_javascript'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bank_operations/category.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bank_operations/category.html.twig"));

        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formCategory"]) || array_key_exists("formCategory", $context) ? $context["formCategory"] : (function () { throw new RuntimeError('Variable "formCategory" does not exist.', 5, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "bank_operations/category.html.twig", 1);
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

        echo " New category | MyBankApp";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 7
        echo "<script>
    function copyToClipboard() {
        let copyText = document.getElementById(\"toCopy\");
        copyText.select();
        copyText.setSelectionRange(0, 99999); /*For mobile devices*/
        document.execCommand(\"copy\");
    }
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "
    <section class=\"form w-50 m-auto pt-5\">

        ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCategory"]) || array_key_exists("formCategory", $context) ? $context["formCategory"] : (function () { throw new RuntimeError('Variable "formCategory" does not exist.', 20, $this->source); })()), 'form_start');
        echo "
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCategory"]) || array_key_exists("formCategory", $context) ? $context["formCategory"] : (function () { throw new RuntimeError('Variable "formCategory" does not exist.', 21, $this->source); })()), "title", [], "any", false, false, false, 21), 'row');
        echo "
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCategory"]) || array_key_exists("formCategory", $context) ? $context["formCategory"] : (function () { throw new RuntimeError('Variable "formCategory" does not exist.', 22, $this->source); })()), "image", [], "any", false, false, false, 22), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-success w-100\">
                ";
        // line 24
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 24, $this->source); })())) {
            // line 25
            echo "                    Edit category
                ";
        } else {
            // line 27
            echo "                    Add category
                ";
        }
        // line 29
        echo "            </button>
        ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCategory"]) || array_key_exists("formCategory", $context) ? $context["formCategory"] : (function () { throw new RuntimeError('Variable "formCategory" does not exist.', 30, $this->source); })()), 'form_end');
        echo "

    </section>

    <div class=\"jumbotron mt-5\">
        <h2 class=\"h2\">Icon / image usage</h2>
        <p class=\"lead\">We choose to use <a href=\"https://lineicons.com/icons/\">LineIcons</a> library for icons. We suggest you do the same if you wanna keep
        it as nice as possible. Here are some, hope it'll help!
        </p>
        <div class=\"d-flex align-items-center pt-3\">
            <i class=\"lni lni-ticket-alt mr-5\" style=\"font-size: 40px!important\"></i>
            <div class=\"d-flex align-items-center\">
                <input type=\"text\" class=\" border bg-dark text-white rounded px-3 p-1\" id=\"toCopy\" value=\"&lt;i class='\\lni lni-ticket-alt'\\&gt;&lt;/i&gt;\">
                <button class=\"btn btn-outline-dark ml-3\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Copy to clickboard\" onClick=\"copyToClipboard()\">Copy to clipboard</button>
            </div>
        </div>
        <div class=\"d-flex align-items-center pt-3\">
            <i class=\"lni lni-mobile mr-5\" style=\"font-size: 40px!important\"></i>
            <div class=\"d-flex align-items-center\">
                <input type=\"text\" class=\" border bg-dark text-white rounded px-3 p-1\" id=\"toCopy\" value=\"&lt;i class='\\lni lni-mobile'\\&gt;&lt;/i&gt;\">
                <button class=\"btn btn-outline-dark ml-3\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Copy to clickboard\" onClick=\"copyToClipboard()\">Copy to clipboard</button>
            </div>
        </div>
        <div class=\"d-flex align-items-center pt-3\">
            <i class=\"lni lni-cart mr-5\" style=\"font-size: 40px!important\"></i>
            <div class=\"d-flex align-items-center\">
                <input type=\"text\" class=\" border bg-dark text-white rounded px-3 p-1\" id=\"toCopy\" value=\"&lt;i class='\\lni lni-cart'\\&gt;&lt;/i&gt;\">
                <button class=\"btn btn-outline-dark ml-3\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Copy to clickboard\" onClick=\"copyToClipboard()\">Copy to clipboard</button>
            </div>
        </div>
        <div class=\"d-flex align-items-center pt-3\">
            <i class=\"lni lni-revenue mr-5\" style=\"font-size: 40px!important\"></i>
            <div class=\"d-flex align-items-center\">
                <input type=\"text\" class=\" border bg-dark text-white rounded px-3 p-1\" id=\"toCopy\" value=\"&lt;i class='\\lni lni-revenue'\\&gt;&lt;/i&gt;\">
                <button class=\"btn btn-outline-dark ml-3\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Copy to clickboard\" onClick=\"copyToClipboard()\">Copy to clipboard</button>
            </div>
        </div>
        <div class=\"d-flex align-items-center pt-3\">
            <i class=\"lni lni-shift-left mr-5\" style=\"font-size: 40px!important\"></i>
            <div class=\"d-flex align-items-center\">
                <input type=\"text\" class=\" border bg-dark text-white rounded px-3 p-1\" id=\"toCopy\" value=\"&lt;i class='\\lni lni-shift-left'\\&gt;&lt;/i&gt;\">
                <button class=\"btn btn-outline-dark ml-3\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Copy to clickboard\" onClick=\"copyToClipboard()\">Copy to clipboard</button>
            </div>
        </div>
        <div class=\"d-flex align-items-center pt-3\">
            <i class=\"lni lni-coffee-cup mr-5\" style=\"font-size: 40px!important\"></i>
            <div class=\"d-flex align-items-center\">
                <input type=\"text\" class=\" border bg-dark text-white rounded px-3 p-1\" id=\"toCopy\" value=\"&lt;i class='\\lni lni-coffee-cup'\\&gt;&lt;/i&gt;\">
                <button class=\"btn btn-outline-dark ml-3\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Copy to clickboard\" onClick=\"copyToClipboard()\">Copy to clipboard</button>
            </div>
        </div>
        <div class=\"d-flex align-items-center pt-3\">
            <i class=\"lni lni-add-files mr-5\" style=\"font-size: 40px!important\"></i>
            <div class=\"d-flex align-items-center\">
                <input type=\"text\" class=\" border bg-dark text-white rounded px-3 p-1\" id=\"toCopy\" value=\"&lt;i class='\\lni lni-add-files'\\&gt;&lt;/i&gt;\">
                <button class=\"btn btn-outline-dark ml-3\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Copy to clickboard\" onClick=\"copyToClipboard()\">Copy to clipboard</button>
            </div>
        </div>
        <div class=\"d-flex align-items-center pt-3\">
            <i class=\"lni lni-aws mr-5\" style=\"font-size: 40px!important\"></i>
            <div class=\"d-flex align-items-center\">
                <input type=\"text\" class=\" border bg-dark text-white rounded px-3 p-1\" id=\"toCopy\" value=\"&lt;i class='\\lni lni-aws'\\&gt;&lt;/i&gt;\">
                <button class=\"btn btn-outline-dark ml-3\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Copy to clickboard\" onClick=\"copyToClipboard()\">Copy to clipboard</button>
            </div>
        </div>
        <div class=\"d-flex align-items-center pt-3\">
            <i class=\"lni lni-cog mr-5\" style=\"font-size: 40px!important\"></i>
            <div class=\"d-flex align-items-center\">
                <input type=\"text\" class=\" border bg-dark text-white rounded px-3 p-1\" id=\"toCopy\" value=\"&lt;i class='\\lni lni-cog'\\&gt;&lt;/i&gt;\">
                <button class=\"btn btn-outline-dark ml-3\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Copy to clickboard\" onClick=\"copyToClipboard()\">Copy to clipboard</button>
            </div>
        </div>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "bank_operations/category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 30,  148 => 29,  144 => 27,  140 => 25,  138 => 24,  133 => 22,  129 => 21,  125 => 20,  120 => 17,  110 => 16,  92 => 7,  82 => 6,  63 => 3,  52 => 1,  50 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} New category | MyBankApp{% endblock %}

{% form_theme formCategory 'bootstrap_4_layout.html.twig' %}
{% block javascript %}
<script>
    function copyToClipboard() {
        let copyText = document.getElementById(\"toCopy\");
        copyText.select();
        copyText.setSelectionRange(0, 99999); /*For mobile devices*/
        document.execCommand(\"copy\");
    }
</script>
{% endblock %}
{% block body %}

    <section class=\"form w-50 m-auto pt-5\">

        {{ form_start(formCategory) }}
            {{ form_row(formCategory.title) }}
            {{ form_row(formCategory.image) }}
            <button type=\"submit\" class=\"btn btn-success w-100\">
                {% if editMode %}
                    Edit category
                {% else %}
                    Add category
                {% endif %}
            </button>
        {{ form_end(formCategory) }}

    </section>

    <div class=\"jumbotron mt-5\">
        <h2 class=\"h2\">Icon / image usage</h2>
        <p class=\"lead\">We choose to use <a href=\"https://lineicons.com/icons/\">LineIcons</a> library for icons. We suggest you do the same if you wanna keep
        it as nice as possible. Here are some, hope it'll help!
        </p>
        <div class=\"d-flex align-items-center pt-3\">
            <i class=\"lni lni-ticket-alt mr-5\" style=\"font-size: 40px!important\"></i>
            <div class=\"d-flex align-items-center\">
                <input type=\"text\" class=\" border bg-dark text-white rounded px-3 p-1\" id=\"toCopy\" value=\"&lt;i class='\\lni lni-ticket-alt'\\&gt;&lt;/i&gt;\">
                <button class=\"btn btn-outline-dark ml-3\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Copy to clickboard\" onClick=\"copyToClipboard()\">Copy to clipboard</button>
            </div>
        </div>
        <div class=\"d-flex align-items-center pt-3\">
            <i class=\"lni lni-mobile mr-5\" style=\"font-size: 40px!important\"></i>
            <div class=\"d-flex align-items-center\">
                <input type=\"text\" class=\" border bg-dark text-white rounded px-3 p-1\" id=\"toCopy\" value=\"&lt;i class='\\lni lni-mobile'\\&gt;&lt;/i&gt;\">
                <button class=\"btn btn-outline-dark ml-3\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Copy to clickboard\" onClick=\"copyToClipboard()\">Copy to clipboard</button>
            </div>
        </div>
        <div class=\"d-flex align-items-center pt-3\">
            <i class=\"lni lni-cart mr-5\" style=\"font-size: 40px!important\"></i>
            <div class=\"d-flex align-items-center\">
                <input type=\"text\" class=\" border bg-dark text-white rounded px-3 p-1\" id=\"toCopy\" value=\"&lt;i class='\\lni lni-cart'\\&gt;&lt;/i&gt;\">
                <button class=\"btn btn-outline-dark ml-3\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Copy to clickboard\" onClick=\"copyToClipboard()\">Copy to clipboard</button>
            </div>
        </div>
        <div class=\"d-flex align-items-center pt-3\">
            <i class=\"lni lni-revenue mr-5\" style=\"font-size: 40px!important\"></i>
            <div class=\"d-flex align-items-center\">
                <input type=\"text\" class=\" border bg-dark text-white rounded px-3 p-1\" id=\"toCopy\" value=\"&lt;i class='\\lni lni-revenue'\\&gt;&lt;/i&gt;\">
                <button class=\"btn btn-outline-dark ml-3\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Copy to clickboard\" onClick=\"copyToClipboard()\">Copy to clipboard</button>
            </div>
        </div>
        <div class=\"d-flex align-items-center pt-3\">
            <i class=\"lni lni-shift-left mr-5\" style=\"font-size: 40px!important\"></i>
            <div class=\"d-flex align-items-center\">
                <input type=\"text\" class=\" border bg-dark text-white rounded px-3 p-1\" id=\"toCopy\" value=\"&lt;i class='\\lni lni-shift-left'\\&gt;&lt;/i&gt;\">
                <button class=\"btn btn-outline-dark ml-3\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Copy to clickboard\" onClick=\"copyToClipboard()\">Copy to clipboard</button>
            </div>
        </div>
        <div class=\"d-flex align-items-center pt-3\">
            <i class=\"lni lni-coffee-cup mr-5\" style=\"font-size: 40px!important\"></i>
            <div class=\"d-flex align-items-center\">
                <input type=\"text\" class=\" border bg-dark text-white rounded px-3 p-1\" id=\"toCopy\" value=\"&lt;i class='\\lni lni-coffee-cup'\\&gt;&lt;/i&gt;\">
                <button class=\"btn btn-outline-dark ml-3\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Copy to clickboard\" onClick=\"copyToClipboard()\">Copy to clipboard</button>
            </div>
        </div>
        <div class=\"d-flex align-items-center pt-3\">
            <i class=\"lni lni-add-files mr-5\" style=\"font-size: 40px!important\"></i>
            <div class=\"d-flex align-items-center\">
                <input type=\"text\" class=\" border bg-dark text-white rounded px-3 p-1\" id=\"toCopy\" value=\"&lt;i class='\\lni lni-add-files'\\&gt;&lt;/i&gt;\">
                <button class=\"btn btn-outline-dark ml-3\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Copy to clickboard\" onClick=\"copyToClipboard()\">Copy to clipboard</button>
            </div>
        </div>
        <div class=\"d-flex align-items-center pt-3\">
            <i class=\"lni lni-aws mr-5\" style=\"font-size: 40px!important\"></i>
            <div class=\"d-flex align-items-center\">
                <input type=\"text\" class=\" border bg-dark text-white rounded px-3 p-1\" id=\"toCopy\" value=\"&lt;i class='\\lni lni-aws'\\&gt;&lt;/i&gt;\">
                <button class=\"btn btn-outline-dark ml-3\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Copy to clickboard\" onClick=\"copyToClipboard()\">Copy to clipboard</button>
            </div>
        </div>
        <div class=\"d-flex align-items-center pt-3\">
            <i class=\"lni lni-cog mr-5\" style=\"font-size: 40px!important\"></i>
            <div class=\"d-flex align-items-center\">
                <input type=\"text\" class=\" border bg-dark text-white rounded px-3 p-1\" id=\"toCopy\" value=\"&lt;i class='\\lni lni-cog'\\&gt;&lt;/i&gt;\">
                <button class=\"btn btn-outline-dark ml-3\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Copy to clickboard\" onClick=\"copyToClipboard()\">Copy to clipboard</button>
            </div>
        </div>

    </div>
{% endblock %}", "bank_operations/category.html.twig", "/Users/mgrass/sites/dev/bank_application/templates/bank_operations/category.html.twig");
    }
}
