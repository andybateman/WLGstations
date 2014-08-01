<?php

$db = new SQLite3('DB.sqlite') or die('Unable to open database');
$output = NULL;

$result = $db->query('SELECT * FROM Stations') or die('Query failed');
while ($row = $result->fetchArray())
{
  $output .= "        <tr><td>{$row['StationID']}</td><td>{$row['ShortCode']}</td><td>{$row['Latitude']}</td><td>{$row['Longitude']}</td><td>{$row['Elevation']}</td></tr>\n";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="">

    <title>WLGStations</title>

    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container">

      <table>
        <tr><th>StationID</th><th>ShortCode</th><th>Latitude</th><th>Longitude</th><th>Elevation</th></tr>
<?php echo($output);?>
      </table>

    </div>
  </body>
</html>
