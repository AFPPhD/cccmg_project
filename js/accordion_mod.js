var Accordion =
{
  init: function()
  {
    var accordions = Core.getElementsByClass("accordion");

    for (var i = 0; i < accordions.length; i++)
    {
      var folds = accordions[i].childNodes;          // Actually only one element node of class "accordion". If remove [i] get accordions as [object] and length is "null"
      for (var j = 0; j < folds.length; j++)         // or not an object for folds.length error. The childNodes will be the six li elements with id for the captains
      {
	  if (folds[j].nodeType == 1)
        {
          Accordion.collapse(folds[j]);
          var foldLinks = folds[j].getElementsByTagName("a");
          var foldTitleLink = foldLinks[0];  // Reference to first link in fold e.g <directory>#picard
	    Core.addEventListener(foldTitleLink, "click", Accordion.clickListener); // Add event listener to heading link e.g "Jean-Luc Picard"
          
          for (var k = 1; k < foldLinks.length; k++)               // focus events do not bubble. So, must attach a focus event listener to every element within our 
          {                                                        // our accordian which might receive keyboard focus i.e Memory Alpha and Wikipedia links
            Core.addEventListener(foldLinks[k], "focus", Accordion.focusListener);
          }
        }
      }
      
      if (location.hash.length > 1)                          // Since each fold has a unique ID, can link to specific fold from another page e.g <a href="accordion.html#pike">
      {                                                      // To expand this fold when the page is loaded, just add code to left
        var activeFold = document.getElementById(location.hash.substring(1));
        if (activeFold && activeFold.parentNode == accordions[i])
        {
          Accordion.expand(activeFold);
        }                                                   // location is the global variable that contains info on the URL of the current page. Its hash property gives the 
      }                                                     // fragment identifier portion (e.g #pike). Using the substring method, we can obtain the id by starting at the
    }                                                       // second character
  },

  collapse: function(fold)
  {
    Core.removeClass(fold, "expanded");
    Core.addClass(fold, "collapsed");
  },

  collapseAll: function(accordion)              // Reference to accordion element want to collapse
  {
    var folds = accordion.childNodes;
    for (var i = 0; i < folds.length; i++)
    {
      if (folds[i].nodeType == 1)               // Check for element nodes (li elements)
      {
        Accordion.collapse(folds[i]);
      }
    }
  },

  expand: function(fold)
  {
    //Accordion.collapseAll(fold.parentNode);  // afp - If having a max of only one fold open at any time must make sure no others open. fold.parentNode is <ul class="accordion">
    Core.removeClass(fold, "collapsed");
    Core.addClass(fold, "expanded");
  },
  
  clickListener: function(event)
  {
    var fold = this.parentNode.parentNode; // Listener obtains reference to fold that is parent node <li id=> of the parent node <h2> of the link
    if (Core.hasClass(fold, "collapsed"))
    {
      Accordion.expand(fold);
    }
    else
    {
      Accordion.collapse(fold);
    }
    Core.preventDefault(event);          // The browser following the link would not really be a problem, as just causes page to scroll to fold. But we want slick, seamless 
  },                                     // effect
  
  focusListener: function(event)
  {
    var element = this;                                      // this refers to an element somewhere inside a fold. Use loop to climb up through tree until you find parent node
    while (element.parentNode)                               // with a class of accordion, which means element in the expand() refers to li element with id
    {
      if (Core.hasClass(element.parentNode, "accordion"))
      {
        Accordion.expand(element);
        return;
      }
      element = element.parentNode;
    }
  }
};

Core.start(Accordion);
