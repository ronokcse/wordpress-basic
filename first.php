<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

  <form action="first.php" method="post" name="first" id="first" onsubmit="select(); return false ">
  	<table>
  		<tr>
  			 <td>Name:</td>
  			<td>
  				<input type="text" name="name" required="1">
  			</td>
  		</tr>
  		<tr>
  			<td>Gender:</td>
  			<td>
  				<input type="radio" name="gender" value="male">Male
  				<input type="radio" name="gender" value="female">Female
  				<input type="radio" name="gender" value="others">Others
  			</td>
  		</tr>
  		<tr>
  			<td>Department:</td>
  			<td>
  				<input type="checkbox" name="dept" value ="cse">CSE
  				<input type="checkbox"name="dept" value="ice">ICE
  				<input type="checkbox" name="dept" value="EEE">EEE
  			</td>
  		</tr>
  		<tr>
  			<td>Coder:</td>
  			<td>
  				<select name="coder"  required="1">
  					<option value="">Select one</option>
  					<option value="JAVA">Java</option>
  					<option value="PHP">PHP</option>
  					<option value="C#">C#</option>
  				</select>
  			</td>
  		</tr>
  		<tr>
  			<td></td>
  			<td><input type="submit" name="submit">
  			    <input type="reset" name="clear">
			</td>  			    
  		</tr> 
  	</table>
  	
  </form>
</body>
</html>


