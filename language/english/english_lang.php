<?php
//Startup information
$lang['slogan'] = "Change people's lives while learning";
$lang['value_proposition'] = "Find high-impact tech projects that will help real people";

//Menus
$lang['view_projects'] = "View projects";
$lang['how_it_works'] = "How it works";
$lang['blog'] = "Blog";
$lang['about_us'] = "About us";

//Filter section (the one in which we can select scopes or technologies)
$lang['search_by_scope'] = "Search projects by scope";
$lang['search_by_tech'] = "Search by technology";
$lang['all'] = "Search by technology";
$lang['other'] = "Other";
$lang['here_are'] = "Here are some real projects that will help real people! Select one to know more about it";

//About us page
$lang['startup_about_us'] = "Vostlink is a non-profit startup that connects you to high-impact social projects that will change people's lives.";
$lang['the_team'] = "The team";
$lang['our_values'] = "
	<h2>Our values</h2>
	<p>Our two main values are:</p>
	<h5 class='subheader'>1.- Impact</h5>
	<p>We are always looking for high-impact social projects. Stuff that will really help people.</p>
	<h5 class='subheader'>2.- Service</h5>
	<p>We will walk and extra mile in order to know how to improve our surroundings.</p>
	<h5 class='subheader'>3.- Friendliness</h5>
	<p>We try to be \"reachable people\", feel free to write us, we read and answer all questions.</p>";
$lang['our_internal_values'] = "
	<h2>Our internal values</h2>
	<p>Inside the team, all members adhere to the following core values:</p>
	<h5 class='subheader'>1.- Ethics</h5>
	<p>We strongly believe that ethics are the foundation of good startups.</p>
	<h5 class='subheader'>2.- Integrity</h5>
	<p>We are not only looking to grow the startup, we also want all members to grow personally. By this reason all Vostlink members are requiered to learn new roles. Everyone must code, design and propose new ideas to implement.</p>
	<h5 class='subheader'>3.- Flat-leadership</h5>
	<p>Vostlink is a flat-leadership startup, every member can give advice about where the startup should go. Everyone's opinion counts, if there are two opposite points of views we always reach an agreement as a team.</p>
	<h5 class='subheader'>4.- Fairness</h5>
	<p>We like to share the cake, and here it is divided equally. All members own an equal part of the startup.</p>";
$lang['member_alex'] = "<p>Alex, <span class='subheader'>entrepreneur, engineer, geek and sushi-lover. Co-founder of Vostlink, he is always looking how to improve things.</span></p>";
$lang['member_charlie'] = "<p>Juan Carlos, <span class='subheader'>engineer, student, passionate about electronics. Co-founder and project leader at the Microsoft's Imagine Cup.</span></p>";
$lang['member_gera'] = "<p>Gerardo, <span class='subheader'>entrepreneur, businessman, team player and lean startup evangelist. Co-founder of Vostlink, always working on innovative ways to solve problems.</span></p>";

//Generic texts
$lang['progress'] = "Current progress";
$lang['progress_started'] = "This project just started. We have only the idea concept, sketches and probably some code.";
$lang['progress_half'] = "This project is half on its way!";
$lang['progress_almost'] = "This project is almost finished, still some work is needed.";
$lang['progress_finished'] = "This project is practically finished! You can download it and use it!";
$lang['footer'] = "<p>Vostlink<span class='gray-white'> | </span>2014<span class='gray-white'> | </span>All rights reserved.</p>";

//How it works page
$lang['slide_1'] = "
	<h4>We can teach you new technologies</h4>
	<p>If you want to learn how to code, create Android/iOS/Windows Phone apps, design websites, etc, then you are on the right place!</p>";
$lang['slide_2'] = "
	<h4>The impact</h4>
	<p>Instead of joining a tutorial you will join a high-impact social project. Forget about creating a fake app, a fake restaurant webpage... See how your effort will help people.</p>";
$lang['slide_3'] = "
	<h4>Feeling not ready?</h4>
	<p>If you dont feel skilled enough don't worry, you can learn at your own pace, we can take you from knowing nothing to start collaborating on the project of your selection.</p>";
