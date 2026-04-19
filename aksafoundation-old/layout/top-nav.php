<!-- Top Header -->
<header class="site-header d-lg-block d-none bg-danger text-white py-2">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-9 col-12 d-flex flex-wrap align-items-center">
                <p class="mb-0 d-flex align-items-center">
                    <i class="bi bi-envelope-fill me-2"></i>
                    <a href="mailto:contact@aksafoundation.org" class="text-white text-decoration-none">
                        contact@aksafoundation.org
                    </a>
                </p>
            </div>

            <div class="col-lg-3 d-lg-block d-none text-end">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-white"><i class="bi bi-youtube"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-white"><i class="bi bi-whatsapp"></i></a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</header>

<!-- Main Navbar -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm py-1">
    <div class="container">
        <!-- Logo & Brand -->
     <a class="navbar-brand d-flex align-items-center" href="../home/">
    <img src="../images/logo.png" alt="AKSA FOUNDATION" class="logo img-fluid animatedspin p-1" width="45" height="45">
    <span class="ms-2 fw-medium" style="font-size: 23px; font-family: madefor-display-medium, sans-serif; font-weight:500">
        <span class="d-inline d-md-none">AKSA<br>FOUNDATION</span>
        <span class="d-none d-md-inline">AKSA FOUNDATION</span>
    </span>
</a>
        <!-- Toggle Button -->
     <!-- Navbar Toggle Button -->
<button class="navbar-toggler ms-auto pt-4" type="button" data-bs-toggle="collapse"
  data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
  aria-label="Toggle navigation" id="navbarToggleBtn">
  <img id="toggleIcon" src="../images/home/grid.png" alt="Menu" width="30" height="30">
</button>

<!-- Menu Items -->
<div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav ms-auto align-items-lg-center">
    <li class="nav-item">
      <a class="nav-link font" href="../home/">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link font" href="../learning-centre/">Learning Centre</a>
    </li>
    <li class="nav-item">
      <a class="nav-link font" href="../vocational-centre/">Vocational Centre</a>
    </li>
    <li class="nav-item">
      <a class="nav-link font" href="../sport-academy/">Sports Academy</a>
    </li>
    <li class="nav-item">
      <a class="nav-link font" href="../events/">Events</a>
    </li>
    <li class="nav-item">
      <a class="nav-link font" href="../donate/">Donate now</a>
    </li>
    <li class="nav-item">
      <a class="btn btn-primary ms-lg-3 mt-2 mt-lg-0 custom-button font" href="../contact/">Contact</a>
    </li>
  </ul>
</div>

<script>
  const toggleIcon = document.getElementById('toggleIcon');
  const navbarCollapse = document.getElementById('navbarNav');

  // Listen for Bootstrap collapse shown and hidden events
  navbarCollapse.addEventListener('shown.bs.collapse', () => {
    // Menu opened — show 'x' icon
    toggleIcon.src = '../images/icons/x.png';
    toggleIcon.alt = 'Close Menu';
  });

  navbarCollapse.addEventListener('hidden.bs.collapse', () => {
    // Menu closed — show grid icon
    toggleIcon.src = '../images/home/grid.png';
    toggleIcon.alt = 'Open Menu';
  });
</script>


    

        <!-- Menu Items -->
       
    </div>
</nav>
