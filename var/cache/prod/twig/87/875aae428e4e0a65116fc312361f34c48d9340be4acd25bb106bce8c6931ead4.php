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

/* bank_operations/unlogged_home.html.twig */
class __TwigTemplate_a0eae45b6df4779aa3caecbccf544cfa42d371713153385c54b47a68657f0793 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "bank_operations/unlogged_home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    </div>
    <div class=\"bg-light mt-5\">
        <div class=\"container py-5\">
            <div class=\"row\">
                <div class=\"col-7\">
                    <h2 class=\"h2\">Manage all your datas from one place</h2>
                    <p class=\"lead\">Access personnalized data informations, graphics, statistics & a lot more.</p>
                    <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"btn btn-primary btn-lg px-5 mt-2\">Login</a>
                    <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"btn btn-primary btn-lg px-5 mt-2\">Register</a>
                </div>
                <div class=\"col-5\">
                    <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/home_page-1.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
            </div>
        </div>
    </div>

    <div class=\"win container pt-5\">
        <div class=\"jumbotron  px-5 my-5\">
            <h2 class=\"h2\">What is this app?</h2>
            <p class=\"lead\">Get the most out of this app.</p>


            <div class=\"20 bjbopt-4\">
                <div class=\"mb-3 row\">
                    <div class=\"col-4\">
                        <span class=\"badge badge-secondary m-0\">Submitted data</span>
                    </div>
                    <div class=\"col-8\">
                        <div class=\"progress\">
                            <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%\"></div>
                        </div>
                    </div>
                </div>

                <div class=\"mb-3 row\">
                    <div class=\"col-4\">
                        <span class=\"badge badge-secondary m-0\">Benefit from statistics</span>
                    </div>
                    <div class=\"col-8\">
                        <div class=\"progress\">
                            <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 50%\"></div>
                        </div>
                    </div>
                </div>

                <div class=\"mb-3 row\">
                    <div class=\"col-4\">
                        <span class=\"badge badge-secondary m-0\">Analyze how you consume</span>
                    </div>
                    <div class=\"col-8\">
                        <div class=\"progress\">
                            <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" aria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 30%\"></div>
                        </div>
                    </div>
                </div>

                <div class=\"mb-3 row\">
                    <div class=\"col-4\">
                        <span class=\"badge badge-secondary m-0\">Plan</span>
                    </div>
                    <div class=\"col-8\">
                        <div class=\"progress\">
                            <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" aria-valuenow=\"10\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 10%\"></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>



        <div class=\"row pt-5\">
            <div class=\"col-3\">
                <div class=\"card text-white bg-primary mb-3\" style=\"max-width: 20rem;\">
                    <div class=\"card-header\">Header</div>
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">Primary card title</h4>
                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-3\">
                <div class=\"card text-white bg-primary mb-3\" style=\"max-width: 20rem;\">
                    <div class=\"card-header\">Header</div>
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">Primary card title</h4>
                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-3\">
                <div class=\"card text-white bg-primary mb-3\" style=\"max-width: 20rem;\">
                    <div class=\"card-header\">Header</div>
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">Primary card title</h4>
                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-3\">
                <div class=\"card text-white bg-primary mb-3\" style=\"max-width: 20rem;\">
                    <div class=\"card-header\">Header</div>
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">Primary card title</h4>
                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"jumbotron  px-5 my-5\">
            <h2 class=\"h2\">How to use it?</h2>
            <p class=\"lead\">Quick tour of how it works.</p>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "bank_operations/unlogged_home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 15,  63 => 12,  59 => 11,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bank_operations/unlogged_home.html.twig", "/home/dev-mickael/www/templates/bank_operations/unlogged_home.html.twig");
    }
}
