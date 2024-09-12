<!DOCTYPE html>
<html>
<head>
    <title>Cek Bilangan Prima</title>
</head>
<body>
    <h2>Cek Apakah Bilangan Prima</h2>
    <form method="post">
        Masukkan Bilangan: <input type="number" name="number" required>
        <input type="submit" value="Cek">
    </form>

    <?php
    function is_prime($number) {
        if ($number <= 1) {
            return false;
        }
        if ($number == 2) {
            return true;
        }
        if ($number % 2 == 0) {
            return false;
        }
        for ($i = 3; $i <= sqrt($number); $i += 2) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];
        if (is_prime($number)) {
            echo "<p>$number adalah bilangan prima.</p>";
        } else {
            echo "<p>$number bukan bilangan prima.</p>";
        }
    }
    ?>
</body>
</html>