<!DOCTYPE html>
<html>
<style>
    h1 {
        font-family: 'Times New Roman', Times, serif;
        text-align: center;
        font-size: 75px;
        background-color: burlywood;
    }

    table {
        font-family: Arial, Helvetica, sans-serif;
        width: 1000px;
        border-collapse: collapse;
        margin-left: 250px;
        background: cornsilk;
        margin-top: 100px;
    }

    th {
        background: darksalmon;
    }

    td, th {
        border: 2px solid;
        font-size: 20px;
        padding: 5px;
    }
</style>
<body style="background-color: wheat;">

    <h1>Warung Pak Joy</h1>

    <?php
    $kg = [7, 13, 21, 6, 27];
    $gr  = array();
    $mg = array();
    for ($i = 0; $i <= 4; $i++)
    {
        $gr[$i] = $kg[$i] * 1000;
        $mg[$i] = $gr[$i] * 1000;
    }

    $list = [
        [1, "Pisang", "$kg[0]", "$gr[0]", "$mg[0]"],
        [2, "Apel", "$kg[1]", "$gr[1]", "$mg[1]"],
        [3, "Tepung", "$kg[2]", "$gr[2]", "$mg[2]"],
        [4, "Keju", "$kg[3]", "$gr[3]", "$mg[3]"],
        [5, "Mi Instan", "$kg[4]", "$gr[4]", "$mg[4]"]
    ];
    ?>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Barang</th>
                <th>(kg)</th>
                <th>(gr)</th>
                <th>(mg)</th>
            </tr>
        </thead>

        <tbody>
            <?php for ($i = 0; $i <= 4; $i++){ ?>
                <tr>
                <?php for ($k = 0; $k <= 4; $k++){ ?>
                    <td><?php echo $list[$i][$k]; ?></td>
                <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>