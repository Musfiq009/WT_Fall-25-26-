<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Doctors</title>
    <link rel="stylesheet" href="../css/Doctor.css">
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <h2>Admin Panel</h2>
    <ul>
        <li><a href="#">Dashboard</a></li>
        <li><a href="#" class="active">Doctors</a></li>
        <li><a href="#">Diagnostic Labs</a></li>
        <li><a href="#">Appointments</a></li>
        <li><a href="#">Reports</a></li>
        <li><a href="#">Logout</a></li>
    </ul>
</div>

<!-- Main Content -->
<div class="main-content">

    <div class="header">
        <h1>Add New Doctor</h1>
        <p>Enter doctor information</p>
    </div>

    <div class="form-section">
        <form action="" method="POST">

            <label>Full Name</label>
            <input type="text" name="full_name" required>

            <label>Degree</label>
            <input type="text" name="degree" required>

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Address</label>
            <textarea name="address" required></textarea>

            <label>Phone Number</label>
            <input type="text" name="phone" required>

            <label>Specialization</label>
            <input type="text" name="specialization" required>

            <label>Category</label>
            <select name="category" required>
                <option value="">Select Category</option>
                <option value="Cardiology">Cardiology</option>
                <option value="Neurology">Neurology</option>
                <option value="Dermatology">Dermatology</option>
                <option value="Orthopedics">Orthopedics</option>
                <option value="General Physician">General Physician</option>
            </select>

            <label>Doctor Photo</label>
            <input type="file" name="photo" accept="image/*" required>

            <button type="submit" name="add_doctor" class="btn-add">
                Add Doctor
            </button>

        </form>
    </div>

</div>

</body>
</html>
