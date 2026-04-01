<!--No. 1 
*Jika stok bahan kain di gudang tersedia, maka proses pemotongan pola baju dapat segera dimulai. -->
<?php
$stok_kain = true;

if ($stok_kain) {
    echo "Proses pemotongan pola baju dapat dimulai";
}
echo "<hr>";
?>
<!--No. 2-->
<!-- *Jika mesin obras tidak dalam kondisi siap pakai, maka proses obras baju harus ditunda sampai mesin diperbaiki -->
<?php
$kondisi_mesin_obras = false;

if (!$kondisi_mesin_obras) {
    echo "Mesin obras belum siap digunakan. Perbaikan pada mesin diperlukan hingga mesin telah diperbaiki";
}
echo "<hr>";
?>
<!--No. 3-->
<!-- *Jika hasil jahitan baju sudah rapi dan sesuai pola, maka baju langsung dikirim ke bagian finishing selain itu, jika belum rapi, baju dikembalikan ke penjahit untuk diperbaiki terlebih dahulu. -->
<?php
$hasil_jahitan = "sesuai";

if ($hasil_jahitan === "sesuai") {
    echo "Hasil jahitan sesuai Pola! Mengirim ke bagian finishing";
} 
else {
    echo "Hasil jahitan tidak sesuai Pola, mengembalikan ke bagian penjahitan untuk diperbaiki";
}
echo "<hr>";
?>
<!--No.4-->
<!-- *Jika baju memiliki jahitan lepas di banyak titik dan kain robek,
maka baju dikategorikan cacat berat dan didaur ulang menjadi kain perca.
*Jika baju memiliki jahitan tidak rapi namun kain masih utuh,
maka baju dikembalikan ke bagian jahit untuk diperbaiki ulang.
*Jika baju memiliki warna kain tidak merata atau belang,
maka baju dikirim kembali ke bagian pewarnaan untuk proses ulang.
*Jika baju memiliki ukuran tidak sesuai dengan pola yang diminta,
maka baju dipisahkan dan dicatat sebagai produk reject ukuran.
*Jika baju dalam kondisi baik namun kusut akibat proses produksi,
maka baju disetrika dan dirapikan di bagian finishing.
*Selain itu,jika kondisi baju tidak dikenali, maka laporkan ke supervisor secara manual. -->
<?php
$kualitas_produksi = "cacat berat";

if ($kualitas_produksi === "cacat berat") {
    echo "Baju hasil produksi memiliki jahitan lepas di banyak titik dan kain robek. Baju dikembalikan untuk didaur ulang sebagai kain perca";
}
elseif ($kualitas_produksi === "jahitan tidak rapi") {
    echo "Baju hasil produksi memiliki jahitan tidak rapi namun kain masih utuh. Baju dikembalikan untuk diperbaiki ulang oleh bagian penjahitan";
}
elseif ($kualitas_produksi === "warna tidak merata") {
    echo "Baju hasil produksi memiliki warna yang tidak merata/belang. Baju dikembalikan untuk proses ulang oleh bagian pewarnaan";
}
elseif ($kualitas_produksi === "ukuran tidak sesuai") {
    echo "Baju hasil produksi memiliki ukuran yang tidak sesuai dengan pola yang diminta. Baju dipisahkan dan dicatat sebagai produk reject ukuran";
}
elseif ($kualitas_produksi === "kusut") {
    echo "Baju hasil produksi dalam kondisi baik namun kusut akibat proses produksi. Baju akan dirapikan dan disetrika oleh bagian finishing";
}
else {
    echo "Kondisi baju tidak dikenali, maka laporkan ke supervisor secara manual";
}
echo "<hr>";
?>
<!--No. 5-->
<!-- jenis baju adalah KEMEJA:
Jika kerusakan berat (kain robek besar, obras lepas merata),
maka kemeja didaur ulang menjadi kain perca atau dibuang.
Jika kerusakan sedang (kancing copot, jahitan samping lepas),
maka kemeja dikembalikan ke bagian jahit untuk diperbaiki.
Jika kerusakan ringan (benang keluar sedikit, permukaan kusut),
maka kemeja cukup dirapikan dan disetrika di bagian finishing.
Selain itu, tingkat kerusakan kemeja tidak dikenali,
maka laporkan ke supervisor untuk pengecekan manual.

