window.buildTooltip = (props, options) => {
    const { series, seriesIndex, dataPointIndex, w } = props;
    const {
        title,
        mode,
        valuePrefix = "$",
        hasTextLabel,
        wrapperExtClasses = "",
        labelDivider = "",
        labelExtClasses = "",
    } = options;

    const isDark = mode === "dark";
    const bg = isDark ? "bg-neutral-800" : "bg-white";
    const borderColor = isDark ? "border-neutral-700" : "border-gray-200";
    const textColor = isDark ? "text-neutral-200" : "text-gray-800";
    const labelColor = isDark ? "text-neutral-400" : "text-gray-500";

    let seriesMarkup = "";
    series.forEach((s, i) => {
        const val = s[dataPointIndex];
        const label = w.globals.seriesNames[i];
        const color = w.globals.colors[i];

        seriesMarkup += `
            <div class="flex items-center gap-2 ${labelColor}">
                <span class="w-2.5 h-2.5 rounded-full" style="background-color: ${color}"></span>
                <span>${label}${labelDivider}</span>
                <span class="${labelExtClasses} ${textColor} font-medium">${valuePrefix}${
            val >= 1000 ? val / 1000 + "k" : val
        }</span>
            </div>
        `;
    });

    return `
        <div class="${bg} ${borderColor} border rounded-lg shadow-lg p-3 ${wrapperExtClasses}">
            <div class="${textColor} font-semibold mb-2">${title}</div>
            ${seriesMarkup}
        </div>
    `;
};
