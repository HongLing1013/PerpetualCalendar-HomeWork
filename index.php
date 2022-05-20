<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>線上月曆</title>
  <style>
    /* 動態漸層背景 開始 */
    .bg {
      margin: 0;
      min-height: 100vh;
      background-color: #F5F5DC;
      /* 設定背景色塊 開始*/
      background-image:
        /* 	LightSkyBlue 淡藍 */
        radial-gradient(closest-side, rgba(135, 206, 250, 1), rgba(135, 206, 250, 0)),
        /* 	Pink 粉 */
        radial-gradient(closest-side, rgba(255, 192, 203, 1), rgba(255, 192, 203, 0)),
        /* 	LemonChiffon 鵝黃 */
        radial-gradient(closest-side, rgba(255, 250, 205, 1), rgba(255, 250, 205, 0)),
        /* 	LightGreen 淡绿色 */
        radial-gradient(closest-side, rgba(144, 238, 144, 1), rgba(144, 238, 144, 0)),
        /* 	Tomato 橘紅 */
        radial-gradient(closest-side, rgba(255, 99, 71, 1), rgba(255, 99, 71, 0));
      /* 設定背景色塊 結束*/
      /* 設定背景色塊大小 開始*/
      background-size:
        130vmax 130vmax,
        80vmax 80vmax,
        90vmax 90vmax,
        100vmax 100vmax,
        90vmax 90vmax;
      /* 設定背景色塊大小 結束*/
      /* 設定背景色塊的位子 開始*/
      background-position:
        -80vmax -80vmax,
        60vmax -30vmax,
        10vmax 10vmax,
        -30vmax -10vmax,
        50vmax 50vmax;
      /* 設定背景色塊的位子 結束*/
      /* 背景不重複 */
      background-repeat: no-repeat;
      /* 動畫設定 時長3秒 線性加速度 無限重複 */
      animation: 3s movement linear infinite;
    }

    /* 漸層背景 結束 */
    /* 背景模糊 開始 */
    .bg::after {
      content: '';
      display: block;
      position: fixed;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      /* 模糊的關鍵屬性 */
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
    }

    /* 背景模糊結束 */
    /* 動態背景 開始 */
    @keyframes movement {

      0%,
      100% {
        background-size:
          130vmax 130vmax,
          80vmax 80vmax,
          90vmax 90vmax,
          100vmax 100vmax,
          90vmax 90vmax;
        background-position:
          -80vmax -80vmax,
          60vmax -30vmax,
          10vmax 10vmax,
          -30vmax -10vmax,
          50vmax 50vmax;
      }

      25% {
        background-size:
          100vmax 100vmax,
          90vmax 90vmax,
          100vmax 100vmax,
          90vmax 90vmax,
          60vmax 60vmax;
        background-position:
          -60vmax -90vmax,
          50vmax -40vmax,
          0vmax -20vmax,
          -40vmax -20vmax,
          40vmax 60vmax;
      }

      50% {
        background-size:
          80vmax 80vmax,
          90vmax 110vmax,
          80vmax 80vmax,
          60vmax 60vmax,
          80vmax 80vmax;
        background-position:
          -50vmax -70vmax,
          40vmax -30vmax,
          10vmax 0vmax,
          20vmax 10vmax,
          30vmax 70vmax;
      }

      75% {
        background-size:
          90vmax 90vmax,
          90vmax 90vmax,
          100vmax 100vmax,
          90vmax 90vmax,
          70vmax 70vmax;
        background-position:
          -50vmax -40vmax,
          50vmax -30vmax,
          20vmax 0vmax,
          -10vmax 10vmax,
          40vmax 60vmax;
      }

    }

    /* 動態背景 結束 */

    .box {
      position: relative;
      /* 因為body有偽元素 所以z-index要設定高一點 */
      z-index: 10;
      display: flex;
      min-height: 100vh;
      width: 100%;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
    }

    /* 毛玻璃外框 開始 */
    .glass {
      position: relative;
      padding: 0px;
      margin: 0px;
      font-size: 20px;
      background: rgba(255, 255, 255, 0.3);
      width: 950px;
      height: 580px;
      border-radius: 15px;
    }

    /* 毛玻璃外框 結束 */

    /* 標題小毛玻璃 開始 */
    .glass::before {
      content: attr(data-title);
      display: flex;
      justify-content: center;
      align-items: center;
      position: absolute;
      top: 0.5rem;
      left: 0.5rem;
      width: 935px;
      height: 50px;
      background: rgba(255, 255, 255, 0.5);
      font-size: 25px;
      text-transform: uppercase;
      font-weight: 900;
      backdrop-filter: blur(25px);
      border-radius: 15px;
      transition: all 0.8s ease-in-out;
      line-height: 15px;
    }

    /* 標題小毛玻璃 結束 */

    /* 標題小毛玻璃動態 開始 */
    .glass:hover::before {
      height: 4%;
      top: 5px;
      transform: translateY(-70%);
      font-size: 23px;
    }

    /* 標題小毛玻璃動態 結束 */

    /* 標題小毛玻璃文字效果 開始 */
    [data-title] {
      color: blueviolet;
    }

    /* 標題小毛玻璃文字效果 結束 */

    /* 萬年曆排版 開始 */
    .wrapper {
      width: 580px;
      margin: 2rem auto;
      /* 對齊方式 */
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
    }

    aside {
      display: flex;
      justify-content: center;
    }

    .img{
      margin: 5px;
    }

    .table {
      width: 644px;
      height: 644px;
      display: flex;
      flex-wrap: wrap;
      align-content: baseline;
      margin-left: 1px;
      margin-top: 1px;
    }

    .table div {
      display: inline-block;
      width: 92px;
      height: 92px;
      border: 1px solid rgba(255, 255, 255, 0.2);
      box-sizing: border-box;
      margin-left: -1px;
      margin-top: -1px;
      text-align: center;
      line-height: 80px;
      font-size: 35px;
      background: linear-gradient(to top, #fcc5e4 0%, #fda34b 15%, #ff7882 35%, #c8699e 52%, #7046aa 71%, #0c1db8 87%, #020f75 100%);
  background: -webkit-linear-gradient(to top, #fcc5e4 0%, #fda34b 15%, #ff7882 35%, #c8699e 52%, #7046aa 71%, #0c1db8 87%, #020f75 100%);
  background-clip: text;
  -webkit-background-clip: text;
  color: transparent;
    }

    .table div.header {
      background: rgba(0, 0, 0, 0.5);
      /* color: white; */
      font-weight: bold;
      height: 60px;
      line-height: 60px;
      font-size: 35px;
      background: linear-gradient(to top, #fcc5e4 0%, #fda34b 15%, #ff7882 35%, #c8699e 52%, #7046aa 71%, #0c1db8 87%, #020f75 100%);
  background: -webkit-linear-gradient(to top, #fcc5e4 0%, #fda34b 15%, #ff7882 35%, #c8699e 52%, #7046aa 71%, #0c1db8 87%, #020f75 100%);
  background-clip: text;
  -webkit-background-clip: text;
  color: transparent;
    }


    .nav {
      display: flex;
      justify-content: space-between;
      flex-basis: 100%;
      padding: 0;
      margin: 0;
    }

    /* 萬年曆排版 結束 */
  </style>
</head>

<!-- 漸層動態背景 開始 -->

<?php
// 取得上一個月跟下一個月份的參數
if (isset($_GET['month'])) {
  //isset判斷這個東西裡面有沒有設 0也是有設定
  $month = $_GET['month'];
  $year = $_GET['year'];
  // 判斷1月跟12月 避免跳到0月跟13月
  /* 這個switch...case如果放到if...else外的話
             會造成找不到陣列而出錯*/
} else {
  $month = date('n'); //取得當前月
  $year = date("Y"); //取得當前年
}
// 判斷1月以前跟12月以後的處理方式
switch ($month) {
  case 1: //1月的話
    $prevMonth = 12; //1月的上一個月是12月份 所以直接帶入12
    $prevYear = $year - 1; //1月的上一個月是去年 所以年份要-1
    $nextMonth = $month + 1;
    $nextYear = $year;
    break;
  case 12: //12月的話
    $prevMonth = $month - 1;
    $prevYear = $year;
    $nextMonth = 1; //12月的下一個月是1月 所以直接帶入1
    $nextYear = $year + 1; //12月的下一個月是明年 所以要+1
    break;
  default: //如果是在2-11月的話 在這裡算好需要的值 帶到下面上一個月下一個月的連結去
    $prevMonth = $month - 1;
    $prevYear = $year;
    $nextMonth = $month + 1;
    $nextYear = $year;
}
?>

<body class="bg">
  <main class="box">
    <!-- 毛玻璃外框 開始 -->
    <article class="glass" data-title="<?= $year; ?>">
      <!-- 萬年曆樣式 開始 -->
      <section class="wrapper">
        <!-- 控制切換月份的按鈕 開始-->
        <nav class="nav">
          <span>
            <a href="index.php?year=<?= $prevYear; ?>&month=<?= $prevMonth; ?>">上一個月</a>
          </span>
          <!-- 月份標題圖片 開始 -->
          <span><img src="./header-img/<?= $month; ?>.png" width="200" height="40"></span>
          <!-- 月份標題圖片 結束 -->
          <span>
            <a href="index.php?year=<?= $nextYear; ?>&month=<?= $nextMonth; ?>">下一個月</a>
          </span>
        </nav>
        <!-- 控制切換月份的按鈕 結束-->

        <!-- 萬年曆內容 -->
        <?php
        // 設定各項參數
        $firstDay = $year . "-" . $month . "-1"; //這個月第一天的位子
        $firstWeekday = date("w", strtotime($firstDay)); //這個月第一天是星期幾
        $monthDays = date("t", strtotime($firstDay)); //這個月的總天數
        $lastDay = $year . "-" . $month . "-" . $monthDays; //這個月最後一天
        $today = date("Y-m-d"); //取值今天
        $lastWeekday = date("w", strtotime($lastDay)); //這個月最後一天是星期幾
        $dateHouse = [];

        for ($i = 0; $i < $firstWeekday; $i++) {
          $dateHouse[] = ""; //一號以前印空白
        }

        for ($i = 0; $i < $monthDays; $i++) {
          $date = date("Y-m-d", strtotime("+$i days", strtotime($firstDay)));
          //日期函數的年月日 換算成字串 字串印出來以後要+1
          $dateHouse[] = $date;
        }

        for ($i = 0; $i < (6 - $lastWeekday); $i++) {
          $dateHouse[] = ""; //最後一天以後印空白
        }

        ?>
        <!-- 萬年曆中間面板 開始 -->
        <aside>
          <!-- 左邊隨機圖 開始 -->
          <figure class="img">
            <img src="./img/month<?= $month; ?>-<?= rand(1, 2) ?>.jpg" width="240" height="510">
          </figure>
          <!-- 左邊隨機圖 結束 -->
          <!-- 印出萬年曆標題 開始-->
          <div class="table">
            <div class='header'>Sun</div>
            <div class='header'>Mon</div>
            <div class='header'>Tues</div>
            <div class='header'>Wed</div>
            <div class='header'>Thur</div>
            <div class='header'>Fri</div>
            <div class='header'>Sat</div>
            <!-- 印出萬年曆標題 結束-->
            <?php
            foreach ($dateHouse as $k => $day) {
              $hol = ($k % 7 == 0 || $k % 7 == 6) ? 'weekend' : ""; //判定是否為假日
              if (!empty($day)) {
                $dayFormat = date("j", strtotime($day));
                echo "<div class='{$hol}'>{$dayFormat}</div>";
              } else {
                echo "<div class='{$hol}'></div>";
              }
              }
            ?>
          </div>
          <!-- 萬年曆結束 -->
        </aside>
        <!-- 萬年曆中間面板 開始 -->
      </section>
      <!-- 萬年曆樣式 結束 -->
    </article>
    <!-- 毛玻璃外框 結束 -->
  </main>
  <!-- 動態背景 結束 -->
</body>
<!-- 漸層背景 結束 -->

</html>