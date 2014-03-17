Fluid Page Templates for Twitter Bootstrap
==========================================

> An extension providing a set of specially formatted Fluid templates usable as page templates enabled by `EXT:fluidpages`

[![Build Status](https://travis-ci.org/FluidTYPO3/fluidpages_bootstrap.png?branch=master)](https://travis-ci.org/FluidTYPO3/fluidpages_bootstrap)

## What does it do?

Provides a set of template files and static TypoScript necessary to include and use those templates as page templates.

## How does it do it?

By leveraging the integration logic provided by `EXT:fluidpages` - enabling use of specially constructed Fluid templates as
page templates, much like TemplaVoila page templates.

## How is it installed?

Download, install the extension and include the static TypoScript configuration.

## How is it used?

After installation and inclusion of the static TypoScript configuration, a new group of templates is added to the page template
selection boxes in page properties - configurable with a page template to use for all subpages, just like TemplaVoila.

## References

* https://github.com/FluidTYPO3/flux is a dependency and is used to configure how the content template variable are defined.
* https://github.com/FluidTYPO3/vhs is a highly suggested companion extension for creating Fluid Page templates
* https://github.com/FluidTYPO3/fluidpages_bootstrap is a collection of Fluid Page templates written for Twitter Bootstrap using
  VHS ViewHelpers
