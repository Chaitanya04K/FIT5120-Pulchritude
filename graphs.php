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
            <li class="breadcrumb-item active" aria-current="page">Statistics on Depression</li>
        </ol>
    </nav>

    <div class="jumbotron statistics jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 banner-heading">Statistics on Depression</h1>
            <p class="lead banner-subheading">Learn more information about depression in Victoria</p>
            <a href="tel:131114" class="actionBtn">Call: Lifeline 13 11 14</a>
        </div>
    </div>

    <button class="stats-tablink" onclick="openPage('PDS', this, '#FAAC58')">Level of psychological distress
        changes</button>
    <button class="stats-tablink" onclick="openPage('AD', this, '#F7D358')" id="defaultOpen">Diagnosed with anxiety or
        depression</button>

    <div id="PDS" class="stats-tabcontent">
        <h3>Changes in the level of psychological distress for Victorian adults from 2015 to 2019</h3>
        <p>The line chart visualizes the proportion (%) of adult population (18+ years), by level of psychological
            distress
            changes in Victoria over 2015-2019. The higher level of psychological distress for was the highest in 2019.
        </p>
        <p>Data is obtained from Victorian Population Health Survey by the Victorian Health Intelligence Unit</p>
        <div>
            <a href="https://plotly.com/~valho/1/?share_key=1RvSq7QKnOlq0qABEYwmPP" target="_blank"
                title="Level of Psychological Distress" style="display: block; text-align: center;"><img
                    src="https://plotly.com/~valho/1.png?share_key=1RvSq7QKnOlq0qABEYwmPP"
                    alt="Level of Psychological Distress" style="max-width: 100%;width: 600px;" width="600"
                    onerror="this.onerror=null;this.src='https://plotly.com/404.png';" /></a>
            <script data-plotly="valho:1" sharekey-plotly="1RvSq7QKnOlq0qABEYwmPP" src="https://plotly.com/embed.js"
                async></script>
        </div>
    </div>

    <div id="AD" class="stats-tabcontent">
        <h3>Proportion of adults that were diagnosed with anxiety or depression from 2015 to 2019</h3>
        <p>The line chart visualizes the proportion (%) of adult population (18+ years), with anxiety or depression
            in Victoria over 2015-2019. The proportion of adults has been gradually increasing over the years.
        </p>
        <p>Data is obtained from Victorian Population Health Survey by the Victorian Health Intelligence Unit</p>
        <div>
            <a href="https://plotly.com/~valho/3/?share_key=QtFfNWastwpG0IFAl2Uy0m" target="_blank" title="Diag_ad"
                style="display: block; text-align: center;"><img
                    src="https://plotly.com/~valho/3.png?share_key=QtFfNWastwpG0IFAl2Uy0m" alt="Diag_ad"
                    style="max-width: 100%;width: 600px;" width="600"
                    onerror="this.onerror=null;this.src='https://plotly.com/404.png';" /></a>
            <script data-plotly="valho:3" sharekey-plotly="QtFfNWastwpG0IFAl2Uy0m" src="https://plotly.com/embed.js"
                async></script>
        </div>
    </div>

    <script>
        function openPage(pageName, elmnt, color) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("stats-tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("stats-tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].style.backgroundColor = "";
            }
            document.getElementById(pageName).style.display = "block";
            elmnt.style.backgroundColor = color;
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>

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