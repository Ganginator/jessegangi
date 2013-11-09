/*! HEADER:
 * LIFE 8/11/12 to 11/05/13
 * Custom JavaScript for Jesse Gangi's Online Resume
 * Copyright 2012-13 Jesse Gangi, Aerial Applications
 * Built by Ganginator for jessegangi.com
 */


/* Popovers */


$("#blob").popover({ 
placement: 'bottom', 
html: true, /* IT SEEMS THIS IS UNECESSARY? */
title: '<div style="text-align: center;"><h3><a href="http://notepad-plus-plus.org/" target="_blank">Notepad++ IDE</a></h3></div>', 
content: '<div style="text-align: center;"><p>This might sound underwhelming,<br />but this is my top Tool.<br /><br />I use it for almost every project.</p><p><a class="btn" href="http://notepad-plus-plus.org/" target="_blank">Go &raquo;</a></p></div>', 
trigger: 'hover' /* THIS WAS ALL I NEEDED FOR HOVERING AT FIRST */
});


/* Clickovers */


/* Software Page Clickovers */


/* Notepad++ */
$('#auto-close-co-1').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom',
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3><a href="http://notepad-plus-plus.org/" target="_blank">Notepad++</a></h3></div>', 
	content: '<div style="text-align: center;"><h4><strong>Source Code Editor</strong></h4><p>I use it for every project.<br /><br /><a class="btn btn-mini" href="http://notepad-plus-plus.org/" target="_blank">Would you like to know more?</a></p></div>', 
	allow_multiple: false, 
});


/* FileZilla */
$('#auto-close-co-2').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3><a href="http://filezilla-project.org/">FileZilla</a></h3></div>', 
	content: '<div style="text-align: center;"><h4>FTP Client</h4><p>I use this for all my projects. I helps me organize my different servers.<br /><br /><a class="btn btn-mini" href="http://filezilla-project.org/">Would you like to know more?</a></p></div>', 
	allow_multiple: false, 
});


/* PuTTY */
$('#auto-close-co-3').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3><a href="http://www.chiark.greenend.org.uk/~sgtatham/putty/">PuTTY</a></h3></div>', 
	content: '<div style="text-align: center;"><h4>Telnet/SSH Client</h4><p>This Tool gets me in, and out as quickly as possible, and it makes it easy.<br /><br /><a class="btn btn-mini" href="http://www.chiark.greenend.org.uk/~sgtatham/putty/">Would you like to know more?</a></p></div>', 
	allow_multiple: false, 
});


/* Adobe Photoshop */
$('#auto-close-co-4').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3><a href="">Adobe Photoshop</a></h3></div>', 
	content: '<div style="text-align: center;"><h4>Graphics Editor</h4><p>I simply love Photoshop. I use it all the time, even when not necessary.<br /><br /><a class="btn btn-mini" href="http://success.adobe.com/en/na/sem/products/photoshopfamily.html/">Would you like to know more?</a></p></div>', 
	allow_multiple: false, 
});


/* HandBreak */
$('#auto-close-co-5').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3><a href="">HandBreak</a></h3></div>', 
	content: '<div style="text-align: center;"><h4>Video Transcoder</h4><p>I always run into situations where I need to convert video from one format to another. HandBreak makes this simple, and fast.<br /><br /><a class="btn btn-mini" href="http://success.adobe.com/en/na/sem/products/photoshopfamily.html/">Would you like to know more?</a></p></div>', 
	allow_multiple: false, 
});


/* Microsoft Excel */
$('#auto-close-co-6').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3><a href="">Microsoft Excel</a></h3></div>', 
	content: '<div style="text-align: center;"><h4>Spreadsheet Application</h4><p>A lot of people say that this is a useless program, unnecessary, pointless, but I find it very usefull for organizing my projects, and data.<br /><br /><a class="btn btn-mini" href="http://success.adobe.com/en/na/sem/products/photoshopfamily.html/">Would you like to know more?</a></p></div>', 
	allow_multiple: false, 
});


