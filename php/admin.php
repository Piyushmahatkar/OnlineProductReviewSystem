<?php
require("connection.php");
include("header1.php");
?>

<!DOCTYPE html>
<html>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/admin.css">
  <head><h2>Hello Admin</h2></head>
  <title>admin.php</title>
<script>
function myfunction(str1,str2) {
    if (str1.length == 0 || str2.length == 0) { 
        document.getElementById("Bluebox").innerHTML = "";
        return;
    } else {
      document.getElementById("Bluebox").innerHTML = "";
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("Bluebox").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "admin-connections.php?sort="+ str1+"&&page="+str2, true);
        xmlhttp.send();
    }
}

</script>
  <body>
  <div  class="Outerbox" >

    <form>
        <select name="sort_by">
          <option value="0">All Products</option>
          <option value="1">All Reviews</option>
          <option value="2">All Users</option>
        </select>

        <select name="Pagination">
          <option value="0">1</option>
          <option value="8">2</option>
          <option value="15">3</option>
          <option value="22">4</option>
        </select>
      <button type="button" onclick="myfunction(sort_by.value,Pagination.value)">Load</button>
    </form>

  <div id="Bluebox" style="overflow-wrap: 100%">
  </div>

  <div class="rightbox">
  <a href="../main.html">Home</a>
    <div><h2>CRUD</h2></div>
    <div class="add_product">
          <form action="admin-connections1.php">
           <input type="text" placeholder="Product Title" name="title_val"/>
           <input type="text" placeholder="Product Category" name="category_val"/>
           <input type="submit" value="Add a Product" /> 
          </form>
    </div>
     <div class="delete_product">
          <form action="admin-connections2.php">
           <input type="text" placeholder="Product ID" name="PID_val"/>
           <input type="text" placeholder="User ID" name="UID_val"/>
           <input type="submit" value="Delete a Product" /> 
          </form>
    </div>
  </div>

  </div>
  </body>
</html>