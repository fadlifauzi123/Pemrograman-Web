<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas Pembangunan Jaya</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>PENDAFTARAN ONLINE CALON MAHASISWA</h2>
    <form method="POST" action="konfirmasipmb.php">
        <table rules="rows">
            <tr>
                <td>Nama Calon Mahasiswa (sesuai ijazah SMA)*</td>
                <td><input type="text" name="nama" placeholder=" "></td>
            </tr>
            <tr>
                <td>Tempat/Tanggal Lahir*</td>
                <td><input type="date" name="tglLahir"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin*</td>
                <td><input type="radio" name="jk1" value="Laki-laki">Laki-laki
                <input type="radio" name="jk1" value="Perempuan">Perempuan</td>
            </tr>
            <tr>
                <td>Agama*</td>
                <td><select name="agama" id="">
                    <option class="hidden"  value="" selected disabled>Choose...</option>
                    <option value="Islam">Islam</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Lainnya">Lainnya</option>
                </select></td>
            </tr>
            <tr>
                <td>Alamat*</td>
                <td><input type="text" name="alamat" placeholder=" "></td>
            </tr>
            <tr>
                <td>Kode Pos*</td>
                <td><input type="text" name="kodePos" placeholder=" "></td>
            </tr>
            <tr>
                <td>Nomor Telepon*</td>
                <td><input type="text" name="nomorTel" placeholder=" "></td>
            </tr>
            <tr>
                <td>Email*</td>
                <td><input type="text" name="email" placeholder=" "></td>
            </tr>
        </table>
        <h2>DATA SEKOLAH ASAL CALON MAHASISWA</h2>
        <table rules="rows">
            <tr>
                <td>Asal Sekolah*</td>
                <td><input type="text" name="asalSklh" placeholder=" "></td>
            </tr>
            <tr>
                <td>Tahun Lulus*</td>
                <td><input type="text" name="tahunLulus" placeholder=" "></td>
            </tr>
        </table>
        <h2>DATA ORANG TUA CALON MAHASISWA</h2>
        <table rules="rows">
            <tr>
                <td>Nama Ayah*</td>
                <td><input type="text" name="ayah" placeholder=" "></td>
            </tr>
            <tr>
                <td>Nama Ibu*</td>
                <td><input type="text" name="ibu" placeholder=" "></td>
            </tr>
            <tr>
                <td>Alamat*</td>
                <td><input type="text" name="alamat2" placeholder=" "></td>
            </tr>
            <tr>
                <td>No Handphone*</td>
                <td><input type="text" name="nomorTel1" placeholder=" "></td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir Ayah*</td>
                <td><select name="penteray" id="">
                    <option class="hidden"  value="" selected disabled>Choose...</option>
                    <option value="Tidak Tamat SD">Tidak Tamat SD</option>
                    <option value="Tamat SD">Tamat SD</option>
                    <option value="Tamat SMP">Tamat SMP</option>
                    <option value="Tamat SMA">Tamat SMA</option>
                    <option value="Diploma (D1 - D2)">Diploma (D1 - D2)</option>
                    <option value="Sarjana (D3)">Sarjana (D3)</option>
                    <option value="Sarjana (D4 - S1)">Sarjana (D4 - S1)</option>
                    <option value="Pascasarjana (S2)">Pascasarjana (S2)</option>
                    <option value="Doktor (S3)">Doktor (S3)</option>
                </select></td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir Ibu*</td>
                <td><select name="penterib" id="">
                    <option class="hidden"  value="" selected disabled>Choose...</option>
                    <option value="Tidak Tamat SD">Tidak Tamat SD</option>
                    <option value="Tamat SD">Tamat SD</option>
                    <option value="Tamat SMP">Tamat SMP</option>
                    <option value="Tamat SMA">Tamat SMA</option>
                    <option value="Diploma (D1 - D2)">Diploma (D1 - D2)</option>
                    <option value="Sarjana (D3)">Sarjana (D3)</option>
                    <option value="Sarjana (D4 - S1)">Sarjana (D4 - S1)</option>
                    <option value="Pascasarjana (S2)">Pascasarjana (S2)</option>
                    <option value="Doktor (S3)">Doktor (S3)</option>
                </select></td>
            </tr>
            <tr>
                <td>Status Ayah*</td>
                <td><select name="statusAyah" id="">
                    <option class="hidden"  value="" selected disabled>Choose...</option>
                    <option value="Masih Hidup">Masih Hidup</option>
                    <option value="Meninggal">Meninggal</option>
                </select></td>
            </tr>
            <tr>
                <td>Status Ibu*</td>
                <td><select name="statusIbu" id="">
                    <option class="hidden"  value="" selected disabled>Choose...</option>
                    <option value="Masih Hidup">Masih Hidup</option>
                    <option value="Meninggal">Meninggal</option>
                </select></td>
            </tr>
            <tr>
                <td>Pekerjaan Ayah*</td>
                <td><input type="text" name="kerjaAyah" placeholder=" "></td>
            </tr>
            <tr>
                <td>Pekerjaan Ibu*</td>
                <td><input type="text" name="kerjaIbu" placeholder=" "></td>
            </tr>
        </table>
        <h2>PEMINATAN PROGRAM STUDI</h2>
        <table rules="rows">
            <tr>
                <td>Pilihan Pertama</td>
                <td><select name="pilPertama" id="">
                    <option class="hidden"  value="" selected disabled>Choose...</option>
                    <option value="Akuntansi">Akuntansi</option>
                    <option value="Manajemen">Manajemen</option>
                    <option value="Psikologi">Psikologi</option>
                    <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                    <option value="Desain Produk Industri">Desain Produk Industri</option>
                    <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknik Sipil">Teknik Sipil</option>
                    <option value="Arsitektur">Arsitektur</option>
                </select></td>
            </tr>
            <tr>
                <td>Pilihan Kedua</td>
                <td><select name="pilKedua" id="">
                    <option class="hidden"  value="" selected disabled>Choose...</option>
                    <option value="Akuntansi">Akuntansi</option>
                    <option value="Manajemen">Manajemen</option>
                    <option value="Psikologi">Psikologi</option>
                    <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                    <option value="Desain Produk Industri">Desain Produk Industri</option>
                    <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknik Sipil">Teknik Sipil</option>
                    <option value="Arsitektur">Arsitektur</option>
                </select></td>
            </tr>
            <tr>
                <td>Sumber Informasi</td>
                <td><input type="radio" name="sumberInf" value="Internet">Internet
                <br>
                <input type="radio" name="sumberInf" value="Majalah">Majalah
                <br>   
                <input type="radio" name="sumberInf" value="Brosur">Brosur
                <br>
                <input type="radio" name="sumberInf" value="Radio">Radio
                <br>
                <input type="radio" name="sumberInf" value="Spanduk">Spanduk
                <br>
                <input type="radio" name="sumberInf" value="Orang Tua">Orang Tua
                <br>
                <input type="radio" name="sumberInf" value="Teman">Teman
                <br>
                <input type="radio" name="sumberInf" value="Pameran">Pameran
                <br>
                <input type="radio" name="sumberInf" value="Pihak Sekolah">Pihak Sekolah
                <br>
                <input type="radio" name="sumberInf" value="Lainnya....">Lainnya....</td>
            </tr>
        </table>
        <h2>UJIAN SARINGAN MASUK</h2>
        <table rules="rows">
        <td>Pilihan Gelombang</td>
            <tr>
                <br>
                <td><input type="radio" name="pilGelombang" value="Gelombang 1">Gelombang 1
                <br>
                <input type="radio" name="pilGelombang" value="Gelombang 2">Gelombang 2
                <br>
                <input type="radio" name="pilGelombang" value="Gelombang 3">Gelombang 3
                <br>
                <input type="radio" name="pilGelombang" value="Gelombang 4">Gelombang 4</td>
            </tr>
            <tr>
                <td><button type="submit" name="submit" value="submit">Submit</td>
            </tr>
        </table>
    </form>
    
</body>
</html>