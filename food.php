<!DOCTYPE HTML>
<html>
<head>
    <title>Food</title>
</head>
<body>
    <form action="addfood.php" method="post">
        Name: <input type="text" name="name"><br>
        Description: <input type="text" name="description"><br>
       
        Price: <input type="text" name="price"><br>
        <h4>Category selection</h4>
            <form method="post">
                <label for="static">Choose a category:</label>
                <select name="category" id="static">
                    <option value="">--Select--</option>
                    <option value="main">Main</option>
                    <option value="snack">Snack</option>
                    <option value="drink">Drink</option>
                </select>
                <button type="submit">Submit</button>
            </form>

    </form>
    <!-- <?php
        include_once("connection.php");    //equivalent of import
        $stmt=$conn->prepare("SELECT * FROM tblfood");
        $stmt->execute();
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            print_r($row);
                
        }
    ?> -->

</body>
</html>