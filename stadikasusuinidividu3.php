<!doctype html>
<html lang="en">
<head>
    <title>Kalkulator Sederhana</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.3.2 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous"
    />
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="text-center">Kalkulator Sederhana</h4>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="a" class="form-label">Angka Pertama</label>
                        <input type="number" class="form-control" name="a" required>
                    </div>
                    <div class="mb-3">
                        <label for="b" class="form-label">Angka Kedua</label>
                        <input type="number" class="form-control" name="b" required>
                    </div>
                    <div class="mb-3">
                        <label for="c" class="form-label">Operasi</label>
                        <select name="ce" class="form-select" id="c" required>
                            <option value="tambah">Tambah</option>
                            <option value="kurang">Kurang</option>
                            <option value="kali">Kali</option>
                            <option value="bagi">Bagi</option>
                        </select>
                    </div>
                    <div class="text-center">
                        <input type="submit" class="btn w-25 btn-primary" value="Hitung">
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $a = $_POST['a'];
                    $b = $_POST['b'];
                    $c = $_POST['ce'];

                    echo '<div class="alert alert-success text-center mt-3">';
                    if ($c == "tambah") {
                        echo "Hasil: " . ($a + $b);
                    } elseif ($c == "kurang") {
                        echo "Hasil: " . ($a - $b);
                    } elseif ($c == "kali") {
                        echo "Hasil: " . ($a * $b);
                    } elseif ($c == "bagi") {
                        echo "Hasil: " . ($a / $b);
                    }
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"
    ></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"
    ></script>
</body>
</html>
