import $ from 'jquery';
window.jQuery = $;
window.$ = $;

import animations from './modules/animations';
import sticky from './modules/sticky';
import initSliders from './modules/init-sliders';
import initSplitting from './modules/init-splitting';
import scrollToElement from './modules/scroll-to-element';
import scrollActivate from './modules/scroll-activate';
import toggleMenu from './modules/toggle-menu';

animations();
sticky();
initSliders();
initSplitting();
scrollToElement();
scrollActivate();
toggleMenu();