<link rel="stylesheet" href="assets/css/index.css">
<body onload="myFunction()" style="background-color:teal; height: 500px">
    <div id="loader"></div>
    <main role="main" style="padding-bottom: 300px;" id="myDiv" class="animate-bottom">
        <div class style="background-image: url(assets/images/coffe.jpeg);">
            <h1 class="text-center" style="color: white;">Dashboard</h1>
            <hr style="width: 100px; height: 5px; background-color: white; border-radius: 8px;">
            <hr style="width: 250px; height: 5px; background-color: white; border-radius: 8px;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-5">
                        <a class="icon-link" href="pilihMenu.php">
                            <div class="card mb-4 shadow-sm">
                                <img class="bg-white rounded shadow-sm py-5 px-4" src="assets/images/menu.png"
                                    data-src="assets/images/inventory.png" alt=""
                                    class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <div class="card-body">
                                    <h2 class="display-5 card-text text-center" class="pilihMenu">Menu</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-5">
                        <a class="icon-link" href="./petugas/login.php">
                            <div class="card mb-4 shadow-sm">
                                <img class="bg-white rounded shadow-sm py-5 px-4" src="assets/images//userlog.jpg"
                                    data-src="assets/images/inventory.png" alt=""
                                    class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <div class="card-body">
                                    <h2 class="display-5 card-text text-center">User Login</h2>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
    </main>
    <script>
    var myVar;

    function myFunction() {
        myVar = setTimeout(showPage, 1000);
    }

    function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
        document.getElementById("myDiv1").style.display = "open";
        document.getElementById("myDiv2").style.display = "block";
    }
    </script>
</body>