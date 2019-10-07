/*!
 * Responsive Bootstrap Toolkit
 * Author:    Maciej Gurban
 * License:   MIT
 * Version:   2.4.1 (2015-04-19)
 * Origin:    https://github.com/maciej-gurban/responsive-bootstrap-toolkit
 */
var ResponsiveBootstrapToolkit=function(b){var g={isAnExpression:function(a){return"<"==a.charAt(0)||">"==a.charAt(0)},splitExpression:function(a){var c=a.charAt(0),d="="==a.charAt(1)?!0:!1;a=a.slice(1+(d?1:0));return{operator:c,orEqual:d,breakpointName:a}},isAnyActive:function(a){var c=!1;b.each(a,function(a,f){if(e.breakpoints[f].is(":visible"))return c=!0,!1});return c},isMatchingExpression:function(a){a=g.splitExpression(a);var c=Object.keys(e.breakpoints),d=c.indexOf(a.breakpointName);if(-1!==d){var f=0,b=0;"<"==a.operator&&(f=0,b=a.orEqual?++d:d);">"==a.operator&&(f=a.orEqual?d:++d,b=void 0);a=c.slice(f,b);return g.isAnyActive(a)}}},e={interval:300,breakpoints:{xs:b('<div class="device-xs visible-xs visible-xs-block"></div>').appendTo("body"),sm:b('<div class="device-sm visible-sm visible-sm-block"></div>').appendTo("body"),md:b('<div class="device-md visible-md visible-md-block"></div>').appendTo("body"),lg:b('<div class="device-lg visible-lg visible-lg-block"></div>').appendTo("body")},timer:new Date,is:function(a){return g.isAnExpression(a)?g.isMatchingExpression(a):e.breakpoints[a].is(":visible")},current:function(){var a="unrecognized";b.each(e.breakpoints,function(c){e.is(c)&&(a=c)});return a},changed:function(){var a={};return function(c,d){var b=b?null:e.timer.getTime();a[b]&&clearTimeout(a[b]);"undefined"===typeof d&&(d=e.interval);a[b]=setTimeout(c,d)}}()};return e}(jQuery);