 <?php
            // Start session
            session_start();
        
            // Check if user is logged in, if not redirect to login page
            if (!isset($_SESSION['email'])) {
                header("Location: index.html");
                exit();
            }
        
            // Retrieve user details from session
            $email = $_SESSION['email'];
            $full_name = $_SESSION['full_name'];
            $mu_student_id = $_SESSION['mu_student_id'];
            $phone_number = $_SESSION['phone_number'];
            $batch = $_SESSION['batch'];
            $department = $_SESSION['Department'];
            ?>
        

        <!DOCTYPE html>
          <html lang="en">
          <head>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>Profile</title>
              <link rel="stylesheet" href="profile.css">
          </head>
          <body>
              <div class="dashboard-container">
                  <h2>Profile</h2>
                  <div class="details">
                      <p><strong>Full Name:</strong> <?php echo $full_name; ?></p>
                      <p><strong>Email:</strong> <?php echo $email; ?></p>
                      <p><strong>MU Registration:</strong> <?php echo $mu_student_id; ?></p>
                      <p><strong>Mobile:</strong> <?php echo $phone_number; ?></p>
                      <p><strong>Batch:</strong> <?php echo $batch; ?></p>
                      <p><strong>Department:</strong> <?php echo $Department; ?></p>
                  </div>
                  <a href="http://localhost/logout.php" class="logout-btn">Logout</a>
              </div>
          </body>
          </html>