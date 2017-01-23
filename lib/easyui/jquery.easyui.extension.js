/**
 * Created by Administrator on 2016/10/17.
 */
var extension={}

extension.currentLoadding=null;
extension.showLoadding=function(txt){
    extension.currentLoadding=$('<div style="padding:5px 10px;"></div>');
    extension.currentLoadding.html(txt);
    $('body').append(extension.currentLoadding);
    extension.currentLoadding.window({
        zIndex:10000,
        modal:true,
        noheader:true,
        draggable:false,
        resizable:false
    });
};

extension.hideLoadding=function(){
    extension.currentLoadding.window('destroy');
};