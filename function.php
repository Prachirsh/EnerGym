<?php
   if(!isset($_SESSION)) 
   { 
       session_start(); 
   } 
error_reporting(0);
$con=mysqli_connect("localhost","root","","energym");
//checking login
if(isset($_POST['login_submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from admin where username='$username' and password='$password'";
	$query2="select * from members where username='$username' and password='$password'";
	$result=mysqli_query($con,$query);
	$result2=mysqli_query($con,$query2);
	if(mysqli_num_rows($result)==1)
	{
        $_SESSION['admin']=$_POST['username'];
		header("Location:admin-panel.php");
}
else if(mysqli_num_rows($result2)==1)
{
    $row=mysqli_fetch_array($result2);
    $_SESSION['user']=$_POST['username'];
     $_SESSION['id']=$row['member_id'];
     $_SESSION['name']=$row['fname'];
   header("Location:client/customer-panel.php");
}
	else
    {
        echo "<script>alert('Invalid Credentials, Please try again')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
    }
    if(isset($_POST['regbtn']))
    {
        header("Location:client/register.php");
    }

//adding customer
if(isset($_POST['customer_submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $gender=$_POST['gender'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $member_trainer=$_POST['member_trainer'];
    $query="insert into members(fname,lname,email,username,password,contact,member_trainer,gender,package,payment,batch,status)values
    ('$fname','$lname','$email','$username','$password','$contact','0','$gender','0','0','0','0')";
     $customer_object=mysqli_query($con,$query);
    if($customer_object)
    {
      echo "<script>alert('Member added.')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
    }
    } 

//trainer adding method
    if(isset($_POST['trainer_submit']))
    {
        $Name=$_POST['Name'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $specialist=$_POST['specialist'];
        $sallary=$_POST['sallary'];
        $query="insert into Trainer(Name,phone,address,specialist,sallary)values('$Name','$phone','$address','$specialist','$sallary')";
         $result=mysqli_query($con,$query);
        if($result)
        {
          echo "<script>alert('Trainer added.')</script>";
            echo "<script>window.open('trainer.php','_self')</script>";
        }
        else
        {
            echo mysqli_error($con);
        }
        } 
//package adding method
        if(isset($_POST['package_submit']))
        {
            $Name=$_POST['Name'];
            $fees=$_POST['fees'];
            $description=$_POST['description'];
            $query="insert into package(Package_name,Amount,description)values('$Name','$fees','$description')";
             $result=mysqli_query($con,$query);
            if($result)
            {
              echo "<script>alert('Package added.')</script>";
                echo "<script>window.open('package.php','_self')</script>";
            }
            else
            {
                echo mysqli_error($con);
            }
            } 

//payment method
        if(isset($_POST['pay_submit']))
        {
            $Amount=$_POST['Amount'];
            $customer_id=$_POST['customer_id'];
            $payment_type=$_POST['payment_type'];
            // $customer_name=$_POST['customer_name'];
            $query="insert into Payment(Amount,customer_id,payment_type)values('$Amount','$customer_id','$payment_type')";
             $result=mysqli_query($con,$query);
            if($result)
            {
                echo $customer_id;
               echo "<script>alert('Payment sucessfull.')</script>";
              echo "<script>window.open('payment.php','_self')</script>";
            }
            } 
//client payment method
            if(isset($_POST['pay_submit_cust']))
            {
                $Amount=  $_SESSION['custmer_amount'];
                $customer_id=  $_SESSION['id'];
                $payment_type="card";
                $card_number=$_POST['card_number'];
                $cvv=$_POST['cvv'];
                $expiry_date=$_POST['expiry_date'];
                $query="insert into Payment(Amount,customer_id,payment_type,card_number,cvv,expiry_date)
                values('$Amount','$customer_id','$payment_type','$card_number','$cvv','$expiry_date')";
                 $result=mysqli_query($con,$query);
                if($result)
                {
                    echo $customer_id;
                   echo "<script>alert('Payment sucessfull.')</script>";
                  echo "<script>window.open('client/client-payment.php','_self')</script>";
                }
                } 


 function get_member_details(){
    global $con;
    $query="select * from members";
    $member_details=mysqli_query($con,$query);
    while ($row=mysqli_fetch_array($member_details)){
         $fname=$row ['fname'];
    $lname=$row['lname'];
    $email=$row['email'];
    $contact=$row['contact'];
    $member_trainer=$row['member_trainer'];
    $query2="select * from trainer where Trainer_id=".$member_trainer;
    $trainer=mysqli_query($con,$query2);
    $trainer_name=mysqli_fetch_array($trainer);
      echo '<tr>
          <td>'.$fname.'</td>
        <td>'.$lname.'</td>
            <td>'.$email.'</td>
            <td>'.$contact.'</td>
          <td>'.$trainer_name['Name'].'</td>
          <td><a href="includes/deletemember.php?deleteid='.$row['member_id'].'" class="btn btn-primary">Delete</a></td>
        </tr>';
    }
}

function get_customer_package(){
    global $con;
 
    $query="select * from Package";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Package_id=$row ['Package_id'];
        $Package_name=$row['Package_name'];
        $Amount=$row['Amount'];
        echo '<tr>
        <td>'.$row ['Package_id'].'</td>
        <td>'.$Package_name.'</td>
            <td>'.$Amount.' -Rs</td>
            <td><a href="update-package.php?updateid='.$Package_id.'" class="btn btn-primary btn-sm">Proceed</a></td>
        </tr>';
    }
}

function get_package(){
    global $con;
    $query="select * from Package";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Package_id=$row ['Package_id'];
        $Package_name=$row['Package_name'];
        $Amount=$row['Amount'];
        echo '<tr>
        <td>'.$row ['Package_id'].'</td>
        <td>'.$Package_name.'</td>
            <td>'.$Amount.'</td>
            <td><a href="includes/deletepackage.php?deleteid='.$Package_id.'" class="btn btn-primary">Delete</a></td>
        </tr>';
    }
}
function get_price(){
    global $con;
    $query="select package from members where member_id=".$_SESSION['id'];
    $member_details=mysqli_query($con,$query);
    if ($row=mysqli_fetch_array($member_details)){
         $package=$row ['package'];
    }
    $query="select * from Package where package_id=".$package;
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Package_id=$row ['Package_id'];
        $Package_name=$row['Package_name'];
        $Amount=$row['Amount'];
        $_SESSION['custmer_amount']=$Amount;
        echo '<h4>
         <span>Package:  '.$Package_name.'</b><br>
            <p> Final Price '.$Amount.'/- Rs</p>
         </h4>';
    }
}

function get_package_name(){
    global $con;
    $query="select package from members where member_id=".$_SESSION['id'];
    $member_details=mysqli_query($con,$query);
    if ($row=mysqli_fetch_array($member_details)){
         $package=$row ['package'];
    }
    $query="select * from Package where package_id=".$package;
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Package_id=$row ['Package_id'];
        $Package_name=$row['Package_name'];
        $Amount=$row['Amount'];
        $_SESSION['custmer_amount']=$Amount;
        echo '<h4>
         <span>Package:  '.$Package_name.'</b><br>
          </h4>';
    }
}
function get_trainer(){
    global $con;
    $query="select * from Trainer";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Trainer_id=$row ['Trainer_id'];
        $Name=$row['Name'];
        $phone=$row['phone'];
        $specialist=$row['specialist'];
        $sallary=$row['sallary'];
        echo'<tr>
        <td>'.$Trainer_id.'</td>
        <td>'.$Name.'</td>
            <td>'.$phone.'</td>
            <td>'.$specialist.'</td>
            <td>'.$sallary.' /-Rs</td>
            <td><a href="includes/deletetrainer.php?deleteid='.$row['Trainer_id'].'" class="btn btn-primary">Delete</a></td>
        </tr>';

    }
}

//customer trainer page data
function get_customer_trainer(){
    global $con;
    $query="select * from Trainer";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Trainer_id=$row ['Trainer_id'];
        $Name=$row['Name'];
        $phone=$row['phone'];
        $specialist=$row['specialist'];
        echo'<tr>
        <td>'.$Trainer_id.'</td>
        <td>'.$Name.'</td>
            <td>'.$phone.'</td>
            <td>'.$specialist.'</td>
            <td><a href="update-trainer.php?updateid='. $Trainer_id.'" class="btn btn-primary btn-sm">Proceed</a></td>
        </tr>';

    }
}


function get_payment(){
    global $con;
    $query="select * from Payment";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Payment_id=$row ['Payment_id'];
        $Amount=$row['Amount'];
        $payment_type=$row['payment_type'];
        $customer_id=$row['customer_id'];
        /*$customer_name=$row['customer_name'];*/
        
        echo"<tr>
        <td>$Payment_id</td>
        <td>$Amount</td>
        <td>$payment_type</td>
        <td>$customer_id</td>
        
            </tr>";

    }
}

function get_customer_payment(){
    global $con;
    $query="select * from Payment where customer_id=".$_SESSION['id'];
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Payment_id=$row ['Payment_id'];
        $Amount=$row['Amount'];
        $payment_type=$row['payment_type'];
        $customer_id=$row['customer_id'];
        /*$customer_name=$row['customer_name'];*/
        
        echo"<tr>
        <td>$Payment_id</td>
        <td>$Amount /-Rs</td>
        <td>$payment_type</td>
            </tr>";

    }
}







?>



