"use strict";

// Replace "your-frontend-site-key" with your Recaptcha frontend site key
var onloadCallback = function() {
    grecaptcha.render("recaptcha", {
        "sitekey" : "your-frontend-site-key"
    });
};

document.addEventListener("DOMContentLoaded", function(e) {
    // Add your custom script here
});
