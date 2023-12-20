// set time to 30m 10s
var initialMinutes = 30;
var initialSeconds = 10;
var targetTime = initialMinutes * 60 + initialSeconds; // Convert to seconds

// using sessionStorage and check it
var storedTargetTime = sessionStorage.getItem("countdownTime4listen");

// if not in local storage, set new
var timeRemaining;
if (storedTargetTime) {
    timeRemaining = parseInt(storedTargetTime);
} else {
    timeRemaining = targetTime;
    sessionStorage.setItem("countdownTime4listen", timeRemaining);
}

// Update the countdown every second
var countdownInterval = setInterval(function () {
    if (timeRemaining <= 0) {
        clearInterval(countdownInterval);
        document.getElementById("countdown").innerHTML = "<span style='color: red;'>Time's up!</span>";
 
        // Otomatis tombol "Submit"
        document.querySelector('input[type="submit"]').click();

    } else {
        var minutes = Math.floor(timeRemaining / 60);
        var seconds = timeRemaining % 60;

        var countdownText = minutes + "m " + seconds + "s";
        document.getElementById("countdown").innerHTML = countdownText;

        // Decrement the remaining time by 1 second
        timeRemaining--;

        // Update the stored target time in sessionStorage
        sessionStorage.setItem("countdownTime4listen", timeRemaining);
    }
}, 1000);

document.addEventListener("DOMContentLoaded", function() {
    const read21_22Checkboxes = document.querySelectorAll('input[name="list21_23[]"]');

    read21_22Checkboxes.forEach(checkbox => {
        checkbox.addEventListener("change", function() {
            const checkedCheckboxes = document.querySelectorAll('input[name="list21_23[]"]:checked');
            if (checkedCheckboxes.length > 3) {
                this.checked = false; // Batasi pemilihan hingga 2
            }
        });
    });
});