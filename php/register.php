<?php
session_start();
if (isset($_SESSION['email']))
    header("location:home.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/register.css" />
    <link href="https://fonts.googleapis.com/css?family=Rubik+Mono+One&display=swap" rel="stylesheet">
    <title>Register page</title>
</head>

<body>
    <div class="bg-image"></div>
    <div class="container">
            <h1 style="color: black; padding: 10px;position: absolute;top: 20px;">Welcome from Tesla</h1>

    </div>

    <div class="container register">
    <?php
            if (isset($_SESSION['error'])) {?>
        <div style="margin-top: 20px;">
            <div class="alert alert-danger" role="alert">
                <?php echo ($_SESSION['error']) ?>
            </div>
        </div>
        <?php }?>
        <div class="register-frame">
            <h4 class="title-text">Create new account</h4>
            <div class="register-form">
                <form method="POST" action="./registration.php">
                    <div class="form-group">
                        <label for="user_email">Email address</label>
                        <input type="email" class="form-control" required name="email" aria-describedby="emailHelp"
                            placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="user_passwrod">Password</label>
                        <input required type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div  class="btn-frame" style="padding-bottom:10px">
                        <a class="login-btn" href="./login.php">
                            Already account?
                        </a>
                        <button type="submit" class="btn btn-primary register-btn">Register</button>
                    </div>
                </form>
            </div>
            </div>
    </div>

</body>
</html>
<?php
unset($_SESSION["error"]);
?>
