<!DOCTYPE html>
<html>
<head>
  <title>Form Handler</title>
 
</head>
<body>
 
  <h2>Registration Form</h2>
 
<form onsubmit=" handlesubmit()">
<label> Name: </label>
<input type="text" id="name" />
 
<label> ID: </label>
<input type="text" id="studentid" />
 
<label> Age: </label>
<input type="number" id="age" />
 
<Label> Department: </Label>
<select id= "Department">
<option value=""> -- Select the Department -- </option>
<option value="CSE"> -- CSE -- </option>
<option value="EEE"> -- EEE -- </option>
<option value="BBA"> -- BBA -- </option>
<option value="IPE"> -- IPE -- </option>
</select>
 
<button type="submit"> Submit </button>
 
</form>
 
<script>
 
function handlesubmit()
{
var name = document.getElementById("name").value;
var id = document.getElementById("studentid").value;
var age = document.getElementById("age").value;
var department = document.getElementById("Department").value;
 
//Validation Input
 
if (name === "" || age ==="" || id === "" || department ==="")
   { alert ("Please Fill the Form");
return false;
   }
 
if (!/^\d{5}$/.test(id))
   { alert ("Id must be 5 digit");
    return false;
   }
 
 
 
 
alert("Registration Complete \n " +
 
"Name:" +name + "\n" +
"ID: " + id + "\n" +
"Age:" +age + "\n" +
"Department: " + department + "\n" );    
 
 
 
}
</script>
 
</body>
</html>