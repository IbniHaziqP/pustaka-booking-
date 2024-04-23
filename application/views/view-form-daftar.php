<html>

<head>
    <title>Form Daftar Riwayat Hidup</title>
</head>

<body>
    <center>
        <form action="<?= base_url('daftar/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Daftar Riwayat Hidup
                    </th>
                </tr>

                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>NIM</th>
                    <th>:</th>
                    <td>
                        <input type="number" name="kode" id="kode" placeholder="Required">
                        <div class="col-sm-6 col-danger"><?= form_error('kode');?></div>
                    </td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama" placeholder="Required">
                        <div class="col-sm-6 col-danger"><?= form_error('kode');?></div>
                    </td>
                </tr>

                <tr>
                    <th>Tanggal Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="date" name="tanggal" id="tanggal">
                    </td>
                </tr>

                <tr>
                    <th>Tempat Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="lahir" id="lahir" placeholder="Required">
                        <div class="col-sm-6 col-danger"><?= form_error('kode');?></div>
                    </td>
                </tr>

                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="alamat" id="alamat" placeholder="Required">
                        <div class="col-sm-6 col-danger"><?= form_error('kode');?></div>
                    </td>
                </tr>


                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html