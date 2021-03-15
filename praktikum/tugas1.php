<?php 
if (isset($_GET['submit'])) {
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$uts = $_GET['uts'];
$uas = $_GET['uas'];
$tugas = $_GET['tugas'];

$total = (30*$uts/100)+(35*$uas/100)+(35*$tugas/100);
}

if ($total>=85){
    $grade = 'A' ;
} elseif ($total>=70){
    $grade = 'B' ;
} elseif ($total>=60){
    $grade = 'C' ;
} elseif ($total>=40){
    $grade = 'D' ;
}else {
    $grade = 'E' ;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">

    <h1>Form Nilai</h1>

    <form action="" method="get">
    <label for="nama">Nama :</label>
    <input type="text" class="form-control" placeholder="Masukan nama anda" id="nama" name="nama"></br>

    <label for="matkul">Mata Kuliah :</label>
    <input type="text" class="form-control" placeholder="Masukan nama mata kuliah" id="matkul" name="matkul"></br>

    <label for="uts">Nilai UTS :</label>
    <input type="text" class="form-control" placeholder="Masukan nilai UTS" id="uts" name="uts"></br>

    <label for="uas">Nilai UAS :</label>
    <input type="text" class="form-control" placeholder="Masukan nilai UAS" id="uas" name="uas"></br>

    <label for="tugas">Nilai Tugas :</label>
    <input type="text" class="form-control" placeholder="Masukan nilai Tugas" id="tugas" name="tugas"></br>

    <input type="submit" class="btn btn-primary" name="submit" value="SUBMIT">
    </form></br>


    <div class="container table">
        <table class="table table-striped">
            <tr>
                <td>Nama :</td>
                <td><?php echo $nama; ?></td>
            </tr>

            <tr>
                <td>Mata Kuliah :</td>
                <td><?php echo $matkul; ?></td>
            </tr>

            <tr>
                <td>Nilai UTS :</td>
                <td><?php echo $uts; ?></td>
            </tr>

            <tr>
                <td>Nilai UAS :</td>
                <td><?php echo $uas; ?></td>
            </tr>

            <tr>
                <td>Nilai Tugas :</td>
                <td><?php echo $tugas; ?></td>
            </tr>

            <tr>
                <td>Nilai rata-rata :</td>
                <td><?php echo $total; ?></td>
            </tr>

            <tr>
                <td>Index prestasi :</td>
                <td><?php echo $grade; ?></td>
            </tr>
            
        </table>
    </div>
    </div>

</body>
</html>