import { initFlatpickr } from "./flatpickr";
import 'flatpickr/dist/themes/airbnb.css';

document.addEventListener("DOMContentLoaded", () => {
    initFlatpickr(".datetime", {altInput: true, altFormat: 'F j, Y | H:i \\W\\I\\T\\A', enableTime: true, time_24hr: true, defaultHour: '00', dateFormat: 'Y-m-d H:i'});
});
