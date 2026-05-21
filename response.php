<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success Message</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f4f4f4;
            flex-direction: column;
        }

        .container {
            width: 350px;
            background: white;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .logo img {
            width: 150px;
        }

        .message {
            margin-top: 15px;
            font-size: 20px;
            color: #08aa08;
            font-weight: bold;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .index-link {
            color: #08aa08;
            margin-top: 20px;
            text-decoration: underline;
        }
    </style>

</head>

<body>

    <div class="container">

        <div class="logo">

            <img src="green-check-mark-icon-animation-animated-check-mark-on-white-background-free-video.jpg" alt="Success">

        </div>

        <p class="message"><i>Your Form is Submitted Successfully!</i></p>
        
    </div>
    
    <p class="index-link">
        <a href="index.php">Go Back to Form</a>
    </p>
</body>

</html>