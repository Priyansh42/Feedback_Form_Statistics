<?php
    include '../config/DBconfig.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Statistics</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
          google.charts.load('current', {'packages':['corechart','bar']});
          google.charts.setOnLoadCallback(drawChart);
    
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Question', 'Very Bad', 'Bad', 'Good', 'Excellent'],
                <?php
                    $values=array();
                    $count=0;
                    for($i = 1; $i < 5; $i++)
                    {
                        for($j = 1; $j < 5; $j++)
                        {
                            $query = "SELECT COUNT(question_no) FROM tbl_feedback_data INNER JOIN tbl_ratings ON tbl_feedback_data.rating_id=tbl_ratings.rating_id WHERE question_no=$i AND tbl_feedback_data.rating_id=$j";
                            $res = mysqli_query($connect,$query);
                            while($data=mysqli_fetch_array($res))
                            {
                                $values[$count]=$data['COUNT(question_no)'];
                                $count = $count+1;
                            }
                        }
                            ?>
                            [<?php echo "'q".$i."'";?>, <?php echo $values[$count-4];?>, <?php echo $values[$count-3];?>, <?php echo $values[$count-2];?>, <?php echo $values[$count-1];?>],
                            <?php
                    }
                ?>
            ]);

            var options = {
                width: 1260,
                height: 300,
                legend: { position: 'top', maxLines: 3 },
                bar: { groupWidth: '75%' },
                isStacked: true
            };

          
            var chart = new google.visualization.BarChart(document.getElementById('barchart_values'));
          
            chart.draw(data, options);
          }
        </script>
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">FORM STATISTICS</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 text-dark" href="feedbackForm.php">Feedback Form</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 bg-primary text-white" href="#">Statistics</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h4 class="card-title">
                                            Feedback Form Graph
                                        </h4>
                                    </div>

                                    <div id="barchart_values" style="width: 1260px; height: 300px;"></div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
