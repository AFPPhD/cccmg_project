'use strict';

    document.addEventListener("DOMContentLoaded", function() { // bvselect dropdown
        var demo1 = new BVSelect({  // document.addEventListener("DOMContentLoaded", function() {... - Handler when the DOM is fully loaded, not the whole page !
            selector: "#selectbox", // i.e this is equivalent to jQuery's $(document).ready()
            placeholder: "Change Colour",
            searchbox: false,
            offset: false
        });
    });


// The following routine allows keyboard only access for bvselect dropdown
    $(window).load(function(){ // $(window).load - Make sure entire page content loaded (Plain Javascript: window.onload = function(event) {...)
       // Best to use load event methods for jQuery and Pure JS, as this will work in any browser

        // $("body").find('#main_CustomBuild').each(function(){
            // var $colourMenuButton = $(this);
            let $colourMenuButton = $('#main_CustomBuild');
            $colourMenuButton.attr('tabIndex', '0'); // Make custom button keyboard focusable
        // });

        // $("body").find('#ul_CustomBuild').each(function(){
            // var $colourSelectionBox = $(this);
            let $colourSelectionBox = $('#ul_CustomBuild');
            $colourSelectionBox.attr('tabIndex', '-1'); // Allows that element to receive programmatic focus
        // });

            let ourEvent;
            let $selectedOption;


        function setTabIndexes() {
            var $items = $('#ul_CustomBuild > li');
            $items.each(function() {
                $(this).attr('tabIndex', '-1');
            });
        }


        // The way to handle dynamically added content, is to attach the event to the document and target the event and selector that you require.
        // You need something sitting at the document level which is aware of the event and the elements you want to apply it to, so that it can
        // watch for any new elements that match and apply that event to them as well

        // Process key presses on change colour button
        $colourMenuButton.on("keydown", (function(event) {
            if ((event.which || event.keyCode) == '13') {
                if ( $colourSelectionBox.css('display') === 'none') {  // Open menu options with enter
                    ourEvent = $.Event('openEnterPress');
                    // $colourSelectionBox.trigger( "focus" );
                    $colourMenuButton.trigger(ourEvent);
                }
                else { // Close menu options with enter
                    ourEvent = $.Event('closeEnterPress');
                    $colourMenuButton.trigger(ourEvent);
                }
            } else if (event.shiftKey && (event.which || event.keyCode) == '9') {

                    // Closes menu options with Shift Tab (for situation where menu still open when shift tab from it to button)
                    ourEvent = $.Event('closeEnterPress');
                    $colourMenuButton.trigger(ourEvent);
            }
        }));

        $(document).on('openEnterPress closeEnterPress', '#main_CustomBuild', function (ourEvent) {
            // $colourSelectionBox.attr('tabIndex', '0');
            if (ourEvent.type == 'openEnterPress') {
                $colourSelectionBox.css('display', 'block');
            } else {
                $colourSelectionBox.css('display', 'none');
            }
        });


        // $(document).on('focus', function() { // Track focused element
        //     // var $focused = $(':focus');
        //     console.log('focused: ', $(document.activeElement));
        // }, true);


        setTabIndexes(); // Sets all menu options to a tabIndex value of -1

        // Given a jQuery object that represents a set of DOM elements, the .first() method
        // constructs a new jQuery object from the first element in that set.
        $('#ul_CustomBuild > li').first().attr('tabIndex', '0'); // Make Blue default for option box


        // window.onload = function() {
        //     var ul = document.getElementById('ul_CustomBuild');

        //     var items = ul.getElementsByTagName('li');
        //     ul.addEventListener('keydown', event => {
        //         const { key } = event;
        // Process key presses on menu select
        $colourSelectionBox.on('keydown', '#ul_CustomBuild > li', function (event) {
            var $selectedOption = $(this);
            if ((event.which || event.keyCode) == '9') { // Leave menu if tab pressed
                event.preventDefault();
                ourEvent = $.Event('customFocusout');
                $selectedOption.trigger(ourEvent);
            }

            if ((event.which || event.keyCode) == '13') { // Simulate mouse click functionality with enter
                event.preventDefault();
                setTabIndexes();
                $selectedOption.attr('tabIndex', '0');
                $selectedOption.trigger('click');
            } else if ((event.which || event.keyCode) == '38')
                {
                event.preventDefault();
                // $selectedOption = $(this);
                ourEvent = $.Event('changeFocusUp');
                $selectedOption.trigger(ourEvent);
            } else if ((event.which || event.keyCode) == '40') {
                event.preventDefault();
                ourEvent = $.Event('changeFocusDown');
                $selectedOption.trigger(ourEvent);
            }
        });

        $(document).on('customFocusout', '#ul_CustomBuild', function (ourEvent) {
            $colourSelectionBox.css('display', 'none'); // When tab out of selection menu, shut menu
        }); // Had to customise focusout, since arrow keys also triggered this preventing focus going to next choice


        $(document).on('changeFocusUp changeFocusDown', '#ul_CustomBuild > li', function (ourEvent) { // TODO: Need mouse click to update where keyboard focus was
            var $selectableOptions = $('#ul_CustomBuild > li');                                       // TODO: when no option was pressed
            var NoselectableOptions = $selectableOptions.length;
            let $tabbedChoice;
            // $(ourEvent.target);
            // $(this).is(':focus');
            // Get the focused element:
            var $focused = $(ourEvent.target);
            $focused.attr('autofocus', false); // If element previously had autofocus remove it
            var index = $selectableOptions.index($focused);
            var nextIndex = 0;
            // let $tabbedChoice;
            if (ourEvent.type == 'changeFocusUp') {
                // nextIndex = index > 0 ? index - 1 : 0;
                if (index == '0') {
                    nextIndex = NoselectableOptions - 1; // Put focus on last option  if previous is first - wraparound
                } else {
                    nextIndex = index - 1;
                }
            } else {
                if (index == NoselectableOptions - 1) {
                    nextIndex = 0; // Put focus on first option if previous is last - wraparound
                } else {
                    nextIndex = index + 1;
                }
            }
            setTabIndexes();
            $tabbedChoice = $selectableOptions.eq(nextIndex);
            $tabbedChoice.attr('tabIndex', '0');
            $tabbedChoice.attr('autofocus', true);
            $tabbedChoice.get(0).focus(); // get() needed to get the DOM element inside the jQuery Object
            // $(document).on('focusin', function () {
            //     $selectableOptions.eq(nextIndex).get(0).focus();
            // }, true);
        });

    });

    //         if (key !== 'ArrowDown' && key !== 'ArrowUp') return;
    //         event.preventDefault();
    //         const option = event.target; // Reference colour option button

    //         let selectedOption;
    //         if (key === 'ArrowDown') selectedOption = option.nextElementSibling;   next()
    //         if (key === 'ArrowUp') selectedOption = option.previousElementSibling; prev()

    //         if (selectedOption) {
    //             selectedOption.focus();
    //             items.forEach(element => { element.setAttribute('tabindex', '-1') });
    //             selectedOption.setAttribute('tabindex', '0');
    //         }
    //     });
    // };


    function changeColourScheme(colour) {
        // var foreground = `${colour}fg`; // "$" + `${colour}` + "-fg" another way of creating string `$${colour}-fg` (One $ too many actually and - a problem)
        // var background = `${colour}bg`; // IE does not support template strings `<string expression>`

        var coloursdata = window.getComputedStyle(
            document.querySelector('body'), ':before'
        ).getPropertyValue('content'); // Gets values of content from pseudo element body:before
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
        document.querySelector('.select-option select').style.backgroundColor = jsonObject[`${colour}fg`]; // Have to force colour change box to change colour.
        var NodeList = document.querySelectorAll('hr');                                                    // It will not inherit
        // Convert buttons NodeList to an array
        var Arr = Array.prototype.slice.call(NodeList); // This converts a NodeList to an array
        // Old method - Array.prototype.slice.call() or  const Arr = [].slice.call();- It works in all modern browsers, and back to at least IE6
        // New method - Array.from() method works in all modern browsers, but has no IE support (only Edge). You can push support back to at least IE9 with a polyfill
        // console.log('Array: '+ Arr);
        for (var x = 0; x < Arr.length; x++) {
            Arr[x].style.color = jsonObject[`${colour}bg`];
            // console.log('Array Element: ' +  Arr[x].style.color);
        }
        // var sheet = document.styleSheets[0];
        // sheet.addRule('::extension', `background-color: ${background};`, 1); Change text selection colour
    };