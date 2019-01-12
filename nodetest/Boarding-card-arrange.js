'use strict'

class GetBoardingList {
  constructor (arrayData, firstindex) {
    this.firstindex = 'fuckyou';

    this.arrayData = arrayData;
  }
}

class GetHTMLTemplate extends GetBoardingList {
  constructor (data) {
    	super()

      	this.data = data
  }
}

var boarding = [
  {
    'from': 'Barcelona',
    'to': 'New York',
    'instruction': '',
    'time': '2018-02-02 20:05',
    'transport': 'Flight',
    'transportno': 'B33',
    'seatno': 'Y15'
  },
  {
    'from': 'Barcelona',
    'to': 'Gerona',
    'instruction': '',
    'time': '2018-02-02 20:05',
    'transport': 'Bus',
    'transportno': 'M31, M32, M33',
    'seatno': 'Any'
  },
  {
    'from': 'Madrid',
    'to': 'Barcelona',
    'instruction': '',
    'time': '2018-02-02 20:05',
    'transport': 'Bus',
    'transportno': 'M31, M32, M33',
    'seatno': 'Any'
  },
  {
    'from': 'New York',
    'to': 'Stockholm',
    'instruction': '',
    'time': '2018-02-02 20:05',
    'transport': 'Flight',
    'transportno': 'M31, M32, M33',
    'seatno': 'Any'
  },
  {
    'from': 'Gerona',
    'to': 'Barcelona',
    'instruction': '',
    'time': '2018-02-02 20:05',
    'transport': 'Bus',
    'transportno': 'M31, M32, M33',
    'seatno': 'Any'
  }
]

GetBoardingList.prototype.propComparator =  function (prop, prop1) {
    
    return function(a, b) {
        return a[prop] == b[prop1] ? 0 : 1;
    }
}



GetBoardingList.prototype.ArrayCards = function () {
	
	var self = this; // so = current `this`
  // Here We will arragne the data
  var boradingList = this.arrayData

  var comparefirst = this.firstindex

  // Check if data is type of array
  
    // Sortted list

   var SortedBoarding =  boradingList.sort(this.propComparator('to', 'from'));

   this.ArrayCards = SortedBoarding;
   
  // return SortedBoarding;
  console.log(SortedBoarding);
}

// Get the template
GetBoardingList.prototype.GetTemplate = function (data, template, regrex) {

  // Here we will print the data

}



GetBoardingList.prototype.prop = 'to';

var obj = new GetBoardingList(boarding, 'to')


//obj.prototype.prop1 = 'from';

console.log(obj.ArrayCards())

//console.log(obj.prop)
// console.log(obj.firstindex)
/*
var sorted = boarding.sort(function(a,b){
                                  return (a.to == b.from) ? 0 : 1;
                              });

console.log(boarding)

*/
