!function t(n,e,i){function r(c,a){if(!e[c]){if(!n[c]){var d="function"==typeof require&&require;if(!a&&d)return d(c,!0);if(o)return o(c,!0);var f=new Error("Cannot find module '"+c+"'");throw f.code="MODULE_NOT_FOUND",f}var u=e[c]={exports:{}};n[c][0].call(u.exports,function(t){var e=n[c][1][t];return r(e?e:t)},u,u.exports,t,n,e,i)}return e[c].exports}for(var o="function"==typeof require&&require,c=0;c<i.length;c++)r(i[c]);return r}({1:[function(t){function n(t){function n(t){var n=t.id,e=d(t.getAttribute("data-template")),i=t.getAttribute("data-theme"),o=t.getAttribute("data-raflid"),c=t.getAttribute("data-always-expand");if(o&&i&&m[i]){var a=r(t,n,i,o,e,c);n&&(g[n]=(g[n]||[]).concat([a]))}}a(t,n)}function e(t,n){return"https://www.facebook.com/"+t+"/app/"+n}function i(){return window.CPTRFB?{location:window.CPTRFB.tab_url||e(CPTRFB.page_id,CPTRFB.fbapp_id),referrer:document.referrer||null}:window.CPTRMO?{location:window.CPTRMO.location||window.location.href,referrer:window.CPTRMO.referrer||null}:{location:window.location.href,referrer:document.referrer||null}}function r(t,n,e,r,o,c){var a=l.html[u()?"mainshims":"main"].replace("%(theme)",e),d=l.html.origin,w=f.inject(t,a),m={raffle_id:r,template_id:o,custom_cfg:n&&p[n]||null,cssbaseurl:l.customizer,api:l.api,gitver:l.gitver,parent_referrer:i().referrer,parent_location:i().location,always_expand:c,mobile_display_url:l.mobile_display_url},g=s.init(w,d,m,{onrender:function(){h&&(h.creds||h.callback)&&window.cptr.widget.login(h.creds,h.callback)},resize:function(t){t.height&&f.height(w,t.height),t.width&&f.width(w,t.width)},login:function(){window.cptr.widget.login()},logout:function(){window.cptr.widget.logout()}});return{comm:g,frame:w}}function o(t){window.cptr.widget.config=function(n,e){t[n]?c(n,function(t){t.comm.send("config",e)}):p[n]=e},window.cptr.widget.login=function(t,n){c(function(n){n.comm.send("login",t)}),n&&n()},window.cptr.widget.logout=function(t){c(function(t){t.comm.send("logout")}),t&&t()},window.cptr.widget.admin=function(t,n,e){c(t,function(t){t.comm.send("admin",[n,e])})},window.cptr.widget.adminResponse=function(t,n){c(t,function(t){t.comm.callbacks["admin-response"]=n})}}function c(t,n){function e(t){if(t&&t.length)for(var e=0,i=t.length;i>e;e++)t[e]&&n(t[e])}if(n||(n=t,t=null),t)return e(g[t]);for(var i in g)"_"!==i&&g.hasOwnProperty(i)&&e(g[i])}function a(t,n){for(var e=t.querySelectorAll("a."+w),i=0,r=e.length;r>i;i++)"A"===e[i].tagName&&n(e[i])}function d(t){return/^[a-z0-9]{24}$/.test(t)?t:void 0}var f=t("./iframe"),u=t("./shims"),s=t("./comms"),l=t("./load_config.json"),w="rcptr",m=l.themes,p=window.cptr.widget._configs,g=window.cptr.widget._frames=window.cptr.widget._frames||{_:[]},h=window.cptr.widget._logins=window.cptr.widget._logins||{};n(window.document),o(g)},{"./comms":2,"./iframe":3,"./load_config.json":4,"./shims":5}],2:[function(t,n,e){function i(t,n,e,i){function u(e,i){var r=f+":"+e+":"+JSON.stringify(i||{});t.contentWindow.postMessage(r,n)}function s(){e.msgid=l,e.parent_origin=d(window.location),u("init",e)}var l=a();return o(c(l,i)),r(t,s),{send:u,callbacks:i}}function r(t,n){t.addEventListener?t.addEventListener("load",n):t.attachEvent?t.attachEvent("onload",n):t.onload=n}function o(t){window.addEventListener?window.addEventListener("message",t,!1):window.attachEvent&&window.attachEvent("onmessage",t)}function c(t,n){return function(e){if("string"==typeof e.data){var i=e.data.split(":");if(i[0]===f&&i[1]===t&&i[2]&&i[3]){var r=i[2];if(n[r]){try{var o=JSON.parse(i.slice(3).join(":"))}catch(c){return}n[r](o)}}}}}function a(){return Math.random().toString().slice(2,8)}function d(t){return t.origin?t.origin:t.protocol+"//"+t.host+(t.port?":"+t.port:"")}var f="rcptr";e.init=i},{}],3:[function(t,n,e){function i(t,n,e,i){var r=t.createElement("iframe");return r.setAttribute("id",n),r.setAttribute("frameborder","0"),r.setAttribute("style",i),r.setAttribute("src",e),r}var r="width:100%;height:200px;margin:0px auto;display:block;";e.inject=function(t,n){var e=t.ownerDocument,o=e.createElement("div");t.parentNode.replaceChild(o,t);var c=i(e,t.id,n,r);return o.appendChild(c),c},e.width=function(t,n){t.style.width="number"==typeof n?n+"px":n},e.height=function(t,n){t.style.height="number"==typeof n?n+"px":n}},{}],4:[function(t,n){n.exports={themes:{classic:!0},customizer:"https://customizer-css.rafflecopter.com",api:"https://socketapi.rafflecopter.com:443",gitver:"aff53f5",html:{main:"https://widget-prime.rafflecopter.com/%(theme)/aff53f5/main.html",mainshims:"https://widget-prime.rafflecopter.com/%(theme)/aff53f5/main.shims.html",origin:"https://widget-prime.rafflecopter.com"}}},{}],5:[function(t,n){function e(){return!(Function.prototype.bind&&Array.prototype.map&&window.addEventListener&&window.getComputedStyle)||r()||o()}function i(){try{return!document.createElementNS&&!!document.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect}catch(t){return!0}}function r(){return/MSIE (6|7|8)\./.test(navigator.userAgent)}function o(){return/like Gecko\) Version\/(5|4|3)\.\d(\.\d)? (Mobile(\/[\d\w]+)? )?Safari\/\d\d[\d\.]*$/.test(navigator.userAgent)}n.exports=function(){return e()||i()}},{}]},{},[1]);