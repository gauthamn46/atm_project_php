<?php 
 	session_start();
 	$time=date("H:i:s");
	$date=date("Y/m/d");
	$conn=mysqli_connect('localhost','root','','atm');
	$amt=$_POST['amount'];
	if($amt==0)
	{
		echo '<script language="javascript">';
		echo 'alert("Please Enter a valid amount !!");window.location="atm4bc.php"';
		echo '</script>';	
	}	
	if ($amt%100==0) 
	{
		$sql="select current_balance from current_account where c_id=(select c_id from account_details where acc_no='$_SESSION[db_usr]');";
		$result=mysqli_query($conn,$sql);
		if (mysqli_num_rows($result)>0) 
		{
			while($row=mysqli_fetch_assoc($result)) 
			{
				$t_id=rand(0000000,9999999);
		 		$actamt=$row["current_balance"]+$amt;
		 		$sql1="update current_account set current_balance =$actamt WHERE c_id=(select c_id from account_details where acc_no='$_SESSION[db_usr]')";
		 		$sql2="insert into transaction values('$date','$time',$t_id,'$_SESSION[db_usr]','Current',$amt,$actamt,'Credit')";
		 		mysqli_query($conn,$sql1);
		 		mysqli_query($conn,$sql2);
		 		echo '<script language="javascript">';
				echo 'alert("Thank you for banking with us!!\n\nYour Transaction Number is "+"'.$t_id.'");window.location="index.php"';
				echo '</script>';	
    		}
		}
	}
	else 
	{
	 	echo '<script language="javascript">';
		echo 'alert("Please enter amount in multiples of 100!");window.location="atm4bc.php"';
		echo '</script>';
	} 
 ?>