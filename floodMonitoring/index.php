<?php
    include ("assets/main/side.php");
?>

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-25">
                <h2 class="title-1 m-b-25 col-lg-12">Recent Statistics</h2>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item">
                        <h2 class="number" id="recentDevice1"><script>getLastNodeRecentIOT1();</script></h2>
                        <span class="desc">Status IOT1</span>
                        <div class="icon">
                            <i class="zmdi zmdi-pin"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item">
                        <h2 class="number" id="recentDevice2"><script>getLastNodeRecentIOT2();</script></h2>
                        <span class="desc">Status IOT2</span>
                        <div class="icon">
                            <i class="zmdi zmdi-pin"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item">
                        <h2 class="number">1,086</h2>
                        <span class="desc">banjir terbesar</span>
                        <div class="icon">
                            <i class="zmdi zmdi-info"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item">
                        <h2 class="number">$1,060,386</h2>
                        <span class="desc">Banjir terkecil</span>
                        <div class="icon">
                            <i class="zmdi zmdi-info-outline"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="recent-report2">
                        <h3 class="title-3">Statistic reports</h3>
                        <div class="chart-info">
                            <div class="chart-info__left">
                                <div class="chart-note">
                                    <span class="dot dot--blue"></span>
                                    <span>products</span>
                                </div>
                                <div class="chart-note">
                                    <span class="dot dot--green"></span>
                                    <span>Services</span>
                                </div>
                            </div>
                            <div class="chart-info-right">
                                <div class="rs-select2--dark rs-select2--md m-r-10">
                                    <select class="js-select2" name="property">
                                        <option selected="selected">All Properties</option>
                                        <option value="">Products</option>
                                        <option value="">Services</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                                <div class="rs-select2--dark rs-select2--sm">
                                    <select class="js-select2 au-select-dark" name="time">
                                        <option selected="selected">All Time</option>
                                        <option value="">By Month</option>
                                        <option value="">By Day</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="recent-report__chart">
                            <canvas id="recent-rep2-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title-1 m-b-25">Recent Data IOT 1</h2>
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3" id="dataIOT1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Debit</th>
                                    <th>Level</th>
                                    <th>Category</th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    showData1();
                                </script>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title-1 m-b-25">Recent Data IOT 2</h2>
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3" id="dataIOT2">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Debit</th>
                                <th>Level</th>
                                <th>Category</th>
                            </tr>
                            </thead>
                            <tbody>
                                <script>
                                    showData2();
                                </script>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include ("assets/main/footer.php");
?>