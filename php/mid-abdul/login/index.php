<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <form method="post" id="loginForm">
        <div>
            <label>Username:</label>
            <input type="text" name="username">
        </div>
        <div>
            <label>Password:</label>
            <input type="password" name="password">
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
        <br>
    </form>
    <div id="result"><em>uname=abdul - pass=gemilang</em></div>
    <script>
        $(document).ready(function() {
            $("#loginForm").submit(function(event) {
                event.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    url: "process-login.php",
                    type: "POST",
                    data: formData,
                    success: function(response) {
                        $("#result").html(response);
                    }
                });
            });
        });
    </script>
</body>

</html>