<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 1 Pemrograman Berbasis Web Lanjutan</title>
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <aside>
        <header>
            <div class="brand">P1</div>
            <div class="user">Sistem Akademik</div>
        </header>

        <nav>
            <ul>
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="index.php?page=mhsw">Mahasiswa</a></li>
                <li><a href="index.php?page=dosen">Dosen</a></li>
                <li><a href="index.php?page=matkul">Matakuliah</a></li>
            </ul>
        </nav>
    </aside>

    <main>
        <article>
            <?php

                // buat link dinamis | muncul di area ini
                // index.php?page=nama_file_tanpa_extensi_php

                if (isset($_GET['page'])) {
                    include $_GET['page'] . ".php";
                } else {
                    include "main.php";
                }
                ?>
        </article>

        <footer>
            Project 1 &mdash; Pemrograman Berbasis Web
        </footer>
    </main>
</body>

</html>
