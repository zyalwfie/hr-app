import flatpickr from "flatpickr";

export function initFlatpickr(target, options = {}) {
    const defaultOptions = {
        dateFormat: "y-m-d",
        allowInput: false,
    };

    const config = { ...defaultOptions, ...options };

    if (typeof target === "string") {
        flatpickr(target, config);
        return;
    }

    if (target instanceof HTMLElement) {
        flatpickr(target, config);
        return;
    }

    if (target instanceof NodeList || Array.isArray(target)) {
        target.forEach((el) => flatpickr(el, config));
    }
}
