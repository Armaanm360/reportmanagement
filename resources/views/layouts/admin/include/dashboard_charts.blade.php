{{-- @inject('dashboard', 'App\Models\Dashboard')
<script type="text/javascript">
    const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun",
        "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
    ];
    let monthNamesValue = new Map([
        ["Jan", 0],
        ["Feb", 0],
        ["Mar", 0],
        ["Apr", 0],
        ["May", 0],
        ["Jun", 0],
        ["Jul", 0],
        ["Aug", 0],
        ["Sep", 0],
        ["Oct", 0],
        ["Nov", 0],
        ["Dec", 0],
    ]);
    let EmergencymonthNamesValue = new Map([
        ["Jan", 0],
        ["Feb", 0],
        ["Mar", 0],
        ["Apr", 0],
        ["May", 0],
        ["Jun", 0],
        ["Jul", 0],
        ["Aug", 0],
        ["Sep", 0],
        ["Oct", 0],
        ["Nov", 0],
        ["Dec", 0],
    ]);

    multipleBarChart = document.getElementById('multipleBarChart').getContext('2d');
    htmlLegendsChart = document.getElementById('htmlLegendsChart').getContext('2d');
    pieChart = document.getElementById('pieChart').getContext('2d');
    multipleLineChart = document.getElementById('multipleLineChart').getContext('2d');
    let perMonthCasualLeavesData = <?php echo json_encode($dashboard->every_month_casual_leaves_count()); ?>;
    let perMonthEmergencyLeavesData = <?php echo json_encode($dashboard->every_month_emergency_leaves_count()); ?>;

    let EmergencyLeaves = [];
    perMonthCasualLeavesData = jQuery.map(perMonthCasualLeavesData, function (elem, index) {
        const d = new Date(elem.new_date);
        monthNamesValue.set(monthNames[d.getMonth()], elem.data);
    });

    let casualLeavesVal = [];
    monthNamesValue.forEach(function (data) {
        casualLeavesVal.push('' + data + '');
    });

    let emergencyLeavesVal = [];
    perMonthEmergencyLeavesData = jQuery.map(perMonthEmergencyLeavesData, function (elem, index) {
//        EmergencyLeaves.push(elem.data);
        const dt = new Date(elem.new_date);
        EmergencymonthNamesValue.set(monthNames[dt.getMonth()], elem.data);
    });
    EmergencymonthNamesValue.forEach(function (data) {
        emergencyLeavesVal.push(data);
    });
    var myMultipleBarChart = new Chart(multipleBarChart, {
        type: 'bar',
        data: {
            labels: monthNames,
            datasets: [{
                    label: "Report ",
                    backgroundColor: '#177dff',
                    borderColor: '#177dff',
                    data: casualLeavesVal,
                }, {
                    label: "Report 1",
                    backgroundColor: '#fdaf4b',
                    borderColor: '#fdaf4b',
                    data: emergencyLeavesVal,
                }],
//                                , {
//					label: "Pageview",
//					backgroundColor: '#177dff',
//					borderColor: '#177dff',
//					data: [3, 4, 5, 5, 6, 8, 7, 3, 8, 10, 8, 7],
//				}],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: 'bottom'
            },
            title: {
                display: true,
                text: 'Report Diagram'
            },
            tooltips: {
                mode: 'index',
                intersect: false
            },
            responsive: true,
            scales: {
                xAxes: [{
                        stacked: true,
                    }],
                yAxes: [{
                        stacked: true
                    }]
            }
        }
    });



    // Chart with HTML Legends

    var gradientStroke = htmlLegendsChart.createLinearGradient(500, 0, 100, 0);
    gradientStroke.addColorStop(0, '#177dff');
    gradientStroke.addColorStop(1, '#80b6f4');

    var gradientFill = htmlLegendsChart.createLinearGradient(500, 0, 100, 0);
    gradientFill.addColorStop(0, "rgba(23, 125, 255, 0.7)");
    gradientFill.addColorStop(1, "rgba(128, 182, 244, 0.3)");

    var gradientStroke2 = htmlLegendsChart.createLinearGradient(500, 0, 100, 0);
    gradientStroke2.addColorStop(0, '#f3545d');
    gradientStroke2.addColorStop(1, '#ff8990');

    var gradientFill2 = htmlLegendsChart.createLinearGradient(500, 0, 100, 0);
    gradientFill2.addColorStop(0, "rgba(243, 84, 93, 0.7)");
    gradientFill2.addColorStop(1, "rgba(255, 137, 144, 0.3)");

    var gradientStroke3 = htmlLegendsChart.createLinearGradient(500, 0, 100, 0);
    gradientStroke3.addColorStop(0, '#fdaf4b');
    gradientStroke3.addColorStop(1, '#ffc478');

    var gradientFill3 = htmlLegendsChart.createLinearGradient(500, 0, 100, 0);
    gradientFill3.addColorStop(0, "rgba(253, 175, 75, 0.7)");
    gradientFill3.addColorStop(1, "rgba(255, 196, 120, 0.3)");

    var myHtmlLegendsChart = new Chart(htmlLegendsChart, {
        type: 'line',
        data: {
            labels: monthNames,
            datasets: [{
                    label: "Report ",
                    borderColor: gradientStroke,
                    pointBackgroundColor: gradientStroke,
                    pointRadius: 0,
                    backgroundColor: gradientFill,
                    legendColor: '#177dff',
                    fill: true,
                    borderWidth: 1,
                    data: casualLeavesVal
                }, {
                    label: "Report 1",
                    borderColor: gradientStroke3,
                    pointBackgroundColor: gradientStroke3,
                    pointRadius: 0,
                    backgroundColor: gradientFill3,
                    legendColor: '#fdaf4b',
                    fill: true,
                    borderWidth: 1,
                    data: emergencyLeavesVal
                }
//                                {
//					label: "Active Users",
//					borderColor: gradientStroke,
//					pointBackgroundColor: gradientStroke,
//					pointRadius: 0,
//					backgroundColor: gradientFill,
//					legendColor: '#177dff',
//					fill: true,
//					borderWidth: 1,
//					data: [542, 480, 430, 550, 530, 453, 380, 434, 568, 610, 700, 900]
//				}
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            tooltips: {
                bodySpacing: 4,
                mode: "nearest",
                intersect: 0,
                position: "nearest",
                xPadding: 10,
                yPadding: 10,
                caretPadding: 10
            },
            layout: {
                padding: {left: 15, right: 15, top: 15, bottom: 15}
            },
            scales: {
                yAxes: [{
                        ticks: {
                            fontColor: "rgba(0,0,0,0.5)",
                            fontStyle: "500",
                            beginAtZero: false,
                            maxTicksLimit: 5,
                            padding: 20
                        },
                        gridLines: {
                            drawTicks: false,
                            display: false
                        }
                    }],
                xAxes: [{
                        gridLines: {
                            zeroLineColor: "transparent"
                        },
                        ticks: {
                            padding: 20,
                            fontColor: "rgba(0,0,0,0.5)",
                            fontStyle: "500"
                        }
                    }]
            },
            legendCallback: function (chart) {
                var text = [];
                text.push('<ul class="' + chart.id + '-legend html-legend">');
                for (var i = 0; i < chart.data.datasets.length; i++) {
                    text.push('<li><span style="background-color:' + chart.data.datasets[i].legendColor + '"></span>');
                    if (chart.data.datasets[i].label) {
                        text.push(chart.data.datasets[i].label);
                    }
                    text.push('</li>');
                }
                text.push('</ul>');
                return text.join('');
            }
        }
    });

    var myLegendContainer = document.getElementById("myChartLegend");

    // generate HTML legend
    myLegendContainer.innerHTML = myHtmlLegendsChart.generateLegend();

    // bind onClick event to all LI-tags of the legend
    var legendItems = myLegendContainer.getElementsByTagName('li');
    for (var i = 0; i < legendItems.length; i += 1) {
        legendItems[i].addEventListener("click", legendClickCallback, false);
    }
    var myPieChart = new Chart(pieChart, {
        type: 'pie',
        data: {
            datasets: [{
                    data: [<?php echo intval($dashboard->this_year_leaves_percentage()); ?>, 100],
                    backgroundColor: ["#f3545d", "#1d7af3"],
                    borderWidth: 0
                }],
            labels: ['Report Done', 'Remaining Report']
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: 'bottom',
                labels: {
                    fontColor: 'rgb(154, 154, 154)',
                    fontSize: 11,
                    usePointStyle: true,
                    padding: 20
                }
            },
            pieceLabel: {
                render: 'percentage',
                fontColor: 'white',
                fontSize: 14,
            },
            tooltips: false,
            layout: {
                padding: {
                    left: 20,
                    right: 20,
                    top: 0,
                    bottom: 0
                }
            }
        }
    });
    
    		var myMultipleLineChart = new Chart(multipleLineChart, {
			type: 'line',
			data: {
				labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
				datasets: [{
					label: "Python",
					borderColor: "#1d7af3",
					pointBorderColor: "#FFF",
					pointBackgroundColor: "#1d7af3",
					pointBorderWidth: 2,
					pointHoverRadius: 4,
					pointHoverBorderWidth: 1,
					pointRadius: 4,
					backgroundColor: 'transparent',
					fill: true,
					borderWidth: 2,
					data: [30, 45, 45, 68, 69, 90, 100, 158, 177, 200, 245, 256]
				},{
					label: "PHP",
					borderColor: "#59d05d",
					pointBorderColor: "#FFF",
					pointBackgroundColor: "#59d05d",
					pointBorderWidth: 2,
					pointHoverRadius: 4,
					pointHoverBorderWidth: 1,
					pointRadius: 4,
					backgroundColor: 'transparent',
					fill: true,
					borderWidth: 2,
					data: [10, 20, 55, 75, 80, 48, 59, 55, 23, 107, 60, 87]
				}, {
					label: "Ruby",
					borderColor: "#f3545d",
					pointBorderColor: "#FFF",
					pointBackgroundColor: "#f3545d",
					pointBorderWidth: 2,
					pointHoverRadius: 4,
					pointHoverBorderWidth: 1,
					pointRadius: 4,
					backgroundColor: 'transparent',
					fill: true,
					borderWidth: 2,
					data: [10, 30, 58, 79, 90, 105, 117, 160, 185, 210, 185, 194]
				}]
			},
			options : {
				responsive: true, 
				maintainAspectRatio: false,
				legend: {
					position: 'top',
				},
				tooltips: {
					bodySpacing: 4,
					mode:"nearest",
					intersect: 0,
					position:"nearest",
					xPadding:10,
					yPadding:10,
					caretPadding:10
				},
				layout:{
					padding:{left:15,right:15,top:15,bottom:15}
				}
			}
		});
</script> --}}
