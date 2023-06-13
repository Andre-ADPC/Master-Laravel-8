<!-- @format -->

# Project Tree

This tree was limited to a depth of two sub-directories by using the following Shell Command:
`tree-extended -max=2 -charset=utf8-icons`

If the full tree is required, simply remove the `-max="n"` switch.

If "hot-linking" from this Markdown file is required there are various options that can be implemented, namely:

- A manual editing approach, or
- Using an automated script package which will convert the `tree` command to conform to various `sed` switches and then parse and print the results into a target Markdown file.

> The Script Packages found sofar are not as flexible and reliable as one would normally wish for, so this is a small side project for the future. - A.Du Plessis

Doing a manual edit on a few entries on the tree shown below:

---

```xml
├───📁 .git/
│   ├───📁 fsmonitor--daemon/
│   ├───📁 hooks/
│   ├───📁 info/
│   ├───📁 logs/
│   ├───📁 objects/
│   ├───📁 refs/
│   ├───📄 COMMIT_EDITMSG
│   ├───📄 config
│   ├───📄 description
│   ├───📄 FETCH_HEAD
│   ├───📄 HEAD
│   ├───📄 index
│   ├───📄 ORIG_HEAD
│   └───📄 packed-refs
├───📁 [.vscode/](.vscode)
│   └───📄 settings.json
├───📁 app/
│   ├───📁 Console/
│   ├───📁 Exceptions/
│   ├───📁 Http/
│   ├───📁 Models/
│   └───📁 Providers/
│   └───📄 autoload.php
^
// . . .

^
├───📄 .editorconfig
├───📄 .env
├───📄 .env.example
├───📄 .gitattributes
├───📄 .gitignore
├───📄 .styleci.yml
├───📄 artisan
├───📄 composer.json
├───📄 composer.lock
├───📄 Make Git Tree.txt
├───📄 package-lock.json
├───📄 phpunit.xml
├───📄 README.md
├───📄 server.php
└───📄 webpack.mix.js
```

[SO](http://s.tk/) - Prefixed by four spaces
Monospace
111111111

```
[SO](http://s.tk/)  - Prefixed by four spaces
Monospace
111111111
```

Using <a>href=""</a> HTML Tags to put links inside "pre" blocks.
**Does work, but does not render as a `code block` would.**

 <pre>
 <strong><a href="https://stackoverflow.com/questions/41132305/gitbook-is-it-possible-to-create-links-in-code-blocks/41132443#41132443">SO - Prefixed by an href tag.</a></strong>
 Monospace
 111111111
 </pre>

Using a Block Quote approach gives a similar effect as a codeblock though, and Monospace Fonts are applied.

> <pre>
> <strong><a href="https://stackoverflow.com/questions/41132305/gitbook-is-it-possible-to-create-links-in-code-blocks/41132443#41132443">SO - Prefixed by an href tag.</a></strong>
> Monospace
> 111111111
> </pre>

**Does not work**

<pre>
<code>
<a href="https://stackoverflow.com/questions/41132305/gitbook-is-it-possible-to-create-links-in-code-blocks/41132443#41132443">SO - Prefixed by an href tag.</a>
Monospace
111111111

[SO](http://s.tk/)  - Prefixed by four spaces
Monospace
111111111
</code>
</pre>

**Does not work**

<pre>
[SO](http://s.tk/)  - Prefixed by four spaces
Monospace
111111111
</pre>

> <pre>
> ├───📁<a href=".git/"><strong>.git/</strong></a>
> │   ├───📁 fsmonitor--daemon/
> │   ├───📁 hooks/
> │   ├───📁<a href=".git/info/"><strong>info/</strong></a>
> │   ├───📁 logs/
> │   ├───📁 objects/
> │   ├───📁 refs/
> │   ├───📄 COMMIT_EDITMSG
> │   ├───📄 config
> │   ├───📄 description
> │   ├───📄 FETCH_HEAD
> │   ├───📄 HEAD
> │   ├───📄 index
> │   ├───📄 ORIG_HEAD
> │   └───📄 packed-refs
> ├───📁<a href=".vscode/"><strong>.vscode/</strong></a>
> │   └───📄 settings.json
> 
> </pre>
