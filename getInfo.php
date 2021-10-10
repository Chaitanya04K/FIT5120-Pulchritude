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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <?php include 'navbar.php'; ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="homepage.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About Depression</li>
        </ol>
    </nav>

    <div class="jumbotron learnAboutDepression jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 banner-heading learnAboutDepression">Depression can happen to anyone</h1>
            <p class="lead banner-subheading learnAboutDepression">60% of International students studying in Victoria
                are dealing with Depression and other mental health conditions</p>
            <a href="tel:131114" class="actionBtn">Call: Lifeline 13 11 14</a>
        </div>
    </div>

    <div class="container-fluid hide-for-mobile">
        <div class="row">
            <div class="info-card-container col-12">
                <div class="info-card">
                    <p>Research suggests that the mental health of university students is <span> more poor </span> than
                        that of the general population in many countries.</p>
                </div>
                <div class="info-card">
                    <p>Social isolation, loneliness, study pressure, cultural difference, and economic burden exposes international uni students to the threat of depression. A highly concerning <span>30%</span> of students have had thoughts of self-harm</p>
                </div>
                <div class="info-card">
                    <p>International students have a <span> higher risk </span> of depression, but they are <span>
                            less </span> likely to use the health services.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="info-card one">
                    <p>Research suggests that the mental health of university students is <span> more poor </span> than
                        that of the general population in many countries.</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="info-card two">
                    <p>Social isolation, loneliness, study pressure, cultural difference, and economic burden exposes international uni students to the threat of depression. A highly concerning <span>30%</span> of students have had thoughts of self-harm</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="info-card three">
                    <p>International students have a <span> higher risk </span> of depression, but they are <span>
                            less </span> likely to use the health services.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- <div class="container-fluid">
        <div class="row">
            <div class="cardSection col-12">
                <div class="card graph">
                    <div class="card-horizontal">
                        <div class="img-square-wrapper graph"></div>
                        <div class="card-body">
                            <h4 class="card-title">Some graph</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias mollitia corrupti molestiae eos assumenda ex saepe nulla sunt impedit eligendi minima adipisci consequatur sed expedita dolorum voluptate rerum, qui veniam?</p>
                            <a href="getInfo.php" class="actionBtn btn-right">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="container-fluid">
        <div class="row">
            <div class="cardSection col-12">
                <div class="card">
                    <div class="card-horizontal">
                        <div class="img-square-wrapper signs"></div>
                        <div class="card-body">
                            <h4 class="card-title">Causes</h4>
                            <p class="card-text">Find out more about the causes and contributing factors of depression.</p>
                            <a href="causes.php" class="actionBtn btn-right">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="causes-and-treatment-container">
        <a href="signsandsymptoms.php" class="link-card">
            <div class="icon-svg causes"></div>
            <p class="svg-title">Signs and Symptoms</p>
            <p class="svg-subTitle">What are some things you shoud keep an eye out
                which would be important for yourself or others?</p>
            <div class="actionBtn-div">Learn more</div>
        </a>
        <a href="treatment.php" class="link-card">
            <div class="icon-svg treatment"></div>
            <p class="svg-title">Treatment</p>
            <p class="svg-subTitle">Common approaches and treatments to help you cope and recover from depression</p>
            <div class="actionBtn-div">Learn more</div>
        </a>
    </div>

    <?php include 'footer.php'; ?>
</body>

</html>