/* jessegangi.com/js/customs/custom-clickover.js */
/* 'co-' == 'click-over-' */


/** Software **/


/*
onclick="window.open(\'http://notepad-plus-plus.org/\', \'_blank\')"
<a href="http://notepad-plus-plus.org/" target="_blank"></a> 

'html: true,' IT SEEMS THIS IS UNECESSARY?
*/


/* Notepad++ */ 

$('#co-notepad-plus-plus').clickover({ 

	html: true, 
	placement: 'bottom', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div class="bubbles"><a href="http://notepad-plus-plus.org/" target="_blank"><h3>Notepad++</h3></a></div><!-- / .bubbles -->', 
	
	content: '<div class="bubbles bubbles-snatch"><h4>Source Code Editor</h4><p>I use it for every project.</p><button type="button" class="btn btn-primary btn-xs btn-block" onclick="window.open(\'http://notepad-plus-plus.org/\', \'_blank\')">&nbsp;Would you like to know more?&nbsp;</button></div><!-- / .bubbles --><br />', 
	
}); 


/* FileZilla */ 

$('#co-filezilla').clickover({ 

	html: true, 
	placement: 'bottom', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div class="bubbles"><a href="http://filezilla-project.org/" target="_blank"><h3>FileZilla</h3></a></div><!-- / .bubbles -->', 
	
	content: '<div class="bubbles"><h4>FTP Client</h4><p>I use this for all my projects. I helps me organize my different servers.</p><button type="button" class="btn btn-default btn-xs" onclick="window.open(\'http://filezilla-project.org/\', \'_blank\')">Would you like to know more?</button></div><!-- / .bubbles -->', 
	
}); 


/* PuTTY */ 

$('#co-putty').clickover({ 

	html: true, 
	placement: 'bottom', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div class="bubbles"><a href="http://www.chiark.greenend.org.uk/~sgtatham/putty/" target="_blank"><h3>PuTTY</h3></a></div><!-- / .bubbles -->', 
	
	content: '<div class="bubbles"><h4>Telnet/SSH Client</h4><p>This Tool gets me in, and out as quickly as possible, and it makes it easy.</p><button type="button" class="btn btn-default btn-xs" onclick="window.open(\'http://www.chiark.greenend.org.uk/~sgtatham/putty/\', \'_blank\')">Would you like to know more?</button></div><!-- / .bubbles -->', 
	
}); 


/* Adobe Photoshop */ 

$('#co-adobe-photoshop').clickover({ 

	html: true, 
	placement: 'bottom', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div style="text-align: center;"><h3><a href="">Adobe Photoshop</a></h3></div>', 
	
	content: '<div style="text-align: center;"><h4>Graphics Editor</h4><p>I simply love Photoshop. I use it all the time, even when not necessary.<br /><br /><a class="btn btn-mini" href="http://success.adobe.com/en/na/sem/products/photoshopfamily.html/">Would you like to know more?</a></p></div>', 
	
}); 


/* HandBreak */ 

$('#co-handbreak').clickover({ 

	html: true, 
	placement: 'bottom', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div style="text-align: center;"><h3><a href="">HandBreak</a></h3></div>', 
	
	content: '<div style="text-align: center;"><h4>Video Transcoder</h4><p>I always run into situations where I need to convert video from one format to another. HandBreak makes this simple, and fast.<br /><br /><a class="btn btn-mini" href="http://success.adobe.com/en/na/sem/products/photoshopfamily.html/">Would you like to know more?</a></p></div>', 
	
}); 


/* Microsoft Excel */ 

$('#co-microsoft-excel').clickover({ 

	html: true, 
	placement: 'bottom', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div style="text-align: center;"><h3><a href="">Microsoft Excel</a></h3></div>', 
	
	content: '<div style="text-align: center;"><h4>Spreadsheet Application</h4><p>A lot of people say that this is a useless program, unnecessary, pointless, but I find it very usefull for organizing my projects, and data.<br /><br /><a class="btn btn-mini" href="http://success.adobe.com/en/na/sem/products/photoshopfamily.html/">Would you like to know more?</a></p></div>', 
	
}); 


/* git */ 

$('#co-git').clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div style="text-align: center;"><h3><a href="http://git-scm.com">git</a></h3></div>', 
	
	content: '<div style="text-align: center;"><h4>Distributed Version Control, and Source Code Management System</h4><p>Who knows? Maybe a quick distributed version control, and source code management system is not for you?<br /><br /><a class="btn btn-mini" href="http://git-scm.com">Would you like to know more?</a></p></div>', 
	
}); 


/* MySQL */ 

