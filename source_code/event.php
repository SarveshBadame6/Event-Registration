<!DOCTYPE html>
<html>

<head>

    <title>Event Registration</title>

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


    <div class="form-card">

        <h2 class="page-title">
            Event Registration
        </h2>

        <p class="page-subtitle">
            Enter your details to register for a college event.
        </p>


        <form action="save_event.php" method="POST">


            <!-- STUDENT NAME -->

            <div class="form-group">

                <label for="student_name">
                    Student Name
                </label>

                <input
                    type="text"
                    id="student_name"
                    name="student_name"
                    placeholder="Enter student name"
                    required
                >

            </div>


            <!-- ROLL + DEPARTMENT -->

            <div class="form-row">


                <div class="form-group">

                    <label for="roll_no">
                        Roll No
                    </label>

                    <input
                        type="text"
                        id="roll_no"
                        name="roll_no"
                        placeholder="Enter roll number"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="department">
                        Department
                    </label>

                    <select
                        id="department"
                        name="department"
                        required
                    >

                        <option value="">
                            Select Department
                        </option>

                        <option value="CSE">
                            CSE
                        </option>

                        <option value="IT">
                            IT
                        </option>

                        <option value="ENTC">
                            ENTC
                        </option>

                        <option value="Mechanical">
                            Mechanical
                        </option>

                        <option value="Civil">
                            Civil
                        </option>

                        <option value="AI & ML">
                            AI & ML
                        </option>

                        <option value="Other">
                            Other
                        </option>

                    </select>

                </div>


            </div>


            <!-- EVENT + TEAM SIZE -->

            <div class="form-row">


                <div class="form-group">

                    <label for="event_name">
                        Event Name
                    </label>

                    <select
                        id="event_name"
                        name="event_name"
                        required
                    >

                        <option value="">
                            Select Event
                        </option>

                        <option value="Hackathon">
                            Hackathon
                        </option>

                        <option value="Quiz">
                            Quiz
                        </option>

                        <option value="Coding Competition">
                            Coding Competition
                        </option>

                        <option value="Project Exhibition">
                            Project Exhibition
                        </option>

                        <option value="Sports">
                            Sports
                        </option>

                        <option value="Cultural Event">
                            Cultural Event
                        </option>
<option value="Codethon">Codethon</option>

<option value="Tech Fest">Tech Fest</option>

<option value="Datathon">Datathon</option>

                    </select>

                </div>


                <div class="form-group">

                    <label for="team_size">
                        Team Size
                    </label>

                    <input
                        type="number"
                        id="team_size"
                        name="team_size"
                        min="1"
                        max="20"
                        placeholder="Enter team size"
                        required
                    >

                </div>


            </div>


            <!-- EMAIL + PHONE -->

            <div class="form-row">


                <div class="form-group">

                    <label for="email">
                        Email
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Enter email address"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="phone">
                        Phone
                    </label>

                    <input
                        type="tel"
                        id="phone"
                        name="phone"
                        placeholder="10 digit phone number"
                        pattern="[0-9]{10}"
                        maxlength="10"
                        required
                    >

                </div>


            </div>


            <!-- SUBMIT -->

            <button
                type="submit"
                class="submit-button"
            >
                Register for Event
            </button>


        </form>

    </div>

</div>




</body>

</html>