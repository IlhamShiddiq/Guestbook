<?php
	// Baris connect ke database
	include "connect.php";

	$date = date("l, d F Y");
	$periksatanggal = mysqli_query($conn, "SELECT * FROM dateevent");
	$tanggal = mysqli_num_rows($periksatanggal);
	if($tanggal != 0){
		$call = mysqli_query($conn, 'SELECT dates FROM dateevent');
		$row = mysqli_fetch_array($call);
		$dayi = date('l, d F Y', strtotime("+0 days", strtotime($row["dates"])));
		$dayii = date('l, d F Y', strtotime("+1 days", strtotime($dayi)));
		$dayiii = date('l, d F Y', strtotime("+2 days", strtotime($dayi)));
		if($date==$dayi){$harike="1";}
		else if($date==$dayii){$harike="2";}
		else if($date==$dayiii){$harike="3";}
		else{$harike = 0;}
	}

	// Baris insert value from table
    if(isset($_POST["submit"])) {
        $name = $_POST["nameField"];
		$status = $_POST["statusComboBox"];
		date_default_timezone_set('Asia/Jakarta');
        $datetimee = date("l, d F Y H : i");
		$perwakilan = $_POST["banyakField"];
		for($i = 0; $i < $perwakilan; $i++){
			$query = mysqli_query ($conn, "INSERT INTO guestlist VALUES('', '$name', '$status', '$datetimee', '$harike')");
		}
	}
	
	// Baris di admin
	$hitungtanggal = mysqli_query($conn, "SELECT * FROM dateevent");
	$totaltanggal = mysqli_num_rows($hitungtanggal);
	if($totaltanggal != 0){
		$call = mysqli_query($conn, 'SELECT dates FROM dateevent');
		$row = mysqli_fetch_array($call);
		$dayi = date('l, d F Y', strtotime("+0 days", strtotime($row["dates"])));
		$dayii = date('l, d F Y', strtotime("+1 days", strtotime($dayi)));
		$dayiii = date('l, d F Y', strtotime("+2 days", strtotime($dayi)));
		$words = "The date has been entered. Don't change the date while the event is going !!";

	} else {
		$dayi = "Unavailable date";
		$dayiii = $dayii = $dayi;
		$words = "The date has not been entered. Please enter the date for the event.";
	}

	if(isset($_POST["submit-date"])) {
		
		if($totaltanggal != 0){
			$call = mysqli_query($conn, 'SELECT dates FROM dateevent');
			$row = mysqli_fetch_array($call);
		} else {
			$dateinput = date($_POST["dateField"]);
			$query = mysqli_query ($conn, "INSERT INTO dateevent VALUES('', '$dateinput')");
		}
	}
	
	// Memunculkan data tabel day 1
	$hitungd1 = mysqli_query($conn, "SELECT * FROM guestlist WHERE day='1'");
	$totald1 = mysqli_num_rows($hitungd1);
	if($totald1!=0){
		$call1 = mysqli_query($conn, 'SELECT nama, status, datetime FROM guestlist WHERE day="1"');
	}

	// Memunculkan data tabel day 2
	$hitungd2 = mysqli_query($conn, "SELECT * FROM guestlist WHERE day='2'");
	$totald2 = mysqli_num_rows($hitungd2);
	if($totald2!=0){
		$call2 = mysqli_query($conn, 'SELECT nama, status, datetime FROM guestlist WHERE day="2"');
	}

	// Memunculkan data tabel day 3
	$hitungd3 = mysqli_query($conn, "SELECT * FROM guestlist WHERE day='3'");
	$totald3 = mysqli_num_rows($hitungd3);
	if($totald3!=0){
		$call3 = mysqli_query($conn, 'SELECT nama, status, datetime FROM guestlist WHERE day="3"');
	}

	if($date == $dayi){
		$jumday1 = $totald1;
		$jumday2 = $jumday3 = "-";
	}
	if($date == $dayii){
		$jumday1 = $totald1;
		$jumday2 = $totald2;
		$jumday3 = "-";
	}
	if($date == $dayiii){
		$jumday1 = $totald1;
		$jumday2 = $totald2;
		$jumday3 = $totald3;
	}
	if($date != $dayi && $date != $dayii && $date != $dayiii){
		$jumday1 = $jumday2 = $jumday3 = "-";
	}
?> 