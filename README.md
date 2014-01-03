这是一款typecho主题 -- bootmantic
===

名称来历
---

我向来对取名字头疼, 包括各种帐号的用户名, 变量名.

bootmantic = bootstrap + semantic

这两个css框架相信很多人都知道.

那么为什么要取这个名字呢. 因为这个主题一开始用的是semantic框架. 而导航栏是模仿bootstrap的.

现在已经部分脱离了semantic框架, 用了它的label和form模块, 下一步打算完全脱离semantic框架.

演示地址
---

[http://blog.sloger.info][1]

效果图
---

首页:

![theme_index][2]

正文:

![theme_content][3]

友情链接:

![theme_friend][4]


使用
---

打包下载并解压, 或者直接git clone到网站根目录下的usr/themes/目录下, 然后进入后台选择并设置主题.


设置
---

各个设置项的作用和默认效果都写的很清楚了. 自己读吧.

![theme_setting][5]


注意
---

本主题中使用的Links友情链接插件是我自己修改后的, 因为默认的输出方式并不适合我.

修改方式如下.

找到Links插件下的Plugin.php, 找到264行, 添加一种输出方式.

```php
else if ($pattern == "SHOW_SLOGER") {
    $pattern = "<a class=\"item\" href=\"{url}\" title=\"{title}\" target=\"_blank\"><img class=\"avatar image\" src=\"{image}\" alt=\"{name}\" /><div class=\"content\"><p class=\"header\">{name}</p><p>{description}</p></div></a>\n"
}
```

![links_plugins][6]


`$pattern` 的名称无所谓, 但是要是跟我这里不一样的话, 需要修改sidebar.php修改相应的输出方式.

如果觉得这里的pattern太乱, 可以去我的 [博客首页][1] 右键选择审查元素, 找到 友情链接 部分, 照着葫芦画瓢吧.

为什么需要自定义插件, 而不是把css写成适应插件?

因为我在写这个theme时还没有用links插件. 之后才用的links插件.


我已经向links插件作者 寒泥 提出了建议, 建议在Links_output()时添加自定义输出方式的的功能, 暂未得到答复.

说明
---

页脚的说明请不要删除, 这是对主题作者的尊重.

如果实在不对我尊重也可以把倒数第二行删掉, 但是最后一行请一定不要删掉.

主题里的回到顶部小火箭用的就是他的, 他授权我使用但是必须添加说明.

如果你打算不使用小火箭, 并删掉了小火箭, 那最后一行你就删掉吧.

TODO
---

- 搜索框还不是很满意

- 响应式布局不满意, 目前导航栏采取的是直接隐藏的偷懒做法

- 评论框有很大问题, 正在慢慢改善.

- 增加选择主题颜色风格的选项

再说明
---

有什么问题或建议, 可以去我的博客留言, 或者在github上添加issue.


[1]: http://blog.sloger.info
[2]: images/theme_index.png
[3]: images/theme_content.png
[4]: images/theme_friend.png
[5]: images/theme_setting.png
[6]: images/links_plugins.png
