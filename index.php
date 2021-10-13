<head>
    <!-- CSS -->
    <link rel="stylesheet" href="authenticate.css">
</head>

<body>
<<<<<<< HEAD
<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
        <!-- <img class="brand-logo-brainguard" src="images/brainstorm_logo.png" alt="brand_logo"> -->
        <a href="index.php" class="navbar-brand font-weight-bold">Brainguard</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarMenu">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Information and Support
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="getInfo.html">Information on Depression</a>
                        <a href="getSupport.html" class="dropdown-item">Find support</a>
                        <a class="dropdown-item" href="graphs.html">Statistics on Depression</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Chatroom</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Mood diary</a>
                </li>
                <li class="nav-item">
                    <a href="checklist.html" class="nav-link">K10 checklist</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 banner-heading">You are Not Alone</h1>
            <p class="lead banner-subheading">Need someone to talk to?</p>
            <a href="tel:0435976608" class="actionBtn">Call: Lifeline 13 11 14</a>
        </div>
    </div>
=======
>>>>>>> iteration-3

    <div class="authenticate-container">
        <h1>Welcome to Brainguard, Please identify yourself to continue...</h1>
        <input class="authenticate-username-input" type="text" name="username" id="username">
        <input class="authenticate-password-input" type="password" name="password" id="password">
        <button class="authenticate-submit" onclick='authenticate();'>Login</button>
    </div>

    <!-- Simple script to authenticate users -->
    <script>
        function authenticate() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            if (username == "fit5120" && password == "team04") {
                <?php $authenticated = true; ?>
                window.location.href = "homepage.php"
            } else {
                alert("WRONG CREDENTIALS! PLEASE TRY AGAIN!")
            }
        }
    </script>
</body>