<article id="tabelcontent">
    <h2>Hasil Uji WP</h2>
    <table>
        <tr>
            <th>Alternatif</th>
            <th>Nilai (S)</th>
            <th>Nilai (V)</th>
        </tr>
        <?php
        $join = mysqli_query($conn, "SELECT A.nama AS alternatif,
            B.s AS s, C.v AS v FROM alternatif A JOIN tabel_s B
            ON A.id = B.id INNER JOIN tabel_v C ON B.id=C.id ");
        while($resJoin = mysqli_fetch_assoc($join)) : ?>
        <tr>
            <td><?= $resJoin["alternatif"] ?></td>
            <td><?= $resJoin["s"] ?></td>
            <td><?= $resJoin["v"] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</article>