$lang['slide_4'] = "
	<h4>How you will learn</h4>
	<p>You can learn at your own pace along with the mentoring of IT professionals that will guide you to through the journey. For every completed challenge you will win awards and badges!</p>";
$lang['slide_5'] = "
	<h4>Did we forget to say that...</h4>
	<ul>
		<li>You are free to choose on which project to contribute</li>
		<li>You can win badges while you learn</li>
		<li>You can upload your own project</li>
		<li>Your name will be included in the app</li>
		<li>For each project done you can win karma coins!</li>
	</ul>";

//New idea texts
$lang['new_idea_card'] = "Upload your idea!";
$lang['new_idea_title'] = "Would you like to see your idea here? You can upload it!";

$lang['modals'] = array
(
	//Common
	'name' => 'Your name:',
	'email' => 'Your E-mail:',
	'idea_name' => 'The name of the idea:',
	'what_it_does' => 'What it does:',
	'comments' => 'Any comments? (optional):',
	'i_want_to_collaborate' => 'I want to collaborate because...',
	'submit' => 'Submit',
	
	//Advertise
	'give_tweet' => 'You can help this project by giving us a tweet!',
	
	//Join project
	'we_can' => 'We can take you from knowing nothing to start collaborating on this project!<br/>Join the BETA by filling this form:',
	'select_level' => 'Select the difficulty level:',
	'easy' => 'Easy',
	'easy_text' => 'You know nothing about how to code and you want to learn starting with easy challenges.',
	'challenge' => 'Challengeing',
	'challenge_text' => 'You have an idea about coding and/or you want to have difficult challenges.',
	'hard' => 'Hard coder',
	'hard_text' => 'You know how to code and you want to start solving bugs and making improvements.',
	'mentor' => 'Mentor',
	'mentor_text' => 'You know the programming languages required for this project and and want to be a project manager by becoming a Mentor.',
	
	//Error messages
	'required_string_error' => 'This field is required and must be a string.',
	'required_email_error' => 'E-mail address invalid',
);

//Scopes
$lang['all'] = 'All';

$lang['health'] = array
(
	'title' => 'Health',
	'description' => 'Any app that aims to improve people\'s health or helps them prevent future diseases.',
	'icon' => 'fi-heart',
	'image_id' => 1,
);

$lang['education'] = array
(
	'title' => 'Education',
	'description' => 'Applications that will help students or educational organizations.',
	'icon' => 'fi-bookmark',
	'image_id' => 0,
);

$lang['productivity'] = array
(
	'title' => 'Productivity',
	'description' => 'Applications for people with special needs like cerebral palsy, autism, blindness, muteness, etc.',
	'icon' => 'fi-wrench',
	'image_id' => 2,
);

$lang['gaming'] = array
(
	'title' => 'Gaming',
	'description' => 'Games and recreational software.',
	'icon' => 'fi-die-three',
	'image_id' => 0,
);

$lang['special_needs'] = array
(
	'title' => 'Special needs',
	'description' => 'Applications for people with special needs like cerebral palsy, autism, blindness, muteness, etc.',
	'icon' => 'fi-wheelchair',
	'image_id' => 0,
);

$lang['entrepreneurship'] = array
(
	'title' => 'Entrepreneurship',
	'description' => 'Entrepreneur webpages, landing pages or simple startups.',
	'icon' => 'fi-lightbulb',
	'image_id' => 0,
);

$lang['other'] = array
(
	'title' => 'Other',
	'description' => 'Stuff that does not fits on any other category.',
	'icon' => 'fi-thumbnails', //Dirty fix, it should be the question mark
	'image_id' => 0,
);

//Courses
$lang['android'] = array
(
	'title' => 'Android apps',
	'description' => 'Learn how to create your own Android app',
	'image_id' => 5,
	'level' => 'Beginner',
);

$lang['ios'] = array
(
	'title' => 'iOS apps',
	'description' => 'Create your own iOS app',
	'image_id' => 7,
	'level' => 'Intermediate',
);

$lang['html'] = array
(
	'title' => 'HTML',
	'description' => 'Create a webpage',
	'image_id' => 22,
	'level' => 'Beginner',
);

