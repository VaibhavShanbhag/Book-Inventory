<?php
    include('../private/dbconnect.php');

    if (isset($_POST['add'])) {
        $name = $_POST['book_name'];
        $description = $_POST['book_desc'];
        $category = $_POST['book_category'];
        $author = $_POST['book_author'];
        $price = $_POST['book_price'];

        $sql = "INSERT INTO `book`(`name`, `description`, `category`, `author`, `price`) VALUES('$name', '$description', '$category', '$author', '$price')";
        $check_sql = mysqli_query($conn, $sql);

        if ($check_sql == true) {
            echo "<script> 
            alert('Successfully Inserted the Data');
            window.open('addnewbook.php','_self');
            </script>";
        }

        else {
            echo "Error: sql" .mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Book</title>
</head>
<style>

    *{
        margin: 0;
        padding: 0;
    }
    .container{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 60vh;
        background-color: lightblue;
        margin: 0 80px;
        border: 2px solid lightblue;
        border-radius: 20px;
        margin-top: 100px;
    }

    .container .box h3{
        text-align: center;
        font-size: 20px;
    }

    table{
        padding: 20px;
    }

    input,select, textarea{
        padding: 3px;
        margin: 3px;
    }
</style>
<body>
    <div class="container">
        <div class="box">
            <h3>Add New Book</h3>
            <table>
                <form action="addnewbook.php" method="post">
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="book_name" required></td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td><textarea name="book_desc" cols="20" rows="4"></textarea></td>
                    </tr>
                    <tr>
                        <td>Category</td>
                        <td><select name="book_category">
                            <option value="Comic">Comic</option>
                            <option value="Horror">Horror</option>
                            <option value="Fantasy">Fantasy</option>
                            <option value="Action">Action</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td>Author</td>
                        <td><input type="text" name="book_author" required></td>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td><input type="number" name="book_price" required></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <br><input type="submit" name="add" value="ADD"
                                style="margin-right:75px; width: 150px;">
                        </td>
                    </tr>
                </form>
            </table>

        </div>
    </div>
</body>

</html>