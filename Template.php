<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
        <link href="quiz.css" rel="stylesheet">
        <script src="quiz.js"></script>
        <script>
        function passdata(){
            var x = document.myform.Name.value;
            localStorage.setItem("name", x);
            var y = document.myform.Address.value;
            localStorage.setItem("Address", y);

            var q1 = document.getElementById("q1");
            localStorage.setItem('q1', q1.options[q1.selectedIndex].text);
            var q2 = document.getElementById("q2");
            localStorage.setItem('q2', q2.options[q2.selectedIndex].text);
            var q3 = document.getElementById("q3");
            localStorage.setItem('q3', q3.options[q3.selectedIndex].text);
            var q4 = document.getElementById("q4");
            localStorage.setItem('q4', q4.options[q4.selectedIndex].text);

            window.location.href="Summary.html";
        }

        function loadData(){
            var x = localStorage.getItem("name");
            document.getElementById("name").innerHTML = x;
            var y = localStorage.getItem("Address");
            document.getElementById("Address").innerHTML = y;

            var q1 = localStorage.getItem("q1");
            document.getElementById("q1").innerHTML = q1;
            var q2 = localStorage.getItem("q2");
            document.getElementById("q2").innerHTML = q2;
            var q3 = localStorage.getItem("q3");
            document.getElementById("q3").innerHTML = q3;
            var q4 = localStorage.getItem("q4");
            document.getElementById("q4").innerHTML = q4;

            var s1 = Number(q1)*33;
            var s2 = Number(q2)*23;
            var s3 = Number(q3)*13;
            var s4 = Number(q4)*9;
            document.getElementById("s1").innerHTML = ("RM " +s1+".00");
            document.getElementById("s2").innerHTML = ("RM " +s2+".00");
            document.getElementById("s3").innerHTML = ("RM " +s3+".00");
            document.getElementById("s4").innerHTML = ("RM " +s4+".00");
            var sum = s1+s2+s3+s4;
            document.getElementById("sum").innerHTML = ("RM " +sum+".00")
            
            var quant = Number(q1)+Number(q2)+Number(q3)+Number(q4);
            var discount;
            if(quant >= 5 && quant <= 10){
                discount = 5;
            }else if(quant > 10){
                discount = 15;
            }else{
                discount = 0;
            }
            document.getElementById("discount").innerHTML = (discount +"%");

            var postage = 0;
            if(sum > 100){
                document.getElementById("postage").innerHTML = ("Free");
            }else{
                document.getElementById("postage ").innerHTML = ("RM 10");
                postage = 10;
            }

            var payment = sum - (sum*(discount/100)) + postage;
            document.getElementById("Payment").innerHTML = ("RM "+ payment);
        }
        function confirm(){
            alert("Thank you, Your Payment is successful")
        }
        
    </script>
    </head>
    <body>
        <div id="wrapper">
            
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about-me.php">About Me</a></li>
                    <li><a href="product.php">Product</a></li>
                    <li><a href="quiz.php">Quiz</a></li>
                </ul>
            </nav>
            
            <div id="content_area">
                <?php echo $content; ?>
            </div>
            
            <div id="sidebar">
                
            </div>
            
            <footer>
                <p>Lab Task 09 - AI190186</p>
            </footer>
        </div>
    </body>
</html>
