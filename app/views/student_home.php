<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yearning University</title>

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
            position: relative;
            z-index: 2;
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

        .landing {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        /* Blue glow */
        .blue-glow {
            position: absolute;
            width: 650px;
            height: 650px;
            background: #3965ff;
            border-radius: 50%;
            filter: blur(5px);
            opacity: 0.95;
            left: -280px;
            top: 50%;
            transform: translateY(-50%);
        }

        .content {
            position: relative;
            z-index: 1;
            width: 90%;
            max-width: 1100px;
        }

        h1 {
            font-size: 80px;
            font-weight: 400;
            line-height: 0.95;
            letter-spacing: -3px;
            margin-left: 100px;
        }

        .subtitle {
            margin-top: 30px;
            margin-left: 105px;
            font-size: 15px;
            letter-spacing: 5px;
            color: #ffffff;
        }

        footer {
            padding: 25px 60px;
            text-align: center;
            font-size: 13px;
            letter-spacing: 3px;
            color: #ffffff;
            border-top: 1px solid #172b75;
        }

        @media (max-width: 700px) {

            nav {
                padding: 25px;
            }

            .blue-glow {
                width: 450px;
                height: 450px;
                left: -230px;
            }

            h1 {
                font-size: 55px;
                margin-left: 40px;
            }

            .subtitle {
                margin-left: 45px;
                font-size: 11px;
                letter-spacing: 3px;
            }

            footer {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

    <nav>
        <a href="<?= site_url('student'); ?>">Home</a>
        <a href="<?= site_url('student/profile'); ?>">Profile</a>
    </nav>

    <section class="landing">

        <div class="blue-glow"></div>

        <div class="content">

            <h1>
                Yearning<br>
                University
            </h1>

            <p class="subtitle">
                Longing And Never-ending Yearning
            </p>

        </div>

    </section>

    <footer>
        I miss you, double-XL
    </footer>

</body>
</html>