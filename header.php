<!-- header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syed Hasnain</title>
    <link rel="stylesheet" href="css/styles.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome CSS for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom CSS for dark mode -->
    <link id="theme-style" rel="stylesheet" href="css/light-theme.css">
    
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand" href="assets/profile.jpg" data-lightbox="profile-pic" data-title="Syed Hasnain Ali" target="_blank">
            <img src="assets/profile.jpg" alt="Profile Pic" class="img-fluid rounded-circle" style="width: 40px; height: 40px; margin-right: 10px;">
            Syed Hasnain Ali
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#home-section">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about-section">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#project-section">Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#resume-section">Resume</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact-section">Contact</a>
                </li>
                <li class="nav-item">
                    <a id="toggle-dark-mode" class="btn btn-sm btn-outline-light active ml-2" aria-label="Toggle dark mode">
                        <i class="fas fa-sun"></i>
                        <i class="fas fa-moon ml-1" style="display:none;"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navigation bar -->


    <!-- Bootstrap JS and jQuery (necessary for Bootstrap's JavaScript plugins and toggling dark mode) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS for smooth scrolling and toggling dark mode -->
    <script>
        $(document).ready(function() {
            // Smooth scrolling using jQuery
            $('a.nav-link').on('click', function(event) {
                if (this.hash !== '') {
                    event.preventDefault();
                    const hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top - 50
                    }, 800);
                }
            });

            // Initially set light mode
            $('#toggle-dark-mode .fa-sun').show();
            $('#toggle-dark-mode .fa-moon').hide();
            $('#theme-style').attr('href', 'css/light-theme.css');
            localStorage.setItem('dark-mode', 'disabled');

            // Toggle dark mode
            $('#toggle-dark-mode').click(function() {
                if (localStorage.getItem('dark-mode') === 'disabled') {
                    // Enable dark mode
                    $('body').addClass('dark-mode');
                    $('#toggle-dark-mode .fa-sun').hide();
                    $('#toggle-dark-mode .fa-moon').show();
                    $('#theme-style').attr('href', 'css/dark-theme.css');
                    localStorage.setItem('dark-mode', 'enabled');
                } else {
                    // Disable dark mode
                    $('body').removeClass('dark-mode');
                    $('#toggle-dark-mode .fa-sun').show();
                    $('#toggle-dark-mode .fa-moon').hide();
                    $('#theme-style').attr('href', 'css/light-theme.css');
                    localStorage.setItem('dark-mode', 'disabled');
                }
            });
        });
    </script>
</body>
</html>
