<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h2>Payment Form</h2>

<form action="payment_process.php" method="POST">
    <div class="form-group">
        <label for="payment_type">Payment Type:</label>
        <select id="payment_type" name="payment_type" required>
            <option value="">Select Payment Type</option>
            <option value="Tuition Fee">Tuition Fee</option>
            <option value="Library Fee">Library Fee</option>
            <option value="Exam Fee">Exam Fee</option>
            <!-- Add more payment types as needed -->
        </select>
    </div>
    <div class="form-group">
        <label for="payment_date">Date:</label>
        <input type="date" id="payment_date" name="payment_date" required>
    </div>
    <div class="form-group">
        <label for="payment_time">Time:</label>
        <input type="time" id="payment_time" name="payment_time" required>
    </div>
    <div class="form-group">
        <label for="student_name">Student's Name:</label>
        <input type="text" id="student_name" name="student_name" required>
    </div>
    <div class="form-group">
        <label for="student_id">Student ID:</label>
        <input type="text" id="student_id" name="student_id" required>
    </div>
    <button type="submit">Submit Payment</button>
    <button type="reset">Reset</button>
</form>

<script>
    // Get current date and time
    const currentDate = new Date().toISOString().split('T')[0];
    const currentTime = new Date().toTimeString().split(' ')[0];

    // Set date and time fields to current date and time
    document.getElementById('payment_date').value = currentDate;
    document.getElementById('payment_time').value = currentTime;
</script>

</body>
</html>
