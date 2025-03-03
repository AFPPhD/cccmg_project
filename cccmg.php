<!DOCTYPE html>		<!--

Written by: Anthony Prime

-->											<!-- Updated DOCTYPE, <html>, <head> and <script> from XHTML Strict to HTML5 compliant. Also removed trailing spaces 130820 -->
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Classical Collectors' Classical Music Guide</title>
	<meta name="Description" content="Classical Collectors' Classical Music Guide"/>
	<meta name="Keywords" content="Classical Music Recommendations, Compilations, Recordings"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>		<!-- width=device-width allows the page to reflow content to match different screen widths, where device-width (screen resolution width) is the width of the screen in CSS pixels (logical pixels) set at a scale of 100% -->
	<!-- Many high dpi mobile browsers can display their pages in a smaller physical size by translating multiple hardware pixels for each CSS "pixel" -->
	<!-- Native Screen Resolution/Device Pixel Ratio (DPR) = Logical Pixels. i.e for most devices, screen resolution will be the default viewport width -->
	<!-- But, for scaled resolutions, the viewport width will have a screen resolution not equal to Native Screen Resolution/Device Pixel Ratio (DPR) -->
	<!-- initial-scale controls the zoom level when the page is first loaded i.e on high dpi screens, pages with initial-scale=1 will effectively be zoomed by browsers, preventing usability and readability problems on many touch-optimized web sites -->
	<!-- iPhone exhibits zooming behaviour when rotating to landscape (but not when loading first in landscape). initial-scale stops that -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>  <!-- IE=edge: specifies that IE should run in the highest mode available to that version of IE as opposed to a compatibility mode; IE8 can support up to IE8 modes, IE9 can support up to IE9 modes, and so on -->
	<!-- <link rel="stylesheet" href="/path/to/my.css" media="print" onload="this.media='all'"> Remaining CSS can load asynchronously so it doesn’t delay page rendering -->
	<!-- <link rel="preload" href="/my-font.woff2" crossorigin="anonymous" as="font" type="font/woff2"> -->
	<!-- <link rel="preload" href="css/material_icons.css"/> -->
	<!-- images/Eras_Bold_ITC_transparent-2x.png 976w"> -->
		<!-- images/Eras_Bold_ITC_transparent-4x.png 1952w,
        images/Eras_Bold_ITC_transparent-8x.png 3904w" -->
	<link rel="stylesheet" href="css/cccmg-min.css"/> <!-- Minified on minifer.org -->
	<link rel="stylesheet" href="css/material_icons-min.css"/>
	<link rel="stylesheet" href="css/navigation-min.css"/>
	<link rel="stylesheet" href="css/variables-min.css"/>	<!-- SASS created file using sass-json-export.scss -->
	<link rel="stylesheet" href="css/bvselect-min.css"/> <!-- Style sheet for Custom dropdown menu using bvselect.js -->
	<link rel="stylesheet" href="css/main-min.css"/>	<!-- SASS created file --> <!-- Minified on minifer.org -->
	<link rel="stylesheet" href="css/print-min.css"/>  <!-- Creates print version of website --> <!-- media types moved into print and 800 css files 300911 -->
	<link rel="preload" as="image" imagesrcset="images/Eras_Bold_ITC_transparent.webp 488w, images/Eras_Bold_ITC_transparent-2x.webp 976w" fetchpriority="high"/>
	<link rel="icon" type="image/x-icon" href="images/favicon.ico" fetchpriority="low"/>
</head>

<body>
<header><a class="skiplink" href="#intro">Skip to main content</a></header>
<div class="topbar"><a href="#" id ="top">CCCMG</a><!-- href added to get rid of crawlable complaint in SEO check (and to make focusable) --><!-- Could use img type for logo -->
<span>Shortcuts</span><!-- Text -->
<input type="checkbox" aria-label="hidden" id="toggle"/><!-- Checkbox, which will not be displayed -->
<label for="toggle" aria-label="Toggle menu" type="checkbox" class="checkbtn"></label><!-- Mobile Hamburger Menu Icon disabled aria-disabled="true" &#9776; -->
<div class="background"><div class="blur"></div></div>
<div class="navigation" role="navigation">
		<h3>Shortcuts</h3>  <!-- TODO: Remove hidden class as this is removing one click jump to link functionality -->
        <ul>
          <li><a href="#">Top of Page</a></li>
		  <li><a href="#intro">Introduction</a></li>
		  <li><a href="#key">Key</a></li>
		  <li><a href="#compilations">Compilations</a></li>
		  <li><a href="#complete_pieces">Complete Pieces</a></li>  <!-- Add Complete Pieces to Navigation menu 071011 -->
          <li><a href="#JSB">J.S.Bach</a></li>
          <li><a href="#LVB">Beethoven</a></li>
		  <li><a href="#JB">Brahms</a></li>
          <li><a href="#MB">Bruch</a></li>
		  <li><a href="#AB">Bruckner</a></li>
		  <li><a href="#FC">Chopin</a></li>
		  <li><a href="#AD">Dvo&#x159;&aacute;k</a></li>
		  <li><a href="#JH">Haydn</a></li>
		  <li><a href="#FM">Mendelssohn</a></li>
		  <li><a href="#WAM">Mozart</a></li>
		  <li><a href="#SR">Rachmaninov</a></li>
		  <li><a href="#FS">Schubert</a></li>
		  <li><a href="#JS">Sibelius</a></li>
		  <li><a href="#PIT">Tchaikovsky</a></li>
		  <li><a href="#AV">Vivaldi</a></li>
		  <li><a href="#VW">Vaughan Williams</a></li>
		</ul>
		  	<div class = "select-option"> <!-- id="selectbox" for bvselect.js -->
		  		<select id="selectbox" autocomplete = "off" onchange = "changeColourScheme(this.options[this.selectedIndex].value)"> <!-- onchange event occurs when the value of an element has been changed -->
				  <!-- <option hidden disabled selected>Change Colour</option> -->
					<option value = "blue">Blue</option>	<!-- autocomplete="off" ensures default option appears in drop down menu by clearing cache of previously chosen value in firefox -->													 <!-- It allows you to make changes without reloading the page -->
		  			<option value = "green">Green</option>
		  			<option value = "red">Red</option>
		  			<option value = "orange">Brown</option>
		  		</select>
		  	</div>
</div>
</div>



<div class="container" role="main">
<!-- <h1 class="flash_header">Casual Collectors' Classical Music Guide</h1>     Eras Bold ITC header shows if javascript enabled -->
<!-- <h1 class="pngtitle">Casual Collectors' Classical Music Guide</h1> -->
<div class="pngtitle">
	<h1><img srcset="images/Eras_Bold_ITC_transparent.webp 488w,
	images/Eras_Bold_ITC_transparent-2x.webp 976w"
	sizes="(max-width: 488px) 488px, 976px"
  	src="images/Eras_Bold_ITC_transparent.webp"
	alt="Casual Collectors' Classical Music Guide" width="680" height="146"/></h1>
</div> <!-- Was width="700" height="151" loading="eager" - Any images within the viewport should be loaded eagerly using the browser's defaults -->

<br/>

<?php
	require_once("lastmodified.php");
	$lastmodified = date("l dS F Y", getHighestFileTimestamp("./"));           // Changed from ../ as should only be looking in current directory
	echo "<div class=\"update\">Last Update on: ".$lastmodified."</div>\n";
?>

<p class="nojavascript"><strong>This Website works better with Javascript enabled</strong></p>

<br/>
<br/>

