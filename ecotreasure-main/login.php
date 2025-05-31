<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Eco.Treasure - Login</title>
  
  <style>
    * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: "Poppins", sans-serif;
  }
  
  body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f5f5f5;
  }
  
  .container {
    display: flex;
    width: 900px;
    height: 550px;
    background-color: #f1f5ec;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
    overflow: hidden;
  }
  
  .left {
    flex: 1;
    background-color: #e0f2e9;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0px;
  }
  
  .left img {
    max-width: 100%;
    height: auto;
  }
  
  .right {
    flex: 1;
    padding: 40px;
    display: flex;
    flex-direction: column;
    text-align:center;
    justify-content: center;
  }
  
  .right h2 {
    margin-bottom: 20px;
    color: #333;
  }
  
  .form-group {
    margin-bottom: 10px;
  }
  
  input[type="email"],
  input[type="password"] {
    width: 100%;
    padding: 15px;
    margin: 0.5px;
    border: 1px solid #cccccc;
    border-radius: 8px;
  }
  
  .btn {
    background-color: #134e3a;
    color: white;
    padding: 10px;
    border: none;
    width: 100%;
    border-radius: 8px;
    cursor: pointer;
    margin-top: 15px;
    transition: 0.3s ease;
    font-family: "Poppins", sans-serif;
  }

  .btn :hover {
    background-color:rgb(255, 191, 0); 
    color: #f5f5f5;
  }
  
  .register {
    margin-top: 15px;
    font-size: 0.9em;
  }
  
  .register a {
    color: #d32f2f;
    text-decoration: none;
  }
  
  .logo {
    font-weight: bold;
    margin-bottom: 30px;
    color: #134e3a;
    font-size: 1.7rem;
  }
  
  .logo span {
    color: #fbc02d;
  }
  
  </style>
</head>
<body>
  <div class="container">
    <div class="left">
      <img src="image/login2.png" alt="Ilustrasi Daur Ulang" />
    </div>
    <div class="right">
      <div class="logo">ECO.TREA<span>SURE</span></div>
      <h2>SELAMAT DATANG!</h2>
        <form action="progres/login_proses.php" method="post">
      <input type="email" name="email" placeholder="Email" required><br><br>
      <input type="password" name="password" placeholder="Password" required><br><br>
      <button type="submit" class="btn">MASUK</button>
  </form>
    </div>
  </div>
  <script src="assets/js/login.js"></script>
</body>
</html>


