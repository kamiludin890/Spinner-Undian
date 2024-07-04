<?php
require_once 'vendor/autoload.php';
require_once 'koneksi.php';

use DeviceDetector\ClientHints;
use DeviceDetector\DeviceDetector;
use DeviceDetector\Parser\Device\AbstractDeviceParser;

AbstractDeviceParser::setVersionTruncation(AbstractDeviceParser::VERSION_TRUNCATION_NONE);

$userAgent = $_SERVER['HTTP_USER_AGENT']; // change this to the useragent you want to parse
$clientHints = ClientHints::factory($_SERVER); // client hints are optional

$dd = new DeviceDetector($userAgent, $clientHints);
$dd->parse();

$clientInfo = $dd->getClient('name'); // holds information about browser, feed reader, media player, ...
$osInfo = $dd->getOs('name');
$device = $dd->getDeviceName();
$brand = $dd->getBrandName();
$model = $dd->getModel();

$tanggal =  date("d-m-Y");
if (isset($_POST['submit'])) {
    if ($_POST['submit'] == "Data") {
        $nama = $_POST['nama'];
        $nik = $_POST['nik'];
        $dept = $_POST['dept'];
        $bagian = $_POST['bagian'];
        $results = $connection->query("SELECT COUNT(id)as totalid FROM db_kehadiran WHERE tanggal='$tanggal'");
        $total_data = $results->fetchArray(SQLITE3_ASSOC);
        $cek_nama = $connection->querySingle("SELECT * FROM db_kehadiran WHERE nama='$nama'AND nik='$nik' AND dept='$dept' AND bagian='$bagian' AND tanggal='$tanggal'");
        if ($cek_nama) {
            $cek_nomor = $connection->querySingle("SELECT nomor_undian FROM db_kehadiran WHERE nama='$nama'AND nik='$nik' AND dept='$dept' AND bagian='$bagian' AND tanggal='$tanggal'");
            $nomor_undian = $cek_nomor;
            include('terimaksih.php');
        } else {
            $noundi = $total_data['totalid'] + 1;
            if ($noundi < 10) {
                $nomor_undian = "DPCPTI0000" . $noundi;
            } elseif ($noundi < 100) {
                $nomor_undian = "DPCPTI000" . $noundi;
            } elseif ($noundi < 1000) {
                $nomor_undian = "DPCPTI00" . $noundi;
            } elseif ($noundi < 10000) {
                $nomor_undian = "DPCPTI0" . $noundi;
            } else {
                $nomor_undian = "CPTI" . $noundi;
            }
            $query = "INSERT INTO 'db_kehadiran' ('nama','nik','dept','bagian','browser','os','device','model','tanggal','nomor_undian') Values ('$nama','$nik','$dept','$bagian','$clientInfo','$osInfo','$device','$model','$tanggal','$nomor_undian')";
            $connection->exec('BEGIN');
            $connection->query($query);
            $connection->exec('COMMIT');
            include('terimaksih.php');
        }
    }
}
