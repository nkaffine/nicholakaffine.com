<?php
    /**
     * Created by PhpStorm.
     * User: Nick
     * Date: 10/19/17
     * Time: 8:43 PM
     */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nicholas Kaffine</title>
    <!--Stuff required for bootstrap and jquery-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style/main.css">
    <script src="scripts/style.js"></script>
</head>
<body>
<nav id='navbar' class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Nicholas Kaffine</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home</a></li>
                <li class="toPageLink"><a href="/#work">Work Experience</a></li>
                <li class="toPageLink"><a href="/#projects">Projects</a></li>
                <li class="toPageLink"><a href="/#about">About Me</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a style="padding:0;" target="_blank" href="https://github.com/nkaffine"><img id="githublogo"
                                                                                                  src="images/github-icon.png"></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<img id="mainimg" src="/images/slider/IMG_0509.JPG"
     class="img-rounded col-lg-offset-3 visible-lg col-lg-3 col-lg-push-3 no-pad">
<div class="panel col-lg-3 col-lg-pull-3 box visible-lg" id="description" style="overflow: scroll;">
    <h1 class="title">Nicholas Kaffine</h1>
    <p class="aboutme">I have been doing web development work for the last year creating
        web applications that use PHP
        to interact with a MySQL database. In addition to web development I have been watching a Stanford course on
        IOS
        development which is another area that I want to explore. I have been working on two startups. </p>
    <p class="aboutme"><a href="https://www.turtleshirts.org">Turtle Shirts</a> is a clothing brand that I started
        with two friends from my high school internship. I constructed
        the website which is designed to handle low volumes of transactions using a MySQL
        database with PHP and the Stripe.js API to process payments.</p>
    <p class="aboutme">I am also working on a startup Owaygo. I have been constructing a database application
        prototyped with a website
        that manages user authentication through Facebook, purchases with Stripe.js, and handles user uploaded media
        information about restaurants in areas around them.</p>
    <p class="aboutme">One of hobbies is creating and playing music. When I get the chance I play concerts with my
        high school band
        <a href="http://theaccidents.band">The Accidents</a> or I write electronic music. One of my more recent
        songs was used as the background music for
        a <a href="https://youtu.be/wLkLwKLaTZo" target="_blank">commercial</a> that I made with my co-founders at
        Turtle Shirts.</p>
</div>
<img id='mainimgmobile' src="/images/slider/IMG_0509.JPG"
     class="img-rounded hidden-lg col-xs-12 col-xs-offset-0 no-pad">
<div class="panel hidden-lg box col-xs-12 ">
    <h1 class="title">Nicholas Kaffine</h1>
    <p class="aboutme">I have been doing web development work for the last year creating web applications that use PHP
        to interact with a MySQL database. In addition to web development I have been watching a Stanford course on IOS
        development which is another area that I want to explore. I have been working on two startups. </p>
    <p class="aboutme"><a href="https://www.turtleshirts.org">Turtle Shirts</a> is a clothing brand that I started with
        two friends from my high school internship. I constructed
        the website which is designed to handle low volumes of transactions using a MySQL
        database with PHP and the Stripe.js API to process payments.</p>
    <p class="aboutme">I am also working on a startup Owaygo. I have been constructing a database application prototyped
        with a website
        that manages user authentication through Facebook, purchases with Stripe.js, and handles user uploaded media
        information about restaurants in areas around them.</p>
    <p class="aboutme">One of hobbies is creating and playing music. When I get the chance I play concerts with my high
        school band
        <a href="http://theaccidents.band">The Accidents</a> or I write electronic music. One of my more recent songs
        was used as the background music for
        a <a href="https://youtu.be/wLkLwKLaTZo" target="_blank">commercial</a> that I made with my co-founders at
        Turtle Shirts.</p>
