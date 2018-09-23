function printString(string){
  return new Promise((resolve, reject) => {
    setTimeout(
      () => {
       console.log(string)
       resolve()
      }, 
     Math.floor(Math.random() * 100) + 1
    )
  })
}


function printAll(){
  printString("A")
  .then(() => {return printString("B")
  })
  .then(() => {
    return printString("C")
  })
}
printAll()


async function getData() {
  try {
    let [val1, val2] = await Promise.all([a(), b()]);
    console.log(`All done with ${val1} ${val2}`)
  } catch(err) {
    console.log(err)
  }
}
getData();


Promise.resolve(["Hello","World","!"]).then(([a,b,c]) => {
  console.log(a,b+c);    
});


async function addAll(){
  let toPrint = ''
  toPrint = await addString(toPrint, 'A')
  toPrint = await addString(toPrint, 'B')
  toPrint = await addString(toPrint, 'C')
  console.log(toPrint) // Prints out " A B C"
}


addAll()


let [a, b, c] = await Promise.resolve(['hello', 'world', '!']);




var promise1 = Promise.resolve(3);
var promise2 = 42;
var promise3 = new Promise(function(resolve, reject) {
  setTimeout(resolve, 100, 'foo');
});

Promise.all([promise1, promise2, promise3]).then(function(values) {
  console.log(values);
});

// Is JAVASCRIPT COMPILE 
// Ans: Yes, in 2014, everyone compiles JavaScript to native code using various strategies to optimize the code. 
// There are even standards like asm.js to allow to compile JavaScript in such a way that the resulting code is at least as fast as code written in C/C++ or Java.
// expected output: Array [3, 42, "foo"]

/* What’s the difference between object literal and new? */

// Literal way 
function Obj( prop ) { 
    return { 
        p : prop, 
        sayHello : function(){ alert(this.p); }, 
    }; 
} 

//Prototype way:

function Obj( prop ) { 
    this.p = prop; 
} 
Obj.prototype.sayHello = function(){alert(this.p);}; 


// Why not just assign function to properties instead of protoype for an object?
// Ans Methods that inherit via the prototype chain can be changed universally for all instances, for example:

// If you want to know which function cause error 
async function loginController() {
  try {
    const a = await loginService().
    catch((error) => {
      throw new CustomErrorHandler({
        code: 101,
        message: "a failed",
        error: error
      })
    });
    const b = await someUtil().
    catch((error) => {
      throw new CustomErrorHandler({
        code: 102,
        message: "b failed",
        error: error
      })
    });
    //someoeeoe
    if (a && b) console.log("no one failed")
  } catch (error) {
    if (!(error instanceof CustomErrorHandler)) {
      console.log("gen error", error)
    }
  }
}


function Class () {}
Class.prototype.calc = function (a, b) {
    return a + b;
}

// Create 2 instances:
var ins1 = new Class(),
    ins2 = new Class();

// Test the calc method:
console.log(ins1.calc(1,1), ins2.calc(1,1));
// -> 2, 2

// Change the prototype method
Class.prototype.calc = function () {
    var args = Array.prototype.slice.apply(arguments),
        res = 0, c;

    while (c = args.shift())
        res += c;

    return res; 
}

// Test the calc method:
console.log(ins1.calc(1,1,1), ins2.calc(1,1,1));

// How do I implement modules natively in javascript?
// Ans: To create an ES Module, just create a file with the mjs extension that includes the module code. For example:
export const spout = 'the spout'
export const handle = 'the handle'
export const tea = 'hot tea'

// To use it, just import the file from another mjs file:
import {handle, spout, tea} from './01-kettle.mjs'

console.log(handle) // ==> the handle
console.log(spout) // ==> the spout
console.log(tea) // ==> hot tea


// When is angular a bad option?
// ANS Angular does a few things very well. If you want to make a single-page, entirely AJAX-driven web app using the MVC paradigm with testability at its core, it's probably the best JS framework out there. 

//How do I deal with scope collisions (especially in Node)?
// Ans
//They do not have global scope.

//Route
//The route takes a handler function for each route. That route is passed the req and res objects.

app.get('/my-route', myHandler);
Handler
Your handler receives those objects and uses them.

exports.myHandler = function(req, res) {
    res.send("Hello world");
);

//Closures
//When you make a database call (or any other io bound call) you pass it a callback. The req and res objects live in that 


