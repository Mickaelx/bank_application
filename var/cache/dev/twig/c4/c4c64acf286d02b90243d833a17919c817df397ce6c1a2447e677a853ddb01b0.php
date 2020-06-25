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

/* bank_operations/stats.html.twig */
class __TwigTemplate_12c5a9007c46762511da2ce23e2a631ef3c507f6bbf4fe8455322d9bcb56becb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bank_operations/stats.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bank_operations/stats.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "bank_operations/stats.html.twig", 1);
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
        echo "\t<div class=\"bg-dark p-5 m-0 rounded\">
\t\t<h3 class=\"h3 text-white\">Expense & income</h3>

\t\t<canvas id=\"myChart\"></canvas>
\t</div>
\t<div class=\"bg-dark p-5 mt-5 m-0 rounded\">
\t\t<h3 class=\"h3 text-white\">Statistics by year</h3>

\t\t<canvas id=\"myChart2\"></canvas>
\t</div>

\t<div class=\"bg-dark p-5 mt-5 m-0 rounded\">
\t\t<h3 class=\"h3 text-white\">Statistics by categories</h3>
\t\t<canvas id=\"myChart3\"></canvas>
\t</div>


\t<script>
\t\tcatchData().then(response => console.log('All good, data fetched!')).catch(error => {
console.log(error);
})

async function catchData() {

const xLabelsDate = [];
const yOperationsPlus = [];
const yOperationsMinus = [];
const yOperations = [];
const yContent = [];
const yCategory = [];
const response = await fetch('/operationsJsonified');
const data = await response.json();
console.log(data);

data.forEach(operation => {
const amount = operation.amount;
yOperations.push(amount);
if (operation.amount > 0) {
const amountPlus = operation.amount

yOperationsPlus.push(amountPlus);

} else {
const amountMinus = operation.amount
yOperationsMinus.push(amountMinus);

}


const UNIXTimestamp = operation.date.timestamp;
date = new Date(UNIXTimestamp * 1000);
time = date.toDateString();
xLabelsDate.push(time);

const category = operation.category.title;
yCategory.push(category);
const content = operation.content;
yContent.push(content);


})
return {
yOperationsPlus,
yOperationsMinus,
yOperations,
xLabelsDate,
yCategory,
yContent
}
}


createChart();
createChart2();
createChart3();


async function createChart() { // call en await la function qui récupère les data et attend qu'elles soient récup
const data = await catchData();
const ctx = document.getElementById('myChart').getContext('2d');
const chart = new Chart(ctx, {
type: 'line',


data: {
labels: data.xLabelsDate,


datasets: [
{
label: \"Positive amount\",
fill: false,
borderColor: 'rgba(255, 0, 0, .7)',
data: data.yOperationsMinus

}, {
label: \"Positive amount\",
fill: false,
borderColor: 'rgba(50, 205, 50, .7)',
data: data.yOperationsPlus

}
]
},


options: {}
});
}

async function createChart2() { // call en await la function qui récupère les data et attend qu'elles soient récup
const data = await catchData();
const ctx = document.getElementById('myChart2').getContext('2d');
const chart = new Chart(ctx, {
type: 'radar',
data: {
labels: data.yCategory,


datasets: [
{
label: data.xLabelsDate,

backgroundColor: 'rgba(255, 255, 0, .7)',
data: data.yOperations

}
]
},


options: {}
});
}

async function createChart3() {
const data = await catchData();

const ctx = document.getElementById(\"myChart3\").getContext('2d');
var myPieChart = new Chart(ctx, {
data: {
datasets: [
{
data: data.yOperationsMinus,
backgroundColor: [
'rgb(50, 205, 50)',
'rgb(255, 0, 0)',
'rgb(238,188,188)',
'rgb(238,222,171)',
'rgb(200,236,181)',
'rgb(188,194,242',
'rgb(232,182,238)'

]


}


],
labels: data.yCategory

},
type: 'doughnut'
});
}
\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "bank_operations/stats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<div class=\"bg-dark p-5 m-0 rounded\">
\t\t<h3 class=\"h3 text-white\">Expense & income</h3>

\t\t<canvas id=\"myChart\"></canvas>
\t</div>
\t<div class=\"bg-dark p-5 mt-5 m-0 rounded\">
\t\t<h3 class=\"h3 text-white\">Statistics by year</h3>

\t\t<canvas id=\"myChart2\"></canvas>
\t</div>

\t<div class=\"bg-dark p-5 mt-5 m-0 rounded\">
\t\t<h3 class=\"h3 text-white\">Statistics by categories</h3>
\t\t<canvas id=\"myChart3\"></canvas>
\t</div>


\t<script>
\t\tcatchData().then(response => console.log('All good, data fetched!')).catch(error => {
console.log(error);
})

async function catchData() {

const xLabelsDate = [];
const yOperationsPlus = [];
const yOperationsMinus = [];
const yOperations = [];
const yContent = [];
const yCategory = [];
const response = await fetch('/operationsJsonified');
const data = await response.json();
console.log(data);

data.forEach(operation => {
const amount = operation.amount;
yOperations.push(amount);
if (operation.amount > 0) {
const amountPlus = operation.amount

yOperationsPlus.push(amountPlus);

} else {
const amountMinus = operation.amount
yOperationsMinus.push(amountMinus);

}


const UNIXTimestamp = operation.date.timestamp;
date = new Date(UNIXTimestamp * 1000);
time = date.toDateString();
xLabelsDate.push(time);

const category = operation.category.title;
yCategory.push(category);
const content = operation.content;
yContent.push(content);


})
return {
yOperationsPlus,
yOperationsMinus,
yOperations,
xLabelsDate,
yCategory,
yContent
}
}


createChart();
createChart2();
createChart3();


async function createChart() { // call en await la function qui récupère les data et attend qu'elles soient récup
const data = await catchData();
const ctx = document.getElementById('myChart').getContext('2d');
const chart = new Chart(ctx, {
type: 'line',


data: {
labels: data.xLabelsDate,


datasets: [
{
label: \"Positive amount\",
fill: false,
borderColor: 'rgba(255, 0, 0, .7)',
data: data.yOperationsMinus

}, {
label: \"Positive amount\",
fill: false,
borderColor: 'rgba(50, 205, 50, .7)',
data: data.yOperationsPlus

}
]
},


options: {}
});
}

async function createChart2() { // call en await la function qui récupère les data et attend qu'elles soient récup
const data = await catchData();
const ctx = document.getElementById('myChart2').getContext('2d');
const chart = new Chart(ctx, {
type: 'radar',
data: {
labels: data.yCategory,


datasets: [
{
label: data.xLabelsDate,

backgroundColor: 'rgba(255, 255, 0, .7)',
data: data.yOperations

}
]
},


options: {}
});
}

async function createChart3() {
const data = await catchData();

const ctx = document.getElementById(\"myChart3\").getContext('2d');
var myPieChart = new Chart(ctx, {
data: {
datasets: [
{
data: data.yOperationsMinus,
backgroundColor: [
'rgb(50, 205, 50)',
'rgb(255, 0, 0)',
'rgb(238,188,188)',
'rgb(238,222,171)',
'rgb(200,236,181)',
'rgb(188,194,242',
'rgb(232,182,238)'

]


}


],
labels: data.yCategory

},
type: 'doughnut'
});
}
\t</script>
{% endblock %}
", "bank_operations/stats.html.twig", "/Users/mgrass/sites/dev/bank_application/templates/bank_operations/stats.html.twig");
    }
}
