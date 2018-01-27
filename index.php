<?php
    /**
     * Created by PhpStorm.
     * User: Nick
     * Date: 10/19/17
     * Time: 8:43 PM
     */
    require_once($_SERVER["DOCUMENT_ROOT"] . "/page/MainPage.php");
    require_once($_SERVER["DOCUMENT_ROOT"] . "/navbar/ImageListItem.php");
    require_once($_SERVER["DOCUMENT_ROOT"] . "/navbar/PageListItem.php");
    require_once($_SERVER["DOCUMENT_ROOT"] . "/navbar/MainNav.php");
    require_once($_SERVER["DOCUMENT_ROOT"] . "/resume/Experience.php");
    require_once($_SERVER["DOCUMENT_ROOT"] . "/resume/WorkExperience.php");
    require_once($_SERVER["DOCUMENT_ROOT"] . "/resume/Projects.php");
    require_once($_SERVER["DOCUMENT_ROOT"] . "/about/AboutCategory.php");
    require_once($_SERVER["DOCUMENT_ROOT"] . "/about/AboutMe.php");
    require_once($_SERVER["DOCUMENT_ROOT"] . "/about/AboutSubCategory.php");
    require_once($_SERVER["DOCUMENT_ROOT"] . "/about/Header.php");
    $nav = new MainNav();
    $nav->addToLeftList("home", new PageListItem("Home", "/"));
    $nav->addToLeftList("work", new PageListItem("Work Experience", "/#work"));
    $nav->addToLeftList("projects", new PageListItem("Projects", "/#projects"));
    $nav->addToLeftList("aboutme", new PageListItem("About Me", "/#about"));
    $nav->addToRightList("github",
        new ImageListItem("/images/github-icon.png", "https://github.com/nkaffine", null, "githublogo"));
    $nav->setActive("home");
    $page = new MainPage("Nicholas Kaffine", $nav);
    $page->addStyleSheet("/style/main.css");
    $page->addJSFile("/scripts/style.js");
    // Creating work experiences
    $work_experiences = array();
    array_push($work_experiences,
        new Experience("Now You Know", "Westford, MA", "December 2017-present", "Web Developer",
            array("Compiled MySQL database of all Tesla Superchargers and Destination Chargers",
                "Assembled website using Google Maps API displaying Tesla Chargers", "Maintains database and website"),
            "https://www.nowyouknowchannel.com"));
    array_push($work_experiences,
        new Experience("Turtle Shirts", "Westford, MA", "August 2017-present", "Co-Founder/Web Developer",
            array("Launched website using HTML, CSS, Bootstrap, Javascript and PHP to interact with MySQL database for inventory and sales ",
                "Develop business strategies with Co-Founders", "Monitor company finances",
                "Research environmental issues affecting turtles"), "https://www.turtleshirts.org"));
    array_push($work_experiences,
        new Experience("Owaygo", "Westford, MA", "March 2017-present", "Co-Founder/Web Developer",
            array("Designed and Implemented relational database with MySQL",
                "Developed web API interfacing with MySQL database in PHP",
                "Generated website using HTML, CSS, Bootstrap, Javascript and PHP"), null));
    array_push($work_experiences,
        new Experience("Night Train Studios/Black Cloud Production", "Westford, MA", "October 2014-May 2017",
            "Audio Engineering Intern", array("Facilitated studio recording sessions",
                "Researched potential artists to enter into publishing agreements",
                "Identified music supervisors to send publishable music library to"), null));
    $project_experiences = array();
    array_push($project_experiences, new Experience("Budgeting Website", null, "In-Progress", "Web Developer",
        array("Established relational database using MySQL for transactions and accounts",
            "Composed web API to interact with MySQL database in PHP",
            "Drafted website using HTML, CSS, Bootstrap, Javascript, and PHP"),
        "https://github.com/nkaffine/budgeting"));
    array_push($project_experiences,
        new Experience("Predictive Rock Paper Scissors", null, "October 2017", "Web Developer",
            array("Implemented MySQL database to log all games of rock paper scissors with a unique identifier for each player using browser cookies",
                "Formulated algorithm to predict the user's input for the next game using all previous user input and every other user input",
                "Drafted minimal user interface to play rock paper scissors"), "https://www.rps.kaffine.tech"));
    array_push($project_experiences, new Experience("Home To Her", null, "May 2017", "Audio Engineer",
        array("Facilitated recording of takes using Sonar for The Connchords’ album Home To Her",
            "Managed recording equipment to ensure smooth transition between takes"), "http://www.connchords.com/"));
    $header = new Header("/images/slider/IMG_0509.JPG",
        "I have been doing web development work for the last year creating web applications that use PHP to interact with a MySQL database. In addition to web development I have been watching a Stanford course on IOS development which is another area that I want to explore. I have been working on two startups. ",
        "<a href=\"https://www.turtleshirts.org\">Turtle Shirts</a> is a clothing brand that I started with two friends from my high school internship. I constructed the website which is designed to handle low volumes of transactions using a MySQL database with PHP and the Stripe.js API to process payments.",
        "I am also working on a startup Owaygo. I have been constructing a database application prototyped with a website that manages user authentication through Facebook, purchases with Stripe.js, and handles user uploaded media information about restaurants in areas around them.",
        "One of hobbies is creating and playing music. When I get the chance I play concerts with my high school band <a href=\"http://theaccidents.band\">The Accidents</a> or I write electronic music. One of my more recent songs was used as the background music for a <a href=\"https://youtu.be/wLkLwKLaTZo\" target=\"_blank\">commercial</a> that I made with my co-founders at Turtle Shirts.");
    $page->addToBody($header->generateHTML(), Page::BOTTOM);
    $work = new WorkExperience($work_experiences);
    $page->addToBody($work->generateHTML(), Page::BOTTOM);
    $projects = new Projects($project_experiences);
    $page->addToBody($projects->generateHTML(), Page::BOTTOM);
    $applescript = new AboutSubCategory("The Start (Applescript)",
        "My first significant coding experience was with Applescript. I discovered Applescript in my senior year of high school which in the end is what I believe led me to become a computer science major. My <a href=\"https://github.com/nkaffine/budgeting_applescript\" target=\"_blank\">first project</a> with Applescript was creating an interface to more easily track my transactions in a spreadsheet. From my budgeting Applescript I branched out into other functionality of Applescript such as the speech recognition server and Spotify integration to create a <a href=\"https://github.com/nkaffine/voice_control_applescript\" target=\"_blank\">voice controlled media script</a>.",
        null);
    $webDev = new AboutSubCategory("Web Dev",
        "I first started doing web development seriously when I started working on my first startup, Owaygo. I checked out Learning MySQL: Get a Handle on Your Data from the Northeastern library and started reading it so I could learn how to use MySQL and how to integrate that into a web application. By July I was starting to get a handle on interfacing with a MySQL database using PHP. I started working on the startup full time for the two months in between the summer semester and the fall semester where I was able to really dive into web development. With the skills that I gained that summer I started working on many different web applications that used PHP to integrate with a MySQL database such as my <a href=\"https://github.com/nkaffine/predictive_rps\" target=\"_blank\">predictive rock paper scissors</a> project and my <a href=\"https://github.com/nkaffine/budgeting\" target=\"_blank\">budgeting website project.</a>",
        null);
    $iosdev = new AboutSubCategory("IOS Developement",
        "Over this past december break I started watching the Stanford course CS 193P through iTunes to start learning Swift. I haven't watched too far into the course but in the free time that I have I try and watch lectures and practice working with Swift and creating apps.",
        null);
    $coding = new AboutCategory("Coding", $applescript, $webDev, $iosdev);
    $musicbackground = new AboutSubCategory("Background",
        "I started playing guitar when I was 6 with ambitions of being either a musician or a baseball player. As I got older I started to make my ambitions more realistic and decided that I would just be a musician. I was in various different bands from 3rd to 11th grade with occasional performances in school. In 10th grade as part of an honors project I wrote and recorded a 10 song album that is hidden away so that no one will ever here it again.",
        null);
    $jumbotronica = new AboutSubCategory("Jumbotronica",
        "In July of 2015 I was lost in thought and I came up with the name Jumbotronica. \"What a great name for an electronic artist!\" I thought to myself. Since I liked the name so much, I decided that I had to start writing electronic music and release it under that name. I started writing the electronic music using Logic Pro X which I had purchased earlier that summer. I posted a few songs on Soundcloud over the summer before deciding to incorperate it into my senior project. My senior project was to start a music career which led me to decide to release an electronic song every three days. In december of 2015 I decided to shift my project to the band that I was in at the time, The Accidents.",
        "https://soundcloud.com/jumbotronica");
    $theaccidents = new AboutSubCategory("The Accidents",
        "he debut of The Accidents was in early january in 2016 when we performed <a href=\"https://www.youtube.com/watch?v=ac6V4v0x9u4\">You Think I Don't Know(But I Know) by Morningbell</a> at Chelmsford High School (We reached out to the band and they agreed to let us put our performance on the Youtube). During the last half of my senior year I organized and promoted two concerts at a local performing arts center and gathered other local acts to play. I also organized a small outdoor concert fundraiser for a student at Chelmsford High School who had a stroke earlier that year to help out with medical expenses. At the two concerts at the local performing arts center we were able to attract 50-100 people for each concert and we had revenue averaging $750. With the outdoor concert fundraiser I was able to reach out to a local pizza place and have them donate pizza for the event. We were able to raise $900 to help out with medical expenses. The Accidents also had a reunion concert (the opening song being The Boys Are Back In Town by Thin Lizzy of course) with some other local acts this past summer and we intend to do as many more concerts as we can all fit into our schedules.",
        "http://theaccidents.band");
    $music = new AboutCategory("Music", $musicbackground, $jumbotronica, $theaccidents);
    $aboutme = new AboutMe($coding, $music);
    $page->addToBody($aboutme->generateHTML(), Page::BOTTOM);
    $page->addToBody("</div><div class=\"col-xs-12 bottom\"></div>", Page::BOTTOM);
    echo $page->generateHtml();
?>