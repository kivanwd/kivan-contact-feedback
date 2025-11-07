<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Contact & Feedback</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #007bff, #6a11cb);
            color: #fff;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            animation: fadeIn 1s ease-in-out;
        }

        header {
            position: absolute;
            top: 15px;
            right: 20px;
            font-size: 14px;
            background: rgba(255,255,255,0.1);
            padding: 8px 16px;
            border-radius: 12px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

        header span {
            font-weight: 600;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            text-align: center;
            animation: slideDown 1s ease forwards;
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 40px;
            text-align: center;
            opacity: 0.9;
            animation: fadeIn 1.2s ease-in-out;
        }

        .buttons {
            display: flex;
            gap: 20px;
            animation: fadeInUp 1.5s ease-in-out;
        }

        a {
            text-decoration: none;
            color: #fff;
            padding: 12px 25px;
            border-radius: 25px;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
        }

        a.submit {
            background: #00c9a7;
        }

        a.view {
            background: #ff7eb3;
        }

        a:hover {
            transform: scale(1.1);
            box-shadow: 0 0 15px rgba(255,255,255,0.3);
        }

        footer {
            position: absolute;
            bottom: 15px;
            font-size: 13px;
            opacity: 0.8;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideDown {
            from { transform: translateY(-40px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @keyframes fadeInUp {
            from { transform: translateY(40px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
    </style>
</head>
<body>

    <header>
        Made by <span>Kivan Aditya Shahab</span>
    </header>

    <h1>Welcome to Contact & Feedback System</h1>
    <p>Let's hear your thoughts and share your feedback with us!</p>

    <div class="buttons">
        <a href="{{ route('feedback.create') }}" class="submit">Submit Feedback</a>
        <a href="{{ route('feedback.index') }}" class="view">View All Feedbacks</a>
    </div>

    <footer>
        © 2025 Contact & Feedback System
    </footer>

</body>
</html>
