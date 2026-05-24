<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudentPortal - Results</title>
    
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
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="coursesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Courses
              </a>
              <ul class="dropdown-menu" aria-labelledby="coursesDropdown">
                <li><a class="dropdown-item" href="courses.php">Course List</a></li>
                <li><a class="dropdown-item" href="ims564.php">IMS564</a></li>
                <li><a class="dropdown-item" href="ims565.php">IMS565</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link active fw-bold" href="result.php">Results</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="schedule.php">Class Schedule</a>
            </li>
          </ul>

          <div class="d-flex align-items-center">
            <button class="btn btn-link nav-link px-3 border-0" id="darkModeToggle" title="Toggle Mode">
                <i class="fa-regular fa-lightbulb" id="darkModeIcon"></i>
            </button>
          </div>
        </div>
      </div>
    </nav>

    <div class="container my-5">
        <div class="text-center mb-5 welcome-section">
            <h2 class="fw-light">Academic <span class="fw-bold">Performance</span></h2>
            <h4 class="text-purple-name">GPA & CGPA Comparison</h4>
        </div>

        <div class="result-container shadow-sm">
            <h5 class="fw-bold mb-4"><i class="fa-solid fa-chart-line me-2"></i>Result Overview</h5>
            
            <div id="chart" class="mb-5"></div>

            <div class="table-responsive">
                <table class="table table-bordered text-center mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="fw-bold">SEMESTER</th>
                            <th class="fw-bold">GPA</th>
                            <th class="fw-bold">CGPA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>1</td><td>3.50</td><td>3.50</td></tr>
                        <tr><td>2</td><td>3.80</td><td>3.65</td></tr>
                        <tr><td>3</td><td>3.20</td><td>3.50</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Chart Setup
        var options = {
          series: [
            { name: "GPA (Semester)", data: [3.50, 3.80, 3.20] },
            { name: "CGPA (Cumulative)", data: [3.50, 3.65, 3.50] }
          ],
          chart: {
            height: 350,
            type: 'line',
            toolbar: { show: false },
            fontFamily: 'Roboto, sans-serif'
          },
          dataLabels: { enabled: true },
          stroke: { curve: 'smooth', width: 3 },
          markers: { size: 5 },
          xaxis: { categories: ['Semester 1', 'Semester 2', 'Semester 3'] },
          yaxis: { 
              min: 0, 
              max: 4.0, 
              labels: { formatter: function (val) { return val.toFixed(2); } } 
          },
          colors: ['#cbbccb', '#968396'], 
          legend: { position: 'top' },
          grid: { borderColor: '#f1f1f1' }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();

        // Dark Mode Logic
        const darkModeToggle = document.getElementById('darkModeToggle');
        const darkModeIcon = document.getElementById('darkModeIcon');
        const htmlElement = document.documentElement;

        const savedTheme = localStorage.getItem('theme') || 'light';
        htmlElement.setAttribute('data-bs-theme', savedTheme);
        updateIcon(savedTheme);

        darkModeToggle.addEventListener('click', () => {
            const currentTheme = htmlElement.getAttribute('data-bs-theme');
            const newTheme = (currentTheme === 'light') ? 'dark' : 'light';
            
            htmlElement.setAttribute('data-bs-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            updateIcon(newTheme);
            
            // Sync chart colors for dark mode
            chart.updateOptions({ tooltip: { theme: newTheme } });
        });

        function updateIcon(theme) {
            darkModeIcon.className = (theme === 'dark') ? 'fa-solid fa-lightbulb' : 'fa-regular fa-lightbulb';
        }
    </script>
       <footer class="footer-section py-4 mt-auto">
    <div class="container text-center">
        <p class="mb-1 fw-bold text-dark-emphasis">Prepared by: Fatin Zulaika Abd Wahab</p>
        <p class="mb-0 text-muted">&copy; 2026 StudentPortal. All Rights Reserved.</p>
    </div>
    </footer>
</body>
</html>