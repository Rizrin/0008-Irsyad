<?php
    class mahasiswa
    {
        var $nama;
        var $nim;
        var $kelas;
        var $ipk;

        function __construct(String $nama, $nim, $kelas, $ipk)
        {
            $this->nama = $nama;
            $this->nim = $nim;
            $this->kelas = $kelas;
            $this->ipk = $ipk;
        }

        function infomahasiswa()
        {
            return "$this->nama, $this->nim, $this->kelas, $this->ipk;";
        }
    }
?>