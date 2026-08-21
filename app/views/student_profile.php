<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            min-height: 100vh;
            font-family: Arial, Helvetica, sans-serif;
            background: #000000;
            color: #ffffff;
            display: flex;
            flex-direction: column;
        }

        nav {
            width: 100%;
            padding: 30px 60px;
            display: flex;
            justify-content: flex-end;
            gap: 35px;
            border-bottom: 1px solid #172b75;
        }

        nav a {
            color: #ffffff;
            text-decoration: none;
            font-size: 15px;
            letter-spacing: 1px;
            transition: 0.3s;
        }

        nav a:hover {
            color: #3965ff;
        }

        .profile-section {
            flex: 1;
            width: 90%;
            max-width: 950px;
            margin: 60px auto;
            position: relative;
        }

        .blue-glow {
            position: fixed;
            width: 500px;
            height: 500px;
            background: #3965ff;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.35;
            right: -180px;
            bottom: -150px;
            z-index: 0;
        }

        h1 {
            font-size: 48px;
            font-weight: 400;
            margin-bottom: 40px;
            position: relative;
            z-index: 1;
        }

        .profile-card {
            position: relative;
            z-index: 1;
            border: 1px solid #263f91;
            background: #08090d;
            padding: 10px 35px;
            border-radius: 12px;
        }

        .info {
            display: grid;
            grid-template-columns: 170px 1fr;
            align-items: center;
            padding: 25px 0;
            border-bottom: 1px solid #202126;
        }

        .info:last-child {
            border-bottom: none;
        }

        .label {
            color: #3965ff;
            font-size: 13px;
            font-weight: bold;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .value {
            color: #ffffff;
            font-size: 16px;
        }

        .quote {
            position: relative;
            z-index: 1;
            text-align: center;
            margin-top: 45px;
            padding: 25px;
            color: #ffffff;
            font-size: 14px;
            font-style: italic;
            letter-spacing: 2px;
        }

        footer {
            border-top: 1px solid #172b75;
            padding: 25px;
            text-align: center;
            color: #3965ff;
            font-size: 13px;
            letter-spacing: 2px;
        }

        @media (max-width: 700px) {

            nav {
                padding: 25px;
            }

            .profile-section {
                margin: 40px auto;
            }

            h1 {
                font-size: 38px;
            }

            .profile-card {
                padding: 5px 20px;
            }

            .info {
                grid-template-columns: 1fr;
                gap: 8px;
            }

            .value {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

    <nav>
        <a href="<?= site_url('student'); ?>">Home</a>
        <a href="<?= site_url('student/profile'); ?>">Profile</a>
    </nav>

    <section class="profile-section">

        <div class="blue-glow"></div>

        <h1>Student Profile</h1>

        <div class="profile-card">

            <div class="info">
                <span class="label">Student ID</span>
                <span class="value"><?= $student_id ?></span>
            </div>

            <div class="info">
                <span class="label">Name</span>
                <span class="value"><?= $name ?></span>
            </div>

            <div class="info">
                <span class="label">Course</span>
                <span class="value"><?= $course ?></span>
            </div>

            <div class="info">
                <span class="label">Year</span>
                <span class="value"><?= $year ?></span>
            </div>

            <div class="info">
                <span class="label">Section</span>
                <span class="value"><?= $section ?></span>
            </div>

            <div class="info">
                <span class="label">Email</span>
                <span class="value"><?= $email ?></span>
            </div>

        </div>

        <div class="quote">
            what if i yearn for you for the rest of my life?
        </div>

    </section>

    <footer>
        Yearning University
    </footer>

</body>
</html>