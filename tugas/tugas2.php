<?php
$data=[[
    "asal" => "aceh",
    "nama" => "tari saman",
    "tahun" => "", 
    "deskripsi" => "tari yang dikenal gerakanan serempak",
    "gambar" => "https://th.bing.com/th/id/OIP.OaunHY0b7NpRu_v3fhKfKQAAAA?w=234&h=180&c=7&r=0&o=7&dpr=1.5&pid=1.7&rm=3"

], ["asal" => "bali",
    "nama" => "tari pandet",
   "tahun" => "Warisan Budaya (2015)", 
   "deskripsi" => "Tari penyambutan tradisional Bali yang biasanya dibawakan oleh penari wanita sebagai ungkapan rasa syukur.",
   "gambar" => "https://palm-living.com/wp-content/uploads/2018/07/Tari-Pendet-2.jpg"],

    ["asal" => "Jawa Tengah",
    "nama" => "Gamelan",
   "tahun" => "", 
   "deskripsi" => "Ensembel musik tradisional Jawa dan Bali yang terdiri dari berbagai instrumen perkusi dari logam.",
   "gambar" => "https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/4dcd3b6f-ab0c-4f59-9468-097915d0b340.png"],
   
    ["asal" => "Sulawesi Selatan",
    "nama" => "Kapal Phinisi",
   "tahun" => "2017 (Warisan UNESCO)", 
   "deskripsi" => "Kapal tradisional Bugis-Makassar yang terkenal sebagai kapal kayu terbesar kedua di dunia setelah kapal Viking.",
   "gambar" => "https://th.bing.com/th/id/OIP.jUMfWLRVPmMeaBTedYk3NwHaE5?w=217&h=180&c=7&r=0&o=7&dpr=1.5&pid=1.7&rm=3"],

    ["asal" => "Sumatra Selatan",
    "nama" => "Songket",
   "tahun" => "2013", 
   "deskripsi" => "Kain tenun tradisional yang ditenun dengan benang emas atau perak menciptakan pola yang rumit dan indah.",
   "gambar" => "https://th.bing.com/th/id/OIP.CmwBCuosDlNPcKS8pEiyEgHaE9?w=249&h=180&c=7&r=0&o=7&dpr=1.5&pid=1.7&rm=3"],
    
   ["asal" => "Jawa Timur",
    "nama" => "Reog Ponorogo",
   "tahun" => "Warisan Budaya (2013)", 
   "deskripsi" => "Kesenian tradisional dengan topeng kepala harimau besar dan hiasan bulu merak yang beratnya bisa mencapai 40 kg.",
   "gambar" => "https://th.bing.com/th/id/OIP.TDLASzG3sqgdFmZ1zyBiVgHaE8?w=284&h=190&c=7&r=0&o=7&dpr=1.5&pid=1.7&rm=3"],
    
   ["asal" => "Jawa",
    "nama" => "batik",
   "tahun" => "2009 (Warisan UNESCO)", 
   "deskripsi" => "Seni lukis tekstil menggunakan malam/lilin panas dengan teknik tradisional menggunakan canting atau cap.",
   "gambar" => "https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/fff8a6b4-00dd-4fc8-bdeb-68ba39e86b8c.png"],
   
   ["asal" => "Sumatera Barat",
    "nama" => "Rumah Gadang",
   "tahun" => "Warisan Budaya Takbenda (2010)", 
   "deskripsi" => "Rumah adat Minangkabau dengan atap berbentuk tanduk kerbau dan struktur besar tanpa paku.",
   "gambar" => "https://th.bing.com/th/id/OIP.kdTx9xBg0yTtvF8kH2DjTQHaE7?w=280&h=187&c=7&r=0&o=7&dpr=1.5&pid=1.7&rm=3"],

    ["asal" => "Jawa Tengah",
    "nama" => "Wayang Kulit",
   "tahun" => "2003 (Warisan UNESCO)",
   "deskripsi" => "Pertunjukan seni tradisional dengan boneka kulit yang dimainkan oleh dalang diiringi gamelan dan nyanyian.", 
   "gambar" => "https://th.bing.com/th/id/OIP.RdZq5izW3BDa4AGL36Iy1QHaFj?w=233&h=180&c=7&r=0&o=7&dpr=1.5&pid=1.7&rm=3"],
   
   ["asal" => "amerika",
    "nama" => "Apple",
   "tahun" => "1976", 
   "deskripsi" => "Perusahaan teknologi raksasa asal Amerika yang terkenal dengan produk iPhone, Mac, dan iPad.",
   "gambar" => "https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/d25d4585-4a30-48a5-848d-a0d94a94db03.png"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" paddingcell"8">
        <th>no</th>
        <th>asal</th>
        <th>nama</th>
        <th>tahun</th>
        <th>deskripsi</th>
        <th>gambar</th>
      <?php  foreach ($data as $i => $row) :?>
    <tr>
        <td><?= $i + 1; ?></td>
        <td><?= $row["asal"];?></td>
        <td><?= $row["nama"];?></td>
        <td><?= $row["tahun"];?></td>
        <td><?= $row["deskripsi"];?></td>
        <td><?= $row["gambar"];?></td>
    </tr>
    <?php endforeach; ?> 
    </table>
</body>
</html>