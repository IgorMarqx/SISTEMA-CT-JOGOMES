<?php $render('headerSystem') ?>

<html>

<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Gêneros', 'Quantidade de gêneros'],
                ['Masculino (<?= $masculino ?>)', <?php if($masculino == 0){
                    echo $masculino +=1;
                }else{
                    echo $masculino;
                } ?>],
                ['Feminino (<?= $feminino ?>)', <?php if($feminino == 0){
                    echo $feminino +=1;
                }else {
                    echo $feminino;
                } ?>],
            ]);

            var options = {
                title: 'Quantidade de gêneros',
                pieSliceTextStyle: {
                    color: 'white',
                },
                slices: {
                    0: {
                        color: '#4E73DF'
                    },
                    1: {
                        color: '#1CC88A'
                    }
                },
                pieHole: 0.7,

            };

            var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
            chart.draw(data, options);
        }
    </script>
</head>

<body>
    <div class="col-xl-2 col-md-2">
        <div class="card border-left-primary">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase">
                            Total de Alunos </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-user fa-2x text-secondary-emphasis"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-2 col-md-2">
        <div class="card border-left-primary">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase">
                            Alunos Masculinos</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $masculino ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-mars fa-2x text-secondary-emphasis"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-2 col-md-2">
        <div class="card border-left-primary">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase">
                            Alunos Femininos</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $feminino ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-venus fa-2x text-secondary-emphasis"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="donutchart" style="width: 900px; height: 500px;"></div>
</body>

</html>