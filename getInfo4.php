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

    <style>
    .sidebar {
        margin: 0;
        padding: 0;
        width: 200px;
        background-color: #1E7ED1;
        position: absolute;
        height: 100%;
        overflow: auto;
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
    div.container {
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
        div.container {margin-left: 0;}
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
            <li class="breadcrumb-item"><a href="homepage.php">Home</a></li>
            <li class="breadcrumb-item"><a href="checklist.php">K10 Checklist</a></li>
            <li class="breadcrumb-item active" aria-current="page">K10 Result</li>
        </ol>
    </nav>
    <br>

    <div class="sidebar">
        <h4 style="text-align:center;color:white;font-weight:bold;font-size:30px">Support</h4>
        <a href="getSupport.php" style="font-size:23px;color:white;">Mental Health Services</a>
        <a href="moodDiary.php" style="font-size:23px;color:white;">Mood Diary</a>
        <a href="signsandsymptoms.php" style="font-size:23px;color:white;">Depression Symptoms</a>
        <a href="causes.php" style="font-size:23px;color:white;">Depression Causes</a>
    </div>

    <div class="container">
        <div align="center" style="    color: #009BC9;
    font-weight: bold; font-size: 40px;">
            Your K10 score is <b id="score" style="color:purple;"></b>
        </div>
        <div align="center" style="    color: #009BC9;
    font-weight: bold; font-size: 40px;">
            You have a <b id="level" style="color:purple;"></b> level of psychological distress
        </div>
        <br>
        <div style="text-align:center">
            <table border="5" cellpadding="3" cellspacing="0" style="width: 70%;margin:auto">
                <tr>
                    <th>K10 score</th>
                    <th>Level of psychological distress</th>
                </tr>
                <tr>
                    <td>10-15</td>
                    <td>Low</td>
                </tr>
                <tr>
                    <td>16-21</td>
                    <td>Moderate</td>
                </tr>
                <tr>
                    <td>22-29</td>
                    <td>High</td>
                </tr>
                <tr>
                    <td style="background-color:#FBFEB3;">30-50</td>
                    <td style="background-color:#FBFEB3;">Very High</td>
                </tr>
            </table>
        </div>

        <br>
        <br>
        <br>

        <table class="guide" style="width:70%;margin:auto;border-radius:1em;overflow: hidden;">
            <tr>
                <th style="text-align: center;background-color: #0E76BA;height:50px">
                    What does my score mean?
                </th>
            </tr>
            <!-- <tr >
                <td>
                    <div style="font-size: 20px; font-weight: bold;color:#00b4d8;">10-15:</div>
                    <p>CONGRATULATIONS! You have a low level of psychological distress, which means you’ve likely been well in the past four weeks.</p>
                    <p>Try to do some physical activities, health diet, and health lifestyle to keep up your good mood.</p>
                <td>  
           </tr>  
           <tr >
                <td>
                    <div style="font-size: 20px; font-weight: bold;color:#0096c7;">16-21:</div>
                    <p>You have a moderate level of psychological distress, which means you’ve likely been experiencing a little symptoms of distress over the past four weeks.</p>
                    <p>You may not take it seriously. However, It may be a sign that your mental health is getting worse!</p>
                    <p>Brainguard provides some assistance. Please browse the website and find any available information.</p>
                <td>  
           </tr>
           <tr  >
                <td>
                    <div style="font-size: 20px; font-weight: bold;color: #0077b6;">22-29:</div>
                    <p>You have a high level of psychological distress, which means you’ve likely been experiencing some symptoms of distress over the past four weeks.</p>
                    <p>You may be not willing to seek help. However, it is really important to explore your options at this score range.</p>                     
                    <p>Here are some help Brainguard provides you:
                    <h4 style="color:#396C32;"><a href="https://www.google.com/">Visit chatroom!</a></h4>
                    <h4 style="color:#356883;"><a href="getSupport.php">Find mental health services!</a></h4>
                <td>  
           </tr> -->
           <tr >
                <td>
                    <br>
                    <p>You have a <span style="background-color:#FBFEB3;"> very high </span> level of psychological distress, which means you’ve likely been experiencing serious mental distress over the past four weeks.</p>
                    <p>Many people who score in this range are suffering from serious anxiety and depression. Some people 
                        may also have thoughts of self-harm or suicide.</p>
                    <p>Life could be very tough for you recently. However, please remember you are not alone! Some other 
                        international students are also experiencing serious mental distress. Brainguard will try best to 
                        help you!</p>
                </td>
            </tr>
        </table>
        <br>
        <br>
        <table class="guide" style="width:70%;margin:auto;border-radius:1em;overflow: hidden;">
            <tr>
                <th style="text-align: center;background-color: #D7AADA;height:50px">
                    Should I seek help?
                </th>
            </tr>
            <tr >
                <td>
                    <br>
                    <p>Please remember that this checklist is not a doctor diagnosis.</p>
                    <p>If you feel anything else that the checklist does not cover, please contact a mental health 
                        professional for a diagnosis.</p>
                <td>  
           </tr>
        </table>
    </div>
    <br>
    <br>
    <br>

    <?php include 'footer.php'; ?>

    
</body>
<script>
    var score = getQueryVariable('score');
    var level = getQueryVariable('level');
    $("#score").text(score);
    $("#level").text(level);
    function getQueryVariable(variable) {
        var query = window.location.search.substring(1);
        var vars = query.split("&");
        for (var i = 0; i < vars.length; i++) {
            var pair = vars[i].split("=");
            if (pair[0] == variable) {
                return pair[1];
            }
        }
        return (false);
    }
        
    
   
</script>

</html>