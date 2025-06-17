document.getElementById('loginBtn').onclick = function() {
    document.getElementById('loginModal').style.display = 'block';
}
document.getElementById('signupBtn').onclick = function() {
    document.getElementById('signupModal').style.display = 'block';
}

document.getElementById('closeLogin').onclick = function() {
    document.getElementById('loginModal').style.display = 'none';
}
document.getElementById('closeSignup').onclick = function() {
    document.getElementById('signupModal').style.display = 'none';
}

window.onclick = function(event) {
    if (event.target == document.getElementById('loginModal')) {
        document.getElementById('loginModal').style.display = 'none';
    }
    if (event.target == document.getElementById('signupModal')) {
        document.getElementById('signupModal').style.display = 'none';
    }
}