$('#co-mysql').clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div style="text-align: center;"><h3><a href="http://git-scm.com">MySQL</a></h3></div>', 
	
	content: '<div style="text-align: center;"><h4>The world\'s most popular open source database</h4><p>The data sandbox. There is nothing better than playing with data.<br /><br /><a class="btn btn-mini" href="http://www.mysql.com">Would you like to know more?</a></p></div>', 
	
}); 


/* Google Chrome */ 

$('#co-google-chrome').clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div style="text-align: center;"><h3><a href="http://google.com/chrome">Google Chrome</a></h3></div>', 
	
	content: '<div style="text-align: center;"><h4>The fast, free browser that is built for the modern web.</h4><p>The fastest, most complient web browser that performs as you would expect, when you need it, and does it efficiently. Did you expect anything less from the wizards at Google?<br /><br /><a class="btn btn-mini" href="http://google.com/chrome">Would you like to know more?</a></p></div>', 
	
}); 


/* Mozilla Firefox */ 

$('#co-mozilla-firefox').clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div style="text-align: center;"><h3><a href="http://mozilla.org">Mozilla Firefox</a></h3></div>', 
	
	content: '<div style="text-align: center;"><h4>Different by Design.</h4><p>Mozilla is a game changer. From the ashes of Netscape, came Pheonix, renamed Firebird, and finally born as Firefox. This browser bridged the gap for many years, remaining the go to solution till the release of Google Chrome in late 2008.<br /><br /><a class="btn btn-mini" href="http://mozilla.org">Would you like to know more?</a></p></div>', 
	
}); 


/* Apple Safari */ 

$('#co-apple-safari').clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div style="text-align: center;"><h3><a href="http://apple.com/safari">Apple Safari</a></h3></div>', 
	
	content: '<div style="text-align: center;"><h4>Browse the web in smarter, more powerful ways.</h4><p>Safari is a great browser, mainly based on Apple devices, but is also available on Widnows, and some other systems.<br /><br /><a class="btn btn-mini" href="http://apple.com/safari">Would you like to know more?</a></p></div>', 
	
}); 


/* Microsoft Internet Explorer */ 

$('#co-microsoft-internet-explorer').clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div style="text-align: center;"><h3><a href="http://microsoft.com/ie">Internet Explorer</a></h3></div>', 
	
	content: '<div style="text-align: center;"><h4>Safer, easier, more reliable.</h4><p>Microsoft has made many mistakes when considering IE, and allowing support for antiquated versions. They are finally starting to see that it is important to include new web technologies, and to play nice with other vendors. IE is the bane of the web, and the reason we can not have nice things.<br /><br /><a class="btn btn-mini" href="http://microsoft.com/ie">Would you like to know more?</a></p></div>', 
	
}); 


/** / Software **/ 


/** Code **/ 


/* HTML(5) */

$('#co-html5').clickover({

	html: true, 
	placement: 'bottom', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div style="text-align: center;"><h3>HTML5</h3></div>', 
	
	content: '<div style="text-align: center;"><p>It is nice to progress, and make things easier.</p></div>',
	
});


/* CSS(3) */

$('#co-css3').clickover({

	html: true, 
	placement: 'bottom', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div style="text-align: center;"><h3>CSS3</h3></div>', 
	
	content: '<div style="text-align: center;"><p>Making things beautiful, and functional.</p></div>',
	
});


/* JavaScript */

$('#co-javascript').clickover({

	html: true, 
	placement: 'bottom', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div style="text-align: center;"><h3>JavaScript</h3></div>', 
	
	content: '<div style="text-align: center;"><p>Adding funtionality, like these Click Overs.</p></div>',
	
});


/* PHP */

$('#co-php').clickover({

	html: true, 
	placement: 'bottom', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div style="text-align: center;"><h3>PHP</h3></div>', 
	
	content: '<div style="text-align: center;"><p>Templates, in templates, including templates.</p></div>',
	
});


/** / Code **/


/** Frameworks **/


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

/* HTML5 Boilerplate */
$('#co-html5-boilerplate').clickover({
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


/** / Frameworks **/


/** Learning **/


/* CakePHP */ 

$('#co-cakephp').clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div style="text-align: center;"><h3><a href="http://cakephp.org/">CakePHP</a></h3></div>', 
	
	content: '<div style="text-align: center;"><h4>MVC Framework</h4><p>I have been using PHP since I started building web sites. I was introduced to the Model View Controller approach when learning EmberJS. Although many professionals look down on PHP, it is one of the most widely used scripting languages on the net, and by applying the MVC approach it makes this a very useful tool.<br /><br /><a class="btn btn-mini" href="http://cakephp.org/">Would you like to know more?</a></p></div>', 
	
}); 


/* Ruby on Rails */ 

