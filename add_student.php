<?php
   include 'header.php';
   require_once 'controllers/StudentController.php';
   require_once 'controllers/DepartmentController.php';
   $departments = getAllDepartments();
?>
<html>
	<head><title>Student Registration</title></head>
	<body>
			<form  method="post" onsubmit="return student_validation()" action="">
			 <center>
			 <br>
			 <br>
				<table>
					<tr>
						<td>Name:</td>
						<td><input type="text" id="name" name="name"></td>
						<td><span id="err_name" style="color:red;"></span></td>
					</tr>
					<tr>
						<td>DOB:</td>
						<td><input type="date" id="dob" name="dob"></td>
						<td><span id="err_dob" style="color:red;"></td>
					</tr>
					<tr>
					    <td>Department</td>
						<td>
						    <select id="department_id" name="department_id">
				            <option disabled selected>Choose</option>
							<?php
							      foreach($departments as $d){
									  echo "<option value='".$d["did"]."'>".$d["dname"]."</option>";
								  }
							?>
			                </select>
							<td><span id="err_department" style="color:red;"></td>
						</td>
					</tr>
					<tr>
						<td>Credit:</td>
						<td><input type="text" id="credit" name="credit"></td>
						<td><span id="err_credit" style="color:red;"></td>
					</tr>
					<tr>
						<td>CGPA:</td>
						<td><input type="text" id="cgpa" name="cgpa"></td>
						<td><span id="err_cgpa" style="color:red;"></td>
					</tr>
					<tr>
						<td colspan="2" align="right">
							<input type="submit" name="register" value="register">
						</td>
					</tr>
				</table>
			 </center>
			</form>
			<script src="js/validation.js"></script>
	</body>
</html>