<?php
require_once '../include/config.php';

// Parameters from user input
$GetDate = $_POST["GetDate"];

// Define Variables
$YearCount = $TotalRain = $dateID = $PreTotalRain = $FloodCount = 0;

// Key Values for Calculation
$TrueCount = $CriticalPoints= $MinorPoints = $MajorPoints= 0;
$RainValue = 100;
$DefaultTtolarence = 250; //200mm


// Define Arrays
$dates = array();
$YearTotals = array();
$FloodedDates = array();
$FloodSize = array();
$ActualFloodSize = array();

// Get Flooded Dates
$sql = "SELECT `id`, `DateFeed`, `data1`, `data2`, `data3` FROM `DataSet` WHERE `data2` LIKE '1'";
$result = $link->query($sql);
$FloodCount = $result->num_rows;
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $dateID += 1;
        $id = $row["id"];
        $DateFeed = $row["DateFeed"];
        $data1 = $row["data1"];
        $data2 = $row["data2"];
        $data3 = $row["data3"];

        $FloodedDates["Date-".$dateID]  = $DateFeed;
        // echo $id . " " . $DateFeed . " " . $data1 . " " . $data2 . " " . $data3 . "<br>";
    }
}

foreach ($FloodedDates as $floodDate) {
    $sql = "SELECT `id`, `DateFeed`, `data1`, `data2`, `data3` FROM `DataSet` WHERE `DateFeed` <= CAST('$floodDate' AS DATE) ORDER BY `id` DESC LIMIT 5";
    $result = $link->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $DateFeed = $row["DateFeed"];
            $data1 = $row["data1"];
            $data2 = $row["data2"];
            $data3 = $row["data3"];

            $FloodSize[$floodDate] += $data3;
            // echo $id . " " . $DateFeed . " " . $data1 . " " . $data2 . " " . $data3 . "<br>";
        }
    }
}

$averageFloodValue = array_sum($FloodSize) / count($FloodSize);
foreach ($FloodSize as $Size) {
    $tolarence = abs($Size - $averageFloodValue);

    if($tolarence <= $DefaultTtolarence){
        $ActualFloodSize[] = $Size;
    }
}

$MinimumFloodSize = min($ActualFloodSize);
$MaximumFloodSize = max($ActualFloodSize);
$averageFloodValue = array_sum($ActualFloodSize) / count($ActualFloodSize);

// Creating Levels

// Minor Flood Level
$MinorValue = round(($averageFloodValue - $MinimumFloodSize)/2+$MinimumFloodSize);
// Critical Flood Level
$CriticalValue = round($MaximumFloodSize-($MaximumFloodSize - $averageFloodValue)*0.6);

// ========================================================

// Get Year Count from Database Entries
$sql = "SELECT `id` FROM `DataSet`";
$result = $link->query($sql);
$YearCount = round(($result->num_rows) / 365, 0, PHP_ROUND_HALF_DOWN);
for ($x = 1; $x <= 5; $x++) {
    $newDate = date("Y-m-d", strtotime("-" . $x . " year", strtotime($GetDate)));

    // Assigning Values to Array
    $dates["date-" . $x] = $newDate;
}

foreach ($dates as $date) {
    $sql = "SELECT `id`, `DateFeed`, `data1`, `data2`, `data3` FROM `DataSet` WHERE `DateFeed` <= CAST('$date' AS DATE) ORDER BY `id` DESC LIMIT 5";
    $result = $link->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $DateFeed = $row["DateFeed"];
            $data1 = $row["data1"];
            $data2 = $row["data2"];
            $data3 = $row["data3"];

            $YearTotals[$date] += $data3;

            // echo $id . " " . $DateFeed . " " . $data1 . " " . $data2 . " " . $data3 . "<br>";
        }
        // echo "========================<br>";
    }
}

foreach ($YearTotals as $total) {
    if ($total >= $MinimumFloodSize) {
        $TrueCount += 1;
        $MinorPoints += 1;
    }

    if($total >= $MinimumFloodSize && $total < $MinorValue){
        $MajorPoints += 1;
    }

    if ($total >= $CriticalValue) {
        $MajorPoints += 1;
        $CriticalPoints += 1;
    }

    $TotalRain += $total;
}

// print_r($ActualFloodSize); echo "<br>";
// print_r($dates); echo "<br>";
// print_r($YearTotals); echo "<br>";
// echo $elementCount; echo "<br>";
// echo $PreTotalRain/$FloodCount; echo "<br>";
// echo $MinimumFloodSize; echo "<br>";
// echo $averageFloodValue; echo "<br>";
// echo $MaximumFloodSize; echo "<br>";
// echo $TotalRain;echo "<br>";
echo "Alert Flood Level upto ". $MinimumFloodSize; echo "<br>";
echo "Minor Flood Level between ". $MinimumFloodSize ." and ".$MinorValue ; echo "<br>";
echo "Major Flood Level between ". $MinorValue ." and ".$CriticalValue; echo "<br>";
echo "Criticle Flood Level >".$CriticalValue; echo "<br>";


echo "<br><b>Forecast Result</b>"; echo "<br>";
echo "Minor Points - ". $MinorPoints; echo "<br>";
echo "Major Points - ". $MajorPoints; echo "<br>";
echo "Critical Points - ". $CriticalPoints; echo "<br>";

// Calculation
$rainPercentage = ($TotalRain / ($YearCount * $averageFloodValue)) * 100;
$FloodrainPercentage = (($TrueCount) / $YearCount) * 100;

$MinorResult = ($MinorPoints/$YearCount) * 100;
$MajorResult = ($MajorPoints/$YearCount) * 100;
$CriticalResult = ($CriticalPoints/$YearCount) * 100;
?>

<h2>Accoring to to Previous Records <?php echo $GetDate; ?> has <?php echo number_format($rainPercentage, 2); ?>% Raining Probability</h2>
<h2>Accoring to to Previous Records <?php echo $GetDate; ?> has <?php echo number_format($FloodrainPercentage, 2); ?>% Floody Raining Probability</h2>
<h2>It can be <?php echo number_format($MinorResult,2); ?>% of probability Minor Flood Level</h2>
<h2>It can be <?php echo number_format($MajorResult,2); ?>% of probability Major Flood Level</h2>
<h2>It can be <?php echo number_format($CriticalResult,2); ?>% of probability Critical Flood Level</h2>