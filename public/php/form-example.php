<?php
    $items = array('Item One', 'Item Two', 'Item Three');
    $allItems = array_merge($items, $_POST);
?>

<!-- Try injecting some malicious input into the form and see what happens. -->

<!-- Update all code where user input is displayed to use htmlspecialchars() and strip_tags() to prevent malicious inputs. -->

<!-- Test your updates with HTML and JavaScript to make sure your application is secure. -->
 
<!DOCTYPE html>
<html>
<head>
    <title>Alternative Syntax</title>
</head>
<body>
    <h1>List of Items</h1>
    <ul>
    <?php echo htmlspecialchars(strip_tags($allItems)); foreach ($allItems as $item): ?>
        <li><?php echo $item; ?></li>
    <?php endforeach; ?>
    </ul>

    <form method="POST" action="/form-example.php">
        <input type="text" id="newitem" name="newitem" placeholder="Add new todo item">
        <input type="submit" value="add">
    </form>
</body>
</html>