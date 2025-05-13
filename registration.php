<?php include('includes/head.php') ?>
<body class="defult-home">


<!-- Nav -->
<?php include('includes/nav.php'); ?>

<div class="main-content">

    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="assets/images/breadcrumbs/registration.png" alt="Breadcrumbs Image">
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title">Registration</h1>
            <ul>
                <li>
                    <a class="active" href="index.php">Home</a>
                </li>
                <li>Important Information</li>
            </ul>
        </div>
    </div>

    <section class="intro-section gray-bg pt-94 pb-100 md-pt-64 md-pb-70">
        <div class="container">
            <div class="row clearfix">
                <!-- Content Column -->
                <?php include('includes/about/accordion.php') ?>

                <?php include('includes/about/quicklinks.php') ?>
            </div>
        </div>
    </section>

    <?php include('includes/footer.php'); ?>
</body>
</html>