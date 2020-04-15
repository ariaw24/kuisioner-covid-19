<?php
include "config/koneksi.php";
$nama = $_POST['nama'];
$usia = $_POST['usia'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
if (empty($nama)){
echo "<script>alert('Nama belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}else
if (empty($usia)){
echo "<script>alert('Usia belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}else 
if(empty($jk)){
echo "<script>alert('Jenis kelamin belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}else 
if (empty($alamat)){
echo "<script>alert('Alamat belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}else{
$daftar = mysqli_query($konek, "INSERT INTO tb_user(nama, usia, jk, alamat) values ('$nama','$usia','$jk','$alamat')");
if ($daftar){
echo "<script>document.location.href='pertanyaan.php'</script>";

}else{
echo "<script>alert('Maaf anda tidak bisa mulai test');document.location.href='index.php'</script>";
}
}
?>