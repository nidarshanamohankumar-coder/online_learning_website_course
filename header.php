<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Andada+Pro:ital,wght@0,400..840;1,400..840&family=Arvo:ital,wght@0,400;0,700;1,400;1,700&family=Bree+Serif&family=Cedarville+Cursive&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Solway:wght@300;400;500;700;800&family=Story+Script&display=swap" rel="stylesheet">    <title>Learn with akshayam_360</title>
    <link rel="stylesheet" href="header.css">
    
</head>
<body>
<header id="header">
  <div>
    <h1>Learn with <br />
      <span class="name">Akshayam 360</span>
    </h1>
  </div>

  <div class="searchbar">
    <input type="text" placeholder="Search Courses.." />
  </div>

  <nav class="menu">
    <a href="index.php">Home</a>
    <a href="course.php">Courses</a>
    <a href="about.php">About</a>
  </nav>

  <div class="ls">
    <button class="logsign" onclick="openModal()">Login / Sign Up</button>
  </div>
</header>




    <!-- Modal -->
<div id="signupModal" class="modal-overlay">
  <div class="modal">

    <div class="modal-header">
      <h2>Sign Up</h2>
      <span class="close-btn" onclick="closeModal()">&times;</span>
    </div>

    <form onsubmit="submitForm(event)">

      <input type="text" id="name" name="user_name" placeholder="Enter your name">
      <span class="error" id="nameError"></span>

      <select id="role" name="role" onchange="toggleFields()">
        <option value="">Select Student / Faculty</option>
        <option value="student">Student</option>
        <option value="faculty">Faculty</option>
      </select>
            <span class="error" id="roleError"></span>

      
      <!-- Student only -->
      <input type="text" id="year" name="year" placeholder="Year of Study">
            <span class="error" id="yearError"></span>


      <!-- Common -->
      <input type="text" id="department" name="department" placeholder="Department">
            <span class="error" id="departmentError"></span>

      <input type="text" id="college" name="college" placeholder="College / Institution">
            <span class="error" id="collegeError"></span>

      <input type="email" id="email" name="email" placeholder="Email">
            <span class="error" id="emailError"></span>

      <input type="password" id="password" name="password" placeholder="Password">
            <span class="error" id="passwordError"></span>

      <input type="text" id="phone" name="phone" placeholder="Phone">
            <span class="error" id="phoneError"></span>


      <button type="submit">Sign Up</button>

      <div class="login">
  <p><span style="letter-spacing:2px;font-weight:bold;font-size:20px">Already have an account?</span>
  <span onclick="openLogin()"><span style="color:green;letter-spacing:2px;font-weight:bold;font-size:20px;cursor:pointer">Log in</span></span>
  </p>
</div>

      <p id="successMsg" style="color: green; text-align:center;"></p>

    </form>

  </div>
</div>

      <!-- Login Modal -->
<div id="loginModal" class="modal-overlay">
  <div class="modal">

    <div class="modal-header">
      <h2>Login</h2>
      <span class="close-btn" onclick="closeLogin()">&times;</span>
    </div>

    <form onsubmit="loginUser(event)">

      <input type="email" id="loginEmail" placeholder="Email">
      <span class="error" id="loginEmailError"></span>

      <input type="password" id="loginPassword" placeholder="Password">
      <span class="error" id="loginPasswordError"></span>

      <button type="submit">Login</button>

      <p id="loginMsg" style="text-align:center;"></p>

    </form>

  </div>
</div>
