<html>

<head>
    <title>Form Output Matakuliah</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Form Output Data Siswa
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama Siswa</th>
                <td>:</td>
                <td><?= $nama; ?></td>
            </tr>
            <tr>
                <th>NIS</th>
                <td>:</td>
                <td><?= $nis; ?></td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td>:</td>
                <td><?= $kelas; ?></td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>:</td>
                <td><?= $tgl; ?></td>
            </tr>
            <tr>
                <th>Tempat Lahir</th>
                <th>:</th>
                <td>
                    <?= $tl; ?>
                </td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>:</td>
                <td>
                    <?= $alamat; ?>
                </td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>:</td>
                <td>
                    <?= $jk; ?>
                </td>
            </tr>
            <tr>
                <th>Agama</th>
                <td>:</td>
                <td>
                    <?= $agama; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('datasiswa');
                                ?>">Kembali</a>
                </td>
            </tr>
        </table>
        </form>
    </center>
</body>

</html