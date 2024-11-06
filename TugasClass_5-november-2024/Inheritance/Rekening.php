<?php
class Rekening {
  // Properties
  protected $noRek;
  protected $saldo = 5000;

  // construct
  public function __construct($norek_con, $saldo_con) {
    $this->noRek = $norek_con;
    $this->saldo = $saldo_con;
}

  // Methods
  function nabung($uangMasuk) {
    $this->saldo += $uangMasuk;
	echo "Berhasil menabung saldo berjumlah: {$uangMasuk}";
	echo "<br>";
  }
  
  function cekSaldo() {
  	echo "Saldo anda ada saat ini: {$this->saldo} ";
  	echo "<br>";
  }
  
  function tarik($uangKeluar) {
    $this->saldo -= $uangKeluar;
    echo "Berhasil menarik saldo berjumlah: {$uangKeluar}";
	echo "<br>";
  }
}

class Tabungan extends Rekening{
  public function __construct($norek_con, $saldo_con) {
    parent::__construct($norek_con, $saldo_con);
  }
	function potonganBulanan($potongan) {
	 $this->saldo -= $potongan;
  }
}

$rekening1 = new Tabungan("123456789", 500000);
$rekening1->cekSaldo();
$rekening1->nabung(100000);
$rekening1->tarik(200000);
$rekening1->cekSaldo(); 

$rekening2 = new Tabungan("123456789", 700000);
$rekening2->cekSaldo();
$rekening2->nabung(200000);
$rekening2->tarik(400000);
$rekening2->cekSaldo();
?>