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
        <button class="language-button bm" style="font-weight:bold; font-size:20px;" onclick="window.location.href='WorkOutputPageM.php'" >bm</button>
         <button class="language-button en" style="font-weight:bold; font-size:20px;" onclick="window.location.href='WorkOutputPage.php'">en</button>
          <button style="background-color: blue; font-weight:bold; font-size:20px;" onclick="window.location.href='logout.php'">log keluar</button>
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
            <label for="sectionid" style="color: black;">Sila Pilih Bahagian</label>
            <select class="sectionclass" id="sectionid" onchange="updateItems()">
              <option value="A">Bahagian A</option>
              <option value="B">Bahagian B</option>
              <option value="C">Bahagian C</option>
              <option value="D">Bahagian D</option>
              <option value="G">Bahagian G</option>
            </select>
        </div>
        <div class="form-group">
          <label for="itemid" style="color: black;">Sila Pilih Item</label>
          <select class="itemclass" id="itemid" name="item" placeholder="Sila Pilih Item">
            <!-- Options will be populated by JavaScript -->
          </select>
      </div>

      <div class="form-group">
          <label for="DQ" style="color: black;">Butiran/Kuantiti</label>
          <input type="text" class="DQclass" id="DQid" placeholder="Butiran/Kuantiti" required>
      </div>

      <div>
        <label for="file" style="color: black;">Sila Pilih Fail</label>
        <input type="file" class="addfile" id="addfileid" placeholder="Sila Pilih Fail" style="color: black;" required>
      </div>
      <br>
      
      <button type="submit" id="submit-btn">Hantar</button>
    </form>
  </div>

  <script>
    function updateItems() {
      var section = document.getElementById("sectionid").value;
      var itemDropdown = document.getElementById("itemid");
      itemDropdown.innerHTML = "";

      var items = {
        A: [
          "A6 - Gabungan/Keahlian Profesional (terpakai kepada bidang berkaitan dan institusi yang diluluskan)"
        ],
        B: [
          "B3 - Tanggungjawab Operasi dan Pembangunan dalam MIROS + Jawatankuasa (pelantikan sewajarnya oleh pengurusan)",
          "B4 - Pengalaman Profesional di Peringkat Antarabangsa",
          "B5 - Pengalaman Profesional di Peringkat Kebangsaan"
        ],
        C: [
          "C1 - Mengetuai Cadangan Penyelidikan Baharu",
          "C2 - Projek Penyelidikan atau Pembangunan",
          "C3 - Operasi Penyelidikan dan Pembangunan"
        ],
        D: [
          "D1 - Komersial/Monetari (memulakan dan melakukan kerja profesional/perundingan) + Komersial/Bukan kewangan (termasuk mesyuarat, bengkel, e-mel)"
        ],
        G: [
          "G1 - Institut/Komuniti - cth. kawasan perumahan (Daerah, Negeri, Kebangsaan)"
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
