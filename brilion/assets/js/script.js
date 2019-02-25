'use strict';

$(function() {


  /*
  |--------------------------------------------------------------------------
  | Configure your website
  |--------------------------------------------------------------------------
  |
  | We provided several configuration variables for your ease of development.
  | Read their complete description and modify them based on your need.
  |
  */
 
  thesaas.config({

    /*
    |--------------------------------------------------------------------------
    | Google API Key
    |--------------------------------------------------------------------------
    |
    | Here you may specify your Google API key if you need to use Google Maps
    | in your application
    |
    | https://developers.google.com/maps/documentation/javascript/get-api-key
    |
    */

    googleApiKey: 'AIzaSyDRBLFOTTh2NFM93HpUA4ZrA99yKnCAsto',

    /*
    |--------------------------------------------------------------------------
    | Google Analytics Tracking
    |--------------------------------------------------------------------------
    |
    | If you want to use Google Analytics, you can specify your Tracking ID in
    | this option. Your key would be a value like: UA-12345678-9
    |
    */

    googleAnalyticsId: '',

    /*
    |--------------------------------------------------------------------------
    | Smooth Scroll
    |--------------------------------------------------------------------------
    |
    | If true, the browser's scrollbar moves smoothly on scroll and gives your
    | visitor a better experience for scrolling.
    |
    */
   
    smoothScroll: true

  });





  /*
  |--------------------------------------------------------------------------
  | Custom Javascript code
  |--------------------------------------------------------------------------
  |
  | Now that you configured your website, you can write additional Javascript
  | coou might want to add more plugins and initde below this comment. Yialize
  | them in this file.
  |
  */
 
$(function(){
$('.price1').mouseover(function(){
  $('.price2').css('background', '#fff');
  $('.price2').css('color', '#b5b9bf');
  $('.price2 .price').css('color', '#37404d');
  $('.price1 .price').css('color', '#FFF');
  $('.price1 .btn').removeClass("get");
  $('.price1 .btn').addClass("demo");
  $('.price2 .btn').removeClass("demo");
  $('.price2 .btn').addClass("get");

  $('.price1').mouseout(function(){
        $('.price2').css('background', '#c04d30');
  $('.price2').css('color', '#fff');
  $('.price2 .price').css('color', '#fff');
  $('.price1 .price').css('color', '#37404d');
  $('.price1 .btn').removeClass("demo");
  $('.price1 .btn').addClass("get");
  $('.price2 .btn').removeClass("get");
  $('.price2 .btn').addClass("demo");
  
    });
}); 
});

$(function(){
$('.price3').mouseover(function(){
  $('.price2').css('background', '#fff');
  $('.price2').css('color', '#b5b9bf');
  $('.price2 .price').css('color', '#37404d');
  $('.price3 .price').css('color', '#FFF');
  
  $('.price3 .btn').removeClass("get");
  $('.price3 .btn').addClass("demo");
  $('.price2 .btn').removeClass("demo");
  $('.price2 .btn').addClass("get");
  
 

  $('.price3').mouseout(function(){
        $('.price2').css('background', '#c04d30');
  $('.price2').css('color', '#fff');
  $('.price2 .price').css('color', '#fff');
  $('.price3 .price').css('color', '#37404d');
  
  $('.price3 .btn').removeClass("demo");
  $('.price3 .btn').addClass("get");
  $('.price2 .btn').removeClass("get");
  $('.price2 .btn').addClass("demo");
    });
}); 
});




});
