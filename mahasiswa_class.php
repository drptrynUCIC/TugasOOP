<?php
class Mahasiswa
{
    public $nim;
    public $nama;
    public $univ;
    public $prodi;
    public $nilai;
    public $grade;
    public $predikat;
    public $status;

    public function __construct($nim, $nama, $univ, $prodi, $nilai)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->univ = $univ;
        $this->prodi = $prodi;
        $this->nilai = $nilai;

        // Hitung grade, predikat, dan status berdasarkan nilai
        $this->hitungNilai();
    }

    private function hitungNilai()
    {
        // Hitung grade, predikat, dan status sesuai kebutuhan
        // Contoh sederhana
        if ($this->nilai >= 80) {
            $this->grade = 'A';
            $this->predikat = 'Sangat Baik';
            $this->status = 'Lulus';
        } elseif ($this->nilai >= 70) {
            $this->grade = 'B';
            $this->predikat = 'Baik';
            $this->status = 'Lulus';
        } elseif ($this->nilai >= 60) {
            $this->grade = 'C';
            $this->predikat = 'Cukup';
            $this->status = 'Lulus';
        } elseif ($this->nilai >= 50) {
            $this->grade = 'D';
            $this->predikat = 'Kurang';
            $this->status = 'Lulus';
        } else {
            $this->grade = 'E';
            $this->predikat = 'Sangat Kurang';
            $this->status = 'Tidak Lulus';
        }
    }
}
