<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>商城系统管理中心</title>
    <link href="/Public/Admin/css/public.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/Public/Admin/js/jquery.min.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/adminCommon.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/global.js"></script>
</head>

<body>
<div id="dcWrap"> <div id="dcHead">
    <div id="head">
        <div class="logo"><a href="index.html"><img src="/Public/Admin/images/dclogo.gif" alt="logo"></a></div>
        <div class="nav">
            <ul>
                <?php if(is_array($Listtou)): $i = 0; $__LIST__ = $Listtou;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U($val['name']);?>"><?php echo ($val["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <ul class="navRight">
                <li class="M noLeft"><a href="JavaScript:void(0);">您好，admin</a>
                    <div class="drop mUser">
                        <a href="#">编辑我的个人资料</a>
                    </div>
                </li>
                <li class="noRight"><a href="#">退出</a></li>
            </ul>
        </div>
    </div>
</div>
    <!-- dcHead 结束 -->

<div id="dcLeft">

    <div id="menu">
            <?php if(is_array($threeji)): foreach($threeji as $k=>$val): ?><ul>
                <li onclick="LeftShowHide(4);"><a><i class="system"></i><em><?php echo ($k); ?></em></a></li>
                <dl id="LeftColumn4">
                    <?php if(is_array($val)): $i = 0; $__LIST__ = $val;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?><dd><a href="<?php echo U($value['name']);?>"><?php echo ($value["title"]); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
                </dl>
            </ul><?php endforeach; endif; ?>
    </div>
</div>

<div id="dcMain">
    <!-- 当前位置 -->
    <div id="urHere">
        系统管理中心
        <b>></b>
        角色管理
        <b>></b>
        <strong>添加角色</strong>
    </div>
    <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="<?php echo U('index');?>" class="actionBtn">角色列表</a>添加角色</h3>
    <form action="<?php echo U('addsave');?>" method="post" enctype="multipart/form-data">
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">

            <tr>
                <td width="90" align="right">角色名称</td>
                <td>
                    <input type="text" name="title" size="80" class="inpMain" />
                </td>
            </tr>

            <tr>
                <td width="90" align="right">栏目选择</td>
                <td>

<div class="RuleStyle">
    <dl>
        <?php if(is_array($RuleList)): $i = 0; $__LIST__ = $RuleList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$Rule): $mod = ($i % 2 );++$i; if($Rule['typenode'] == 1): ?><span class="Seat_2"></span><?php endif; ?>
            <dd class="Seat_<?php echo ($Rule["typenode"]); ?>" <?php if($Rule['typenode'] != 3): ?>onclick="CheckObject.SeatRuleBox('.Seat_<?php echo ($Rule["typenode"]); ?>');"<?php endif; ?>>
                <label><input type="checkbox" name="RuleID[]" value="<?php echo ($Rule["id"]); ?>"> <?php echo ($Rule["title"]); ?></label>
            </dd><?php endforeach; endif; else: echo "" ;endif; ?>
    </dl>
</div>

<!--                    <#volist name="RuleList" id="Rule"#>
                        <dt><label><input type="checkbox"> <#{$Rule.title}></label></dt>
                        <dd><label><input type="checkbox"> <#{$Rule.title}></label></dd>
                        <ul>
                            <li><label><input type="checkbox"> <#{$Rule.title}></label></li>
                            <li><label><input type="checkbox"> <#{$Rule.title}></label></li>
                        </ul>
                    <#/volist#>-->

                </td>
            </tr>

            <tr>
                <td width="90" align="right">角色状态</td>
                <td>
                    <label><input type="radio" name="status" value="1" checked> 启用</label>
                    <label><input type="radio" name="status" value="0"> 禁用</label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <label><input type="checkbox" id="RuleAllBox" onclick="CheckObject.RuleAllBoxFun(this);">
                    全选/反选</label>
                    <input class="btn" type="submit" value="提交" />
                </td>
            </tr>
        </table>
    </form>
</div>
</div>
<div class="clear"></div>
<div id="dcFooter">
    <div id="footer">
        <div class="line"></div>
        <ul>
            版权所有 © 2013-2015 漳州豆壳网络科技有限公司，并保留所有权利。
        </ul>
    </div>
</div><!-- dcFooter 结束 -->
<div class="clear"></div> </div>
</body>
</html>