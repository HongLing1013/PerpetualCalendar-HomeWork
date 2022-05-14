<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆</title>
    <style>
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
            background: black;
            color: white;
            height: 32px;
            ;
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

        .wrapper {
            width: 580px;
            margin: 2rem auto;
        }

        .nav {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>

<body>
    <div class="wrapper">

        <h1>萬年曆</h1>
        <!-- 取得月份的參數 -->
        <?php
        if (isset($_GET['month'])) {//isset判斷這個東西裡面有沒有設 0也是有設定
            $month = $_GET['month'];
            $year = $_GET['year'];
            // 判斷1月跟12月 避免跳到0月跟13月
            /* 這個switch...case如果放到if...else外的話
               會造成找不到陣列而出錯*/
            switch ($_GET['month']) {
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
        } else {
            $month = date('n'); //取得當前月
            $year = date("Y");//取得當前年
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
        }


        // 將取得的參數顯示出來
        echo "要顯示的月份為：" . $year . "年" . $month . "月";
        ?>

        <!-- 控制切換月份的按鈕 -->
        <div class="nav">
            <span>
                <a href="index.php?year=<?= $prevYear; ?>&month=<?= $prevMonth; ?>">上一個月</a>
            </span>
            <span><?= $year . '年' . $month . '月'; ?></span>
            <span>
                <a href="index.php?year=<?= $nextYear; ?>&month=<?= $nextMonth; ?>">下一個月</a>
            </span>
        </div>

        <!-- 萬年曆內容 -->

        <?php
        // 設定各項參數
        $firstDay = $year . "-" . $month . "-1";
        $firstWeekday = date("w", strtotime($firstDay));
        $monthDays = date("t", strtotime($firstDay));
        $lastDay = $year . "-" . $month . "-" . $monthDays;
        $today = date("Y-m-d");
        $lastWeekday = date("w", strtotime($lastDay));
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
    </div>
</body>

</html>