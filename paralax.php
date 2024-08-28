<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parallax Effect Example</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            height: 100%;
        }
        .parallax {
            /* Full height */
            height: 100vh;
            /* Create the parallax scrolling effect */
            background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20230408/pngtree-rainbow-curves-abstract-colorful-background-image_2164067.jpg');
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .content {
            height: 100vh;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
        }
        h1 {
            font-size: 48px;
            color: #333;
        }
        p {
            font-size: 24px;
            color: #666;
        }
    </style>
</head>
<body>

<div class="parallax"></div>

<div class="content">
    <div>
        <h1>Welcome to My Website</h1>
        <p>This is an example of a simple parallax effect using PHP and HTML/CSS.</p>
    </div>
</div>

<div class="parallax"></div>

<div class="content">
    <div>
        <h1>Enjoy the Scrolling</h1>
        <p>The background image moves slower than the content to create a parallax effect.</p>
    </div>
</div>

</body>
</html>
