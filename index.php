<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Remote Station</title>
    <link href="css/bootstrap.css" rel="stylesheet">

    <style>
        
        thead th {
          text-align: center;
        }
        .nomer {
          text-align: center;
        }

        table {
          border-spacing: 0;
        }
        
        .div1 {
          width: calc(100vw - 50px);
          height: calc(100vh - 50px);
          overflow: scroll;
        }
        
        .div1 th {
          padding: 5px;
          width: 80px;
          min-width: 80px;
          top: 0;
        }
        .div td {
          padding:5px;
          width: 80px;s
          min-width: 80px;
        }
        
        .div1 th:nth-child(1),
        .div1 td:nth-child(1) {
          position: sticky;
          left: 0;
          background: #000;
          color: #fff;
        }
        .div1 th:nth-child(2),
        .div1 td:nth-child(2) {
          position: sticky;
          left: 70px;
          background: ##292929;
          color: #000;
        }
        .div1 th:nth-child(3),
        .div1 td:nth-child(3) {
          position: sticky;
          left: 158px;
          background: ##292929;
          color: #000;
        }
        .div1 th:nth-child(4),
        .div1 td:nth-child(4) {
          position: sticky;
          left: 236px;
          background: ##292929;
          color: #000;
        }
        .div1 th:nth-child(5),
        .div1 td:nth-child(5) {
          position: sticky;
          left: 310px;
          background: ##292929;
          color: #000;
        }
        .div1 th:nth-child(6),
        .div1 td:nth-child(6) {
          position: sticky;
          left: 383px;
          background: #0d6efd;
          color: #fff;
        }
        
    </style>
</head>