$lang['css'] = array
(
	'title' => 'CSS',
	'description' => 'Give your website a design',
	'image_id' => 23,
	'level' => 'Intermediate',
);

$lang['html'] = array
(
	'title' => 'HTML',
	'description' => 'Learn how to design a webpage',
	'image_id' => 8,
	'level' => 'Beginner',
);

$lang['php'] = array
(
	'title' => 'PHP',
	'description' => 'Learn PHP and give HTML a boost',
	'image_id' => 0,
	'level' => 'Beginner',
);

$lang['titanium'] = array
(
	'title' => 'Titanium Appaccelerator',
	'description' => 'A framework that allows you to create an app in minutes and deploy it to Android/iOS/Blackberry at once',
	'image_id' => 11,
	'level' => 'Beginner',
);

$lang['net'] = array
(
	'title' => '.NET',
	'description' => 'Learn to create Windows apps',
	'image_id' => 1,
	'level' => 'Beginner',
);

$lang['csharp'] = array
(
	'title' => 'C# .NET',
	'description' => 'Learn to create Windows apps',
	'image_id' => 21,
	'level' => 'Beginner',
);

$lang['joomla'] = array
(
	'title' => 'Joomla',
	'description' => 'A framework to create websites in minutes',
	'image_id' => 20,
	'level' => 'Beginner',
);

$lang['java'] = array
(
	'title' => 'Java',
	'description' => 'Create your own Java applications that will run almost everywhere',
	'image_id' => 6,
	'level' => 'Beginner',
);

$lang['trello'] = array
(
	'title' => 'Trello',
	'description' => 'Project management tips and Trello',
	'image_id' => 4,
	'level' => 'Beginner',
);

$lang['ipcsdk'] = array
(
	'title' => 'Intel Perceptual SDK',
	'description' => 'Learn how to perform face and gesture recognition',
	'image_id' => 2,
	'level' => 'Advanced',
);

$lang['aforge'] = array
(
	'title' => 'A Forge .NET',
	'description' => 'Learn image processing with AForge framework',
	'image_id' => 3,
	'level' => 'Advanced',
);

$lang['mysql'] = array
(
	'title' => 'My SQL',
	'description' => 'Create databases on mySQL',
	'image_id' => 9,
	'level' => 'Advanced',
);

$lang['javascript'] = array
(
	'title' => 'Javascript',
	'description' => 'Discover how Javascript is useful for your site',
	'image_id' => 12,
	'level' => 'Intermediate',
);

$lang['perl'] = array
(
	'title' => 'perl',
	'image_id' => 13,
	'description' => 'A very useful high-level language',
	'level' => 'Beginner',
);

$lang['python'] = array
(
	'title' => 'Python',
	'description' => 'Probably the best programming language to learn for beginners',
	'image_id' => 14,
	'level' => 'Beginner',
);

$lang['ruby'] = array
(
	'title' => 'Ruby',
	'description' => 'The best programming language to create sites in minutes',
	'image_id' => 15,
	'level' => 'Intermediate',
);

$lang['git'] = array
(
	'title' => 'Git',
	'description' => 'Keep your code organized and open to collaboration with this version control',
	'image_id' => 16,
	'level' => 'Intermediate',
);

$lang['subversion'] = array
(
	'title' => 'Subversion',
	'description' => 'The easiest version control for your projects',
	'image_id' => 17,
	'level' => 'Beginner',
);

$lang['wordpress'] = array
(
	'title' => 'Wordpress',
	'description' => 'Start your own webpage in minutes',
	'image_id' => 19,
	'level' => 'Beginner',
);

$lang['joomla'] = array
(
	'title' => 'Joomla',
	'description' => 'Create an amazing, very scalable website in minutes',
	'image_id' => 20,
	'level' => 'Beginner',
);

