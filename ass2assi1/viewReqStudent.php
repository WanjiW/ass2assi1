<?php
include_once('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student page: View Requests</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<div class="container mt-3" class="center">
  <h2>My Requests</h2>
  <p>These are the requests you have submitted!</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Student Email</th>
        <th>Concern</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <!-- <tr>
        <td>a@alustudent.com</td>
        <td>OH request for Tuesday</td>
      </tr> -->
      <tr>
        <td>b@alustudent.com</td>
        <td>Absence Request</td>
        <td>Unanswered</td>
      </tr>
    </tbody>

  </table>
  <a href="sendReq.php">
      <input class="btn btn-success w-100" type="submit" value="Submit Request">
    </a>
</div>


</body>
</html>
