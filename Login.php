<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $errors = []; 

    // Validate email
    if (empty($email)) {
        $errors[] = 'An email is required';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email must be a valid email address';
    }

    // Validate password
    if (empty($password)) {
        $errors[] = 'A password is required';
    } elseif (!preg_match('/^[a-zA-Z\s]+$/', $password)) {
        $errors[] = 'Password must contain letters and spaces only';
    }

    // If there are no errors, check credentials
    if (empty($errors)) {
        if ($email == 'g@b.com' && $password == 'abcde') {
            $_SESSION['user'] = $email; // Store user in session
            echo 'success';
        } else {
            $errors[] = 'Invalid username or password';
        }
    }

    // Return error messages if there are any
    if (!empty($errors)) {
        echo implode('<br>', $errors);
    }
}
?>
