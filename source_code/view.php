<?php

include "connect.php";


$sql = "SELECT * FROM college_events ORDER BY id DESC";

$result = mysqli_query($conn, $sql);


if (!$result) {

    die("Error: " . mysqli_error($conn));

}

?>

<!DOCTYPE html>
<html>

<head>

    <title>View Registrations</title>

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


    <div class="card">


        <h2 class="page-title">
            Registered Students
        </h2>


        <p class="page-subtitle">
            List of students registered for college events
        </p>


        <div class="table-container">

            <table>

                <tr>

                    <th>ID</th>

                    <th>Student Name</th>

                    <th>Roll No</th>

                    <th>Department</th>

                    <th>Event</th>

                    <th>Team Size</th>

                    <th>Email</th>

                    <th>Phone</th>

                </tr>


                <?php

                if (mysqli_num_rows($result) > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {

                ?>

                <tr>

                    <td>
                        <?php echo htmlspecialchars($row['id']); ?>
                    </td>

                    <td>
                        <?php echo htmlspecialchars($row['student_name']); ?>
                    </td>

                    <td>
                        <?php echo htmlspecialchars($row['roll_no']); ?>
                    </td>

                    <td>
                        <?php echo htmlspecialchars($row['department']); ?>
                    </td>

                    <td>
                        <?php echo htmlspecialchars($row['event_name']); ?>
                    </td>

                    <td>
                        <?php echo htmlspecialchars($row['team_size']); ?>
                    </td>

                    <td>
                        <?php echo htmlspecialchars($row['email']); ?>
                    </td>

                    <td>
                        <?php echo htmlspecialchars($row['phone']); ?>
                    </td>

                </tr>

                <?php

                    }

                } else {

                ?>

                <tr>

                    <td colspan="8">
                        No registrations found.
                    </td>

                </tr>

                <?php

                }

                ?>

            </table>

        </div>


    </div>

</div>



</body>

</html>

<?php

mysqli_close($conn);

?>