<?php 
require_once './include/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Whether Forecast</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</head>
<body>
    <input type="date" id="GetDate" value="<?php echo date("Y-m-d");?>">
    <button onclick="GetForecast();">Get Forecast</button>
    <br><br>
    <div id="WhetherResult">Select date and press on Get Forecast</div>    

    <script>
        function GetForecast() {
        document.getElementById("WhetherResult").innerHTML = "Generating Result.. Please Wait";
        var GetDate = document.getElementById("GetDate").value;

        function fetch_data() {
            $.ajax({
                url: 'content/forecast.php',
                method: 'POST',
                data: {
                    GetDate: GetDate
                },
                success: function(data) {
                    $('#WhetherResult').html(data)
                }
            })
        }
        fetch_data();

    }
    </script>
</body>
</html>