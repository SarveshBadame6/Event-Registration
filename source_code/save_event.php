<?php

include "connect.php";


$student_name = $_POST['student_name'];
$roll_no = $_POST['roll_no'];
$department = $_POST['department'];
$event_name = $_POST['event_name'];
$team_size = $_POST['team_size'];
$email = $_POST['email'];
$phone = $_POST['phone'];


$sql = "INSERT INTO college_events
        (student_name, roll_no, department, event_name, team_size, email, phone)
        VALUES (?, ?, ?, ?, ?, ?, ?)";


$stmt = mysqli_prepare($conn, $sql);


if (!$stmt) {

    die("Error preparing query: " . mysqli_error($conn));

}


mysqli_stmt_bind_param(
    $stmt,
    "ssssiss",
    $student_name,
    $roll_no,
    $department,
    $event_name,
    $team_size,
    $email,
    $phone
);


if (mysqli_stmt_execute($stmt)) {

    $new_id = mysqli_insert_id($conn);

?>

<!DOCTYPE html>
<html>

<head>

    <title>Registration Successful</title>

    <link rel="stylesheet" href="style.css?v=3">

</head>

<body>


<!-- HEADER -->

<div class="header">

    <h1>Campus Event Registration System</h1>

    <p>College Event Registration Portal</p>

</div>


<!-- NAVIGATION -->

<div class="navbar">

    <div class="nav-content">

        <a href="index.php">Home</a>

        <a href="event.php">Register</a>

        <a href="view.php">View Registrations</a>

        <a href="search.php">Search Events</a>

    </div>

</div>


<!-- MAIN -->

<div class="container">


    <div class="success-card">


        <div class="success-icon">
            ✓
        </div>


        <h2>
            Registration Successful!
        </h2>


        <p>
            Your event registration has been saved successfully.
        </p>


        <div class="details-table">

            <table>

                <tr>
                    <th>Field</th>
                    <th>Details</th>
                </tr>

                <tr>
                    <td>Registration ID</td>
                    <td>
                        <?php echo htmlspecialchars($new_id); ?>
                    </td>
                </tr>

                <tr>
                    <td>Student Name</td>
                    <td>
                        <?php echo htmlspecialchars($student_name); ?>
                    </td>
                </tr>

                <tr>
                    <td>Roll No</td>
                    <td>
                        <?php echo htmlspecialchars($roll_no); ?>
                    </td>
                </tr>

                <tr>
                    <td>Department</td>
                    <td>
                        <?php echo htmlspecialchars($department); ?>
                    </td>
                </tr>

                <tr>
                    <td>Event</td>
                    <td>
                        <?php echo htmlspecialchars($event_name); ?>
                    </td>
                </tr>

                <tr>
                    <td>Team Size</td>
                    <td>
                        <?php echo htmlspecialchars($team_size); ?>
                    </td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td>
                        <?php echo htmlspecialchars($email); ?>
                    </td>
                </tr>

                <tr>
                    <td>Phone</td>
                    <td>
                        <?php echo htmlspecialchars($phone); ?>
                    </td>
                </tr>

            </table>

        </div>


        <br>


        <a href="event.php" class="button">
            Register Another Student
        </a>


        <a href="view.php" class="button button-secondary">
            View All Registrations
        </a>


    </div>

</div>




</body>

</html>


<?php

} else {

    echo "Error: " . mysqli_stmt_error($stmt);

}


mysqli_stmt_close($stmt);

mysqli_close($conn);

?>