<!DOCTYPE html>
<html>
<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
function content($id)
{
    $id_menu = base64_decode($id);
    if ($id_menu == 1) {
        $file = "latihan1.php";
    } elseif ($id_menu == 2) {
        $file = "latihan5.php";
    } elseif ($id_menu == 3) {
        $file = "latihan9.php";
    } elseif ($id_menu == 4) {
        $file = "latihan13.php";
    } elseif ($id_menu == "") {
        $file = "welcome.php";
    }
    return $file;
}
?>
<body>
    <table width="100%" height="100%" border="1">
        <tr height="5%">
            <td align="center">
                <a href="index.php?id=<?php echo base64_encode(1); ?>">Mahasiswa</a>
                <a href="index.php?id=<?php echo base64_encode(2); ?>">Dosen</a>
                <a href="index.php?id=<?php echo base64_encode(3); ?>">Matakuliah</a>
                <a href="index.php?id=<?php echo base64_encode(4); ?>">Nilai</a>
            </td>
        </tr>
        <tr height="95%">
            <td valign="top" align="center">
                <?php
                $file = content($_GET['id']);
                include "$file";
                ?>
                <br><br>
            </td>
        </tr>
    </table>
</body>

</html>
