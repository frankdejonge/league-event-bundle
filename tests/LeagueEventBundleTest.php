<?php

namespace League\Event\EventBundle\Tests;

use League\Event\EventBundle\DependencyInjection\CompilerPass\RegisterEmittersPass;
use League\Event\EventBundle\LeagueEventBundle;
use Prophecy\Argument;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class LeagueEventBundleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_should_register_the_emitter_pass()
    {
        $containerBuilder = $this->prophesize(ContainerBuilder::class);
        $compilerPassArgument = Argument::type(RegisterEmittersPass::class);
        $containerBuilder->addCompilerPass($compilerPassArgument)->shouldBeCalled();

        $bundle = new LeagueEventBundle();
        $bundle->build($containerBuilder->reveal());
    }
}