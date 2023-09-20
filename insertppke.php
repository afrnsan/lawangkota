<?php
include 'koneksi.php';

$delete = mysqli_query($conn, " DELETE FROM ppke ");

$insert = mysqli_query($conn, " INSERT INTO `ppke`(`urusan`, `nm_keg`, `anggaran`, `realisasi`)
SELECT kd_prog_keg, ur_prog_keg nm_keg, SUM(op_ang) anggaran, SUM(op_real) realisasi 
FROM `data_lra` WHERE urusan IN ('1.06') 
AND kd_prog_keg IN ('1.06.02') 
GROUP BY kd_prog_keg, ur_prog_keg ");

$insert2 = mysqli_query($conn, " INSERT INTO `ppke`(`urusan`, `nm_keg`, `anggaran`, `realisasi`)
SELECT kd_prog_keg, ur_prog_keg nm_keg, op_ang anggaran, op_real realisasi 
FROM `data_lra` WHERE urusan IN ('1.06') 
AND kd_prog_keg IN ('1.06.02.2.02')");

$insertop1 = mysqli_query($conn, " INSERT INTO `ppke`(`urusan`, `nm_keg`, `anggaran`, `realisasi`)
SELECT'1.06.02.2.02.01', 'Belanja Operasi', op_ang anggaran, op_real realisasi 
FROM `data_lra` WHERE urusan IN ('1.06') 
AND kd_prog_keg IN ('1.06.02.2.02')");

$insert3 = mysqli_query($conn, " INSERT INTO `ppke`(`urusan`, `nm_keg`, `anggaran`, `realisasi`)
SELECT kd_prog_keg, ur_prog_keg nm_keg, SUM(op_ang) anggaran, SUM(op_real) realisasi 
FROM `data_lra` WHERE urusan IN ('1.06') 
AND kd_prog_keg IN ('1.06.02.2.03')
GROUP BY kd_prog_keg, ur_prog_keg");

$insertop2 = mysqli_query($conn, " INSERT INTO `ppke`(`urusan`, `nm_keg`, `anggaran`, `realisasi`)
SELECT '1.06.02.2.03.01', 'Belanja Operasi', SUM(op_ang) anggaran, SUM(op_real) realisasi 
FROM `data_lra` WHERE urusan IN ('1.06') 
AND kd_prog_keg IN ('1.06.02.2.03')
GROUP BY kd_prog_keg, ur_prog_keg");

$insert4 = mysqli_query($conn, " INSERT INTO `ppke`(`urusan`, `nm_keg`, `anggaran`, `realisasi`)
SELECT kd_prog_keg, ur_prog_keg nm_keg, SUM(op_ang) anggaran, SUM(op_real) realisasi 
FROM `data_lra` WHERE urusan IN ('1.06') 
AND kd_prog_keg IN ('1.06.04')
GROUP BY kd_prog_keg, ur_prog_keg");

$insert5 = mysqli_query($conn, " INSERT INTO `ppke`(`urusan`, `nm_keg`, `anggaran`, `realisasi`)
SELECT kd_prog_keg, ur_prog_keg nm_keg, SUM(op_ang) anggaran, SUM(op_real) realisasi 
FROM `data_lra` WHERE urusan IN ('1.06') 
AND kd_prog_keg IN ('1.06.04.2.01')
GROUP BY kd_prog_keg, ur_prog_keg");

$insertop3 = mysqli_query($conn, " INSERT INTO `ppke`(`urusan`, `nm_keg`, `anggaran`, `realisasi`)
SELECT '1.06.04.2.01.01', 'Belanja Operasi', SUM(op_ang) anggaran, SUM(op_real) realisasi 
FROM `data_lra` WHERE urusan IN ('1.06') 
AND kd_prog_keg IN ('1.06.04.2.01')
GROUP BY kd_prog_keg, ur_prog_keg");

$insert6 = mysqli_query($conn, " INSERT INTO `ppke`(`urusan`, `nm_keg`, `anggaran`, `realisasi`)
SELECT kd_prog_keg, ur_prog_keg nm_keg, op_ang anggaran, op_real realisasi 
FROM `data_lra` WHERE urusan IN ('1.06') 
AND kd_prog_keg IN ('1.06.05')");

$insert7 = mysqli_query($conn, " INSERT INTO `ppke`(`urusan`, `nm_keg`, `anggaran`, `realisasi`)
SELECT kd_prog_keg, ur_prog_keg nm_keg, op_ang anggaran, op_real realisasi 
FROM `data_lra` WHERE urusan IN ('1.06') 
AND kd_prog_keg IN ('1.06.05.2.01')");

$insertop4 = mysqli_query($conn, " INSERT INTO `ppke`(`urusan`, `nm_keg`, `anggaran`, `realisasi`)
SELECT '1.06.05.2.01.01', 'Belanja Operasi', SUM(op_ang) anggaran, SUM(op_real) realisasi 
FROM `data_lra` WHERE urusan IN ('1.06') 
AND kd_prog_keg IN ('1.06.05.2.01')
GROUP BY kd_prog_keg, ur_prog_keg");


?>