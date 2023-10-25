<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Training</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your Name" name="name" autocomplete="off">
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your Email" name="email" autocomplete="off">
            </div>

            <div class="mb-3">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter your Mobile Number" name="mobile" autocomplete="off">
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" class="form-control" id="showPw" placeholder="Enter your Password" name="password">
                <input type="checkbox" name="show Password" class="mt-3" onclick=showPassword()> Show Password
            </div>

            <button type="submit" class="btn btn-primary mt-4">Submit</button>

        </form>
    </div>

    <script>
        showPassword = () => {
            let pw = document.querySelector("#showPw");
            pw.type = pw.type === ('password') ? 'text' : 'password';
        }
    </script>
</body>

</html>