///////////// Wordpress Task ///////////////////

The task is not completed fully on 100%. I couldn't find the way pages are predefined with an hreflang or lang attribute. I think this should be available from the interface and not from a script so I looked for such options. I tried dowloading the hreflang plugin but it only added link tags in the head not to the html tag.

1. Copy the full folder wordpress_task in your web server directory
2. Export the wordpress.sql file in your database called wordpress
3. There are 3 pages 
- English
- German
- Spanish

Disclamer: Since I couldn't preset the hreflang I hardcoded a switch function with the id's that are with the suggested language

If you add a new link or remove all links and add a brand new one it will be created with an hreflang attribute with the expected language - en_EN, de or es_ES

If you create a new page and you add a link it will work but it will append the hreflang="en_EN" tag because this is the default one in wordpress.