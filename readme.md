# [Deprecated] Redirect

Redirect is an extension for [Lychee](https://github.com/electerious/Lychee), which redirects the user to an album inside Lychee. Or with other words: It turns an album-name into an album-id.

## Installation

This extension requires a working [Lychee](https://github.com/electerious/Lychee) v2.5 on your computer or server.

Navigate to the plugin-folder (`plugins/`) of your Lychee and run the following command:

	git clone https://github.com/electerious/lychee-redirect.git redirect
	
Open the new folder, copy the `config.sample.ini` and rename the copy to `config.ini`. Than open the INI and fill the properties with your configuration.

## How to use

Open your browser and enter the address to the redirect-folder. Append `?name={albumname}` to the end of the URL. Make sure that you replace `{albumname}` with a name of an album in your Lychee. The complete URL could look like this:

	http://lychee.example.com/plugins/redirect/?name=test
	
The script will redirect you to the corresponding album in Lychee.

## License

(MIT License)

Copyright (C) 2014 [Tobias Reich](http://electerious.com)
