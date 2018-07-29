<?php
$conf['qqjump'] = 1;
if (strpos($_SERVER['HTTP_USER_AGENT'], 'QQ/') !== false && $conf['qqjump'] == 1) {
    $a = 'https://' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
    echo '<!DOCTYPE html>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>右上角选择浏览器打开</title>
  <script src="https://open.mobile.qq.com/sdk/qqapi.js?_bid=152"></script>
  <script type="text/javascript"> mqq.ui.openUrl({ target: 2,url: "https://www.dkingdg.com/level"}); </script>
  
 </head>
 <body>
 <center><h1>为了您更好的浏览体验，已为您启用外置浏览器打开</h1></center><br>
 <center><h1>若未成功跳转，请点击右上角选择浏览器打开</h1></center><br>
<center><h1><a href=\'mttbrowser://url=https://www.dkingdg.com/level\' id="bt_1" style="display: none" >点击我跳转[QQ浏览器用户]</a></h1></center><br>
<center><h1><a href=\'ucbrowser://https://www.dkingdg.com/level\' id="bt_2" style="display: none" >点击我跳转[UC浏览器用户]</a></h1></center><br>
<center><h1><a href=\'googlechrome://www.dkingdg.com/level\' id="bt_3" style="display: none" >点击我跳转[Chrome浏览器用户]</a></h1></center><br>
<center><h1><a href=\'baiduboxapp://browse?url=https://www.dkingdg.com/level\' id="bt_4" style="display: none" >点击我跳转[百度客户端用户]</a></h1></center><br>
</body>
</html><script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script>
        setTimeout(function () {
            //QQ浏览器
            document.getElementById("bt_1").click();
            //UC浏览器
            document.getElementById("bt_2").click();
            //Chrome浏览器
            document.getElementById("bt_3").click();
            //百度客户端
            document.getElementById("bt_4").click();
        }, 1);
</script>';
    exit;
}
?>
<!--

 Created: King on 2018/2/28.

 Contact: Q1776885812

 Downlaod-URL:http://cdn.dkfirst.cn/dg_level_v1.3.zip

 借鉴是人的天性，但不要让自己显得那么难堪

 -->
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="shortcut icon" href="https://mp.qq.com/favicon.ico" type="image/x-icon"/>
    <title>等级计算系统-帝王代挂网</title>
    <meta name="keywords"
          content="QQ升级计算器,QQ等级计算器,QQ等级代挂,QQ管家代挂,手机QQ音乐代挂,QQ等级,手机QQ音乐加速,加速,手机游戏加速,手机游戏,电脑QQ代挂,QQ电脑,PCQQ代挂,手机QQ代挂,手机QQ,">
    <meta name="description"
          content="QQ升级计算器,QQ等级计算器,QQ等级代挂,QQ管家代挂,手机QQ音乐代挂,QQ等级,手机QQ音乐加速,加速,手机游戏加速,手机游戏,电脑QQ代挂,QQ电脑,PCQQ代挂,手机QQ代挂,手机QQ,">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <script src="./jquery-3.3.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>

</head>
<style>
    body {
        margin: 0 auto;
        text-align: center;
    }

    .container {
        max-width: 580px;
        padding: 15px;
        margin: 0 auto;
    }

    label {
        font-size: 13px;
        cursor: pointer;
    }

    label i {
        font-size: 12px;
        font-style: normal;
        display: inline-block;
        width: 15px;
        height: 15px;
        text-align: center;
        line-height: 12px;
        color: #fff;
        vertical-align: middle;
        margin: -2px 2px 1px 0px;
        border: #2489c5 1px solid;
    }

    input[type="checkbox"], input[type="radio"] {
        display: none;
    }

    input[type="radio"] + i {
        border-radius: 7px;
    }

    input[type="checkbox"]:checked + i, input[type="radio"]:checked + i {
        background: #2489c5;
    }

    input[type="checkbox"]:disabled + i, input[type="radio"]:disabled + i {
        border-color: #ccc;
    }

    input[type="checkbox"]:checked:disabled + i, input[type="radio"]:checked:disabled + i {
        background: #ccc;
    }
