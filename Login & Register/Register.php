<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="Login_style.css">
</head>

<body>


    <div class="bg">
        <div class="login-box">
            <h2>Register</h2>
            <form method="post" name="form">
                <div class="user-box">
                    <input type="text" name="name">
                    <label>Username</label>
                </div>
                <div id="name_error">Username is required</div>
                <div class="user-box">
                    <input type="text" name="number">
                    <label>Contact Number</label>
                </div>
                <div id="number_error">Number is required</div>
                <div class="user-box">
                    <input type="email" name="email">
                    <label>Email</label>
                </div>
                <div id="email_error">Email is required</div>
                <div class="user-box">
                    <input type="password" name="password">
                    <label>Password</label>
                </div>
                <div id="pass_error">Password is required</div>
                <div>
                    <h5>Already have an account? <a href="login.php">Login</a></h5>
                </div>
                <input type="button" value="Register" id="registerBtn">
                <!-- <a type="submit" href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Register
                </a> -->
            </form>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="../js/Form_Validation.js"></script> -->

    <script>
    $(document).ready(function() {
        $("#registerBtn").click(function() {

            var name = $("input[name='name']").val();
            var email = $("input[name='email']").val();
            var number = $("input[name='number']").val();
            var password = $("input[name='password']").val();

            if (name === '') {
                $("#name_error").css("display", "block");
            }
            if (email === '') {
                $("#email_error").css("display", "block");
            }
            if (number === '') {
                $("#number_error").css("display", "block");
            }
            if (password === '') {
                $("#pass_error").css("display", "block");
            }

        });
    });
    </script>

</body>

</html>