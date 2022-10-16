
CREATE
    /*[ALGORITHM = {UNDEFINED | MERGE | TEMPTABLE}]
    [DEFINER = { user | CURRENT_USER }]
    [SQL SECURITY { DEFINER | INVOKER }]*/
    VIEW `earsip_lp2m`.`view_surat_keluar_dashboard` 
    AS
SELECT
    `tab_surat_keluar`.`kode_sk`
    , `tab_surat_keluar`.`tanggal_sk`
    , `tab_surat_keluar`.`jenis_sk`
    , `tab_unit`.`nama_unit`
    , `tab_unit_detail`.`jabatan`
    , `tab_surat_keluar`.`perihal`
    , `tab_surat_keluar`.`keterangan`
    , `tab_surat_keluar`.`nama_file`
    , `tab_surat_keluar`.`status`
FROM
    `earsip_lp2m`.`tab_surat_keluar`
    INNER JOIN `earsip_lp2m`.`tab_sk_detail` 
        ON (`tab_surat_keluar`.`kode_sk` = `tab_sk_detail`.`kode_sk`)
    INNER JOIN `earsip_lp2m`.`tab_subunit` 
        ON (`tab_subunit`.`kode_subunit` = `tab_surat_keluar`.`kode_subunit`)
    INNER JOIN `earsip_lp2m`.`tab_unit` 
        ON (`tab_unit`.`kode_unit` = `tab_subunit`.`kode_unit`)
    INNER JOIN `earsip_lp2m`.`tab_unit_detail` 
        ON (`tab_unit`.`kode_unit` = `tab_unit_detail`.`kode_unit`);