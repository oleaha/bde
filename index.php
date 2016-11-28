<html>
<head>
	<title>BED Hot Chili Peppers</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>

</head>
<body>

<div class="container-fluid">
	<div class="container container-table">
		<div class="row vertical-center-row">
			<div class="text-center col-md-8 col-md-offset-2">
					<img src="BedHotChiliPeppers_Transparent.png" class="img-responsive" />
					<div id="time" style="color: #ffffff;"></div>
			</div>
		</div>
	</div>
</div>


<script>
function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
			  hours   = parseInt(timer / 3600, 10);
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

				hours   = hours < 10 ? "0" + hours : hours
        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.text(hours + ":" + minutes + ":" + seconds);

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}

jQuery(function ($) {
    var fiveMinutes = 24*3600,
        display = $('#time');
    startTimer(fiveMinutes, display);
});
</script>

</body>
</html
