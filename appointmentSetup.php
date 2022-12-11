: 10px;<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Layout</title>
    <style>
      html {
        font-family: sans-serif;
        background-color: hsl(0,5%,95%);
        font-size: 20px;
        height: 100%;
      }
      body {
        height: 100%;
      }
      #nav {
        display: grid;
        position: fixed;
        grid-template-rows: auto auto;
        width: 100%;

        height: auto;
        margin: -8px -8px 0px -8px;
        padding: 10px 20px 0px 20px;
        background-color: white;
        border-style: solid;
        border-width: 0px 0px 2px 0px;
        border-color: hsl(0,5%,100%);
        box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
        font-size: 18px;
        opacity: 99%;
      }
      #firstLine {
        display: grid;
        grid-template-columns: 15% 50% 35%;
      }

      #firstLine form {
        margin-top: auto;
        margin-bottom: auto;
      }

      #firstLine nav {
        padding-top: auto;
        padding-bottom: auto;
        text-align: center;
      }

      #firstLine select, input {
        background-color: hsl(0,5%,95%);
        border-style: solid;
        border-radius: 5px;
        margin-left: 10px;
        margin-right: 10px;
      }
      #firstLine input{
        width: 55%;
        height:30px;
      }
      #firstLine select {
        width:30%;
        height:35px;
      }

      #logo {
        width: 100px;
        width-max: 100%;
        height: 51px;
        object-fit: contain;
        margin-top: auto;
        margin-bottom: auto;
      }
      #navbar {
        width: 100%;
        height: 100%;
        overflow: auto;
        padding: auto;
        margin-top: auto;
        margin-bottom: auto;
      }
      #navContent {
        display: grid;
        grid-template-columns: auto auto auto auto;
      }

      #navbar ul {
        list-style-type: none;
        margin: 0;
        padding-top: auto;
        padding-bottom: auto;
        overflow: hidden;
      }

      #navbar ul li {
        float: left;
        padding-left: auto;
        padding-right: auto;
      }

      li a, .dropbtn {
        display: inline-block;
        color: black;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
      }

      li a:hover, .dropdown:hover .dropbtn {
        color: red;
      }

      li.dropdown {
        display: inline-block;
      }

      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
      }

      .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
      }

      .dropdown-content a:hover {
        background-color: #f1f1f1;
        color: blue;
      }

      .dropdown:hover .dropdown-content {
        display: block;
      }

      .container {
        display: grid;
        grid-template-columns: auto auto;
        margin: auto;
      }
      .myButton {
        display: inline-block;
        padding: 15px 15px;
        margin-left: auto;
        margin-right: auto;
        background-color: hsl(150, 60%, 60%);
        border-style: solid;
        border-width: 2px;
        border-radius: 10px;
        border-color: hsl(150, 70%, 50%);
        font-size: 20px;
        text-align: center;
        cursor: pointer;
        color: #34515e;
      }
      .myButton:hover {
        background-color: hsl(150, 70%, 50%);
        border-color: hsl(150, 70%, 50%);
        font-size: 22px;
        padding: 13px 13px;
      }

      .list {
        display: grid;
        grid-template-columns: 55% 45%;
        padding: 10px 20px;
      }
      .list div {
        margin: 10px 30px;
      }
      
      .picture {
        width: 400px;
        width-max: 100%;
        height: auto;
        padding: 20px;
        display: block;
        margin-left: auto;
        margin-right: auto;
      }

      #pageBody {
        margin-left: 10%;
        margin-right: 10%;
        padding: 90px 20px 10px 20px;
      }
      #contact {
        margin-left: 15px;
        margin-right: 15px;
      }
      footer {
        margin-left: 15%;
        margin-right: 15%;
      }
      .end {
        display: grid;
        margin: 0px -18px;
        grid-template-columns: 30% 40% 30%;
        border-width: 1px 0px 0px 0px;
        padding: 5px;
        border-style: solid;
      }
      .end div {
        margin: 5px 10px;
      }
      
      #setUp {
        background-color: white;
        padding: 20px 25px;
        border-width: 1px 0px 0px 0px;
        border-style: solid;
        border-color: white;
        border-radius: 15px;
      }
      .content {
        display: grid;
        grid-template-columns: 50% 50%;
      }
      .content div select {
        width: 90%;
        margin-top: 15px;
        margin-bottom: 5px;
        margin-left: auto;
        margin-right: auto;
        height: 30px;
      }
      .content div input {
        margin: 10px 0px;
        background-color: white;
        width: 70%;
        height: 30px;
        padding-left: 10px;
      }
      .box {
        width: 50px;
        height: 30px;
        margin-top: 10px;
        margin-bottom: 5px;
        margin-left: 5px;
        margin-right: 5px;
        border: none;
        cursor: pointer;
      }
      #symptoms {
        width: 90%;
        margin-top: 10px;
        margin-left: 20px;
        margin-right: 20px;
        padding: 5px;
        height: 100px;
      }
      
      .btn {
        width: 120px;
        height: 60px;
        font-size: 20px;
        margin-top: 20px;
        margin-bottom: 10px;
        
        margin-left: auto;
        margin-right: auto;
        
        test-align: center;
        padding-left: auto;
        padding-right: auto;
        color: #fff;
        background-color: #337ab7;
        border-style: solid;
        border-color: #337ab7;
        border-radius: 10px;
        cursor: pointer;
      }
      
      @media only screen and (max-height: 500px) {

      }
      @media only screen and (max-height: 400px) {

      }
      @media only screen and (max-width: 1250px) {
        .list {
          display: flex;
          flex-direction: column; 
        }
      }
      @media only screen and (max-width: 800px) {
        html {
          font-size: 15px;
        }
        #nav {
          font-size: 15px;
        }
        #firstLine input{
          font-size: 15px;
          width: auto;
          max-width: 50%;
        }
        #firstLine select {
          font-size: 15px;
          max-width: 65px;
          width: auto;
        }
        #logo {
          height: 34px;
          width: 70px;
        }
        li a, .dropbtn {
          padding: 10px 12px;
        }
        .myButton {
          font-size: 15px;
        }
        .myButton:hover {
          font-size: 17px;
        }
        .picture {
          width: 180px;
        }
      }
      @media only screen and (max-width: 550px) {
        html {
          font-size: 10px;
        }
        #nav {
          font-size: 12px;
        }
        #firstLine input{
          font-size: 12px;
          max-width: 60%;
        }
        #firstLine select {
          font-size: 12px;
          max-width: 30px;
        }
        #logo {
          height: 50px;
          width: 50px;
        }
        #introduce {
          font-size: 15px;
        }
        .myButton {
          font-size: 12px;
        }
        .myButton:hover {
          font-size: 14px;
        }
        .picture {
          width: 100px;
        }
      }
  </style>
  </head>

  <body>
    <div id="nav" class="bar">
      <div id="firstLine">
        <a><img id="logo" src="https://png.pngtree.com/png-clipart/20190604/original/pngtree-creative-company-logo-png-image_1197025.jpg"
   alt="logo.png"></a>
        <form>
          <select name="local">
            <option value="1">Ho Chi Minh</option>
            <option value="2">Ha Noi</option>
            <option value="3">Hai Phong</option>
            <option value="4">Da Nang</option>
          </select>
          <input type="text">
        </form>
        <nav id="navbar">
        <ul>
          <li><a href="">Request Meeting</a></li>
          <li><a href="/auth/login.php">Login</a></li>
        </ul>
      </nav>
      </div>
      <nav id="navbar">
        <ul id="navContent">
          <li class="dropdown">
            <a href="#" class="dropbtn">Key medical specialties</a>
            <div class="dropdown-content">
              <a href="#">Family Medicine</a>
              <a href="#">Obstetrics, Gynecology, and Women's Health</a>
              <a href="#">Cardiology</a>
              <a href="#">Psychiatry</a>
              <a href="#">Gastroenterology</a>
              <a href="#">Internal Medicine</a>
              <a href="#">Neurology</a>
            </div>
          </li>
          <li><a href="#">Doctor list</a></li>
          <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Service pack</a>
            <div class="dropdown-content">
              <a href="#">General health check</a>
              <a href="#">Insurance</a>
              <a href="#">Other service packs</a>
            </div>
          </li>
          <li><a href="#">Guide</a></li>
        </ul>
      </nav>
    </div>
    
    <div id="pageBody">
      <h1>Set up an appointment</h1>
      <form id="setUp">
        <div id="step">
          <h2>Fill medical information</h2>
          <hr>
          <div class="content">
            <div>
              <select name="facility" class="option">
                <option value="0">Choose a medical facility</option>
                <option value="1">Ho Chi Minh Hospital</option>
                <option value="2">Ha Noi Hospital</option>
                <option value="3">Hai Phong Hospital</option>
                <option value="4">Da Nang Hospital</option>
              </select><br>
              <select name="specialty"class="option">
                <option value="0">Choose a medical specialty</option>
                <option value="1">Family Medicine</option>
                <option value="2">Obstetrics, Gynecology, and Women's Health</option>
                <option value="3">Cardiology</option>
                <option value="4">Psychiatry</option>
                <option value="5">Gastroenterology</option>
                <option value="6">Internal Medicine</option>
                <option value="7">Neurology</option>
              </select><br>
              <div id="chooseDoctor">
                <select name="doctor"class="option">
                <option value="0">Choose the doctor you want to see</option>
                <option value="1">Doctor 1</option>
                <option value="2">Doctor 2</option>
                <option value="3">Doctor 3</option>
              </select>
              </div>
            </div>

            <div>
              <h3>Appointment Time</h3>
              <label>Appointment Date</label><br>
              <input type="date" name="appTime">
              <br>
              <label>Appointment Hour</label>
              <div class="boxTime">
                <button class="box">8:00</button>
                <button class="box">8:30</button>
                <button class="box">9:00</button>
                <button class="box">9:30</button>
                <button class="box">10:00</button>
                <button class="box">10:30</button>
                <button class="box">11:00</button>
                <button class="box">13:00</button>
                <button class="box">13:30</button>
                <button class="box">14:00</button>
                <button class="box">14:30</button>
                <button class="box">15:00</button>
                <button class="box">15:30</button>
                <button class="box">16:00</button>
              </div>
            </div>
          </div>
          
          <hr>
          <div>
            <label for="details">Describe your symptoms and needs:</label><br>
            <textarea name="details" id="symptoms"></textarea><br>
            <div style="margin-left: auto;margin-right:auto;display:grid;">
                <button type="submit" class="btn">Submit</button>
            </div>
          </div>
        </div>
      </form>
      
    </div>
    
    <div id="contact">
      <footer id="footer">
       <hr>
       <p style="text-align: center;">&copy; Copyright 2022 Website. All rights reserved</p>
        <p style="text-align: center;">All information on the website is for reference purposes only, and it is recommended that customers do not apply it arbitrarily.</p>
      </footer>
      <div class="end">
        <div>
          <p>Medical Search and Arrange Website</p>
        </div>
        <div>
          <p>Telephone number: 0961551910</p>
          <p>Email: company@gmail.com</p>
        </div>
        <div>
          <p>Address: Ho Chi Minh City. Vietnam</p>
        </div>
      </div>
    </div>
  </body>
  <script>
    
  </script>
</html>