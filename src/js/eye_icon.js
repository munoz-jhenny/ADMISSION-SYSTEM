 window.addEventListener("DOMContentLoaded", function () {
    const loginToggle = document.getElementById("toggleLoginPassword");
    const loginPassword = document.getElementById("loginPassword");

    const signupToggle = document.getElementById("toggleSignupPassword");
    const signupPassword = document.getElementById("signupPassword");

    const resetToggle = document.getElementById("toggleResetPassword");
    const resetPassword = document.getElementById("resetPassword");

    if (loginToggle && loginPassword) {
      loginToggle.addEventListener("click", function () {
        const type = loginPassword.type === "password" ? "text" : "password";
        loginPassword.type = type;
        this.classList.toggle("fa-eye");
        this.classList.toggle("fa-eye-slash");
      });
    }

    if (signupToggle && signupPassword) {
      signupToggle.addEventListener("click", function () {
        const type = signupPassword.type === "password" ? "text" : "password";
        signupPassword.type = type;
        this.classList.toggle("fa-eye");
        this.classList.toggle("fa-eye-slash");
      });
    }

    if (resetToggle && resetPassword) {
      resetToggle.addEventListener("click", function () {
        const type = resetPassword.type === "password" ? "text" : "password";
        resetPassword.type = type;
        this.classList.toggle("fa-eye");
        this.classList.toggle("fa-eye-slash");
      });
    }
  });