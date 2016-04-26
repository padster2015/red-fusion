window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove();
    });
}, 1500);


var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http,$interval) {
  $http.get("./api/v1/Data/DashboardSummary_clicks?jsonp")
  .then(function (response) {
  $scope.names = response.data[0].Total_Clicks;
  window.$windowScope= $scope;
});


$http.get("./api/v1/Budget/DashboardSummary_SPTD?jsonp")
  .then(function (SPTDResponse) {
  $scope.sptddata = SPTDResponse.data[0].SPTD;
});


      $scope.noReviews = 100;
      //$scope.childOnLoad = function () {

      this.upperCount = $scope.noReviews; //$("#counterofreviews").text();
      console.log(this.upperCount);

      var stop;

      this.startCounter = function () { // needed for re-run on change
          //console.log(stop, this);
          this.no_Reviews = 0;
          if ( angular.isUndefined(stop) )
              stop = $interval(checkCount.bind(this), 100);
      };

      this.startCounter();
      //};

      function checkCount() {
          if (this.upperCount >= this.no_Reviews) {

              this.noReviews = this.no_Reviews;
              this.no_Reviews++;
              //console.log('Inside if statement');
          } else {
              stopFight();
          }
      }

      function stopFight() {
          if (angular.isDefined(stop)) {
              $interval.cancel(stop);
              stop = undefined;
          }
      };


      //$scope.childOnLoad();

  });

  app.directive('getValue', function(){
      return {
          restrict: 'A',
          scope: {
            max: '='
          },
          link: function(scope, element, attrs)
          {
            //alert(element.text());
            scope.max = parseInt(element.text());
          }
      };
  });






//angel


//charts///
var chart;
$(document).ready(function() { /*begin chart render*/
    var colors = Highcharts.getOptions().colors,
        categories = ['The Americas', 'Asia Pacific', 'Europe & Africa'],
        //name = 'Sectors',
        data = [{
            name: 'New Year New You',
            y: 55,
            drilldown: {
                //begin alcohol
                name: 'New Year New You',
                categories: ['Facebook', 'Twitter', 'Affiliate', 'Email', 'Search', 'Retargeting/Display', 'Facebook'],
                data: [122252, 3516, 4036, 3557, 4021, 3624, 3847],
                color: colors[0],
                data: [{
                    y: 33.06,
                    name: 'New Year New You',
                    drilldown: {
                        name: 'Facebook',
                        categories: ['Message 1', 'Message 6', 'Message 5', 'Message 4', 'Message 3', 'Message 2', 'Message 1'],
                        data: [10838, 11349, 11894, 11846, 11878, 11662, 11652, 11438, 11833, 12252],
                        color: colors[0]
                    }},
                {
                    y: 10.85,
                    name: 'B',
                    drilldown: {
                        name: 'Heinekein',
                        categories: ['A', 'B', 'C', 'D', 'E', 'F', 'G'],
                        data: [2266, 2396, 2431, 2380, 2357, 3516],
                        color: colors[0]
                    }},
                {
                    y: 7.35,
                    name: 'C',
                    drilldown: {
                        name: 'Jack Daniels',
                        categories: ['A', 'B', 'C', 'D', 'E', 'F', 'G'],
                        data: [1583, 1580, 1612, 4036],
                        color: colors[0]
                    }},
                {
                    y: 2.41,
                    name: 'D',
                    drilldown: {
                        name: 'Johnnie Walker',
                        categories: ['A', 'B', 'C', 'D', 'E', 'F', 'G'],
                        data: [1649, 1654, 1724, 3557],
                        color: colors[0]
                    }},
                {
                    y: 2.41,
                    name: 'E',
                    drilldown: {
                        name: 'Moet & Chandon',
                        categories: ['A', 'B', 'C', 'D', 'E', 'F', 'G'],
                        data: [2470, 2445, 2524, 2861, 2991, 3257, 3739, 3951, 3754, 4021],
                        color: colors[0]
                    }},
                {
                    y: 2.41,
                    name: 'F',
                    drilldown: {
                        name: 'Smirnoff',
                        categories: ['A', 'B', 'C', 'D', 'E', 'F', 'G'],
                        data: [2594, 2723, 5600, 2975, 3097, 3032, 3379, 3590, 7350, 3624],
                        color: colors[0]
                    }},
                {
                    y: 2.41,
                    name: 'G',
                    drilldown: {
                        name: 'Corona',
                        categories: ['A', 'B', 'C', 'D', 'E', 'F', 'G'],
                        data: [3847],
                        color: colors[0]
                    }}],
            }},
        {
            name: 'B-1',
            y: 11.94,
            color: colors[2],
            drilldown: {
                name: 'B',
                categories: ['A-2', 'B-2', 'C-2'],
                color: colors[2],
                data: [{
                    y: 33.06,
                    name: 'A',
                    drilldown: {
                        name: 'A',
                        categories: ['A', 'B'],
                        data: [4444, 6666],
                        color: colors[3]
                    },
                    },
                {
                    name: 'B',
                    y: 10.85,
                    drilldown: {
                        name: 'B',
                        categories: ['A', 'B'],
                        data: [22222, 6005],
                        color: colors[3]
                    },
                    },
                {
                    name: 'C',
                    y: 7.35,
                    drilldown: {
                        name: 'C',
                        categories: ['2011'],
                        data: [3605],
                        color: colors[3]
                    }}],
            }},
        ];



    window.chart = new Highcharts.Chart({
        chart: {
            renderTo: 'container',
            type: 'pie',
            /* changes bar size */
            pointPadding: -0.3,
            borderWidth: 0,
            pointWidth: 10,
            shadow: false,
            backgroundColor: null,

style: {
   fontFamily: 'Arial',
color:'white'
        }
        },

title: {
    text: ''
},

subtitle: {
            text: '',
    style: {
            fontFamily: 'Arial',
            color:'white',
           fontsize:'16px'
           }
         },
xAxis: {
            categories: categories
        },
yAxis: {
            title: {
                text: 'Total Brand Value',
                categories: categories
            }
        },
        //drilldown plot
plotOptions: {
            pie: {
                cursor: 'pointer',
                allowPointSelect: true,
                pointPadding: -0.3,
                borderWidth: 0,
                pointWidth: 15,
                color: 'white',
                shadow: false,
                point: {
                    events: {
                        click: function() {
                            var chart = this.series.chart,
                                drilldown = this.drilldown;
                            if (drilldown) { // drill down
                                chart.setChart(drilldown.name, drilldown.categories, drilldown.data, drilldown.color);
                            }
                        }
                    }
                },



dataLabels: {
            enabled: true,
            style: {
                    fontWeight:'bold',
                    color: "#FFF"
                }
}
}

        },



        //formatting over hover tooltip
tooltip: {
            formatter: function() {
                var point = this.point,
                    s = point.name + ':<b>' + this.y + '% market share</b><br/>';
                if (point.drilldown) {
                    s = point.name + ':<b>' + this.y + '222</b><br/>';
                    s += 'Click to view ' + point.name + ' versions';
                } else {
                    s = point.name + ':<b>' + this.y + '333</b><br/>';
                    s += 'Click to return to browser brands';
                }
                return s;
            }
        },
credits: {
            enabled: false
        },
series: [{
            name: name,
            data: data,
            /* changes bar size */
            pointPadding: -0.3,
            borderWidth: 0,
            pointWidth: 15,
            innerSize: '96%',
            shadow: false,
            color: 'white' //Sectors icon
            }],
exporting: {
            enabled: false
        }
    }, function(chart){

        chart.upper = [];

        var up = false;

        chart.setChart = function(name, categories, data, color) {
            //chart.xAxis[0].setCategories(categories);
            if (name === true && chart.upper.length) {
                chart.series[0].remove();
                chart.addSeries( chart.upper.pop() );

                if( chart.upper.length === 0 ) {
                    $("#pie").hide('up');

                    up = false;
                }
                return true;
            }

            if (up === false) {
               $("#pie").show().bind('click', function(){ chart.setChart(true); });
                up = true;
            }

            chart.upper.push( chart.series[0].options );
            chart.series[0].remove();
            chart.addSeries({
                name: name,
                data: data,
                color: color || 'white'
            });
        }



    });


});



