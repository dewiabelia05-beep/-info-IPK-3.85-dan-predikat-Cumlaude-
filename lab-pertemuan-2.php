<?php
// LAB 2 — Class, object, constructor
// Spesifikasi:
//  - Mahasiswa(string $nim, string $nama, string $prodi, float $ipk)
//      info(): string
//      predikat(): string  -> ipk >= 3.51 'Cumlaude', ipk >= 3.01 'Sangat Memuaskan', selain itu 'Memuaskan'
//  - Produk(string $nama, int $harga, int $stok)
//      totalNilai(): int   -> harga x stok

class Mahasiswa
{
   public string $nim;
   public string $nama;
   public string $prodi;
   public float $ipk;
    
   public function __construct(string $nim, string $nama, string $prodi, float $ipk)
   {
       $this->nim = $nim;
       $this->nama = $nama;
       $this->prodi = $prodi;
       $this->ipk = $ipk;
   }
    
   public function info(): string
   {
       return "NIM: {$this->nim}, Nama: {$this->nama}, Prodi: {$this->prodi}, IPK: {$this->ipk}";
   }
    
   public function predikat(): string
   {
       if ($this->ipk >= 3.51) {
           return 'Cumlaude';
       } elseif ($this-> ipk >= 3.01) {
           return 'Sangat Memuaskan';
       } else {
           return 'Memuaskan';
       }
   }
}
class Produk
{
    public string $nama;
    public int $harga;
    public int $stok;
    
    public function __construct(string $nama, int $harga, int $stok)
    {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;   
}

public function totalNilai(): int
{
    return $this->harga * $this->stok;
}
}

$mhs1 = new Mahasiswa("230001", "Budi Santoso", "Informatika", 3.85);
$mhs2 = new Mahasiswa("230002", "Siti Rahma", "Sistem Informasi", 3.25);
$mhs3 = new Mahasiswa("230003", "Andi Pratama", "Teknik Komputer", 2.90);
    
$daftarMhs = [$mhs1, $mhs2, $mhs3];

foreach ($daftarMhs as $mhs) {
    echo $mhs->info() . " | Predikat: " . $mhs->predikat() . "<br>";

}

echo "<br>=== DATA PRODUK ===<br>";
$prod1 = new Produk("Buku Pemrograman PHP", 75000, 10);
$prod2 = new Produk("Mouse Wireless", 120000, 5);
$prod3 = new Produk("Keybroard Mechanical", 350000, 3);

$daftarproduk = [$prod1, $prod2, $prod3];

foreach ($daftarproduk as $prod) {
    echo "Produk: " . $prod->nama . " | Harga: Rp " . 
         " | Stok: {$prod->stok} | Total Nilai: Rp " . number_format($prod->totalNilai(), 0, ',', '.') . "\n";
}
