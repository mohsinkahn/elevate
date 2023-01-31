function getChartColorsArray(e) {
    e = $(e).attr("data-colors");
    return (e = JSON.parse(e)).map(function (e) {
      e = e.replace(" ", "");
      if (-1 == e.indexOf("--")) return e;
      e = getComputedStyle(document.documentElement).getPropertyValue(e);
      return e || void 0;
    });
  }
  var columnDatalabelColors = getChartColorsArray("#column_chart_datalabel"),
  options = {
    chart: { height: 350, type: "bar", toolbar: { show: !1 } },
    plotOptions: { bar: { borderRadius: 10, dataLabels: { position: "top" } } },
    dataLabels: {
      enabled: false,
      formatter: function (e) {
        return e + "";
      },
      offsetY: -22,
      style: { fontSize: "12px", colors: ["#304758"] },
    },
    series: [
      {
        name: "Patients",
        data: [2,5,3,4,1,3,2],
      },
    ],
    colors: columnDatalabelColors,
    grid: { borderColor: "#f1f1f1" },
    xaxis: {
      categories: [
        "Mon",
        "Tue",
        "Wed",
        "Thur",
        "Fri",
        "Sat",
        "Sun"
      ],

      
    },
    yaxis: {
      axisBorder: { show: !1 },
      axisTicks: { show: !1 },
      labels: {
        show: !1,
        formatter: function (e) {
          return e + "";
        },
      },
    },
    title: {
      enable:false,
      text: " ",
      
    },
  };
(chart = new ApexCharts(
  document.querySelector("#column_chart_datalabel"),
  options
)).render();
  var columnColors = getChartColorsArray("#column_chart"),
  options = {
    chart: { height: 350, type: "bar", toolbar: { show: !1 } },
    plotOptions: { bar: { horizontal: !1, columnWidth: "45%" } },
    dataLabels: { enabled: !1 },
    stroke: { show: !0, width: 2, colors: ["transparent"] },
    series: [
      { name: "Net Profit", data: [46, 57, 59, 54, 62, 58, 64, 60, 66] },
      { name: "Revenue", data: [74, 83, 102, 97, 86, 106, 93, 114, 94] },
      { name: "Free Cash Flow", data: [37, 42, 38, 26, 47, 50, 54, 55, 43] },
    ],
    colors: columnColors,
    xaxis: {
      categories: [
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
      ],
    },
    yaxis: { title: { text: "$ (thousands)", style: { fontWeight: "500" } } },
    grid: { borderColor: "#f1f1f1" },
    fill: { opacity: 1 },
    tooltip: {
      y: {
        formatter: function (e) {
          return "$ " + e + " thousands";
        },
      },
    },
  };
(chart = new ApexCharts(
  document.querySelector("#column_chart"),
  options
)).render();
