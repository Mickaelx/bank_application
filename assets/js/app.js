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

document.addEventListener("DOMContentLoaded", function() {
    var toLoad = document.querySelector("#toLoad");
    toLoad.classList.add("loader");

});

function getData() {
    let operations = [];
    let request = new XMLHttpRequest();
    request.open('GET', 'http://127.0.0.1:8000/operationsJsonified', false);
    request.onload = function () {
        if (this.status == 200) {
            operations = JSON.parse(this.responseText);
        }
    };
    request.send();
    return operations;
}

let data = getData();




    for(let i = 0; i < data.length; i++) {
        var amount = [data[i].amount];
        var content = data[i].content;
    }



    var ctx = document.getElementById('graph1').getContext('2d');

    var graph1 = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: content,
            datasets: [
                {
                    label: "D",
                    backgroundColor: 'red',
                    data: amount
                }
            ]
        },
        options: {
            responsive: true
        }
    });


