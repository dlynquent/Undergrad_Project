<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$firstname = "";
$lastname = "";
$email = "";
$password = "";
$confirm_password = "";
$usertype = "";
$firstname_err = "";
$lastname_err = "";
$email_err = "";
$password_err = "";
$confirm_password_err = "";
$usertype_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
  $firstname = trim($_POST["firstname"]);
  $lastname = trim($_POST["lastname"]);
  
 
    // Validate email
    if(empty(trim($_POST["email"]))){
      $email_err = "Please enter an email.";
    }
    else{
        // Prepare a select statement
        $sql = "SELECT 'user_id' FROM users WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "This email has already been registered.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database

    if(empty($firstname_err) && empty($lastname_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err) && empty($usertype_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (first_name, last_name, email, password, user_type) VALUES (?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_firstname, $param_lastname, $param_email, $param_password, $param_usertype,);
            
            // Set parameters
            $param_firstname = $firstname;
            $param_lastname = $lastname;  
            $param_email = $email; 
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_usertype = 'user'; 
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
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
    <title>Register</title>
    <?php include 'include\head.php'; ?>
</head>

<body>
    <div class="container px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-md-6">
                    <div class="card1 pb-5">
                        <div class="row"> <img src="https://via.placeholder.com/140x100" class="logo"> </div>
                        <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img
                                src="https://via.placeholder.com/150" class="image"> </div>
                    </div>
                </div>
                <div class="col-lg-6">

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="card2 card border-0 px-4 py-5">
                            <h1 class="mb-5 text-lg">Create account</h1>
                            <div class="row px-3 <?php echo (!empty($firstname_err)) ? 'has-error' : ''; ?>">
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Email Address</h6>
                                </label>
                                <input type="text" name="firstname" class="form-control"
                                    placeholder="Enter your First Name" value="<?php echo $firstname; ?>">
                                <span class="help-block"><?php echo $firstname_err; ?></span>
                            </div>

                            <div class="row px-3 <?php echo (!empty($lastname_err)) ? 'has-error' : ''; ?>">
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Email Address</h6>
                                </label>
                                <input type="text" name="lastname" class="form-control"
                                    placeholder="Enter your Last Name" value="<?php echo $lastname; ?>">
                                <span class="help-block"><?php echo $lastname_err; ?></span>
                            </div>

                            <div class="row px-3 <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Email Address</h6>
                                </label>
                                <input type="email" name="email" class="form-control"
                                    placeholder="Enter your email address" value="<?php echo $email; ?>">
                                <span class="help-block"><?php echo $email_err; ?></span>
                            </div>

                            <div class="row px-3 <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Email Address</h6>
                                </label>
                                <input type="password" name="password" class="form-control" placeholder="Enter Password"
                                    value="<?php echo $password; ?>">
                                <span class="help-block"><?php echo $password_err; ?></span>
                            </div>

                            <div class="row px-3 <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Email Address</h6>
                                </label>
                                <input type="password" name="confirm_password" class="form-control"
                                    placeholder="Re-enter password" value="<?php echo $password; ?>">
                                <span class="help-block"><?php echo $password_err; ?></span>
                            </div>

                            <div class="row mb-4 px-3"> <small class="font-weight-bold">By continuing you agree to
                                    Qwixs's <a href="#" class="text-danger ">Conditions of use</a> and <a href="#"
                                        class="text-danger">Privacy Notice</a> </small>
                            </div>

                            <div class="row mb-3 px-3"> <button type="submit"
                                    class="btn btn-blue-reg text-center">Create
                                    your Qwixs account</button> </div>
                            <div class="row mb-4 px-3"> <small class="font-weight-bold">Already have an
                                    account? <a href="login.php" class="text-danger ">Sign-In</a></small>
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
                            class="fa fa-linkedin mr-4 text-sm"></span>
                        <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>