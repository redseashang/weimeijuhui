/**
 * Created by Administrator on 2017/3/27.
 */
//角色权限验证
$(function(){

})
function LoginFormCheck()
{
    var AdminName=$('#AdminName').val();
    var AdminPwd=$('#AdmiPwd').val();
    var AdminCode=$('#AdminCode').val();
    if(AdminName=="")
    {
        alert("用户名不能为空");
        return false;
    }
    if(AdminPwd=="")
    {
        alert("您的登录密码不能为空");
        return false;
    }
    if(AdminCode=="")
    {
        alert("您的验证码不能为空");
        return false;
    }
}
//后台全选反选
function CheckObject()
{
    this.AllBoxFun=function(Obj)
    {
        if(Obj.checked)
        {
            $('input[name="DelID[]"]').prop('checked',true);
        }else{
            $('input[name="DelID[]"]').prop('checked',false);
        }
    }
    this.ExecuteFun=function()
    {
        var Action=$('#Action').val();
        if(Action==0)
        {
            alert("请选择您要执行的操作");
            return false;
        }
        var Url=$('#Action option:selected').attr('url');
        if(Action=='Del')
        {
            var BoxCount=$('input[name="DelID[]"]:checked').length;
            if(BoxCount<=0)
            {
                alert("请选择您要删除的记录。");
                return false;
            }
            if(confirm("您真的要删除此记录吗？"))
            {

                this.SubmitArrifm(Url);
            }
        }
        if(Action=='Sort')
        {
            if(confirm("您确认要更新此序列吗？"))
            {
                this.SubmitArrifm(Url);
            }
        }
    }
    this.SubmitArrifm=function(Url)
    {
        $('#MyForm').attr('action',Url);
        $('#MyForm').submit();
    }

    this.SeatRuleBox=function(Seat)
    {
        $(Seat).click(function(){
            var State=$(this).find('input').is(':checked');
            if(State==true)
            {
                $(this).nextUntil(Seat).each(function(){
                    $(this).find('input').prop('checked',true);
                });
            }else{
                $(this).nextUntil(Seat).each(function(){
                    $(this).find('input').prop('checked',false);
                });
            }
        })
    }
    this.RuleAllBoxFun=function(Obj)
    {
        if(Obj.checked)
        {
            $('.RuleStyle input').prop('checked',true);
        }else{
            $('.RuleStyle input').prop('checked',false);
        }
    }
}
var CheckObject=new CheckObject();

