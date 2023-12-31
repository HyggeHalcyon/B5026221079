<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap Layout Excersice</title>

        <!-- bootstrap boilerplate -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

        <!-- import font nunito -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;700&display=swap" rel="stylesheet">
      </head>

    <body style="background-color: #F5F5F5;">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col">
                    <img src="/Tasks/Task3-BootstrapLayout/Background-image.png" class="w-100 h-100">
                </div>

                <div class="col-7">
                    <div class="container-fluid">
                        <div>
                            <div class="d-flex flex-row-reverse mt-5 mb-3">
                                <div>
                                    <img src="/Tasks/Task3-BootstrapLayout/Dark.png" class="w-75">
                                </div>
                             </div>
                             <div class="row pl-5">
                                <h1 style="font-family: 'Nunito', sans-serif;" class="display-4 text-dark font-weight-bold">Company Name</h1>
                             </div>
                             <div class="row pt-4 pr-5 pl-5">
                                <h2 style="font-family: 'Nunito', sans-serif; font-size: 38px;" class="font-weight-normal">Intriguing summary goes here. Keep it short & sweet. Describe the problem you are solving. Focus on the pain point</h2>
                             </div>
                        </div>
    
                         <div class="flex-column p-5 mt-5">
                            <div class="row mb-4 mt-5">
                                <div>
                                    <img src="/Tasks/Task3-BootstrapLayout/Website-link.png" class="w-75"> 
                                </div>
                                <h2 style="font-family: 'Nunito', sans-serif;" class="font-weight-normal">www.website.com</h2>
                            </div>
                             <div class="row mb-4">
                                <div>
                                    <img src="/Tasks/Task3-BootstrapLayout/Twitter.png" class="w-75"> 
                                </div>
                                <h2 style="font-family: 'Nunito', sans-serif;" class="font-weight-normal">@companyhandle</h2>
                             </div>
                             <div class="row mb-4">
                                <div>
                                    <img src="/Tasks/Task3-BootstrapLayout/Facebook.png" class="w-75"> 
                                </div>
                                <h2 style="font-family: 'Nunito', sans-serif;" class="font-weight-normal">@companyhandle</h2>
                             </div>
                         </div>
                    </div>
                </div>

            </div>
        </div>

    </body>
</html>