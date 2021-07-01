<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>이게모게</title>
  <style>
    #dora{
      width: 200px;
      margin-top: 10px;
    }
    #disp{
      line-height: 0px;
      color: #224155;
      position:relative;
      margin-left: 50px;
      margin-top: 50px;
      width:300px;
      height:100px;
      background: #c3ddf3;
      border-radius: 10px;
      text-align: center;
      vertical-align: middle;
      line-height: 100px;
      display: block;
      text-align: center;
    }
    #disp:after {
      border-top:10px solid #c3ddf3;
      border-left: 10px solid transparent;
      border-right: 10px solid transparent;
      border-bottom:0px solid transparent;
      content:"";
      position:absolute;
      top:100px;
      left:200px;
    }
    #btn{
      border: none;
    }
    img{
      margin-left: 100px;
    }
    input{
      margin-top: 20px;
      margin-left: 100px;
      border: none;
      border-bottom: 1px solid black;
    }
  </style>
</head>
<body>
<div id="disp"> </div>
<img src="https://raw.githubusercontent.com/jihami/vscode/master/bam2.png?token=ARXX54Y6RT5BUPFFHYGONCLAZPVPS" alt="아이쿠 사진이 깨져버렸넹" id="dora"><br/>
<input type="text" id="box" placeholder="텍스트를 입력하시오">
<button id="btn" onclick="btn()" >입력</button>
<script>
  function btn(){
    const text = document.getElementById("box").value;
    display = document.getElementById("disp");
    if (text === "안녕"){
      display.innerHTML="안녕"
    }else if (text === "불꺼줘"){
      display.innerHTML="알겠어";
      document.body.style.backgroundColor="black";
    }else if (text === "안녕?"){
      display.innerHTML="안녕??";
    }else if (text === "이름이 뭐야"){
      display.innerHTML="나는 밤이야";
    }else if (text === "안녕!"){
      display.innerHTML="만나서 반가워";
    }else if (text === "만나서 반가워"){
      display.innerHTML="나도 만나서 반가워!";
    }else if (text === "뭐해?"){
      display.innerHTML="나는 지금 산책중이야";
	}else if (text === "뭐해"){
      display.innerHTML="밤이지금 공부해!!";
    }else if (text === "오늘 날씨 어때?"){
      display.innerHTML="비가 와서 조금 꿀꿀해 ㅜ";
    }else if (text === "오늘 날씨 어때"){
    display.innerHTML="비가 오네! 난 비오는게 제일 좋아!";
    }else if (text === "지금 몇시야?"){
      display.innerHTML="서울시?!! ㅋㅋㅋㅋㅋ";
    }else if (text === "지금 몇시야"){
    display.innerHTML="아직 시계읽는 법을 몰라 ㅜ";
    }else if (text === "넌 이름이 뭐니"){
      display.innerHTML="내 이름은 밤이야";
	}else if (text === "이름이 뭐야?"){
      display.innerHTML="나는 밤이야";
    }else if (text === "넌 무슨 종이야?"){
      display.innerHTML="난 말티푸야!";
    }else{
      display.innerHTML="이런말은 지함이가 안가르쳐 줬어,,,"
    }
  }
</script>
</body>
</html>