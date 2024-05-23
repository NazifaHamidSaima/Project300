 <?php
            // Start session
            session_start();
        
            // Parameters for database connection
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "thesisrepositoryplatform";
        
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
        
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

             // Retrieve user input from the form
            $email = $_POST['email'];
            $password = $_POST['password'];


              // Query to check if the email exists in the database
          $sql = "SELECT * FROM users WHERE email='$email'";
          $result = $conn->query($sql);

           if ($result->num_rows > 0) {
              // Email exists, now verify the password
              $row = $result->fetch_assoc();
              if ($password== $row['password']) {
                  // Password is correct, set session variables
                  $_SESSION['email'] = $email;
                  $_SESSION['full_name'] = $row['full_name'];
                  $_SESSION['mu_student_id'] = $row['mu_student_id'];
                  $_SESSION['phone_number'] = $row['phone_number'];
                  $_SESSION['batch'] = $row['batch'];
                  $_SESSION['department'] = $row['Department'];
                  // Redirect to dashboard or any other page
                  header("Location: profile.php");
                  exit();
              } else {
                  // Password is incorrect
                  echo "Invalid password";
              }
          } else {
              // Email doesn't exist
              echo "User not found";
          }


           // Close database connection
          $conn->close();
          ?>


