<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="Description" content=".env database file creator" />
      <link src="styles.css">
      <title>.env database file creator</title>
</head>
<body>
      
      <div class="form-container">
            <form method="POST" action="submit-form.php">
            <h1>.env file maker</h1>
                  <label for="project_name">Project Name:</label>
                  <input type="text" name="project_name" id="project_name" required>

                  <label for="db_name">Database Name:</label>
                  <input type="text" name="db_name" id="db_name" required>

                  <label for="db_host">Database Host:</label>
                  <input type="text" name="db_host" id="db_host" required>

                  <label for="db_user">Database User:</label>
                  <input type="text" name="db_user" id="db_user" required>

                  <label for="db_password">Database Password:</label>
                  <input type="password" name="db_password" id="db_password" required>

                  <button type="submit">Submit</button>
                  <h2>Makes a file (project).env</h2>
            </form>
      </div>
</body>
</html>
