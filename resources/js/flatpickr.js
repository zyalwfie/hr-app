import flatpickr from "flatpickr";
import "flatpickr/dist/themes/material_blue.css";

export function initFlatpickr(target, options = {}) {
    const defaultOptions = {
        dateFormat: "l, d F Y",
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
