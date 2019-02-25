// You must install async before: npm install async
var async = require('async');  
var fs = require('fs');

async.waterfall([  
    function(callback) {
        fs.readFile('/etc/passwd', 'utf8', callback);
    },
    function(passwd, callback) {
        fs.readFile('/etc/hosts', 'utf8', function(err, hosts) {
            if (err) {
                return callback(err);
            }
            var data = passwd + hosts;
            return callback(null, data);
        });
    },
    function(data, callback) {
        fs.mkdir(__dirname + '/test', function(err) {
            if (err) {
                return callback(err);
            }
            return callback(null, data);
        });
    },
    function(data, callback) {
        fs.writeFile(__dirname + '/test/data', data, 'utf8', callback);
    }
], function(err) {
    if (err) {
        console.log(err);
        return;
    }
    console.log('Done!');
});
