"use strict";

var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
	type: 'line',
	data: {
		labels: ["Minggu", "Senin", "Selasa", "Wednesday", "Thursday", "Friday", "Saturday"],
		datasets: [{
				label: 'Statistics',
				fill: false,
				data: [460, 458, 330, 502, 430, 610, 488],
				borderWidth: 2,
				backgroundColor: '#6777ef',
				borderColor: '#6777ef',
				borderWidth: 2.5,
				pointBackgroundColor: '#ffffff',
				pointRadius: 4
			},
			{
				label: 'jaja awok',
				fill: false,
				data: [400, 421, 412, 500, 330, 510, 328],
				borderWidth: 2,
				backgroundColor: '#4dc9f6',
				borderColor: '#4dc9f6',
				borderWidth: 2.5,
				pointBackgroundColor: '#ffffff',
				pointRadius: 4
			}
		]
	},
	options: {
		legend: {
			display: false
		},
		scales: {
			yAxes: [{
				gridLines: {
					drawBorder: false,
					color: '#f2f2f2',
				},
				ticks: {
					beginAtZero: true,
					stepSize: 150
				}
			}],
			xAxes: [{
				ticks: {
					display: false
				},
				gridLines: {
					display: false
				}
			}]
		},
	}
});
