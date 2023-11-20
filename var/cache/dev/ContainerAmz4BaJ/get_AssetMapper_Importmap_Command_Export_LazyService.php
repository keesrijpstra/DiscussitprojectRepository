<?php

namespace ContainerAmz4BaJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_AssetMapper_Importmap_Command_Export_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.asset_mapper.importmap.command.export.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.asset_mapper.importmap.command.export.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('importmap:export', [], 'Exports the importmap JSON', false, #[\Closure(name: 'asset_mapper.importmap.command.export', class: 'Symfony\\Component\\AssetMapper\\Command\\ImportMapExportCommand')] fn (): \Symfony\Component\AssetMapper\Command\ImportMapExportCommand => ($container->privates['asset_mapper.importmap.command.export'] ?? $container->load('getAssetMapper_Importmap_Command_ExportService')));
    }
}
