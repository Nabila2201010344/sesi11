<?php
    $dta["NAMA"] = "nabila";
    $dta["TGL_LAHIR"] = "2000-02-26";
    $dta["JKEL"] = "p";
    $dta["JURUSAN"] = "TI-KAB";
    $dta["ALAMAT"] = "JL.MAWAR";

    header("content-type: application/json; charset=utf-8");
    echo json_encode($dta);