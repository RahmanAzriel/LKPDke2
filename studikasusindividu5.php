<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Jumlah Karakter</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-4">Cek Jumlah Karakter</h4>
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="text" class="form-label">Masukkan Teks:</label>
                                <input type="text" class="form-control" name="text" id="text" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100" onclick="playAudio()">Cek</button>
                        </form>
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $text = $_POST["text"];

                            $textgapakespasi = str_replace(' ', '', $text);
                            $textbaru = strlen($textgapakespasi);
                            echo '<div class="alert alert-info mt-4">Jumlah karakter: ' . $textbaru . '</div>';
                            echo '<img src="https://th.bing.com/th/id/OIP.VgKilykrUaK6cRWEVqlDowAAAA?rs=1&pid=ImgDetMain" width="200px" style="margin: 0 auto; display: block;" alt="alt="">';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Audio Player -->
    <audio id="myAudio" src="https://www.myinstants.com/media/sounds/gegagedigedagedago-full.mp3">
    </audio>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
        function playAudio() {
            var audio = document.getElementById("myAudio");
            audio.play();
        }
    </script>
</body>
</html>