</div>
<div class="col-xs-12 gap" id="work"></div>
<div class="col-lg-6 col-lg-offset-3 col-xs-12 col-xs-offset-0 panel">
    <h1>Work Experience</h1>
    <div class="col-lg-12 no-pad">
        <h3 class="col-lg-6 experience no-pad">
            <a class="headerlink" href="https://www.nowyouknowchannel.com" target="_blank">Now You Know</a>
            <span class="location">Westford, MA</span>
        </h3>
        <p class="experienceDate text-right col-lg-6 no-pad jobinfo">December
            2017-present</p>
        <p class="col-lg-12 no-pad jobtitle">Web Developer</p>
        <ul class="list-group col-lg-12">
            <li class="list-group-item">Compiled MySQL database of all Tesla Superchargers and Destination Chargers</li>
            <li class="list-group-item">Assembled website using Google Maps API displaying Tesla Chargers</li>
            <li class="list-group-item">Maintains database and website</li>
        </uL>
    </div>
    <div class="col-lg-12 no-pad">
        <h3 class="col-lg-6 experience no-pad"><a class="headerlink" href="https://www.turtleshirts.org"
                                                  target="_blank">Turtle Shirts</a> <span
                    class="jobinfo">Westford, MA</span></h3>
        <p class="experienceDate text-right col-lg-6 no-pad jobinfo">August
            2017-present</p>
        <p class="col-lg-12 no-pad jobtitle">Co-Founder/Web
            Developer</p>
        <ul class="list-group col-lg-12">
            <li class="list-group-item">Launched website using HTML, CSS, Bootstrap, Javascript and PHP to interact with
                MySQL database for inventory and sales
            </li>
            <li class="list-group-item">Develops business strategies with Co-Founders</li>
            <li class="list-group-item">Monitors company finances</li>
            <li class="list-group-item">Researches environmental issues affecting turtles</li>
        </uL>
    </div>
    <div class="col-lg-12 no-pad">
        <h3 class="col-lg-6 experience no-pad">Owaygo <span
                    class="jobinfo">Westford, MA</span></h3>
        <p class="experienceDate text-right col-lg-6 no-pad jobinfo">March
            2017-present</p>
        <p class="col-lg-12 no-pad jobtitle">Co-Founder/Web
            Developer</p>
        <ul class="list-group col-lg-12">
            <li class="list-group-item">Designed and Implemented relational database with MySQL</li>
            <li class="list-group-item">Developed web API interfacing with MySQL database in PHP</li>
            <li class="list-group-item">Generated website using HTML, CSS, Bootstrap, Javascript and PHP</li>
        </uL>
    </div>
    <div class="col-lg-12 no-pad">
        <h3 class="col-lg-6 experience no-pad">Night Train Studios/Black Cloud Production <span class="jobinfo">Westford, MA</span>
        </h3>
        <p class="experienceDate text-right col-lg-6 no-pad jobinfo">October
            2014-May 2017</p>
        <p class="col-lg-12 no-pad jobtitle">Audio Engineering
            Intern</p>
        <ul class="list-group col-lg-12">
            <li class="list-group-item">Researched potential artists to enter into publishing agreements</li>
            <li class="list-group-item">Identified music supervisors to send publishable music library to</li>
        </uL>
    </div>
</div>
<div class="col-xs-12 gap" id="projects"></div>
<div class="col-lg-6 col-lg-offset-3 panel col-xs-12 col-xs-offset-0">
    <h1>Projects</h1>
    <div class="col-lg-12 no-pad">
        <h3 class="col-lg-6 experience no-pad"><a href="https://github.com/nkaffine/budgeting" target="_blank"
                                                  class="headerlink">Budgeting Website</a></h3>
        <p class="experienceDate text-right col-lg-6 no-pad jobinfo">In-Progress</p>
        <p class="col-lg-12 no-pad jobtitle">Web Developer</p>
        <ul class="list-group col-lg-12">
            <li class="list-group-item">Established relational database using MySQL for transactions and accounts</li>
            <li class="list-group-item">Composed web API to interact with MySQL database in PHP</li>
            <li class="list-group-item">Drafted website using HTML, CSS, Bootstrap, Javascript, and PHP</li>
        </uL>
    </div>
    <div class="col-lg-12 no-pad">
        <h3 class="col-lg-6 experience no-pad"><a class="headerlink" href="https://www.rps.kaffine.tech"
                                                  target="_blank">Predictive Rock Paper Scissors</a></h3>
        <p class="experienceDate text-right col-lg-6 no-pad jobinfo">October 2017</p>
        <p class="col-lg-12 no-pad jobtitle">Web Developer</p>
        <ul class="list-group col-lg-12">
            <li class="list-group-item">Implemented MySQL database to log all games of rock paper scissors with a unique
                identifier for each player using browser cookies
            </li>
            <li class="list-group-item">Formulated algorithm to predict the user's input for the next game using all
                previous user input and every other user input
            </li>
            <li class="list-group-item">Drafted minimal user interface to play rock paper scissors</li>
        </uL>
    </div>
    <div class="col-lg-12 no-pad">
        <h3 class="col-lg-6 experience no-pad"><a class="headerlink" href="http://www.connchords.com/"
                                                  target="_blank">Home To Her</a></h3>
        <p class="experienceDate text-right col-lg-6 no-pad jobinfo">May 2017</p>
        <p class="col-lg-12 no-pad jobtitle">Audio Engineer</p>
        <ul class="list-group col-lg-12">
            <li class="list-group-item">Facilitated recording of takes using Sonar for The Connchords’ album Home To
                Her
            </li>
            <li class="list-group-item">Managed recording equipment to ensure smooth transition between takes</li>
        </uL>
    </div>
