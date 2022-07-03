<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Santapan Tegal</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    .mx-auto {
      width: 800px
    }

    .card {
      margin-top: 10px;
    }
  </style>
</head>

<body>
  <!-- Header -->
  <div class="medsos">
    <div class="container">
      <ul>
        <li>
          <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
        </li>
        <li>
          <a href="#"><i class="fa-brands fa-youtube"></i></a>
        </li>
        <li>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </li>
      </ul>
    </div>
  </div>
  <header>
    <div class="container">
    <a href="home.php"><img src="/serah/image/logoshigal.png" width="20%"></a>
      <ul>
        <li><a href="home.php">HOME</a></li>
        <li><a href="menu.php">MENU</a></li>
        <li class="active"><a href="order.php">ORDER</a></li>
        <li><a href="team.php">TEAM</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </header>
  <div class="mx-auto">
    <div class="card">
      <div class="card-header">
        Pesan Santapan
      </div>
      <div class="card-body">
        <form action="actionAdd.php" method="POST">

          <div class="form-group">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Ketik Nama Anda">
          </div>
          <div class="form-group">
            <label for="pilihan" class="col-sm-2 col-form-label">Menu</label>

            <select class="form-control" name="pilian" id="pilihan">
              <option value="">- Pilih Menu -</option>
              <option value="tongseng_ayam">Tongseng Ayam (20.000)</option>
              <option value="tongseng_kambing">Tongseng Kambing (32.000)</option>
              <option value="sop_dengkil">Sop Dengkil (30.000)</option>
              <option value="soto_daging">Soto Daging (18.000)</option>
              <option value="soto_ayam">Soto Ayam (15.000)</option>
              <option value="nasi_ayam_penyet">Nasi Ayam Penyet(16.000)</option>
              <option value="nasi_goreng">Nasi Goreng (13.000)</option>
              <option value="chicken_karaage">Chicken Karaage (15.000)</option>
              <option value="mie_tektek">Mie Tek-tek (13.000)</option>
              <option value="pempek_palembang">Pempek Palembang (12.000)</option>
              <option value="omelet_sosis">Omelet Sosis (12.000)</option>
              <option value="sosis_bakar">Sosis Bakar (10.000)</option>
              <option value="burger">Burger (13.000)</option>
              <option value="kentang_goreng">Kentang Goreng (8.000)</option>
              <option value="nugget_ayam">Nugget Ayam (10.000)</option>
              <option value="tempe_mendoan">Tempe Mendoan (8.000)</option>
              <option value="nasi_putih">Nasi Putih(3.000)</option>
              <option value="teh_es">Es Teh (4.000)</option>
              <option value="teh_hangat">Teh Hangat (4.000)</option>
              <option value="lemon_tea">Lemon Tea(8.000)</option>
              <option value="kopi_hangat">Kopi(3.000)</option>
              <option value="kopi_es">Es Kopi(4.000)</option>
              <option value="teh_gulabatu">Teh Gula Batu(15.000)</option>
              <option value="pop_ice">Pop Ice(5.000)</option>
              <option value="chocolate_es">Es Chocolate(6.000)</option>
              
              
            </select>

          </div>
          <div class="col-12">
            <input type="submit" name="simpan" value="Beli" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div>

    <div class="card">
      <div class="card-header text-white bg-secondary">
        Daftar Pesanan
      </div>
      <div class="card-body">
        <?php
        require "koneksi.php";
        $sql = "SELECT * FROM daftarmenu";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Nama: " . $row["nama"]. " " . $row["pilihan"]. "<br>";
          }
        } else {
          echo "0 results";
        }
        $conn->close();
        ?>
      </div>
    </div>
  </div>


  <!-- Footer -->
  <footer>
    <div class="container">
      <small>
        Copyright &copy; 2022 - Shigal Resto, All Rights Reserved.
      </small>
    </div>
  </footer>
</body>

</html>