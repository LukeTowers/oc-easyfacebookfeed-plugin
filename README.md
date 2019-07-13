**NOTE**: This is a public mirror of a paid plugin used for support and accepting translation PRs. This is not runnable code.

# About

Adds the ability to display and interact with a Facebook Page feed. Posts are pulled from Facebook and stored locally in the database before being rendered by the Feed component allowing you to precisely control what appears on your website.

This plugin will save you ~15 hours of development by greatly simplifying the experience of getting setup with a FB Page Access Token, syncing the FB feed with your website, and providing a clean backend interface for precise control over the posts displayed on your site.

# Syncing your feeds

All feeds are synced daily by default. You can change the frequency of the syncing process by [overriding the plugin's configuration](https://octobercms.com/docs/plugin/settings#file-configuration) by copying the default configuration file (in `yourproject/plugins/luketowers/easyfacebookfeed/config/config.php`) to `yourproject/config/luketowers/easyfacebookfeed/config.php` and changing the configuration as desired.

>**NOTE:** In order for automatic syncing to occur you must have [setup the scheduler](https://octobercms.com/docs/setup/installation#crontab-setup) when you installed OctoberCMS.

You are also able to run the following console command to manually sync all or specific feeds as desired:

```bash
php artisan facebook:sync code-for-feed --full
```

By default running the command without providing a specific feed (via `code-for-feed`) will sync all of your feeds. Also, by default (unless you have passed the `--full` option), the sync will be a shallow one; i.e. only the 100 most recent posts are synced. If you pass `--full`, all posts will be synced.

# Installation

To install from the [Marketplace](https://octobercms.com/plugin/luketowers-essentialvars), click on the "Add to Project" button and then select the project you wish to add it to and pay for the plugin. Once the plugin has been added to the project, go to the backend and check for updates to pull in the plugin.

To install from the backend, go to **Settings -> Updates & Plugins -> Install Plugins** and then search for `LukeTowers.EasyFacebookFeed`.

After installing the plugin you will need to setup at least one feed to get started. Go to `example.com/backend/luketowers/easyfacebookfeed/feeds` to setup your first feed. Click the "New Feed" button and follow the instructions to get your Facebook Page ID, App ID, App Secret, and Page Access Token.

>**NOTE:** In order for automatic syncing to occur you must have [setup the scheduler](https://octobercms.com/docs/setup/installation#crontab-setup) when you installed OctoberCMS. If you haven't already, make sure you do so as a part of the installation process for this plugin.

# Component: Facebook Feed (fbFeed)

## Purpose
Displays a feed of posts from a Facebook page.

## Configuration:

Property | Inspector Name | Description
-------- | -------------- | -----------
`feed` | Feed | The ID of the pre configured Facebook Page Feed to use
`limit` | Maximum posts to display | The maximum number of posts to display from the feed at once
`types` | Types of posts to display | The types of posts that should be displayed from the selected feed.
`order` | Post order | The order that the posts should be displayed in. Options are `desc` (Newest first), `asc` (Oldest first), or `random` (Random order)

### Type Options:
Code | Description
---- | -----------
`album` | Photo albums
`event` | Events
`map` | Shared location posts
`multi_share` | Shared posts
`photo` | Photos
`share` | Links
`status` | Posts
`video_inline` | Videos

## Component properties

Variable | Type | Description
-------- | ---- | -----------
`__SELF__.items` | `Collection` | Collection of `LukeTowers\EasyFacebookFeed\Models\FeedItem` models representing the feed items

## Default output

The default component partial outputs a containing `div` that holds a separatly rendered `div` for each item in the feed depending on that item's type:

```html
<div class="fbfeed_container">
    {% for item in __SELF__.items %}
        <div class="fbfeed-item item-{{ item.type }}">
            {% partial '@item-' ~ item.type ~ '.htm' item=item %}
        </div>
    {% endfor %}
</div>
```

Overriding either the default partial or any of the item type specific partials for your specific use case is easy by following the [OctoberCMS documentation](https://octobercms.com/docs/cms/components#overriding-partials).