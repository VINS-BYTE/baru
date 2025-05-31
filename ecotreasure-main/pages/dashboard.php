<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    exit();
}
include '../includes/layout.php';
include '../includes/db.php';
?>

<style>
  body {
    font-family: 'Poppins', sans-serif;
  }

  .main-content {
    padding: 35px;
  }

  .main-content h2 {
    font-size: 2rem;
    margin-bottom: 1.5rem;
    margin-top: 2px;
    color: var(--green-dark);
  }

  .stat-boxes {
    display: flex;
    gap: 30px;
    margin-bottom: 40px;
  }

  .stat-boxes .box {
    background-color: var(--yellow-soft);
    border-radius: 10px;
    padding:;
    flex: 1;
    text-align: center;
    border: 1px solid var(--green-dark);
  }

  .stat-boxes .box h3 {
    font-size: 1.1rem;
    margin-bottom: 12px;
    color: var(--green-light);
  }

  .stat-boxes .box p {
    font-size: 2rem;
    font-weight: 600;
    color: var(--black);
  }

  .chart-calendar-wrapper {
    display: flex;
    gap: 24px;
    margin-bottom: 40px;
  }

  .chart-calendar-wrapper > .chart-box {
  flex: 1;
  background-color: var(--yellow-soft);
  border: 1px solid var(--green-dark);
  border-radius: 12px;
  padding: 20px;
  display: flex;
  flex-direction: column;
}

.chart-calendar-wrapper > .calendar-box {
  flex: 1;
  background-color:rgb(254, 253, 252); /* Putih penuh */
  border: 1px solid var(--green-dark);
  border-radius: 12px;
  padding: 20px;
  display: flex;
  flex-direction: column;
}


  .chart-calendar-wrapper h3 {
    font-size: 1.1rem;
    margin-bottom: 16px;
    color: var(--green-light);
  }

  #chartRT {
    width: 100% !important;
    max-width: 100%;
    height: auto !important;
  }

  #calendar {
    width: 100%;
    max-width: 100%;
    height: 350px;
    font-size: 0.9rem;
    background-color: var(--white);
  }

  /* FullCalendar custom style */
  .fc-toolbar {
    background-color: var(--green-light);
    color: var(--white);
    padding: 8px;
    border-radius: 6px;
  }

  .fc-toolbar h2 {
    font-size: 1.2rem;
    color: var(--white);
  }

  .fc-button {
    background-color: var(--yellow);
    border: none;
    color: var(--black);
    font-weight: 600;
    padding: 6px 12px;
    margin: 2px;
    border-radius: 6px;
  }

  .fc-button:hover {
    background-color: var(--yellow-soft);
  }

  .fc-event {
    background-color: var(--green-dark);
    border: none;
    color: var(--white);
    padding: 4px 6px;
    border-radius: 4px;
    font-size: 0.85rem;
  }
</style>

<div class="main-content">
  <h2>Dashboard</h2>

  <div class="container">

    <!-- BOX STATISTIK -->
    <div class="stat-boxes">
      <div class="box">
        <h3>JUMLAH PENGGUNA</h3>
        <p>
          <?php
          $q = mysqli_query($conn, "SELECT COUNT(*) as total FROM pengguna");
          $d = mysqli_fetch_assoc($q);
          echo $d['total'];
          ?>
        </p>
      </div>
      <div class="box">
        <h3>JUMLAH SAMPAH</h3>
        <p>
          <?php
          $q = mysqli_query($conn, "SELECT COUNT(*) as total FROM sampah");
          $d = mysqli_fetch_assoc($q);
          echo $d['total'];
          ?>
        </p>
      </div>
      <div class="box">
        <h3>JUMLAH POIN</h3>
        <p>
          <?php
          $q = mysqli_query($conn, "SELECT SUM(poin) as total FROM poin");
          $d = mysqli_fetch_assoc($q);
          echo $d['total'];
          ?>
        </p>
      </div>
    </div>

    <!-- DIAGRAM & KALENDER -->
    <div class="chart-calendar-wrapper">

      <!-- DIAGRAM -->
<div class="chart-box">
  <h3>STATISTIKA PENGGUNA</h3>
  <canvas id="chartRT"></canvas>
</div>

<!-- KALENDER -->
<div class="calendar-box">
  <h3>KALENDER</h3>
  <div id="calendar"></div>
</div>

    </div>

  </div>
</div>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- FullCalendar CSS & JS -->
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/moment@2.27.0/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.min.js"></script>

<script>
  // Chart Pengguna per RT
  const ctx = document.getElementById('chartRT').getContext('2d');
  const chart = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ['RT 1', 'RT 2', 'RT 3', 'RT 4', 'RT 5'],
      datasets: [{
        data: [
          <?php
          for ($i = 1; $i <= 5; $i++) {
            $q = mysqli_query($conn, "SELECT COUNT(*) as total FROM pengguna WHERE rt = $i");
            $d = mysqli_fetch_assoc($q);
            echo $d['total'];
            if ($i < 5) echo ', ';
          }
          ?>
        ],
        backgroundColor: [
        '#3F51B5',
        '#673AB7',
        '#009688',
        '#FF7043',
        '#FFC107'
        ]
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: 'bottom'
        }
      }
    }
  });

  // Kalender
  $(document).ready(function () {
    $('#calendar').fullCalendar({
      header: {
        left: 'prev',
        center: 'title',
        right: 'next'
      },
      defaultView: 'month',
      editable: false,
    //   events: [
    //     {
    //       title: 'Contoh Event',
    //       start: '2025-05-10',
    //       end: '2025-05-12'
    //     }
    //   ]
    });
  });
</script>
