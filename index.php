<html>
  <title>萬年曆作業</title>
  <style>
   /*請在這裹撰寫你的CSS*/ 
    body{
      /* 漸層背景開始 */
      margin: 0;
      min-height: 100vh;
      background-color: #e493d0;
      /* 設定背景色塊 */
      background-image: radial-gradient(closest-side, rgba(235, 105, 78, 1),rgba(235, 105, 78, 0)),
      radial-gradient(closest-side, rgba(243, 11, 164, 1),rgba(243, 11, 164, 0)),
      radial-gradient(closest-side, rgba(254, 234, 131, 1),rgba(254, 234, 131, 0)),
      radial-gradient(closest-side, rgba(170, 142, 245, 1),rgba(170, 142, 245, 0)),
      radial-gradient(closest-side, rgba(248, 192, 147, 1),rgba(248, 192, 147, 0));
      /* 設定背景色塊大小 */
      background-size: 
      130vmax 130vmax,
      80vmax 80vmax,
      90vmax 90vmax,
      100vmax 100vmax,
      90vmax 90vmax;
      /* 設定色塊的位子 */
      background-position: 
      -80vmax -80vmax,
      60vmax -30vmax,
      10vmax 10vmax,
      -30vmax -10vmax,
      50vmax 50vmax;
      background-repeat: no-repeat;
      /* 套用動畫設定 時長5秒 線性加速度 無限重複 */
      animation: 5s movement linear infinite ;
      /* 漸層背景顏色設定結束 */
    }
    /* 背景模糊 */
    body::after{
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
    div {
      position: relative;
      /* 因為body有偽元素 所以z-index要設定高一點 */
      z-index: 10;
      display: flex;
      min-height: 100vh;
      width: 100%;
      justify-content: center;
      align-items: center;
    }

    /* 動態背景開始 */
    @keyframes movement {
      0%, 100% {
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
    /* 動態背景結束 */
    } 
    </style>
<body>
  
<div>
    <h1>萬年曆</h1>

  <?php 
class Calendar{ 
protected $_table;//table表格 
protected $_currentDate;//當前日期 
protected $_year; //年 
protected $_month; //月 
protected $_days; //找出當月總天數
protected $_dayofweek;//找出當月一號是星期幾
//設定基本參數
public function __construct() 
{ 
$this->_table=""; 
$this->_year = isset($_GET["y"])?$_GET["y"]:date("Y"); 
$this->_month = isset($_GET["m"])?$_GET["m"]:date("m"); 
if ($this->_month>12){//月份最大值
$this->_month=1; 
$this->_year++; 
} 
if ($this->_month<1){//月份最小值
$this->_month=12; 
$this->_year--; 
} 
$this->_currentDate = $this->_year.'年'.$this->_month.'月份';//当前得到的日期信息 
$this->_days = date("t",mktime(0,0,0,$this->_month,1,$this->_year));//找出當前月份的總天數 
$this->_dayofweek = date("w",mktime(0,0,0,$this->_month,1,$this->_year));//找出當月第一天是週幾
} 

//印標題
protected function _showTitle() 
{ 
$this->_table="<table><thead><tr align='center'><th colspan='7'>".$this->_currentDate."</th></tr></thead>"; 
$this->_table.="<tbody><tr>"; 
$this->_table .="<td style='color:red'>星期日</td>"; 
$this->_table .="<td>星期一</td>"; 
$this->_table .="<td>星期二</td>"; 
$this->_table .="<td>星期三</td>"; 
$this->_table .="<td>星期四</td>"; 
$this->_table .="<td>星期五</td>"; 
$this->_table .="<td style='color:red'>星期六</td>"; 
$this->_table.="</tr>"; 
} 

//依照當月印出月曆
protected function _showDate() 
{ 
$nums=$this->_dayofweek+1; 
for ($i=1;$i<=$this->_dayofweek;$i++){//印出1號之前的空白 
$this->_table.="<td> </td>"; 
} 
for ($i=1;$i<=$this->_days;$i++){//印出日子 
if ($nums%7==0){//7個換行 
$this->_table.="<td>$i</td></tr><tr>"; 
}else{ 
$this->_table.="<td>$i</td>"; 
} 
$nums++; 
} 
$this->_table.="</tbody></table>"; 
$this->_table.="<h3><a href='?y=".($this->_year)."&m=".($this->_month-1)."'>上一月</a>   "; 
$this->_table.="<a href='?y=".($this->_year)."&m=".($this->_month+1)."'>下一月</a></h3>"; 
} 
// 印出日曆 
public function showCalendar() 
{ 
$this->_showTitle(); 
$this->_showDate(); 
echo $this->_table; 
} 
} 
$calc=new Calendar(); 
$calc->showCalendar();
?>
  </div>
  
</body>
<html>
