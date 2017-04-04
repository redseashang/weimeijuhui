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
        栏目管理
        <b>></b>
        <strong>修改栏目</strong>
    </div>
    <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="<?php echo U('index');?>" class="actionBtn">栏目列表</a>修改栏目</h3>
    <form action="<?php echo U('editsave');?>" method="post" enctype="multipart/form-data">
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
            <tr>
                <td width="90" align="right">所属分类</td>
                <td>
                    <select name="parentid">
                        <option value="0">一级分类</option>
                        <?php echo ($TypeList); ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td width="90" align="right">栏目名称</td>
                <td>
                    <input type="text" name="title" value="<?php echo ($Info["title"]); ?>" size="80" class="inpMain" />
                </td>
            </tr>
            <tr>
                <td width="90" align="right">约束规则</td>
                <td>
                    <input type="text" name="name" value="<?php echo ($Info["name"]); ?>" size="80" class="inpMain" />
                    注：所请求的URL连接 如：Admin/Log/index(项目组/控制器/方法)
                </td>
            </tr>
            <tr>
                <td width="90" align="right">所属项目组</td>
                <td>
                    <input type="text" name="type"  value="<?php echo ($Info["type"]); ?>" size="80" class="inpMain" />
                </td>
            </tr>
            <tr>
                <td width="90" align="right">约束条件</td>
                <td>
                    <input type="text" name="condition" value="<?php echo ($Info["condition"]); ?>" size="80" class="inpMain" />
                    注：无特殊需求请不要对其设置
                </td>
            </tr>
            <tr>
                <td width="90" align="right">栏目状态</td>
                <td>
                    <label><input type="radio" name="status" value="1" <?php if($Info['status'] == 1): ?>checked<?php endif; ?>> 启用</label>
                    <label><input type="radio" name="status" value="0" <?php if($Info['status'] == 0): ?>checked<?php endif; ?>> 禁用</label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="hidden" name="id" value="<?php echo ($Info["id"]); ?>">
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