<?php
  include('session.php');
?>
<DOCTYPE! html>
<html>
<head> 
  <link rel="stylesheet" href="css2.css"/>
  <h1>
<center>
Indian Institute Of Information Technology,</center>
<center>Design And Manufacturing, Kurnool</center>
<center>
C/O IIITDM Kancheepuram</center>
<center>
Chennai,India</center>
</center>
</h1>
<hr width="80%">
</head>
<body>
   <marquee   behavior="scroll" direction="left"  scrolldelay="60"  onmouseover="this.stop();" onmouseout="this.start();">
<h2><strong>Enrolment form for Odd Semester 2017-18 (Jan-May 2018)</strong></h2>
</marquee>
<center>
</center>
<br/>
<p1>
  Student`s Name: 
  <input type="name" name="name" placeholder="Enter name"/>
  </p1>
  &nbsp; 
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
   Category-gen:
   <select>
  <option value="GEN">General</option>
  <option value="OBC">OBC-NCL</option>
  <option value="SC">SC</option>
  <option value="ST">ST</option>
  <option value="PH">PH</option>
  </select>
  <br/> <br/>
  
  Roll Number :
  <input type="name" Roll Number="Roll Number" placeholder="Enter Roll Number"/>
  &nbsp;
   Religion:
   <input type="name" placeholder="Hindhu,Muslim,Christian,Sikh,Jain,Buddhist"/> <br/><br/>
   Semester :
   <input style=" width:10%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 2px solid green;
    box-sizing: border-box;" type="number" Semester="number" min="1" max="8" placeholder="sem"/>
   &nbsp;
    Branch :
 <select>
  <option value="COE">COE</option>
  <option value="EDM">EDM</option>
  <option value="MDM">MDM</option>
  <option value="EDS">EDS</option>
</select>
      &nbsp;
      Date & Year of entry in the institute:
      <input type ="date" name= "Joining date" placeholder="Pick a Date"/>
      <br/><br/>
      
<form>
Sex :
  <select>
  <option value="MALE">MALE</option>
  <option value="FEMALE">FEMALE</option>
  <option value="OTHER">OTHER</option>
</select>
  &nbsp;
 Blood Group :
 <select>
  <option value="A+ve">A+ve</option>
  <option value="A-ve">A-ve</option>
  <option value="B+ve">B+ve</option>
  <option value="B-ve">B-ve</option>
  <option value="AB+VE">AB+ve</option>
  <option value="AB-ve">AB-ve</option>
  <option value="O+ve">O+ve</option>
  <option value="O-ve">O-ve</option>
</select>
 &nbsp;
 Date Of Birth :
 <input type="date"/>
 &nbsp;
 <br/>
 Hostel Name:
 <input type="name" placeholder="Ashoka,Aswatha,Lotus,Banyan,Jasmine"/>
 &nbsp;
 Room No:
 <input type= "name" placeholder="Room_no"/>
 <br/><br/>
 &nbsp;
 Email-ID :
 <input type= "name" placeholder="Enter email_id"/>
 &nbsp;
 Mobile No :
 
  <input type= "numbers" placeholder="Enter Mobile_number"/>
  <br/><br/>
  Bank Account Number :
  <input type="name" placeholder="Enter Bank_name"/>
  &nbsp;
  Name of the Bank & Branch :
  <input type="name" name = "bank and branch" placeholder="Enter Branch"/>
  
</form>
<srong><hr/></strong>
<br/>
<br/>
Father`s Name:
<input type="name" placeholder="Enter Father's Name"/>
Occupation with design:
<input type="name" placeholder="Enter Father's Occupation"/>
<form  
       action=""method="">
      Address:<br/>
<textarea rows="10" cols="70" placeholder="Enter Address" style="border:2px solid green;"></textarea></br>
City:
<input type="name" placeholder="Enter City"/>
State:
<input type="name" placeholder="Enter State"/>
PIN Code:
<input type="numbers" placeholder="Enter Pin_code"/>
<br/>
<br/>
Email ID:
<input type="email" name="email" placeholder="Enter Father's Email_id"/>
Landline NO:
<input type="numbers" placeholder="Enter House lanline number"/>
Mobile No:
<input type="numbers" placeholder="Enter Father's mobile number"/>
<hr/>
<br/>
<br/>
Local Guardian Name:
<input type="name" placeholder="Enter local Guardian's name if any"/>
Occupation with design:
<input type="name" placeholder="Enter local Guardian's Occupation if any"/>
<br/>
<br/>
Local Address:<br/>
<textarea rows="10" cols="70" placeholder="Enter local Guardian's Address if any" style="border:2px solid green;"></textarea></br>
<br/>
<br/>
Email ID:
<input type="email" name="email" placeholder="Enter local Guardian's email_id if any" />
Landline NO:
<input type="numbers" placeholder="Enter local Guardian's Address if any"/>
Mobile No:
<input type="numbers" placeholder="Enter local Guardian's mobile no if any"/>
<hr/>
<br/><br/>
HOSTEL OFFICE
<h3>
<u>Enter the Fee Receipt Details</u>
</h3>
UTR No:
<input type="name" placeholder="Enter UTR number of Hostel Fee"/>
<br/>
<br/>
Bank Name:
<input type="Name" placeholder= "Enter Bank name"/>
<br/>
<br/>
Date:
<input type="date"/>
<br/>
<br/>
Amount:
<input type="numbers" placeholder="Enter Amount"/>
<br/><br/>
ACCOUNTS SECTION
<h3>
<u>Enter the Fee Receipt Details</u>
</h3>
UTR No:
<input type="name" placeholder="Enter UTR number of Tution Fee"/>
<br/>
<br/>
Bank Name:
<input type="Name" placeholder="Enter Bank Name"/>
<br/>
<br/>
Date:
<input type="date" />
<br/>
<br/>
Amount:
<input type="numbers" placeholder="Enter Amount"/><br/>
Upload a photo:<br/>
<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
<input name="userfile" type="file" />
<hr/>
<br/>
<button class="button button_shadow" type="RESET">RESET </button>
<center><button class="button button_shadow" type="submit">SUBMIT </button></center>
<button type="button" onclick="location.href='timeline.html'" style=" float:right; position:relative; bottom:120px;" class="button button_shadow" >HOME</button>

<hr/>
<h2><center>NO DUES REPORT TO BE OBTAINED</center> </h2>
      
  
</html>

