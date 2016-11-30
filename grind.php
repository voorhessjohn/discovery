<?php include './includes/config.php';?>
<?php include './includes/header.php';?>
		<?php
    
//test5.php

date_default_timezone_set('America/Los_Angeles');
//Pacific Time


//$toDay = date();  
$toDay = getdate();

$myDay = $toDay['weekday'];


if (isset($_POST['submit']))
{
// Execute this code if the submit button is pressed.
// I got this solution from https://www.daniweb.com/programming/web-development/threads/81401/text-field-values-to-php-variable
$myDay = ucfirst($_POST['input_value']);
}
                       

//print_r($toDay);

//echo $myDay;

if($myDay =='Monday'){
    echo '<html>
 <head>
    <title>Daily Grind Monday Page</title>
    <meta charset="utf-8" />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="diner.css" />
</head>
<body style = "background-color: blue;">
    <img class="desktop" src="dayimages/monday.jpeg" alt="Monday!" />
    <img class="tablet" src="dayimages/monday.jpeg" alt="Monday!" />
    <img class="phone" src="dayimages/monday.jpeg" alt="Monday!" />
    <h1>Monday</h1>
    
    <p>Hi, It\'s Monday and Mondays aren\'t so bad. You\'ll survive and you\'ll thrive!</p>
    <p>Thanks for visiting my Monday page. </p>
<footer>
   <small>
   &copy; 2016, All Rights Reserved ~ Authored by John Voorhess ~ 
   </small>
</footer>
</body>
</html>';
 
}elseif($myDay == 'Tuesday'){
    
    echo '<html>
 <head>
    <title>Daily Grind Tuesday Page</title>
    <meta charset="utf-8" />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="diner.css" />
</head>
<body style="background-color: grey;">
    <img class="desktop" src="dayimages/tuesday.jpeg" alt="Tuesday" />
    <img class="tablet" src="dayimages/tuesday.jpeg" alt="Tuesday" />
    <img class="phone" src="dayimages/tuesday.jpeg" alt="Tuesday" />
    <h1>Tuesday</h1>
    
    <p>Yo! It\'s Tuesday and you made it through Monday! You deserve a medal or something. Pretty soon, you\'ll be kickin\' back this weekend with a cold one! </p>
    <p>Thanks for visiting my Tuesday page. </p>
<footer>
   <small>
   &copy; 2016, All Rights Reserved ~ Authored by John Voorhess ~
   </small>
</footer>
</body>
</html>';

}elseif($myDay =='Wednesday'){
    
    echo '<html>
 <head>
    <title>Daily Grind Wednesday Page</title>
    <meta charset="utf-8" />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="diner.css" />
</head>
<body style="background-color: red;">
    <img class="desktop" src="dayimages/wednesday.jpeg" alt="Wednesday" />
    <img class="tablet" src="dayimages/wednesday.jpeg" alt="Wednesday" />
    <img class="phone" src="dayimages/wednesday.jpeg" alt="Wednesday" />
    <h1>Wednesday</h1>
    <!--Please send help, he\'s making me say these things. I don\'t actually like Wednesdays-->
    <p>Holy crap! It\'s HUMP DAY!  CHOO CHOO! Get ready for the FUN TRAIN because it\'s almost the weekend!</p>
    <p>Thanks for visiting my Hump Day page. </p>
<footer>
   <small>
   &copy; 2016, All Rights Reserved ~ Authored by John Voorhess ~ 
   </small>
</footer>
</body>
</html>';
    
}elseif($myDay == 'Thursday'){
    
    echo '<html>
 <head>
    <title>Daily Grind Thursday Page</title>
    <meta charset="utf-8" />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="diner.css" />
</head>
<body style="background-color: green;">
    <img class="desktop" src="dayimages/thursday.jpeg" alt="Thursday" />
    <img class="tablet" src="dayimages/thursday.jpeg" alt="Thursday" />
    <img class="phone" src="dayimages/thursday.jpeg" alt="Thursday" />
    <h1>Tuesday</h1>
    <!--Please send help, he\'s making me say these things. I don\'t actually like Thursdays-->
    <p>Thursday is almost Friday! Get ready to melt your face this weekend! It\'s going to be so much fun! I can\'t wait!<!--I can wait. That was another lie.--></p>
    <p>Thanks for visiting my Thursday page. </p>
<footer>
   <small>
   &copy; 2016, All Rights Reserved ~ Authored by John Voorhess ~ 
   </small>
</footer>
</body>
</html>';
    
}elseif($myDay == 'Friday'){
    
    echo '<html>
 <head>
    <title>Daily Grind Friday Page</title>
    <meta charset="utf-8" />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="diner.css" />
</head>
<body style="background-color: yellow;">
    <img class="desktop" src="dayimages/friday.jpeg" alt="Friday" />
    <img class="tablet" src="dayimages/friday.jpeg" alt="Friday" />
    <img class="phone" src="dayimages/friday.jpeg" alt="Friday" />
    <h1>Friday</h1>
    <!--Please send help, he\'s making me say these things. I don\'t actually like Fridays-->
    <p>Put on some R. Kelly and grab a raincoat because it\'s the freakin\' weekend and you\'re about to have you some fun!</p>
    <!--It\'s not funny. None of this is funny. Everyone you know will die someday-->
    <p>Thanks for visiting my Friday page. </p>
<footer>
   <small>
   &copy; 2016, All Rights Reserved ~ Authored by John Voorhess ~ 
   </small>
</footer>
</body>
</html>';

}elseif($myDay == 'Saturday'){
    
    echo '<html>
 <head>
    <title>Daily Grind Saturday Page</title>
    <meta charset="utf-8" />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="diner.css" />
</head>
<body style="background-color: white;">
    <img class="desktop" src="dayimages/saturday.jpeg" alt="Saturday" />
    <img class="tablet" src="dayimages/saturday.jpeg" alt="Saturday" />
    <img class="phone" src="dayimages/saturday.jpeg" alt="Saturday" />
    <h1>Saturday</h1>
    <!--Please send help, he\'s making me say these things. I don\'t actually like Saturdays-->
    <p>I hope you\'re recovered from Friday, because you\'re about to do it again tonight!</p>
    <!--He\'s not fooling anyone. He hasn\'t been out in a social setting in decades-->
    <p>Thanks for visiting my Saturday page. </p>
<footer>
   <small>
   &copy; 2016, All Rights Reserved ~ Authored by John Voorhess ~ 
   </small>
</footer>
</body>
</html>';
    
}elseif($myDay == 'Sunday'){
    
    echo '<html>
 <head>
    <title>Daily Grind Sunday Page</title>
    <meta charset="utf-8" />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="diner.css" />
</head>
<body style="background-color: brown;">
    <img class="desktop" src="dayimages/sunday.jpeg" alt="Sunday" />
    <img class="tablet" src="dayimages/sunday.jpeg" alt="Sunday" />
    <img class="phone" src="dayimages/sunday.jpeg" alt="Sunday" />
    <h1>Sunday</h1>
    <!--Please send help, he\'s making me say these things. I don\'t actually like Sundays-->
    <p>Chill out, it\'s Sunday.  </p>
    <p>Thanks for visiting my Sunday page. Come back. Or don\'t. Nobody\'s going to die if you don\'t. </p>
<footer>
   <small>
   &copy; 2016, All Rights Reserved ~ Authored by John Voorhess ~ 
   
   </small>
</footer>
</body>
</html>';
    
}else{
    
    echo "What day is it?";
    
}

include './includes/footer.php'; ?>
