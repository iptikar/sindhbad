function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear(),
  		hours = d.getHours(),
  		minute = d.getMinutes(),
        secound = d.getSeconds()
  		

    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

    return [year, month, day].join('-')+' '+ [hours, minute, secound].join(':');
}

module.exports = {
					mysqldate:formatDate
				}
