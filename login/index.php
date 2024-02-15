<?php
    include('../layout/header.php');
    ?>

<div class="container">
    <div class="form-container">
        <span style="position: absolute; right: 24px; top: 24px;">
            Login via : 
            <button onclick="loginUsername()">Username</button>
            <button onclick="loginEmail()">Email</button>
        </span>
        <span class="poppins-extrabold form-title">LOGIN</span>
        <form action="../auth/checklogin.php" method="POST">
            <div class="form" id="loginBy">
                <label for="Username" id="usernameLabel">Username</label>
                <input type="text" name="username" placeholder="Enter your username" required id="usernameInput">
            </div>
            <label for="Password">Password</label>
            <input type="password" name="password" placeholder="Enter your password" required>
            <button name="submit">Login</button>
        </form>
        <span>
            Did not have an accout? | <a href="../register/">Register Here!</a>
        </span>
    </div>
</div>


<script src="../assets/js/login.js"></script>
<?php
    include('../layout/footer.php');
?>