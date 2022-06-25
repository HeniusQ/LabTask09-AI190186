<?php
$title = "Checkout";
$content = '
        <div style="text-align: center;">
            <h2>Summary of Your Order </h2>
            <label for="name"><b>Your Name:</b></label>
            <p id="name"></p><br/>
            <label for="Address"><b>Your Address:</b></label>
            <p id="Address"></p><br/>
            
            <h3>Your selected products</Select></h3>
            <table style="margin-left:auto;margin-right:auto;" cellpadding="10">
                <tr>
                    <th>Genres</th>
                    <th>Book Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
                <tr>
                    <th>Action & Adventure</th>
                    <td>
                        <label for="product1">Harry Potter</label></td>
                    <td>RM33.00</td>
                    <td><p id="q1"></p></td>
                    <td><p id="s1"></p></td>
                </tr>
                <tr>
                    <th>Classics</th>
                    <td>
                        <label for="product2">The Old Man and the Sea</label></td>
                    <td>RM23.00</td>
                    <td><p id="q2"></p></td>
                    <td><p id="s2"></p></td></td>
                    </tr>
                </tr>
                <tr>
                    <th>Comic Book</th>
                    <td>
                        <label for="product3">Marvel Comic</label></td>
                    <td>RM13.00</td>
                    <td><p id="q3"></p></td>
                    <td><p id="s3"></p></td>
                    </tr>
                </tr>
                <tr>
                    <th>&nbsp;</th>
                    <td>
                        <label for="product4">Mickey Mouse</label></td>
                    <td>RM9.00</td>
                    <td><p id="q4"></p></td>
                    <td><p id="s4"></p></td>
                    </tr>
                </tr>
                <tr>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>Overall</th>
                    <td><p id="sum"></p></td>
                    </tr>
                </tr>
                <tr>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>Discount </th>
                    <td><p id="discount"></p></td>
                    </tr>
                </tr>
                <tr>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>Postage Fee </th>
                    <td><p id="postage"></p></td>
                    </tr>
                </tr>
                <tr>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>Total Payment</th>
                    <td><p id="Payment"></p></td>
                    </tr>
                </tr>
            </table>
            <button onclick="loadData()">Refresh Data</button>
            <button onclick="confirm()">Confirm & Pay</button>
        </div>
';

include 'Template.php';
?>