jenis baju adalah KAOS:
Jika kerusakan berat (sablon mengelupas parah, kain berlubang),
maka kaos dimasukkan ke kategori reject dan tidak boleh dijual.
Jika kerusakan sedang (sablon sedikit retak, jahitan leher longgar),
maka kaos dikirim ke bagian rework untuk perbaikan sablon atau jahitan.
Jika kerusakan ringan (permukaan kusut, sedikit kotor dari proses produksi),
maka kaos dicuci, dikeringkan, dan disetrika ulang di bagian finishing.
Selain itu, tingkat kerusakan kaos tidak dikenali,
laporkan ke supervisor untuk pengecekan manual. -->
<?php
$jenis_baju = "kemeja";
$tingkat_kerusakan = "berat";

if ($jenis_baju === "kemeja") {

    if ($tingkat_kerusakan === "berat") {
        echo "Kemeja memiliki kerusakan berat seperti kain robek besar, obras lepas merata. Kemeja akan didaur ulang menjadi kain perca atau akan dibuang";
    }
    elseif ($tingkat_kerusakan === "sedang") {
        echo "Kemeja memiliki kerusakan sedang seperti kancing copot, jahitan samping lepas. Kemeja akan dikembalikan ke bagian jahit untuk diperbaiki";
    }
    elseif ($tingkat_kerusakan === "ringan") {
        echo "Kemeja memiliki kerusakan ringan seperti benang keluar sedikit, permukaan kusut. Kemeja cukup dirapikan dan disetrika di bagian finishing";
    }
    else {
        echo "Kemeja memiliki kerusakan yang tidak dikenal. Laporkan ke supervisor";
    }
}
elseif ($jenis_baju === "kaos") {

    if ($tingkat_kerusakan === "berat") {
        echo "Kaos memiliki kerusakan berat seperti sablon mengelupas parah, kain berlubang. Kaos dimasukkan ke kategori reject dan tidak boleh dijual";
    }
    elseif ($tingkat_kerusakan === "sedang") {
        echo "Kaos memiliki kerusakan sedang seperti sablon sedikit retak, jahitan leher longgar. Kaos akan dikirim ke bagian rework";
    }
    elseif ($tingkat_kerusakan === "ringan") {
        echo "Kaos memiliki kerusakan ringan seperti permukaan kusut. Kaos akan dicuci dan disetrika ulang";
    }
    else {
        echo "Kaos memiliki kerusakan yang tidak dikenal. Laporkan ke supervisor";
    }
}
echo "<hr>";
?>
<!--No. 6-->
<!-- Jika pesanan bersifat URGENT DAN stok kain tersedia,
maka produksi langsung dimulai dan masuk jalur prioritas cepat.
Jika pesanan bersifat URGENT DAN stok kain tidak tersedia,
maka bagian pengadaan segera menghubungi supplier dan meminta pengiriman ekspres. -->
<?php
$status_pesanan = "urgent";
$stok_kain = true;

if ($status_pesanan === "urgent" && $stok_kain) {
    echo "Produksi akan langsung dimulai didalam jalur prioritas";
} 
elseif ($status_pesanan === "urgent" && !$stok_kain) {
    echo "Supplier akan dihubungi untuk pengiriman tingkat express";
}
echo "<hr>";
?>
<!--No. 7-->
<!-- Selama berada di area produksi jahit, jika sedang mengerjakan kemeja, kaos, jaket, atau jenis baju lainnya, seluruh karyawan wajib mengenakan seragam pabrik, celemek pelindung, dan masker sesuai standar keselamatan kerja. -->
<?php
$area = "produksi";
$jenis_baju = "kemeja";

if ($area === "produksi" && ($jenis_baju === "kemeja" || $jenis_baju === "kaos" || $jenis_baju === "jaket" || $jenis_baju === "lainnya")) {
    echo "Karyawan wajib diharuskan untuk memakai seragam pabrik, celemek pelindung, dan masker sesuai standar keselamatan pekerja";
} 
else {
    echo "Karyawan diperbolehkan mengenakan pakaian rapi sesuai divisi masing-masing namun tetap sopan dan sesuai peraturan perusahaan";
}
?>
<!-- so it can run in laragon -->
