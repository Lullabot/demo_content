#Demo News Content

Enable this module, then created content by doing the following the command line:

```
cd path/to/module
sh create_content.sh
```

This shell script will use Devel Generate to create lorem ipsum content, then pull up that
content and update it by inserting random embedded content into the body of each
news item.

The embedded content is created using a plugin that generates tweets, pins, etc.
It can accept more examples of embedded content in the future. Each type of embedded content
should create an EmbeddedContent plugin and implement the getList method to
return a list of examples of that type of content.