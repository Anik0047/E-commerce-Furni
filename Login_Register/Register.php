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
                    <label>Username</label>
                    <input type="text" name="name">
                </div>
                <div id="name_error">Username is required</div>
                <div class="user-box">
                    <label>Contact Number</label>
                    <input type="text" name="number">
                </div>
                <div id="number_error">Number is required</div>
                <div class="user-box">
                    <label>Email</label>
                    <input type="email" name="email">
                </div>
                <div id="email_error">Email is required</div>
                <div class="user-box">
                    <label>Password</label>
                    <input type="password" name="password" autocomplete="off">
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
        // Function to validate input fields
        function validateFields() {
            var name = $("input[name='name']").val();
            var email = $("input[name='email']").val();
            var number = $("input[name='number']").val();
            var password = $("input[name='password']").val();

            // Regular expression for email validation
            var usernameRegex = /^[a-zA-Z0-9]+$/;
            var numberRegex = /^\d{11}$/;
            var emailRegex = /^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+$/;
            // Regular expression for password validation
            var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

            // Check each field and display error message if empty
            // if (name === '') {
            //     $("#name_error").show();
            // } else if (!usernameRegex.test(name)) {
            //     $("#name_error").text("Username can only contain letters and numbers").show();
            // }
            // if (email === '') {
            //     $("#email_error").show();
            // } else if (!emailRegex.test(email)) {
            //     $("#email_error").text("Invalid email format").show();
            // }
            // if (number === '') {
            //     $("#number_error").show();
            // } else if (!numberRegex.test(number)) {
            //     $("#number_error").text("Contact number must be a 11-digit number").show();
            // }
            // if (password === '') {
            //     $("#pass_error").show();
            // } else if (!passwordRegex.test(password)) {
            //     $("#pass_error").text(
            //         "Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character"
            //     ).show();
            // }

            // If all fields are valid, make AJAX call
            if (name !== '' && email !== '' && number !== '' && password !== '') {
                $.ajax({
                    url: '../Admin_Area/user_upsert.php',
                    method: 'POST',
                    data: {
                        name: name,
                        email: email,
                        number: number,
                        password: password
                    },
                    success: function(response) {
                        console.log('Response:', response);
                        if (response.status) {
                            console.log('Status is true');
                            alert("Hello! I am an alert box!!");
                        } else {
                            console.log('Status is false');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            }
        }

        // Validate fields on input event
        $("input[name='name']").on('input', function() {
            $("#name_error").hide();
        });
        $("input[name='email']").on('input', function() {
            $("#email_error").hide();
        });
        $("input[name='number']").on('input', function() {
            $("#number_error").hide();
        });
        $("input[name='password']").on('input', function() {
            $("#pass_error").hide();
        });

        // Validate fields on register button click
        $("#registerBtn").click(function() {
            validateFields();
        });
    });
    </script>
</body>

</html>