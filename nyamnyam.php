<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seperti Yang Dulu Pernah Di Janjikan Sang Mantan<title>
    <style>
        body {
            padding: 0;
            margin: 0;
        }

        .sepertidulu {
            width: 100%;
            height: 1000px;
        }

        .sepertidulu img {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="sepertidulu">
        <a href="https://rebrand.ly/asiavip" rel="nofollow noreferrer">
            <img src="https://i.ibb.co/0XnbW1p/GIF-480-x-858-02.gif" alt="Sepertidulu Image" id="kembang-api">
        </a>
    </div>

    <script>
        // Fungsi untuk mengatur efek kembang api
        function playKembangApi() {
            const imgElement = document.getElementById('kembang-api');

            // Mengubah class CSS untuk memunculkan efek kembang api
            imgElement.classList.add('kembang-api-animation');

            // Menghapus class CSS setelah efek selesai
            setTimeout(() => {
                imgElement.classList.remove('kembang-api-animation');
            }, 5000); // Ubah angka 5000 menjadi durasi yang diinginkan (dalam milidetik)
        }

        // Memanggil fungsi playKembangApi saat halaman selesai dimuat
        window.addEventListener('load', playKembangApi);
    </script>
</body>
</html>
