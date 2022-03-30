<?php
    session_start();

    // INITIALIZING VARIABLES

    $firstname = "";
    $lastname = "";
    $email = "";
    $errors = array();

    // CONNECT TO DB

    // $db = new mysqli_connect('localhost', 'root', 'project');

    // REGISTER A USER

    if (isset($_POST['reg_user'])) {
        // RECEIVE ALL INPUT VALUES
        $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        // $contact = mysqli_real_escape_string($db, $_POST['contact']); 
        $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

        // FORM VALIDATION

        if (empty($firstname)){ array_push($errors, "Name is required!");}
        if (empty($lastname)){ array_push($errors, "Last Name is required!");}
        if (empty($email)){ array_push($errors, "Email is required!");}
        if (empty($password_1)){ array_push($errors, "Password is required!");}
        if ($password_1 != $password_2) {array_push($errors, "Passwords do not match, Please try again");
        }

        // CHECKS DB TO ENSURE A USER DOES NOT REGISTER DETAILS TWICE

        $user_check_query = "SELECT * FROM users WHERE firstname='$firstname' OR email='$email' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);

        if ($user) {
            if ($user['firstname'] === $firstname) {
                array_push($errors, "Username already exists");
            }
            
            if ($user['email'] === $email) {
                array_push($errors, "Email already exists");
            }
        }

        // REGISTERS DETAILS IF THERE ARE NO ERRORS
        if (count($errors) == 0) {
            $password = md5($password_1);

            $query = "INSERT INTO users (firstname, email, password)
                      VALUES('$firstname', '$email', '$password')";
            mysqli_query($db, $query);
            $_SESSION['firstname'] = $firstname;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        }
    }

    // LOGIN USER
    if (isset($_POST['login_user'])){
        $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
        $passowrd = mysqli_real_escape_string($db, $_POST['password']);

        if (empty($firstname)){
            array_push($errors, "firstname is required");
        }
        if (empty($password)){
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM users WHERE firstname='$firstname' AND password='$password'";
            $results = mysqli_query($db, $query);
            if (mysqli_num_rows($results) == 1) {   
                $_SESSION['firstname'] = $firstname;
                $_SESSION['success'] = "You are now logged in";
                header('location: index.php');
            }else {
                array_push($errors, "Wrong firstname/password combination");
            }
        }
    }
?>