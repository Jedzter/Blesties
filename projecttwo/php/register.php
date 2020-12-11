<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF -8">
        <title>Sign Up Page</title>
    </head>

    <body>
        <div id="container">
            <div id="table-row">
                <div id="col-md-12">
                    <h2>Register</h2>
                    <p>Fill out this form to create an account</p>
                    <form action="" method="post">

                        <div id="form-id">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        
                        <div id="form-id">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required />
                        </div>
                        
                        <div id="form-id">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <div id="form-id">
                            <label>Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control" required>
                        </div>

                        <div class="form-id">
                            <input type="submit" name="submit" class="btn btn-primary" value="submit"> 
                        </div>
                        <p>Already signed up? <a href="login.php">Login</a>.</p>
                    </form>
                </div>
            <div>
        </div>
    </body>
</html>