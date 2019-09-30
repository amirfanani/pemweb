<!DOCTYPE html>
<html lang="en">
<head>
    <title>Jajal cuy</title>
    <link rel="stylesheet" href="Biodata.css">
</head>
<body>
    <?php
        <form method="get" style="width: 980px" class="posisi">
            <fieldset class="h">
            <table style="width: 960px">
            <tr>
            <td>Nama lengkap </td>
            <td>
                echo ".$_GET['name'].";
            </td>
            </tr>
            <tr> 
            <td>Nama panggilan </td>
            <td>
                echo ".$_GET['name2'].";
            </td>
            </tr>
            <tr>
            <td>Tempat, tanggal lahir</td>
            <td>
                echo ".$_GET['ttl'].";
            </td>
            </tr>
            <tr>
            <td>Jenis kelamin</td>
            <td>
                echo ".$_GET['kelamin'].";
            </td>
            </tr>
            <tr>
            <td>Agama</td>
            <td>
                echo ".$_GET['agama'].";
            </td>
            </tr>
            <tr>
            <td>Alamat</td>
            <td>
                echo ".$_GET['alamat'].";
            </td>
            </tr>
            <tr>
            <td>Pekerjaan</td>
            <td>
                echo ".$_GET['pekerjaan'].";
            </td>
            </tr>
            <tr>
            <td>Status</td>
            <td>
                echo ".$_GET['status'].";
            </td>
            </tr>
            </table>
            </fieldset>
            </form>
        ?>
</body>
</html>