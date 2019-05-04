<?php
    /**
     * Created by PhpStorm.
     * User: Nick
     * Date: 10/19/17
     * Time: 8:43 PM
     */
    require_once(__DIR__ . "/page/MainPage.php");
    require_once(__DIR__ . "/navbar/ImageListItem.php");
    require_once(__DIR__ . "/navbar/PageListItem.php");
    require_once(__DIR__ . "/navbar/MainNav.php");
    require_once(__DIR__ . "/resume/Experience.php");
    require_once(__DIR__ . "/resume/WorkExperience.php");
    require_once(__DIR__ . "/resume/Projects.php");
    require_once(__DIR__ . "/about/AboutCategory.php");
    require_once(__DIR__ . "/about/AboutMe.php");
    require_once(__DIR__ . "/about/AboutSubCategory.php");
    require_once(__DIR__ . "/about/Header.php");
    $nav = new MainNav();
    $nav->addToLeftList("home", new PageListItem("Home", "/"));
    $nav->addToLeftList("work", new PageListItem("Work Experience", "/#work"));
    $nav->addToLeftList("projects", new PageListItem("Projects", "/#projects"));
    $nav->addToLeftList("aboutme", new PageListItem("About Me", "/#about"));
    $nav->addToRightList("github",
        new ImageListItem("images/github-icon.png", "https://github.com/nkaffine", null, "githublogo"));
    $nav->setActive("home");
    $page = new MainPage("Nicholas Kaffine", $nav);
    $page->addStyleSheet("style/main.css");
    $page->addJSFile("scripts/style.js");
    //For nicholaskaffine.com
