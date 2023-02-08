var pieColors = getChartColorsArray("#pie_chart"),
  options = {
    chart: { height: 320, type: "pie" },
    series: [44, 55, 41, 17],
    labels: ["Booked By lead", "User", "API", "Other"],
    colors: pieColors,
    legend: {
      show: !0,
      position: "bottom",
      horizontalAlign: "center",
      verticalAlign: "middle",
      floating: !1,
      fontSize: "14px",
      offsetX: 0,
    },
    responsive: [
      {
        breakpoint: 600,
        options: { chart: { height: 240 }, legend: { show: !1 } },
      },
    ],
  };
(chart = new ApexCharts(
  document.querySelector("#pie_chart"),
  options
)).render();



var pieColors = getChartColorsArray("#pie_chart1"),
  options = {
    chart: { height: 320, type: "pie" },
    series: [44, 55],
    labels: ["John Doe", "Shao Kahn"],
    colors: pieColors,
    legend: {
      show: !0,
      position: "bottom",
      horizontalAlign: "center",
      verticalAlign: "middle",
      floating: !1,
      fontSize: "14px",
      offsetX: 0,
    },
    responsive: [
      {
        breakpoint: 600,
        options: { chart: { height: 240 }, legend: { show: !1 } },
      },
    ],
  };
(chart = new ApexCharts(
  document.querySelector("#pie_chart1"),
  options
)).render();




var pieColors = getChartColorsArray("#pie_chart2"),
  options = {
    chart: { height: 320, type: "pie" },
    series: [44, 55, 41, 17, 15,6],
    labels: ["Confirmed","Showed","No Show","Cancelled","Invalid","New"],
    colors: pieColors,
    legend: {
      show: !0,
      position: "bottom",
      horizontalAlign: "center",
      verticalAlign: "middle",
      floating: !1,
      fontSize: "14px",
      offsetX: 0,
    },
    responsive: [
      {
        breakpoint: 600,
        options: { chart: { height: 240 }, legend: { show: !1 } },
      },
    ],
  };
(chart = new ApexCharts(
  document.querySelector("#pie_chart2"),
  options
)).render();
