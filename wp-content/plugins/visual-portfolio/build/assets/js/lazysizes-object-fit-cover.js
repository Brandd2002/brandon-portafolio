!function(e,t){const i=function(){t(e.lazySizes),e.removeEventListener("lazyunveilread",i,!0)};t=t.bind(null,e,e.document),e.lazySizes?i():e.addEventListener("lazyunveilread",i,!0)}(window,((e,t,i)=>{if(!e.addEventListener)return;const n={calculateSize(t,i){const n=(a=t,e.getComputedStyle(a,null)||{});var a;if(n&&n.objectFit&&"cover"===n.objectFit){const e=parseInt(t.getAttribute("height"),10),n=parseInt(t.getAttribute("width"),10);e&&n/e>t.clientWidth/t.clientHeight&&(i=parseInt(t.clientHeight*n/e,10))}return i}};i.objectFitCover=n,t.addEventListener("lazybeforesizes",(e=>{if(e.defaultPrevented||!e.detail||!e.detail.width||!e.target||e.detail.instance!==i)return;const t=e.target;e.detail.width=n.calculateSize(t,e.detail.width)}))}));