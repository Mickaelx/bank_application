(window.webpackJsonp=window.webpackJsonp||[]).push([["app"],{ng4s:function(t,e,n){"use strict";n.r(e);n("QWBl"),n("DQNa"),n("07d7"),n("5s+n"),n("FZtP"),n("ls82"),n("sZ/o");function r(t,e,n,r,a,o,s){try{var u=t[o](s),i=u.value}catch(t){return void n(t)}u.done?e(i):Promise.resolve(i).then(r,a)}function a(t){return function(){var e=this,n=arguments;return new Promise((function(a,o){var s=t.apply(e,n);function u(t){r(s,a,o,u,i,"next",t)}function i(t){r(s,a,o,u,i,"throw",t)}u(void 0)}))}}function o(){return s.apply(this,arguments)}function s(){return(s=a(regeneratorRuntime.mark((function t(){var e,n,r,a,o,s,u;return regeneratorRuntime.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return e=[],n=[],r=[],a=[],o=[],t.next=7,fetch("/operationsJsonified");case 7:return s=t.sent,t.next=10,s.json();case 10:return u=t.sent,console.log(u),u.forEach((function(t){t.amount;if(t.amount>0){var s=t.amount;n.push(s)}else{var u=t.amount;r.push(u)}var i=t.date.timestamp,c=new Date(1e3*i).toDateString();e.push(c);var p=t.category.title;o.push(p);var l=t.content;a.push(l)})),t.abrupt("return",{yOperationsPlus:n,yOperationsMinus:r,xLabelsDate:e,yCategory:o,yContent:a});case 14:case"end":return t.stop()}}),t)})))).apply(this,arguments)}function u(){return(u=a(regeneratorRuntime.mark((function t(){var e,n;return regeneratorRuntime.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.next=2,o();case 2:e=t.sent,n=document.getElementById("myChart").getContext("2d"),new Chart(n,{type:"line",data:{labels:e.xLabelsDate,datasets:[{label:"Positive amount",fill:!1,borderColor:"rgba(255, 0, 0, .7)",data:e.yOperationsMinus},{label:"Positive amount",fill:!1,borderColor:"rgba(50, 205, 50, .7)",data:e.yOperationsPlus}]},options:{}});case 5:case"end":return t.stop()}}),t)})))).apply(this,arguments)}function i(){return(i=a(regeneratorRuntime.mark((function t(){var e,n;return regeneratorRuntime.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.next=2,o();case 2:e=t.sent,n=document.getElementById("myChart2").getContext("2d"),new Chart(n,{type:"bar",data:{labels:e.xLabelsDate,datasets:[{label:"Positive amount",backgroundColor:"rgba(255, 0, 0, .7)",data:e.yOperationsMinus},{label:"Positive amount",backgroundColor:"rgba(50, 205, 50, .7)",data:e.yOperationsPlus}]},options:{}});case 5:case"end":return t.stop()}}),t)})))).apply(this,arguments)}function c(){return(c=a(regeneratorRuntime.mark((function t(){var e,n;return regeneratorRuntime.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.next=2,o();case 2:e=t.sent,n=document.getElementById("myChart3").getContext("2d"),new Chart(n,{data:{datasets:[{data:e.yOperationsMinus,backgroundColor:["rgb(50, 205, 50)","rgb(255, 0, 0)","rgb(238,188,188)","rgb(238,222,171)","rgb(200,236,181)","rgb(188,194,242","rgb(232,182,238)"]}],labels:e.yCategory},type:"doughnut"});case 5:case"end":return t.stop()}}),t)})))).apply(this,arguments)}o().then((function(t){return console.log("All good, data fetched!")})).catch((function(t){console.log(t)})),function(){u.apply(this,arguments)}(),function(){i.apply(this,arguments)}(),function(){c.apply(this,arguments)}()},"sZ/o":function(t,e,n){}},[["ng4s","runtime",0]]]);