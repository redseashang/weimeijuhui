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
    <div id="urHere">系统管理中心<b>></b><strong>角色列表</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3>
        <a href="<?php echo U('add');?>" class="actionBtn add">添加角色</a>
        角色列表
    </h3>
    <div class="filter">
        <form action="<?php echo U('index');?>" method="get">
            <!--<select name="cat_id">-->
                <!--<option value="0">未分类</option>-->
                <!--<option value="1"> 公司动态</option>-->
                <!--<option value="2"> 行业新闻</option>-->
            <!--</select>-->
            <input name="Key" type="text" class="inpMain" size="20" />
            <input class="btnGray" type="submit" value="筛选" />
        </form>
    </div>
    <div id="list">
        <form id="MyForm" method="post">
            <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                <tr>
                    <th width="22" align="center">
                        <input name='chkall' type='checkbox' onclick="CheckObject.AllBoxFun(this);">
                    </th>
                    <th align="center">ID</th>
                    <th align="center">排序</th>
                    <th align="left">栏目名称</th>
                    <th align="center">状态</th>
                    <th align="center">操作</th>
                </tr>

                <?php if(is_array($List)): $i = 0; $__LIST__ = $List;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
                    <td align="center">
                        <input type="checkbox" name="DelID[]" value="<?php echo ($val["id"]); ?>" />
                    </td>
                    <td align="center"><?php echo ($val["id"]); ?></td>
                    <td align="center"><input type="text" name="Sort[<?php echo ($val["id"]); ?>]" value="<?php echo ($val["sort"]); ?>" class="inpMain" size="3"></td>
                    <td align="left"><?php echo ($val["title"]); ?></td>
                    <td align="center">
                        <?php if($val['status'] == 1): ?>以启用
                        <?php else: ?>
                            未启用<?php endif; ?>
                    </td>
                    <td align="center">
                        <a href="<?php echo U('edit',array('id'=>$val['id']));?>">编辑</a> |
                        <a href="<?php echo U('del',array('id'=>$val['id']));?>">删除</a>
                    </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
            <div class="action">
                <select id="Action">
                    <option value="0">请选择...</option>
                    <option value="Del" url="<?php echo U('del');?>">删除</option>
                    <option value="Sort" url="<?php echo U('sort');?>">排序</option>
                </select>
                <input class="btn" type="button" value="执行" onclick="CheckObject.ExecuteFun();" />
            </div>
        </form>
    </div>
    <div class="clear"></div>
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