<?php
// +----------------------------------------------------------------------
// | flame module kernel 设置
// +----------------------------------------------------------------------

return [
    // 模块路径，默认为 FlameModule
    'module_path' => root_path('FlameModule'),
    // 模块命名空间，默认 FlameModule，遵循 psr4 规范
    'namespace' => 'FlameModule\\',
    // 开启热更新，开发模式下开启，每次修改自动更新，生产环境关闭
    'hot_update' => true,
    // 是否开启日志
    'log_on' => false,
    // 禁用的模块，#[Module] 声明的模块名称，非composer安装包名称
    'disabled_modules' => [],
];