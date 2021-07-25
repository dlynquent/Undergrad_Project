<?php

// Initialize the session
session_start();

//Page ID

$pageID = "SellerLogin";

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: index.php");
    exit;
}

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$email = "";
$password = "";
$email_err = "";
$password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {



    // Check if email is empty
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter email.";
    } else {
        $email = trim($_POST["email"]);
    }

    // Check if password is empty
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if (empty($email_err) && empty($password_err)) {
        // Prepare a select statement
        $sql = "SELECT 'user_id', email, password FROM users WHERE email = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);

            // Set parameters
            $param_email = $email;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if email exists, if yes then verify password
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password);
                    if (mysqli_stmt_fetch($stmt)) {
                        if (password_verify($password, $hashed_password)) {
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;

                            // Redirect user to welcome page
                            header("location: homepage.php");
                        } else {
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else {
                    // Display an error message if email doesn't exist
                    $email_err = "No account found with that email.";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($link);
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>QWIXS Login</title>
    <?php include 'include/head.php'; ?>
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>
    <div class="container px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card selcard0 border-0">
            <div class="row d-flex">

                <div class="col-lg-6">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="scard2 card border-0 px-4 py-5">
                            <h1 class="mb-5 text-lg">Seller Central Sign-In</h1>
                            <div class="row px-3"> <label class="mb-1"
                                    <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>>
                                    <h6 class="mb-0 text-sm">Email Address</h6>
                                </label>
                                <input class="mb-4" type="email" name="email" placeholder="Enter a valid email address"
                                    value="<?php echo $email; ?>">
                                <span class="help-block"><?php echo $email_err; ?></span>
                            </div>
                            <div class="row px-3"> <label class="mb-1"
                                    <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                                    <h6 class="mb-0 text-sm">Password</h6>
                                </label> <input type="password" name="password" placeholder="Enter password">
                                <span class="help-block"><?php echo $password_err; ?></span>
                            </div>
                            <div class="row px-3 mb-4">
                                <div class="custom-control custom-checkbox custom-control-inline"> <input id="chk1"
                                        type="checkbox" name="chk" class="custom-control-input"> <label for="chk1"
                                        class="custom-control-label text-sm">Remember me</label> </div> <a href="#"
                                    class="ml-auto mb-0 text-sm">Forgot Password?</a>
                            </div>


                            <div class="row mb-4 px-3"> <small class="font-weight-bold">By continuing you agree to
                                    Qwixs's <a href="#" class="text-danger ">Conditions of use</a> and <a href="#"
                                        class="text-danger">Privacy Notice</a> </small>
                            </div>

                            <div class="row mb-3 px-3"> <button type="submit"
                                    class="btn btn-blue text-center">Login</button> </div>
                            <div class="row mb-4 px-3"> <small class="font-weight-bold">Don't have an account? <a
                                        class="text-danger ">Register</a></small> </div>
                        </div>
                        <div class="logos col-md-6 offset-md-6">
                            <div class="card1 pb-5">
                                <div class="row"> <img src="https://via.placeholder.com/140x100" class="sellogo"> </div>
                                <div class="row px-3 justify-content-center mt-4 mb-5 selborder-line"> <img
                                        src="https://via.placeholder.com/150" class="selimage"> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="bg-blue py-4">
                <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2021. All rights
                        reserved.</small>
                    <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span
                            class="fa fa-google-plus mr-4 text-sm"></span> <span
                            class="fa fa-linkedin mr-4 text-sm"></span> <span
                            class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>