//Projects
$lang['eyeclick'] = array
(
	'title' => 'Eyeclick',
	'value_proposition' => 'Make click only by blinking',
	'description' => 'This software is currently helping people with cerebral palsy to make click only by blinking.',
	'long_description' => 'A person with cerebral palsy is generally unable to make click at will, the most common solution is to use a device called "buddy-button", however these big colored buttons are expensive (as much as 100 USD each) and may still not be situable for people with severe cerebral palsy. With this software people can already make click by blinking.',
	'progress' => 95,
	'stars' => 3,
	'scope' => 'health|special_needs',
	'techs' => 'net|ipcsdk|csharp',
	'backers' => '',	
	'platforms' => 'fi-social-windows',
	'thumbnail' => 'eyeclick.jpg',
	'screenshots' => array
		(
			'eyeclick2.jpg|People with palsy are often unable to click.',
			'eyeclick3.jpg|With EyeClick they can just blink to perform a click.',
			'eyeclick4.jpg|When the camera is not connected.',
		),		
	'repository' => 'https://github.com/Vostlink/EyeClick-en',
	'trello' => '',
	//'trello' => 'https://trello.com/b/1kzkiJhk/eyeclick',
	'download_path' => 'EyeClick-installer',
	'author-name' => 'Vostlink team',
	'author-picture' => 'twitter-logo-colorized.png',
	'author-location' => 'The world',
);

$lang['facemouse'] = array
(
	'title' => 'FaceMouse',
	'value_proposition' => 'Control the mouse with your head',
	'description' => 'Initially aimed to help people that lost one or both arms, this is an app that allows you to control the mouse with your head.',
	'long_description' => 'With this software and a webcam people who are unable to move the mouse will be able to take control of it with their heads. This app will detect the location of the head and detect any movement of it, if you move your head to the right the mouse will quickly start moving to the right, look up and down to move the cursor accordingly.',
	'progress' => 75,
	'stars' => 1,
	'scope' => 'health|special_needs',
	'techs' => 'net|ipcsdk|csharp',
	'backers' => '',	
	'platforms' => 'fi-social-windows',	
	'thumbnail' => 'facemouse.jpg',
	'screenshots' => array
		(
			'facemouse2.jpg|Try playing Chess Titans (included on Windows 7) without hands!',
			'facemouse3.jpg|To move the cursor just move your head, perform click by blinking.',
			'facemouse4.jpg|When the camera is not connected (spanish translation)',
		),		
	'repository' => 'https://github.com/Vostlink/FaceMouse-en',
	'trello' => '',
	//'trello' => 'https://trello.com/b/VUtdn9Td/facemouse',
	'download_path' => 'FaceMouse-installer',
	'author-name' => 'Unknown',
	'author-picture' => 'twitter-logo-colorized.png',
	'author-location' => 'The world',	
);

$lang['spherix'] = array
(
	'title' => 'Spherix',
	'value_proposition' => 'A circular communicator',
	'description' => 'A communicator to help people with psychomotor disabilities.',
	'long_description' => 'This is a wish communicator for people with psychomotor disabilities, they way they can select the wishes is extremely straightforward as all the possibilities are shown in a big pizza-shaped layout with big buttons.',
	'progress' => 10,
	'stars' => 3,
	'scope' => 'special_needs|health',
	'techs' => 'titanium|net|csharp|android|ios',
	'backers' => '',	
	'platforms' => 'fi-social-windows|fi-social-android|fi-social-apple',
	'thumbnail' => 'spherix.jpg',
	'screenshots' => array
		(
			'spherix.jpg|Concept of the app, a circular wish selector.'
		),		
	'repository' => '',
	'trello' => 'https://trello.com/b/P70Z71Jq/spherix',
	'download_path' => '',
	'author-name' => 'Vostlink team',
	'author-picture' => 'twitter-logo-colorized.png',
	'author-location' => 'The world',	
);

