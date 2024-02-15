let loginBy = document.getElementById("loginBy")

const loginUsername = () => {
    loginBy.innerHTML = 
    '<label for="Username">Username</label>'
    +
    '<input type="text" name="username" placeholder="Enter your username" required>'
}

const loginEmail = () => {
    loginBy.innerHTML = 
    '<label for="Email">Email</label>'
    +
    '<input type="email" name="email" placeholder="Enter your email" required>'
}