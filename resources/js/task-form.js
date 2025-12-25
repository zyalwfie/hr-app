import { initFlatpickr } from "./flatpickr";
import 'flatpickr/dist/themes/airbnb.css';

document.addEventListener("DOMContentLoaded", () => {
    initFlatpickr("#due_date");
});
