<?php
    include('../private/dbconnect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Book</title>
</head>
<style>
    .search {
        background-color: grey;
        margin: 0 100px;
    }

    .search h3 {
        text-align: center;
        padding: 22px 0;
        color: white;
    }

    .search-box{
        margin: 0 100px;
        display: flex;
        justify-content: space-between;
    }

    input{
        padding: 5px 10px;
    }

    .search-resuts{
        margin: 0 100px;
    }

    table{
            border-collapse: collapse;
            width: 100%;
            margin-top: 40px;
            font-size: 15px;
        }
        table tr th{
            color: white;
            background-color: black;
            padding: 10px;
        }
        table tr td{
            text-align: center;
            border: 1px solid black;
            padding: 20px;
        }
</style>

<body>
    <div class="search">
        <h3>Search Book</h3>
    </div>
    <div class="search-box">
        <div class="search-author-box">
            <form action="searchbook.php" method="post">
                <input type="text" name="author_name" required>
                <input type="submit" value="Search" name="search">
            </form>
        </div>
    </div>

    <div class="search-resuts">
        <table>
            <tr>
                <th>Book ID</th>
                <th>Book Name</th>
                <th>Description</th>
                <th>Category</th>
                <th>Author</th>
                <th>Price</th>
            </tr>
            <?php
             if (isset($_POST['search'])) {
                $author = $_POST['author_name'];
                $sql = "SELECT * FROM `book` WHERE `author`='$author'";
                $run = mysqli_query($conn,$sql);
                $num = mysqli_num_rows($run);
                if ($num > 0) {
            while($data = mysqli_fetch_assoc($run)){
                ?>
            <tr>
                <td><?php echo $data['book_id'] ?></td>
                <td><?php echo $data['name'] ?></td>
                <td><?php echo $data['description'] ?></td>
                <td><?php echo $data['category'] ?></td>
                <td><?php echo $data['author'] ?></td>
                <td><?php echo $data['price'] ?></td>
            </tr>
            <?php
            }
        }

        else{
            echo "<script> 
            alert('Not Available');
            window.open('searchbook.php','_self');
            </script>";
        }
        }
            ?>
    </div>
</body>

</html>