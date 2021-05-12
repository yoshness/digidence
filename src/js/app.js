import $ from 'jquery';
window.jQuery = $;
window.$ = $;

import sticky from './modules/sticky';
import initSliders from './modules/init-sliders';
import scrollToElement from './modules/scroll-to-element';
import scrollActivate from './modules/scroll-activate';

sticky();
initSliders();
scrollToElement();
scrollActivate();