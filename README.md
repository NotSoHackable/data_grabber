# Data Grabber

Data Grabber is a WordPress plugin that provides a simple way to make requests to other URLs via HTTP/HTTPS using the "wp_remote_get" function. This script is intended to be used as a proof of concept to illustrate the impact SSRF vulnerabilities and should not be used in production environments.

## Plugin Information

    Plugin Name: Data Grabber
    Plugin URI: https://www.notsohackable.com
    Description: A simple plugin that grabs data from a URL.
    Version: 1.0
    Author: Tom Large
    Author URI: https://www.notsohackable.com
    License: GPL2

## Installation

1. Clone this repository to your local machine.
2. Log in to your WordPress dashboard.
3. Go to the 'Plugins' page and click on the 'Add New' button.
4. Click on the 'Upload Plugin' button at the top of the screen.
5. Click the 'Choose File' button and select the zip file containing the plugin code.
6. Click the 'Install Now' button to begin the installation.
7. After the plugin is installed, click the 'Activate Plugin' button to activate it.

## Usage

To use this plugin, simply add the URL you want to make a request to as a parameter in the query string. For example, to make a request to `https://www.example.com` you would visit `https://your-wordpress-site.com/?url=https://www.example.com`

Note that this plugin does not perform any validation on the URL parameter, so it is susceptible to SSRF attacks. It is recommended that you do not use this plugin in production environments.


## License

This plugin is licensed under the GPL2 License - see the LICENSE file for details.
