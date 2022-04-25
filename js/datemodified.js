/*==============================================================================

    Routines written by John Gardner - 2004

    See www.braemoor.co.uk/software for information about more freeware
    available.

		Version V01X02 - 1st May 2008
		                 updated to report "not available" if last modified date is
		                 not returned. This was true for Safari under Windows.

                Modified by A F Prime - 10th Nov 2009
                Updated                  2nd Sep 2010

================================================================================

Routine to write date document modified

   Parameters:
        time              True if time is to be displayed else False

   e.g.
        <script type="text/javascript">writeDateModified (false);</script>
   or
        <script type="text/javascript">writeDateModified (true);</script>

   Note that if the server has failed to load up the HTTP header field with a
   parsable date, nothing is written.

*/

function writeDateModified(time) {

  var days = new Array;                        // Array to hold day names
  var months = new Array;                      // Array to hold up month names
  var text = "Last Update on: ";               // String to hold modified date afp

  // Load up day names
  days[0] = "Sunday";
  days[1] = "Monday";
  days[2] = "Tuesday";
  days[3] = "Wednesday";
  days[4] = "Thursday";
  days[5] = "Friday";
  days[6] = "Saturday";

  // Load up month names
  months[0] = "January";
  months[1] = "February";
  months[2] = "March";
  months[3] = "April";
  months[4] = "May";
  months[5] = "June";
  months[6] = "July";
  months[7] = "August";
  months[8] = "September";
  months[9] = "October";
  months[10] = "November";
  months[11] = "December";

  // Assign date variables with document.lastModified
  var modDate = new Date(Date.parse(document.lastModified));


  // If we have a valid date reformat it.
 if (modDate != 0 && modDate != "Invalid Date") {

    // Set up day variable to hold the name of the day
    var day = days[modDate.getDay()];

    // ndate variable holds day of month
    var ndate = modDate.getDate();

	// Checking if st nd or rd afp
    if (ndate == "1" || ndate == "21" || ndate == "31") {

      ndate = ndate + "st";
    }
	else if (ndate == "2" || ndate == "22") {

         ndate = ndate + "nd";

    } else if (ndate == "3" || ndate == "23") {

      ndate = ndate + "rd";

    } else (ndate = ndate + "th");






    // Set up month variable to hold the name of the month
    var month = months[modDate.getMonth()];

    // Get the year and if it is less than 1000 add 1900 to it.
    var year = modDate.getYear();
    if (year < 1000) year = year + 1900;

    // Load up the time variables if required
    if (time) {
      var hour = modDate.getHours().toString();
      if (hour.length == 1) hour = "0" + hour;
      var minute = modDate.getMinutes().toString();
      if (minute.length == 1) minute = "0" + minute;
      var second = modDate.getSeconds().toString();
      if (second.length == 1) second = "0" + second;
    }

    // Display date and time document was last updated.
    // document.write(day + " " + ndate + " " + month + " " + year+ "  "); orig

    text += day + " " + ndate + " " + month + " " + year + "  "; // afp

    if (time) {
      // document.write(hour + ":" + minute + ":" + second); orig
      text += hour + ":" + minute + ":" + second; // afp
    }
  }
	// else document.write("not available"); orig
  else {

      text += "Not Available"; // afp
  }
  return text; // afp
 }


