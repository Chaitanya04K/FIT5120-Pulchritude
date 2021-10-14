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
            <li class="breadcrumb-item active" aria-current="page">Causes</li>
        </ol>
    </nav>

    <div class="jumbotron depression-causes jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 banner-heading learnAboutDepression">Causes of depression</h1>
            <p class="lead banner-subheading learnAboutDepression" style="text-align:justify;margin-right:100px;">While the exact cause or reasons why people develop
                depressive symptoms are not known, here are some general points that might help you figure out if you or
                someone you care about are suffering from depression.</p>
            <a href="tel:131114" class="actionBtn">Call: Lifeline 13 11 14</a>
        </div>
    </div>

    <div class="sidebar">
        <a href="getSupport.php" style="font-size:23px;color:white;">Mental Health Services</a>
        <a href="moodDiary.php" style="font-size:23px;color:white;">Mood Diary</a>
        <a href="signsandsymptoms.php" style="font-size:23px;color:white;">Depression Symptoms</a>
        <a href="checklist.php" style="font-size:23px;color:white;">K10 Checklist</a>
    </div>

    <div class="container1">
        <p class="info-mainHeading">What causes Depression?</p>
        <p class="info-text" style="text-align:justify;margin-right:100px;">
            It's often said that depression results from a chemical imbalance, but that figure of speech doesn't capture
            how complex the disease is.
            Research suggests that depression doesn't spring from simply having too much or too little of certain brain
            chemicals.
            Rather, there are many possible causes of depression, which includes:</p>
            <li>Faulty mood regulation by the brain</li>
            <li>Genetic vulnerability</li>
            <li>Stressful life events</li>
            <li>Medications</li>
            <li>Medical problems</li>
        <p class="info-text" style="text-align:justify;margin-right:100px;">
            It's believed that several of these forces interact to bring on depression.
            To be sure, chemicals are involved in this process, but it is not a simple matter of one chemical being too
            low and another too high.
            Rather, many chemicals are involved, working both inside and outside nerve cells.
            There are millions, even billions, of chemical reactions that make up the dynamic system that is responsible
            for
            your mood, perceptions, and how you experience life.
            With this level of complexity, you can see how two people might have similar symptoms of depression, but the
            problem on the inside, and therefore what treatments will work best, may be entirely different.</p>
            <br>

        <p class="info-mainHeading">A few things to note:</p>
        <p class="info-text" style="text-align:justify;margin-right:100px;">  
            <br>A diagnosis can only be supplied by a health professional.
            <br>If you feel sad, stressed, anxious or struggling with something that the information does not cover, 
            please consider other options that feels right for you to further assist you.
            <br>Please seek a medical or mental health professional with further questions 
            on your mental health. The most important thing is to recognise the signs and symptoms and seek support.</p>
        <br>

        <p class="info-mainHeading">Videos on Depression</p>
        <div class="info-videos">
            <div class="iframe-container">
                <iframe src="https://www.youtube.com/embed/XiCrniLQGYc"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="iframe-container">
                <iframe src="https://www.youtube.com/embed/X-fAEMgQnt8"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

</body>

</html>