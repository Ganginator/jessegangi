/*! jessegangi.com/js/customs/custom-clickover.js */ 


/* 'co-' == 'click-over-' */ 
/* 'html: true,' IT SEEMS THIS IS UNECESSARY? */ 
/* WORKING HOME PAGE BUTTON: 
<a class="btn btn-large btn-primary" href="?page=about">Would you like to know more?</a> */
/* OTHER USED BUTTON HERE: 
<button type="button" class="btn btn-primary btn-xs btn-block" onclick="window.open(\'//notepad-plus-plus.org\', \'_blank\')">&nbsp;Would you like to know more?&nbsp;</button>
 */
/* NEW TEST BUTTON: 
<a class="btn btn-primary btn-xs" href="//notepad-plus-plus.org" target="_blank">&nbsp;Would you like to know more?&nbsp;</a>
 */


/** Software **/ 


/* Notepad++ */ 

$( '#co-notepad-plus-plus' ).clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div class="clickover-header"><h3><a href="//notepad-plus-plus.org" target="_blank">Notepad++</a></h3></div>', 
	
	content: '<div class="clickover-footer"><h4>Source Code Editor</h4><p>Simple, and customizable, with many available plugins to cover any one of my needs. I use it all the time for coding, down to simple text files.</p><a class="btn btn-primary btn-xs" href="//notepad-plus-plus.org" target="_blank">&nbsp;Would you like to know more?&nbsp;</a></div><br />', 
	
}); 


/* FileZilla */ 

$( '#co-filezilla' ).clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div class="clickover-header"><h3><a href="//filezilla-project.org" target="_blank">FileZilla</a></h3></div>', 
	
	content: '<div class="clickover-footer"><h4>FTP Client</h4><p>This tool makes it easy to transfer files back and forth, and it helps me organize my different servers. I use this for all my projects.</p><a class="btn btn-primary btn-xs" href="//filezilla-project.org" target="_blank">&nbsp;Would you like to know more?&nbsp;</a></div><br />', 
	
}); 


/* PuTTY */ 
/* HYPERLINK REQUIRES THE www. */

$( '#co-putty' ).clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div class="clickover-header"><h3><a href="//www.chiark.greenend.org.uk/~sgtatham/putty" target="_blank">PuTTY</a></h3></div>', 
	
	content: '<div class="clickover-footer"><h4>Telnet/SSH Client</h4><p>This Tool gets me in, and out as quickly as possible, making it easy to controll my servers. It helps me organize my different servers as well. I use this for all my projects.</p><a class="btn btn-primary btn-xs" href="//www.chiark.greenend.org.uk/~sgtatham/putty" target="_blank">&nbsp;Would you like to know more?&nbsp;</a></div><br />', 
	
}); 


/* Adobe Photoshop */ 

$( '#co-adobe-photoshop' ).clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div class="clickover-header"><h3><a href="//adobe.com/products/photoshopfamily.html" target="_blank">Adobe Photoshop</a></h3></div>', 
	
	content: '<div class="clickover-footer"><h4>Graphics Editor</h4><p>I simply love Photoshop. I use it all the time, even when not necessary. However, I\'m a little weary of the new Creative Cloud.</p><a class="btn btn-primary btn-xs" href="//adobe.com/products/photoshopfamily.html" target="_blank">&nbsp;Would you like to know more?&nbsp;</a></div><br />', 
	
}); 


/* HandBreak */ 

$( '#co-handbreak' ).clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div class="clickover-header"><h3><a href="//handbrake.fr" target="_blank">HandBreak</a></h3></div>', 
	
	content: '<div class="clickover-footer"><h4>Video Transcoder</h4><p>I always run into situations where I need to convert video from one format to another. HandBreak makes this simple, and fast.</p><a class="btn btn-primary btn-xs" href="//handbrake.fr" target="_blank">&nbsp;Would you like to know more?&nbsp;</a></div><br />', 
	
}); 


/* Microsoft Excel */ 

