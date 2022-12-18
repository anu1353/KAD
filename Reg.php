<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="rstyle.css">
    </head>
    <body>
    <form id="reg" action="result.php" method="post">
    <h1 align="center">Registration Form</h1>
    <label for="name">Name</label>
    <input id="name" type="text" name="name" placeholder="Enter Your Name" required>
    <br><br>

    <label for="age">DOB</label>
    <input id="age" type="date" name="dob">
    <br><br>

    <label for="gender">Gender</label>
    <input type="radio" name="gender" value="1">Male</input>
      <input type="radio" name="gender" value="2">Female</input>
      <input type="radio" name="gender" value="3">Others</input>
    <br><br>

    <label for="email">Email</label>
    <input id="email" type="email"  name="email" placeholder="Enter Your Email" required>
    <br><br>

    <label for="number">Phone Number</label>
    <input id="number" type="number"  name="number"><br><br>

    <label for="address">Address</label>
    <input id="address" type="text"  name="address"><br><br>


    <label for="exp">Experience</label>
        <select id="dropdown"name="experience" >
          <option value="Begin">Beginner</option>
          <option value="3yr">1-3 yrs</option>
          <option value="5yr">3-5 yrs</option>
          <option value="ab5">Above 5 yrs</option>
        </select><br><br>

      
    <label for="loc">Location</label><br>
      <input type="checkbox" name="loc" value="1">Villivakkam</input>
      <br>
      <input type="checkbox" name="loc" value="2">Anna Nagar</input>
      <br>
      <input type="checkbox" name="loc" value="3">Arumbakkam</input>
      <br><br>
      
    <p>About Yourself</p>  
    <textarea id="about" rows="2" cols="40" name="about"></textarea>
      <br><br>
      <input id="submit" type="Submit"  value="Submit">
      <input id="reset" type="Reset" value="Reset">
      </form>
    </body>
    </html>