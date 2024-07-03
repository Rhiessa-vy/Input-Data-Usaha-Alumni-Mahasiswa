<?php

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tahun_masuk = $_POST['tahun_masuk'];
$tahun_lulus = $_POST['tahun_lulus'];
$nama_usaha = $_POST['nama_usaha'];
$alamat_usaha = $_POST['alamat_usaha'];
$website = $_POST['website'];
$marketplace = $_POST['marketplace'];
$no_telp = $_POST['no_telp'];
$instagram = $_POST['instagram'];
$tiktok = $_POST['tiktok'];
$facebook = $_POST['facebook'];

$data_usaha = [
    'nim' => $nim,
    'nama' => $nama,
    'tahun_masuk' => $tahun_masuk,
    'tahun_lulus' => $tahun_lulus,
    'nama_usaha' => $nama_usaha,
    'alamat_usaha' => $alamat_usaha,
    'website' => $website,
    'marketplace' => $marketplace,
    'no_telp' => $no_telp,
    'instagram' => $instagram,
    'tiktok' => $tiktok,
    'facebook' => $facebook,
];

$file = 'data_usaha.json';
if (file_exists($file)) {
    $current_data = file_get_contents($file);
    $array_data = json_decode($current_data, true);
    $array_data[] = $data_usaha;
    $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
    file_put_contents($file, $final_data);
} else {
    $array_data[] = $data_usaha;
    $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
    file_put_contents($file, $final_data);
}

echo "Data usaha berhasil disimpan! <a href='display_data.php'>Lihat Data</a>";
?>
