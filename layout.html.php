<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css" integrity="sha512-EZLkOqwILORob+p0BXZc+Vm3RgJBOe1Iq/0fiI7r/wJgzOFZMlsqTa29UEl6v6U6gsV4uIpsNZoV32YZqrCRCQ==" crossorigin="anonymous" />
</head>

<body>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php?action=people">People</a></li>
        <li><a href="index.php?action=info">Info</a></li>
    </ul>
    <h1><?= $title ?></h1>
</body>

</html>