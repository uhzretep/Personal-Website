<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $db = 'covid';
    
    /*$servername = "localhost";
    $username = "zhukehua_covid";
    $password = "covid";
    $db = 'zhukehua_covid';
    */
    $mysqli = new mysqli($servername, $username, $password, $db) or die($mysqli->error);

    $table_name = 'covid';

    $week_end = '';
    $nt_a1_1 = $nt_a1_10 = $nt_a1_11 = $nt_a1_12 = $nt_a1_13 = $nt_a1_24 = $nt_a1_35 = '';
    $nt_a1_46 = $nt_a1_47 = $nt_a1_48 = $nt_a1_59 = $nt_a1_60 = $nt_a1_61 = $nt_a1_62 = '';
    $nt_f_1 = $nt_f_10 = $nt_f_11 = $nt_f_12 = $nt_f_13 = $nt_f_24 = $nt_f_35 = '';
    $nt_f_46 = $nt_f_47 = $nt_f_48 = $nt_f_59 = $nt_f_60 = $nt_f_61 = $nt_f_62 = '';
    $pt_a1_1 = $pt_a1_10 = $pt_a1_11 = $pt_a1_12 = $pt_a1_13 = $pt_a1_24 = $pt_a1_35 = '';
    $pt_a1_46 = $pt_a1_47 = $pt_a1_48 = $pt_a1_59 = $pt_a1_60 = $pt_a1_61 = $pt_a1_62 = '';
    $pt_f_1 = $pt_f_10 = $pt_f_11 = $pt_f_12 = $pt_f_13 = $pt_f_24 = $pt_f_35 = '';
    $pt_f_46 = $pt_f_47 = $pt_f_48 = $pt_f_59 = $pt_f_60 = $pt_f_61 = $pt_f_62 = '';

    //Canada
    $sql = "SELECT * FROM `$table_name` WHERE pruid = 1";
    $result = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $nt_a1_1 = $nt_a1_1.'"'.$row['numtotal_atleast1dose'].'",';
        $nt_f_1 = $nt_f_1.'"'.$row['numtotal_fully'].'",';
        $pt_a1_1 = $pt_a1_1.'"'.$row['proptotal_atleast1dose'].'",';
        $pt_f_1 = $pt_f_1.'"'.$row['proptotal_fully'].'",';
        $week_end = $week_end . '"'. $row['week_end'].'",';
    }

    //Newfoundland and Labrador
    $sql = "SELECT * FROM `$table_name` WHERE pruid = 10";
    $result = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $nt_a1_10 = $nt_a1_10.'"'.$row['numtotal_atleast1dose'].'",';
        $nt_f_10 = $nt_f_10.'"'.$row['numtotal_fully'].'",';
        $pt_a1_10 = $pt_a1_10.'"'.$row['proptotal_atleast1dose'].'",';
        $pt_f_10 = $pt_f_10.'"'.$row['proptotal_fully'].'",';
    }

    //Prince Edward Island
    $sql = "SELECT * FROM `$table_name` WHERE pruid = 11";
    $result = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $nt_a1_11 = $nt_a1_11.'"'.$row['numtotal_atleast1dose'].'",';
        $nt_f_11 = $nt_f_11.'"'.$row['numtotal_fully'].'",';
        $pt_a1_11 = $pt_a1_11.'"'.$row['proptotal_atleast1dose'].'",';
        $pt_f_11 = $pt_f_11.'"'.$row['proptotal_fully'].'",';
    }

    //Nova Scotia
    $sql = "SELECT * FROM `$table_name` WHERE pruid = 12";
    $result = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $nt_a1_12 = $nt_a1_12.'"'.$row['numtotal_atleast1dose'].'",';
        $nt_f_12 = $nt_f_12.'"'.$row['numtotal_fully'].'",';
        $pt_a1_12 = $pt_a1_12.'"'.$row['proptotal_atleast1dose'].'",';
        $pt_f_12 = $pt_f_12.'"'.$row['proptotal_fully'].'",';
    }

    //New Brunswick
    $sql = "SELECT * FROM `$table_name` WHERE pruid = 13";
    $result = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $nt_a1_13 = $nt_a1_13.'"'.$row['numtotal_atleast1dose'].'",';
        $nt_f_13 = $nt_f_13.'"'.$row['numtotal_fully'].'",';
        $pt_a1_13 = $pt_a1_13.'"'.$row['proptotal_atleast1dose'].'",';
        $pt_f_13 = $pt_f_13.'"'.$row['proptotal_fully'].'",';
    }

    //Quebec
    $sql = "SELECT * FROM `$table_name` WHERE pruid = 24";
    $result = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $nt_a1_24 = $nt_a1_24.'"'.$row['numtotal_atleast1dose'].'",';
        $nt_f_24 = $nt_f_24.'"'.$row['numtotal_fully'].'",';
        $pt_a1_24 = $pt_a1_24.'"'.$row['proptotal_atleast1dose'].'",';
        $pt_f_24 = $pt_f_24.'"'.$row['proptotal_fully'].'",';
    }

    //Ontario
    $sql = "SELECT * FROM `$table_name` WHERE pruid = 35";
    $result = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $nt_a1_35 = $nt_a1_35.'"'.$row['numtotal_atleast1dose'].'",';
        $nt_f_35 = $nt_f_35.'"'.$row['numtotal_fully'].'",';
        $pt_a1_35 = $pt_a1_35.'"'.$row['proptotal_atleast1dose'].'",';
        $pt_f_35 = $pt_f_35.'"'.$row['proptotal_fully'].'",';
    }

    //Manitoba
    $sql = "SELECT * FROM `$table_name` WHERE pruid = 46";
    $result = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $nt_a1_46 = $nt_a1_46.'"'.$row['numtotal_atleast1dose'].'",';
        $nt_f_46 = $nt_f_46.'"'.$row['numtotal_fully'].'",';
        $pt_a1_46 = $pt_a1_46.'"'.$row['proptotal_atleast1dose'].'",';
        $pt_f_46 = $pt_f_46.'"'.$row['proptotal_fully'].'",';
    }

    //Saskatchewan
    $sql = "SELECT * FROM `$table_name` WHERE pruid = 47";
    $result = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $nt_a1_47 = $nt_a1_47.'"'.$row['numtotal_atleast1dose'].'",';
        $nt_f_47 = $nt_f_47.'"'.$row['numtotal_fully'].'",';
        $pt_a1_47 = $pt_a1_47.'"'.$row['proptotal_atleast1dose'].'",';
        $pt_f_47 = $pt_f_47.'"'.$row['proptotal_fully'].'",';
    }

    //Alberta
    $sql = "SELECT * FROM `$table_name` WHERE pruid = 48";
    $result = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $nt_a1_48 = $nt_a1_48.'"'.$row['numtotal_atleast1dose'].'",';
        $nt_f_48 = $nt_f_48.'"'.$row['numtotal_fully'].'",';
        $pt_a1_48 = $pt_a1_48.'"'.$row['proptotal_atleast1dose'].'",';
        $pt_f_48 = $pt_f_48.'"'.$row['proptotal_fully'].'",';
    }

    //British Columbia
    $sql = "SELECT * FROM `$table_name` WHERE pruid = 59";
    $result = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $nt_a1_59 = $nt_a1_59.'"'.$row['numtotal_atleast1dose'].'",';
        $nt_f_59 = $nt_f_59.'"'.$row['numtotal_fully'].'",';
        $pt_a1_59 = $pt_a1_59.'"'.$row['proptotal_atleast1dose'].'",';
        $pt_f_59 = $pt_f_59.'"'.$row['proptotal_fully'].'",';
    }

    //Yukon
    $sql = "SELECT * FROM `$table_name` WHERE pruid = 60";
    $result = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $nt_a1_60 = $nt_a1_60.'"'.$row['numtotal_atleast1dose'].'",';
        $nt_f_60 = $nt_f_60.'"'.$row['numtotal_fully'].'",';
        $pt_a1_60 = $pt_a1_60.'"'.$row['proptotal_atleast1dose'].'",';
        $pt_f_60 = $pt_f_60.'"'.$row['proptotal_fully'].'",';
    }

    //Northwest Territories
    $sql = "SELECT * FROM `$table_name` WHERE pruid = 61";
    $result = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $nt_a1_61 = $nt_a1_61.'"'.$row['numtotal_atleast1dose'].'",';
        $nt_f_61 = $nt_f_61.'"'.$row['numtotal_fully'].'",';
        $pt_a1_61 = $pt_a1_61.'"'.$row['proptotal_atleast1dose'].'",';
        $pt_f_61 = $pt_f_61.'"'.$row['proptotal_fully'].'",';
    }

    //Nunavut
    $sql = "SELECT * FROM `$table_name` WHERE pruid = 62";
    $result = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $nt_a1_62 = $nt_a1_62.'"'.$row['numtotal_atleast1dose'].'",';
        $nt_f_62 = $nt_f_62.'"'.$row['numtotal_fully'].'",';
        $pt_a1_62 = $pt_a1_62.'"'.$row['proptotal_atleast1dose'].'",';
        $pt_f_62 = $pt_f_62.'"'.$row['proptotal_fully'].'",';
    }
