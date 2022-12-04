<?php
    include 'config/DBconfig.php';

    if(isset($_POST['submit']))
    {
        $questionNo = $_POST['questionNo'];
        $rating_id = $_POST['rating'];

        $query = "INSERT INTO tbl_feedback_data (question_no,rating_id) VALUES ('$questionNo','$rating_id')";

        if($questionNo!=0)
        {
            if($rating_id!=0)
            {
                $query_run = mysqli_query($connect, $query);
                if($query_run)
                {
                    echo "<script>alert('Feedback Submited Successfully...')</script>";
                    echo "<script>window.open('views/feedbackForm.php','_self')</script>";
                }
                else 
                {
                    echo "Error: ".mysqli_error($connect);
                }
            }
            else
            {
                echo "<script>alert('Please select the Rating!')</script>";
                echo "<script>window.open('views/feedbackForm.php','_self')</script>";
            }
        }
        else
        {
            echo "<script>alert('Please select the Question!')</script>";
            echo "<script>window.open('views/feedbackForm.php','_self')</script>";
        }
        
        mysqli_close($connect);
    }
?>