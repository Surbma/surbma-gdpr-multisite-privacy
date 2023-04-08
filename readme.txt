=== Surbma | GDPR Multisite Privacy ===
Contributors: Surbma, CherryPickStudios
Donate link: https://surbma.com/donate/
Tags: surbma, security, user, multisite, privacy, gdpr, dpo
Requires at least: 5.1
Tested up to: 6.2
Stable tag: 2.0
Requires PHP: 7.0
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A GDPR Multisite plugin, that adds special privileges to a subsite Administrator for Privacy settings.

== Description ==

This plugin is only for Multisite networks! It will give special privileges to every subsite administrator, that has the same email address, what is set as the main email address for that particular subsite. So every subsite can set their own privacy settings and they will have the option to export or remove personal data if required by the user. This is a very important feature if you want to compile with GDPR.

Only one user will get the special capabilities to set and edit the privacy policy page and get access to user data export or removal pages. The user must be an administrator and the user's email address must match with the default email address under Settings page.

### The Problem...

By default, the new Privacy settings introduced in WordPress 4.9.6 is available only for single install Administrators or if you use a Multsiite install, it is available only for Super Admins. There is no default option to enable Privacy settings for subsites. It can be a big problem for you subsite users, because they can not meet the GDPR rules.

### ...and the solution

This plugin will give subsite Administrators access to these new privacy features. Only one administrator will get these new privileges per subsite, who has the same email, that is set under Settings page.

### Other GDPR related plugins by Surbma

- [Surbma | GDPR Proof Cookie Consent & Notice Bar](https://wordpress.org/plugins/surbma-gdpr-proof-google-analytics/)
- [Surbma | GDPR Proof Gravity Forms](https://wordpress.org/plugins/surbma-gdpr-proof-gravity-forms/)

### About Surbma

#### Other Surbma plugins

I have more, than 30 fantastic, FREE plugins in the official WordPress plugin directory. Please check them too here: [Surbma plugins](https://profiles.wordpress.org/surbma#content-plugins)

#### Do you want to contribute or help improving this plugin?

You can find it on GitHub: [https://github.com/Surbma/surbma-gdpr-multisite-privacy](https://github.com/Surbma/surbma-gdpr-multisite-privacy)

#### You can find my other plugins and projects on GitHub

[https://github.com/Surbma](https://github.com/Surbma)

Please feel free to contribute, help or recommend any new features for my plugins, themes and other projects.

#### Do you want to know more about me?

Visit my webpage: [Surbma.com](https://surbma.com/)

#### Do you like and use my free plugins?

You can donate me for FREE here: [Surbma.com](https://surbma.com/donate/)

== Installation ==

### Automatic installation

1. Search for *Surbma | GDPR Multisite Privacy* through Plugins > Add New interface.
2. Find the plugin box of *Surbma | GDPR Multisite Privacy* and click on the "Install Now" button.
3. Then activate the *Surbma | GDPR Multisite Privacy* plugin.
4. That's it. :)

### Manual installation

1. Download [Surbma | GDPR Multisite Privacy](https://downloads.wordpress.org/plugin/surbma-gdpr-multisite-privacy.zip)
2. Upload *Surbma | GDPR Multisite Privacy* through Plugins > Add New > Upload interface or upload surbma-gdpr-multisite-privacy folder to the "/wp-content/plugins/" directory.
3. Activate the *Surbma | GDPR Multisite Privacy* plugin through the "Plugins" menu in WordPress.
4. That's it. :)

== Frequently Asked Questions ==

= How can I give these privileges to other user? =

You need to add administrator role to a user to be able to get these privacy privileges. When you change the default email address under the Settings page, the user will get the new privileges to set and edit the Privacy Policy page and get access to export or remove personal data for users.

= Does it have any security risk for the Multisite network? =

No, it will not have any security risk for the Multisite network. Personal user data export or deletion will affect only the subsite's data.

= What does Surbma mean? =

It is the reverse version of my last name. ;)

== Changelog ==

= 2.0 =

Release date: 2020-02-10

- TWEAK - Tested with WordPress 5.3 version.
- TWEAK - Updated to use a new way to deploy it to wp.org repo.

= 1.4 =

- Some changes in the description.

= 1.3 =

- Network only mode enabled, to avoid single subsite activation.

= 1.2 =

- Some changes in the description.

= 1.1 =

- TWEAK - New unique class namespace.

= 1.0 =

- Initial release.
