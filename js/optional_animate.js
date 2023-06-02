if (window.matchMedia('(min-width: 65.125em)').matches
&& window.matchMedia('(prefers-reduced-motion: no-preference)').matches) {

	const loadScript = async (url) => {
		const response = await fetch (url);
		const script = await response.text();
		eval(script); // Needed to make animation work and not break display
	}
	const scriptUrl = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/jquery-ui.min.js";
	loadScript(scriptUrl);

	//var s = document.getElementsByTagName('script');
	//s = s[s.length - 1]; // Find last script
	//var sLast = document.getElementById('myscript');
	//let sLast = document.currentScript;
   	//const sNew = document.createElement("script");
	// let sNew2 = document.createElement("script");
	//sNew.defer = true;
	//sNew.id = "firstTry";
	//sNew.src = "/js/jquery-ui-1.8.10.custom.min.js";
	//sNew.src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/jquery-ui.min.js";
	// sNew2.src = "/js/animatetext.js";

	// let html = "<script> defer src=\"/js/jquery-ui-1.8.10.custom.min.js\"><\/script>";
	// let html2 = "<script> defer src=\"/js/animatetext.js\"><\/script>";
	//sLast.append(sNew);
	//sLast.append(sNew2);

	//    sLast.insertAdjacentHTML('afterbegin', html);
	//    sLast.insertAdjacentHTML('beforeend', html2);

		// sLast.appendChild(sNew);
		// sLast.appendChild(sNew2);
		//document.body.appendChild(sNew);
		//document.body.appendChild(sNew2);

		if (!window.jQuery.ui) {
			//sNew.setAttribute("src", "https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/jquery-ui.min.js");

			const sNew2 = document.createElement("script");
			sNew2.defer = true;
			sNew2.id = "secondTry";
			sNew2.src = "/js/jquery-ui-1.8.10.custom.min.js";
			document.body.appendChild(sNew2);

			//const scriptParent = document.currentScript;
			//const scriptParent = document.getElementById("scriptParent");
			//sNew.scriptParent.replaceChild(sNew2, sNew);
			// eval(sNew2);

			//document.getElementById("firstTry").replaceWith('#secondTry');
			//eval('#secondTry');
		}

		// window.jQuery.ui || document.write('<script defer src="./js/jquery-ui-1.8.10.custom.min.js"><\/script>');
	 	//document.write('<script defer src="/js/animatetext.js"><\/script>');
	// Optionally switch off for non-mobile users, the  motion reduce preference, making text downword scroll animation when page loads

	window.onload = function downloadJSAtOnload() {
		var element = document.createElement("script");
		element.src = "/js/animatetext.js";
		document.body.appendChild(element);
	} 	// Ensure full page load before animation

	//window.onload = downloadJSAtOnload(); // with function definition not working

	// if (window.addEventListener)
	// window.addEventListener("load", downloadJSAtOnload, false);
	// else if (window.attachEvent)
	// window.attachEvent("onload", downloadJSAtOnload);
	// else window.onload = downloadJSAtOnload;
	}