<?php
declare(strict_types=1);

namespace app\controller;

class Index
{
    public function index()
    {
        $phpVersion = PHP_VERSION;

        $tpVersion = class_exists(\think\App::class)
            ? \think\App::VERSION
            : '未检测到';

        $kernelVersion = '未安装';
        if (class_exists(\Composer\InstalledVersions::class)
            && \Composer\InstalledVersions::isInstalled('hnraytek/flame-module-kernel')) {
            $kernelVersion = ltrim(\Composer\InstalledVersions::getPrettyVersion('hnraytek/flame-module-kernel'), 'v');
        }
        $content = file_get_contents(app()->getRootPath() . 'public/index.html');
        return str_replace(
            ['{{PHP_VERSION}}', '{{TP_VERSION}}', '{{KERNEL_VERSION}}'],
            [$phpVersion, $tpVersion, $kernelVersion],
            $content
        );
    }
}