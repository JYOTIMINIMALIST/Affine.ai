(function(e){function t(t){for(var r,u,a=t[0],l=t[1],c=t[2],f=0,d=[];f<a.length;f++)u=a[f],Object.prototype.hasOwnProperty.call(o,u)&&o[u]&&d.push(o[u][0]),o[u]=0;for(r in l)Object.prototype.hasOwnProperty.call(l,r)&&(e[r]=l[r]);s&&s(t);while(d.length)d.shift()();return i.push.apply(i,c||[]),n()}function n(){for(var e,t=0;t<i.length;t++){for(var n=i[t],r=!0,a=1;a<n.length;a++){var l=n[a];0!==o[l]&&(r=!1)}r&&(i.splice(t--,1),e=u(u.s=n[0]))}return e}var r={},o={app:0},i=[];function u(t){if(r[t])return r[t].exports;var n=r[t]={i:t,l:!1,exports:{}};return e[t].call(n.exports,n,n.exports,u),n.l=!0,n.exports}u.m=e,u.c=r,u.d=function(e,t,n){u.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},u.r=function(e){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},u.t=function(e,t){if(1&t&&(e=u(e)),8&t)return e;if(4&t&&"object"===typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(u.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)u.d(n,r,function(t){return e[t]}.bind(null,r));return n},u.n=function(e){var t=e&&e.__esModule?function(){return e["default"]}:function(){return e};return u.d(t,"a",t),t},u.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},u.p="/";var a=window["aioseopjsonp"]=window["aioseopjsonp"]||[],l=a.push.bind(a);a.push=t,a=a.slice();for(var c=0;c<a.length;c++)t(a[c]);var s=l;i.push([19,"chunk-vendors"]),n()})({19:function(e,t,n){e.exports=n("e7ec")},4790:function(e,t,n){},"6ac5":function(e,t,n){},e7ec:function(e,t,n){"use strict";n.r(t);n("e260"),n("e6cf"),n("cca6"),n("a79d");var r=n("a026"),o=function(){var e=this,t=e.$createElement,n=e._self._c||t;return e.display?n("div"):e._e()},i=[],u=(n("159b"),n("4790"),n("6ac5"),{data:function(){return{display:!1,interval:null}},methods:{addMenuHighlight:function(){var e=document.querySelector("#toplevel_page_aioseo");if(e){var t=e.querySelectorAll(".wp-submenu li");t.forEach((function(e){var t=e.querySelector("a");if(t){var n=t.querySelector(".aioseo-menu-highlight");if(n){e.classList.add("aioseo-submenu-highlight"),n.classList.contains("red")&&e.classList.add("red");var r=e.querySelector("a");r&&!n.classList.contains("red")&&r.setAttribute("target","_blank")}}}))}}},created:function(){this.addMenuHighlight()}}),a=u,l=n("2877"),c=Object(l["a"])(a,o,i,!1,null,null,null),s=c.exports;n("2d26"),n("96cf");r["default"].config.productionTip=!1,new r["default"]({render:function(e){return e(s)}}).$mount("#aioseo-admin")}});