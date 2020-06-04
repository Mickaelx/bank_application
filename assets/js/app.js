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

window.onload = function() {
    var ctx = document.getElementById('graph1').getContext('2d');

    var graph1 = new Chart(ctx, {
        data: {
            labels: operation.date,
            datasets: [
                {
                    label: "D",
                    backgroundColor: 'red',
                    data: operation
                }
            ]
        },
        options: {
            responsive: true
        }
    });



    $.ajax({
        method: 'GET',
        url: 'Operations.php',
        dataType: 'json',
        success: function(response) {
            if (!response.length) {
                console.log('une erreur est survenue');
                return false;
            }
            getChart(response);
        },
        error: function() {
            console.log('une erreur est survenue');
            return false;
        }
    });
}

