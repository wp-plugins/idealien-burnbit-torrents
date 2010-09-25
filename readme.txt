=== Plugin Name ===
Contributors: idealien
Donate link: http://idealienstudios.com
Tags: torrent, media, podcast, torrents, burnbit, bandwidth, idealien
Requires at least: 3.0
Tested up to: 3.0.1
Stable tag: 0.1

Share the bandwidth load of your amazing content and let burnbit.com handle all the technical torrent mumbo jumbo.

== Description ==

Share the bandwidth load of your amazing content with those who enjoy it most by offering a .torrent version in addition 
to a direct download from your WordPress-powered site. Burnbit.com handles all the messy techno-mumbo-jumbo of creating and 
tracking the torrent. You get a shortcode to add to your site and your users get an easy way to support your site through 
reduced bandwidth consumption.

Visit [Burnbit.com](http://burnbit.com/ "If a file exists, there is torrent of it. If not, it will be burned") to learn more about this super simple torrent tracker.

V0.1 of this plugin creates a shortcode of the BurnBit buttons [burnbit.com/buttons](http://burnbit.com/buttons/ "If a file exists, there is torrent of it. If not, it will be burned") which you can use on your site.
Future versions will offer added integration to media-centric plugins like Powerpress / Blubrry for podcasting and more.

== Installation ==

1. Upload 'idealien-torrents.php' to the '/wp-content/plugins/' directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Add the shortcode [burnbit] around your media that you want to torrent: [burnbit]http://thenextstep.podomatic.com/enclosure/2010-08-18T12_52_09-07_00.mp3[/burnbit]
1. You can also specify the style within the shortcode - [burnbit style="normal"], [burnbit style="compact"] or [burnbit style="custom"]. See http://burnbit.com/buttons for full details on the css structure of the custom option.

== Frequently Asked Questions ==

= What is Burnbit? =

Burnbit is an automated torrent metadata creation and management service. You give us a file, we burn your file to a special torrent file powered by the origial server and the peers sharing your torrent. Your torrent is faster, more reliable and easy to share (through our exclusive Download Buttons).

= Are torrents illegal?  =

No, torrents are not illegal. Torrent files merely contains the metadata information which allow you to download the actual files. As such, torrents are not copyrighted. However, the files you download (or upload) through your torrent could be copyrighted. Downloading or distributing copyrighted content in this manner might be illegal depending on your location. Rest assured, at Burnbit we make every effort to ensure the content shared through us are safe and legal. If any copyrighted content slipped through us, feel free to bring them to our attention.

= Why should I burn my file? =

1. <strong>Our torrents are faster:</strong>  When you burn a file here, you are given a special .torrent equivalent of your file that's powered by both the server(s) hosting the file as well as all the regular peers that use your torrent to download the file. It can't get faster than this!
1. <strong>More ways to share:</strong> Every torrent on our site automagically receives an exclusive Download Button complete with live statistics of your torrent file that you can put up on your site allowing easy access for your users.
1. <strong>We make servers happy:</strong> By burning the files on your server to torrents, you substantially reduce the load on your servers since the users downloading your file through your torrent are downloading the file from both their peers and your server. We manage the torrent files leaving your server free to do more important things.
1. <strong>More reliable:</strong> Our torrents are powered by the peers downloading the file as well as several servers hosting the file. This increases the availability and the redundancy of your file as your torrent is powered by multiple fast mirror servers and regular users.

= How can I customize the look of the burnbit buttons? =
Use one of the 3 style options for the button:
* [burnbit style="normal"]
* [burnbit style="compact"]
* [burnbit style="custom"]

If you use the custom entry you will want to add the following styles to your theme with customizations you desire:
`<style type="text/css">
.burnbit_torrent
{
/* styles */
}
.burnbit_seeds
{
/* styles */
}
.burnbit_peers
{
/* styles */
}
</style>`

= I have another question not answered in this FAQ = 
* Visit [burnbit.com/faq](http://burnbit.com/faq/ "If a file exists, there is torrent of it. If not, it will be burned")

== Changelog ==

= 0.1 =
* Its so new and awesome

= 0.2 =
* Coming soon!
