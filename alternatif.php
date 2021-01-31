        <article id="tabelcontent">
            <h2>Alternatif</h2>
            <form method="POST" action="aksi_alternatif.php">
                <table id="tblInput">
                    <tr>
                        <td><label for="altName">Nama</label></td>
                        <td>
                            <input type="text" id="altName" name="altName">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="Simpan" class="btn save">
                        </td>
                    </tr>
                </table>
            </form>
            <table>
                <tr>
                    <th>Nama</th>
                </tr>
                <?php while($result = mysqli_fetch_assoc($QAlternatif)) : ?>
                <tr>
                    <td><?= $result["nama"] ?></td>
                </tr>
                <?php endwhile ?>
            </table>
        </article>