<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>蜜桃貓主題萬年曆</title>
  <style>
    *{
      box-sizing: border-box;
      padding: 0;
      margin: 0;
      font-family: '華康流隸體','金梅浪漫體','華康娃娃體','華康少女體','華康兒風體','華康流葉體','Segoe Print';
    }
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
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
    }
    /* 毛玻璃外框 開始 */
    .glass {
      position: relative;
      padding: 0;
      margin: 0;
      font-size: 1vmin;
      background: rgba(255, 255, 255, 0.3);
      /* width: 950px; */
      width: 70vw;
      /* height: 580px; */
      height: 40vw;
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
      /* width: 935px; */
      width: 98.5%;
      /* height: 65px; */
      height: 14%;
      background: rgba(255, 255, 255, 0.5);
      font-size: 9vmin;
      text-transform: uppercase;
      font-weight: 900;
      backdrop-filter: blur(25px);
      border-radius: 15px;
      transition: all 0.8s ease-in-out;
    }
    /* 標題小毛玻璃 結束 */
    /* 標題小毛玻璃動態 開始 */
    .glass:hover::before {
      height: 4%;
      top: 1vh;
      transform: translateY(-70%);
      font-size: 4vmin;
    }
    /* 標題小毛玻璃動態 結束 */
    /* 標題小毛玻璃文字效果 開始 */
    [data-title]{
      color: rgba(93, 71, 139, 0.2);
      /* color: transparent; */
      -webkit-text-stroke: 1px lightslategray;
      letter-spacing: 0.04em;
      flex-basis: 100%;
    }
    /* 標題小毛玻璃文字效果 結束 */
    /* 月份圖片 開始 */
    .month-img{
      text-align: center;
    }
    /* 月份圖片 結束 */

    /* 切換月份年份按鈕 開始 */
    .nav {
      /* padding: auto;
      margin: auto; */
      display: flex;
      justify-content: space-between;
      flex-basis: 100%;
    }
    /* 左邊前一年的按鈕 開始 */
    .nav1 {
      flex-basis: 10%;
      margin-top: 40vh;
      justify-content: center;
      margin-left: 3vw;
    }
    .nav1>a{
      display: flex;
      justify-content: center;
      font-size: 2.4vmin;
      width: 3.2vw;
      height:6.5vh;;
      line-height: 6.6vh;
      text-align: center;
      color: #fff;
      text-decoration: none;
      background: linear-gradient(90deg , #85d6fc , #f898cf , #fff59e , #85d6fc );
      border-radius: 40px;
      background-size: 400%;
      text-transform: uppercase;
    }
    .nav1>a:hover{
      animation: animate 8s linear infinite;
    }
    @keyframes animate{
      0%{
          background-position: 0%;
      }
      100%{
          background-position: 400%;
      }
    }
    .nav1>a::before{
      top: -5px;
      left: -5px;
      right: -5px;
      bottom: -5px;
      z-index: -1;
      background: linear-gradient(90deg , #85d6fc , #f898cf , #fff59e , #85d6fc );
      border-radius: 40px;
      background-size: 400%;
      opacity: -1;
      transition: 0.5s;
    }
    .nav1>a:hover::before{
      filter: blur(20px);
      opacity: 1;
    }
      /* 左邊前一年的按鈕 結束 */
    /* 左邊上個月的按鈕 開始 */
    .nav2 {
      flex-basis: 10%;
      margin-top: 40vh;
      justify-content: flex-end;
      margin-right: 0.1vw;
      margin-left: 0.1vw;
    }
    .nav2>a{
      display: flex;
      justify-content: center;
      font-size: 3vmin;
      width: 3.2vw;
      height: 6.5vh;
      line-height: 6.6vh;
      text-align: center;
      color: #fff;
      text-decoration: none;
      background: linear-gradient(90deg , #85d6fc , #f898cf , #fff59e , #85d6fc );
      border-radius: 40px;
      background-size: 400%;
      text-transform: uppercase;
    }
    .nav2>a:hover{
      animation: animate 8s linear infinite;
    }
    @keyframes animate{
      0%{
        background-position: 0%;
      }
      100%{
        background-position: 400%;
      }
    }
    .nav2>a::before{
      top: -5px;
      left: -5px;
      right: -5px;
      bottom: -5px;
      z-index: -1;
      background: linear-gradient(90deg , #85d6fc , #f898cf , #fff59e , #85d6fc );
      border-radius: 40px;
      background-size: 400%;
      opacity: -1;
      transition: 0.5s;
    }
    .nav2>a:hover::before{
      filter: blur(20px);
      opacity: 1;
    }
      /* 左邊上個月的按鈕 結束*/
    /* 右邊後一個月的按鈕 開始 */
    .nav3 {
      flex-basis: 10%;
      margin-top: 40vh;
      justify-content: flex-end;
      margin-right: 0.1vw;
      margin-left: 2.5vw;
    }
    
    .nav3>a{
      display: flex;
      justify-content: center;
      font-size: 3vmin;
      width: 3.2vw;
      height: 6.5vh;
      line-height: 6.6vh;
      text-align: center;
      color: #fff;
      text-decoration: none;
      background: linear-gradient(90deg , #85d6fc , #f898cf , #fff59e , #85d6fc );
      border-radius: 40px;
      background-size: 400%;
      text-transform: uppercase;
    }
    
    .nav3>a:hover{
      animation: animate 8s linear infinite;
    }
    
    @keyframes animate{
        0%{
            background-position: 0%;
        }
        100%{
            background-position: 400%;
        }
    }
    
    .nav3>a::before{
        top: -5px;
        left: -5px;
        right: -5px;
        bottom: -5px;
        z-index: -1;
        background: linear-gradient(90deg , #85d6fc , #f898cf , #fff59e , #85d6fc );
        border-radius: 40px;
        background-size: 400%;
        opacity: -1;
        transition: 0.5s;
    }
    
    .nav3>a:hover::before{
        filter: blur(20px);
        opacity: 1;
    }
      /* 右邊後一個月的按鈕 結束 */
      /* 右邊後一年的按鈕 開始 */
      .nav4 {
        flex-basis: 10%;
        margin-top: 40vh;
        justify-content: flex-end;
        margin-right: 0vw;
      }
      .nav4>a{
        display: flex;
        justify-content: center;
        font-size: 2.4vmin;
        width: 3.2vw;
        height: 6.5vh;
        line-height: 6.6vh;
        text-align: center;
        color: #fff;
        text-decoration: none;
        background: linear-gradient(90deg , #85d6fc , #f898cf , #fff59e , #85d6fc );
        border-radius: 40px;
        background-size: 400%;
        text-transform: uppercase;
      }
  
      .nav4>a:hover{
        animation: animate 8s linear infinite;
      }
  
      @keyframes animate{
        0%{
          background-position: 0%;
        }
        100%{
          background-position: 400%;
        }
      }
  
      .nav4>a::before{
        top: -5px;
        left: -5px;
        right: -5px;
        bottom: -5px;
        z-index: -1;
        background: linear-gradient(90deg , #85d6fc , #f898cf , #fff59e , #85d6fc );
        border-radius: 40px;
        background-size: 400%;
        opacity: -1;
        transition: 0.5s;
      }
  
      .nav4>a:hover::before{
        filter: blur(20px);
        opacity: 1;
      }
      /* 右邊後一年的按鈕 結束 */
    /* 切換月份年份按鈕 結束 */
    /* 左邊隨機圖片 開始 */
        #left-img{
        width: 16vw;
        height: 32vw;
      }
    /* 左邊隨機圖片 結束 */
    /* 萬年曆排版 開始 */
    .wrapper {
      width: 60vw;
      margin: 1rem auto;
      /* 對齊方式 */
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      flex-basis: 100%;
    }
    aside {
      display: flex;
      justify-content: center;
    }
    .hide-in-phone{
      margin: 2vh 0;
    }
    .table {
      width: 49vw;
      height:35vw;
      display: flex;
      flex-wrap: wrap;
      align-content: baseline;
      margin-left: 0.1vw;
      margin-top: 1vh;
    }
    .table div {
      display: inline-block;
      width: 7vw;
      height: 5vw;
      /* border: 1px solid rgba(255, 255, 255, 0.2); */
      box-sizing: border-box;
      text-align: center;
      /* line-height: 8vh; */
      font-size: 3.5vmin;
    }
    .table>div:not(.weekend,.today){
      font-weight: bold;
      background: linear-gradient(to right, #eea2a2 0%, #bbc1bf 19%, #57c6e1 42%, #b49fda 79%, #7ac5d8 100%);
      background: linear-gradient(to right, #eea2a2 0%, #bbc1bf 19%, #57c6e1 42%, #b49fda 79%, #7ac5d8 100%);
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
    }
    .table div.header {
      background: rgba(0, 0, 0, 0.5);
      /* color: white; */
      font-weight: bold;
      height: 9vh;
      /* line-height: auto; */
      font-size: 5.5vmin;
      background: linear-gradient(to top, #fcc5e4 0%, #fda34b 15%, #ff7882 35%, #c8699e 52%, #7046aa 71%, #0c1db8 87%, #020f75 100%);
      background: -webkit-linear-gradient(to top, #fcc5e4 0%, #fda34b 15%, #ff7882 35%, #c8699e 52%, #7046aa 71%, #0c1db8 87%, #020f75 100%);
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
    }
    /* 六日變色 */
    .weekend {
      font-weight: bold;
      background: linear-gradient(to top, #3b41c5 0%, #a981bb 49%, #ffc8a9 100%);
      background: linear-gradient(to top, #3b41c5 0%, #a981bb 49%, #ffc8a9 100%);
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
    }
    /* 今日變色 */
    .today{
      line-height: 8vh;
      font-size: 3vmin;
      /* width: 3vw;
      height: 35vh; */
      color: #3b41c5;
      background: url(./img/today_background/<?=rand(1, 13)?>.gif);
      /* <?php echo "background: url(./gif/".rand(1, 13).".gif)"; ?> */
      background-size: 60%  70%;
      background-repeat:no-repeat;
      /* background: linear-gradient(-225deg, #231557 0%, #44107A 29%, #FF1361 67%, #FFF800 100%); */
      /* border-radius: 50%; */
    }
    /* 各節日變色 開始 */
    .festivalday0101::after{
      content:"元旦";
      color: #020f75;
      font-size: 2.5vmin;
      font-weight: bold;
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
    }
    .festivalday0214::after{
      content:"情人節";
      color: #020f75;
      font-size: 2.5vmin;
      font-weight: bold;
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
    }
    .festivalday0228::after{
      content:"和平紀念日";
      color: #020f75;
      font-size: 2.5vmin;
      font-weight: bold;
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
    }
    .festivalday0308::after{
      content:"婦女節";
      color: #020f75;
      font-size: 2.5vmin;
      font-weight: bold;
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
    }
    .festivalday0314::after{
      content:"白色情人節";
      color: #020f75;
      font-size: 2.5vmin;
      font-weight: bold;
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
    }
    .festivalday0329::after{
      content:"青年節";
      color: #020f75;
      font-size: 2.5vmin;
      font-weight: bold;
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
    }
    .festivalday0401::after{
      content:"愚人節";
      color: #020f75;
      font-size: 2.5vmin;
      font-weight: bold;
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
    }
    .festivalday0404::after{
      content:"兒童節";
      color: #020f75;
      font-size: 2.5vmin;
      font-weight: bold;
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
    }
    .festivalday0501::after{
      content:"勞動節";
      color: #020f75;
      font-size: 2.5vmin;
      font-weight: bold;
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
    }
    .festivalday0808::after{
      content:"父親節";
      color: #020f75;
      font-size: 2.5vmin;
      font-weight: bold;
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
    }
    .festivalday0903::after{
      content:"軍人節";
      color: #020f75;
      font-size: 2.5vmin;
      font-weight: bold;
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
    }
    .festivalday0928::after{
      content:"教師節";
      color: #020f75;
      font-size: 2.5vmin;
            font-weight: bold;
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
    }
    .festivalday1007::after{
      content:"勤永老師生日";
      color: #020f75;
      font-size: 2.5vmin;
            font-weight: bold;
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
    }
    .festivalday1010::after{
      content:"雙十國慶";
      color: #020f75;
      font-size: 2.5vmin;
            font-weight: bold;
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
    }
    .festivalday1025::after{
      content:"台灣光復節";
      color: #020f75;
      font-size: 2.5vmin;
            font-weight: bold;
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
    }
    .festivalday1031::after{
      content:"萬聖節";
      color: #020f75;
      font-size: 2.5vmin;
            font-weight: bold;
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
    }
    .festivalday1112::after{
      content:"中華文化復興節";
      color: #020f75;
      font-size: 2.5vmin;
            font-weight: bold;
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
    }
    .festivalday1224::after{
      content:"平安夜";
      color: #020f75;
      font-size: 2.5vmin;
            font-weight: bold;
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
    }
    .festivalday1225::after{
      content:"聖誕節";
      color: #020f75;
      font-size: 2.5vmin;
            font-weight: bold;
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
    }
    /* 各節日變色 結束 */
    /* 萬年曆排版 結束 */
    /* RWD響應式網頁 開始 */
    /* tablets 平板 */
    @media(max-width: 1200px){
      .hide-in-phone{
        display: none;
      }
    }

    /* phones 手機 */
    @media(max-width: 576px){
      .glass{
        height: 90vw;
      }

      .table div.header{
        height: 6vh;
        font-size: 4vmin;
      }
      .table{
        width: 49vw;
        height: 84vw;
      }
      .table div {
      width: 7vw;
      height: 12vw;
      }

      /* 手機板時左邊的圖片消失 */
      .hide-in-phone{
        display: none;
      }
    }
    /* RWD響應式網頁 結束 */
  </style>
</head>
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
<!-- 漸層背景 開始 -->
<body class="bg">
  <!-- 動態背景 開始 -->
  <main class="box">
  <!-- 切換月份 開始 -->
    <nav class="nav">
      <!-- 去年 -->
      <span class="nav1">
        <a href="index.php?year=<?=$prevYear - 1;?>&month=<?=$prevMonth + 1;?>">◄◄</a>
        <!-- 上個月 -->
          </span>
    <span class="nav2">
            <a href="index.php?year=<?=$prevYear;?>&month=<?=$prevMonth;?>">◄</a>
          </span>
    <!-- 毛玻璃外框 開始 -->
    <article class="glass" data-title="<?=$year;?>">
      <!-- 萬年曆樣式 開始 -->
      <section class="wrapper">
          <!-- 月份標題圖 開始 -->
          <span class="month-img">
            <img src="./img/month/<?=$month;?>.png" alt="<?=$month;?>" width="25%" height="25%">
            <!-- <img src="./header_img/<?=$month;?>.png" alt="<?=$month;?>" width="60%" height="60%"> -->
          </span>
          <!-- 月份標題圖 結束 -->
        <!-- 萬年曆內容參數設定 開始 -->
        <?php
        // 設定各項參數
        $firstDay = $year . "-" . $month . "-1"; //這個月第一天的位子
        $firstWeekday = date("w", strtotime($firstDay)); //這個月第一天是星期幾
        $monthDays = date("t", strtotime($firstDay)); //這個月的總天數
        $lastDay = $year . "-" . $month . "-" . $monthDays; //這個月最後一天
        $today = date("Y-m-d"); //取值今天
        $lastWeekday = date("w", strtotime($lastDay)); //這個月最後一天是星期幾
        $dateHouse = [];
        $sday = date("md" , strtotime($today));
        // $sday == date("md" , strtotime($today));


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
        <!-- 萬年曆內容參數設定 結束 -->
        <!-- 萬年曆中間面板 開始 -->
        <aside>
          <!-- 左邊隨機圖 開始 -->
          <figure class="hide-in-phone">
            <img src="./img/table_left_img/month<?=$month;?>-<?=rand(1, 2)?>.jpg" id="left-img">
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
            <!-- 印出萬年曆內容 開始 -->
            <?php
            foreach ($dateHouse as $k => $day) {

                if ($day == $today) {//判斷是否為今日
                    $hol = 'today';
                } else if ($k % 7 == 0 || $k % 7 == 6) {//判斷是否為假日
                    $hol = 'weekend';
                } else if ($sday = date("md" , strtotime($day))){//判斷是否為節日
                  $hol = 'sday';
                }else{
                    $hol = '';
                }

                // $hol = ($k % 7 == 0 || $k % 7 == 6) ? 'weekend' : ""; //判定是否為假日
                if (!empty($day)) {
                    $sday = date("md" , strtotime($day)); //每一天都產生一個$sday變數
                    $dayFormat = date("j", strtotime($day));
                    echo "<div class='{$hol}'><div class='festivalday{$sday}'>{$dayFormat}<br></div></div>";
                } else {
                    echo "<div class='{$hol}'></div>";
                }
            }
            ?>
            <!-- 印出萬年曆內容 結束 -->
          </div>
          <!-- 萬年曆結束 -->
        </aside>
        <!-- 萬年曆中間面板 開始 -->
      </section>
      <!-- 萬年曆樣式 結束 -->
    </article>
    <!-- 毛玻璃外框 結束 -->
              <!-- 下個月 -->
              <span class="nav3">
                <a href="index.php?year=<?=$nextYear;?>&month=<?=$nextMonth;?>">►</a>
              </span>
              <!-- 明年 -->
              <span class="nav4">
                <a href="index.php?year=<?=$nextYear + 1;?>&month=<?=$nextMonth - 1;?>">►►</a>
              </span>
    </nav>
  <!-- 切換月份 結束 -->
  </main>
  <!-- 動態背景 結束 -->
</body>
<!-- 漸層背景 結束 -->
</html>