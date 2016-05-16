/*
* By YangQiwang on 2016/5/16
* */
(function () {
    //获取可见区域高度宽度
    var bodyWidth = document.documentElement.clientWidth;
    var bodyHeight = document.documentElement.clientHeight;
    var menuEl = document.getElementById('contextMenu');
    var menuWidth = menuEl.offsetWidth;
    var menuHeight = menuEl.offsetHeight;
    //监听右键，屏蔽原右键菜单
    document.oncontextmenu = function (ev) {
        var oEvent = ev || event;
        if (oEvent.clientX < bodyWidth - menuWidth) {
            menuEl.style.left = oEvent.clientX + 'px';
        }
        else {
            menuEl.style.left = oEvent.clientX - menuWidth + 'px';
        }
        if (oEvent.clientY < bodyHeight - menuHeight) {
            menuEl.style.top = oEvent.clientY + 'px';
        }
        else {
            menuEl.style.top = oEvent.clientY - menuHeight + 'px';
        }
        // console.log(oEvent.clientY < bodyHeight - menuHeight);
        //显示contextMenu
        menuEl.style.display = 'block';
        return false;
    };
    //点击文档隐藏
    document.onclick = function () {
        menuEl.style.display = 'none';
    };
})();
function menuRefresh() {
    location.replace(location.href);
}
function menuForward() {
    history.go(1);
}
function menuAbout() {
    location.href = 'http://yangqiwang.cn';
}
function menuBack() {
    history.go(-1);
}
