<!DOCTYPE html>
<html lang="en">
<head>
    <title>Booking Type Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/time-slot-css.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/boostrap.min.js"></script>
    
</head>
<body>

<div class="container">
    <h2>Booking Type Form </h2>
    <form>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
        </div>
        <div class="form-group">
            <label for="mobileNumber">Mobile Number:</label>
            <input type="text" class="form-control" id="mobileNumber" placeholder="Enter Mobile Number" name="mobile number" required>
        </div>
        <div class="form-group">
            <label for="date">Pick a Date </label>
            <input type="date" class="form-control" name="date" id="date" required>
        </div>
        <div class="form-group">
            <label for="time">Select a time:</label>
            <input type="time" id="time" name="time" required>
        </div>
        <div class="form-group">
            <label for="comments">Wtire Comments</label>
            <textarea class="form-control" id="comments" name="comments" rows="5" cols="10" required></textarea>
        </div>

    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>