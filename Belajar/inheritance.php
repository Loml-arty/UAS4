 <?php
// Parent class
class deklarasi {
  public $perilaku1;
  public $perilaku2;

  public function __construct($ah, $as) {
    $this->perilaku1 = $ah;
    $this->perilaku2 = $as;
  }

  public function deklarasi() {
    echo "aku suka $this->perilaku1 dan $this->perilaku2.";
  }
}

// pertanyyan mewarisi atribut dari deklarasi(child)
class pertanyaan extends deklarasi {
  public function pertanyaan() {
    echo "\n apakah aku anak baik? ";
  }
}

$apah = new pertanyaan("menabung", "suka membantu");
$apah->deklarasi();
$apah->pertanyaan();
?>