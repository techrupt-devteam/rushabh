<?php
echo"1"; die;
error_reporting(0);

$servername = "localhost";
$username = "rushabh_booking";
$password = "snjdB7=,-f7N";
$dbname = "rushabh_booking";

	// $to = $_POST['email']; 
	$to = $_POST['Email'];
// print_r($to);

 	$header1 = "From: it@rushabh2w.com \r\n".
    'X-Mailer: PHP/' . phpversion();

    $header = "From: it@rushabh2w.com \r\n".
	"CC: radhikapmalik@gmail.com". "\r\n" .
	"CC: it@sevagroup.co.in". "\r\n" .
	"CC: smsales@rushabh2w.com". "\r\n" .
	"CC: bm@rushabh2w.com". "\r\n" .
	"CC: prajakta.hoh@gmail.com". "\r\n" .
	"CC: mayuri.hoh@gmail.com". "\r\n" .
    'X-Mailer: PHP/' . phpversion();


	$header .= "MIME-Version: 1.0\r\n";

	$header .= "Content-type: text/html\r\n";

	$contentmain = "Dear ".$_POST['Name'].","."\r\n\r\n"."Thank you for contacting us. We have received your enquiry. One of our team member shall get back to you shortly"."\r\n\r\n"."Thanks & Regards"."\r\n"."Team Rushubh Honda,"."\r\n"."Nashik: 0253-6643444";

	mail ($to,"RUSHABH HONDA - Your Request has been received",$contentmain,$header1);

	// $contentmain = "Dear Admin,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You have received a new enquiry. Enquiry details are as follows:<br><br>
	// 	Name:".$_POST['Name']."<br>
	// 	Mobile No.:".$_POST['mobile']."<br>
	// 	Address:".$_POST['Remarks']."<br>
	// 	Email:".$_POST['Email']."<br>
	// 	<br>Thanks & Regards<br>Team Rushubh Honda,<br>Nashik: 0253-6643444";

	$message2='<html>';
$message2.='<body aria-readonly="false" style="cursor: auto;"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong>Hello Admin,</strong></span></span><br />
<br />';
$message2.='<span style="font-size:12px"><strong><span style="font-family:arial,helvetica,sans-serif">You have received a new enquiry. Enquiry details are as follows:</span></strong></span><br />
&nbsp;';
$message2.='<table border="0" cellpadding="2" cellspacing="2" style="width:500px;background-color:#D3D3D3">
	<tbody>';
	$message2.='<table border="0" cellpadding="2" cellspacing="2" style="width:400px;background-color:#D3D3D3" align="center">
	<tbody><tr><td>';
	    $message2.='<tr>
			<td colspan="2><span style="color:#000000"><center><span style="font-size:14px"><strong><span>Customer Details</span></strong></span></span></center></td>
		</tr>';
		 $message2.='<tr>
			<td style="width: 153px;">&nbsp;</td>
			<td style="width: 234px;">&nbsp;</td>
		</tr>';
		$message2.='<tr>
			<td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Customer Name :</span></strong></span></span></td>
			<td style="width: 234px;"><span style="color:#000000"><span>'.$_POST['Name'].'</span></span></td>
		</tr>';
		$message2.='<tr>
			<td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Contact No :</span></strong></span></span></td>
			<td style="width: 234px;"><span style="color:#000000"><span>'.$_POST['mobile'].'</span></span></td>
		</tr>';
		$message2.='<tr>
			<td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Email ID :</span></strong></span></span></td>
			<td style="width: 234px;"><span style="color:#000000"><span>'.$to.'</span></span></td>
		</tr>';
		$message2.='<tr>
			<td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Address:</span></strong></span></span></td>
			<td style="width: 234px;"><span style="color:#000000"><span>'.$_POST['Remarks'].'</span></span></td>
		</tr>';
		$message2.='<tr>
			<td style="width: 153px;">&nbsp;</td>
			<td style="width: 234px;">&nbsp;</td>
			</td>
			</tr>
	    </tbody>
        </table>
		</tr>
	</tbody>
</table>
<br />';
$message2.='<span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong>Thanks & Regards </strong></span></span><br /><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong>Team Rushabh Honda, </strong></span></span><br /><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong>Nashik: 0253-6643444 </strong></span></span></body>
</html>';

	mail ('bm@rushabh2w.com',"RUSHABH HONDA - New Enquiry received",$message2,$header);
		// mail ('mayuri.hoh@gmail.com',"RUSHABH HONDA - New Enquiry received",$message2,$header);


	$Name    = $_POST['Name'];
	$mobile = $_POST['mobile'];
	//$mobile  = $_POST['mobile'];
	$Remarks = $_POST['Remarks'];
	$Email   = $_POST['Email'];
	$conn    = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        date_default_timezone_set("Asia/Kolkata");
        $data_ = date('d/m/Y h:i:s A');
        $sql = "INSERT INTO contact_us ( name, mobile, email, address,created_at) VALUES ('$Name', '$mobile', '$Email','$Remarks', '$data_')";
        

        if ($conn->query($sql) === TRUE) {
          //echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

	header("location:thank-you.php");

?>

