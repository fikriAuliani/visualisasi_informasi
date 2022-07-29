<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $title ?></title>
</head>

<body>


    <div id="container"></div>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script type="text/javascript">


        //membuat chart pie
        Highcharts.chart('container', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Stok Produk UMKM batik Zhorif'
            },
            tooltip: {
                pointFormat: '{series.nama_produk}: <b>{point.y}</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'stok produk',
                colorByPoint: true,

                //definisi data produk
                data: [
                    <?php foreach ($produk as $p) : ?> {
                            name: '<?php echo $p['nama_produk']; ?>',
                            y: <?php echo $p['stok']; ?>
                        },
                    <?php endforeach ?>
                ]
            }]
        });

        
    </script>

</body>

</html>