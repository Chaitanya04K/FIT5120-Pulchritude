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
</head>

<body>

    <?php include 'navbar.php'; ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="getInfo.html">About Depression</a></li>
            <li class="breadcrumb-item active" aria-current="page">Signs and Symptoms</li>
        </ol>
    </nav>

    <div class="jumbotron depression-signs jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 banner-heading learnAboutDepression">Signs and Symptoms</h1>
            <p class="lead banner-subheading learnAboutDepression">It is important to remember that you might be facing 
                many of these symptoms but that does not necessarily mean that you're depressed. Similarly, not everyone 
                who is suffering from depression will have these symptoms.</p>
            <a href="tel:131114" class="actionBtn">Call: Lifeline 13 11 14</a>
        </div>
    </div>

    <div class="container">
        <p class="info-mainHeading">What is Depression?</p>
        <p>
            Depression is a common mental health condition among young people. It will negatively affect your feelings, 
            your behaviours, and your thoughts. Depression may cause negative mood changes or make you lose your interest in 
            activities you enjoy. It can lead to emotional and physical problems. It can also affect the close relationships 
            with family and friends. Fortunately, depression can be managed and even treatable. With proper diagnosis and 
            treatment, the vast majority of people with depression can overcome it. If you feel you are depressed, please take
            the first step to see your family physician or psychiatrist. Talk about your concerns and request a thorough evaluation. 
            This is will be a good start to addressing your mental health needs.
        </p>
        <p class="info-subHeading">Signs and Symptoms</p>
        <p>
            It varies with people. There are common symptoms among people who are experiencing depression.
            Everyone will have negative moods and bad days.
            So, it is usually only depression if these symptoms continues for at least two weeks. 
            
            Following symptoms are mild to severe:
            <ol>
                <li>Feeling Low</li>
                <li>Losing interest in activities once enjoyed</li>
                <li>Rapid mood swings</li>
                <li>Unusual change in weight</li>
                <li>Sleeping problems</li>
                <li>Overeating or anorexia</li>
                <li>Feeling fatigue, worthless, or guilty </li>
                <li>Purposeless physical activities, or slowed movements and speech, which is too severe to be ignored by others</li>
                <li>Cannot think or concentrating in the normal way</li>
                <li>Suicidial or self-harm</li>
            </ol>
        </p>
    </div>

    <?php include 'footer.php'; ?>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>