<?php
include('lib/koneksi.php');

		$id = $_GET['id'];
// code 
		try {
			$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$pdo = $conn->prepare("DELETE FROM tbl_keranjang WHERE id = :id");
			$deletedata = array(':id' => $id);
			$pdo->execute($deletedata);
// code 
      echo "<script>alert('Barang dalam keranjang berhasil dihapus');window.location='?page=beranda'</script>";
// code 
		} catch (PDOexception $e) {
			print "hapus berita gagal: " . $e->getMessage() . "<br/>";
		   die();
		}
?>
