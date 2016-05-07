## Hooks

### Basic usage

To use a hook you need to call it on your template (View):

```html
{{ Html::Hook("name::of::the::hook") }}
```
You can also send a parameter to the hook:
```html
{{ Html::Hook("name::of::the::hook", "parameter") }}
```

Then you need to add a callback on hooks.php:

```PHP
$hook->on("name::of::the::hook", function($parameter=null){

	# Code [...]
	dump($parameter);

});
```

### Fetching views

```PHP
$hook->on("name::of::the::hook", function($parameter=null){

	# Code [...]
	echo view('pluginName::path.to.view');

});
```

### Using Hooks on controllers and service providers

Before you start, just remember to add this "use" statement bellow the namespace:

```PHP
use App\Hooks as Hook;
```

In order to register a Hook you need to instanciate the Hook\Handler class and use the "on" method:

```PHP
$hookObj = new Hook\Handler;
$hookObj->on("test", function(){
	dump("Hey, this hook works!");
});
```

To use it, just call this Hook somewhere else:

```PHP
new Hook\Handler("test");
```
