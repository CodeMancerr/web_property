
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Admin</title>
</head>

<body>
    <?php
    include 'config.php';
    $db = new Database();
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $admins = $db->edit_data_admin($id); // Assuming you have a method to get admin data by ID
    } else {
        echo "Invalid request";
        header('Location: profile.php');
    }
    ?>
    <h3>Edit Data Admin</h3>
    <form action="simpan_edit_data_admin.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $admins['id']; ?>" />
        <table>
           
            <tr>
                <td>Foto</td>
                <td>
                    <?php
                    if (empty($admins['foto'])) {
                    ?>
                        <font color="red">Belum ada foto</font><br>
                        <input type="file" name="foto_admin">
                    <?php } else { ?>
                        <img src="<?php echo $admin_data['foto']; ?>" alt="" width="50" height="50"><br>
                        <input type="file" name="foto_admin">
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>

</html>
