$(document).ready(function () {
	$('.carousel').carousel({
		interval: false
	});
    $("[rel=tooltip]").tooltip();
    $('.tabbed a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});
	$('.table-data').dataTable();
	$(".collapse").collapse();
   
	function examplesInlineGraph () {
		function inlinebar () {
			$(".small-chart .inlinebar").sparkline([5,6,7,2,0,-4,-2,-6], {
			    type: 'bar',
			    height: '100',
			    barColor: '#4fa950',
			    negBarColor: '#ce483d',
			    stackedBarColor: '#FFA93C',
			    barWidth: 10,
			    barSpacing: 3,
			    nullColor: '#aaa'
			});
		}
		function inlinestackbar () {
			$('.small-chart .inlinestackbar').sparkline([ [1,4], [2,2], [2, 4], [5, 2], [3, 5], [4, 1] ], { type: 'bar',
			    height: '100',
			    barWidth: 10,
			    barSpacing: 3,
			    stackedBarColor: ['#00aced','#ce483d','#FFA93C','#4fa950']
			});
		}
		function inlineline () {
			$(".small-chart .inlineline").sparkline([5,6,7,9,9,5,3,2,0,4,6,7], {
			    type: 'line',
			    width: '150px',
			    height: '100px',
			    lineColor: '#82b721',
			    fillColor: '#538115',
			    lineWidth: 5,
			    spotColor: '#95c535',
			    minSpotColor: '#95c535',
			    maxSpotColor: '#95c535',
			    highlightSpotColor: '#333',
			    highlightLineColor: '#000',
			    spotRadius: 6,
			    normalRangeColor: '#111',
			    drawNormalOnTop: false
			});
		}
		function inlinepie () {
			$(".small-chart .inlinepie").sparkline([1,1,2,5], {
			    type: 'pie',
			    width: '100px',
			    height: '100px',
			    sliceColors: ['#00aced','#ce483d','#FFA93C','#4fa950'],
			    offset: 0
			});
		}
		inlineline();
		inlinebar();
		inlinestackbar();
		inlinepie();
	}
	function examplesCalendar () {
		//Calendar
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		$('.calendar-agenda').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			editable: true,
			events: [
				{
					title: 'All Day Event',
					start: new Date(y, m, 1)
				},
				{
					title: 'Long Event',
					start: new Date(y, m, d-5),
					end: new Date(y, m, d-2)
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d-3, 16, 0),
					allDay: false
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d+4, 16, 0),
					allDay: false
				},
				{
					title: 'Meeting',
					start: new Date(y, m, d, 10, 30),
					allDay: false
				},
				{
					title: 'Lunch',
					start: new Date(y, m, d, 12, 0),
					end: new Date(y, m, d, 14, 0),
					allDay: false
				},
				{
					title: 'Birthday Party',
					start: new Date(y, m, d+1, 19, 0),
					end: new Date(y, m, d+1, 22, 30),
					allDay: false
				},
				{
					title: 'Click for Google',
					start: new Date(y, m, 28),
					end: new Date(y, m, 29),
					url: 'http://google.com/'
				}
			]
		});
	}
	function examplesGraph () {
		var d1 = [];
		for (var i = 0; i <= 10; i += 1) { d1.push([i, parseInt(Math.random() * 30)]); }
		var d2 = [];
		for (var i = 0; i <= 10; i += 1) { d2.push([i, parseInt(Math.random() * 30)]); }
		var d3 = [];
		for (var i = 0; i <= 10; i += 1) { d3.push([i, parseInt(Math.random() * 30)]); }
		var d4 = [];
		for (var i = 0; i <= 10; i += 1) { d4.push([i, parseInt(Math.random() * 30)]); }

		var e1 =[];
		for (var i = 0; i <= 7; i += 1) { e1.push([i, parseInt(Math.random() * 30)]); }

		var colors = [ "#008A17", "#0072C6",  "#FFA93C", "#AC193D"];
		var stack = 1,
			bars = true,
			lines = false,
			steps = false;
		
		function graphLine () {
			$.plot(
				$("#flot-line"), [ e1], {
					xaxis: {
						font: {
						    color: "rgba(255,255,255,0.9)"
						}
					},
					yaxis: {
						font: {
						    color: "rgba(255,255,255,0.9)"
						}
					},
				    series: {
						lines: { 
							show: true,
							lineWidth: 5,
							fill: false,
						},
						points: { 
							show: false,
							lineWidth: 7
						},
					},
					grid: {
						clickable: true,
					    hoverable: true,
					    autoHighlight: true,
					    mouseActiveRadius: 10,
					    aboveData: true,
					    backgroundColor: "#0072C6",
					    color: "rgba(0,0,0,0.4)",
					    borderWidth: 0,
					    minBorderMargin: 25,
					},
					colors: ["#ffffff"],
				    shadowSize: 0,
				}
			);
		}
		function graphLineFilled () {
			$.plot (
				$("#flot-line-filled"), [ d1, d2 ], {
					xaxis: {
						font: {
						    color: "#ccc",
						    size: 11,
						}
					},
					yaxis: {
						font: {
						    color: "#ccc",
						    size: 11,
						}
					},
				    series: {
						lines: { 
							show: true,
							lineWidth: 5,
							fill: .8,
						},
						points: { 
							show: true,
							radius: 0,
						},
					},
					grid: {
						clickable: true,
					    hoverable: true,
					    autoHighlight: true,
					    mouseActiveRadius: 10,
					    aboveData: true,
					    backgroundColor: "#3c3c3c",
					    borderWidth: 0,
					    minBorderMargin: 25,
					},
					colors: colors,
				    shadowSize: 0,
				}
			);
		}
		function graphLineStacked (){
			$.plot (
				$("#flot-line-stacked"), [ d1, d2, d3 ], {
					xaxis: {
						font: {
						    color: "#fff",
						    size: 11,
						}
					},
					yaxis: {
						font: {
						    color: "#fff",
						    size: 11,
						}
					},
				    series: {
				    	stack: stack,
						lines: { 
							show: true,
							lineWidth: 5,
							fill: .8,
							steps: steps
						},
						points: { 
							show: true,
							radius: 0,
						},
					},
					grid: {
						clickable: true,
					    hoverable: true,
					    autoHighlight: true,
					    mouseActiveRadius: 10,
					    aboveData: true,
					    backgroundColor: "888888",
					    borderWidth: 0,
					    minBorderMargin: 25,
					},
					colors: colors,
				    shadowSize: 0,
				}
			);
		}
		function graphBars() {
			$.plot(
				$("#flot-bars"), [ e1], {
					xaxis: {
						font: {
						    color: "rgba(255,255,255,0.9)"
						}
					},
					yaxis: {
						font: {
						    color: "rgba(255,255,255,0.9)"
						}
					},
				    series: {
						bars: { 
							show: true,
							lineWidth: 5,
							fill: false,
						},
						points: { 
							show: false,
						},
					},
					grid: {
						clickable: true,
					    hoverable: true,
					    autoHighlight: true,
					    mouseActiveRadius: 10,
					    aboveData: true,
					    backgroundColor: "#0072C6",
					    color: "rgba(0,0,0,0.4)",
					    borderWidth: 0,
					    minBorderMargin: 25,
					},
					colors: ["#ffffff"],
				    shadowSize: 0,
				}
			);
		}
		function graphBarsFilled() {
			$.plot (
				$("#flot-bars-filled"), [ d1, d2 ], {
					xaxis: {
						font: {
						    color: "#fff",
						    size: 11,
						}
					},
					yaxis: {
						font: {
						    color: "#fff",
						    size: 11,
						}
					},
				    series: {
						bars: { 
							show: true,
							lineWidth: 1,
							fill: .8,
						},
						points: { 
							show: true,
							radius: 0,
						},
					},
					grid: {
						clickable: true,
					    hoverable: true,
					    autoHighlight: true,
					    mouseActiveRadius: 10,
					    aboveData: true,
					    backgroundColor: "#3c3c3c",
					    borderWidth: 0,
					    minBorderMargin: 25,
					},
					colors: colors,
				    shadowSize: 0,
				}
			);
		}
		function graphBarsStacked() {
			$.plot (
				$("#flot-bars-stacked"), [ d1, d2, d3 ], {
					xaxis: {
						font: {
						    color: "#fff",
						    size: 11,
						}
					},
					yaxis: {
						font: {
						    color: "#fff",
						    size: 11,
						}
					},
				    series: {
				    	stack: stack,
						bars: { 
							show: true,
							lineWidth: 1,
							fill: .8,
							steps: steps
						},
						points: { 
							show: true,
							radius: 0,
						},
					},
					grid: {
						clickable: true,
					    hoverable: true,
					    autoHighlight: true,
					    mouseActiveRadius: 10,
					    aboveData: true,
					    backgroundColor: "888888",
					    borderWidth: 0,
					    minBorderMargin: 25,
					},
					colors: colors,
				    shadowSize: 0,
				}
			);
		}
		function graphSinCosTan() {
			var sin = [];
			for (var i = 0; i < Math.PI * 2; i += 0.25) { sin.push([i, Math.sin(i)]); }

			var cos = [];
			for (var i = 0; i < Math.PI * 2; i += 0.25) { cos.push([i, Math.cos(i)]); }

			var tan = [];
			for (var i = 0; i < Math.PI * 2; i += 0.1) { tan.push([i, Math.tan(i)]); }
			$.plot("#flot-sincostan", [
					{ label: "sin(x)", data: sin },
					{ label: "cos(x)", data: cos },
					{ label: "tan(x)", data: tan }
				], 
			{
				series: {
					lines: { show: true },
					points: {
						show: true,
						lineWidth: 5
					}
				},
				xaxis: {
					ticks: [
						0, [ Math.PI/2, "\u03c0/2" ], [ Math.PI, "\u03c0" ],
						[ Math.PI * 3/2, "3\u03c0/2" ], [ Math.PI * 2, "2\u03c0" ]
					],
					font: {
					    color: "#fff",
					    size: 11,
					}
				},
				yaxis: {
					ticks: 10,
					min: -2,
					max: 2,
					tickDecimals: 3,
					font: {
					    color: "#fff",
					    size: 11,
					}
				},
				grid: {
					backgroundColor: "#3c3c3c",
					borderWidth: 0,
					minBorderMargin: 25,
				},
				legend: {
					backgroundColor: "#fff",
					backgroundOpacity: "1"
				},
				colors : colors,
			});
		}
		function graphRealtime() {
			var data = [],
				totalPoints = 300;
			function getRandomData() {
				if (data.length > 0)
					data = data.slice(1);
				while (data.length < totalPoints) {
					var prev = data.length > 0 ? data[data.length - 1] : 50,
						y = prev + Math.random() * 10 - 5;
					if (y < 0) {
						y = 0;
					} else if (y > 100) {
						y = 100;
					}
					data.push(y);
				}
				var res = [];
				for (var i = 0; i < data.length; ++i) {
					res.push([i, data[i]])
				}

				return res;
			}
			var updateInterval = 30;
			$("#updateInterval").val(updateInterval).change(function () {
				var v = $(this).val();
				if (v && !isNaN(+v)) {
					updateInterval = +v;
					if (updateInterval < 1) {
						updateInterval = 1;
					} else if (updateInterval > 2000) {
						updateInterval = 2000;
					}
					$(this).val("" + updateInterval);
				}
			});

			var plot = $.plot("#flot-realtime", [ getRandomData() ], {
				series: {
					shadowSize: 0,
				},
				yaxis: {
					min: 0,
					max: 100,
					font: {
					    color: "#fff",
					    size: 11,
					}
				},
				xaxis: {
					show: false,
					font: {
					    color: "#fff",
					    size: 11,
					}
				},
				grid: {
					backgroundColor: "#0072C6",
					borderWidth: 0,
					minBorderMargin: 25,
				},
				colors: ["#ffffff"],
			    shadowSize: 0,
			});

			function update() {
				plot.setData([getRandomData()]);
				plot.draw();
				setTimeout(update, updateInterval);
			}

			update();
		}
		graphLine();
		graphLineFilled();
		graphLineStacked();
		graphBars();
		graphBarsFilled();
		graphBarsStacked();
		graphSinCosTan();
		graphRealtime();
	}

	examplesCalendar();
	examplesInlineGraph();
	examplesGraph();
});