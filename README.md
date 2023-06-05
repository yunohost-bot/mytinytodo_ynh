<!--
N.B.: This README was automatically generated by https://github.com/YunoHost/apps/tree/master/tools/README-generator
It shall NOT be edited by hand.
-->

# myTinyTodo for YunoHost

[![Integration level](https://dash.yunohost.org/integration/mytinytodo.svg)](https://dash.yunohost.org/appci/app/mytinytodo) ![Working status](https://ci-apps.yunohost.org/ci/badges/mytinytodo.status.svg) ![Maintenance status](https://ci-apps.yunohost.org/ci/badges/mytinytodo.maintain.svg)

[![Install myTinyTodo with YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=mytinytodo)

*[Lire ce readme en français.](./README_fr.md)*

> *This package allows you to install myTinyTodo quickly and simply on a YunoHost server.
If you don't have YunoHost, please consult [the guide](https://yunohost.org/#/install) to learn how to install it.*

## Overview

Simple way to manage your todo lists. 

### Features

- Multiple lists
- Task notes
- Tags (and tag cloud)
- Due dates
- Priority (-1, 0, +1, +2)
- Different sortings including sort by drag-and-drop
- Search
- Password protection
- Smart syntax improves creation of tasks
      (usage: /priority/ Task /tags/)
- Print-friendly CSS
- Style for mobiles devices 


**Shipped version:** 1.7.3~ynh3

**Demo:** https://www.mytinytodo.net/demo/

## Screenshots

![Screenshot of myTinyTodo](./doc/screenshots/shot-v14b1.png)

## Documentation and resources

* Official app website: <http://www.mytinytodo.net/>
* Official admin documentation: <https://www.mytinytodo.net/faq.php>
* Upstream app code repository: <https://github.com/maxpozdeev/mytinytodo>
* YunoHost documentation for this app: <https://yunohost.org/app_mytinytodo>
* Report a bug: <https://github.com/YunoHost-Apps/mytinytodo_ynh/issues>

## Developer info

Please send your pull request to the [testing branch](https://github.com/YunoHost-Apps/mytinytodo_ynh/tree/testing).

To try the testing branch, please proceed like that.

``` bash
sudo yunohost app install https://github.com/YunoHost-Apps/mytinytodo_ynh/tree/testing --debug
or
sudo yunohost app upgrade mytinytodo -u https://github.com/YunoHost-Apps/mytinytodo_ynh/tree/testing --debug
```

**More info regarding app packaging:** <https://yunohost.org/packaging_apps>
