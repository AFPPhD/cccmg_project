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
            $(".navigation").height('605px'); // Extend navbar height to hold bvselect (or default menu 574px) Change Colour Button
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
            let $tabbedChoice;


        function setTabIndexes() {
            var $items = $('#ul_CustomBuild > li');
            $items.each(function() {
                $(this).attr('tabIndex', '-1');
            });
        }

        setTabIndexes(); // Sets all menu options to a tabIndex value of -1

        // Given a jQuery object represents a set of DOM elements, the .first() method
        // constructs a new jQuery object from the first element in that set.
        $('#ul_CustomBuild > li').first().attr('tabIndex', '0'); // Make Blue default for option box (i.e focusable)
        $selectedOption = $('#ul_CustomBuild > li').first();
        $tabbedChoice = $selectedOption;


        // The way to handle dynamically added content, is to attach the event to the document and target the event and selector that you require.
        // You need something sitting at the document level which is aware of the event and the elements you want to apply it to, so that it can
        // watch for any new elements that match and apply that event to them as well

        // Process enter key presses on change colour button
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
            }  else if (event.shiftKey && (event.which || event.keyCode) == '9') {

                    // Closes menu options with Shift Tab (for situation where menu still open when shift tabbed from button to the menu)
                    // because it is tab opened and not tabbed into - i.e no focus is put on an element inside the menu, so that the shift tab
                    // will close it
                    ourEvent = $.Event('closeEnterPress'); // TODO: Remove this by adding as a focusout event, and do same for entering option ?
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


        // setTabIndexes(); // Sets all menu options to a tabIndex value of -1

        // // Given a jQuery object represents a set of DOM elements, the .first() method
        // // constructs a new jQuery object from the first element in that set.
        // $('#ul_CustomBuild > li').first().attr('tabIndex', '0'); // Make Blue default for option box


        // window.onload = function() {
        //     var ul = document.getElementById('ul_CustomBuild');

        //     var items = ul.getElementsByTagName('li');
        //     ul.addEventListener('keydown', event => {
        //         const { key } = event;


        // Process key presses on menu select
        $colourSelectionBox.on('keydown', '#ul_CustomBuild > li', function (event) {
            $tabbedChoice = $(document.activeElement); // Previously document.activeElement was this
            if ((event.which || event.keyCode) == '9' || (event.shiftKey && (event.which || event.keyCode) == '9')) { // Leave menu if tab or shift tab pressed
                    event.preventDefault();
                    // setTabIndexes();
                    // $selectedOption.attr('tabIndex', '0');
                    ourEvent = $.Event('customFocusout');
                    $tabbedChoice.trigger(ourEvent);
            } else {
                if ((event.which || event.keyCode) == '13') { // Simulate mouse click functionality with enter
                    event.preventDefault();
                    // setTabIndexes();
                    // $selectedOption.attr('tabIndex', '0');
                    $selectedOption = $tabbedChoice; // i.e pressing enter on already selected option
                    // ourEvent = $.Event('customFocusout');
                    // $selectedOption.on('customFocusout click', '#ul_CustomBuild > li', false);
                    // $selectedOption.trigger(ourEvent);
                    $selectedOption.trigger('click');
                } else if ((event.which || event.keyCode) == '38') // Up arrow key
                    {
                    event.preventDefault();
                    ourEvent = $.Event('changeFocusUp');
                    // $selectedOption.trigger(ourEvent);
                    $tabbedChoice.trigger(ourEvent);
                } else if ((event.which || event.keyCode) == '40') { // Down arrow key
                    event.preventDefault();
                    ourEvent = $.Event('changeFocusDown');
                    // $selectedOption.trigger(ourEvent);
                    $tabbedChoice.trigger(ourEvent);
                }
            }
        });

        $(document).on('customFocusout', function () {
            // var $target = $(event.target);
            // var $target = $(document.activeElement);
            // if (($target != '#main_CustomBuild')) {
                $colourSelectionBox.css('display', 'none'); // When tab out of selection menu, also shift tab or enter option and clicking elsewhere on page
                if ($tabbedChoice.get(0).innerHTML != $selectedOption.get(0).innerHTML) { // Put focus back on selected option
                    setTabIndexes();
                    // $tabbedChoice.attr('autofocus', false);
                    $selectedOption.attr('tabIndex', '0');
                    // $selectedOption.attr('autofocus', true);
                }
                // if (($target == '#ul_CustomBuild > li')) {
                //     $selectedOption.trigger('click');
                // }
            // }
        }); // Had to customise focusout, since arrow keys also triggered focusout preventing focus going to next choice


        $(document).on('mousedown', function (event) {  // Pointer Click elsewhere in the document.
            // Add touchend or tap ?
            // $target assigned to $(this), $(document.activeElement) or $(':focus') does not work!
            // var pointerType = e.which;        // Assign mouse or touch event
            var $target = $(event.target);
            if (($target.get(0).id != 'main_CustomBuild') && ($target.parent().get(0).id != 'ul_CustomBuild')) {
                // if ( (jQuery.type(pType) === 'string' && pType.val() > 0) && jQuery.type(pType) !== 'undefined' && pType !== null) { // i,e pointer click and not a keyboard click (Can mouse click on colour and change with this)
                // if (pointerType == 1) {
                    ourEvent = $.Event('customFocusout');
                    $target.trigger(ourEvent);
                // }
            } else if ($target.parent().get(0).id == 'ul_CustomBuild') { // Pointer Click on colour option, excluding menu open/close button
                setTabIndexes();
                $selectedOption = $target; // Need to use $target to correctly set chosen option
                $tabbedChoice = $selectedOption; // Make sure update the tabbed option
                $selectedOption.attr('tabIndex', '0');
                $selectedOption.trigger('click');
            }
        });


        $(document).on('changeFocusUp changeFocusDown', '#ul_CustomBuild > li', function (ourEvent) {
            var $selectableOptions = $('#ul_CustomBuild > li');
            var NoselectableOptions = $selectableOptions.length;
            // let $tabbedChoice;
            var $focused = $(ourEvent.target);
            var index = $selectableOptions.index($focused);
            // $focused.attr('autofocus', false); // autofocus removed, to allow for situation where there was a previously tabbed choice
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
            // $tabbedChoice.attr('autofocus', true);
            $tabbedChoice.get(0).focus(); // [] or get() needed to get the DOM element inside the jQuery Object
                                          // Without this, keyboard focus not working
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
        document.querySelector('.select-option select').style.backgroundColor = jsonObject[`${colour}fg`]; // Have to force colour change box to change colour. It will not inherit
        document.documentElement.style.setProperty("--highlight-color", jsonObject[`${colour}bg`]);
        var NodeList = document.querySelectorAll('hr');
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