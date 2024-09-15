<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Display Based on Budget</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            text-align: center;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #007BFF;
            margin-bottom: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            font-size: 18px;
            margin-right: 10px;
        }
        input[type="number"] {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            background-color: #007BFF;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .image-frame {
            width: 100%;
            max-width: 600px;
            height: auto;
            margin: 20px auto;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            background: #f8f8f8;
            padding: 10px;
        }
        .image-frame img {
            max-width: 100%;
            height: auto;
            display: block;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Image Display Based on Budget</h1>
        <form method="post">
            <label for="budget">What is your budget?</label>
            <input type="number" id="budget" name="budget" required>
            <input type="submit" value="Submit">
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $budget = intval($_POST['budget']);
            $image = '';

            if ($budget < 3000) {
                $image = 'r-1.jpg'; // Replace with your local image file name
            } elseif ($budget >= 3000 && $budget < 5000) {
                $image = 'r-2.jpg'; // Replace with your local image file name
            } elseif ($budget >= 5000 && $budget < 10000) {
                $image = 'r1.jpg'; // Replace with your local image file name
            } elseif ($budget >= 10000 && $budget < 20000) {
                $image = 'r3.jpg'; // Replace with your local image file name
            } elseif ($budget >= 20000 && $budget < 30000) {
                $image = 'r4.jpg'; // Replace with your local image file name
            } elseif ($budget >= 30000 && $budget < 50000) {
                $image = 'r5.webp'; // Replace with your local image file name
            } else {
                $image = 'r5.jpg'; // Replace with your local image file name
            }
            
            if ($image) {
                echo '<div class="image-frame">';
                echo '<img src="/images/' . htmlspecialchars($image, ENT_QUOTES, 'UTF-8') . '" alt="Image">';
 		echo '</div>';
            }
        }
        ?>
    </div>
</body>
</html>

