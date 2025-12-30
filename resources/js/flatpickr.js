import flatpickr from "flatpickr";

export function initFlatpickr(target, options = {}) {
    const defaultOptions = {
        dateFormat: "Y-m-d",
        allowInput: false,
    };

    const config = { ...defaultOptions, ...options };

    const setup = (el) => {
        const startDate = el.dataset.startDate;
        const endDate = el.dataset.endDate;

        const instanceConfig = { ...config };

        if (startDate && endDate) {
            instanceConfig.defaultDate = [startDate, endDate];
        }

        return flatpickr(el, instanceConfig);
    };

    if (typeof target === "string") {
        document.querySelectorAll(target).forEach(setup);
        return;
    }

    if (target instanceof HTMLElement) {
        setup(target);
        return;
    }

    if (target instanceof NodeList || Array.isArray(target)) {
        target.forEach(setup);
    }
}
