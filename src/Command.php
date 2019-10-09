<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/10/9
 * Time: 16:46
 */

namespace Reflection\Api\Doc;

use think\console\Input;
use think\console\input\Argument;
use think\console\input\Option;
use think\console\Output;
use think\Container;

class Command extends \think\console\Command
{
    protected function configure()
    {
        $this->setName('reflecion:config');
    }

    protected function execute(Input $input, Output $output)
    {
        $config_content = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'config.php');
        $config_file = app()->getConfigPath() . 'documents.php';
        if (!file_exists($config_file)) {
            file_put_contents($config_file, $config_content);
        }
        $output->writeln('done!');
    }
}