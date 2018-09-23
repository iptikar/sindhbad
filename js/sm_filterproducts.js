
require([
	'jquery'
], function ($) {
var $element = $('#sm_filterproducts_1523715215806974313');

function CountDown(date,id){
dateNow = new Date();
amount = date.getTime() - dateNow.getTime();
delete dateNow;
if(amount < 0){
id.html("Now!");
} else{
days=0;hours=0;mins=0;secs=0;out="";
amount = Math.floor(amount/1000);
days=Math.floor(amount/86400);
amount=amount%86400;
hours=Math.floor(amount/3600);
amount=amount%3600;
mins=Math.floor(amount/60);
amount=amount%60;
secs=Math.floor(amount);
$(".time-day .num-time" , id).text(days);
$(".time-day .title-time" , id).text(((days <= 1)? "Day" : "Days"));
$(".time-hours .num-time" , id).text(hours);
$(".time-hours .title-time" , id).text(((hours <= 1)? "Hour" : "Hours"));
$(".time-mins .num-time" , id).text(mins);
$(".time-mins .title-time" , id).text(((mins <= 1)? "Min" : "Mins"));
$(".time-secs .num-time" , id).text(secs);
$(".time-secs .title-time" , id).text(((secs <= 1)? "Sec" : "Secs"));
setTimeout(function(){CountDown(date,id)}, 1000);
}
}
$( ".deals-countdown",$element).each(function() {
var timer = $(this).data('timer');
var data = new Date(timer);
CountDown(data,$(this));
});
});
