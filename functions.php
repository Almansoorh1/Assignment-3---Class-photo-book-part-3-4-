<?php
    include_once 'data.php';

    function profiledisplay($profiles) {
        for($i=0;$i<count($profiles);$i++){
            ?>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <!-- Team Thumb-->
                    <div class="advisor_thumb">
                        <a href="detail.php?profile=<?= $i ?>"><img src="<?= $profiles[$i]['avataar'] ?>" alt="">
                        <!-- Social Info-->
                        <div class="social-info">
                            <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a><a href="https://www.facebook.com/"><i class="fa fa-twitter"></i></a><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <!-- Team Details-->
                    <div class="single_advisor_details_info">
                        <h6><?= $profiles[$i]['name'] ?></h6>
                        <p class="designation"><?= $profiles[$i]['designation'] ?></p>
                        <p class="designation">Age: <?= indivisualAge($profiles[$i]['birthdate']) ?></p>
                        <p class="designation">Born <?= YMDfinder($profiles[$i]['birthdate']) ?> ago.</p>
                    </div>
                </div>
            </div>;
<?php
        }
    }

    function indivisualAge($birthday) {

        $date = date("Y-m-d");

        $diff = date_diff(date_create($birthday), date_create($date));

        return $diff->format('%y');
    }

    function YMDfinder($birthday) {

        $date = date("Y-m-d");

        $diff = date_diff(date_create($birthday), date_create($date));

        return $diff->format('%y Years, %m Months, and %d Days');
    }
?>
