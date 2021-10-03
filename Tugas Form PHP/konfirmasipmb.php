<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:lightgreen;">>
<h2>PENDAFTARAN ONLINE</h2>
    <table>
        <tr>
            <td>Nama:</td>
            <td><?php echo $_POST['nama']; ?></td>
        </tr>
        
        <tr>
            <td>Tempat Tanggal Lahir:</td>
            <td><?php echo $_POST['tglLahir']; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin:</td>
            <td><?php echo $_POST['jk1']; ?></td>
        </tr>
        <tr>
            <td>Agama:</td>
            <td><?php echo $_POST['agama']; ?></td>
        </tr>
        <tr>
            <td>Alamat:</td>
            <td><?php echo $_POST['alamat']; ?></td>
        </tr>
        <tr>
            <td>Kode Pos:</td>
            <td><?php echo $_POST['kodePos']; ?></td>
        </tr>
        <tr>
            <td>Nomor Telepon:</td>
            <td><?php echo $_POST['nomorTel']; ?></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><?php echo $_POST['email']; ?></td>
        </tr>
        
</table>
<h2>DATA SEKOLAH ASAL CALON MAHASISWA</h2>
    <table>
        <tr>
            <td>Asal Sekolah:</td>
            <td><?php echo $_POST['asalSklh']; ?></td>
        </tr>
        <tr>
            <td>Tahun Lulus:</td>
            <td><?php echo $_POST['tahunLulus']; ?></td>
        </tr>
</table>
<h2>Data Orang Tua</h2>
<table>
        <tr>
            <td>Nama Ayah:</td>
            <td><?php echo $_POST['ayah']; ?></td>
        </tr>
        <tr>
            <td>Nama Ibu:</td>
            <td><?php echo $_POST['ibu']; ?></td>
        </tr>
        <tr>
            <td>Nomor Telepon:</td>
            <td><?php echo $_POST['nomorTel1']; ?></td>
        </tr>
        <tr>
            <td>Pendidikan Terakhir Ayah:</td>
            <td><?php echo $_POST['penteray']; ?></td>
        </tr>
        <tr>
            <td>Pendidikan Terakhir Ibu:</td>
            <td><?php echo $_POST['penterib']; ?></td>
        </tr>
        <tr>
            <td>Nomor Status Ayah:</td>
            <td><?php echo $_POST['statusAyah']; ?></td>
        </tr>
        <tr>
            <td>Nomor Status Ibu:</td>
            <td><?php echo $_POST['statusIbu']; ?></td>
        </tr>
        <tr>
            <td>Nomor Pekerjaan Ayah:</td>
            <td><?php echo $_POST['kerjaAyah']; ?></td>
        </tr>
        <tr>
            <td>Nomor Pekerjaan Ibu:</td>
            <td><?php echo $_POST['kerjaIbu']; ?></td>
        </tr>
        </table>
<h2>Peminatan Program Studi</h2>
    <table>
        <tr>
            <td>Pilihan Pertama:</td>
            <td><?php echo $_POST['pilPertama']; ?></td>
        </tr>
        <tr>
            <td>Pilihan Kedua:</td>
            <td><?php echo $_POST['pilKedua']; ?></td>
        </tr>
        <tr>
            <td>Sumber Informasi:</td>
            <td><?php echo $_POST['sumberInf']; ?></td>
        </tr>
</table>

<h2>Ujian Saringan Masuk</h2>
    <table>
        <tr>
            <td>Pilihan Gelombang:</td>
            <td><?php echo $_POST['pilGelombang']; ?></td>
        </tr>
</table>
</body>
</html>