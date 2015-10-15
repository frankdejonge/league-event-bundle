<?php

namespace League\Event\EventBundle;

use League\Event\EventBundle\DependencyInjection\CompilerPass\RegisterEmittersPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class LeagueEventBundle extends Bundle
{
    /**
     * @inheritdoc
     */
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new RegisterEmittersPass());
    }

}
