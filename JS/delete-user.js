// delete_user.js

function showUserData() {
  var userId = document.getElementById("userId").value;

  // Make an AJAX request to get user data
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      var userData = JSON.parse(this.responseText);
      if (userData) {
        displayUserData(userData);
      } else {
        alert("User not found");
      }
    }
  };
  xhttp.open("POST", "delete_user.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("userId=" + userId);
}

function displayUserData(userData) {
  var modal = document.getElementById("myModal");
  var userDataDiv = document.getElementById("userData");

  // Populate the modal with user data
  userDataDiv.innerHTML =
    "<p><strong>User ID:</strong> " +
    userData.user_id +
    "</p>" +
    "<p><strong>Name:</strong> " +
    userData.name +
    "</p>" +
    "<p><strong>Email:</strong> " +
    userData.email +
    "</p>";

  // Display the modal
  modal.style.display = "block";
}

function closeModal() {
  var modal = document.getElementById("myModal");
  modal.style.display = "none";
}

function confirmDeletion() {
  var userId = document.getElementById("userId").value;

  // Redirect to a page for actual deletion or perform deletion here
  // For simplicity, we'll just show an alert
  alert("User with ID " + userId + " has been deleted.");

  // Close the modal after confirmation
  closeModal();
}
