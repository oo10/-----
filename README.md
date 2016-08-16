<!--
author: yangqiwang simple11@vip.qq.com
head:
date: 2016-08-16
title: SmartAdmin简单概述
tags: SmartAdmin
images:
category: 周会分享
status: publish
summary: Bootstrap3后台管理系统模板
-->

# SmartAdmin

---

## 一、简介
SmartAdmin 是基于[ Bootstrap ](http://getbootstrap.com/)技术和各种 JS 插件（40多种）所创建的 UI
    组件库，具有独特的平面设计和响应式布局，布局的页面不仅适用于桌面设备，而且也能很好的自适应手机和平板设备。SmartAdmin 有 HTML 、 AJAX 、 PHP 和 AngularJS 四种版本。

![](http://obzg8bbu1.bkt.clouddn.com/%E5%9B%BE%E7%89%871.png)

---

## 二、特点
*   兼容最新的 Chrome 、Firefox 、Opera 、Safari 和 IE9（包括 IE9 ）以上版本浏览器。
*   大量使用了能兼容各浏览器的 HTML5 标签。
*   兼容各种分辨率的移动、平板和桌面设备。
*   有四种技术版本，分别是 HTML 、 AJAX 、 PHP 和 AngularJS 版本。1.5版本增加了 .NET MVC 版本。
*   轻量级页面（可以通过 ajax 技术加载页面）。
*   1.5 版本默认有6种主题皮肤。
*   导航菜单有两种展现方式：1.4.2 版本具有顶部菜单和左侧菜单两种菜单样式，1.5版本增加了右侧菜单样式。
*   左侧导航菜单最高可制作6级菜单。
*   可以创建面包屑导航。
*   可以折叠、最小化导航菜单（ hover 时出现），对于屏幕尺寸较小的移动设备，导航菜单可以灵活调整。
*   组件强大到让你无法相信。
*   自定义树视图。
 
---

## 三、结构

### (一)文件目录结构

```
以AJAX版本为例

<AJAX_version>

├login.html
├index.html
├forgotpassword.html
├lock.html
├register.html
├<ajax>
│  ├blank_.html
│  ├bootstrap-forms.html
│  ├buttons.html
│  ├calendar.html
│  ├ckeditor.html
│  ├dashboard.html
│  ├datatables.html
│  ├demowidget.php
│  ├dropzone.html
│  ├email-compose.html
│  ├email-opened.html
│  ├email-reply.html
│  ├email-template.html
│  ├error404.html
│  ├error500.html
│  ├fa.html
│  ├flot.html
│  ├form-elements.html
│  ├form-templates.html
│  ├forum.html
│  ├forum-post.html
│  ├forum-topic.html
│  ├gallery.html
│  ├general-elements.html
│  ├glyph.html
│  ├gmap-xml.html
│  ├grid.html
│  ├home.html
│  ├inbox.html
│  ├inline-charts.html
│  ├invoice.html
│  ├jqui.html
│  ├morris.html
│  ├nestable-list.html
│  ├other-editors.html
│  ├plugins.html
│  ├pricing-table.html
│  ├profile.html
│  ├search.html
│  ├table.html
│  ├timeline.html
│  ├treeview.html
│  ├typography.html
│  ├validation.html
│  ├website-template.html
│  ├widgets.html
│  ├wizard.html
│  ├<email>
│  │  └email-list.html
│  ├<notify>
│  │  ├mail.html
│  │  ├notifications.html
│  │  └tasks.html
├<css>
│  ├bootstrap.css
│  ├bootstrap.css.map
│  ├bootstrap.min.css
│  ├demo.css
│  ├font-awesome.min.css
│  ├invoice.css
│  ├lockscreen.css
│  ├smartadmin-production.css
│  ├smartadmin-production_unminified.css
│  ├smartadmin-rtl.css
│  ├smartadmin-skins.css
│  └your_style.css
├<fonts>
│  ├FontAwesome.otf
│  ├fontawesome-webfont.eot
│  ├fontawesome-webfont.svg
│  ├fontawesome-webfont.ttf
│  ├fontawesome-webfont.woff
│  ├glyphicons-halflings-regular.eot
│  ├glyphicons-halflings-regular.svg
│  ├glyphicons-halflings-regular.ttf
│  └glyphicons-halflings-regular.woff
├<img>
│  ├......
├<js>
│  ├app.js
│  ├demo.js
│  ├<bootstrap>
│  │  ├bootstrap.js
│  │  └bootstrap.min.js
│  ├<libs>
│  │  ├jquery-2.0.2.min.js
│  │  └jquery-ui-1.10.3.min.js
│  ├<notification>
│  │  ├SmartNotification.js
│  │  └SmartNotification.min.js
│  ├<plugin>
│  │  ├<bootstrap-progressbar>
│  │  ├<bootstrap-slider>
│  │  ├<bootstrap-tags>
│  │  ├<bootstrap-timepicker>
│  │  ├<bootstraptree>
│  │  ├<bootstrap-wizard>
│  │  ├<ckeditor>
│  │  ├<colorpicker>
│  │  ├<datatables>
│  │  ├<delete-table-row>
│  │  ├<dropzone>
│  │  ├<easy-pie-chart>
│  │  ├<fastclick>
│  │  ├<flot>
│  │  ├<fuelux>
│  │  ├<fullcalendar>
│  │  ├<ie-placeholder>
│  │  ├<ion-slider>
│  │  ├<jquery-form>
│  │  ├<jquery-nestable>
│  │  ├<jquery-touch>
│  │  ├<jquery-validate>
│  │  ├<js-migrate>
│  │  ├<knob>
│  │  ├<markdown>
│  │  ├<masked-input>
│  │  ├<maxlength>
│  │  ├<morris>
│  │  ├<msie-fix>
│  │  ├<multiselect>
│  │  ├<noUiSlider>
│  │  ├<pace>
│  │  ├<select2>
│  │  ├<selectToUISlider>
│  │  ├<sparkline>
│  │  ├<summernote>
│  │  ├<superbox>
│  │  ├<throttle-denounce>
│  │  ├<typeahead>
│  │  ├<vectormap>
│  │  └<x-editable>
│  ├<smartwidgets>
│  │  ├jarvis.widget.js
│  │  └jarvis.widget.min.js
├<php>
│  ├demo-comment.php
│  ├demo-contacts.php
│  └demo-register.php
├<sound>
│  ├bigbox.mp3
│  ├bigbox.ogg
│  ├messagebox.mp3
│  ├messagebox.ogg
│  ├smallbox.mp3
│  └smallbox.ogg

```
### (二)页面结构
![](http://obzg8bbu1.bkt.clouddn.com/%E5%9B%BE%E7%89%873.png)
### (三)代码结构

```
<!DOCTYPE html>
<html lang="zh-CN">

<!--定义文档头部信息-->
<head>
    [文档头部信息，包括文档标题、引用脚本、样式等内容。]
</head>

<body class="">

<!--顶部页头信息-->
<header id="header">

    [LOGO]
    [AJAX下拉框]
    [工程信息下拉框]
    [语言选择、语音、搜索、退出、折叠菜单按钮]

</header>

<!--左侧导航菜单面板-->
<aside id="left-panel">

    [用户信息，包括图片、用户名等内容]

    <!--导航菜单-->
    <nav>
        <ul>
            <li class="">[导航链接]</li>
            <li class="">[导航链接]</li>
        </ul>
    </nav>

</aside>

<!--页面主要内容面板-->
<div id="main">

    <!-- 面包屑导航面板 -->
    <div id="ribbon">
        [面包屑导航内容]
    </div>

    <!--主要内容-->
    <div id="content">
        [主要内容]
    </div>

</div>

<!--点击用户名出现的快捷菜单链接-->
<div id="shortcut">
    [快捷菜单内容]
</div>

<!--页脚信息-->
<div class="page-footer">
    <div class="row">
        <div class="col-xs-12 col-sm-12 text-center">
            [页脚内容]
        </div>
    </div>
</div>

[页面默认加载的js脚本内容]

</body>
</html>
```
---
## 四、栅格布局
以下摘抄于参考网站：http://v3.bootcss.com/css/#grid
### (一)简介
栅格系统用于通过一系列的行（row）与列（column）的组合来创建页面布局，你的内容就可以放入这些创建好的布局中。下面就介绍一下 Bootstrap 栅格系统的工作原理：

*   “行（row）”必须包含在 `.container` （固定宽度）或 `.container-fluid` （100%宽度）中，以便为其赋予合适的排列（aligment）和内补（padding）。
*   通过“行（row）”在水平方向创建一组“列（column）”。
*   你的内容应当放置于“列（column）”内，并且，只有“列（column）”可以作为行（row）”的直接子元素。
*   类似 `.row` 和 `.col-xs-4` 这种预定义的类，可以用来快速创建栅格布局。[Bootstrap](http://getbootstrap.com/) 源码中定义的 mixin也可以用来创建语义化的布局。
*   通过为“列（column）”设置 `padding` 属性，从而创建列与列之间的间隔（gutter）。通过为 `.row` 元素设置负值 `margin`从而抵消掉为 `.container` 元素设置的 `padding`，也就间接为“行（row）”所包含的“列（column）”抵消掉了`padding`。
*   The negative margin is why the examples below are outdented. It's so that content within grid columns is linedup with non-grid content.
*   默认一行（row）会被分成 12 列（column），如果分成 3 个相等的列（column），需要用 `.col-xs-4`。
*   如果一“行（row）”中包含了的“列（column）”大于 12，多余的“列（column）”所在的元素将被作为一个整体另起一行排列。
*   删格类适用于大于或等于屏幕分界点的屏幕， `.col-md-`的元素不仅影响中等尺寸的屏幕，也会影响大屏幕（如果该元素没有`.col-lg-`类。 ）

### (二)栅格参数
![](http://obzg8bbu1.bkt.clouddn.com/%E5%9B%BE%E7%89%874.png)

### (三)布局容器
Bootstrap 需要为页面内容和栅格系统包裹一个 .container 容器。我们提供了两个作此用处的类。注意，由于 padding 等属性的原因，这两种容器类不能互相嵌套。

.container 类用于固定宽度并支持响应式布局的容器。
```
<div class="container">
    ...
</div>  
```
.container-fluid 类用于 100% 宽度，占据全部视口（viewport）的容器。
```
<div class="container-fluid">
    ...
</div>
```

### (四)例子
使用单一的一组 `.col-md-*` 栅格类，就可以创建一个基本的栅格系统，在手机和平板设备上一开始是堆叠在一起的（超小屏幕到小屏幕这一范围），在桌面（中等）屏幕设备上变为水平排列。所有“列（column）必须放在 ” `.row` 内。

![](http://obzg8bbu1.bkt.clouddn.com/%E5%9B%BE%E7%89%875.png)

使用 `.col-md-offset-*` 类可以将列向右侧偏移。这些类实际是通过使用 * 选择器为当前元素增加了左侧的边距（margin）。例如，`.col-md-offset-4` 类将 `.col-md-4` 元素向右侧偏移了4个列（column）的宽度。

![](http://obzg8bbu1.bkt.clouddn.com/QQ%E6%88%AA%E5%9B%BE20160816125337.png)

为了使用内置的栅格系统将内容再次嵌套，可以通过添加一个新的 .row 元素和一系列 `.col-sm-*` 元素到已经存在的 `.col-sm-*` 元素内。被嵌套的行（row）所包含的列（column）的个数不能超过12（其实，没有要求必须占满12列）。

---

## 五、常用
### (一)data-* 属性
* 用于存储页面或应用程序的私有自定义数据。
* 赋予我们在所有 HTML 元素上嵌入自定义 data 属性的能力。
* 存储的（自定义）数据能够被页面的 JavaScript 中利用，以创建更好的用户体验（不进行 Ajax 调用或服务器端数据库查询）。

dataset属性存取data-\*自定义属性的值
```
<div id=“user” data-id=“1234” data-name=“小白吗” data-date-of-birth>小白</div>
```
```
    var el = document.querySelector(‘#user’);
        console.log(el.id); // ‘user’
        console.log(el.dataset);// 一个DOMStringMap
        console.log(el.dataset.id); // ‘1234’
        console.log(el.dataset.name); // ‘小白吗
        console.log(el.dataset.dateOfBirth); // ''
        el.dataset.dateOfBirth = '1985-01-05'; // 设置data-date-of-birth的值
        console.log('someDataAttr' in el.dataset);// false
        el.dataset.someDataAttr = 'mydata';
        console.log('someDataAttr' in el.dataset);// true
```
JQ data()方法
```
var myid= jQuery(“#user”).data(‘id’);
console.log(myid); // ‘1234’
```
data-属性选择器
```
<script>
    // 使用 querySelectorAll 选择元素
    // 选择所有包含 'data-flowering' 属性的元素
    document . querySelectorAll ( '[data-flowering]' ) ;
    // 选择所有包含 'data-text-colour' 属性值为red的元素
    document . querySelectorAll ( '[data-text-colour="red"]' ) ;
</script>
```
```
<style type =“text/css”>
    .user { width : 256px ; height : 200px }
    .user[data-name=‘小白吗’] { color : brown }
    .user[data-name=‘小黑吗'] { color : black }
</style>
```
### (二)字体图标
#### 优点
* 字体是矢量图，这意味着在高分辨率下也会完美显示。
* 图标字体可以用过font-size属性设置其任何大小，还可以加各种文字效果，包括颜色、Hover状态、透明度、阴影和翻转等效果。可以在任何背景下显示
* 可以轻松的用css来控制字体的颜色，大小，阴影
* 网页字体支持所有现代浏览器，包括IE低版本。

#### 缺点
* 制作成本较高
* 只能设定为单一的颜色

#### Font Awesome
需要引入`font-awesome.min.css`文件 。
所有的图标都需要两个class类：基础类fa和代表图标专门的类。例如： fa fa-adjust 。
进一步了解可以访问该网址 http://fortawesome.github.io/Font-Awesome/icons/ 。

#### Iconfont.cn
进一步了解可以访问该网址 http://iconfont.cn/ 。

### (三)widget 窗口部件
原始包中的widgets.html文件，功能有：色块选择、折叠、全屏、删除和切换tab标签。
需引用 jarvis.widget.min.js  +  调用pageSetUp ();

![](http://obzg8bbu1.bkt.clouddn.com/widget.png)
```
<section id="widget-grid" class="">
    <!-- row -->
    <div class="row">
        <div id="wid-id-0" class="jarviswidget jarviswidget-color-darken" data-widget-editbutton="false" data-widget-deletebutton="false">
            <header>
                <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                <h2>投资者列表</h2>
            </header>
            <!-- widget div-->
            <div>
            <!-- widget content -->
                <div class="widget-body no-padding"...>
            <!-- end widget content -->
            </div>
            <!-- end widget div -->
        </div>
        <div id="wid-id-1" class="jarviswidget"> ... </div>
    </div>
</section>
```
<table >
    <thead>
    <tr>
        <th style="width:25%">属性定义</th>
        <th style="width:45%">描述</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>data-widget-deletebutton = "false"</td>
        <td>删除按钮，默认为True，False为隐藏。</td>
    </tr>
    <tr>
        <td>data-widget-editbutton = "false"</td>
        <td>设置标题按钮，默认为True，False为隐藏。</td>
    </tr>
    <tr>
        <td>data-widget-fullscreenbutton = "false"</td>
        <td>全屏按钮，默认为True，False为隐藏。</td>
    </tr>
    <tr><td> data-widget-colorbutton = "false"</td>
    <td>色块选择按钮，默认为True，False为隐藏。</td>
    </tr>
    <tr>
        <td>data-widget-collapsed = "false"</td>
        <td>折叠按钮，默认为True，False为隐藏。</td>
    </tr>
    </tbody>
</table>

### (四)数据表格
原始包中的datatables.html文件，功能有：快速查找、按栏目筛选、显示／隐藏栏目、导出、分页和设置每页显示行数。
```
<!—  dataTables需引入的JS文件  ->
<script src="js/plugin/datatables/jquery.dataTables.min.js"></script>
<script src="js/plugin/datatables/dataTables.colVis.min.js"></script>
<script src="js/plugin/datatables/dataTables.tableTools.min.js"></script>
<script src="js/plugin/datatables/dataTables.bootstrap.min.js"></script>
<script src="js/plugin/datatable-responsive/datatables.responsive.min.js"></script>
```
![](http://obzg8bbu1.bkt.clouddn.com/datatable.png)

1. HTML document (DOM)
2. Javascript (array / objects)
3. Ajax sourced data

```
var dataSet = [
    ['大白','134-2463-8341','21','长沙','20160811'],
    ...
];
$(document).ready(function() {
      $('#demo').html( '<table cellpadding="0" cellspacing="0" border="0" class="display" id="example"></table>' );
      $('#example').dataTable( {
            "data": dataSet,
            "columns": [
                   { "title": "姓名" },
                   { "title": "电话" },
                   { "title": "年龄" },
                    { "title": "城市", "class": "center" },
                    { "title": "日期", "class": "center" }
            ]
    } );
} );
```
### (五)验证表单
原始包form-templates.html文件。
```
<!-- 验证表单需引入的JS文件 -->
<script src="js/plugin/jquery-validate/jquery.validate.min.js"></script>
```
```
        $(document).ready(function () {

            // 该函数用来让widget实现移动、折叠、全屏等操作
            pageSetUp();
            var $registerForm = $("#smart-form-register").validate({

                // 鼠标焦点离开必填项输入框时出现的提示信息
                onfocusout: function (element) {
                    this.element(element);
                },

                // 必填项验证条件
                rules: {
                    username: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 6
                    },
                    passwordConfirm: {
                        required: true,
                        minlength: 3,
                        equalTo: '#password'
                    },
                    phone: {
                        required: true,
                        rangelength: [11, 11]
                    },
                    gender: {
                        required: true
                    },
                    terms: {
                        required: true
                    }
                },

                // 验证提示信息
                messages: {
                    username: {
                        required: '请输入您的用户名'
                    },

                    email: {
                        required: '请输入您的邮箱',
                        email: '请输入有效的邮箱地址'
                    },
                    password: {
                        required: '请输入密码'
                    },
                    passwordConfirm: {
                        required: '请再次输入您的密码',
                        equalTo: '密码不一致，请重新输入'
                    },
                    phone: {
                        required: '请输入您的手机号码',
                        rangelength: '手机号应为11位'
                    },
                    gender: {
                        required: '请选择您的性别'
                    },
                    terms: {
                        required: '请同意此条款'
                    }
                },

                errorPlacement: function (error, element) {
                    error.insertAfter(element.parent());
                }
            });
        })
```

### (六)消息
原始包general-elements.html文件。只要将class类alert-warning、fa-warning更换就可以实现成功（alert-success fa-check）、告知说明（alert-info fa-info）、错误（alert-danger fa-times）三种消息。
```
<div class="alert alert-warning fade in">
    <button class="close" data-dismiss="alert">
        ×
    </button>
    <i class="fa-fw fa fa-warning"></i>
    <strong>警告！</strong> 黄色，颜色值#efe1b3。
</div>
```

---

### 参考网址
1. https://wrapbootstrap.com/theme/smartadmin-responsive-webapp-WB0573SK0
2. http://v3.bootcss.com/
3. http://www.runoob.com/jqueryui/jqueryui-tutorial.html
