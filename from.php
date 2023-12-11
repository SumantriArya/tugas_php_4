<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Pendaftaran</title>

    <style>

        form {
            width: 100%;
            margin: auto;
            height: 100vh;
            padding: 25px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #F8F8FF;
            text-align: center;
        }

        legend {
            font-size: 50px;
            margin-bottom: 25px;
            text-align: center;
        }

        .form-control {
            width: calc(100% - 50px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        h5 {
            margin-bottom: 10px;
            text-align: center;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 10px;
        }

        button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #00FFFF;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            justify-content: "center";
        }

        button:hover {
            background-color: #45a049;
        }

        .hobi-checkbox {
            display: inline-block;
            margin-right: 20px;
        }
    </style>
</head>

<body>

    <form class="form-horizontal" method="POST" action="process.php">
        <fieldset>

            <legend>Form Pendaftaran</legend>
         <h3>masukan nama<h3>
       <input type="text" placeholder="masukan nama" name="nama" /><br/><br/>
       <h3>masukan umur<h3>
       <input id="text" placeholder="masukan umur" name="nim" ><br/><br/>

            <?php
            $gender = [
                1 => "  Laki-laki  ",  "  Perempuan",
            ];
            ?>
            <h3>Gender</h3>
            <?php
            foreach ($gender as $key => $val) {
                echo '<label><input type="radio" name="gender" value="' . $val . '">' . $val . '</label>';
            }
            ?><br><br>

            <?php
            $pendidikan = [
                "Pendidikan Anda" => "-",
                "SD" => "SD",
                "SMP" => "SMP",
                "SMA" => "SMA",
                "D1" => "D1",
                "D2" => "D2",
                "D3" => "D3",
                "S1" => "S1",
                "S2" => "S2",
                "S3" => "S3"
            ];
            ?>

            <h3>Pendidikan :</h3>
            <select name="pendidikan" placeholder="Pendidikan Anda">
                <?php
                foreach ($pendidikan as $key => $val) {
                    echo '<option value="' . $val . '">' . $key . '</option>';
                }
                ?>
            </select><br><br>

          
            <h3>Hobi : </h3>
            <?php 
    $hobi = [
        "Baca Buku", "Travelling", "Olah Raga", "Mancing", "Naik Gunung", "Renang"
    ];
?>
<form method="POST" action="process.php">
    <?php 
        foreach($hobi as $key => $val){
            echo '<input type="checkbox" name="hobi[]" value="'.$val.'">'.$val.'<br/>';
        }
    ?><br><br>

            <button id="singlebutton" name="singlebutton" class="btn btn-success">Daftar</button>

        </fieldset>
    </form>

</body>

</html>
