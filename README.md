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
              tag_name: my_emitter.listener
    my_listener:
        class: My\Awesome\Listener
        tags:
            - name: my_emitter.listener
              event: My\Awesome\DomainEvent
```