<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table>
        <tr>
        <label class="form-label">Masukan Huruf</label>
        <input type="text" class="form-control" name="nama">
        </tr>
        <tr>
        <button class="btn btn-primary" type="submit">Save</button>
        </tr>
        </table>
    </form>

    <?php
    $a= ["h", "e", "l", "l", "o"];

    if(isset($_POST['submit'])){
        $a= $_POST['nama'];
        echo "$a";
    }
    for($a="h"; $a<="o"; $a++)
        echo"$a";
        echo "<br>";
    ?>
</body>
</html>