# League Event Bundle for Symfony2

## Usage

Register custom emitters with custom listener bindings:

```yml
---
services:
    my_emitter:
        class: League\Event\Emitter
        tags:
            - name: league_event.emitter
              listener_tag: my_emitter.listener
    my_listener:
        class: My\Awesome\Listener
        tags:
            - name: my_emitter.listener
              event: My\Awesome\DomainEvent
```

Out of the box a `league_event.emitter` service is registered which you can bind to using
the `league_event.listener` tag.

Setting priorities is also possible:

```yml
---
services:
    my_listener:
        class: My\Awesome\Listener
        tags:
            - name: league_event.listener
              event: My\Awesome\DomainEvent
              priority: 9001
```