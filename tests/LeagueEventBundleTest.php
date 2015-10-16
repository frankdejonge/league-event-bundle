<?php

namespace FrankDeJonge\LeagueEventBundle\Tests;

use FrankDeJonge\LeagueEventBundle\DependencyInjection\CompilerPass\RegisterEmittersPass;
use FrankDeJonge\LeagueEventBundle\LeagueEventBundle;
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