<html>

<head>

    <title> Toko Sepatu</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Toko Sepatu
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <?= $nm; ?>
                </td>
            </tr>
            <tr>
                <td>No Hp</td>
                <td>:</td>
                <td>
                    <?= $no; ?>
                </td>
            </tr>

            <tr>
                <td>Merk</td>
                <td>:</td>
                <td>
                    <?= $merk; ?>
                </td>
            </tr>

            <tr>
                <td>Harga</td>
                <td>:</td>
                <td>
                    <?= $harga; ?>
                </td>
            </tr>

            <tr>
                <td>Ukuran Sepatu</td>
                <td>:</td>
                <td>
                    <?= $uk; ?>
                </td>
            </tr>

            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('Sepatu');
                    ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>