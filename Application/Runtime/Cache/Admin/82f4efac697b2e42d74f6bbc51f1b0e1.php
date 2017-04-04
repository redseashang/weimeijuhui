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
                <li><a href="#">会员管理</a></li>
                <li><a href="#">商品管理</a></li>
                <li><a href="#">订单管理</a></li>
                <li><a href="＃">全局管理</a></li>
                <li><a href="＃">分类管理</a></li>
                <li><a href="＃">系统管理</a></li>

                <li class="noRight"><a href="#">系统首页</a></li>
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
        <ul class="top">
            <li><a href="index.html"><i class="home"></i><em>管理首页</em></a></li>
        </ul>

        <ul>
            <li onclick="LeftShowHide(0);"><a><i class="system"></i><em>站点配置</em></a></li>
            <dl id="LeftColumn0">
                <dd><a href="#">初始参数配置</a></dd>
            </dl>
        </ul>
        <ul>
            <li onclick="LeftShowHide(1);"><a><i class="system"></i><em>管理员管理</em></a></li>
            <dl id="LeftColumn1">
                <dd><a href="<?php echo U('Admin/index');?>">管理员列表</a></dd>
                <dd><a href="<?php echo U('Admin/add');?>">添加管理员</a></dd>
            </dl>
        </ul>
        <ul>
            <li onclick="LeftShowHide(2);"><a><i class="system"></i><em>角色管理</em></a></li>
            <dl id="LeftColumn2">
                <dd><a href="<?php echo U('Role/index');?>">角色列表</a></dd>
                <dd><a href="#">添加角色</a></dd>
            </dl>
        </ul>
        <ul>
            <li onclick="LeftShowHide(3);"><a><i class="system"></i><em>栏目管理</em></a></li>
            <dl id="LeftColumn3">
                <dd><a href="<?php echo U('rule/index');?>">栏目管理</a></dd>
                <dd><a href="#">添加栏目</a></dd>
            </dl>
        </ul>
        <ul>
            <li onclick="LeftShowHide(4);"><a><i class="system"></i><em>日志管理</em></a></li>
            <dl id="LeftColumn4">
                <dd><a href="#">日志记录查看</a></dd>
            </dl>
        </ul>
    </div>

</div>

<div id="dcMain">
    <!-- 当前位置 -->
    <div id="urHere">
        系统管理中心
        <b>></b>
        <?php echo ($Menu); ?>管理
        <b>></b>
        <strong>添加<?php echo ($Menu); ?></strong>
    </div>
    <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="<?php echo U('index');?>" class="actionBtn"><?php echo ($Menu); ?>列表</a>添加<?php echo ($Menu); ?></h3>
    <form action="<?php echo U('addsave');?>" method="post" enctype="multipart/form-data">
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
            <tr>
                <td width="90" align="right"><?php echo ($Menu); ?>名称</td>
                <td>
                    <input type="text" name="AdminName" size="80" class="inpMain" />
                </td>
            </tr>
            <tr>
                <td width="90" align="right"><?php echo ($Menu); ?>密码</td>
                <td>
                    <input type="text" name="AdminPwd" size="80" class="inpMain" />
                </td>
            </tr>
            <tr>
                <td width="90" align="right">确认密码</td>
                <td>
                    <input type="text" name="AdminAffirmPwd" size="80" class="inpMain" />
                </td>
            </tr>
            <tr>
                <td width="90" align="right">所属角色</td>
                <td>
                    <label><input type="checkbox" name="AdminAllRole" value="All"> 超级管理员</label>
                    <?php if(is_array($RoleList)): $i = 0; $__LIST__ = $RoleList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>&nbsp;&nbsp;
                        <label><input type="checkbox" name="RoleID[]" value="<?php echo ($vo["id"]); ?>"> <?php echo ($vo["title"]); ?></label><?php endforeach; endif; else: echo "" ;endif; ?>
                </td>
            </tr>


            <tr>
                <td width="90" align="right"><?php echo ($Menu); ?>状态</td>
                <td>
                    <label><input type="radio" name="AdminState" value="1" checked> 启用</label>
                    <label><input type="radio" name="AdminState" value="0"> 禁用</label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <label>
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