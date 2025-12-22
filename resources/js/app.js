import './bootstrap';
import 'preline';
import ApexCharts from "apexcharts";
import _ from "lodash";
import './chart';
import './tooltip';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

window.ApexCharts = ApexCharts;
window._ = _;

document.addEventListener('DOMContentLoaded', () => {
    window.HSStaticMethods.autoInit();
});
