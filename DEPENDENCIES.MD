# DEPENDENCIES TO EXTERNAL LIBRARIES
## List of components to be installed when creating the project skeleton

| LIBRARIES | USE |
| --------- | --- |
| symfony/cache | The Cache component provides an extended PSR-6 implementation as well as a PSR-16 "Simple Cache" implementation for adding cache to your applications. It is designed for performance and resiliency, and ships with ready to use adapters for the most common caching backends, including proxies for adapting from/to Doctrine Cache. [Documentation](https://symfony.com/doc/current/components/cache.html)  |
| symfony/config | The Config component provides several classes to help you find, load, combine, autofill and validate configuration values of any kind, whatever their source may be (YAML, XML, INI files, or for instance a database). [Documentation](https://symfony.com/doc/current/components/config.html) |
| symfony/console | The Console component eases the creation of beautiful and testable command line interfaces. [Documentation](https://symfony.com/doc/current/components/console.html) |
| symfony/debug | The Debug component provides tools to ease debugging PHP code. [Documentation](https://symfony.com/doc/current/components/debug.html)|
| symfony/dependency-injection |The DependencyInjection component implements a PSR-11 compatible service container that allows you to standardize and centralize the way objects are constructed in your application. [Documentation](https://symfony.com/doc/current/components/dependency_injection.html) |
| symfony/dotenv (dev) | The Dotenv Component parses .env files to make environment variables stored in them accessible via getenv(), $_ENV or $_SERVER. [Documentation](https://symfony.com/doc/current/components/dotenv.html) |
| symfony/event-dispatcher | The EventDispatcher component provides tools that allow your application components to communicate with each other by dispatching events and listening to them. [Documentation](https://symfony.com/doc/current/components/event_dispatcher.html) |
| symfony/filesystem | The Filesystem component provides basic utilities for the filesystem. [Documentation](https://symfony.com/doc/current/components/filesystem.html) |
| symfony/finder | The Finder component finds files and directories via an intuitive fluent interface. [Documentation](https://symfony.com/doc/current/components/finder.html) | 
| symfony/flex | The Finder component finds files and directories via an intuitive fluent interface. |
| **symfony/framework-bundle** | The FrameworkBundle defines the main framework configuration, from sessions and translations to forms, validation, routing and more. All these options are configured under the framework key in your application configuration. [Framework configuration reference](https://symfony.com/doc/current/reference/configuration/framework.html) |
| symfony/http-foundation | The HttpFoundation component defines an object-oriented layer for the HTTP specification. [Documentation](https://symfony.com/doc/current/components/http_foundation.html) |
| symfony/http-kernel | The HttpKernel component provides a structured process for converting a Request into a Response by making use of the EventDispatcher component. [Documentation](https://symfony.com/doc/current/components/http_kernel.html) |
| symfony/polyfill-mbstring | This component provides a partial, native PHP implementation for the mbstring PHP extension. [Documentation](https://symfony.com/doc/current/components/polyfill_intl_normalizer.html) |
| symfony/routing | The Routing component maps an HTTP request to a set of configuration variables. [Documentation](https://symfony.com/doc/current/components/routing.html) |
| symfony/yaml | The Yaml component loads and dumps YAML files. [Documentation](https://symfony.com/doc/current/components/yaml.html) |

## Require prod
| LIBRARIES | USE |
| --------- | --- |
| symfony/asset | The Asset component manages URL generation and versioning of web assets such as CSS stylesheets, JavaScript files and image files. |
| symfony/form | The Form component allows you to easily create, process and reuse forms. [Documentation](https://symfony.com/doc/current/components/form.html) |
| symfony/translation |The Translation component provides tools to internationalize your application. [Documentation](https://symfony.com/doc/current/components/translation.html) |
| symfony/twig-bundle | twig |
| symfony\serializer | The Serializer component is meant to be used to turn objects into a specific format (XML, JSON, YAML, ...) and the other way around. |
| symfony/validator | The Validator component provides tools to validate values following the JSR-303 Bean Validation specification. [Documentation](https://symfony.com/doc/current/components/validator.html) |
| doctrine/annotations | PHP Doctrine DocBlock Annotations Parser library that lets you parse structured data out of PHP docblocks for use with other functionality. |

## Require dev

| LIBRARIES | USE |
| --------- | --- |
| symfony/profiler-pack | The profiler is a powerful development tool that gives detailed information about the execution of any request. [Documentation](https://symfony.com/doc/current/profiler.html) |





