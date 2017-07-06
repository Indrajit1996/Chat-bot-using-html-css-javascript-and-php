<html>
  <head>
    <title> Admission for 2017 </title>
    <script type="text/javascript">
      <!--
      function parseDate()
      {
        var current = new Date();
        var newDate = document.getElementById('dat').value;
        var dat = newDate.split('-');
        var diff = current.getFullYear() - dat[0] ;
        if(diff > 15)
        {
          window.alert("Too old to enroll in school");
        }
        if(diff < 5)
        {
          window.alert("Too young to enroll in school");
        }
        document.getElementById("age").value = diff;

      }


      // -->
    </script>


    <!-- Remember to use CSS on everything -->
    <style type="text/css">
    a {font-size: 120px;
        font-weight: bolder;
        font-style: normal;
        color:#ad953e}
    .test {position: relative;
            top:30px;
            left:0px;}
    .buttn {background-color: #ad953e;
    border: none;
    color: black;
    padding: 20px 50px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 9px 5px;
    cursor: pointer;
    font-weight: bolder}
    body {background-color: black}
    label {font-weight: bold;
            color : #ad953e;

  }
    input {text-align: center;
}
    div {text-align:center;
      }
    .buttn:hover {
              background-color: #1793d6; /* Green */
              color: white;
          }
  </style>

  </head>
  <body>
    <center><a href='home.html'>ABC INTERNATIONAL SCHOOL</a></center>
    <center><img class="test" src="Picture_of_Reading_School.jpg" alt='school photo' width=1700px> </img></center></br></br></br>
    <div>
      <form method="post" action="form1.php">
      <label> First Name : <input name="FName" type="text" required/> </label><br/><br/>
      <label> Last Name : <input name="LName" type="text" required/> </label><br/><br/>
      <label> Blood Type : <select name="btype" required>
	  <option>O-</option>
      <option>O+</option>
      <option>A-</option>
      <option>A+</option>
      <option>B-</option>
      <option>B+</option>
      <option>AB-</option>
      <option>AB+</option>
	  </select></label><br/><br/>
      <label> Date of Birth : <input name="dob" id="dat" type="date" required/> </label><br/><br/>
      <label> Age : <input name="Age" onclick="parseDate()" id="age" type="number" required/> </label><br/><br/>
      <label> Grade : <select name="grade" >
      <option>10</option>
      <option>9</option>
      <option>8</option>
      <option>7</option>
      <option>6</option>
      <option>5</option>
      <option>4</option>
      <option>3</option>
      <option>2</option>
      <option>1</option>
    </select>
      </label><br/><br/>
      <input class="buttn" type="submit" value="Submit Application"/>


    </form></div>
    </ul>
  </body>
</html>
