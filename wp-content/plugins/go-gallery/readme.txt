=== Go Gallery ===
Contributors: alvimedia, emtly
Tags: gallery, foto, photo, image, picture, album, slide, fancybox, sortable, filterable, grid, masonry, media, lightbox, mosaic, showcase, view, responsive, thumb, photoalbum, photogallery, photoset, prettyphoto, images, albums, pictures, photos, slides, thumbnails, gogallery
Requires at least: 3.8
Tested up to: 5.0.2
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Responsive filterable gallery. Easy to use, lightweight yet very powerful shortcode driven gallery plugin to display beautiful galleries.

== Description ==

* Live Demo: [Live Demo](http://alvimedia.com/go-gallery/lte-demo/ "Live Demo")
* QuickStart: [QuickStart](http://alvimedia.com/go-gallery/quickstart/ "QuickStart")

This plugin has been created to display beautiful and functional grid galleries with minimum configuration effort and without slowing down your page load.

Go Gallery is a powerful responsive and filterable grid gallery wordpress plugin. You can change spacings, frames, colors, etc. by simply adjusting settings directly in shortcodes. Unlimited number of galleries with different settings can be used on any page or in posts.

Go Gallery is optimized for speed. Configuration is fast and simple, everything can be done just by putting gallery shortcode(s) to the page.

Go Gallery enables categories in media images and adds filter menu to each gallery for easy and beautiful sorting.

If you interrested in a new beautiful Image Slider based on same concept of Image Categories you can find it here:

* Go Slider: [Go Slider](https://wordpress.org/plugins/go-slider/ "Go Slider")

The idea behind this plugin:

Can you imagine that there's no categories and all posts has to be manually organized? and every time you add new post you'll also have to add it manually to your blog and other page(s) otherwise it won't show up? sounds ridicules isn't it but why we keep doing this with the image galleries?

Every time you add new image to the media library it also has to be added to all galleries where you want to display it. Creating sortable galleries is even more difficult. Because media files doesn't have categories images in the galleries has to be manually organized.

With this revolutionary plugin you can setup gallery on any page and it will work without further modifications, all new images will be added automatically to it. We make it possible by adding categories to the media library.

Your galleries will be runtime sortable and you can decide what image categories to display in each gallery. Just keep adding images and categorize them same way you doing with normal wordpress posts.

[youtube https://www.youtube.com/watch?v=UJHSi1vsxYU]

= Features: =

 * 100% Responsive - Works on any mobile device
 * Media Categories - Unlike most others Go Gallery let you organize standard Media Library images into categories.
 * Masonry Grid - No columns!
 * Gallery Category Sort Menu - Categorized images can be filtered by user
 * Short-Codes Driven - Easy to use inline shortcode params
 * Caption Effect - MouseOver effects on/off
 * Unlimited Galleries on Page - Add as much categories and galleries on any page
 * Works with your favorite Lightbox plugin (or use the packaged PrettyPhoto)
 * SEO friendly
 * Easy to use

== Understanding Media Categories ==

Go Gallery enables Categories to Media Library Images. All images you want to display with Go Gallery has to be categorized. You will notice that Media Library now has one more column to display Media Category for each image.

Go Gallery will display images by their Categories. Categorizing images is a simple and straight-forward procedure and it is similar to categorizing your post.

You can add more Media Categories directly in Image Edit or in Media Categories:

== ShortCode OPTIONS List ==

Usage: [go_gallery OPTION1='use quotes for text values OPTIONS space separated' OPTION2=1]

 * go_gallery = Go Gallery opening shortcode all params follows space separated
 * cat = 'category1, category2, …' – comma separated list of media categories to display
 * size = 'large/medium/small/tiny' – size of the gallery grid: (large – 2 columns, medium – 3 columns, small – 4 columns, tiny – 8 columns)
 * border_size = size (in pixels) of the image border
 * border_color = color ‘#HTML’ of the image border
 * gap = size (in pixels) of the gutter between images
 * bg = color ‘#HTML’ of the gallery background
 * overlay_color = color ‘#HTML’ of the image hover overlay
 * desc_color = color ‘#HTML’ of the overlay text description
 * menu_button = ‘caption’ of the 'Reset Sorting' button, first in sorting menu, default 'All'
 * menu_show = ‘yes/no’ or 1/0
 * menu_pos = ‘center/left/right’ – menu position; works only when menu_show is 1 or ‘yes’
 * menu_gap = size (in pixels) of the gutter between menu buttons
 * menu_color = color ‘#HTML’ of the menu font
 * menu_bg = color ‘#HTML’ of the menu buttons (background)
 * menu_bg_hover = color ‘#HTML’ of the menu buttons on hover and focus (background)
 * hover_data = ‘yes/no’ enables/disables image caption on mouse over (hover); default: ‘yes’
 
 ADVANCED OPTIONS:
 
 * limit = 1-200 – number of images to display (in total)
 * lightbox = ‘yes/no’ enables/disables custom lightbox on image click; default: ‘yes’

You can add image caption by editing Image info.

== Short Codes Usage Examples: ==

= Large Original Gallery ShortCode:: =

[go_gallery cat='single, couple' size='large']

= Large Squared Gallery ShortCode:: =

[go_gallery cat='single, couple' size='large' style='squared' menu_button='RESET FILTER']

= Medium Gallery ShortCode:: =

[go_gallery cat='single, couple' size='medium' gap=5 border_size=0 bg='#fff' menu_show=0]

= Small Gallery ShortCode:: =

[go_gallery cat='single, couple' size='small' gap=20 border_size=10]

= Tiny Gallery ShortCode:: =

[go_gallery cat='single, couple' size='tiny']

= No Gutters No Borders Gallery ShortCode:: =

[go_gallery cat='single, couple' size='large' gap=0 border_size=0 menu_show=0]

= No Gutters No Borders Medium Gallery with some advanced menu options ShortCode:: =

[go_gallery cat='single, couple' size='medium' gap=0 border_size=0 menu_show=1 bg='#fff' menu_pos='center' menu_color='#fff' menu_bg='#999' menu_bg_hover='#f00' menu_gap=0 limit=12]

= Compatibility =

 * WordPress 3.8+
 * WooCommerce 2.2+
 * BBpress 2.0+
 * BuddyPress 2.0+

= Compatible Browsers =

 * IE8+
 * Edge
 * Firefox
 * Safari
 * Opera
 * Chrome
 * iOS browser
 * Android browser

== Installation ==

**This section describes how to install the plugin and get it working**


= Automatic installation (easiest way) =

To do an automatic install of go-gallery, log in to your WordPress dashboard, navigate to the Plugins menu and click Add New.

In the search field type "go-gallery" and click Search Plugins. Once you have found it you can install it by simply clicking "Install Now".

= Manual installation =

**Uploading in WordPress Dashboard**

1. Download `go-gallery.zip`
2. Navigate to the 'Add New' in the plugins dashboard
3. Navigate to the 'Upload' area
4. Select `go-gallery.zip` from your computer
5. Click 'Install Now'
6. Activate the plugin in the Plugin dashboard

**Using FTP**

1. Download `go-gallery.zip`
2. Extract the `go-gallery` directory to your computer
3. Upload the `go-gallery` directory to the `/wp-content/plugins/` directory
4. Activate the plugin in the Plugin dashboard

The WordPress codex contains [instructions on how to install a WordPress plugin](http://codex.wordpress.org/Managing_Plugins#Manual_Plugin_Installation).

== Frequently Asked Questions ==

= How it works and where is documentation? =
Go Gallery is Short-Code driven, plugin enable Media Categories for visual sorting purposes. You can find how to apply categories to the images and full list of shortcode options here: [QuickStart](http://alvimedia.com/go-gallery/quickstart/  "QuickStart")

= Where is Demo? =
You can find Online Demo here: [Live Demo](http://alvimedia.com/go-gallery/lte-demo/ "Live Demo")

== Screenshots ==

1. Large Original Gallery
2. Large Squared Gallery
3. Medium Gallery - 3 Clumns Gallery
4. No Gutters No Borders Gallery
5. No Gutters No Borders Medium Gallery with some advanced menu options
6. Small Gallery
7. Tiny Gallery
8. Hover effect
9. LightBox
10. Media Categories on Media Page
11. Add Media Categories to the image
12. Manage Media Categories

== Changelog ==

= 1.0 =
* Initial Release

== Upgrade Notice ==
= 1.0 =
* This is the launch version.


