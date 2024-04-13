<?php
include 'header.php';
?>
<div class="card-body">
<form action="/action_page.php">
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
  </div>
  <div class="mb-3">
    <label for="roll" class="form-label">Rollno
        
    </label>
    <input type="text" class="form-control" id="pwd" placeholder="Enter roll" name="roll">
  </div>
  <div class="mb-3">
    <label for="course" class="form-label">Course</label>
    <input type="text" class="form-control" id="course" placeholder="Enter course" name="roll">
  </div>
  <div class="form-check mb-3">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="index.php" class="btn btn-primary">Go back</a>
</form>
</div>



<?php
include 'footer.php';
?>