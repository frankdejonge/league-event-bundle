<?php

namespace League\Event\EventBundle\Tests;

use League\Event\Emitter;
use League\Event\EventBundle\DependencyInjection\LeagueEventExtension;
use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractExtensionTestCase;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;

class LeagueEventExtensionTest extends AbstractExtensionTestCase
{

    /**
     * Return an array of container extensions you need to be registered for each test (usually just the container
     * extension you are testing.
     *
     * @return ExtensionInterface[]
     */
    protected function getContainerExtensions()
    {
        return [new LeagueEventExtension()];
    }

    /**
     * @test
     */
    public function it_should_register_the_default_emitter()
    {
        $this->load();

        $this->assertContainerBuilderHasService('league_event.emitter', Emitter::class);
        $this->assertContainerBuilderHasServiceDefinitionWithTag(
            'league_event.emitter',
            'league_event.emitter',
            ['tag_name' => 'league_event.listener']
        );
    }
}