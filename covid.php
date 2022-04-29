    <?php
    @$get_data = file_get_contents('https://covid19.ddc.moph.go.th/api/Cases/today-cases-all');
    $covid19_th = json_decode($get_data);
    // echo '<pre>';
    // print_r($covid19_th);
    // echo '</pre>';
    // get data 
    // U can change data to show By This below data
    $txn_date = $covid19_th[0]->txn_date;
    $new_case = $covid19_th[0]->new_case;
    $total_case = $covid19_th[0]->total_case;
    $new_death = $covid19_th[0]->new_death;
    $total_death = $covid19_th[0]->total_death;
    $new_recovered = $covid19_th[0]->new_recovered;
    $total_recovered = $covid19_th[0]->total_recovered;
    $update_date = $covid19_th[0]->update_date;
    ?>
    <div class="container">
        <div class="row">
            <div class="col col-sm-12">
                <h3 style="margin-top: 30px;"> รายงานสถานการณ์ โควิด-19 </h3>
                <h5>ข้อมูลประจำวันที่ :
                    <?php echo  $txn_date; ?> </h5>
            </div>

            <div class="col-12 col-sm-6">
                <div class="alert alert-danger" role="alert">
                    <b>ติดเชื้อรายใหม่ : <?php echo  number_format($new_case); ?> </b> ราย
                </div>
            </div>

            <div class="col-12 col-sm-6">
                <div class="alert alert-primary " role="alert">
                    <b>อัพเดทข้อมูลล่าสุด : <?php echo  $update_date; ?> </b>
                </div>
            </div>

            <div class="col-6 col-sm-3">
                <div class="alert alert-info" role="alert">
                    <b>ติดเชื้อรวม : <br> <?php echo  number_format($total_case); ?> </b> ราย
                </div>
            </div>
            <div class="col-6 col-sm-3">
                <div class="alert alert-success" role="alert">
                    <b>หายแล้วรวม : <br> <?php echo  number_format($total_recovered); ?> </b> ราย
                </div>
            </div>
            <div class="col-6 col-sm-3">
                <div class="alert alert-warning" role="alert">
                    <b>รักษาอยู่ใน รพ. <br> <?php echo  number_format($total_case - $total_recovered); ?> </b> ราย
                </div>
            </div>
            <div class="col-6 col-sm-3">
                <div class="alert alert-dark" role="alert">
                    <b>เสียชีวิต <br> <?php echo  number_format($new_death); ?> </b> ราย
                </div>
            </div>
        </div>
        <br>
        <center>
            <h4>Info Form : <a href="https://covid19.ddc.moph.go.th/">MOPH.GO.TH</a></h4>
            <h5>Api Link : <a href="https://covid19.ddc.moph.go.th/api/Cases/today-cases-all">https://covid19.ddc.moph.go.th/api/Cases/today-cases-all</a></h5>
            <h5>You Can Download Sorce Code At <a href="//meaookung144.xyz/project/src">Src Project</a></h5>
            <h5>Develop By : <a href="//meaookung144.xyz/">Meaookung144</a></h5>
        </center>
    </div>