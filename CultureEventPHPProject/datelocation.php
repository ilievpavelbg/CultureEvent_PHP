<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tickets</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
    <?php include "banner.php" ?>
    <?php include "nav.php" ?>
    <section id="whereAndWhen">

        <?php
        include 'conectionDB.php';

        $conn = new mysqli(DB_HOST, DB_USER, DB_PWD, DB_NAME);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT StartDate,EndDate,  Location FROM eventplaceanddate";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $monthTranslation = array(
                    "January" => "Януари",
                    "February" => "Февруари",
                    "March" => "Март",
                    "April" => "Април",
                    "May" => "Май",
                    "June" => "Юни",
                    "July" => "Юли",
                    "August" => "Август",
                    "September" => "Септември",
                    "October" => "Октомври",
                    "November" => "Ноември",
                    "December" => "Декември"
                );

                $dayOfWeekTranslation = array(
                    "Monday" => "Понеделник",
                    "Tuesday" => "Вторник",
                    "Wednesday" => "Сряда",
                    "Thursday" => "Четвъртък",
                    "Friday" => "Петък",
                    "Saturday" => "Събота",
                    "Sunday" => "Неделя"
                );

                $dayOfWeekStartDate = date("l", strtotime($row["StartDate"]));
                $translatedDayOfWeekStartDate = $dayOfWeekTranslation[$dayOfWeekStartDate];
                $eventStartFullDate = date("d.m.Y", strtotime($row["StartDate"]));
                $eventStartDate = date("d", strtotime($row["StartDate"]));

                $dayOfWeekEndDate = date("l", strtotime($row["EndDate"]));
                $translatedDayOfWeekEndDate = $dayOfWeekTranslation[$dayOfWeekEndDate];
                $eventEndFullDate = date("d.m.Y", strtotime($row["EndDate"]));
                $eventEndDate = date("d", strtotime($row["EndDate"]));

                $eventMonth = date("F", strtotime($row["EndDate"]));
                $eventLocation = $row["Location"];

                $translatedMonth = str_replace(array_keys($monthTranslation), array_values($monthTranslation), $eventMonth);

                echo "<div class='container mt-5'>";
                echo "<div class='row'>";
                echo "<div class='col-5 text-right'>";
                echo "<h3 class='custom-title'>Къде и кога</h3>";
                echo "</div>";
                echo "<div class='col'>";
                echo "<div class='row'>";
                echo "<div class='col-1 ml-3'>";
                echo "<img src='./images/calendar.png'>";
                echo "</div>";
                //First section with details
                echo "<div class='col'>";
                echo "<h4 class='custom-subject'>На $eventStartDate и $eventEndDate $translatedMonth 2023 г.</h4>";
                echo "</div>";
                echo "</div>";
                echo "<div class='row mt-2'>";
                echo "<div class='col-1 ml-3'>";
                echo "<img src='./images/placeholder.png'>";
                echo "</div>";
                echo "<div class='col'>";
                echo "<h4 class='custom-subject'>$eventLocation</h4>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                //Second section with details
                echo "<div class='container mt-5'>";
                echo "<div class='row'>";
                echo "<div class='col-5 text-right'>";
                echo "<p class='custom-title'>$eventStartFullDate г. ( $translatedDayOfWeekStartDate ) -</p>";
                echo "<p class='custom-title'>допълнителна информация за събитието</p>";
                echo "</div>";
                echo "<div class='col ml-4'>";
                echo "<div class='row'>";
                echo "<div>";
                echo "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc varius ac mi id vestibulum. Phasellus suscipit ut nibh et cursus. Nunc gravida maximus gravida. Pellentesque in ante id sem pharetra imperdiet. Donec nec mauris quam. Suspendisse potenti. Quisque faucibus faucibus tortor. Ut ac augue orci.</p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";

                //Third section with details
                echo "<div class='container mt-5'>";
                echo "<div class='row'>";
                echo "<div class='col-5 text-right'>";
                echo "<p class='custom-title'>$eventEndFullDate г. ( $translatedDayOfWeekEndDate ) -</p>";
                echo "<p class='custom-title'>още допълнителна информация за събитието за втория ден</p>";
                echo "</div>";
                echo "<div class='col ml-4'>";
                echo "<div class='row'>";
                echo "<div>";
                echo "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc varius ac mi id vestibulum. Phasellus suscipit ut nibh et cursus. Nunc gravida maximus gravida. Pellentesque in ante id sem pharetra imperdiet. Donec nec mauris quam. Suspendisse potenti. Quisque faucibus faucibus tortor. Ut ac augue orci.</p>";
                echo "<p class='mt-3'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc varius ac mi id vestibulum. Phasellus suscipit ut nibh et cursus. Nunc gravida maximus gravida. Pellentesque in ante id sem pharetra imperdiet. Donec nec mauris quam. Suspendisse potenti. Quisque faucibus faucibus tortor. Ut ac augue orci.</p>";
                echo "<p class='mt-3'style='color: blue'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc varius ac mi id vestibulum. </p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "No data found in the database.";
        }
        ?>
    </section>
</body>
<footer>
    <?php include "footer_nav.php" ?>
</footer>

</html>