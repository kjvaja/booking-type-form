<!DOCTYPE html>
<html lang="en">
<head>
    <title>Booking Type Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/time-slot-css.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/boostrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#allDays").click(function(){
                if(this.checked==true)
                {
                    $("#monday").attr("checked","checked");
                    $("#tuesday").attr("checked","checked");
                    $("#wednesday").attr("checked","checked");
                    $("#thursday").attr("checked","checked");
                    $("#friday").attr("checked","checked");
                    $("#saturday").attr("checked","checked");
                    $("#sunday").attr("checked","checked");
                }
            });
            $("#allDays").click(function(){
                if(this.checked==false)
                {
                    $("#monday").removeAttr("checked");
                    $("#tuesday").removeAttr("checked");
                    $("#wednesday").removeAttr("checked");
                    $("#thursday").removeAttr("checked");
                    $("#friday").removeAttr("checked");
                    $("#saturday").removeAttr("checked");
                    $("#sunday").removeAttr("checked");
                }
            });
        });
    
    </script>
</head>
<body>

<div class="container">
    <h2>Booking Type Form </h2>
    <form method="post" action="formSubmit.php">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
        </div>
        <div class="form-group">
            <label for="mobileNumber">Mobile Number</label>
            <input type="text" class="form-control" id="mobileNumber" placeholder="Enter Mobile Number" name="mobile_number" required>
        </div>
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" id="email" placeholder="Enter Email Address" name="email" required>
        </div>
        <div class="form-group">
            <label for="days">Choose Day(s)</label>
            <div id="days" class="form-control">
                <label for="allDays">All Days</label>
                <input type="checkbox" class="" id="allDays" value="all" name="all_days[]">
                <label for="monday">Monday</label>
                <input type="checkbox" id="monday" value="monday" name="all_days[]">
                <label for="tuesday">Tuesday</label>
                <input type="checkbox" id="tuesday" value="tuesday" name="all_days[]">
                <label for="wednesday">Wednesday</label>
                <input type="checkbox"  id="wednesday" value="wednesday" name="all_days[]">
                <label for="thursday">Thursday</label>
                <input type="checkbox" id="thursday" value="thursday" name="all_days[]">
                <label for="friday">Friday</label>
                <input type="checkbox" id="friday" value="friday" name="all_days[]">
                <label for="saturday">Saturday</label>
                <input type="checkbox" id="saturday" value="saturday" name="all_days[]">
                <label for="sunday">Sunday</label>
                <input type="checkbox"  id="sunday" value="sunday" name="all_days[]">
            </div>
        </div>
        <div class="form-group">
            <label for="date">Pick a Start Date </label>
            <input type="date" class="form-control" name="date" id="date" required>
        </div>
        <div class="form-group">
            <label for="time">Select a Time Slot:</label>
            <?php
                echo "<select class='form-control' name='time_slots' id='time'>";
                $start    = new DateTime('00:00');
                $end      = new DateTime('23:59');
                $interval = new DateInterval('PT30M');
                $period   = new DatePeriod($start, $interval, $end);
                foreach ($period as $dt)
                {
                    $dt2 = clone $dt;
                    $dt2->add(new DateInterval('PT30M')); // Add One hour
                    echo '<option value="'.$dt->format("h:iA").' - '.$dt2->format("h:iA").'">'.$dt->format("h:iA").' - '.$dt2->format("h:iA").' </option><br />';
                }
                echo "</select>";
            ?>
        </div>
        <div class="form-group">
            <label for="comments">Wtite Comments</label>
            <textarea class="form-control" id="comments" name="comments" rows="5" cols="10" required></textarea>
        </div> 
        <div class="form-group">
            <input type="submit" class="btn btn-default form-control" id="submit" name="submit" required>
        </div>
        <div class="form-group">
            <input type="reset" class="btn btn-default form-control" id="reset" name="reset" required>
        </div>
  </form>
</div>

</body>
</html>