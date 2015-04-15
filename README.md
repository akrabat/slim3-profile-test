# Slim Framework 3 Hello World

Simple app for profile testing. Has a Vagrant VM to make life easier.

It is a slightly tweaked version of what you get when you run:

    composer create-project -s dev slim/slim mytestapp dev-develop

## Hosts for vagrant VM:

`/etc/hosts` should have:

    192.168.99.16  profile-test.dev
    192.168.99.16  phpmyadmin.profile-test.dev
    192.168.99.16  mailcatcher.profile-test.dev
    192.168.99.16  profiler.profile-test.dev

if you don't have the vagrant-hostsupdater plugin installed.


## URLs:

* `http://profile-test.dev` to view the hellow world page
* `http://profiler.profile-test.dev` to view the XHGUI profiles