// count ups

(function($) {
    $.fn.countTo = function(options) {
        // merge the default plugin settings with the custom options
        options = $.extend({}, $.fn.countTo.defaults, options || {});

        // how many times to update the value, and how much to increment the value on each update
        var loops = Math.ceil(options.speed / options.refreshInterval),
            increment = (options.to - options.from) / loops;

        return $(this).each(function() {
            var _this = this,
                loopCount = 0,
                value = options.from,
                interval = setInterval(updateTimer, options.refreshInterval);

            function updateTimer() {
                value += increment;
                loopCount++;
                $(_this).html(value.toFixed(options.decimals));

                if (typeof(options.onUpdate) == 'function') {
                    options.onUpdate.call(_this, value);
                }

                if (loopCount >= loops) {
                    clearInterval(interval);
                    value = options.to;

                    if (typeof(options.onComplete) == 'function') {
                        options.onComplete.call(_this, value);
                    }
                }
            }
        });
    };

    $.fn.countTo.defaults = {
        from: 0,  // the number the element should start at
        to: 100,  // the number the element should end at
        speed: 1000,  // how long it should take to count between the target numbers
        refreshInterval: 100,  // how often the element should be updated
        decimals: 0,  // the number of decimal places to show
        onUpdate: null,  // callback method for every time the element is updated,
        onComplete: null,  // callback method for when the element finishes updating
    };
})(jQuery);

/*jQuery(function($) {
        $('.clicks').countTo({
            from: 0,
            to: @{{ names }},
            speed: 1000,
            refreshInterval: 50,
            onComplete: function(value) {
                console.debug(this);
            }
        });
    });*/



jQuery(function($) {
        $('.impressions').countTo({
            from: 0,
            to: 10000,
            speed: 1000,
            refreshInterval: 50,
            onComplete: function(value) {
                console.debug(this);
            }
        });
    });

jQuery(function($) {
        $('.spend2date').countTo({
            from: 0,
            to: 20000,
            speed: 1000,
            refreshInterval: 50,
            onComplete: function(value) {
                console.debug(this);
            }
        });
    });

jQuery(function($) {
        $('.roi').countTo({
            from: 0,
            to: 50000,
            speed: 1000,
            refreshInterval: 50,
            onComplete: function(value) {
                console.debug(this);
            }
        });
    });

    //testing angular
    //count up
