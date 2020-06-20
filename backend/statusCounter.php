<?php
    //Hitung Siswa SMKN 1 Cimahi
    $siswa1 = mysqli_query($conn, "SELECT * FROM guestlist WHERE day='1' AND status='Siswa SMKN 1 Cimahi'");
    $siswa2 = mysqli_query($conn, "SELECT * FROM guestlist WHERE day='2' AND status='Siswa SMKN 1 Cimahi'");
    $siswa3 = mysqli_query($conn, "SELECT * FROM guestlist WHERE day='3' AND status='Siswa SMKN 1 Cimahi'");
    $tsiswa1 = mysqli_num_rows($siswa1);
    $tsiswa2 = mysqli_num_rows($siswa2);
    $tsiswa3 = mysqli_num_rows($siswa3);

    //Hitung Alumni
    $alumni1 = mysqli_query($conn, "SELECT * FROM guestlist WHERE day='1' AND status='Alumni'");
    $alumni2 = mysqli_query($conn, "SELECT * FROM guestlist WHERE day='2' AND status='Alumni'");
    $alumni3 = mysqli_query($conn, "SELECT * FROM guestlist WHERE day='3' AND status='Alumni'");
    $talumni1 = mysqli_num_rows($alumni1);
    $talumni2 = mysqli_num_rows($alumni2);
    $talumni3 = mysqli_num_rows($alumni3);

    //Hitung Guru
    $guru1 = mysqli_query($conn, "SELECT * FROM guestlist WHERE day='1' AND status='Guru'");
    $guru2 = mysqli_query($conn, "SELECT * FROM guestlist WHERE day='2' AND status='Guru'");
    $guru3 = mysqli_query($conn, "SELECT * FROM guestlist WHERE day='3' AND status='Guru'");
    $tguru1 = mysqli_num_rows($guru1);
    $tguru2 = mysqli_num_rows($guru2);
    $tguru3 = mysqli_num_rows($guru3);

    //Hitung Warga 
    $warga1 = mysqli_query($conn, "SELECT * FROM guestlist WHERE day='1' AND status='Warga Setempat'");
    $warga2 = mysqli_query($conn, "SELECT * FROM guestlist WHERE day='2' AND status='Warga Setempat'");
    $warga3 = mysqli_query($conn, "SELECT * FROM guestlist WHERE day='3' AND status='Warga Setempat'");
    $twarga1 = mysqli_num_rows($warga1);
    $twarga2 = mysqli_num_rows($warga2);
    $twarga3 = mysqli_num_rows($warga3);

    //Hitung Perusahaan
    $per1 = mysqli_query($conn, "SELECT * FROM guestlist WHERE day='1' AND status='Perusahaan'");
    $per2 = mysqli_query($conn, "SELECT * FROM guestlist WHERE day='2' AND status='Perusahaan'");
    $per3 = mysqli_query($conn, "SELECT * FROM guestlist WHERE day='3' AND status='Perusahaan'");
    $tper1 = mysqli_num_rows($per1);
    $tper2 = mysqli_num_rows($per2);
    $tper3 = mysqli_num_rows($per3);
?>