<!DOCTYPE html>
<hmtl>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            const changeText = () => {
                var span = document.getElementById("output")
                var textbox = document.getElementById("textbox")
                textbox.style.color = "red"
                textbox.style.fontSize = "17pt"
                textbox.style.fontFamily = "Comic Sans MS"
                span.className = "text-success" 

                span.innerHTML = textbox.value
                hadiah()
            }
        </script>
    </head>

    <body>
        <div class="container-fluid">
            <script>
                const hadiah = () => {
                    var text = document.getElementById("textbox").value
                    alert(`Selamat, Anda mendapatkan 100 juta! ${text}`)
                }
            </script>
            <center> <button class="btn btn-primary" onclick=hadiah()>Klik Disini !</button> </center>

            <button class="btn btn-success" onclick=changeText()>Click me!</button>
            <span id="output">replace me</span>
            <input id="textbox" class="form-control" type="text"/>
        </div>
    </body>

</html>