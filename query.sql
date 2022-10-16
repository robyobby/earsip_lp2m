SELECT * FROM view_surat_keluar;
SELECT * FROM tab_user;
SELECT * FROM tab_surat_keluar;
SELECT CONCAT(sifat_sk,'-',MID(no_indeks,7,4),'/Un.14/',`kode_surat_subunit`,'/',kode,'/',MID(no_indeks,3,2),'/20',MID(no_indeks,1,2)) AS no_surat,
tanggal_sk, jenis_sk, nama_tujuan,perihal, keterangan,nama_file,`status` FROM view_surat_keluar WHERE `status`=1;


SELECT `kode_sm`, `tanggal_sm`, `tanggal_diterima`, `dari`, `perihal_eks`, `nama_file_eks`, `keterangan`, 
`asal_suratmasuk`, `nomor_sm`, `status`, `singkatan` AS tujuan  FROM `view_surat_masuk` WHERE `status` = 1 ORDER BY `kode_sm` DESC
SELECT MAX(MID(no_indeks,5,4)) AS nomor_indeks FROM view_surat_keluar
SELECT * FROM tab_klasifikasi WHERE uraian IS NOT NULL;
SELECT * FROM view_subunit;
SELECT * FROM view_surat_keluar;
SELECT * FROM view_surat_masuk;
SELECT * FROM tab_surat_keluar;
SELECT * FROM tab_surat_masuk;
SELECT * FROM tab_sm_detail;
SELECT `kode_sm`, `tanggal_sm`, `tanggal_diterima`, `dari`, `perihal_eks`, `nama_file_eks`, `keterangan`, `asal_suratmasuk`, 
`nomor_sm`, `status`, `singkatan` AS tujuan  FROM `view_surat_masuk` WHERE `status` = 1 ORDER BY `kode_sm` DESC

UPDATE tab_surat_keluar SET MID(`kode_subunit`,3,7) = '' WHERE kode_sk = '31';
SELECT * FROM tab_unit_detail;
SELECT * FROM tab_unit;
SELECT * FROM view_unit;
SELECT CONCAT (jabatan,' ',nama_unit) AS nama_unit FROM view_unit;
SELECT * FROM `tab_tujuan_eks`;

SELECT DISTINCT kode_unit, CONCAT (jabatan,' ',singkatan) AS nama_unit FROM view_unit
UNION
SELECT nama_tujuan AS nama_tujuan FROM tab_tujuan_eks;

UPDATE tab_surat_keluar SET MID(`no_indeks`,1,2) = '21' WHERE MID(`no_indeks`,1,2) = '22';
SELECT DISTINCT CONCAT (view_unit.`jabatan`,' ',view_unit.`nama_unit`) AS nama_unit FROM view_unit
UNION
SELECT tab_tujuan_eks.`nama_tujuan` AS nama_tujuan FROM tab_tujuan_eks
UNION
SELECT tab_surat_keluar.`tujuan` AS tujuan FROM tab_surat_keluar ORDER BY nama_unit ASC;

SELECT MAX(no_indeks) AS indeks_no, MID(MAX(no_indeks),7,4) AS urut_no, MID(MAX(no_indeks),1,2) AS tahun FROM tab_surat_keluar;
SELECT * FROM tab_klasifikasi WHERE sub_nama IS NOT NULL;

SELECT * FROM view_surat_keluar;
SELECT kode_sk,CONCAT(sifat_sk,'-',MID(no_indeks,7,4),'/Un.14/',`kode_surat_subunit`,'/',kode,'/',MID(no_indeks,3,2),'/20',MID(no_indeks,1,2)) AS no_surat,
    tanggal_sk, jenis_sk, nama_tujuan,perihal, nama_unit, nama_subunit, keterangan,nama_file,`status` FROM view_surat_keluar WHERE `status`=1 ORDER BY kode_sk DESC;
SELECT * FROM t_pelanggan_pb;

SELECT kode_sk,CONCAT(sifat_sk,'-',MID(no_indeks,7,4),'/Un.14/',`kode_surat_subunit`,'/',kode,'/',MID(no_indeks,3,2),'/20',MID(no_indeks,1,2)) AS no_surat,
    tanggal_sk, jenis_sk, nama_tujuan,perihal, nama_subunit, nama_unit, keterangan,nama_file,`status` FROM view_surat_keluar WHERE `status`=1 ORDER BY kode_sk DESC LIMIT 0,5

SELECT DISTINCT CONCAT (jabatan,' ',singkatan) AS nama_dari FROM view_unit
    UNION
    SELECT DISTINCT nama_tujuan AS nama_dari FROM tab_tujuan_eks
    UNION
    SELECT DISTINCT dari AS nama_dari FROM tab_surat_masuk
    UNION
    SELECT DISTINCT tab_surat_keluar.`nama_tujuan` AS nama_dari FROM tab_surat_keluar ORDER BY nama_dari ASC



SELECT * FROM tabel_rawatjalan;