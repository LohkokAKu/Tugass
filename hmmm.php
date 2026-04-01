<!--No. 1 
*Jika saya lapar, maka saya akan makan -->
<?php
$laper = true;

if ($laper) {
    echo "Saya lapar, maka dari itu saya akan makan";
}
echo "<hr>";
?>
<!--No. 2
*Jika pakaian saya tidak bersih, maka saya akan mencucinya. -->
<?php
$pakaian_bersih = false;

if (!$pakaian_bersih) {
    echo "Pakaian belum bersih, maka saya akan mencucinya";
}
echo "<hr>";
?>
<!--No. 3
*Jika cuaca hujan, maka saya akan membawa payung.
Selain itu, saya akan keluar rumah tanpa membawa payung. -->
<?php
$kondisi_cuaca = "hujan";

if ($kondisi_cuaca === "hujan") {
    echo "Cuaca sedang hujan, maka saya akan membawa payung";
} 
else {
    echo "Cuaca sedang tidak hujan, maka saya akan keluar rumah tanpa membawa payung";
}
echo "<hr>";
?>
<!--No.4-->
<!-- *Jika tubuh sangat lelah, maka saya akan segera beristirahat.
Jika tubuh agak lelah, maka saya akan duduk dan minum air.
Jika tubuh terasa lapar, maka saya akan makan.
Jika tubuh terasa haus, maka saya akan minum.
Jika tubuh terasa segar, maka saya akan melanjutkan aktivitas.
Selain itu kondisi tubuh tidak diketahui, maka perlu istirahat dan mengecek kondisi tubuh -->
<?php
$kondisi_tubuh = "sangat lelah";

if ($kondisi_tubuh === "sangat lelah") {
    echo "Kondisi tubuh sangat lelah, maka saya akan segera beristirahat";
}
elseif ($kondisi_tubuh === "agak lelah") {
    echo "Kondisi tubuh agak lelah, maka saya akan duduk dan minum air";
}
elseif ($kondisi_tubuh === "lapar") {
    echo "Kondisi tubuh terasa lapar, maka saya akan makan";
}
elseif ($kondisi_tubuh === "haus") {
    echo "Kondisi tubuh terasa haus, maka saya akan minum";
}
elseif ($kondisi_tubuh === "segar") {
    echo "Kondisi tubuh terasa segar, maka saya akan melanjutkan aktivitas";
}
else {
    echo "Kondisi tubuh tidak dikenali, maka perlu istirahat dan mengecek kondisi tubuh";
}
echo "<hr>";
?>
<!--No. 5-->
<!-- Jika waktu pagi 
Jika lapar, maka saya akan sarapan. 
Jika tidak lapar, maka saya akan minum teh atau kopi. 
Selain itu, kondisi tidak dikenali. 

Jika waktu siang 
Jika lapar, maka saya akan makan siang. 
Jika tidak lapar, maka saya akan melanjutkan aktivitas. 
Selain itu, kondisi tidak dikenali. 
Selain itu, waktu tidak dikenali. 
 -->
<?php
$waktu = "pagi";
$kondisi_lapar = "lapar";

if ($waktu === "pagi") {
    if ($kondisi_lapar === "lapar") {
        echo "Waktu pagi, Saatnya saya akan sarapan";
    } else {
        echo "Waktu pagi, Saya akan minum teh atau kopi saja";
    }
}
elseif ($waktu === "siang") {
    if ($kondisi_lapar === "lapar") {
        echo "Waktu siang, Saatnya saya akan makan siang";
    } else {
        echo "Waktu siang, Saya akan melanjutkan aktivitas dulu";
    }
} else {
    echo "Kondisi dan Waktu yang tidak dikenali";
}
echo "<hr>";
?>
<!--No. 6
Jika cuaca cerah dan saya ingin olahraga, maka saya akan jogging di luar rumah.
Jika cuaca hujan dan saya ingin olahraga, maka saya akan olahraga di dalam rumah.
Jika cuaca cerah dan saya ingin bersantai, maka saya akan duduk di taman.
Jika cuaca hujan dan saya ingin bersantai, maka saya akan bersantai di dalam rumah.
Selain itu, aktivitas akan disesuaikan dengan keadaan.  -->
<?php
$aktivitas_olga = "ingin";
$cuaca_cerah = true;

if ($aktivitas_olga === "ingin" && $cuaca_cerah) {
    echo "Saya ingin berolahraga, maka saya akan jogging di luar rumah";
} 
elseif ($aktivitas_olga === "ingin" && !$cuaca_cerah) {
    echo "Saya ingin berolahraga, tetapi cuaca hujan, maka saya akan olahraga di dalam rumah";
}
elseif ($aktivitas_olga === "malaz" && $cuaca_cerah) {
    echo "Saya ingin bersantai, maka saya akan duduk di taman";
}
elseif ($aktivitas_olga === "malaz" && !$cuaca_cerah) {
    echo "Saya ingin bersantai, tetapi cuaca hujan, maka saya akan bersantai di dalam rumah";
}
else {
    echo "Aktivitasnya menyesuaikan dengan keadaan";
}
echo "<hr>";
?>
<!--No. 7
Selama berada di rumah, jika kegiatannya belajar, menonton TV, atau bermain HP, maka lakukan dengan tertib dan tidak mengganggu orang lain. 
Selama berada di luar rumah, jika belajar, menonton, atau bermain HP, maka lakukan di tempat yang aman dan nyaman -->
<?php
$tempat = "rumah";
$kegiatan = "belajar";

if ($tempat === "rumah" && ($kegiatan === "belajar" || $kegiatan === "menonton TV" || $kegiatan === "bermain HP")) {
    echo "Lakukan kegiatan dengan tertib dan tidak mengganggu orang lain.";
} 
else {
    echo "Lakukan kegiatan ditempat yang aman dan nyaman.";
}
?>
<!-- ada yang bisa di boolean sama di string sihhh tapi gini dulu 26/03/2026-->