<?php

if(isset($_POST["view"]))
{
 $connect = mysqli_connect("localhost", "root", "", "course");
 
 if($_POST["view"] != '')
 {
  $update_query = "UPDATE contact SET status=1 WHERE status=0";
  mysqli_query($connect, $update_query);
 }
 $query = "SELECT * FROM contact ORDER BY message_id DESC LIMIT 5";
 $result = mysqli_query($connect, $query);
 $output = '';
 
 if(mysqli_num_rows($result) > 0)
 {
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
   <li>
    <a href="#">
     <strong>'.$row["date"].'</strong>&nbsp;&nbsp;<strong>'.$row["time"].'</strong><br />
     <small><em>'.$row["message"].'</em></small>
    </a>
   </li>
   <li class="divider"></li>
   ';
  }
 }
 else
 {
  $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
 }
 
 $query_1 = "SELECT * FROM contact WHERE status=0";
 $result_1 = mysqli_query($connect, $query_1);
 $count = mysqli_num_rows($result_1);
 $data = array(
  'notification'   => $output,
  'unseen_notification' => $count
 );
 echo json_encode($data);
}
?>