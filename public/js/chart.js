/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/chart.js ***!
  \*******************************/
/******/
(function () {
  // webpackBootstrap
  var __webpack_exports__ = {};
  /*!*******************************!*\
    !*** ./resources/js/chart.js ***!
    \*******************************/

  var index = 11;
  var canvasd = document.getElementById('canvasd').getContext('2d');
  var canvasy = document.getElementById('canvasy').getContext('2d');
  var canvasw = document.getElementById('canvasw').getContext('2d');
  var canvasm = document.getElementById('canvasm').getContext('2d');
  var Doughnut = document.getElementById('Doughnut ').getContext('2d');
  var ed = document.getElementById('ed').getContext('2d');
  new Chart(canvasd, {
    type: 'line',
    data: {
      labels: ['', '', '', '', '', '', ''],
      datasets: [{
        label: "erer",
        cubicInterpolationMode: "dsasda",
        pointHitRadius: 5,
        fill: false,
        borderColor: '#4CFA9D',
        data: [0, 10, 5, 2, 20, 30, 45]
      }]
    },
    options: {
      legend: {
        display: false
      },
      tooltips: {
        callbacks: {
          label: function label(tooltipItem) {
            return tooltipItem.yLabel;
          }
        }
      },
      scales: {
        xAxes: [{
          gridLines: {
            drawBorder: false,
            display: false
          },
          ticks: {
            display: false //this will remove only the label

          }
        }],
        yAxes: [{
          gridLines: {
            display: false,
            drawBorder: false
          },
          ticks: {
            display: false //this will remove only the label

          }
        }]
      }
    }
  });
  new Chart(canvasm, {
    type: 'line',
    data: {
      labels: ['', '', '', '', '', '', '', '', '', ''],
      datasets: [{
        label: "erer",
        cubicInterpolationMode: "dsasda",
        pointHitRadius: 5,
        fill: false,
        borderColor: '#53B9EA',
        data: [20, 10, 50, 100, 20, 20]
      }]
    },
    options: {
      legend: {
        display: false
      },
      tooltips: {
        callbacks: {
          label: function label(tooltipItem) {
            return tooltipItem.yLabel;
          }
        }
      },
      scales: {
        xAxes: [{
          gridLines: {
            drawBorder: false,
            display: false
          },
          ticks: {
            display: false //this will remove only the label

          }
        }],
        yAxes: [{
          gridLines: {
            display: false,
            drawBorder: false
          },
          ticks: {
            display: false //this will remove only the label

          }
        }]
      }
    }
  });
  new Chart(canvasw, {
    type: 'line',
    data: {
      labels: ['', '', '', '', '', '', '', '', '', ''],
      datasets: [{
        label: "erer",
        cubicInterpolationMode: "dsasda",
        pointHitRadius: 5,
        fill: false,
        borderColor: '#53B9EA',
        data: [20, 50, 90, 80, 20, 20]
      }]
    },
    options: {
      legend: {
        display: false
      },
      tooltips: {
        callbacks: {
          label: function label(tooltipItem) {
            return tooltipItem.yLabel;
          }
        }
      },
      scales: {
        xAxes: [{
          gridLines: {
            drawBorder: false,
            display: false
          },
          ticks: {
            display: false //this will remove only the label

          }
        }],
        yAxes: [{
          gridLines: {
            display: false,
            drawBorder: false
          },
          ticks: {
            display: false //this will remove only the label

          }
        }]
      }
    }
  });
  var myBarChart = new Chart(ed, {
    type: 'bar',
    data: {
      labels: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
      datasets: [{
        data: [5, 10, 5, 2, 20, 30, 45, 45, 45, 75, 35, 49],
        backgroundColor: '#5b73ea'
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      // onResize:(e)=>{
      //    e.config.data.labels.each(index,vue,()=>{
      //      console.log(55)
      //    })
      //   },
      legend: {
        display: false
      },
      tooltips: {
        callbacks: {
          label: function label(tooltipItem) {
            return tooltipItem.yLabel;
          }
        }
      },
      scales: {
        xAxes: [{
          gridLines: {
            drawBorder: false,
            display: false
          }
        }],
        yAxes: [{
          offset: true,
          // <-- This right here
          display: true,
          gridLines: {
            display: false,
            drawBorder: false
          },
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
  new Chart(canvasy, {
    // The type of chart we want to create
    type: 'line',
    data: {
      labels: ['', '', '', '', '', '', ''],
      datasets: [{
        label: "erer",
        cubicInterpolationMode: "dsasda",
        pointHitRadius: 5,
        fill: false,
        borderColor: '#53B9EA',
        data: [0, 10, 5, 2, 20, 30, 45]
      }]
    },
    options: {
      legend: {
        display: false
      },
      tooltips: {
        callbacks: {
          label: function label(tooltipItem) {
            return tooltipItem.yLabel;
          }
        }
      },
      scales: {
        xAxes: [{
          gridLines: {
            drawBorder: false,
            display: false
          },
          ticks: {
            display: false //this will remove only the label

          }
        }],
        yAxes: [{
          gridLines: {
            display: false,
            drawBorder: false
          },
          ticks: {
            display: false //this will remove only the label

          }
        }]
      }
    }
  });
  $('.Count').each(function () {
    $(this).prop('Counter', 0).animate({
      Counter: $(this).text()
    }, {
      duration: 380,
      easing: 'swing',
      step: function step(now) {
        $(this).text('฿ ' + Math.ceil(now).toLocaleString());
      }
    });
  });
  var myDoughnutChart = new Chart(Doughnut, {
    type: 'doughnut',
    data: {
      datasets: [{
        data: [10, 20, 30, 50],
        backgroundColor: ['#343090', '#5f59f7', '#6592fd', '#44c2fd'],
        borderAlign: 'inner',
        borderWidth: 0.1,
        weight: 1
      }],
      labels: ['Red', 'Yellow', 'Blue']
    },
    options: {
      cutoutPercentage: 70
    }
  });
  /******/
})();
/******/ })()
;