</div>
<div class="col-xs-12 gap" id="about"></div>
<div class="col-lg-6 col-lg-offset-3 panel col-xs-12 col-xs-offset-0">
    <h1>About Me</h1>
    <div class="col-lg-12 no-pad">
        <h2>Coding</h2>
        <h3>The Start (Applescript)</h3>
        <p class="aboutme">My first significant coding experience was with Applescript. I discovered Applescript in my
            senior year of high school which
            in the end is what I believe led me to become a computer science major.
            My <a href="https://github.com/nkaffine/budgeting_applescript" target="_blank">first project</a> with
            Applescript was creating an interface to more easily track my transactions in a
            spreadsheet. From my budgeting Applescript I branched out into other functionality of Applescript such as
            the
            speech recognition server and Spotify integration to create a <a
                    href="https://github.com/nkaffine/voice_control_applescript" target="_blank">voice controlled media
                script</a>.
        </p>
        <h3>Web Dev</h3>
        <p class="aboutme">I first started doing web development seriously when I started working on my first startup,
            Owaygo.
            I checked out Learning MySQL: Get a Handle on Your Data from the Northeastern library and started reading it
            so I could learn how to use MySQL and how to integrate that into a web application. By July I was starting
            to
            get a handle on interfacing with a MySQL database using PHP. I started working on the startup full time for
            the two months in between the summer semester and the fall semester where I was able to really dive into
            web development. With the skills that I gained that summer I started working on many different web
            applications
            that used PHP to integrate with a MySQL database such as my <a
                    href="https://github.com/nkaffine/predictive_rps" target="_blank">predictive rock paper scissors</a>
            project and my
            <a href="https://github.com/nkaffine/budgeting" target="_blank">budgeting website project.</a></p>
        <h3>IOS Developement</h3>
        <p class="aboutme">Over this past december break I started watching the Stanford course CS 193P through iTunes
            to start learning
            Swift. I haven't watched too far into the course but in the free time that I have I try and watch lectures
            and
            practice working with Swift and creating apps.</p>
        <h2>Music</h2>
        <h3>Background</h3>
        <p class="aboutme">I started playing guitar when I was 6 with ambitions of being either a musician or a baseball
            player.
            As I got older I started to make my ambitions more realistic and decided that I would just be a musician.
            I was in various different bands from 3rd to 11th grade with occasional performances in school.
            In 10th grade as part of an honors project I wrote and recorded a 10 song album that is hidden away so that
            no one will ever here it again.
        </p>
        <h3><a class="headerlink" href="https://soundcloud.com/jumbotronica" target="_blank">Jumbotronica</a></h3>
        <p class="aboutme">In July of 2015 I was lost in thought and I came up with the name Jumbotronica. "What a great
            name for an
            electronic artist!" I thought to myself.
            Since I liked the name so much, I decided that I had to start writing electronic music and release it under
            that name.
            I started writing the electronic music using Logic Pro X which I had purchased earlier that summer.
            I posted a few songs on Soundcloud over the summer before deciding to incorperate it into my senior project.
            My senior project was to start a music career which led me to decide to release an electronic song every
            three days.
            In december of 2015 I decided to shift my project to the band that I was in at the time, The Accidents.</p>
        <h3><a class="headerlink" href="theaccidents.band" target="_blank">The Accidents</a></h3>
        <p class="aboutme">The debut of The Accidents was in early january in 2016 when we performed <a
                    href="https://www.youtube.com/watch?v=ac6V4v0x9u4">You Think I Don't Know(But I Know) by
                Morningbell</a> at Chelmsford High School (We reached out to the band and they agreed to let us put our
            performance on the Youtube).
            During the last half of my senior year I organized and promoted two concerts at a local performing arts
            center
            and gathered other local acts to play. I also organized a small outdoor concert fundraiser for a student at
            Chelmsford High School who had a stroke earlier that year to help out with medical expenses.
            At the two concerts at the local performing arts center we were able to attract 50-100 people for each
            concert
            and we had revenue averaging $750. With the outdoor concert fundraiser I was able to reach out to a local
            pizza
            place and have them donate pizza for the event. We were able to raise $900 to help out with medical
            expenses.
            The Accidents also had a reunion concert (the opening song being The Boys Are Back In Town by Thin Lizzy of
            course)
            with some other local acts this past summer and we intend to do as many more concerts as we can all fit into
            our schedules.</p>
    </div>
</div>
<div class="col-xs-12 bottom"></div>
</body>
</html>
