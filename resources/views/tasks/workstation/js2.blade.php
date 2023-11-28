<!DOCTYPE html>
<hmtl>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="/Tasks/workstation/myscript.js"></script>
    </head>

    <body>
        <div class="container-fluid">
            <div class="form-group">
                <label for="bil-1">Bilangan 1:</label>
                <input type="number" class="form-control" id="bil-1">
            </div>
            <div class="form-group">
                <label for="bil-2">Bilangan 2:</label>
                <input type="number" class="form-control" id="bil-2">
            </div>
            <h1>Hasil Operasi:
                <div id="hasil"></div>
            </h1>
            <input type="button" onclick=tambah() value="Penjumlahan" class="btn btn-success"/>
            <input type="button" onclick=kali() value="Perkalian" class="btn btn-warning"/>
            <input type="button" onclick=clean() value="Clear" class="btn"/>
        </div>
    </body>

</html>