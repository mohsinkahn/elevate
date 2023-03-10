function getChartColorsArray(e) {
    e = $(e).attr("data-colors");
    let isvalidjson = false;
    try{
      JSON.parse(e)
      isvalidjson = true;
    }catch{
      isvalidjson = false;
    }
    if(isvalidjson){
      return (e = JSON.parse(e)).map(function (e) {
        e = e.replace(" ", "");
        if (-1 == e.indexOf("--")) return e;
        e = getComputedStyle(document.documentElement).getPropertyValue(e);
        return e || void 0;
      });
    }

  }

  var lineDatalabelColors = getChartColorsArray("#line_chart_datalabel"),
  options = {
    chart: {
      height: 380,
      type: "line",
      zoom: { enabled: !1 },
      toolbar: { show: !1 },
    },
    colors: lineDatalabelColors,
    dataLabels: { enabled: !1 },
    stroke: { width: [3, 3], curve: "straight" },
    series: [
      { name: "Male", data: [26, 24, 32, 36, 33, 31, 33] },
      { name: "Female", data: [14, 11, 16, 12, 17, 13, 12] },
    ],

    grid: {
      row: { colors: ["transparent", "transparent"], opacity: 0.2 },
      borderColor: "#f1f1f1",
    },
    markers: { style: "inverted", size: 0 },
    xaxis: {
      categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
      title: { text: "Month" },
    },
    yaxis: { title: { text: "Patients" }, min: 5, max: 40 },
    legend: {
      position: "top",
      horizontalAlign: "right",
      floating: !0,
      offsetY: -25,
      offsetX: -5,
    },
    responsive: [
      {
        breakpoint: 600,
        options: { chart: { toolbar: { show: !1 } }, legend: { show: !1 } },
      },
    ],
  },
  chart = new ApexCharts(
    document.querySelector("#line_chart_datalabel"),
    options
  );
chart.render();
var lineDashedColors = getChartColorsArray("#line_chart_dashed"),
  options = {
    chart: {
      height: 380,
      type: "line",
      zoom: { enabled: !1 },
      toolbar: { show: !1 },
    },
    colors: lineDashedColors,
    dataLabels: { enabled: !1 },
    stroke: { width: [3, 4, 3], curve: "straight", dashArray: [0, 8, 5] },
    series: [
      {
        name: "Session Duration",
        data: [45, 52, 38, 24, 33, 26, 21, 20, 6, 8, 15, 10],
      },
      {
        name: "Page Views",
        data: [36, 42, 60, 42, 13, 18, 29, 37, 36, 51, 32, 35],
      },
      {
        name: "Total Visits",
        data: [89, 56, 74, 98, 72, 38, 64, 46, 84, 58, 46, 49],
      },
    ],
    title: {
      text: "Page Statistics",
      align: "left",
      style: { fontWeight: "500" },
    },
    markers: { size: 0, hover: { sizeOffset: 6 } },
    xaxis: {
      categories: [
        "01 Jan",
        "02 Jan",
        "03 Jan",
        "04 Jan",
        "05 Jan",
        "06 Jan",
        "07 Jan",
        "08 Jan",
        "09 Jan",
        "10 Jan",
        "11 Jan",
        "12 Jan",
      ],
    },
    tooltip: {
      y: [
        {
          title: {
            formatter: function (e) {
              return e + " (mins)";
            },
          },
        },
        {
          title: {
            formatter: function (e) {
              return e + " per session";
            },
          },
        },
        {
          title: {
            formatter: function (e) {
              return e;
            },
          },
        },
      ],
    },
    grid: { borderColor: "#f1f1f1" },
  };
(chart = new ApexCharts(
  document.querySelector("#line_chart_dashed"),
  options
)).render();
