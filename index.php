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
      background-color: #e493d0;
      /* 設定背景色塊 開始*/
      background-image: radial-gradient(closest-side, rgba(235, 105, 78, 1), rgba(235, 105, 78, 0)),
        radial-gradient(closest-side, rgba(243, 11, 164, 1), rgba(243, 11, 164, 0)),
        radial-gradient(closest-side, rgba(254, 234, 131, 1), rgba(254, 234, 131, 0)),
        radial-gradient(closest-side, rgba(170, 142, 245, 1), rgba(170, 142, 245, 0)),
        radial-gradient(closest-side, rgba(248, 192, 147, 1), rgba(248, 192, 147, 0));
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
      /* 設定尺寸 */
      width: 900px;
      min-height: 400px;
      /* 設定版面顏色及框線 */
      background: rgba(255, 255, 255, 0.1);
      box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.5);
      border-right: 1px solid rgba(255, 255, 255, 0.2);
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);
      border-radius: 10px;
      /* 設置毛玻璃效果 */
      backdrop-filter: blur(25px);
    }

    /* 毛玻璃外框 結束 */
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
    /* 萬年曆排版 結束 */

    .table {
      width: 560px;
      height: 560px;
      display: flex;
      flex-wrap: wrap;
      align-content: baseline;
      margin-left: 1px;
      margin-top: 1px;
    }

    .table div {
      display: inline-block;
      width: 80px;
      height: 80px;
      border: 1px solid #999;
      box-sizing: border-box;
      margin-left: -1px;
      margin-top: -1px;
    }

    .table div.header {
      background: rgba(0, 0, 0, 0.5);
      color: white;
      height: 32px;
    }

    .weekend {
      background: pink;
    }

    .workday {
      background: white;
    }

    .today {
      background: lightseagreen;
    }

    .nav {
      display: flex;
      justify-content: space-between;
      flex-basis: 100%;
    }

    .photo{
      display: flex;
      justify-content: flex-start;
    }
  </style>
</head>

<body>
  <!-- 漸層動態背景 開始 -->
  <div class="bg">
    <div class="box">
      <!-- 毛玻璃外框 開始 -->
      <div class="glass">
        <!-- 萬年曆樣式 開始 -->
        <div class="wrapper">
          <!-- 取得上一個月跟下一個月份的參數 -->
          <?php
          if (isset($_GET['month'])) {
            $month = $_GET['month'];
            $year = $_GET['year'];
            switch ($_GET['month']) {
              case 1:
                $prevMonth = 12;
                $prevYear = $year - 1;
                $nextMonth = $month + 1;
                $nextYear = $year;
                break;
              case 12:
                $prevMonth = $month - 1;
                $prevYear = $year;
                $nextMonth = 1;
                $nextYear = $year + 1;
                break;
              default:
                $prevMonth = $month - 1;
                $prevYear = $year;
                $nextMonth = $month + 1;
                $nextYear = $year;
            }
          } else {
            $month = date('n');
            $year = date("Y");
            switch ($month) {
              case 1:
                $prevMonth = 12;
                $prevYear = $year - 1;
                $nextMonth = $month + 1;
                $nextYear = $year;
                break;
              case 12:
                $prevMonth = $month - 1;
                $prevYear = $year;
                $nextMonth = 1;
                $nextYear = $year + 1;
                break;
              default:
                $prevMonth = $month - 1;
                $prevYear = $year;
                $nextMonth = $month + 1;
                $nextYear = $year;
            }
          } ?>
          <!-- 取得上一個月跟下一個月份的參數 結束-->

          <!-- 控制切換月份的按鈕 開始-->
          <div class="nav">
            <span>
              <a href="index.php?year=<?= $prevYear; ?>&month=<?= $prevMonth; ?>">上一個月</a>
            </span>
            <span><?= $year . '年' . $month . '月'; ?></span>
            <span>
              <a href="index.php?year=<?= $nextYear; ?>&month=<?= $nextMonth; ?>">下一個月</a>
            </span>
          </div>
          <!-- 控制切換月份的按鈕 結束-->

          <!-- 左邊隨機圖 -->
          <div class="photo">
            <img src="./img/month<?= $month; ?>-<?= rand(1, 2) ?>.jpg" width="280" height="600">
        </div>
          <!-- 左邊隨機圖 結束 -->

          <!-- 萬年曆內容 -->
          <?php
          // 設定各項參數
          $firstDay = $year . "-" . $month . "-1"; //第一天的位子
          $firstWeekday = date("w", strtotime($firstDay)); //第一天是星期幾
          $monthDays = date("t", strtotime($firstDay));
          $lastDay = $year . "-" . $month . "-" . $monthDays; //最後一天
          $today = date("Y-m-d"); //取值今天
          $lastWeekday = date("w", strtotime($lastDay)); //最後一天是星期幾
          $dateHouse = [];

          for ($i = 0; $i < $firstWeekday; $i++) {
            $dateHouse[] = "";
          }

          for ($i = 0; $i < $monthDays; $i++) {
            $date = date("Y-m-d", strtotime("+$i days", strtotime($firstDay)));
            $dateHouse[] = $date;
          }

          for ($i = 0; $i < (6 - $lastWeekday); $i++) {
            $dateHouse[] = "";
          }

          ?>

          <div class="table">
            <div class='header'>日</div>
            <div class='header'>一</div>
            <div class='header'>二</div>
            <div class='header'>三</div>
            <div class='header'>四</div>
            <div class='header'>五</div>
            <div class='header'>六</div>
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
        </div>
        <!-- 萬年曆樣式 結束 -->
      </div>
      <!-- 毛玻璃外框 結束 -->
    </div>
    <!-- 動態背景 結束 -->
  </div>
  <!-- 漸層背景 結束 -->
</body>

</html>