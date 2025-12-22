<!DOCTYPE html>
<html>

<head>
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            margin-bottom: 10px;
            color: #333;
        }

        p {
            color: #555;
        }
    </style>
    @vite('/resources/js/app.ts')
</head>

<body>
    <div class="container">
        <div class="box">
            <h1>Welcome!TO Task Manager</h1>
            <p>You have successfully created a Laravel Blade page.</p>
        </div>
    </div>
    <div id="app"></div>
</body>

</html>