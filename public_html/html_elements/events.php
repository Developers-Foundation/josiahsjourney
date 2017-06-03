


<!--

2016: October, 2016. Josiah's Journey was pleased to provide scholarships for four delegates to
attend the bi-annual International Perinatal Palliative Care Conference hosted by PLIDA in Phoenix, Arizona.

-->

<div class="row events">

    <div class="row">
        <h2 class="inset title">Upcoming and Past Events</h2>
    </div>

    <!-- Upcoming event -->
    <div class="eventSection row">
        <div class="row">

            <!-- Main event image -->
            <div class="col-md-6 text-center">
                <img src="./assets/img/SickKids/2016_.png" class="img-responsive eventImage">
            </div>

            <div class="col-md-6 text-lowercase">
                <div class="text-center">
                    <ul class="list-unstyled">
                        <li class="font-weight-600 border-bottom">
                            oct
                        </li>
                        <li>2016</li>
                    </ul>
                </div>

                <h3>International Perinatal Palliative Care Conference</h3>

                <ul class="list-inline">
                    <li><i class="fa fa-map-marker mr-5"></i> Phoenix, Arizona</li>
                </ul>

                <p>
                    Josiah's Journey was pleased to provide scholarships for four delegates to attend the bi-annual
                    International Perinatal Palliative Care Conference hosted by <span class="text-uppercase">PLIDA</span>.
                </p>

                <!--
                <div>
                    <a class="btn btn-dark" href="#">Register</a>
                    <a class="btn btn-dark" href="#">Details</a>
                </div>
                -->

            </div>
        </div>

    </div>

    <!-- Past events -->
    <div class="eventSection">
        <div class="row text-lowercase">
            <div class="col-sm-1 ">
                <div class="text-center">
                    <ul class="list-unstyled">
                        <li class="font-weight-600 border-bottom">06-07</li>
                        <li>jul</li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-11">
                <h3>2015 - Global Weekend to Walk</h3>
                <ul class="list-inline">
                    <li><i class='fa fa-map-marker mr-5'></i> Anytime, anywhere</li>
                </ul>
                <p>
                    Participants and sponsors were invited
                    to “Walk where you are – Anytime, Anywhere, Anyplace” around the world in support of  SickKids,
                    Toronto. $30,777.30 raised
                </p>
            </div>
        </div>
    </div>

    <div class="eventSection">
        <div class="row text-lowercase">
            <div class="col-sm-1 ">
                <div class="text-center">
                    <ul class="list-unstyled">
                        <li class="font-weight-600 border-bottom">
                            <i class="fa fa-2x fa-trophy"></i>
                        </li>
                        <li>
                            2015
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-11">
                <h3>2015 - Junior Farmers' Association of Ontario Provincial Charity of the Year</h3>
                <p>
                    Junior Farmers' Association of Ontario chooses Josiah's Journey as their Provincial
                    Charity of the Year, raising money in support of the Paediatric Advanced Care Team
                    at the Hospital for Sick Children (SickKids), Toronto
                </p>
            </div>
        </div>
    </div>

    <?php
    $yr = ['2014', '2013', '2012', '2011'];
    $mnths = ['jun', 'jun', 'jul', 'jul'];
    $days = ['01', '02', '15', '24'];
    $amt = ['​$39,651.40​', '​​$40,619.24', '$25,811.35', '$20,855.43' ];
    for($i = 0; $i < sizeof($yr); $i++){
        echo ("
        <div class='eventSection'><div class='row text-lowercase'>
            <div class='col-sm-1'><div class='text-center'>
                    <ul class='list-unstyled'>
                        <li class='font-weight-600 border-bottom'>" . $days[$i] . "</li>
                        <li>" . $mnths[$i] . "</li>
                    </ul>
            </div></div>

            <div class='col-sm-11'>
                <h3>" . $yr[$i] . " - Josiah's Journey ​Run/Walk in the Park</h3>
                <ul class='list-inline'>
                    <li><i class='fa fa-map-marker mr-5'></i> Springbank Gardens, London Ontario</li>
                </ul>
                <p>" . $amt[$i] . "​ raised for the Neonatal Intensive Care Unit (NICU) at Children's Hospital, London.</p>
            </div>
        </div></div>");
    }
    ?>

</div>
