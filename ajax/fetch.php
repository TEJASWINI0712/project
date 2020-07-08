<?php
$connect = mysql_connect("localhost","root","","mydb");
output='';
$sql ="SELECT * FROM enquiry LIKE '%" $_POST["search"]."%'";
$result = mysqli_query($connect, $sql);
if(mysqli_num_rows($result)>0)
{
    $output .='<h4 align="center">Search Result</h4>';
    $output .='<div class="table-responsive">
            <table class="table table bordered">
            <tr>
            <th>enquiry/th>
            </tr>;
            while($row = mysqli_fetch_array($result))
{
    $output .='
    <tr>
    <td>'.$row["Enquiryid"].'</td>
    <td>'.$row["Packageid"].'</td>
    <td>'.$row["Name"].'</td>
    <td>'.$row["Gender"].'</td>
    <td>'.$row["Mobileno"].'</td>
    <td>'.$row["Email"].'</td>
    <td>'.$row["Noofdays"].'</td>
    <td>'.$row["Child"].'</td>
    <td>'.$row["Adults"].'</td>
    <td>'.$row["Message"].'</td>
    <td>'.$row["Statusfield"].'</td>
    </tr>
}
}
else
{
    echo'data not found';
}

?>