$lang['smartwindow'] = array
(
	'title' => 'Smartwindow',
	'value_proposition' => 'Easily select which program to open',
	'description' => 'For disabled people, this program allows them to open programs easily.',
	'long_description' => 'Click a button is often a real challenge for people with psychomotor disabilities. With this program they no longer need to make click on small icons, they will be able to open a infinite grid that shows the most used programs in a big 3x3 grid.',
	'progress' => 50,
	'stars' => 1,
	'scope' => 'special_needs|health|productivity',
	'techs' => 'net|csharp',
	'backers' => '',	
	'platforms' => 'fi-social-windows',	
	'thumbnail' => 'smartwindow.jpg',
	'screenshots' => array
		(
			'smartwindow.jpg|Concept idea, the grid showing the most used programs.'
		),		
	'repository' => '',
	//'trello' => 'https://trello.com/b/ozDvWUpp/smartwindow',
	'trello' => 'https://trello.com/b/mZIl06oj/sight-sound', //TODO: Solve this ugly fix
	'download_path' => '',
	'author-name' => 'Unknown',
	'author-picture' => 'twitter-logo-colorized.png',
	'author-location' => 'The world',	
);

$lang['eyefollower'] = array
(
	'title' => 'Eye Follower SDK',
	'value_proposition' => 'Make programs that locate the iris',	
	'description' => 'A program/framework that allows eye-tracking with a webcam.',
	'long_description' => 'This is a tool for developers, with this SDK programmers will be able to create programs on .NET that detect the location of the iris. This has several applications including health, gaming, market research, etc.',
	'progress' => 50,
	'stars' => 1,
	'scope' => 'health|productivity',
	'techs' => 'net|ipcsdk|csharp',
	'backers' => '',
	'platforms' => '',
	'thumbnail' => 'eyefollower.jpg',
	'screenshots' => array
		(
			'eyefollower.jpg|Eye-tracking has several medical applications.'
		),		
	'repository' => '',
	'trello' => '',
	//'trello' => 'https://trello.com/b/PJHjEnFd/eyefollower',
	'download_path' => '',
	'author-name' => 'Vostlink team',
	'author-picture' => 'twitter-logo-colorized.png',
	'author-location' => 'The world',	
);

$lang['nunutzi'] = array
(
	'title' => 'Webpage for a local charity',
	'value_proposition' => 'A webpage for this local charity',	
	'description' => 'A webpage for the local charity named Nunutzy-Kie that helps people with multiple disabilities in México.',
	'long_description' => 'Nunutzi-kie is a Mexican local charity in the city of Guadalajara, Mexico. Currently they have a Blogspot page (http://blognunutzi.wordpress.com/2010/11/05/descripcion-de-c-a-m-nunutzi-kie-tv/) and they now are looking for a way to reach more people by having their own .com website. Join this project to help them have one!',
	'progress' => 10,
	'stars' => 1,
	'scope' => 'health|education',
	'techs' => 'wordpress',
	'backers' => '',	
	'platforms' => '',
	'thumbnail' => 'nunutzi.jpg',
	'screenshots' => array
		(
			'nunutzi.jpg|Their logo.',
		),		
	'repository' => '',
	'trello' => '',
	//'trello' => 'https://trello.com/b/iW3CZ91q/nunutzi-webpage',
	'download_path' => '',
	'author-name' => 'Jhonny',
	'author-picture' => 'twitter-logo-colorized.png',
	'author-location' => 'The world',	
);

