<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    
        <form method="POST" action="index.php" class="form">
            <h1>Kalkulator</h1>
            <input type="text" name="input1" placeholder="Masukkan angka ke-1" id="input">
            <input type="text" name="input2" placeholder="Masukkan angka ke-2" id="input">
                <select name="operator" id="select">
                        <option>--Pilih Operator--</option>
                    <option value="tambah">+</option>
                    <option value="kurang">-</option>
                    <option value="kali">x</option>
                    <option value="bagi">/</option>
                </select>

            <input type="submit" name="proses" value="Hitung" id="input">
        
            <div class="hasil">
                <?php include"proses.php"; ?>
            </div>
        </form>

</body>
</html>