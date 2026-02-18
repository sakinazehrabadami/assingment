<!DOCTYPE html>
<html>
<head>
    <title>News - CodeGirls</title>

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

        .news-card {
            background: #f4f8ff;
            padding: 25px;
            border-radius: 15px;
            margin-top: 25px;
            text-align: left;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
        }

        .news-card h2 {
            color: #003bb5;
        }

        .btn {
            display: inline-block;
            margin-top: 15px;
            background: #005eff;
            color: white;
            padding: 10px 25px;
            border-radius: 25px;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn:hover {
            background: #003bb5;
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
    <h1>Latest News 📰</h1>
    <p>Stay updated with CodeGirls events and activities</p>

    <div class="news-card">
        <h2>🚀 Upcoming Coding Bootcamp</h2>
        <p>
            CodeGirls is organizing a 2-week coding bootcamp for beginners.
            Learn HTML, CSS, PHP and build real projects!
        </p>
        <p><b>Date:</b> 20th March 2026</p>

        <a href="#" class="btn">Read More</a>
    </div>

    <div class="news-card">
        <h2>🎉 New Workshop Announced</h2>
        <p>
            Join our special workshop on Web Development and UI Designing.
        </p>
        <p><b>Date:</b> 5th April 2026</p>

        <a href="#" class="btn">Read More</a>
    </div>

</div>

<footer>
    © 2026 CodeGirls | All Rights Reserved 🌸
</footer>

</body>
</html>