/* git */
$('#co-git').clickover({
	auto_close: 10 * 1000,
	placement: 'top',
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3><a href="http://git-scm.com">git</a></h3></div>',
	content: '<div style="text-align: center;"><h4>Distributed Version Control, and Source Code Management System</h4><p>Who knows? Maybe a quick distributed version control, and source code management system is not for you?<br /><br /><a class="btn btn-mini" href="http://git-scm.com">Would you like to know more?</a></p></div>',
	allow_multiple: false,
});


/* MySQL */
$('#co-mysql').clickover({
	auto_close: 10 * 1000,
	placement: 'top',
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3><a href="http://git-scm.com">MySQL</a></h3></div>',
	content: '<div style="text-align: center;"><h4>The world\'s most popular open source database</h4><p>The data sandbox. There is nothing better than playing with data.<br /><br /><a class="btn btn-mini" href="http://www.mysql.com">Would you like to know more?</a></p></div>',
	allow_multiple: false,
});


/* Google Chrome */
$('#co-google-chrome').clickover({
	auto_close: 10 * 1000,
	placement: 'top',
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3><a href="http://google.com/chrome">Google Chrome</a></h3></div>',
	content: '<div style="text-align: center;"><h4>The fast, free browser that is built for the modern web.</h4><p>The fastest, most complient web browser that performs as you would expect, when you need it, and does it efficiently. Did you expect anything less from the wizards at Google?<br /><br /><a class="btn btn-mini" href="http://google.com/chrome">Would you like to know more?</a></p></div>',
	allow_multiple: false,
});


/* Mozilla Firefox */
$('#co-mozilla-firefox').clickover({
	auto_close: 10 * 1000,
	placement: 'top',
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3><a href="http://mozilla.org">Mozilla Firefox</a></h3></div>',
	content: '<div style="text-align: center;"><h4>Different by Design.</h4><p>Mozilla is a game changer. From the ashes of Netscape, came Pheonix, renamed Firebird, and finally born as Firefox. This browser bridged the gap for many years, remaining the go to solution till the release of Google Chrome in late 2008.<br /><br /><a class="btn btn-mini" href="http://mozilla.org">Would you like to know more?</a></p></div>',
	allow_multiple: false,
});


/* Apple Safari */
$('#co-apple-safari').clickover({
	auto_close: 10 * 1000,
	placement: 'top',
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3><a href="http://apple.com/safari">Apple Safari</a></h3></div>',
	content: '<div style="text-align: center;"><h4>Browse the web in smarter, more powerful ways.</h4><p>Safari is a great browser, mainly based on Apple devices, but is also available on Widnows, and some other systems.<br /><br /><a class="btn btn-mini" href="http://apple.com/safari">Would you like to know more?</a></p></div>',
	allow_multiple: false,
});


/* Microsoft Internet Explorer */
$('#co-microsoft-internet-explorer').clickover({
	auto_close: 10 * 1000,
	placement: 'top',
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3><a href="http://microsoft.com/ie">Internet Explorer</a></h3></div>',
	content: '<div style="text-align: center;"><h4>Safer, easier, more reliable.</h4><p>Microsoft has made many mistakes when considering IE, and allowing support for antiquated versions. They are finally starting to see that it is important to include new web technologies, and to play nice with other vendors. IE is the bane of the web, and the reason we can not have nice things.<br /><br /><a class="btn btn-mini" href="http://microsoft.com/ie">Would you like to know more?</a></p></div>',
	allow_multiple: false,
});


/* Contact Page Clickovers */


/* email */
$('#auto-close-co-email').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3>Email Me!</h3></div>', 
	content: '<div style="text-align: center;"><p><a href="mailto:jgangi@aerialapps.com?subject=I am contacting you via your Online Resume!">jgangi@aerialapps.com</a></p></div>',
	allow_multiple: false, 
});


