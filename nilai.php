        <article id="tabelcontent">
            <h2>Nilai</h2>
                    <?php
                    $QACount = mysqli_query($conn, "SELECT COUNT(*) AS count FROM alternatif");
                    $resQACount = mysqli_fetch_assoc($QACount);
                    $QKCount = mysqli_query($conn, "SELECT COUNT(*) AS count FROM kriteria");
                    $resQKCount = mysqli_fetch_assoc($QKCount);
                    // $resQA = mysqli_fetch_assoc($QAlternatif);
                    
                    ?>
            <form method="POST" action="./aksi_nilai.php">
                <table id="tblInput">
                    <tr>
                        <td><label for="vluAlternatif">Alternatif</label></td>
                        <td>
                            <select id="vluAlternatif" name="vluAlternatif" >
                                <option disabled selected>Pilih Alternatif</option>
                                <?php
                                    while($resQA = mysqli_fetch_assoc($QAlternatif)) :
                                ?>
                                <option value="<?= $resQA["nama"] ?>"><?= $resQA["nama"] ?></option>
                                <?php endwhile ?>
                            </select>
                        </td>
                    </tr>
                    <!-- <?php 
                    for($i=1;$i<=$resQKCount["count"];$i++) : ?>
                    <tr>
                        <td><label for="alt<?=$i?>"><?=$resQA["nama"]?></label></td>
                        <td><input type="text" id="alt<?=$i?>" name="alt<?=$i?>"></td>
                    </tr>
                    <?php endfor ?> -->
                    <tr>
                        <td><label for="k1">Harga</label></td>
                        <td><input type="text" id="k1" name="k1"></td>
                    </tr>
                    <tr>
                        <td><label for="k2">Kecepatan Processor (GHz)</label></td>
                        <td><input type="text" id="k2" name="k2"></td>
                    </tr>
                    <tr>
                        <td><label for="k3">Processor Cache (MB)</label></td>
                        <td><input type="text" id="k3" name="k3"></td>
                    </tr>
                    <tr>
                        <td><label for="k4">RAM (GB)</label></td>
                        <td><input type="text" id="k4" name="k4"></td>
                    </tr>
                    <tr>
                        <td><label for="k5">Kecepatan RAM (MHz)</label></td>
                        <td><input type="text" id="k5" name="k5"></td>
                    </tr>
                    <tr>
                        <td><label for="k6">Storage (GB)</label></td>
                        <td><input type="text" id="k6" name="k6"></td>
                    </tr>
                    <tr>
                        <td><label for="k7">Daya Tahan Baterai (Hrs)</label></td>
                        <td><input type="text" id="k7" name="k7"></td>
                    </tr>
                    <tr>
                        <td><label for="k8">Ukuran Layar (Inch)</label></td>
                        <td><input type="text" id="k8" name="k8"></td>
                    </tr>
                    <tr>
                        <td><label for="k9">VRAM (GB)</label></td>
                        <td><input type="text" id="k9" name="k9"></td>
                    </tr>
                    <tr>
                        <td><label for="k10">Berat (Kg)</label></td>
                        <td><input type="text" id="k10" name="k10"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button type="submit" class="btn save">Simpan</button></td>
                    </tr>
                </table>
            </form>
            <div id="tableoverflow">
            <table>
                <tr>
                    <th>Alternatif</th>
                    <th>Harga</th>
                    <th>Kecepatan Processor (GHz)</th>
                    <th>Processor Cache (MB)</th>
                    <th>RAM (GB)</th>
                    <th>Kecepatan RAM (MHz)</th>
                    <th>Storage (GB)</th>
                    <th>Daya Tahan Baterai (Hrs)</th>
                    <th>Ukuran Layar (Inch)</th>
                    <th>VRAM (GB)</th>
                    <th>Berat (Kg)</th>
                </tr>
                <?php while($result = mysqli_fetch_assoc($QNilai)) : ?>
                <tr>
                    <td><?= $result["alternatif"] ?></td>
                    <td><?= $result["k1"] ?></td>
                    <td><?= $result["k2"] ?></td>
                    <td><?= $result["k3"] ?></td>
                    <td><?= $result["k4"] ?></td>
                    <td><?= $result["k5"] ?></td>
                    <td><?= $result["k6"] ?></td>
                    <td><?= $result["k7"] ?></td>
                    <td><?= $result["k8"] ?></td>
                    <td><?= $result["k9"] ?></td>
                    <td><?= $result["k10"] ?></td>
                </tr>
                <?php endwhile ?>
            </table>
            </div>
        </article>