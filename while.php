<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
body {
background: radial-gradient(circle at 50% 50%, #ff80bf 0%, #ff1493 50%, #b30059 100%);
margin: 0;
padding: 0;
font-family: 'Sarabun', sans-serif;
color: #4a3f35;
min-height: 100vh;
display: flex;
justify-content: center;
align-items: center;
}

.container {
background: rgba(255, 255, 255, 0.95);
backdrop-filter: blur(10px);
width: 100%;
max-width: 520px;
margin: 40px 20px;
padding: 45px 35px;
border-radius: 35px;
box-shadow: 0 15px 35px rgba(179, 0, 89, 0.4), inset 0 0 15px rgba(255, 192, 203, 0.6);
box-sizing: border-box;
position: relative;
overflow: hidden;
border: 4px solid #ffffff;
}

.container::before {
content: '';
position: absolute;
top: 0;
left: 0;
right: 0;
height: 10px;
background: linear-gradient(90deg, #ff69b4, #ff007f, #ff1493, #ff69b4);
}

.barbie-header-badge {
text-align: center;
margin-bottom: 10px;
}

.barbie-logo {
max-width: 170px;
height: auto;
filter: drop-shadow(0 5px 8px rgba(255, 20, 147, 0.3));
transition: transform 0.3s ease;
}

.barbie-logo:hover {
transform: scale(1.05) rotate(-2deg);
}

h1 {
color: #e91e63;
text-align: center;
font-size: 1.55rem;
font-weight: 700;
margin-top: 10px;
margin-bottom: 4px;
letter-spacing: 0.5px;
text-shadow: 2px 2px 0px #ffe6f2;
}

.sub-title {
text-align: center;
color: #d81b60;
font-size: 1rem;
font-weight: 700;
margin-bottom: 25px;
background-color: #ffe6f0;
display: inline-block;
padding: 4px 18px;
border-radius: 20px;
margin-left: auto;
margin-right: auto;
border: 1px solid #ffb3d9;
}

.nav-link {
display: inline-block;
color: #ffffff;
text-decoration: none;
font-weight: 700;
padding: 10px 24px;
border: none;
border-radius: 30px;
font-size: 0.95rem;
transition: all 0.3s ease;
background: linear-gradient(135deg, #ff007f 0%, #ff69b4 100%);
box-shadow: 0 4px 15px rgba(255, 0, 127, 0.35);
letter-spacing: 0.5px;
}

.nav-link:hover {
color: #ffffff;
background: linear-gradient(135deg, #d81b60 0%, #ff1493 100%);
box-shadow: 0 6px 20px rgba(216, 27, 96, 0.5);
transform: translateY(-3px);
}

.form-group {
margin-top: 25px;
margin-bottom: 25px;
background: #fff0f6;
padding: 22px;
border-radius: 24px;
border: 2px solid #ffb3d9;
box-shadow: inset 0 2px 6px rgba(255, 105, 180, 0.1);
}

label {
display: block;
font-weight: 700;
margin-bottom: 12px;
color: #c2185b;
font-size: 1.05rem;
text-align: center;
}

.input-row {
display: flex;
gap: 12px;
}

input[type="number"] {
flex: 1;
padding: 14px 16px;
border: 2px solid #ff80bf;
border-radius: 16px;
font-family: 'Sarabun', sans-serif;
font-size: 1rem;
outline: none;
transition: all 0.3s ease;
background-color: #ffffff;
font-weight: bold;
color: #ad1457;
text-align: center;
}

/* เอฟเฟกต์ตอนคลิกช่องกรอกตัวเลขให้เรืองแสงสวยๆ */
input[type="number"]:focus {
border-color: #ff007f;
box-shadow: 0 0 0 4px rgba(255, 0, 127, 0.25);
}

input[type="submit"] {
background: linear-gradient(135deg, #ff007f, #e91e63);
color: white;
border: none;
padding: 14px 26px;
border-radius: 16px;
cursor: pointer;
font-family: 'Sarabun', sans-serif;
font-weight: 700;
font-size: 1rem;
transition: all 0.3s ease;
box-shadow: 0 5px 15px rgba(233, 30, 99, 0.4);
}

input[type="submit"]:hover {
background: linear-gradient(135deg, #c2185b, #ff007f);
box-shadow: 0 8px 20px rgba(194, 24, 91, 0.5);
transform: translateY(-2px);
}

input[type="submit"]:active {
transform: translateY(1px);
}

.result-box {
margin-top: 30px;
background-color: #ffffff;
border: 2px solid #ff80bf;
border-radius: 24px;
padding: 0;
color: #880e4f;
box-shadow: 0 8px 25px rgba(255, 105, 180, 0.25);
overflow: hidden;
}

.result-title {
font-weight: 700;
color: #ffffff;
background: linear-gradient(90deg, #ff007f, #ff69b4);
margin: 0;
padding: 14px 20px;
font-size: 1.15rem;
text-align: center;
letter-spacing: 1px;
text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
}

.result-row {
padding: 12px 20px;
font-size: 1.1rem;
line-height: 1.6;
letter-spacing: 2px;
text-align: center;
border-bottom: 1px solid #ffe6f0;
transition: all 0.2s;
color: #c2185b;
font-weight: 600;
}

.result-row:last-child {
border-bottom: none;
}

.result-row:nth-child(even) {
background-color: #fff5f9;
}

.result-row:hover {
background-color: #ffe6f0;
transform: scale(1.01);
}
</style>
</head>
<body>

<div class="container">

<div class="barbie-header-badge">
  <img src="https://i.ytimg.com/vi/yBUPQqNG8kg/maxresdefault.jpg" alt="Barbie Logo" class="barbie-logo">
</div>

<h1>งานที่ 1 ภาสกวี ยิ้มศรวล</h1>
<div style="text-align: center;"><div class="sub-title">BIT2/4 เลขที่ 9</div></div>

<div style="text-align: center; margin-bottom: 10px;">
<a href="index.php" class="nav-link">forloop</a>
</div>

<form action="" class="form-group">
<label for="num">เลขแม่สูตรคูณ</label>
<label for="num"></label>
<div class="input-row">
<input type="number" name="num" id="num" placeholder="กรอกตัวเลข..." required value="<?php echo isset($_GET['num']) ? htmlspecialchars($_GET['num']) : ''; ?>">
<input type="submit" value="คำนวณ">
</div>
</form>

<?php
if(isset($_GET["num"]) && $_GET["num"] !== ""){
$num = intval($_GET["num"]);

echo "<div class='result-box'>";
echo "<div class='result-title'>ตารางสูตรคูณแม่ " . $num . "</div>" ;

$i = 9;
while ($i >= 1) {

echo "<div class='result-row'>" . $num . " &times; " . $i . " = " . ($num * $i) . "</div>";
$i--;
}

echo "</div>";
}
?>

</div>

</body>
</html>