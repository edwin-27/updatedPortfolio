<?php
$title = "Skills";
?>
<?php include 'i_header.php';?>


<div class = "controw">

    <aside>
        <div class = "leftCol">
            <h1> My Skills</h1>
        </div>
    </aside>
    
    <div class = "rightCol">
    <canvas id="myChart" style="width:100%;max-width:800px"></canvas>

            <script>

            var xPoints = ["Java", "Python", "Javascript", "HTML", "CSS", "MySQL", "PHP"];
            var yPoints = [6, 6, 5, 7, 6, 5, 5];    
            var barColors = ["lightblue", "grey","black","red","black", "grey" , "lightblue"];

            new Chart("myChart", {
            type: "bar",
            data: {
                labels: xPoints,
                datasets: [{
                backgroundColor: barColors,
                data: yPoints
                }]
            },
            options: {
                scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    },
                legend: {display: false},
                title: {
                display: true,
                text: "My Skills"
                }
            }
            });
                
            </script>
    </div>        
</div>                


<?php include 'i_footer.php';?>    
    
</body>
</html>