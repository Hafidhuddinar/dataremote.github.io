<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data dari Database</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>

<body>
    <h1>Data Remote Station</h1>
    <form method="GET">
        <label for="tanggal">Pilih Tanggal:</label>
        <input type="date" id="tanggal" name="tanggal">
        <button type="submit">Tampilkan</button>
    </form>
    <?php if (!empty($data)): ?>
        <table id="data-table" class="bordered-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Category</th>
                    <th>Type</th>
                    <th>Check1</th>
                    <th>Check2</th>
                    <th>Date</th>
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
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $index => $item): ?>
                    <tr>
                        <td><?php echo $no + $index; ?></td>
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
        <nav aria-label="Page navigation example">
  <ul class="pagination">
    <?php
    $totalItems = count($data);
    $totalPages = ceil($totalItems / $perPage);

    if ($currentPage > 1) :
    ?>
      <li class="page-item">
        <a class="page-link" href="?tanggal=<?= $tanggal ?>&page=<?= $currentPage - 1 ?>" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
    <?php endif; ?>

    <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
      <li class="page-item"><a class="page-link" href="?tanggal=<?= $tanggal ?>&page=<?= $i ?>"><?= $i ?></a></li>
    <?php endfor; ?>

    <?php if ($currentPage < $totalPages) : ?>
      <li class="page-item">
        <a class="page-link" href="?tanggal=<?= $tanggal ?>&page=<?= $currentPage + 1 ?>" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    <?php endif; ?>
  </ul>
</nav>

    <?php endif; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="script.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>
