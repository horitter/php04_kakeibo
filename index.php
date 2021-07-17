<?php 
include 'read.php';

function h($s) {
    return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
  }

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/style.css"></link>
    <title>簡単家計簿</title>
</head>
<body>
    <header>
    </header>
    <div class="main">
        <form action="write.php" method="post">
            日付:<select name="year" id="year">
                
                </select>
                <select name="month" id="month">
                
                </select>
            収支: <select name="select" id="inout">
                <option id="in" value="収入">収入</option>
                <option id="out" value="支出">支出</option>
                 </select>
            項目名: <select name="item" id="item">
            金額: <input type="text" name="money"　value="<?php echo h($yen); ?>">円
            <input type="submit" value="送信">
        </form>
    </div>
    <div class="ulr">
        
        <p><a href="reference.php">履歴を表示する</a></p>
    </div>
    <div class = "result">
        <canvas id="myChart" width="400px" height="400px"></canvas>
    </div>
    <footer>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script src="js/main.js"></script>
    <script>
    const ctx = document.getElementById('myChart');

let foods = <?php echo $foods; ?>;
let necessities = <?php echo $necessities; ?>;
let communications = <?php echo $communications; ?>;
let entertaiments = <?php echo $entertaiments; ?>;
let studies = <?php echo $studies; ?>;
let others = <?php echo $others; ?>;
let specials = <?php echo $specials; ?>;

const chart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: 　items ,
        datasets: [{
            label: '# of Votes',
            data: [foods,necessities,communications,entertaiments,studies,others,specials],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    }
})
</script>
</body>