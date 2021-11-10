<?php
include 'config.php';
if ($_SERVER['HTTP_ACCEPT'] !== 'text/event-stream')
{
    //exit();
}
// make session read-only
session_start();
session_write_close();

// disable default disconnect checks
ignore_user_abort(true);

// set headers for stream
header("Content-Type: text/event-stream");
header("Cache-Control: no-cache");
header("Access-Control-Allow-Origin: *");
$latestEventId = 1;
while (true)
{
    $data = array();
    if (connection_aborted())
    {
        exit();
    }
    else
    {
        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT month(date) as m,sum(views) as total FROM visitors where date > (NOW() - INTERVAL 2 MONTH) group by m order by m";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result))
        {
            $data[$row['m']] = $row['total'];
        }
        echo "id: " . $latestEventId . "\n";
        echo "event: message\n";
        echo "data: " . json_encode($data) . "\n\n";

        ob_flush();
        flush();
        sleep(2);
        $latestEventId++;

    }
}
$conn->close();
?>
