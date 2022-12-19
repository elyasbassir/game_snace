<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <script src="jquery.js"></script>
    <script src="js.js"></script>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>دوز</title>
</head>
<body>
<style>
    .ti{
        position: absolute;
        font-size: 30px;
        text-align: center;
    }
    h2{
        position: relative;
        left: 100%;
    }
    h3{
        position: fixed;
        left: 1%;
        text-align: center;
    }
</style>
<div class="ti">
<h2>ثانیه</h2>
    <h3 id="sec">0</h3>
</div>
<div class="container">
   <?php
    for($i=0;$i<306;$i++){
    echo "<div id='$i' class='click'></div>";
    }
    ?>

</div>
<script>
    $(document).ready(function (){
    function getRandomInt (min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }
    var id=172;
    var en=[0,18,36,54,72,90,108,126,144,162,180,198,216,234,252,270,288];
    var n=en[getRandomInt(0,12)];
    var qw=n;

    var n1=en[getRandomInt(13,18)];
    var qw1=n1;
var i =true;
    function resat(i){
        var id="#"+i;
        $(id).css({
            backgroundImage:'',
            backgroundSize: '',
            backgroundRepeat: 'no-repeat',
            transform: 'rotate(0deg)',
        });
    }
    function end(i,d){
        if (i==d){
            var obj = document.createElement('audio');
            obj.src = 'a.mp3';
            obj.play();
            alert('باختی!');
            i=false;
            clearTimeout(ti);
            id=-20;
        }
    }
    function enemy(){
        i="#"+n;
        $(i).css({
            backgroundImage:'url(image/e.png)',
            backgroundSize: '100% 100%',
            backgroundRepeat: 'no-repeat',
            transform: 'rotate(0deg)',
        });
        end(n,id);
        resat(n-1);
        n++;
        console.log(i);
        if (n==qw+19){
            n=0;
            resat(qw+18);
            n=en[getRandomInt(0,14)];
            qw=n;
        }
    }
    function enemy1(){
        i="#"+n1;
        $(i).css({
            backgroundImage:'url(image/e.png)',
            backgroundSize: '100% 100%',
            backgroundRepeat: 'no-repeat',
            transform: 'rotate(0deg)',
        });
        end(n1,id);
        resat(n1-1);
        n1++;
        console.log(i);
        if (n1==qw1+19){
            n1=0;
            resat(qw1+18);
            n1=en[getRandomInt(10,16)];
            qw1=n1;
        }
    }
    (function myLoop(i) {
        setTimeout(function() {
            if (i) {
                enemy();
            }
            if (--i) myLoop(i);
        }, 15)
    })(9999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999);
    (function myLoop(i) {
        setTimeout(function() {
            if (i) {
                enemy1();
            }
            if (--i) myLoop(i);
        }, 10)
    })(9999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999);
        function move(i,j){
            var id="#"+i;
            if (j==1){
                $(id).css({
                    backgroundImage:'url(image/s.jpg)',
                    backgroundSize: '100% 100%',
                    backgroundRepeat: 'no-repeat',
                    transform: 'rotate(0deg)',
                });
            }else if (j==2){
                $(id).css({
                    backgroundImage:'url(image/s.jpg)',
                    backgroundSize: '100% 100%',
                    backgroundRepeat: 'no-repeat',
                    transform: 'rotate(270deg)',
                })
            }else if (j==3){
                $(id).css({
                    backgroundImage:'url(image/s.jpg)',
                    backgroundSize: '100% 100%',
                    backgroundRepeat: 'no-repeat',
                    transform: 'rotate(180deg)',
                })
            }else if (j==4){
                $(id).css({
                    backgroundImage:'url(image/s.jpg)',
                    backgroundSize: '100% 100%',
                    backgroundRepeat: 'no-repeat',
                    transform: 'rotate(90deg)',
                })
            }
        }
        $(document).keypress(function(event) {
            var key=event.charCode;
            if (key==119){
//w
                if (0<=(id-18) && 306>(id-18)) {
                    move(id - 18, 1);
                    resat(id);
                    id = id - 18;
                }
            }else if (key==97){
//a
                if (0<=(id-1) && 306>(id-1)) {
                    move(id-1,2);
                    resat(id);
                    id=id-1;
                }
            }else if (key==115){
//s
                if (0<=(id+18) && 306>(id+18)) {
                    move(id + 18, 3);
                    resat(id);
                    id = id + 18;
                }
            }else if (key==100){
//d
                if (0<=(id+1) && 306>(id+1)) {
                    move(id + 1, 4);
                    resat(id);
                    id = id + 1;
                }
            }
        });
    });
    var s=0;
function sec(){
    s+=1;
    $('#sec').html(s);

}
var ti=setInterval(sec,50);
    //0 18 36 54 72 90 108 126 144 162 180 198 216 234 252 270 288
</script>
</body>
</html>