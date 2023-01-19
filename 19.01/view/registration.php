<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        .sign-up-form {
            margin: auto;
        }

        #username {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        #email {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        #password {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
</head>

<body>
    <div class="container text-center">
        <div class="row">
            <form method="post" class="sign-up-form mt-5 mt-md-5 col-lg-4 col-md-5 col-sm-8">
                <h3>Registration</h3>
                <div class="alert alert-danger <?= $error === null ? 'visually-hidden' : '' ?>">
                    <?= $error ?>
                </div>
                <label for="username" class="visually-hidden">Username</label>
                <input type="text" id="username" name="username" class="form-control mt-3" placeholder="Username" required="" autofocus="">
                <label for="email" class="visually-hidden">Email</label>
                <input type="email" id="email" name="email" class="form-control mt-3" placeholder="Email" required="">
                <label for="password" class="visually-hidden">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
                <button class="w-75 btn btn-lg btn-primary mt-1" type="submit">Register</button>
                <div class="mt-3">
                    <a href="/">Back</a>
                </div>
            </form>
        </div>
    </div>
</body>