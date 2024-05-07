<html>

<head>
    <title>Toko Sepatu</title>
</head>

<body>
    <center>
        <form action="<?= base_url('Sepatu/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Toko Sepatu
                    </th>
                </tr>

                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nm" id="nm" placeholder="Required">
                        <div class="col-sm-6 col-danger"><?= form_error('nm');?></div>
                    </td>
                </tr>
                <tr>
                    <th>No Hp</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="no" id="no" placeholder="Required">
                        <div class="col-sm-6 col-danger"><?= form_error('no');?></div>
                    </td>
                </tr>

                <tr>
                    <th>Merk</th>
                    <td>:</td>
                    <td>
                        <select id="merk" name="merk">
                            <option value="">-Pilih-</option>
                            <option value="Nike">Nike</option>
                            <option value="Adidas">Adidas</option>
                            <option value="Kickers">Kickers</option>
                            <option value="Eiger">Eiger</option>
                            <option value="Bucherri">Bucherri</option>
                        </select>
                        <div class="col-sm-6 col-danger"><?= form_error('merk');?></div>
                        
                    </td>
                </tr>

                <tr>
                    <th>Ukuran Sepatu</th>
                    <td>:</td>
                    <td>
                        <select name="uk" id="uk">
                            <option value="">-Pilih-</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                        </select>
                        <div class="col-sm-6 col-danger"><?= form_error('uk');?></div>
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