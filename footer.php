<link rel="stylesheet" href="footer.css">
<footer id="footer">
      <div class='footer-top'>
        <div class='footer-col-brand'>
          <h2 class='brand-name'>Learn with Akshayam 360</h2> 
          <p class='tagline'>
            <span class='curiosity'>where curiosity turns into capability</span>
          </p>

          <div class='icons'>
            <a href="https://www.instagram.com/akshayam_360?igsh=MWV1dGVrZXIwcG9wZw==" target='_blank' >
            <img src="images/instagram.png" alt="instagram" />
            </a>
            <a href="https://www.linkedin.com/school/pkr-arts-college-for-women-alumnae-relations-2023/">
            <img src="images/linkedin.png" alt="linkedin" />
            </a>
            <a href="https://youtube.com/@p.k.r.artscollegeforwomeng9065?si=pEGkFW9eAWkIfIwj">
            <img src="images/youtube.png" alt="youtube" />
            </a>
          </div>
        </div>
        <div class='footer-col'>
          <h3>Quick Links</h3>
          <a href="index.php">Home</a>
          <a href="about.php">About Us</a>
          <a href="#">Courses</a>
        </div>

        <div class='footer-col'>
          <h3>Useful Links</h3>
          <a href="#">Contact Us</a>
          <a href="#">FAQ</a>
        </div>

        <div class='footer-col'>
          <h3>Working Hours</h3>
          <p>9.30AM - 4.00PM</p>
          <p>P.K.R. Arts College for Women, <br />P.B.No.21, 127, Pariyur Road, <br /> Gobichettipalayam - 638 476 Erode District Tamil Nadu.</p>
        </div>
</div>
<div class='footer-bottom'>
  <p>© 2026 Akshayam 360. All rights reserved.</p>
      </div>
</footer>

<script>
        const usedEmails = new Set();
        const usedPhones = new Set();

function openModal() {
  document.getElementById("signupModal").classList.add("show");
}

function closeModal() {
  document.getElementById("signupModal").classList.remove("show");
}


function toggleFields() {
  const role = document.getElementById("role").value;
  document.getElementById("year").style.display = role === "student" ? "block" : "none";
}

function clearErrors(){
  document.querySelectorAll(".error").forEach(e => e.innerText = "");
}

function capitalize(name){
  return name.charAt(0).toUpperCase() + name.slice(1);
}
function openLogin() {
  document.getElementById("signupModal").classList.remove("show");
  document.getElementById("loginModal").classList.add("show");
}

function closeLogin() {
  document.getElementById("loginModal").classList.remove("show");
}

function validateForm() {
clearErrors();
let valid = true;
  const name = document.getElementById("name").value;
  const role = document.getElementById("role").value;
  const year = document.getElementById("year").value;
  const department = document.getElementById("department").value;
  const college = document.getElementById("college").value;
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;
  const phone = document.getElementById("phone").value;

  if (!name.trim()){
    nameError.innerText = "Name is required";
    valid = false;
  } 

  if(!role){
    roleError.innerText = "Please select Student or Faculty";
    valid = false;
  }

  if(role === "student" && !year) {
    yearError.innerText = "Year of study is required";
    return false;
  }

  if(!department){
    departmentError.innerText = "Department required";
    return false;
  }

  if(!college){
    collegeError.innerText = "College required";
    return false;
  }
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if(!email){
    emailError.innerText = "Email Required";
    valid = false;
  }else if(!emailPattern.test(email)){
    emailError.innerText = "Invalid Eamil";
    valid = false;
  }

  const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&#]{6,}$/;

  if(!password){
    passwordError.innerText = "Password required";
    valid = false;
  } else if(!passwordPattern.test(password)){
    passwordError.innerText =  "Min 8 chars, 1 uppercase, 1 lowercase, 1 number, 1 special char";
    valid = false;

  }

  if(!/^\d{10}$/.test(phone)){
    phoneError.innerText = "Phone number must be 10 digits";
    valid = false;
  }

  return valid;
}


function submitForm(event) {
  event.preventDefault();
  if (!validateForm()) return;

  const formData = new FormData(event.target);

  fetch("save.php", {
    method: "POST",
    body: formData
  })
  .then(res => res.json())
  .then(data => {
    if (data.status === "success") {
      successMsg.innerText = "Registration successful 🎉";
      event.target.reset();
      document.getElementById("year").style.display = "none";
    }
    else if (data.status === "email_exists") {
      emailError.innerText = "This email is already registered";
    }
    else if (data.status === "phone_exists") {
      phoneError.innerText = "This phone number is already registered";
    }
    else {
      successMsg.innerText = "Something went wrong ❌";
    }
  })
  .catch(() => {
    successMsg.innerText = "Server error ❌";
  });
}

function loginUser(event){
  event.preventDefault();

  // Clear previous errors
  loginEmailError.innerText = "";
  loginPasswordError.innerText = "";
  loginMsg.innerText = "";

  const email = loginEmail.value.trim();
  const password = loginPassword.value.trim();

  let valid = true;

  // Validation for empty fields
  if (!email) {
    loginEmailError.innerText = "Email is required";
    valid = false;
  } else {
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if(!emailPattern.test(email)) {
      loginEmailError.innerText = "Invalid email format";
      valid = false;
    }
  }

  if (!password) {
    loginPasswordError.innerText = "Password is required";
    valid = false;
  }

  if (!valid) return; // Stop execution if validation fails

  // If validation passes, send fetch request
  fetch("login.php",{
    method:"POST",
    headers:{ "Content-Type":"application/x-www-form-urlencoded" },
    body:`email=${encodeURIComponent(email)}&password=${encodeURIComponent(password)}`
  })
  .then(res => res.json())
  .then(data => {
    if(data.status==="success"){
      loginMsg.style.color="green";
      loginMsg.innerText="Login successful 🎉";
    }
    else if(data.status==="no_user"){
      loginEmailError.innerText="Email not registered";
    }
    else{
      loginPasswordError.innerText="Incorrect password";
    }
  })
  .catch(() => {
    loginMsg.style.color="red";
    loginMsg.innerText="Server error ❌";
  });
}
</script>

</body>
</html>