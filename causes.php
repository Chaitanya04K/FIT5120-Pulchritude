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
            <li class="breadcrumb-item"><a href="homepage.php">Home</a></li>
            <li class="breadcrumb-item"><a href="getInfo.php">About Depression</a></li>
            <li class="breadcrumb-item active" aria-current="page">Causes</li>
        </ol>
    </nav>

    <div class="jumbotron depression-causes jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 banner-heading learnAboutDepression">Causes of depression</h1>
            <p class="lead banner-subheading learnAboutDepression">While the exact cause or reasons why people develop
                depressive symptoms are not known, here are some general points that might help you figure out if you or
                someone you care about are suffering from depression.</p>
            <a href="tel:131114" class="actionBtn">Call: Lifeline 13 11 14</a>
        </div>
    </div>

    <div class="container">
        <p class="info-mainHeading">What causes Depression?</p>
        <p class="info-text">
            It's often said that depression results from a chemical imbalance, but that figure of speech doesn't capture
            how complex the disease is.
            Research suggests that depression doesn't spring from simply having too much or too little of certain brain
            chemicals.
            Rather, there are many possible causes of depression, which includes:
            <li>Faulty mood regulation by the brain</li>
            <li>Genetic vulnerability</li>
            <li>Stressful life events</li>
            <li>Medications</li>
            <li>Medical problems</li>
            It's believed that several of these forces interact to bring on depression.
            To be sure, chemicals are involved in this process, but it is not a simple matter of one chemical being too
            low and another too high.
            Rather, many chemicals are involved, working both inside and outside nerve cells.
            There are millions, even billions, of chemical reactions that make up the dynamic system that is responsible
            for
            your mood, perceptions, and how you experience life.
            With this level of complexity, you can see how two people might have similar symptoms of depression, but the
            problem on the inside, and therefore what treatments will work best, may be entirely different.
        </p>
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