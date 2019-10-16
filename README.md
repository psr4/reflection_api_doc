# reflection_api_doc

将会是一个基于 thinkphp5.1 的PHP自动生成api文档的库

1. 安装：

>composer require "psr4/reflection-api-doc"

2. 使用方法

>php think reflection:config

会在 application/config 目录下创建文件名为 documents.php 的配置文件。

**重点:** class 为将要生成文档的类(带命名空间)

2. 示例：

| 注释参数 | 含义 | 说明 |
| - | - | - |
| @title | 标题 | 文档生成的类方法标题 |
| @desc | 描述 | 格式如下，地址、请求方式、备注等 |
| @param | 接收参数 | 格式如下，type *?-*?name default desc |
| @return | 返回参数 | 格式如下，type *?-*?name desc |
| @route | 注解路由 | tp5.1的注解路由 |
类的具体实现方法：

```
/**
 * @title 文章接口管理
 */
class Article extends Controller
{
    /**
     * @title 获取文章列表
     
     * @desc  1.接口地址：http://open.opqnext.com/index.php?c=article&a=index
     * @desc  2.请求方式：GET
     * @desc  3.接口备注：必须传入keys值用于通过加密验证
     
     * 传参格式   1.类型(int,string....)   2.名称(例子:page)第一个为*则必填  3.默认值(任意字符串不带空格)  4.描述(任意字符串)
     * @param int *page 1 页数 
     * @param string *keys xxx 加密字符串,substr(md5(\"约定秘钥\".$page),8,16)
     * @param string word  null 搜索关键字
     * @param int cate  0 分类ID,不传表示所有分类
     * @param int size  5 每页显示条数，默认为5
     
     * 返回值格式   1.类型(int,string....)   2.名称(例子:page)第一个为*则必填  开头-号的数量代表层级  3.描述(任意字符串
     * @return int *-status 返回码：1成功,0失败
     * @return string *-message 返回信息
     * @return array *-data 返回数据
     * @return string *--id 文章ID(22位字符串)
     * @return string *--title 文章标题
     * @return string *--thumb 文章列表图
     * @return text *--content 文章内容
     * @return int *--cate 文章分类
     * @return array *--tags 文章标签
     * @return string *---id 标签ID
     * @return string *---tag 标签名称
     * @return int *---count 标签使用数
     * @return array *--img 文章组图
	 * @route('index', 'get')
     */
    public function index(){
        //... 具体实现方法
    }
```

编辑好配置文件之后 直接打开浏览器访问 http://localhost/api/documents 即可看到文档页。

3. 预览

长相一般的苹果绿：

![](https://image.opqnext.com/apple.jpg)

长相也一般的葡萄紫：

![](https://image.opqnext.com/grape.jpg)

![](https://image.opqnext.com/grape_2.png)

4. 支持

如果有使用自动生成文档的需求或者之类的，欢迎加入 QQ群:452209691 共同探讨。



