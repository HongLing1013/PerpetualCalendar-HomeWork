<html>
  <title>萬年曆作業</title>
  <style>
   /*請在這裹撰寫你的CSS*/ 
    
   </style>
<body>
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
  
</body>
<html>
