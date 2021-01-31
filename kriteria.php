        <article id="tabelcontent">
            <h2>Kriteria</h2>
            <form method="POST" action="./aksi_kriteria.php">
                <table id="tblInput">
                    <tr>
                        <td><label for="krtName">Nama</label></td>
                        <td colspan="2"><input type="text" id="krtName" name="krtName"></td>
                    </tr>
                    <tr>
                        <td><label for="krtBobot">Bobot</label></td>
                        <td><input type="text" id="krtBobot" name="krtBobot"></td>
                        <td><span>(1-100)</span></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2">
                            <fieldset>
                                <legend>KEUNTUNGAN</legend>
                                <input type="radio" name="krtBenefit" value="1" id="benefitPlus"> Semakin tinggi semakin baik<br>
                                <input type="radio" name="krtBenefit" value="0" id="benefitMinus"> Semakin rendah semakin baik<br>
                            </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2"><input type="submit" value="Simpan" class="btn save"></td>
                    </tr>
                </table>
            </form>
            <table>
                <tr>
                    <th>Nama</th>
                    <th>Bobot</th>
                    <th>Keuntungan</th>
                </tr>
                <?php while($result = mysqli_fetch_assoc($QKriteria)) : ?>
                <tr>
                    <td><?= $result["nama"] ?></td>
                    <td style="text-align:right"><?= $result["bobot"] ?></td>
                    <td><?= $result["keuntungan"] ?></td>
                <?php endwhile ?>
                </tr>
            </table>
            <br>
                <?php
                $QSUM = mysqli_query($conn, "SELECT SUM(bobot) as SUMB FROM kriteria");
                $res1 = mysqli_fetch_assoc($QSUM);
                $a = $res1["SUMB"];
                $QW = mysqli_query($conn, "SELECT * FROM kriteria");
                while($res2 = mysqli_fetch_assoc($QW)) :
                if($res2["keuntungan"]==0) :
                    $res2["bobot"]=-$res2["bobot"];
                else :
                    $res2["bobot"]=$res2["bobot"];
                endif;
                    $W = $res2["bobot"]/$a;
                    $x = $res2["id"];
                    mysqli_query($conn, "UPDATE kriteria SET w=$W WHERE id=$x");
                endwhile
                ?>
            <table>
                <tr>
                    <th>Nama</th>
                    <th>W</th>
                </tr>
                <?php
                $QW = mysqli_query($conn, "SELECT * FROM kriteria");
                while($result = mysqli_fetch_assoc($QW)) : ?>
                <tr>
                    <td><?= $result["nama"] ?></td>
                    <td><?= $result["w"] ?></td>
                <?php endwhile ?>
                </tr>
            </table>
        </article>