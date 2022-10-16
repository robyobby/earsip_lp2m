<?xml version="1.0" encoding="UTF-8"?>
<querybuilder version="8.3">
<source>
<database charset="latin1" collation="latin1_swedish_ci">earsip_lp2m</database>
</source>
<canvas>
<table tablename="tab_sk_detail" alias="" left="10" top="21" width="150" height="113" />
<table tablename="tab_surat_keluar" alias="" left="205" top="21" width="150" height="233" />
<table tablename="tab_subunit" alias="" left="413" top="24" width="150" height="113" />
<table tablename="tab_unit" alias="" left="618" top="24" width="150" height="113" />
<table tablename="tab_unit_detail" alias="" left="820" top="19" width="150" height="113" />
<join type = "Inner Join">
<from tablename = "tab_surat_keluar" alias = "">kode_sk</from>
<to tablename = "tab_sk_detail" alias = "">kode_sk</to>
</join>
<join type = "Inner Join">
<from tablename = "tab_subunit" alias = "">kode_subunit</from>
<to tablename = "tab_surat_keluar" alias = "">kode_subunit</to>
</join>
<join type = "Inner Join">
<from tablename = "tab_unit" alias = "">kode_unit</from>
<to tablename = "tab_subunit" alias = "">kode_unit</to>
</join>
<join type = "Inner Join">
<from tablename = "tab_unit" alias = "">kode_unit</from>
<to tablename = "tab_unit_detail" alias = "">kode_unit</to>
</join>
</canvas>
<grid>
<column id="1">
<table tablename="tab_surat_keluar"></table>
<field>kode_sk</field>
<alias></alias>
<show>true</show>
<sortorder></sortorder>
<sort></sort>
<groupby>false</groupby>
<aggfunct></aggfunct>
<criteria></criteria>
<or1></or1>
<or2></or2>
<or3></or3>
<or4></or4>
</column>
<column id="2">
<table tablename="tab_surat_keluar"></table>
<field>tanggal_sk</field>
<alias></alias>
<show>true</show>
<sortorder></sortorder>
<sort></sort>
<groupby>false</groupby>
<aggfunct></aggfunct>
<criteria></criteria>
<or1></or1>
<or2></or2>
<or3></or3>
<or4></or4>
</column>
<column id="3">
<table tablename="tab_surat_keluar"></table>
<field>jenis_sk</field>
<alias></alias>
<show>true</show>
<sortorder></sortorder>
<sort></sort>
<groupby>false</groupby>
<aggfunct></aggfunct>
<criteria></criteria>
<or1></or1>
<or2></or2>
<or3></or3>
<or4></or4>
</column>
<column id="4">
<table tablename="tab_unit"></table>
<field>nama_unit</field>
<alias></alias>
<show>true</show>
<sortorder></sortorder>
<sort></sort>
<groupby>false</groupby>
<aggfunct></aggfunct>
<criteria></criteria>
<or1></or1>
<or2></or2>
<or3></or3>
<or4></or4>
</column>
<column id="5">
<table tablename="tab_unit_detail"></table>
<field>jabatan</field>
<alias></alias>
<show>true</show>
<sortorder></sortorder>
<sort></sort>
<groupby>false</groupby>
<aggfunct></aggfunct>
<criteria></criteria>
<or1></or1>
<or2></or2>
<or3></or3>
<or4></or4>
</column>
<column id="6">
<table tablename="tab_surat_keluar"></table>
<field>perihal</field>
<alias></alias>
<show>true</show>
<sortorder></sortorder>
<sort></sort>
<groupby>false</groupby>
<aggfunct></aggfunct>
<criteria></criteria>
<or1></or1>
<or2></or2>
<or3></or3>
<or4></or4>
</column>
<column id="7">
<table tablename="tab_surat_keluar"></table>
<field>keterangan</field>
<alias></alias>
<show>true</show>
<sortorder></sortorder>
<sort></sort>
<groupby>false</groupby>
<aggfunct></aggfunct>
<criteria></criteria>
<or1></or1>
<or2></or2>
<or3></or3>
<or4></or4>
</column>
<column id="8">
<table tablename="tab_surat_keluar"></table>
<field>nama_file</field>
<alias></alias>
<show>true</show>
<sortorder></sortorder>
<sort></sort>
<groupby>false</groupby>
<aggfunct></aggfunct>
<criteria></criteria>
<or1></or1>
<or2></or2>
<or3></or3>
<or4></or4>
</column>
<column id="9">
<table tablename="tab_surat_keluar"></table>
<field>status</field>
<alias></alias>
<show>true</show>
<sortorder></sortorder>
<sort></sort>
<groupby>false</groupby>
<aggfunct></aggfunct>
<criteria></criteria>
<or1></or1>
<or2></or2>
<or3></or3>
<or4></or4>
</column>
</grid>
</querybuilder>