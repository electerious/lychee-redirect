# Redirect

Redirect is a extension for [Lychee](https://github.com/electerious/Lychee), which redirects the user to an album inside Lychee. Or with other words: It turns an album-name into an album-id.

## Installation

This extension requires a working [Lychee](https://github.com/electerious/Lychee) on your computer or server.

Navigate to the plugin-folder (`plugins/`) of your Lychee and run the following command:

	git clone https://github.com/electerious/lychee-redirect.git redirect
	
Open the new folder, copy the `config.sample.ini` and rename the copy to `config.ini`. Than open the INI and fill the properties with your configuration.

## How to use

Open your browser and enter the address to the redirect-folder. Append `?name={albumname}` to the end of the URL. Make sure that you replace `{albumname}` with a name of an album in your Lychee. The complete URL could look like this:

	http://lychee.example.com/plugins/redirect/?name=test
	
The script will redirect you to the corresponding album in Lychee.

## Troubleshooting

Discovered a bug? Please create an issue here on GitHub!

## License

(MIT License)

Copyright (C) 2014 [Tobias Reich](http://electerious.com)  

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
