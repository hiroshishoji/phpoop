<?php
require_once "Student.php";

$student = new Student;

if(isset($_POST['add_student'])){
    $studentname = $_POST['student_name'];
    $course = $_POST['student_course'];
    $gender = $_POST['student_gender'];

    $add_student = $student->addStudent($studentname, $course, $gender);
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
                <h3>Add student</h3>
            </div>
        </div>
        <div class="card-body">
            <?php
            if(isset($add_student)){
                echo "<p class='text-danger text-center'>$add_user</p>";
            }
            ?>
        </div>

        <form method="post">
            <div class="form-group">
                <label>Studentname</label>
                <input type="text" name='studentname' class='form-control'>
            </div>
            <div class="form-group">
                <label>Course</label>
                <input type="text" name='course' class='form-control'>
            </div>
            <div class="form-group">
                <label>Gender</label>
                <input type="text" name='studentname' class='form-control'>
            </div>
            <div class="clearfix">
                <button type="submit" name="add_student" >Add</button>
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