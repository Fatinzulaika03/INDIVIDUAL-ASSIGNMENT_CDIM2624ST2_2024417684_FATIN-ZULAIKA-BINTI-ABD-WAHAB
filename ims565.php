<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudentPortal - IMS565 Course Description</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100..900&display=swap" rel="stylesheet">
    
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
              <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown">
                Courses
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="courses.php">Course List</a></li>
                <li><a class="dropdown-item" href="ims564.php">IMS564</a></li>
                <li><a class="dropdown-item" href="ims565.php">IMS565</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="result.php">Results</a>
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
            <h2 class="fw-light">Course <span class="fw-bold">Information</span></h2>
            <h4 class="text-purple-name">IMS565 - Information System Project Management</h4>
        </div>

        <div class="table-container shadow-sm">
            <div class="mb-5">
                <h4 class="fw-bold border-bottom pb-2 mb-3">
                    <i class="fa-solid fa-book-open me-2"></i>Course Description
                </h4>
                <p class="course-text">
                    The course content is based on the project management framework and its application to IS/IT projects. The main topics include introduction to project management, critical need for better project management in the field of IS/IT, identification of the project management framework, project management knowledge areas in the context of IS/IT projects, applications of the project management process groups to the real IS/IT projects and usages of project management tools and techniques to assist in IS/IT projects.
                </p>
            </div>

            <div class="mt-4">
                <h4 class="fw-bold border-bottom pb-2 mb-4">
                    <i class="fa-solid fa-list-check me-2"></i>Assessment Details
                </h4>
                
                <div class="mb-2">
                    <h5 class="fw-bold text-purple-name mb-3" style="font-style: normal;">Continuous Assessment (100%)</h5>
                    <div class="ms-2">
                        
                        <div class="mb-4">
                            <p class="mb-1 fw-bold">Individual Assignment</p>
                            <p class="text-muted small mb-0">Week 7 | Passing Mark: 10 | 20%</p>
                        </div>

                        <div class="mb-4">
                            <p class="mb-1 fw-bold">Group Project</p>
                            <p class="text-muted small mb-1">Week 13 | Passing Mark: 20 | 40%</p>
                            <p class="course-text small text-secondary">
                                Propose a real IT project case study with the IT project management deliverables for each phase and apply the ten (10) knowledge areas (PMBOK) in the final project report.
                            </p>
                        </div>

                        <div class="mb-4">
                            <p class="mb-1 fw-bold">Presentation</p>
                            <p class="text-muted small mb-1">Week 13 | Passing Mark: 5 | 10%</p>
                            <p class="course-text small text-secondary">
                                Present the real IT project case study with the IT project management deliverables for each phase and apply the ten (10) knowledge areas (PMBOK).
                            </p>
                        </div>

                        <div class="mb-4">
                            <p class="mb-1 fw-bold">Final Test</p>
                            <p class="text-muted small mb-1">Week 13 | Passing Mark: 15 | 30%</p>
                            <p class="course-text small text-secondary">
                                One written examination related to the concept and principles of project management for Information Technology (IT) and Information System (IS) development.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
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