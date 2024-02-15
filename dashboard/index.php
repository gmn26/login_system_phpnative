<?php
    include('../layout/header.php');
?>

<div>
    <h1>Dashboard</h1>
    <h2>Hello <?= $_SESSION['fullname']; ?></h2>
    <h3>Your username is : <?= $_SESSION['username']; ?></h3>
    <h3>Your email is : <?= $_SESSION['email']; ?></h3>
    <a href="../logout/">Log Out</a>
</div>

<?php
    include('../layout/footer.php');
?>