ect_toolbox
===================

<b>Contentelements</b>

Adds the following elements:

1) Font Awesome - Icon Element.<br>
2) Schema.org - Element for Person and Organisation.<br>
3) Separator.<br>
4) Add FontAwesome to Contentelement List<br>
5) Header Modul<br>
<ul>
<li>Insert Logo</li>
<li>Insert Phone and Adress Link</li>
<li>Insert Social Media Buttons</li>
<li>Insert own html code</li>
</ul>

<b>Mobile Navigation</b>

Add the SuperFish Slow-Down Menu to Contao
http://users.tpg.com.au/j_birch/plugins/superfish/
https://github.com/joeldbirch/superfish/


Add the mobile navigation Sidr to Contao (OFF CANVAS)
https://github.com/artberri/sidr
 
You need to create the Button as HTML Element or in a template.
```html
<a id="responsive-menu-button" href="{{env::request}}#sidr-main"></a>
```

<b>Responsive Behavior</b>

Module generates CSS Class for responsive behavior.

Adds: Width-Selection, Border-Selection, Bottom Line, Force New Row

Special CSS needed...