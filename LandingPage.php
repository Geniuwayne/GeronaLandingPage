<?php
    $title = "Welcome to My Website!";
    $quote = "''Don't worry about failure, you only have to be right once''.";
    $footerText = "© 2025 My Website | All Rights Reserved";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body and Fullscreen Background */
        body, html {
            height: 100%;
            font-family: 'Arial', sans-serif;
            display: flex;
            flex-direction: column;
            color: #fff;
        }

        /* Fullscreen Background with Custom Image */
        .background {
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://png.pngtree.com/thumb_back/fh260/background/20231231/pngtree-elegant-black-design-with-smooth-curved-blue-shapes-and-subtle-mesh-image_13903541.png') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 30px;
        }

        /* Header Section */
        header {
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            text-align: center;
            font-size: 3em;
            padding: 15px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }

        /* Quote Section */
        .quote {
            background-color: rgba(0, 0, 0, 0.6);
            color: #fff;
            text-align: center;
            font-size: 1.8em;
            padding: 20px;
            margin-top: 30px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        }

        .quote blockquote {
            font-style: italic;
            margin: 0;
            font-size: 1.2em;
        }

        /* Main Content Section */
        .content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
        }

        .content h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
            font-weight: bold;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }

        /* Button Styling */
        .cta-btn {
            padding: 15px 30px;
            margin-top: 30px;
            background-color: #ff5722;
            color: #fff;
            font-size: 1.2em;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
        }

        .cta-btn:hover {
            background-color: #e64a19;
            transform: scale(1.1);
        }

        /* Footer Section */
        footer {
            background-color: rgba(0, 0, 0, 0.8);
            color: #fff;
            text-align: center;
            padding: 20px;
            margin-top: 30px;
            font-size: 1.2em;
            box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.7);
        }

        footer a {
            color: #ff5722;
            text-decoration: none;
            font-weight: bold;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Make everything responsive */
        @media (max-width: 768px) {
            header {
                font-size: 2.5em;
            }

            .quote {
                font-size: 1.5em;
            }

            .content h2 {
                font-size: 2em;
            }

            .cta-btn {
                font-size: 1em;
                padding: 12px 25px;
            }
        }
    </style>
</head>
<body>

<!-- Fullscreen Background with Content -->
<div class="background">
    <!-- Header Section -->
    <header>
        <?php echo $title; ?>
    </header>

    <!-- Quote Section -->
    <div class="quote">
        <blockquote><?php echo $quote; ?></blockquote>
    </div>

    <!-- Main Content Section -->
    <div class="content">
        <h2>Welcome to the Best Experience!</h2>
        <a href="#cta" class="cta-btn">Get Started Now</a>
    </div>

    <!-- Footer Section -->
    <footer>
        <?php echo $footerText; ?> | <a href="#terms">Terms & Conditions</a>
    </footer>
</div>

</body>
</html>
