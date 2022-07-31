<?php
  require "db_connection.php";

  if($con) {


    if(isset($_GET["action"]) && $_GET["action"] == "search")
      searchCustomer(strtoupper($_GET["text"]));
  }

  function showCustomers($id) {
    require "db_connection.php";
    if($con) {
      $seq_no = 0;
      $query = "SELECT * FROM workers";
      $result = mysqli_query($con, $query);
      while($row = mysqli_fetch_array($result)) {
        $seq_no++;
        if($row['ID'] == $id)
          showEditOptionsRow($seq_no, $row);
        else
          showCustomerRow($seq_no, $row);
      }
    }
  }

  function showCustomerRow($seq_no, $row) {
    ?>
    <tr>
      <td><?php echo $seq_no; ?></td>
      <td><?php echo $row['ID'] ?></td>
      <td><?php echo $row['NAME']; ?></td>
      <td><?php echo $row['role']; ?></td>
      <td><select class="form-control"  id="" name="status" type="text"  required>
            <option></option>
            <option>half (4 Hours)</option>
            <option>One (8 Hours)</option>
            <option>One and half (12 Hours)</option>
            <option>Two (16 Hours)</option>
            </select></td>
      <td><select class="form-control"  id="" name="status" type="text"  required>
            <option></option>
            <option>Present</option>
            <option>Absent</option>
            </select></td>
      
    </tr>
    <?php
  }
  
function searchCustomer($text) {
  require "db_connection.php";
  if($con) {
    $seq_no = 0;
    $query = "SELECT * FROM workers WHERE UPPER(NAME) LIKE '%$text%'";
    $result = mysqli_query($con, $query);
    while($row = mysqli_fetch_array($result)) {
      $seq_no++;
      showCustomerRow($seq_no, $row);
    }
  }
}

?>
