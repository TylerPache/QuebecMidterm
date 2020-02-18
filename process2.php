<?php
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $visitor = test_input($_POST['visitor']);
    $groupNum = test_input($_POST['groupNum']);
    $vdate = test_input($_POST['vdate']);
    $place = test_input($_POST['fplace']);
    $rating = test_input($_POST['rating']);
    $destination_email = "RITISTprofessor@gmail.com", "ttpache@gmail.com";


    $email_subject = "Quebec City --- Visitor Information";
    $email_body .= "Visitor Name $visitor\n";
    $email_body .= "Group size $groupNum\n";
    $email_body .= "Date visited $vdate\n";
    $email_body .= "Favorite place $place\n";
    $email_body .= "Rating $rating\n";
    mail($destination_email, $email_subject, $email_body);
    echo("Data sent successfully")

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Thank you for your Feedback</title>
    <link rel="stylesheet" type="text/css" href="assets/css/midterm.css">
</head>

<body>

    <!-- nav bar -->
    <nav>
        <ul>
            <li> <a href="https://people.rit.edu/~ttp4725/iste240/Midterm/index.html"> Home </a> </li>
            <li> <a href="https://people.rit.edu/~ttp4725/iste240/Midterm/summeractivities.html"> Summer Activities </a> </li>
            <li> <a href="https://people.rit.edu/~ttp4725/iste240/Midterm/winteractivities.html"> Winter Activities</a></li>
            <li> <a href="https://people.rit.edu/~ttp4725/iste240/Midterm/food.html"> Food </a> </li>
            <li> <a style="padding: 0px;" href="https://www.quebecregion.com/en/"> <img src="assets/images/quebec_flag.png" alt="Qu&#233bec Flag" title="Qu&#233bec Flag" width="200" /> </a> </li>
            <li> <a href="https://people.rit.edu/~ttp4725/iste240/Midterm/poi.html"> Points of Interest </a> </li>
            <li> <a href="https://people.rit.edu/~ttp4725/iste240/Midterm/fastfacts.html"> Fast Facts </a> </li>
            <li> <a href="https://people.rit.edu/~ttp4725/iste240/Midterm/survey.html"> Survey </a> </li>
            <li> <a href="https://people.rit.edu/~ttp4725/iste240/Midterm/references.html"> References </a></li>
        </ul>
    </nav>
    <div class="box" style="margin-top: 5em">


        <p>Thank you for taking the time to complete our short survey.
            We appreciate it so much.
            Thank you for visiting Qu&#233bec.
        </p>

    </div>
    <footer>
        <div id="footer">
            <nav>
                <ul>
                    <li> <a href="https://people.rit.edu/~ttp4725/iste240/Midterm/grading.html"> Grading Page </a></li>
                    <li> <a href="https://people.rit.edu/~ttp4725/iste240/Midterm/contact.html"> Contact </a></li>
                    <li> <a href="https://people.rit.edu/~ttp4725/iste240/">ISTE 240 main page </a> </li>
                </ul>
            </nav>
        </div>
    </footer>
</body>
<html>
