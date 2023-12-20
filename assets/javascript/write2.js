// set time to 20m 10s
var initialMinutes = 20;
var initialSeconds = 10;
var targetTime = initialMinutes * 60 + initialSeconds; // Convert to seconds

// using sessionStorage and check it
var storedTargetTime = sessionStorage.getItem("countdownTime4write2");

// if not in local storage, set new
var timeRemaining;
if (storedTargetTime) {
  timeRemaining = parseInt(storedTargetTime);
} else {
  timeRemaining = targetTime;
  sessionStorage.setItem("countdownTime4write2", timeRemaining);
}

// Update the countdown every second
var countdownInterval = setInterval(function () {
  if (timeRemaining <= 0) {
    clearInterval(countdownInterval);
    document.getElementById("countdown").innerHTML =
      "<span style='color: red;'>Time's up!</span>";

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
    sessionStorage.setItem("countdownTime4write2", timeRemaining);
  }
}, 1000);

$(document).ready(function () {
  $("textarea").on("input", function () {
    var text = $(this).val();
    var wordCount = text.trim().split(/\s+/).length;
    var current = $("#current");
    var maximum = $("#maximum");

    current.text(wordCount);

    // Define the maximum word count
    var maxWords = 250; // Change this to your desired maximum word count

    if (wordCount > maxWords) {
      var words = text.trim().split(/\s+/).slice(0, maxWords).join(" ");
      $(this).val(words);
      current.text(maxWords);
    }
  });
});
