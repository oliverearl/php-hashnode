[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]

<!-- PROJECT LOGO -->
<br />
<p align="center">
  <a href="https://github.com/oliverearl/php-hashnode">
    <img src=".github/PHP-Hashnode.png" alt="PHP Hashnode" height="500" width="500">
  </a>

<h3 align="center">Unofficial Hashnode API Wrapper for PHP</h3>

  <p align="center">
    A lightweight, object-oriented library for interacting with Hashnode's GraphQL API.
    <br />
    <a href="https://github.com/oliverearl/php-hashnode/tree/master/docs"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://github.com/oliverearl/php-hashnode/tree/master/examples">View Examples</a>
    ·
    <a href="https://github.com/oliverearl/php-hashnode/issues">Report Bug</a>
    ·
    <a href="https://github.com/oliverearl/php-hashnode/issues">Request Feature</a>
  </p>

<!-- TABLE OF CONTENTS -->
<details open="open">
  <summary><h2 style="display: inline-block">Table of Contents</h2></summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgements">Acknowledgements</a></li>
  </ol>
</details>

## About The Project

### Built With

* [PHP GraphQL Client](https://github.com/mghoneimy/php-graphql-client)

* [PHP GraphQL OQM](https://github.com/mghoneimy/php-graphql-oqm)

* [PHPUnit](https://phpunit.de/) and [Faker](https://www.github.com/fzaninotto/faker) for testing.

## Getting Started

To get a local copy up and running follow these simple steps.

### Prerequisites

* [PHP 7.4 or greater](https://php.net)

* [Composer](https://getcomposer.org)

### Installation

1. Clone the repo

   ```sh
   git clone https://github.com/oliverearl/php-hashnode.git
   ```

2. Install Composer packages

   ```sh
   composer install
   ```

This library will be made available for install via Composer once it has reached a more complete state.

## Usage

After installation, the library is ready to use out-of-the-box. A client instance and GraphQL root query object can be made like thus:

```php
$client = new Hashnode();

$query = new RootQuery();
```

If you wish to specify an override for the default Hashnode endpoint, and/or specify your Hashnode API token (if you need one, you can get one [here](https://hashnode.com/settings/developer)) you can add them as constructor parameters. **You don't need an API token for most operations at present.**

```php
$client = new Hashnode('https://some-alternative-endpoint.hashnode.com', [
  'Authorization' => 'my-api-key-goes-here'
]);
```

Remember when interacting with GraphQL APIs, you have to specifically indicate what information you want to request. If you wanted to request a stories feed with a title, date, and the author's username, you could do something like this:

*(Also, this is assuming you utilise 'use statements' and don't have to resolve namespaces fully.)*

```php
$query->selectStoriesFeed((new RootStoriesFeedArgument())->setType('NEW'))
    ->selectTitle()
    ->selectDateAdded()
    ->selectAuthor((new AuthorArgument()))
    ->selectUsername();

$results = $client->runQuery($query->getQuery())->getData();
```

_For more examples, please refer to the [Documentation](https://github.com/oliverearl/php-hashnode/tree/master/docs) or check available [examples](https://github.com/oliverearl/php-hashnode/tree/master/examples)._

## Roadmap

The following is on the roadmap for upcoming releases:

* API behaviours that require an API key (creating, updating, deleting)

* Changes to make the library easier to use and potentially less dependent on the underlying GraphQL libraries

* Cleaner, less lasagna-like code

* Integration PHPUnit tests

Also, see the [open issues](https://github.com/oliverearl/php-hashnode/issues) for a list of user-proposed features (and known issues).

## Contributing

Contributions are what make the open source community such an amazing place to be learn, inspire, and create. Any contributions you make are **greatly appreciated**.

### Particularly welcome contributions

* Bugfixes and beneficiary changes to existing functionality.

* New functionality that fulfills unimplemented areas of the API.

* Enhancements to existing or production of additional PHPUnit tests.

* Documentation, both in the source code and in the `docs` directory.

* Examples of the library in use within the `examples` directory.

### Instructions

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## Testing

The suite of PHPUnit tests can be run with `composer run test` at your terminal, assuming a full installation of Composer.

Alternatively, you can retrieve easy-to-read *testdox* by running `composer run testdox`.

## License

Distributed under the MIT License. See `LICENSE` for more information.

## Contact

Oliver Earl - [@compscioliver](https://twitter.com/compscioliver) - oliver@oliverearl.co.uk

Project Link: [https://github.com/oliverearl/php-hashnode](https://github.com/oliverearl/php-hashnode)

## Acknowledgements

* [Mostafa Ghoneimy et al for the underpinning GraphQL technologies.](https://github.com/mghoneimy)

* [The amazing people over at Hashnode.](https://www.hashnode.com)

* [Hashnode's GraphQL API](https://api.hashnode.com)

* [Othneil Drew for the README template](https://github.com/othneildrew/Best-README-Template)

[contributors-shield]: https://img.shields.io/github/contributors/oliverearl/php-hashnode.svg?style=for-the-badge
[contributors-url]: https://github.com/oliverearl/php-hashnode/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/oliverearl/php-hashnode.svg?style=for-the-badge
[forks-url]: https://github.com/oliverearl/php-hashnode/network/members
[stars-shield]: https://img.shields.io/github/stars/oliverearl/php-hashnode.svg?style=for-the-badge
[stars-url]: https://github.com/oliverearl/php-hashnode/stargazers
[issues-shield]: https://img.shields.io/github/issues/oliverearl/php-hashnode.svg?style=for-the-badge
[issues-url]: https://github.com/oliverearl/php-hashnode/issues
[license-shield]: https://img.shields.io/github/license/oliverearl/php-hashnode.svg?style=for-the-badge
[license-url]: https://github.com/oliverearl/php-hashnode/blob/master/LICENSE
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/oliverearl
