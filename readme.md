# Kirby Forum

This is the future version of Kirby's support forum.
The new version will be located at http://forum.getkirby.com

The content is not entirely up to date with the current version of the forum.

This repository serves as a central place for all forum updates as well as a demo installation of Kirby's forum software.

## Installation

If you want to play with Kirby's forum software, simply install it like this:

```
git clone --recursive https://github.com/getkirby/forum.getkirby.com.git
```

1. Make sure to create a `site/accounts` folder which is writable
2. Create a `site/config/config.php` and add the following config variables: 

```
c::set('forum.token', 'random-secret-token');
c::set('forum.twitter.key', 'your api key');
c::set('forum.twitter.secret', 'your api secret');
c::set('forum.users.banned', array('banned-username'));
c::set('forum.users.admins', array('your-username'));
```

In order to get a Twitter api key, please register an app here: https://apps.twitter.com/
Without a valid API key, the login for the forum won't work. 

Add your username to the array of admins in order to get additional permissions while moderating topics and replies. 
