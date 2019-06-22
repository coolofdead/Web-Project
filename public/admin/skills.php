<?php
  session_start();

  $_SESSION["page"] = "skills";
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Menu</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        body {
        padding-top: 5rem;
        }
        .starter-template {
        padding: 3rem 1.5rem;
        text-align: center;
        }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
</head>
<body>
  <?php require_once("../../src/Admin/admin_header.php"); ?>

  <main role="main" class="container">
    <?php require_once("../../src/Admin/skills_content.php"); ?>
  </main>
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
  <script src="/docs/4.3/dist/js/bootstrap.bundle.min.js"></script>
</body>