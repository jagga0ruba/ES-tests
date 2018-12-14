<?php
require "startup.php";
?>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="javascript\index.js" type="text/javascript"></script>
</head>
<body>
<h1>Test Elastic</h1>
<input type="text" id="textQuery" name="query"/>
<br>
<label for="radioCity">City</label>
<input id="radioCity" type="radio" checked="checked" name="city">
<label for="radioStatus">Status</label>
<input id="radioStatus"type="radio" checked="checked" name="status">
<label for="radioFirstLottoPlayed">First Lotto Played</label>
<input id="radioFirstLottoPlayed" type="radio" checked="checked" name="first_lotto_played">
<label for="radioRegistration">Registration</label>
<input id="radioRegistration" type="radio" checked="checked" name="Registration_channel">
<button id="submit" onclick="submitQuery()">submit</button>
<div id="Results"></div>
</body>
