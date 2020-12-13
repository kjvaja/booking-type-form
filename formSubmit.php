<?php
$conn = mysqli_connect('localhost:3306', 'root', '', 'booking');

$name = $_POST['name'];
$mobNum = $_POST['mobile_number'];
$days = $_POST['all_days'];
$email = $_POST['email'];
$date = $_POST['date'];
$timeSlot = $_POST['time_slots'];
$com = $_POST['comments'];

if(is_array($days)==true)
{
    $days='all';
}

$result = mysqli_query($conn,"select date from booking");
$results = mysqli_fetch_assoc($result);
print_r($days);
foreach($results as $result){
  if($result==$date)
  {
    echo "Already booked on chosen date";
    break;
  }
  else
  {
    $sql = "insert into booking values('','$_POST[name]',$_POST[mobile_number],'$_POST[email]','$days','$_POST[date]','$_POST[time_slots]','$_POST[comments]')";
    if ($conn->query($sql) === TRUE) 
    {
      echo "Record Inserted Successfully";
      } 
      else 
      {
        echo "Error: " . $conn->error;
      }
  }
}
$conn->close();
?>