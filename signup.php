<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Page</title>
    <link rel="stylesheet" href="./signup.css">
</head>

<body>
    <div class="container">
        <div class="main">
          <h1>SignUp</h1>

            <form id="myform" class="form" action="register.php" method="post">
                <div  class="test">
                    <label for="name">Name</label>
                    <input id="name" name="name" type="text" placeholder="enter your name">
                </div>
                <div  class="test">
                    <label for="username">Username</label>
                    <input id="username" name="username" type="text" placeholder="enter your username">
                </div>
                <div  class="test">
                    <label for="email">E-mail</label>
                    <input id="email" name="email"  type="email" placeholder="mailto@gmail.com">
                </div>
                <div  class="test">
                    <label for="password">Password</label>
                    <input  id="password" name="password" type="text" placeholder="enter your password">
                </div>
                <button  id="button" type="submit" class="btn">SignUp </button>
            </form>
        </div>
        <p>Already a member ?<a href="./form.html">login</a> </p>
    </div>
    <!-- <script src="./signup.js"></script> -->
</body>

</html>