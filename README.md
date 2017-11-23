# SimpleMvc -- php框架
    手写的一个简单PHP框架
## MVC
    MVC模式（Model-View-Controller）是软件工程中的一种软件架构模式
    MVC把软件系统分为三个基本部分：模型（Model）、视图（View）和控制器（Controller）。
    MVC的目的是实现一种动态的程序设计，便于后续对程序的修改和扩展简化，增加程序的复用性,使程序结构更加直观。
    MVC各部分的功能：
    1.模型Model – 管理大部分的业务逻辑和所有的数据库逻辑。模型提供了连接和操作数据库的抽象层。
    2.控制器Controller - 负责响应用户请求、准备数据，以及决定如何展示数据。
    3.视图View – 负责渲染数据，通过HTML方式呈现给用户。
####MVC流程：
    1.Controller  截获用户发出的请求;
    2.Controller  调用 Model 完成状态的读写操作； 
    3.Controller  把数据传递给 View；
    4.View        渲染数据并呈献给用户。
## 代码规范
###### 预先设定代码命名规范:
######1.模块名(Models)需用大驼峰命名法,如:ItemModel
## 环境准备
    推荐使用集成环境 laragon 或 wamp
## 项目结构
    SimpleMvc 项目文件夹
    |
    |-- app 应用文件夹
    |    |-- Controllers 控制器文件夹
    | 
    |-- Helper 公共函数文件夹
    |
    |-- Models 模型文件夹
    |
    |-- Views 视图文件夹
    |
    |-- bootstrap 核心文件夹
    |    |-- app.php 框架核心文件
    |  
    |-- config 配置文件夹
    |   |-- config.php 框架通用配置文件
    |   
    |-- public 公共资源文件夹
    |
    |-- storage 暂存文件夹(编译文件,缓存文件,日志文件)
    |
    |-- vendor 第三方包文件夹
    |    |-- smarty smarty模板文件夹
    | 
    |-- index.php 入口文件
    |
    |-- README.md 说明文件
