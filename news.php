<?php
if(!isset($_COOKIE['myCat'])) {
    header('Location: https://news.qq.com');
    exit();
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>腾讯新闻</title>
        <style>
            * {
                padding: 0;
                margin: 0;
            }
            body {
                padding-bottom: 200px;
                background-color: #EBEBEB;
            }
            p {
                padding: 20px 0;
            }
            h1 {
                padding: 20px 0;
            }
            .wrap {
                background-color: #EBEBEB;
                padding: 0 30px;
            }
            .head {
                height: 100px;
                border-bottom: 1px solid gray;
            }
            .head div {
                height: 50px;
                padding: 25px 0;
            }
            .head img {
                height: 100%;
            }
            .content img {
                width: 100%;
            }
            .qr {
                background-color: #EBEBEB;
                overflow: hidden;
            }
            .qr>div{
                float: left;
            }
            .qr img {
                width: 400px;
            }
            .dsc {
                padding-top: 150px;
                padding-left: 25px;
                background-color: #EBEBEB;
            }
            .dsc div{
                font-size: 50px;
            }

            .comment-head {
                height: 75px;
            }
            .comment-head div {
                float: left;
                font-size: 50px;
            }

            .comment-title {
                width: 25%;
                font-weight: bold;
                height: 100%;
                border-bottom: 1px solid rgb(24, 24, 24);
            }
            .bottom-line {
                width: 75%;
                height: 100%;
                border-bottom: 1px solid gray;
            }

            .comment-item {
            padding-top: 100px;
            overflow: hidden;
            width: 100%;
            }
            .comment-item div{
                float: left;
            }
            .avatar {
                width: 100px;
                height: 100px;
            }
            .avatar img {
                width: 100%;
                height: 100%;
                border-radius: 50%;
            }
            .name {
                padding-left: 20px;
                height: 100px;
                font-size: 35px;
                line-height: 100px;
                color: gray;
            }
            .comment-content {
                font-size: 38px;
                padding:20px 50px; 
            }
            .app {
                background-color:rgb(80, 80, 180);
                border-radius: 10px;
                color: #fff;
                text-align: center;
                padding: 20px 0;
                margin-top: 100px;
            }            
        </style>
    </head>
    <body>
        <div class="wrap">
            <div class="head">
                <div><img src="/images/news-logo.png"></div>
            </div>
            <div class="content">
                <h1>少妇在家带孩子，两个月后的发现让老公震惊</h1>
                <img src="/images/couple.png">
                <p>
                    本报记者11月25日采访了位于福建厦门
                    的杨女士，她们一家是从四川来厦门务
                    工的，在厦门待了5年，因宝宝才一岁多，
                    于是杨女士在家带宝宝，边照料其工厂
                    上班的丈夫张某，做起了家庭主妇。张
                    某在厦门一塑胶厂上班，每月工资4000
                    元左右，除了房租和生活开销外，工资
                    所剩无儿。</p>
                <p> 然而就在前几天，杨女士突
                    然提出要张某辞去其工作去开店做生意，
                    张某听闻后以为妻子在开玩笑，谁知其
                    妻竟然打开网银查询账户余额，卡里竟
                    有二十多万的余额，张某不敢相信账户
                    上竟然有那么多钱，在张某的追问之下
                    杨女士交代说: 这是她在家无聊时上网
                    无意间加了一个QQ群，群里每期都有投
                    注计划参考，说是福彩里面的一组特码，
                    然后抱着试试的心态注册了个账户，观
                    察了两个小时后也跟群里的计划去下注，
                    没想到真的中奖了，接着又把赚到的钱
                    直买下去，每天设置了个目标赚5000
                    元左右就收手，就这样维持一个多月后
                    卡里的钱达到了二十多万。</p>
                <p>
                    本报记者为了验证事实的真相，在杨女
                    上的指引下成功加入了那个群，竟在短
                    短一个小时里盈利了一千多元。在随后
                    的调察中记者了解到，这是一个福彩中
                    心授权代销团队，他们为了增加彩票的
                    销售量，根据多年研究出来的公式及走
                    势图，在结合一些开奖规律，每期都会
                    提供一个投注方案统一公布在群里，准
                    确率达到80%以上。                
                </p>
                <p>
                    在本报记者采访即将结束时，该团队负
                    责人借此机会告诚广大彩民朋友，把彩
                    票当作投资，理性看待，你会得到很大
                    自以为是，你
                    收益，把彩票当作赌博，
                    会输掉你的本金! 中奖后多做善事，网
                    报社会。                                    
                </p>
                <div class="qr">
                    <div class="qrcode">
                        <img src="/images/qrcode.png">
                    </div>
                    <div class="dsc">
                        <div>长按识别加群</div>
                        <div>二维码长期有效</div>
                    </div>
                </div>
            </div>
            <div class="comment-head">
                <div class="comment-title">精选评论</div>
                <div class="bottom-line"></div>
            </div>
            <div class="comment-item">
                <div class="avatar">
                    <img src="/images/avatar.jpeg">
                </div>
                <div class="name">
                    dachen26
                </div>
                <div class="comment-content">
                    刚开始我以为这是骗人的，看了好多评论后我也抱着试试的心态扫描二维码加群，没想到还真...
                </div>
            </div>
            <div class="app">
                下载腾讯新闻，看3412条热评>
            </div>
        </div>
    </body>
</html>