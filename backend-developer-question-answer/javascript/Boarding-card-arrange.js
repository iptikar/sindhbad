'use strict'

class Template
{
	constructor(template, data, expression) {
    	
    }
	
}
class GetBoardingList extends Template {

	constructor(arrayData) {
    	super();
    	this.arrayData = arrayData;
    }
}



var boarding = [
    {
        "from": "Barcelona",
        "to": "New York",
        "instruction": "",
        "time": "2018-02-02 20:05",
        "transport": "Flight",
        "transportno": "B33",
        "seatno": "Y15"
    },
    {
        "from": "Barcelona",
        "to": "Gerona",
        "instruction": "",
        "time": "2018-02-02 20:05",
        "transport": "Bus",
        "transportno": "M31, M32, M33",
        "seatno": "Any"
    },
    {
        "from": "Madrid",
        "to": "Barcelona",
        "instruction": "",
        "time": "2018-02-02 20:05",
        "transport": "Bus",
        "transportno": "M31, M32, M33",
        "seatno": "Any"
    },
    {
        "from": "New York",
        "to": "Stockholm",
        "instruction": "",
        "time": "2018-02-02 20:05",
        "transport": "Flight",
        "transportno": "M31, M32, M33",
        "seatno": "Any"
    },
    {
        "from": "Gerona",
        "to": "Barcelona",
        "instruction": "",
        "time": "2018-02-02 20:05",
        "transport": "Bus",
        "transportno": "M31, M32, M33",
        "seatno": "Any"
    }
];


GetBoardingList.prototype.ArrayCards = function (){

	return this.arrayData;
}

var obj = new GetBoardingList(boarding);

console.log(obj.ArrayCards())
/*
var sorted = boarding.sort(function(a,b){
                                  return (a.to == b.from) ? 0 : 1;
                              });

console.log(boarding)

*/
