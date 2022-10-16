/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.3.16-MariaDB : Database - earsip_lp2m
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`earsip_lp2m` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `earsip_lp2m`;

/*Table structure for table `tab_acara` */

DROP TABLE IF EXISTS `tab_acara`;

CREATE TABLE `tab_acara` (
  `kode_acara` int(11) NOT NULL AUTO_INCREMENT,
  `kode_sk` varchar(10) DEFAULT NULL,
  `kode_sm` varchar(10) DEFAULT NULL,
  `tanggal_awal` date DEFAULT NULL,
  `tanggal_akhir` date DEFAULT NULL,
  `jam_acara` time DEFAULT NULL,
  `tempat_acara` varchar(50) DEFAULT NULL,
  `jenis_acara` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`kode_acara`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tab_acara` */

/*Table structure for table `tab_klasifikasi` */

DROP TABLE IF EXISTS `tab_klasifikasi`;

CREATE TABLE `tab_klasifikasi` (
  `kode_klasifikasi` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(10) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `uraian` text DEFAULT NULL,
  PRIMARY KEY (`kode_klasifikasi`)
) ENGINE=InnoDB AUTO_INCREMENT=176 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tab_klasifikasi` */

insert  into `tab_klasifikasi`(`kode_klasifikasi`,`kode`,`nama`,`uraian`) values 
(1,'KU.00','RENCANA DAN PENYUSUNAN ANGGARAN','Rencana dan Penyusunan Anggaran'),
(2,'KU.00.1','RENCANA ANGGARAN','Berkenaan dgn perencanaan anggaran seperti RAKIP, RKA-KL, RASKIP, usulan RAPBN'),
(3,'KU.00.2','PENYUSUNAN ANGGARAN','Surat-surat yang berkenaan dengan anggaran belanja, seperti PAGU Indikatif, Pagu Definitif, RKA, DIPA, POK, Revisi Anggaran'),
(4,'KU.00.3','NON BUDGETER','Berkaitan dgn penyusunan anggaran non budgeter (NTCR, Biaya petugas haji, Badan Kesejahteraan Masjid, BP4, MTQ)'),
(5,'KU.01','BELANJA','-'),
(6,'KU.01.1','SURAT PERMINTAAN PEMBAYARAN','Surat-surat   yang   berkenaan   dengan   pengajuan   dan   pengeluaran surat permintaan pembayaran (SPP) meliputi SPPGU, SPPDU/TU, SPPLS,   ABT   rutin,   termasuk   gaji   pegawai,  Surat   Pernyataan  Pengajuan   Tambahan   Uang   Persediaan,  Surat   Permohonan  Tambahan   Uang   Persediaan,  Surat   Pernyataan   Permintaan \r\nDispensasi   Tambahan   Uang   Persediaan,  Penambahan  Anggaran/Anggaran Pendapatan Belanja Negara Perubahan.'),
(7,'KU.01.2','SPJ','Surat-surat   yang   berkenaan   dengan   pengajuan   dan   pengeluaran surat   permintaan   pembayaran   (SPP)   beban   tetap   dan sementara/UUDP   (Uang   Untuk   Dipertanggungjawabkan) pembangunan.'),
(8,'KU.02','SPJ','-'),
(9,'KU.02.1','SPJ APBN ','Surat-surat yang berkenaan dengan pertanggungjawaban keuangan anggaran belanja rutin, seperti: laporan Realisasi Keuangan, surat Pernyataan Tanggung Jawab Belanja, surat Keterangan Tanggung Jawab Mutlak, laporan Realisasi Anggaran '),
(10,'KU.02.2','SPJ NON BUDGETER','Surat-surat yang berkenaan dengan pertanggungjawaban keuangan (NTCR, Biaya petugas haji, Badan Kesejahteraan Masjid, BP4, MTQ)'),
(11,'KU.03','PENDAPATAN NEGARA','-'),
(12,'KU.03.1','PAJAK','Surat-surat yang berkenaan dengan pendapatan Negara dari hasil pajak yang meliputi: MPO (Menghitung Pajak Orang), PPN (Pajak Pendapatan Negara), Pajak Jasa, PPH (Pajak Pendapatan Penghasilan), Dan pajak lainnya.'),
(13,'KU.03.2','BUKAN PAJAK','Surat-surat   yang   berkenaan   dengan   pendapatan   Negara   dan   hasil bukan pajak (nontax) yang meliputi penerimaan dari : biaya   penelitian   hasil   penerimaan negara, biaya NTCR, biaya   perkara   dan   hasil   penjualan barang-barang   inventaris   yang dihapuskan.'),
(14,'KU.04','PERBANKAN','-'),
(15,'KU.04.1','VALUTA ASING/TRANSFER','Surat-surat yang berkenaan dengan pembelian Valuta Asing.'),
(16,'KU.04.2','SURAT-SURAT YANG BERKENAAN DENGAN PEMBELIAN VALUTA','ralat Rekening, Surat Pernyataan Rekening'),
(17,'KU.05','SUMBANGAN/BANTUAN','Surat-surat   yang   berkenaan   dengan   permintaan,   pemberian sumbangan/bantuan   khusus   di   luar   tugas   pokok   Kementerian   Agama, seperti: bencana alam, kebakaran, pekan Olah Raga, dan lain sebagainnya'),
(18,'KP','KEPEGAWAIAN','-'),
(19,'KP.00','PENGADAAN','-'),
(20,'KP.00.1','FORMASI','Surat-surat   yang   berkenaan   dengan   perencanaan   pengadaan pegawai,   nota   usul,   formasi   sampai   dengan   persetujuan   termasuk didalamnya berzetting.'),
(21,'KP.00.2','PENERIMAAN','Surat-surat yang berkenaan dengan penerimaan pegawai baru, mulai dari   pengumuman   penerimaan,   panggilan testing/psychotest/clearance test sampai pengumuman yang diterima, termasuk di dalamnya:  GAH (Guru Agama Honorarium), GTT (Guru Tidak Tetap), P3-NTCR   (Pegawai   Pembantu Pencatat   Nikah   Talak   Cerai   Rujuk)   / Pembantu   PPN   dan   Tenaga honorarium   lainnya,   termasuk pengangkatan dan pemberhentiannya.'),
(22,'KP.00.3','PENGANGKATAN','Surat-surat   yang   berkenaan   dengan   seluruh   proses   pengangkatan calon   pegawai   dan   menempatkan   calon   pegawai   sampai   dengan menjadi   pegawai   negeri,   mulai   dan   pemeriksaan   kesehatan   sampai dengan pengangkatan, termasuk pelimpahan/penempatan.'),
(23,'KP.01','TATA USAHA KEPEGAWAIAN','-'),
(24,'KP.01.1','IZIN/DISPENSASI','Surat-surat   yang   berkenaan   dengan   izin   tidak   masuk   kerja   atas permintaan   yang   diajukan   oleh   pegawai   yang  bersangkutan, maupun dispensasi yang diajukan oleh instansi lain termasuk tugas pada instansi lain dan tugas ke luar negeri bagi pegawai Kementerian Agama serta tugas belajar yang diberikan oleh instansi Kementerian Agama atau atas permintaan pegawai yang bersangkutan.'),
(25,'KP.01.2','KETERANGAN','Surat-surat yang berkenaan dengan keterangan pegawai keluarganya, termasuk   surat-surat   mengenai   NIP/KARPEG   penunjukan penghubung ke instansi lain dan data pegawai/pejabat.'),
(26,'KP.02','PENDIDIKAN DAN PELATIHAN','-'),
(27,'KP.02.1','DIKLAT PRAJABATAN','Surat-surat yang berkenaan dengan: Diklat Prajabatan Golongan I sebagai syarat untuk menjadi PNS golongan I, Diklat Prajabatan Golongan II sebagai syarat untuk menjadi PNS golongan II, Diklat Prajabatan Golongan III sebagai syarat untuk menjadi PNS golongan III, Mulai dan  perencanaan  (training  need survei  kurikulum, silabus dan lainnya), pelaksanaan dan evaluasi. '),
(28,'KP.02.2','DIKLAT DALAM JABATAN','Surat-surat yang berkenaan dengan: Diklat Kepemimpinan, Diklat Fungsional, Diklat Teknis, '),
(29,'KP.02.3','LATIHAN KURSUS','Surat-surat   yang   berkenaan   dengan   kursus   baik   yang diselenggarakan dalam negeri maupun luar negeri, misalnya: LEMHANAS (Lembaga Pertahanan Nasional), Workshop, Lokakarya, Orientasi, Konsultasi, Sosialisasi, Seminar, dan lain-lain, Mulai dan perencanaan, persiapan, pelaksanaan dan evaluasi.'),
(30,'KP.03','KORPRI','Surat-   surat   yang   berkenaan   dengan   organisasi   KORPRI   termasuk   di dalamnya: Dharma Wanita, PEMILU dan lain-lain yang sejenis.'),
(31,'KP.04','PENILAIAN DAN HUKUMAN','-'),
(32,'KP.04.1','PENILAIAN','Surat-surat yang berkenaan dengan penilaian pelaksanaan pekerjaan, disiplin   pegawai,   pemalsuan   administrasi   kepegawaian,   rehabilitasi dan pemutihan.'),
(33,'KP.04.2','HUKUMAN','Surat-surat yang berkenaan dengan hukuman pegawai yang meliputi: teguran tertulis pernyataan tidak puas secara tertulis, enundaan kenaikan gaji berkala untuk paling lama 1 (satu) tahun penundaan kenaikan pangkat untuk paling lama 1 (satu) tahun, penurunan   pangkat   pada   pangkat   yang   setingkat   lebih  rendah untuk paling lama 1 (satu) tahun pembebasan dari jabatan,  pemberhentian   dengan   hormat   tidak   atas   permintaan   sendiri sebagai Pegawai Negeri Sipil, pemberhentian tidak dengan hormat sebagai Pegawai Negeri Sipil.'),
(34,'KP.05','SCREENING','Surat-surat yang berhubungan dengan screening bagi pegawai dalam hal kegiatan politik.'),
(35,'KP.06','PEMBINAAN MENTAL','Surat-surat   yang   berkenaan   dengan   pembinaan   mental pegawai termasuk di dalamnya kerokhanian dan P4'),
(36,'KP.07','MUTASI','-'),
(37,'KP.07.1','KEPANGKATAN','Surat-surat   yang   berkenaan   dengan   kenaikan   pangkat/golongan termasuk di dalamnya ujian dinas, penyesuaian ijazah dan daftar unit kepangkatan.'),
(38,'KP.07.2','KENAIKAN GAJI BERKALA','Surat-surat yang berkenaan dengan kenaikan gaji berkala.'),
(39,'KP.07.3','PENYESUAIN MASA KERJA','Surat-surat   yang   berkenaan   dengan   penyesuaian   masa   kerja   untuk perubahan ruang gaji dan impassing'),
(40,'KP.07.4','PENYESUAIAN TUNJANGAN KELUARGA','Surat-surat yang berkenaan dengan penyesuaian tunjangan keluarga'),
(41,'KP.07.5','ALIH TUGAS','Surat-surat   yang   berkenaan   dengan   alih   tugas   bagi   para pelaksana/staf,   perpindahan   dalam   rangka   pemantapan   tugas pekerjaan termasuk mengenai fasilitasnya.'),
(42,'KP.07.6','JABATAN STRUKTURAL/FUNGSIONAL','Surat-surat   yang   berkenaan   dengan   pengangkatan   dan pemberhentian   dalam   jabatan   struktural/fungsional   termasuk tunjangan  jabatan  sewaktu   penugasan   atau   pemberian   kuasa  untuk menjabat sementara, termasuk fasilitasnya.'),
(43,'KP.08','KESEJAHTERAAN','-'),
(44,'KP.08.1','KESEHATAN','Surat-surat yang berkenaan dengan penyelenggaraan kesehatan bagi pegawai meliputi: asuransi kesehatan (ASKES), general chek up pejabat, general chek up karyawan/i'),
(45,'KP.08.2','CUTI','Surat-surat yang berkenaan dengan cuti pegawai meliputi: cuti tahunan, cuti karena alasan penting,  cuti sakit, cuti bersalin/hamil, dan,  cuti di luar tanggungan negara.'),
(46,'KP.08.3','REKREASI','Surat-surat yang berkenaan dengan rekreasi dan olah raga.'),
(47,'KP.08.4','BANTUAN/SANTUAN SOSIAL','Surat-surat   yang   berkenaan   pemberian   bantuan/tunjangan   sosial kepada   pegawai   dan   keluarga   yang   mengalami   musibah,   termasuk ucapan duka cita.'),
(48,'KP.08.5','KOPERASI','Surat-surat yang berkenaan dengan organisasi koperasi termasuk di dalamnya masalah pengurusan kebutuhan bahan pokok.'),
(49,'KP.08.6','PERUMAHAN','Surat-surat yang berkenaan dengan perumahan pegawai.'),
(50,'KP.08.7','ANTAR  JEMPUT/TRANSPORTASI','Surat-surat yang berkenaan dengan transportasi pegawai.'),
(51,'KP.08.8','PENGHARGAAN','Surat-surat   yang   berkenaan   dengan   penghargaan,   Tanda   jasa, Piagam, Satya Lencana,  Penghargaan Anumerta dan sebagainya'),
(52,'KP.09','PEMUTUSAN HUBUNGAN KERJA','Surat-surat   yang   berkenaan   pemberian   dengan   pensiun   pegawai, termasuk   jaminan-jaminan   asuransi   karena   berhenti   atas   permintaan sendiri,  berhenti  dengan  hormat  bukan  karena   hukuman,  pindah  keluar dari Departemen dan meninggal dunia.'),
(53,'OT','ORGANISASI DAN TATALAKSANA','-'),
(54,'OT.00','ORGANISASI','Surat-surat yang berhubungan dengan pembentukan dan pengembangan organisasi serta analisis jabatan.'),
(55,'OT.01','TATALAKSANA','-'),
(56,'OT.01.1','PERENCANAAN','Surat-surat   yang   berhubungan   dengan   perencanaan/program kerja,   pengembangan   organisasi  dan   kebijakan   dibidang perencanaan'),
(57,'OT.01.2','LAPORAN','Surat-surat   yang   berhubungan   dengan   monitoring,   evaluasi   dan laporan antara lain: AKIP, kinerja Menteri , mingguan, bulanan, triwulan, semesteran'),
(58,'OT.01.3','PENYUSUNAN PROSEDUR KERJA','Surat-surat   yang   berhubungan   dengan   penyusunan   sistem, pedoman,   petunjuk   pelaksanaanan,   petunjuk   teknis   dan pembakuan sarana kerja'),
(59,'OT.01.4','PELAYANAN MASYARAKAT','Surat-surat   yang   berhubungan   dengan   peningkatan   pelayanan masyarakat antara lain : penilaian kinerja unit pelayan masyarakat, penilaian kinerja Sumber Daya Manusia,  indek kepuasan masyarakat, standar pelayan minimal (SPM), standar pelayan Prosedur (SPP), standar operasional prosedur (SOP) '),
(60,'OT.01.5','','-'),
(61,'OT.01.6','','-'),
(62,'HK','HUKUM','-'),
(63,'HK.00','PERATURAN PERUNDANG-UNDANGAN','Surat-surat   yang   berkenaan   dengan   pemrosesan   suatu   peraturan perundang-undangan   produk  Kementerian   Agama   dan   konsep/draf sampai   selesai,   maupun   produk   peraturan-peraturan   perundang-undangan yang diterima baik interen Kementerian maupun dan instansi lain.'),
(64,'HK.00.1','UNDANG-UNDANG TERMASUK PERPU','-'),
(65,'HK.00.2','PERATURAN PEMENINTAH','-'),
(66,'HK.00.3','KEPUTUSAN PRESIDEN, INSTRUKSI PRESIDEN','-'),
(67,'HK.00.4','PERATURAN MENTERI, INSTRUKSI MENTERI','-'),
(68,'HK.00.5','KEPUTUSAN MENTERI, PIMPINAN UNIT ESELON I','-'),
(69,'HK.00.6','KEPUTUSAN MENTERI, PIMPINAN UNIT ESELON I','-'),
(70,'HK.00.7','EDARAN MENTERI/PIMPINAN UNIT ESELON I/II','-'),
(71,'HK.00.8','PERATURAN   KANTOR   WILAYAH   KEMENTERIAN  AGAMA ','-'),
(72,'HK.00.9','PERATURAN PEMDA TK. I/PEMDA TK. II','-'),
(73,'HK.01','PIDANA','-'),
(74,'HK.01.1','PENCURIAN','Surat-surat yang berkenaan dengan pencurian yang terjadi di dalam lingkungan Kantor Kementerian Agama baik pusat maupun daerah.'),
(75,'HK.01.2','KORUPSI','Surat-surat   yang   berkenaan   dengan   korupsi,   penyelewengan   dan penyalahgunaan wewenang/jabatan'),
(76,'HK.02','PERDATA','-'),
(77,'HK.02.1','PERIKATAN','Surat-surat yang berhubungan dengan perikatan yang meliputi: hak pakai, peminjaman, sewa menyewa, dan lain-lain sejenisnya'),
(78,'HK.03','HUKUM AGAMA','-'),
(79,'HK.03.1','FATWA','Surat-surat yang berkenaan dengan pendapat hukum dan penetapan status hukum mengenai suatu hal yang belum jelas hukumnya seperti: bedah mayat, masalah waris (di Jawa dan Madura), masalah   hibah/Shodaqoh   (di   Jawa   dan Madura), dan lain-lain sejenisnya.'),
(80,'HK.03.2','RUKYAT/HISAB','Surat-surat yang berkenaan dengan penentuan: arah kiblat, awal/akhir Ramadhan, hari besar Islam, jadwal waktu sholat,  kalender'),
(81,'HK.03.3','HARI BESAR AGAMA','Surat-surat yang berhubungan dengan hari besar agama:, Islam,  Kristen, Katholik, Hindu,  Budha dan Kong Hu Cu (Imlek)'),
(82,'HK.04','BANTUAN HUKUM','-'),
(83,'HK.04.1','KASUS HUKUM PIDANA','Surat-surat   yang   berkenaan   dengan   bantuan   hukum   kepada pejabat/pegawai   Kementerian   Agama   dalam   kasus   pidana   yang berhubungan dengan pelaksanaan tugas.'),
(84,'HK.04.2','KASUS HUKUM PERDATA','Surat-surat   yang   meliputi/berhubungan   dengan   bantuan   hukum kepada   pejabat/pegawai   Kementerian   Agama   dalam   kasus   perdata yang berhubungan dengan pelaksanaan tugas.'),
(85,'HK.04.3','KASUS HUKUM TATA USAHA NEGARA (TUN) ','Surat-surat   yang   berkenaan   dengan   pemberian   bantuan   hukum kepada   Menteri   Agama   atau   pejabat   Kementerian   Agama   dalam kasus Tata Usaha Negara (TUN)'),
(86,'HK.04.4','PENELAAHAN HUKUM','Surat-surat   yang   meliputi/berhubungan   dengan   penelaahan   hukum yang berkaitan dengan masalah agama, selain agama Islam'),
(87,'HM','KEHUMASAN','-'),
(88,'HM.00','PENERANGAN','Surat-surat yang berhubungan dengan kegiatan yang berkenaan dengan penerangan terhadap masyarakat antara lain :  konperensi pers, pameran, wawancara, dan penerangan dalam media massa lainnya.'),
(89,'HM.01','HUBUNGAN','Surat-surat yang berhubungan dengan kerja sama dalam dan luar negeri dan kordinasi intern dan ekstern antar pemerintahan umum antara lain: Bakohumas, Hearing DPR, AMd, PKP, Kelompok kerja (POKJA) dan organisasi-organisasi mass media termasuk di dalamnya   pengarahan/sambutan   yang   bersifat umum'),
(90,'HM.02','DOKUMENTASI DAN KEPUSTAKAAN','-'),
(91,'HM.02.1','DOKUMENTASI','Surat-surat   yang   berkenaan   dengan   kegiatan   yang   berhubungan dengan   penyediaan/pengumpulan   bahan/dokumentasi   termasuk penyebarannya.'),
(92,'HM.02.2','KEPUSTAKAAN','Surat-surat   yang   berkenaan   dengan   kegiatan   yang   berhubungan dengan penyediaan pengumpulan bahan-bahan kepustakaan.'),
(93,'HM.03','KEPROTOKOLAN','Surat-surat yang berkenaan dengan masalah keprotokolan, seperti: tamu-tamu pimpinan Kementerian (dalam maupun luar negeri), kunjungan kerja, upacara hari nasional, dan HUT Kementerian Agama.'),
(94,'KS','KESEKRETARIATAN','-'),
(95,'KS.00','KERUMAHTANGGAAN','Surat-surat yang berkenaan dengan: penggunaan   fasilitas;   contoh:   pinjam   untuk   dapat menggunakan ruang rapat, kendaraan dsb, Keamanan dan ketertiban, Konsumsi, pakaian dinas kerja, papan nama, lambang, alamat pejabat dan telekomunikasi/listrik/air (langganan)'),
(96,'KS.01','PERLENGKAPAN','-'),
(97,'KS.01.1','GEDUNG','Surat-surat yang berkenaan dengan: asrama, -bangunan kantor,  gedung sekolah, pos penjagaan, rumah dinas, termasuk   tanah,   mulai   dan   perencanaan,   pengadaan,   pendistribusian, pemeliharaan sampai dengan penghapusannya.'),
(98,'KS.01.2','ALAT KANTOR','Surat-surat yang berkenaan dengan alat kantor seperti: ATK (Alat Tulis Kantor), Formulir/faktur   mulai   dan   perencanaan,   pengadaan   dan pendistribusian'),
(99,'KS.01.3','MESIN KANTOR/ALAT-ALAT ELEKTRONIK','Surat-surat   yang   berkenaan   dengan   mesin   kantor   (barang-barang mekanis)/alat-alat elektronik meliputi:  Amplifier, Fan/kipas angin, Foto copy, Kamera, Mesin ketik/hitung, Overhead proyektor, Proyektor film, Radio, Roneo, Slide, Mesin stensil, Tape recorder, Teleks, Video tape, dan   lain-lain   yang   sejenis,   mulai   dan perencanaan,   pendistribusian, pemeliharaan   sampai   dengan penghapusan'),
(100,'KS.01.4','PERABOT KANTOR','Surat-surat   yang   berkenaan   dengan   pengelolaan   perabot   kantor,  meliputi: kursi, meja, lemari,  filing cabinet/card rak, dan   lain-lain   yang   sejenis   mulai   dan perencanaan,   pengadaan, pendistribusian,   pemeliharaan   sampai dengan penghapusannya'),
(101,'KS.01.5','KENDARAAN','Surat-surat   yang   berkenaan   dengan   masalah   kendaraan   mulai   dari perencanaan,  pengadaan,  pendistribusian  dan  pemeliharaan  sampai dengan penghapusannya.'),
(102,'KS.01.6','INVENTARIS PERLENGKAPAN','Surat-surat yang berkenaan dengan inventaris perlengkapan, laporan inventaris perlengkapan pusat dan daerah.'),
(103,'KS.01.7','PENAWARAN UMUM','Surat-surat   yang   berkenaan   dengan   penyelenggaraan   prakualifikasi calon rekanan dan penawaran umum termasuk persyaratannya.'),
(104,'KS.02','KETATAUSAHAAN','Surat-surat   yang   berkenaan   dengan   korespondensi   dan   kearsipan, penandatanganan surat dan wewenangnya serta cap dinas.'),
(105,'TL','PENELITIAN','-'),
(106,'TL.00','PENELITIAN PENDIDIKAN','Surat-surat yang  berhubungan dengan penelitian pendidikan, sejak dari perizinan, pelaksanaan sampai laporan hasilnya.'),
(107,'TL.01','PENELITIAN KEAGAMAAN','Surat-surat yang berhubungan dengan penelitian keagamaan, sejak dari perizinan, pelaksanaan sampai dengan laporan hasilnya.'),
(108,'TL.02','PENELITIAN LEKTUR AGAMA','-'),
(109,'TL.02.1','PENELITIAN LEKTUR AGAMA','Surat-surat   yang   berhubungan   dengan   penelitian   atas   penerbitan, import dan penyebaran kitab-kitab suci agama'),
(110,'TL.02.2','PENELITIAN BUKU-BUKU AGAMA','Surat-surat yang berhubungan dengan penelitian buku-buku agama yang diterbitkan, diimport dan penyebaran buku-buku agama'),
(111,'TL.03','PENGEMBANGAN PENELITIAN','Surat-surat yang berhubungan dengan masalah-masalah pengembangan penelitian   sejak   dari   perencanaan,   pelaksanaannya   sampai   dengan laporannya.'),
(112,'PS','PENGAWASAN','-'),
(113,'PS.00','ADMINISTRASI UMUM','Surat-surat yang berkenaan dengan pengawasan adminitrasi umum '),
(114,'PS.01','TUGAS UMUM','Surat-surat   yang   berkenaan   dengan   pengawasan   tugas   umum,  yang meliputi bidang-bidang: pendidikan agama, penerangan agama, urusan agama, bimbingan masyarakat beragama,  peradilan agama, haji, penelitian dan pengembangan keagamaan'),
(115,'PS.02','PROYEK PEMBANGUNAN','-'),
(116,'PS.02.1','FISIK','Surat-surat   yang   berkenaan   dengan   pengawasan   proyek-proyek pembangunan   fisik,   termasuk   laporan   hasil   pemeriksaan   (LHP) maupun tindak lanjut hasil pemeriksaan (TLHP) nya.'),
(117,'PS.02.2','NON FISIK','Surat-surat   yang   berkenaan   dengan   pengawasan   proyek-proyek pembangunan   non   fisik,   termasuk   laporan   hasil   pemeriksaan   (LHP) maupun tindak lanjut hasil pemeriksaan (TLHP) nya.'),
(118,'PS.03','PENGAWASAN EKSTERNAL','-'),
(119,'PS.03.1','BPK RI','Surat-surat yang berkenaan dengan pengawasan Bepeka RI termasuk laporan hasil pemeriksaan semester (HAPSEM) maupun tindak lanjut hasil pemeriksaan (TLHP) nya.'),
(120,'PS.03.2','BADAN PENGAWASAN KEUANGAN DAN PEMBANGUNAN (BPKP)','Surat-surat   yang   berkenaan   dengan   pengawasan   BPKP,   termasuk laporan hasil audit (LHA) maupun tindak lanjut audit (TLHA) nya.'),
(121,'PS.03.3','PENGADUAN MASYARAKAT','Surat-surat   yang   berkenaan   dengan   pengaduan   atau   pengawasan dan   masyarakat   yang   disampaikan   melalui   Tromol   Pos   5000   (TP 5000) termasuk tindak lanjutnya.'),
(122,'PS.03.4','PENGADUAN MASYARAKAT (NON TP 5000) ','Surat-surat   yang   berkenaan   dengan   pengaduan   atau   pengawasan yang disampaikan secara langsung oleh masyarakat (non TP 5000), termasuk tindak lanjutnya.'),
(123,'PW','PERKAWINAN','-'),
(124,'PW.01','PENYULUHAN','Surat-surat yang berkenaan dengan: penyuluhan perkawinan, KB (Keluarga Berencana) dan KKB (Keluarga Kecil Bahagia),  BP 4 (Badan Penasehat Perkawinan dan Penyelesaian Perceraian),  PKK (Pendidikan Kesejahteraan Keluarga), Dan UPGK (Usaha Peningkatan Gizi Keluarga)'),
(125,'PW.02','PERKAWINAN','Surat-surat yang berkenaan dengan seluruh proses: Nikah,  Talak,  Cerai, Rujuk Termasuk akte dan sarananya.'),
(126,'PW.03','CAMPURAN','Surat-surat   yang   berkenaan   dengan   seluruh   proses   perkawinan campuran antar agama dan bangsa.'),
(127,'HJ','HAJI','-'),
(128,'HJ.00','CALON HAJI','Surat-surat   yang   berkenaan   dengan   pendaftaran   calon   haji,   termasuk kelengkapan dokumen, seperti: daftar nominative,  STPH (Surat Tanda Pergi Haji),  Paspor,  Paskim,  Visa, dan lain-lain yang sehubungan'),
(129,'HJ.01','BIMBINGAN','Surat-surat yang berkenaan dengan bimbingan jemaah haji dan petugas haji, termasuk: pameran,  penataran,  dan peragaan'),
(130,'HJ.02','PETUGAS HAJI','Surat-surat yang berkenaan dengan petugas haji: TPHI (Tim Petugas Haji Indonesia),  TKHI (Tim Kesehatan Haji Indonesia), Tenaga   Musiman/P3H   (Panitia   Pemberangkatan   dan   Pemulangan Haji), Sekretariat Boyongan, Amirul Haj dan Naib Amirul Haj, PPIH non kloter termasuk laporan kegiatan.'),
(131,'HJ.03','ONGKOS NAIK HAJI','Surat-surat yang berkenaan dengan: penentuan besarnya ONH, restitusi, living cost, free seat, uang bekal daerah, dan asuransi'),
(132,'HJ.04','JEMAAH HAJI','Surat-surat yang berkenaan dengan jemaah haji, meliputi: sejkh/muzawwir,  sakit, meninggal, melahirkan, dan hilang'),
(133,'HJ.05','ANGKUTAN','Surat-surat   yang   berkenaan   dengan   transportasi   haji   dalam   dan   luar negeri, jadwal pemberangkatan dan pemulangan jemaah haji dan daftar jemaah (manifest).'),
(134,'HJ.06','PENGASRAMAAN','Surat-surat   yang   berkenaan   dengan   pengasramaan   calon   haji   di dalam/luar negeri, pengembalian biaya perumahaan di   Arab Saudi dan Qurâ€™ah.'),
(135,'HJ.07','PEMBEKALAN','Surat-surat yang berhubungan dengan pembekalan jemaah haji termasuk pengadaan, penyimpanan, pendistribusian, antara lain: kemas haji, Katering,  obat-obatan,  buku manasik haji,  buku kesehatan jamaah haji,  petunjuk perjalanan haji,  barang-barang   bawaan   dan   dalam/luar   negeri serta kelengkapan lainnya yang sehubungan'),
(136,'HJ.08','DISPENSASI / REKOMENDASI KHUSUS','Surat-surat yang berkenaan dengan dispensasi dan rekomendasi masuk Arab Saudi pada masa-masa musim haji baik bagi WNI dalam maupun luar negeri.'),
(137,'HJ.09','UMROH','Surat-surat yang berkenaan dengan masalah-masalah umroh, termasuk perizinan, pelaksanaan penyelenggara/organisasi - organisasi, yayasan-yayasan, travel biro dan pengawasan penyelenggaraannnya.'),
(138,'BA','PEMBINAAN AGAMA','-'),
(139,'BA.00','PENYULUHAN','Surat-surat   yang   berkenaan   dengan   seluruh   proses   yang   berhubungan dengan penerangan agama kepada masyarakat dan lingkungan khusus (transmigrasi,   suku   terasing   inrehab   dan   narapidana),   termasuk sarananya seperti: film,  drama, MTQ (Musabaqoh Tilawati Qurâ€™an),  pagelaran seni budaya, perayaan hari-hari besar agama,   sekaten, fesparani, Utsawa Dharma Gita,  Orientasi Seni Budaya, Siaran RRI I TVRI'),
(140,'BA.01','BIMBINGAN','-'),
(141,'BA.01.1','LEMBAGA KEAGAMAAN','Surat-surat   yang   berkenaan   dengan   bimbingan   kepada   lembaga-lembaga keagamaan yang ada dalam masyarakat, meliputi: daâ€™i /juru penerang agama, organisasi-organisasi keagamaan kepengurusan rumah ibadah organisasi remaja keagamaan dan sarana bimbingannya, rekomendasi   DPKK   (Dana   Pengembangan   Keahlian   dan Ketrampilan), rekomendasi   izin   impor   terhadap   barang   bantuan/hibah   dari   luar negeri, rekomendasi pembebasan pajak pertambahan nilai terhadap buku  kitab suci, buku pelajaran agama'),
(142,'BA.01.2','ALIRAN KEROHANIAN/KEAGAMAAN','Surat-surat yang berkenaan dengan aliran kerohanian/ keagamaan yang timbul dalam masyarakat.'),
(143,'BA.02','KERUKUNAN HIDUP BERAGAMA','Surat-surat   yang   berkenaan   dengan   bimbingan   kerukunan   hidup beragama,   termasuk   surat-surat   yang  berkenaan   dengan   hal-hal   yang menyinggung  perasaan umat beragama.'),
(144,'BA.03','IBADAH DAN IBADAH SOSIAL','-'),
(145,'BA.03.1','IBADAH','Surat-surat   yanng   berkenaan   dengan   seluruh   proses kegiatan pembinaan ibadah seperti: Shalat led, Eka Dhasa Rudra, Kebaktian, Natal, Galungan, Waisak, Nyepi'),
(146,'BA.03.2','IBADAH SOSIAL','Surat-surat   yang   berkenaan   dengan   seluruh   proses   kegiatan   ibadah sosial, seperti:baitul maal termasuk zakat, hibah, infak, wakaf dan bondo masjid, dana punia,  dana paramita,  kolekta,  diskonia, dan lain-lain termasuk bantuan rumah ibadah.'),
(147,'BA.04','PENGEMBANGAN KEAGAMAAN','Surat-surat yang berkenaan dengan pengeimbangan keagamaan, meliputi data: statistik keagamaan,  pemeluk agama,  tokoh agama, dan rumah ibadah'),
(148,'BA.05','ROHANIAWAN','Surat-surat yang berkenaan dengan rohaniawan, termasuk: urusan perizinan,  naturalisasi,  paskim,  visa,   perpanjangan izin,  dan pengambilan sumpah.'),
(149,'PP','PENDIDIKAN DAN PENGAJARAN','-'),
(150,'PP.00','KURIKULUM, TENAGA EDUKATIF DAN SARANA','-'),
(151,'PP.00.1','SEKOLAH   UMUM   TINGKAT   TAMAN   KANAK-KANAK   D','Surat-surat   yang   berkenaan   dengan   masalah-masalah   yang menyangkut siswa, kurikulum, tenaga edukatif, sarana pendidikan dan pengajaran termasuk subsidi dan bantuan pada TK dan SD.'),
(152,'PP.00.2','SEKOLAH LANJUTAN TINGKAT PERTAMA (SLTP)','Surat-surat   yang   berkenaan   dengan   masalah-masalah   yang menyangkut siswa, kurikulum, tenaga edukatif, sarana pendidikan dan pengajaran termasuk subsidi dan bantuan pada tingkat  SLTP.'),
(153,'PP.00.3','SEKOLAH LANJUTAN TINGKAT ATAS (SLTA).','Surat-surat   yang   berkenaan   dengan   masalah-masalah   yang menyangkut siswa, kurikulum, tenaga edukatif, sarana pendidikan dan pengajaran termasuk subsidi dan bantuan pada tingkat SLTA.'),
(154,'PP.00.4','RAUDHATUL   ATHFAL   DAN   MADRASAH   IBTIDAIYAH (','Surat-surat   yang   berkenaan   dengan   masalah-masalah   yang menyangkut siswa, kurikulum, tenaga edukatif, sarana pendidikan dan pengajaran   termasuk   subsidi   dan   bantuan   pada   perguruan   agama tingkat RA dan Madrasah lbtidaiyah (prasekolah dan pratama).'),
(155,'PP.00.5','MADRASAH  TSANAWIYAH (MENENGAH PERTAMA)','Surat-surat   yang   berkenaan   dengan   masalah-masalah   yang menyangkut siswa, kurikulum, tenaga edukatif, sarana pendidikan dan pengajaran termasuk subsidi dan bantuan pada Madrasah Tsanawiyah (menengah pertama).'),
(156,'PP.00.6','MADRASAH  ALIYAH (MENENGAH ATAS)','Surat-surat   yang   berkenaan   dengan   masalah-masalah   yang menyangkut siswa, kurikulum, tenaga edukatif, sarana pendidikan dan pengajaran termasuk subsidi dan bantuan pada Madrasah Aliyah baik Madrasah maupun PGA.'),
(157,'PP.00.7','PONDOK PESANTREN','Surat-surat   yang   berkenaan   dengan   masalah-masalah   yang menyangkut santri, kurikulum, tenaga edukatif, sarana pendidikan dan pengajaran termasuk subsidi dan bantuan pada pondok pesantren.'),
(158,'PP.00.8','MADRASAH DINIYAH','Surat-surat   yang   berkenaan   dengan   masalah-masalah   yang menyangkut mahasiswa, kurikulum, tenaga edukatif, sarana pendidikan dan pengajaran, termasuk subsidi dan bantuan pada rnadrasah diniyah.'),
(159,'PP.00.9','PERGURUAN TINGGI  AGAMA','Surat-surat   yang   berkenaan   dengan   masalah-masalah   yang menyangkut mahasiswa, kurikulum, tenaga edukatif, sarana pendidikan dan  pengajaran   termasuk subsidi   dan   bantuan   pada  perguruan  tinggi agama termasuk program pasca purna sarjana.'),
(160,'PP.00.10','PERGURUAN TINGGI UMUM','Surat-surat   yang   berkenaan   dengan   masalah-masalah   yang menyangkut mahasiswa, kurikulum, tenaga edukatif, sarana pendidikan dan pengajaran, termasuk subsidi dan bantuan pada perguruan tinggi umum termasuk program pasca purna sarjana.'),
(161,'PP.00.11','PENGEMBANGAN SARANA PENDIDIKAN','Surat-surat yang berkenaan dengan masalah-masalah pengembangan kurikulum,   tenaga   edukatif   dan   sarana   pendidikan   di   lingkungan Kementerian   Agama.   Ruang   ini   juga   untuk   menampung   masalah   PP  00.1 s/d PP 00.10 yang termuat secara kolektif dalam satu surat.'),
(162,'PP.01','EVALUASI DAN IJAZAH','-'),
(163,'PP.01.1','PERGURUAN AGAMA','Surat-surat   yang   berkenaan   dengan   masalah-masalah   yang menyangkut soal evaluasi/ujian dan ijazah dan tingkat TK/RA. Diniyah, pondok pesantren sampai perguruan tinggi agama.'),
(164,'PP.01.2','SEKOLAH PERGURUAN UMUM','Surat-surat   yang   berkenaan   dengan   masalah-masalah   yang menyangkut soal evaluasi/ujian dan ijazah tingkat TK, SD, SLTP, SLTA, dan perguruan tinggi umum.'),
(165,'PP.02','KEPENILIKAN, KEPENGAWASAN DAN PEMBINAAN','-'),
(166,'PP.02.1','KEPENILIKAN','Surat.-surat yang berkenaan dengan kegiatan kepenilikan pada TK/RA, SD/Ibtidaiyah dan Diniyah Awaliyah'),
(167,'PP.02.2','KEPENGAWASAN','Surat-surat   yang   berkenaan   dengan   kepengawasan   pada SLTP/Tsanawiyah,   SLTA/Aliyah,   pondok   pesantren   dan   Diniyah Wustho.'),
(168,'PP.02.3','PEMBINAAN','Surat-surat   yang   berkenaan   dengan   kegiatan   pembinaan   pada perguruan   tinggi   agama   dan   perguruan   tinggi   umum   di   bidang keagamaan.'),
(169,'PP.03','KELEMBAGAAN','-'),
(170,'PP.03.1','ORGANISASI','Surat-surat yang menyangkut masalah organisasi intra maupun ekstra sekolah/siswa/mahasiswa/guru maupun orang tua murid. Contoh: OSIS, MENWA,   POMD,   PGRI,   Musyawarah   guru   mata   pelajaran   (MGMP) PAK, Kelompok Kerja Guru (KKG) dan sebagainya.'),
(171,'PP.03.2','PENGEMBANGAN','Surat-surat   yang   menyangkut   masalah   pengembangan,   relokasi, fisial/kelas   jauh,   perubahan/persamaan/penyesuaian   status   swasta-negeri pada perguruan agama.'),
(172,'PP.04','BEASISWA','Surat-surat   yang   berkenaan   dengan   pemberian   beasiswa   baik   dari pemerintah, swasta maupun dan luar negeri, termasuk anak asuh.'),
(173,'PP.05','SUMBANGAN','Surat-surat yang berkenaan dengan: uang sekolah,  uang ujian dan lain-lain yang sejenis.'),
(174,'PP.06','PENGABDIAN','Surat-surat yang berkenaan dengan pengabdian terhadap masyarakat seperti: KKN (Kuliah Kerja Nyata), Butsi   Badan   Usaha   Tenaga   Sukarela   Indonesia) dan kegiatan - kegiatan ektra kurikuler lainnya.'),
(175,'PP.07','PERIZINAN','Surat-surat   yang   menyangkut   masalah   perizinan   belajar/mengajar   bagi lembaga/instasi/orang Indonesia ke luar negeri.');

/*Table structure for table `tab_pegawai` */

DROP TABLE IF EXISTS `tab_pegawai`;

CREATE TABLE `tab_pegawai` (
  `kode_pegawai` int(10) NOT NULL AUTO_INCREMENT,
  `nama_pegawai` varchar(60) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `nidn` varchar(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`kode_pegawai`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tab_pegawai` */

insert  into `tab_pegawai`(`kode_pegawai`,`nama_pegawai`,`nik`,`nip`,`nidn`,`email`,`no_hp`) values 
(1,'DR. MUHAMMAD ZAINAL ABIDIN, M.AG','1234567891234567','1241414','242134`','qree@gmail.com','1354235'),
(2,'DRS. EMRONI, M.AG','6371022712670003','1353532341','1345542154','aeg@asgsgr.co.id','143535'),
(3,'DR. ADI ANSARI, S.PD, M.PD.I','6307030102870007','-','-','-','-'),
(4,'DR. NURYADIN, M.AG','6371040704750010','-','-','anfs@gmail.com','16515'),
(5,'DR. NORLAILA, S.AG, M.AG','6371015709710004','-','-','-','-'),
(6,'MUHAMMAD FAHMI NURANI, SEI, MH','6301032812900001','-','-','-','-'),
(7,'MURSALIN, S.PD, M.PD','6309052206920002','-','-','-','-'),
(8,'NOOR HASANAH, S.PD.I, MA','6303055812840005','-','-','-','-'),
(9,'MAYANG GADIH RANTI, S.SI, M.PD','6303054706870014','-','-','-','-'),
(10,'IBNU ARABI, S.AG, M.FIL.I','6371022404710003','-','-','-','-'),
(11,'LIA AGUSTINA','6309075509890002','-','-','-','-'),
(12,'REZA FANANNY','6371020407770014','-','-','-','-'),
(13,'MUKHYAR','6371022202680003','-','-','-','-'),
(17,'LP2M UIN ANTASARI BJM','1111111111111111','1','1','lp2m@uin-antasari.ac.id','1');

/*Table structure for table `tab_subunit` */

DROP TABLE IF EXISTS `tab_subunit`;

CREATE TABLE `tab_subunit` (
  `kode_subunit` int(11) NOT NULL AUTO_INCREMENT,
  `nama_subunit` varchar(50) DEFAULT NULL,
  `kode_unit` int(10) DEFAULT NULL,
  `kode_surat_subunit` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`kode_subunit`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tab_subunit` */

insert  into `tab_subunit`(`kode_subunit`,`nama_subunit`,`kode_unit`,`kode_surat_subunit`) values 
(13,'Pusat Penelitian dan Publikasi Ilmiah',1,'V.2a'),
(14,'Pusat Pengabdian kepada Masyarakat',1,'V.2b'),
(15,'Pusat Studi Gender dan Anak',1,'V.2c');

/*Table structure for table `tab_surat_keluar` */

DROP TABLE IF EXISTS `tab_surat_keluar`;

CREATE TABLE `tab_surat_keluar` (
  `kode_sk` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_sk` date DEFAULT NULL,
  `jenis_sk` varchar(15) DEFAULT NULL,
  `sifat_sk` varchar(15) DEFAULT NULL,
  `no_indeks` varchar(20) DEFAULT NULL,
  `kode_subunit` varchar(10) DEFAULT NULL,
  `nama_tujuan` varchar(100) DEFAULT NULL,
  `kode_klasifikasi` varchar(10) DEFAULT NULL,
  `perihal` varchar(100) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `nama_file` varchar(100) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  PRIMARY KEY (`kode_sk`)
) ENGINE=InnoDB AUTO_INCREMENT=638 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tab_surat_keluar` */

insert  into `tab_surat_keluar`(`kode_sk`,`tanggal_sk`,`jenis_sk`,`sifat_sk`,`no_indeks`,`kode_subunit`,`nama_tujuan`,`kode_klasifikasi`,`perihal`,`keterangan`,`nama_file`,`status`) values 
(436,'2022-08-01','Internal','B','202208010611','14','Rektor UIN Antasari','24','Mohon Surat Tugas dan SPD Koordinasi Izin Penempatan Mahasiswa KKN Tematik Semester Ganjil 2022/2023','hasil import',NULL,'1'),
(437,'2022-08-01','Internal','B','202208010612','14','Rektor UIN Antasari','22','Mohon Ralat Surat Tugas Narsum Religi Pagi','hasil import',NULL,'1'),
(438,'2022-08-01','Internal','P','202208010613','14','Seluruh Mahasiswa/i yang mengikuti TKK Semester Ganjil 22/23','92','Pengumuman Hasil TKK','hasil import',NULL,'1'),
(439,'2022-08-02','Internal','B','202208020614','14','Rektor UIN Antasari','22','Mohon ST Narsum Religi Pagi RRI Bjm','hasil import',NULL,'1'),
(440,'2022-08-02','Internal','B','202208020615','14','Rektor UIN Antasari','22','Mohon SK Penguji TKK Mahasiswa','hasil import',NULL,'1'),
(441,'2022-08-02','Internal','P','202208020616','14','Mahasiswa yang mengikuti ujian TKK Semester Ganjil 22/23','92','Pengumuman Susulan Kelulusan','hasil import',NULL,'1'),
(442,'2022-08-02','Internal','B','202208020617','14','Rektor UIN Antasari','22','Mohon SK Tim Pelaksana KKN','hasil import',NULL,'1'),
(443,'2022-08-02','Internal','B','202208020618','14','KPA cq PPK UIN Antasari','29','SP Uang Transport Pembinaan Napi di LP Teluk Dalam Bjm','hasil import',NULL,'1'),
(444,'2022-08-03','Internal','B','202208030619','15','KPA cq PPK UIN Antasari','10','SP Uang Transport Narsum Radio Smart FM Bjm','hasil import',NULL,'1'),
(445,'2022-08-03','Internal','B','202208030620','13','KPA cq PPK UIN Antasari ','10','SP Biaya Perjadin Narsum A. Suwendi','hasil import',NULL,'1'),
(446,'2022-08-03','Internal','B','202208030621','13','KPA cq PPK','10','SP By Perjadin Narsum An. Imam MIS','hasil import',NULL,'1'),
(447,'2022-08-05','Internal','B','202208050622','13','Nara Sumber (Dr. Umar Fauzan, M.Pd)','159','Undangan menjadi Narasumber  Workshop Tata Kelola OJS (Open Journal System) dan Pendampingan Pengusu','hasil import',NULL,'1'),
(448,'2022-08-08','Internal','B','202208080623','14','Rektor UIN Antasari','24','Mohon Surat Tugas dan SPD Pembimbing KKN untuk Koordinasi dan Survey lokasi KKN serta tempat tinggal','hasil import',NULL,'1'),
(449,'2022-08-08','Internal','B','202208080624','13','Pengelola Jurnal di Lingkungan UIN ANTASARII','159','Undangan Workshop Tata Kelola Jurnal dan Akreditasi','hasil import',NULL,'1'),
(450,'2022-08-09','Internal','P','202208090625','13','Peneliti Kebijakan','109','Pengumuman untuk Menyerahkan Revisi Proposal dan RAB ','hasil import',NULL,'1'),
(451,'2022-08-09','Internal','P','202208090626','14','DPL KKN','150','Rapat Koordinasi Pelaksanaan KKN','hasil import',NULL,'1'),
(452,'2022-08-10','Internal','B','202208100627','14','KPA cq PPK UIN Antasari','10','SP Biaya Perjadin Koordinasi Izin KKN Tematik','hasil import',NULL,'1'),
(453,'2022-08-10','Internal','B','202208100628','14','Kepala Desa/Dusun/Ketua RT','24','Mohon memfasilitasi pelaksanaan KKN Tematik semester Ganjil 2022/2023','hasil import',NULL,'1'),
(454,'2022-08-10','Internal','B','202208100629','13','Dr. Muhammad Zainal Abidin, M.Ag, Dkk','25','SPMT Tim Pelaksana Kegiatan dan Anggaran Penelitian Litapdimas','hasil import',NULL,'1'),
(455,'2022-08-10','Internal','B','202208100630','13','cq PPK UIN Antasari Banjarmasin','10','Honor Tim Pelaksana Kegiatan dan Anggaran Penelitan Litapdimas','hasil import',NULL,'1'),
(456,'2022-08-10','Internal','B','202208100631','14','Rektor UIN Antasari','24','Mohon Surat Tugas dan SPD Pengantaran dan Koordinasi Tempat Tinggal Mahasiswa KKN OLeh Dosen Pembimb','hasil import',NULL,'1'),
(457,'2022-08-11','Internal','B','202208110632','14','Rektor UIN Antasari','24','Mohon ST dan SPD Koordinasi Pengantaran dan Serahterima Mahasiswa KKN Ganjil 2022/2023','hasil import',NULL,'1'),
(458,'2022-08-11','Internal','B','202208110633','14','Rektor','89','Mohon Sambutan','hasil import',NULL,'1'),
(459,'2022-08-11','Internal','B','202208110634','14','Umum','150','Surat Keterangan KKN','hasil import',NULL,'1'),
(460,'2022-08-11','Internal','B','202208110635','13','Peserta Workshop Tata Kelola OJS','93','Sertifikat Workshop Tata Kelola OJS','hasil import',NULL,'1'),
(461,'2022-08-11','Internal','B','202208110636','14','Rektor UIN Antasari','22','Mohon SK Penguji Seleksi Mhs KKN-KNMB','hasil import',NULL,'1'),
(462,'2022-08-11','Internal','B','202208110637','14','Rektor','89','Pinjam Tempat','hasil import',NULL,'1'),
(463,'2022-08-12','Internal','B','202208120638','14','Rektor UIN Antasari','22','Mohon SK Pendamping dan Pendamping KKN-KNMB Papua','hasil import',NULL,'1'),
(464,'2022-08-12','Internal','B','202208120639','14','Rektor UIN Antasari Banjarmasin','89','Mohon Sambutan Pada Pembekalan KKN','hasil import',NULL,'1'),
(465,'2022-08-12','Internal','B','202208120640','13','KPA cq PPK UIN Antasari','10','SP Honor Narsum Workshop An. Aang Junaidi','hasil import',NULL,'1'),
(466,'2022-08-12','Internal','B','202208120641','13','KPA cq PPK UIN Antasari','10','SP Honor Narsum Workshop An. Imam MIS','hasil import',NULL,'1'),
(467,'2022-08-12','Internal','B','202208120642','14','Kepala UTIPD','100','Minta Link Zoom','hasil import',NULL,'1'),
(468,'2022-08-12','Internal','B','202208120643','14','Kepala UTIPD','100','Permintaan Support IT','hasil import',NULL,'1'),
(469,'2022-08-14','Internal','B','202208140644','14','Rektor C.q Kabag umum UIN Antasari Banjarmasin','89','Mohon Pinjam Tempat','hasil import',NULL,'1'),
(470,'2022-08-15','Internal','B','202208150645','14','Rektor UIN Antasari','22','Mohon SK Pembekalan KKN Tematik Semester Ganjil TA 2022/2023','hasil import',NULL,'1'),
(471,'2022-08-18','Internal','B','202208180646','15','Rektor','167','Laporan Kekerasan Seksual','hasil import',NULL,'1'),
(472,'2022-08-18','Internal','B','202208180647','13','Kepala UTIPD','95','Permintaan Link Zoom','hasil import',NULL,'1'),
(473,'2022-08-18','Internal','P','202208180648','13','Dosen, Pustakawan & Laboran UIN Antasari Banjarmasin','24','Pengumuman Penerimaan dan Seleksi Proposal Penelitian Sekaligus Undangan Sosialisasi Juknis Peneliti','hasil import',NULL,'1'),
(474,'2022-08-18','Internal','B','202208180649','14','Rektor UIN Antasari','22','Mohon SK Pembimbing Mhsw KKN Tematik Thp I','hasil import',NULL,'1'),
(475,'2022-08-19','Internal','B','202208190650','14','KPA cq PPK UIN Antasari','10','SP By Sewa Mobil Antar Mhs KKN Tematik Thp I','hasil import',NULL,'1'),
(476,'2022-08-19','Internal','B','202208190651','13','Pemohon Program Penerbitan Buku Terpilih Tahun 2022','24','Pemberitahuan Hasil Program Penerbitan Buku','hasil import',NULL,'1'),
(477,'2022-08-22','Internal','B','202208220652','15','Prof. Dr. Hj. Mufida, M.Pd Nara Sumber','89','Mohon Menjadi Narasumber','hasil import',NULL,'1'),
(478,'2022-08-22','Internal','B','202208220653','15','Rektor ','89','Mohon Pinjam Tempat','hasil import',NULL,'1'),
(479,'2022-08-22','Internal','B','202208220654','14','Dr. Muhammad Zainal Abidin M.Ag, Dkk ','25','SPMT Penguji Tes TKK Semester Ganjil','hasil import',NULL,'1'),
(480,'2022-08-22','Internal','B','202208220655','14','Cq. PPK Uin Antasari Banjarmasin','10','Honor Penguji TKK Mahasiswa KKN Semester Ganjil','hasil import',NULL,'1'),
(481,'2022-08-22','Internal','B','202208220656','14','KPA cq PPK UIN Antasari','10','SP Biaya Perjadin Koord Antar & Serahterima Mhs KKN Tematik','hasil import',NULL,'1'),
(482,'2022-08-22','Internal','B','202208220657','14','Dr. Nuryadin, S.Ag, SH, M.Ag dan M. Fahmi Nurani, MH','25','SPMT Penguji Seleksi Mahasiswa KKN KNMB Semester Ganjil 2022/2023','hasil import',NULL,'1'),
(483,'2022-08-22','Internal','B','202208220658','14','cq. PPK UIN Antasari Banjarmasin','10','Honor Penguji Seleksi KKN KNMB Semester Ganjil','hasil import',NULL,'1'),
(484,'2022-08-22','Internal','P','202208220659','15','Rektor UIN Antasari Banjarmasin','89','Mohon Sambutan','hasil import',NULL,'1'),
(485,'2022-08-22','Internal','B','202208220660','14','Rektor UIN Antasari','89','Mohon Pinjam Tempat','hasil import',NULL,'1'),
(486,'2022-08-22','Internal','B','202208220661','13','Wakil Dekan Akademik dan Kelembagaan Fakultas Syariah','159','Mohon Delegasi Peserta','hasil import',NULL,'1'),
(487,'2022-08-22','Internal','B','202208220662','14','Rektor UIN Antasari','24','Mohon ST dan SPD Monitoring KKN Tematik semester Ganjil 2022/2023','hasil import',NULL,'1'),
(488,'2022-08-23','Internal','B','202208230663','14','KPA cq PPK UIN Antasari Banjarmasin','12','SURAT PENGANTAR BERKAS REALISASI ANGGARAN BELANJA','hasil import',NULL,'1'),
(489,'2022-08-23','Internal','B','202208230664','13','Rektor UIN Antasari','24','Mohon ST dan SPD Mengahadiri Sosialisasi SINTA Versi 3','hasil import',NULL,'1'),
(490,'2022-08-23','Internal','B','202208230665','14','Direktur Pascasarjana','89','Mohon Pinjam Tempat','hasil import',NULL,'1'),
(491,'2022-08-24','Internal','B','202208240666','14','Rektor UIN','23','Mohon Surat Tugas','hasil import',NULL,'1'),
(492,'2022-08-24','Internal','P','202208240667','14','KPA cq PPK UIN Antasari','10','SP By Perjadin Pembimbing Survei','hasil import',NULL,'1'),
(493,'2022-08-24','Internal','B','202208240668','13','Pengelola Jurnal: 1.	Tarbiyah Islamiyah 2.	Mu’asarah 3.Pustaka Karya','159','Akreditasi Jurnal','hasil import',NULL,'1'),
(494,'2022-08-24','Internal','P','202208240669','14','KPA cq PPK UIN Antasari','10','SP By SPD Pembimbing Pengantaran Mhs KKN Tematik','hasil import',NULL,'1'),
(495,'2022-08-25','Internal','B','202208250670','15','Fakultas dan Pascasarjana','23','Mohon delegasi','hasil import',NULL,'1'),
(496,'2022-08-25','Internal','B','202208250671','13','Peserta Workshop','23','Mohon Delegasi Peserta ','hasil import',NULL,'1'),
(497,'2022-08-26','Internal','P','202208260672','13','Narasumber','89','Mohon Menjadi Narasumber','hasil import',NULL,'1'),
(498,'2022-08-26','Internal','B','202208260673','13','Tim ISBN','24','Mohon ISBN','hasil import',NULL,'1'),
(499,'2022-08-26','Internal','B','202208260674','14','Rektor UIN Antasari','24','Mohon ST dan SPD Pembimbing KKN untuk Supervisi program kerja Mahasiswa KKN','hasil import',NULL,'1'),
(500,'2022-08-29','Internal','B','202208290675','13','Narasumber diskusi ilmiah','88','Mohon menjadi narasumber ','hasil import',NULL,'1'),
(501,'2022-08-29','Internal','P','202208290676','14','KPA cq PPK UIN Antasari','10','SP By Perjadin (Pulang) Peserta KKN-KNMB','hasil import',NULL,'1'),
(502,'2022-08-29','Internal','P','202208290677','13','Seluruh staf LP2M','89','Rapat Koordinasi Internal','hasil import',NULL,'1'),
(503,'2022-08-29','Internal','B','202208290678','14','Seluruh mahasiswa UIN Antasari Bjm','51','PENGUMUMAN HASIL TES KETERAMPILAN KEAGAMAAN (TKK) TAHAP 2 SEMESTER GANJIL 2022/2023','hasil import',NULL,'1'),
(504,'2022-08-30','Internal','P','202208300679','14','KPA cq PPK UIN Antasari','10','SPJ By Perjadin Pembimbing Survei','hasil import',NULL,'1'),
(505,'2022-08-30','Internal','P','202208300680','14','KPA cq PPK UIN Antasari','10','SPJ By Perjadin Pembimbing Pengantaran','hasil import',NULL,'1'),
(506,'2022-08-30','Internal','B','202208300681','13','Direktur Pasca Sarjana UIN Antasari Banjarmasin','89','Minjam Tempat','hasil import',NULL,'1'),
(507,'2022-08-30','Internal','B','202208300682','14','Rektor UIN Antasari Banjarmasin','24','Mohon ST dan SPD Koordinasi dan Survey Lokasi KKN Semester Ganjil 2022/2023','hasil import',NULL,'1'),
(508,'2022-08-30','Internal','B','202208300683','14','Dr. Nuryadin, S.Ag, SH, M.Ag dan Dr. M. Syukri Nawir, S.Pd.I, M.Ag','25','SPMT Pendamping dan Pembimbing Mahasiswa KKN KNMB Papua','hasil import',NULL,'1'),
(509,'2022-08-30','Internal','B','202208300684','14','Cq PPK UIN Antasari Banjarmasin','10','Honor Pendamping  dan Pembimbing Mahasiswa KKN KNMB Papua','hasil import',NULL,'1'),
(510,'2022-08-30','Internal','B','202208300685','14','Rektor UIN Antasari','22','Mohon SK Penguji TKK Mahasiswa Tahap II','hasil import',NULL,'1'),
(511,'2022-08-30','Internal','P','202208300686','13','Humas','139','Mohon Liputan','hasil import',NULL,'1'),
(512,'2022-08-31','Internal','P','202208310687','14','KPA cq PPK UIN Antasari','10','SPJ By Perjadin Monitoring KKN Tematik','hasil import',NULL,'1'),
(513,'2022-09-01','Internal','B','202209010688','13','Dr. Muhammad Zaina Abidin, MA dkk','25','SPMT Tim Pelaksana Kegiatan dan Anggaran Penelitian','hasil import',NULL,'1'),
(514,'2022-09-01','Internal','B','202209010689','13','Cq PPK UIN Antasari Banjarmasin','10','Honor Tim Pelaksana Kegiatan dan Anggaran Penelitian','hasil import',NULL,'1'),
(515,'2022-09-01','Internal','B','202209010690','14','Drs. H. Muhammad Yuseran, M.Pd dkk','25','SPMT Pembimbing Mahasiswa KKN Tematik Tahap I Ganjil','hasil import',NULL,'1'),
(516,'2022-09-01','Internal','B','202209010691','14','Cq PPK UIN Antasari Banjarmasin','10','Honor Pembimbing Mahasiswa KKN Tematik Tahap I Ganjil','hasil import',NULL,'1'),
(517,'2022-09-01','Internal','B','202209010692','13','Dekan Fakultas Syariah','89','Mohon Pinjam Tempat','hasil import',NULL,'1'),
(518,'2022-09-01','Internal','B','202209010693','13','Rektor UIN Antasari','4','Mohon ST dan SPD Narsum an. Mufidah','hasil import',NULL,'1'),
(519,'2022-09-01','Internal','B','202209010694','13','Rektor UIN Antasari','22','Mohon ST dan SPD Narsum An. Sugiyono','hasil import',NULL,'1'),
(520,'2022-09-02','Internal','B','202209020695','13','Rektor UIN Antasari','89','Mohon Sambutan Acara','hasil import',NULL,'1'),
(521,'2022-09-02','Internal','B','202209020696','13','Narasumber Workshop penelitian berbasis pengabdian kepada masyarakat','89','mohon menjadi narasumber','hasil import',NULL,'1'),
(522,'2022-09-02','Internal','B','202209020697','13','DEKAN DI LINKUNGAN UIN ANTASARI','89','MOHON REKOMENDASI PESERTA','hasil import',NULL,'1'),
(523,'2022-09-05','Internal','B','202209050698','13','Kabag Humas UIN Antasari','89','Mohon Perekaman dan Liputan','hasil import',NULL,'1'),
(524,'2022-09-05','Internal','B','202209050699','14','Rektor UIN Antasari','24','Mohon ST dan SPD Koordinasi dan Survey Lokasi KKN','hasil import',NULL,'1'),
(525,'2022-09-05','Internal','B','202209050700','14','Izin Penempatan KKN','156','Izin Penempatan KKN','hasil import',NULL,'1'),
(526,'2022-09-05','Internal','B','202209050701','14','Camat Limpasu','156','Izin Penempatan KKN','hasil import',NULL,'1'),
(527,'2022-09-05','Internal','B','202209050702','14','Camat Awayan','156','Izin Penempatan KKN','hasil import',NULL,'1'),
(528,'2022-09-05','Internal','B','202209050703','14','Camat Juai','156','Izin Penempatan KKN','hasil import',NULL,'1'),
(529,'2022-09-06','Internal','B','202209060704','14','Peserta Workshop PKM','89','Undangan Peserta','hasil import',NULL,'1'),
(530,'2022-09-07','Internal','P','202209070705','14','KPA cq PPK UIN Antasari','10','SPJ By Perjadin Tim Koord. & Survey Lokasi KKN Tematik','hasil import',NULL,'1'),
(531,'2022-09-07','Internal','B','202209070706','14','Rektor UIN Antasari','24','Mohon ST dan SPD Panitia dan Narasumber Workshop Kader Pengabdian Desa Binaan','hasil import',NULL,'1'),
(532,'2022-09-07','Internal','B','202209070707','14','Rektor UIN Antasari','24','Mohon ST dan SPD Koordinasi dan Survei Lokasi KKN','hasil import',NULL,'1'),
(533,'2022-09-07','Internal','P','202209070708','14','Kepala Bagian Humas','90','Mohon Perekaman dan Liputan','hasil import',NULL,'1'),
(534,'2022-09-07','Internal','B','202209070709','14','Peserta Workshop Kader Pengabdian Desa Binaan','89','Mohon Utusan Peserta Workshop Kader Pengabdian Desa Binaan','hasil import',NULL,'1'),
(535,'2022-09-07','Internal','B','202209070710','14','Rektor UIN Antasari','4','Mohon ST dan SPD Narsum Workshop','hasil import',NULL,'1'),
(536,'2022-09-07','Internal','B','202209070711','14','Rektor UIN Antasari','4','Mohon ST & SPD Narsum Workshop','hasil import',NULL,'1'),
(537,'2022-09-08','Internal','B','202209080712','14','KPA ccq PPK','12','Surat Pengantar Berkas Realisasi Anggaran Belanja','hasil import',NULL,'1'),
(538,'2022-09-09','Internal','B','202209090713','14','M. Fahmi Nurani, M.H','25','SPMT Penguji TKK KKN Semester ganjil Tahap II ','hasil import',NULL,'1'),
(539,'2022-09-09','Internal','B','202209090714','14','Cq, PPK UIN Antasari Banjarmasin','10','Honor Penguji TKK Calon Mahasiswa KKN Ganjil Tahap II','hasil import',NULL,'1'),
(540,'2022-09-09','Internal','B','202209090715','14','Desa','24','Mohon Izin','hasil import',NULL,'1'),
(541,'2022-09-11','Internal','B','202209110716','15','Tugas','174','Surat Tugas Mayang','hasil import',NULL,'1'),
(542,'2022-09-12','Internal','B','202209120717','14','Kepala UTIPD UIN Antasari Banjarmasin','99','Permintaan Link Zoom','hasil import',NULL,'1'),
(543,'2022-09-12','Internal','B','202209120718','13','Editor Buku Program Penerbitan Buku Terpilih','89','Mohon menjadi editor buku','hasil import',NULL,'1'),
(544,'2022-09-12','Internal','B','202209120719','14','Rektor UIN Antasari','24','Mohon ST dan SPD Pengantaran dan Penjemputan Mahasiswa KKN Tematik Semester Ganjil 2022/2023','hasil import',NULL,'1'),
(545,'2022-09-12','Internal','P','202209120720','13','KPA cq PPK UIN Antasari','10','SPJ By SPD Narsum WPK-CA An. Mufidah','hasil import',NULL,'1'),
(546,'2022-09-12','Internal','P','202209120721','13','KPA cq PPK UIN Antasari','10','SPJ By SPD Narsum WPK-CA An. Sugiyono','hasil import',NULL,'1'),
(547,'2022-09-12','Internal','B','202209120722','14','Rektor UIN Antasari','24','Mohon ST dan SPD Koordinasi dan Survey Lokasi KKN Semester Ganjil 2022/2023','hasil import',NULL,'1'),
(548,'2022-09-12','Internal','B','202209120723','14','Kepala UTIPD','99','Permohonan Link Zoom','hasil import',NULL,'1'),
(549,'2022-09-12','Internal','B','202209120724','14','DPL Tahap II','150','Undangan Rapat Koordinasi ','hasil import',NULL,'1'),
(550,'2022-09-13','Internal','B','202209130725','14','Cq. PPK UIN Antasari Banjarmasin','10','Uang Transport Narsum Dialog Interaktif Religi Pagi','hasil import',NULL,'1'),
(551,'2022-09-13','Internal','P','202209130726','14','KPA cq PPK UIN Antasari','10','SPJ By Perjadin Narsum WPK-CA An. Sahil','hasil import',NULL,'1'),
(552,'2022-09-13','Internal','B','202209130727','14','Rektor UIN Antasari Banjarmasin','24','Mohon ST dan SPD Pengantaran Mahasiswa oleh DPL pada lokasi baru KKN Semester Ganjil 2022/2023','hasil import',NULL,'1'),
(553,'2022-09-13','Internal','P','202209130728','14','Rektor','89','Mohon memberikan pengarahan','hasil import',NULL,'1'),
(554,'2022-09-14','Internal','B','202209140729','14','Seluruh Desa KKN','89','Mohon memfasilitasi KKN','hasil import',NULL,'1'),
(555,'2022-09-14','Internal','B','202209140730','14','DPL KKN','23','Surat Tugas DPL','hasil import',NULL,'1'),
(556,'2022-09-14','Internal','P','202209140731','14','KPA cq PPK UIN Antasari','10','SPJ By Perjadin Narsum WPK-CA An. Rubaidi & Naim','hasil import',NULL,'1'),
(557,'2022-09-14','Internal','B','202209140732','13','Narasumber','159','undangan narasumber','hasil import',NULL,'1'),
(558,'2022-09-14','Internal','B','202209140733','13','Pengelola Jurnal','159','Undangan Jurnal','hasil import',NULL,'1'),
(559,'2022-09-14','Internal','B','202209140734','13','Narasumber II','159','Undangan Narasumber ','hasil import',NULL,'1'),
(560,'2022-09-15','Internal','P','202209150735','14','KPA cq PPK UIN Antasari','10','SPJ By Sewa Mobil Antar-Jemput Mhs KKN Tematik','hasil import',NULL,'1'),
(561,'2022-09-15','Internal','B','202209150736','14','Rektor UIN Antasari','24','Mohon ST dan SPD Koordinasi Pengantaran Mahasiswa KKN Tahap 2','hasil import',NULL,'1'),
(562,'2022-09-15','Internal','B','202209150737','14','KPA Cq. PPK UIN Antasari Banjarmasin','10','Perjadin Pembimbing Melakukan Supervisi Program Kerja Mahasiswa KKN','hasil import',NULL,'1'),
(563,'2022-09-16','Internal','P','202209160738','14','KPA cq PPK UIN Antasari','10','SPJ By Perjadin Tim Monitoring KKN Tematik','hasil import',NULL,'1'),
(564,'2022-09-16','Internal','P','202209160739','13','REKTOR','23','mOHON sK TIM SENTRA HKI','hasil import',NULL,'1'),
(565,'2022-09-19','Internal','B','202209190740','14','Rektor UIN Antasari','22','Mohon SK Workshop Kader Pengabdian Desa Binaan','hasil import',NULL,'1'),
(566,'2022-09-19','Internal','B','202209190741','14','Seluruh Mahasiswa/i UIN Antasari Bjm','89','Pengumuman Pendaftaran KKN Tahap 3','hasil import',NULL,'1'),
(567,'2022-09-20','Internal','P','202209200742','14','KPA cq PPK UIN Antasari','10','SPJ By Perjadin WKP Desa Binaan','hasil import',NULL,'1'),
(568,'2022-09-21','Internal','P','202209210743','14','KPA cq PPK UIN Antasari','10','SPJ By Sewa Mobil Antar Mhs KKN Tematik Thp II','hasil import',NULL,'1'),
(569,'2022-09-21','Internal','P','202209210744','13','Seluruh Dekan dilingkungan UIN Antasari','89','Pemberitahuan Perpanjangan Litapdimas','hasil import',NULL,'1'),
(570,'2022-09-22','Internal','B','202209220745','14','Rektor UIN Antasari','22','Mohon Surat Tugas Peserta WKP-Desa Binaan','hasil import',NULL,'1'),
(571,'2022-09-22','Internal','P','202209220746','15','Validator','159','Mohon menjadi validator','hasil import',NULL,'1'),
(572,'2022-09-22','Internal','P','202209220747','14','KPA. Cq PPK UIN Antasari Banjarmasin','10','SPD Pembimbing Melaksanakan Supervisi Program Kerja Mahasiswa KKN Ganjil 2022/2023','hasil import',NULL,'1'),
(573,'2022-09-23','Internal','P','202209230748','14','KPA cq PPK UIN Antasari','10','SPJ By Perjadin Tim Koord Antar & Serah Terima Mhs KKN Tematik Thp 2','hasil import',NULL,'1'),
(574,'2022-09-26','Internal','B','202209260749','14','Rektor UIN Antasari','22','Mohon SK Workshop WPK-CA PKM','hasil import',NULL,'1'),
(575,'2022-09-26','Internal','B','202209260750','14','REKTOR UIN ANTASARI','24','MOHON ST DAN SPD SUPERVISI PROGRAM OLEH DOSEN PEMBIMBING LAPANGAN KKN','hasil import',NULL,'1'),
(576,'2022-09-26','Internal','B','202209260751','14','Rektor UIN Antasari','22','Mohon SK Pembimbing KKN Tematik Tahap II','hasil import',NULL,'1'),
(577,'2022-09-26','Internal','B','202209260752','15','Rektor UIN Antasari','22','Mohon SK WPK-CA Berbasis Gender','hasil import',NULL,'1'),
(578,'2022-09-26','Internal','B','202209260753','14','Nor Aini Sabrina','89','Surat Keterangan Melaksanakan KKN','hasil import',NULL,'1'),
(579,'2022-09-27','Internal','B','202209270754','14','Rektor UIN Antasari','4','Mohon SK Pembekalan Mhs KKN Tematik Thp II','hasil import',NULL,'1'),
(580,'2022-09-27','Internal','B','202209270755','13','Rektor UIN Antasari','4','Mohon SK Workshop Penelitian','hasil import',NULL,'1'),
(581,'2022-09-27','Internal','B','202209270756','13','Rektor UIN Antasari','4','Mohon SK Editor Pengusulan HKI Karya Tulis Dosen','hasil import',NULL,'1'),
(582,'2022-09-27','Internal','B','202209270757','13','Rektor UIN Antasari','22','Mohon SK Reviewer dan Editor Penerbitan Buku Terpilih','hasil import',NULL,'1'),
(583,'2022-09-27','Internal','P','202209270758','14','KPA cq PPK UIN Antasari','10','SPJ Honor Workshop Kader Pengabdian Desa Binaan','hasil import',NULL,'1'),
(584,'2022-09-27','Internal','B','202209270759','14','Rektor UIN Antasari Banjarmasin','24','Mohon ST dan SPD Monitoring KKN','hasil import',NULL,'1'),
(585,'2022-09-28','Internal','P','202209280760','13','KPA cq PPK UIN Antasari','10','SPJ Biaya Pengusulan HKI Karya Tulis Dosen','hasil import',NULL,'1'),
(586,'2022-09-28','Internal','P','202209280761','14','KPA. Cq PPK UIN Antasari','10','SPD Pembimbing Pengantaran Th 2 Penjemputan Th 1','hasil import',NULL,'1'),
(587,'2022-09-28','Internal','P','202209280762','14','KPA. Cq. UIN Antasari Banjarmasin','10','SPD Pembimbing Melaksanakan Koordinasi dan Survey','hasil import',NULL,'1'),
(588,'2022-09-28','Internal','P','202209280763','14','KPA. Cq PPK UIN Antasari Banjarmasin','10','SPD Pembimbing Melaksanakan Pengantaran dan Koordinasi Tempat Tinggal','hasil import',NULL,'1'),
(589,'2022-09-28','Internal','B','202209280764','13','Fakultas dan Pascasarjana','109','Pemenuhan AKun sinta','hasil import',NULL,'1'),
(590,'2022-09-28','Internal','B','202209280765','14','lp2m','150','Undangan Rapat Internal','hasil import',NULL,'1'),
(591,'2022-09-29','Internal','B','202209290766','15','Rektor UIN Antasari','22','Mohon SK Narsum Sos Gender Smart FM','hasil import',NULL,'1'),
(592,'2022-09-29','Internal','B','202209290767','15','Rektor UIN Antasari','22','Mohon ST Narsum Sos Gender Smart FM','hasil import',NULL,'1'),
(593,'2022-09-30','Internal','B','202209300768','14','Rektor UIN Antasari','22','Mohon SK Narsum Majelis Sore Duta TV','hasil import',NULL,'1'),
(594,'2022-09-30','Internal','B','202209300769','14','Rektor UIN Antasari','22','Mohon ST Narsum Majelis Sore Duta TV','hasil import',NULL,'1'),
(595,'2022-09-30','Internal','B','202209300770','14','Rektor UIN Antasari','22','Mohon SK Pendamping Mhsw KKN Tematik','hasil import',NULL,'1'),
(596,'2022-10-03','Internal','P','202210030771','14','Mahasiswa & Wakil Dekan I semua Fakultas','89','Pengumuman kelulusan administrasi KKN tahap 3','hasil import',NULL,'1'),
(597,'2022-10-04','Internal','P','202210040772','14','KPA cq PPK UIN Antasari','10','SPJ Transport Bina Napi di LP Teluk Dalam Bjm','hasil import',NULL,'1'),
(598,'2022-10-04','Internal','B','202210040773','13','Tim Pengelola (Helpdesk) Arjuna','89','Mohon Reset Akun Arjun','hasil import',NULL,'1'),
(599,'2022-10-04','Internal','P','202210040774','14','KPA cq PPK UIN Antasari','10','SPJ Transport Bina Napi di LP Teluk Dalam Bjm','hasil import',NULL,'1'),
(600,'2022-10-04','Internal','P','202210040775','14','KPA cq PPK UIN Antasari','10','SPJ Transport Bina Napi di LP Teluk Dalam Bjm','hasil import',NULL,'1'),
(601,'2022-10-04','Internal','B','202210040776','14','Mahasiswa terlampir & WD I','89','Pengumuman Susulan KKN Tahap 3','hasil import',NULL,'1'),
(602,'2022-10-05','Internal','B','202210050777','14','Rektor UIN Antasari','23','Mohon ST dan SPD Koordinasi Pelaksanaan Workshop Desa Binaan 2022','hasil import',NULL,'1'),
(603,'2022-10-05','Internal','P','202210050778','14','KPA Cq. PPK UIN Antasari Banjarmasin','10','Uang Transport Narsum Religi Pagi','hasil import',NULL,'1'),
(604,'2022-10-05','Internal','B','202210050779','14','Dr. Riinawati, M.Pd','25','SPMT Pembimbing Mahasiswa KKN Tematik Tahap II','hasil import',NULL,'1'),
(605,'2022-10-05','Internal','P','202210050780','14','KPA Cq. PPK UIN Antasari Banjarmasin','10','Honor Pembimbing Mahasiswa KKN Tematik Th. II','hasil import',NULL,'1'),
(606,'2022-10-06','Internal','P','202210060781','14','Seluruh Lp2m','150','Undangan Rapat','hasil import',NULL,'1'),
(607,'2022-10-06','Internal','B','202210060782','15','Rektor UIN Antasari','23','Mohon ST dan SPD Koordinasi Sosialisasi Isu Gender di Desa Binaan Tahun 2022','hasil import',NULL,'1'),
(608,'2022-10-06','Internal','P','202210060783','15','LPM','150','Mohon data pegawai UIN','hasil import',NULL,'1'),
(609,'2022-10-06','Internal','B','202210060784','13','Rektor UIN Antasari','22','Mohon SK Komite Reviewer Laporan Antara Litapdimas Thp I dan II Thn 2022','hasil import',NULL,'1'),
(610,'2022-10-06','Internal','B','202210060785','13','Rektor UIN Antasari','22','Mohon SK Komite Reviewer Proposal Litapdimas 2023','hasil import',NULL,'1'),
(611,'2022-10-06','Internal','P','202210060786','14','KPA Cq. PPK UIN Antasari Banjarmasin','10','SPJ Narasumber Wokshop Penguatan Kapasitas Akademika dalam Penelitian dan Publikasi Ilmiah Berbasis ','hasil import',NULL,'1'),
(612,'2022-10-06','Internal','P','202210060787','13','Muhammad Fahmi Nurani, MH','25','SPMT Honor Penyunting/Editor Pengusulan HKI','hasil import',NULL,'1'),
(613,'2022-10-06','Internal','P','202210060788','13','KPA Cq. PPK UIN Antasari Banjarmasin','10','SPJ Honor Penyunting / Editor Pengusulan HKI','hasil import',NULL,'1'),
(614,'2022-10-06','Internal','P','202210060789','13','KPA Cq PPK UIN Antasari Banjarmasin','10','SPJ Honor Narasumber Workshop Penguatan Kapasitas Civitas Akademika dalam Penelitasn dan Publikasi I','hasil import',NULL,'1'),
(615,'2022-10-06','Internal','P','202210060790','15','KPA Cq PPK UIN Antasari Banjarmasin','10','SPJ Honor Narasumber Workshop Penguatan Kapasitas Civitas Akademika dalam Penelitan dan Publikasi Il','hasil import',NULL,'1'),
(616,'2022-10-06','Internal','B','202210060791','13','dr.Muhammad Zainal Abidin, M.Ag dkk','25','SPMT reviewer dan Editor Buku Terpilih','hasil import',NULL,'1'),
(617,'2022-10-06','Internal','P','202210060792','13','KPA Cq. PPK UIN Antasari Banjarmasin','10','SPJ Honor Reviewer dan Editor Buku Terpilih','hasil import',NULL,'1'),
(618,'2022-10-07','Internal','B','202210070793','14','Miswan dkk','12','SPMT Pendamping Desa/Kecamatan Mahasiswa KKN Ganjil','hasil import',NULL,'1'),
(619,'2022-10-07','Internal','P','202210070794','14','KPA Cq. PPK UIN Antasari Banjarmasin','12','SPJ Honor Pendamping Desa / Kecamatan Mahasiswa KKN Ganjil','hasil import',NULL,'1'),
(620,'2022-10-07','Internal','B','202210070795','14','Seluruh Mahasiswa KKN Tahap 3','173','Pembekalan KKN Tahap 3','hasil import',NULL,'1'),
(621,'2022-10-07','Internal','P','202210070796','15','Undangan Rapat rumah Kitab','174','Surat Tugas Ibu Laila','hasil import',NULL,'1'),
(622,'2022-10-07','Internal','B','202210070797','14','Rektor UIN Antasari','29','Mohon SK Pelaksana Workshop Keagamaan di Desa Binaan','hasil import',NULL,'1'),
(623,'2022-10-07','Internal','B','202210070798','14','Rektor UIN Antasari','23','Mohon ST dan SPD Panitia, Moderator, dan Narasumber Workshop Keagamaan di Desa Binaan Tahun 2022','hasil import',NULL,'1'),
(624,'2022-10-07','Internal','B','202210070799','13','Faisal Ramadhani','91','Surat Pengalaman Kerja dari LP2M','hasil import',NULL,'1'),
(625,'2022-10-07','Internal','B','202210070800','15','Rektor UIN Antasari','24','Mohon ST dan SPD Panitia dan Narasumber Sosialisasi Isu Gender dan Anak di Desa Binaan UIN Antasari ','hasil import',NULL,'1'),
(626,'2022-10-07','Internal','B','202210070801','15','Rektor UIN Antasari','22','Mohon SK Sosialisasi Isu Gender dan Anak Desa Binaan','hasil import',NULL,'1'),
(627,'2022-10-10','Internal','P','202210100802','14','KPA cq PPK UIN Antasari','10','SPJ By Perjadin Tim Monitoring KKN Tematik Thp II','hasil import',NULL,'1'),
(628,'2022-10-10','Internal','B','202210100803','14','Rektor UIN Antasari','23','Mohon ST dan SPD Pengantaran Mahasiswa KKN Tahap 3 dan Penjemputan Mahasiswa KKN Tahap 3','hasil import',NULL,'1'),
(629,'2022-10-10','Internal','B','202210100804','14','Rektor UIN Antasari','23','Mohon ST dan SPD Penjemputan Mahasiswa KKN Tahap 2','hasil import',NULL,'1'),
(630,'2022-10-10','Internal','P','202210100805','13','Nara Sumber','89','Mohon Narasumber','hasil import',NULL,'1'),
(631,'2022-10-10','Internal','P','202210100806','15','Narasumbr PSGA','89','Mohon Narasumber','hasil import',NULL,'1'),
(632,'2022-10-10','Internal','B','202210100807','13','Rektor UIN Antasari','89','Mohon Menjadi Reviewer Proposal Penelitian Tahun 2023','hasil import',NULL,'1'),
(633,'2022-10-10','Internal','P','202210100808','14','KPA cq PPK UIN Antasari','10','SPJ By Tim Perjadin Monitoring KKN Tematik Thp II','hasil import',NULL,'1'),
(634,'2022-10-10','Internal','B','202210100809','14','Rektor UIN Antasari','23','Mohon ST dan SPD Penjemputan dan Pengantaran Mahasiswa KKN','hasil import',NULL,'1'),
(635,'2022-10-10','Internal','B','202210100810','14','Rektor UIN Antasari','24','Mohon ST dan SPD Penjemputan mahasiswa Tahap 2','hasil import',NULL,'1'),
(636,'2022-10-10','Internal','P','202210100811','14','KPA cq PPK UIN Antasari','10','SPJ By Perjadin Koord Ws Desa Binaan','hasil import',NULL,'1'),
(637,'2022-10-10','Internal','B','202210100812','13','peserta jurnal','89','undangan peserta jurnal','hasil import',NULL,'1');

/*Table structure for table `tab_surat_masuk` */

DROP TABLE IF EXISTS `tab_surat_masuk`;

CREATE TABLE `tab_surat_masuk` (
  `kode_sm` int(10) NOT NULL AUTO_INCREMENT,
  `tanggal_sm` date DEFAULT NULL,
  `tanggal_diterima` date DEFAULT NULL,
  `dari` varchar(100) DEFAULT NULL,
  `kode_unit_detail` varchar(10) DEFAULT NULL,
  `asal_suratmasuk` varchar(50) DEFAULT NULL,
  `nomor_sm` varchar(50) DEFAULT NULL,
  `perihal_eks` varchar(200) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `nama_file_eks` varchar(50) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  PRIMARY KEY (`kode_sm`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tab_surat_masuk` */

insert  into `tab_surat_masuk`(`kode_sm`,`tanggal_sm`,`tanggal_diterima`,`dari`,`kode_unit_detail`,`asal_suratmasuk`,`nomor_sm`,`perihal_eks`,`keterangan`,`nama_file_eks`,`status`) values 
(1,'2022-10-13','2022-10-13','Dinas Pemuda Olahraga','8','Internal','r145634sdg','agsrh ertgs ryy wR','',NULL,'0'),
(2,'2022-10-13','2022-10-13','Kepala Biro AUKK UIN Antasari Banjarmasin','8','Internal','qwrg qe qe','qwer fqeq et qe','',NULL,'0');

/*Table structure for table `tab_tujuan_eks` */

DROP TABLE IF EXISTS `tab_tujuan_eks`;

CREATE TABLE `tab_tujuan_eks` (
  `kode_tujuan_eks` int(10) NOT NULL AUTO_INCREMENT,
  `nama_tujuan` varchar(100) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  PRIMARY KEY (`kode_tujuan_eks`)
) ENGINE=InnoDB AUTO_INCREMENT=467 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tab_tujuan_eks` */

insert  into `tab_tujuan_eks`(`kode_tujuan_eks`,`nama_tujuan`,`status`) values 
(1,'Seluruh Mahasiswa/i yang mengikuti TKK Semester Ganjil 22/23','1'),
(2,'Mahasiswa yang mengikuti ujian TKK Semester Ganjil 22/23','1'),
(3,'KPA cq PPK UIN Antasari','1'),
(4,'KPA cq PPK','1'),
(5,'Nara Sumber (Dr. Umar Fauzan, M.Pd)','1'),
(6,'Pengelola Jurnal di Lingkungan UIN ANTASARII','1'),
(7,'Peneliti Kebijakan','1'),
(8,'DPL KKN','1'),
(9,'Kepala Desa/Dusun/Ketua RT','1'),
(10,'Dr. Muhammad Zainal Abidin, M.Ag, Dkk','1'),
(11,'cq PPK UIN Antasari Banjarmasin','1'),
(12,'Umum','1'),
(466,'Umum','1');

/*Table structure for table `tab_unit` */

DROP TABLE IF EXISTS `tab_unit`;

CREATE TABLE `tab_unit` (
  `kode_unit` int(10) NOT NULL AUTO_INCREMENT,
  `nama_unit` varchar(100) DEFAULT NULL,
  `singkatan` varchar(10) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  PRIMARY KEY (`kode_unit`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tab_unit` */

insert  into `tab_unit`(`kode_unit`,`nama_unit`,`singkatan`,`status`) values 
(1,'Lembaga Penelitian dan Pengabdian kepada Masyarakat','LP2M','1'),
(6,'Unit Pengembangan Bahasa','UPB','1'),
(7,'Lembaga Penjamin Mutu','LPM','1'),
(8,'Fakultas Tarbiyah dan Keguruan','FTK','1'),
(9,'Fakultas Syariah','Fasya','1'),
(12,'UIN Antasari Banjarmasin','UINAB','1');

/*Table structure for table `tab_unit_detail` */

DROP TABLE IF EXISTS `tab_unit_detail`;

CREATE TABLE `tab_unit_detail` (
  `kode_unit_detail` int(11) NOT NULL AUTO_INCREMENT,
  `kode_unit` int(11) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode_unit_detail`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `tab_unit_detail` */

insert  into `tab_unit_detail`(`kode_unit_detail`,`kode_unit`,`jabatan`) values 
(7,1,'Ketua'),
(8,1,'Kapus PKM'),
(9,1,'Kapus PPPI'),
(10,1,'Kapus PSGA'),
(11,9,'Dekan'),
(12,9,'Wakil Dekan I'),
(13,9,'Wakil Dekan II'),
(14,9,'Wakil Dekan III'),
(15,12,'Rektor'),
(16,12,'Wakil Rektor I'),
(17,12,'Wakil Rektor II'),
(18,12,'Wakil Rektor III'),
(19,12,'Kepala Biro AUPKK'),
(20,12,'Kepala Biro AUKK');

/*Table structure for table `tab_user` */

DROP TABLE IF EXISTS `tab_user`;

CREATE TABLE `tab_user` (
  `kode_user` int(5) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(55) DEFAULT NULL,
  `status_level` varchar(20) DEFAULT NULL,
  `status_aktif` char(1) DEFAULT NULL,
  PRIMARY KEY (`kode_user`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tab_user` */

insert  into `tab_user`(`kode_user`,`nama_user`,`username`,`password`,`status_level`,`status_aktif`) values 
(1,'LP2M','lp2m@uin-antasari.ac.id','85e12d5b7dbb52d087660195492368b094b00570','Administrator','1'),
(2,'superadmin','superuser','4c45ba093601d3594412d9ca880ecbcf1fae81ee','superadmin','1'),
(6,'lp2m-user1','lp2m-user1','7c4a8d09ca3762af61e59520943dc26494f8941b','User','1'),
(7,'lp2m-user2','lp2m-user2','7c4a8d09ca3762af61e59520943dc26494f8941b','User','1');

/*Table structure for table `tab_user_detail` */

DROP TABLE IF EXISTS `tab_user_detail`;

CREATE TABLE `tab_user_detail` (
  `kode_user_detail` int(10) NOT NULL AUTO_INCREMENT,
  `kode_pegawai` varchar(10) NOT NULL,
  `kode_user` varchar(10) NOT NULL,
  PRIMARY KEY (`kode_user_detail`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tab_user_detail` */

insert  into `tab_user_detail`(`kode_user_detail`,`kode_pegawai`,`kode_user`) values 
(75,'1','1'),
(76,'7','1'),
(78,'2','1'),
(79,'8','1');

/* Trigger structure for table `tab_user` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `hapus_detail_user` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `hapus_detail_user` AFTER DELETE ON `tab_user` FOR EACH ROW 
    BEGIN
	delete from tab_user_detail where kode_user = old.kode_user;
    END */$$


DELIMITER ;

/*Table structure for table `view_jabatan` */

DROP TABLE IF EXISTS `view_jabatan`;

/*!50001 DROP VIEW IF EXISTS `view_jabatan` */;
/*!50001 DROP TABLE IF EXISTS `view_jabatan` */;

/*!50001 CREATE TABLE  `view_jabatan`(
 `kode_unit` int(10) ,
 `nama_unit` varchar(100) ,
 `singkatan` varchar(10) ,
 `kode_unit_detail` int(11) ,
 `jabatan` varchar(50) 
)*/;

/*Table structure for table `view_subunit` */

DROP TABLE IF EXISTS `view_subunit`;

/*!50001 DROP VIEW IF EXISTS `view_subunit` */;
/*!50001 DROP TABLE IF EXISTS `view_subunit` */;

/*!50001 CREATE TABLE  `view_subunit`(
 `kode_subunit` int(11) ,
 `kode_surat_subunit` varchar(10) ,
 `nama_subunit` varchar(50) ,
 `kode_unit` int(10) ,
 `nama_unit` varchar(100) ,
 `singkatan` varchar(10) 
)*/;

/*Table structure for table `view_surat_keluar` */

DROP TABLE IF EXISTS `view_surat_keluar`;

/*!50001 DROP VIEW IF EXISTS `view_surat_keluar` */;
/*!50001 DROP TABLE IF EXISTS `view_surat_keluar` */;

/*!50001 CREATE TABLE  `view_surat_keluar`(
 `kode_sk` int(11) ,
 `tanggal_sk` date ,
 `jenis_sk` varchar(15) ,
 `sifat_sk` varchar(15) ,
 `no_indeks` varchar(20) ,
 `kode_unit` int(10) ,
 `nama_unit` varchar(100) ,
 `kode_subunit` int(11) ,
 `nama_subunit` varchar(50) ,
 `kode_surat_subunit` varchar(10) ,
 `nama_tujuan` varchar(100) ,
 `kode_klasifikasi` int(11) ,
 `kode` varchar(10) ,
 `perihal` varchar(100) ,
 `keterangan` varchar(50) ,
 `nama_file` varchar(100) ,
 `status` char(1) 
)*/;

/*Table structure for table `view_surat_masuk` */

DROP TABLE IF EXISTS `view_surat_masuk`;

/*!50001 DROP VIEW IF EXISTS `view_surat_masuk` */;
/*!50001 DROP TABLE IF EXISTS `view_surat_masuk` */;

/*!50001 CREATE TABLE  `view_surat_masuk`(
 `kode_sm` int(10) ,
 `tanggal_sm` date ,
 `tanggal_diterima` date ,
 `dari` varchar(100) ,
 `asal_suratmasuk` varchar(50) ,
 `nomor_sm` varchar(50) ,
 `perihal_eks` varchar(200) ,
 `keterangan` varchar(100) ,
 `nama_file_eks` varchar(50) ,
 `kode_unit_detail` varchar(10) ,
 `singkatan` varchar(61) ,
 `nama_unit` varchar(100) ,
 `status` char(1) 
)*/;

/*Table structure for table `view_unit` */

DROP TABLE IF EXISTS `view_unit`;

/*!50001 DROP VIEW IF EXISTS `view_unit` */;
/*!50001 DROP TABLE IF EXISTS `view_unit` */;

/*!50001 CREATE TABLE  `view_unit`(
 `kode_unit_detail` int(11) ,
 `kode_unit` int(10) ,
 `nama_unit` varchar(100) ,
 `singkatan` varchar(10) ,
 `jabatan` varchar(50) 
)*/;

/*Table structure for table `view_user` */

DROP TABLE IF EXISTS `view_user`;

/*!50001 DROP VIEW IF EXISTS `view_user` */;
/*!50001 DROP TABLE IF EXISTS `view_user` */;

/*!50001 CREATE TABLE  `view_user`(
 `kode_user_detail` int(10) ,
 `kode_user` int(5) ,
 `nama_user` varchar(50) ,
 `username` varchar(50) ,
 `password` varchar(55) ,
 `status_level` varchar(20) ,
 `status_aktif` char(1) ,
 `kode_pegawai` int(10) ,
 `nama_pegawai` varchar(60) ,
 `nik` varchar(20) ,
 `nip` varchar(20) ,
 `nidn` varchar(10) 
)*/;

/*View structure for view view_jabatan */

/*!50001 DROP TABLE IF EXISTS `view_jabatan` */;
/*!50001 DROP VIEW IF EXISTS `view_jabatan` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_jabatan` AS select `tab_unit`.`kode_unit` AS `kode_unit`,`tab_unit`.`nama_unit` AS `nama_unit`,`tab_unit`.`singkatan` AS `singkatan`,`tab_unit_detail`.`kode_unit_detail` AS `kode_unit_detail`,`tab_unit_detail`.`jabatan` AS `jabatan` from (`tab_unit` join `tab_unit_detail` on(`tab_unit`.`kode_unit` = `tab_unit_detail`.`kode_unit`)) */;

/*View structure for view view_subunit */

/*!50001 DROP TABLE IF EXISTS `view_subunit` */;
/*!50001 DROP VIEW IF EXISTS `view_subunit` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_subunit` AS select `tab_subunit`.`kode_subunit` AS `kode_subunit`,`tab_subunit`.`kode_surat_subunit` AS `kode_surat_subunit`,`tab_subunit`.`nama_subunit` AS `nama_subunit`,`tab_unit`.`kode_unit` AS `kode_unit`,`tab_unit`.`nama_unit` AS `nama_unit`,`tab_unit`.`singkatan` AS `singkatan` from (`tab_unit` join `tab_subunit` on(`tab_unit`.`kode_unit` = `tab_subunit`.`kode_unit`)) */;

/*View structure for view view_surat_keluar */

/*!50001 DROP TABLE IF EXISTS `view_surat_keluar` */;
/*!50001 DROP VIEW IF EXISTS `view_surat_keluar` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_surat_keluar` AS select `tab_surat_keluar`.`kode_sk` AS `kode_sk`,`tab_surat_keluar`.`tanggal_sk` AS `tanggal_sk`,`tab_surat_keluar`.`jenis_sk` AS `jenis_sk`,`tab_surat_keluar`.`sifat_sk` AS `sifat_sk`,`tab_surat_keluar`.`no_indeks` AS `no_indeks`,`tab_unit`.`kode_unit` AS `kode_unit`,`tab_unit`.`nama_unit` AS `nama_unit`,`tab_subunit`.`kode_subunit` AS `kode_subunit`,`tab_subunit`.`nama_subunit` AS `nama_subunit`,`tab_subunit`.`kode_surat_subunit` AS `kode_surat_subunit`,`tab_surat_keluar`.`nama_tujuan` AS `nama_tujuan`,`tab_klasifikasi`.`kode_klasifikasi` AS `kode_klasifikasi`,`tab_klasifikasi`.`kode` AS `kode`,`tab_surat_keluar`.`perihal` AS `perihal`,`tab_surat_keluar`.`keterangan` AS `keterangan`,`tab_surat_keluar`.`nama_file` AS `nama_file`,`tab_surat_keluar`.`status` AS `status` from (((`tab_klasifikasi` join `tab_surat_keluar` on(`tab_klasifikasi`.`kode_klasifikasi` = `tab_surat_keluar`.`kode_klasifikasi`)) join `tab_subunit` on(`tab_subunit`.`kode_subunit` = `tab_surat_keluar`.`kode_subunit`)) join `tab_unit` on(`tab_unit`.`kode_unit` = `tab_subunit`.`kode_unit`)) */;

/*View structure for view view_surat_masuk */

/*!50001 DROP TABLE IF EXISTS `view_surat_masuk` */;
/*!50001 DROP VIEW IF EXISTS `view_surat_masuk` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_surat_masuk` AS select `tab_surat_masuk`.`kode_sm` AS `kode_sm`,`tab_surat_masuk`.`tanggal_sm` AS `tanggal_sm`,`tab_surat_masuk`.`tanggal_diterima` AS `tanggal_diterima`,`tab_surat_masuk`.`dari` AS `dari`,`tab_surat_masuk`.`asal_suratmasuk` AS `asal_suratmasuk`,`tab_surat_masuk`.`nomor_sm` AS `nomor_sm`,`tab_surat_masuk`.`perihal_eks` AS `perihal_eks`,`tab_surat_masuk`.`keterangan` AS `keterangan`,`tab_surat_masuk`.`nama_file_eks` AS `nama_file_eks`,`tab_surat_masuk`.`kode_unit_detail` AS `kode_unit_detail`,concat(`tab_unit_detail`.`jabatan`,' ',`tab_unit`.`singkatan`) AS `singkatan`,`tab_unit`.`nama_unit` AS `nama_unit`,`tab_surat_masuk`.`status` AS `status` from ((`tab_unit_detail` join `tab_surat_masuk` on(`tab_unit_detail`.`kode_unit_detail` = `tab_surat_masuk`.`kode_unit_detail`)) join `tab_unit` on(`tab_unit`.`kode_unit` = `tab_unit_detail`.`kode_unit`)) */;

/*View structure for view view_unit */

/*!50001 DROP TABLE IF EXISTS `view_unit` */;
/*!50001 DROP VIEW IF EXISTS `view_unit` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_unit` AS (select `tab_unit_detail`.`kode_unit_detail` AS `kode_unit_detail`,`tab_unit`.`kode_unit` AS `kode_unit`,`tab_unit`.`nama_unit` AS `nama_unit`,`tab_unit`.`singkatan` AS `singkatan`,`tab_unit_detail`.`jabatan` AS `jabatan` from (`tab_unit` join `tab_unit_detail` on(`tab_unit`.`kode_unit` = `tab_unit_detail`.`kode_unit`))) */;

/*View structure for view view_user */

/*!50001 DROP TABLE IF EXISTS `view_user` */;
/*!50001 DROP VIEW IF EXISTS `view_user` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_user` AS (select `tab_user_detail`.`kode_user_detail` AS `kode_user_detail`,`tab_user`.`kode_user` AS `kode_user`,`tab_user`.`nama_user` AS `nama_user`,`tab_user`.`username` AS `username`,`tab_user`.`password` AS `password`,`tab_user`.`status_level` AS `status_level`,`tab_user`.`status_aktif` AS `status_aktif`,`tab_pegawai`.`kode_pegawai` AS `kode_pegawai`,`tab_pegawai`.`nama_pegawai` AS `nama_pegawai`,`tab_pegawai`.`nik` AS `nik`,`tab_pegawai`.`nip` AS `nip`,`tab_pegawai`.`nidn` AS `nidn` from ((`tab_pegawai` join `tab_user_detail` on(`tab_pegawai`.`kode_pegawai` = `tab_user_detail`.`kode_pegawai`)) join `tab_user` on(`tab_user`.`kode_user` = `tab_user_detail`.`kode_user`))) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
