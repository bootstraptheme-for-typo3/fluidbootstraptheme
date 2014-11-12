# Fluid Theme for Twitter Bootstrap
===

[![Build Status](https://travis-ci.org/bootstraptheme-for-typo3/fluidbootstraptheme.png?branch=master)](https://travis-ci.org/bootstraptheme-for-typo3/fluidbootstraptheme)


## What is it

A collection of Twitter Bootstrap oriented Fluid Content Elements and Page Templates written for `EXT:fluidcontent` and `EXT:fluidpages` using ViewHelpers from `EXT:vhs`.
It uses `EXT:flux`

===

## What does it do?

Provides the template files and TypoScript setup necessary to use the included elements and pages.

===

## How does it do it?

By leveraging the integration logic provided by `EXT:fluidcontent` and `EXT:fluidpages` - enabling use of specially constructed Fluid templates as
content elements, much like the Flexible Content Elements concept from TemplaVoila.

===

## How to install it?

Download, install the extension and include the static TypoScript template in your Roottemplate.
You can use the Constant-Editor to define basic configuration for the extension like Columnwidth etc. If you dont want to use the Constant-Editor to set these globally, you can disable this funktionality by adding `plugin.tx_fluidbootstraptheme.settings.useTypoScript = 0` to your Setup. By doing this, you enable these settings in the properties of each page. 

===

## Dependencies

FluidBootstrapTheme now has a stable release on the TYPO3 Extension Repository (TER). If you use our Development branch FluidBootstrapTheme should also work with all the Development releases of the following dependencies.
<ul>
<li><code>EXT:flux</code></li>
<li><code>EXT:vhs</code></li>
<li><code>EXT:fluidcontent</code></li>
<li><code>EXT:fluidpages</code></li>
</ul>

You can get extensions at http://www.github.com/FluidTypo3

===

## How is it used?

After installation and inclusion of the static TypoScript, the included content elements and will be available as new content element
types and page layouts when inserting new content or creating new pages.

When inserted, each content element contains a special panel with configuration specifying how to render the content element. So do the pages.
After installation and inclusion of the static TypoScript configuration, a new group of templates is added to the page template
selection boxes in page properties - configurable with a page template to use for all subpages, just like TemplaVoila.

===


## References

* https://github.com/FluidTYPO3/fluidcontent is a dependency - it is the integration necessary to render Fluid Content Elements
* https://github.com/FluidTYPO3/fluidpages is a dependency - it is the integration necessary to render Fluid Page Templates
* https://github.com/FluidTYPO3/vhs is dependency providing many ViewHelpers used in the Fluid Content Element and Page templates
* https://github.com/FluidTYPO3/flux is a dependency and is used to configure how the content template variable are defined.

===

## Some Screenshots
**Pagetemplates:**

![image](http://snag.gy/9FHKC.jpg)

===
**Content Elements:**

![image](http://snag.gy/xbWUz.jpg)

===
**Grids:**
![image](http://snag.gy/YMayQ.jpg)