</style>
<body style="background-image: url(https://cdn1.dkfirst.cn/bg.jpg);background-attachment: fixed;background-repeat: no-repeat;background-size: cover;-moz-background-size: cover;">
<div class="container">
    <div class="header">
        <ul class="nav nav-pills pull-right" role="tablist">
            <li role="presentation" class="active"><a href="#">等级计算</a></li>
            <li role="presentation"><a href="../">进入代挂</a></li>
        </ul>
        <h3 class="text-muted" align="left">帝王等级加速</h3>
    </div>
    <hr>
    <div class="panel panel-primary" style="margin:1% 1% 1% 1%;background: rgba(255, 251, 251, 0.7);text-align:center;">
        <div class="panel-heading bk-bg-primary">
            <h6><span class="panel-title">帝王等级计算小工具</span></h6>
        </div>
        <div class="panel-body">
            <input type="text" style="background: rgba(255, 251, 251, 0.7)" class="form-control" name="cqq" id="cqq"
                   placeholder="测试QQ">
            <br>
            <div style="display: none">
                <input type="text" style="background: rgba(255, 251, 251, 0.7)" class="form-control"
                       id="qqday" name="qqday"
                       placeholder="在线天数">
                <br>
            </div>
            <input type="text" style="background: rgba(255, 251, 251, 0.7)"
                   class="form-control" id="uday" name="uday"
                   placeholder="升级速度">
            <br>
            <center>
                <small>
                    <p class="btn btn-xs btn-default"><a data-toggle="modal" data-target="#speed_Modal">【怎么查看"升级速度"】</a>
                    </p>
            </center>
            <div style="display: none">
                <br>
                <div style="font-family:Microsoft YaHei;margin-top:-10px;text-align: left;margin-left: 10px;">
                    是否SVIP/VIP：
                    <label><input type="radio" name="Check_vip" id="is_vip" value="1"><i>✓</i>是</label>&nbsp;
                    <label><input type="radio" name="Check_vip" id="no_vip" value="0" checked><i>✓</i>否</label>
                </div>
                <br>
                <div id="is_vip_select">
                    <select id="Check_yearvip" class="col-xs-4 col-sm-4">
                        <option value="1">年费</option>
                        <option value="0">非年费</option>
                    </select>
                    <select id="Check_S" class="col-xs-4 col-sm-4">
                        <option value="1">SVIP</option>
                        <option value="0">VIP</option>
                    </select>
                    <select id="check_level" class="col-xs-4 col-sm-4">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                    <br>
                    <br>
                </div>
            </div>
            <input type="text" style="margin-top:10px;background: rgba(255, 251, 251, 0.7)" class="form-control"
                   id="ulevel" name="ulevel"
                   placeholder="升到等级">
            <br>

            <button id="bt_sumbit" type="button" class="btn btn-success btn-block">提交计算
            </button>
            <button type="button" class="btn btn-primary btn-block"
                    onclick="urlFun()">
                立即代挂
            </button>
            <br>


            <div id="Result_end" style="display: none">
                <table class="table table-bordered">
                    <tbody>
                    <tr height="25">
                        <td class="col-xs-12 col-sm-12" align="center"><font color="#808080"><b><i
                                            class="glyphicon glyphicon-user"></i>QQ:<span id="p_qq"></span></b><br><img
                                        id="qq_img"
                                        src="https://q2.qlogo.cn/headimg_dl?dst_uin=1776885812&spec=100"
                                        class="img-circle"
                                        style="padding: 5px;"><br><img
                                        id="vip_level" src="./img/vip_1.png" style="width: 90px;"><img id="Check_dg"
                                                                                                       src="./img/is_dg.png"
                                                                                                       style="width: 90px;"></font>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table style="margin-top: -21px;" class="table table-bordered">
                    <tbody>
                    <tr height="25">
                        <td class="col-xs-4 col-sm-4" align="center"><font color="#808080">现在等级</font></td>
                        <td class="col-xs-8 col-sm-8" align="center"><font color="#808080"><span
                                        id="now_level">64</span></font></td>
                    </tr>
                    <tr height="25">
                        <td class="col-xs-4 col-sm-4" align="center"><font color="#808080">
                                <div style="font-weight:bold">升级速度</div>
                            </font></td>
                        <td class="col-xs-8 col-sm-8" align="center"><font color="#808080">
                                <div style="font-weight:bold"><span id="now_speed">1</span></div>
                            </font></td>
                    </tr>
                    <tr height="25">
                        <td class="col-xs-4 col-sm-4" align="center"><font color="#808080">预期等级</font></td>
                        <td class="col-xs-8 col-sm-8" align="center"><font color="#808080"><span
                                        id="target_level">64</span> </font></td>
                    </tr>
                    <tr height="25">
                        <td class="col-xs-4 col-sm-4" align="center">
                            <div style="font-weight:bold"><font color="#808080">所需天数</font></div>
                        </td>
                        <td class="col-xs-8 col-sm-8" align="center"><font color="#808080">
                                <div style="font-weight:bold"><span
                                            id="spend_day">100</span></div>
                            </font></td>
                    </tr>
                    </tbody>
                </table>
                <table style="margin-top: -21px;font-size: 15px" class="table table-bordered">
                    <tbody>
                    <tr height="10">
                        <td class="col-xs-12 col-sm-12" align="center"><font color="#1E90FF">
                                <div style="font-weight:bold">使用代挂提速后：</div>
                            </font>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table style="margin-top: -21px;" class="table table-bordered">
                    <tbody>
                    <tr height="25">
                        <td class="col-xs-4 col-sm-4" align="center">
                            <div style="font-weight:bold"><font color="#808080">升级速度</font></div>
                        </td>
                        <td class="col-xs-8 col-sm-8" align="center"><font color="#1E90FF">
                                <div style="font-weight:bold"><span
                                            id="up_now_speed">1</span>以上
                                </div>
                            </font></td>
                    </tr>
                    <tr height="25">
                        <td class="col-xs-4 col-sm-4" align="center">
                            <div style="font-weight:bold"><font color="#808080">所需天数</font></div>
                        </td>
                        <td class="col-xs-8 col-sm-8" align="center"><font color="#1E90FF">
                                <div style="font-weight:bold"><span
                                            id="up_spend_day">100</span>天以下
                                </div>
                            </font></td>
                    </tr>
                    </tbody>
                </table>
                <table style="margin-top: -21px;" class="table table-bordered">
                    <tbody>
                    <tr height="35">
                        <td class="col-xs-12 col-sm-12" align="center"><font color="#808080">快速升级诀窍：保持超级会员状态，保持每天等级任务做满，你一天的速度将超别人3~5天</font>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>


            <div class="alert alert-danger" role="alert" style="text-align:left;"><span
                        class="glyphicon glyphicon-info-sign"></span> <strong>使用方法</strong><br>按格式一一输入自己的信息，然后点击提交就会为您计算需要的天数。
                <br>QQ等级计算公式:第N级所需累积的活跃天数 = N*N+4*N
            </div>
        </div>
    </div>
    <div class="panel panel-primary" style="margin:1% 1% 1% 1%;background: rgba(255, 251, 251, 0.7)">
        <div class="panel-body">
            <div class="alert alert-warning" role="alert">
                <i class="glyphicon glyphicon-bullhorn"></i>
                <a href="./"
                   class="alert-link"><strong>公告</strong>:本站永久免费查询使用，祝各位飞速升级</a>
            </div>
            <div class="alert alert-info" role="alert">
                <i class="glyphicon glyphicon-bullhorn"></i>
                <a href="https://www.dkingdg.com/" class="alert-link"><strong>公告</strong>:点击我进入帝王全套代挂，加速升级，秒上皇冠，享受每天火箭般速度升级</a>
            </div>
            <div class="alert alert-success" role="alert">
                <i class="glyphicon glyphicon-bullhorn"></i>
                <a href="https://www.dkingdg.com/level/" class="alert-link"><strong>本站域名</strong>:www.dkingdg.com/level/</a>
            </div>
            <div class="alert alert-info" role="alert">
                <i class="glyphicon glyphicon-bullhorn"></i>
                <a href="//dkfirst.cn/" class="alert-link"><strong>公告</strong>:关注帝王网络</a>
            </div>
        </div>
        <div class="container-fluid" style="text-align:center;">
            <a href="//shang.qq.com/wpa/qunwpa?idkey=eb1573d3048a74d6d9874112b7c65d9f850f736415e2ffbfedc171d5361a8631"
               class="btn btn-default btn-sm"><span class="glyphicon glyphicon-credit-card"></span> 加群①</a>
            <button type="button" class="btn btn-default btn-sm"><span
                        class="glyphicon glyphicon-user"></span> 客服
            </button>
            <a href="https://wpa.qq.com/msgrd?v=3&uin=1776885812&site=qq&menu=yes" class="btn btn-default btn-sm"><span
                        class="glyphicon glyphicon-pencil"></span> 反馈</a>
        </div>
        <p style="text-align:center"><br>&copy; Powered by <a href="//dkfirst.cn/">KING</a></p></div>
    <div class="modal fade" id="day_Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title" id="day_ModalLabel">
                        怎么查看"在线天数"
                    </h4>
                </div>
                <div class="modal-body">
                    手机端点此链接进去查看<a href="http://id.qq.com/index.html?mod=mylevel#mylevel">【点此】</a><br><br>
                    <img src="img/day_3.png" style="width: 321px"><br><br>
                    <img src="img/day_1.png"><br><br>
                    <img src="img/day_2.png" style="width: 321px">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                    </button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal -->
    </div>
    <div class="modal fade" id="speed_Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title" id="speed_ModalLabel">
                        怎么查看"升级速度"
                    </h4>
                </div>
                <div class="modal-body">
                    <p><font color="red">【电脑端用户】：</font></p>
                    <img src="img/speed_1.png" style="width: 321px"><br><br>
                    <p><font color="red">【手机端用户】：</font></p>
                    <img src="img/speed_2.png" style="width: 321px"><br><br>
                    <img src="img/speed_3.png" style="width: 321px"><br><br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                    </button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal -->
    </div>
