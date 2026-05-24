<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudentPortal - Fixed Timetable</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100..900&display=swap" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg shadow-sm navbar-pastel">
      <div class="container">
        <a class="navbar-brand fw-bold" href="dashboard.php">StudentPortal</a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Courses</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="courses.php">Course List</a></li>
                <li><a class="dropdown-item" href="ims564.php">IMS564</a></li>
                <li><a class="dropdown-item" href="ims565.php">IMS565</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="result.php">Results</a></li>
            <li class="nav-item"><a class="nav-link active fw-bold" href="schedule.php">Class Schedule</a></li>
          </ul>

          <div class="d-flex align-items-center">
            <button class="btn btn-link nav-link px-3 border-0" id="darkModeToggle">
                <i class="fa-regular fa-lightbulb" id="darkModeIcon"></i>
            </button>
          </div>
        </div>
      </div>
    </nav>

    <div class="container my-5">
        <div class="result-container shadow-sm">
            <h3 class="fw-bold mb-4 text-center">Weekly Class Schedule</h3>
            
            <div id="chart"></div>

            <div class="mt-5">
                <div class="table-responsive">
                    <table class="table table-bordered text-center custom-simple-table">
                        <thead class="table-light">
                            <tr>
                                <th class="fw-bold">Code</th>
                                <th class="fw-bold">Course Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td class="fw-bold">IMS564</td><td>USER EXPERIENCE DESIGN</td></tr>
                            <tr><td class="fw-bold">IMS565</td><td>INFORMATION SYSTEM PROJECT MANAGEMENT</td></tr>
                            <tr><td class="fw-bold">IMS566</td><td>ADVANCED WEB DESIGN DEVELOPMENT AND CONTENT MANAGEMENT</td></tr>
                            <tr><td class="fw-bold">LCC501</td><td>ENGLISH FOR PROFESSIONAL CORRESPONDENCE</td></tr>
                            <tr><td class="fw-bold">TMC501</td><td>INTRODUCTORY MANDARIN (LEVEL III)</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        var options = {
          series: [{
            data: [
              { x: 'Monday', y: [new Date('2024-01-01 08:00').getTime(), new Date('2024-01-01 11:00').getTime()], label: 'IMS564', fillColor: '#FF0000' }, 
              { x: 'Monday', y: [new Date('2024-01-01 12:00').getTime(), new Date('2024-01-01 16:00').getTime()], label: 'IMS566', fillColor: '#0000FF' },
              { x: 'Tuesday', y: [new Date('2024-01-01 11:00').getTime(), new Date('2024-01-01 14:00').getTime()], label: 'IMS565', fillColor: '#008000' },
              { x: 'Tuesday', y: [new Date('2024-01-01 14:00').getTime(), new Date('2024-01-01 17:00').getTime()], label: 'IMS560', fillColor: '#FFD700' },
              { x: 'Wednesday', y: [new Date('2024-01-01 10:00').getTime(), new Date('2024-01-01 12:00').getTime()], label: 'LCC501', fillColor: '#FFA500' },
              { x: 'Wednesday', y: [new Date('2024-01-01 14:00').getTime(), new Date('2024-01-01 16:00').getTime()], label: 'TMC501', fillColor: '#800080' },
              { x: 'Thursday', y: [new Date('2024-01-01 14:00').getTime(), new Date('2024-01-01 17:00').getTime()], label: 'IMS562', fillColor: '#00CED1' }
            ]
          }],
          chart: {
            height: 400,
            type: 'rangeBar',
            toolbar: { show: false },
            zoom: { enabled: false }
          },
          plotOptions: {
            bar: {
              horizontal: true,
              barHeight: '80%',
              rangeBarGroupRows: true
            }
          },
          dataLabels: {
            enabled: true,
            formatter: function(val, opts) {
                return opts.w.config.series[opts.seriesIndex].data[opts.dataPointIndex].label;
            },
            style: { colors: ['#fff'] }
          },
          xaxis: {
            type: 'datetime',
            min: new Date('2024-01-01 08:00').getTime(),
            max: new Date('2024-01-01 17:00').getTime(),
            labels: {
              datetimeUTC: false,
              format: 'hh:mm TT' // This ensures only time shows
            }
          },
          tooltip: {
            x: { format: 'hh:mm TT' } // Fixes date showing in tooltip
          }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();

        const darkModeToggle = document.getElementById('darkModeToggle');
        const darkModeIcon = document.getElementById('darkModeIcon');
        darkModeToggle.addEventListener('click', () => {
            const theme = document.documentElement.getAttribute('data-bs-theme') === 'dark' ? 'light' : 'dark';
            document.documentElement.setAttribute('data-bs-theme', theme);
            darkModeIcon.className = (theme === 'dark') ? 'fa-solid fa-lightbulb' : 'fa-regular fa-lightbulb';
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
     <div class="container text-center">
        <p class="mb-1 fw-bold text-dark-emphasis">Prepared by: Fatin Zulaika Abd Wahab</p>
        <p class="mb-0 text-muted">&copy; 2026 StudentPortal. All Rights Reserved.</p>
    </div>
    </footer>
</body>
</html>