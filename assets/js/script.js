// let dayBox = document.getElementById("day-box");
// let hrBox = document.getElementById("hr-box");
// let minBox = document.getElementById("min-box");
// let secBox = document.getElementById("sec-box");

// // Date(y,m,d,h,m)
// let countDownDate = new Date("Dec 2, 2023 19:00:00").getTime();

// // Update the count down every 1 second
// var x = setInterval(function () {
//   // Get today's date and time
//   var now = new Date().getTime();

//   // Find the distance between now and the count down date
//   var distance = countDownDate - now;

//   // Time calculations for days, hours, minutes and seconds
//   var days = Math.floor(distance / (1000 * 60 * 60 * 24));
//   var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
//   var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
//   var seconds = Math.floor((distance % (1000 * 60)) / 1000);

//   // Output the result in an element with id="demo"
//   dayBox.innerHTML = days;
//   hrBox.innerHTML = hours;
//   minBox.innerHTML = minutes;
//   secBox.innerHTML = seconds;

//   // If the count down is over, write some text
//   if (distance < 0) {
//     clearInterval(x);
//     document.getElementById("demo").innerHTML = "EXPIRED";
//   }
// }, 1000);
