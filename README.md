# suivr

**A friendly fork of [polr](https://github.com/cydrobolt/polr) that adds the link-management API polr never shipped.**

_suivr_ (from the French **suivre**, "to follow", in polr's own dropped-vowel style) walks
in polr's footsteps and carries the trail a little further. Stock polr's v2 API can only
shorten, look up, and report analytics; managing existing links is admin-UI-only. suivr adds
five api-key-protected endpoints so links can be managed programmatically:

| Method | Endpoint | Does |
|--------|----------|------|
| `GET`  | `/api/v2/action/list`   | list your links (admins: all), optional substring filter |
| `POST` | `/api/v2/action/rename` | rename a link ending in place |
| `POST` | `/api/v2/action/update` | change a link's destination URL |
| `POST` | `/api/v2/action/toggle` | enable/disable a link without deleting it |
| `POST` | `/api/v2/action/delete` | delete a link |

All five enforce ownership (you manage your own links; admins manage any; anonymous API
users are refused) and reuse polr's existing `api` middleware, so authentication and quotas
are unchanged. See **[docs/developer-guide/api.md](docs/developer-guide/api.md)** for full
request/response details, and `tests/ApiLinkManagementTest.php` for the test suite.

Credit to [**@technowhizz**](https://github.com/cydrobolt/polr/pull/632) (polr PR #632), whose
delete endpoint this builds on, hardened with ownership checks and extended to the full set.
Addresses long-standing requests [#221](https://github.com/cydrobolt/polr/issues/221),
[#442](https://github.com/cydrobolt/polr/issues/442), and [#538](https://github.com/cydrobolt/polr/issues/538).

Everything below is polr's original README, unchanged. suivr stays a respectful fork: same
license (GPL-2.0+), same architecture, no rename of the upstream project's internals.

---

<img src="https://i.imgur.com/ckI6GTu.png" width="350px" alt="Polr Logo" />


:aerial_tramway: A modern, minimalist, and lightweight URL shortener.

[![GitHub license](https://img.shields.io/badge/license-GPLv2%2B-blue.svg)]()
[![GitHub release](https://img.shields.io/github/release/cydrobolt/polr.svg)](https://github.com/cydrobolt/polr/releases)
[![Builds status](https://travis-ci.org/cydrobolt/polr.svg)](https://travis-ci.org/cydrobolt/polr)
[![Docs](https://img.shields.io/badge/docs-latest-brightgreen.svg?style=flat)](http://polr.readthedocs.org/en/latest/)


Polr is an intrepid, self-hostable open-source link shortening web application with a robust API. It allows you to host your own URL shortener, to brand your URLs, and to gain control over your data. Polr is especially easy to use, and provides a modern, themable feel.

[Getting Started](http://docs.polrproject.org/en/latest/user-guide/installation/) - [API Documentation](http://docs.polrproject.org/en/latest/developer-guide/api/) - [Contributing](https://github.com/cydrobolt/polr/blob/master/.github/CONTRIBUTING.md) - [Bugs](https://github.com/cydrobolt/polr/issues) - [IRC](http://webchat.freenode.net/?channels=#polr)

### Quickstart

Polr is written in PHP and Lumen, using MySQL as its primary database.

 - To get started with Polr on your server, check out the [installation guide](http://docs.polrproject.org/en/latest/user-guide/installation/). You can clone this repository, or download a [release](https://github.com/cydrobolt/polr/releases).
 - To get started with the Polr API, check out the [API guide](http://docs.polrproject.org/en/latest/developer-guide/api/).


Installation TL;DR: clone or download this repository, set document root to `public/`, create MySQL database, go to `yoursite.com/setup` and follow instructions.

### Demo

To test out the demo, head to [demo.polr.me](http://demo.polr.me) and use the following credentials:

- Username: `demo-admin`
- Password: `demo-admin`

### Upgrading Polr
*Upgrading from 1.x:*

There are breaking changes between 2.x and 1.x; it is not yet possible to automatically upgrade to 2.x.

*Upgrading from 2.x:*
 - Back up your database and files
 - Update by using `git pull` or downloading a release
 - Run `composer install --no-dev -o` to ensure dependencies are up to date
 - Migrate with `php artisan migrate` to ensure database structure is up to date

#### Browser Extensions

* Safari - [Polr.safariextension](https://github.com/cleverdevil/Polr.safariextension)

#### Libraries

* Python - [mypolr](https://github.com/fauskanger/mypolr)

#### Acknowledgements
We would like to thank Oregon State University's Open Source Lab for providing resources for our infrastructure. The Polr website and demo are hosted on their infrastructure.

<a href="//osuosl.org"><img height="100em" src="http://i.imgur.com/1VtLxyX.png" /></a>

Thank you to [lastspark](https://thenounproject.com/lastspark/) for providing our logo's icon.

#### Versioning

Polr uses [Semantic Versioning](http://semver.org/)


#### License


    Copyright (C) 2013-2018 Chaoyi Zha

    This program is free software; you can redistribute it and/or
    modify it under the terms of the GNU General Public License
    as published by the Free Software Foundation; either version 2
    of the License, or (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