//    $page->addToHead("<!-- Global site tag (gtag.js) - Google Analytics -->
//<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-78172213-2\"></script>
//<script>
//  window.dataLayer = window.dataLayer || [];
//  function gtag(){dataLayer.push(arguments);}
//  gtag('js', new Date());
//
//  gtag('config', 'UA-78172213-2');
//</script>
//", Page::BOTTOM);

    //For kaffine.tech
    $page->addToHead("<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-78172213-3\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-78172213-3');
</script>
", Page::BOTTOM);
    // Creating work experiences
    $work_experiences = array();
    array_push($work_experiences,
        new Experience("Zipcar", "Boston, MA", "July 2018-January 2019", "iOS Developer",
            array("Improved a feature leading to a 95% decrease in errors experienced by a user during a common use case in the Zipcar app",
                "Eliminated incorrect analytics calls being sent by the Zipcar app, improving data accuracy",
                "Led technical delivery of a feature scheduled to launch in 2019"), null));
    array_push($work_experiences,
        new Experience("Boston Ocean Company", "Boston, MA", "August 2017-present", "Co-Founder/CEO",
            array("Expand company marketshare and team",
                "Streamline productivity and workflow between team members",
                "Develop business strategies to increase brand awareness and sales",
                "Optimize data collection and analysis for marketing and sales"), "https://www.bostonoceancompany.com/"));
    array_push($work_experiences,
        new Experience("Owaygo", "Westford, MA", "March 2017-January 2019", "Co-Founder/Lead Developer",
            array("Designed and implement relational database with MySQL",
                "Developed web API interfacing with MySQL database in PHP",
                "Oversaw iOS development and iOS developer intern",
                "Coordinated with product team to generate software tasks and product roadmap"), null));
    array_push($work_experiences,
        new Experience("Now You Know", "Westford, MA", "December 2017-present", "Web Developer",
            array("Compiled MySQL database of all Tesla Superchargers and Destination Chargers",
                "Assembled website using Google Maps API displaying Tesla Chargers", "Maintains database and website"),
            "https://www.nowyouknowchannel.com"));
    array_push($work_experiences,
        new Experience("Night Train Studios/Black Cloud Production", "Westford, MA", "October 2014-May 2017",
            "Audio Engineering Intern", array("Facilitated studio recording sessions",
                "Researched potential artists to enter into publishing agreements",
                "Identified music supervisors to send publishable music library to"), null));
    $project_experiences = array();
    array_push($project_experiences, new Experience("Good Boi?", "Boston, MA",
        "December 2018-January 2019", "iOS Developer",
            array("Generated Core ML model using Create ML using 2,000 images",
                "Streamlined image capturing with a a wrapper for parts of AVFoundation",
                "Introduced a manager for classification and AV related tasks to offer further potential abstraction"), "https://good-boi.kaffine.tech/"));
    array_push($project_experiences, new Experience("Budgeting Website", null, "July 2017-January 2018", "Web Developer",
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
    $header = new Header("images/IMG_6275.JPG",
        "I am a third year computer science student at Northeastern with an itch for entrepreneurship. 
        I have been coming up with ideas for companies and starting companies ever since my first company in my sophomore year of
         high school called Kaffine School of Music. Once I started college I started two of my more serious companies, Owaygo and 
         Boston Ocean Company. Recently me and my co-founder put Owaygo on hold so we could devote more time to Boston Ocean Company.",
        "<a href='https://www.bostonoceancompany.com/' target='_blank'>Boston Ocean Company</a> has gone through some awesome changes since I started the company with my co-founder Bobby Briggs in 
        August of 2017. Bobby came up with the idea for the company almost as a joke and we just ran with it. It was a simple concept, 
        let’s make some turtle themed clothing and then donate a portion of our proceeds to a company that is doing something good for the 
        ocean. We created our first line of shirts which were well received and sold pretty well. After that we had trouble selling the shirts 
        that we made. We tried to move the company in a direction of more classy designs which caused inventory and manufacturing issues 
        leading us to sink a lot of money into the company with no returns. In January of this year we met with an older mentor of ours and he 
        decided to invest in the company and work with us to work on some of the issues we were having. It has been a really exciting couple of 
        months and we are extremely excited to have just launched a new brand called <a href='https://ecowear.us/' target='_blank'>Ecowear</a>.",
        "Owaygo was a startup with the goal of improving the restaurant discovery experience. I created an MVP in the summer of 2017 using PHP, 
        MySQL, and Bootstrap. We were able to flush out  a lot of the ideas we had through the process of creating the MVP. The next year 
        and half that we worked on the company were mostly spent trying various different tech stacks. We tried an elixir backend during 
        the summer of 2018 and realized that there was not enough time for me to work full time, learn a new technology, and implement a 
        new backend using the technology. This led to a shift back to a PHP backend with an iOS frontend because I had started to gain iOS 
        skills at my co-op that summer. The second half of 2018 was a personal battle for me with finding the time to work on the backend, 
        front end, and manage and iOS intern that we onboarded. With the context switching between PHP, Swift, and business development for 
        Boston Ocean Company, the company made very little progress which is what eventually led to it being put on hold.",
        "One of hobbies is creating and playing music. When I get the chance I play concerts with my high school band The Accidents or I 
        write electronic music. My most recent music project is a short album that I will release in late April of some of the music that 
        I have been working on sporadically for the two years or so. I recently released a single from the album called 
        <a href='https://nkaffine.bandcamp.com/track/december'>December</a>.");
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
    $iosdev = new AboutSubCategory("iOS Developement",
        "In July 2018 I started my co-op as an iOS developer at Zipcar where I began to learn a lot 
        about iOS development. In the first month that I worked there I read a couple books about Swift 
        and started watching the Stanford iOS lecture series CS193P about Swift and iOS. I regularly 
        watched WWDC talks and other conference talks during lunches and with co-workers to learn as much 
        as I could about iOS. I became very comfortable with Swift as a language and got a solid grasp of some 
        of the common design patterns used in iOS. Recently I joined a club at Northeastern called Generate 
        that focuses on product development where I have served as a sudo technical lead on the iOS app we 
        are developing this semester.",
        null);
    $future = new AboutSubCategory("The Future: Javascript?",
        "Javascript and cross platform technologies are something that I am very interested in 
        learning more about. One of the biggest struggles that I faced recently with Owaygo was the context 
        switching between doing backend coding and front end coding. That issue along with only coding for one
         of the major mobile platforms at a time were a huge obstacle to the company that using a Javascript tech 
         stack would likely have been able to overcome. I see myself participating in many ventures in the future, 
         whether they be my own or ones that I join early on, and javascript is a skill that I think is really 
         valuable for that.", null);
    $futurePt2 = new AboutSubCategory("The Future Pt. 2 Electric Boogaloo: Product Management?",
        "I have started to gain interest in the product development process. While I was working at 
        Zipcar I was able to get some exposure to some project management work that I enjoyed. Project management 
        and product development from a process standpoint is something that I want to explore to see if I enjoy 
        going forward. A lot of the work that I have been doing with Boston Ocean Company and Owaygo has kind of 
        fallen under the umbrella of project management and product development and I am interested to see how 
        much I’ll enjoy that going forward.", null);
    $coding = new AboutCategory("Coding", $applescript, $webDev, $iosdev, $future, $futurePt2);
    $musicbackground = new AboutSubCategory("Background",
        "I started playing guitar when I was 6 with ambitions of being either a musician or a baseball player. As I got older I started to make my ambitions more realistic and decided that I would just be a musician. I was in various different bands from 3rd to 11th grade with occasional performances in school. In 10th grade as part of an honors project I wrote and recorded a 10 song album that is hidden away so that no one will ever here it again.",
        null);
    $jumbotronica = new AboutSubCategory("Jumbotronica",
        "In July of 2015 I was lost in thought and I came up with the name Jumbotronica. \"What a great name for an electronic artist!\" I thought to myself. Since I liked the name so much, I decided that I had to start writing electronic music and release it under that name. I started writing the electronic music using Logic Pro X which I had purchased earlier that summer. I posted a few songs on Soundcloud over the summer before deciding to incorperate it into my senior project. My senior project was to start a music career which led me to decide to release an electronic song every three days. In december of 2015 I decided to shift my project to the band that I was in at the time, The Accidents.",
        "https://soundcloud.com/jumbotronica");
    $theaccidents = new AboutSubCategory("The Accidents",
        "The debut of The Accidents was in early january in 2016 when we performed <a href=\"https://www.youtube.com/watch?v=ac6V4v0x9u4\">You Think 
I Don't Know(But I Know) by Morningbell</a> at Chelmsford High School (We reached out to the band and they agreed to let us put our performance on the Youtube). 
During the last half of my senior year I organized and promoted two concerts at a local performing arts center and gathered other local acts to play.
 I also organized a small outdoor concert fundraiser for a student at Chelmsford High School who had a stroke earlier that year to help out with medical 
 expenses. At the two concerts at the local performing arts center we were able to attract 50-100 people for each concert and we had revenue averaging 
 $750. With the outdoor concert fundraiser I was able to reach out to a local pizza place and have them donate pizza for the event. We were able to raise
  $900 to help out with medical expenses. The Accidents also had a reunion concert (the opening song being The Boys Are Back In Town by Thin Lizzy of course) 
  with some other local acts the summer of 2018, and another concert put on by some younger acts this past december where we played an arrangement of the cover of 
  Gucci Gang that was done by Drake Bell. We still haven't decided if this will be the final hiatus of The Accidents, but we can easily be persuaded to play again.",
        "http://theaccidents.band");
    $music = new AboutCategory("Music", $musicbackground, $jumbotronica, $theaccidents);
    $aboutme = new AboutMe($coding, $music);
    $page->addToBody($aboutme->generateHTML(), Page::BOTTOM);
    $page->addToBody("</div><div class=\"col-xs-12 bottom\"></div>", Page::BOTTOM);
    echo $page->generateHtml();
?>