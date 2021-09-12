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
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="checklist.php">K10 Checklist</a></li>
            <li class="breadcrumb-item active" aria-current="page">K10 Result</li>
        </ol>
    </nav>
    <br>

    <div class="container">
        <div align="center" style="    color: #009BC9;
    font-weight: bold; font-size: 40px;">
            Your K10 score is <b id="score"></b>
        </div>
        <div align="center" style="    color: #009BC9;
    font-weight: bold; font-size: 40px;">
            You have a <b id="level"></b> level of psychological distress
        </div>
        <br>
        <div style="text-align:center">
            <table border="5" cellpadding="3" cellspacing="0" style="width: 60%;margin:auto">
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
                    <td>30-50</td>
                    <td>Very High</td>
                </tr>
            </table>
        </div>

        <br>

        <table border="1">
            <tbody>
                <tr>
                    <th style="text-align: center;background-color: #f49e4c;">
                        Things to Note:
                    </th>
                </tr>
                <tr>
                    <td>
                        <p><b>Please remember that this result is not a diagnosis.</b>
                            This checklist may not have assessed everything that is going on for you.</p>
                        <br>
                        <p>If you feel sad, stressed, anxious or are struggling with something else that is not covered 
                             in the checklist, you should consider other options for further assistance that 
                            feel right for you at this time.</p>
                    </td>
                </tr>
            </tbody>
        </table>

        <br>

        <table border="1">
            <tr>
                <th style="text-align: center;background-color: #009BC9;">
                    What does my score mean?
                </th>
            </tr>
            <tr>
                <td>
                    <div style="font-size: 20px; font-weight: bold;color:#00b4d8;">Low:</div>
                    <p>Your score falls into the low range, which means you’ve likely been experiencing little or no symptoms of distress in the past four weeks.</p>
                    <br>
                    <div style="font-size: 20px; font-weight: bold;color:#0096c7;">Moderate:</div>
                    <p>Your score falls into the moderate range, which means you’ve likely been experiencing symptoms of distress for a little or some of the time over the past four weeks.</p>
                    <br>
                    <div style="font-size: 20px; font-weight: bold;color: #0077b6;">High:</div>
                    <p>Your score falls into the high range, which means you’ve likely been experiencing symptoms of distress for some of the time over the past four weeks.</p>
                    <br>
                    <div style="font-size: 20px; font-weight: bold;color: #023e8a;">Very High:</div>
                    <p>Your score falls into the very high range, which means you’ve likely been experiencing symptoms of distress for a lot of the time over the past four weeks.</p>
                </td>
            </tr>
        </table>

    </div>

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