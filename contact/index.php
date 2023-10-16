<?php
$pageName = 'Contact Us';
$title = 'McCarney Law P.C. | ' . $pageName;
include '../_header.php'
?>

    <main class="contact">
        <section class="hero-secondary">
            <div class="container smaller">
                <div class="bs_row">
                    <div class="bs_one bs_verticallyCentered">
                        <div>
                            <h1><?php echo $pageName; ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="padding press-releases">
            <div class="container smaller">

                <div class="bs_row bs_top">
                    <div class="bs_one right-margin bs_margin40">
                        <img src="../images/map.jpg" alt="map to McCarney Law P.C.">
                    </div>
                    <div class="bs_one">
                        <div><h2 class="fancy">McCarney Law P.C.</h2>
                            <p>Please contact us if you have any questions or requests concerning our services.</p>
                            <p>29 Broadway, Suite 2400<br>
                                New York, New York 10006<br>
                                212.797.1338 (office)<br>
                                212.797.3545 (fax)</p>
                            <div class="icon"><a href="mailto:info@mccarneylaw.com"><img
                                            src="../images/icons-email.gif" alt="email McCarney Law P.C."></a></div>
                            <div class="icon"><a href="https://www.linkedin.com/pub/james-g-mccarney/39/84/19b"
                                                 target="_blank"><img src="../images/icons-linkedin.gif" alt="visit McCarney Law P.C. on linked in"></a></div>
                        </div>
                    </div>
                </div>

        </section>
    </main>

<?php include '../_footer.php' ?>