$( '#co-microsoft-excel' ).clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div class="clickover-header"><h3><a href="//office.microsoft.com/en-us/excel" target="_blank">Microsoft Excel</a></h3></div>', 
	
	content: '<div class="clickover-footer"><h4>Spreadsheet Application</h4><p>A lot of people say that this is a useless program, unnecessary, pointless, but I find it very usefull for organizing my projects, and data, and also for minor automation of data.</p><a class="btn btn-primary btn-xs" href="//office.microsoft.com/en-us/excel" target="_blank">&nbsp;Would you like to know more?&nbsp;</a></div><br />', 
	
}); 


/* git */ 

$( '#co-git' ).clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div class="clickover-header"><h3><a href="//git-scm.com" target="_blank">git</a></h3></div>', 
	
	content: '<div class="clickover-footer"><h4>Distributed Version Control, and Source Code Management System</h4><p>There\'s nothing better than being able to revert your changes when necessary. By branching you can also have virtual "snapshots" of the state of a project at each step of it\'s life cycle. This is a very useful tool that I now impliment in every project.</p><a class="btn btn-primary btn-xs" href="//git-scm.com" target="_blank">&nbsp;Would you like to know more?&nbsp;</a></div><br />', 
	
}); 


/* MySQL */ 

$( '#co-mysql' ).clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div class="clickover-header"><h3><a href="//mysql.com" target="_blank">MySQL</a></h3></div>', 
	
	content: '<div class="clickover-footer"><h4>The world\'s most popular open source database.</h4><p>I\'ve used my fair share of MySQL, diving deep into databases. I love playing with data. However, I now build most everything databaseless, using flat files that hold the data, removing a portion of the stack entirely.</p><a class="btn btn-primary btn-xs" href="//mysql.com" target="_blank">&nbsp;Would you like to know more?&nbsp;</a></div><br />', 
	
}); 


/* Google Chrome */ 

$( '#co-google-chrome' ).clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div class="clickover-header"><h3><a href="//google.com/chrome" target="_blank">Google Chrome</a></h3></div>', 
	
	content: '<div class="clickover-footer"><h4>The fast, free browser that is built for the modern web.</h4><p>The fastest, most complient web browser that performs as you would expect, when you need it, and does it efficiently. Link it to your Google account, and many useful features become available!</p><a class="btn btn-primary btn-xs" href="//google.com/chrome" target="_blank">&nbsp;Would you like to know more?&nbsp;</a></div><br />', 
	
}); 


/* Mozilla Firefox */ 

$( '#co-mozilla-firefox' ).clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div class="clickover-header"><h3><a href="//mozilla.org" target="_blank">Mozilla Firefox</a></h3></div>', 
	
	content: '<div class="clickover-footer"><h4>Different by Design.</h4><p>Mozilla is a game changer. This browser bridged the gap for many years, remaining the go to solution till the release of Google Chrome in late 2008.</p><a class="btn btn-primary btn-xs" href="//mozilla.org" target="_blank">&nbsp;Would you like to know more?&nbsp;</a></div><br />', 
	
}); 


/* Apple Safari */ 

$( '#co-apple-safari' ).clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div class="clickover-header"><h3><a href="//apple.com/safari" target="_blank">Apple Safari</a></h3></div>', 
	
	content: '<div class="clickover-footer"><h4>Browse the web in smarter, more powerful ways.</h4><p>Safari is a great browser. However, I personally avoid anything Apple when possible, and only use it for testing my projects.</p><a class="btn btn-primary btn-xs" href="//apple.com/safari" target="_blank">&nbsp;Would you like to know more?&nbsp;</a></div><br />', 
	
}); 


/* Microsoft Internet Explorer */ 

$( '#co-microsoft-internet-explorer' ).clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div class="clickover-header"><h3><a href="//microsoft.com/ie" target="_blank">Internet Explorer</a></h3></div>', 
	
	content: '<div class="clickover-footer"><h4>Safer, easier, more reliable.</h4><p>Microsoft has made many mistakes when considering IE, and allowing support for antiquated versions. They are finally starting to see that it\'s important to include new web technologies, and to play nice with other vendors. IE is the bane of the web, and the reason we can not have nice things.</p><a class="btn btn-primary btn-xs" href="//microsoft.com/ie" target="_blank">&nbsp;Would you like to know more?&nbsp;</a></div><br />', 
	
}); 


