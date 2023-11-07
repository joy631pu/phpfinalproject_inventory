<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comox Fashion</title>
</head>
<body>
<div class="container">
  <!-- Form for showing purchase report based on a start date and end date -->
<form>
  <label for="starttime">Start (date and time):</label>
  <input type="datetime-local" id="starttime" name="starttime">

  <label for="endtime"> End (date and time):</label>
  <input type="datetime-local" id="endtime" name="endtime">
  <input type="submit" name="submit">
</form>
<!-- Button for printing report -->
<button type="button" onclick="window.print();return false;">Pdf Report</button>
<h5>Purchase Report</h5>
<!-- Table for showing different purchase element -->
<table class="table table-striped">
  <thead>
    <tr>
      <!--<th scope="col">#</th>-->
      <th scope="col">Product Name</th>
      <th scope="col">Unit</th>
      <th scope="col">Total Unit Price</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
</div>
</body>
</html>