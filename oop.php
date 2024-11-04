<?php

class Bunga {
    protected $modal;
    protected $bunga;
    protected $waktu;    

    public function __construct($modal, $bunga, $waktu) {
        $this->modal = $modal;
        $this->bunga = $bunga / 100;
        $this->waktu = $waktu;
    }
}

class BungaTunggal extends Bunga {
    public function bungaTunggal() {
        return $this->modal * $this->bunga * $this->waktu;
    }

    public function showScreenTunggal() {
        $total = $this->bungaTunggal() + $this->modal;
        echo "Uang anda sekarang bernilai sebesar Rp " . number_format($total, 2) . "<br>";
        echo "Dengan besar bunga senilai Rp " . number_format($this->bungaTunggal(), 2) . "<br>";
    }
}

class BungaMajemuk extends Bunga {
    public function bungaMajemuk() {
        return $this->modal * (1 + $this->bunga) ** $this->waktu;
    }

    public function showScreenMajemuk() {
        echo "Uang anda sekarang bernilai sebesar Rp " . number_format($this->bungaMajemuk(), 2) . "<br>";
    }
}


class BungaMajemukN extends BungaMajemuk {

    public function bungaMajemukTahunN($tahun) {
        if ($tahun > $this->waktu || $tahun < 1) {
            return "Tahun yang dimasukkan tidak valid.";
        }
        return $this->modal * (1 + $this->bunga) ** $tahun;
    }

    public function showScreenTahunN($tahun) {
        $nilaiTahunN = $this->bungaMajemukTahunN($tahun);
        if (is_numeric($nilaiTahunN)) {
            echo "Pada tahun ke-$tahun, uang anda bernilai sebesar Rp " . number_format($nilaiTahunN, 2) . "<br>";
        } else {
            echo $nilaiTahunN . "<br>";
        }
    }
}