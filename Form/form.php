<head>
  <title>Pekan Olahraga</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
  <div class="ms-3 me-3 mt-3">
    <form action="form-valid.php" method="POST">
      <div class="mb-3 ">
        <label for="exampleInputEmail1" class="form-label fs-1">Nama</label>
        <input type="text" class="form-control border border-secondary  fs-1" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label fs-1">NIK (Nomor Induk Karyawan)</label>
        <input type="text" class="form-control border border-secondary fs-1" id="exampleInputPassword1" name="nik">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label fs-1">Departement & Bagian</label>
        <div class="d-flex align-items-start fs-1">
          <select class="form-select border border-secondary w-25 fs-1" aria-label="Default select example" name="dept" id="" required>
            <option value=""></option>
            <option value="CS">CS</option>
            <option value="CL">CL</option>
            <option value="CLS">CLS</option>
          </select>
          <select class="form-select border border-secondary w-75 ms-2 fs-1" aria-label="Default select example" name="bagian" id="" required>
            <option value=""></option>
            <option value="HRD">HRD</option>
            <option value="GA">GA</option>
            <option value="Accounting">Accounting</option>
            <option value="Finance">Finance</option>
            <option value="Exim">Exim</option>
            <option value="Purchasing">Purchasing</option>
            <option value="IT">IT</option>
            <option value="Office Boy">Office Boy</option>
            <option value="Warehouse">Warehouse</option>
            <option value="Mekanik">Mekanik</option>
            <option value="Scrap">Scrap</option>
            <option value="Driver">Driver</option>
            <option value="Proses PWI">Proses PWI</option>
            <option value="Marketing">Marketing</option>
            <option value="Laminating">Laminating</option>
            <option value="Development">Development</option>
            <option value="QC">QC</option>
            <option value="Lab">Lab</option>
            <option value="Prod">Produksi</option>
            <option value="Midsole">Midsole</option>
            <option value="Packing">Packing</option>
            <option value="Buffing">Buffing</option>
            <option value="Embos">Embos</option>
            <option value="Admin">Admin</option>
            <option value="Cutting">Cutting</option>
          </select>
        </div>
      </div>
      <button type="submit" class="btn btn-primary fs-1" name="submit" value="Data">Selesai</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>