$('#co-ruby-on-rails').clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div class="bubbles"><a href="http://rubyonrails.org/" target="_blank"><h3>Ruby on Rails</h3></a></div><!-- / .bubbles -->', 
	
	content: '<div class="bubbles bubbles-snatch"><h4>MVC Framework</h4><p>While I am very green to the whole Ruby world, I have found it to be a breath of fresh air. Relying on the Model View Controller approach, Active Record Pattern, Convention Over Configuration, and Don\'t Repeat Yourself principles, and paterns make it one of the best tools I have ever used.</p><button type="button" class="btn btn-primary btn-xs btn-block" onclick="window.open(\'http://rubyonrails.org/\', \'_blank\')">&nbsp;Would you like to know more?&nbsp;</button></div><!-- / .bubbles --><br />', 
	
}); 


/* AngularJS */ 

$('#co-angularjs').clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div class="bubbles"><a href="https://angularjs.org/" target="_blank"><h3>AngularJS</h3></a></div><!-- / .bubbles -->', 
	
	content: '<div class="bubbles bubbles-snatch"><h4>MVC Framework</h4><p>Everyone who knows me knows I <3 Google. And what is better than the great Google giving us a MVC JavaScript Framework Library that beefs up your code with custom tag attributes that bind to models via standard variables. Simple, and elegant.</p><button type="button" class="btn btn-primary btn-xs btn-block" onclick="window.open(\'https://angularjs.org/\', \'_blank\')">&nbsp;Would you like to know more?&nbsp;</button></div><!-- / .bubbles --><br />', 
	
}); 


/* Node.js */ 

$('#co-nodejs').clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div class="bubbles"><a href="http://nodejs.org/" target="_blank"><h3>Node.js</h3></a></div><!-- / .bubbles -->', 
	
	content: '<div class="bubbles bubbles-snatch"><h4>Software Platform</h4><p>Excuse me? Did you say a server side asynchronous scalable web server running applications in written in JavaScript, and bypassing the need for Apache entirely? Oh my. I can\'t wait to play.</p><button type="button" class="btn btn-primary btn-xs btn-block" onclick="window.open(\'http://nodejs.org/\', \'_blank\')">&nbsp;Would you like to know more?&nbsp;</button></div><!-- / .bubbles --><br />', 
	
}); 


/** / Learning **/


/** Contact **/


/* email */
$('#co-email').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3>Email Me!</h3></div>', 
	content: '<div style="text-align: center;"><p><a href="mailto:jgangi@aerialapps.com?subject=I am contacting you via your Online Resume!">jgangi@aerialapps.com</a></p></div>',
	allow_multiple: false, 
});

/* Phone */
$('#co-sms-phone').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3>Text, or Call me!</h3></div>', 
	content: '<div style="text-align: center;"><p><a href="tel:2183102447">(218) 310-2447</a></p></div>',
	allow_multiple: false, 
});

 /* Snail-Mail */
$('#co-snail-mail').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3>Snail Mail me!</h3></div>', 
	content: '<div style="text-align: center;"><p>P.O. Box 16681<br />Duluth, MN, 55816</p></div>', 
	allow_multiple: false, 
});


/* Twitter */

$('#co-twitter').clickover({

	html: true,
	placement: 'bottom', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div style="text-align: center;"><h3>Send me a Tweet!</h3></div>', 
	
	content: '<div style="text-align: center;"><p><a href="http://www.twitter.com/Ganginator" target="_blank">@Ganginator</a></p></div>', 
	
});


/** / Contact **/


/** Other **/


/* Information */
$('#co-information').clickover({
	auto_close: 10 * 1000, 
	placement: 'top', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div class="bubbles"><a href="?page=information"><h3>Information</h3></a></div><!-- / .bubbles -->', 
	content: '<div class="bubbles">Built with <a href="http://html5boilerplate.com/" target="_blank">HTML5 Boilerplate</a>, <a href="http://getbootstrap.com/" target="_blank">Bootstrap</a>, and <a href="http://fontawesome.io/" target="_blank">Font Awesome</a><br /><span style="color: red;">I &nbsp;&hearts;&nbsp; <a href="http://en.wikipedia.org/wiki/HTML5" target="_blank">HTML5</a> &nbsp;&amp;&nbsp; <a href="https://en.wikipedia.org/wiki/Cascading_Style_Sheets#CSS_3" target="_blank">CSS3</a> &nbsp;&amp;&nbsp; <a href="https://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> &nbsp;&amp;&nbsp; <a href="https://en.wikipedia.org/wiki/PHP" target="_blank">PHP</a></span><!-- <br /><a href="../README.md" target="_blank">README.md</a> --><?php include("README.md") ?></div><!-- / .bubbles -->',
	allow_multiple: false, 
});


/** / Other **/


/*** / Custom Bootstrap Clickover JavaScript ***/