/* Twitter */
$('#auto-close-co-twitter').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3>Send me a Tweet!</h3></div>', 
	content: '<div style="text-align: center;"><p><a href="http://www.twitter.com/Ganginator" target="_blank">@Ganginator</a></p></div>', 
	allow_multiple: false, 
});


/* Phone */
$('#auto-close-co-smsphone').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3>Text, or Call me!</h3></div>', 
	content: '<div style="text-align: center;"><p><a href="tel:2183102447">(218) 310-2447</a></p></div>',
	allow_multiple: false, 
});


 /* Snail-Mail */
$('#auto-close-co-snailmail').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3>Snail Mail me!</h3></div>', 
	content: '<div style="text-align: center;"><p>P.O. Box 16681<br />Duluth, MN, 55816</p></div>', 
	allow_multiple: false, 
});


/* Frameworks Page Clickovers */


/* Drupal */
$('#co-drupal').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3><a href="http://drupal.org/">Drupal</a></h3></div>', 
	content: '<div style="text-align: center;"><h4>Content Management Platform</h4><p>I love Drupal. I use it whenever necessary.<br /><br /><a class="btn btn-mini" href="http://drupal.org/">Would you like to know more?</a></p></div>', 
	allow_multiple: false, 
});


/* Bootstrap */
$('#co-bootstrap').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3><a href="http://twitter.github.com/bootstrap/">Bootstrap</a></h3></div>', 
	content: '<div style="text-align: center;"><h4>Front-end Framework</h4><p>Slick, and quick. This site is built with Bootstrap.<br /><br /><a class="btn btn-mini" href="http://twitter.github.com/bootstrap/">Would you like to know more?</a></p></div>', 
	allow_multiple: false, 
});


/* Boilerplate */
$('#co-boilerplate').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3><a href="http://html5boilerplate.com/">HTML5 Boilerplate</a></h3></div>', 
	content: '<div style="text-align: center;"><h4>Front-end Template</h4><p>Fast, and adaptable. Great with PHP templates.<br /><br /><a class="btn btn-mini" href="http://html5boilerplate.com/">Would you like to know more?</a></p></div>', 
	allow_multiple: false, 
});


/* Wordpress */
$('#co-wordpress').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3><a href="http://wordpress.org/">Wordpress</a></h3></div>', 
	content: '<div style="text-align: center;"><h4>Blogging Tool</h4><p>Though I purposely avoid using this as much as possible, I often find it the best fit for certain clients needs.<br /><br /><a class="btn btn-mini" href="http://wordpress.org/">Would you like to know more?</a></p></div>', 
	allow_multiple: false, 
});


/* Code Page Clickovers */


/* HTML(5) */
$('#co-html5').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3>HTML5</h3></div>', 
	content: '<div style="text-align: center;"><p>It is nice to progress, and make things easier.</p></div>',
	allow_multiple: false, 
});


/* CSS(3) */
$('#co-css3').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3>CSS3</h3></div>', 
	content: '<div style="text-align: center;"><p>Making things beautiful, and functional.</p></div>',
	allow_multiple: false, 
});


/* PHP */
$('#co-php').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3>PHP</h3></div>', 
	content: '<div style="text-align: center;"><p>Templates, in templates, including templates.</p></div>',
	allow_multiple: false, 
});


/* JavaScript */
$('#co-javascript').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3>JavaScript</h3></div>', 
	content: '<div style="text-align: center;"><p>Adding funtionality, like these Click Overs.</p></div>',
	allow_multiple: false, 
});


/* Other Clickovers */


/* Information */
$('#info').clickover({
	auto_close: 10 * 1000, 
	placement: 'top', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3>Information</h3></div>', 
	content: '<div style="text-align: center;"><br />Coming soon.</div><br />',
	allow_multiple: false, 
});


/* STAMP:
	Jesse Gangi
	jessegangi.com
	218 310 2447
	jgangi @ aerialapps.com
	@Ganginator
	"Added scripts, for added awesomeness."
*/