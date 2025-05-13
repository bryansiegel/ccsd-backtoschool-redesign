<!-- modernizr js -->
<script>
    function includeHTML() {
        var z, i, elmnt, file, xhttp;
        /*loop through a collection of all HTML elements:*/
        z = document.getElementsByTagName("*");
        for (i = 0; i < z.length; i++) {
            elmnt = z[i];
            /*search for elements with a certain atrribute:*/
            file = elmnt.getAttribute("w3-include-html");
            if (file) {
                /*make an HTTP request using the attribute value as the file name:*/
                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4) {
                        if (this.status == 200) {elmnt.innerHTML = this.responseText;}
                        if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
                        /*remove the attribute, and call this function once more:*/
                        elmnt.removeAttribute("w3-include-html");
                        includeHTML();
                    }
                }
                xhttp.open("GET", file, true);
                xhttp.send();
                /*exit the function:*/
                return;
            }
        }
    };
</script>
<script>
    includeHTML();
</script>
<script src="assets/js/modernizr-2.8.3.min.js"></script>
<!-- jquery latest version -->
<script src="assets/js/jquery.min.js"></script>
<!-- Bootstrap v5.0.2 js -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Menu js -->
<script src="assets/js/rsmenu-main.js"></script>
<!-- op nav js -->
<script src="assets/js/jquery.nav.js"></script>
<!-- owl.carousel js -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- Slick js -->
<script src="assets/js/slick.min.js"></script>
<!-- isotope.pkgd.min js -->
<script src="assets/js/isotope.pkgd.min.js"></script>
<!-- imagesloaded.pkgd.min js -->
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<!-- wow js -->
<script src="assets/js/wow.min.js"></script>
<!-- Skill bar js -->
<script src="assets/js/skill.bars.jquery.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<!-- counter top js -->
<script src="assets/js/waypoints.min.js"></script>
<!-- video js -->
<script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
<!-- magnific popup js -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- plugins js -->
<script src="assets/js/plugins.js"></script>
<!-- contact form js -->
<script src="assets/js/contact.form.js"></script>
<!-- main js -->
<script src="assets/js/main.js"></script>
<script>
    /* =========================================
COUNTDOWN
========================================= */
    // Set the date we're counting down to
    var countDownDate = new Date("August 12, 2024 07:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);

</script>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script src="https://cdn.userway.org/widget.js" data-account="8oeraXEIqB"></script>