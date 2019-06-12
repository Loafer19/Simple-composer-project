<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/public/img/rocket.png">

    <title>Blog</title>

    <!-- Bootstrap CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="public/css/style.css">

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body>
        <?php
            session_start();

            if (isset($_COOKIE["action"])) {

                echo("<div class='notification'>
                    <h4>$_COOKIE[action]</h4>
                </div>");
            }

            setcookie('action', null, 0, '/');
        ?>

    <main role="main" class="container">
        
        <br>

        <div class="row justify-content-center">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createPostModal">
                Create
            </button>
        </div>