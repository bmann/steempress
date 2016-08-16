<?php

// set the language
$app['locale'] = 'en';

// set the steem json-rpc that we're going to request data from
$app['steemd'] = 'https://steem.steemstats.com';

// theme configuration
$app['theme'] = 'sosimple';

// what type of posts should we load?
$app['steem'] = [
  // an array of users allowed to appear
  'accounts' => ['bmann'],
  // an array of tags to ensure exist
  'tags' => [
    'steemstats',
  ],
];

$app['site'] = [

# Site wide configuration

'title' => 'Site Title',
# locale: en_US
'description' => 'Describe your website here.',
'logo' => 'site-logo.png',
# 'search' => true,
# 'url' => 'localhost:3000',
'url' => 'http://bmann-steempress.herokuapp.com',

# Site owner
# owner:
  'name' => 'Boris Mann',
  'avatar' => 'bio-photo.jpg',
  'email' => 'boris@bmannconsulting.com',
  'disqus-shortname' => '',
  'steemit' => 'bmann', #username
  'twitter' => 'bmann', #username
  'facebook' => 'bmann', #username
  'github' => 'bmann', #username
  # stackexchange: #http://stackoverflow.com/users/123456/username
  # linkedin: #username
  # instagram: #username
  # flickr: #username
  # tumblr: #username
  # pinterest: #username
  # weibo: #userid
  # google:
  #  plus: #username
  #  analytics:
  #  verify:
  #  ad-client:
  #  ad-slot:
  # bing-verify:
];
