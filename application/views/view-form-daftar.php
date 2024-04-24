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
                        <input type="number" name="nim" id="nim" placeholder="Required">
                        <div class="col-sm-6 col-danger"><?= form_error('nim');?></div>
                    </td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="name" id="name" placeholder="Required">
                        <div class="col-sm-6 col-danger"><?= form_error('name');?></div>
                    </td>
                </tr>

                <tr>
                    <th>Tanggal Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="date" name="tanggal" id="tanggal" placeholder="Required">
                        <div class="col-sm-6 col-danger"><?= form_error('tanggal');?></div>
                    </td>
                </tr>

                <tr>
                    <th>Tempat Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="lahir" id="lahir" placeholder="Required">
                        <div class="col-sm-6 col-danger"><?= form_error('lahir');?></div>
                    </td>
                </tr>

                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="alamat" id="alamat" placeholder="Required">
                        <div class="col-sm-6 col-danger"><?= form_error('alamat');?></div>
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