<?php
$username = "operator";
$password = "!d3f3n510!";
$database = "defensio";
$mysqli = new mysqli("localhost", $username, $password, $database);
$query = "SELECT * FROM host";


echo '   <!DOCTYPE html>
        <html>
        <title>List HOST</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="ollie.css">
        <body>
        <ul id="menu">
            <li><a href=index.html>Main</a></li>
            <li><a href=form_job.html>Inserisci nuovo Job</a></li>
            <li><a href=extract_host.php>Elenco HOST Job</a></li>
            <li><a href=extract_service.php>Elenco SERVIZI Job</a></li>
        </ul>
        <h1>Lista HOST</h1>
        <table class="styled-table" border="1" cellspacing="2" cellpadding="2">
         <tr>
          <td> <font face="Arial">ID</font> </td>
          <td> <font face="Arial">ID_JOB</font> </td>
          <td> <font face="Arial">START</font> </td>
          <td> <font face="Arial">IP</font> </td>
          <td> <font face="Arial">HOSTNAME</font> </td>
        </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["id"];
        $field2name = $row["id_job"];
        $field3name = $row["start_job"];
        $field4name = $row["ip"];
        $field5name = $row["hostname"];

        echo '<tr>
                  <td>'.$field1name.'</td>
                  <td>'.$field2name.'</td>
                  <td>'.$field3name.'</td>
                  <td>'.$field4name.'</td>
                  <td>'.$field5name.'</td>
              </tr>';
    }
    $result->free();
}
echo '   </table>';
echo'</body>';
echo '</html>';
$mysqli->close();
?>