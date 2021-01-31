<?php include "connection.php" ?>
        <article id="tabelcontent">
            <h2>Hitung Hasil</h2>
            <form method="POST" action="./hasil_s.php">
                <button type="submit" class="btn save">Hitung S</button>
            </form>
                <h3>Tabel Nilai (S)</h3>
            <table>
                <tr>
                    <th>S1</th>
                    <th>S2</th>
                    <th>S3</th>
                    <th>S4</th>
                    <th>S5</th>
                </tr>
                <tr>
                <?php $S = mysqli_query($conn, "SELECT * FROM tabel_s");
                while($resS = mysqli_fetch_assoc($S)) :
                ?>
                    <td><?= $resS["s"] ?></td>
                <?php endwhile; ?>
                </tr>
            </table>
            <br>
            <form method="POST" action="./hasil_v.php">
                <button type="submit" class="btn save">Hitung V</button>
            </form>
            <h3>Tabel Nilai (V)</h3>
            
            <table>
                <tr>
                    <th>V1</th>
                    <th>V2</th>
                    <th>V3</th>
                    <th>V4</th>
                    <th>V5</th>
                </tr>
                <tr>
                <?php $V = mysqli_query($conn, "SELECT * FROM tabel_v");
                while($resV = mysqli_fetch_assoc($V)) :
                ?>
                    <td><?= $resV["v"] ?></td>
                <?php endwhile; ?>
                </tr>
            </table>
        </article>