/** / Software **/ 


/** Frameworks **/ 


/* Drupal */ 

$( '#co-drupal' ).clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div class="clickover-header"><h3><a href="//drupal.org" target="_blank">Drupal</a></h3></div>', 
	
	content: '<div class="clickover-footer"><h4>Content Management Platform</h4><p>I love Drupal. It\'s intuitive, powerful, and flexable. I use it whenever necessary.</p><a class="btn btn-primary btn-xs" href="//drupal.org" target="_blank">&nbsp;Would you like to know more?&nbsp;</a></div><br />', 
	
}); 


/* Bootstrap */ 

$( '#co-bootstrap' ).clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div class="clickover-header"><h3><a href="//getbootstrap.com" target="_blank">Bootstrap</a></h3></div>', 
	
	content: '<div class="clickover-footer"><h4>Front-end Framework</h4><p>It\'s slick, and quick, with all the standard bells, and whistles baked in. This site is built with Bootstrap.</p><a class="btn btn-primary btn-xs" href="//getbootstrap.com" target="_blank">&nbsp;Would you like to know more?&nbsp;</a></div><br />', 
	
}); 


/* HTML5 Boilerplate */ 

$( '#co-html5-boilerplate' ).clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div class="clickover-header"><h3><a href="//html5boilerplate.com" target="_blank">HTML5 Boilerplate</a></h3></div>', 
	
	content: '<div class="clickover-footer"><h4>Front-end Template</h4><p>A fast, and adaptable base to build upon. It works great with PHP templates.</p><a class="btn btn-primary btn-xs" href="//html5boilerplate.com" target="_blank">&nbsp;Would you like to know more?&nbsp;</a></div><br />', 
	
}); 


/* Jekyll */


/* TO BE ADDED */


/* Wordpress */ 

$( '#co-wordpress' ).clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div class="clickover-header"><h3><a href="//wordpress.org" target="_blank">Wordpress</a></h3></div>', 
	
	content: '<div class="clickover-footer"><h4>Blogging Tool</h4><p>Though I purposely avoid using this as much as possible due to security risks, I often, begrudgingly, find it the best fit for certain clients needs.</p><a class="btn btn-primary btn-xs" href="//wordpress.org" target="_blank">&nbsp;Would you like to know more?&nbsp;</a></div><br />', 
	
}); 


/** / Frameworks **/ 


/** Code **/ 


/* HTML(5) */ 

$( '#co-html5' ).clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div class="clickover-header"><h3><a href="//en.wikipedia.org/wiki/HTML5" target="_blank">HTML5</a></h3></div>', 
	
	content: '<div class="clickover-footer"><h4>HyperText Markup Language</h4><p>it\'s nice to progress, and make things easier.</p><a class="btn btn-primary btn-xs" href="//en.wikipedia.org/wiki/HTML5" target="_blank">&nbsp;Would you like to know more?&nbsp;</a></div><br />', 
	
}); 


/* Sass CSS(3) */ 

$( '#co-sass-css3' ).clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div class="clickover-header"><h3><a href="//en.wikipedia.org/wiki/Sass_%28stylesheet_language%29" target="_blank">Sass CSS3</a></h3></div>', 
	
	content: '<div class="clickover-footer"><h4>Syntactically Awesome Stylesheets</h4><p>Making things beautiful, functional, and modular.</p><a class="btn btn-primary btn-xs" href="//en.wikipedia.org/wiki/Sass_%28stylesheet_language%29" target="_blank">&nbsp;Would you like to know more?&nbsp;</a></div><br />', 
	
}); 


/* JavaScript */ 

