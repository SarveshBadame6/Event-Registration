<?php

include "connect.php";


$search = "";


if (isset($_GET['event'])) {

    $search = trim($_GET['event']);

}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Search Events</title>

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


    <div class="search-card">


        <h2 class="page-title">
            Search Event Registrations
        </h2>


        <p class="page-subtitle">
            Search registered students by event name
        </p>


        <form method="GET">


            <div class="form-group">

                <label for="event">
                    Event Name
                </label>

                <input
                    type="text"
                    id="event"
                    name="event"
                    value="<?php echo htmlspecialchars($search); ?>"
                    placeholder="Example: Hackathon"
                    required
                >

            </div>


            <button
                type="submit"
                class="submit-button search-button"
            >
                Search Event
            </button>


        </form>


    </div>


<?php

if ($search != "") {


    $search_value = "%" . $search . "%";


    $stmt = mysqli_prepare(
        $conn,
        "SELECT * FROM college_events
         WHERE event_name LIKE ?
         ORDER BY id DESC"
    );


    mysqli_stmt_bind_param(
        $stmt,
        "s",
        $search_value
    );


    mysqli_stmt_execute($stmt);


    $result = mysqli_stmt_get_result($stmt);

?>


    <div class="card">


        <h2 class="result-heading">
            Search Results
        </h2>


        <p class="page-subtitle">
            Results for:
            <strong>
                <?php echo htmlspecialchars($search); ?>
            </strong>
        </p>


        <?php

        if (mysqli_num_rows($result) > 0) {

        ?>


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

                ?>


            </table>

        </div>


        <?php

        } else {

        ?>

            <div class="no-result">

                No registrations found for
                <strong>
                    <?php echo htmlspecialchars($search); ?>
                </strong>.

            </div>

        <?php

        }


        mysqli_stmt_close($stmt);

        ?>


    </div>


<?php

}

mysqli_close($conn);

?>


</div>




</body>

</html>