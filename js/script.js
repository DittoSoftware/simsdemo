$(function() {
    if ($("#subChart").length) {
        var chart = $("#subChart");
        var fontFamily = '"Proxima Nova W01", -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif';
    
        // set defaults
        Chart.defaults.global.defaultFontFamily = fontFamily;
        Chart.defaults.global.tooltips.titleFontSize = 14;
        Chart.defaults.global.tooltips.titleMarginBottom = 4;
        Chart.defaults.global.tooltips.displayColors = false;
        Chart.defaults.global.tooltips.bodyFontSize = 12;
        Chart.defaults.global.tooltips.xPadding = 10;
        Chart.defaults.global.tooltips.yPadding = 8;
        var data = {
            labels: ["Processed", "Pending", "Cancelled"],
            datasets: [
                {
                    data: [1, 1, 1],
                    backgroundColor: ["#85c751", "#6896f9", "#d97b70"],
                    hoverBackgroundColor: ["#85c751", "#6896f9", "#d97b70"],
                    borderWidth: 0
                }
            ]
        };
    
        // -----------------
        // init donut chart
        // -----------------
        var subsChart = new Chart(chart, {
            type: 'doughnut',
            data: data,
            options: {
                legend: {
                    display: false
                },
                animation: {
                    animateScale: true
                },
                cutoutPercentage: 80
            }
        });
    
        // donut chart data
        jQuery.ajax({
            type: "GET",
            url: 'dashboard/get/subscriptions',
            success: function(response) {
                console.log(response);
    
                var obj = JSON.parse(response);
                console.log(obj);
                console.log(obj[0].count);
    
                var active = obj[0].count;
                var pending = obj[1].count;
                var cancelled = obj[2].count;
    
                console.log('Initial value:' + subsChart.data.datasets[0].data);
                subsChart.data.datasets[0].data[0] = active;
                subsChart.data.datasets[0].data[1] = pending;
                subsChart.data.datasets[0].data[2] = cancelled;
                subsChart.update(); 
    
                console.log('Updated value:' + subsChart.data.datasets[0].data);
            }
        })
     }
    });