<body>
    <?php
    include ("data.php");
    ?>

    <!-- As a heading -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
             <a class="navbar-brand" href="#">DATA REMOTE STATION</a>
         </div>
    </nav>

    <div class="p-3">
    <form method="GET" class="mb-2 mt-3">
        <label for="tanggal" class="fw-bold">Pilih Tanggal:</label>
        <input type="date" id="tanggal" name="tanggal">
        <button type="submit" class="btn btn-primary btn-sm">TAMPILKAN</button>
    </form>

    <form action="" method="post">

      <input type="text" name="keyword" size="60" autofocus
      placeholder="Masukkan..." autocomplete="off">
      <button type="submit" name="cari">Cari!</button>    

    </form>


    <div class="div1">
    <table class="table table-bordered table-striped table-hover table-sm">
        <thead class="table-secondary sticky-top" style="height: 50px;">
            <tr>
                <th>NO</th>
                <th>KATEGORI</th>
                <th>TIPE</th>
                <th>CEK1</th>
                <th>CEK2</th>
                <th>TANGGAL</th>
                <th>00:00</th>
                <th>00:30</th>
                <th>01:00</th>
                <th>01:30</th>
                <th>02:00</th>
                <th>02:30</th>
                <th>03:00</th>
                <th>03:30</th>
                <th>04:00</th>
                <th>04:30</th>
                <th>05:00</th>
                <th>05:30</th>
                <th>06:00</th>
                <th>06:30</th>
                <th>07:00</th>
                <th>07:30</th>
                <th>08:00</th>
                <th>08:30</th>
                <th>09:00</th>
                <th>09:30</th>
                <th>10:00</th>
                <th>10:30</th>
                <th>11:00</th>
                <th>11:30</th>
                <th>12:00</th>
                <th>12:30</th>
                <th>13:00</th>
                <th>13:30</th>
                <th>14:00</th>
                <th>14:30</th>
                <th>15:00</th>
                <th>15:30</th>
                <th>16:00</th>
                <th>16:30</th>
                <th>17:00</th>
                <th>17:30</th>
                <th>18:00</th>
                <th>18:30</th>
                <th>19:00</th>
                <th>19:30</th>
                <th>20:00</th>
                <th>20:30</th>
                <th>21:00</th>
                <th>21:30</th>
                <th>22:00</th>
                <th>22:30</th>
                <th>23:00</th>
                <th>23:30</th>
                <th color="dark">STATUS</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $index => $item): ?>
                    <tr>
                        <td class="nomer"><?php echo $no + $index; ?></td>
                        <td><?php echo $item['Category']; ?></td>
                        <td><?php echo $item['Type']; ?></td>
                        <td><?php echo $item['Check1']; ?></td>
                        <td><?php echo $item['Check2']; ?></td>
                        <td><?php echo $item['Date']; ?></td>
                        <td><?php echo $item['00:00']; ?></td>
                        <td><?php echo $item['00:30']; ?></td>
                        <td><?php echo $item['01:00']; ?></td>
                        <td><?php echo $item['01:30']; ?></td>
                        <td><?php echo $item['02:00']; ?></td>
                        <td><?php echo $item['02:30']; ?></td>
                        <td><?php echo $item['03:00']; ?></td>
                        <td><?php echo $item['03:30']; ?></td>
                        <td><?php echo $item['04:00']; ?></td>
                        <td><?php echo $item['04:30']; ?></td>
                        <td><?php echo $item['05:00']; ?></td>
                        <td><?php echo $item['05:30']; ?></td>
                        <td><?php echo $item['06:00']; ?></td>
                        <td><?php echo $item['06:30']; ?></td>
                        <td><?php echo $item['07:00']; ?></td>
                        <td><?php echo $item['07:30']; ?></td>
                        <td><?php echo $item['08:00']; ?></td>
                        <td><?php echo $item['08:30']; ?></td>
                        <td><?php echo $item['09:00']; ?></td>
                        <td><?php echo $item['09:30']; ?></td>
                        <td><?php echo $item['10:00']; ?></td>
                        <td><?php echo $item['10:30']; ?></td>
                        <td><?php echo $item['11:00']; ?></td>
                        <td><?php echo $item['11:30']; ?></td>
                        <td><?php echo $item['12:00']; ?></td>
                        <td><?php echo $item['12:30']; ?></td>
                        <td><?php echo $item['13:00']; ?></td>
                        <td><?php echo $item['13:30']; ?></td>
                        <td><?php echo $item['14:00']; ?></td>
                        <td><?php echo $item['14:30']; ?></td>
                        <td><?php echo $item['15:00']; ?></td>
                        <td><?php echo $item['15:30']; ?></td>
                        <td><?php echo $item['16:00']; ?></td>
                        <td><?php echo $item['16:30']; ?></td>
                        <td><?php echo $item['17:00']; ?></td>
                        <td><?php echo $item['17:30']; ?></td>
                        <td><?php echo $item['18:00']; ?></td>
                        <td><?php echo $item['18:30']; ?></td>
                        <td><?php echo $item['19:00']; ?></td>
                        <td><?php echo $item['19:30']; ?></td>
                        <td><?php echo $item['20:00']; ?></td>
                        <td><?php echo $item['20:30']; ?></td>
                        <td><?php echo $item['21:00']; ?></td>
                        <td><?php echo $item['21:30']; ?></td>
                        <td><?php echo $item['22:00']; ?></td>
                        <td><?php echo $item['22:30']; ?></td>
                        <td><?php echo $item['23:00']; ?></td>
                        <td><?php echo $item['23:30']; ?></td>
                        <td><?php echo $item['Status']; ?></td>
                    </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
</div>

<nav aria-label="Page navigation example">
  <ul class="pagination">
    <!-- Tombol Previous -->
    <?php if ($currentPage > 1): ?>
    <li class="page-item">
      <a class="page-link" href="?tanggal=<?php echo $tanggal; ?>&page=<?php echo ($currentPage - 1); ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php endif; ?>

    <!-- Nomor Halaman -->
    <?php for ($i = 1; $i <= ceil(count($data) / $perPage); $i++): ?>
    <li class="page-item <?php echo ($currentPage == $i ? 'active' : ''); ?>">
      <a class="page-link" href="?tanggal=<?php echo $tanggal; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a>
    </li>
    <?php endfor; ?>

    <!-- Tombol Next -->
    <li class="page-item">
      <a class="page-link" href="?tanggal=<?php echo $tanggal; ?>&page=<?php echo ($currentPage + 1); ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
  </div>
    
        <script src="js/bootstrap.js"></script>
        <script src="js/popper.min.js"></script>
        





        
</body>

</html>