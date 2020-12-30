# Torque LFC Theme

This is a MediaWiki skin for [Lever for
Change](https://www.leverforchange.org/) Torque instances.  It is
based loosely on the LFC web site and on their [Bold Solutions
Network](https://solutions.leverforchange.org/).


## Installing

To install this theme, clone this repository into the `skins/` directory of
your mediawiki instance under the name `LFC/`. Then update your
`LocalSettings.php` to load the skin by its name `LFC` as below

```php
...
$wgDefaultSkin = "LFC";

wfLoadSkin("LFC");
```