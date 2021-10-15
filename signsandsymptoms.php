<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brainguard</title>

    <!-- icon -->
    <link rel="icon" href="/images/icon_logo.png">

    <!-- style CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
    .sidebar {
        margin: 0;
        padding: 0;
        width: 200px;
        background-color: #1E7ED1;
        position: absolute;
        height: 60%;
        overflow: hidden;
        border-radius:10px;
    }
    .sidebar a {
        display: block;
        color: black;
        padding: 16px;
        text-decoration: none;
        border-collapse: collapse;
        border:1px dashed #E2E5E9;
    }
    .sidebar a.active {
        background-color: #1E7ED1;
        color: white;
    }
    .sidebar a:hover:not(.active) {
        background-color: #B2D2EE;
        color: white;
    }
    div.container1 {
        margin-left: 200px;
        padding: 1px 16px;
        height: 1000px;
    }
    @media screen and (max-width: 700px) {
        .sidebar {
            width: 100%;
            height: auto;
            position: relative;
        }
        .sidebar a {float: left;}
        div.container1 {margin-left: 0;}
    }
    @media screen and (max-width: 400px) {
        .sidebar a {
            text-align: center;
            float: none;
        }
    }
    </style>    
</head>

<body>

    <?php include 'navbar.php'; ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="getInfo.php">About Depression</a></li>
            <li class="breadcrumb-item active" aria-current="page">Signs and Symptoms</li>
        </ol>
    </nav>

    <div class="jumbotron depression-signs jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 banner-heading learnAboutDepression">Signs and Symptoms</h1>
            <p class="lead banner-subheading learnAboutDepression" style="text-align:justify;">It is important to remember that you may be facing 
                many of these symptoms but that does not necessarily mean that you're depressed. Similarly, not everyone 
                who is suffering from depression will have the same symptoms.</p>
            <a href="tel:131114" class="actionBtn">Call: Lifeline 13 11 14</a>
        </div>
    </div>

    <div class="sidebar">
        <a href="getSupport.php" style="font-size:23px;color:white;">Mental Health Services</a>
        <a href="moodDiary.php" style="font-size:23px;color:white;">Mood Diary</a>
        <a href="causes.php" style="font-size:23px;color:white;">Depression Causes</a>
        <a href="checklist.php" style="font-size:23px;color:white;">K10 Checklist</a>
    </div>

    <div class="container1">
        <p class="info-mainHeading">What is Depression?</p>
        <p style="text-align:justify;margin-right:50px;">
            Depression is a common mental health condition among young adults. It will negatively affect your feelings, 
            behaviours, and thoughts. Depression may cause negative mood changes or make you lose interest in 
            activities you will normally enjoy. It can affect your emotional and physical wellbeing. Also, it can affect close relationships 
            with family and friends. Fortunately, depression can be managed and even be treatable. With the proper diagnosis and 
            treatment, the vast majority of people with depression can overcome it. If you feel depressed, please take
            the first step to see your trusted physician or mental health professional. You can talk about your concerns and request a thorough evaluation. 
            This is can be a good start to addressing your mental health needs.
        </p>
        <p class="info-subHeading">Signs and Symptoms</p>
        <p style="text-align:justify;margin-right:50px;">
            The signs and symptoms varies with individual. There are some more common symptoms among people who are experiencing depression.
            Everyone has negative moods and go through bad days.
            However, you may be depressed if you have experienced several signs and symptoms for more than two weeks. 
            
            Here are some examples of mild to severe signs and symptoms:
            <ol>
                <li>Feeling Low</li>
                <li>Losing interest in activities once enjoyed</li>
                <li>Rapid mood swings</li>
                <li>Unusual change in weight</li>
                <li>Sleeping problems</li>
                <li>Overeating or anorexia</li>
                <li>Feeling fatigue, worthless, or guilty </li>
                <li>Purposeless physical activities, or slowed movements and speech, which is too severe to be ignored by others</li>
                <li>Cannot think or concentrate in normally</li>
                <li>Suicidial tendencies or self-harm</li>
            </ol>
        </p>
        <br>
        <p class="info-mainHeading">A few things to note:</p>
        <p style="text-align:justify;margin-right:50px;">
        <br>A diagnosis can only be supplied by a health professional.
            If you feel sad, stressed, anxious or struggling with something that the information does not cover, 
            please consider other options that feels right for you to further assist you.
            <br>Please seek a medical or mental health professional with further questions 
            on your mental health. The most important thing is to recognise the signs and symptoms and seek support.</p>
    </div>

    <?php include 'footer.php'; ?>

</body>

</html>