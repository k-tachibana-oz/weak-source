<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>02</title>
<!--CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
<!--JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    value: <span id="write"></span>
<script>
    console.log(decodeURIComponent(location.hash.substring(1)));
    function escapeHtml(str) {
        return jQuery('<div>').text(str).html();
    }
    $("#write").html(escapeHtml(decodeURIComponent(location.hash.substring(1))));
</script>
</body>
</html>