// Difference between o = Object() vs o = new Object() ?
They both do the same thing (unless someone's done something unusual), other than that your second one creates an object and adds a property to it. But literal notation takes less space in the source code. It's clearly recognizable as to what is happening, so using new Object(), you are really just typing more and (in theory, if not optimized out by the JavaScript engine) doing an unnecessary function call.

These

person = new Object() /*You should put a semicolon here too.  
It's not required, but it is good practice.*/ 
//-or-

person = {
    property1 : "Hello"
};
//technically do not do the same thing. The first just creates an object. The second creates one and assigns a property. For the first one to be the same you then need a second step to create and assign the property.

//The "something unusual" that someone could do would be to shadow or assign to the default Object global:

// Don't do this
Object = 23;
//In that highly-unusual case, new Object will fail but {} will work.

//In practice, there's never a reason to use new Object rather than {} (unless you've done that very unusual thing).

///////////////


// How do promises work? What are the advantages over traditonal callbacks?

/*
 * If you’ve done any serious work in JavaScript,
 *  you have probably had to face callbacks, nested inside of callbacks, 
 * nested inside of callbacks. This is especially true of code written in node.js, 
 * since every form of i/o, such as file reads, database reads and writes, 
 * and memcache access, is asynchronous, and most code needs a more than a single i/o call.
 *  You may end up with code that looks something like this:
 * */

function isUserTooYoung(id, callback) {
    openDatabase(function(db) {
        getCollection(db, 'users', function(col) {
            find(col, {'id': id},function(result) {
                result.filter(function(user) {
                    callback(user.age < cutoffAge)
                })
            })
        })
    })
    
    
 // What is a promise?
 
function isUserTooYoung(id) {
    return openDatabase()
        .then(getCollection)
        .then(find.bind(null, {'id': id}))
        .then(function(user) {
            return user.age < cutoffAge;
        });
}

// Much easier to follow, no?

//What are the advantage of directives? What role do they play in MVC?
//The difference between link and controller comes into play when you want to nest directives in your DOM and expose API 
//functions from the parent directive to the nested ones.



/*
 * "How does this and $scope work in AngularJS controllers?"

Short answer:

this
When the controller constructor function is called, this is the controller.
When a function defined on a $scope object is called, this is the "scope in effect when the function was called". This may (or may not!) be the $scope that the function is defined on. So, inside the function, this and $scope may not be the same.
$scope
Every controller has an associated $scope object.
A controller (constructor) function is responsible for setting model properties and functions/behaviour on its associated $scope.
Only methods defined on this $scope object (and parent scope objects, if prototypical inheritance is in play) are accessible from the HTML/view. E.g., from ng-click, filters, etc.

 * */
 
 

// Explain your process for testing? Framework? Which do you prefer? Why?

/*
 * Mocha is a feature-rich JavaScript test framework running on Node.js and in the browser, 
 * making asynchronous testing simple and fun. Mocha tests run serially, 
 * allowing for flexible and accurate reporting, 
 * while mapping uncaught exceptions to the correct test cases. Hosted 
 * 
 * */
 
 // How is ‘require’ implemented in Node?
 //http://fredkschott.com/post/2014/06/require-and-the-module-system/

// 


/*
 * Express is a routing and middleware web framework that has minimal functionality of its own: An Express application is essentially a series of middleware function calls.

Answer:
* 
  Middleware functions are functions that have access to the request object (req), the response object (res), 
* and the next middleware function in the application’s request-response cycle. 
* The next middleware function is commonly denoted by a variable named next.
* 
* https://expressjs.com/en/guide/using-middleware.html
 
 ThisIsMyLife123
 * $_POSTthisismylife123
 **/


/* What’s the difference between call and apply? */

/*
 * The difference is that apply lets you invoke the function with arguments as an array; call requires the parameters be listed explicitly. A useful mnemonic is "A for array and C for comma."

See MDN's documentation on apply and call.

Pseudo syntax:

theFunction.apply(valueForThis, arrayOfArgs)

theFunction.call(valueForThis, arg1, arg2, ...)

There is also, as of ES6, the possibility to spread the array for use with the call function, you can see the compatibilities here.

Sample code:

function theFunction(name, profession) {
    console.log("My name is " + name + " and I am a " + profession +".");
}
theFunction("John", "fireman");
theFunction.apply(undefined, ["Susan", "school teacher"]);
theFunction.call(undefined, "Claude", "mathematician");
theFunction.call(undefined, ...["Matthew", "physicist"]); 
* 
* https://stackoverflow.com/questions/1986896/what-is-the-difference-between-call-and-apply
 * */


// Pro and cons of Nodejs?
// https://www.altexsoft.com/blog/engineering/the-good-and-the-bad-of-node-js-web-app-development/


/* Nodejs best practices */
//Avoid long argument lis

function getRegisteredUsers (fields, include, fromDate, toDate) { /* implementation */ }
getRegisteredUsers(['firstName', 'lastName', 'email'], ['invitedUsers'], '2016-09-26', '2016-12-13')

// DO
function getRegisteredUsers ({ fields, include, fromDate, toDate }) { /* implementation */ }
getRegisteredUsers({
  fields: ['firstName', 'lastName', 'email'],
  include: ['invitedUsers'],
  fromDate: '2016-09-26',
  toDate: '2016-12-13'
})

/*
 * Reduce side effects
	Use pure functions without side effects, whenever you can. They are really easy to use and test.
 * */
 
 // DON'T
function addItemToCart (cart, item, quantity = 1) {
  const alreadyInCart = cart.get(item.id) || 0
  cart.set(item.id, alreadyInCart + quantity)
  return cart
}

// DO
// not modifying the original cart
function addItemToCart (cart, item, quantity = 1) {
  const cartCopy = new Map(cart)
  const alreadyInCart = cartCopy.get(item.id) || 0
  cartCopy.set(item.id, alreadyInCart + quantity)
  return cartCopy
}

// or by invert the method location
// you can expect that the original object will be mutated
// addItemToCart(cart, item, quantity) -> cart.addItem(item, quantity)
const cart = new Map()
Object.assign(cart, {
  addItem (item, quantity = 1) {
    const alreadyInCart = this.get(item.id) || 0
    this.set(item.id, alreadyInCart + quantity)
    return this
  }
})


/*
 * Organize your functions in a file according to the stepdown rule
 * */
 
 // DON'T
// "I need the full name for something..."
function getFullName (user) {
  return `${user.firstName} ${user.lastName}`
}

function renderEmailTemplate (user) {
  // "oh, here"
  const fullName = getFullName(user)
  return `Dear ${fullName}, ...`
}

// DO
function renderEmailTemplate (user) {
  // "I need the full name of the user"
  const fullName = getFullName(user)
  return `Dear ${fullName}, ...`
}

// "I use this for the email template rendering"
function getFullName (user) {
  return `${user.firstName} ${user.lastName}`
}

// Write nice async code?


// centralized error object that derives from Node’s Error
function AppError(name, httpCode, description, isOperational) {
    Error.call(this);
    Error.captureStackTrace(this);
    this.name = name;
    //...other properties assigned here
};

//https://github.com/i0natan/nodebestpractices/blob/master/sections/errorhandling/useonlythebuiltinerror.md
AppError.prototype.__proto__ = Error.prototype;

module.exports.AppError = AppError;

// client throwing an exception
if(user == null)
    throw new AppError(commonErrors.resourceNotFound, commonHTTPErrors.notFound, "further explanation", true)



// marking an error object as operational 
var myError = new Error("How can I add new product when no value provided?");
myError.isOperational = true;

// or if you're using some centralized error factory (see other examples at the bullet "Use only the built-in Error object")
function appError(commonType, description, isOperational) {
    Error.call(this);
    Error.captureStackTrace(this);
    this.commonType = commonType;
    this.description = description;
    this.isOperational = isOperational;
};

throw new appError(errorManagement.commonErrors.InvalidInput, "Describe here what happened", true);




// Error handling methods 
// DAL layer, we don't handle errors here
DB.addDocument(newCustomer, (error, result) => {
    if (error)
        throw new Error("Great error explanation comes here", other useful parameters)
});

// API route code, we catch both sync and async errors and forward to the middleware
try {
    customerService.addNew(req.body).then((result) => {
        res.status(200).json(result);
    }).catch((error) => {
        next(error)
    });
}
catch (error) {
    next(error);
}

// Error handling middleware, we delegate the handling to the centralized error handler
app.use(async (err, req, res, next) => {
    const isOperationalError = await errorHandler.handleError(err);
    if (!isOperationalError)
        next(err);
})
