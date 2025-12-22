export function buildChart(selector, optionsFunc, lightOptions, darkOptions) {
    const el = document.querySelector(selector);
    if (!el) return;

    const isDark = document.documentElement.classList.contains("dark");
    const mode = isDark ? "dark" : "light";

    let options = optionsFunc(mode);
    options = {
        ...options,
        ...(isDark ? darkOptions : lightOptions),
    };

    const chart = new ApexCharts(el, options);
    chart.render();

    // Listen for theme changes
    const observer = new MutationObserver((mutations) => {
        mutations.forEach((mutation) => {
            if (mutation.attributeName === "class") {
                const newMode = document.documentElement.classList.contains(
                    "dark"
                )
                    ? "dark"
                    : "light";
                let newOptions = optionsFunc(newMode);
                newOptions = {
                    ...newOptions,
                    ...(newMode === "dark" ? darkOptions : lightOptions),
                };
                chart.updateOptions(newOptions);
            }
        });
    });

    observer.observe(document.documentElement, { attributes: true });
}

window.buildChart = buildChart;
