"use strict";

console.log('begin')

$( document ).ready(function() {
    console.log( "ready!" );

    $.getJSON("test.json")
    .done(function (data) {
        console.log(data)
    })
    .fail(function () {
        console.log('fail')
    })
    .always(function () {
        console.log('complete')
    })
});