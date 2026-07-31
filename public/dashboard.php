// Dashboard page
<?php
session_start();

if (!isset($_SESSION['fullname'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<div class="login-container">

    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['fullname']); ?></h2>

    <h3>Simple Login System</h3>

    <p>System Integration and Architecture 1</p>

    <br>

    <a href="logout.php">
        <button>Logout</button>
    </a>

</div>

</body>
</html>