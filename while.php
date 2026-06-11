<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8fafc;
            color: #334155;
            margin: 0;
            padding: 40px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

       
        .name-frame {
            border: 3px solid #1e293b; 
            background-color: #e0f2fe; 
            padding: 15px 35px;
            border-radius: 10px;      
            text-align: center;
            margin-bottom: 25px;
            box-shadow: 4px 4px 0px #1e293b; 
        }
        
       
        .name-frame h1 {
            margin: 0;
            font-size: 22px;
            color: #1e293b !important; 
        }

       
        .nav-link {
            display: inline-block;
            margin-bottom: 25px;
            color: #0284c7;
            text-decoration: none;
            font-weight: bold;
            border: 2px solid #0284c7;
            padding: 8px 20px;
            border-radius: 6px;
            background-color: #ffffff;
            transition: all 0.2s ease;
        }
        .nav-link:hover {
            background-color: #0284c7;
            color: #ffffff;
        }

       
        .form-container {
            background-color: #ffffff;
            border: 1px solid #cbd5e1;
            border-radius: 12px;
            padding: 25px;
            width: 100%;
            max-width: 360px;
            box-sizing: border-box;
            margin-bottom: 25px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
            color: #475569;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 15px;
            border: 2px solid #94a3b8;
            border-radius: 6px;
            font-size: 16px;
            box-sizing: border-box;
            outline: none;
        }
        input[type="number"]:focus {
            border-color: #0284c7;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #10b981;
            color: white;
            border: none;
            padding: 12px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.2s;
        }
        input[type="submit"]:hover {
            background-color: #059669;
        }

       
        .result-container {
            background-color: #ffffff;
            border: 1px solid #cbd5e1;
            border-radius: 12px;
            padding: 25px;
            width: 100%;
            max-width: 360px;
            box-sizing: border-box;
            text-align: center;
        }
        .result-title {
            font-size: 20px;
            font-weight: bold;
            color: #1e293b;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }
        .result-line {
            font-size: 18px;
            padding: 5px 0;
            font-family: 'Courier New', Courier, monospace;
            font-weight: bold;
            color: #334155;
        }
    </style>
</head>
<body>

   <div class="name-frame">
        <h1>งานที่ 1 ภาสกวี ยิ้มศรวล BIT.2/4 เลขที่ 9</h1>
    </div>

    <a href="index.php" class="nav-link">for loop</a>

    <div class="form-container">
        <form action="" method="GET">
            <label for="num">เลขแม่สูตรคูณ</label>
            <input type="number" name="num" id="num" placeholder="กรอกตัวเลข..." required value="<?php echo isset($_GET['num']) ? htmlspecialchars($_GET['num']) : ''; ?>">    
            <input type="submit" value="คำนวณ">                                   
        </form>
    </div>
    
    <?php
        if(isset($_GET["num"]))
            $num = $_GET["num"];

            echo "สูตรคูณแม่ " , $num . "<br>";

            echo '<div class="result-container">';
            
            for($i = 1; $i <= 12; $i++){
                echo "<div class='result-line'>" . $num . " x " . $i . " = " . ($num * $i) . "</div>";
            
            for($i = 1; $i <= 12; $i++){
                echo $num . " x " . $i . " = " . $num * $i . "<br>";
            }
        }

        
    ?>


</body>
</html>