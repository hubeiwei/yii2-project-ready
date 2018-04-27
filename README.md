<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Advanced Project Template</h1>
    <br>
</p>

这是我拿来开新项目用的。

虽然官方提供了 Basic 和 Advanced 两个模板，但有些东西我用不上，所以自己参考 Advanced 模板来布置。

## 和 Advanced 模板的区别：

删掉了单元测试，删掉了示例代码，只保留了默认路由的控制器。

`main.php` 里的 components 和 modules 还有 components.urlManager.rules，我拆开到单独的文件去了，对应的是 `components.php`、`modules.php`、`route.php`。

composer 依赖了 yiisoft/yii2-redis，发邮件的 yiisoft/yii2-swiftmailer 删掉了，如果不用 redis 就删掉，redis 相关配置在 `environments/dev/common/config` 下的 `components.php` 和 `db.php` 可以找到。

site.css 文件只保留了 `GridView` 和 `ActiveForm` 相关的，`AppAsset` 里面依赖的 `yii\web\YiiAsset` 和 `yii\bootstrap\BootstrapAsset` 没删。

git 忽略文件比 svn 方便得多，但为了支持 svn 我会把 `@runtime` 和 `@webroot/assets` 等目录或文件都放到 environments 里生成。

## 给新人的提示：

你需要安装 composer 依赖，不一定会因为 composer 里的某个库更新了我就来更新一下，`composer install` 和 `composer update` 该用哪个自己选择。

你需要生成配置文件和入口文件，`environments` 目录下预留了一个 `dev` 目录作为模板，代表开发环境，你需要根据自己的配置修改。添加新环境需要在同目录下的 `index.php` 里配置好。修改完毕之后用 `php init` 命令把这些文件生成到项目里去，更快捷的命令是 `php init --env=Development --overwrite=all`，适合写在发布脚本里，这里的“Development”根据自己环境名来决定。如果用的是 svn，需要把这些文件忽略提交，git 的忽略我已经配置好了。
