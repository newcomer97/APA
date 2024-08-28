<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello, World! - Futuristic Design</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #1f1c2c, #928dab);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #fff;
            overflow: hidden;
        }

        .container {
            text-align: center;
        }

        .neon-text {
            font-size: 80px;
            font-weight: bold;
            color: #0ff;
            text-transform: uppercase;
            text-shadow: 0 0 5px #0ff, 0 0 10px #0ff, 0 0 15px #0ff, 0 0 20px #00e, 
                         0 0 25px #00e, 0 0 30px #00e, 0 0 35px #00e;
            animation: glow 2s infinite alternate;
            position: relative;
            z-index: 1;
        }

        .line {
            width: 300px;
            height: 2px;
            background-color: #0ff;
            margin: 20px auto;
            position: relative;
            z-index: 0;
            animation: pulse 2s infinite alternate;
        }

        @keyframes glow {
            from {
                text-shadow: 0 0 10px #0ff, 0 0 20px #0ff, 0 0 30px #0ff, 0 0 40px #00e, 
                            0 0 50px #00e, 0 0 60px #00e, 0 0 70px #00e;
            }
            to {
                text-shadow: 0 0 20px #0ff, 0 0 30px #0ff, 0 0 40px #0ff, 0 0 50px #00e, 
                            0 0 60px #00e, 0 0 70px #00e, 0 0 80px #00e;
            }
        }

        @keyframes pulse {
            from {
                transform: scaleX(1);
                opacity: 0.7;
            }
            to {
                transform: scaleX(1.5);
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="neon-text">Hello, World!</div>
        <div class="line"></div>
    </div>
</body>
</html>
