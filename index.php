<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100..900&family=Saira+Stencil:wght@100..900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/style.css">
</head>

<body id="vanta-canvas" class="bg-custom-purple">
  <div class="d-flex justify-content-center align-items-center vh-100">
      <div class="card shadow mx-2 card-login">
        <div class="card-body p-4">
           <h5 class="text-center mb-4">LOGIN</h5>
           
           <div id="errorAlert" class="alert alert-danger py-2 text-center d-none" role="alert" style="font-size: 0.85rem;">
              <i class="bi bi-exclamation-triangle-fill me-2"></i>Invalid username/password
           </div>

           <div class="row g-0">
              <div class="col-md-6 d-flex align-items-center justify-content-center position-relative">
                <i class="fa-solid fa-graduation-cap logo-icon"></i>
                <div class="vr d-none d-md-block position-absolute end-0 my-3" style="height: 80%; top: 10%;"></div>
              </div>
              
              <div class="col-md-6 ps-md-4">
                <label for="username" class="form-label">Username</label>
                <input type="text" id="username" class="form-control mb-3">
                
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" class="form-control mb-3"> 

                <div class="text-end">
                    <a href="dashboard.php" id="loginBtn" class="btn bg-purple text-white btn-sm px-4">Login</a>
                </div>
              </div>
           </div>
        </div>
     </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>

  <script>
    // Initialize Vanta Net Background
    VANTA.NET({
      el: "#vanta-canvas",
      mouseControls: true,
      touchControls: true,
      gyroControls: false,
      minHeight: 200.00,
      minWidth: 200.00,
      scale: 1.00,
      scaleMobile: 1.00,
      color: 0x7f5390,
      backgroundColor: 0x4a3460
    })

    // Login Authentication
    document.getElementById('loginBtn').addEventListener('click', function(event) {
        event.preventDefault();

        const validusername = "student";
        const idPassword = "11111";

        const usernameBox = document.getElementById('username');
        const passwordBox = document.getElementById('password');
        const errorAlert = document.getElementById('errorAlert');

        if (usernameBox.value.trim() === validusername && passwordBox.value === idPassword) {
            window.location.href = "dashboard.php"; 
        } else {
            errorAlert.classList.remove('d-none');
            usernameBox.classList.add('is-invalid');
            passwordBox.classList.add('is-invalid');
        }
    });
  </script>
     <footer class="footer-section py-4 mt-auto">
    <div class="container text-center">
        <p class="mb-1 fw-bold text-dark-emphasis">Prepared by: Fatin Zulaika Abd Wahab</p>
        <p class="mb-0 text-muted">&copy; 2026 StudentPortal. All Rights Reserved.</p>
    </div>
    </footer>
</body>
</html>