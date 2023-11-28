<html>
    <head>
        <link rel="stylesheet" href="/Tasks/workstation/mystyle.css">
        <!-- CSS to be applied to the whole page (Inpage) -->
        <style>
            /* applied to every div block in the page (Inpage) */
            div {
                color: green;
                font-weight: bold;
                text-align: right;
            }
            .judulhalaman {
                text-align: center;
                font-size: large;
            }            
        </style>
    </head>
    <body>
        <div class="judulhalaman">Selamat Datang</div>
        <!-- Inline CSS, digunakan ketika ada specifik ke 1 bagian saja -->
        <p style="text-decoration: line-through; color: red;">
            Hallo apa kabar ?
        </p>
        <!-- Inpage CSS, digunakan ketika ada yang spesifik ke 1 halaman khusus -->
        <div>Hallo apa kabar ?</div>
        <!-- External CSS, digunakan untuk format umum 1 website -->
        <span>Hallo apa kabar ?</span>
        <p>Bagian terakhir</p>
    </body>
</html>