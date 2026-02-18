<!DOCTYPE html>
<html>
<head>
    <title>Home - CodeGirls</title>

    <style>
        body {
            margin: 0;
            font-family: "Segoe UI", sans-serif;
            background: linear-gradient(to right, #f8fbff, #eef3ff);
        }

        header {
            background: linear-gradient(to right, #005eff, #00c6ff);
            padding: 20px;
            text-align: center;
            color: white;
            font-size: 30px;
            font-weight: bold;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.2);
        }

        nav {
            margin-top: 10px;
        }

        nav a {
            color: white;
            margin: 12px;
            text-decoration: none;
            font-size: 18px;
            padding: 10px 18px;
            border-radius: 25px;
            transition: 0.3s;
        }

        nav a:hover {
            background: white;
            color: #005eff;
        }

        .container {
            width: 80%;
            margin: 60px auto;
            background: white;
            padding: 40px;
            border-radius: 18px;
            text-align: center;
            box-shadow: 0px 10px 25px rgba(0,0,0,0.15);
        }

        h1 {
            color: #005eff;
            font-size: 40px;
        }

        p {
            font-size: 18px;
            color: #444;
            line-height: 1.6;
        }

        .btn {
            background: #005eff;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
            margin-top: 15px;
        }

        .btn:hover {
            background: #003bb5;
        }

        img {
            width: 65%;
            border-radius: 15px;
            margin-top: 25px;
            box-shadow: 0px 6px 15px rgba(0,0,0,0.2);
        }

        footer {
            margin-top: 60px;
            background: #005eff;
            color: white;
            text-align: center;
            padding: 15px;
            font-size: 15px;
        }
    </style>
</head>

<body>

<header>
    CodeGirls Website 💻✨
    <nav>
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="faq.php">FAQ</a>
        <a href="news.php">News</a>
    </nav>
</header>

<div class="container">
    <h1>Welcome to CodeGirls</h1>
    <p>
        A platform where girls learn coding, build confidence,
        and become future developers 🚀
    </p>

    <button class="btn">Join Our Community</button>

    <img src="https://i.ibb.co/Z6JgYfM/codinggirls.jpg" alt="CodeGirls">
</div>

<footer>
    © 2026 CodeGirls | All Rights Reserved 🌸
</footer>

</body>
</html>