<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Feedback Form</title>
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">FORM STATISTICS</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 bg-primary text-white" href="#">Feedback Form</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 text-dark" href="statistics.php">Statistics</a>
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
                                            Feedback Form
                                        </h4>
                                    </div>
                
                                    <form action="../submitFeedback.php" method="POST">
                                        <div class="form-group row mt-3 mb-3">
                                            <div class="col-md-2">
                                                <label for="questionNo" class="text-md col-form-label" style="margin-left: 1rem;">Question Number</label>
                                            </div>
                                            <div class="col-md-3">
                                                <select id="select-question" class="form-select" name="questionNo">
                                                    <option value="0" selected>Select Question</option>
                                                    <option value="1">Question 1</option>
                                                    <option value="2">Question 2</option>
                                                    <option value="3">Question 3</option>
                                                    <option value="4">Question 4</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-3">
                                            <div class="col-md-2">
                                                <label for="rating" class="text-md col-form-label" style="margin-left: 1rem;">Rating</label>
                                            </div>
                                            <div class="col-md-3">
                                                <select class="form-select" id="select-rating" name="rating">
                                                    <option value="0" selected>Select Rating</option>
                                                    <option value="1">Very Bad</option>
                                                    <option value="2">Bad</option>
                                                    <option value="3">Good</option>
                                                    <option value="4">Excellent</option>
                                                  </select>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <input type="submit" class="btn btn-primary" id="submitFeedback" name="submit" value="Submit Feedback">
                                        </div>
                                    </form>
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
