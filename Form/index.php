<?php
require_once 'koneksi.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pekan Olahraga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    $tanggal =  date("d-m-Y");
    $total_data = $connection->query("SELECT COUNT(id)as totalid FROM db_kehadiran WHERE tanggal='$tanggal'");
    $total_array = $total_data->fetchArray(SQLITE3_ASSOC);
    $no = 0;
    echo "<script>const nama =[];const bagian =[];const nomor_undian =[];";
    $results = $connection->query("SELECT * FROM db_kehadiran WHERE tanggal='$tanggal'");
    while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
        echo "nama[$no] = '$row[nama]';bagian[$no] = '$row[bagian]';nomor_undian[$no] = '$row[nomor_undian]';";
        if ($no < $total_array['totalid']) {
            $no++;
        }
    }
    echo "</script>"
    ?>
    <div class="d-flex"><button class="btn btn-primary mt-3" style="font-size: 50px;margin-left:37.75%;" onclick="undian()">MULAI UNDIAN</button>

    </div>
    <div class="text-center">
        <h1 style="font-size:200px;">Pemenang</h1>
        <h1 id="undian" style="font-size:200px;">Unknow</h1>
    </div>
    <script>
        console.log(nama);
        var i = 1;

        function undian() {
            setTimeout(function() {
                let x = Math.floor((Math.random() * <?= $total_array['totalid'] ?>) + 0)
                document.getElementById('undian').innerHTML = nomor_undian[x];
                console.log("Nama : " + nama[x]);
                console.log("Bagian : " + bagian[x]);
                console.log("Nomor Undian : " + nomor_undian[x]);
                i++;
                if (i < 3000) {
                    undian();
                } else {
                    i = 1;
                }
            }, 3);
        }
    </script>
</body>