<?php
session_start();

include("connection.php");
include("functions.php");

// Function to build the calendar
function build_calendar($month, $year)
{
    // Database connection
    $mysqli = new mysqli('localhost', 'root', '', 'calendar');

    // Prepare and execute SQL query to fetch existing bookings for the given month and year
    $stmt = $mysqli->prepare('SELECT * FROM bookings WHERE MONTH(date) = ? AND YEAR(date) = ?');
    $stmt->bind_param('ss', $month, $year);
    $bookings = array();
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $bookings[] = $row['date'];
            }
            // Debugging: Output contents of $bookings array
            var_dump($bookings);
            $stmt->close();
        }
    }

    // Array of days of the week
    $daysofweek = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');

    // Calculate first day of the month
    $firstday = mktime(0, 0, 0, $month, 1, $year);
    // Get number of days in the month
    $numberdays = date('t', $firstday);
    // Get month name
    $monthName = date('F', $firstday);
    // Get day of the week for the first day of the month
    $dayofweek = date('w', $firstday);

    // Calculate previous and next month/year
    $prev_month = date('m', mktime(0, 0, 0, $month - 1, 1, $year));
    $prev_year = date('Y', mktime(0, 0, 0, $month - 1, 1, $year));
    $next_month = date('m', mktime(0, 0, 0, $month + 1, 1, $year));
    $next_year = date('Y', mktime(0, 0, 0, $month + 1, 1, $year));

    // Build calendar HTML
    $calendar = "<center><h1 class='calendar-header' style='font-family: cursive;'> $monthName $year </h1>";
    $calendar .= "<a class='btn btn-primary btn-xs' href='?month=" . $prev_month . "&year=" . $prev_year . "'> Previous Month</a>";
    $calendar .= "&nbsp;"; // Add space between buttons
    $calendar .= "<a class='btn btn-primary btn-xs' href='?month=" . date('m') . "&year=" . date('Y') . "'> Current Month </a>";
    $calendar .= "&nbsp;"; // Add space between buttons
    $calendar .= "<a class='btn btn-primary btn-xs' href='?month=" . $next_month . "&year=$next_year'> Next Month</a> </center>";
    $calendar .= "<br><table class='table table-bordered'>";
    $calendar .= "<tr>";

    // Generate headers for days of the week
    foreach ($daysofweek as $day) {
        $calendar .= "<th class='header'>$day</th>";
    }
    $calendar .= "</tr><tr>";

    // Fill in empty cells before the first day of the month
    if ($dayofweek > 0) {
        for ($k = 0; $k < $dayofweek; $k++) {
            $calendar .= "<td class='empty'></td>";
        }
    }

    // Loop through each day of the month
    $currentday = 1;
    while ($currentday <= $numberdays) {
        if ($dayofweek == 7) {
            $dayofweek = 0;
            $calendar .= "</tr><tr>";
        }
        $currentdayrel = str_pad($currentday, 2, "0", STR_PAD_LEFT);
        $date = "$year-$month-$currentdayrel";
        $dayname = strtolower(date("l", strtotime($date)));
        $today = $date == date('Y-m-d') ? 'today' : '';

        // Check if the date is already booked
        if (in_array($date, $bookings)) {
            $calendar .= "<td class='booked $today'><h3>$currentday</h3> <a class='btn btn-danger btn-xs'>Booked </a></td>";
        } else {
            // Link to book appointment with form
            $calendar .= "<td class='$today'><h3>$currentday</h3> <a href='?action=book&date=$date' class='btn btn-success btn-xs btn-book'>Book </a></td>";
        }
        $currentday += 1;
        $dayofweek += 1;
    }

    // Fill remaining cells with empty cells
    if ($dayofweek < 7) {
        $remainingdays = 7 - $dayofweek;
        for ($i = 0; $i < $remainingdays; $i++) {
            $calendar .= "<td class='empty'></td>";
        }
    }

    // Close table
    $calendar .= "</tr></table>";

    return $calendar;
}

// make an array to check time slots

$timeslots = array('9:00 am - 12:00 nn', '1:00 pm - 4:00 pm', '4:00 pm - 7:00 pm');



// Handle form submission for booking
if (isset($_POST['submit2'])) {
    $username = $_POST['Name'];
    $date = $_POST['Date'];
    $service = $_POST['Service'];
    $Btime = $_POST['Time'];

    // Prevent SQL injection by using prepared statements
    $stmt = $con->prepare("INSERT INTO books (Name, Book_Date, Service, Btime) VALUES (?, ?, ?,?)");
    $stmt->bind_param("ssss", $username, $date, $service, $Btime);

    if ($stmt->execute()) {
        echo '<script>alert("Reservation successful.");</script>';
    } else {
        echo '<script>alert("Reservation failed: ' . $con->error . '");</script>';
    }

    // Close prepared statement
    $stmt->close();
}

// Handle booking action
if (isset($_GET['action']) && $_GET['action'] === 'book' && isset($_GET['date'])) {
    $date = $_GET['date'];
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Book Appointment</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h2>Book Appointment for <?php echo $date; ?></h2>
                <form action="calendar2.php" method="post" name="addform">
                    <input type="text" class="form-control" id="Name" name="Name" placeholder="Enter your name"required>
                    <input type="text" class="form-control" id="Date" name="Date"
                           value="<?php echo $date; ?>" readonly>
                    <select class="form-control" id="Service" name="Service" required>
                        <option value="Hair Service">Hair Service</option>
                        <option value="Nails Service">Nails Service</option>
                        <option value="Hair and Nails Service">Hair and Nails Service</option>
                    </select>
                    <select class="form-control" id="Time" name="Time" required>
                        <option value="9:00 am to 12:00 nn">9:00 am to 12:00 nn</option>
                        <option value="1:00 pm to 4:00 pm">1:00 pm to 4:00 pm</option>
                        <option value="4:00 pm to 7:00 pm">4:00 pm to 7:00 pm</option>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-primary" name="submit2">Book Appointment</button>
                </form>
            </div>
        </div>
    </div>
    </body>
    </html>

    <?php
    // Stop execution after displaying the form
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking | Kristine's Beauty Station</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <style>
        /* Add CSS styles here */
        .booked {
            background-color: #ffcccc; /* Red background color */
            pointer-events: none; /* Disable pointer events */
        }
        .calendar-container {
            margin-top: 100px; /* Adjust this value as needed */
        }
        /* Custom styles for buttons */
        .btn-xs {
            padding: 5px 10px; /* Adjust padding as needed */
            font-size: 12px; /* Adjust font size as needed */
        }
        .btn-book {
            background-color: #5cb85c; /* Green color */
            border-color: #5cb85c; /* Green color */
        }
        .btn-book:hover {
            background-color: #4cae4c; /* Darker green color on hover */
            border-color: #4cae4c; /* Darker green color on hover */
        }
    </style>
</head>
<body>
<header>
    <div class="logo">
        <h1>Kristine's Beauty Station</h1>
    </div>
    <nav>
        <link rel="stylesheet" href="homestyle.css?v=<?php echo time(); ?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
        <?php include 'navigation.php'; ?>
    </nav>
</header>

<!-- Calendar Display -->
<div class="container calendar-container">
    <div class="row">
        <div class="col-md-12">
            <?php
            // Get current month and year if not provided in the URL
            $datecomps = getdate();
            $month = isset($_GET['month']) ? $_GET['month'] : $datecomps['mon'];
            $year = isset($_GET['year']) ? $_GET['year'] : $datecomps['year'];

            // Display the calendar
            echo build_calendar($month, $year);
            ?>
        </div>
    </div>
</div>

</body>
</html>
