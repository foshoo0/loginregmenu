<?php 
session_start();

if(!isset($_SESSION['username'])) {
	header('Location: login.php');
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<form action="compu.php" method="GET">
        <h1>DIWATA PARES</h1>
        <ul>
          <li>Kanin - 10php</li>
          <li>Regular Pares - 70php</li>
          <li>Combo Pares - 80php</li>
        </ul>
        <label for="order" required>Choose your order:</label>
        <select name="order" id="order">
        <option value="kanin" >Kanin</option>
        <option value="Regular_Pares" >Regular Pares</option>
        <option value="Combo_Pares"  >Combo Pares</option>
        </select>
        <br><br>
        <label for="orders">Quatity</label>
        <input type="text" name="hm" required>
        <br><br>
        <label for="money">Cash</label>
        <input type="text" name="cash" required>
        <br><br>
        <input type="submit" value="Submit" name="calc">
      </form>
      
	<a href="logout.php">Logout</a>
</body>
</html>