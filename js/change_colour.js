    // import * as mod from './sass-to-js';



// var mod = require('./sass-to-js.js');

    // fetch('../css/variables.css')
    // .then(data => data.json()).then(data => {
    //     console.log(data);
    // })



// function getObjectKeyIndex(obj, keyToFind) {
//     var i = 0, key;

//     for (key in obj) {
//         if (key == keyToFind) {
//             return i;
//         }

//         i++;
//     }

//     return null;
// }




    function changeColourScheme(colour) {
        // var foreground = `${colour}fg`; // "$" + `${colour}` + "-fg" another way of creating string `$${colour}-fg` (One $ too many actually and - a problem)
        // var background = `${colour}bg`; // IE does not support template strings `<string expression>`

        var coloursdata = window.getComputedStyle(
            document.querySelector('body'), ':before'
        ).getPropertyValue('content'); // Gets value of content from pseudo element body:before
        // var coloursdata = window.getComputedStyle(document.querySelector('head')).getPropertyValue('font-family');

        // console.log(coloursdata);

        var normalizedValue = coloursdata.replace(/^['"]+|\s+|\\|(;\s?})+|['"]$/g, ''); // Clean up characters added by browser
        var jsonObject = JSON.parse(normalizedValue);

        //(Object.keys(obj)) method to return all the keys of object
        // var fgkey = Object.keys(jsonObject)[getObjectKeyIndex(jsonObject, `${colour}fg`)];
        // var bgkey = jsonObject.hasOwnProperty(`${colour}bg`);

        document.body.style.backgroundColor = jsonObject[`${colour}bg`];
        document.querySelector('.container').style.backgroundColor = jsonObject[`${colour}fg`]; //IE 8 only supports CSS 2.1 selectors for querySelector
        document.querySelector('.navigation').style.backgroundColor = jsonObject[`${colour}fg`];
        var NodeList = document.querySelectorAll('hr');
        // Convert buttons NodeList to an array
        var Arr = Array.prototype.slice.call(NodeList); // This converts a NodeList to an array
        // Old method - Array.prototype.slice.call() or  const Arr = [].slice.call();- It works in all modern browsers, and back to at least IE6
        // New method - Array.from() method works in all modern browsers, but has no IE support (only Edge). You can push support back to at least IE9 with a polyfill
        console.log('Array: '+ Arr);
        for (var x = 0; x < Arr.length; x++) {
            Arr[x].style.color = jsonObject[`${colour}bg`];
            // console.log('Array Element: ' +  Arr[x].style.color);
        }
    };