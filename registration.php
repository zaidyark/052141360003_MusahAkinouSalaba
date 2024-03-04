<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
  <div class="container">
    <h1>School Online Registration</h1>
    <form action="#" method="POST">
      
      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your full name" required>
      </div>
      <div class="form-group">
        <label for="card">Student id Number</label>
        <input type="text" id="card" name="card" placeholder="Enter your card number" maxlength="16" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email address" required>
      </div>
      <div class="form-group">
        <label for="class">level</label>
        <select id="class" name="class" required>
          <option value="">Select your level</option>
          <option value="1">level 100</option>
          <option value="2">level 200</option>
          <option value="3">level 300</option>
        </select>
        <label for="class">Semester</label>
        <select id="class" name="class" required>
          <option value="">Select your mode of payment</option>
          <option value="1">First Semester</option>
          <option value="2">Second Semester</option>
        </select>
      </div>
      
      <div class="form-group">
        <label for="expiry">Expiry Date</label>
        <input type="text" id="expiry" name="expiry" placeholder="Enter the expiry date (MM/YY)" maxlength="5" required>
      </div>
      <button type="submit" class="button">Register Now</button>
      <button class="button"><a href="project.html">HOME</a></button><br><br>
    </form>
  </div><br><br>
  
</body>
</html>