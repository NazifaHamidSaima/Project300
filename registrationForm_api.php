<?php
          // Parameters for database connection
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "thesisrepositoryplatform";
          // Create connection with the parameters
          $conn = new mysqli($servername, $username, $password, $dbname);


          // Checking the connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }



            // Retrieve user input from the form
            $full_name = $_POST['full_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $mu_student_id = $_POST['mu_student_id'];
            $phone_number = $_POST['phone_number'];
            $batch = $_POST['batch'];
            $department = $_POST['department'];



            // Prepare SQL query to insert user data into the 'users' table
              $sql = "INSERT INTO users (full_name, email, password, mu_student_id, phone_number, batch, department) VALUES ('$full_name', '$email', '$password', '$mu_student_id', '$phone_number', '$batch', '$department')";






// Execute SQL query
          if ($conn->query($sql) === TRUE) {
              echo "New record created successfully";
          } else {
              echo "Error: " . $sql . "<br>". $conn->error;
          }




          // Close database connection
          $conn->close();
          ?>





