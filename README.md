UAParser
======

UAParser takes advantage of the browser-detection library "ua-parser-php". (https://github.com/tobie/ua-parser/tree/master/php)

I cannot take any credit for the original library, I just wrapped it up to make it work with only static calls. 

Usage
-----
The following functions are available to use:

	echo UserAgent::full();
	// -> Chrome 16.0.912/Mac OS X 10.6.8
	
	echo UserAgent::browserFull();
	// -> "Chrome 16.0.912"
	
	echo UserAgent::browser();
	// -> "Chrome"
	
	echo UserAgent::version();
	// -> "16.0.912"
	
	echo UserAgent::major();
	// -> 16 (minor, build, & revision also available)
	
	echo UserAgent::osFull();
	// -> "Mac OS X 10.6.8"
	
	echo UserAgent::os();
	// -> "Mac OS X"
	
	echo UserAgent::osVersion();
	// -> "10.6.8"
	
	echo UserAgent::osMajor();
	// -> 10 (osMinor, osBuild, & osRevision also available)
	
	/* 
	* in select cases the device information will also be captured
	*/
	
	echo UserAgent::deviceFull();
	// -> "Palm Pixi 1.0"
	
	echo UserAgent::device();
	// -> "Palm Pixi"
	
	echo UserAgent::deviceVersion();
	// -> "1.0"
	
	echo UserAgent::deviceMajor();
	// -> 1 (deviceMinor also available)
	
	/*
	* Some other generic boolean options
	*/
	
	echo UserAgent::isMobile();
	// -> (would return true if the browser met the criteria of a mobile browser based on the user agent information)
	
	echo UserAgent::isMobileDevice();
	// -> (would return true if the device met the criteria of a mobile device based on the user agent information)
	
	echo UserAgent::isTablet();
	// -> (would return true if the device was a tablet according to the user agent information)
	
	echo UserAgent::isSpider();
	// -> (would return true if the device was a spider according to the user agent information)
	
	echo UserAgent::isComputer();
	// -> (would return true if the device was a computer according to the user agent information)
	
	echo UserAgent::isUIWebview();
	// -> (would return true if the user agent was from a uiwebview in ios)
	
------

This asset library was inspired by and uses components from the following libraries:

 - [ua-parser-php](https://github.com/tobie/ua-parser/tree/master/php)
 - [matthiew/uaparser](https://github.com/Matthiew/Symfony2UAparser)