$lang['sightsound'] = array
(
	'title' => 'Allow people to hear images',
	'value_proposition' => 'Start listening the images',
	'description' => 'By converting the images into sound a blind person can identify objects.',
	'long_description' => "Every image we see, every figure we look at has an equivalent in sound.
		Figures with sharp corners will sound more aggresively than softer things like clouds.
		Take a look at this video that shows how pictures sound:
		<br/>
		<div class='text-center'>
			<iframe width='420' height='315' src='//www.youtube.com/embed/8BGr1u-Oz8M' frameborder='0' allowfullscreen></iframe>
		</div>
		<br/>
		This program will do a similar process with in a different approach, it will interpret images as a whole and produce a single
		continuous sound so that the blind person will be able to immediatly hear a sound for every video frame that the webcam captures.
		<br/>		
		<br/>		
		Here is a real sample of how it would work, right now it is done the hard way, by doing each step manually.
		The program Sight-sound will automate this process in single device. Here are 2 sample images,
		<br/>
		<br/>
		<div class='row'>
			<div class='large-6 columns'>
				<a href='/img/night.jpg' data-lightbox='sketches' title='Night city image.'>
					<img class='rounded-image' src='/img/night.jpg'/>
				</a>
			</div>
			<div class='large-6 columns'>
				<div class=''>
					<a href='/img/clouds.jpg' data-lightbox='sketches' title='Cloud landscape.'>
						<img class='rounded-image' src='/img/clouds.jpg'/>
					</a>
				</div>
			</div>
		</div>
		<br/>
		When we convert bot images to its Fourier equivalent we get the following images,
		<br/>
		<br/>
		<div class='row'>
			<div class='large-6 columns'>
				<a href='/img/night-fft.jpg' data-lightbox='sketches' title='Night city image in fourier.'>
					<img class='rounded-image' src='/img/night-fft.jpg'/>
				</a>
			</div>
			<div class='large-6 columns'>
				<div class=''>
					<a href='/img/clouds-fft.jpg' data-lightbox='sketches' title='Cloud landscape in fourier.'>
						<img class='rounded-image' src='/img/clouds-fft.jpg'/>
					</a>
				</div>
			</div>
		</div>
		<br/>
		The images in Fourier are actually telling the shape of the image in a very peculiar way. Both images contain blank dots at the center of it, these are the \"soft objects\" objects, if the image contains \"fine objects\" then blank dots will start appearing far from the center of he image.
		That's why the night city landscape image has blank dots that are far from the center, those diagonal shapes we see on the fourier are in fact the building covered with blank lines of reflectors.
		",
	'progress' => 10,
	'stars' => 4,
	'scope' => 'health|special_needs',
	'techs' => 'net|csharp|aforge',
	'backers' => '<blockquote class="twitter-tweet" lang="en"><p><a href="https://twitter.com/vostlink">@vostlink</a> I&#39;m backing this project: <a href="http://t.co/azvEDM1aTW">http://t.co/azvEDM1aTW</a> I would like to see it come true!</p>&mdash; Alejandro del Río (@adelriosantiago) <a href="https://twitter.com/adelriosantiago/statuses/446552907131809792">March 20, 2014</a></blockquote>',
	'platforms' => 'fi-social-windows',
	'thumbnail' => 'sightsound.jpg',
	'screenshots' => array
	(
		'sightsound.jpg|The concept in a nutshell.',
		'sightsound2.jpg|This is the process of the device and how it will convert the images into sound.',
		'sightsound3.jpg|A preliminar sketch of the device.',
	),
	'repository' => '',
	'trello' => 'https://trello.com/b/mZIl06oj/sight-sound',
	'download_path' => '',
	'author-name' => 'Gabo',
	'author-picture' => 'twitter-logo-colorized.png',
	'author-location' => 'The world',	
);

$lang['treetalk'] = array
(
	'title' => 'Easily select special needs',
	'value_proposition' => 'A easy to use palsy communicator',	
	'description' => 'Selecting small icons is really difficult for people with a severe psychomotor disability. This wish selector splits small icons into 2 wide screen icons.',
	'long_description' => 'People living with palsy are often unable to speak their wishes and needs. This is a huge trouble for them as they could be feeling bad inside themselves and not be able to communicate this. With this program they can communicate their wishes to others by selecting only two sides of a tablet screen.',
	'progress' => 10,
	'stars' => 2,
	'scope' => 'special_needs|health',
	'techs' => 'android|ios',
	'backers' => '',	
	'platforms' => 'fi-social-android',
	'thumbnail' => 'treetalk.jpg',
	'screenshots' => array
		(
			'treetalk.jpg|The Tree Talk concept.',
			'treetalk2.jpg|The Tree Talk concept.',
		),		
	'repository' => '',
	'trello' => 'https://trello.com/b/Z1qihlIg/tree-talk',
	'download_path' => '',
	'author-name' => 'Vostlink team',
	'author-picture' => 'twitter-logo-colorized.png',
	'author-location' => 'The world',	
);

