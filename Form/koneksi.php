<?php
$connection = new SQLite3('Database/database.sqlite', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);
$connection->enableExceptions(true);
if ($connection) {
    echo "<script>console.log('DB Connected')</script>";
} else {
    echo "<script>console.log('DB Not Connected')</script>";
}
//example to fetch data
// $results = $connection->query('SELECT * FROM db_kehadiran');
// while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
//     echo 'id = ' . $row['id'] . '<br>';
//     echo 'name = ' . $row['user_id'] . '<br>';
//     echo 'Date of Birth = ' . $row['url'] . '<br>';
// }

//create table, run this to init new table of db_kehadiran
// $connection->query('CREATE TABLE IF NOT EXISTS "db_kehadiran" (
//     "id" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
//     "nama" VARCHAR,
//     "nik" VARCHAR,
//     "dept" VARCHAR,
//     "bagian"VARCHAR,
//     "browser"VARCHAR,
//     "device"VARCHAR,
//     "os"VARCHAR,
//     "model"VARCHAR,
//     "tanggal"DATE,
//     "nomor_undian"VARCHAR
// )');
