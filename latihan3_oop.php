<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan Penggajihan</title>
</head>
<body>
    <center>
    <h2>PENGGAJIHAN<br> GURU / KARYAWAN YAYASAN ASSALAAM</h2>
    </center>
    <table align=center>
        <form action="hasil_latihan3_oop.php" method="POST">

            <tr>
                <td>No</td>
                <td></td>
                <td><input type="number" name="no"></td>
            </tr>

            <tr>
                <td>Nama</td>
                <td></td>
                <td><input type="text" name="nama"></td>
            </tr>

            <tr>
                <td>Unit</td>
                <td></td>
                <td>
                    <select name = "unit">
                        <option value = "TK">TK</option>
                        <option value = "SD">SD</option>
                        <option value = "SMP">SMP</option>
                        <option value = "MTS">MTS</option>
                        <option value = "SMA">SMA</option>
                        <option value = "SMK">SMK</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Tanggal</td>
                <td></td>
                <td><input type="date" name="tanggal"></td>
            </tr>

            <tr>
                <td colspan=3 align=center><h3>Gaji</h3></td>
            </tr>

            <tr>
                <td>Jabatan</td>
                <td></td>
                <td>
                    <select name = "jabatan">
                        <option value = "Kepsek">Kepala Sekolah</option>
                        <option value = "Guru">Guru</option>
                        <option value = "Karyawan">Karyawan</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Lama Kerja</td>
                <td></td>
                <td><input type="number" name="lama"></td>
            </tr>

            <tr>
                <td>Status Kerja</td>
                <td></td>
                <td>
                    <select name = "status">
                        <option value = "Tetap">Pegawai Tetap</option>
                        <option value = "Kontrak">Pegawai Kontrak</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td colspan=3 align=center><h3>Potongan</h3></td>
            </tr>

            <tr>
                <td>BPJS</td>
                <td></td>
                <td><input type="number" name="bpjs"></td>
            </tr>

            <tr>
                <td>Pinjaman</td>
                <td></td>
                <td><input type="number" name="pinjaman"></td>
            </tr>

            <tr>
                <td>Tabungan</td>
                <td></td>
                <td><input type="number" name="tabungan"></td>
            </tr>

            <tr>
                <td>Lainnya</td>
                <td></td>
                <td><input type="number" name="lainnya"></td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="proses" value="Proses"></td>
            </tr>

        </form>
    </table>
</body>
</html>