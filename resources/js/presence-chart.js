import { buildChart } from "./chart";

document.addEventListener("DOMContentLoaded", () => {
    const rawData = window.presenceChartData || [];

    const categories = rawData.map((d) => {
        const months = [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "Mei",
            "Jun",
            "Jul",
            "Agu",
            "Sep",
            "Okt",
            "Nov",
            "Des",
        ];
        return months[d.month - 1];
    });

    const seriesData = rawData.map((d) => d.total);

    buildChart(
        "#presence-bar-chart",
        () => ({
            chart: {
                type: "bar",
                height: 320,
                toolbar: { show: false },
            },
            series: [{ name: "Present", data: seriesData }],
            xaxis: { categories },
            plotOptions: {
                bar: {
                    borderRadius: 6,
                    columnWidth: "45%",
                },
            },
            dataLabels: { enabled: false },
            grid: { strokeDashArray: 4 },
        }),
        { theme: { mode: "light" } },
        { theme: { mode: "dark" } }
    );
});
