-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 15 Okt 2022 pada 19.09
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ocan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas_hotel`
--

CREATE TABLE `fasilitas_hotel` (
  `kode_fasilitas` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fa_bisnis`
--

CREATE TABLE `fa_bisnis` (
  `kode_fasilitas` int(11) NOT NULL,
  `jenis_kategori` varchar(64) NOT NULL,
  `meeting_room` tinyint(1) NOT NULL,
  `ruang_komputer` tinyint(1) NOT NULL,
  `proyektor` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fa_kamar`
--

CREATE TABLE `fa_kamar` (
  `kode_fasilitas` int(11) NOT NULL,
  `jenis_kategori` varchar(64) NOT NULL,
  `tv_kebel` tinyint(1) NOT NULL,
  `brankas_kamar` tinyint(1) NOT NULL,
  `kulkas` tinyint(1) NOT NULL,
  `console_game` tinyint(1) NOT NULL,
  `wifi` tinyint(1) NOT NULL,
  `bathtub` tinyint(1) NOT NULL,
  `shower` tinyint(1) NOT NULL,
  `ac` tinyint(1) NOT NULL,
  `cemilan` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fa_kebugaran`
--

CREATE TABLE `fa_kebugaran` (
  `kode_fasilitas` int(11) NOT NULL,
  `jenis_kategori` varchar(64) NOT NULL,
  `gym` tinyint(1) NOT NULL,
  `lapangan` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fa_publik`
--

CREATE TABLE `fa_publik` (
  `kode_fasilitas` int(11) NOT NULL,
  `jenis_kategori` varchar(64) NOT NULL,
  `area_parkir` tinyint(1) NOT NULL,
  `cafe` tinyint(1) NOT NULL,
  `restaurant` tinyint(1) NOT NULL,
  `area_keluarga` tinyint(1) NOT NULL,
  `taman_bermain_anak` tinyint(1) NOT NULL,
  `wifi_umum` tinyint(1) NOT NULL,
  `kolam_renang` tinyint(1) NOT NULL,
  `taman` tinyint(1) NOT NULL,
  `perpustakaan` tinyint(1) NOT NULL,
  `tempat_ibadah` tinyint(1) NOT NULL,
  `aula` tinyint(1) NOT NULL,
  `area_merokok` tinyint(1) NOT NULL,
  `area_bebas_rokok` tinyint(1) NOT NULL,
  `sauna` tinyint(1) NOT NULL,
  `spa` tinyint(1) NOT NULL,
  `layanan_pijat` tinyint(1) NOT NULL,
  `laundry` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fa_terdekat`
--

CREATE TABLE `fa_terdekat` (
  `kode_fasilitas` int(11) NOT NULL,
  `jenis_kategori` varchar(64) NOT NULL,
  `mall` tinyint(1) NOT NULL,
  `atm/bank` tinyint(1) NOT NULL,
  `salon` tinyint(1) NOT NULL,
  `supermarket` tinyint(1) NOT NULL,
  `toko_oleh_oleh` tinyint(1) NOT NULL,
  `rumah_sakit` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fa_transportasi`
--

CREATE TABLE `fa_transportasi` (
  `kode_fasilitas` int(11) NOT NULL,
  `jenis_kategori` varchar(64) NOT NULL,
  `mobil_sewa` tinyint(1) NOT NULL,
  `antar_jemput` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gerbong`
--

CREATE TABLE `gerbong` (
  `id_gerbong` int(11) NOT NULL,
  `nama_gerbong` varchar(64) NOT NULL,
  `jumlah_kursi` int(11) NOT NULL,
  `nomor_kursi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gerbong`
--

INSERT INTO `gerbong` (`id_gerbong`, `nama_gerbong`, `jumlah_kursi`, `nomor_kursi`) VALUES
(1, 'Comet Lake', 5, 0),
(2, 'Ice Lake', 10, 0),
(3, 'Wishkey Lake', 20, 0),
(4, 'Coffee Lake', 40, 0),
(5, 'Kaby Lake', 80, 0),
(6, 'Sky Lake', 160, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotel`
--

CREATE TABLE `hotel` (
  `id_hotel` int(11) NOT NULL,
  `nama_hotel` varchar(128) NOT NULL,
  `alamat_hotel` varchar(256) NOT NULL,
  `jumlah_kamar` int(4) NOT NULL,
  `rating_hotel` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_keberangkatan_kereta`
--

CREATE TABLE `jadwal_keberangkatan_kereta` (
  `id_jadwal_kereta` int(11) NOT NULL,
  `id_kereta` int(11) NOT NULL,
  `nama_kereta` varchar(64) NOT NULL,
  `id_gerbong` int(11) NOT NULL,
  `nama_gerbong` varchar(64) NOT NULL,
  `kedatangan _kereta` time NOT NULL,
  `keberangkatan_kereta` time NOT NULL,
  `sampai_tujuan` time NOT NULL,
  `asal_kereta` varchar(128) NOT NULL,
  `tujuan_kereta` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal_keberangkatan_kereta`
--

INSERT INTO `jadwal_keberangkatan_kereta` (`id_jadwal_kereta`, `id_kereta`, `nama_kereta`, `id_gerbong`, `nama_gerbong`, `kedatangan _kereta`, `keberangkatan_kereta`, `sampai_tujuan`, `asal_kereta`, `tujuan_kereta`) VALUES
(1, 10, '05 Gumit', 1, 'Comet Lake', '15:00:00', '15:30:00', '16:00:00', 'Stabat', 'Gumit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_keberangkatan_pesawat`
--

CREATE TABLE `jadwal_keberangkatan_pesawat` (
  `id_jadwal_pesawat` int(11) NOT NULL,
  `id_pesawat` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nama_maskapai` varchar(128) NOT NULL,
  `kelas_penerbangan` varchar(64) NOT NULL,
  `kota_asal` varchar(128) NOT NULL,
  `kota_tujuan` varchar(128) NOT NULL,
  `bandara_asal` varchar(128) NOT NULL,
  `bandara_tujuan` varchar(128) NOT NULL,
  `jadwal_kedatangan` time NOT NULL,
  `jadwal_keberangkatan` time NOT NULL,
  `sampai_tujuan` time NOT NULL,
  `lama_perjalanan` int(2) NOT NULL,
  `harga` int(12) NOT NULL,
  `logo` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal_keberangkatan_pesawat`
--

INSERT INTO `jadwal_keberangkatan_pesawat` (`id_jadwal_pesawat`, `id_pesawat`, `id_kelas`, `nama_maskapai`, `kelas_penerbangan`, `kota_asal`, `kota_tujuan`, `bandara_asal`, `bandara_tujuan`, `jadwal_kedatangan`, `jadwal_keberangkatan`, `sampai_tujuan`, `lama_perjalanan`, `harga`, `logo`) VALUES
(1, 1, 2, 'Garuda Indonesia', 'Business Class', 'Jakarta', 'Medan', 'Soekarno Hatta (CKG)', 'Kuala Namu (KNO)', '05:00:00', '07:00:00', '09:00:00', 2, 2500000, 'garudaIndonesia'),
(2, 2, 2, 'Air Asia', 'Business Class', 'Jakarta', 'Medan', 'Soekarno Hatta (CKG)', 'Kuala Namu (KNO)', '09:00:00', '12:00:00', '14:00:00', 2, 1570000, 'airAsia\n'),
(3, 3, 2, 'Lion Air', 'Business Class', 'Jakarta', 'Lion Air', 'Soekarno Hatta (CKG)', 'Kuala Namu (KNO)', '10:00:00', '12:00:00', '15:00:00', 3, 850000, 'lionAir'),
(4, 4, 2, 'Batik Air', 'Business Class', 'Jakarta', 'Batik Air', 'Soekarno Hatta (CKG)', 'Kuala Namu (KNO)', '15:00:00', '17:00:00', '17:00:00', 2, 3200000, 'batikAir'),
(5, 5, 2, 'Citilink', 'Business Class', 'Jakarta', 'Medan', 'Soekarno Hatta (CKG)', 'Kuala Namu (KNO)', '03:00:00', '04:00:00', '05:00:00', 1, 3200000, 'citilink'),
(6, 1, 1, 'Garuda Indonesia', 'First Class', 'Jakarta', 'Medan', 'Soekarno Hatta (CKG)', 'Kuala Namu (KNO)', '05:00:00', '07:00:00', '09:00:00', 2, 2500000, 'garudaIndonesia'),
(7, 2, 1, 'Air Asia', 'First Class', 'Jakarta', 'Medan', 'Soekarno Hatta (CKG)', 'Kuala Namu (KNO)', '09:00:00', '12:00:00', '14:00:00', 2, 1570000, 'airAsia\n'),
(8, 3, 1, 'Lion Air', 'First Class', 'Jakarta', 'Medan', 'Soekarno Hatta (CKG)', 'Kuala Namu (KNO)', '10:00:00', '12:00:00', '15:00:00', 3, 900000, 'lionAir'),
(9, 4, 1, 'Batik Air', 'First Class', 'Jakarta', 'Medan', 'Soekarno Hatta (CKG)', 'Kuala Namu (KNO)', '15:00:00', '16:00:00', '17:00:00', 1, 3200000, 'batikAir'),
(10, 5, 1, 'Citilink', 'First Class', 'Jakarta', 'Medan', 'Soekarno Hatta (CKG)', 'Kuala Namu (KNO)', '03:00:00', '04:00:00', '05:00:00', 1, 3200000, 'citilink'),
(11, 1, 3, 'Garuda Indonesia', 'Economy Class', 'Jakarta', 'Medan', 'Soekarno Hatta (CKG)', 'Kuala Namu (KNO)', '05:00:00', '07:00:00', '09:00:00', 2, 2500000, 'garudaIndonesia'),
(12, 2, 3, 'Air Asia', 'Economy Class', 'Jakarta', 'Medan', 'Soekarno Hatta (CKG)', 'Kuala Namu (KNO)', '09:00:00', '12:00:00', '14:00:00', 2, 1570000, 'airAsia\n'),
(13, 3, 3, 'Lion Air', 'Economy Class', 'Jakarta', 'Medan', 'Soekarno Hatta (CKG)', 'Kuala Namu (KNO)', '10:00:00', '12:00:00', '15:00:00', 3, 900000, 'lionAir'),
(14, 4, 3, 'Batik Air', 'Economy Class', 'Jakarta', 'Medan', 'Soekarno Hatta (CKG)', 'Kuala Namu (KNO)', '15:00:00', '16:00:00', '17:00:00', 1, 3200000, 'batikAir'),
(15, 5, 3, 'Citilink', 'Economy Class', 'Jakarta', 'Medan', 'Soekarno Hatta (CKG)', 'Kuala Namu (KNO)', '03:00:00', '04:00:00', '05:00:00', 1, 3200000, 'citilink'),
(17, 1, 1, 'Garuda Indonesia', 'First Class', 'Jakarta', 'Garuda Indonesia', 'Kuala Namu (KNO)', 'Soekarno Hatta (CGA)', '12:00:00', '13:00:00', '16:00:00', 3, 2300000, 'garudaIndonesia'),
(18, 1, 1, 'Garuda Indonesia', 'First Class', '', 'Garuda Indonesia', '', '', '00:00:00', '00:00:00', '00:00:00', 0, 0, 'garudaIndonesia'),
(19, 1, 1, 'Garuda Indonesia', 'First Class', '', 'Garuda Indonesia', '', '', '00:00:00', '00:00:00', '00:00:00', 0, 0, 'garudaIndonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar_hotel`
--

CREATE TABLE `kamar_hotel` (
  `id_kamar` int(11) NOT NULL,
  `kode_fasilitas` int(11) NOT NULL,
  `no_kamar` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas_maskapai`
--

CREATE TABLE `kelas_maskapai` (
  `id_kelas` int(11) NOT NULL,
  `jenis_kelas` varchar(64) NOT NULL,
  `no_seat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas_maskapai`
--

INSERT INTO `kelas_maskapai` (`id_kelas`, `jenis_kelas`, `no_seat`) VALUES
(1, 'first class', 0),
(2, 'business class', 0),
(3, 'economy class', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kereta`
--

CREATE TABLE `kereta` (
  `id_kereta` int(11) NOT NULL,
  `nama_kereta` varchar(64) NOT NULL,
  `daya_tampung_kereta` int(4) NOT NULL,
  `rating_kereta` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kereta`
--

INSERT INTO `kereta` (`id_kereta`, `nama_kereta`, `daya_tampung_kereta`, `rating_kereta`) VALUES
(6, 'Pinang Baris', 335, 3),
(7, 'Kuala', 335, 3),
(8, 'Stabat', 335, 4),
(9, 'Handa Yani', 335, 5),
(10, 'Gumit', 335, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan`
--

CREATE TABLE `makanan` (
  `id_makanan` int(11) NOT NULL,
  `nama_makanan` varchar(100) NOT NULL,
  `kategori_makanan` varchar(100) NOT NULL,
  `waktu_makan` int(100) NOT NULL,
  `deskripsi_makanan` varchar(1000) NOT NULL,
  `harga_makanan` int(100) NOT NULL,
  `gambar_makanan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`id_makanan`, `nama_makanan`, `kategori_makanan`, `waktu_makan`, `deskripsi_makanan`, `harga_makanan`, `gambar_makanan`) VALUES
(1, 'medium burger with smoke beff and extra mayo', 'burger', 0, 'Burger ukuran sedang dengan isian lengkap, ekstra mayo, sayuran segar dan daging asap.', 35000, 'burger_ekstra_mayo.png'),
(2, 'burger dengan medium cook', 'burger', 0, 'Burger isian lengkap dengan daging yang di masak dengan tingkat kematangan medium dan keju yang lume', 40000, 'burger_medium_cook.png'),
(3, 'burger dengan ekstra beff', 'burger', 0, 'Perpaduan roti yang lembut dengan daging beff yang lebih tebal pada umumnya. memberikan kepusan lebi', 35000, 'burger_ekstra_beef.png'),
(4, 'burger dengan beff tiga lapis', 'burger', 0, 'daging beff berlapis yang di padukan dengan keju lumer memeberikan sensasi pada gigitan pertama', 45000, 'burger_dengan_daging_berlapis.png'),
(5, 'burger with spices oil', 'burger', 0, 'daging pilihan yang di masak dengan minyak yang di perkaya dengan rempah memberikan sensai tersendir', 37000, 'burger_with_spices_oil.png'),
(6, 'healty burger with not oil', 'burger', 0, 'sayuran segar yang di padukan dengan roti rnyah dan keju yang di panggan setra danging asap akan mem', 35000, 'burger_withnot_oil.png'),
(7, 'two burger in one', 'burger', 0, 'dua burger yang di gabung menjadi satu di tambahn isian ayam crispy dan saus lemon segar yang member', 50000, 'two_burger_in_one.png'),
(8, 'victorian black burger', 'burger', 0, 'petty hitam, daging asap dan keju yang berlapis serta beff yang tebal yang hanya di tujukan untuk kalian', 55000, 'victorian black burger.png'),
(9, 'beff monster with black wijen burger', 'burger', 0, 'petty dengan wijen hitam dengan daging utuh ukuran besar akan memuaskan perut anda yang sedang lapar', 45000, 'beef_monster_burger.png'),
(10, 'sweet burger with potato', 'burger', 0, 'irisan daging empuk dengan sayuran segar dan mayo yang gurih akan memanjakan lidah anda saat menggig', 55000, 'sweet_burger_with_potato.png'),
(11, 'chicken wings with fance fried', 'ayam', 0, 'sayap ayam dengan kentang goreng dan mes potato ukuran medium', 25000, 'chicken_wings_with_potato.png'),
(12, 'medium fried chicken', 'ayam', 0, 'ayam goreng ukuran medium dengan kernyahan dan dan sensasi yang berbeda', 25000, 'medium_fried_chicken.png'),
(13, 'chicken with soya and spaces', 'ayam', 0, 'kelezatan ayam kicap yang di satukan hangatnya rempah rempah topis', 30000, 'chicken_soya.png'),
(14, 'kfc jumbo with frances fried', 'ayam', 0, 'kelezataan ayam goreng renyah yang di temani dengan lezatnya kentang goreng dari kentang segar pilihan', 55000, 'jumbo_box_with_frances_fried.png'),
(15, 'jumbo box kfc', 'ayam', 0, 'kernyahan ayam yang di padukan bahan bahan pilihan', 50000, 'kfc_jumbo_box.png'),
(16, 'paket komplete keluarga', 'ayam', 0, 'satu ayam box besar, \r\n4 burger ukuran medium,\r\nsatu potong ayam bakar,\r\nsatu taco,\r\nsatu salad ukuran kecil,\r\ndua paket ayam ukuran kecil,\r\nsatu buah nuget ayam,\r\nsatu kentang goreng\r\n', 220000, 'paket_komplit_keluarga.png'),
(17, 'isian hati dengan minyak rempah', 'ayam', 0, 'hati ayam yang di bungkus dengan kulit dari daging iris yang di masak dengan minyak rempah', 30000, 'rempah_hati_ayam.png'),
(29, 'chicken wings with chilli oil', 'ayam', 0, 'kelezatan sayap ayam yang masak dengan minyak rempah pedas yang menggugah selera', 40000, 'spaicy wings.png'),
(30, 'paket ayam besar dengan tambahan mayones', 'ayam', 0, 'ayam goreng posri besar dengan tambahan mayo akan memberikan kepuasan kepada anda saat menyantapnya', 150000, 'paket  besar dengan mayo.png'),
(31, 'acar_timun.png', 'indonesian_food', 0, 'acar timun yang kami buat berasal dari bahan bahan segar dan terbaik. di petik dari pohon dan di olah secara higienis', 15000, 'acar_timun.png'),
(32, 'nasi goreng metropolitan', 'indonesian_food', 0, 'nasi goreng lezat khas indonesia yang di lengkapi toping unik seperti sayuran dan berbagai janis macam seafood', 25000, 'nasi_goreng_metropolitan.png'),
(33, 'gudeg jogja', 'indonesian_food', 0, 'manis serta lezatnya nangka yang hasil dari fermentasi memberikan rasa yang sempurna kepada anda pecinta masakan jawa.', 15000, 'gudeg.png'),
(34, 'ketoprak', 'indonesian_food', 0, 'manis gurih dari saus kacang terasa begitu lezat di mulut. di padukan dengan sayuran segar dan lontong hangat', 25000, 'ketoprak.png'),
(35, 'mie kosan akhir bulan', 'indonesian_food', 0, 'mie instan khas anak kosan yang di masak dengan rebusan air lemon segar, memberikan cita rasa yang berbeda', 10000, 'kosan_akhir_bulan.png'),
(36, 'hidangan khas bali', 'indonesian_food', 0, 'satu ekor bebek betutu yang di padukan dengan nasi hangat dan bebrapa jenis sambal untuk melengkapi santapan anda. di sajikan dengan cara yang tradisional', 35000, 'makanan_khas_bali.png'),
(37, 'hidangan khas padang', 'indonesian_food', 0, 'berbagai macam pilihan menu khas indonesia seperti sambal, gulai, soto dan nasi hangat tentunya.', 40000, 'masakan_khas_padang.png'),
(38, 'hidangan khas sunda', 'indonesian_food', 0, 'kelezatan sambal terasi yang di sajikan dengan lalapan khas indonesia seperti pete dan kemangi akan memuaskan lidah anda', 35000, 'masakan_khas_sunda.png'),
(39, 'mie ayam', 'indonesian_food', 0, 'kuah kaldu yang di beri isian mie kenyal dan ayam kicap lezat yang membuat lidah anda ingin merasakannya lagi', 15000, 'mie_ayam.png'),
(40, 'nasi goreng rumahan', 'indonesian_food', 0, 'di buat dengan bahan bahan pilihan dan di sajikan dengan gaya rumahan. ', 20000, 'nasi_goreng_rumahan.png'),
(41, 'rendang', 'indonesian_food', 0, 'salah satu masakan terlezat di dunia dengan di padukan dengan bahan bahan pilihan yang kaya akan rempah', 25000, 'rendang.png'),
(54, 'sate ayam', 'indonesian_food', 0, 'lezatnya rempah indonesia meresap ke dalam setiap potongan daging yang di panggang dengan bara yang sempurna', 35000, 'sate_ayam.png'),
(55, 'sayur asem', 'indonesian_food', 0, 'segarnya kuah yang di perkaya rempah asam yang membuatnya sangat di sukai. di buat dari berbagai macam sayuran segar tropis', 25000, 'sayur_asem.png'),
(58, 'sayur lodeh', 'indonesian_food', 0, 'perpaduan dari sayuran segar pilihan bertemu dengan kuah santan yang lezat membuatnya banyak di sukai banyak orang', 25000, 'sayur_lodeh.png'),
(59, 'sup ayam kampung', 'indonesian_food', 0, 'kuah yang penuh rampah, sayuran segar dan daging ayam pilihan membuatnya cocok di jadikan hidangan utama keluarga', 25000, 'sup_ayam_kampung.png'),
(60, 'sup udang', 'indonesian_food', 0, 'kesegaran hidangan laut kini tersaji dalam bentuk sup yang kaya akan rempah', 30000, 'sup_udang.png'),
(61, 'beef and spinach pizza ', 'pizza', 0, 'kesegaran saus tomat dan sayuran yang memanjakan lidah', 55000, 'beef_and_spinach_pizza.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `minuman`
--

CREATE TABLE `minuman` (
  `id_minuman` int(11) NOT NULL,
  `nama_minuman` varchar(16) NOT NULL,
  `deskripsi_minuman` varchar(256) NOT NULL,
  `harga_minuman` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_hotel`
--

CREATE TABLE `pesan_hotel` (
  `id_pemesanan_hotel` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_hotel` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `tanggal_checkin` int(16) NOT NULL,
  `tanggal_checkout` int(16) NOT NULL,
  `lama_menginap` int(4) NOT NULL,
  `jumlah_kamar` int(4) NOT NULL,
  `jumlah_tamu` int(4) NOT NULL,
  `kota_tujuan` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_kereta`
--

CREATE TABLE `pesan_kereta` (
  `id_pemesanan_kereta` int(11) NOT NULL,
  `id_user` int(128) NOT NULL,
  `id_kereta` int(128) NOT NULL,
  `tanggal_pemesanan` int(32) NOT NULL,
  `tanggal_berangkat` int(32) NOT NULL,
  `kota_asal` varchar(64) NOT NULL,
  `kota_tujuan` varchar(64) NOT NULL,
  `jumlah_penumpang` int(4) NOT NULL,
  `kelas_kereta` varchar(16) NOT NULL,
  `harga_tiket` int(12) NOT NULL,
  `jumlah_pesanan` int(12) NOT NULL,
  `total_bayar` int(12) NOT NULL,
  `status_pembayaran` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_manakan`
--

CREATE TABLE `pesan_manakan` (
  `id_pemesanan_makanan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_makanan` int(11) NOT NULL,
  `id_minuman` int(11) NOT NULL,
  `tanggal_pemesanan` int(16) NOT NULL,
  `total_harga` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_pesawat`
--

CREATE TABLE `pesan_pesawat` (
  `id_pemesanan_pesawat` int(11) NOT NULL,
  `id_pesawat` int(11) NOT NULL,
  `nama_maskapai` varchar(128) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(128) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `kelas_penerbangan` varchar(128) NOT NULL,
  `tanggal_keberangkatan` varchar(64) NOT NULL,
  `kota_tujuan` varchar(64) NOT NULL,
  `kota_asal` varchar(64) NOT NULL,
  `jumlah_penumpang` int(4) NOT NULL,
  `harga_tiket` int(12) NOT NULL,
  `total_bayar` int(12) NOT NULL,
  `code_verifikasi` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan_pesawat`
--

INSERT INTO `pesan_pesawat` (`id_pemesanan_pesawat`, `id_pesawat`, `nama_maskapai`, `id_user`, `nama_user`, `id_kelas`, `kelas_penerbangan`, `tanggal_keberangkatan`, `kota_tujuan`, `kota_asal`, `jumlah_penumpang`, `harga_tiket`, `total_bayar`, `code_verifikasi`) VALUES
(1, 2, 'Air Asia', 37, 'Mutiara Aisyah', 2, 'Business Class', '2019-10-03', 'medan', 'jakarta', 2, 1570000, 3140000, 'd56ee5a4a22b4320d5485f507404254c'),
(2, 1, 'Garuda Indonesia', 34, 'Gadis Mutia Ankami', 1, 'First Class', '2019-09-26', 'medan', 'jakarta', 1, 2500000, 2500000, '324d7d6644991fefd99c578c11c244c7'),
(3, 5, 'Citilink', 36, 'Djodly Ichsan Ankami', 3, 'Economy Class', '2019-09-27', 'medan', 'jakarta', 4, 3200000, 12800000, '24a427f6817bd717d30736fddf0141c0'),
(4, 1, 'Garuda Indonesia', 38, 'Sabrina Putri Jiwani', 2, 'Business Class', '2019-09-30', 'medan', 'jakarta', 1, 2500000, 2500000, '352c880472298d9c0b8fa6b6b3179b98'),
(5, 3, 'Lion Air', 21, 'Cintiya Maharani', 1, 'First Class', '2019-09-26', 'medan', 'jakarta', 2, 900000, 1800000, '835994464619a8af42e5cfdfde9cd101'),
(6, 1, 'Garuda Indonesia', 36, 'Djodly Ichsan Ankami', 1, 'First Class', '2019-10-19', 'medan', 'jakarta', 1, 2500000, 2500000, '52c2525e40aaf929f1ee397226e4969d'),
(7, 1, 'Garuda Indonesia', 34, 'Gadis Mutia Ankami', 3, 'Economy Class', '2019-10-16', 'medan', 'jakarta', 2, 2500000, 5000000, '57ad2551900fc872ff9498c4895970b1'),
(8, 5, 'Citilink', 37, 'Mutiara Aisyah', 1, 'First Class', '2019-10-30', 'medan', 'jakarta', 3, 3200000, 9600000, 'b63ec7ed85c8ffe3fadf2036d68685ca'),
(9, 1, 'Garuda Indonesia', 21, 'Cintiya Maharani', 2, 'Business Class', '2019-09-30', 'medan', 'jakarta', 2, 2500000, 5000000, 'ba8613185d2ce349f88dfb624609561b'),
(10, 2, 'Air Asia', 34, 'Gadis Mutia Ankami', 2, 'Business Class', '2019-09-30', 'medan', 'jakarta', 2, 1570000, 3140000, 'a79af2821d6fa95fb0084ae09f78467a'),
(11, 1, 'Garuda Indonesia', 34, 'Gadis Mutia Ankami', 1, 'First Class', '2019-09-30', 'medan', 'jakarta', 1, 2500000, 2500000, '2b7007f1451863bfec1eb10977b1be44'),
(12, 1, 'Garuda Indonesia', 34, 'Gadis Mutia Ankami', 1, 'First Class', '2019-09-30', 'medan', 'jakarta', 1, 2500000, 2500000, 'f7b1dc8f027df6f3ecaee028e17e2126'),
(13, 1, 'Garuda Indonesia', 36, 'Djodly Ichsan Ankami', 1, 'First Class', '2019-09-30', 'medan', 'jakarta', 1, 2500000, 2500000, '2ed22fe3ffad62e89161ac451083d937'),
(14, 1, 'Garuda Indonesia', 36, 'Djodly Ichsan Ankami', 1, 'First Class', '2019-09-30', 'medan', 'jakarta', 1, 2500000, 2500000, '32eff561de416f6588205b4f917731fc'),
(15, 3, 'Lion Air', 34, 'Gadis Mutia Ankami', 1, 'First Class', '2019-10-16', 'medan', 'jakarta', 2, 900000, 1800000, '29adb9e5b1174e1f18167594952774db'),
(16, 3, 'Lion Air', 41, 'reza', 3, 'Economy Class', '2019-10-16', 'medan', 'jakarta', 2, 900000, 1800000, 'e16c640b67b10f21c3aa252a8f1a17fb'),
(17, 2, 'Air Asia', 34, 'Gadis Mutia Ankami', 1, 'First Class', '2019-10-21', 'medan', 'jakarta', 1, 1570000, 1570000, '60d2663f829a65bee782ce58a4d8fa4e'),
(18, 4, 'Batik Air', 34, 'Gadis Mutia Ankami', 3, 'Economy Class', '2019-10-23', 'medan', 'jakarta', 2, 3200000, 6400000, '15957783aa6342ae8d71892e051c45af'),
(19, 1, 'Garuda Indonesia', 34, 'Gadis Mutia Ankami', 3, 'Economy Class', '2019-10-18', 'medan', 'jakarta', 1, 2500000, 2500000, '4dc861d2e8fa11528ecbfe6c7a17e08c'),
(20, 2, 'Air Asia', 21, 'Cintiya Maharani', 2, 'Business Class', '2019-11-27', 'medan', 'jakarta', 2, 1570000, 3140000, '7734fa2f07eaeca911c196ff505f86e2'),
(21, 4, 'Batik Air', 21, 'Cintiya Maharani', 1, 'First Class', '2019-11-27', 'medan', 'jakarta', 2, 3200000, 6400000, '3fff202c2a5373f635fd9b64d7defe4a'),
(22, 2, 'Air Asia', 43, 'Siti Zahara', 2, 'Business Class', '2019-11-22', 'medan', 'jakarta', 2, 1570000, 3140000, '4fb58ef1d1d0998475dbaa1d479becc5'),
(23, 2, 'Air Asia', 21, 'Cintiya Maharani', 1, 'First Class', '2019-11-14', 'medan', 'jakarta', 1, 1570000, 1570000, '786d53f5491a0475e14baffe604ecd2b'),
(24, 5, 'Citilink', 34, 'Gadis Mutia Ankami', 2, 'Business Class', '2019-12-27', 'medan', 'jakarta', 2, 3200000, 6400000, 'd3535d1db2b9c8548f28dfe67457dfcd'),
(25, 4, 'Batik Air', 34, 'Gadis Mutia Ankami', 1, 'First Class', '2019-12-20', 'medan', 'jakarta', 2, 3200000, 6400000, '50de4df1fd299cf632b0c130538947c3'),
(26, 1, 'Garuda Indonesia', 21, 'Cintiya Maharani', 2, 'Business Class', '2019-12-24', 'medan', 'jakarta', 1, 2500000, 2500000, 'bc912a485850dc5ef81d7b3637e94c0b'),
(27, 1, 'Garuda Indonesia', 21, 'Cintiya Maharani', 3, 'Economy Class', '2019-12-24', 'medan', 'jakarta', 3, 2500000, 7500000, 'd83d2f4a94b5a479669bfb1d3be2ed66'),
(28, 5, 'Citilink', 36, 'Djodly Ichsan Ankami', 2, 'Business Class', '2019-12-07', 'medan', 'jakarta', 2, 3200000, 6400000, 'cd805f26071d9e3a8063fcfaa0223131'),
(29, 2, 'Air Asia', 36, 'Djodly Ichsan Ankami', 1, 'First Class', '2019-12-17', 'medan', 'jakarta', 2, 1570000, 3140000, 'c48cc9fb85eb898aac7004b46799bbd0'),
(30, 2, 'Air Asia', 36, 'Djodly Ichsan Ankami', 2, 'Business Class', '2019-12-24', 'medan', 'jakarta', 2, 1570000, 3140000, '6c11c1780ace07940ca7e541c865b564'),
(31, 3, 'Lion Air', 36, 'Djodly Ichsan Ankami', 1, 'First Class', '2020-01-24', 'medan', 'jakarta', 3, 900000, 2700000, 'd253de7d702984617cf4ed13ca4c9b18'),
(32, 2, 'Air Asia', 36, 'Djodly Ichsan Ankami', 3, 'Economy Class', '2020-01-24', 'medan', 'jakarta', 3, 1570000, 4710000, 'c8318708c7245592e6cea5e24b49a837'),
(33, 1, 'Garuda Indonesia', 45, 'Dinda Octavira', 1, 'First Class', '2020-10-30', 'medan', 'jakarta', 9, 2500000, 22500000, '694207c012ae26d7255119a7daa73841'),
(34, 1, 'Garuda Indonesia', 45, 'Dinda Octavira', 2, 'Business Class', '2020-10-30', 'medan', 'jakarta', 2, 2500000, 5000000, 'ce3ddb48030ed08adee6619eba998522'),
(35, 5, 'Citilink', 46, 'alexander ucup', 2, 'Business Class', '2022-07-21', 'medan', 'jakarta', 2, 3200000, 6400000, '883c925fce638d5dddd76c89df91c5da'),
(36, 2, 'Air Asia', 47, 'hai', 3, 'Economy Class', '2022-08-18', 'medan', 'jakarta', 4, 1570000, 6280000, 'b54b2abdeaeda04d09eb3b18f32d7d15'),
(37, 1, 'Garuda Indonesia', 48, 'julio jamal', 2, 'Business Class', '2022-10-21', 'medan', 'jakarta', 12, 2500000, 30000000, '32107d760bce8d020c0b8175222586d5'),
(38, 1, 'Garuda Indonesia', 48, 'julio jamal', 1, 'First Class', '2022-10-19', 'medan', 'jakarta', 1, 2500000, 2500000, '035874bafee96d09f1d6076f4f0171f7');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesawat`
--

CREATE TABLE `pesawat` (
  `id_pesawat` int(11) NOT NULL,
  `nama_maskapai` varchar(64) NOT NULL,
  `daya_tampung` int(4) NOT NULL,
  `rating_maskapai` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesawat`
--

INSERT INTO `pesawat` (`id_pesawat`, `nama_maskapai`, `daya_tampung`, `rating_maskapai`) VALUES
(1, 'Garuda Indonesia', 100, 5),
(2, 'Air Asia', 100, 4),
(3, 'Lion Air', 100, 4),
(4, 'Batik Air', 70, 3),
(5, 'Citilink', 70, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket_kereta`
--

CREATE TABLE `tiket_kereta` (
  `id_tiket_kereta` int(11) NOT NULL,
  `id_pemesanan_kereta` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kereta` int(11) NOT NULL,
  `no_seat` int(11) NOT NULL,
  `kedatangan_kereta` int(6) NOT NULL,
  `keberangkatan_kereta` int(6) NOT NULL,
  `asal_kereta` varchar(128) NOT NULL,
  `tujuan_kereta` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket_pesawat`
--

CREATE TABLE `tiket_pesawat` (
  `id_tiket_pesawat` int(11) NOT NULL,
  `id_pemesanan_pesawat` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `id_pesawat` int(11) NOT NULL,
  `nama_maskapai` varchar(128) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `kelas_penerbangan` varchar(64) NOT NULL,
  `no_set` int(11) NOT NULL,
  `kedatangan_pesawat` int(6) NOT NULL,
  `keberangkatan_pesawat` int(6) NOT NULL,
  `asal_pesawat` varchar(128) NOT NULL,
  `tujuan_pesawat` varchar(128) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah_penumpang` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `tanggal_pembayaran` int(11) NOT NULL,
  `jumlah_pembayaran` int(11) NOT NULL,
  `status_pembayaran` int(1) NOT NULL COMMENT 'jika pembayaran telah di lakukan maka nilai akan berisi 1',
  `status_pemesanan` int(1) NOT NULL COMMENT 'jika pemesanan telah di terima oleh kasir maka nilai akan berisi 1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `rule_id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `telpon` int(64) NOT NULL,
  `foto_profil` varchar(12) NOT NULL,
  `alamat_rumah` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `tanggal_login` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `rule_id`, `nama`, `email`, `telpon`, `foto_profil`, `alamat_rumah`, `password`, `tanggal_login`) VALUES
(15, 1, 'Gadis Mutia Ankami', 'gadisankami@gmail.com', 2147483647, 'gadis', '', '$2y$10$dmxwBPEdw22WxPgewxvkwOe3QMTg8jL42mYskCtdtLAiRh11fleeG', 'Fri, 30 Aug 2019 02:00:05 +0700 | asia/jakarta'),
(16, 1, 'Djodly Ichsan Ankami', 'djoeyiankami27@gmail.com', 2147483647, 'djodly', '', '$2y$10$dvI4b2Wbf9TcXj0V.PHeAeDGLvggikMK8Tlq.YEJ7pJJpJ29ud2Mi', 'Fri, 30 Aug 2019 02:01:07 +0700 | asia/jakarta'),
(21, 2, 'Cintiya Maharani', 'rani@gmail.com', 2147483647, 'rani', '', '$2y$10$e.nXn3CX4k3JZsMz9en7xOz5zyDuheE5kWj7uUueFJEGMV3Af9rXS', 'Fri, 30 Aug 2019 08:26:37 +0700 | asia/jakarta'),
(22, 4, 'Rivaldo Aditya Al Hujj', 'paldo@gmail.com', 2147483647, 'paldo', '', '$2y$10$K/XwvWgMsVpEY7jIBxWOue4/VBIJafLTuYHSeFEnKnKsFZw/hG/Ui', 'Fri, 30 Aug 2019 08:57:27 +0700 | asia/jakarta'),
(26, 3, 'Ocan', 'ocan@gmail.com', 2147483647, 'ocan', '', '$2y$10$e8jtvyvYNTmAelGycnQg9eU.qUtOv1eINATZhh88zgaEKB2bokKTm', 'Tue, 03 Sep 2019 01:06:30 +0700 | asia/jakarta'),
(29, 5, 'Ella Meylani', 'ella@gmail.com', 2147483647, 'ella', '', '$2y$10$ih/rBnY1y.Vdl1TTec6sXeSohK.d1idKvqEG/V/ANdx52Vyz0urDG', 'Tue, 03 Sep 2019 01:16:24 +0700 | asia/jakarta'),
(30, 6, 'Rendy Aditiya', 'rendy@gmail.com', 2147483647, 'rendy', '', '$2y$10$QapQdTkr0Vu2XTpKcByc0OsKV0FMeXjlykVcth64BRqp4qOWDrRJq', 'Tue, 03 Sep 2019 01:17:16 +0700 | asia/jakarta'),
(34, 2, 'Gadis Mutia Ankami', 'gadis@gmail.com', 2147483647, 'gadis', '', '$2y$10$2m69w5mAQgFiK.Vzf4tyHO29h9jgR7Fjh5T5.raMg8mrhdtlAaq0K', 'Fri, 13 Sep 2019 16:41:44 +0700 | asia/jakarta'),
(36, 2, 'Djodly Ichsan Ankami', 'isan@gmail.com', 2147483647, 'djodly', '', '$2y$10$ebtRsMNo.RyLw8oONuJMqeC3G4fQ52fXv9ghEeekXPbsyWJffPC9.', 'Wed, 18 Sep 2019 03:32:23 +0700 | asia/jakarta'),
(37, 2, 'Mutiara Aisyah', 'tiara@gmail.com', 2147483647, 'ini', '', '$2y$10$Matpe90W.oMUq988CdY81eKsN1HknDa2poY79rA0ZIn67JwXQyzdC', 'Fri, 20 Sep 2019 21:05:57 +0700 | asia/jakarta'),
(38, 2, 'Sabrina Putri Jiwani', 'riri@gmail.com', 2147483647, 'ini', '', '$2y$10$p93.sd8QZPeUxbFBeNSA9.xhs1ZqzvOPuj7kTJ9y7ffjH/UVS/zpK', 'Sat, 21 Sep 2019 03:37:39 +0700 | asia/jakarta'),
(39, 2, 'riskandar', 'riskandarmaulana1230@gmail.com', 2147483647, 'ini', '', '$2y$10$TuZIxlgRcmfx/2mrRkID1uHy1BxBYIT4VA8gyHCD.saDm99JUt0Gu', 'Sat, 21 Sep 2019 08:09:02 +0700 | asia/jakarta'),
(40, 2, 'citra aulya nakita', 'citra@gmail.com', 2147483647, 'sopi', '', '$2y$10$3xfD9obVGN2vvb3TO4MNT.jAfXx0fULIbQLFIRiPdTUKe7EjkDZiO', 'Sat, 21 Sep 2019 20:14:13 +0700 | asia/jakarta'),
(41, 2, 'reza', 'reza@gmail.com', 2147483647, 'ini', '', '$2y$10$aQ4nOdNxzHpLN5y4ZfECb..xY4ZIdRokLLIHlkcQtpIoy/rmnT/Z.', 'Sat, 05 Oct 2019 00:40:15 +0700 | asia/jakarta'),
(42, 2, 'ads', 'as@asd.das', 2147483647, 'ini', '', '$2y$10$hfUUCU/rZp98RdtfW79RMu5zdFIZxt8IEWREFIREPWbi/w.XsrVa6', 'Thu, 17 Oct 2019 11:44:26 +0700 | asia/jakarta'),
(43, 2, 'Siti Zahara', 'ara@gmail.com', 1212121212, 'ini', '', '$2y$10$RAbKV25HOXnrDBUrSyN9YOLAHMu1AIM9gsl3c9u/kOLnqzcmrTp2y', 'Tue, 12 Nov 2019 16:58:16 +0700 | asia/jakarta'),
(44, 2, 'fatihanisa zulmi', 'nisa@gmail.com', 2147483647, 'ini', '', '$2y$10$192XkTh58wp5rs9hoaj1I.VnaNaR4/lUOLot0yAIbzsKVlI6Aa1bK', 'Tue, 03 Dec 2019 09:21:41 +0700 | asia/jakarta'),
(45, 2, 'Dinda Octavira', 'dinda@gmail.com', 2147483647, 'ini', '', '$2y$10$cl7tYWyZihH2JoR3IRwuKuYdIX57SXjNvr2CouOdvnD2nmb8paVt2', 'Sun, 04 Oct 2020 22:55:53 +0700 | asia/jakarta'),
(46, 2, 'alexander ucup', 'ucup@gmail.com', 2147483647, 'ini', '', '$2y$10$AtiEcCWwZuPlOMY3F10z4OMlKRRD7jjg0Twph4BJYOMb9u6Ql3q7O', 'Tue, 19 Jul 2022 00:40:03 +0700 | asia/jakarta'),
(47, 2, 'hai', 'asd@gmail.com', 2147483647, 'ini', '', '$2y$10$ygpoFUbclScsXHsVluTyz.K5X25zPvi8JZqBnVqyFvTMPWAmmEKGG', 'Sat, 13 Aug 2022 14:49:12 +0700 | asia/jakarta'),
(48, 2, 'julio jamal', 'julio@gmail.com', 2147483647, 'ini', '', '$2y$10$XDCSpZI4k3TZO7vsAaBwvuZPRwkZiBN/ztL3vTTkyVpsnJ2teT.rG', 'Sat, 15 Oct 2022 18:46:08 +0700 | asia/jakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_rules`
--

CREATE TABLE `user_rules` (
  `rule_id` int(11) NOT NULL,
  `rule` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_rules`
--

INSERT INTO `user_rules` (`rule_id`, `rule`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Owner'),
(4, 'Manajer'),
(5, 'Kasir'),
(6, 'Pelayan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fasilitas_hotel`
--
ALTER TABLE `fasilitas_hotel`
  ADD PRIMARY KEY (`kode_fasilitas`),
  ADD UNIQUE KEY `id_kelas` (`id_kamar`);

--
-- Indeks untuk tabel `fa_bisnis`
--
ALTER TABLE `fa_bisnis`
  ADD KEY `kode_fasilitas` (`kode_fasilitas`);

--
-- Indeks untuk tabel `fa_kamar`
--
ALTER TABLE `fa_kamar`
  ADD KEY `kode_fasilitas` (`kode_fasilitas`);

--
-- Indeks untuk tabel `fa_kebugaran`
--
ALTER TABLE `fa_kebugaran`
  ADD KEY `kode_fasilitas` (`kode_fasilitas`);

--
-- Indeks untuk tabel `fa_publik`
--
ALTER TABLE `fa_publik`
  ADD KEY `kode_fasilitas` (`kode_fasilitas`);

--
-- Indeks untuk tabel `fa_terdekat`
--
ALTER TABLE `fa_terdekat`
  ADD KEY `kode_fasilitas` (`kode_fasilitas`);

--
-- Indeks untuk tabel `fa_transportasi`
--
ALTER TABLE `fa_transportasi`
  ADD KEY `kode_fasilitas` (`kode_fasilitas`);

--
-- Indeks untuk tabel `gerbong`
--
ALTER TABLE `gerbong`
  ADD PRIMARY KEY (`id_gerbong`);

--
-- Indeks untuk tabel `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id_hotel`);

--
-- Indeks untuk tabel `jadwal_keberangkatan_kereta`
--
ALTER TABLE `jadwal_keberangkatan_kereta`
  ADD PRIMARY KEY (`id_jadwal_kereta`),
  ADD UNIQUE KEY `id_kereta` (`id_kereta`),
  ADD KEY `id_gerbong` (`id_gerbong`);

--
-- Indeks untuk tabel `jadwal_keberangkatan_pesawat`
--
ALTER TABLE `jadwal_keberangkatan_pesawat`
  ADD PRIMARY KEY (`id_jadwal_pesawat`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_pesawat` (`id_pesawat`);

--
-- Indeks untuk tabel `kamar_hotel`
--
ALTER TABLE `kamar_hotel`
  ADD PRIMARY KEY (`id_kamar`),
  ADD KEY `id_fasilitas` (`kode_fasilitas`);

--
-- Indeks untuk tabel `kelas_maskapai`
--
ALTER TABLE `kelas_maskapai`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `kereta`
--
ALTER TABLE `kereta`
  ADD PRIMARY KEY (`id_kereta`);

--
-- Indeks untuk tabel `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id_makanan`);

--
-- Indeks untuk tabel `minuman`
--
ALTER TABLE `minuman`
  ADD PRIMARY KEY (`id_minuman`);

--
-- Indeks untuk tabel `pesan_hotel`
--
ALTER TABLE `pesan_hotel`
  ADD PRIMARY KEY (`id_pemesanan_hotel`),
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD UNIQUE KEY `id_hotel` (`id_hotel`),
  ADD UNIQUE KEY `id_user_2` (`id_user`,`id_hotel`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indeks untuk tabel `pesan_kereta`
--
ALTER TABLE `pesan_kereta`
  ADD PRIMARY KEY (`id_pemesanan_kereta`),
  ADD UNIQUE KEY `id_kereta` (`id_kereta`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `pesan_manakan`
--
ALTER TABLE `pesan_manakan`
  ADD PRIMARY KEY (`id_pemesanan_makanan`),
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD UNIQUE KEY `id_makanan` (`id_makanan`),
  ADD UNIQUE KEY `id_minuman` (`id_minuman`),
  ADD UNIQUE KEY `id_user_2` (`id_user`,`id_makanan`,`id_minuman`),
  ADD KEY `id_user_3` (`id_user`);

--
-- Indeks untuk tabel `pesan_pesawat`
--
ALTER TABLE `pesan_pesawat`
  ADD PRIMARY KEY (`id_pemesanan_pesawat`),
  ADD KEY `id_pesawat` (`id_pesawat`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indeks untuk tabel `pesawat`
--
ALTER TABLE `pesawat`
  ADD PRIMARY KEY (`id_pesawat`);

--
-- Indeks untuk tabel `tiket_kereta`
--
ALTER TABLE `tiket_kereta`
  ADD PRIMARY KEY (`id_tiket_kereta`),
  ADD UNIQUE KEY `id_pemesanan_kereta` (`id_pemesanan_kereta`,`id_user`,`id_kereta`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_kereta` (`id_kereta`);

--
-- Indeks untuk tabel `tiket_pesawat`
--
ALTER TABLE `tiket_pesawat`
  ADD PRIMARY KEY (`id_tiket_pesawat`),
  ADD UNIQUE KEY `id_pemesanan_pesawat` (`id_pemesanan_pesawat`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_pesawat` (`id_pesawat`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_pemesanan` (`id_pemesanan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `role_id` (`rule_id`);

--
-- Indeks untuk tabel `user_rules`
--
ALTER TABLE `user_rules`
  ADD PRIMARY KEY (`rule_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gerbong`
--
ALTER TABLE `gerbong`
  MODIFY `id_gerbong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id_hotel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jadwal_keberangkatan_kereta`
--
ALTER TABLE `jadwal_keberangkatan_kereta`
  MODIFY `id_jadwal_kereta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jadwal_keberangkatan_pesawat`
--
ALTER TABLE `jadwal_keberangkatan_pesawat`
  MODIFY `id_jadwal_pesawat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `kamar_hotel`
--
ALTER TABLE `kamar_hotel`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kelas_maskapai`
--
ALTER TABLE `kelas_maskapai`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kereta`
--
ALTER TABLE `kereta`
  MODIFY `id_kereta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id_makanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT untuk tabel `minuman`
--
ALTER TABLE `minuman`
  MODIFY `id_minuman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesan_hotel`
--
ALTER TABLE `pesan_hotel`
  MODIFY `id_pemesanan_hotel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesan_kereta`
--
ALTER TABLE `pesan_kereta`
  MODIFY `id_pemesanan_kereta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesan_manakan`
--
ALTER TABLE `pesan_manakan`
  MODIFY `id_pemesanan_makanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesan_pesawat`
--
ALTER TABLE `pesan_pesawat`
  MODIFY `id_pemesanan_pesawat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `pesawat`
--
ALTER TABLE `pesawat`
  MODIFY `id_pesawat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tiket_kereta`
--
ALTER TABLE `tiket_kereta`
  MODIFY `id_tiket_kereta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tiket_pesawat`
--
ALTER TABLE `tiket_pesawat`
  MODIFY `id_tiket_pesawat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `user_rules`
--
ALTER TABLE `user_rules`
  MODIFY `rule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `fasilitas_hotel`
--
ALTER TABLE `fasilitas_hotel`
  ADD CONSTRAINT `fasilitas_hotel_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `kamar_hotel` (`id_kamar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `fa_bisnis`
--
ALTER TABLE `fa_bisnis`
  ADD CONSTRAINT `fa_bisnis_ibfk_1` FOREIGN KEY (`kode_fasilitas`) REFERENCES `fasilitas_hotel` (`kode_fasilitas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `fa_kamar`
--
ALTER TABLE `fa_kamar`
  ADD CONSTRAINT `fa_kamar_ibfk_1` FOREIGN KEY (`kode_fasilitas`) REFERENCES `fasilitas_hotel` (`kode_fasilitas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `fa_kebugaran`
--
ALTER TABLE `fa_kebugaran`
  ADD CONSTRAINT `fa_kebugaran_ibfk_1` FOREIGN KEY (`kode_fasilitas`) REFERENCES `fasilitas_hotel` (`kode_fasilitas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `fa_publik`
--
ALTER TABLE `fa_publik`
  ADD CONSTRAINT `fa_publik_ibfk_1` FOREIGN KEY (`kode_fasilitas`) REFERENCES `fasilitas_hotel` (`kode_fasilitas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `fa_terdekat`
--
ALTER TABLE `fa_terdekat`
  ADD CONSTRAINT `fa_terdekat_ibfk_1` FOREIGN KEY (`kode_fasilitas`) REFERENCES `fasilitas_hotel` (`kode_fasilitas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `fa_transportasi`
--
ALTER TABLE `fa_transportasi`
  ADD CONSTRAINT `fa_transportasi_ibfk_1` FOREIGN KEY (`kode_fasilitas`) REFERENCES `fasilitas_hotel` (`kode_fasilitas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jadwal_keberangkatan_kereta`
--
ALTER TABLE `jadwal_keberangkatan_kereta`
  ADD CONSTRAINT `jadwal_keberangkatan_kereta_ibfk_1` FOREIGN KEY (`id_kereta`) REFERENCES `kereta` (`id_kereta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_keberangkatan_kereta_ibfk_2` FOREIGN KEY (`id_gerbong`) REFERENCES `gerbong` (`id_gerbong`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jadwal_keberangkatan_pesawat`
--
ALTER TABLE `jadwal_keberangkatan_pesawat`
  ADD CONSTRAINT `jadwal_keberangkatan_pesawat_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas_maskapai` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_keberangkatan_pesawat_ibfk_2` FOREIGN KEY (`id_pesawat`) REFERENCES `pesawat` (`id_pesawat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kamar_hotel`
--
ALTER TABLE `kamar_hotel`
  ADD CONSTRAINT `kamar_hotel_ibfk_1` FOREIGN KEY (`kode_fasilitas`) REFERENCES `fasilitas_hotel` (`kode_fasilitas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pesan_hotel`
--
ALTER TABLE `pesan_hotel`
  ADD CONSTRAINT `pesan_hotel_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesan_hotel_ibfk_2` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id_hotel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesan_hotel_ibfk_3` FOREIGN KEY (`id_kamar`) REFERENCES `kamar_hotel` (`id_kamar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pesan_kereta`
--
ALTER TABLE `pesan_kereta`
  ADD CONSTRAINT `pesan_kereta_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesan_kereta_ibfk_2` FOREIGN KEY (`id_kereta`) REFERENCES `kereta` (`id_kereta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pesan_manakan`
--
ALTER TABLE `pesan_manakan`
  ADD CONSTRAINT `pesan_manakan_ibfk_2` FOREIGN KEY (`id_makanan`) REFERENCES `makanan` (`id_makanan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesan_manakan_ibfk_3` FOREIGN KEY (`id_minuman`) REFERENCES `minuman` (`id_minuman`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesan_manakan_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pesan_pesawat`
--
ALTER TABLE `pesan_pesawat`
  ADD CONSTRAINT `pesan_pesawat_ibfk_1` FOREIGN KEY (`id_pesawat`) REFERENCES `pesawat` (`id_pesawat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesan_pesawat_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesan_pesawat_ibfk_3` FOREIGN KEY (`id_kelas`) REFERENCES `kelas_maskapai` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tiket_kereta`
--
ALTER TABLE `tiket_kereta`
  ADD CONSTRAINT `tiket_kereta_ibfk_1` FOREIGN KEY (`id_pemesanan_kereta`) REFERENCES `pesan_kereta` (`id_pemesanan_kereta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tiket_kereta_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tiket_kereta_ibfk_3` FOREIGN KEY (`id_kereta`) REFERENCES `kereta` (`id_kereta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tiket_pesawat`
--
ALTER TABLE `tiket_pesawat`
  ADD CONSTRAINT `tiket_pesawat_ibfk_3` FOREIGN KEY (`id_pemesanan_pesawat`) REFERENCES `pesan_pesawat` (`id_pemesanan_pesawat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tiket_pesawat_ibfk_4` FOREIGN KEY (`id_kelas`) REFERENCES `kelas_maskapai` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tiket_pesawat_ibfk_5` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tiket_pesawat_ibfk_6` FOREIGN KEY (`id_pesawat`) REFERENCES `pesawat` (`id_pesawat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`rule_id`) REFERENCES `user_rules` (`rule_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
