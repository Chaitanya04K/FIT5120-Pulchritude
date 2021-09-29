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
    <link rel="stylesheet" href="checklist.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <?php include 'navbar.php'; ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="homepage.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">K10 Checklist</li>
        </ol>
    </nav>
    
    <h2>K10 Anxiety & Depression Checklist</h2>
    <p class="a">The K10 is widely recommended as a simple measure of psychological distress and as a measure of outcomes following treatment for common mental health disorders. The K10 is in the public domain and is promoted on the Clinical Research Unit for 
        Anxiety and Depression website (www.crufad.org) as a self report measure to identify need for treatment.
        <br><br>
        Please choose the options based on real feelings about yourself.
    </p>
    <hr>
    <div class="checklist depressionChecklist container">
        <header class="sfClearfix">
            <div class="col1">In the past 4 weeks...</div>
            <div class="col2">None of the time</div>
            <div class="col3">A little of the time</div>
            <div class="col4">Some of the time</div>
            <div class="col5">Most of the time</div>
            <div class="col6">All of the time</div>
        </header>
        <ol class="sfClearfix zebra">
            <li>
                <div class="col1">
                    About how often did you feel tired out for no good reason?
                    <span id="MainContentPlaceholder_C005_ctl00_ctl00_valQuestion1" style="display:none;">Question 1 is mandatory</span>
                </div>
                <div class="col2">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_1_1" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_1_1" class="offScreen">None of the time</label>
                    <div class="display-mobile">Never</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_1_1" type="radio" name="n1" value="1">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col3">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_1_2" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_1_2" class="offScreen">A little of the time</label>
                    <div class="display-mobile">Little</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_1_2" type="radio" name="n1" value="2">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col4">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_1_3" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_1_3" class="offScreen">Some of the time</label>
                    <div class="display-mobile">Some</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_1_3" type="radio" name="n1" value="3">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col5">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_1_4" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_1_4" class="offScreen">Most of the time</label>
                    <div class="display-mobile">Most</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_1_4" type="radio" name="n1" value="4">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col6">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_1_5" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_1_5" class="offScreen">All of the time</label>
                    <div class="display-mobile">Always</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_1_5" type="radio" name="n1" value="5">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
            </li>
            <li>
                <div class="col1">
                    About how often did you feel nervous?
                    <span id="MainContentPlaceholder_C005_ctl00_ctl00_valQuestion2" style="display:none;">Question 2 is mandatory</span>
                </div>
                <div class="col2">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_2_1" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_2_1" class="offScreen">None of the time</label>
                    <div class="display-mobile">Never</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_2_1" type="radio" name="n2" value="1">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col3">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_2_2" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_2_2" class="offScreen">A little of the time</label>
                    <div class="display-mobile">Little</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_2_2" type="radio" name="n2" value="2">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col4">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_2_3" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_2_3" class="offScreen">Some of the time</label>
                    <div class="display-mobile">Some</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_2_3" type="radio" name="n2" value="3">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col5">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_2_4" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_2_4" class="offScreen">Most of the time</label>
                    <div class="display-mobile">Most</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_2_4" type="radio" name="n2" value="4">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col6">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_2_5" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_2_5" class="offScreen">All of the time</label>
                    <div class="display-mobile">Always</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_2_5" type="radio" name="n2" value="5">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
            </li>
            <li>
                <div class="col1">
                    About how often did you feel so nervous that nothing could calm you down?
                    <span id="MainContentPlaceholder_C005_ctl00_ctl00_valQuestion3" style="display:none;">Question 3 is mandatory</span>
                </div>
                <div class="col2">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_3_1" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_3_1" class="offScreen">None of the time</label>
                    <div class="display-mobile">Never</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_3_1" type="radio" name="n3" value="1">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col3">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_3_2" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_3_2" class="offScreen">A little of the time</label>
                    <div class="display-mobile">Little</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_3_2" type="radio" name="n3" value="2">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col4">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_3_3" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_3_3" class="offScreen">Some of the time</label>
                    <div class="display-mobile">Some</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_3_3" type="radio" name="n3" value="3">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col5">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_3_4" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_3_4" class="offScreen">Most of the time</label>
                    <div class="display-mobile">Most</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_3_4" type="radio" name="n3" value="4">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col6">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_3_5" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_3_5" class="offScreen">All of the time</label>
                    <div class="display-mobile">Always</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_3_5" type="radio" name="n3" value="5">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
            </li>
            <li>
                <div class="col1">
                    About how often did you feel hopeless?
                    <span id="MainContentPlaceholder_C005_ctl00_ctl00_valQuestion4" style="display:none;">Question 4 is mandatory</span>
                </div>
                <div class="col2">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_4_1" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_4_1" class="offScreen">None of the time</label>
                    <div class="display-mobile">Never</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_4_1" type="radio" name="n4" value="1">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col3">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_4_2" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_4_2" class="offScreen">A little of the time</label>
                    <div class="display-mobile">Little</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_4_2" type="radio" name="n4" value="2">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col4">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_4_3" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_4_3" class="offScreen">Some of the time</label>
                    <div class="display-mobile">Some</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_4_3" type="radio" name="n4" value="3">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col5">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_4_4" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_4_4" class="offScreen">Most of the time</label>
                    <div class="display-mobile">Most</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_4_4" type="radio" name="n4" value="4">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col6">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_4_5" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_4_5" class="offScreen">All of the time</label>
                    <div class="display-mobile">Always</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_4_5" type="radio" name="n4" value="5">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
            </li>
            <li>
                <div class="col1">
                    About how often did you feel restless or fidgety?
                    <span id="MainContentPlaceholder_C005_ctl00_ctl00_valQuestion5" style="display:none;">Question 5 is mandatory</span>
                </div>
                <div class="col2">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_5_1" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_5_1" class="offScreen">None of the time</label>
                    <div class="display-mobile">Never</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_5_1" type="radio" name="n5" value="1">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col3">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_5_2" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_5_2" class="offScreen">A little of the time</label>
                    <div class="display-mobile">Little</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_5_2" type="radio" name="n5" value="2">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col4">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_5_3" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_5_3" class="offScreen">Some of the time</label>
                    <div class="display-mobile">Some</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_5_3" type="radio" name="n5" value="3">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col5">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_5_4" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_5_4" class="offScreen">Most of the time</label>
                    <div class="display-mobile">Most</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_5_4" type="radio" name="n5" value="4">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col6">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_5_5" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_5_5" class="offScreen">All of the time</label>
                    <div class="display-mobile">Always</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_5_5" type="radio" name="n5" value="5">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
            </li>
            <li>
                <div class="col1">
                    About how often did you feel so restless you could not sit still?
                    <span id="MainContentPlaceholder_C005_ctl00_ctl00_valQuestion6" style="display:none;">Question 6 is mandatory</span>
                </div>
                <div class="col2">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_6_1" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_6_1" class="offScreen">None of the time</label>
                    <div class="display-mobile">Never</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_6_1" type="radio" name="n6" value="1">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col3">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_6_2" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_6_2" class="offScreen">A little of the time</label>
                    <div class="display-mobile">Little</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_6_2" type="radio" name="n6" value="2">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col4">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_6_3" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_6_3" class="offScreen">Some of the time</label>
                    <div class="display-mobile">Some</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_6_3" type="radio" name="n6" value="3">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col5">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_6_4" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_6_4" class="offScreen">Most of the time</label>
                    <div class="display-mobile">Most</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_6_4" type="radio" name="n6" value="4">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col6">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_6_5" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_6_5" class="offScreen">All of the time</label>
                    <div class="display-mobile">Always</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_6_5" type="radio" name="n6" value="5">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
            </li>
            <li>
                <div class="col1">
                    About how often did you feel depressed?
                    <span id="MainContentPlaceholder_C005_ctl00_ctl00_valQuestion7" style="display:none;">Question 7 is mandatory</span>
                </div>
                <div class="col2">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_7_1" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_7_1" class="offScreen">None of the time</label>
                    <div class="display-mobile">Never</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_7_1" type="radio" name="n7" value="1">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col3">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_7_2" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_7_2" class="offScreen">A little of the time</label>
                    <div class="display-mobile">Little</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_7_2" type="radio" name="n7" value="2">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col4">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_7_3" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_7_3" class="offScreen">Some of the time</label>
                    <div class="display-mobile">Some</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_7_3" type="radio" name="n7" value="3">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col5">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_7_4" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_7_4" class="offScreen">Most of the time</label>
                    <div class="display-mobile">Most</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_7_4" type="radio" name="n7" value="4">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col6">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_7_5" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_7_5" class="offScreen">All of the time</label>
                    <div class="display-mobile">Always</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_7_5" type="radio" name="n7" value="5">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
            </li>
            <li>
                <div class="col1">
                    About how often did you feel that everything was an effort?
                    <span id="MainContentPlaceholder_C005_ctl00_ctl00_valQuestion8" style="display:none;">Question 8 is mandatory</span>
                </div>
                <div class="col2">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_8_1" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_8_1" class="offScreen">None of the time</label>
                    <div class="display-mobile">Never</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_8_1" type="radio" name="n8" value="1">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col3">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_8_2" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_8_2" class="offScreen">A little of the time</label>
                    <div class="display-mobile">Little</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_8_2" type="radio" name="n8" value="2">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col4">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_8_3" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_8_3" class="offScreen">Some of the time</label>
                    <div class="display-mobile">Some</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_8_3" type="radio" name="n8" value="3">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col5">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_8_4" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_8_4" class="offScreen">Most of the time</label>
                    <div class="display-mobile">Most</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_8_4" type="radio" name="n8" value="4">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col6">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_8_5" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_8_5" class="offScreen">All of the time</label>
                    <div class="display-mobile">Always</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_8_5" type="radio" name="n8" value="5">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
            </li>
            <li>
                <div class="col1">
                    About how often did you feel so sad that nothing could cheer you up?
                    <span id="MainContentPlaceholder_C005_ctl00_ctl00_valQuestion9" style="display:none;">Question 9 is mandatory</span>
                </div>
                <div class="col2">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_9_1" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_9_1" class="offScreen">None of the time</label>
                    <div class="display-mobile">Never</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_9_1" type="radio" name="n9" value="1">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col3">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_9_2" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_9_2" class="offScreen">A little of the time</label>
                    <div class="display-mobile">Little</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_9_2" type="radio" name="n9" value="2">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col4">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_9_3" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_9_3" class="offScreen">Some of the time</label>
                    <div class="display-mobile">Some</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_9_3" type="radio" name="n9" value="3">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col5">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_9_4" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_9_4" class="offScreen">Most of the time</label>
                    <div class="display-mobile">Most</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_9_4" type="radio" name="n9" value="4">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col6">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_9_5" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_9_5" class="offScreen">All of the time</label>
                    <div class="display-mobile">Always</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_9_5" type="radio" name="n9" value="5">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
            </li>
            <li>
                <div class="col1">
                    About how often did you feel worthless?
                    <span id="MainContentPlaceholder_C005_ctl00_ctl00_valQuestion10" style="display:none;">Question 10 is mandatory</span>
                </div>
                <div class="col2">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_10_1" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_10_1" class="offScreen">None of the time</label>
                    <div class="display-mobile">Never</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_10_1" type="radio" name="n10" value="1">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col3">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_10_2" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_10_2" class="offScreen">A little of the time</label>
                    <div class="display-mobile">Little</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_10_2" type="radio" name="n10" value="2">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col4">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_10_3" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_10_3" class="offScreen">Some of the time</label>
                    <div class="display-mobile">Some</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_10_3" type="radio" name="n10" value="3">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col5">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_10_4" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_10_4" class="offScreen">Most of the time</label>
                    <div class="display-mobile">Most</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_10_4" type="radio" name="n10" value="4">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
                <div class="col6">
                    <label for="MainContentPlaceholder_C005_ctl00_ctl00_chk_10_5" id="MainContentPlaceholder_C005_ctl00_ctl00_lbl_10_5" class="offScreen">All of the time</label>
                    <div class="display-mobile">Always</div>
                    <div class="fancy-radio-alone">
                        <input id="MainContentPlaceholder_C005_ctl00_ctl00_chk_10_5" type="radio" name="n10" value="5">
                        <span class="checkbox-icon"></span>
                    </div>
                </div>
            </li>
        </ol>
        <div style="text-align:center" class="buttonWrap">
			<button id="show" class="button btn-primary" style="margin-right: 50px;cursor: pointer;">
			Next page
			</button>
            <input type="submit" name="" value="Submit" onclick="" id="tijiao" class="button buttonLarge includeDisable">
        </div>
    </div>

    <table border="5" cellpadding="0" cellspacing="0" style="width: 75%;margin:auto">
            <tbody>
                <tr>
                    <th style="text-align: center;background-color: #f49e4c;height:50px">
                        What happens next?
                    </th>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>Your responses will help us provide you the range of distress that you currently fall into, which can give you a better indication of how you are feeling.<br>A few things to note:</li>
                            <ul>
                                <li style="list-style-type:square">This checklist does not give you a diagnosis</li>
                                <li style="list-style-type:square">Please contact a health professional for a diagnosis.</li>
                            </ul>
                            <br>
                            <li>Reference: Professor Ronald C Kessler of the Department of Health Care Policy, Harvard Medical School is thanked for the use of research on the K10 funded by US Public Health Service Grants RO1 MH46376, R01 MH52861, RO1 MH49098, and K05 MH00507 and by the John D and Catherine T MacArthur Foundation Network on Successful Midlife Development (Gilbert Brim, Director).</li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>

    <!-- <div class="footer">
        <a href="index.php" style="text-decoration: none;
        color: white;
        font-size: 1.6rem;
        font-weight: 600;">Brainguard</a>
        <p>Copyright &copy; 2021</p>
    </div> -->

    <?php include 'footer.php'; ?>

