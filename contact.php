<!DOCTYPE html>
<html>
<head>
    <title>Contact - CodeGirls</title>

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
        }

        nav a {
            color: white;
            margin: 12px;
            text-decoration: none;
            font-size: 18px;
            padding: 10px 18px;
            border-radius: 25px;
        }

        nav a:hover {
            background: white;
            color: #005eff;
        }

        .container {
            width: 60%;
            margin: 60px auto;
            background: white;
            padding: 40px;
            border-radius: 18px;
            text-align: center;
            box-shadow: 0px 10px 25px rgba(0,0,0,0.15);
        }

        input, textarea {
            width: 90%;
            padding: 12px;
            margin: 10px;
            border-radius: 10px;
            border: 1px solid gray;
        }

        .btn {
            background: #005eff;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
        }

        footer {
            margin-top: 60px;
            background: #005eff;
            color: white;
            text-align: center;
            padding: 15px;
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
    <h1>Contact Us 📩</h1>

    <form>
        <input type="text" placeholder="Enter your name">
        <input type="email" placeholder="Enter your email">
        <textarea rows="4" placeholder="Write your message"></textarea>
        <button class="btn">Send Message</button>
    </form>
</div>

<footer>
    © 2026 CodeGirls | All Rights Reserved 🌸
</footer>

</body>
</html>