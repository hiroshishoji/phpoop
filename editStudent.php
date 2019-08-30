<?php
require_once "Student.php";

$student_id = $_GET['student_id'];

$student = new Student;

$get_one_student = $student->getOneStudent($student_id);

if(isset($_POST['update_student'])){
    $studentname = $_POST['studentname'];
    $course = $_POST['course'];
    $gender = $_POST['gender'];

    $update_student = $student->updateStudent($student_id,$studentname, $course, $gender);
}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="card" mt-5>
            <div class="card-header">
                <h3>Edit Student</h3>
            </div>
        </div>
        <div class="card-body">
            <?php
            if(isset($update_student)){
                echo "<p class='text-danger text-center'>$update_student</p>";
            }
            ?>
        </div>

        <form method="post">
            <div class="form-group">
                <label>Studentname</label>
                <input type="text" name='studentname' class='form-control' value="<?php echo $get_one_student['student_name']; ?>">
            </div>
            <div class="form-group">
                <label>Course</label>
                <input type="text" name='course' class='form-control' value="<?php echo $get_one_student['student_course']; ?>">
            </div>
            <div class="form-group">
                <label>Gender</label>
                <input type="text" name='gender' class='form-control' value="<?php echo $get_one_student['student_gender']; ?>">
            </div>
            <div class="from-group">
                <?php
                $student_id = $_GET['student_id'];
                require "Student.php";
                $result = $get_one_student; 
                // getOneStudent($student_id);

                if(!empty($result['student_image'])){
                    echo "<img src='". $result['student_image'] . "' class='img-fluid mx-auto d-block' height='200' width='200'>";
                }
                ?>
            </div>

            <img src="#" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="images/avator.png">
            <div class="form-group">
                <button type="submit" name="update_student" >Update</button>
            </div>
        </form>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>