<script>
$(function(){
	var lis=$('.zebra>li');
	lis.each(function(index){
		if(index>=5){
			$(this).hide()
		}
	});
	var f=true;
	$('#show').click(function(){
		if(f){
			lis.each(function(index){
				
				if(index>=5){
					lis.eq(index).show()
				}
				else{
					lis.eq(index).hide()
				}
			});
			$(this).text('Previous page');
			f=false;
		}
		else{
			lis.each(function(index){
				
				if(index>=5){
					lis.eq(index).hide()
				}
				else{
					lis.eq(index).show()
				}
			});
			$(this).text('Next page');
			f=true;
		}
	});
	
	$("#tijiao").click(function(){
		var score=0;
		var flag=true;
		for(var i=1;i<=10;i++){
			var check_v=$("input[name=n"+i+"]:checked").val();
			if(check_v==null){
				flag=false;
				alert('Please ensure that all questions are answered.');
				break; 
			}
			score+=Number(check_v);
		}
		if(flag){
			var score_arr=[
				[0,9],
				[10,15],
				[16,21],
				[22,29],
				[30,50],
			];
			var score_arr_level=[
				"Level of psychological distress",
				"Low",
				"Moderate",
				"High",
				"Very_High",
			];
            var score_index=[
                0,
                1,
                2,
                3,
                4,
            ];
			var level="";
            var index=0;
			for(var j=0;j<score_arr.length;j++){
				console.log(score_arr[j])
				if(score>=score_arr[j][0]&&score<=score_arr[j][1]){
					level=score_arr_level[j]
                    index=score_index[j];
				}
			}
			window.location.href="getInfo" + index + ".php?score="+score+"&level="+level+"&index="+index;
		}
	})
})
</script>
</body>

</html>