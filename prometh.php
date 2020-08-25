<?php
class product{
	public $Barang = "Laptop", 
			$Merk = "ASUS", 
			 $Harga = 6000000;

	public function cetak(){
		return "$this->Barang, $this->Merk, $this->Harga";
	}
}

// $product1 =  new product();
// $product1->Warna="Hitam";
// var_dump($product1);

// echo "<br>";

$product2 = new product();
$product2->Barang="Mouse";
$product2->Harga=500000;
echo "Barang1 : " . $product2->cetak();

echo "<br>";

$product3 = new product();
$product3->Merk="Lenovo";
echo "Barang2 : " . $product3->cetak();



?>