$( '#co-javascript' ).clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div class="clickover-header"><h3><a href="//en.wikipedia.org/wiki/JavaScript" target="_blank">JS</a></h3></div>', 
	
	content: '<div class="clickover-footer"><h4>JavaScript</h4><p>Adding funtionality, like these Click Overs.</p><a class="btn btn-primary btn-xs" href="//en.wikipedia.org/wiki/JavaScript" target="_blank">&nbsp;Would you like to know more?&nbsp;</a></div><br />', 
	
}); 


/* PHP */ 

$( '#co-php' ).clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div class="clickover-header"><h3><a href="//en.wikipedia.org/wiki/PHP" target="_blank">PHP</a></h3></div>', 
	
	content: '<div class="clickover-footer"><h4>Hypertext Preprocessor</h4><p>Templates, in templates, including templates.</p><a class="btn btn-primary btn-xs" href="//en.wikipedia.org/wiki/PHP" target="_blank">&nbsp;Would you like to know more?&nbsp;</a></div><br />', 
	
}); 


/** / Code **/ 


/** Learning **/ 


/* CakePHP */ 

$( '#co-cakephp' ).clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div class="clickover-header"><h3><a href="//cakephp.org" target="_blank"><strong>CakePHP</strong></a></h3></div>', 
	
	content: '<div class="clickover-footer"><h4>The rapid development PHP Framework.</h4><p>I have been using PHP since I started building web sites. I was introduced to the Model View Controller approach a few years back. Although many professionals look down on PHP, I have a lot of experience with it, and find it easy to build with. Applying the MVC approach makes this a very useful tool.</p><a class="btn btn-primary btn-xs" href="//cakephp.org" target="_blank">&nbsp;Would you like to know more?&nbsp;</a></div><br />', 
	
}); 


/* Ruby on Rails */ 

$( '#co-ruby-on-rails' ).clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div class="clickover-header"><h3><a href="//rubyonrails.org" target="_blank">Ruby on Rails</a></h3></div>', 
	
	content: '<div class="clickover-footer"><h4>Web Development that doesn\'t hurt.</h4><p>While I am very green to the whole Ruby world, I have found it to be a breath of fresh air. It\'s principles, and paterns make it one of the best tools I have ever used. And with frameworks like Jekyll, I can see myself falling in love.</p><a class="btn btn-primary btn-xs" href="//rubyonrails.org" target="_blank">&nbsp;Would you like to know more?&nbsp;</a></div><br />', 
	
}); 


/* AngularJS */ 

$( '#co-angularjs' ).clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div class="clickover-header"><h3><a href="//angularjs.org" target="_blank">AngularJS</a></h3></div>', 
	
	content: '<div class="clickover-footer"><h4>HTML enhanced for web apps!</h4><p>This is my current concentration, and I\'m excited to dive into the MVC world! I plan on implimenting this here just for fun!</p><a class="btn btn-primary btn-xs" href="//angularjs.org" target="_blank">&nbsp;Would you like to know more?&nbsp;</a></div><br />', 
	
}); 


/* Node.js */ 

$( '#co-nodejs' ).clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div class="clickover-header"><h3><a href="//nodejs.org" target="_blank">Node.js</a></h3></div>', 
	
	content: '<div class="clickover-footer"><h4>A platform built on Chrome\'s JavaScript runtime for easily building fast, scalable network applications.</h4><p>When I heard there was this thing called Node.js that ran Server Side JavaScript applications, passing by the need for Apache entirely, I was intrigued to say the least. This is my newest toy, and I can\'t wait to play.</p><a class="btn btn-primary btn-xs" href="//nodejs.org" target="_blank">&nbsp;Would you like to know more?&nbsp;</a></div><br />', 
	
}); 


/** / Learning **/ 


/** Contact **/ 


/* email */ 

$( '#co-email' ).clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div class="clickover-header"><h3><a href="mailto:jgangi@aerialapps.com?subject=I%20am%20contacting%20you%20via%20your%20Online%20Resume!">Email Me!</a></h3></div>', 
	
	content: '<div class="clickover-footer"><p><a href="mailto:jgangi@aerialapps.com?subject=I%20am%20contacting%20you%20via%20your%20Online%20Resume!">jgangi@aerialapps.com</a></p><a class="btn btn-primary btn-xs" href="mailto:jgangi@aerialapps.com?subject=I%20am%20contacting%20you%20via%20your%20Online%20Resume!">&nbsp;Email me!&nbsp;</a></div><br />', 
	
}); 