?>


<!doctype html>
<html lang="en">
    <head>
        <!-- Meta tags -->
        <title>National Vaccination Coverage</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Favicons -->
        <link href="assets/img/favicon.ico" rel="icon">
        <!-- <link href="assets/img/favicon.ico" rel="apple-touch-icon"> -->

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

        <!-- Template CSS Files -->
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/interactive-chart.css" rel="stylesheet">

        <!-- Vendor JS Files -->
        <script src="assets\vendor\chart\package\dist\chart.min.js"></script>
    </head>

    <body>
        <div class="container">
            <h3>National Vaccination Coverage</h3>
            
            <select id="data-rep">
                <option selected="" value="nt">Cumulative number</option>    
                <option value="pt">Cumulative percent</option>
            </select> of people who 
            <select id="category">
                <option selected="" value="_a1">received at least 1 dose</option>
                <option value="_f">are fully vaccinated</option>
            </select> in 
            <select id="location">
                <option selected="" value="_1">Canada</option>
                <option value="_10">Newfoundland and Labador</option>
                <option value="_11">Prince Edward Island</option>
                <option value="_12">Nova Scotia</option>
                <option value="_13">New Brunswick</option>
                <option value="_24">Quebec</option>
                <option value="_35">Ontario</option>
                <option value="_46">Manitoba</option>
                <option value="_47">Saskatchewan</option>
                <option value="_48">Alberta</option>
                <option value="_59">British Columbia</option>
                <option value="_60">Yukon</option>
                <option value="_61">Northwest Territories</option>
                <option value="_62">Nunavut</option>
            </select>

            <canvas id="chart"></canvas>

            <p class="reference">Data from <a href="https://health-infobase.canada.ca/covid-19/vaccination-coverage/">https://health-infobase.canada.ca/covid-19/vaccination-coverage/</a></p>

            <script>
                var ctx = document.getElementById("chart").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: [<?php echo $week_end; ?>],
                        datasets: 
                        [{
                            label: '# of people',
                            data: [<?php echo $nt_a1_1; ?>],
                            backgroundColor: 'rgba(255,99,132)',
                            borderColor:'rgba(255,99,132)',
                            borderWidth: 3
                        }]
                    },
                
                    options: {
                        tooltips:{mode: 'index'},
                        legend:{
                            display: true, 
                            position: 'top', 
                            labels: {fontColor: 'rgb(255,255,255)', fontSize: 16}
                        }
                    }
                });

                var chartDataRep = document.getElementById("data-rep");
                var chartCategory = document.getElementById("category");
                var chartLocation = document.getElementById("location");
                [chartDataRep, chartCategory, chartLocation].forEach(function(element) {
                    element.addEventListener("change", updateChart);
                });

                function updateChart() {
                    var newData = chartDataRep.value + chartCategory.value + chartLocation.value;
                    switch(chartDataRep.value){
                        case "nt": 
                            myChart.data.datasets[0].label = " # of people";
                            myChart.options.scales.y.ticks.callback = function(value){return parseInt(value).toLocaleString()};
                            break;
                        case "pt": 
                            myChart.data.datasets[0].label = " % of people";
                            myChart.options.scales.y.ticks.callback = function(value){return value + "%"};
                            break;
                        default:
                    }
                    switch(newData) {
                        case "nt_a1_1": myChart.data.datasets[0].data = [<?php echo $nt_a1_1; ?>];
                            break;
                        case "nt_a1_10": myChart.data.datasets[0].data = [<?php echo $nt_a1_10; ?>];
                            break;
                        case "nt_a1_11": myChart.data.datasets[0].data = [<?php echo $nt_a1_11; ?>];
                            break;
                        case "nt_a1_12": myChart.data.datasets[0].data = [<?php echo $nt_a1_12; ?>];
                            break;
                        case "nt_a1_13": myChart.data.datasets[0].data = [<?php echo $nt_a1_13; ?>];
                            break;
                        case "nt_a1_24": myChart.data.datasets[0].data = [<?php echo $nt_a1_24; ?>];
                            break;
                        case "nt_a1_35": myChart.data.datasets[0].data = [<?php echo $nt_a1_35; ?>];
                            break;
                        case "nt_a1_46": myChart.data.datasets[0].data = [<?php echo $nt_a1_46; ?>];
                            break;
                        case "nt_a1_47": myChart.data.datasets[0].data = [<?php echo $nt_a1_47; ?>];
                            break;
                        case "nt_a1_48": myChart.data.datasets[0].data = [<?php echo $nt_a1_48; ?>];
                            break;
                        case "nt_a1_59": myChart.data.datasets[0].data = [<?php echo $nt_a1_59; ?>];
                            break;
                        case "nt_a1_60": myChart.data.datasets[0].data = [<?php echo $nt_a1_60; ?>];
                            break;
                        case "nt_a1_61": myChart.data.datasets[0].data = [<?php echo $nt_a1_61; ?>];
                            break;
                        case "nt_a1_62": myChart.data.datasets[0].data = [<?php echo $nt_a1_62; ?>];
                            break;
                        case "nt_f_1": myChart.data.datasets[0].data = [<?php echo $nt_f_1; ?>];
                            break;
                        case "nt_f_10": myChart.data.datasets[0].data = [<?php echo $nt_f_10; ?>];
                            break;
                        case "nt_f_11": myChart.data.datasets[0].data = [<?php echo $nt_f_11; ?>];
                            break;
                        case "nt_f_12": myChart.data.datasets[0].data = [<?php echo $nt_f_12; ?>];
                            break;
                        case "nt_f_13": myChart.data.datasets[0].data = [<?php echo $nt_f_13; ?>];
                            break;
                        case "nt_f_24": myChart.data.datasets[0].data = [<?php echo $nt_f_24; ?>];
                            break;
                        case "nt_f_35": myChart.data.datasets[0].data = [<?php echo $nt_f_35; ?>];
                            break;
                        case "nt_f_46": myChart.data.datasets[0].data = [<?php echo $nt_f_46; ?>];
                            break;
                        case "nt_f_47": myChart.data.datasets[0].data = [<?php echo $nt_f_47; ?>];
                            break;
                        case "nt_f_48": myChart.data.datasets[0].data = [<?php echo $nt_f_48; ?>];
                            break;
                        case "nt_f_59": myChart.data.datasets[0].data = [<?php echo $nt_f_59; ?>];
                            break;
                        case "nt_f_60": myChart.data.datasets[0].data = [<?php echo $nt_f_60; ?>];
                            break;
                        case "nt_f_61": myChart.data.datasets[0].data = [<?php echo $nt_f_61; ?>];
                            break;
                        case "nt_f_62": myChart.data.datasets[0].data = [<?php echo $nt_f_62; ?>];
                            break;
                        case "pt_a1_1": myChart.data.datasets[0].data = [<?php echo $pt_a1_1; ?>];
                            break;
                        case "pt_a1_10": myChart.data.datasets[0].data = [<?php echo $pt_a1_10; ?>];
                            break;
                        case "pt_a1_11": myChart.data.datasets[0].data = [<?php echo $pt_a1_11; ?>];
                            break;
                        case "pt_a1_12": myChart.data.datasets[0].data = [<?php echo $pt_a1_12; ?>];
                            break;
                        case "pt_a1_13": myChart.data.datasets[0].data = [<?php echo $pt_a1_13; ?>];
                            break;
                        case "pt_a1_24": myChart.data.datasets[0].data = [<?php echo $pt_a1_24; ?>];
                            break;
                        case "pt_a1_35": myChart.data.datasets[0].data = [<?php echo $pt_a1_35; ?>];
                            break;
                        case "pt_a1_46": myChart.data.datasets[0].data = [<?php echo $pt_a1_46; ?>];
                            break;
                        case "pt_a1_47": myChart.data.datasets[0].data = [<?php echo $pt_a1_47; ?>];
                            break;
                        case "pt_a1_48": myChart.data.datasets[0].data = [<?php echo $pt_a1_48; ?>];
                            break;
                        case "pt_a1_59": myChart.data.datasets[0].data = [<?php echo $pt_a1_59; ?>];
                            break;
                        case "pt_a1_60": myChart.data.datasets[0].data = [<?php echo $pt_a1_60; ?>];
                            break;
                        case "pt_a1_61": myChart.data.datasets[0].data = [<?php echo $pt_a1_61; ?>];
                            break;
                        case "pt_a1_62": myChart.data.datasets[0].data = [<?php echo $pt_a1_62; ?>];
                            break;
                        case "pt_f_1": myChart.data.datasets[0].data = [<?php echo $pt_f_1; ?>];
                            break;
                        case "pt_f_10": myChart.data.datasets[0].data = [<?php echo $pt_f_10; ?>];
                            break;
                        case "pt_f_11": myChart.data.datasets[0].data = [<?php echo $pt_f_11; ?>];
                            break;
                        case "pt_f_12": myChart.data.datasets[0].data = [<?php echo $pt_f_12; ?>];
                            break;
                        case "pt_f_13": myChart.data.datasets[0].data = [<?php echo $pt_f_13; ?>];
                            break;
                        case "pt_f_24": myChart.data.datasets[0].data = [<?php echo $pt_f_24; ?>];
                            break;
                        case "pt_f_35": myChart.data.datasets[0].data = [<?php echo $pt_f_35; ?>];
                            break;
                        case "pt_f_46": myChart.data.datasets[0].data = [<?php echo $pt_f_46; ?>];
                            break;
                        case "pt_f_47": myChart.data.datasets[0].data = [<?php echo $pt_f_47; ?>];
                            break;
                        case "pt_f_48": myChart.data.datasets[0].data = [<?php echo $pt_f_48; ?>];
                            break;
                        case "pt_f_59": myChart.data.datasets[0].data = [<?php echo $pt_f_59; ?>];
                            break;
                        case "pt_f_60": myChart.data.datasets[0].data = [<?php echo $pt_f_60; ?>];
                            break;
                        case "pt_f_61": myChart.data.datasets[0].data = [<?php echo $pt_f_61; ?>];
                            break;
                        case "pt_f_62": myChart.data.datasets[0].data = [<?php echo $pt_f_62; ?>];
                            break;
                        default:
                    }
                    myChart.update();
                }
            </script>
        </div>
        

        <!-- Footer -->
        <footer id="footer">
            <div class="container">
                <h3>Peter Zhu</h3>
                <p>Please hire me.</p>
                <div class="social-links">
                    <a href="https://linkedin.com/in/kehua-peter-zhu/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    <a href="https://github.com/uhzretep/" class="github"><i class="bx bxl-github"></i></a>
                    <a href="https://peter-zhu.ca/" class="mywebsite"><i class="bx bxs-face"></i></a>
                </div>
            </div>
        </footer>

        <!-- Template JS File -->
        <script src="assets/vendor/jquery/jquery.min.js"></script>
    </body>
</html>