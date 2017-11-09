/**
 * Theme: Minton Admin Template
 * Author: Coderthemes
 * Component: Dashboard
 *
 */
!function($) {
    "use strict";

    var Dashboard = function() {};

    //creates line chart
    Dashboard.prototype.createLineChart = function(element, data, xkey, ykeys, labels, opacity, Pfillcolor, Pstockcolor, lineColors) {
        Morris.Line({
            element: element,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            labels: labels,
            fillOpacity: opacity,
            pointFillColors: Pfillcolor,
            pointStrokeColors: Pstockcolor,
            behaveLikeLine: true,
            gridLineColor: '#eef0f2',
            hideHover: 'auto',
            resize: true, //defaulted to true
            lineColors: lineColors
        });
    },
        //creates Bar chart
        Dashboard.prototype.createBarChart  = function(element, data, xkey, ykeys, labels, lineColors) {
            Morris.Bar({
                element: element,
                data: data,
                xkey: xkey,
                ykeys: ykeys,
                labels: labels,
                hideHover: 'auto',
                resize: true, //defaulted to true
                gridLineColor: '#eeeeee',
                barColors: lineColors
            });
        },

        //creates Donut chart
        Dashboard.prototype.createDonutChart = function(element, data, colors) {
            Morris.Donut({
                element: element,
                data: data,
                resize: true, //defaulted to true
                colors: colors
            });
        },

        Dashboard.prototype.init = function() {

            //create line chart
            var $data  = [
                { y: '2006', a: 25, b: 39 , c: 38, d: 10 },
                { y: '2007', a: 45, b: 60 , c: 65, d: 10 },
                { y: '2008', a: 100, b: 90 , c: 65, d: 10 },
                { y: '2009', a: 100, b: 90 , c: 65, d: 10 },
                { y: '2010', a: 30,  b: 20 , c: 10, d: 10 },
                { y: '2011', a: 50,  b: 40 , c: 30, d: 10 },
                { y: '2012', a: 75,  b: 65 , c: 50, d: 10 },
                { y: '2013', a: 50,  b: 40 , c: 22, d: 10 },
                { y: '2014', a: 75,  b: 65 , c: 50, d: 10 },
                { y: '2015', a: 100, b: 90 , c: 65, d: 10 }
            ];
            this.createLineChart('dashboard-chart-1', $data, 'y', ['a', 'b','c','d'], ['Series A', 'Series B', 'Series C', 'Series D'],['0.2'],['#ffffff'],['#999999'], ['#29b6f6', '#ee6e73', '#ffc107', '#66bb6a']);

            //creating bar chart
            var $barData  = [
                { y: '2009', a: 100, b: 90 , c: 40 },
                { y: '2010', a: 75,  b: 65 , c: 20 },
                { y: '2011', a: 50,  b: 40 , c: 50 },
                { y: '2012', a: 75,  b: 65 , c: 95 },
                { y: '2013', a: 50,  b: 40 , c: 22 },
                { y: '2014', a: 75,  b: 65 , c: 56 },
                { y: '2015', a: 100, b: 90 , c: 60 }
            ];
            this.createBarChart('dashboard-chart-2', $barData, 'y', ['a', 'b', 'c'], ['Series A', 'Series B', 'Series C'], ['#3f51b5', '#52bb56', '#ffc107']);

            //creating donut chart
            var $donutData = [
                {label: "Download Sales", value: 12},
                {label: "In-Store Sales", value: 30},
                {label: "Mail-Order Sales", value: 20}
            ];
            this.createDonutChart('dashboard-chart-3', $donutData, ['#3f51b5', '#52bb56', '#ee6e73']);
        },
        //init
        $.Dashboard = new Dashboard, $.Dashboard.Constructor = Dashboard
}(window.jQuery),

//initializing
    function($) {
        "use strict";
        $.Dashboard.init();
    }(window.jQuery);