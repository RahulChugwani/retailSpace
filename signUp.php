
<html>
    <head>
        <title> Retail Enterprise</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="icon" href="%PUBLIC_URL%/favicon.ico" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>   
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </head>
    <body>
    <div class="header ">
        <div class="header-right">
            <a class="active" href="#"><h1>Retail Enterprise</h1></a>
        </div>
    </div>
    <div class="container" style="text-align: center;">
            <br><br>
            <div class="col-md-6" style="text-align: center; display: inline-block;">
                <form action="getUser.php" method="post" class="white">
                    <h3 class="grey-text text-darken-3">SignUp</h3>
                    <div class="input-field">
                        <label htmlFor="email">Email</label>
                        <input type="email" name="owner_email"></input>
                    </div>
                    <div class="input-field">
                        <label htmlFor="firstName">First Name</label>
                        <input type="text" name="owner_firstName" ></input>
                    </div>
                    <div class="input-field">
                        <label htmlFor="lastName">Last Name</label>
                        <input type="text" name="owner_lastName" ></input>
                    </div>
                    <div class="input-field">
                        <label htmlFor="phoneNo">Phone No</label>
                        <input type="number" name="owner_phoneNo" ></input>
                    </div>
                    <div class="input-field">
                        <label htmlFor="password">Password</label>
                        <input type="password" name="owner_password" ></input>
                    </div>
                    <div class="input-field">
                        <button type="submit" class="btn light-green  waves-effect waves-light btn">SignUp</button>
                    </div>

                </form>
            </div>
</div>
</body>

