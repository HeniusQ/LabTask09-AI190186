<?php
$title = "Home";
$content = '
<form name="myform" onsubmit="passdata()" style="text-align: center;">
        <h2>Order Your Books here</h2>
            <label for="Name"><b>Your Name:</b></label>
            <input type="text" placeholder="Enter Your Name" name="Name" id="Name" required><br/>
            <label for="Address"><b>Your Address:</b></label>
            <input type="text" placeholder="Enter Your Address" name="Address" id="Address" required><br/>

            <h3>Select the your products</Select></h3>
            <table style="margin-left:auto;margin-right:auto;" cellpadding="10">
                <tr>
                    <th>Genres</th>
                    <th>Book Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
                <tr>
                    <th>Action & Adventure</th>
                    <td><input type="checkbox" id="product1" value="33">
                        <label for="product1">Harry Potter</label></td>
                    <td>RM33.00</td>
                    <td><select id = "q1">
                        <option> 0 </option>
                        <option> 1 </option>
                        <option> 2 </option>
                        <option> 3 </option>
                        </select></td>
                </tr>
                <tr>
                    <th>Classics</th>
                    <td><input type="checkbox" id="product2" value="23">
                        <label for="product2" >The Old Man and the Sea</label></td>
                    <td>RM23.00</td>
                    <td><select id = "q2">
                        <option> 0 </option>
                        <option> 1 </option>
                        <option> 2 </option>
                        <option> 3 </option>
                        </select></td>
                    </tr>
                </tr>
                <tr>
                    <th>Comic Book</th>
                    <td><input type="checkbox" id="product3" value="13">
                        <label for="product3">Marvel Comic</label></td>
                    <td>RM13.00</td>
                    <td><select id = "q3">
                        <option> 0 </option>
                        <option> 1 </option>
                        <option> 2 </option>
                        <option> 3 </option>
                        </select></td>
                    </tr>
                </tr>
                <tr>
                    <th>&nbsp;</th>
                    <td><input type="checkbox" id="product4" value="9">
                        <label for="product4">Mickey Mouse</label></td>
                    <td>RM9.00</td>
                    <td><select id = "q4">
                        <option> 0 </option>
                        <option> 1 </option>
                        <option> 2 </option>
                        <option> 3 </option>
                        </select></td>
                    </tr>
                </tr>
            </table>
    <input type="submit" value="submit"><br/>
    <a href="summary.php">Check out Summary -></a>
    </form>';

include 'Template.php';
?>
