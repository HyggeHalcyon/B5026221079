<hmtl>

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
      <script>
        const validateForm = () => {
            var nrp = document.getElementById("nrp")
            var msg = document.getElementById("msg")

            // check only invalid values
            if(nrp.value == ""){
                nrp.focus()
                nrp.placeholder = "contoh: 5026100126"
                alert("NRP harus diisi")
                return false
            }

            // must be 10 digit number
            // other than 10 is invalid
            if(nrp.value.length != 10){
                nrp.focus()
                alert("NRP harus 10 digit, Anda memasukkan " + nrp.value.length + " digit")
                return false
            }

            // [a...z] characters are invalid
            if(isNaN(nrp.value) == true){
                nrp.focus()
                msg.innerHTML = "NRP harus angka!"
                return false
            }
        }
      </script>
    </head>
  
    <body>
        <div class="container">
            <div class="jumbotron">
                Form validasi adalah mencegah pengiriman data ke server jika ada yg invalid/tidak sesuai constraint database
            </div>

            <script>
                function validate(){
                    // a function as default returns true

                    console.log("baris 22")
                    return false
                    console.log("baris 24")
                    return true
                    console.log("baris 26")
                    return false
                }
            </script>

            <form action="https://google.com" method="GET" onsubmit="return validateForm();">
                <div class="form-group">
                    <label for="nrp">NRP:</label>
                    <input type="text" class="form-control" id="nrp">
                    <div id="msg" class="text-danger"></div>
                </div>
                <input type="submit" value="DAFTAR" class="btn btn-primary">
                <input type="reset" value="ULANGI" class="btn btn-warning">
            </form>
        </div>
    </body>
  
</hmtl>