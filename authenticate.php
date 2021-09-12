<head>
    <!-- CSS -->
    <link rel="stylesheet" href="authenticate.css">
</head>

<body>

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
                window.location.replace("index.php")
            } else {
                alert("WRONG CREDENTIALS! PLEASE TRY AGAIN!")
            }
        }
    </script>
</body>
