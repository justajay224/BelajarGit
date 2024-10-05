<!DOCTYPE html>
<html>
<head>
    <title>Form Registrasi</title>
</head>
<body>
    <form action="" method="post">
        <table border>
            <tr>
                <td colspan="2" style="text-align: center;"><h3>Form Registrasi</h3></td>
            </tr>
            <tr>
                <td>User ID</td>
                <td><input type="text" name="user_id" required></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td>Re-pass</td>
                <td><input type="password" name="re_password" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" rows="4" required></textarea></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="L" required> L
                    <input type="radio" name="jenis_kelamin" value="P" required> P
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>
                    <select name="agama" required>
                        <option value="">Pilih Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>
                    <input type="checkbox" name="hobi[]" value="Makan"> Makan
                    <input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga
                    <input type="checkbox" name="hobi[]" value="Lain-lain"> Lain-lain
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" value="Daftar">
                    <input type="reset" value="Ulangi">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
