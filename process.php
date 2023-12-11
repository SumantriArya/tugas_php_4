<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hasil Pendaftaran</title>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .result-container {
            max-width: 700px;
            width: 100%;
            background-color: #F0F8FF;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #000000;
            margin-bottom: 20px;
            text-align: center;
        }

        p {
            margin: 10px 0;
            padding: 10px;
            border-radius: 4px;
            background-color: #f2f2f2;
        }

        p:nth-child(even) {
            background-color: #ffffff;
        }

        button {
            display: block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
        }

        button a {
            color: #ffffff;
            text-decoration: none;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <div class="result-container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve form data
            $_nama = $_POST['nama'];
            $umur = $_POST["nim"];
            $gender = $_POST["gender"];
            $hobi = implode(", ", $_POST["hobi"]);

            // Display the data
            echo "<h2>Hasil Pendaftaran</h2>";
            echo "<p><strong>Nama:</strong> $_nama</p>";
            echo "<p><strong>Umur:</strong> $umur</p>";
            echo "<p><strong>Gender:</strong> $gender</p>";
            echo "<p><strong>Hobi:</strong> $hobi</p>";
        }
        ?>
        <form>
            <br>
            <button><a href="from.php">Kembali</a></button>
        </form>
    </div>

</body>

</html>
