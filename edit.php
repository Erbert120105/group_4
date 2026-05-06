<?php include 'config.php'; ?>

<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM users WHERE id=$id");
$row = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $conn->query("UPDATE users SET name='$name', email='$email' WHERE id=$id");
    header("Location: index.php");
}
?>

<h2>Edit User</h2>

<form method="POST">
    Name: <input type="text" name="name" value="<?= $row['name']; ?>"><br><br>
    Email: <input type="email" name="email" value="<?= $row['email']; ?>"><br><br>
    <button type="submit" name="update">Update</button>
</form>