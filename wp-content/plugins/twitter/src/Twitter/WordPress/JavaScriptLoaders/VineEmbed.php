<?php
/*
The MIT License (MIT)

Copyright (c) 2015 Twitter Inc.

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
*/

namespace Twitter\WordPress\JavaScriptLoaders;

/**
 * Load the remotely hosted Vine embed JavaScript
 *
 * @since 1.3.0
 */
class VineEmbed extends AsyncJavaScript
{
	/**
	 * Vine embed JavaScript handle
	 *
	 * Used in WordPress JavaScript queue
	 *
	 * @since 1.3.0
	 *
	 * @type string
	 */
	const QUEUE_HANDLE = 'vine-embed-js';

	/**
	 * Vine embed JavaScript fully-qualified domain name
	 *
	 * Used to prefetch DNS lookup
	 *
	 * @since 1.3.0
	 *
	 * @type string
	 */
	const FQDN = 'platform.vine.co';

	/**
	 * Vine embed JavaScript absolute URI
	 *
	 * @since 1.3.0
	 *
	 * @type string
	 */
	const URI = 'https://platform.vine.co/static/scripts/embed.js';
}
