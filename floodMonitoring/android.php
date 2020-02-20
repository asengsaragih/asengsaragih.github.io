<?php
    include ("assets/main/side.php");
?>

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title-1 m-b-25">Data IOT 1</h2>
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3" id="androidData1">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Debit</th>
                                <th>Level</th>
                                <th>Category</th>
                                <th>Show</th>
                            </tr>
                            </thead>
                            <tbody>
                            <script>
                                showDataAndroid1();
                            </script>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title-1 m-b-25">Data IOT 2</h2>
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3" id="androidData2">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Debit</th>
                                <th>Level</th>
                                <th>Category</th>
                                <th>Show</th>
                            </tr>
                            </thead>
                            <tbody>
                            <script>
                                showDataAndroid2();
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