# Slim Framework 3 Hello World

Simple app for profile testing. Has a Vagrant VM to make life easier.

It is a slightly tweaked version of what you get when you run:

    composer create-project -s dev slim/slim mytestapp dev-develop

## composer install

Note that you have to run `composer install` yourself - the vagrant provisioning doesn't do it for you.

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


## Ngrok

To expose the profiler information to the Internet via ngrok:

    ngrok -subdomain profiler-profile-test profile-test.dev:80

Obviously if that subdomain is in use, then you'll need to create a different one and edit the `server_ngrok_alias` setting in `vm-provisioning/variables.yml` and then `vagrant provision`.
