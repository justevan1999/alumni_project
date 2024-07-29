<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

        <style>
            .container {
            max-width: 400px;
            margin: 100px auto;
            background-color: #fff;
            padding: 30px 50px;
            border-radius: 30px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            }

            .sign-in-form h2 {
            text-align: center;
            color: #950000;
            font-size: 36px;
            font-weight: 500;

            }

            .form-group {
            margin-bottom: 15px;
            }

            label {
            font-weight: bold;
            }

            input[type="text"],
            input[type="password"] {
            width: 92%;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            outline: gray;
            margin-top: 15px;
            }

            button {
            width: 100%;
            padding: 15px;
            background-color: #950000;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            }

            button:hover {
            background-color: #950000;
            }

            a {
            text-decoration: none;
            color: #950000;
            }

            a:hover {
            text-decoration: underline;
            }

            .form-group-2 button{
                color: #950000;
                background-color: #ffffff;
                border: 1px solid #950000;
                outline: none;
                &:hover{
                    background-color: #950000;
                    color: #fff;
                }
                
            }

            .top-head h2{
            }
        </style>



        <div class="row">
            <div class="col-sm-12-col-md-12-col-lg-1"></div>
            <div class="col-sm-12-col-md-12-col-lg-10">
            <!-- <div class="admin-form justify-content-center">
               <form action="submit">
                <h1>Welcome Back</h1>
                <p>Sign-in your account to continue</p>
                <label for="email-address">
                    <h6>Email Address</h6>
                    <input type="text" placeholder="Enter email address" name="email" required>
                </label>

                <label for="password">
                    <h6>Password</h6>
                    <input type="text" placeholder="Enter password" name="password" required>
                </label>

                <div class="admin-butns">
                    <div class="ad-btn-1">
                        <button>Sign in</button>
                    </div>
                    <div class="ad-btn-2">
                        <button>Continue with Google</button>
                    </div>
                </div>
                <p>Dont have an account? <span>Create Account</span></p>
               </form> 
            </div> -->
                <div class="container">
                <form action="login.php" method="POST" class="sign-in-form">
                    <h2 class="top-head">Welcome Back</h2>
                    <p style="text-align: center; padding-bottom: 15px;">Sign-in your account to continue</p>
                    <div class="form-group">
                        <label for="email" style="padding-bottom: 10px;">Email Address or Username:</label>
                        <input type="text" name="username" placeholder="Enter email address" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" placeholder="Enter password" required>
                    </div>

                    <div class="form-group">
                        <button type="submit">Sign-In</button>
                    </div>
                </form>
         </div>
        </div>
        <div class="col-sm-12-col-md-12-col-lg-1"></div>
    </div>
    <script src="index.js"></script>
</body>
</html>