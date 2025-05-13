<?php include('includes/head.php'); ?>

<body class="defult-home">

<!--Full width nav Start-->
<?php include('includes/nav.php'); ?>

<!-- Main content Start -->
<div class="main-content">
    <!-- Header -->
    <?php include('includes/homepage/header.php'); ?>

    <!-- About Section  -->
    <?php include('includes/homepage/sup-about-section.php'); ?>
</div>
<div class="clear"><p>&nbsp;</p></div>


<!-- CTA Section  -->
<?php include('includes/cta/homepage/cta.php'); ?>

<!-- Faq Section Start -->
<?php //include('includes/faqs.php') ?>


<!-- Footer -->
<?php include('includes/footer.php'); ?>

<!-- start scrollUp  -->
<div id="scrollUp">
    <i class="fa fa-angle-up"></i>
</div>
<!-- End scrollUp  -->

<!-- Search Modal -->
<?php include('includes/modals/search-modal.php'); ?>

<!--Example Modal-->
<?php include('includes/modals/example-modal.php') ?>

<?php include('includes/scripts.php') ?>

</body>
</html>