<?php
    include('../layout/header.php');
    ?>

<div class="container">
    <div class="form-container">
        <span class="poppins-extrabold form-title">REGISTER</span>
        <form action="../auth/checkregister.php" method="POST">
            <label for="Fullname">Fullname</label>
            <input type="text" name="fullname" placeholder="Enter your fullname" required>
            <label for="Username">Username</label>
            <input type="text" name="username" placeholder="Enter your username" required>
            <label for="Email">Email</label>
            <input type="text" name="email" placeholder="Enter your email" required>
            <label for="Password">Password</label>
            <input type="password" name="password" placeholder="Enter your password" required>
            <button name="submit">Login</button>
        </form>
        <span>
            Already have an accout? | <a href="../login/">Login Here!</a>
        </span>
    </div>
</div>

<?php
    include('../layout/footer.php');
?>