<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT - Halaman Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            text-align: center;
            background-color: #f0f8ff; /* Warna latar belakang */
            overflow: hidden; /* Mencegah elemen keluar dari layar */
        }

        /* Efek hujan */
        .rain-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none; /* Tidak memengaruhi interaksi pengguna */
            z-index: 0; /* Berada di belakang elemen utama */
        }

        .rain-drop {
            position: absolute;
            width: 50px;
            height: 50px;
            background-image: url('air1.png'); /* Ganti dengan URL gambar hujan */
            background-size: cover;
            animation: fall 3s linear infinite, sway 2s ease-in-out infinite;
        }

        @keyframes fall {
            0% {
                top: -10%;
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            100% {
                top: 110%;
                opacity: 0;
            }
        }

        @keyframes sway {
            0%, 100% {
                transform: translateX(0);
            }
            50% {
                transform: translateX(15px);
            }
        }

        /* Kontainer utama */
        .container {
            position: relative;
            z-index: 1; /* Berada di atas elemen hujan */
            text-align: center;
        }

        .logo {
            margin-bottom: 20px;
        }

        .logo img {
            max-width: 400px;
            height: auto;
            transition: transform 0.3s ease;
        }

        .logo img:hover {
            animation: shake 0.5s;
        }

        @keyframes shake {
            0%, 100% {
                transform: translateX(0);
            }
            25% {
                transform: translateX(-10px);
            }
            50% {
                transform: translateX(10px);
            }
            75% {
                transform: translateX(-10px);
            }
        }

        .login-button {
            margin-top: 20px;
        }

        button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        button:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <!-- Efek hujan -->
    <div class="rain-container">
        <div class="rain-drop" style="left: 10%; animation-delay: 0s;"></div>
        <div class="rain-drop" style="left: 30%; animation-delay: 1s;"></div>
        <div class="rain-drop" style="left: 50%; animation-delay: 2s;"></div>
        <div class="rain-drop" style="left: 70%; animation-delay: 3s;"></div>
        <div class="rain-drop" style="left: 90%; animation-delay: 4s;"></div>
    </div>

    <!-- Konten utama -->
    <div class="container">
        <div class="logo">
            <img src="pam.png" alt="Logo IT">
        </div>
        <h1>Selamat Datang di Website</h1>
        <h1>PERUMDA TIRTA MANGKALUKU</h1>
        <div class="login-button">
            <a href="login.php">
                <button>Masuk</button>
            </a>
        </div>
    </div>
</body>
</html>