<h2 id ="intro">Introduction</h2>
<p>This page is intended to help direct you to pieces and CD recordings you
might like if you are new to classical music up to and including the casual collector
like myself (People who want at most to find about 2 or 3 good recordings of a particular
piece). The OTHER RECORDINGS section includes recordings I have not heard in their entirety
or at all. Although I cannot endorse them whole heartedly myself, they come recommended
from plenty of credible sources. These selections along with my own should help guide
you to better informed and more detailed discussions on the internet.</p>

<h3>BBC Radio 3</h3>
<p>A good place to listen to mainly complete recordings of pieces that might interest you
is Essential Classics 9.00am - 12.00pm weekdays. The Building a Library section (approximately
9.30 - 10.30am) on Record Review (usually 9.00am - 11.45pm) Saturday morning, involves an expert
sifting through the available recordings of a particular piece to recommend their top recording.
Through the Night, mainly consists of complete pieces taken from live performances. The schedules
can be found at bbc.co.uk/radio3. You can also listen online.</p>

<h3>Classic FM</h3>
<p>If you want to listen to slow/quiet movements of pieces try Smooth Classics 7.00pm - 10.00pm, Calm Classics 10.00pm -
1.00am weekdays and 10.00pm - 1.00am weekends, with 7.00pm - 10.00pm Sunday additionally. You can listen online at their website
classicfm.com. They also have a play list of what has been played.</p>

<!-- TODO: Scala Radio -->

<h3>Radio Times Magazine (UK)</h3>
<p>It includes the schedule and approximate timings for BBC Radio 3's
 Through the Night, as well as telling you what the Building a Library
featured work is.</p>

<br/>

<h2><span>Major Composer Anniversaries in 2025</span></h2> <!-- span used to help overwrite h2 default style -->

<br/>

<p class="composers">
Johann Strauss II 200 years since his birth<br/>
Maurice Ravel 150 years since his birth<br/>
Georges Bizet 150 years since his death<br/>
Erik Satie 100 years since his death</p>

<br/>

<h3 id = "key" class="key">KEY for Common Abbreviations</h3>
<br/>

