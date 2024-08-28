<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Pernikahan</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Georgia', serif;
            background: url('images/background.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }

        .overlay {
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
        }

        .invitation {
            max-width: 600px;
            padding: 40px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            color: #333;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 20px;
            font-family: 'Times New Roman', Times, serif;
            color: #333;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .couple-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto 20px;
            border: 5px solid #fff;
        }

        .couple-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .details {
            margin-top: 30px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="overlay">
        <div class="invitation">
            <div class="couple-photo">
                <img src="images/couple.jpg" alt="Couple Photo">
            </div>
            <h1>Undangan Pernikahan</h1>
            <p>Dengan segala kerendahan hati, kami mengundang Bapak/Ibu/Saudara/i untuk menghadiri acara pernikahan kami.</p>
            <p><strong>Nama Mempelai Pria</strong> & <strong>Nama Mempelai Wanita</strong></p>
            <div class="details">
                <p><strong>Tanggal:</strong> 12 Desember 2024</p>
                <p><strong>Waktu:</strong> 10:00 WIB</p>
                <p><strong>Tempat:</strong> Gedung Serbaguna, Jakarta</p>
            </div>
        </div>
    </div>
</body>
</html>
