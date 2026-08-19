<?php
$cookie_name = "favorite_food";
$cookie_time = time() + (86400 * 30);
 
if (isset($_POST['submit']) && !empty($_POST['food'])) {
    $food = htmlspecialchars($_POST['food']);
    setcookie($cookie_name, $food, $cookie_time, "/");
    $_COOKIE[$cookie_name] = $food;
}
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Favorite Food Cookie</title>
</head>
<body>
 
<?php if (isset($_COOKIE[$cookie_name])): ?>
    
    <h2>Hi, We know about your favorite food: <?php echo htmlspecialchars($_COOKIE[$cookie_name]); ?></h2>
 
<?php else: ?>
    
    <p>Please let us know about your favorite food:</p>
    <form method="POST" action="">
        <input type="text" name="food" placeholder="Enter your favorite food" required>
        <button type="submit" name="submit">Submit</button>
    </form>
<?php endif; ?>
 
</body>
</html>
