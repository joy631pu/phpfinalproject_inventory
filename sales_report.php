<?php
include "index.php";
?>
<div class="container">
<form>
  <label for="starttime">Start (date and time):</label>
  <input type="datetime-local" id="starttime" name="starttime">

  <label for="endtime"> End (date and time):</label>
  <input type="datetime-local" id="endtime" name="endtime">
  <input type="submit" name="submit">
</form>
<button type="button" onclick="window.print();return false;">Pdf Report</button>
<div class="container pendingbody">
  <h5>Sales Report</h5>
<table class="table">
  <thead>
    <tr>

      <th scope="col">Name</th>
      <th scope="col">Unit</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>