$lang['vihas'] = array
(
	'title' => 'Help with the website design',
	'value_proposition' => 'Vihas de Vida is a organization that needs help with their website',
	'description' => 'Vihas de Vida is a mexican organization located at the heart of Guadalajara city. They need help with their website.',
	'long_description' => 'Vihas de Vida is a mexican organization located at the heart of Guadalajara city.
		Their mission is to help people know how to protect themselves from sexually transmitted diseases, among all the services they offer we can find: 
		<ul>
			<li>Sensibilization workshops to teach people about STD\'s.</li>
			<li>HIV preemptive tests</li>
			<li>Psicological advice to people who already have a STD.</li>
		</ul>
		They currently have a Wordpress website (<a href="http://vihasdevida.org">http://vihasdevida.org</a>) which is almost finalized, they need help giving the website the last touches.
		The goals of this project are:
		<br/><br/>
		<ul>
			<li>Finish the View team, Work areas and Events sections.</li>
			<li>Translate the website into english.</li>
		</ul>
		You will learn Wordpress along with IT experts that will guide your through the journey.
		',
	'progress' => 70,
	'stars' => 3,
	'scope' => 'health',
	'techs' => 'wordpress',
	'backers' => '',
	'platforms' => '',
	'thumbnail' => 'vihas.jpg',
	'screenshots' => array
		(
			'vihas.jpg|Vihas de Vida logo.'
		),
	'repository' => '',
	'trello' => '',
	'download_path' => '',
	'author-name' => 'Vostlink team',
	'author-picture' => 'twitter-logo-colorized.png',
	'author-location' => 'The world',	
);

$lang['kosas'] = array
(
	'title' => 'Kosas',
	'value_proposition' => 'Give away what you no longer need',
	'description' => 'Give away what you no longer need to those who need it most. Win koins while doing so.',
	'long_description' => 'There is a saying "One\'s trash is another\'s treasure" which turns out to be true in many cases. With Kosas people will be able to give away stuff that they no longer need to those who need it most.',
	'progress' => 5,
	'stars' => 3,
	'scope' => 'entrepreneurship|other',
	'techs' => 'html|css|php|git|mysql',
	'backers' => '',
	'platforms' => '',
	'thumbnail' => 'kosas.jpg',
	'screenshots' => array
		(
			'kosas.jpg|The webpage logo proposal.'
		),
	'repository' => '',
	//'trello' => 'https://trello.com/b/m0YLdThb/vostlink-translations',
	'trello' => '',
	'download_path' => '',
	'author-name' => 'Vostlink team',
	'author-picture' => 'twitter-logo-colorized.png',
	'author-location' => 'The world',	
);

$lang['vostlink_trans'] = array
(
	'title' => 'Vostlink translations',
	'value_proposition' => 'The website in multiple languages',
	'description' => 'Translating the website into multiple languages is the way we plan to have impact in many parts of the world.',
	'long_description' => 'It might seem strange that Vostlink itself is a project on Vostlink, however we are a crowdsourcing platform for projects that are under development and we are currently on BETA. Join this project and help Vostlink to be translated into several languages while you learn HTML, PHP and the amazing framework Codeigniter!',
	'progress' => 50,
	'stars' => 2,
	'scope' => 'productivity',
	'techs' => 'html|php|git',
	'backers' => '',
	'platforms' => '',
	'thumbnail' => 'vostlink_trans.jpg',
	'screenshots' => array
		(
			'vostlink_trans.jpg|The project official icon and a nice translation icon.'
		),
	'repository' => '',
	'trello' => 'https://trello.com/b/m0YLdThb/vostlink-translations',
	'download_path' => '',
	'author-name' => 'Vostlink team',
	'author-picture' => 'twitter-logo-colorized.png',
	'author-location' => 'The world',	
);

//Project page
$lang['sketches'] = "Sketches:";
$lang['description'] = "Description:";
$lang['how_collaborate'] = "How you can collaborate:";
$lang['advertise'] = "Advertise";
$lang['advertise_text'] = "Advertise this project so that more people know about it. Even a single Tweet is important!";
$lang['learn'] = "Learn";
$lang['learn_text'] = "Join the challenges and start learning the techs you need to make this project reality.";

$lang['scope'] = "Scope";
$lang['technologies'] = "Technologies";
$lang['progress'] = "Current progress";
$lang['backers'] = "Backers";
$lang['show_your_interest'] = "Show your interest in this project with a Tweet:";
$lang['see_trello'] = "See what the students are doing";