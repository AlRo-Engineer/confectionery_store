import './bootstrap';

import axios from 'axios';
import $ from "jquery";

import.meta.glob([
    '../images/**',
    '../fonts/**',
    '../warranty_docs/**',
]);

window.$ = window.jQuery = $;

window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import './site-script';
import './modal-open-function';
import './sliders';


