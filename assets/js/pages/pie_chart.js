function getChartColorsArray(e) {
    e = $(e).attr("data-colors");
    return (e = JSON.parse(e)).map(function (e) {
      e = e.replace(" ", "");
      if (-1 == e.indexOf("--")) return e;
      e = getComputedStyle(document.documentElement).getPropertyValue(e);
      return e || void 0;
    });
  }
  var pieColors = getChartColorsArray("#pie_chart"),
  options = {
    chart: { height: 320, type: "pie" },
    series: [44, 55, 41, 17, 15],
    labels: ["Series 1", "Series 2", "Series 3", "Series 4", "Series 5"],
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