/* Phone */ 

$( '#co-sms-phone' ).clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div class="clickover-header"><h3><a href="tel:2183102447">Text, or Call me!</a></h3></div>', 
	
	content: '<div class="clickover-footer"><p><a href="tel:2183102447">(218) 310-2447</a></p><a class="btn btn-primary btn-xs" href="tel:2183102447">&nbsp;Text, or Call me!&nbsp;</a></div><br />', 
	
}); 


/* Snail-Mail */ 

$( '#co-snail-mail' ).clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div class="clickover-header"><h3><a href="//maps.google.com/maps?q=po+box+16681+duluth+mn+55816&ll=46.756328,-92.097359&spn=0.152181,0.338173&hnear=Duluth,+Minnesota+55816&t=h&z=12" target="_blank">Snail Mail me!</a></h3></div>', 
	
	content: '<div class="clickover-footer"><p><a href="//maps.google.com/maps?q=po+box+16681+duluth+mn+55816&ll=46.756328,-92.097359&spn=0.152181,0.338173&hnear=Duluth,+Minnesota+55816&t=h&z=12" target="_blank">P.O. Box 16681<br />Duluth, MN, 55816</a></p><a class="btn btn-primary btn-xs" href="//maps.google.com/maps?q=po+box+16681+duluth+mn+55816&ll=46.756328,-92.097359&spn=0.152181,0.338173&hnear=Duluth,+Minnesota+55816&t=h&z=12" target="_blank">&nbsp;Go to the Map!&nbsp;</a></div><br />', 
	
}); 


/* Twitter */ 

$( '#co-twitter' ).clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div class="clickover-header"><h3><a href="//twitter.com/Ganginator" target="_blank">Send me a Tweet!</a></h3></div>', 
	
	content: '<div class="clickover-footer"><p><a href="//twitter.com/Ganginator" target="_blank">@Ganginator</a></p><a class="btn btn-primary btn-xs" href="//twitter.com/Ganginator" target="_blank">&nbsp;Send me a Tweet!&nbsp;</a></div><br />', 
	
}); 


/** / Contact **/ 


/** Other **/ 


/* Information */ 

$( '#co-information' ).clickover({ 

	html: true, 
	placement: 'top', 
	allow_multiple: false, 
	auto_close: 10 * 1000, 
	
	title: '<div class="clickover-header"><h3><h3><a href="?page=information">Information</a></h3></div>', 
	
	content: '<div class="clickover-footer"><h4>Built With...</h4><p>Frameworks: <a href="//html5boilerplate.com/" target="_blank">HTML5 Boilerplate</a>, <a href="//getbootstrap.com/" target="_blank">Bootstrap</a>, and <a href="//fontawesome.io/" target="_blank">Font Awesome</a><br />Libraries: <a href="//jquery.com/" target="_blank">JQuery</a>, <a href="//timeline.knightlab.com/" target="_blank">TimelineJS</a>, <a href="//github.com/lecar-red/bootstrapx-clickover" target="_blank">Bootstrapx Clickover</a>, <a href="//github.com/scottjehl/Respond" target="_blank">Respond.JS</a>, <a href="//modernizr.com/" target="_blank">Modernizr</a>, <a href="//necolas.github.io/normalize.css/" target="_blank">Normalize</a>, and <a href="//en.wikipedia.org/wiki/HTML5_Shiv/" target="_blank">HTML5 Shiv/Shim</a><br />Code: <a href="//en.wikipedia.org/wiki/HTML5" target="_blank">HTML5</a>, <a href="//en.wikipedia.org/wiki/Sass_%28stylesheet_language%29" target="_blank">CSS3, Sass - SCSS</a>, <a href="//en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>, and <a href="//en.wikipedia.org/wiki/PHP" target="_blank">PHP</a></p><br /></div><br />', 
	
}); 


/** / Other **/ 


