<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Favorite Food</title>
</head>
<body>
 
<?php if (!empty($food)): ?>
    <h2>Hi, We know about your favorite food <?php echo htmlspecialchars($food); ?></h2>
<?php else: ?>
    <p>Please let us know about your favorite food</p>
    <form method="POST" action="index.php">
        <input type="text" name="food_name" required>
        <button type="submit" name="submit">Submit</button>
    </form>
<?php endif; ?>
 
</body>
</html>