<?php
    $dta[0]["NAMA"] = "nabila";
    $dta[0]["TGL_LAHIR"] = "2000-02-26";
    $dta[0]["JKEL"] = "p";
    $dta[0]["JURUSAN"] = "TI-KAB";
    $dta[0]["ALAMAT"] = "JL.MAWAR";

    $dta[1]["NAMA"] = "mangtri";
    $dta[1]["TGL_LAHIR"] = "2000-05-2";
    $dta[1]["JKEL"] = "p";
    $dta[1]["JURUSAN"] = "TI-KAB";
    $dta[1]["ALAMAT"] = "JL.MELATI";

    $dta[2]["NAMA"] = "diantari";
    $dta[2]["TGL_LAHIR"] = "2000-09-6";
    $dta[2]["JKEL"] = "p";
    $dta[2]["JURUSAN"] = "TI-KAB";
    $dta[2]["ALAMAT"] = "JL.JEPUN";

    

    header("content-type: application/json; charset=utf-8");
    echo json_encode($dta);