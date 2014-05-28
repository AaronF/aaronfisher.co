<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Aaron Fisher - Web Designer/Developer</title>
	<meta name="viewport" content="width=device-width, minimum-scale=1.0">
	<link rel="shortcut icon" href="siteimages/favicon.png">
	<meta name="description" content="Aaron Fisher - I am a web designer and developer from the UK. Passionate about motorsports (Formula 1) and podcast at MunchTech.tv!"/>
	<meta name="keywords" content="web design development podcast munchtech farelert syndifeed thetechbox">

    <link rel="stylesheet" href="include/css/style.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body class="about_page page">
<div class="header_page">
    <div class="grid w640">
        <div class="row">
            <h1>Aaron Fisher</h1>
        </div>
    </div>
</div>
<div class="grid w640 text_section">
	<div class="row clear">
		<div class="c12">
			<h2 class="title">About Me</h2>
			<p>I am a front-end developer and web developer from the UK. I have worked on a number of projects, some for myself and some for others all of which are detailed below. I also co-host a weekly tech news podcast called 'The Two Techies' of which we have done over 200 episodes in four years.</p>
			<p>I am also a motorsports nut (if the header of this page had not already given that away) so feel free to Tweet me or email me about anything motorsports related!</p>
		</div>
	</div>
</div>

<div class="grid w640 instagram">
	<div class="row clear">
		<div class="c12">
			<div id="instagram_pictures">

			</div>
			<p><i class="fa fa-instagram"></i> Instagram</p>
		</div>
	</div>
</div>

<div class="grid w640 text_section projects">
	<div class="row clear">
		<div class="c12">
			<h2 class="title">Projects & Experience</h2>
			<p>I have a fair amount of knowledge and experience with both front-end development and back-end development for the web. All of the applications and projects below are written in PHP, HTML, CSS & Javascript. I have also used a number of other tools and things such as Inuit CSS and SASS to help me create the best code.</p>
		</div>

		<div class="c12">
			<a href="http://farelert.com" class="project_title"><h3>Farelert</h3></a>
			<p>
				Farelert makes it super easy to track the price of a flight over time. All you have to do is enter a few details about your trip and farelert will show you the results, from there you can track multiple flights and get alerted by email or text as soon as it changes.
			</p>
		</div>

		<div class="c12">
			<a href="http://munchtech.tv" class="project_title"><h3>MunchTech</h3></a>
			<p>
				MunchTech.tv is the home of the podcast that I co-host called The Two Techies It is a weekly technology news show of which we have done over 200 episodes to date. I also designed the WordPress theme that the site uses.
			</p>
		</div>

		<div class="c12">
			<a href="http://getwaiter.com" class="project_title"><h3><i>get</i>Waiter!</h3></a>
			<p>
				I helped build the iOS & Android app for getWaiter! which is a service that aims to improve your restaurant experience. No more waving your hands in the air, simply scan the code and use the app to call the waiter, request more drinks or get the bill.
			</p>
		</div>

		<div class="c12">
			<a href="http://syndifeed.com" class="project_title"><h3>SyndiFeed</h3></a>
			<p>
				SyndiFeed was one of my first 'proper' web based projects. SyndiFeed is a basic RSS reader with a built in read later service which has over 2000 users and over 100,000 feeds.
			</p>
		</div>
	</div>
	<div class="hr"></div>
</div>

<div class="grid w640 text_section">
	<div class="row clear">
		<div class="c12">
			<h2 class="title">Find Me</h2>
			<p>You can find me hiding in a number of areas on the web. If you want to see some of the projects I have open sourced then visit my <a href="http://github.com/AaronF">GitHub profile</a> (<i>it is worth noting that a great number of the projects on there are set to private for business purposes</i>).</p>

			<p>Of course you can also find me on <a href="http://twitter.com/thetechbox">Twitter</a> and on <a href="http://plus.google.com/+AaronFisher">Google+</a>. You can also drop me an <a href="mailto: a@aaronfisher.co">email</a> (a [at] aaronfisher [dot] co).</p>
		</div>
	</div>
	<center>
		<a href="https://twitter.com/TheTechBox" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @TheTechBox</a>
	</center>
</div>

<div class="footer">
	<div class="grid w640">
		<div class="row">
			<div class="c12">
				<p>&#169; Copyright Aaron Fisher 2014.</p>
			</div>
		</div>
	</div>
</div>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="include/js/dug.js"></script>
<script>
	 $(document).ready(function(){
      dug({
          endpoint: 'https://api.instagram.com/v1/users/1158594/media/recent/?access_token=1158594.5276196.0e70b8dbde224ec7ac799775c2929397&count=4',
          template: '<ul class="photos">\
          {{#data}}\
            <li>\
              <a href="{{link}}">\
                <img src="{{images.low_resolution.url}}">\
              </a>\
            </li>\
          {{/data}}\
          ',
          target: 'instagram_pictures'
      });
    });

	//Google Analytics
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-29301252-1', 'thetechbox.com');
	ga('send', 'pageview');

	//transitioning to new site
	ga('create', 'UA-48084189-1', 'aaronfisher.co');
	ga('send', 'pageview');

	!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');

</script>

</body>
</html>
