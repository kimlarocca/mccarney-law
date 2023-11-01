<?php
// Define contact information
$contactName = "James G. McCarney";
$contactEmail = "jmccarney@mccarneylaw.com";
$contactCellPhone = "+15167298500";
$contactWorkPhone = "+12127971338";
$contactWorkAddress = "29 Broadway, Suite 2400, New York NY 10006, USA";
$contactWebsite = "https://www.mccarneylaw.com";

// Create a vCard string
$vCard = "BEGIN:VCARD\r\n";
$vCard .= "VERSION:3.0\r\n";
$vCard .= "FN:" . $contactName . "\r\n";
$vCard .= "EMAIL:" . $contactEmail . "\r\n";
$vCard .= "TEL;TYPE=CELL:" . $contactCellPhone . "\r\n";
$vCard .= "TEL;TYPE=WORK:" . $contactWorkPhone . "\r\n";
$vCard .= "ADR;TYPE=WORK:;;" . $contactWorkAddress . "\r\n";
$vCard .= "URL:" . $contactWebsite . "\r\n";
$vCard .= "END:VCARD\r\n";

// Set the appropriate headers for a vCard download
header('Content-Type: text/x-vcard');
header('Content-Disposition: attachment; filename=JamesGMcCarney.vcf');

// Output the vCard data to the browser for download
echo $vCard;
?>

<?php
$pageName = 'James G. McCarney';
$title = 'McCarney Law P.C. | ' . $pageName;
include '../_header.php'
?>

    <main class="attorneys">
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

        <section class="padding-top">
            <div class="container smaller">
                <div class="bs_row bs_top">
                    <div class="bs_one right-margin bs_margin40">
                        <img src="../images/attorneys-jim.jpg">
                    </div>
                    <div class="bs_four">
                        <div>
                            <p><strong>Mr. McCarney is a native New Yorker and founder of the Firm.</strong> His
                                experience melds
                                together a unique blend of AmLaw100 power & depth with boutique firm dexterity &
                                finesse. Mr. McCarney spearheaded successful New York office initiatives as a partner
                                and practice group leader at both Howrey LLP and Sheppard Mullin Richter & Hampton LLP
                                where he brought experience to bear on behalf of Fortune 500 and other large
                                multi-national clients. Previously he co-founded the premier white-collar criminal and
                                civil litigation boutique, Engel, McCarney & Kenney, where he joined forces with two
                                veteran prosecutors from the United States Attorney’s Office in Manhattan. Mr. McCarney
                                has handled a wide variety of civil and criminal litigations in federal and state courts
                                across the country, as well as arbitrations in both the U.S. and Europe. Prosecuting and
                                defending claims on behalf of both a domestic and international clientèle, he served as
                                lead trial and appellate counsel in the wide range of matters which give rise to the
                                Firm’s current practice areas.</p>

                            <a class="button read-more bs_margin40">Read More</a>

                            <div class="details">

                                <h4>Education</h4>

                                <p>New York University School of Law
                                    <br>&nbsp;&nbsp;&nbsp;<em>Juris Doctor</em>, 1981
                                    <br>&nbsp;&nbsp;&nbsp;NYU <em>Law Review</em></p>

                                <p>University of Virginia
                                    <br>&nbsp;&nbsp;&nbsp;B.A., 1978
                                    <br>&nbsp;&nbsp;&nbsp;Echols Scholar
                                    <br>&nbsp;&nbsp;&nbsp;Woodrow Wilson Honors</p>
                                <p>Chaminade High School</p>
                                <h4>Court Admissions</h4>
                                <ul>

                                    <li>U.S. Supreme Court</li>
                                    <li>U.S. Court of Appeals, Second Circuit</li>
                                    <li>U.S. Court of Appeals, Third Circuit</li>
                                    <li>U.S. Court of Appeals, Fourth Circuit</li>
                                    <li>U.S. Court of Appeals, Seventh Circuit</li>
                                    <li>U.S. Court of Federal Claims</li>
                                    <li>U.S. District Court, District of Columbia</li>
                                    <li>U.S. District Court, District of New Jersey</li>
                                    <li>U.S. District Court, Eastern District of New York</li>
                                    <li>U.S. District Court, Northern District of New York</li>
                                    <li>U.S. District Court, Southern District of New York</li>
                                </ul>
                                <h4>Bar Admissions</h4>
                                <ul>
                                    <li>New York</li>
                                    <li>New Jersey</li>
                                </ul>

                                <h4>Professional Memberships</h4>
                                <ul>
                                    <li>Federal Bar Council</li>
                                    <li>New York City Bar Association</li>
                                    <li>New York State Bar Association</li>
                                </ul>
                                <h4>Speeches</h4>
                                <ul>
                                    <li>City Bar Center for CLE, “Document Retention – Ethical & Legal Practical
                                        Advice.”
                                        Presented with Professor Elizabeth Goldman (Cardozo Law School), Steven G.
                                        Rawlings
                                        (SEC-NY) and Joana Goldenstein (KPMG).
                                    </li>
                                </ul>
                                <h4>Honorarium</h4>
                                <ul>
                                    <li>Super Lawyers Magazine, cited for General, Securities and International
                                        Litigation
                                    </li>
                                </ul>

                                <a class="button hide-details bs_margin40">Hide Details</a>
                            </div>

                        </div>
                    </div>

                </div>
        </section>

    </main>

<?php include '../_footer.php' ?>