<!-- TODO: ERATO and APEX - WARNER LABELS -->
<table class="tablekey" role="presentation">
<tbody>
<tr class="hideme"><th scope="col">Shorthand</th><th scope="col">Meaning</th></tr> <!-- Visibly hidden -->
<tr><th scope="row">DG</th><td>DEUTSCHE GRAMMOPHON</td></tr>
<tr><th scope="row">EMI</th><td>WARNER/EMI CLASSICS (WARNER BECAME OWNERS OF EMI'S BACK CATALOGUE IN 2013)</td></tr>
<tr><th scope="row">SONY/BMG/RCA</th><td>SONY MUSIC ENTERTAINMENT (SONY ABSORBED BMG IN 2008. RCA IS A SONY SUBSIDIARY)</td></tr>
<tr><th scope="row">B.P.O</th><td>BERLIN PHILHARMONIC ORCHESTRA</td></tr>
<tr><th scope="row">V.P.O</th><td>VIENNA PHILHARMONIC ORCHESTRA</td></tr>
<tr><th scope="row">L.S.O</th><td>LONDON SYMPHONY ORCHESTRA</td></tr>
<tr><th scope="row">C.O.E</th><td>CHAMBER ORCHESTRA OF EUROPE</td></tr>
<tr><th scope="row">L.P.O</th><td>LONDON PHILHARMONIC ORCHESTRA</td></tr>
<tr><th scope="row">C.O</th><td>CONCERTGEBOUW ORCHESTRA (BECAME ROYAL CONCERTGEBOUW ORCHESTRA IN 1988)</td></tr>
<tr><th scope="row">B.R.S.O</th><td>BAVARIAN RADIO SYMPHONY ORCHESTRA</td></tr>
<tr><th scope="row">P</th><td>PERIOD INSTRUMENTS</td></tr>
<tr><th scope="row">L.A</th><td>LIMITED AVAILABILITY OF CD (TRY SECOND HAND. MAY STILL BE AVAILABLE AS PART OF BOX SET)</td></tr>
</tbody>
</table>

<!-- <pre class="tablekey2">    Used this method because screen readers appear to read down each column for a table layout. Here the key is read across
DG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = DEUTSCHE GRAMMOPHON
EMI&nbsp;&nbsp;&nbsp;&nbsp; = EMI CLASSICS
SONY&nbsp;&nbsp;&nbsp; = SONY CLASSICAL
B.P.O&nbsp;&nbsp; = BERLIN PHILHARMONIC ORCHESTRA
V.P.O&nbsp;&nbsp; = VIENNA PHILHARMONIC ORCHESTRA
L.S.O&nbsp;&nbsp; = LONDON SYMPHONY ORCHESTRA
L.P.O&nbsp;&nbsp; = LONDON PHILHARMONIC ORCHESTRA
C.O&nbsp;&nbsp;&nbsp;&nbsp; = CONCERTGEBOUW ORCHESTRA
S.C.O&nbsp;&nbsp; = SCOTTISH CHAMBER ORCHESTRA
A.S.M.F = ACADEMY OF ST. MARTIN IN THE FIELDS
P&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = PERIOD INSTRUMENTS
L.A&nbsp;&nbsp;&nbsp;&nbsp; = LIMITED AVAILABILITY (TRY SECOND HAND. MAY STILL BE AVAILABLE AS PART OF BOX SET)
</pre> -->

<br/>

<hr/>

<br/>

<h2 id="compilations" class="compilations">Compilations</h2>
<p>I will restrict my selection here from within the UNIVERSAL CLASSICS labels (DECCA,
PHILIPS (Retired) and DEUTSCHE GRAMMOPHON), VIRGIN CLASSICS/WARNER/ERATO and NAXOS, since they generally provide good recordings
and sound quality of movement/extracts from complete pieces. Series worth examining are:</p>

<p class="complab">Essential.. (2cds) (DECCA)<br/><br/>

Panorama (2cds) (Tend to have complete pieces) (DG)<br/><br/>

Discovering.. (CLASSIC FM, DECCA - Actually recordings from any Universal Classics labels)<br/><br/>

The Best of.. (2cds) (PHILIPS)<br/><br/>

The Very Best of.. (2cds) (VIRGIN CLASSICS/WARNER/ERATO)<br/><br/>

Classics for Pleasure (EMI)<br/><br/>

The Very Best of.. (2cds) (NAXOS)<br/><br/></p>

<p>If money is tight, NAXOS is well known for its high quality at bargain prices.</p>
<br/>

<h3>General</h3>

<p>OTHER RECORDINGS:<br/>
The Essential Classics Collection (6cds) (DG)<br/>
The Most Relaxing Classical Music in the World .. Ever (4cds) (VIRGIN TV)</p>

<h3>J.S.Bach</h3>
<p>Essential Bach (2cds) (DECCA) includes period performances and novel instrumental arrangements
of his works.</p>

<h3>Beethoven</h3>
<p>Essential Beethoven (2cds) (DECCA) is very good. The only reservation being the plus 2 minutes
from the final movement of the choral symphony. The time could have been better filled by
a bagatelle for example.</p>

<h3>Chopin</h3>
<p>Essential Chopin (2cds) (DECCA) does not contain parts from his piano concertos but is a beautiful
introduction to some of his solo piano works played expertly by Vladimir Ashkenazy.</p>

<h3>Grieg</h3>
<p>The Best of Grieg (2cds) (PHILIPS)  includes complete recordings of the two Peer Gynt Suites,
the Holberg Suite and a very good recording of the piano concerto.<br/><br/>

OTHER RECORDINGS:<br/>
Grieg (2cds) Panorama (DG)</p>

<h3>Handel</h3>
<p>Essential Handel (2cds) (DECCA) contains all the popular tunes, including the complete first two
Water Music Suites and less well known pieces such as Berenice.</p>

<h3>Mozart</h3>
<p>Although Mozart Adagios (2cds) (DECCA) only contains slow/quieter movements of pieces,
it contains plenty of good music including the piano concertos and symphonies.</p>

<h3>Rachmaninov</h3>
<p>Essential Rachmaninov (2cds) (DECCA) is definitely the best Rachmaninov compilation around.
It includes a complete recording of Rhapsody on a Theme of Paganini and a great one of the 2nd
piano concerto.</p>

<h3>Sibelius</h3>
<p>Sibelius (2cds) Panorama (DG)</p>

<h3>Tchaikovsky</h3>
<p>The No. 1 Tchaikovsky Album (2cds) (UNIVERSAL CLASSICS). The title says it all.</p>

<h3>Vivaldi</h3>
<p>Essential Vivaldi (2cds) (DECCA) includes a complete performance of the Four Seasons.</p>

<h3>Wagner</h3>
<p>Here I only recommend orchestral highlights. For vocal music seek advice elsewhere.<br/>
Wagner: Overtures and Preludes with Adrian Boult (EMI).</p>

<p>OTHER RECORDINGS:<br/>
Karajan/B.P.O Wagner Orchestral Music from.. (EMI)<br/>
Szell/Cleveland Richard Wagner Orchestral Music from.. (SONY)<br/>
Solti/V.P.O Wagner: Orchestral Favourites (2cds) (DECCA)</p>

<h3>Vaughan Williams</h3>

<p>OTHER RECORDINGS:<br/>
The Essential Vaughan Williams (2cds) (EMI)</p>
<br/>

<hr/>

<br/>

<h2 id = "complete_pieces" class="complete_pieces">Complete Pieces</h2>   <!-- Add Complete Pieces to Navigation menu 071011 -->

<p>Some recordings are given the label (MULTCOMB). This is because the
recording is available in combination with different pieces on other CDs.
Another example being, it is available as a single CD release or part of
a box set. A recording could also be found under more than one record label
release or even CD format e.g SACD.</p>

<p>Because this site is not aimed at serious collectors, the least recording
quality I will recommend is good mono. All recordings are stereo, except where
mentioned i.e MONO. Any live recordings I have recommended will have at most minimal
background noises e.g coughs. Considering that studio recordings, including some
I have recommended, can be prone to the occasional unwanted noises, this should not
be a problem.</p>

<p class="clickbandtext">Just click or press enter on a band to reveal the relevant information. Click or press enter on the band
again to hide the information.</br></br>
Press Esc to jump to CCCMG in the header.</p>
<br/>


<ul class="accordion">

<li id="bacVC">
<h3 id="JSB">J.S.Bach</h3>
<h4><a href="#bacVC">Violin Concertos (A minor, E, Two Violins D minor, Violin and Oboe D minor)</a></h4>
<p>Kennedy/B.P.O (EMI) - Nigel Kennedy and the Berlin Philharmanic produce  exciting, lively and stylish recordings</p>
</li>

<li id="bacBC">
<h4><a href="#bacBC">Brandenburg Concertos</a></h4>
<p>Alessandrini/Concerto Italiano (NA&Iuml;VE) (P)<br/><br/>

OTHER RECORDINGS:<br/>
Pinnock/European Brandenburg Ensemble (AVIE) (P)</p>
</li>

<li id="bacOS">
<h4><a href="#bacOS">Orchestral Suites (4)</a></h4>
<p>Egarr/Academy of Ancient Music (AAM) (P)<br/>
Suzuki/Bach Collegium Japan (BIS) (P)<br/><br/>

OTHER RECORDINGS:<br/>
Yacobs/Freiburg Baroque (HARMONIA MUNDI) (P)<br/>
Pearlman/Boston Baroque (TELARC) (P)<br/>
Kuijken/La Petite Bande (ACCENT) (P)</p>
</li>

<li id="beeSy">
<h3 id="LVB">Beethoven</h3>
<h4><a href="#beeSy">Symphonies (9)</a></h4>

<p>OTHER RECORDINGS:<br/>
Critics best all round cycle Harnoncourt/C.O.E (TELDEC)</p>

<h5>Symphony No. 1</h5>
<p>Rattle/V.P.O (EMI)<br/>
Paavo J&auml;rvi/Deutsche Kammerphilharmonie Bremen (RCA RED SEAL) (P)<br/><br/>

OTHER RECORDINGS:<br/>
Szell/Cleveland (MULTCOMB) (SONY)</p>

<h5>Symphony No. 2</h5>
<p>Paavo J&auml;rvi/Deutsche Kammerphilharmonie Bremen (MULTCOMB) (RCA RED SEAL) (P)<br/>
Zinman/Tonhalle (ARTE NOVA) (P) (L.A)</p>

<h5>Symphony No. 3 "Eroica"</h5>
<p>Rattle/V.P.O  (MULTCOMB) (EMI)<br/>
Klemperer/Philharmonia (1955) (MONO) (MULTCOMB)<br/>
Scherchen/Vienna State Opera (DG - WESTMINSTER LEGACY) (L.A) - Very quick recording around (~43mins), but never sounds rushed (First movement has repeat!)<br/>
Bernstein/New York Philharmonic (MULTCOMB) (SONY)<br/>
Szell/Cleveland (MULTCOMB) (SONY)</p>

<h5>Symphony No. 4</h5>
<p>Haitink/C.O (MULTCOMB) (PHILIPS)  (L.A)<br/>
Bernstein/New York Philharmonic (MULTCOMB) (SONY) - Fiery</p>

<h5>Symphony No. 5 "Fate"</h5>
<p>Kleiber/V.P.O (DG)<br/>
Szell/C.O (PHILIPS)<br/>
Karajan/B.P.O (1977) (MULTCOMB) (DG)<br/>
Klemperer/Philharmonia (1955) (MONO) (MULTCOMB)</p>

<h5>Symphony No. 6 "Pastoral"</h5>
<p>The most popular symphony of Beethoven's and of all symphonies:<br/>
Wand/N.D.R (MULTCOMB) (RCA)<br/>
Gardiner/Orchestre R&eacute;voltionnaire et Romantique (ARCHIV) (P)<br/>
Szell/Cleveland (MULTCOMB) (SONY)</p>

<p>It is worth mentioning that the highly recommended B&ouml;hm/V.P.O (DG)
recording has a very slow second movement, lasting nearly a third
of the length of the whole recording (~45mins), an unpleasant
surprise on first hearing it as I was used to the movement lasting
only 11 - 12 minutes tops. I cannot complain about the other movements
and someone suggested after many listens you will consider this your
favourite. Maybe, but this is probably not a first recording to get.</p>

<h5>Symphony No. 7</h5>
<p>Honeck/Pittsburgh Symphony (REFERENCE RECORDINGS)<br/>
Klemperer/Philharmonia (1955) (MULTCOMB)<br/>
Karajan/B.P.O (1977) (MULTCOMB) (DG)</p>

<h5>Symphony No. 8</h5>
<p>Casals/Marlboro Festival (SONY)<br/>
Haitink/C.O (MULTCOMB) (PHILIPS) (L.A)<br/>
Norrington/London Classical Players (EMI) (P) - Exciting without going overboard<br/>
Harnencourt/C.O.E (TELDEC)<br/>
Kletzki/Czech Philharmanic (SUPRAPHON)</p>

<h5>Symphony No. 9 "Choral"</h5>
<p>Fricsay/B.P.O (DG) - Incidently, the first stereo recording of this work. Rousing!<br/>
Szell/Cleveland (MULTCOMB) (SONY)<br/>
Kubelik/B.R.S.O (1982) (ORFEO)<br/>
Toscanini/NBC Symphony (1952) (MULTCOMB)<br/><br/>

OTHER RECORDINGS:<br/>
Furtw&auml;ngler/Philharmonia (1951) (MONO) (ORFEO) - The actual Bayreuth recording. Not the Legge edit, where rehearsal material is mixed with the final performance like the Warner/Emi and Naxos issues!<br/></p>
</li>

<li id="beePC">
<h4><a href="#beePC">Piano Concerti (5)</a></h4>

<p>OTHER RECORDINGS:<br/>
Critics Best all round cycles:<br/>
Perahia/Haitink/C.O (SONY)<br/>
Hough/Lintu/Finnish Radio Symphony (HYPERION)</p>

<h5>Piano Concerto No. 1</h5>
<p>Ozawa/Argerich/B.R.S.O<br/>
F.F-Guy/Jordan/Orchestre Philharmonique de Radio France (NA&Iuml;VE)<br/>
Serkin/Ormandy/Philadelpia Rudolf Serkin Plays Beethoven Concertos, Sonatas and Variations (SONY)</p>

<h5>Piano Concerto No. 2</h5>
<p>Argerich/Abbado/Mahler Chamber (DG)<br/>
Serkin/Ormandy/Philadelphia Rudolf Serkin Plays Beethoven Concertos, Sonatas and Variations (SONY)</p>

<h5>Piano Concerto No. 3</h5>
<p>Pires/Harding/Swedish Radio Symphony (ONYX)<br/>
Michelangeli/Giulini/Vienna Symphony (DG)<br/>
Pollini/Abbado/B.P.O (MULTCOMB) (DG) - Odd non-intrusive cough<br/>
Fleisher/Szell/Cleveland (MULTCOMB) (SONY) - Classical style but still exciting</p>

<h5>Piano Concerto No. 4</h5>
<p>Pires/Harding/Swedish Radio Symphony (ONYX)<br/>
Fleisher/Szell/Cleveland (MULTCOMB) (SONY)</p>

<h5>Piano Concerto No. 5 "Emperor"</h5>
<p>Pollini/B&ouml;hm/V.P.O (MULTCOMB) (DG) - Just the right amount of vigour<br/>
Michelangeli/Celibidache/Paris Symphony (MUSIC AND ARTS)<br/>
Zimerman/Bernstein/V.P.O (MULTCOMB) (DG) (L.A)</p>
</li>

<li id="beePS">
<h4><a href="#beePS">Piano Sonatas (32)</a></h4>

<p>OTHER RECORDINGS:<br/>
Critics Best all round cycles:<br/>
Biss (ORCHID CLASSICS)<br/>
Kovacevich (EMI)<br/>
Kempff (1951 - 56) (MONO) (MULTCOMB)<br/>
Gulda (1953 - 54) (MONO) (ORFEO)<br/>
Backhaus (1953 - 69) (DECCA)</p>

<h5>Piano Sonata No. 1</h5>
<p>Bavouzet Beethoven: Piano Sonatas Volume 1 (CHANDOS)</p>

<h5>Piano Sonata No. 6</h5>
<p>Serkin (1970) (MULTCOMB) (SONY)</p>

<h5>Piano Sonata No. 8 "Path&eacute;tique"</h5>
<p>Osborne Beethoven Piano Sonatas (HYPERION)<br/>
Bavouzet Beethoven: Piano Sonatas Volume 1 (CHANDOS) - Sounds spontaneous (not micro-managed)<br/>
Serkin (1962) (MULTCOMB) (SONY)<br/>
Barenboim Beethoven: Piano Sonatas 8, 14 &amp; 23 (EMI)<br/>
Schiff The Piano Sonatas Vol 2 (ECM NEW SERIES)<br/>
Kempff Piano Sonatas 8, 14, 21 &amp; 23 (1964-65) (DG)</p>

<h5>Piano Sonata No. 11</h5>
<p>Serkin (1970/73) (MULTCOMB) (SONY)</p>

<h5>Piano Sonata No. 14 "Moonlight"</h5>
<p>Brendel Favourite Piano Sonatas (1970s) (PHILIPS)<br/>
Kovacevich (MULTCOMB) (EMI) - Great driven energy in last movement</p>

<h5>Piano Sonata No. 15 "Pastoral"</h5>
<p>Brendel Favourite Piano Sonatas (1970s) (PHILIPS)</p>

<h5>Piano Sonata No. 16</h5>
<p>Serkin (1970) (MULTCOMB) (SONY)</p>

<h5>Piano Sonata No. 17 "Tempest"</h5>
<p>Kovacevich (MULTCOMB) (EMI)</p>

<h5>Piano Sonata No. 21 "Waldstein"</h5>
<p>Serkin (1975) (MULTCOMB) (SONY)<br/>
Brendel Favourite Piano Sonatas (1970s) (PHILIPS)</p>

<h5>Piano Sonata No. 23 "Appassionata"</h5>
<p>Pletnev (VIRGIN CLASSICS)<br/>
Serkin (1962) (MULTCOMB) (SONY)<br/>
Gilels (MULTCOMB) (DG)</p>

<h5>Piano Sonata No. 26 "Les Adeux"</h5>
<p>Gilels (MULTCOMB) (DG)<br/>
Arrau (MULTCOMB) (PHILIPS) (L.A) - Sound Issues - Clicks</p>

<h5>Piano Sonata No. 29 "Hammerklavier"</h5>
<p>Richter 2/6/1975 (PRAGA)<br/>
Serkin (1969/70) (MULTCOMB) (SONY)</p>

<h5>Piano Sonata No. 31</h5>
<p>Serkin (1971) (MULTCOMB) (SONY)<br/>
Brautigam (Fortepiano) (BIS)</p>

<h5>Piano Sonata No. 32</h5>
<p>Brautigam (Fortepiano) (BIS)</p>
</li>

<li id="beeSQ">
<h4><a href="#beeSQ">String Quartets (16)</a></h4>

<h5>String Quartets 1-6 Op. 18</h5>
<p>Quartetto Italiano (MULTCOMB) (PHILIPS)</p>

<h5>String Quartet No. 7 Op. 59 No. 1</h5>
<p>Quatuor Sine Nomine (CLAVES)<br/>
Talich Quartet (MULTCOMB) (CALLIOPE)<br/>
Vegh Quartet (MULTCOMB) (1970s) (NA&Iuml;VE)</p>

<h5>String Quartet No. 8 Op. 59 No. 2</h5>
<p>Quatuor Sine Nomine (CLAVES)<br/>
Artemis Quartet (MULTCOMB) (VIRGIN CLASSICS)</p>

<h5>String Quartet No. 9 Op. 59 No. 3</h5>
<p>Quatuor Sine Nomine (CLAVES)</p>

<h5>String Quartet No. 10 Op. 74 "Harp"</h5>
<p>Quatuor Sine Nomine (CLAVES)<br/>
Borodin Quartet (MULTCOMB) (CHANDOS)<br/>
Talich Quartet (MULTCOMB)</p>

<h5>String Quartet No. 11 Op. 95 "Serioso"</h5>
<p>Vegh Quartet (MULTCOMB) (1972 - 1974) (NA&Iuml;VE)<br/>
Guarneri Quartet (1966 - 1969) (MULTCOMB) (RCA RED SEAL)</p>

<h5>String Quartet No. 13 Op. 130</h5>
<p>Borodin Quartet (MULTCOMB) (CHANDOS)<br/>
Amadeus Quartet (MULTCOMB) (DG)</p>

<h5>String Quartet No. 14 Op. 131</h5>
<p>Budapest Quartet (1951 - 1952) (MONO) (MULTOCOMB)<br/>
Quartetto Italiano (MULTCOMB) (PHILIPS)<br/>
Cleveland Quartet (MULTCOMB) (TELARC)</p>

<h5>String Quartet No. 15 Op. 132</h5>
<p>Alban Berg Quartet (1983) (EMI)</p>

<h5>String Quartet No. 16 Op. 135</h5>
<p>Lindsay Quartet (1970 - 1983) (MULTCOMB)</p>
</li>

<li id="beeVC">
<h4><a href="#beeVC">Violin Concerto</a></h4>
<p>Faust/Abbado/Orchestra Mozart (HARMONIA MUNDI)<br/>
Grumiaux/Galliera/New Philharmonia(PHILIPS ELOQUENCE)<br/>
Chung/Tennstedt/L.P.O (EMI)</p>
</li>

<li id="braSy">
<h3 id="JB">Brahms</h3>
<h4><a href="#braSy">Symphonies (4)</a></h4>

<h5>Symphony No. 1</h5>
<p>Karajan/B.P.O (TESTAMENT) - Intense<br/>
Wand/N.D.R (RCA RED SEAL)<br/><br/>

OTHER RECORDINGS:<br/>
Klemperer/Philharmonia (MULTCOMB)</p>

<h5>Symphony No. 2</h5>
<p>Karajan/B.P.O (1987) (DG) - Intense<br/>
Klemperer/Philharmonia (MULTCOMB)<br/>
Sanderling/Staatskapelle Dresden (MULTCOMB) (RCA RED SEAL)<br/>
Kempe/B.P.O (MONO) (TESTAMENT)</p>

<h5>Symphony No. 3</h5>
<p>Walter/Columbia Symphony (SONY)<br/>
Wand/N.D.R (RCA RED SEAL)<br/>
Dorati/L.S.O (MERCURY LIVING PRESENCE) - Powerful<br/>
Karajan/B.P.O (1978) (MULTCOMB) (DG)</p>

<h5>Symphony No. 4</h5>
<p>Steinberg/Pittsburgh Symphony (EVEREST) (L.A)<br/>
Sanderling/Staatskapelle Dresden (MULTCOMB) (RCA RED SEAL)<br/>
Dorati/L.S.O (MERCURY LIVING PRESENCE)<br/>
Berglund/C.O.E Brahms: The Symphonies (ONDINE)<br/>
Chailly/Leipzig Gewandhaus (2013) (DECCA)</p>
</li>

<li id="bruVC">
<h3 id="MB">Bruch</h3>
<h4><a href="#bruVC">Violin Concerto</a></h4>
<p>Zukerman/Los Angeles Philharmonic (1970s) (SONY)<br/>
Chung/Tennstedt/L.P.O (EMI)<br/>
Chung/Kempe/Royal Philharmonic (MULTCOMB)<br/>
Heifetz/Sargent/New Symphony Orchestra of London (MULTCOMB)</p>
</li>

<li id="bruckSy">
<h3 id="AB">Bruckner</h3>
<h4><a href="#bruckSy">Symphonies (11)</a></h4>
<p>The bracketed date at the end of each listed choice is the edition of that symphony.<br/>
See www.abruckner.com for more details</p>

<h5>Symphony No. 3</h5>
<p>Tennstedt/B.R.S.O (PROFIL) (1889)<br/>
Zweden/Netherlands Radio Philharmanic (CHALLENGE) (1877)<br/><br/>

OTHER RECORDINGS:<br/>
Chailly/R.S.O Berlin (MULTCOMB) (DECCA) (1889)</p>

<h5>Symphony No. 4</h5>
<p>Kertesz/L.S.O (DECCA) (1881)<br/>
Haitink/C.O (MULTCOMB) (1881)<br/>
Klemperer/B.R.S.O (EMI) (1886)</p>

<h5>Symphony No. 5</h5>
<p>Zweden/Netherlands Radio Philharmonic (MULTCOMB) (1878)</p>

<h5>Symphony No. 6</h5>
<p>Stein/V.P.O (DECCA) (1881)<br/>
Sawallisch/Bavarian State (ORFEO) (1881)<br/>
Keilberth/B.P.O (MULTCOMB) (L.A) (1881)</p>

<h5>Symphony No. 7</h5>
<p>Rosbaud/Southwest German Radio Symphony (1959) (MULTCOMB) (1885)<br/>
Matacic/Czech Philharmanic (24-30/3/67) (MULTCOMB)<br/>
Karajan/V.P.O (DG) (1885)<br/>
B&ouml;hm/B.R.S.O (AUDITE) (1885)<br/>
Furtw&auml;ngler/B.P.O (1949) (MULTCOMB) (1885)</p>

<h5>Symphony No. 8</h5>
<p>Kubelik/B.R.S.O (BR KLASSIK) (1887/90) - Deals well with the last movement<br/>
Knappertsbusch/Munich Philharmonia (1963) (LIVING STAGE) (1892) (L.A) - The Living Stage CD is actually the studio recording of 1963. See www.abruckner.com for track times<br/>
Kegel/Leipzig Radio Symphony (13-19/3/75) (MULTCOMB) (L.A) (1887/90)</p>

<h5>Symphony No. 9</h5>
<p>Schuricht/V.P.O (DECCA) (1894)<br/>
Horenstein/BBC Symphony (1970) (MULTCOMB) (1894)<br/>
Harnoncourt/V.P.O (RCA RED SEAL) (1894)<br/>
Knappertsbusch/B.P.O (TAHRA)<br/><br/>

OTHER RECORDINGS:<br/>
Skrowaczewski/Minnesota (REFERENCE RECORDINGS) (1894)</p>
</li>

<li id="choPC">
<h3 id="FC">Chopin</h3>
<h4><a href="#choPC">Piano Concerti (2)</a></h4>

<h5>Piano Concerto No. 1</h5>
<p>Zimerman/Giulini/Los Angeles Philharmonic (DG)<br/>
Argerich/Abbado/L.S.O (MULTCOMB) (DG)<br/><br/>

OTHER RECORDINGS:<br/>
Fliter/Markl/Scottish Chamber (LINN)</p>

<h5>Piano Concerto No. 2</h5>
<p>Berezovsky/Nelson/Ensemble Orchestral de Paris (MIRARE)<br/>
Zimerman/Giulini/Los Angeles Philharmonic (DG)<br/>
Ashkenazy/Zinman/L.S.O (MULTCOMB)<br/><br/>

OTHER RECORDINGS:<br/>
Fliter/Markl/Scottish Chamber (LINN)</p>
</li>

<li id="choN">
<h4><a href="#choN">Nocturnes (21)</a></h4>
<p>OTHER RECORDINGS:<br/>
Pires (DG) (21)<br/>
Leonskaja (APEX) (21)<br/>
Moravec (SUPRAPHON) (19)<br/>
Goerner (ALPHA) (21)</p>
</li>

<li id="dvoSy">
<h3 id="AD">Dvo&#x159;&aacute;k</h3>
<h4><a href="#dvoSy">Symphonies (9)</a></h4>

<h5>Symphony No. 9 "New World"</h5>
<p>Ancerl/Czech Philharmonic (MULTCOMB) (SUPRAPHON)<br/>
Fischer/Budapest Festival (MULTCOMB) (UNIVERSAL CLASSICS)<br/>
Kubelik/B.R.S.O (ORFEO)<br/><br/>

OTHER RECORDINGS:<br/>
Harnencourt/C.O (TELDEC)<br/>
Alsop/Baltimore Symphony (NAXOS)</p>
</li>

<li id="dvoSl">
<h4><a href="#dvoSl">Slavonic Dances</a></h4>

<p>Harnencourt/C.O.E (TELDEC) - Dynamic<br/><br/>

OTHER RECORDINGS:<br/>
Fischer/Budapest Festival (UNIVERSAL CLASSICS)</p>
</li>

<li id="haySQ">
<h3 id="JH">Haydn</h3>
<h4><a href="#haySQ">String Quartets</a></h4>

<h5>Op. 33</h5>
<p>Buchberger Quartet (BRILLIANT CLASSICS)<br/>
Quatuor Mosa&iuml;ques (MULTCOMB)</p>
</li>

<li id="menSy">
<h3 id="FM">Mendelssohn</h3>
<h4><a href="#menSy">Symphonies (5)</a></h4>

<h5>Symphony No. 4</h5>
<p>Abbado/L.S.O (DG)<br/><br/>

OTHER RECORDINGS:<br/>
Gardiner/V.P.O (DG)</p>
</li>

<li id="menVC">
<h4><a href="#menVC">Violin Concerto</a></h4>
<p>Milstein/Abbado/V.P.O (MULTCOMB) (DG)<br/>
Chung/Dutoit/Montreal Symphony (MULTCOMB)<br/>
Kennedy/Tate/English Chamber (MULTCOMB) (WARNER/EMI)<br/><br/>

OTHER RECORDINGS:<br/>
Ibragimova/Jurowski/Orchestra of the Age of Enlightenment (HYPERION)</p>
</li>

<li id="mozPC">
<h3 id="WAM">Mozart</h3>
<h4><a href="#mozPC">Piano Concerti (27)</a></h4>

<h5>Piano Concerto No. 9</h5>
<p>Anda/Salzburg Mozarteum Camerata Academic (MULTCOMB) (DG)<br/>
Uchida/Tate/English Chamber (MULTCOMB) (PHILIPS)<br/><br/>

OTHER RECORDINGS:<br/>
<br/>
Perahia/English Chamber (MULTCOMB) (SONY)</p>

<h5>Piano Concerto No. 10</h5>
<p>Argerich/Rabinovitch/Padova e del Veneto (MULTCOMB) (TELDEC)</p>

<h5>Piano Concerto No. 14</h5>
<p>Pires/Guschlbauer/Gulbenkian Orchestra Lisbon (MULTCOMB) (APEX)<br/>
Ashkenazy/Philharmonia (DECCA)</p>

<h5>Piano Concerto No. 17</h5>
<p>Pires/Abbado/C.O.E (MULTCOMB) (DG)</p>

<h5>Piano Concerto No. 18</h5>
<p>Anda/Salzburg Mozarteum Camerata Academic (MULTCOMB) (DG)<br/>
Uchida/Tate/English Chamber (MULTCOMB) (PHILIPS)</p>

<h5>Piano Concerto No. 19</h5>
<p>Larrocha/Segal/Vienna Symphony (DECCA)<br/>
Brendel/Marriner/A.S.M.F (PHILIPS)<br/>
Pollini/V.P.O (MULTCOMB)</p>

<h5>Piano Concerto No. 20</h5>
<p>Brendel/MacKerras/S.C.O (MULTCOMB) (PHILIPS)<br/>
Serkin/Ormandy/Philadelphia (CBS/SONY)<br/>
Goode/Orpheus Chamber (NONESUCH)<br/>
Brendel/Marriner/A.S.M.F (PHILIPS)<br/>
Argerich/Rabinovitch/Padova e del Veneto (MULTCOMB) (TELDEC)</p>

<h5>Piano Concerto No. 21 "Elvira Madigan"</h5>
<p>Pires/Abbado/C.O.E (MULTCOMB) (DG)<br/>
Brendel/Marriner/A.S.M.F (PHILIPS)<br/>
Haebler/Witold/L.S.O (MULTCOMB) (PHILIPS)</p>

<h5>Piano Concerto No. 23</h5>
<p>Pollini/V.P.O (MULTCOMB) (DG)<br/>
Pires/Guschbauer/Gulbenkian Orchestra Lisbon (APEX)<br/>
Curzon/Kert&eacute;sz/L.S.O (MULTCOMB) (DECCA)</p>

<h5>Piano Concerto No. 24</h5>
<p>Goode/Orpheus Chamber (NONESUCH)<br/>
C.Zacharias/Orchestre de Chambre de Lausanne (MDG)</p>

<h5>Piano Concerto No. 25</h5>
<p>Kovacevich/Davis/L.S.O (PHILIPS)<br/>
Larrocha/Davis/L.P.O (MULTCOMB) (DECCA)<br/>
Serkin/Szell/Columbia Symphony (1955) (MONO) (NAXOS) - Not Cleveland Orchestra as stated!<br/><br/>

OTHER RECORDINGS:<br/>
Moravec/Vlach/Czech Philharmonic (SUPRAPHON)</p>

<h5>Piano Concerto No. 26</h5>
<p>Haebler/Witold/L.S.O (MULTCOMB) (PHILIPS)<br/>
Pires/Abbado/V.P.O (MULTCOMB) (DG)<br/><br/>

OTHER RECORDINGS:<br/>
Perahia/E.C.O (SONY)<br/>
Zacharias/Zinman/B.R.S.O (EMI)</p>

<h5>Piano Concerto No. 27</h5>
<p>Serkin/Ormandy/Philadelphia (MULTCOMB) (CBS/SONY)<br/>
Gilels/B&ouml;hm/V.P.O (MULTCOMB) (DG)</p>
</li>

<li id="mozSy">
<h4><a href="#mozSy">Symphonies (41)</a></h4>

<h5>Symphony No. 25</h5>
<p>Norrington/Radio-Sinfonieorchester Stuttgart (SWR)<br/>
Abbado/B.P.O (SONY)</p>

<h5>Symphony No. 29</h5>
<p>Abbado/B.P.O (SONY)</p>

<h5>Symphony No. 35 "Haffner"</h5>
<p>Jochum/Bamberg Symphony (RCA RED SEAL) - Does all repeats!<br/>
Abbado/B.P.O (SONY)</p>

<h5>Symphony No. 36 "Linz"</h5>
<p>Jochum/Bamberg Symphony (RCA RED SEAL) - Does all repeats!<br/>
MacKerras/Prague Chamber (MULTCOMB) (TELARC) - Does all repeats!</p>

<h5>Symphony No. 38 "Prague"</h5>
<p>Jochum/Bamberg Symphony (RCA RED SEAL) - Does all repeats!</p>

<h5>Symphony No. 39</h5>
<p>MacKerras/Prague Chamber (MULTCOMB) (TELARC) - Does all repeats!<br/>
B&ouml;hm/B.P.O (MULTCOMB) (DG)</p>

<h5>Symphony No. 40</h5>
<p>Szell/Cleveland Symphony (MULTCOMB) (SONY)<br/>
Jochum/Bamberg Symphony (ORFEO)<br/>
MacKerras/Prague Chamber (MULTCOMB) (TELARC) - Does all repeats!</p>

<h5>Symphony No. 41 "Jupiter"</h5>
<p>B&ouml;hm/B.P.O (MULTCOMB) (DG)<br/>
Walter/Columbia Symphony (MULTCOMB) (CBS/SONY)</p>
</li>

<li id="mozPS">
<h4><a href="#mozPS">Piano Sonatas (Solo) (18)</a></h4>

<p>OTHER RECORDINGS:<br/>Critics Best all round cycle Uchida (PHILIPS)</p>

<h5>Piano Sonata No. 1</h5>
<p>Engel (MULTCOMB) (TELDEC)</p>

<h5>Piano Sonata No. 6</h5>
<p>Katin Complete Piano Sonatas Vol. 4 (OLYMPIA)</p>

<h5>Piano Sonata No. 8</h5>
<p>Goode (NONESUCH)</p>

<h5>Piano Sonata No. 9</h5>
<p>Pires (MULTCOMB) (DG)<br/><br/>

OTHER RECORDINGS:<br/>
Brendel (PHILIPS)<br/>
Ashkenazy (DECCA)</p>

<h5>Piano Sonata No. 11</h5>
<p>Perahia (SONY) (L.A)</p>

<h5>Piano Sonata No. 12</h5>
<p>Brendel (MULTCOMB) (PHILIPS)</p>
</li>

<li id="mozSQ">
<h4><a href="#mozSQ">String Quartets (16)</a></h4>

<h5>String Quartets 14-19 "Haydn"</h5>
<p>Emerson String Quartet (DG) (L.A)<br/>
Alban Berg Quartet (TELDEC) (L.A)<br/><br/>

OTHER RECORDINGS:<br/>
Suske Quartet (MULTCOMB) (BERLIN CLASSICS)</p>

<h5>String Quartet No. 17 "Hunt"</h5>
<p>Emerson Quartet (MULTCOMB) (DG)<br/>
Jerusalem Quartet (HARMONIA MUNDI)</p>

<h5>String Quartet No. 19 "Dissonance"</h5>
<p>Casals Quartet (HARMONIA MUNDI)</p>
</li>

<li id="mozCQ">
<h4><a href="#mozCQ">Clarinet Quintet</a></h4>
<p>George Pieterson - clarinet,  Grumiaux Quartet (PENTATONE)<br/><br/>

OTHER RECORDINGS:<br/>
King/Tate/E.C.O (HYPERION)</p>
</li>

<li id="mozCC">
<h4><a href="#mozCC">Clarinet Concerto</a></h4>
<p>Meyer/Abbado/B.P.O (EMI)<br/><br/>

OTHER RECORDINGS:<br/>
Farell/Daniel/Divertimenti (MERIDIAN) (L.A) - Balance is more towards the clarinet</p>
</li>

<li id="mozFH">
<h4><a href="#mozFH">Flute and Harp Concerto</a></h4>
<p>Pahud and Langlamet/Abbado/B.P.O (WARNER/EMI)</p>
</li>

<li id="racPC">
<h3 id="SR">Rachmaninov</h3>
<h4><a href="#racPC">Piano Concerti (4)</a></h4>

<h5>Piano Concerto No. 2</h5>
<p>The most popular piano concerto in the classical music repertoire:<br/>
Hough/Litton/Dallas Symphony (HYPERION)<br/>
Ashkenazy/Previn/L.S.O (MULTCOMB) (DECCA)<br/><br/>

OTHER RECORDINGS:<br/>
Ashkenazy/Kondrashin/Moscow Philharmonic (DECCA)<br/>
Ashkenazy/Haitink/C.O (DECCA)</p>
</li>

<li id="schSy">
<h3 id="FS">Schubert</h3>
<h4><a href="#schSy">Symphonies (9)</a></h4>

<h5>Symphony Nos. 1-4</h5>
<p>Mehta/Israel Philharmonic (DECCA ELOQUENCE)</p>

<h5>Symphony No. 5</h5>
<p>Harnencourt/C.O (MULTCOMB) (WARNER/EMI)<br/><br/>

OTHER RECORDINGS:<br/>
Abbado/C.O.E (MULTCOMB) (DG)<br/>
Marriner/A.S.M.F (PHILIPS)</p>

<h5>Symphony No. 6</h5>
<p>Wand/Gurzenich Orchestra of Cologne (TESTAMENT)</p>

<h5>Symphony No. 8 "Unfinished"</h5>
<p>Harnencourt/C.O (MULTCOMB) (WARNER/EMI)<br/>
B&ouml;hm/B.P.O (MULTCOMB) (DG)<br/>
Mehta/Israel Philharmonic (MULTCOMB) (DECCA ELOQUENCE)<br/><br/>

OTHER RECORDINGS:<br/>
Boult/L.P.O (EMI)</p>

<h5>Symphony No. 9 "Great"</h5>
<p>Krips/L.S.O (DECCA ELOQUENCE)<br/>
B&ouml;hm/B.P.O (MULTCOMB) (DG)<br/>
Mehta/Israel Philharmonic (MULTCOMB) (DECCA ELOQUENCE)</p>
</li>

<li id="schuIm">
<h4><a href="#schuIm">Impromptus (8)</a></h4>
<p>Pires (DG)<br/>
Lupu (DECCA)<br/>
Uchida (MULTCOMB) (PHILIPS)</p></li>

<li id="sibVC">
<h3 id="JS">Sibelius</h3>
<h4><a href="#sibVC">Violin Concerto</a></h4>
<p>Oistrakh/Rozhdestvensky/USSR Radio Symphony (1965) (MULTCOMB)<br/>
Heifetz/Hendl/Chicago Symphony (1959) (MULTCOMB)</p>
</li>

<li id="tchVC">
<h3 id="PIT">Tchaikovsky</h3>
<h4><a href="#tchVC">Violin Concerto</a></h4>

<p>Oistrakh/Ormandy/Philadelphia Symphony (MULTCOMB) (SONY)<br/>
Oistrakh/Rozhdestvensky/Moscow Philharmonic (1968) (MULTCOMB)<br/>
Chung/Dutoit/Montreal Symphony (MULTCOMB) (DECCA)<br/><br/>

OTHER RECORDINGS:<br/>
Oistrakh/Statskapelle Dresden/Konwitschny (MONO) (DG)</p>
</li>

<li id="tchSy">
<h4><a href="#tchSy">Symphonies (6 + Manfred came between symphonies 4 and 5)</a></h4>

<h5>Symphony No. 4</h5>
<p>Dorati/L.S.O (MULTCOMB)<br/>
Jurowski/L.P.O (LPO)<br/><br/>

OTHER RECORDINGS:<br/>
Zinman/Baltimore Symphony (MULTCOMB) (TELARC)<br/>
Mravinsky/Leningrad Philharmonic (1960) (DG)</p>

<h5>Symphony No. 5</h5>
<p>Jurowski/L.P.O (LPO)<br/>
Gergiev/V.P.O (MULTCOMB) (PHILIPS)<br/><br/>

OTHER RECORDINGS:<br/>
Ormandy/Philadelphia Symphony (1959) (MULTCOMB) (SONY) (L.A)</p>

<h5>Symphony No. 6</h5>
<p>Karajan/B.P.O (1971) (WARNER/EMI)<br/><br/>

OTHER RECORDINGS:<br/>
Mravinsky/Leningrad Philharmonic (1982) (MULTCOMB)</p>
</li>

<li id="tchSer">
<h4><a href="#tchSer">Serenade for Strings</a></h4>
<p>Eschenbach/Philadelphia (ONDINE)<br/>
Munch/Boston Symphony (BMG) -  3. Larghetto elegiaco a bit on the quick side</p>
</li>

<li id="vivFS">
<h3 id="AV">Vivaldi</h3>
<h4><a href="#vivFS">Four Seasons</a></h4>

<p>Biondi/Europa Galante (2000 RECORDING) (VIRGIN VERATAS) (P) - Energetic and vigorous<br/>
Standage/Pinnock/English Concert (ARCHIV) (P) - Quick but stylish<br/>
Carmignola/Marcon/Venice Baroque (SONY) (P) - Refined and energetic</p>
</li>

<li id="vivGLM">
<h4><a href="#vivGLM">Guitar/Lute/Mandolin</a></h4>

<h5>Concerto in D (RV. 93)</h5>
<p>Bream/Gardiner/Monteverdi (MULTCOMB)</p>
<h5>Concerto in G (RV. 532)</h5>
<p>Frati/Bianchi/Scimone/I Solisti Veneti (MULTCOMB) (ERATO)<br/>
Tyler/Jeffrey/Pinnock/English Concert (MULTCOMB) (DG)</p>
</li>

<li id="vauLA">
<h3 id="VW">Vaughan Williams</h3>
<h4><a href="#vauLA">The Lark Ascending</a></h4>

<p>Chang/Haitink/L.P.O (EMI)<br/>
Kennedy/Rattle/City of Birmingham Symphony (EMI)<br/>
Little/Davis/BBC Symphony (TELDEC)<br/><br/>

OTHER RECORDINGS:<br/>
Bean/Boult/New Philharmonic (EMI)</p>
</li>

<li id="vauFTTT">
<h4><a href="#vauFTTT">Fantasia on a Theme of Thomas Tallis</a></h4>
<p>Haitink/L.P.O (EMI)</p>
</li>
</ul>
<br/>

<p>
    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img loading="lazy" style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="Valid CSS!"/>
    </a>
</p>

</div>

<!-- <script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"
		integrity="sha512-pbfEkRtTC0tVCDj1DO2p2TgthqrXy0/xPIl8JpvH/zUMzwFIdTSILylHSbwZ8zmPCzOOHYsDrz26HvOCFo7Mng=="
		crossorigin="anonymous">
</script> -->

<script
		src="https://code.jquery.com/jquery-1.7.2.min.js"
		integrity="sha256-R7aNzoy2gFrVs+pNJ6+SokH04ppcEqJ0yFLkNGoFALQ="
		crossorigin="anonymous">
</script>

<!-- <script src = "./js/jquery-1.7.2.min.js"></script> -->

<script>
	window.jQuery || document.write('<script src="./js/jquery-1.7.2.min.js"><\/script>');
	// var preload = document.createElement("link");
	// preload.href = "./js/jquery-1.7.2.min.js";
	// preload.rel = "preload";
	// preload.as = "script";
	// document.head.appendChild(preload);
	// if (!window.jQuery) {
		// var sNew = document.createElement("script");
		// const scriptParentNode = document.currentScript;
		// let html = "<script> src=\"/js/jquery-1.7.2.min.js\"><\/script>";
		// scriptParentNode.insertAdjacentHTML('afterbegin', html);
			// let sNew = document.createElement("script");
		// sNew.type = "text/javascript";
		// sNew.src = "/js/jquery-1.7.2.min.js";
			// const scriptParentNode = document.currentScript;
			//sNew.onload = function(e){};
		// document.head.appendChild(sNew);

			//scriptParentNode.append(sNew);
			//scriptParentNode.appendChild(sNew);
		// const loadScript = async (url) => {
		// const response = await fetch (url);
		// const script = await response.text();
		// eval(sNew);
		// }
		// const scriptUrl = "/js/jquery-1.7.2.min.js";
		// loadScript(scriptUrl);

	// }
</script>


<!-- <script
	src="https://code.jquery.com/jquery-migrate-1.4.1.min.js">
</script> -->

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"
integrity="sha512-lzilC+JFd6YV8+vQRNRtU7DOqv5Sa9Ek53lXt/k91HZTJpytHS1L6l1mMKR9K6VVoDt4LiEXaa6XBrYk1YhGTQ=="
crossorigin="anonymous" referrerpolicy="no-referrer">
</script> -->

<!-- <script
	src="https://code.jquery.com/jquery-migrate-3.3.0.min.js">
</script> -->

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
crossorigin="anonymous" referrerpolicy="no-referrer">
</script> -->

<!-- <script>
		window.jQuery || document.write('<script src="./js/jquery-3.6.0.min.js"><\/script>');
</script> -->



<!-- <script
		src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/jquery-ui.min.js"
		integrity="sha512-P76gN7IRj67pGxPvgHAk33c/iiWfj1oXpAd/8Oz8KPq2+AvIjvJT3iIyuzk6Sk/PxSmR/y8XX78RzHX5G2NGDg=="
		crossorigin="anonymous">
		// Needed for animatetext.js
</script> -->

<!-- <script
			  src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"
			  integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY="
			  crossorigin="anonymous">
</script> -->

<!-- < src="js/newcore.js"></> -->
<!-- < src="js/jquery-1.5.min.js"></> -->
<!-- < src="js/jquery-ui-1.8.10.custom.min.js"></> Allows animation of floating menu and text scroll -->
<script defer src="js/respond.min.js"></script>	<!-- TODO: Replace possibly -->	<!-- Polyfill for browsers not recognising min-width, max-width and media types -->
<script defer src="js/core-min.js"></script>	<!-- Needed for accordion_mod -->
<!-- <script src="js/show-dropdown.js"></script> Not working -->
<!-- <script> var script = document.createElement("script");
script.src = "./js/jquery-1.7.2.min.js";
document.head.appendChild(script); </script> -->
<script defer src="js/hide_no_javascript_mes-min.js"></script>
<script defer src="js/bvselect-min.js"></script> <!-- Custom dropdown menu that allows for different highlight colours -->
<script defer src="js/change_colour-min.js"></script>
<script defer src="js/accordion_mod-min.js"></script>
<!-- < src="js/floating_nav_menu.js"></> -->	<!-- Using position fixed/sticky better than this -->
<!-- <script src="js/jquery.scrollTo.js"></script>             Script for scrollTo() -->
<!-- <script src="js/scroll_to_link.js"></script> -->
<!-- < src="js/jquery.swfobject.1-1-1.js"></> Was for incorporating flash header image, which is now a png -->
<!-- < src="js/flash_header.js"></>                  Embeds Eras Bold ITC header swobject -->
<script defer src="js/focus-visible-min.js"></script> <!-- Provides :focus-visible support for browsers that don't have it -->
<!-- <script src="js/animatetext.js" defer></script> -->

<!-- <script
		src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/jquery-ui.min.js"
		integrity="sha512-P76gN7IRj67pGxPvgHAk33c/iiWfj1oXpAd/8Oz8KPq2+AvIjvJT3iIyuzk6Sk/PxSmR/y8XX78RzHX5G2NGDg=="
		crossorigin="anonymous">
		//if (window.matchMedia('(prefers-reduced-motion: no-preference)').matches) {
		// Needed for animatetext.js
</script> -->

<script defer src="js/optional_animate-min.js"></script>
</body>
</html>