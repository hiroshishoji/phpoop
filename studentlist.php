<?php
require_once "Student.php";

$student = new Student;

$get_all_student = $student->getAllStudent();

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
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Student List</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                    <th>ID</th>
                                    <th>Studentname</th>
                                    <th>course</th>
                                    <th>gender</th>
                                    <th>photo</th>
                                    <th></th>
                            </thead>
                            <tbody>
                                <?php
                                    if($get_all_student == false){
                                        echo "<tr><td colspan='6' class='text-center'>No Student</td></tr>";
                                    } else {
                                        foreach($get_all_student as $key => $row){
                                            $student_id = $row['student_id'];

                                            echo "<tr>";
                                            echo "<td>". $row['student_id']. "</td>";
                                            echo "<td>". $row['student_name']. "</td>";
                                            echo "<td>". $row['student_course']. "</td>";
                                            echo "<td>". $row['student_gender']. "</td>";
                                            echo "<td>". $row['student_photo']. "</td>";
                                            echo "<td><a href='editStudent.php?student_id=$student_id' class='btn btn-info'>Edit</a> 
                                            <a href='deleteStudent.php?student_id=$student_id' class='btn btn-danger'>Delte</a>
                                            <a href='addphoto.php?student_id=$student_id' class='btn btn-success'>Add image</a></td>";
                                            echo "</tr>";
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                        <a type="submit" href="addStudent.php" class="text-center">Add student</a>
                    </div>
                </div>
            </div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>