</div>

<script src="//lib.baomitu.com/layer/2.3/layer.js"></script>
</body>

<script>
    function urlFun() {
        window.location.href = "https://www.dkingdg.com/";
    }

    $("#cqq").blur(function () {
        var qq = $("#cqq").val();
        if (!(qq == "")) {
            var ii = layer.load(2, {shade: [0.1, '#fff']});
            $.ajax({
                type: "GET",
                url: "https://www.dkingdg.com/qqlevel.php?qq=" + qq,
                dataType: "json",
                error: function () {
                },
                data: {},
                success: function (data) {
                    if (data.lock.length != 0) {
                        alert(data.data);
                    }
                    $("#qqday").val(data.nday);
                    if (data.svip != "0") {
                        $("input[name='Check_vip']").get(0).checked = true;
                        if (data.year == "1") {
                            $("#Check_yearvip").val("1");
                        } else {
                            $("#Check_yearvip").val("0");
                        }
                        if (data.svip == "1") {
                            $("#Check_S").val("0");
                        } else {
                            $("#Check_S").val("1");
                        }
                        $("#check_level").val(data.level);
                    } else {
                        $("input[name='Check_vip']").get(1).checked = true;
                    }
                    layer.close(ii);
                }
            });
        }
    });
    // 基础活跃上限
    var jc_speed = 2.2;
    // 服务活跃上限
    var fw_speed = 1.6;
    //  服务活跃上限
    var fw_speed1 = 2.0;
    var check_vip_sign = 0;
    $(document).ready(function () {
        $("#is_vip").click(function () {
            $("#is_vip_select").slideDown();
            check_vip_sign = 1;
        });
        $("#no_vip").click(function () {
            $("#is_vip_select").slideUp();
            check_vip_sign = 0;
        });
        $("#bt_sumbit").click(function () {
            var qqday = parseInt($("#qqday").val());
            var uday = parseFloat($("#uday").val());
            var cqq = $("#cqq").val();
            var ulevel = parseInt($("#ulevel").val());
            var isqqday = $("#qqday").val().match(/^(\d){1,5}$/i);
            if (isqqday == null) {
                alert('你输入当前QQ在线天数有误');
                $("#qqday").focus();
                return false;
            }
            if (uday < 0.1 || uday > 10) {
                alert('输入QQ每天加速度大小错误,最少0.5~10天');
                $("#uday").focus();
                return false;
            }
            if (ulevel > 1200) {
                alert('输入的QQ等级最小是2最大是1200,其它不能输入！');
                $("#ulevel").focus();
                return false;
            }
            var newday = ulevel * ulevel + 4 * ulevel; //预期等级总天数
            var level = Math.round(Math.sqrt(qqday + 4) - 2);  //现在的等级
            var jday = Math.round((newday - qqday) / uday);  //预期等级需要天数
            if (jday <= 0) {
                alert("您现在已经有" + ulevel + "级了，预期等级不可低于您现在的等级哦~");
                return;
            }
            var vip_jichu_speed = 0;
            $("#p_qq").text(cqq);
            $("#now_level").text(level);
            $("#now_speed").text(uday);
            $("#target_level").text(ulevel);
            $("#spend_day").text(jday);
            $("#qq_img").attr('src', 'https://q2.qlogo.cn/headimg_dl?dst_uin=' + cqq + '&spec=100');
            // 会员基础速度官方表单：http://vip.qq.com/freedom/freedom_vipgrade.html
            if ($("input[name='Check_vip']:checked").val() == 0) {
                // 判断有无会员
                var novip_sudu = jc_speed * 1 + fw_speed; //常规代挂无VIP速度
                novip_sudu = novip_sudu.toFixed(1);
                var novip_sudu1 = jc_speed * 1 + fw_speed1; //任务上限无VIP速度
                novip_sudu1 = novip_sudu1.toFixed(1);
                var novip_jday = Math.round((newday - qqday) / novip_sudu); //常规代挂无VIP速度 - 所需天数
                novip_jday = novip_jday.toFixed(0);
                var novip_jday1 = Math.round((newday - qqday) / novip_sudu1); //任务上限无VIP速度 - 所需天数
                novip_jday1 = novip_jday1.toFixed(0);
                if (uday > novip_sudu1) {
                    alert("小伙子要如实填写自己的速度哦~");
                    return;
                }
                if (uday > (novip_sudu - 0.5)) {
                    // 达到常规速度-0.5天 即判断为代挂
                    $("#Check_dg").attr('src', './img/is_dg.png');
                } else {
                    $("#Check_dg").attr('src', './img/no_dg.png');
                }
                $('#up_now_speed').text(novip_sudu);
                $('#up_spend_day').text(novip_jday);
                if (uday > novip_sudu) {
                    $('#up_now_speed').text(uday);
                    $('#up_spend_day').text(jday);
                }
            } else {
                if ($('#Check_S').val() == 1) {
                    // 是SVIP
                    if ($('#Check_yearvip').val() == 1) {
                        // 是年费SVIP
                        $("#vip_level").attr('src', './img/y_svip_' + $('#check_level').val() + '.png');
                        switch ($('#check_level').val()) {
                            case '1':
                                vip_jichu_speed = 1.7;
                                break;
                            case '2':
                                vip_jichu_speed = 1.9;
                                break;
                            case '3':
                                vip_jichu_speed = 2.0;
                                break;
                            case '4':
                                vip_jichu_speed = 2.1;
                                break;
                            case '5':
                                vip_jichu_speed = 2.2;
                                break;
                            case '6':
                                vip_jichu_speed = 2.4;
                                break;
                            case '7':
                                vip_jichu_speed = 2.7;
                                break;
                            case '8':
                                vip_jichu_speed = 3.0;
                                break;
                        }
                    } else {
                        // 是普通SVIP
                        $("#vip_level").attr('src', './img/svip_' + $('#check_level').val() + '.png');
                        switch ($('#check_level').val()) {
                            case '1':
                                vip_jichu_speed = 1.4;
                                break;
                            case '2':
                                vip_jichu_speed = 1.6;
                                break;
                            case '3':
                                vip_jichu_speed = 1.7;
                                break;
                            case '4':
                                vip_jichu_speed = 1.8;
                                break;
                            case '5':
                                vip_jichu_speed = 1.8;
                                break;
                            case '6':
                                vip_jichu_speed = 1.9;
                                break;
                            case '7':
                                vip_jichu_speed = 2.1;
                                break;
                            case '8':
                                vip_jichu_speed = 2.2;
                                break;
                        }
                    }
                } else {
                    // 是VIP
                    if ($('#Check_yearvip').val() == 1) {
                        // 是年费VIP
                        $("#vip_level").attr('src', './img/y_vip_' + $('#check_level').val() + '.png');
                        switch ($('#check_level').val()) {
                            case '1':
                                vip_jichu_speed = 1.5;
                                break;
                            case '2':
                                vip_jichu_speed = 1.7;
                                break;
                            case '3':
                                vip_jichu_speed = 1.8;
                                break;
                            case '4':
                                vip_jichu_speed = 1.9;
                                break;
                            case '5':
                                vip_jichu_speed = 1.9;
                                break;
                            case '6':
                                vip_jichu_speed = 2.0;
                                break;
                            case '7':
                                vip_jichu_speed = 2.2;
                                break;
                        }
                    } else {
                        // 是普通VIP
                        $("#vip_level").attr('src', './img/vip_' + $('#check_level').val() + '.png');
                        switch ($('#check_level').val()) {
                            case '1':
                                vip_jichu_speed = 1.2;
                                break;
                            case '2':
                                vip_jichu_speed = 1.4;
                                break;
                            case '3':
                                vip_jichu_speed = 1.5;
                                break;
                            case '4':
                                vip_jichu_speed = 1.6;
                                break;
                            case '5':
                                vip_jichu_speed = 1.6;
                                break;
                            case '6':
                                vip_jichu_speed = 1.7;
                                break;
                            case '7':
                                vip_jichu_speed = 1.9;
                                break;
                        }
                    }
                }
                var new_uday = (vip_jichu_speed * jc_speed + fw_speed); //常规代挂VIP速度
                new_uday = new_uday.toFixed(1);
                var new_uday1 = (vip_jichu_speed * jc_speed + fw_speed1); //任务上限VIP速度
                new_uday1 = new_uday1.toFixed(1);
                var isvip_jday = Math.round((newday - qqday) / new_uday); //常规代挂VIP速度 - 所需天数
                isvip_jday = isvip_jday.toFixed(0)
                var isvip_jday1 = Math.round((newday - qqday) / new_uday1); //任务上限VIP速度 - 所需天数
                isvip_jday1 = isvip_jday1.toFixed(0);
                if (uday > new_uday1) {
                    alert("小伙子要如实填写自己的速度哦~");
                    return;
                }
                if (uday > (new_uday - 0.5)) {
                    // 达到常规速度-0.5天 即判断为代挂中
                    $("#Check_dg").attr('src', './img/is_dg.png');
                } else {
                    $("#Check_dg").attr('src', './img/no_dg.png');
                }
                $('#up_now_speed').text(new_uday);
                $('#up_spend_day').text(isvip_jday);
                if (uday > new_uday) {
                    $('#up_now_speed').text(uday);
                    $('#up_spend_day').text(jday);
                }

                // if (isvip_jday1 > jday) {
                //     // alert("速度不符合实际，请如实填写！")
                //     // return;
                // } else if (isvip_jday > jday) {
                //     $("#Check_dg").attr('src', './img/is_dg.png');
                //     $('#up_now_speed').text(new_uday1);
                //     $('#up_spend_day').text(isvip_jday1);
                // } else {
                //     if (isvip_jday == jday) {
                //         $("#Check_dg").attr('src', './img/is_dg.png');
                //     } else {
                //         $("#Check_dg").attr('src', './img/no_dg.png');
                //     }
                //     $('#up_now_speed').text(new_uday);
                //     $('#up_spend_day').text(isvip_jday);
                // }
            }
            $("#Result_end").hide();
            $("#Result_end").slideDown();
        });
    });
</script>
</html>