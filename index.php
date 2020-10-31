<!DOCTYPE html>
  <head>
    <title>Online restaurant menu</title>    
		<link rel="stylesheet" href="style.css">
     </head>
  <body id="mainb">      
    <div class="container">
      <div class="selectbox">
        <select name="item restaurant-dropdown restaurant" id="restaurant">
          <option value="">Select your order</option>
        </select>
        <br>  
      </div>
      <div class="tablebox">
        <table id="table" class="table table-light tab">
        <tr>
          <th>Name</th>
          <td id="menuname"></td>
        </tr>
        <tr>
          <th>ID</th>
          <td id="id"></td>
        </tr>
        <tr>
          <th>Short Name</th>
          <td id="sname"></td>
        </tr>
        <tr>
          <th>Description</th>
          <td id="descp"></td>
        </tr>
        <tr>
          <th>Price Small</th>
          <td id="psmall"></td>
        </tr>
        <tr>
          <th>Price Large</th>
          <td id="plarge"></td>
        </tr>
        <tr>
          <th>Small Portion Name</th>
          <td id="spname"></td>
        </tr>
        <tr>
          <th>Large Portion Name</th>
          <td id="lpname"></td>
        </tr>
      </table>
      </div>
    </div>   
    
    <div class="footer">
      Aakash Chakor <br>
      Roll No. 23 
      PRN: 0120180033         
  </div>
    
    <script src="script.js" defer></script>
		<script src="jquery-3.5.1.min.js"></script>   
  </body>
</html>