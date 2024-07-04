<head>
    <title>Pekan Olahraga</title>
    <script src="device.js"></script>
</head>

<body>
    <?php

    $isMob = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile"));

    if ($isMob) {
        echo 'Using Mobile Device...' . $_SERVER["HTTP_USER_AGENT"];
    } else {
        echo 'Using Desktop...' . $_SERVER["HTTP_USER_AGENT"];
    }
    ?>
    <p id="cekdevice">Device</p>
    <script>
        var deviceName = MobileDevice.getModels();
        document.getElementById("cekdevice").innerHTML = deviceName;
    </script>
</body>