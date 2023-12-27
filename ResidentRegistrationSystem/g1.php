<html>
<head>
    <title>Infographics</title>
   	
	<style>
	* {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    box-sizing: border-box;
}

:root {
    --background0: #43553h;
    --background1: #22262f;
    --text: #fff;
}

body {
    background: var(--background0);
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}
.container {
    background: var(--background1);
    position: relative;
    display: flex;
    width: 600px;
    align-items: flex-end;
    height: 490px;
}

.percent {
    background: var(--background1);
    position: absolute;
    border-right: 2px solid var(--text);
    color: var(--text);
    width: 50px;
    height: 390px;
    display: flex;
    padding-bottom: 20px;
    flex-direction: column;
    justify-content: space-between;
}

.percent span {
    font-size: 20px;
    height: 12px;
    line-height: 12px;
    text-align: right;
    padding-right: 4px;
    font-weight: 600;
}

.options {
    position: relative;
    left: 50px;
    background: var(--background1);
    width: 350px;
    color: var(--text);
    border-top: 2px solid var(--text);
    display: flex;
    justify-content: space-between;
}

.option::after {
    content: '';
    position: absolute;
    display: block;
    bottom: 27px;
    margin-left: 10px;
    background: 
    linear-gradient(#ff5b66,#ff8c38);
    width: 40px;
}
.option:nth-child(1)::after{
    height: calc((363px / 100) * 28);
}
.option:nth-child(2)::after{
    height: calc((363px / 100) * 42);
}
.option:nth-child(3)::after{
    height: calc((363px / 100) * 76);
}
.option:nth-child(4)::after{
    height: calc((363px / 100) * 25);
}
.option:nth-child(5)::after{
    height: calc((363px / 100) * 100);
}
	</style>
</head>
<body>
<?php 

include('includes/config.php');
$query=mysqli_query($con,"SELECT * FROM admin");

$num=mysqli_num_rows($query);
$row=mysqli_fetch_array($query);

echo $num;
?>
    <div class="container">
        <div class="percent">
            <span>100%</span>
            <span>40%</span>
			<span>32%</span>
            <span>28%</span>
            <span>25%</span>
            <span>0%</span>
        </div>
        <div class="options">
            <span class="option">chidren</span>
			<span class="option">male</span>
            <span class="option">female</span>
            <span class="option">elder</span>
            <span class="option">Total population</span>
        </div>
    </div>
</body>
</html>