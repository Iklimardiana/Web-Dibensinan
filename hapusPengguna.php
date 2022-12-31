<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require_once "vendor/autoload.php";

use App\Models\Firestore;

$db = new Firestore();
$collection = $db->setCollectionName("penggunaHokya");

$nama = $_GET["nama"];
$targetDocument = $collection->getDocumentId("nama", $nama);
$delete = $collection->deleteDocument($targetDocument);
if ($delete) {
    echo "<script>alert('Data berhasil dihapus')</script>";
} else {
    echo "<script>alert('Data gagal dihapus')</script>";
}
header("Location: Pengguna.php");
exit;
