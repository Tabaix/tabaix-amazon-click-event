# Tabaix Amazon Click Event

A WordPress plugin that sends a Google Analytics 4 event named `amazon_click` whenever a visitor clicks an outbound Amazon affiliate link, so the click can be used as a Key Event (conversion) in Google Analytics. Tiny, dependency-free, no data stored.

Built for [tabaix.com](https://tabaix.com/). Free to use and share.

## Features

- **One event** — every click on an outbound Amazon affiliate link fires `amazon_click` in GA4.
- **Key Event ready** — mark `amazon_click` as a Key Event in GA4 and Amazon clicks count as conversions, with no other setup.
- **Tiny** — a single small file, no settings page, no database writes, no data stored.

## Requirements

- WordPress with Google Analytics 4 already installed on the site (for example via Site Kit). No extra libraries — the plugin only uses core WordPress functions.

## Installation

1. Download the [latest release](https://github.com/Tabaix/tabaix-amazon-click-event/releases) (or clone this repo).
2. Upload the `tabaix-amazon-click-event` folder to `/wp-content/plugins/`, **or** in WP Admin go to **Plugins > Add New > Upload Plugin** and install the ZIP.
3. Activate **Tabaix Amazon Click Event**. There is no settings page — it works as soon as it is active.

## Usage

1. In GA4, open **Admin > Data display > Events**, find `amazon_click`, and mark it as a **Key Event**.
2. Click an Amazon link on the site and check **Reports > Realtime** — the `amazon_click` event appears with the link as its parameter.

## FAQ

**Clicks are not showing in GA4. What do I check first?**
Check that GA4 itself is firing on the page (a debug view or Realtime report with any event). This plugin only adds the click listener — if the GA4 tag is missing, there is nothing to send the event to.

**Does it track non-Amazon links?**
No. Only outbound Amazon affiliate links fire the event.

## Links

- [tabaix.com](https://tabaix.com/)
- [Tabaix agency portfolio](https://agency.tabaix.com/portfolio/)

## Changelog

### 1.0.0

- Initial public release: `amazon_click` GA4 event on outbound Amazon affiliate link clicks.

## License

GPL-2.0-or-later — see https://www.gnu.org/licenses/gpl-2.0.html
