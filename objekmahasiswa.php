<?php
    require_once "mahasiswa.php";
    
    $mahasiswa1 = new mahasiswa("Muhammad Irsyad","23.240.0008","3P41", 3.76);

    $mahasiswa1->nama = "Muhammad Irsyad";
    $mahasiswa1->nim = "23.240.0008";
    $mahasiswa1->kelas = "3P41";
 

    echo "NAMA : $mahasiswa1->nama <br>";
    echo "NIM : $mahasiswa1->nim <br>";
    echo "KELAS : $mahasiswa1->kelas <br>";
    
    echo $mahasiswa1->infomahasiswa();
    echo "<br>";
    var_dump($mahasiswa1);
    $Mmahasiswa2 = new mahasiswa("Nabila Bunga","23.240.0009","3P41",3.1);

    $Mmahasiswa2->nama = "Nabila Bunga";
    $Mmahasiswa2->nim = "23.240.0009";
    $Mmahasiswa2->kelas = "3P41";
    

    echo "NAMA : $Mmahasiswa2->nama <br>";
    echo "NIM : $Mmahasiswa2->nim <br>";
    echo "KELAS : $Mmahasiswa2->kelas <br>";
  
    echo $Mmahasiswa2->infomahasiswa();
    echo "<br>";
    var_dump($Mmahasiswa2);
?>