<!--No. 1-->
<!-- *Jika stok bahan kain di gudang tersedia, maka proses pemotongan pola baju dapat segera dimulai. -->
<?php
$stok_kain = "Tersedia";

if ($stok_kain === "Tersedia") {
    echo "Proses pemotongan pola baju dapat dimulai";
}
?>
<!--No. 2-->
<!-- *Jika mesin obras tidak dalam kondisi siap pakai, maka proses obras baju harus ditunda sampai mesin diperbaiki. -->
<?php
$kondisi_mesin_obras = "Belum Tersedia";

if ($kondisi_mesin_obras === "Belum Tersedia") {
    echo "Mesin obras belum siap digunakan. Perbaikan pada mesin diperlukan hingga mesin telah diperbaiki";
}
?>
<!--No. 3-->
<!-- *Jika hasil jahitan baju sudah rapi dan sesuai pola, maka baju langsung dikirim ke bagian finishing selain itu, jika belum rapi, baju dikembalikan ke penjahit untuk diperbaiki terlebih dahulu. -->
<?php
$hasil_jahitan = "Sesuai";

if ($hasil_jahitan === "Sesuai") {
    echo "Hasil jahitan sesuai Pola! Mengirim ke bagian finishing";
} 
else {
    echo "Hasil jahitan tidak sesuai Pola, mengembalikan ke bagian penjahitan untuk diperbaiki";
}
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
$kualitas_produksi = "Cacat Berat";

if ($kualitas_produksi === "Cacat Berat") {
    echo "Baju hasil produksi memiliki jahitan lepas di banyak titik dan kain robek. Baju dikembalikan untuk didaur ulang sebagai kain perca";
}
elseif ($kualitas_produksi === "Jahitan tidak rapi") {
    echo "Baju hasil produksi memiliki jahitan tidak rapi namun kain masih utuh. Baju dikembalikan untuk diperbaiki ulang oleh bagian penjahitan";
}
elseif ($kualitas_produksi === "Warna kain tidak merata") {
    echo "Baju hasil produksi memiliki warna yang tidak merata/belang. Baju dikembalikan untuk proses ulang oleh bagian pewarnaan";
}
elseif ($kualitas_produksi === "Ukuran tidak sesuai") {
    echo "Baju hasil produksi memiliki ukuran yang tidak sesuai dengan pola yang diminta. Baju dipisahkan dan dicatat sebagai produk reject ukuran";
}
elseif ($kualitas_produksi === "Kusut") {
    echo "Baju hasil produksi dalam kondisi baik namun kusut akibat proses produksi. Baju akan dirapikan dan disetrika oleh bagian finishing";
}
else {
    echo "Kondisi baju tidak dikenali, maka laporkan ke supervisor secara manual"
}
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
$jenis_baju = "Kemeja";
$tingkat_kerusakan = "Berat";

if ($jenis_baju === "Kemeja") {

    if ($tingkat_kerusakan === "Berat") {
        echo "Kemeja memiliki kerusakan berat seperti kain robek besar, obras lepas merata. Kemeja akan didaur ulang menjadi kain perca atau akan dibuang";
    }
    elseif ($tingkat_kerusakan === "Sedang") {
        echo "Kemeja memiliki kerusakan sedang seperti kancing copot, jahitan samping lepas. Kemeja akan dikembalikan ke bagian jahit untuk diperbaiki";
    }
    elseif ($tingkat_kerusakan === "Ringan") {
        echo "Kemeja memiliki kerusakan ringan seperti benang keluar sedikit, permukaan kusut. Kemeja cukup dirapikan dan disetrika di bagian finishing";
    }
    else {
        echo "Kemeja memiliki kerusakan yang tidak dikenal. Laporkan ke supervisor";
    }
}
elseif ($jenis_baju === "Kaos") {

    if ($tingkat_kerusakan === "Berat") {
        echo "Kaos memiliki kerusakan berat seperti sablon mengelupas parah, kain berlubang. Kaos dimasukkan ke kategori reject dan tidak boleh dijual";
    }
    elseif ($tingkat_kerusakan === "Sedang") {
        echo "Kaos memiliki kerusakan sedang seperti sablon sedikit retak, jahitan leher longgar. Kaos akan dikirim ke bagian rework";
    }
    elseif ($tingkat_kerusakan === "Ringan") {
        echo "Kaos memiliki kerusakan ringan seperti permukaan kusut. Kaos akan dicuci dan disetrika ulang";
    }
    else {
        echo "Kaos memiliki kerusakan yang tidak dikenal. Laporkan ke supervisor";
    }
}
?>
<!--No. 6-->
<!-- Jika pesanan bersifat URGENT DAN stok kain tersedia,
maka produksi langsung dimulai dan masuk jalur prioritas cepat.
Jika pesanan bersifat URGENT DAN stok kain tidak tersedia,
maka bagian pengadaan segera menghubungi supplier dan meminta pengiriman ekspres. -->
<?php
$status_pesanan = "Urgent";
$stok_kain = "Tersedia";

if ($status_pesanan === "Urgent" && $stok_kain === "Tersedia") {
    echo "Produksi akan langsung dimulai didalam jalur prioritas";
} 
elseif ($status_pesanan === "Urgent" && $stok_kain === "Tidak Tersedia") {
    echo "Supplier akan dihubungi untuk pengiriman tingkat express";
}
?>
<!--No. 7-->
<!-- Selama berada di area produksi jahit, jika sedang mengerjakan kemeja, kaos, jaket, atau jenis baju lainnya, seluruh karyawan wajib mengenakan seragam pabrik, celemek pelindung, dan masker sesuai standar keselamatan kerja. -->
<?php
$area = "Produksi";
$jenis_baju = "Kemeja";

if ($area === "Produksi") {
    echo "Karyawan wajib diharuskan untuk memakai seragam pabrik, celemek pelindung, dan masker sesuai standar keselamatan pekerja";
} 
else {
    echo "Karyawan diperbolehkan mengenakan pakaian rapi sesuai divisi masing-masing namun tetap sopan dan sesuai peraturan perusahaan";
}
?>