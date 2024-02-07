<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <?php include './php/component/_navbar.php'; ?>
    <main class="container mt-5">

        <div class="row">
            <h1>Hello</h1>
        </div>

        <div class="row mt-5">
            <div class="col">
                <input id="username" class="form-control form-control-lg" type="text" placeholder="User name"
                    aria-label=".form-control-lg example">
            </div>
            <div class="col">
                <input id="pass" class="form-control form-control-lg" type="password" placeholder="Password"
                    aria-label=".form-control-lg example">

            </div>

        </div>

        <div class="row mt-5">
            <button id="submit" class="btn btn-primary">login</button>
        </div>

    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <script>
        let btn = document.getElementById("submit");
        btn.addEventListener('click', function () {
            alert('hello')
        });

    </script>

</body>

</html>