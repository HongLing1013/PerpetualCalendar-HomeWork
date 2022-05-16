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
      background-image: 
      /* 	LightSkyBlue 淡藍色 */
      radial-gradient(closest-side, rgba(135, 206, 250, 1), rgba(135, 206, 250, 0)),
      /* 	LemonChiffon 檸檬薄紗 鵝黃色 */
      radial-gradient(closest-side, rgba(255, 250, 205, 1), rgba(255, 250, 205, 0)),
      /* 	pink 粉色 */
      radial-gradient(closest-side, rgba(255, 192, 203, 1), rgba(255, 192, 203, 0)),
      /* Auqamarin	绿玉\碧绿色 */
      radial-gradient(closest-side, rgba(127, 255, 170, 1), rgba(127, 255, 170, 0)),
      /* 	Tomato	番茄 */
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
      background: rgba(255, 255, 255, 0.1);
      width: 900px;
      height: 560px;
      border-radius: 15px;
    }
    /* 毛玻璃外框 結束 */

    /* 毛玻璃標題小毛玻璃 開始 */
    .glass::before {
      content: attr(data-title);
      display: flex;
      justify-content: center;
      align-items: center;
      position: absolute;
      top: 0.5rem;
      left: 0.5rem;
      width: 885px;
      height: 50px;
      background: rgba(255, 255, 255, 0.3);
      font-size: 25px;
      text-transform: uppercase;
      font-weight: 900;
      backdrop-filter: blur(25px);
      border-radius: 15px;
      transition: all 0.8s ease-in-out;
      line-height: 15px;
    }
    /* 毛玻璃標題小毛玻璃 結束 */

    /* 毛玻璃標題動態 開始 */
    .glass:hover::before {
      height: 4%;
      top: 5px;
      transform: translateY(-70%);
      font-size: 23px;
    }
    /* 毛玻璃標題動態 結束 */

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

    section {
      display: flex;
      justify-content: center;
    }

    .table {
      width: 651px;
      height: 651px;
      display: flex;
      flex-wrap: wrap;
      align-content: baseline;
      margin-left: 1px;
      margin-top: 1px;
    }

    .table div {
      display: inline-block;
      width: 93px;
      height: 93px;
      border: 1px solid rgba(255, 255, 255, 0.2);
      box-sizing: border-box;
      margin-left: -1px;
      margin-top: -1px;
      text-align: center;
      line-height: 80px;
    }

    .table div.header {
      background: rgba(0, 0, 0, 0.5);
      color: white;
      height: 32px;
      line-height: 30px;
    }

    .weekend {
      background: rgba(186, 85, 221, 0.2);
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
  <div class="box">
    <!-- 毛玻璃外框 開始 -->
    <div class="glass" data-title="<?= $year;?>">
      <!-- 萬年曆樣式 開始 -->
      <div class="wrapper">

        <!-- 控制切換月份的按鈕 開始-->
        <div class="nav">
          <span>
            <a href="index.php?year=<?= $prevYear; ?>&month=<?= $prevMonth; ?>">上一個月</a>
          </span>
          <span><?= $month . '月'; ?></span>
          <span>
            <a href="index.php?year=<?= $nextYear; ?>&month=<?= $nextMonth; ?>">下一個月</a>
          </span>
        </div>
        <!-- 控制切換月份的按鈕 結束-->

        <!-- 萬年曆內容 -->
        <?php
        // 設定各項參數
        $firstDay = $year . "-" . $month . "-1"; //這個月第一天的位子
        $firstWeekday = date("w", strtotime($firstDay)); //這個月第一天是星期幾
        $monthDays = date("t", strtotime($firstDay));//這個月的總天數
        $lastDay = $year . "-" . $month . "-" . $monthDays; //這個月最後一天
        $today = date("Y-m-d"); //取值今天
        $lastWeekday = date("w", strtotime($lastDay)); //這個月最後一天是星期幾
        $dateHouse = [];

        for ($i = 0; $i < $firstWeekday; $i++) {
          $dateHouse[] = "";//一號以前印空白
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
        <section>
          <!-- 左邊隨機圖 開始 -->
          <div class="img">
            <img src="./img/month<?= $month; ?>-<?= rand(1, 2) ?>.jpg" width="210" height="490">
          </div>
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
        </section>
        <!-- 萬年曆中間面板 開始 -->
      </div>
      <!-- 萬年曆樣式 結束 -->
    </div>
    <!-- 毛玻璃外框 結束 -->
  </div>
  <!-- 動態背景 結束 -->
</body>
<!-- 漸層背景 結束 -->

</html>