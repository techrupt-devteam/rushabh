<?php 

                $servername = "localhost";
                $username = "rushabh_booking";
                $password = "snjdB7=,-f7N";
                $dbname = "rushabh_booking";
                $conn       = new mysqli($servername, $username, $password, $dbname);
                $data = $_POST['data1'];
                if ($conn->connect_error)
                {
                  die("Connection failed: " . $conn->connect_error);
                }
                // $date = date('Y-m-d');
                $result="SELECT * from book_your_service where(booking_date='$data')";
                $d = $conn->query($result); 
                $num_rows = mysqli_num_rows($d);
                if($num_rows>50){
                    echo "true";
                }else{
                    echo "false";
                }
               
               ?>