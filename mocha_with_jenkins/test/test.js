// Require the built in 'assertion' library

var assert = require('assert');
// Create a test suite (group) called Math

/*
 * ASSERT MODUEL PRODUCT FOLLOWING METHODS 
 * */
/*
{
   [
      Function:ok
   ]   fail:[
      Function:fail
   ],
   AssertionError:[
      Function:AssertionError
   ],
   ok:[
      Circular
   ],
   equal:[
      Function:equal
   ],
   notEqual:[
      Function:notEqual
   ],
   deepEqual:[
      Function:deepEqual
   ],
   notDeepEqual:[
      Function:notDeepEqual
   ],
   deepStrictEqual:[
      Function:deepStrictEqual
   ],
   notDeepStrictEqual:[
      Function:notDeepStrictEqual
   ],
   strictEqual:[
      Function:strictEqual
   ],
   notStrictEqual:[
      Function:notStrictEqual
   ],
   throws:[
      Function:throws
   ],
   rejects:[
      AsyncFunction:rejects
   ],
   doesNotThrow:[
      Function:doesNotThrow
   ],
   doesNotReject:[
      AsyncFunction:doesNotReject
   ],
   ifError:[
      Function:ifError
   ],
   strict:{
      [
         Function:strict
      ]      fail:[
         Function:fail
      ],
      AssertionError:[
         Function:AssertionError
      ],
      ok:[
         Circular
      ],
      equal:[
         Function:strictEqual
      ],
      notEqual:[
         Function:notStrictEqual
      ],
      deepEqual:[
         Function:deepStrictEqual
      ],
      notDeepEqual:[
         Function:notDeepStrictEqual
      ],
      deepStrictEqual:[
         Function:deepStrictEqual
      ],
      notDeepStrictEqual:[
         Function:notDeepStrictEqual
      ],
      strictEqual:[
         Function:strictEqual
      ],
      notStrictEqual:[
         Function:notStrictEqual
      ],
      throws:[
         Function:throws
      ],
      rejects:[
         AsyncFunction:rejects
      ],
      doesNotThrow:[
         Function:doesNotThrow
      ],
      doesNotReject:[
         AsyncFunction:doesNotReject
      ],
      ifError:[
         Function:ifError
      ],
      strict:[
         Circular
      ]
   }
}

*/



describe('Math', function() {
    // Test One: A string explanation of what we're testing
    it('should test if 3*3 = 9', function(){
      // Our actual test: 3*3 SHOULD EQUAL 9
      assert.equal(9, 3*3);
    });
    // Test Two: A string explanation of what we're testing
    it('should test if (3-4)*8 = -8', function(){
      // Our actual test: (3-4)*8 SHOULD EQUAL -8
      assert.equal(-8, (3-4)*8);
    });

});


var request = require("request");

var base_url = "http://localhost:8888/"

describe("Hello World Server", function() {
  describe("GET /", function() {
    it("returns status code 200", function() {

      request.get(base_url, function(error, response, body) {


      });

    });
  });
});
