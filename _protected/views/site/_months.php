<?php
use dosamigos\chartjs\ChartJs;
?>
<?= ChartJs::widget([
    'type' => 'line',
    'options' => [
        'height' => 227,
        'width' => 400
    ],
    'data' => [
        'labels' => ["January", "February", "March", "April", "May", "June", "July"],
        'datasets' => [
            [
                'label' => "Betagor Spesial",
                // 'backgroundColor' => "rgba(179,181,198,0.2)",
                'borderColor' => "#D35400",
                'pointBackgroundColor' => "rgba(179,181,198,1)",
                'pointBorderColor' => "#fff",
                'pointHoverBackgroundColor' => "#fff",
                'pointHoverBorderColor' => "rgba(179,181,198,1)",
                'data' => [65, 59, 90, 81, 56, 55, 40]
            ],
            [
                'label' => "Betagor Bulat",
                // 'backgroundColor' => "#7FB3D5",
                'borderColor' => "#34495E",
                'pointBackgroundColor' => "rgba(255,99,132,1)",
                'pointBorderColor' => "#fff",
                'pointHoverBackgroundColor' => "#fff",
                'pointHoverBorderColor' => "rgba(255,99,132,1)",
                'data' => [55, 12, 30, 29, 91, 21, 88]
            ]
        ]
    ]
]);
?>