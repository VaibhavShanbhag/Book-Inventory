<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest Books Inventory</title>
</head>
<style>

    *{
        margin: 0;
        padding: 0;
    }

    header{
        background-color: grey;
        color: white;
    }


    nav{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .navbar ul{
        display: flex;
        flex-direction: row;
        list-style: none;
    }

    ul li{
        padding: 20px;
        font-size: 17px;
    }

    ul li a{
        text-decoration: none;
        color: white;
        transition: all 0.3s ease;
    }

    ul li a:hover{
        color: rgb(219, 199, 199);
    }

    .btn, .btnn{
        text-decoration: none;
        margin: 15px;
        background-color: black;
        color: white;
        padding: 10px 30px;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .btn:hover{
        background-color: transparent;
        border: 1px solid black;
        color: white;
    }

    .btnn:hover{
        background-color: white;
        border: 1px solid black;
        color: black;
    }

    .info{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 80vh;
    }


</style>
<body>
    <header>
        <nav>
            <div class="navbar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            </div>
            <div class="login-signup">
                <a href="#" class="btn">Login</a>
                <a href="signup.php" class="btn">Signup</a>
            </div>
        </nav>
    </header>
    <div class="info">
            <a href="addnewbook.php" class="btnn">Add New Book</a>
            <a href="searchbook.php" class="btnn">Search Book</a>
    </div>
</body>
</html>