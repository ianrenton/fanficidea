<?php
    $characters = array("Superman","Supergirl","Spiderman","Batman","all of the X-Men simultaneously","Wolverine","Cyclops","Professor X","the Flash","Hulk","She-Hulk","Iron Man","Captain America","Thor","the Justice League","Wonder Woman","Judge Dredd","Daredevil","Catwoman","the Green Lantern","Aquaman","Doctor Manhattan","Rorschach","Spider Jerusalem","Galactus","Conan the Barbarian","Harry Potter","Hermione Grainger","Ron Weasley","the Weasley Twins","Professor Snape","Dumbledore","Dobby the House Elf","Doctor Who","Davros, leader of the Daleks","Captain Jack Harkness","Battle Pope","Twilight Sparkle","Pinkie Pie","Applejack","Fluttershy","Rarity","Sonic the Hedgehog","Tails","Knuckles","Doctor Robotnik","Pinky and the Brain","Bugs Bunny","Elmer Fudd","the Roadrunner","Sylvester the Cat","Tweety-Pie","Naruto","Cardcaptor Sakura","Goku","Frieza","Inuyasha","Ash","Misty","Brock","Pikachu","Sailor Moon","Ranma","Shinji Ikari","Ben 10","Kim Possible","Phineas and Ferb","Invader Zim","Finn the Human","Jake the Dog","Cinderella","Sleeping Beauty","Princess Jasmine","The Little Mermaid","Quasimodo","Princess Elsa","Princess Anna","Rapunzel","Rumpelstiltskin","Snow White","the evil Queen from 'Snow White'","one of the Seven Dwarves","Mulan","Tarzan","Spongebob Squarepants","Steven Universe","G.I. Joe","Eric Cartman","Scooby Doo","Homer Simpson","Marge Simpson","Bart Simpson","Lisa Simpson","Krusty the Clown","Sideshow Bob","Alvin from the Chipmunks","Thomas the Tank Engine","The Fat Controller","Dora the Explorer","He-Man","Skeletor","Papa Smurf","Smurfette","Snoopy","Charlie Brown","Peter Pan","Tinkerbell","Clifford the Big Red Dog","Inspector Gadget","Brains from Thunderbirds","Lady Penelope","Captain Scarlet","Captain Planet","Iggle Piggle","Upsy Daisy","Luke Skywalker","Darth Vader","Obi-Wan Kenobi","Han Solo","Princess Leia","Chewbacca","Jabba the Hutt","Anakin Skywalker","Captain Kirk","Spock","Mr. Sulu","Captain Picard","Wesley Crusher","Captain Janeway","Jack Sparrow","Optimus Prime","Megatron","Alice (of 'Wonderland' fame)","the Cheshire Cat","the Queen of Hearts","Sherlock Holmes","Dr. Watson","the Phantom of the Opera","James Bond","Dracula","Buzz Lightyear","Lightning McQueen","Godzilla","Shrek","Marty McFly","Doc Brown","Indiana Jones","the Terminator","Edward Scissorhands","WALL-E","the Wizard of Oz","the Wicked Witch of the West","Mary Poppins","Barbie","Buffy the Vampire Slayer","Willow","Angel","Abby from NCIS","Hannah Montana","the Red Power Ranger","Mal Reynolds","River Tam","Teen Wolf","Tyrion Lannister","Xena Warrior Princess","Edward Cullen","Bella from Twilight","Gandalf","Frodo","Sauron","Katniss","Artemis Fowl","Gossip Girl","Mr Darcy","Elizabeth Bennet","Jane Eyre","Christian Grey","Rincewind","Granny Weatherwax","Nanny Ogg","Death","Twoflower","The Luggage","Harry Dresden","Willy Wonka","Arthur Dent","Zaphod Beeblebrox","Ford Prefect","Trillian","Marvin the Paranoid Android","Atticus Finch","Captain Ahab","Tom Sawyer","Huckleberry Finn","Hellraiser","Freddy Krueger","Jason Vorhees","Michael Myers","Hannibal Lecter","Chucky","the shark from Jaws","David Cameron","Barack Obama","Justin Bieber","Mickey Mouse","Minnie Mouse","Donald Duck","the Devil","Cloud","Tifa","Aeris","Sephiroth","Squall","Zidane","Tidus","Yuna","Link","Zelda","Ganondorf","Mario","Luigi","Yoshi","Princess Peach","Toad","Bowser","Steve (the Minecraft guy)","Phoenix Wright","Professor Layton","Ryu","GLaDOS","SHODAN","Solid Snake","Samus","Ness");
    $verbs = array("flirts with","tries to sleep with","romances","fucks","cheats on","dates","drinks beer with","visits a trendy wine bar with","writes love letters to","confesses their love to","cheats on","drinks coffee with","saves the world with","saves the universe with","kills","writes angry letters about","leaves passive-agressive post-it notes for","nibbles on the ear of","seductively whispers in the ear of","gets turned down by","falls in love with","makes evil plans with","runs away from","tries to escape from","parties with");
    $locations = array("in space","under the sea","on the SHIELD Helicarrier","in the Bat Cave","in Ancient Rome","in Ancient Egypt","in medieval times","in Victorian London","at Hogwarts","at the Restaurant at the End of the Universe","in the TARDIS","on the planet Gallifrey","in Equestria","in the Green Hill Zone","at Disney World","in the streets of London Below","in the eighties","on Tracy Island","on the Island of Sodor","in Springfield","in the world of Adventure Time","on the Death Star","on Tatooine","in Wonderland","on the Starship Enterprise","in Middle Earth","on the slopes of Mount Doom","in near-future Tokyo","in Renaissance Italy","in their parents' house","in a grimy bedsit","in Buckingham Palace","in the White House","on the Moon","in Minecraft","on the Internet","on a run-down council estate","on top of the Empire State Building","in a 1970s disco","at a Justin Bieber concert","at a Sex Pistols concert");

    $char1 = ucfirst($characters[rand(0, count($characters)-1)]);
    $char2 = $characters[rand(0, count($characters)-1)];
    $verb = $verbs[rand(0, count($verbs)-1)];
    $loc = $locations[rand(0, count($locations)-1)];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
    <head>
        <title>The Terrible Fanfiction Idea Generator</title>
        <meta http-equiv="Cache-control" content="no-cache">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
        <style type="text/css">
            body { margin-left: 10%; margin-right: 10%; }
            h1, h2, p, form { text-align:center; font-family: "Special Elite", serif;}
            h2 {font-size: 2em; margin:3em 0;}
            form {margin: 4em 0;}
            p, input{font-size: 1.3em;}
        </style>
    </head>
    <body>
        <h1>The Terrible Fanfiction Idea Generator</h1>
        <p>Grab your keyboard and pint of gin. It's time to write a terrible fanfiction story where:</p>
        <h2>

<?php
    echo($char1 . " " . $verb . " " . $char2 . ", " . $loc);
?>

        </h2>
        <form submit=""><input type="submit" value="Fetch me another!" /></form>

        <p class="bottompad">The Terrible Fanfiction Idea Generator was written by <a href="http://ianrenton.com">this guy</a>. Following its advice is not recommended.</p>
    </body>
</html>
