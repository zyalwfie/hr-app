import { buildChart } from "./chart";

document.addEventListener("DOMContentLoaded", () => {
    const rawPresentData = window.presenceChartData || [];
    const rawAbsentData = window.absenceChartData || [];

    const allMonths = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
    ];

    const categories = rawPresentData.map((d) => allMonths[d.month - 1]);
    const presentData = rawPresentData.map((d) => d.total);
    const absentData = rawAbsentData.map((d) => d.total);

    buildChart(
        "#presence-bar-chart",
        (mode) => ({
            chart: {
                type: "bar",
                height: 300,
                toolbar: { show: false },
                zoom: { enabled: false },
            },
            series: [
                { name: "Present", data: presentData },
                { name: "Absent", data: absentData },
            ],
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: "18px",
                    borderRadius: 0,
                },
            },
            legend: { show: false },
            dataLabels: { enabled: false },
            stroke: {
                show: true,
                width: 8,
                colors: ["transparent"],
            },
            xaxis: {
                categories,
                axisBorder: { show: false },
                axisTicks: { show: false },
                crosshairs: { show: false },
                labels: {
                    style: {
                        colors: "#9ca3af",
                        fontSize: "12px",
                        fontFamily: "Inter, ui-sans-serif",
                        fontWeight: 400,
                    },
                    offsetX: -2,
                    formatter: (title) => title.slice(0, 3),
                },
            },
            yaxis: {
                labels: {
                    align: "left",
                    minWidth: 0,
                    maxWidth: 140,
                    style: {
                        colors: "#9ca3af",
                        fontSize: "12px",
                        fontFamily: "Inter, ui-sans-serif",
                        fontWeight: 400,
                    },
                },
            },
            states: {
                hover: {
                    filter: {
                        type: "darken",
                        value: 0.9,
                    },
                },
            },
            tooltip: {
                y: {
                    formatter: (value) => `${value} employees`,
                },
                x: {
                    formatter: (value) => `${value}`
                }
            },
            responsive: [
                {
                    breakpoint: 568,
                    options: {
                        chart: { height: 300 },
                        plotOptions: {
                            bar: { columnWidth: "14px" },
                        },
                        stroke: { width: 8 },
                        xaxis: {
                            labels: {
                                style: {
                                    colors: "#9ca3af",
                                    fontSize: "11px",
                                    fontFamily: "Inter, ui-sans-serif",
                                    fontWeight: 400,
                                },
                                offsetX: -2,
                                formatter: (title) => title.slice(0, 3),
                            },
                        },
                        yaxis: {
                            labels: {
                                style: {
                                    colors: "#9ca3af",
                                    fontSize: "11px",
                                    fontFamily: "Inter, ui-sans-serif",
                                    fontWeight: 400,
                                },
                            },
                        },
                    },
                },
            ],
        }),
        {
            colors: ["#2563eb", "#ef4444"],
            grid: { borderColor: "#e5e7eb" },
        },
        {
            colors: ["#6b7280", "#2563eb"],
            grid: { borderColor: "#404040" },
        }
    );
});
