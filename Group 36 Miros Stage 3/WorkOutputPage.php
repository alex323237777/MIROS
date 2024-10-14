<?php
session_start();

$db = new SQLite3('MIROS.db');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $section = $_POST["section"];
  $item = $_POST["item"];
  $details_quantity = $_POST["details_quantity"];
  $fields = $section . " - " . $item . " - " . $details_quantity;
  $statement = "INSERT INTO Submissions (WorkID, fields) VALUES ('', '$fields')";
}





?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Work Output Page</title>
  <link rel="stylesheet" href="miros.css">
</head>

<body>
  <div class="container">
    <img src="https://img02.mockplus.com/rp/image/2024-03-07/537e3a50-dbe1-11ee-9ed8-7f6f33dbdfc3.png" alt="Logo" class="logo">
    <div class="user-info">
      <button class="language-button bm" style="font-weight:bold; font-size:20px;" onclick="window.location.href='WorkOutputPageM.php'">bm</button>
      <button class="language-button en" style="font-weight:bold; font-size:20px;" onclick="window.location.href='WorkOutputPage.php'">en</button>
      <button style="background-color: blue; font-weight:bold; font-size:20px;" onclick="window.location.href='logout.php'">Log Out</button>
      <img src="https://www.svgrepo.com/show/497407/profile-circle.svg" alt="User Profile" width="55">
    </div>
    <br>
    <br>
    <br>
    <br>
    <form id="myForm">
      <div class="form-group">
        <br>
        <br>
        <label for="sectionid" style="color: black;">Please Select Section</label>
        <select class="sectionclass" id="sectionid" onchange="updateItems()">
          <option value="A">Section A</option>
          <option value="B">Section B</option>
          <option value="C">Section C</option>
          <option value="D">Section D</option>
          <option value="G">Section G</option>
        </select>
      </div>
      <div class="form-group">
        <label for="itemid" style="color: black;">Please Select Item</label>
        <select class="itemclass" id="itemid" name="item" placeholder="Select Item">
          <!-- Options will be populated by JavaScript -->
        </select>
      </div>

      <div class="form-group">
        <label for="DQ" style="color: black;">Details/Quantity</label>
        <input type="text" class="DQclass" id="DQid" placeholder="Details/Quantity" required>
      </div>

      <div>
        <label for="file" style="color: black;">Please Choose File</label>
        <input type="file" class="addfile" id="addfileid" placeholder="Please Choose File" style="color: black;" required>
      </div>
      <br>

      <button type="submit" id="submit-btn">Submit</button>
    </form>
  </div>

  <script>
    function updateItems() {
      var section = document.getElementById("sectionid").value;
      var itemDropdown = document.getElementById("itemid");
      itemDropdown.innerHTML = "";

      var items = {
        A: [
          "A6 - Professional Affilliations/Membership (applicable to relevant fields and approved institutions)"
        ],
        B: [
          "B3 - Operational and Development Responsibilities in MIROS + Committee (proper appointment by management)",
          "B4 - Professional Experiences at International Level",
          "B5 - Professional Experiences at National Level"
        ],
        C: [
          "C1 - Lead New Research Proposal",
          "C2 - Research or Development Projects",
          "C3 - Research and Development Operations"
        ],
        D: [
          "D1 - Commercial/Monetary (initiate and do professional/consultation work) + Commercial/Non-monetary (include meetings, workshop, emails)"
        ],
        G: [
          "G1 - Institute/Community - e.g. residential areas (District,State,National)"
        ]
      };

      items[section].forEach(function(item) {
        var option = document.createElement("option");
        option.text = item;
        itemDropdown.add(option);
      });
    }

    // Call the function once initially to populate the items for the default section
    updateItems();
  </script>
</body>

</html>
