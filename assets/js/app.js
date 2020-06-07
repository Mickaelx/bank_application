/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import '../css/app.css';

// Need jQuery? Install it with "yarn add jquery", then uncomment to import it.
// import $ from 'jquery';

catchData().then(response => console.log('All good, data fetched!')).catch(error => {
    console.log(error);
})

async function catchData() {

    const xLabelsDate = [];
    const yOperationsPlus = [];
    const yOperationsMinus = [];
    const yContent = [];
    const yCategory = [];
    const response = await fetch('/operationsJsonified');
    const data = await response.json();
    console.log(data);

    data.forEach(operation => {
        const amount = operation.amount;
        if (operation.amount > 0) {
            const amountPlus = operation.amount

            yOperationsPlus.push(amountPlus);

        } else {
            const amountMinus = operation.amount
            yOperationsMinus.push(amountMinus);

        }

        const UNIXTimestamp = operation.date.timestamp;
        const date = new Date(UNIXTimestamp * 1000);
        const time = date.toDateString();
        xLabelsDate.push(time);

        const category = operation.category.title;
        yCategory.push(category);
        const content = operation.content;
        yContent.push(content);


    })
    return {
        yOperationsPlus,
        yOperationsMinus,
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
                    label: "Positive amount",
                    fill: false,
                    borderColor: 'rgba(255, 0, 0, .7)',
                    data: data.yOperationsMinus
                }, {
                    label: "Positive amount",
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
        type: 'bar',
        data: {
            labels: data.xLabelsDate,
            datasets: [
                {
                    label: "Positive amount",
                    backgroundColor: 'rgba(255, 0, 0, .7)',
                    data: data.yOperationsMinus

                }, {
                    label: "Positive amount",
                    backgroundColor: 'rgba(50, 205, 50, .7)',
                    data: data.yOperationsPlus
                }
            ]
        },


        options: {}
    });
}

async function createChart3() {
    const data = await catchData();

    const ctx = document.getElementById("myChart3").getContext('2d');
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