import { initFlatpickr } from "./flatpickr";
import "flatpickr/dist/themes/airbnb.css";

document.addEventListener("DOMContentLoaded", () => {
    initFlatpickr(".date-range", {
        altInput: true,
        altFormat: "F j, Y",
        dateFormat: "Y-m-d",
        minDate: 'today',
        mode: 'range'
    });
});
