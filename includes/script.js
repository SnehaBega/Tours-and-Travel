function addCustomer() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
  
    if (name.trim() == "" || email.trim() == "" || phone.trim() == "") {
      alert("Please fill in all fields");
      return;
    }
  
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "add_customer.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
        var response = xhr.responseText;
        if (response == "success") {
          alert("Customer added successfully");
          document.getElementById("name").value = "";
          document.getElementById("email").value = "";
          document.getElementById("phone").value = "";
          location.reload();
        } else {
          alert("Error adding customer. Please try again");
        }
      }
    }
    xhr.send("name=" + name + "&email=" + email + "&phone=" + phone);
  }
  
  function deleteCustomer() {
    var id = document.getElementById("delete-id").value;
  
    if (id.trim() == "") {
      alert("Please enter customer ID");
      return;
    }
  
    if (!confirm("Are you sure you want to delete this customer?")) {
      return;
    }
  
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "delete_customer.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
       
      }}}
  