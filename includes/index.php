<!DOCTYPE html>
<html>

<head>
	<title>Customer Details</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./style.css">
	<script src="./script.js"></script>
	    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<a href="../Login/setting_1 Admin.html" class="back-button"><i class="bi bi-arrow-left"></i></a>

<body>
	<h1>Customer Details</h1>
	<table id="customer-table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php include 'get_customers.php'; ?>
		</tbody>
	</table>
	<div id="add-customer-form">
		<h2>Add Customer</h2>
		<form>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" required>
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required>
			<label for="phone">Phone:</label>
			<input type="text" id="phone" name="phone" required>
			<button type="button" onclick="addCustomer()">Add</button>
		</form>
	</div>
	<div id="delete-customer-form">
		<h2>Delete Customer</h2>
		<form>
			<label for="delete-id">ID:</label>
			<input type="text" id="delete-id" name="delete-id" required>
			<button type="button" onclick="deleteCustomer()">Delete</button>

			<button type="button" onclick="deleteCustomer(<?php echo $customer['id']; ?>)">Delete</button>

			<script>
				function deleteCustomer(id) {
					// Display a confirmation box
					if (confirm('Are you sure you want to delete this customer?')) {
						// If the user clicks OK, delete the customer
						window.location.href = 'delete_customer.php?id=' + id;
					}
				}
			</script>

		</form>
		
	</div>
	<!-- <a href="./get_pdf.php"><button type="button" onclick="get_pdf.php (<?php echo $customer['id']; ?>)">Generate PDF</button></a> -->
</body>

</html>
<style>
	.bi-arrow-left::before {
    margin: 10px;
    font-size: 30px;
}

</style>